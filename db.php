<?php
$host = 'localhost';
$username = 'babysoft_babs7';
$password = 'babysoft@123';
$database = 'babysoft_cakedemo';

$conn = mysql_connect($host,$username,$password);
if($conn)
{
	mysql_select_db($database);
}


