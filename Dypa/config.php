<?php
$user='root';
$pass='1998176Aa!';
$host='';
$db = 'museums';
$turn1 = true;
$turn2 = false;


$con = new mysqli($host, $user, $pass, $db,null,'/home/student/it/2016/it164725/mysql/run/mysql.sock');
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . 
    $con->connect_errno . ") " . $mysqli->connect_error;

?>
