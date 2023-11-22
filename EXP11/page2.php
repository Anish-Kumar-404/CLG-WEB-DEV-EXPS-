<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set session variables
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];

    // Set a cookie with the username that expires in 1 hour (3600 seconds)
    setcookie('user', $_POST['username'], time() + 3600, '/');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>  Session and Cookie Example</title>
</head>
<body>
    <h1>Session and Cookie Example </h1>
    <p>Session and Cookie set! Go to <a href="page3.php"> Values Page</a> to see the values.</p>
</body>
</html>