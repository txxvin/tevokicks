<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Air Jordan 1 High OG WMNS "Ruby"</title>
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
    <img src="image/nike-womens-air-jordan-1-high-og-varsity-red-fd2596-602-5-1200x929.jpeg" alt="Air Jordan 1 High OG WMNS Ruby" class="sneaker-detail-image">
    <h1>Air Jordan 1 High OG WMNS "Ruby"</h1>
    <p class="sneaker-description">
      <strong>Drop Date: May 22, 2025</strong>
      <br>
      Jordan Brand celebrates its 40th anniversary with the women’s-exclusive Air Jordan 1 High OG “Ruby.” Inspired by the ruby gemstone, 
      it symbolizes 40-year milestones with vibrant red hues.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $180</p>
    <a href="https://www.nike.com/" class="buy-button" target="_blank">Where to Buy"Unknown"</a>
  </div>

</body>
</html>