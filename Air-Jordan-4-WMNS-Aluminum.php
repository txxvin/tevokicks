<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Air Jordan 4 Aluminum</title>
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
    <img src="image/jd_751742_b-1200x851.jpeg" alt="Air Jordan 4 Aluminum" class="sneaker-detail-image">
    <h1>Air Jordan 4 WMNS "Aluminum"</h1>
    <p class="sneaker-description">
      The Air Jordan 4 “Aluminum” is an exciting new colorway, designed exclusively for women, and is set to release in Summer 2025. This launch adds another stunning iteration to the iconic Air Jordan 4 lineup, specifically catering to female sneaker enthusiasts.
      <br><br>
      The sneaker features a fresh and stylish color scheme of White, Aluminum, Blue Tint, and Oil Green. While official images have not been released yet, it is speculated that the design will feature a clean White base with Aluminum accents for a sleek and modern touch. Blue Tint detailing is expected to enhance the overall aesthetic, likely appearing on the midsole, eyelets, and inner lining. Additionally, hints of Oil Green may be incorporated into the tongue and heel branding, offering a subtle yet striking contrast.
      <br><br>
      For comfort and traction, the shoe will maintain the familiar Air heel unit, resting on a reliable rubber outsole.
      <br><br>
      <strong>Air Jordan 4 Aluminum Release Date:</strong> May 3, 2025.
      <br><br>
      Available at select Jordan Brand retailers, online, and on Nike.com exclusively in women's sizes for a retail price of $215. With its unique color combination and the classic Air Jordan 4 design, this sneaker is a must-have. Stay tuned for more updates and official images, and make sure to mark your calendars for this exciting drop!
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $215</p>
    <a href="https://www.nike.com/launch/t/womens-air-jordan-4-aluminum" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>