<?php  
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa diakses dimana pun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => "taufan"]; bisa dengan cara ini tetapi kurang tepat

// $_GET = ["nama" => "taufan", "email" => "taufan01@gmail.com"];

// bisa juga menggunakan ini
// $_GET["nama"] = "taufan";
// $_GET["email"] = "taufan01@gmail.com";
// $_GET["nama"] = "rans" // akan tertimpa namanya

// var_dump ($_GET);
?>
<!-- http://localhost/phpdasar/pertemuan7/kuliah_latihan1.php?nama=Taufan&npm=213040056&email=taufan01@gmail.com -->
<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li><a href="kuliah_latihan2.php?nama=Taufan&npm=213040056&email=taufan01@gmail.com">Taufan</a></li>
    <li><a href="kuliah_latihan2.php?nama=Audi&npm=213040066&email=Audihezra02@gmail.com">Audi</a></li>
    <li><a href="kuliah_latihan2.php?nama=Iqbal&npm=213040058&email=Iqbal03@gmail.com">Iqbal</a></li>
</ul>

<!-- selesai -->