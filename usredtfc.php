
<?php
include 'conn.php';
$id= $_POST['id'];
$usrnm= $_POST['usrnm'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$sql = "DELETE FROM user WHERE user_id = '" .$id ."'";

  // use exec() because no results are returned
  	if ($conn->query($sql) === TRUE) {
	  echo "Record deleted successfully"; header('/dash.php?click=video');
	} else {
	  echo "Error: " . $sql . "<br>" . $cn->error;
	}
	
$sql = "INSERT INTO `user` (`user_id`, `e-mail`, `nama`, `password`, `pict`) VALUES ('".$id."','".$email."','".$usrnm."','".$pass."', '')";
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>
<script language="JavaScript">
alert("Update berhasil");
document.location='dash.php?click=user';
</script> 