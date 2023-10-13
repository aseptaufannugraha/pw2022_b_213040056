<?php
function salam($waktu = "Datang", $nama = "Taufan") {
    return "Selamat $waktu, $nama!";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Function PHP</title>
</head>
<body>
    <h1><?= salam("Pagi", "Taufan"); ?></h1>
</body>
</html>