<html>
<?php
include 'conn.php';     
$slct = $_GET['click'];
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/crop.css">
</head>

<body style="background-color:black; color: white;">
<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>
    <div class="container-fluid">
      <div class="row">
		<nav class="col-md-2 d-md-block sidebar navbar-dark bg-dark" style="z-index: 0;">
		<?php include 'ntvalid.php' ?>
				  <div class="sidebar-sticky" id="sdmenu">
					<ul class="nav flex-column" style="margin-top:10%;">
					<form action="/dash.php" method="get"> 
					  <li class="nav-item">
						<button  class="nav-link <?php if($_GET['click'] == ""){echo "active";}?> btn" name="click" id="click" value="" type="submit">
						   Home 
						</button>
					  </li>
					  <li class="nav-item">
						<button class="nav-link <?php if($_GET['click'] == "video"){echo "active";}?>  btn" name="click" id="click" value="video" type="submit">
						   Video
						</button>
					  </li>
					  <li class="nav-item">
						<button class="nav-link <?php if($_GET['click'] == "user"){echo "active";}?> btn" name="click" id="click" value="user" type="submit" >
						  User
						</button>
					  </li>
					  <li class="nav-item">
						<button class="nav-link <?php if($_GET['click'] == "comm"){echo "active";}?> btn"name="click" id="click" value="comm" type="submit" >
						  Comment
						</button>
					  </li>
					  <li class="nav-item">
						<button class="nav-link <?php if($_GET['click'] == "rec"){echo "active";}?> btn" name="click" id="click" value="rec" type="submit" >
						  History
						</button>
					  </li>
					  <li class="nav-item">
						<button class="nav-link <?php if($_GET['click'] == "fav"){echo "active";}?> btn" name="click" id="click" value="fav" type="submit" >
						  Favorite
						</button>
					  </li>
					</ul>
					</form>
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					</ul>
				  </div>
			</nav>
		</div>
		<div class="row" style="z-index: -1;margin-top:6%; margin-left:20%;margin-right:2%;">
		<?php
		switch ($slct) {
	    case "":
		echo "<h2>Home</h2>";
		home($conn);
		break;
		case "video":
		echo"<h2>Video</h2>";
		video($conn);
		break;
		case "user":
		echo"<h2>User</h2>";
		user($conn);
		break;
		case "comm":
		echo"<h2>Comment</h2>";
		comm($conn);
		break;
		case "rec":
		echo"<h2>History</h2>";
		rec($conn);
		break;
		case "fav":
		echo"<h2>Favorite</h2>";
		fav($conn);
		break;
		default:
		break;
		}
		?>

		</div>
    </div>
</div>
    
<?php include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html> 

<?php 
function home($cn) {
?>
<div class="container " style = "padding">
<div class="row">
<div class="col">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col">
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col">
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>
</div>
<?php 
}
function user($cn) {
$sql = "SELECT * FROM user";
$result = mysqli_query($cn,$sql);
	?>
	<div class="table-responsive-sm">
		<table class="table table-striped table-dark" style="width:100%; table-layout: fixed;">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">Email</th>
					<th scope="col">Nama</th>
					<th scope="col">Password</th>
					<th scope="col">Picture</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
					</tr>
			</thead>
			<tbody>
	<?php
	while($row = mysqli_fetch_array($result)) {
	?>
				<tr>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['e-mail']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['pict']; ?></td>
					<td><form action='editusr.php' method="post"><button name="id" class="btn btn-primary" value="<?php echo $row['user_id']; ?>" type="submit">EDIT</button></form></td>
					<td><form action='delete.php' method="post"><input type="hidden" name="menu" value="user"/><button name="del" class="btn btn-danger" type="submit" value="<?php echo $row['user_id']; ?>">DELETE</button></form></td>
				</tr>
	<?php 
	} ?>
			</tbody>
		</table>
	</div>
<?php 
}
function comm($cn) {
  $sql = "SELECT * FROM comment";
$result = mysqli_query($cn,$sql);
	?>
	<div class="table-responsive-sm">
		<table class="table table-striped table-dark" style="width:100%; table-layout: fixed;">
			<thead>
				<tr>
					<th scope="col">Comment id</th>
					<th scope="col">User id</th>
					<th scope="col">Video id</th>
					<th scope="col">Comment</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
					</tr>
			</thead>
			<tbody>
	<?php
	while($row = mysqli_fetch_array($result)) {
	?>
				<tr>
					<td><?php echo $row['comm_id']; ?></td>
					<th scope="row"><?php echo $row['video_id']  ?></th>
					<td><?php echo $row['user_id']; ?></td>
					<td><p class="text-truncate"><?php echo $row['comment'] ; ?></p></td>
					<td><form action='edit.php' method="post"><button name="id" class="btn btn-primary" value="<?php echo $row['comm_id']; ?>" type="submit">EDIT</button></form></td>
					<td><form action='delete.php' method="post"><input type="hidden" name="menu" value="comm"/><button name="del" class="btn btn-danger" type="submit" value="<?php echo $row['comm_id']; ?>">DELETE</button></form></td>
				</tr>
	<?php 
	} ?>
			</tbody>
		</table>
	</div>
<?php 
}
function rec($cn) {
$sql = "SELECT * FROM history";
$result = mysqli_query($cn,$sql);
	?>
	<div class="table-responsive-sm">
		<table class="table table-striped table-dark" style="width:100%; table-layout: fixed;">
			<thead>
				<tr>
					<th scope="col">User id</th>
					<th scope="col">Video id</th>
					<th scope="col">Delete</th>
					</tr>
			</thead>
			<tbody>
	<?php
	while($row = mysqli_fetch_array($result)) {
	?>
				<tr>
					<td><?php echo $row['rec_id']; ?></td>
					<th scope="row"><?php echo $row['video_id']  ?></th>
					<td><?php echo $row['user_id']; ?></td>
					<td><form action='delete.php' method="post"><input type="hidden" name="menu" value="rec"/><button name="del" class="btn btn-danger" type="submit" value="<?php echo $row['rec_id']; ?>">DELETE</button></form></td>
				</tr>
	<?php 
	} ?>
			</tbody>
		</table>
	</div>
<?php 
}
function fav($cn) {
$sql = "SELECT * FROM favorite";
$result = mysqli_query($cn,$sql);
	?>
	<div class="table-responsive-sm">
		<table class="table table-striped table-dark" style="width:100%; table-layout: fixed;">
			<thead>
				<tr>
					<th scope="col">Fav_id</th>
					<th scope="col">User id</th>
					<th scope="col">Video id</th>
					<th scope="col">Delete</th>
					</tr>
			</thead>
			<tbody>
	<?php
	while($row = mysqli_fetch_array($result)) {
	?>
				<tr>
					<td><?php echo $row['fav_id']; ?></td>
					<th scope="row"><?php echo $row['video_id']  ?></th>
					<td><?php echo $row['user_id']; ?></td>
					<td><form action='delete.php' method="post"><input type="hidden" name="menu" value="fav"/><button name="del" class="btn btn-danger" type="submit" value="<?php echo $row['fav_id']; ?>">DELETE</button></form></td>
				</tr>
	<?php 
	} ?>
			</tbody>
		</table>
	</div>
<?php 
}