<?php

require_once 'db_connection.php'; 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];

if(!empty($errors)) {
  $_SESSION['errors'] = $errors;
  header('Location: fail.php');
  exit;
}

mysqli_set_charset($connect, "utf8mb4");

$sql = "INSERT INTO bookings (name, email, phone, date, message) 
        VALUES ('$name', '$email', '$phone', '$date', '$message')";
        
mysqli_query($connect, $sql);

header('Location: success.php');

?>