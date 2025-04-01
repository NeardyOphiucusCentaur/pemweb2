<?php
require 'dbkoneksi.php';
// 4. Menampilkan query SQL
$sql = 'SELECT * FROM pasien';

// 5. jalankan eksekusi
$rs = $dbh->query($sql);

// 6. populasi data hasil query
// foreach ($rs as $row) {
//     echo $row->kode." - ".$row->nama."<br>";
// }
?>
<h2>Daftar Pasien</h2>
<table border = "1" width = "100%">
    <thead>
        <th>No</th><th>Kode</th><th>Nama</th><th>Jenis Kelamin</th><th>Tempat Lahir, Tanggal Lahir</th><th>Alamat</th><th>Email</th><th>Kelurahan</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rs as $row) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>{$row->kode}</td>";
            echo "<td>{$row->nama}</td>";
            echo "<td>{$row->gender}</td>";
            echo "<td>{$row->tmp_lahir},{$row->tgl_lahir}</td>";
            echo "<td>{$row->alamat}</td>";
            echo "<td>{$row->email}</td>";
            echo "<td>{$row->kelurahan_id}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>