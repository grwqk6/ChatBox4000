<?php
$hostname = "localhost";
$username = "root";
$password = "Ugene0907";
$database = "ajaxchat";
$port = 3306;
$db = new mysqli($hostname, $username, $password, $database);
$db->autocommit(TRUE);
if($db) ;
else echo "You are not connected to the database";

//for protection from injection attacks
function qs($s){
    return mysql_real_escape_string($s);
}
function qi($s) {
    return (0+@$s);
}
?>