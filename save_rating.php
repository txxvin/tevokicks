<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the rating value
    $rating = $_POST['rating'];

    // Save the rating to a text file
    $file = fopen("ratings.txt", "a");
    fwrite($file, $rating . "\n");
    fclose($file);

    // Redirect back to the rating page
    header("Location: faq.html");
    exit();
}
?>