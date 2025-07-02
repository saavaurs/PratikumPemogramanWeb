<?php
  
  require 'function.php'; // Memanggil file function.php untuk koneksi database
  // Koneksi ke database

  $query = "SELECT * FROM mahasiswa";
  $rows = query($query); // Mengambil data mahasiswa dari database

  // ambil data (fetch dari lemari relust
  //mysqli_row_count() = menghitung jumlah baris
  //mysqli_fetch_assoc() = mengambil data dari database dalam bentuk array asosiatif (huruf)
  //mysqli_fetch_array() = mengambil data dari database dalam bentuk array numerik dan asosiatif
  //mysqli_fetch_row() = mengambil data dari database dalam bentuk array numerik
  //mysqli_fetch_object() = mengambil data dari database dalam bentuk objek
  //mysqli_fetch_all() = mengambil semua data dari database dalam bentuk array asosiatif

//   while ($mhs = mysqli_fetch_object($result)){
// var_dump($mhs -> nama);
//   // Cek apakah query berhasil 
//   }
  

   

  
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

  <a href="tambahData.php"><button style="margin-bottom: 12px; background-color: lightblue;">Tambah Data Mahasiswa</button></a>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>NO HP</th>
    </tr>
    
    <?php 
    $i = 1; // Inisialisasi nomor urut
    foreach ($rows as $mhs) { ?>
    
    <tr>
      <!-- <td><?php echo $mhs['id']; ?></td> 
      <td><?php echo $mhs['nama']; ?></td>
      <td><?php echo $mhs['nim']; ?></td>
      <td><?php echo $mhs['jurusan']; ?></td>
      <td><?php echo $mhs['nohp']; ?></td>  -->

      <td><?= $i; ?></td>
      <td> <img src="img/<?= $mhs['foto']; ?>" alt="Foto" width="100"></td>
      <td><?= $mhs['nama']; ?></td>
      <td><?= $mhs['nim']; ?></td>
      <td><?= $mhs['jurusan']; ?></td>
      <td><?= $mhs['nohp']; ?></td>
      <td>
        <a href="ubahData.php?id=<?= $mhs['id']; ?>"  onclick="return confirm('Yakin ingin mengubah data ini?');"><button style="background-color: lightgreen;">Ubah</button></a>
        <a href="hapusData.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');"><button style="background-color: lightcoral;">Hapus</button></a>
      </td>
    </tr>
    <?php $i++; } ?>

  </table>
  
</body>
</html>