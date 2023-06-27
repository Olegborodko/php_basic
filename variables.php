<?php
// внутри функции переменная уже не видима
// что-бы сделать ее видимой юзают global

try {
  global $mysqli;
  $mysqli = 1;
} catch (Exception $e) {
  echo 'error';
}

// ============ либо можно заюзать глобальный массив
$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
Sum();
echo $b;
echo '<br/>';

// ============ static переменная
// переменная которая объявляется первый раз,
// а потом сохраняет значение
// статической переменной нельзя присвоить функцию
// static $int = sqrt(121); // error

function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

test(); // 0
echo '<br/>';
test(); // 1
echo '<br/>';