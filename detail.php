<?php
include 'aksi.php';
$db = new aksi();
$id = $_GET['id'];
$buku = $db->tampilkanById($id);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-6">📖 Detail Buku</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <img src="buku/<?= $buku['gambar'] ?>" alt="<?= $buku['judul'] ?>" class="rounded-lg shadow">
            </div>

            <div>
                <p><strong>Judul:</strong> <?= $buku['judul'] ?></p>
                <p><strong>Penulis:</strong> <?= $buku['penulis'] ?></p>
                <p><strong>Tahun Terbit:</strong> <?= $buku['tahunTerbit'] ?></p>
                <p><strong>Kategori:</strong> <?= $buku['kategori'] ?></p>
                <p><strong>Status:</strong> <?= $buku['status'] ?></p>
                <p class="mt-4"><strong>Deskripsi:</strong><br><?= nl2br($buku['deskripsi']) ?></p>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="index.php" class="bg-indigo-500 text-white px-6 py-2 rounded hover:bg-indigo-600 transition">🔙 Kembali</a>
        </div>
    </div>
</body>
</html>
