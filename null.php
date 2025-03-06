<?php

$name = null;
$age = null;

echo "Nama : ";
echo $name;

echo "\n";

echo "Umur : ";
echo $age;

echo "\n";

echo "Apakah nama kosong? : ";
echo is_null($name);
echo "\n";

//unset (menhapus variabel)
$namesof = "M Khoirusofi";
unset($namesof);

$namesof = "M Khoirusofi"; //false
// $namesof = null; //true

//isset (mengecek variabel)
var_dump(isset($namesof));


// null adalah tipe data yang merepresentasikan nilai kosong atau tidak ada
// null ardalah tipe data yang bebeda dari string kosong ("") atau angka nol (0)
// null biasanya digunakan untuk inisialisasi variabel sebelum diberikan nilai