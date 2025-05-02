<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TevoKicks - Upcoming Drops</title>
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

<h1>Upcoming Sneaker Drops</h1>

<div class="calendar-grid">

    <div class="sneaker-drop">
        <a href="Air-Jordan-4-WMNS-Aluminum.php" class="sneaker-link">
            <img src="image/jd_751742_b-1200x851.jpeg" alt="Air Jordan 4 WMNS Aluminum" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Air Jordan 4 WMNS "Aluminum"</p>
                <p class="drop-date">Drop Date: May 3, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="LeBron-21-Prime93.php" class="sneaker-link">
            <img src="image/jd_752296_b-1200x850.jpeg" alt="Nike LeBron 21 Prime 93 Fire Red" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Nike LeBron 21 “Prime 93 Fire Red”</p>
                <p class="drop-date">Drop Date: May 5, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Nike-AOne-PinkAura.php" class="sneaker-link">
            <img src="image/nike-aone-pinkaura-2-1200x1200.jpg" alt="Nike A’One Pink A’ura" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Nike A’One “Pink A’ura”</p>
                <p class="drop-date">Drop Date: May 6, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Air-DT-Max-96-Love-Letter.php" class="sneaker-link">
            <img src="image/Nike-Air-DT-Max-96-Love-Letter-to-Connie-IF1617-600-02.jpg" alt="Nike Air DT Max 96 Love Letter" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Nike Air Diamond Turf Max ’96 “Love Letter to Connie”</p>
                <p class="drop-date">Drop Date: May 7, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="AMaManiere-AJ5-VioletOre.php" class="sneaker-link">
            <img src="image/Ge9XElPbwAYpD5r.jpeg" alt="A Ma Maniére x Air Jordan 5 Violet Ore" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">A Ma Maniére x Air Jordan 5 "White/Violet Ore"</p>
                <p class="drop-date">Drop Date: May 14, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="KD18-Air-Bakin.php" class="sneaker-link">
            <img src="image/nike-kd-18-air-bakin-hv1992-600-release-info-001-1-1200x800.jpeg" alt="Nike KD 18 Air Bakin" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Nike KD 18 "Air Bakin"</p>
                <p class="drop-date">Drop Date: May 15, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Air-Jordan-12-Melo.php" class="sneaker-link">
            <img src="image/sz_752185_b-1200x929.jpeg" alt="Air Jordan 12 Melo" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Air Jordan 12 “Melo”</p>
                <p class="drop-date">Drop Date: May 17, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Air-Jordan-1-High-OG-WMNS-Ruby.php" class="sneaker-link">
            <img src="image/nike-womens-air-jordan-1-high-og-varsity-red-fd2596-602-5-1200x929.jpeg" alt="Air Jordan 1 High OG WMNS Ruby" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Air Jordan 1 High OG WMNS "Ruby"</p>
                <p class="drop-date">Drop Date: May 22, 2025</p>
            </div>
        </a>
    </div>  

    <div class="sneaker-drop">
        <a href="Air-Jordan-4-White-Cement.php" class="sneaker-link">
            <img src="image/sz_752672_c-scaled.jpeg" alt="Air Jordan 4 White Cement" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Air Jordan 4 "White Cement"</p>
                <p class="drop-date">Drop Date: May 24, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Nike-AOne-Black-HyperPink.php" class="sneaker-link">
            <img src="image/482060353_18501257881022514_528559272406339756_n.jpeg" alt="Nike A’One Black Hyper Pink" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Nike A’One “Black/Hyper Pink”</p>
                <p class="drop-date">Drop Date: May 29, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Kobe-5-Protro-Indiana-Fever.php" class="sneaker-link">
            <img src="image/Gm6UgRjXgAAW0Qz-1200x1496.jpg" alt="Nike Kobe 5 Protro Indiana Fever" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Nike Kobe 5 Protro "Indiana Fever"</p>
                <p class="drop-date">Drop Date: June 1, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Air-Jordan-11-Low-Igloo.php" class="sneaker-link">
            <img src="image/air-jordan-11-low-igloo-ah7860-103-1.png" alt="Air Jordan 11 Low Igloo" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Air Jordan 11 Low “Igloo”</p>
                <p class="drop-date">Drop Date: June 7, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Air-Jordan-1-Low-OG-Rust-Pink.php" class="sneaker-link">
            <img src="image/air-jordan-1-low-og-rust-pink-hq6998-105-1.jpg" alt="Air Jordan 1 Low OG Rust Pink" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">Air Jordan 1 Low OG “Rust Pink”</p>
                <p class="drop-date">Drop Date: June 21, 2025</p>
            </div>
        </a>
    </div>

    <div class="sneaker-drop">
        <a href="Undefeated-Air-Jordan-4.php" class="sneaker-link">
            <img src="image/undefeated-air-jordan-4-2025-1.jpeg" alt="UNDEFEATED x Air Jordan 4" class="sneaker-img">
            <div class="sneaker-info">
                <p class="sneaker-name">UNDEFEATED x Air Jordan 4</p>
                <p class="drop-date">Drop Date: June 28, 2025</p>
            </div>
        </a>
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