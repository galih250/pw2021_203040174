<?php
/*
Linggih Kusumah Dilagga
203040174
Jumat,13.00

*/
?>
<?php 

//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
    
</head>
<body>

<div class="container mt-3" >
<a href="php/login.php">
    <button type="">Masuk ke halaman admin</button>
  </a>
  
  <h1>NOVEL</h1>
  <div class="card" style="width: 45rem">
    <div class="card-body">
      <div class="row">
        <div class="col md-6">
          <?php foreach( $books as $book ) : ?>
            <p class="judul">
              <a href="php/detail.php?id=<?= $book['id'] ?>">
                <img src="assets/gambar/<?= $book["Gambar"]; ?>">
              </a>
            </p>  
          <?php endforeach;  ?>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!-- jquery -->
    <script src="assets/js/script.js"></script>

</body>
</html>