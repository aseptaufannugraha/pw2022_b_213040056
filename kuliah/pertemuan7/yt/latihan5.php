<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"])) {
            echo "<h1>Selamat Datang, " . $_POST["nama"] . "!</h1>";
        }
    ?>
    <form method="POST">
        <label for="nama">Masukkan Nama Anda:</label>
        <input type="text" name="nama" id="nama">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>