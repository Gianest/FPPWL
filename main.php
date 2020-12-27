<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h3>Halaman Belanja</h3>
<?php
session_start();
echo "user :" . $_SESSION["user"];
?>
</br>
<a href="destroysession.php">LOG OUT</a>
<?php
if(isset($_COOKIE['kuki'])){
	$array = json_decode($_COOKIE['kuki']);
	if($array == "null"){
		$array = "";
	}
	else{
	echo "</br>Keranjang anda sekarang";
	}
}
else{
	$array = array("");
	echo "Anda blm memimilih";
} 


?>
<html><form action="main.php" method="post">
<input id="firstCheck" type="checkbox" name="test[]" value="first" <?php if(in_array('first',$array)) echo 'checked';?>>
<label for="firstCheck">Hp</label><br>
<input id="secondCheck" type="checkbox" name="test[]" value="second" <?php if(in_array('second',$array)) echo 'checked';?>>
<label for="secondCheck">Cas</label><br>
<input type="submit" name="sub" value="Send">
<?php
 if (isset($_POST['sub'])) {
        $checkboxes_array = $_POST['test'];
        setcookie("kuki", json_encode($checkboxes_array), time()+3600);
		header("Refresh:0");
    }
?>
</body>
</html>