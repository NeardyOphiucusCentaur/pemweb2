<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3>Form Nilai Mahasiswa</h3>
    <hr>
<?php
    $ar_matkul =[
        "DDP"=> "Dasar-Dasar Pemrograman",
        "WEB1"=> "Pemrograman Web 1",
        "WEB2"=> "Pemrograman Web 2",
        "SB"=> "Statistika dan Probabilitas",
        "BD"=> "Basis Data",
        "AI"=> "Kecerdasan Buatan",
        "JK"=> "Jaringan Komputer",
        "UI/UX"=> "UI/UX",
    ]
    ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
<?php
    foreach ($ar_matkul as $key => $nama) {
        echo"<option value='$kode'>$nama</option>";
    }
?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Niali UTS</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="text3" name="text3" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
Hasil Input Data
<?php
    $_nama = $_POST["nama"];
    $_matkul = $_POST["matkul"];
    $_nilai_uts = $_POST["nilai_uts"];
    $_nilai_uas = $_POST["nilai uas"];
    $_nilai_tugas = $_POST["nilai_tugas"];
?>
Nama Mahasiswa : <?=$_nama; ?> <br>
Mata Kuliah : <?=$_matkul; ?> <br>
Nilai UTS : <?=$_nilai_uts; ?> <br>
Nilai UAS : <?=$_nilai_uas; ?> <br>
Nilai Tugas/Praktikum : <?=$_nilai_tugas; ?> <br>

</body>
</html>