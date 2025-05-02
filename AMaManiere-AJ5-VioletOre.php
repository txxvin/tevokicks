<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>A Ma Maniére x Air Jordan 5 "White/Violet Ore"</title>
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
    <img src="image/Ge9XElPbwAYpD5r.jpeg" alt="A Ma Maniére x Air Jordan 5 Violet Ore" class="sneaker-detail-image">
    <h1>A Ma Maniére x Air Jordan 5 "White/Violet Ore"</h1>
    <p class="sneaker-description">
        <strong>Drop Date: May 14, 2025</strong>
        <br>
        Jordan Brand and A Ma Maniére continue their partnership with the Air Jordan 5 “Violet Ore.” This release celebrates the model’s 35th anniversary with a luxurious design. 
        Following successful collaborations on the Air Jordan 3 and 4, AMM applies its premium touch to this classic silhouette.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $225</p>
    <a href="https://www.goat.com/sneakers/a-ma-mani-re-x-air-jordan-5-retro-og-violet-ore-ib1528-100" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>