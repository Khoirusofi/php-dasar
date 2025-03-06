<?php

$values = array(1, 2, 3, 4, 5); // integer array
var_dump($values);

$names = ["M.", "Khoirusofi", "Sof"];  // string array
var_dump($names);

$names[1] = "Khoir"; // menggunakan array berdasarkan index
var_dump($names);

unset($names[1]); // menghapus array berdasarkan index
var_dump($names);

$names[] = "Ahmad"; // menambahkan arrat tanpa index akan atuomatis di index terakhir 
var_dump($names);

var_dump(count($names)); // menghitung jumlah array

// array adalah tipe data yang dapat menyimpan lebih dari satu nilai dalam satu variabel
// array dapat menyimpan nilai dengan tipe data yang berbeda baik int maupun sting
