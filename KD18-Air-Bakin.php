<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike KD 18 "Air Bakin"</title>
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
    <img src="image/nike-kd-18-air-bakin-hv1992-600-release-info-001-1-1200x800.jpeg" alt="Nike KD 18 Air Bakin" class="sneaker-detail-image">
    <h1>Nike KD 18 "Air Bakin"</h1>
    <p class="sneaker-description">
        <strong>Release Date: May 15, 2025</strong>
        <br>
        Kevin Durant’s Nike KD 18 signature shoe launched in mid-February as part of the Black Label collection, officially commencing the lifecycle of his 18th signature shoe with the Swoosh.
         While other pairs won’t be hitting retail until April, we’re getting some previews via Durant’s on-court selections and this newly revealed PE that has connections to his roots.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $150</p>
    <a href="" class="buy-button" target="_blank">Where to Buy"Unknown"</a>
  </div>

</body>
</html>