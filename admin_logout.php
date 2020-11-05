<?php
session_start();
// unset($_SESSION['Pass']);
session_destroy();
header('location:admin_login.php');
?>