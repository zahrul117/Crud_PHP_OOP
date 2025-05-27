<?php
include 'aksi.php';
$db = new aksi();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Buku Saya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Data Buku Saya</h1>

    <div class="mb-4 text-right">
      <a href="input.php"
        class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
        Tambah Buku
      </a>
    </div>

    <table class="w-full table-auto border-collapse border border-gray-300">
      <thead class="bg-blue-100">
        <tr>
          <th class="border border-gray-300 px-4 py-2">No</th>
          <th class="border border-gray-300 px-4 py-2">Judul</th>
          <th class="border border-gray-300 px-4 py-2">Penulis</th>
          <th class="border border-gray-300 px-4 py-2">Tahun Terbit</th>
          <th class="border border-gray-300 px-4 py-2">Kategori</th>
          <th class="border border-gray-300 px-4 py-2">Gambar</th>
          <th class="border border-gray-300 px-4 py-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($db->tampilkan() as $row) : ?>
          <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2 text-center"><?= $no++ ?></td>
            <td class="border border-gray-300 px-4 py-2">
              <a href="detail.php?id=<?= $row['id_buku'] ?>"
                class="text-blue-600 font-semibold hover:underline hover:text-blue-800 transition duration-200 cursor-pointer">
                <?= $row['judul'] ?>
              </a>
            </td>
            <td class="border border-gray-300 px-4 py-2"><?= $row['penulis'] ?></td>
            <td class="border border-gray-300 px-4 py-2 text-center"><?= $row['tahunTerbit'] ?></td>
            <td class="border border-gray-300 px-4 py-2"><?= $row['kategori'] ?></td>
            <td class="border border-gray-300 px-4 py-2 text-center">
              <img src="buku/<?= $row['gambar'] ?>" alt="Cover <?= $row['judul'] ?>" class="mx-auto w-12 h-auto rounded" />
            </td>
            <td class="border border-gray-300 px-4 py-2 text-center">
              <a href="hapus.php?id=<?= $row['id_buku'] ?>"
                class="text-red-600 hover:text-red-800 font-semibold transition duration-300">Hapus</a> |
              <a href="update.php?id=<?= $row['id_buku'] ?>"
                class="text-red-600 hover:text-red-800 font-semibold transition duration-300">Update</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>