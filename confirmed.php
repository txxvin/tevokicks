<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adidas Crazy 2 Is Back</title>
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
    <img src="image/adidas-crazy-2-kobe-two-black-release-date-1.webp" alt="New Kobe Release" class="sneaker-detail-image">
    <h1>Adidas Crazy 2 Is Back</h1>
    <p class="sneaker-description">
        The lore around the adidas Crazy 2 is exactly that: crazy. Kobe Bryant hated the shoe so much that he stopped wearing them and went back to his first model in the Playoffs. 
        He then approached adidas to get out of his contract, leaving the Kobe Three to never be released.
         The Black Mamba eventually landed at Nike; today, there’s an entire category called the Kobe Brand dedicated to his own branded footwear and apparel.
            <br>
            <a href="https://sneakernews.com/2025/02/10/adidas-crazy-2-kobe-two-black-release-date/"><span class="tag">Read More</span></a>

    </p>
    
   
  </div>

</body>
</html>