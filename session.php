<?php
//суперглобальные переменные которые видимы везде
//куки хранятся в браузере пользователя
//сессии хранятся на стороне сервера
//сессия доступна только пока длится один сеанс
//сайт закрыли сессия удалилась
//куки в браузере хранятся столько сколько задает разработчик
//куки пользователь может удалить
//в панели разработчика - приложение и там для
//конкретного сайта можно посмотреть куки 

//при создании сессии создается и кука в браузере

//при закрытии браузера сам файл сессии не удаляется
//за время хранения файлов на сервере отвечает php

$sessions = session_start();

echo $sessions; //1 true
echo true; //1
echo '<br/><br/>';

$_SESSION['name'] = 'Oleg';
$_SESSION['setting'] = ['1', '2', true];

$temp = serialize($_SESSION);

echo $temp;
echo '<br/><br/>';

var_dump($_SESSION);

unset($_SESSION['setting']); // delete

session_unset(); // delete all sessions, the file of sessions remains

session_destroy(); // delete all sessions and file

if (!$_SESSION['access']) {
  die('you have not access');
}