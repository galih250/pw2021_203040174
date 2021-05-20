<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data books</title>
</head>

<body>

  <h3>Form Tambah Data books</h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Judul :
          <input type="text" name="Judul" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Pengarang :
          <input type="text" name="Pengarang" required>
        </label>
      </li>
      <li>
        <label>
          Tebit :
          <input type="text" name="Terbit" required>
        </label>
      </li>
      <li>
        <label>
          Dimensi :
          <input type="text" name="Dimensi" required>
        </label>
      </li>
      <li>
      <label>
          ISBN :
          <input type="text" name="ISBN" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nofoto.jpg" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>