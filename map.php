<?php

$sof = array(
  "nama" => "M. Khoirusofi",
  "umur" => 25,
  "alamat" => "Jl. Kebon Sirih No. 1",
  "hobi" => "Jalan Jalan"
);
var_dump($sof);

echo "Nama : " . $sof["nama"] . "\n";
echo "Alamat : " . $sof["alamat"] . "\n";


$dev = [
  "nama" => "M. Khoirudin",
  "umur" => 25,
  "alamat" => "Jl. Kebon Sirih No. 3",
  "hobi" => "Jalan Jalan"
];
echo "Nama : " . $dev["nama"] . "\n";
echo "Alamat : " . $dev["alamat"] . "\n";

$khoir = [
  "nama" => "M. Khoirul",
  "umur" => 25,
  "alamat" => [
    "kota" => "Jakarta",
    "provinsi" => "DKI Jakarta"
  ]
];

var_dump($khoir["alamat"]["kota"]);

// mapping array adalah cara kita mengakses data array dengan menggunakan key yang sudah kita buat
// key adalah nama yang kita buat untuk mengakses data array  yang kita buat