<?php
/*
	- created MySQLi frame-work to avoid multiple connection openings and double work of passing connection string for every query.
	- allows to add multiple function if required.
*/

function sql_query($q, $err_code='ERR', $kill='Y')
{
	global $IS_LOG_SQL, $CON;
	
	$err_str = 'Error Code: '.$err_code;

	if(SQL_ERROR)
		$err_str .= '<br>query: '.$q.' <br>error: ';

	if(!empty($IS_LOG_SQL))
		logSQl('sql.txt', NOW.','.$_SERVER['PHP_SELF'].',"'.NewlinesToBR($q).'"'.NEWLINE);

	if($kill == 'Y') $r = mysqli_query($CON,$q) or die($err_str.mysqli_error($CON));
	else $r = mysqli_query($CON,$q);

	if(!empty($IS_LOG_SQL))
		logSQl('sql.txt', TAB_SPACE.'affected row(s): '.mysqli_affected_rows($CON).', error(s): '.TAB_SPACE.mysqli_error($CON).NEWLINE);
	else
	{
		$q = strtolower(trim($q));
		if(strpos($q, 'update vendor')===0)
			logSQl('sql.txt', '**'.NOW.','.$_SERVER['PHP_SELF'].',"'.NewlinesToBR($q).'"'.NEWLINE);

	}

	return $r;
}

function sql_num_rows($r)
{
	return mysqli_num_rows($r);
}

function sql_fetch_row($r)
{
	return mysqli_fetch_row($r);
}

function sql_fetch_object($r)
{
	$o = mysqli_fetch_object($r);
	return $o;
}

function sql_fetch_array($r)
{
	return mysqli_fetch_array($r);
}

function sql_fetch_assoc($r)
{
	return mysqli_fetch_assoc($r);
}

function sql_affected_rows()
{
	global $CON;
	return mysqli_affected_rows($CON);
}

function sql_get_data($r)
{
	$data = array();
	
	while($o = sql_fetch_object($r))
		$data[] = $o;
	
	return $data;
}

function data_get_field_arr($data_arr, $key, $is_unique=true)
{
	$x = array();
	
	foreach($data_arr as $o)
	{
		if(isset($o->$key))
		{
			if($is_unique)
				$x[$o->$key] = $o->$key;
			else
				$x[] = $o->$key;
		}
	}
	
	return $x;
}

function sql_close()
{
	global $CON;
	mysqli_close($CON);
}
?>