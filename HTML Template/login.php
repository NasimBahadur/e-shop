<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
//echo 'Connected successfully.<br>';

if ($_POST['phone'] == '01700001111') {
    $sql = "SELECT * FROM user where phone_number = '$_POST[phone]' AND password='$_POST[password]'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Password matched.');</script>";
        while ($row = mysqli_fetch_assoc($result)) {
            //session
            session_start();
            $_SESSION['firstName'] = $row['first_name'];
            $_SESSION['lastName'] = $row['last_name'];
            $_SESSION['phone'] = $row['phone_number'];
            //cookie
            if ($_POST['phone'] = $row['phone_number'] and $_POST['password'] = $row['password'] and isset($_POST['remember'])) {
                setcookie('phone', $row['phone_number'], time() + 3600);
                setcookie('password', $row['password'], time() + 3600);
            }
        }
        mysqli_close($conn);
    } else {
        echo "<script>alert('Password is not matched.');</script>";
        include "login.html";
    }
//include ('index.php');
    header('Location: admin.php');
} else {
    $sql = "SELECT * FROM user where phone_number = '$_POST[phone]' AND password='$_POST[password]'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Password matched.');</script>";
        while ($row = mysqli_fetch_assoc($result)) {
            //session
            session_start();
            $_SESSION['firstName'] = $row['first_name'];
            $_SESSION['lastName'] = $row['last_name'];
            $_SESSION['phone'] = $row['phone_number'];
            //cookie
            if ($_POST['phone'] = $row['phone_number'] and $_POST['password'] = $row['password'] and isset($_POST['remember'])) {
                setcookie('phone', $row['phone_number'], time() + 3600);
                setcookie('password', $row['password'], time() + 3600);
            }
        }
        mysqli_close($conn);
    } else {
        echo "<script>alert('Password is not matched.');</script>";
        include "login.html";
    }
//include ('index.php');
    header('Location: ../index.php');
}
