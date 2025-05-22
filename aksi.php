<?php
class Aksi{
    protected $mysqli;
    function __construct(){
        require_once 'database.php';
        $conn = new Database();
        $this->mysqli = $conn->connect();
    }

    function tampilkan(){
        $data = $this->mysqli->query("SELECT * FROM buku");
        while($amb = mysqli_fetch_assoc($data)){
            $hasil[] = $amb;
        }
        return $hasil;
    }

    function simpan($judul, $penulis, $tahunTerbit, $kategori, $status, $deskripsi, $gambar){
        $namaFile = $gambar['name'];
        $tmpName = $gambar['tmp_name'];

        move_uploaded_file($tmpName, "buku/" . $namaFile);

        $result = $this->mysqli->query("INSERT INTO buku Values('','$judul','$penulis','$tahunTerbit','$kategori','$status','$deskripsi','$namaFile')");

        if($result){
            return 1;
        } else{
            return 0;
        }
    }

    function hapus($id){
        $this->mysqli->query("DELETE FROM buku WHERE id_buku = '$id'");
    }
}