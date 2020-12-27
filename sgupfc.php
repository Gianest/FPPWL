<?php
include 'conn.php';
$usrnm= $_POST['usrnm'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$sql = "INSERT INTO `user` (`user_id`, `e-mail`, `nama`, `password`, `pict`) VALUES (NULL,'".$email."','".$usrnm."','".$pass."', '')";
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>
<script language="JavaScript">
alert("Pendaftaran berhasil");
document.location='index.php';
 </script> 