<?php
// ini_set("display_errors","on");
if(!isset($dbh)){
 session_start();
 date_default_timezone_set("UTC");
 $musername = "root";
 $mpassword = "tcc";
 $hostname  = "172.19.0.2";
 $dbname    = "tcc";
 $dbh=new PDO('mysql:dbname='.$dbname.';host='.$hostname.";port=3306",$musername, $mpassword);
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>