<?php 
$mahasiswa = [
    [
        "nama"=>"Taufan Nugraha",
        "npm"=>"213040056",
        "jurusan"=>"Teknik Informatika",
        "email"=>"Taufan01@gmail.com",
        "gambar"=>"profil.jpg"
    ],
    [
        "nama"=>"Dendi Maulana",
        "npm"=>"213040069", 
        "jurusan"=>"Teknik Industri", 
        "email"=>"Dendimlna@gmail.com",
        "gambar"=>"profil.jpg"
    ],
    [
        "nama"=>"Rani santia", 
        "npm"=>"213040011", 
        "jurusan"=>"Teknik Mesin", 
        "email"=>"Ranisntia@gmail.com",
        "gambar"=>"profil.jpg"
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan $_GET</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) :?>
            <li> <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>