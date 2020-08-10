 <?php
	class Loan extends MX_Controller 
	{ 
		function __construct()
		{
			parent::__construct();
       $this->load->module('site_security');
      $this->site_security->_make_sure_logged_in();

		}



function index(){
  $this->check_loan();

  $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];

   $submit = $this->input->post('submit');
  
   $status= $query_row['account_status'];

   



   
if($status != 2){
       
        redirect('dashboard/setup');
}else{

  if($submit == 'submit'){

     
      
     //File configuration
        $config['upload_path']          = 'documents/loan';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['max_size']             = 900000;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('collateral')){
         
          //upload was successful
        
          $data = array('upload_data' => $this->upload->data());
          $upload_data = $data['upload_data'];
          $file_name = $upload_data['file_name'];
        }

        if($this->upload->do_upload('collateral2')){

          $data2 = array('upload_data' => $this->upload->data());
          $upload_data2 = $data2['upload_data'];
          $file_name2 = $upload_data2['file_name'];
        }


        
    
        $key = rand(1000000,9999999);
      
         $documents['user_id'] = $user_id;
          $documents['date'] = Date('d-M-Y'); 
          
          // insert into the db
          $documents['amount'] = $this->input->post('amount');
          $documents['bank'] = $this->input->post('bank');
          $documents['account_name'] = $this->input->post('account_name');
          $documents['account_no'] = $this->input->post('account_no');
          $documents['collateral'] = $file_name;
          $documents['collateral2'] = $file_name2;
          $documents['unique_code'] = $key;
          $documents['status'] = 0;         
         
         
         $this->db->insert('loan_requests', $documents);
         redirect('loan/confirm/'.$key);
  }
}



  $this->load->view('loan',$data);
}


function confirm(){
   $this->check_loan();
    $key = $this->uri->segment(3);
    $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];
   $data['lastname']= $query_row['last_name'];
   $data['email']= $query_row['email'];
   $data['home']= $query_row['home_address'];
   $data['work']= $query_row['work_address'];
   $data['phone']= $query_row['phone'];

    $query2 = $this->db->query("SELECT * FROM loan_requests WHERE unique_code = '$key'");
    $query_row2 = $query2->row_array();
    $raw_amount= $query_row2['amount'];
    $data['amount'] = number_format($raw_amount);
    $data['payment_date']= $query_row2['return_date'];
    $data['bank_name']= $query_row2['bank'];
    $data['account_name']= $query_row2['account_name'];
    $data['account_no']= $query_row2['account_no'];
    $data['key']= $query_row2['unique_code'];

    //Interest Calculation
    $cal = $query_row2['amount'];
    $expected_payment= $query_row2['expected_payment'];
    $interest = 0.2 * $cal;

    $data['percentage'] = number_format($interest);
    $raw_expected_balance = $cal + $interest;
    $data['expected_balance'] = number_format($raw_expected_balance);
    $updated_payment = $cal + $interest;


    $this->db->set('expected_payment', $updated_payment, FALSE);
    $this->db->where('unique_code',$key);
    $this->db->update('loan_requests');


   $this->load->view('confirm',$data);
}

function accept()
{
     $this->check_loan();
      $key = $this->uri->segment(3);
      $user_id = $this->site_security->_get_user_id();
      $new_status = 1;

      $query = $this->db->query("SELECT * FROM loan_requests WHERE unique_code = '$key'");
      $numrows = $query->num_rows();
      if($numrows == 1){

        $this->db->set('status', $new_status, FALSE);
      $this->db->where('unique_code',$key);
      $this->db->update('loan_requests');

      }

      
      redirect("dashboard");
}

function cancel(){

  $key = $this->uri->segment(3);
  $user_id = $this->site_security->_get_user_id();

   $query = $this->db->query("SELECT * FROM loan_requests WHERE unique_code = '$key'");
    $query_row = $query->row_array();

    $numrows = $query->num_rows();
    if($numrows == 1){
      $id= $query_row['id'];

    $this->_delete($id);
    }
    
  redirect("dashboard");

}

function history(){

   $key = $this->uri->segment(3);
   $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];

   $data['query2'] = $this->db->query("SELECT * FROM loan_requests WHERE user_id = '$user_id' ORDER BY `loan_requests`.`id` DESC");
 
   $this->load->view('history',$data);

}


function payment_confirm(){
  $key = $this->uri->segment(3);

  $this->db->set('status', 4, FALSE);
  $this->db->where('unique_code',$key);
  $this->db->update('loan_requests');

  redirect('loan/history');

}



function payback_loan(){
  $key = $this->uri->segment(3);

  $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];
   $data['lastname']= $query_row['last_name'];
   $data['email']= $query_row['email'];
   $data['home']= $query_row['home_address'];
   $data['work']= $query_row['work_address'];
   $data['phone']= $query_row['phone'];

    $query2 = $this->db->query("SELECT * FROM loan_requests WHERE unique_code = '$key' AND status = 2");
    $num_rows = $query2->num_rows();

    if($num_rows == 1){

      
      $query_row2 = $query2->row_array();
      $raw_amount= $query_row2['amount'];
      $data['amount'] = number_format($raw_amount);
      $data['bank_name']= $query_row2['bank'];
      $data['payment_date']= $query_row2['return_date'];
      $data['account_name']= $query_row2['account_name'];
      $data['account_no']= $query_row2['account_no'];
      $data['key']= $query_row2['unique_code'];

      //Interest Calculation
      $cal = $query_row2['amount'];
      $expected_payment= $query_row2['expected_payment'];
      $interest = 0.2 * $cal;

      $data['percentage'] = number_format($interest);
      $raw_expected_balance = $cal + $interest;
      $data['expected_balance'] = number_format($raw_expected_balance);
      $updated_payment = $cal + $interest;

    }else{

      redirect('loan/history');
    }

     $this->load->view('payback',$data);
}

function check_loan(){
   $user_id = $this->site_security->_get_user_id();

   $check_loan = $this->db->query("SELECT * FROM loan_requests WHERE user_id = '$user_id' AND status = 4 OR status = 2 OR status = 1  ");

   $check_loan_numrows = $check_loan->num_rows(); 

  

   

   if($check_loan_numrows >= 1){
    redirect('loan/history');
    }
}

function get($order_by)
{
    $this->load->model('Mdl_loan');
    $query = $this->Mdl_loan->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_loan');
    $query = $this->Mdl_loan->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_loan');
    $query = $this->Mdl_loan->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('Mdl_loan');
    $query = $this->Mdl_loan->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('Mdl_loan');
    $this->Mdl_loan->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_loan');
    $this->Mdl_loan->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_loan');
    $this->Mdl_loan->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('Mdl_loan');
    $count = $this->Mdl_loan->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('Mdl_loan');
    $max_id = $this->Mdl_loan->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('Mdl_loan');
    $query = $this->Mdl_loan->_custom_query($mysql_query);
    return $query;
}


  function item_check($str)
  {
  	$item_url = url_title($str);
  	$mysql_query ="select * from store_items where item_title='$str' and item_url = '$item_url' ";

  	$update_id = $this->uri->segment(3);
  	if (is_numeric(($update_id))) {
  		# this is an update...
          $mysql_query.=" and id!=$update_id";
  	}

  	$query = $this->_custom_query($mysql_query);
  	$num_rows = $query->num_rows()
;


          if ($num_rows>0)
          {
                  $this->form_validation->set_message('item_check', 'The item title that you sunmitted is not available');
                  return FALSE;
          }
          else
          {
                  return TRUE;
          }
  }

	}