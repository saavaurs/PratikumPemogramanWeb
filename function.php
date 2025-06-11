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

  function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }
?>