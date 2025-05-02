<?php
session_start();

// Load cart from session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart - TevoKicks</title>
  <link rel="stylesheet" href="tevokicks.css">
  <style>
    .cart-container {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ccc;
      background: #fff;
      border-radius: 8px;
    }
    .cart-header {
      font-size: 1.5em;
      margin-bottom: 20px;
    }
    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid #eee;
    }
    .cart-item:last-child {
      border-bottom: none;
    }
    .cart-item-details h3 {
      margin: 0;
      font-size: 1.1em;
    }
    .cart-item-details p {
      margin: 5px 0;
    }
    .cart-total {
      font-size: 1.3em;
      font-weight: bold;
      text-align: right;
      margin-top: 20px;
    }
    .cart-actions {
      text-align: center;
      margin-top: 30px;
    }
    .cart-actions a {
      padding: 10px 20px;
      margin: 5px;
      text-decoration: none;
      background: black;
      color: white;
      border-radius: 5px;
    }
    .remove-btn {
      background: crimson;
      border: none;
      color: white;
      padding: 6px 12px;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="cart-container">
    <div class="cart-header">🛒 Your Shopping Cart</div>

    <?php if (empty($cart)): ?>
      <p>Your cart is empty.</p>
    <?php else: ?>
      <?php
        $total = 0;
        foreach ($cart as $index => $item):
          $itemTotal = $item['price'] * $item['quantity'];
          $total += $itemTotal;
      ?>
        <div class="cart-item">
          <div class="cart-item-details">
            <h3><?= htmlspecialchars($item['name']) ?></h3>
            <p>Size: <?= htmlspecialchars($item['size']) ?> — $<?= number_format($item['price'], 2) ?> × <?= $item['quantity'] ?></p>
            <p><strong>Total: $<?= number_format($itemTotal, 2) ?></strong></p>
          </div>
          <form method="post" action="remove_from_cart.php">
            <input type="hidden" name="index" value="<?= $index ?>">
            <button class="remove-btn" type="submit">Remove</button>
          </form>
        </div>
      <?php endforeach; ?>

      <div class="cart-total">Cart Total: $<?= number_format($total, 2) ?></div>
    <?php endif; ?>

    <div class="cart-actions">
      <a href="tevokicks.php">Continue Shopping</a>
      <?php if (!empty($cart)): ?>
        <a href="checkout.php">Proceed to Checkout</a>
      <?php endif; ?>
    </div>
  </div>

</body>
</html>