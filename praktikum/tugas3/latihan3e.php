<?php
/*
    Linggih Kusumah Dilagga
203040174
JAM PRAKTIKUM 13:00
*/
?>

<?php 
$books = [
    [
        "Judul" => "SELENA",
        "Pengarang" => "Tere Liye",
        "Terbit" => "2020",
        "Dimensi" => "368 halaman",
        "ISBN" => "9786020639512",
        "gambar" => "1.png"
    ],
    [
        "Judul" => "Misteri Terakhir #1",
        "Pengarang" => "S. Mara Gd",
        "Terbit" => "6 Apr 2020",
        "Dimensi" => "448 Halaman",
        "ISBN" => "9786020637112",
        "gambar" => "2.png"
    ],
    [
        "Judul" => "Nebula",
        "Pengarang" => "Tere Liye",
        "Terbit" => "2020",
        "Dimensi" => "376 halaman",
        "ISBN" => "9786020639536",
        "gambar" => "4.png"
    ],
    [
        "Judul" => "After the Funeral",
        "Pengarang" => "Agatha Christie",
        "Terbit" => "27 Desember 2017",
        "Dimensi" => "336 halaman",
        "ISBN" => "9789792234343",
        "gambar" => "4.png"
    ],
    [
        "Judul" => "Ganjil Genap",
        "Pengarang" => "Almira Bastari",
        "Terbit" => "Februari 2020",
        "Dimensi" => "344 halaman",
        "ISBN" => "-",
        "gambar" => "5.png"
    ],
    [
        "Judul" => "Tokyo & Perayaan",
        "Pengarang" => "Ruth Pricilia Angelinae",
        "Terbit" => "2020",
        "Dimensi" => "208 halaman",
        "ISBN" => "9786020640853",
        "gambar" => "6.png"
    ],
    [
        "Judul" => "Segi Tiga",
        "Pengarang" => "Sapardi Djoko Damono",
        "Terbit" => "Maret 2020",
        "Dimensi" => "328 halaman",
        "ISBN" => "9786020639246",
        "gambar" => "7.png"
    ],
    [
        "Judul" => "Ibuk",
        "Pengarang" => "Iwan Setyawan",
        "Terbit" => "2017",
        "Dimensi" => "289 halaman",
        "ISBN" => "9786020329987",
        "gambar" => "8.png"
    ],
    [
        "Judul" => "Laut Bercerita",
        "Pengarang" => "Leila S. Chudori",
        "Terbit" => "Desember 2017",
        "Dimensi" => "379 halaman",
        "ISBN" => "-",
        "gambar" => "9.png"
    ],
    [
        "Judul" => "Defending Jacob",
        "Pengarang" => "William Landay",
        "Terbit" => "Desember 2017",
        "Dimensi" => "484 halaman",
        "ISBN" => "9786020451558",
        "gambar" => "10.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dimensi</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="gambar/<?= $book["gambar"]; ?>"></td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Pengarang"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
      <td><?= $book["ISBN"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>