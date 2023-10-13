<?php
// 4 - FUNCTION
// built-in function

// date()
// untuk mengetahui waktu saat ini
// Default timezone: UTC (-7 jam)

echo date("G, l, j, F, Y");
echo "<hr>";
echo date("1", time());
echo "<hr>";

// time()
// UNIX Timestamp
// Detik yang sudah berlalu sejak
echo time() + 60 * 60 * 24;
echo "<hr>";

// hari apa 100 hari kebelakang
echo date("1", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// membuat waktu berdasarkan format
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(10, 45, 0, 2, 26, 2023);
echo "<hr>";
echo date("1", mktime( 0, 0, 0, 4, 7, 2003));
echo "<hr>";
echo strtotime("30 oktober 2004");
echo "<br>";
echo date("1", strtotime("30 oktober 2004"));
echo "<hr>";

// fungsi
// pow() untuk pangkat
echo pow(2,3); // dibaca 2 pangkat 3
echo "<br>";
echo rand(1,10); // jadi random
echo "<br>";

// pembulatan
echo round(2.7); // pendekatan nilai akan jadi 3
echo "<br>"; 
echo ceil(2.1); // pembulatan ke atas (ceiling / langit-langit)
echo "<br>";
echo floor(2.9); // pembulatan ke bawah, mau hasilnya mendekati 3 apapun jadi nya 2

?>

<!-- selesai -->
