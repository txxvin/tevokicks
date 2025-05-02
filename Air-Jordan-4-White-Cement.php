<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Air Jordan 4 "White Cement"</title>
  <link rel="stylesheet" href="tevokicks.css">
</head>
<body>
<nav>
        <div class="container">
          <div class="logo">
            <img src="image/TevoKicks.png" alt="TevoKicks Logo" />
          </div>
          <div class="links">
          <a href="tevokicks.php">HOME</a>
            <a href="mens_sneakers.php">MEN</a>
            <a href="womens_sneakers.php">WOMEN</a>
            <a href="kids_sneakers.php">KIDS</a>
            <a href="hottopics.php">HOT TOPICS</a>
            <a href="upcomingdrops.php">UPCOMING DROPS</a>
            <a href="faq.php">FAQ</a>
            <a href="cart.php">🛒 Cart (<span id="cart-count">0</span>)</a>

            <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])): ?>
                <span>Hi, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>

          </div>
        </div>
    </nav>
    

  <div class="sneaker-detail">
    <img src="image/sz_752672_c-scaled.jpeg" alt="Air Jordan 4 White Cement" class="sneaker-detail-image">
    <h1>Air Jordan 4 "White Cement"</h1>
    <p class="sneaker-description">
      <strong>Drop Date: May 24, 2025</strong>
      <br>
      The Air Jordan IV was MJ's first signature model to take flight. Complete with never before seen “Wings” acting as lace locks and an unforgettable color scheme, 
      the silhouette now returns in its truest form. Nodding to its 1989 debut, the new Air Jordan IV features iconic Nike Air branding on both the heel and outsole.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $220</p>
    <a href="https://www.nike.com/launch/t/air-jordan-4-retro-white-cement-grey" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>