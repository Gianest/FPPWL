<?php

include 'conn.php'; 
$id= $_POST['id'];
$judul = $_POST['judul'];
$descc = $_POST['desc'];
$sql = "UPDATE videos SET judul='".$judul."' WHERE video_id='".$id."'";
$sql2 = "UPDATE videos SET descc ='".$descc."' WHERE video_id='".$id."';";
	if (mysqli_query($conn,$sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	if (mysqli_query($conn,$sql2) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
?>