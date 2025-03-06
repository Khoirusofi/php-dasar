<?php

$a = 1;
$b = 1;


while (true) {
  echo "Ini break $a\n";
  $a++;
  if ($a > 10) {
    break;
  }
}

for (; $b <= 8; $b++) {
  if ($b % 2 == 0) {
    continue;
  }
  echo "Ini continue $b\n";
}
