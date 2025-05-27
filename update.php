<?php
include 'aksi.php';
$db = new aksi();
$id = $_GET['id'];
$buku = $db->tampilkanById($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">📚 Update Buku</h2>
        <form action="update_aksi.php" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <input type="hidden" name="id" value="<?= $buku['id_buku'] ?>">

            <div class="col-span-1">
                <label for="judul" class="block mb-1 font-medium text-gray-700">Judul Buku</label>
                <input type="text" name="judul" value="<?= $buku['judul'] ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="col-span-1">
                <label for="penulis" class="block mb-1 font-medium text-gray-700">Penulis</label>
                <input type="text" name="penulis" value="<?= $buku['penulis'] ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="col-span-1">
                <label for="tahunterbit" class="block mb-1 font-medium text-gray-700">Tahun Terbit</label>
                <input type="number" name="tahunTerbit" value="<?= $buku['tahunTerbit'] ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="col-span-1">
                <label for="kategori" class="block mb-1 font-medium text-gray-700">Kategori</label>
                <input type="text" name="kategori" value="<?= $buku['kategori'] ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="col-span-1">
                <label for="status" class="block mb-1 font-medium text-gray-700">Status</label>
                <select name="status" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="Belum Dibaca" <?= $buku['status'] == 'Belum Dibaca' ? 'selected' : '' ?>>Belum Dibaca</option>
                    <option value="Sudah Dibaca" <?= $buku['status'] == 'Sudah Dibaca' ? 'selected' : '' ?>>Sudah Dibaca</option>
                </select>
            </div>

            <div class="col-span-1">
                <label for="gambar" class="block mb-1 font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                <p class="text-sm mt-1 text-gray-500">Gambar sebelumnya: <span class="text-gray-700 font-medium"><img src="buku/<?= $buku['gambar'] ?>" width="80" alt=""></span></p>
            </div>

            <div class="col-span-2">
                <label for="deskripsi" class="block mb-1 font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"><?= $buku['deskripsi'] ?></textarea>
            </div>

            <div class="col-span-2 flex justify-center">
                <button type="submit" name="submit" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition duration-200">🔄 Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>

</html>