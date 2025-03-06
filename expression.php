<?php

$a = 10;
$b = $a;

var_dump($a);
var_dump($b);

function getValue()
{

  $a = 10;
  $b = 20;
  return $a + $b;
}

$value = getValue();

var_dump($value);


//expression adalah kode yang menghasilkan nilai
//statment adalah kode yang menghasilkan aksi
//block adalah kode yang menghasilkan aksi yang lebih dari satu