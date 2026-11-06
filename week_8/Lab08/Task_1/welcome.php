<?php
session_start();

if (!isset($_SESSION['user'])) {

    header('Location: login.php');
    exit;

}

include "header.inc";

echo "<h2>Welcome, " . $_SESSION['user'] . "!</h2>";

echo "Your token is: " . $_SESSION['token'];

include "footer.inc";
?>

