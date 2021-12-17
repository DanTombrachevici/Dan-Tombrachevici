<?php
session_start();
$dbHost = 'localhost';
$dbName = 'tweb';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>