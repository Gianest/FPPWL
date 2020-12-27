<?php 
include 'conn.php';                    
$judul = [];
$desc = [];
$link = [];
$t=0;
$sql = "SELECT * FROM videos";
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
<body style="background-color:black;">

<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>
<form action="/vid.php" method="get">   
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style = "margin-top:5%">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
	  <div class= "carousel-inner ">
		<div class="carousel-item active">
			 <p href="/video.php" style = "text-align: center"><video id="video1" width="75%" >
				<source src="/<?php echo "$link[0]" ?>" type="video/mp4">
				Your browser does not support HTML video.
			  </video></p>
		  <div class="carousel-caption d-none d-md-block">
			<h5><?php echo "$judul[0]" ?></h5>
			<p class = "truncate"><?php echo "$desc[0]" ?></p>
			<button name="link" type="submit" class="btn btn-primary stretched-link" value= "<?php echo "$link[0]" ?>">Watch now</button>
		  </div>
		</div>
		<div class="carousel-item">
			 <p href="/video.php" style = "text-align: center"><video id="video1" width="75%" >
				<source src="/<?php echo "$link[1]" ?>" type="video/mp4">
				Your browser does not support HTML video.
			  </video></p>
		  <div class="carousel-caption d-none d-md-block">
			<h5><?php echo "$judul[1]" ?></h5>
			<p class = "truncate"><?php echo "$desc[1]" ?></p>
			<button name="link" type="submit" class="btn btn-primary stretched-link" value= "<?php echo "$link[1]" ?>">Watch now</button>
		  </div>
		</div>
		<div class="carousel-item">
			 <p href="/video.php" style = "text-align: center"><video id="video1" width="75%" >
				<source src="/<?php echo "$link[2]" ?>" type="video/mp4">
				Your browser does not support HTML video.
			  </video></p>
		  <div class="carousel-caption d-none d-md-block">
			<h5><?php echo "$judul[2]" ?></h5>
			<p class = "truncate"><?php echo "$desc[2]" ?></p>
			<button name="link" type="submit" class="btn btn-primary stretched-link" value= "<?php echo "$link[2]" ?>">Watch now</button>
		  </div>
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </a>
	</form>
</div>
<div class="container d-flex justify-content-center" style="width: 80%; text-align: center;" >
	<form action="/vid.php" method="get">   
   <div class="row" style = "text-align: center" >
	<?php 
	for($i=1;$i<=3;$i++){
		$x = $i-1;
		if (isset($i)) {
	?>
		<div class="col-sm">
			<div class="card" style="width: 18rem;">
			  <p style = "text-align: center"><video id="video1" width="100%" >
				<source src="/<?php echo $link[$x] ?>" type="video/mp4">
				Your browser does not support HTML video.
			  </video></p>
			  <div class="card-body"> 
				<h5 class="card-title"><?php echo "$judul[$x]" ?></h5>
				 <button name="link" type="submit" class="btn btn-primary stretched-link" value= "<?php echo "$link[$x]" ?>">Watch now</button>
			  </div>
			</div>
			<a> </a>
		</div>
		
	<?php
		}
	}
	?>
	</form>
	</div>
</div>
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script> 
var myVideo = document.getElementById("video1"); 
</script> 
</body>
</html> 
















