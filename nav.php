<?php session_start(); 
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow" style = "opacity: 0.92;" >
  <div class="container-fluid">
  <a class="navbar-brand" href="/">Movie Kube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
  <form class="my-2 my-lg-0 p-2 flex-grow-1 d-flex justify-content-center" action="/search.php" method="get">
        <input class="form-control me-2 w-50" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" value="Search">Search</button>
      </form>
  <!--<form class="form-inline my-2 my-lg-0 p-2 flex-grow-1 d-flex justify-content-center" action="/search.php" method="get">
    <input class="form-control mr-sm-2 p-2 w-50" name="search" type="search" placeholder="Search" aria-label="Search">
    <input type="submit" class="btn btn-outline-success" value="Search">
  </form> -->
      <ul class="navbar-nav mr-auto p-2 d-flex justify-content-center">
	  <?php if (isset($_SESSION['user'])){?>
	   <li class="nav-item dropdown">
        <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php //echo $_SESSION["user"];?> 
		  <img src="media/pholder.png" width="30" height="30" class="crop " alt="" loading="lazy">
        </a>
		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Upload</a></li>
		  <li><div class="dropdown-divider"></div></li>
          <li><a class="dropdown-item" href="/destroysession.php">Logout</a></li>

        </ul>-->
		  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['user'];?> 
			<img src="media/pholder.png" width="30" height="30" class="crop " alt="" loading="lazy">
        </a>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="
			<?php if($_SESSION['user'] == "admin"){echo "/dash.php";}else{echo "/usrdash.php";} ?>
			">Board</a></li>
            <li><a class="dropdown-item" href="/upload.php">Upload</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/destroysession.php">Logout</a></li>
          </ul>
      </li>
	  </ul>
	  <?php 
	  }
	  else {
	  ?>
		<a class="nav-item nav-link" href="/sgin.php">Login</a>
	  <?php }?>
    </ul>
  </div>
  </div>
</nav>


