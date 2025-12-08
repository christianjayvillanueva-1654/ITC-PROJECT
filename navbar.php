<?php 
$currentPage = basename($_SERVER['PHP_SELF']);   // just the file name
$currentPath = $_SERVER['PHP_SELF'];             // includes folder path
?>

<div class="navbar-background">
  <div class="Logo"><i>Panay</i><b>Tales</b></div>
  <div class="nav-links">
    <!-- Home -->
    <a href="<?php echo (strpos($currentPath, '/bookslink/') !== false) ? '../HomePage.php' : 'HomePage.php'; ?>" 
       class="<?php if($currentPage=='HomePage.php'){echo 'active-page';} ?>">
       Home
    </a>
    
    <!-- Books -->
    <a href="<?php echo (strpos($currentPath, '/bookslink/') !== false) ? '../Books.php' : 'Books.php'; ?>" 
       class="<?php if($currentPage=='Books.php' || stripos($currentPath, '/bookslink/') !== false){echo 'active-page';} ?>">
       Books
    </a>
    
    <!-- About -->
    <a href="<?php echo (strpos($currentPath, '/bookslink/') !== false) ? '../about.php' : 'about.php'; ?>" 
       class="<?php if($currentPage=='about.php'){echo 'active-page';} ?>">
       About
    </a>

     <a href="<?php echo (strpos($currentPath, '/bookslink/') !== false) ? '../sign-in.php' : 'sign-in.php'; ?>" 
       class="sign-in <?php if($currentPage=='sign-in.php'){echo 'active-page';} ?>">
       Sign-in
    </a>

  </div>
</div>