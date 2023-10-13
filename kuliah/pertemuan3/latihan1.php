<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus aray

// Pengulangan 1

for ($i = 0; $i < 5; $i++) {
    echo "Hello World! <br>";
}

// Pengulangan 2
// cek terlebih dahulu jika false tidak usah dikerjakan
$i = 0;
while ($i < 5) {
    echo "Hello World! <br>";
    $i++;
}

// Pengulangan 3
// langsung kerjakan nanti liat true atau false, true bakal ada pengulangan kalo false bakal muncul satu kali
$i = 10;
do {
    echo "Hello World! <br>";
    $i++;
} while ($i < 5);

?>

<!-- selesai -->