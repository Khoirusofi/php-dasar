<?php

$jenis_kelamin = "Laki-laki";

if ($jenis_kelamin == "Laki-laki") {
  echo "Laki-laki";
} else {
  echo "Perempuan";
}

//ternary operator
$hi = ($jenis_kelamin == "Laki-laki") ? "Hi Bro!" : "Hi Sister!";

echo $hi;


//ternaru operator digunakan untuk membandingkan nilai yang sama dengan nilai yang telah ditentukan
//jika nilai yang dibandingkan sama maka akan menampilkan nilai yang pertama
//jika nilai yang dibandingkan tidak sama maka akan menampilkan nilai yang kedua