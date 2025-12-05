<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?> <!--This is just me testing dw-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/AboutPage.css">
</head>
<body>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <?php include 'navbar.php'; ?>
        <!--body image for about us-->
    <div class="about-wrapper">
        <div class="left-section">
    <div class="about-image">
        <img src="images/img1.jpg" alt="About us bgimg">
    </div>
</div>
<div class="about-text">
    <h2>OUR MISSION</h2>
    <p>Welcome to our website! We are dedicated to providing unforgettable
                adventures and memorable experiences. Our goal is to give you the
                best service, comfort, and satisfaction through our passion and expertise.
    </p>
    <br>
    <h2>OUR VISION</h2>
    <p>With years of experience and a love for exploration, our team works
                tirelessly to help you discover the best destinations and activities
                that match your interests.</p>
</div>
</div>
<footer class="main-footer">
    <p>@2025 <i>Panay</i><b>Tales</b>. All rights reserved.</p>
</footer>
</body>
</html>
