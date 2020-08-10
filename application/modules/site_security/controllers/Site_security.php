<?php
class Site_security extends MX_Controller 
{
function __construct()
{
parent::__construct();
}


function make_sure_is_a_member()
{
   $this->membership();
     $membershipEnd;
    // echo date("Y-m-d");echo"<br>";
   if(date("Y-m-d") < $membershipEnd) {
    return TRUE;
  }else{
    redirect('site_security/not_allowed');
  }
}


function membership()
{

    $this->load->module('timedate');
    $this->_make_sure_logged_in();
    $user_id=$this->_get_user_id();echo"<br>";
        $sql = "SELECT * FROM clients_accounts WHERE id = '$user_id'";
        $query = $this->db->query($sql); 
        foreach ($query->result() as $row) {
          $UserRegDate = $row->Timestamp;
          
          	if ( $UserRegDate > 0) {
		# code...it must be a unix timestamp , so convert to datepicker format
		 $UserRegDate = $this->timedate->get_nice_date( $UserRegDate, 'datepicker_us');
	}

          $membershipEnd = date("Y-m-d", strtotime(date("Y-m-d", strtotime($UserRegDate)). "+ 365 days"));
          // echo $membershipEnd;echo"<br>";
          // echo date("Y-m-d");echo"<br>";die();
         
          if(date("Y-m-d") < $membershipEnd) {
            return TRUE;
          }else{
            redirect('site_security/membership_expired');
           
          }
 }
}

function _check_admin_login_details($username, $pword)
{
$sql= $this->db->query("SELECT * FROM user_accounts WHERE username ='$username' ");
$query = $sql->row();

$target_username= $query->username;
$target_pass= $query->pword;
$id = $query->id;

if (($username==$target_username) && ($pword == $target_pass)) {
return TRUE;
}else {
return FALSE;
}
}


function _make_sure_logged_in()
{
// make sure the customer is logged
 $user_id = $this->_get_user_id();
if (!is_numeric($user_id)) {
redirect('login');
}
} 	


function _income_make_sure_logged_in()
{
// make sure the customer is logged
 $user_id = $this->_get_user_id();
if (!is_numeric($user_id)) {
redirect('youraccount/income_login');
}
} 	



function _make_sure_is_prem()
{
// make sure the customer is logged
 $user_id = $this->_get_user_id();
 
 $sqlUserName = $this->db->query("SELECT * FROM clients_accounts WHERE id = '$user_id'");
 $rowUserName = $sqlUserName->row_array();
$group = $rowUserName['group'];
if ($group == 2) {
redirect('dashboardFrontEnd/make_sure_is_prem');
}

} 



function _get_user_id()
{
// attempt to get the id of the user


// start by checking for a session variable
$user_id =$this->session->userdata('user_id');

if (!is_numeric($user_id)) {
// check for a vaild cookie
$this->load->module('site_cookies');
// $user_id = $this->site_cookies->_attempt_get_user_id();
}
return $user_id;
}

function generate_random_string($length)
{
$characters = '23456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
$randomString = '';
for ($i=0; $i < $length ; $i++) { 
$randomString .= $characters[rand(0, strlen($characters) - 1)];
}
return $randomString;
}



function _hash_string($str)
{
$hasded_string = password_hash($str, PASSWORD_BCRYPT, array(
'cost' => 11
));
return $hasded_string;
}

function _verify_hash($plain_text_str, $hasded_string){
$result = password_verify($plain_text_str, $hasded_string);
return $result;
}

function _make_sure_is_admin()
{

$is_admin =$this->session->userdata('role');

if ($is_admin == 1) {
  return TRUE;
}else{
  redirect('site_security/not_allowed');
}

}


function not_allowed()
{
echo "You are not allowed to be here.";
}

function membership_expired()
{
  // $data['username'] = $this->input->post('username', TRUE);
  $data ="";
  $this->load->module('templates');
  $this->templates->membership_expired($data);
  

}

}