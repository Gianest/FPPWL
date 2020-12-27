<?php include 'conn.php' ?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/crop.css">
</head>
<body style="background-color:black; color: white;">
<div style="width: 100%;z-index: 10; position: fixed; top: 0;"><?php include 'nav.php'; ?></div>
<?php include 'valid.php' ?>
<div class="container" style="margin-top:5%">
  <div class="py-5 text-center">
    <h2>Sign Up</h2>
  </div>
  <div class="row" style="width: 100%;">
    <div class="col" >
      <form class="needs-validation" action="/sgupfc.php"  method="post">
        <div class="row">
		<div class="col mb-3">
            <label for="Name">Username</label>
            <input type="Text" class="form-control" id="Name" name="usrnm" placeholder="" value="" required>
            <div class="invalid-feedback">+
              Your username is required.
            </div>
        </div>
        <div class="col mb-3">
            <label for="Password">Password</label>
            <input type="Password" class="form-control" id="Password" name="pass" placeholder="" value="" required>
            <div class="invalid-feedback">
              At least contain 5 letters.
          </div>
		 </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Sign Up</button>
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