<?php
	session_start();
if(isset($_SESSION['unique_id'])){
	include_once("config.php");
	$logout_id = mysqli_real_escape_string($con, $_GET['logout_id']);
	if(isset($logout_id)){
		$status = "Offline";
		$sql = mysqli_query($con, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$logout_id}'");
		IF($sql){
			session_unset();
			session_destroy();
			header('location: ../index.php');
		}
	}else{
		header('location: ../users.php');
	}
}else{
	header("location:../index.php");
}
?>