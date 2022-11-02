<?php
session_start();
include_once("config.php");
$id = $_SESSION['unique_id'];

$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);

	if(!empty($fname) && !empty($lname)){
		$updatename = mysqli_query($con, "UPDATE users SET fname = {$fname}, lname = {$lname} WHERE unique_id = {$id}");
	}
?>