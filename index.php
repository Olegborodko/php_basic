<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
  <main>
    <h1>Welcome to My Website</h1>
  </main>
  <script src="index.js"></script>
</body>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo '1234';

define("NAME", "TTT");

// hello
/* 
  hello
*/

$namE = "22";
$name = 123;
$name = "Alex";
$tt = null; //тип данных NULL

echo $namE111;

echo 'my name is ' . 'Oleg';
echo '<br>';
echo "my name is $name<br>";
echo "my name is {$name}<br>";
echo "my \"name\" is {$name}<br>";

echo NAME;

define("echo", "KRISS");
echo constant("echo");

echo '<br>';

"sdfsdfsdfsdf
    sdfsdfdsf
    ";

// в любых непонятных сетуациях с переменными ее нужно юзать
var_dump("Alex");

//===========================
$tt = 3.4;

settype($tt, "int");
echo "<br>$tt";

echo "<br>";

//isset
//для проверки объявлена ли переменная

var_dump(isset($name));

$arr1 = [1, 2, "3"];
$arr2 = array("Alex", 'Den', 2);

//ассоциативный массив
$arr3 = [
  "name" => "Alex2",
  "age" => 22,
  "arr4" => [
    1 => 1,
    2 => 2,
  ]
];

echo "<br>";
var_dump($arr3);

echo "<br>";
echo $arr3['arr4'][1];

//объект
$user = new stdClass;
$user->name = "Oleg";

echo "<br>";
var_dump($user);

// =============================== условия
echo "<br>========================================<br>";

$a = 1;
$b = '1';

if ($a == $b) {
  echo "<br>";
  echo 'a == b';
}

$b = 1;
if ($a === $b) {
  echo "<br>";
  echo 'a === b';
}

//======================================
if (null) {
  echo false;
}

$m = null;
echo "<br>";
var_dump($m);

if (false) {
  echo false;
} elseif (true) {
  echo true;
}

if (0) {
  echo false;
}

if ("") {
  echo false;
} else {
  echo true;
}

if ($a): ?>
  <h1>11</h1>
<?php else: ?>
  <h2>22</h2>
<?php endif;

$m = $a === 1 ? "yes" : "no";
echo "<br>";
echo $m;

if ($a !== $b) {

}

// ===================match
$r = 1;
$res = match ($r) {
  1 => "yes",
  2 => "no",
};
echo "<br>";
echo $res;

$res = match (true) {
  $r <= 7 => "yes",
  $r > 7 => "no",
  default => "other",
};
echo "<br>";
echo $res;

$res = match (1) {
  $yot, $r => "one of these is 1",
  default => "no",
};
echo "<br>";
echo $res;

//===================== присвоение по ссылке
//это когда переменная проверяет значение другой переменной
//и зависит от нее
//нужно разобраться
$a = 2;
$b = $a;
$a = 6;
echo "<br> {$a} {$b}"; //6 2

$a = 2;
$b = &$a;
$a = 6;
echo "<br> {$a} {$b}"; //6 6

//======================
for ($i = 1; $i < 10; $i++) {

}

//======================incluse require
// include ""; //выдаеи варнинг но работает если путь не тот
// require ""; //этот fatal error дает в случае неправильн пути
// include_once ""; //подключает только однажды
//тоесть если я протуплю и дважды файл пропишу то нифига не будет
//тоже и с require_once

// ======================= function
//функция должна возвращать какое-то значение обычно
function sum($a = 1, $b = 1){
  echo "<br>";
  echo $a + $b;
}

sum();
sum(4, 5);

//так можно проверять если ли уже функция такая
//и если нет то создавать
//но думаю лучше юзать классы например
if (!function_exists("sum")){
  function sum($a = 1, $b = 1){
    echo "<br>";
    echo $a + $b;
  }
}

//===========================
//htmlspecialchars полностью экранирует символы,
//юзается для комментариев на сайте, для форм
$msg = "<alert>123</alert>";
echo "<br>";
echo htmlspecialchars($msg);

//htmlspecialchars_decode
//раскодировать символы
$msg1 = "&lt;strong&gt;Text&lt;/strong&gt;";
echo "<br>";
echo htmlspecialchars_decode($msg); //123

//===========================htmlentities
echo "<br><br>htmlentities<br>";
echo htmlentities($msg);

//==========================str_replace
$text = "[i]hello[/i], [b]one[/b]";
$result = str_replace('[b]', '<b>', $text);
$result = str_replace('[/b]', '</b>', $result);
echo "<br><br>str_replace<br>";
echo $result;

$bb_code = ['[b]', '[/b]', '[i]', '[/i]'];
$html_code = ['<b>', '</b>', '<i>', '</i>'];
$result = str_replace($bb_code, $html_code, $text);
echo "<br><br>arr str_replace<br>";
echo $result;
//===========================
// str_ireplace() тоже-самое но не регистрозависимая функция

//===========================strip_tags
//remove all tags
$text = "<i>hello</i>, <b>one</b>";
echo "<br><br>strip_tags<br>";
echo strip_tags($text, ['<b>', '<i>']);

?>