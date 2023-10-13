<?php
//array associative
//array yang indexnya berupa String, yang berpasangan dengan nilainya
$mahasiswa = [
    [
        "nama"=>"Taufan Nugraha",
        "npm"=>"213040056",
        "jurusan"=>"Teknik Informatika",
        "email"=>"Taufan01@gmail.com"
    ],
    [
        "nama"=>"Audi Hezra",
        "npm"=>"213040066", 
        "jurusan"=>"Teknik Informatika", 
        "email"=>"Audihezra02@gmail.com"
    ],
    [
        "nama"=>"Iqbal Aminudin", 
        "npm"=>"213040058", 
        "jurusan"=>"Teknik Informatika", 
        "email"=>"Iqbal03@gmail.com"
    ],
    [
        "nama"=>"Muhammad Jamaludin", 
        "npm"=>"213040057", 
        "jurusan"=>"Teknik Informatika", 
        "email"=>"Jamaludin04@gmail.com"
    ],
    [
        "nama"=>"Jimmy Hidayat", 
        "npm"=>"213040050", 
        "jurusan"=>"Teknik Informatika", 
        "email"=>"Jimmy05@gmail.com"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        ul {
            float: left;
            margin: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.20);
            width: 250px;
        }

        ul li {
            line-height: 20px;
            list-style: none;
        }

    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <div class="container">
        <?php foreach($mahasiswa as $mhs) :  ?>
            <ul>
                <li>Nama : <?= $mhs["nama"] ?></li>
                <li>Npm : <?= $mhs["npm"] ?></li>
                <li>Jurusan : <?= $mhs["jurusan"] ?></li>
                <li>Email : <?= $mhs["email"] ?></li>
            </ul>
        <?php endforeach ?>
    </div>
    
</body>
</html>

<!-- selesai -->