<?php


// Variable
$firstname = "M.";
$lastname = "Khoirusofi";
$age = 25;

echo "Nama : $firstname $lastname\n";
echo "Umur : $age\n";


// Variable variables (variabel yang isinya variabel) tiddk disarankan
$example = "M";
$$example = "Khoirusofi";

echo $example . "\n";
echo $M . "\n";
echo $age . "\n";

// variabel adalah tempat menyimpan data bisa dalam int dan string