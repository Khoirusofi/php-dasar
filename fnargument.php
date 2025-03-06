<?php

function Sof($name, $address = "Indonesia")  // default value disaranin di belakang

{
  echo "Hello $name $address!" . PHP_EOL;
}

Sof("Sofi");


function Age(int $age, int $year)
{
  echo "Umur $age Lahir $year" . PHP_EOL;
}

Age(25, 2000);
