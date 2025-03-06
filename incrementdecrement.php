<?php

$a = 10;
$b = $a++; // $b = 10, $a = 11 // proses dulu baru naikan
$c = ++$a; // $c = 12, $a = 12 // naikan dulu baru di proses
$d = 1;
$e = 3;

echo $a . " " . $b . " " . $c;

var_dump($e + $d); // false

// increment dan decrement adalah operator unary
// increment adalah operator yang digunakan untuk menambahkan nilai 1
// decrement adalah operator yang digunakan untuk mengurangi nilai 1
