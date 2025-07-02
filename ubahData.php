<?php
 require 'function.php'; // Memanggil file function.php untuk koneksi database


$id = $_GET['id']; // Mengambil ID dari URL
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0]; // Mengambil data mahasiswa berdasarkan ID
// Cek apakah form sudah disubmit

 if(isset($_POST['submit'])) {
   ubahData($_POST);
  
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
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  <h1>Ubah Data Mahasiswa</h1>
  <form action="" method="post" enctype="multipart/form-data"> 
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <label for="nama"> Nama : </label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap*" required value="<?= $mhs['nama']; ?>"/> <br>

    <label for="nim">NIM : </label>
    <input type="text" name="nim" id="nim" required value="<?= $mhs['nim']; ?>"/> <br>

    <label for="jurusan">Jurusan : </label>
    <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>"/> <br>

    <label for="nohp">No HP : </label>
    <input type="text" name="nohp" id="nohp" required value="<?= $mhs['nohp']; ?>"/> <br>

    <label>Foto :</label>
    <input type="file" name="foto" value="<?= $mhs['foto']; ?>"/> <br>

    <button type="submit" name="submit">Ubah Data</button>
  </form>
</body>
</html>