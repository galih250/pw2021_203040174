const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajax
  // xmlhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // };

  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();

  // fetch()

  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => ((container.innerHTML = response)));
});

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const Gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(Gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}