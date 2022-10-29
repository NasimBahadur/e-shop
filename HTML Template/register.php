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

// empty() & isset() are same.
if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['phone']) || empty($_POST['password'])) {
    die("All input field is required.");
}

if (!preg_match("/(-?([A-Z].\s)?([A-Z][a-z]+)\s?)+([A-Z]'([A-Z][a-z]+))?/", $_POST['firstName']) && strlen($_POST['firstName']) < 3) {
    die("Length of first-name must be greater than equal 3 characters long.");
}

if (!preg_match("/^([A-Z][a-z]+([ ]?[a-z]?['-]?[A-Z][a-z]+)*)$/", $_POST['lastName']) && strlen($_POST['lastName']) < 3) {
    die("Length of first-name must be greater than equal 3 characters long.");
}

if (!preg_match("/^(\+88)?((011)|(015)|(016)|(017)|(018)|(019))\d{8,8}$/", $_POST['phone']) && (strlen($_POST['phone']) != 11 || strlen($_POST['phone']) != 14)) {
    die("Length of first-name must be contain 11 characters or 14 characters (if you use +88 before the phone no.)");
}

if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,20}$/", $_POST['password']) && (strlen($_POST['password']) >= 8 && strlen($_POST['password']) <= 20)) {
    die("Invalid Password! Password must contain 8-20 digits and minimum an uppercase, a lowercase, a number, a special character.");
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "SELECT phone_number FROM user where phone_number = '$phone';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Already you have an account and you have used this phone number.');</script>";
    include "login.html";
} 
else {
    $sql = "INSERT INTO user (user_id, first_name, last_name, phone_number, password, register_date)
    VALUES (8,'$firstName', '$lastName', '$phone', '$password', "2022-05-14 10:07:17")";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Successfully Submitted.');</script>";
        include 'login.html';
    } else {
        echo "Error inserting value: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
