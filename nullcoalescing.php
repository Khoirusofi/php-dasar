<?php

$data = [
  "role" => "Admin"
];

$role = $data["role"] ?? "user"; // ketika role null maka akan menampilkan user

echo $role;

// null coalescing operator digunakan untuk memberikan nilai default jika nilai yang dibandingkan bernilai null
// jika nilai yang dibandingkan tidak bernilai null maka akan menampilkan nilai yang dibandingkan