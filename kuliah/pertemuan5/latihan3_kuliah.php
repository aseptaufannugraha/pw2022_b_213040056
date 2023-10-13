<?php
$mahasiswa = [
    ["Taufan Nugraha", "213040056", "Teknik Informatika", "Taufan01@gmail.com"],
    ["Audi Hezra", "213040066", "Teknik Informatika", "Audihezra02@gmail.com"],
    ["Iqbal Aminudin", "213040058", "Teknik Informatika", "Iqbal03@gmail.com"],
    ["Muhammad Jamaludin", "213040057", "Teknik Informatika", "Jamaludin04@gmail.com"],
    ["Jimmy Hidayat", "213040050", "Teknik Informatika", "Jimmy05@gmail.com"],
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
        <?php foreach($mahasiswa as $mhs):  ?>
            <ul>
                <li>Nama : <?= $mhs[0] ?></li>
                <li>NPM : <?= $mhs[1] ?></li>
                <li>Jurusan : <?= $mhs[2] ?></li>
                <li>Email : <?= $mhs[3] ?></li>
            </ul>
        <?php endforeach ?>
    </div>
    
</body>
</html>
<!-- selesai -->