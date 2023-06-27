каждая таблица это физически файл
кодировка utf8mb4_general_ci
либо utf8_general_ci
каждая бд должна иметь столбец id

id INT 
атрибут - UNSIGNED
длинна - не указывается, по умолчанию 11
по умолчанию значения - нет
индекс - PRIMARY
aвтоинкремент - true

name VARCHAR
длинна обязательная - 255

email VARCHAR
длинна обязательная - 255

data DATE

text TEXT

//=============== предпросмотр SQL
CREATE TABLE `company`.`team` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(128) NOT NULL , `email` INT NOT NULL , `data` DATE NOT NULL , `text` TEXT NOT NULL , PRIMARY KEY (`id`(11))) ENGINE = InnoDB; 

//================ 
// export in sql and import

//================ типы связи
один к одному
один ко многим 
многие ко многим

в таблице которая используется для связи многие ко многим
id указывать не нужно с автоинкрементом, в нем нет смысла