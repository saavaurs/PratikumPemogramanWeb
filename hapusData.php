<?php
require 'function.php';


  $id = $_GET['id'];

  if(hapusData($id) > 0) {
    echo "<script>alert('Data berhasil dihapus!');</script>";
    echo "<script>document.location.href='dataMahasiswa.php';</script>";
  } else {
    echo "<script>alert('Data gagal dihapus!');</script>";
    echo "<script>document.location.href='dataMahasiswa.php';</script>";
  }

?>