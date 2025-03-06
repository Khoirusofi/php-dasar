<?php

$first = [
  "firstname" => "Muhammad",
];

$last = [
  "lastname" => "Khoirusofi",
];

$full = $first + $last;

var_dump($full);

$a = [
  "firstname" => "Muhammad",
  "middlename" => "Khoirus",
];

$B = [
  "middlename" => "Khoirus",
  "firstname" => "Muhammad",
];

var_dump($a == $B); // apakah sama?

var_dump($a === $B); // apakah sama dan tipe data?

//operator array adalah operator yang digunakan untuk menggabungkan array
//operator ini akan menggabungkan array pertama dengan array kedua
//jika ada key yang sama, maka array kedua akan menimpa array pertama
//jika key pada array pertama dan array kedua sama, maka yang akan diambil adalah array pertama
//jika key pada array pertama dan array kedua sama, maka yang akan diambil adalah array kedua