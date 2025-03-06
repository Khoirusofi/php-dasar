<?php

function Sof()
{
  echo "Hello Sof!" . PHP_EOL;
}

Sof();

$admin = true;

if ($admin) {
  function admin()
  {
    echo "Hello Admin Sof!" . PHP_EOL;
  }
}

admin();
