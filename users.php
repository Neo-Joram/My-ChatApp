<?php
session_start();
include_once("php/config.php");
if(empty($_SESSION['unique_id'])){
	header('location: index.php');
}
?>
<?php include_once("header.php"); ?>
<body>
		<div class="wrapper">
	<div class="users">
		<header>
			<?php
				$sql = mysqli_query($con, "select * from users where unique_id = '{$_SESSION['unique_id']}'");
			if(mysqli_num_rows($sql) > 0){
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			<div class="content" onClick="location.href='profile.php'">
				<img src="images/<?php echo $row['img']; ?>" alt="">
				<div class="detail">
					<span><?php echo $row['fname'] ." ". $row['lname'];?></span>
					<p><?php echo $row['status'] ?></p>
				</div>
			</div>
			<a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
		</header> 
		<div class="search">
			<span class="text">Select any user to start chat</span>
			<input type="text" placeholder="Search a Name">
			<button><i class="fas fa-search"></i></button>
		</div>
		</div>
			<div class="users-list">
				
			</div>
				</div>
	
	<script src="Javascript/users.js"></script>
</body>
</html>
