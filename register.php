Development\PratikumPemogramanWeb\register.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Akun</title>
    <link rel="stylesheet" href="register.css"> <!-- Menyisipkan file CSS -->
    <script src="main.js" defer></script> <!-- Menyisipkan main.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body style="padding: 20px;">
    <h1>Form Register</h1>
    <div class="card" style="background-color: darkmagenta; color: whitesmoke">
  <div class="card-body">
     <form action="login.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="nama" name="nama"><br>

        <label for="username">Username :</label><br>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password"><br><br>

        <label for="umur">Umur:</label><br>
        <input type="number" name="umur"><br><br>

        <label for="tanggallahir">Tanggal Lahir:</label><br>
        <input type="date" name="tanggallahir"><br><br>

        <label for="warna favorite">Warna Favorite:</label><br>
        <input type="color" name="warna"><br><br>

        <label for="upload foto profile">Upload foto profile</label><br>
        <input type="file" name="upload foto profile"><br><br>

        <label for="jeniskelamin">Jenis Kelamin:</label><br>
        <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki<br>
        <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan<br><br> 

        <label for="hobi">Hobi:</label><br>
        <input type="checkbox" name="hobi" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi" value="Menulis"> Menulis<br>
        <input type="checkbox" name="hobi" value="Olahraga"> Olahraga<br><br>
        
        <label for negara>Negara:</label><br><br>
        <select name="negara" id="negara">
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Indonesia">Indonesia</option>
        </select><br><br>

        <label for="bio">Biografi:</label><br>
        <textarea id="bio" name="bio" rows="5" cols="30"></textarea><br><br>
    
        <input type="submit" value="Daftar"><br>
    </form>
    
  </div>
</div>

   
    <p><a href="login.html">Sudah punya akun? Login</a></p> <!-- Link ke halaman login -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>