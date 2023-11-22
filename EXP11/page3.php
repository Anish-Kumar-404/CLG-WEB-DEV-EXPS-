<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>  Session and Cookie Values</title>
</head>
<body>
    <h1>Session and Cookie Values </h1>
    <?php
    // Display session variables
    if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
        echo '<p>Session Username: ' . $_SESSION['username'] . '</p>';
        echo '<p>Session Email: ' . $_SESSION['email'] . '</p>';
    } else {
        echo '<p>Session variables not set.</p>';
    }

    // Display cookie value
    if (isset($_COOKIE['user'])) {
        echo '<p>Cookie User: ' . $_COOKIE['user'] . '</p>';
    } else {
        echo '<p>Cookie not set.</p>';
    }
    ?>
</body>
</html>