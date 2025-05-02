<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ - TevoKicks</title>
  <link rel="stylesheet" href="tevokicks.css" />
  <style>
    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
      text-align: center;
      margin: 40px 0 20px;
    }
    .rating > span {
      display: inline-block;
      position: relative;
      width: 1.5em;
      font-size: 2rem;
      cursor: pointer;
    }
    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
      content: "\2605";
      position: absolute;
      left: 0;
      color: gold;
    }

    form {
      text-align: center;
      margin-bottom: 40px;
    }

    h1.faq-title {
      text-align: center;
      font-size: 2.5rem;
      margin-top: 40px;
    }
  </style>
  
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

  <!-- FAQ Page Content -->
  <h1 class="faq-title">Rate Our Page</h1>

  <form action="save_rating.php" method="post">
    <input type="hidden" name="rating" id="rating" value="0" />
  
    <div class="rating">
      <span data-value="4">&#x2606;</span>
      <span data-value="3">&#x2606;</span>
      <span data-value="2">&#x2606;</span>
      <span data-value="1">&#x2606;</span>
    </div>
  
    <button type="submit">Submit Rating</button>
  </form>
  
  <script>
    const stars = document.querySelectorAll('.rating span');
    const ratingInput = document.getElementById('rating');
  
    stars.forEach((star) => {
      star.addEventListener('click', () => {
        const ratingValue = star.getAttribute('data-value');
        ratingInput.value = ratingValue;
  
        // Reset all stars
        stars.forEach(s => s.innerHTML = '&#x2606;'); // hollow star
  
        // Fill selected and previous stars
        for (let i = 0; i < stars.length; i++) {
          if (parseInt(stars[i].getAttribute('data-value')) <= ratingValue) {
            stars[i].innerHTML = '&#x2605;'; // filled star
          }
        }
      });
    });
  </script>
  </form>
  <script>
    // Update cart count on every page
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cart-count').textContent = cartCount;
  </script>
</body>
</html>