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
      <div class="navbar2">
        <ul>
          <li class="active">Featured</li>
          <li>More Tales</li>
          <li>My List</li>
        </ul>
      </div>

    
    </div>
  </div>

  <!-- Scripts -->
  <script src="js/carousel.js"></script>
  <script src="js/Book-navbar.js"></script>
</body>
</html>