<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $book['title']; ?></title>

  <link rel="stylesheet" href="../css/bookTemplateStyle.css">
  <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>

  <?php include '../navbar.php'; ?>

  <div class="book-hero" style="background-image: url('../<?php echo $book['cover_image']; ?>');">
    
    <!-- Gradient overlay layer -->
    <div class="gradient-layer"></div>
    
    <!-- Content layer split into two parts -->
    <div class="content-layer">
      <div class="about-book">
        <!-- Responsive section -->
      </div>

      <div class="book-content">
        <!-- Fixed 50% viewport width section -->
      </div>
    </div>

  </div>

</body>
</html>