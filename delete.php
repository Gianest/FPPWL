<?php 
include 'conn.php';
$slct = $_POST['menu'];


		switch ($slct) {
	    case "":
		break;
		case "video":
		video($conn);
		break;
		case "user":
		user($conn);
		break;
		case "comm":
		comm($conn);
		break;
		case "rec":
		rec($conn);
		break;
		case "fav":
		fav($conn);
		break;
		default:
		break;
		}
 

function video($cn) {
$del = $_POST['del'];
$sql = "DELETE FROM videos WHERE video_id = '" .$del ."'";
$link= $_POST['link'];
$Path = $link;
  // use exec() because no results are returned
  	if ($cn->query($sql) === TRUE) {
	  echo "Record deleted successfully"; header('/dash.php?click=video');
	} else {
	  echo "Error: " . $sql . "<br>" . $cn->error;
	}

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
 
}

function user($cn) {
$del = $_POST['del'];
$sql = "DELETE FROM user WHERE user_id = '" .$del ."'";

  // use exec() because no results are returned
  	if ($cn->query($sql) === TRUE) {
	  echo "Record deleted successfully"; header('/dash.php?click=video');
	} else {
	  echo "Error: " . $sql . "<br>" . $cn->error;
	}
 
}

function comm($cn) {
$del = $_POST['del'];
$sql = "DELETE FROM comment WHERE comm_id = '" .$del ."'";

  // use exec() because no results are returned
  	if ($cn->query($sql) === TRUE) {
	  echo "Record deleted successfully"; header('/dash.php?click=video');
	} else {
	  echo "Error: " . $sql . "<br>" . $cn->error;
	}
 
}

function rec($cn) {
$del = $_POST['del'];
$sql = "DELETE FROM history WHERE rec_id = '" .$del ."'";

  // use exec() because no results are returned
  	if ($cn->query($sql) === TRUE) {
	  echo "Record deleted successfully"; header('/dash.php?click=video');
	} else {
	  echo "Error: " . $sql . "<br>" . $cn->error;
	}
}

function fav($cn) {
$del = $_POST['del'];
$sql = "DELETE FROM favorite WHERE fav_id = '" .$del ."'";

  // use exec() because no results are returned
  	if ($cn->query($sql) === TRUE) {
	  echo "Record deleted successfully"; header('/dash.php?click=video');
	} else {
	  echo "Error: " . $sql . "<br>" . $cn->error;
	}
 
}

?>