<?php
/*
	- These files are related to customer/frontend site
	- all related funtions and variables are stored in respective files for customer/frontend usage
*/

// frontend common includes files
include "config.inc.php"; 	# config connections
include "define.inc.php"; 	# global defines
include "function.php"; 	# global functions
include "sql.inc.php"; 		# sql functions

if(!isset($NO_INCLUDE))
{
	include "cu.userdat.php"; 	# session related data
}

######	GETCONNECTED
$CON = GetConnected(); # connection to database
?>