<?php
    // Simple password protection
    if (!isset($_COOKIE['password']) || $_COOKIE['password'] !== '6asd4a8df7d6as8e46sas7d8f7asd') {
        header('Location: secure.php');
        exit;
    }
?>

test