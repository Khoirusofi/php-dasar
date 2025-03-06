<?php

echo 'Name : ';
echo "Muhammad";
echo "\n";

echo 'Name : ';
echo 'Muhammad';
echo "\n";

echo 'Name : ';
echo 'Khoirusofi';
echo "\n";

//heredoc (mengenali variabel)
echo <<<SOFI
    Selamat datang di channel SOFI
    Channel ini berisi tutorial tentang pemrograman
    PHP, HTML, CSS, JavaScript, Python, dan lain-lain
    Jangan lupa like, share, dan subscribe
    Terima kasih
SOFI;

//nowdoc (tidak mengenali variabel)
echo <<<'SOFI'
    Selamat datang di channel SOFI
    Channel ini berisi tutorial tentang pemrograman
    PHP, HTML, CSS, JavaScript, Python, dan lain-lain
    Jangan lupa like, share, dan subscribe
    Terima kasih
SOFI;

//type data string adalah tipe data yang digunakan untuk menyimpan data berupa teks