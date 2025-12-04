<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<div class="navbar-background">
  <div class="Logo">PanayTale</div>
  <div class="nav-links">
    <a href="HomePage.php" class="<?php if($currentPage=='HomePage.php'){echo 'active';} ?>">Home</a>
    <a href="books.php" class="<?php if($currentPage=='books.php'){echo 'active';} ?>">Books</a>
    <a href="about.php" class="<?php if($currentPage=='about.php'){echo 'active';} ?>">About</a>
    <div class="sign-in">Sign-in</div>
  </div>
</div>