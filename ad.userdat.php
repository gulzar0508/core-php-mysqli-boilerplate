<?php 
// Session related data
class userdat
{
	var $log_time;		// time of login
	var $log_stat;		// log status - is the user logged in or not
	var $sess_id;		// session id
	///////////////////////////////////////////////

	var $user_id;		// user's id		
	var $user_name;		// user's name	
	var $user_role;		// user's role
	var $user_lastlogin;// user's lastlogin details
	var $user_ip;		// user's login ip

	///////////////////////////////////////////////
	var $srch_ctrl_arr = array(); // for use to store filters

	var $info;			// action info message
	var $success_info;	// action success message
	var $error_info;	// action error message
	var $alert_info;	// action warning message
	var $sess_token;	// randomly generated session token
	var $sess_active;	// setting if the session is active
}

$sess_id = session_id(); // session id

if(empty($sess_id))
{
	session_start();
}
?>