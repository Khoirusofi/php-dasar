<?php

$name = "Sofi";
$uts = 100;
$uas = 87;

if ($uts >= 100 && $uas = 100) {
  echo "Nilai $name A";
} else if ($uts >= 80 && $uas >= 80) {
  echo "Nilai $name B";
} else if ($uts >= 70 && $uas >= 70) {
  echo "Nilai $name C";
} else if ($uts >= 60 && $uas >= 60) {
  echo "Nilai $name D";
} else {
  echo "Nilai $name E";
}



if ($uts >= 100 && $uas = 100) :
  echo "Nilai $name A";
elseif ($uts >= 80 && $uas >= 80) :
  echo "Nilai $name B";
elseif ($uts >= 70 && $uas >= 70) :
  echo "Nilai $name C";
elseif ($uts >= 60 && $uas >= 60) :
  echo "Nilai $name D";
else :
  echo "Nilai $name E";
endif;

// else if digunakan untuk statement yang akan dijalankan jika kondisi sebelumnya tidak terpenuhi. 
//else if dapat digunakan lebih dari satu kali.