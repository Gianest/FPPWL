<?php
include 'conn.php';  
$sql = "SELECT * FROM videos WHERE video_id = '" .$_POST['id'] ."'";
$t = 0 ;
$id = $_POST['id'];
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) 
{
	$judul[$t] = $row['judul'];
	$desc[$t] = $row['descc'];
	$link[$t] = $row['link'];
	$t++;
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/crop.css">
</head>
<body style="background-color:black;color:white;">
<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>
<div class="container" style="margin-top:8%">
<div class="row" style="width: 100%;">
<h2>Edit Video</h2>

	<form action="editvidfc.php" method="post" enctype="multipart/form-data">
		</br>
		<div class="col mb-3">
		  <label for="fileToUpload">Reupload video</label></br>
		  <input type="file" name="fileToUpload" id="fileToUpload">
		  <input type="hidden" name="link" value="<?php echo $link[0]?>"/>
		  <button type="submit" value="<?php echo $_POST['id'];?>" name="id" class="btn btn-primary">Update</button>
		</div> 
	</form>
	
	<form action="editvidtxt.php" method="post" enctype="multipart/form-data">
		<div class="col mb-3">
			<label>Judul</label>
				<input type="text" class="form-control" name="judul" id="judul" placeholder="" value="<?php echo $judul[0] ;?>">
		</div>
		<div >
			<label for="exampleFormControlTextarea1">Deskripsi</label>
			<!--<input type="text" class="form-control" name="desc" id="desc" placeholder="" value="<?php //echo $desc[0] ;?>" >-->
			<textarea class="form-control" name="desc" id="desc" rows="3" ><?php echo $desc[0] ;?></textarea>
		</div>
		<br/>
		<button type="submit" value="<?php echo $_POST['id'];?>" name="id" class="btn btn-primary">Update</button>
	</form>
</div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
