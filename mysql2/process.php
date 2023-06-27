<?php
require_once '../mysql/db.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$date = mysqli_real_escape_string($conn, $_POST['date']);

$sql = "INSERT INTO `team`(`name`, `email`, `data`) VALUES ('$name','$email','$date')";

$message = 'success';
try {
  $result = $conn->query($sql); // true
} catch (Exception $e) {
  global $conn, $message;
  $message = $conn->error;

  echo $conn->error;
}

header("Location: show_data.php?message=$message");