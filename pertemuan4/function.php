<?php
/* 
    Linggih Kusumah Dilagga
    203040174
    github.com/galih250/pw2021_203040174
    Pertemuan 4( 22 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Function
*/
?>

<?php 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi"); ?></h1>
</body>
</html>
