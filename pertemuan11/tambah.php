<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                  Gambar :
                  <input type="text" name="gambar" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Nama :
                  <input type="text" name="nama" autofocus required>
                </label><br><br>
            </li>
            <li>
                <label>
                  NRP :
                  <input type="text" name="nrp" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Email :
                  <input type="text" name="email" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Jurusan :
                  <input type="text" name="jurusan" required>
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>