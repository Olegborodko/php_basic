<?php

// эта кука будет доступна только в этом каталоге,
// в других каталогах ее не будет
setcookie('name3', 'Bred');

//что-бы кука была видна везде нужно ее задавать так
setcookie('name3', 'Bred', time() + 3600, '/');

// последний параметр в куках запрещает javascript
// считывать куки