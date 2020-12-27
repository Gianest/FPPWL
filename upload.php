<?php
include 'conn.php';
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
<h2>Upload</h2>

<form action="uploadfc.php" method="post" enctype="multipart/form-data">
</br>
<div class="col mb-3">
	<label for="fileToUpload">Upload video</label></br>
	<input type="file" name="fileToUpload" id="fileToUpload">
</div>    	
		<div class="col mb-3">
		
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="" value="" required>
		</div>
		 <div class="form-group">
			<label for="exampleFormControlTextarea1">Deskripsi</label>
			<textarea class="form-control" name="desc" id="desc" rows="3" required ></textarea>
		  </div>
	<br/>
  <input type="submit" value="Upload" name="submit" class="btn btn-primary stretched-link">
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
