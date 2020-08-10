 <?php
	class Admadmin extends MX_Controller 
	{ 
		function __construct()
		{
			parent::__construct();
      $this->load->library('session');
      $this->load->module('site_security');
      
      

		}

function index(){

    $username = $this->input->post('username', TRUE);
    $pwd = $this->input->post('password', TRUE);
    $signin = $this->input->post('submit',TRUE);

  if($signin == "submit"){


        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        array('required' => 'You must provided a vaild %s');

        if($this->form_validation->run() == TRUE){


            //query to check if the username given  is present in the database
            $fetch_data= $this->db->query("SELECT * FROM users WHERE first_name  = '$username'");

            $log = $fetch_data->row_array();

            

             $login = $log['first_name']; 
             $pass= $log['pwd'];
             $user_id = $log['id'];
             $role = $log['role'];

            

            if($login != $username){


                $flash_msg = "Incorrect Login Details";
                            $value = '<div class="alert alert-danger" role="alert">'.$flash_msg.'</div>';
                            $this->session->set_flashdata('account', $value); 

            }else{

                $result = password_verify($pwd, $pass);
                
                if ($result ==TRUE){

                     $this->load->module('site_cookies');
                    $this->session->set_userdata('user_id', $user_id);
                     $this->session->set_userdata('role', $role);

                   
                    
                     redirect('admadmin/home');
                   
                    
                }else{ 
                  $flash_msg = "Incorrect Password";
                     $value = '<div class="alert alert-danger" role="alert">'.$flash_msg.'</div>';
                     $this->session->set_flashdata('account', $value); 
                }
                
                    
            }
 
  }
   $data['flash'] = $this->session->flashdata('account');
}
  $this->load->view('admin_login',$data);
}

function home(){
  $this->site_security->_make_sure_is_admin();
  $data['query'] = $this->db->query("SELECT * FROM users where account_status = 1");
  $data['query2'] = $this->db->query("SELECT * FROM loan_requests where status = 1");

  $this->load->view('admin_home' , $data);
}

function view_user(){
    $this->site_security->_make_sure_is_admin();

   $user_id = $this->uri->segment(3);
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];
   $data['lastname']= $query_row['last_name'];
   $data['email']= $query_row['email'];
   $data['home']= $query_row['home_address'];
   $data['work']= $query_row['work_address'];
   $data['phone']= $query_row['phone'];
   $data['job']= $query_row['job'];


    //To load the imageor user_documents
   $query2 = $this->db->query("SELECT * FROM user_documents WHERE user_id = '$user_id'");
   $query_row2 = $query2->row_array();
   $data['passport']= $query_row2['passport'];
   $data['id_card']= $query_row2['id_card'];
   $data['phcn']= $query_row2['phcn'];
   

   $this->load->view('view_user', $data);

}

function activate_acct(){
  $this->site_security->_make_sure_is_admin();

  $key = $this->uri->segment(3);

 $query = $this->db->query("SELECT * FROM users WHERE id = '$key'");

 $numrows = $query->num_rows();

 

 if ($numrows == 1){

          $this->db->set('account_status', 2, FALSE);
          $this->db->where('id',$key);
          $this->db->update('users');
          
 }
 redirect('admadmin/home');


}



function reject_acct(){
  $this->site_security->_make_sure_is_admin();
  $key = $this->uri->segment(3);

 $query = $this->db->query("SELECT * FROM users WHERE id = '$Key'");

 $numrows = $query->num_rows();

 if ($numrows == 1){

          $this->db->set('account_status', 0, FALSE);
          $this->db->where('id',$key);
          $this->db->update('users');

          $this->db->where('user_id', $key);
        $this->db->delete('user_documents');
  }
  redirect('admadmin/home');

}

function loan_approve(){
  $this->site_security->_make_sure_is_admin();

  $key = $this->uri->segment(3);
  $new_status = 2;

  $query = $this->db->query("SELECT * FROM loan_requests WHERE id = '$key'");
  $numrows = $query->num_rows();
  $array = $query->row_array();
  $loan_amount = $array['amount'];
  $datey = Date('d-m-Y'); 
    if($numrows == 1){

      if($loan_amount >=5000 && $loan_amount <=10000){
        $twoweeks = strtotime($datey);
        $date = strtotime("+ 2 weeks", $twoweeks);
        $expected_return_date =  date('d-m-Y', $date);
      }
      elseif($loan_amount >=11000 && $loan_amount <=20000){
        $twoweeks = strtotime($datey);
        $date = strtotime("+ 3 weeks", $twoweeks);
        $expected_return_date =  date('d-m-Y', $date);
      }
      elseif($loan_amount >=21000 && $loan_amount <=50000){
        $twoweeks = strtotime($datey);
        $date = strtotime("+ 4 weeks", $twoweeks);
        $expected_return_date =  date('d-m-Y', $date);
      }
        

        

    // $this->db->set('status', $new_status, FALSE);
    // $this->db->set('date', $datey, FALSE);
    // $this->db->set('return_date', $expected_return_date, FALSE);
    // $this->db->where('id',$key);
    // $this->db->update('loan_requests');

        $data['status'] = 2;
        $data['date'] = $datey;
        $data['return_date'] = $expected_return_date;


    $this->db->where('id', $key);
    $this->db->update('loan_requests', $data);

    }

    
  redirect("admadmin/home");

}


function loan_reject(){

  $this->site_security->_make_sure_is_admin();
  $key = $this->uri->segment(3);
   $query = $this->db->query("SELECT * FROM loan_requests WHERE id = '$key'");
    $query_row = $query->row_array();

    $numrows = $query->num_rows();
    if($numrows == 1){
      $id= $query_row['id'];

    $this->_delete($id);
    }
    
  redirect("admadmin/home");

}

function manage_loan(){
  $this->site_security->_make_sure_is_admin();

  $datey = Date('d-m-Y');

   $data['query'] = $this->db->query("SELECT * FROM loan_requests");
   $data['query2'] = $this->db->query("SELECT * FROM loan_requests  WHERE status = 4");
   $data['query3'] = $this->db->query("SELECT * FROM loan_requests  WHERE return_date = '$datey' ");

  $this->load->view('manage_loan', $data);

}

function paid_loan_fully(){
  $this->site_security->_make_sure_is_admin();

  $key = $this->uri->segment(3);
  $this->db->set('status', 3, FALSE);
  $this->db->where('id',$key);
  $this->db->update('loan_requests');
          
  redirect('admadmin/manage_loan');

}

function paid_loan_small(){
  $this->site_security->_make_sure_is_admin();

   $data['key'] = $this->uri->segment(3);
   $key_code = $this->uri->segment(3);

   $submit = $this->input->post('submit');
   

  

   if($submit == 'submit'){
    $value = $this->input->post('value');

    $query2 = $this->db->query("SELECT * FROM loan_requests WHERE id = '$key_code'");
  $query_row2 = $query2->row_array();
  $expected_payment= $query_row2['expected_payment'];

  $new_expected_payment = $expected_payment - $value;


    $this->db->set('expected_payment', $new_expected_payment, FALSE);
    $this->db->set('status', 2, FALSE);
    $this->db->where('id',$key_code);
    $this->db->update('loan_requests');
          
  redirect('admadmin/manage_loan');

   }
          
  $this->load->view('half_payment', $data);

}


function not_paid(){
  $this->site_security->_make_sure_is_admin();

   $key = $this->uri->segment(3);
  $this->db->set('status', 2, FALSE);
  $this->db->where('id',$key);
  $this->db->update('loan_requests');
          
  redirect('admadmin/manage_loan');

}

function change_status(){
  $this->site_security->_make_sure_is_admin();

   $key = $this->uri->segment(3);
  $this->db->set('status', 0, FALSE);
  $this->db->where('id',$key);
  $this->db->update('loan_requests');
          
  redirect('admadmin/manage_loan');

}





function get($order_by)
{
    $this->load->model('Mdl_admadmin');
    $query = $this->Mdl_admadmin->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_admadmin');
    $query = $this->Mdl_admadmin->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_admadmin');
    $query = $this->Mdl_admadmin->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('Mdl_admadmin');
    $query = $this->Mdl_admadmin->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('Mdl_admadmin');
    $this->Mdl_admadmin->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_admadmin');
    $this->Mdl_admadmin->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_admadmin');
    $this->Mdl_admadmin->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('Mdl_admadmin');
    $count = $this->Mdl_admadmin->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('Mdl_admadmin');
    $max_id = $this->Mdl_admadmin->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('Mdl_admadmin');
    $query = $this->Mdl_admadmin->_custom_query($mysql_query);
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