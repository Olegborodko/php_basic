<?php
require_once '../mysql/db.php';

if (!empty($_POST)) {

  foreach ($_POST as $key => $value) {
    $_POST[$key] = mysqli_real_escape_string($conn, $value);
  }

  extract($_POST);

  $id = (int) $id;

  $sql = "UPDATE `team` SET `name`='$name',`email`='$email',`data`='$date' WHERE `id`='$id'";

  try {
    $result = $conn->query($sql); // true
  } catch (Exception $e) {
    global $massage, $conn;
    $message = $conn->error;
    echo $conn->error;
  }

  $message = 'success';
  header("Location: show_data.php?message=$message");
}