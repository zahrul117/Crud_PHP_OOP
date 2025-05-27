<?php
include 'aksi.php';
$db = new Aksi();

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahunTerbit'];
$kategori = $_POST['kategori'];
$status = $_POST['status'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'] ? $_FILES['gambar']['name'] : null;


if ($gambar) {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "buku/" . $gambar);
} else {
    $old = $db->tampilkanById($id);
    $gambar = $old['gambar'];
}

$result = $db->update($id, $judul, $penulis, $tahun, $kategori, $status, $deskripsi, $gambar);

if($result == 1){
    echo "
    <script>
    alert('Data berhasil diUpdate');
    window.location.href='index.php';
    </script>
    ";
 }else{
    echo "
    <script>
    alert('Data Gagal diUpdate');
    history.go(-1);
    </script>
    ";
 }

