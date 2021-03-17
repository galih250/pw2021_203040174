<!-- 
Linggih Kusumah Dilagga
203040174
JAM PRAKTIKUM 13:00 
-->

<?php

$pemain = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane " => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan",
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 C</title>

    <style>
        table,
        th,
        td {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h3><b>Daftar pemain bola terkenal dan clubnya</b></h3>
    <table>
        <?php foreach ($pemain as $nama => $klub) : ?>
            <tr>
                <td><b><?= "$nama" ?></b></td>
                <td><?= " <b>:</b> $klub" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>