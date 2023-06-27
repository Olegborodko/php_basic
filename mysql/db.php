<?php

// Параметры соединения с базой данных
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'company';

try {
  global $conn;
  $conn = new mysqli($hostname, $username, $password, $database);
} catch (Exception $e) {
  echo mysqli_connect_error();
  die(); // заканчиваем скрипт
}

try {
  // Устанавливаем кодировку соединения
  $conn->set_charset('utf8');
} catch (Exception $e) {
  $errorMessage = $e->getMessage();
  echo $errorMessage;

  // или тоже-самое выдаст
  // echo $conn->error;

  die(); // заканчиваем скрипт
}