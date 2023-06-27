<?php
$sql = "SELECT * FROM `team`";

try {
  global $data;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $data[$id] = $row;
    }

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    // Что-бы выполнить дважды проход по данным таблицы
    // while ($row = $result->fetch_assoc()) {    
    // }
    // while ($row = $result->fetch_assoc()) {    
    // }
    // надо после первого прохода вернуть указатель на начало
    // $result->data_seek(0);
    // либо, что правильнее, использовать полученные данные

    // Итерируемся по сохраненным данным
    foreach ($data as $row) {
      foreach ($row as $key => $value) {
        echo $key . ': ' . $value . '<br>';
        if ($key === 'id') {
          $id = $value;
        }
      }
      echo "<a href='?update_member=$id'>Edit</a><br/>";
      echo "<a href='delete.php?id=$id'>Delete</a>";
      echo '<br/><br/>';
    }

  } else {
    echo "Нет данных в таблице";
  }
  $result->free();
} catch (Exception $e) {
  echo $conn->error;
}