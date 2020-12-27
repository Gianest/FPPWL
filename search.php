<?php 
include 'conn.php'; 
$img = array("play","play2","play3");
 ?>

<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/crop.css">
</head>
<body style="background-color:black;">

<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>
<div class="container" style="width: 80%; margin-top: 7%;">
	<?php 
	$cari = $_GET['search'];
	$sql = "SELECT * FROM videos WHERE judul like '%".$cari."%'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) 
	{
	?>
<div class="card mb-4" style="max-width: 80%;">
  <div class="row no-gutters">
    <div class="col-md-4">
	
			  <video id="video1" width="100%" >
				<source src="/<?php echo $row['link'] ?>" type="video/mp4">
				Your browser does not support HTML video.
			  </video>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['judul'] ?></h5>
        <p class="card-subtitle text-muted text-truncate"><?php echo $row['descc'] ?></p>
		<a href="/vid.php" class="stretched-link">Watch now</a>
		<p>  </p>
        <p class="card-text"><small class="text-muted"><?php echo $row['date'] ?></small></p>
      </div>
    </div>
  </div>
</div>
	<?php
		
	}
	?>
</div>
<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> 
var myVideo = document.getElementById("video1"); 
</script> 
</body>
</html> 