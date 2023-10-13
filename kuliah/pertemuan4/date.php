<?php 
// Date 
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");

// l = hari
// d = tanggal
// M = bulan
// Y = tahun


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari
echo "<br>";
echo time();

// untuk mengetahui 100 hari kedepan atau kebelakang
echo date("1", time() + 60 * 60 * 24 * 100);
echo date("1", time() - 60 * 60 * 24 * 100);

// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// buat ulang tahun saya untuk tau hari apa saya lahir
echo date("l", mktime(0,0,0,4,7,2003));


// strtotime
echo date("l", strtotime("07 apr 2003"));

?>

<!-- selesai -->