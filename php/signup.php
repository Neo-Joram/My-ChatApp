<?php
session_start();
include_once("config.php");
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
//	email valid or not
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//		if email already exist
		$sql = mysqli_query($con, "SELECT email FROM users WHERE email = '{$email}'");
		if(mysqli_num_rows($sql) > 0){
			echo "$email - This email already exist!";
		}else{
			if(isset($_FILES['image'])){
				$img_name = $_FILES['image']['name'];
				$tmp_name = $_FILES['image']['tmp_name'];
    			$target_dir = "../images/";
    			$target_file = $target_dir.basename($_FILES['image']['name']);
    			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    			$extensions_arr = array("jpg", "jpeg", "png", "gif");
				
				$img_explode = explode('.', $img_name);
				$img_ext = end($img_explode);
				
				if(in_array($imageFileType, $extensions_arr)){
					$time = time();
					
					$new_img_name = $time.$img_name;
					if(move_uploaded_file($tmp_name, $target_dir.$new_img_name)){
						$status = "Active";
						$random_id = rand(time(), 10000000);
						
						$sql2 = mysqli_query($con, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
						if($sql2){
							$sql3 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
							if(mysqli_num_rows($sql3) > 0){
								$row = mysqli_fetch_assoc($sql3);
								$_SESSION['unique_id'] = $row['unique_id'];
								echo 'success';
							}
						}else{
							echo "Something went wrong!";
						}
					}
				}else{
					echo "Please select an image file!";
				}
				
			}else{
				echo "Please select an Image";
			}
		}
	}else{
		echo "$email - This is not valid email!";
	}
}else{
	echo "All input fields are required!";
}
?>