<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Air Jordan 1 Low OG “Rust Pink”</title>
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
    <img src="image/air-jordan-1-low-og-rust-pink-hq6998-105-1.jpg" alt="Air Jordan 1 Low OG Rust Pink" class="sneaker-detail-image">
    <h1>Air Jordan 1 Low OG “Rust Pink”</h1>
    <p class="sneaker-description">
      <strong>Release Date: June 21, 2025</strong>
      <br>
      Mike is turning a handful of classic Highs into Lows in 2025, with the Air Jordan 1 Low OG "Rust Pink" the next to join the chop-top calendar.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $140</p>
    <a href="https://stockx.com/air-jordan-1-retro-low-og-rust-pink" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>