<?php

$uts = "B";
$name = "Sofi";

switch ($uts) {
  case "A":
    echo "Nilai UTS $name $uts, sangat baik";
    break;
  case "B":
    echo "Nilai UTS $name $uts, baik";
    break;
  case "C":
    echo "Nilai UTS $name $uts, cukup";
    break;
  default:
    echo "Nilai UTS $name $uts, kurang";
    break;
}
switch ($uts):
  case "A":
    echo "Nilai UTS $name $uts, sangat baik";
    break;
  case "B":
    echo "Nilai UTS $name $uts, baik";
    break;
  case "C":
    echo "Nilai UTS $name $uts, cukup";
    break;
  default:
    echo "Nilai UTS $name $uts, kurang";
    break;
endswitch;


//switch case digunakan untuk membandingkan nilai yang sama dengan nilai yang telah ditentukan