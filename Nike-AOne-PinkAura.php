<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike A’One “Pink A’ura”</title>
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
    <img src="image/nike-aone-pinkaura-2-1200x1200.jpg" alt="Nike A’One Pink A’ura" class="sneaker-detail-image">
    <h1>Nike A’One “Pink A’ura”</h1>
    <p class="sneaker-description">
        <strong>Available 4/6 at 10:00 AM</strong>
        <br>
        A'ja Wilson is a true alpha. She's ready to lead when the moment arises. To light up her lioness energy, 
        this A’One brings her passion for pink to the court with a gradual ambience that speaks to A’ja’s rare aura. 
        A plush foam midsole underfoot provides unapologetic comfort, helping to keep her fresh for putting the team on her back.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $110</p>
    <a href="https://www.nike.com/launch/t/aone-pink-aura-hyper-pink" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>