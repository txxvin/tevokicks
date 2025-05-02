<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Air Jordan 11 Low “Igloo”</title>
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
    <img src="image/air-jordan-11-low-igloo-ah7860-103-1.png" alt="Air Jordan 11 Low Igloo" class="sneaker-detail-image">
    <h1>Air Jordan 11 Low “Igloo”</h1>
    <p class="sneaker-description">
        <strong>Release Date: June 7th 2025</strong>
        <br>
        Jordan Brand will continue its annual tradition of summertime Air Jordan 11 Low exclusives for ladies,
         with the season set for a new interpretation in 2025: the Air Jordan 11 Low "Igloo"
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $190</p>
    <a href="https://stockx.com/search?s=Air%20Jordan%2011%20AH7860-103&utm_source=af&utm_medium=imp&utm_campaign=1960192&impactSiteId=VgS1JM2UxxycR7mUiKVhpzfwUksRyCzShWb70Q0&clickid=VgS1JM2UxxycR7mUiKVhpzfwUksRyCzShWb70Q0&utm_term=VgS1JM2UxxycR7mUiKVhpzfwUksRyCzShWb70Q0&utm_content=_530344&irgwc=1&irclickid=VgS1JM2UxxycR7mUiKVhpzfwUksRyCzShWb70Q0&ir_campaignid=9060&ir_adid=530344&ir_partnerid=1960192" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>