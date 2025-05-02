<?php
session_start();
include 'db_conn.php';

// Fetch sneakers in "women" category
$sql = "SELECT * FROM sneakers WHERE category = 'women'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Women Sneakers - TevoKicks</title>
  <link rel="stylesheet" href="tevokicks.css" />
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
      <a href="cart.php">🛒 Cart</a>

      <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])): ?>
        <span>Hi, <?= htmlspecialchars($_SESSION['user_name']) ?></span>
        <a href="logout.php">Logout</a>
      <?php else: ?>
        <a href="login.php">Login</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<h1>Women Sneakers</h1>

<div class="product-grid">
  <?php if (mysqli_num_rows($result) > 0): ?>
    <?php while ($sneaker = mysqli_fetch_assoc($result)): ?>
      <div class="product-card">
        <form action="add_to_cart.php" method="POST">
          <img src="<?= htmlspecialchars($sneaker['image_url']) ?>" alt="<?= htmlspecialchars($sneaker['name']) ?>" />
          <h3><?= htmlspecialchars($sneaker['name']) ?></h3>
          <p>$<?= number_format($sneaker['price'], 2) ?></p>

          <input type="hidden" name="id" value="<?= $sneaker['id'] ?>">
          <input type="hidden" name="name" value="<?= htmlspecialchars($sneaker['name']) ?>">
          <input type="hidden" name="price" value="<?= $sneaker['price'] ?>">

          <label>Select Size:</label>
          <select name="size" required>
            <option value="">-- Select Size --</option>
            <?php
              $sid = $sneaker['id'];
              $size_sql = "SELECT size FROM sneaker_sizes WHERE sneaker_id = '$sid' AND stock > 0";
              $size_result = mysqli_query($conn, $size_sql);
              while ($size_row = mysqli_fetch_assoc($size_result)) {
                echo "<option value='" . htmlspecialchars($size_row['size']) . "'>" . htmlspecialchars($size_row['size']) . "</option>";
              }
            ?>
          </select>

          <label>Quantity:</label>
          <input type="number" name="quantity" value="1" min="1" required>

          <button type="submit">Add to Cart</button>
        </form>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>No sneakers found in this category.</p>
  <?php endif; ?>
</div>

</body>
</html>
