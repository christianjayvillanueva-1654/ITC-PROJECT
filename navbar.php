<?php 
$currentPage = basename($_SERVER['PHP_SELF']);   // just the file name
$currentPath = $_SERVER['PHP_SELF'];             // includes folder path
?>

<div class="navbar-background">
  <div class="Logo">PanayTale</div>
  <div class="nav-links">
    <a href="HomePage.php" class="<?php if($currentPage=='HomePage.php'){echo 'active-page';} ?>">Home</a>
    
    <a href="Books.php" class="<?php 
      if($currentPage=='Books.php' || strpos($currentPath, '/bookLinks/') !== false){
        echo 'active-page';
      } 
    ?>">Books</a>
    
    <a href="about.php" class="<?php if($currentPage=='about.php'){echo 'active-page';} ?>">About</a>
    
    <div class="sign-in">Sign-in</div>
  </div>
</div>