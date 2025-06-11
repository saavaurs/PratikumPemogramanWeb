<?php
  $koneksi = mysqli_connect("localhost", "root", "", "webif");
  //localhost = nama host
  //root = username 
  //"" = password
  //webif = nama database

  // Jika koneksi gagal, tampilkan pesan error
  // Cek koneksi
  if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }
  else {
    echo "Koneksi berhasil";
  }

  $query = "SELECT * FROM mahasiswa";
  $result = mysqli_query($koneksi, $query); //object

  // ambil data (fetch dari lemari relust
  //mysqli_row_count() = menghitung jumlah baris
  //mysqli_fetch_assoc() = mengambil data dari database dalam bentuk array asosiatif
  //mysqli_fetch_array() = mengambil data dari database dalam bentuk array numerik dan asosiatif
  //mysqli_fetch_row() = mengambil data dari database dalam bentuk array numerik
  //mysqli_fetch_object() = mengambil data dari database dalam bentuk objek
  //mysqli_fetch_all() = mengambil semua data dari database dalam bentuk array asosiatif

  
  $mhs = mysqli_fetch_object($result);

  var_dump($mhs -> nama);
  // Cek apakah query berhasil  

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Data Mahasiswa</h1>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>NO HP</th>
    </tr>
  </table>
  
</body>
</html>