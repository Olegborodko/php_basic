<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo $_SERVER['REQUEST_METHOD'];
echo "<br>";

//супер глобальные переменные
//доступны в любом файле php

//http://localhost/test/get_post.php?m=1&m2=2
//Array ( [m] => 1 [m2] => 2 )

print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
echo "<br>";

//============================
$test = htmlspecialchars(trim($_POST['name']) ?? "");

$id = (int) (strip_tags($_POST['id'] ?? 0));
?>

<!-- так можно передавать get переменные -->
<form action="">
  <input type="text" name="name">
  <input type="text" name="name2">
  <input type="text" name="name3">
  <!-- 
    если мы нажим на эту кнопку то будет существовать 
    переменная form1
  -->
  <button name="form1" value="true">SEND</button>
</form>

<!-- POST -->
<form method="POST" action="">
  <input type="text" name="name">
  <input type="number" name="id">
  <button>SEND</button>
</form>