<?php
session_start(); 

if (isset($_SESSION['ID'])) {
        unset($_SESSION['ID']);
 
        header("Location: login.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>