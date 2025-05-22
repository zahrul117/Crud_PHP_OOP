<?php
include 'aksi.php';
$db = new aksi();

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahunTerbit = $_POST['tahunTerbit'];
$kategori = $_POST['kategori'];
$status = $_POST['status'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar'];
$result = $db->simpan($judul, $penulis,$tahunTerbit,$kategori,$status,$deskripsi,$gambar);

if($result == 1){
    echo "
    <script>
    alert('Data berhasil disimpan');
    window.location.href='input.php';
    </script>
    ";
 }else{
    echo "
    <script>
    alert('Data Gagal disimpan');
    history.go(-1);
    </script>
    ";
 }
?>