<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=$base_url;?>/index.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=$base_url;?>/users/users_list.php"> User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$base_url;?>/products/products_list.php"> Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$base_url;?>/categories/categories_list.php"> Category</a>
      </li>
    </ul>
     <span class="navbar-text mr-1">
      <?php echo $_SESSION['username'];?>
    </span>
    <span class="navbar-text">
      <a href="<?=$base_url;?>/logout.php" class="nav-link btn btn-outline-primary" > Logout<a>
    </span>
  </div>
</nav>
<nav class="navbar navbar-dark ">

	
	
</nav> 





