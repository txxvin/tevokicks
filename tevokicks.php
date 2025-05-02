<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TevoKicks</title>
  <link rel="stylesheet" href="tevokicks.css">
</head>
<body>

<nav>
  <div class="container">
    <div class="logo">
      <img src="image/TevoKicks.png" alt="TevoKicks Logo" />
    </div>
    <div class="links">
      <a href="mens_sneakers.php">MEN</a>
      <a href="womens_sneakers.php">WOMEN</a>
      <a href="kids_sneakers.php">KIDS</a>
      <a href="hottopics.php">HOT TOPICS</a>
      <a href="upcomingdrops.php">UPCOMING DROPS</a>
      <a href="faq.php">FAQ</a>
      <a href="cart.php">🛒 Cart (<?= $cartCount ?>)</a>

      <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])): ?>
        <span>Hi, <?= htmlspecialchars($_SESSION['user_name']) ?></span>
        <a href="logout.php">Logout</a>
      <?php else: ?>
        <a href="login.php">Login</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<section>
  <div class="content">
    <div class="main-content">
      <h1 class="welcome">Welcome</h1>
      <h1>2 TevoKicks</h1>
    </div>
    <div class="image">
      <img src="image/air-jordan-1-retro-high-travis-scott-cactus-jack-133305.png" alt="">
    </div>
  </div>
</section>

</body>
</html>