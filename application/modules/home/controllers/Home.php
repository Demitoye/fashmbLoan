 <?php
	class Home extends MX_Controller 
	{ 
		function __construct()
		{
			parent::__construct();
       $this->load->library('session');
       $this->load->module('site_security');
       $this->load->module('site_cookies');


		}



function index(){
  $this->load->view('home');
}

function aboutus(){
  $this->load->view('about');
}

function terms(){
  $this->load->view('terms');
}

function contact(){
  $this->load->view('contact');
}

function contact_us(){

              $config['protocol'] = 'smtp';
              
               $config['smtp_host'] = 'ssl://smtp.googlemail.com';
               $config['smtp_port'] = 465;
               $config['smtp_user'] = 'samtoye12@gmail.com';
               $config['smtp_pass'] = 'Emmanuel10';
               $config['charset'] = "utf-8";
              $config['mailtype'] = "html";
              //$config


               $this->load->library('email');
                 $this->email->initialize($config);


                  $to = "demitoye6@gmail.com";
                  $from = $_REQUEST['email'];;    
                  $name = $_REQUEST['name'];
                  $subject = $_REQUEST['subject'];
                  $number = 1;
                  $cmessage = $_REQUEST['message'];

                  
                $headers = "FASH MB";
                $base_url = base_url();
                
                



                $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>FASH MB Mail</title></head><body style='margin-left:10%;'>";
                $body .= "<table style='width: 100%;'>";
                $body .= "<thead style='text-align: center;'>
                              <tr><td style='border:none;' colspan='2'>";
                $body .= "</td></tr></thead><tbody><tr>";
                $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
                $body .= "</tr>";
                 $body .= "<tr><td style='border:none;'><strong>From:</strong> {$from}</td> </tr>";
                $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
                $body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong>{$cmessage}</td></tr> <br/>";
                $body .= "</tbody></table>";
                $body .= "</body></html>";



                  $this->email->set_newline("\r\n");
                   $this->email->from('contactfashmb@gmail.com', 'FASH MB');
                  $this->email->to($to);
                  
                  $this->email->subject($subject);
                  $this->email->message($body);

                     if ( ! $this->email->send()) {

                      // show_error($this->email->print_debugger());
                  }
                  
               redirect('home');
  
}

function logout()
{
  unset($_SESSION['user_id']);
  $this->site_cookies->_destroy_cookie();
  redirect("login");
}




function get($order_by)
{
    $this->load->model('Mdl_home');
    $query = $this->Mdl_home->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_home');
    $query = $this->Mdl_home->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_home');
    $query = $this->Mdl_home->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('Mdl_home');
    $query = $this->Mdl_home->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('Mdl_home');
    $this->Mdl_home->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_home');
    $this->Mdl_home->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_home');
    $this->Mdl_home->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('Mdl_home');
    $count = $this->Mdl_home->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('Mdl_home');
    $max_id = $this->Mdl_home->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('Mdl_home');
    $query = $this->Mdl_home->_custom_query($mysql_query);
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