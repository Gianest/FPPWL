<?php
include 'conn.php';
$comm= $_POST['comm'];
$ses = $_POST['usr'];
$vid = $_POST['id'];
$sql = "INSERT INTO `comment` (`comm_id`, `video_id`, `user_id`, `comment`, `tgl`) VALUES (NULL,'".$vid."','".$ses."','".$comm."', CURDATE())";
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
header("Location: {$_SERVER["HTTP_REFERER"]}");
?>