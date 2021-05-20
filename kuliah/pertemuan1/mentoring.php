<?php
/*
   
*/
?>
<?php 
$phones = [
    [
        "Name" => "Redmi 9A",
        "Brand" => "Redmi",
        "Deskripsi" => "Xiaomi Redmi 9A (2+32GB) Layar DorDrop 6.53 HD+ Baterai 5000mAh",
        "Category" => "Low-End",
        "Price" => "Rp 1.249.000",
        "Picture" => "Redmi 9A.png"
    ],
    [
        "Name" => "Realme C15",
        "Brand" => "Realme",
        "Deskripsi" => "Realme C15 (4+64GB) 6000mAh, 18W Quick Charge, Ultra-Wide Quad",
        "Category" => "Middle-Range",
        "Price" => "Rp 2.199.000",
        "Picture" => "Realme C15.png"
    ],
    [
        "Name" => "Poco X3",
        "Brand" => "Poco",
        "Deskripsi" => "Poco X3 NFC (8GB+128GB) Snapdragon™ 732G, Layar 6.67",
        "Category" => "Middle-Range",
        "Price" => "Rp 3.599.000",
        "Picture" => "Poco X3 NFC.png"
    ],
    [
        "Name" => "Redmi Note 9",
        "Brand" => "Redmi",
        "Deskripsi" => "Xiaomi Redmi Note 9 (6GB+128GB) Onyx Black 48MP Quad Kamera Helio G85",
        "Category" => "Middle-Range",
        "Price" => "Rp 2.899.000",
        "Picture" => "Redmi Note9.png"
    ],
    [
        "Name" => "Realme 7Pro",
        "Brand" => "Realme",
        "Deskripsi" => "Realme 7 Pro (8+128GB) Snapdragon™ 720G, NFC, Garansi Resmi",
        "Category" => "Middle-Range",
        "Price" => "Rp 4.599.000",
        "Picture" => "Realme 7Pro.png"
    ],
    [
        "Name" => "Vivo V17pro",
        "Brand" => "Vivo",
        "Deskripsi" => "Vivo V17 Pro (8+128GB) Garansi Resmi Vivo Indonesia",
        "Category" => "Middle-Range",
        "Price" => "Rp 4.999.000",
        "Picture" => "Vivo V17pro.png"
    ],
    [
        "Name" => "Samsung Galaxy M51",
        "Brand" => "Samsung",
        "Deskripsi" => "Samsung Galaxy M51 (8GB+128GB) Original Bergaransi Resmi Samsung Indonesia",
        "Category" => "Middle-Range",
        "Price" => "Rp 4.999.000",
        "Picture" => "Samsung Galaxy M51.png"
    ],
    [
        "Name" => "Xiaomi Mi10 Pro5G",
        "Brand" => "Xiaomi",
        "Deskripsi" => "Xiaomi Mi 10 Pro (12+256GB) Snapdragon™ 865G 5G Octacore 108MP Quad",
        "Category" => "High-End",
        "Price" => "Rp 8.999.000",
        "Picture" => "Xiaomi Mi10 Pro5G.png"
    ],
    [
        "Name" => "iPhone 12",
        "Brand" => "iPhone",
        "Deskripsi" => "Apple iPhone 128GB, Blue",
        "Category" => "High-End",
        "Price" => "Rp 14.499.000",
        "Picture" => "IPhone 12.png"
    ],
    [
        "Name" => "Oppo Find X2pro",
        "Brand" => "Oppo",
        "Deskripsi" => "Oppo Find X2pro (12+512GB) Garansi Resmi Oppo Indonesia",
        "Category" => "High-End",
        "Price" => "Rp 16.750.000",
        "Picture" => "Oppo Find X2pro.png"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mentoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($phones as $phone) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $phone["Picture"]; ?>"></td>
      <td><?= $phone["Name"] ?></td>
      <td><?= $phone["Brand"] ?></td>
      <td><?= $phone["Deskripsi"] ?></td>
      <td><?= $phone["Category"] ?></td>
      <td><?= $phone["Price"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>