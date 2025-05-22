-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 03:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelolabuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahunTerbit` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `tahunTerbit`, `kategori`, `status`, `deskripsi`, `gambar`) VALUES
(2, 'Animal Farm', 'George Orwell', 1945, 'Fiksi Politik', 'Sudah Dibaca', 'Sebuah novel alegoris yang menggambarkan hewan-hewan di peternakan yang memberontak melawan manusia dan membentuk sistem sendiri.', 'animal_farm.jpg'),
(3, 'Atomic Habits', 'James Clear', 2018, 'Self Improvement', 'Sudah Dibaca', 'Buku panduan membentuk kebiasaan kecil yang dapat membawa perubahan besar dalam hidup secara konsisten.', 'atomic_habits.jpg'),
(4, 'Filosofi Teras', 'Henry Manampiring', 2018, 'Filsafat / Pengembangan Diri', 'Sudah Dibaca', '', 'filosofi_teras.jpg'),
(5, 'The Things You Can See Only When You Slow Down', 'Haemin Sunim', 2017, 'Self-Improvement / Mindfulness', 'Belum Dibaca', 'Buku ini menawarkan pandangan mendalam tentang pentingnya memperlambat hidup, menumbuhkan kesadaran, dan menemukan kedamaian di tengah dunia yang sibuk.', 'the-things-you-can-see.jpg'),
(27, 'Meditations', 'Marcus Aurelius', 1558, 'Filsafat Stoikisme', 'Sudah Dibaca', 'Meditations adalah kumpulan pemikiran pribadi Marcus Aurelius, seorang Kaisar Romawi dan filsuf Stoik, mengenai kehidupan, moralitas, dan tugas manusia.\r\n\r\nBuku ini tidak ditulis untuk diterbitkan, melainkan sebagai catatan pribadi Marcus dalam merenungi kebijaksanaan hidup dan bagaimana menjadi pribadi yang berintegritas di tengah kekuasaan dan tekanan.\r\n\r\nIsinya penuh dengan pandangan hidup stoik yang mengajarkan penerimaan terhadap takdir, kedamaian batin, serta tanggung jawab sosial.\r\n\r\nMeditations menjadi sumber inspirasi spiritual dan filosofi yang abadi, relevan dari masa Romawi hingga masa modern.', 'Meditations.jpg'),
(28, 'Laut Bercerita', 'Leila S. Chudori', 2017, 'Fiksi, Sejarah, Politik', 'Sudah Dibaca', 'Laut Bercerita mengisahkan perjuangan Biru Laut, seorang aktivis mahasiswa di era Orde Baru yang bersama rekan-rekannya memperjuangkan keadilan dan kebebasan berbicara.\r\n\r\nDikisahkan dalam dua sudut pandang — dari Laut dan adiknya, Asmara Jati — novel ini memotret penculikan aktivis 1998 dan dampaknya terhadap keluarga yang ditinggalkan.\r\n\r\nLeila S. Chudori berhasil menyampaikan luka sejarah Indonesia dengan bahasa puitis dan narasi yang kuat. Buku ini bukan hanya kisah fiksi, tapi juga refleksi sejarah dan kemanusiaan yang menyentuh dan menggugah.', '9786024246945_Laut-Bercerita.jpg'),
(29, 'A Happy Life', 'Seneca', 2021, 'Filsafat, Stoikisme, Etika', 'Belum Dibaca', 'A Happy Life (De Vita Beata) adalah karya filsuf Stoik Romawi, Seneca, yang mengeksplorasi makna kebahagiaan sejati. Dalam buku ini, Seneca berargumen bahwa kehidupan bahagia tidak tergantung pada kekayaan, kekuasaan, atau kenikmatan duniawi, melainkan pada hidup yang selaras dengan kebajikan, akal sehat, dan ketenangan batin.', '8qi5ypqvd7camrzcwvurcj.png'),
(31, 'Tentang Kamu', 'Tere liye', 2016, 'Novel/Fiksi', 'Sudah Dibaca', 'Buku Tentang Kamu karya Tere Liye bercerita tentang Zaman Zulkarnaen, seorang pengacara muda dari firma hukum ternama di London yang ditugaskan untuk mengurus warisan seorang wanita Indonesia bernama Sri Ningsih.\r\n\r\nDalam proses penelusuran kehidupannya, Zaman memulai perjalanan panjang dari Paris, Jakarta, hingga ke pelosok Sumbawa untuk menemukan siapa sebenarnya Sri Ningsih. Cerita ini penuh misteri, emosi, dan pelajaran hidup yang dalam.\r\n\r\nTentang Kamu adalah novel yang menyentuh dan menggugah hati pembaca akan makna kehidupan, perjuangan, dan cinta yang tak harus memiliki.', 'tentang-kamu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
