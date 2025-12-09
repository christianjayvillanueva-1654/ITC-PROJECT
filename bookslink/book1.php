<?php
include '../booksData.php';

$book = $books['Hinilawod'];
$paragraph = "“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”";

$content = 
    "<p>" . nl2br(htmlspecialchars($paragraph)) . "</p>" .
    // Add the YouTube iframe here
    '<iframe width="560" height="315" src="https://www.youtube.com/embed/q3gFBN57rYM?si=I6EgqRYfaxLKh_o7" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';

include 'bookTemplate.php';  // load the design
?>