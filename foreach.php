<?php

$name = ["M", "Khoirusofi"];

for ($i = 0; $i < count($name); $i++) {
  echo "Hello ke $i $name[$i]\n";
}

foreach ($name as $data) {
  echo "Hello ke $data\n";
}

$users = [
  ["name" => "M", "age" => 25],
  ["name" => "Khoirusofi", "age" => 28],
  ["name" => "Rahmat", "age" => 30],
];

foreach ($users as $key => $value) {
  echo "Hello $value[name] umur $value[age]\n";
}
