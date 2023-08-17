<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function addToCart($userId, $productId) {
    global $conn;

    // Check if product already exists in cart
    $stmt = $conn->prepare("SELECT * FROM cart WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param('ii', $userId, $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // Product exists in cart, so increase quantity by 1
        $stmt = $conn->prepare("UPDATE cart SET quantity = quantity + 1 WHERE user_id = ? AND product_id = ?");
    } else {
        // Product does not exist in cart, so insert new record
        $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, 1)");
    }

    $stmt->bind_param('ii', $userId, $productId);
    return $stmt->execute();
}

function getCartItems($userId) {
    global $conn;
    $sql = "SELECT products.name, products.price, cart.quantity FROM cart 
            JOIN products ON cart.product_id = products.id 
            WHERE cart.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }

    return $items;
}


if (isset($_POST['action']) && $_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['action']) && $_POST['action'] == 'addToCart' && isset($_SESSION['user_id']) && isset($_POST['productId']) && isset($_POST['quantity'])) {
    addToCart($_SESSION['user_id'], $_POST['productId'], $_POST['quantity']);
    echo "Item added to cart";

}
elseif (isset($_POST['action']) && $_POST['action'] == 'getCartItems' && isset($_POST['userId'])) {
    $items = getCartItems($_POST['userId']);
    echo json_encode($items);
}
 else {
        echo "Required parameters missing or unknown action";
    }
}

