 <?php
	class Dashboard extends MX_Controller 
	{ 
		function __construct()
		{
			parent::__construct();
      $this->load->module('site_security');
      $this->site_security->_make_sure_logged_in();

		}



function index(){
   $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];
   $data['status']= $query_row['account_status'];
   $email= $query_row['email'];
   $paid = $query_row['paid'];


   if($paid == "No"){

   $query2 = $this->db->query("SELECT * FROM payment WHERE email = '$email'");
   $query_row2 = $query2->row_array();
   $referral_num_generate = $query_row2['reference'];
   $email = $query_row2['email'];
   $amount = $query_row2['amount'];
     redirect('payment.php?ref='.$referral_num_generate);
   }else{



   $query2 = $this->db->query("SELECT * FROM `loan_requests` WHERE user_id = '$user_id' ORDER by id DESC LIMIT 1");
   $query_row2 = $query2->row_array();
   $data['num_rows'] = $query2->num_rows();
   $data['amount']= $query_row2['amount'];
   $data['loan_status']= $query_row2['status'];
   $data['date']= $query_row2['date'];
   $data['return_date']= $query_row2['return_date'];
}

  $this->load->view('dashboard', $data);
}

function account(){
   $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];
   $data['lastname']= $query_row['last_name'];
   $data['email']= $query_row['email'];
   $data['home']= $query_row['home_address'];
   $data['work']= $query_row['work_address'];
   $data['gender']= $query_row['gender'];
   $data['phone']= $query_row['phone'];
   $data['marital_status']= $query_row['marital_status'];
   $data['job']= $query_row['job'];
   $data['salary']= $query_row['salary'];


  $this->load->view('accounts', $data);

}

function payment_sucessful(){

   $user_id = $this->site_security->_get_user_id();
   $documents['paid'] = "Yes";



    $this->db->where('id', $user_id);
    $this->db->update('users', $documents);
    

   
          
   redirect('dashboard');

}

function setup(){
   $user_id = $this->site_security->_get_user_id();
   $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
   $query_row = $query->row_array();
   $data['user']= $query_row['first_name'];

   $submit = $this->input->post('submit');

   if($submit == 'submit'){
      



        //File configuration
        $config['upload_path']          = 'documents/private';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['max_size']             = 900000;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('passport')){
         
          //upload was successful
        
          $data = array('upload_data' => $this->upload->data());
          $upload_data = $data['upload_data'];
          $file_name = $upload_data['file_name'];
        }

        if($this->upload->do_upload('id_card')){

          $data2 = array('upload_data' => $this->upload->data());
          $upload_data2 = $data2['upload_data'];
          $file_name2 = $upload_data2['file_name'];
        }


        if($this->upload->do_upload('phcn')){

            $data3 = array('upload_data' => $this->upload->data());
            $upload_data3 = $data3['upload_data'];
            $file_name3 = $upload_data3['file_name'];
        }

                
          $documents['user_id'] = $user_id;
          $documents['date'] = Date('d-M-Y'); 
          
          // insert into the db
          $documents['passport'] = $file_name;
          $documents['id_card'] = $file_name2;
          $documents['phcn'] = $file_name3;         
         
          $this->db->insert('user_documents', $documents);

          $this->db->set('account_status', 1, FALSE);
          $this->db->where('id',$user_id);
          $this->db->update('users');
          
           redirect('Dashboard');
         

    }

   
  $this->load->view('setup', $data);
}


function settings(){

    $old_password = $this->input->post('old_password', TRUE);
    $new_password1 = $this->input->post('new_password1', TRUE);
    $new_password2 = $this->input->post('new_password2', TRUE);
    $signin = $this->input->post('submit',TRUE);

  if($signin == "submit"){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('old_password','Password','required');
        array('required' => 'You must provided a vaild %s');
        $this->form_validation->set_rules('new_password1','Password','required',
              array('required' => 'You must provided a vaild %s.'));
        $this->form_validation->set_rules('new_password2',' New Password Confirmation','required|matches[new_password1]');

        if($this->form_validation->run() == TRUE){


            //query to check if the user_id given  is present in the database

            $user_id = $this->site_security->_get_user_id();
            $query = $this->db->query("SELECT * FROM users WHERE id = '$user_id'");
            $query_row = $query->row_array();
            $pass= $query_row['pwd'];


              $result = password_verify($old_password, $pass);
                
                if ($result ==TRUE){

  
                  $password_hash['pwd'] = $this->site_security->_hash_string($new_password1);
 

                 

                  $this->db->where('id', $user_id);
                  $this->db->update('users', $password_hash);
                    
                 
          
                  redirect('dashboard');
                   
                    
                }else{ 

                  $flash_msg = "Incorrect Password";
                  $value = '<div class="alert alert-danger" role="alert">'.$flash_msg.'</div>';
                  $this->session->set_flashdata('account', $value); 

                }

      }

    $data['flash'] = $this->session->flashdata('account');
  }
  $this->load->view('change_password',$data);

}




function get($order_by)
{
    $this->load->model('mdl_dashboard');
    $query = $this->mdl_dashboard->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_dashboard');
    $query = $this->mdl_dashboard->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_dashboard');
    $query = $this->mdl_dashboard->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('mdl_dashboard');
    $query = $this->mdl_dashboard->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('mdl_dashboard');
    $this->mdl_dashboard->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_dashboard');
    $this->mdl_dashboard->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_dashboard');
    $this->mdl_dashboard->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('mdl_dashboard');
    $count = $this->mdl_dashboard->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('mdl_dashboard');
    $max_id = $this->mdl_dashboard->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('mdl_dashboard');
    $query = $this->mdl_dashboard->_custom_query($mysql_query);
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
