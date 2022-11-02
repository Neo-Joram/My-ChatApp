<?php
session_start();
include_once("php/config.php");
if(empty($_SESSION['unique_id'])){
	header('location: index.php');
}

	$del_event = mysqli_query($con, "DELETE FROM
	`story` WHERE date <= now() - INTERVAL 1800 SECOND");
?>
<?php include("header.php"); ?>
<body>
	<div class="wrapper">
			<?php
				$sql = mysqli_query($con, "select * from users where unique_id = '{$_SESSION['unique_id']}'");
			if(mysqli_num_rows($sql) > 0){
				$row = mysqli_fetch_assoc($sql);
			}
			?>
		<div class="profile">
			<header>
				<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
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
		<div class="story">
			<div class="span" onClick="location.href='Story.php'"><i class="fas fa-desktop"></i>View story</div>
			<div class="s-content">
				<div class="add-story">
					<img src="images/1631296747Me.jpg" alt="">
					<div class="icon"><i class="fas fa-plus"></i></div>
				</div>
				<div class="view-story">
					<img src="images/1631296879creator.png" alt="">
					<div class="icon"><i class="fas fa-eye"></i></div>
				</div>
			</div>
		</div>
		<div class="settings">
			<div class="span" onClick="update()"><i class="fas fa-user-cog"></i>Update profile</div>
			<div class="p-update">
				<form action="php/uprofile.php" class="img-update">
					<input type="file" name="image" class="input">
					<button name="pic">Modify</button>
				</form>
				<form action="php/update-names.php" class="nm-update">
					<input type="text" name="fname" placeholder="New first Name" class="input1" required>
					<input type="text" name="lname" placeholder="New last Name" class="input1"  required>
					<button name="names">Modify</button>
				</form>
				<form action="" class="pwd-update">
					<input type="password" name="o-password" placeholder="Old password" class="input1">
					<input type="password" name="n-password" placeholder="New password" class="input1">
					<button name="pass">Modify</button>
				</form>
			</div>
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
