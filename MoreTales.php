<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/MoreTales.css">
    <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/Books-navbar2.css">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/MoreTales-navbar2.css">
</head>

<body>

  <?php include 'navbar.php'; ?>

  <main>

    <div class="right-side">

    <div class="searchBar">
      <input type="text" placeholder="Search for tales">
      <button type="submit">Search</button>
    </div>

   <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

      <div class="navbar3">
        <div class="nav3-links">
           <a href="Books.php" class="Featured">Featured</a>
            <a href="MoreTales.php" class="More-Tales">More Tales</a>
             <a href="MyList.php" class="My-List">My List</a>
        </div>
      </div>

      <div class="content">
        <div class="genre">
          <div class="legend">Mythology</div>
          <div class="boook">
            <div class="book">Book 1</div>
            <div class="book">Book 2</div>
            <div class="book">Book 3</div>
          </div>
        </div>

        <div class="genre">
          <div class="legend">Epic Tales</div>
          <div class="boook">
            <div class="book">Book A</div>
            <div class="book">Book B</div>
          </div>
        </div>

        <div class="genre">
          <div class="legend">Legends</div>
          <div class="boook">
            <div class="book">Book X</div>
            <div class="book">Book Y</div>
            <div class="book">Book Z</div>
          </div>
        </div>
      </div>


    </div>
  </main>

</body>
</html>