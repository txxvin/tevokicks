<?php
session_start();
?>
<!DOCTYPE html>
<html lang=""en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
      <div class="hot-topics-container">
        <!-- Featured Topic -->
        
        <div class="featured-topic">
          <div class="featured-content">
            <a href="https://sneakernews.com/2024/07/12/air-jordan-release-dates-2025/" target="_blank">
                <img src="image/Micheal-Jordan-PNG-Free-File-Download.png" width="250" height="250" alt="New Jordan Release">
              </a>
            <h2>The 25 Best New Jordans Of 2025</h2>
            <p>Sneakernews.com drops their list of the 25 best new jordans of 2025</p>
          </div>
        </div>
    
        <!--  Grid of Recent News -->
        <div class="topic-grid">
          <div class="topic-card">
            <img src="image/adidas-crazy-2-kobe-two-black-release-date-1.webp" alt="New Kobe Release">
            <div class="card-content">
              <a href="confirmed.php"><span class="tag">Confirmed</span></a>
              <h3>Adidas Crazy 2 Is Back</h3>
              <p>Kobes most hated shoe is making a comeback...</p>
            </div>
          </div>
    
          <div class="topic-card">
            <img src="image/TheEndSalomon.avif" alt="Salomon Rumor">
            <div class="card-content">
              <a href="rumors.php"><span class="tag">Rumor</span></a>
              <h3>The END x Salomon XT-6 Emerald</h3>
              <p>Tackling Salomon’s ever-popular XT-6 silhouette, the model comes in an Emerald iteration, honoring the traditional and modern gift given to celebrate 20th Anniversaries. </p>
            </div>
          </div>
    
          <div class="topic-card">
            <img src="image/rui.avif" alt="Nike Pack Drop">
            <div class="card-content">
              <a href="dropalert.php"><span class="tag">Drop Alert</span></a>
              <h3>The Rui Hachimura x Air Jordan 1 Retro Low OG</h3>
              <p>The Rui Hachimura x Air Jordan 1 Retro Low OG will release in Spring 2025 through Nike and possibly via select retailers online and in-store.</p>
            </div>
          </div>
        </div>
      </div>
      <script>
        // Update cart count on every page
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
        document.getElementById('cart-count').textContent = cartCount;
      </script>
    </body>
    </html>