<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike Kobe 5 Protro "Indiania Fever"</title>
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
    <img src="image/Gm6UgRjXgAAW0Qz-1200x1496.jpg" alt="Nike Kobe 5 Protro Indiania Fever" class="sneaker-detail-image">
    <h1>Nike Kobe 5 Protro "Indiania Fever"</h1>
    <p class="sneaker-description">
        <strong>Release Date: June 1, 2025</strong>
        Caitlin Clark and Nike rumored to release the Nike Kobe 5 Protro “Indiania Fever” on June 1, 2025, for $190 via SNKRS and select retailers.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $215</p>
    <a href="" class="buy-button" target="_blank">Where to Buy "Unknown"</a>
  </div>

</body>
</html>