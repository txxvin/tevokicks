<?php
session_start();

// Ensure all required POST data is present
if (
    isset($_POST['id'], $_POST['name'], $_POST['price'], $_POST['size'], $_POST['quantity']) &&
    is_numeric($_POST['price']) && is_numeric($_POST['quantity'])
) {
    // Sanitize incoming data
    $id = $_POST['id'];
    $name = htmlspecialchars($_POST['name']);
    $price = (float) $_POST['price'];
    $size = htmlspecialchars($_POST['size']);
    $quantity = (int) $_POST['quantity'];

    // Prepare item array
    $item = [
        'id'       => $id,
        'name'     => $name,
        'price'    => $price,
        'size'     => $size,
        'quantity' => $quantity
    ];

    // Create cart if not set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if item with same ID and size already exists
    $found = false;
    foreach ($_SESSION['cart'] as &$cartItem) {
        if ($cartItem['id'] === $item['id'] && $cartItem['size'] === $item['size']) {
            $cartItem['quantity'] += $item['quantity'];
            $found = true;
            break;
        }
    }

    // If not found, add as new item
    if (!$found) {
        $_SESSION['cart'][] = $item;
    }

    // Redirect to cart page
    header("Location: cart.php");
    exit();
} else {
    echo "<h2>Invalid item data.</h2>";
    echo "<a href='javascript:history.back()'>Go back</a>";
    exit();
}