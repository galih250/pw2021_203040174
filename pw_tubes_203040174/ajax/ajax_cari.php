<?php  

require '../functions.php';

$books = cari($_GET['keyword']);

?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Terbit</th>
      <th>Dimensi</th>
      <th>ISBN</th>
    </tr>

    <?php if (empty($books)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($books as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><png src="png/<?= $m['Gambar']; ?>" width="60"></td>
        <td><?= $m['Judul']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>