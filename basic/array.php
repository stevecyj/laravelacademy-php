<?php

$nums = [2, 4, 8, 16, 32];
$lans = ['PHP', 'Golang', 'JavaScript'];
$fruits = [];
$fruits[] = 'Apple';
$fruits[] = 'Orange';
$fruits[] = 'Pear';
$fruits[2] = 'Banana';
unset($fruits[1]);

$book = [
    'name' => 'JOJO',
    'author' => 'coco',
    'publish_at' => 2020,
    'price' => 99.0,
    'published' => true
];

//var_dump($nums);
//var_dump($lans);

//print_r($nums);
//print_r($lans);
//print_r($fruits);
print_r($book);