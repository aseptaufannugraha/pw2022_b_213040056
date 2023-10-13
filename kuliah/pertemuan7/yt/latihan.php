<?php 
// Variable Scope / Lingkup variable

// $x di sini yang tampil hanya 20 karena function itu hanya membaca lokal saja, jadi diluar function tidak terbaca
// disebutnya variable LOKAL

$x = 10;

function namanyabebas() {
    $x = 20;
    echo $x;
}

namanyabebas();
// pake yang diatas untuk menampilkan echo

echo "<br>";

// mau menampilkan $y nya di luar function
// pake global supaya yang terdapat di luar terbaca
// disebutnya variable GLOBAL

$y = 100;

function tampilY() {
    global $y;
    echo $y;
}

tampilY();

echo "<br>";
echo "<br>";
// ada lagi variable yang lain

// namanya SUPER GLOBALS
// Element SUPER GLOBAL diantaranya:
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// digunkan pake huruf besar semua

// ingin mengetahui isi server  kita menggunakan
var_dump($_SERVER);
echo "<br>";
echo "<br>";
// liat nya di view-sorce supaya terlihat semua
// tetapi ketika ingin tau nama server kita pake
echo $_SERVER["SERVER_NAME"];

echo "<br>";
// $_GET
var_dump($_GET);
?>

<!-- selesai -->