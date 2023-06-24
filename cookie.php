<?php

setcookie('name', 'Oleg');
setcookie('name2', 'Alex', time() + 3600); //эта кука будет жить час

// что-бы удалить куку нужно задать ей отрицательное время
setcookie('name2', 'Alex', time() - 3600);

var_dump($_COOKIE);

// куку нельзя сразу проверять, она появится только после переза
// грузки страницы
echo $_COOKIE['name3'];