<?php 
// pertemuan2, belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (boolean)
echo 10; // integer
echo '<br>';
echo 'Taufan'; // string
echo '<br>';
echo false; // boolean null
echo '<hr>';

// VARIABEL
// Tempat menampung NILAI
// awali dengan tanda $
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_depan = 'Taufan';
echo $nama_depan;
echo '<hr>';

// STRING
// '', ""
$hari = "jum'at";
echo $hari;
echo "<br>";
echo 'Taufan: "Halo, semua!"';
echo '<br>';
//  Escape Character
// \
echo 'Taufan: "Selamat hari jum\'at"';
echo '<br>';
echo "Taufan: \"Selamat hari jum'at\"";
echo '<br>';
// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh ""
echo "Halo, nama saya $nama_depan";
echo '<br>';
echo 'Halo, nama saya $nama_depan';
echo '<hr>';
// Concat Penggabung String
// .
echo $nama_depan = 'Taufan';
echo $nama_belakang = 'Nugraha';
echo '<br>';
echo $nama_depan . " " . $nama_belakang;
echo '<hr>';

// OPERATOR
// Aritmatika
// +, -, *, /
echo 1 + 1; // Hasil Dari 1 + 1 Adalah 2
echo '<br>';
echo 20 * 9 / 3;
echo '<br>';
echo 5 * 5;
echo '<br>';
echo 240 * 20 / 15 - 20;
echo '<br>';
echo 2130 + 220 * 2 / 10; // Menggunakan String
echo '<hr>'

?>