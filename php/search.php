<?php
session_start();
	include_once("config.php");
	$outgoing_id = $_SESSION['unique_id'];
	$searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);

	$output = "";
	$sql = mysqli_query($con, "SELECT * from users WHERE not unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");

if(mysqli_num_rows($sql) > 0){
	include "data.php";
}else{
	$output .= "No user found for your search";
}
echo $output;
?>