<?php
session_start();
include 'db_conn.php';

// Make sure the cart is not empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h2>Your cart is empty.</h2><a href='cart.php'>Go back</a>";
    exit();
}

$cart = $_SESSION['cart'];
$total = isset($_POST['total']) ? floatval($_POST['total']) : 0.00;

// Collect form input safely
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';
$card_number = isset($_POST['card_number']) ? trim($_POST['card_number']) : '';
$card_expiry = isset($_POST['card_expiry']) ? trim($_POST['card_expiry']) : '';
$card_cvv = isset($_POST['card_cvv']) ? trim($_POST['card_cvv']) : '';
$card_last4 = substr($card_number, -4);

// Simple validation
if (!$name || !$address || !$card_number || !$card_expiry || !$card_cvv) {
    echo "<h2>Missing required information.</h2><a href='checkout.php'>Go back</a>";
    exit();
}

$user_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

// Insert order into the database
$order_sql = "INSERT INTO orders (user_id, name, address, total, card_last4) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $order_sql);
mysqli_stmt_bind_param($stmt, "issds", $user_id, $name, $address, $total, $card_last4);
mysqli_stmt_execute($stmt);

$order_id = mysqli_insert_id($conn);

// Insert each cart item into order_items and update stock
foreach ($cart as $item) {
    $item_sql = "INSERT INTO order_items (order_id, product_name, size, quantity, price, image_url) VALUES (?, ?, ?, ?, ?, ?)";
    $item_stmt = mysqli_prepare($conn, $item_sql);
    mysqli_stmt_bind_param($item_stmt, "issids", $order_id, $item['name'], $item['size'], $item['quantity'], $item['price'], $item['image_url']);
    mysqli_stmt_execute($item_stmt);

    // Update stock
    $stock_sql = "UPDATE sneaker_sizes SET stock = stock - ? WHERE sneaker_id = ? AND size = ?";
    $stock_stmt = mysqli_prepare($conn, $stock_sql);
    mysqli_stmt_bind_param($stock_stmt, "iis", $item['quantity'], $item['id'], $item['size']);
    mysqli_stmt_execute($stock_stmt);
}

// Clear cart
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation - TevoKicks</title>
    <link rel="stylesheet" href="tevokicks.css">
</head>
<body>
    <div class="container">
        <h2>✅ Order Placed Successfully!</h2>
        <p><strong>Order ID:</strong> <?= $order_id ?></p>
        <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Shipping Address:</strong> <?= htmlspecialchars($address) ?></p>
        <p><strong>Total Paid:</strong> $<?= number_format($total, 2) ?> (Card ending in <?= $card_last4 ?>)</p>
        <a href="tevokicks.php">Return to Home</a>
    </div>
</body>
</html>
