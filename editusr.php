<?php
include 'conn.php';
$id= $_POST['id'];
$sql = "SELECT * FROM user WHERE user_id = '".$id."'";
$result = mysqli_query($conn,$sql);
$t=0;
while($row = mysqli_fetch_array($result)) 
{
	$nama[$t] = $row['nama'];
	$pass[$t] = $row['password'];
	$email[$t] = $row['e-mail'];
	$t++;
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/crop.css">
</head>
<body style="background-color:black; color: white;">
<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>

<div class="container" style="margin-top:5%">
  <div class="py-5 text-center">
    <h2>Sign Up</h2>
  </div>
  <div class="row" style="width: 100%;">
    <div class="col" >
      <form class="needs-validation" action="/usredtfc.php"  method="post">
        <div class="row">
		<div class="col mb-3">
            <label for="Name">Username</label>
            <input type="Text" class="form-control" id="Name" name="usrnm" placeholder="" value="<?php echo $nama[0] ;?>" required>
            <div class="invalid-feedback">+
              Your username is required.
            </div>
        </div>
        <div class="col mb-3">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="pass" placeholder="" value="<?php echo $pass[0] ; ?>" required>
            <div class="invalid-feedback">
              At least contain 5 letters.
          </div>
		 </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name="email" id="email" placeholder="you@example.com" value="<?php echo $email[0] ; ?>">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" value="<?php echo $id ; ?>" name="id">Edit</button>
      </form>
    </div>
  </div>
<?php include 'footer.php'; ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>
</body>
</html>