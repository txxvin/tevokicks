<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UNDEFEATED x Air Jordan 4</title>
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
    <img src="image/undefeated-air-jordan-4-2025-1.jpeg" alt="UNDEFEATED x Air Jordan 4" class="sneaker-detail-image">
    <h1>UNDEFEATED x Air Jordan 4</h1>
    <p class="sneaker-description">
      <strong>Drop Date: June 28, 2025</strong>
      <br>
      The countdown to the Undefeated Jordan 4 release begins as images of the highly-anticipated release of the ground-breaking collaboration surface in its best detail yet. 
      The LA-based brand/retail imprint, currently amidst a 20th Anniversary celebration, 
      has chosen to re-issue their iconic project to the masses for the first time this June, and we’ve got the early details for you covered here.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $225</p>
    <a href="https://stockx.com/jordan-4-retro-undftd" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>