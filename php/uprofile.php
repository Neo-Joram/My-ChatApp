<?php
session_start();
include_once("config.php");
$id = $_SESSION['unique_id'];
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
						$random_id = '. $id . $img_name .';
						
						$sql2 = mysqli_query($con, "UPDATE `users` SET img = {$random_id} WHERE unique_id = {$id}");
						}else{
					echo "Please select an image file!";
				}
				
			}else{
				echo "Please select an Image pe";
			}
	}else{
		echo "Please select an Image";
	}

?>