<?php
session_start();
include_once("config.php");

$info_id = $_GET['duser-id'];
$user_id = $_SESSION['unique_id'];

	$sql = mysqli_query($con, "DELETE FROM `messages` WHERE `outgoing_msg_id` = $info_id && `incoming_msg_id` = $user_id");
if($sql == true){
	echo $info_id;
}else{
	header('refresh:0');
}
?>