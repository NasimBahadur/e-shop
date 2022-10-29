<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE['phone']) and isset($_COOKIE['password'])) {
    $studentId = $_COOKIE['phone'];
    $password = $_COOKIE['password'];
    setcookie('phone', $phone, time() - 1);
    setcookie('password', $password, time() - 1);
}
echo "<script>alert('Logout successfully.');</script>";
include './HTML Template/login.html';
