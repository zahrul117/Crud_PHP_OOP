<?php
class Aksi
{
    protected $mysqli;
    function __construct()
    {
        require_once 'database.php';
        $conn = new Database();
        $this->mysqli = $conn->connect();
    }

    function tampilkan()
    {
        $data = $this->mysqli->query("SELECT * FROM buku");
        while ($amb = mysqli_fetch_assoc($data)) {
            $hasil[] = $amb;
        }
        return $hasil;
    }

    function tampilkanById($id)
    {
        $result = $this->mysqli->query("SELECT * FROM buku WHERE id_buku = '$id'");
        $data = $result->fetch_assoc();
        return $data;
    }


    function simpan($judul, $penulis, $tahunTerbit, $kategori, $status, $deskripsi, $gambar)
    {
        $namaFile = $gambar['name'];
        $tmpName = $gambar['tmp_name'];

        move_uploaded_file($tmpName, "buku/" . $namaFile);

        $result = $this->mysqli->query("INSERT INTO buku Values('','$judul','$penulis','$tahunTerbit','$kategori','$status','$deskripsi','$namaFile')");

        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }

    function update($id, $judul, $penulis, $tahunTerbit, $kategori, $status, $deskripsi, $gambar)
    {
        $result = $this->mysqli->query("UPDATE buku SET
                judul = '$judul',
                penulis = '$penulis',
                tahunTerbit = '$tahunTerbit',
                kategori = '$kategori',
                `status` = '$status',
                gambar = '$gambar',
                deskripsi = '$deskripsi'
                WHERE id_buku = '$id';
                ");
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }

    function hapus($id)
    {
        $this->mysqli->query("DELETE FROM buku WHERE id_buku = '$id'");
    }
}
