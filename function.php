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

  function tambahMahasiswa($data){
    global $koneksi;

    $nama = $data['nama'];
   $nim = $data['nim'];
   $jurusan = $data['jurusan'];
   $nohp = $data['nohp'];

   $file = $_FILES['foto']['name'];
   $namaFile = date('dmy'). '_'. $file;
   $temp = $_FILES['foto']['tmp_name'];
   $folder = 'img/';
   $path = $folder . $namaFile;

   // Upload file dulu, baru insert ke database jika berhasil
    if (move_uploaded_file($temp, $path)) {
        mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim, jurusan, nohp, foto) VALUES ('$nama', '$nim', '$jurusan', '$nohp', '$namaFile')");
    }
    return mysqli_affected_rows($koneksi);
  }

  function hapusData($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
  }

  function ubahData($data) {
    global $koneksi;

    $id = $data['id'];
    $nama = $data['nama'];
    $nim = $data['nim'];
    $jurusan = $data['jurusan'];
    $nohp = $data['nohp'];

    $file = $_FILES['foto']['name'];
    $namaFile = date('dmy'). '_'. $file;
    $temp = $_FILES['foto']['tmp_name'];
    $folder = 'img/';
    $path = $folder . $namaFile;

    if (!empty($file)) {
        // Jika ada file baru diupload
        if (move_uploaded_file($temp, $path)) {
            mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', nohp='$nohp', foto='$namaFile' WHERE id=$id");
        }
    } else {
        // Jika tidak ada file baru, update data tanpa mengubah foto
        mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', nohp='$nohp' WHERE id=$id");
    }
    return mysqli_affected_rows($koneksi);
}

?>