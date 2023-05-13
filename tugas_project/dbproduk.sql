-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2023 pada 11.10
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Camping Ground'),
(2, 'Wisata Alam'),
(3, 'Outbound');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(4, '2023-05-06', 'Wisnu Nugroho', 'jl.in aja', '08968556453', 'wisnuenunugroho@gmail.com', 2, 'Bukit Sikunir untuk 2 orang', 1),
(5, '2023-05-06', 'Wisnu Nugroho', 'Jl. Kenanga', '089639569422', 'ihsan@gmail.com', 5, '5 orang untuk menuju ke telaga warna', 2),
(8, '2023-05-12', 'Bibah', 'Jl. Margonda', '08968556453', 'admin123@gmail.com', 5, 'Bukit Sikunir 5 orang', 4),
(9, '2023-05-12', 'Wisnu ', 'Jl. Kenanga', '089639569422', 'wisnuenunugroho@gmail.com', 2, '2 tiket', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL,
  `gambar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`, `gambar`) VALUES
(4, 'CG001', 'Bukit Sikunir', 10000, 5000, 100, 10, 'Bukit Sikunir Dieng adalah bukit kecil fenomenal yang terletak di Kawasan Wisata Dataran Tinggi Dieng pada ketinggian 2.263 mdpl. Tepatnya sebelah Timur Desa Sembungan, Kecamatan Kejajar, Kabupaten Wonosobo, Jawa Tengah. Desa Sembungan sendiri merupakan desa tertinggi di Pulau Jawa. Bukit Sikunir yang terletak di Desa Sembungan ini memungkinkan wisatawan leluasa memandang alam Dataran Tinggi Dieng dari ketinggian.', 1, 'siulet-sikunir.jpg'),
(5, 'CG002', 'Bukit Scooter Dieng', 5000, 2500, 100, 10, 'Bukit Scooter Dieng adalah obyek wisata Dieng yang baru-baru ini dibuka, yaitu awal tahun 2016. Bukit Scooter yang berada di ketinggian lebih kurang 2.200 mdpl, akan memberi kesempatan bagi Anda untuk menyaksikan lanskap Dataran Tinggi Dieng yang sangat indah. Pemandangan gunung-gunung tinggi seperti Gunung Sindoro, Gunung Slamet, Gunung Pangonan, Gunung Pakuwaja, Gunung Prau, Gunung Sipandu, Gunung Bisma, dan lainnya yang memagari pemukiman penduduk berhias bukit-bukit kecil, telaga-telaga, dan candi-candi Hindu yang berselimut kabut sangat luar biasa.', 1, 'bukit-scooter.jpg'),
(6, 'CG003', 'Bukit Dieng Plateu', 15000, 10000, 100, 10, 'Dieng Plateau atau yang dikenal juga dengan sebutan Dataran Tinggi Dieng, dilihat dari sisi administratif/geografis, letak daerah ini bisa dibilang unik. Sangat jarang ditemukan di Indonesia dimana satu wilayah terbagi menjadi dua wilayah Administratif seperti Dieng, dimana bagian wilayah barat ( Dieng Kulon ) Masuk Wilayah Kabupaten Wonosobo, dan Sebelah Timur masuk Kabupaten Banjarnegara.', 1, 'dieng plateau.jpg'),
(7, 'WA001', 'Kebun Teh Tambi', 10000, 5000, 100, 10, 'Kebun Teh Tambi memiliki luas sekitar 830 hektar dengan pemandangan pegunungan hijau disekitarnya. Letaknya berada di ketinggian antara 800-2000 meter diatas permukaan laut. Daya tarik pada Kebun Teh Tambi ini dapat memikat siapa saja yang leihatnya. Dengan keindahan panorama kebun teh yang luas, mampu menghipnotis para wisatawan untuk singgah ke wisata alam tersebut.', 2, '4.-kebun-teh-tambi-dieng.jpg'),
(8, 'WA002', 'Telaga Warna', 10000, 5000, 100, 10, 'Telaga Warna Dieng yang berada di Kawasan Wisata Dataran Tinggi Dieng secara administrasi masuk wilayah Dieng Wetan, Kecamatan Kejajar, Kabupaten Wonosobo, Jawa Tengah. Berada di ketinggian 2.000 mdpl, Telaga Warna Dieng tenar karena keindahan warna permukaannya yang bisa berubah-ubah setiap waktu, tergantung cuaca, sudut pandang, serta jarak pandang kita. Akan lebih indah lagi jika memandang fenomena perubahan warna permukaan Telaga Warna dari atas.', 2, 'telaga-warna2.jpg'),
(9, 'WA003', 'Kawah Sikidang', 10000, 5000, 100, 10, 'Kawah Sikidang Dieng terletak di Desa Dieng Kulon, Kecamatan Batur, Kabupaten Banjarnegara, Jawa Tengah, walaupun masih banyak yang mengatakan letaknya di Wonosobo', 2, 'Kawah SIkidang.jpg'),
(10, 'OB001', 'Outbound Candi Arjuna', 30000, 20000, 100, 10, 'Kawasan Candi Arjuna Dieng merupakan Candi Dieng yang dibangun pada abad ke 8 oleh kerajaan mataram kuno sehingga menjadi candi Hindu tertua di Pulau Jawa.', 3, 'outbound-candi-arjuna.jpg'),
(11, 'OB002', 'Dieng Serayu', 50000, 40000, 200, 20, 'Arung Jeram Serayu akan membawa anda menikmati sajian wisata adrenalin yang pastinya seru dan menyenangkan. Bagi kalian pecinta wahana permainan ekstrim, wajib banget mencoba wisata Arung Jeram Serayu ketika berlibur di Kota Wonosobo. ', 3, 'Dieng Candi Arjuna.jpg'),
(12, 'OB003', 'Jembatan Merah Putih Dieng', 5000, 2500, 100, 10, 'Nama Jembatan Merah Putih diberikan sesuai dengan warna bendera negara Indonesia sebagai simbol kekayaan alam Indonesia sehingga tumbuh rasa cinta terhadap tanah air Indonesia. Selain itu, alasan lain jembatan ini diberi nama Jembatan Merah Putih adalah sebagai apresiasi kepada Komunitas Panjat Tebing Tim Vertikal Rescue yang menyelenggarakan Sekolah Panjat Tebing Merah Putih serta menjadi penggagas pembuatan jembatan ini, Dengan panjang 26 meter.', 3, 'jembatan dieng.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
