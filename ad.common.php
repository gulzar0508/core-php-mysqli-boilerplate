<?php
/*
	- These files are related to admin/ctrl folder
	- all related funtions and variables are stored in respective files for admin/ctrl folder usage
*/
include "config.inc.php"; 	# config connections
include "define.inc.php"; 	# global defines
include "function.php"; 	# global functions
include "sql.inc.php"; 		# sql functions

if(!isset($NO_INCLUDE))
{
	include "ad.userdat.php"; 	# session related data
}

include "ad.session.php"; 	# admin session management
?>