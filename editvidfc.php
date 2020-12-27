<?php

include 'conn.php'; 
$id= $_POST['id'];
$link= $_POST['link'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$file_ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir . date('YmdHis').'.'.$file_ext;
$uploadOk = 1;


if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 100000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

/* Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}*/


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	$sql = "UPDATE videos SET link='".$target_file."' WHERE video_id='".$id."'";//INSERT INTO `videos` (`video_id`, `judul`, `view`, `date`, `like`, `desc`, `link`) VALUES (NULL, ".$judul.", '0', CURDATE(), '0', ".$desc.", ".$target_file.") 
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	$Path = $link;
	if (file_exists($Path)){
		if (unlink($Path)) {   
			echo "success";
		} else {
			echo "fail";    
		}   
	} 
	else {
		echo "$link file does not exist";
	}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
