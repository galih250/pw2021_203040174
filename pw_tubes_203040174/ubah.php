<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM books WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data books</title>
</head>

<body>

  <h3>Form Ubah Data books</h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Judul :
          <input type="text" name="Judul" autofocus required value="<?= $m['Judul']; ?>">
        </label>
      </li>
      <li>
        <label>
          Pengarang :
          <input type="text" name="Pengarang" required value="<?= $m['Pengarang']; ?>">
        </label>
      </li>
      <li>
        <label>
          Terbit :
          <input type="text" name="Terbit" required value="<?= $m['Terbit']; ?>">
        </label>
      </li>
      <li>
        <label>
         Dimensi:
          <input type="text" name="Dimensi" required value="<?= $m['Dimensi']; ?>">
          </li>
      <li>
        <label>
         ISBN:
          <input type="text" name="ISBN" required value="<?= $m['ISBN']; ?>">
        </label>
      </li>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $m['gambar']; ?>" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>