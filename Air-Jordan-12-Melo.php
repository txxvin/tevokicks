<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Air Jordan 12 “Melo”</title>
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
    <img src="image/sz_752185_b-1200x929.jpeg" alt="Air Jordan 12 Melo" class="sneaker-detail-image">
    <h1>Air Jordan 12 “Melo”</h1>
    <p class="sneaker-description">
        <strong>Release Date: May 17,2025</strong>
        <br>
        In a tribute to basketball icon Carmelo Anthony's rookie season, Jordan Brand is set to re-release the 2004 Air Jordan 12 "Melo" in Summer 2025.
         This sneaker first captured the attention of fans and collectors when it debuted exclusively in women's sizing early in 2004, 
         closely associated with Carmelo's standout rookie run with the Denver Nuggets. (houseofheat.co)
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $200</p>
    <a href="buy-link-here" class="buy-button" target="_blank">Where to Buy"Unknown"</a>
  </div>

</body>
</html>