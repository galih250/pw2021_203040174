<?php
require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
          <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <li>
                <label>
                  Gambar :
                  <input type="text" name="gambar" required value="<?= $mhs['gambar']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Nama :
                  <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  NRP :
                  <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Email :
                  <input type="text" name="email" required value="<?= $mhs['email']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Jurusan :
                  <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>