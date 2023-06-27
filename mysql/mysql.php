<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'db.php';

// ======================== SELECT
$sql_select = "SELECT * FROM `team`";

try {
  $result = $conn->query($sql_select);

  $data = [];
  while ($row = $result->fetch_object()) {
    $data[] = $row;
  }

  echo '<pre>';
  print_r($data);
  echo '</pre>';

  // освобождаем память
  $result->free();
} catch (Exception $e) {
  global $conn;
  echo $conn->error;
}

// ======================== INSERT
$sql = "INSERT INTO `team`(`name`, `email`, `data`, `text`) VALUES ('Kris','brat@gg.com','2023-06-27','some text')";

try {
  $result = $conn->query($sql); // true
} catch (Exception $e) {
  echo $conn->error;
}

// ======================== DELETE
$sql = "DELETE FROM `team` WHERE `name` = 'Kris'";

try {
  $result = $conn->query($sql); // true
} catch (Exception $e) {
  echo $conn->error;
}

echo "<br/>";

// ======================== экранируем переменную
$name = mysqli_real_escape_string($conn, "Andy's");

$sql = "INSERT INTO `team`(`name`, `email`, `data`, `text`) VALUES ('$name','brat@gg.com','2023-06-27','some text')";

try {
  $result = $conn->query($sql); // true
  echo "<br/>";
  echo $result;
} catch (Exception $e) {
  echo $conn->error;
}

// LIMIT

// Закрываем соединение
$conn->close();