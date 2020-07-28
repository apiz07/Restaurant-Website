<?php
session_start();
$dbserver = "localhost";
$dbuser = "restaurant";
$dbpass = "admin123";
$dbname = "myrestaurant";

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
?>