<?php
include 'conn.php';     
$sql = "SELECT * FROM comment WHERE video_id = '".$vid[0]."'";
$result = mysqli_query($conn,$sql);
$t = 0;
while($row = mysqli_fetch_array($result)) 
{
	$commid[$t] = $row['comm_id'];
	$usidc[$t] = $row['user_id'];
	$comm[$t] = $row['comment'];
	$date[$t] = $row['tgl'];
	$sql2 = "SELECT * FROM user WHERE user_id = '".$usidc[0]."'";
	$results = mysqli_query($conn,$sql2);
	while($row = mysqli_fetch_array($results)) 
		{
			$usridr[$t] = $row['nama'];
		}
	$t++;
}
//$conn->query("SELECT * FROM user WHERE user_id = '".$usid[0]."'")

/*$result = mysqli_query($conn,$sql2);
$t = 0;
while($row = mysqli_fetch_array($result)) 
{
	$usridr[$t] = $row['nama'];
}*/
$t = 0;
$r = count($commid);
while($t < $r){
?>
		<div class="row" style="margin-top:2%; ">
			<div class="col-sm-auto"><img src="/media/pholder.png" class="align-self-start mr-3 crop" width="30" height="30" alt="..."></div>
			<div class="col-sm">
			<h5 class="mt-0"><?php echo $usridr[0] ?></h5>
			</div>
			<p style="margin-top:2%"><?php echo $comm[$t] ?></p>
		</div>
<?php
$t++;
}
?>