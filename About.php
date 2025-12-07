<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

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

<?php include 'navbar.php'; ?>

<div class="about-wrapper">

    <!-- LEFT SIDE IMAGE -->
    <div class="left-section">
        <div class="left-image-container">
        <img src="images/Tales2.jpg" alt="About us bg image">
    </div>
</div>

    <!-- RIGHT SIDE TEXT -->
    <div class="about-text">
        <div class="info-box">
        <h2>OUR MISSION</h2>
        <p>Our mission is to preserve, celebrate, and share the untold stories and treasured folklore of Panay Island. We aim to bring joy, curiosity, and cultural pride by making 
        these tales accessible to all—especially to younger generations who may have never heard them.
         Through our platform, we seek to keep our heritage alive, pass down the wisdom and wonder of our local legends, and inspire others to appreciate the beauty and magic of Panay’s storytelling traditions.</p>
</div>
<div class="info-box">
        <h2>OUR VISION</h2>
        <p>Our vision is to see Panay and Iloilo’s stories recognized and celebrated across the Philippines and the world—just like the well-known tales of other islands and cultures.
         We envision a future where our rich folklore is taught, shared, and passed on with pride from one generation to the next. By shining light on these meaningful narratives, we hope to strengthen Pinoy identity,
          uplift local culture, and ensure that the tales of Panay stand proudly among the legends of the world.</p>
    </div>
</div>

</div> <!-- END OF WRAPPER -->

<footer class="main-footer">

    <div class="footer-content">

        <div class="footer-section about">
            <div class="logo">
                <img src="images/logonobg.png" alt="PanayTales Logo">
            </div>
            <p>Your gateway to unforgettable adventures and memorable Reading.</p>
        </div>

        <div class="footer-section links">
            <h2>Check us out</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Services.php">Our Tales</a></li>
            </ul>
        </div>

        <div class="footer-section contact">
            <h2>Contact Us</h2>
            <p>PanayTales@gmail.com</p>
            <p>© 2025 <i>Panay</i><b>Tales</b>. All rights reserved.</p>
        </div>

    </div>

</footer>

</body>
</html>