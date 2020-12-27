<?php
include "conn.php";
session_start();
// username and password sent from form
$myusername=$_POST['username'];
$mypassword= $_POST['password'];
if(isset($myusername) or isset($mypassword))
{
if($myusername == "" or $mypassword== "")
{?>
<script type="text/javascript">
alert("Isi username/password");
window.location = 'sgin.php';
</script>
<?php
}
}
/*if($myusername == "ceguk" or $mypassword== "awokawok"){
$_SESSION['user']=$myusername;
$_SESSION['pass']=$mypassword;
*/
$sql="SELECT `e-mail`,password FROM user WHERE `e-mail`='".$myusername."' AND password='".$mypassword."'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
	$sql = "SELECT user_id FROM user WHERE`e-mail` = '".$myusername."'";
	$result = mysqli_query($conn,$sql);
	$t = 0;
	while($row = mysqli_fetch_array($result)) 
	{
		$_SESSION['id'] = $row['user_id'];
	}
	$_SESSION['user']=$myusername;
	$_SESSION['pass']=$mypassword;
?>
<script language="JavaScript">
document.location='index.php'</script> <?php
}
else{
?>
<script type="text/javascript">
alert("Login Gagal");
window.location = 'sgin.php';
</script>
<?php
}
?>