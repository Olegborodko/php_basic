<?php
$sql = "SELECT * FROM `team`";

try {
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      foreach ($row as $key => $value) {
        echo $key . ': ' . $value . '<br>';
      }
      echo '<br>';
    }
  } else {
    echo "Нет данных в таблице";
  }
  $result->free();
} catch (Exception $e) {
  echo $conn->error;
}