<?php
include 'conn.php';   

$sql = "SELECT * FROM videos WHERE link = '".$_GET['link']."'";
$result = mysqli_query($conn,$sql);
$t = 0;
while($row = mysqli_fetch_array($result)) 
{
	$usid[$t] = $row['user_id'];
	$judul[$t] = $row['judul'];
	$desc[$t] = $row['descc'];
	$usid[$t] = $row['user_id'];
	$vid[$t] = $row['video_id'];
	$t++;
}
//$conn->query("SELECT * FROM user WHERE user_id = '".$usid[0]."'")
$sql = "SELECT * FROM user WHERE user_id = '".$usid[0]."'";
$result = mysqli_query($conn,$sql);
$t = 0;
while($row = mysqli_fetch_array($result)) 
{
	$usrid[$t] = $row['nama'];
} 

?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/crop.css">
</head>
<body style="background-color:black; color: white;">
	<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>
	<?php
	if (isset($_SESSION['user'])){
	$sql = "INSERT INTO `history` (`rec_id`, `user_id`, `video_id`) VALUES ('NULL', '".$_SESSION['id']."', '".$vid[0]."') ";
	if ($conn->query($sql) === TRUE) {
	  echo "";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	} }
	else {
	$sql = "INSERT INTO `history` (`rec_id`, `user_id`, `video_id`) VALUES ('NULL', '0', '".$vid[0]."') ";
	if ($conn->query($sql) === TRUE) {
	  echo "";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	} }
	?>
	<div class = "container" style = "margin-right :25%" >
	<div class = "row">
	<div class = "col-lg">
	<div style="margin-left:2%; margin-top:7%  ">
		<video width="100%" controls>
			<source src="/<?php echo $_GET['link'] ?>" type="video/mp4">
				Your browser does not support HTML video.
			</video>
		<div class="row" style="margin-top:2%; ">
			<div class="col">
				<h5 class="mt-0"><?php echo "$judul[0]" ;?></h5>
			</div>
			<div class="col">
				<div class="d-flex flex-row-reverse"><button type="submit" value="<?php echo $vid[0] ;?>" name="id" class="btn btn-primary" <?php if(isset($_SESSION['user'])){} else{echo "disabled";}?>>Like</button></div>
			</div>
		</div>
		<div class="row" style="margin-top:2%; ">
			<div class="col-sm-auto"><img src="/media/pholder.png" class="align-self-start mr-3 crop" width="30" height="30" alt="..."></div>
			<div class="col-sm">
			<h5 class="mt-0"><?php echo $usrid[0]; ?></h5>
			</div>
				<p style="margin-top:2%"><?php echo "$desc[0]" ?></p>
		<form action="/comment.php" method="post" enctype="multipart/form-data">
				<textarea class="form-control" placeholder="Comment here" name="comm" id="floatingTextarea2" rows="3"></textarea>
				</br>
				<input type="hidden" name="usr" value=" <?php echo $_SESSION['id'];?>"/>
				<div class="d-flex flex-row-reverse"><button type="submit" value="<?php echo $vid[0] ;?>" name="id" class="btn btn-primary" <?php if(isset($_SESSION['user'])){} else{echo "disabled";}?>>Comment</button></div>
			</form>
		</div>
		<?php include 'commbot.php'; ?>
	</div>
	</div>
	<div class = "col-sm-auto">   </div>
	</div>
	</div>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</script> 
</body>
</html>  

