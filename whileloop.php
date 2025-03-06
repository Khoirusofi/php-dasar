<?php

$a = 1;

while ($a <= 10) {
  echo "Ini $a \n";
  $a++;
}

while ($a <= 10) :
  echo "Ini $a \n";
  $a++;
endwhile;

// whileloop digunakan untuk perulangan yang tidak diketahui batasnya
// whileloop terdiri dari 2 bagian