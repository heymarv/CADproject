<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();  // Start the session at the beginning of the script


$host = "localhost"; 
$username = "root";
$password = "";
$dbname = "project";

// Establish a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user inputs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user inputs (optional)

    // Check user credentials against the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password using password_verify function (assuming the passwords are hashed)
if (password_verify($password, $user['password'])) {
    echo "Password is verified, trying to redirect..."; // Debugging echo
    $_SESSION['user_id'] = $user['id'];
    header("Location: index.php");
    exit();

        } else {
            // If credentials are incorrect, show an error message
            echo "Incorrect email or password. Please try again.";
        }
    } else {
        // If user does not exist, show an error message or redirect to the signup page
        echo "User does not exist. Please sign up first.";
    }
}

// Close the database connection
$conn->close();
?>
