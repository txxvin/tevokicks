<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h2>Your cart is empty.</h2><a href='cart.php'>Go back</a>";
    exit();
}

$cart = $_SESSION['cart'];
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - TevoKicks</title>
  <link rel="stylesheet" href="tevokicks.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 20px;
    }

    h1, h2, h3 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      background: #fff;
    }

    table, th, td {
      border: 1px solid #ccc;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f5f5f5;
    }

    form {
      max-width: 500px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #0077cc;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<h1>Checkout</h1>

<table>
  <tr>
    <th>Product</th>
    <th>Size</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr>
  <?php foreach ($cart as $item): 
    $itemTotal = $item['price'] * $item['quantity'];
    $total += $itemTotal;
  ?>
  <tr>
    <td><?= htmlspecialchars($item['name']) ?></td>
    <td><?= htmlspecialchars($item['size']) ?></td>
    <td>$<?= number_format($item['price'], 2) ?></td>
    <td><?= $item['quantity'] ?></td>
    <td>$<?= number_format($itemTotal, 2) ?></td>
  </tr>
  <?php endforeach; ?>
</table>

<h3>Total: $<?= number_format($total, 2) ?></h3>

<h2>Shipping & Payment Info</h2>
<form action="placeorder.php" method="POST">
  <input type="hidden" name="total" value="<?= $total ?>">

  <label for="name">Full Name:</label>
  <input type="text" name="name" id="name" required>

  <label for="address">Shipping Address:</label>
  <textarea name="address" id="address" required></textarea>

  <label for="card_number">Card Number:</label>
  <input type="text" name="card_number" id="card_number" pattern="\d{16}" maxlength="16" required>

  <label for="card_expiry">Expiration Date (MM/YY):</label>
  <input type="text" name="card_expiry" id="card_expiry" pattern="\d{2}/\d{2}" placeholder="MM/YY" required>

  <label for="card_cvv">CVV:</label>
  <input type="text" name="card_cvv" id="card_cvv" pattern="\d{3}" maxlength="3" required>

  <button type="submit">Place Order</button>
</form>

<a href="cart.php">← Back to Cart</a>

</body>
</html>