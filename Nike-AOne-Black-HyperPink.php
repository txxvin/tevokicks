<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike A’One “Black Hyper Pink”</title>
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
    <h1>Nike A’One “Black Hyper Pink”</h1>
    <p class="sneaker-description">
        <strong>Available 4/29 at 10:00 AM</strong>
        <br>
        A’ja Wilson’s debut signature shoe is set to launch in the Summer, and the initial drops has Nike thinking pink. In addition to the 
        “Pink Aura” colorway that served as the debut piece, 
        the Nike A’One kicks are set to land in a Black/Hyper Pink colorway seen here.
    </p>
    <p class="sneaker-price"><strong>Price:</strong> $110</p>
    <a href="https://www.nike.com/basketball/aja-wilson?_android_redirect=https://www.nike.com/w?q%3DUnisex+A%27One&vst=Unisex+A%27One&vst=Unisex+A%27One&vst=Unisex+A%27One&vst=Unisex+A%27One&_fallback_redirect=https://www.nike.com/w?q%3DUnisex+A%27One&_ios_redirect=https://www.nike.com/w?q%3DUnisex+A%27One&cid=4942550&cjevent=705aa58321ff11f082e4021b0a82b82a&cl=705aa58321ff11f082e4021b0a82b82a&cp=usns_aff_nike_content_PID_101195810_Sneaker+News&pcn=cj_mobile_inactivity-0d&pcrid=13067763&pcrn=CJ&psid=101195810&psn=Sneaker+News&q=Unisex+A%27One&referrer=singular_click_id%3Dedc3732f-7a28-4010-8810-fc38685f9400&sl_id=jjo0" class="buy-button" target="_blank">Where to Buy</a>
  </div>

</body>
</html>