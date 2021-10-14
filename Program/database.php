<?php
session_start();
$server = 'localhost'; 
$username = 'root';
$password = '';
$database = 'adat';
$kapcsolat = mysqli_connect($server, $username, $password, $database);
if ( mysqli_connect_errno() ) {
	
	die ('Probléma a MySQL kapcsolatban: ' . mysqli_connect_error());
}
?>