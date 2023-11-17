
<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: admindash.php');
    exit();
}

?>