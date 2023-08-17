<?php
session_start();
require 'cart_actions.php';

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $userId = $_SESSION['user_id'];

    if (addToCart($userId, $productId)) {
        echo "Item added to cart!";
    } else {
        echo "Failed to add item!";
    }
}

