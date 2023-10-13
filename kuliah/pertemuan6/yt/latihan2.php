<?php  
$mahasiswa = [
    [
        "nama" => "Taufan Nugraha", 
        "npm" => "213040056", 
        "jurusan" => "Teknik Informatika", 
        "email" => "Taufan01@gmail.com",
        "gambar" => "profil.jpg"
    ],
    [
        "nama" => "Audi Hezra", 
        "npm" => "213040066", 
        "jurusan" => "Teknik Informatika", 
        "email" => "Audihezra02@gmail.com",
        "gambar" => "profil.jpg"
    ],
    [
        "nama" => "Iqbal Aminudin", 
        "npm" => "213040058", 
        "jurusan" => "Teknik Informatika", 
        "email" => "Iqbal03@gmail.com",
        "gambar" => "profil.jpg"
    ],
    [
        "nama" => "Muhammad Jamaludin", 
        "npm" => "213040057", 
        "jurusan" => "Teknik Informatika", 
        "email" => "Jamaludin04@gmail.com",
        "gambar" => "profil.jpg"
    ],
    [
        "nama" => "Jimmy Hidayat", 
        "npm" => "213040050", 
        "jurusan" => "Teknik Informatika", 
        "email" => "Jimmy05@gmail.com",
        "gambar" => "profil.jpg"
    ],
];
?>

<!DOCTYPE html>
<html>
<head>

    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Npm : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>

<!-- selesai -->