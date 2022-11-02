<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Messenger | NJSolutions</title>
        <link rel="stylesheet" href="css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.3-web/css/all.css">
	</head>
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
				$sql = mysqli_query($con, "select * from users where unique_id = '{$_SESSION['unique_id']}'");
			if(mysqli_num_rows($sql) > 0){
				$row = mysqli_fetch_assoc($sql);
			}
			?>		
		<div class="profile">
			<header>
				<a href="profile.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
					<div class="detail">
						<span>Me</span>
					</div>
			</header> 
		</div>
		<div class="story">	
			<div class="span"><i class="fas fa-desktop"></i>Stories</div>
			<div class="st-content">
				<div class="stadd-story">
					<img src="images/1631296747Me.jpg" alt="">
					<span class="name"><?php echo $row['lname'];?></span>
					<div class="icon"><i class="fas fa-plus"></i></div>
				</div>
				
			<?php
				$story = mysqli_query($con, "select * from story left join users on users.unique_id = story.story_id ORDER BY date asc");
			if(mysqli_num_rows($story) > 0){
				$st = mysqli_fetch_assoc($story);
			}
			?>
				<div class="stview-story">
					<div class="show">
						<img src="<?php echo $st['story']; ?>" alt="">
						<span class="name"><?php echo $st['story_id']; ?></span>
						<div class="icon" onClick="location.href='view-story.html?story_id=<?php echo $st['story_id']; ?>'"><i class="fas fa-eye"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="insert-story">
			<form action="">
				<input type="file" name="image" id="">
				<input type="text" name="caption" id="" placeholder="Caption">
				<button><i class="fas fa-paper-plane"></i></button>
			</form>
		</div>
	</div>
</body>
</html>
<!-- If the user posts a story, it may show as other stories before. but I need to make it the first to show from other stories the user may watch -->

<!-- If the user is having more than one story, it will display in one stview-story as shows-->
<!-- but if there are many users who posted stories, I may insert them as st-view-story divs-->