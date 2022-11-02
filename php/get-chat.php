<?php
session_start();
if(isset($_SESSION['unique_id'])){
	include_once( "config.php");
	$outgoing_id = mysqli_real_escape_string($con, $_POST['outgoing_id']);
	$incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
	$output = "";
	
	$sql = "select * from messages LEFT JOIN users ON users.unique_id = messages.incoming_msg_id
	where (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id}) OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) order by msg_id asc";
	
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_assoc($query)){
			if($row['outgoing_msg_id'] === $outgoing_id){
				$output .= '<div class="chat outgoing">
							<div class="details">
								<p>'. $row['msg'] .'</p>
							</div>			
						</div>';
			}else{
				$output .= '<div class="chat incoming">
							<img src="./images/'. $row['img'] .'" alt="">
							<div class="details">
								<p>'. $row['msg'] .'</p>
							</div>			
							</div>';			
			}
		}
	}else{
			$output .= '<div class="text">You have no chats. Once you send messages, they will display here.</div>';
		}
		echo $output;
}else{
	header("./index.php");
}
?>
<style>
.text{
  position: absolute;
  top: 45%;
  left: 50%;
  width: calc(100% - 120px);
  text-align: center;
  transform: translate(-50%, -50%);
}
</style>
