 <?php
	class Registration extends MX_Controller 
	{ 
		function __construct()
		{
			parent::__construct();
      $this->load->library('session');
      $this->load->module('site_security');

		}



function index(){

  $submit = $this->input->post('submit', TRUE);

  if($submit == 'submit'){
    $load = $this->fetch_from_post();

    $fetched_email = $load['email'];
 
    


        //Checking if the email given is unique are entered properly on the form

            $query = $this->db->query("SELECT * FROM users where email = '$fetched_email'");
            $row = $query->num_rows();
            

        if($row == 1){
             $flash_msg = "Email already in use";
                  echo '<script>
                              setTimeout(function () { 
                              swal({
                              title: "Oops",
                              text: "'.$flash_msg.' ",
                              type: "error",
                              cancelButtonText: "OK"
                          },
                          function(isCancel){
                            if (isCancel) {
                             swal.close();
                            }
                          }); }, 1000);
          </script>';
        }else{

                $this->load->library('form_validation');
                $this->form_validation->set_rules('pwd','Password','required',
                  array('required' => 'You must provided a vaild %s.'));
                $this->form_validation->set_rules('confirm_pwd','Password Confirmation','required|matches[pwd]');
                
                if($this->form_validation->run() == TRUE){

                  $this->_insert($load);

              


                    // update db

                 $length = 15;
                 $referral_num_generate = substr(str_shuffle('0123456789'), 1,$length); 
                 $insert_data['reference'] = $referral_num_generate;
                 $insert_data['email'] = $load['email'];
                 $insert_data['amount'] = 1000;
         
                  $this->db->insert('payment', $insert_data);


                  redirect('login');


        }
  }

}  

       
 $this->load->view('registration');
}



function fetch_from_post(){

  $password_default = $this->input->post('pwd', TRUE);
   
  $password_hash = $this->site_security->_hash_string($password_default);
    $data['first_name'] =$this->input->post('first_name', TRUE);
    $data['last_name'] =$this->input->post('last_name', TRUE);
    $data['email'] =$this->input->post('email', TRUE);
    $data['home_address'] =$this->input->post('home_address', TRUE);
    $data['work_address'] =$this->input->post('work_address', TRUE);
    $data['phone'] =$this->input->post('phone', TRUE);  
    $data['job'] =$this->input->post('job', TRUE);
    $data['pwd'] = $password_hash;
    $data['account_status'] = 0;
    $data['role'] = 2;


    

    return $data;
}



function get($order_by)
{
    $this->load->model('Mdl_registration');
    $query = $this->Mdl_registration->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_registration');
    $query = $this->Mdl_registration->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_registration');
    $query = $this->Mdl_registration->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('Mdl_registration');
    $query = $this->Mdl_registration->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('Mdl_registration');
    $this->Mdl_registration->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_registration');
    $this->Mdl_registration->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_registration');
    $this->Mdl_registration->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('Mdl_registration');
    $count = $this->Mdl_registration->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('Mdl_registration');
    $max_id = $this->Mdl_registration->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('Mdl_registration');
    $query = $this->Mdl_registration->_custom_query($mysql_query);
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
