<?php
/* 
    Linggih Kusumah Dilagga
    203040174
    github.com/galih250/pw2021_203040174
    Pertemuan 6( 24 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Linggih Kusumah Dilagga", "203040174", "TIF", "Linggih kusumah Dilagga"],
//     ["Leonardo Rmadani", "203040152", "TI", "LRtI@gmail.com"],
//     ["Satrio Wega", "203040153", "TM", "SWtM@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "linggih Kusumah Dilagga", 
        "nrp" => "203040174",
        "email" => "galihk250@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "linggih.jpg"
    ],
    [
        "nama" => "wulan hs", 
        "nrp" => "203040152",
        "email" => "Wulanhs@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "linggih.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
