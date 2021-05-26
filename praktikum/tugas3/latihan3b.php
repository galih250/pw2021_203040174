<!-- 
Linggih Kusumah Dilagga
203040174
JAM PRAKTIKUM 13:00 
-->

<?php

$terkenal = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi
", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 B</title>
</head>

<body>

    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach ($terkenal as $ter) : ?>
            <li><?= $ter ?></li>
        <?php endforeach; ?>
    </ol>

    <?php

    $terkenal[] = "Luca Modric";
    $terkenal[] = "Sadio Mane";

    sort($terkenal);

    ?>

    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php foreach ($terkenal as $ter) : ?>
            <li><?= $ter ?></li>
        <?php endforeach; ?>
    </ol>

</body>

</html>