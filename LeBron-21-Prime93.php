<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike LeBron 21 “Prime 93 Fire Red”</title>
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
    <img src="image/jd_752296_b-1200x850.jpeg" alt="Nike LeBron 21 Prime 93 Fire Red" class="sneaker-detail-image">
    <h1>Nike LeBron 21 “Prime 93 Fire Red”</h1>
    <p class="sneaker-description">
        <strong>Release Date: May 05, 2025 </strong>
        <br>
        The Nike LeBron 21 Prime 93 is a continuation of the celebrated partnership between Nike and NBA star LeBron James, embodying both style and high-performance technology.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $180</p>
    <a href="https://www.goat.com/sneakers/lebron-21-prime-93-fire-red-hq3480-001" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>