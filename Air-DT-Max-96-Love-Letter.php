<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike Air Diamond Turf Max ’96 “Love Letter to Connie”</title>
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
    <img src="image/Nike-Air-DT-Max-96-Love-Letter-to-Connie-IF1617-600-02.jpg" alt="Nike Air DT Max 96 Love Letter" class="sneaker-detail-image">
    <h1>Nike Air Diamond Turf Max ’96 “Love Letter to Connie”</h1>
    <p class="sneaker-description">
        <strong>Release Date: May 07, 2025</strong>
        <br>
        Deion Sanders, the celebrated dual-sport athlete whose prowess on the field was matched only by his distinctive style off it,
         continues to influence the world of sneakers. His iconic Nike Air Diamond Turf Max ’96 is set to release a new colorway that carries deep personal significance.
          Dubbed the “Love Letter to Connie,” this iteration pays heartfelt tribute to Sanders' mother, Connie Sanders, adding a profound narrative layer to the legendary shoe series.
    <p class="sneaker-price"><strong>Price:</strong> $110</p>
    <a href="https://stockx.com/nike-air-dt-max-96-love-letter-to-connie" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>

