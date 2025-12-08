<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/MoreTales.css">
  <link rel="stylesheet" href="css/navbar.css">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Intel+One+Mono:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/More.css">
   <link rel="stylesheet" href="css/MoreTales-navbar2.css">
</head>

<body>

  <?php include 'navbar.php'; ?>

  <main>
   <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

      <div class="navbar3">
        <div class="nav3-links">
           <a href="Books.php" class="Featured">Featured</a>
            <a href="MoreTales.php" class="More-Tales">More Tales</a>
             <a href="MyList.php" class="My-List">My List</a>
        </div>
      </div>
  </main>

</body>
</html>