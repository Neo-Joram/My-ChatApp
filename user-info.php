<?php
session_start();
include_once("php/config.php");
if(empty($_SESSION['unique_id'])){
	header('location: index.php');
}
?>
<?php include("header.php"); ?>
<body>
	<div class="wrapper">
			<?php
			$info_id = mysqli_real_escape_string($con, $_GET['info_id']);
				$sql = mysqli_query($con, "select * from users where unique_id = '{$_GET['info_id']}'");
			if(mysqli_num_rows($sql) > 0){
				$row = mysqli_fetch_assoc($sql);
			}
			?>
		<div class="profile">
			<header>
				<a href="chat.php?user_id=<?php echo $info_id; ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
					<div class="detail">
						<span>Me</span>
					</div>
			</header> 
		</div>
		<div class="myprofile">
			<div class="content">
				<img src="images/<?php echo $row['img']; ?>" alt="">
				<div class="detail">
					<span><?php echo $row['fname'] ." ". $row['lname'];?></span>
				</div>
			</div>
		</div>
		<div class="settings">
			<div class="span" onClick="update()"><i class="fas fa-user-cog"></i>User Information</div>
			<div class="info"><span>First Name:  </span><span class="on-info">&nbsp;<?php echo $row['fname'];?></span></div>
			<div class="info"><span>Last Name:  </span><span class="on-info">&nbsp;<?php echo $row['lname'];?></span></div>
			<div class="info"><span>email:  </span><span class="on-info">&nbsp;<?php echo $row['email'];?></span><button onClick="location.href='mailto: <?php echo $row['email'];?>'"><i class="fas fa-mail-bulk"></i></button></div>
		</div>
		<div class="settings">
			<div class="span" onClick="update()"><i class="fas fa-cog"></i>Actions</div>
			<div class="info"><span>Top Friend</span></div>
			<div class="info"><span onClick="location.href='php/conv-delete.php?duser-id=<?php echo $info_id; ?>'">Delete Conversation</span></div>
			<div class="info"><span>Report user</span></div>
		</div>
	</div>
</body>
	<script>
click = false;
		function update(){
			if(click == false){
				document.getElementsByClassName("p-update")[0].style.display = "block";
				click == true;
			}else{
				document.getElementsByClassName("p-update")[0].style.display = "none";
			}
		}
</script>
</html>
