<?php

include 'conn.php'; 
$judul=$_POST['judul'];
$desc = $_POST['desc'];
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
	$sql = "INSERT INTO `videos` (`video_id`, `judul`, `view`, `date`, `like`, `descc`, `link`) VALUES (NULL, '".$judul."', '0', CURDATE(), '0', '".$desc."', '".$target_file."')";//INSERT INTO `videos` (`video_id`, `judul`, `view`, `date`, `like`, `desc`, `link`) VALUES (NULL, ".$judul.", '0', CURDATE(), '0', ".$desc.", ".$target_file.") 
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
