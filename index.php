<?php
	session_start();
if(isset($_SESSION['unique_id'])){
	header('location: users.php');
}
?>
<?php include("header.php"); ?>
<body style="background: #ADADD7;">
	<center>
	<div class="login">
		<div class="header">
			NeoChat
		</div>
		<div class="login-form form">
			<div class="error-txt"></div>
			<form action="" method="post" enctype="multipart/form-data">
				<nav class="input"><input type="email" name="email" placeholder="Your Email...">
				<i class="fas fa-mail-bulk"></i></nav>
				<nav class="input"><input type="password" name="password" placeholder="Password">
				<i class="fas fa-key"></i></nav>
				<nav class="input"><button name="submit">Login</button>
				<i class="fas fa-sign-in-alt"></i><nav>
				<a href="register.php">Create new account</a>
			</form>
		</div>
		</div></center>
		<script src="Javascript/login.js"></script>
</body>
</html>
