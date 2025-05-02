<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The END x Salomon XT-6 Emerald</title>
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
    <img src="image/TheEndSalomon.avif" alt="Salomon Rumor" class="sneaker-detail-image">
    <h1>The END x Salomon XT-6 Emerald</h1>
    <p class="sneaker-description">
        Heralding the arrival of END.’s 20th anniversary, the British retailer has joined forces with French outdoor specialists Salomon for a jewel inspired make-up of the much-lauded XT-6 trail sneaker.  
        Designed for ultra long-distance running, it’s only right that the sought-after XT-6 sneaker would be the vehicle for END. and Salomon’s celebration of the retailer’s milestone anniversary moment. 
        Originally released in 2013, the silhouette has perfectly balanced reliable durability with contemporary style, 
        becoming an icon of modern footwear design. The perfect canvas for commemorating END.’s 20th anniversary, the contemporary classic silhouette is cast in a colour combination honouring both the traditional and the modern gifts given in celebrating this anniversary: emerald and platinum.  
        <br>
        <a href="https://www.endclothing.com/us/features/end-x-salomon-xt-6-emerald?srsltid=AfmBOooKqnpbQFxecZn0EwYNvDuFJHZsfD8DNfSJKa8D1Gpezpvr0zwC"><span class="tag">Read More</span></a>
    </p>

    
   
  </div>

</body>
</html>