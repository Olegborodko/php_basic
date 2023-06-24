<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//php не хранит файлы в суперглобальной переменной POST
print_r($_POST);
echo "<br>";
echo "<br>";
print_r($_FILES);
echo "<br>";
echo "<br>";

if (!empty($_FILES) && $_FILES['file']['error'] === 0) {
  move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
}

if (file_exists('uploads/20230210_213723.jpg')) {
  echo 'file exist';
  rename('uploads/20230210_213723.jpg', 'uploads/1.jpg');
}

//mkdir
//rmdir
//copy
//unlink - remove file
//is_dir
//is_file

//========= file_get_contents

$text = file_get_contents('file.txt');
echo nl2br($text); //выводит с переносами строки

//========= file
echo "<br>";
echo "<br>";
$text = file('file.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// var_dump($text);

foreach ($text as $num => $line) {
  echo "<br>";
  echo htmlspecialchars($line);
}

echo "<br>";
echo "<br>";

//========= file_put_contents

$file = 'file.txt';
$var = "Hello\n";

file_put_contents($file, $var);

file_put_contents($file, $var, FILE_APPEND | LOCK_EX);

// filesize
// fopen, fwrite, fread, fclose

?>

<form method="POST" action="" enctype="multipart/form-data">
  <input type="file" name="file">
  <button>SEND</button>
</form>