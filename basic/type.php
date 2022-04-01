<?php

$name = "JOJO";
$author = 'COCO';
$publish = 2020;
$price = 99.00;
$published = false;

$str = '123';
$int = 2020;
$float = 99.0;
$bool = false;

if (is_string($name)) {
    echo "\"$name\" 是字串" . PHP_EOL;
}

if (is_string($author)) {
    echo "'$author' 也是字串" . PHP_EOL;
}

echo 'PHP 整數範圍: ' . PHP_INT_MIN . '~' . PHP_INT_MAX . PHP_EOL;

var_dump($publish);
var_dump($price);
var_dump($published);
var_dump($name);
var_dump($author);

var_dump((int)$str);
var_dump((bool)$str);
var_dump((string)$str);
var_dump((bool)$str);
var_dump((int)$float);
var_dump((string)$float);
var_dump((string)$bool);
var_dump((int)$bool);

exit();