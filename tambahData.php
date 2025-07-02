<?php
 require 'function.php'; // Memanggil file function.php untuk koneksi database

 if(isset($_POST['submit'])) {
   tambahMahasiswa($_POST);
  
   if(mysqli_affected_rows($koneksi) > 0) {
     echo "<script>alert('Data berhasil ditambahkan!');</script>";
     echo "<script>document.location.href='dataMahasiswa.php';</script>";
   } else {
     echo "<script>alert('Data gagal ditambahkan!');</script>";
     echo "<script>document.location.href='tambahData.php';</script>";
   }
 }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="post" enctype="multipart/form-data"> 
    <label for="nama"> Nama : </label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap*" required/> <br>

    <label for="nim">NIM : </label>
    <input type="text" name="nim" id="nim" required/> <br>

    <label for="jurusan">Jurusan : </label>
    <input type="text" name="jurusan" id="jurusan" required/> <br>

    <label for="nohp">No HP : </label>
    <input type="text" name="nohp" id="nohp" required/> <br>

    <label>Foto :</label>
    <input type="file" name="foto" required/> <br>

    <button type="submit" name="submit">Tambah Data</button>
  </form>
</body>
</html>