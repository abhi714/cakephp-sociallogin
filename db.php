<?php
$host = 'localhost';
$username = 'babtysoft_babs7';
$password = 'babysoft@123';
$database = 'babysoft_cakedemo';


$mysqli=mysqli_connect($host,$username,$password,$database);
    if($mysqli_connect_error())
        die('Connect Error');

