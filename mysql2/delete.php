<?php
require_once '../mysql/db.php';

if (!empty($_GET['id'])) {
  $id = (int) $_GET['id'];
}

$sql = "DELETE FROM `team` WHERE `id` = '$id'";

$message = 'success';

try {
  $result = $conn->query($sql); // true
} catch (Exception $e) {
  global $conn, $message;
  $message = $conn->error;
  echo $conn->error;
}

header("Location: show_data.php?message=$message");