<?php
	session_start();
if(isset($_SESSION['unique_id'])){
	header('location: users.php');
}
?>
<?php include("header.php"); ?>
<body style="background: #ADADD7;">
	<center>
	<div class="register">
		<div class="header">
			Realtime NeoChat
		</div>
		<div class="register-form form">
			<div class="error-txt"></div>
			<form action="" method="post" enctype="multipart/form-data">
				<nav class="input name"><input type="text" name="fname" placeholder="First Name" required>
					<i class="fas fa-user-alt"></i></nav>
				<nav class="input name"><input type="text" name="lname" placeholder="Last Name" required>
					<i class="fas fa-user-alt"></i></nav>
				<nav class="input"><input type="email" name="email" placeholder="Your Email... " required>
				<i class="fas fa-mail-bulk"></i></nav>
				<nav class="input"><input type="password" name="password" placeholder="Password" required>
				<i class="fas fa-key"></i></nav>
				<nav class="input"><input type="file" name="image" required>
				<i class="fas fa-image"></i></nav>
				<nav class="input"><button name="submit">Register</button>
					<i class="fas fa-registered"></i></nav>
				<a href="index.php">Login if u have account</a>
			</form>
		</div>
	</div>
	</center>
		<script src="Javascript/signup.js"></script>
</body>
</html>
