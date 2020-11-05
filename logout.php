<?php
session_start();
// unset($_SESSION['Pass']);
session_destroy();
header('location:user_login.php');
?>