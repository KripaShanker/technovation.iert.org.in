<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect("localhost","kripa","iert@123");
$db=mysql_select_db("event",$con);
?>
