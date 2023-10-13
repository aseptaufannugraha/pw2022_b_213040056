<?php 
$mahasiswa = [
    ["Taufan Nugraha", "213040056", "Teknik Informatika", "Tnugraha684@gmail.com"],
    ["Audi Hezra", "213040066", "Teknik Informatika", "audihezra54@gmail.com"],
    ["Iqbal Aminudin", "213040058", "Teknik Informatika", "IqbalAminudin001@gmail.com"],
];

?>
<DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NPM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>