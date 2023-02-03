<?php
/*
	Session management for backend by connecting to database and storing variables in PHP SESSIONS
*/
######	ConnectSQL
$CON = ConnectSQL();

######	SESSION VARIABLES
$logged = 0;

if(isset($_SESSION[AD_SESSION_ID]->log_stat)) // if the session variable has been set...
{	
	if($_SESSION[AD_SESSION_ID]->log_stat == "A")
	{
		$logged = 1;
		$sess_user_id = $_SESSION[AD_SESSION_ID]->user_id;
		$sess_user_name = $_SESSION[AD_SESSION_ID]->user_name;
		$sess_user_role = $_SESSION[AD_SESSION_ID]->user_role;
		$sess_user_sess = $_SESSION[AD_SESSION_ID]->sess;
		$sess_login_time = $_SESSION[AD_SESSION_ID]->log_time;
		$sess_user_token = $_SESSION[AD_SESSION_ID]->sess_token;		
		$sess_user_active = $_SESSION[AD_SESSION_ID]->sess_active;
	}
}

if(!$logged && empty($NO_REDIRECT))
{
	ForceOut(6);
}
?>