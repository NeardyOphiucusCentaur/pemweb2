<?php
    // 1) definisikan variabel koneksi database
    $host = "localhost";
    $dbname = "dbpuskesmas";
    $username = "root";
    $password = "";
    $charset = "utf8mb4";

    // 2) buat DSN dan opsi akses database
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $option = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    // 3) buat koneksi database
    $dbh = new PDO($dsn, $username, $password, $option);
?>