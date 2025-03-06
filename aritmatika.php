<?php

$a = 10;
$b = 5;

$tambah = $a + $b;
var_dump($tambah);

$kurang = $a - $b;
var_dump($kurang);

$kali = $a * $b;
var_dump($kali);

$bagi = $a / $b;
var_dump($bagi);

$mines = -$tambah;
var_dump($mines);

$positif = +$tambah;
var_dump($positif);

$a += $b; // $a = $a + $b (shourtcut)
var_dump($a);

$a -= $b; // $a = $a - $b (shourtcut)
var_dump($a);

$a *= $b; // $a = $a * $b (shourtcut)
var_dump($a);

$a /= $b; // $a = $a / $b (shourtcut)
var_dump($a);

$a %= $b; // $a = $a % $b (shourtcut)
var_dump($a);

$bayar = 0;
$uang = 50000;

$pizza = 15000;
$cappucino = 5000;
$pasta = 10000;

$bayar += $pizza;
$bayar += $cappucino;
$bayar += $pasta;
$bayar += $pasta;

$uang -= $bayar;

echo "Total Pembayaran : Rp. " . $bayar;
echo "\n";
echo "Kembalian : Rp. " . $uang;

// aritmatika adalah operasi matematika yang dapat dilakukan pada php
// operasi aritmatika yang dapat dilakukan pada php adalah penjumlahan, pengurangan, perkalian, pembagian, modulus, dan increment decrement