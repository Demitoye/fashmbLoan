 <?php
	class Login extends MX_Controller 
	{ 
		function __construct()
		{
			parent::__construct();
        $this->load->library('session');
            $this->load->module('site_security');

		}



function index(){

  
 
   $email = $this->input->post('email', TRUE);
    $pwd = $this->input->post('pwd', TRUE);
    $signin = $this->input->post('signin',TRUE);

  if($signin == "signin"){


        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pwd','Password','required');
        array('required' => 'You must provided a vaild %s');

        if($this->form_validation->run() == TRUE){


            //query to check if the username given  is present in the database
            $fetch_data= $this->db->query("SELECT * FROM users WHERE email  = '$email'");

            $log = $fetch_data->row_array();

            

             $login = $log['email']; 
             $pass= $log['pwd'];
             $user_id = $log['id'];
             $role = $log['role'];

            

            if($login != $email){


                $flash_msg = "Incorrect Login Details";
                            $value = '<div class="alert alert-danger" role="alert">'.$flash_msg.'</div>';
                            $this->session->set_flashdata('account', $value); 

            }else{

                $result = password_verify($pwd, $pass);
                
                if ($result ==TRUE){

                     $this->load->module('site_cookies');
                    $this->session->set_userdata('user_id', $user_id);
                     $this->session->set_userdata('role', $role);

                   
                    
                     redirect('dashboard');
                   
                    
                }else{ 
                  $flash_msg = "Incorrect Password";
                     $value = '<div class="alert alert-danger" role="alert">'.$flash_msg.'</div>';
                     $this->session->set_flashdata('account', $value); 
                }
                
                    
            }
 
  }
   $data['flash'] = $this->session->flashdata('account');
}
 $this->load->view('login', $data);
}


function fetch_from_post(){

}




function get($order_by)
{
    $this->load->model('Mdl_login');
    $query = $this->Mdl_login->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_login');
    $query = $this->Mdl_login->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_login');
    $query = $this->Mdl_login->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('Mdl_login');
    $query = $this->Mdl_login->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('Mdl_login');
    $this->Mdl_login->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_login');
    $this->Mdl_login->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_login');
    $this->Mdl_login->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('Mdl_login');
    $count = $this->Mdl_login->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('Mdl_login');
    $max_id = $this->Mdl_login->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('Mdl_login');
    $query = $this->Mdl_login->_custom_query($mysql_query);
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