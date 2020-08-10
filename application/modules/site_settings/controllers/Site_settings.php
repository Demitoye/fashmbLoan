 <?php
	class Site_settings extends MX_Controller 
	{
		function __construct()
		{
			parent::__construct();
		}

function _get_map_code()
{
	$code = '<iframe src="https://maps.google.com/maps?q=9th%20floor%2C%20UBA%20House%2C%2057%2C%20Marina%2C%20Lagos%2C%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
	return $code;
}

function _get_our_name()
{
	$name = 'NASD';
    return $name;
}


function _get_our_address()
{
	$address = '9th Floor, UBA House,57<br>';
    $address .= 'Marina,Lagos,Nigeria.';
    return$address;
}


function _get_our_telnum()
{
	$telnum = '23412808676, 234 1 4605008';
    return$telnum;
}



function _get_support_team_name()
{
	$name = "Customer Support";
	return $name;
}

function _get_welcome_msg($customer_id)
{
	$this->load->module('store_accounts');
	$customer_name = $this->store_accounts->_get_customer_name($customer_id);

	$msg = "Hello ".$customer_name.", <br><br>";
	$msg.= "Thank you for creating an account with CI shop. If you have any questions";
	$msg.= "about any of our product and services please do get in touch. We are here ";
	$msg.= "seven days a week and we are happy to help you. <br><br>";
	$msg.="Regards, <br><br>";
	$msg.="Ayodimeji Fasina(founder)";
	return $msg;
}
		
function _get_cookie_name()
{
	$cookie_name = 'htelgbgfbbhz';
	return $cookie_name;
}		

function _get_item_segments()
{
// return the segment for the store_item page (produce page)
$segments = "musical/instrument/";
return $segments;

}

function _get_items_segments()
{
// return the segment for the cat pages
$segments = "music/instruments/";
return $segments;

}

function _get_page_not_found_msg()
{
$msg = "<h1>Page not found</h1> ";
$msg.= "<p>Please check your address and try again</p>";
return $msg;
}

}