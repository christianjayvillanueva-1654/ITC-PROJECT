<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Page</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/Books.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/BooksPage2.css">
  <link rel="stylesheet" href="css/Books-navbar.css">
</head>
<body>
  <!-- Main Navbar -->
  <?php include 'navbar.php'; ?>

  <div class="about-container">

    <div class="about-page1">
      
      <!-- Carousel -->
      <div class="carousel-container">
        <div class="carousel">
          <div class="card">1</div>
          <div class="card">2</div>
          <div class="card">3</div>
          <div class="card">4</div>
          <div class="card">5</div>
        </div>
      </div>

      <!-- Secondary Navbar -->
       <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

      <div class="navbar2">
        <div class="nav2-links">
           <a href="Books.php" class="<?php if($currentPage=='Books.php'){echo 'active';} ?>">Featured</a>
            <a href="MoreTales.php" class="<?php if($currentPage=='MoreTales.php'){echo 'active';} ?>">More Tales</a>
             <a href="MyList.php" class="<?php if($currentPage=='MyList.php'){echo 'active';} ?>">My List</a>
        </div>
      </div>

    
    </div>
  </div>

  <!-- Scripts -->
  <script src="js/carousel.js"></script>
  <script src="js/Book-navbar.js"></script>
</body>
</html>