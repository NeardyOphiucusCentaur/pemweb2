<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Belajar</title>
</head>
<body>
    <h3>Selamat Belajar PHP</h3>
    <?php
    $_nama = "Ahmad Kasim";
    $_umur = 20;
    $_berat = 60.5;
    $_prodi = "Sistem Informasi";
    $_kampus = "STT Terpadu Nurul Fikri";
    echo "Hello! Selamat Datang di PHP!";
    ?>
    <hr>
    <?php
    echo "Nama saya $_nama. Saya berumur $_umur tahun.";
    echo "<br>dengan berat badan $_berat kg.";
    echo "<br>Saya sedang menempuh pendidikan di prodi $_prodi.";
    ?>
    <br>di kampus <?= $_kampus ?>.
</body>
</html>