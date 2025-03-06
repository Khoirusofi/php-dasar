<?php

$name = "M Khoirusofi";

echo "Nama : " . $name . PHP_EOL;
echo "karakter ke 4 : " . $name[3] . PHP_EOL; // ambil karakter ke 4
echo "Umur : " . 25 . PHP_EOL;

$valueString = (string) 100; // int to string
var_dump($valueString);

$valueInt = (int) "100"; // string to int
var_dump($valueInt);

$valueFloat = (float) "100.5"; // string to float
var_dump($valueFloat);

// single pasring
echo "Hello $name Selamat datang" . PHP_EOL;

//curly brace parsing
$var = "sofi";
echo "Hello {$var}s Selamat datang" . PHP_EOL;
