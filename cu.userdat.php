<?php 
// Session related data
class userdat
{
	var $log_time;		// time of login
	var $log_stat;		// log status - is the customer logged in or not
	var $sess_id;		// session id
	///////////////////////////////////////////////

	var $cust_id;		// customer's id		
	var $cust_name;		// customer's name	
	var $cust_lastlogin;// customer's lastlogin
	var $cust_ip;		// customer's login ip
	///////////////////////////////////////////////
	var $srch_ctrl_arr = array();

	var $cust_info; // action info message
	var $cust_success_info; // action success message
	var $cust_error_info; // action error message
	var $cust_alert_info; // action warning message
	var $cust_sess_token; // randomly generated session token
	var $cust_sess_active; // setting if the session is active
}

$sess_id = session_id(); # gerating session id

if(empty($sess_id))
{
	session_start();
}
?>