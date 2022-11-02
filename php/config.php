<?php
	$con = mysqli_connect("localhost", 'root', '', 'realchat');
	if(!$con){
		echo "Database connected! " . mysqli_connect_error();
	}
?>