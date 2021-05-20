<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query books berdasarkan id
$book = query("SELECT * FROM books WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail books</title>
</head>

<body>

  <h3> Detail books</h3>
  <ul>
    <li><img src="img/<?= $book['Gambar']; ?>" width="150"></li>
    <li>Judul : <?= $book['Judul']; ?></li>
    <li>Pengarang : <?= $book['Pengarang']; ?></li>
    <li>Terbit : <?= $book['Terbit']; ?></li>
    <li>Dimensi : <?= $book['Dimensi']; ?></li>
    <li>ISBN : <?= $book['ISBN']; ?></li>
    <li><a href="ubah.php?id=<?= $book['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $book['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar books</a></li>
    
  </ul>

</body>

</html