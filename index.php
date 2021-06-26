<?php

namespace App;
require_once __DIR__ .'/vendor/autoload.php';

//Вывод на экран таблицы с данными из csv-файла
//$fileCsv = new GetCsvFile();
//$fileCsv->takeFormat();

//Вывод на экран таблицы с данными из json-файла
$fileJson =new GetJsonFile();
$fileJson->takeFormat();