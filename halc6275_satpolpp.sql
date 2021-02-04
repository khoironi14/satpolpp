-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2021 at 09:54 PM
-- Server version: 10.2.36-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halc6275_satpolpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `jenis_agenda` varchar(200) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `jenis_agenda`, `tgl_agenda`, `keterangan`) VALUES
(1, 'Rapat Terbatas', '2018-01-22', 'Rapat dilaksanakan jam 11 siang diruang R1009');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl_terbit` datetime NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `penulis` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tgl_terbit`, `id_kategori`, `penulis`, `view`, `foto`) VALUES
(9, 'Cantik, Rajin Salat, Mahasiswi, Satpol PP Luwu Ini Cari Tentara ', '<p>BELOPA - Setiap wanita mendambakan wajah cantik alami.</p>\r\n\r\n<p>Demikian pula keinginan Husnul Khatimah, anggota Satuan Polisi Pamong Praja (Satpol PP) Luwu&nbsp;yang setiap hari&nbsp;berjaga di&nbsp;rumah jabatan Bupati Luwu, di Bukit Limpujang, Kelurahan Senga, Kecamatan&nbsp;<a href=\"https://makassar.tribunnews.com/tag/belopa\" title=\"Belopa\">Belopa</a>, Luwu, Sulawesi Selatan.</p>\r\n\r\n<p>Dia telah mengabdikan dirinya sebagai penegak perda sejak Oktober 2016 silam.</p>\r\n\r\n<p>Namun pekerjaan yang identik dengan laki-laki itu tak lantas membuatnnya&nbsp;lupa merawat diri agar tetap tampil cantik.</p>\r\n\r\n<p>Wanita kelahiran tahun 1999 ini mengandalkan air wudhu sebagai perawatan kecantikan.</p>\r\n\r\n<p>&quot;Air wudhu&#39;ji saya pakai kak. Honor sebagai tenaga honorer di Satpol PP mana bisa untuk membeli peralatan atau bahan kecantikan,&quot; ujarnya, tersenyum, Jumat (13/10/2017).</p>\r\n\r\n<p>Menurutnya,&nbsp;honor sebagai Satpol PP pun dia gunakan untuk biaya kuliah.</p>\r\n\r\n<p>&quot;Saya kuliah di STIEM Muhammadiyah Palopo, sekarang sudah semester tiga dan ambil kelas khusus hari Sabtu-Minggu,&quot; tutur gadis yang berdomisili di Kelurahan Tampumia Radda, Kecamatan&nbsp;<a href=\"https://makassar.tribunnews.com/tag/belopa\" title=\"Belopa\">Belopa</a>, Luwu.</p>\r\n\r\n<p>Ditanya soal pacar, Husnul mengatakan masih&nbsp;jomblo karena memang belum mau pacaran.</p>\r\n\r\n<p>&quot;Saat ini saya&nbsp;fokus untuk kerja dan pendidikan,&quot; katanya.</p>\r\n\r\n<p>Namun ia memiliki kriteria pria idaman.&nbsp;Tidak merokok, tinggi, kulit putih, dan berprofesi sebagai Tentara Nasional Indonesia.</p>\r\n\r\n<p>&quot;Saya paling suka sama tentara kak. Belum ada pacar, mau fokus kerja sama kuliah dulu kak,&quot; ucapnya.</p>\r\n\r\n<p>Ingin melihat seperti apa aktivitas keseharian Husnul, cek akun Instagramnya @khusnullkhatimah30.</p>\r\n', '2020-03-15 00:00:00', 4, 0, 0, 'file_1584256473.jpg'),
(10, 'Berkeliaran saat Jam Sekolah, Enam Pelajar di Luwu Terjaring Razia Satpol PP  ', '<p>Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Luwu kembali mengamankan enam siswa SMA dan seorang pelajar SMP saat operasi&nbsp;<a href=\"https://makassar.tribunnews.com/tag/razia\" title=\"razia\">razia</a>&nbsp;penertiban anak sekolah yang berkeliaran pada jam belajar.</p>\r\n\r\n<p>Yakni di depan SMP 1 Belopa, Jl Sungai Paremang, Kecamatan Belopa Utara, dan di Gedung Simpurusiang serta di Taman Andi Benni, Kecamatan Belopa.</p>\r\n\r\n<p>&quot;Mereka ini kami amankan karena berkeliaran pada saat jam belajar dan kami bawa ke kantor Satpol PP untuk didata kemudian kami beri pembinaan,&quot; ujarnya, Senin (8/10/2018).</p>\r\n\r\n<p>Hal tersebut dilakukan&nbsp;<a href=\"https://makassar.tribunnews.com/tag/satpol-pp-luwu\" title=\"Satpol PP Luwu\">Satpol&nbsp;PP&nbsp;Luwu</a>&nbsp;untuk membina generasi muda dan menghindarkan dari indikasi tawuran antar pelajar.</p>\r\n\r\n<p>Adapun asal sekolah siswa yang terjaring&nbsp;<a href=\"https://makassar.tribunnews.com/tag/razia\" title=\"razia\">razia</a>&nbsp;Satpol PP yakni, tiga orang siswa SMAN 1 Luwu, satu orang SMAN 7 Luwu, satu orang SMA YPN Noling dan satu orang pelajar SMPN 1 Suli.</p>\r\n\r\n<p>Sumber:https://makassar.tribunnews.com/2017/10/13/cantik-rajin-salat-mahasiswi-satpol-pp-luwu-ini-cari-tentara</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-03-15 08:33:49', 4, 0, 0, 'file_1584257749.jpg'),
(11, 'Satpol-PP Luwu Tampil Memukau', '<p>Gubernur Sulawesi Selatan, Nurdin Abdullah memberikan apresiasi mendalam atas kinerja Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Luwu. Apresiasi disampaikan Nurdin saat peringatan Hari Ulang Tahun (HUT) Satpol PP ke 69 yang diperingati di halaman Rumah Jabatan Gubernur, Selasa 19 Maret 2019.</p>\r\n\r\n<p>Nurdin Abdullah menegaskan, Satpol-PP Luwu tidak mendapatkan juara saat defile namun kekompakan Satpol PP Luwu sangat luar biasa. &ldquo;Saya lihat Satpol PP Luwu sebenarnya sangat bagus saya juga tidak tahu kok tidak juara ya. Tapi ya kita tidak bisa ganggu gugat keputusan juri,&ldquo; ungkapnya.</p>\r\n\r\n<p>NA menilai Satpol PP Luwu dibawa kepemimpinan Andi Iskandar mengalami beberapa kemajuan, mulai dari memiliki kantor baru serta kinerja yang semakin baik.</p>\r\n\r\n<p>&ldquo;Saya apresiasi kinerja Satpol PP Luwu yang makin baik dan terus mengawal dan mengamankan perda,&rdquo; kata Nurdin Abdullah.<br />\r\nKasatpol PP Luwu Andi Iskandar hadir di panggung kehormatan bersama dengan Wakil Bupati Luwu Syukur Bijak.</p>\r\n\r\n<p>&ldquo;Alhamulillah personil Satpol PP Luwu tampil maksimal walaupun belum sempat meraih juara saat lomba defile pasukan Sat Pol PP dari 24 kabupaten dan kota,&ldquo; kata Andi Iskandar.&nbsp;</p>\r\n\r\n<p><strong>Sumber:https://palopopos.fajar.co.id/2019/03/20/satpol-pp-luwu-tampil-memukau/</strong></p>\r\n', '2020-03-15 08:36:38', 4, 0, 0, 'file_1584257870.jpg'),
(12, 'Satuan Satpol PP Kabupaten Luwu Laksanakan Razia Malam di Sejumlah Penginapan', '<p>Pemerintah Daerah Kabupaten Luwu gerah terkait adanya sejumlah penginapan di ibukota kabupaten Luwu, Belopa, diduga jadi tempat berbuat maksiat dan peredaran Narkoba.</p>\r\n\r\n<p>Untuk itu, lewat Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Luwu dilakukan razia pada sejumlah penginapan, Sabtu malam (7/12/2019)</p>\r\n\r\n<p>Empat pasangan bukan suami istri diamankan Satpol PP, sementara itu Empat pasangan tersebut&nbsp; terpaksa digelandang ke Kantor Satpol PP untuk diberikan wejangan, dan wajib membuat surat pernyataan di depan petugas.</p>\r\n\r\n<p>KASATPOL PP Kabupaten Luwu, Andi Iskandar saat dikonfirmasi membenarkan peristiwa ini. Menurutnya, Razia dilakukan pihak Satpol PP atas aduan masyarakat dan pantauan anggotanya di lapangan.</p>\r\n\r\n<p>&ldquo;Razia dan penertiban ini rutin kami lakukan supaya masyarakat sadar hukum, dan tidak berbuat maksiat dan kejahatan dalam kamar penginapan, ini juga aduan masyarakat,&rdquo; ucap Kasatpol PP Luwu.</p>\r\n\r\n<p>Olehnya itu Kabag Humas Kab. Luwu, &nbsp;Ansir Ismu melansir pernyataan Bupati Luwu H. Basmin Mattayang yang tak pernah berhenti memberi himbauan agar masyarakat patuh dan tertib terhadap aturan, ini juga guna memberikan rasa aman dan nyaman kepada masyarakat.</p>\r\n\r\n<p>Selanjutnya Mantan Kadis Pariwisata Kota Palopo ini juga berterimah kasih kepada pengelolah penginapan baik hotel maupun wisma yang ada di Kabupaten Luwu, yang selalu memperingatkan pengunjungnya untuk tidak membawa senjata tajam (Sajam), narkotika dan obat-obat terlarang, apalagi berbuat mesum.Sumber:</p>\r\n', '2020-03-15 08:38:41', 4, 0, 0, 'file_1584258037.jpg'),
(13, 'Malam ini Satpol PP Luwu Melakukan Penutupan Sementara Tempat\"Nongkrong\"', '<p>Malam ini akan dilakukan penutupan pada beberapa tempat kumpul-kumpul &nbsp;oleh satuan Polisi Pamong Praja (Satpol PP) Kabupaten Luwu&nbsp;</p>\r\n\r\n<p>Kepala Sapol PP Kabupaten Luwu, Andi Iskandar mengatakan akan melakukan imbauan kepada masyarakat sekaligus menutup untuk sementara &quot; kami akan melakukan penutupan sementara ini demi kebaikan bersama dan juga untuk melaksanakan imbauan pak bupati&quot;ungkap pria yang biasa disapa Opu Erang Ini</p>\r\n\r\n<p>Rencananya penutupan akan dipimpin langsung oleh Kasatpol PP Luwu, dibeberapa titik seperti pelataran Simpurusian, taman selalu bersama dan cafe serta rumah bernyanyi.&nbsp;</p>\r\n\r\n<p>Sebelumnya Satpol PP Luwu juga telah berpatroli menggunakan fatwal dan micropon memberikan imbauan kepada masyarakat agar tidak berkunjung ke tempat umum jika tidak ada keperluan yang mendesak. &quot;Tetap di dalam rumah jika tidak ada keperluan mendesak agar kita semua menghindari penyebaran virus corona&quot;</p>\r\n', '2020-03-21 17:03:19', 4, 0, 0, 'file_1584785077.jpeg'),
(14, 'Perayaan Ultah Satpol PP di Torut Diundur, Personil di Luwu Tunda Berangkat', '<p>Satuan polisi Pamong Praja Kabupaten Luwu menunda keberangkatan ke Toraja Utara. Karena acara perayaan ulang tahun Satpol itu diundur dalam waktu yang belum diketahui.</p>\r\n\r\n<p>Kepala Satpol PP Luwu Andi Iskandar menyampaikan, penundaan perayaan ulang tahun Satpol yang ke 70 ini rencananya dipusatkan di Toraja Utara pada tanggal 31 Maret mendatang, demi mencegah penyebaran Covid-19 yang lagi menghantui masyarakat dunia termasuk Indonesia maka pelaksanaannya ditunda.</p>\r\n\r\n<p>&ldquo;Sebenarnya persiapan untuk berangkat sudah matang karena sebelumnya rencana personil yang mau berangkat ke Torut tanggal 28 Maret karena banyak rangkaian kegiatan yang harus diikuti tapi situasi begini mau bagaimana lagi,&rdquo; ungkapnya.</p>\r\n\r\n<p>Meskipun keberangkatan ditunda namun personil Satpol PP Luwu tetap melakukan latihan serta berbagai persiapan agar bisa tampil maksimal pada acara sekali setahun itu. Latihan yang dilakukan seperti latihan baris berbaris, dan marching band.</p>\r\n\r\n<p>Kasatpol PP Luwu yang biasa disapa Opu Erang ini berharap perayaan ultah Satpol PP ini dapat meningkatkan persatuan dan kesatuan personil di Luwu, menjunjung tinggi ideologi Pancasila, menjadi sarana pemersatu bangsa, mengutamakan kepentingan bangsa dan negara serta mengutamakan kepentingan masyarakat di atas kepentingan pribadi dan golongan dalam upaya mewujudkan ketenteraman dan ketertiban umum serta perlindungan masyarakat Luwu.(*)</p>\r\n', '2020-03-22 08:12:30', 9, 0, 0, 'file_1584839683.jpeg'),
(15, 'Himbauan Untuk tetep dirumah', '<p>Demi mencegah Penyebaran virus corona(Covid-19). Maka Masyarakat Kabupaten Luwu dihimbau untuk tetap berada dirumah.</p>\r\n', '2020-03-28 12:04:25', 4, 0, 0, 'file_1585371981.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `judul_document` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `judul_document`, `keterangan`, `file`) VALUES
(1, 'Inventaris Barang Dinas Ketenagakerjaan Kabupaten Cilacap Tahun 2017', '', 'file_1517584828.pdf'),
(2, 'Document Pelaksanaan Anggaran Satuan Kerja Perangkat Daerah', 'Tahun anggaran 2017', 'file_1517587530.pdf'),
(3, 'Standar Pelayanan Penerbitan Kartu tanda Pencari Kerja', 'Standar Pelayanan Penerbitan Kartu tanda Pencari Kerja (AK/I)', 'file_1517588352.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` int(11) NOT NULL,
  `kategori` varchar(80) NOT NULL,
  `id_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `kategori`, `id_parent`) VALUES
(4, 'Berita', 0),
(5, 'POLITIK', 0),
(6, 'PEMERINTAHAN', 0),
(7, 'INFO DAERAH', 0),
(8, 'HUKUM KRIMINAL', 0),
(9, 'SATPOL NEWS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `foto`, `link`) VALUES
(1, 'file_1517202189.jpg', 'http://wajiblapor.kemnaker.go.'),
(2, 'file_1517203090.jpg', 'http://wajiblapor.kemnaker.go.');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `keterangan`, `foto`) VALUES
(7, 'Kepala Satuan Polisi Pamong Praja Luwu', '-', 'file_1584388524.jpg'),
(8, 'Kepala Satuan Polisi Pamong Praja Luwu', '-', 'file_1584388549.jpg'),
(9, 'SATPOL LUWU', 'Basmin Mattayang Bersama Andi Iskandar', 'file_1585122209.jpg'),
(10, 'Patroli Malam', '-', 'file_1584516334.jpg'),
(11, 'Patroli Malam', '-', 'file_1584516381.jpg'),
(12, 'Satuan Polisi Pamong Praja Kabupaten Luwu', '-', 'file_1584516437.jpg'),
(17, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)', 'Dokumentasi Satpol PP', 'file_1586428265.jpeg'),
(18, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)', 'Dokumentasi Satpol PP', 'file_1586428327.jpeg'),
(19, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)', 'Dokumentasi Satpol PP', 'file_1586428399.jpeg'),
(20, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)', 'Dokumentasi Satpol PP', 'file_1586428430.jpeg'),
(21, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)', 'Dokumentasi Satpol PP', 'file_1586428448.jpeg'),
(22, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)', 'Dokumentasi Satpol PP', 'file_1586428464.jpeg'),
(23, 'Patroli Malam', 'Dokumentasi Satpol PP', 'file_1586428478.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar_struktur`
--

CREATE TABLE `tb_gambar_struktur` (
  `id_gambar` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`) VALUES
(1, 'Patroli Malam'),
(2, 'SATPOL LUWU'),
(4, 'Penertiban Pedagang di Pasar Lama Belopa (2/4/20)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak_kami`
--

CREATE TABLE `tb_kontak_kami` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak_kami`
--

INSERT INTO `tb_kontak_kami` (`id_kontak`, `nama`, `email`, `alamat`, `judul`, `pesan`) VALUES
(1, 'JerryEndok', 'no-replySace@gmail.com', 'https://www.no-site.com', '', 'Hi!  hallopolpp-luwu.com \r\n \r\nDid y?u kn?w th?t it is p?ssibl? t? s?nd busin?ss pr?p?s?l t?t?lly l?wfully? \r\nW? pr?s?nt?ti?n ? n?w uniqu? w?y ?f s?nding busin?ss pr?p?s?l thr?ugh f??db??k f?rms. Su?h '),
(2, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hello, my name’s Eric and I just ran across your website at hallopolpp-luwu.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing t'),
(3, 'Raymond  Brown', 'info@thecctvhub.com', 'http://www.thecctvhub.com/', '', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply medical products: \r\n \r\nMedical masks \r\n3M 1860, 9502, 9501, 3ply, KN95, KN99, N95 masks \r\nProtective masks \r\nEye mask \r\nProtective cap \r\nDisinfectant \r\nH'),
(4, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hi, my name is Eric and I’m betting you’d like your website hallopolpp-luwu.com to generate more leads.\r\n\r\nHere’s how:\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to c'),
(5, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hey, this is Eric and I ran across hallopolpp-luwu.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bounc'),
(6, 'James Giovanni', 'jgiovanni90@comcast.net', 'https://www.no-site.com', '', 'Good day, \r\n \r\n* Do you have a viable project that requires funding ? \r\n \r\n* Long term loan with reasonable interest rate ? \r\n \r\n* B.G/S.B.L.C \r\n \r\nRegards, \r\n \r\nJames Giovanni \r\nFinancial Broker \r\nTe'),
(7, 'Nigel Petchy', 'petchy.nigel@gmail.com', '', '', 'PLEASE FORWARD THIS EMAIL TO SOMEONE IN YOUR COMPANY WHO IS ALLOWED TO MAKE IMPORTANT DECISIONS!\r\n\r\nWe have hacked your website http://www.hallopolpp-luwu.com and extracted your databases.\r\n\r\nHow did '),
(8, 'Yozawa Ken', 'sandidelagarzaag@rediffmail.com', 'http://1-0x.com/2020tokyo/', '', 'We offer services that can be sold to over 10 million businesses in 45 countries. \r\nInstead of advertising by email, SMS, SNS, we will send a message that directly reaches the business owner \r\nPlease '),
(9, 'Mikehob', 'no-reply@hilkom-digital.de', 'https://www.hilkom-digital.de/cheap-seo-packages/', '', 'hi there \r\nI have just checked hallopolpp-luwu.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, us'),
(10, 'Jonathan Roseland', 'noreply@asset.fin', 'https://no-site.com', '', 'Hello Partners, \r\n \r\nThe International Investment arm of our company is seeking interested partners in need of alternative funding for long term capital projects or for business development. Our manag'),
(11, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'My name’s Eric and I just found your site hallopolpp-luwu.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkw'),
(12, 'Prince Taylor', 'prance.gold.arbitrage@gmail.com', 'https://portal.prancegoldholdings.com/signup?ref=p', '', 'Hi! \r\nI\'m Prince Taylor. \r\n \r\nI contacted you with an invitation for investment program witch you will definitely win. \r\n \r\nThe winning project I\'m here to invite you is called \"Prance Gold Arbitrage '),
(13, 'JosephCound', 'atrixxtrix@gmail.com', 'http://www.thecctvhub.com/', '', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply medical products: \r\n \r\nMedical masks \r\nDrager, makrite, honeywell N95 \r\n3M N95 1860, 9502, 9501, 8210 \r\n3ply medical, KN95, FFP2, FFP3, N95 masks \r\nFace '),
(14, 'Mike Jones', 'no-reply@hilkom-digital.de', 'https://www.hilkom-digital.de/cheap-seo-packages/', '', 'Hi There \r\nI have just checked hallopolpp-luwu.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, us'),
(15, 'KomalCrica', 'no-replytrobe@gmail.com', 'https://google.com', '', 'Greetings, I was just visiting your site and wondering about \r\nthe payment method currently offered by you to your customers? \r\n \r\n \r\nI work for Amald.Com and we can serve your business by offering cr'),
(16, 'Mike Jones', 'no-reply@monkeydigital.co', 'https://www.google.com', '', 'hi there \r\n \r\nAfter checking your hallopolpp-luwu.com, I`ve noticed that the SEO trend has dropped in the past several weeks \r\n \r\nIn order to fix this trend, just follow these simple steps: \r\n \r\n1. Di'),
(17, 'Fabien C', 'pa.pabe.s.tho.stin.g+perturbare@gmail.com', '', '', 'Hi,\r\n\r\nAre you unhappy with your current hosting company? Slow speeds? Downtimes? Incompetent and/or unreactive support? Excessive pricing? Or perhaps do you actually want to look into other solutions'),
(18, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'My name’s Eric and I just came across your website - hallopolpp-luwu.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r'),
(19, 'Heatherfut', 'atrixxtrix@gmail.com', 'http://google.com', '', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply medical products: \r\n \r\nMedical masks \r\nDrager, makrite, honeywell N95 \r\n3M N95 1860, 9502, 9501, 8210 \r\n3ply medical, KN95, FFP2, FFP3, N95 masks \r\nFace '),
(20, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - hallopolpp-luwu.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re '),
(21, 'Joshuasiz', 'no-replySace@gmail.com', 'https://www.no-site.com', '', 'H?ll?!  hallopolpp-luwu.com \r\n \r\nDid y?u kn?w th?t it is p?ssibl? t? s?nd ??mm?r?i?l ?ff?r fully l?git? \r\nW? sugg?st ? n?w w?y ?f s?nding pr?p?s?l thr?ugh ??nt??t f?rms. Su?h f?rms ?r? l???t?d ?n m?ny'),
(22, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'My name’s Eric and I just found your site hallopolpp-luwu.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkw'),
(23, 'Hal Brumbaugh', 'brumbaugh.hal77@gmail.com', '', '', 'Hi,\r\n\r\nDo you have a Website? Of course you do because I am looking at your website hallopolpp-luwu.com now.\r\n\r\nAre you struggling for Leads and Sales?\r\n\r\nYou’re not the only one.\r\n\r\nSo many Website o'),
(24, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(25, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hi, Eric here with a quick thought about your website hallopolpp-luwu.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\n'),
(26, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(27, 'Mike ', 'no-replyDok@google.com', 'https://www.google.com', '', 'G??d d?y! \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n'),
(28, 'Michel Gaston', 'frankegaston02@gmail.com', 'http://google.com', '', 'Greetings! \r\n \r\nHow are you today? Hope fine? \r\n \r\nI genuinely solicit for the assistance of a reliable and honest foreign partner that will work closely with me in a joint venture partnership. I can '),
(29, 'D', '911@feedwire.com', '', '', 'I was wondering if you have a need for IT Services? \r\n\r\nWe are offering free IT conultation for the first 45 minutes of support. \r\n\r\nWe offer remote support and would love to fix any issue you may hav'),
(30, 'CALLnDATA', 'callndata.com@rediffmail.com', 'https://no-site.com', '', 'We have experience team which has delivered a wide range of versatile projects for Mobile App, software, website development and other device. If you looking for experience team who can understand you'),
(31, 'AnthonyBam', 'no-replySace@gmail.com', 'https://www.no-site.com', '', 'Good day, Belarus is currently experiencing brutal detentions and beatings of civilians. If you want to help them, we have announced a collection of aid for victims of repression in Belarus \r\nhttps://'),
(32, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - hallopolpp-luwu.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re '),
(33, 'RobertChona', 'atrixxtrix@gmail.com', 'https://www.no-site.com', '', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply Professional surveillance & medical products: \r\n \r\nMoldex, makrite and 3M N95 1860, 9502, 9501, 8210 \r\n3ply medical, KN95, FFP2, FFP3, PPDS masks \r\nFace '),
(34, 'Jimmy Scowley', 'jimmyscowley@gmail.com', 'https://www.no-site.com', '', 'Dear Sir/mdm, \r\n \r\nOur company Resinscales is looking for distributors and resellers for its unique product: ready-made tank models from the popular massively multiplayer online game - World of Tanks.'),
(35, 'Lena Fielding', 'fielding.lena@gmail.com', '', '', 'Hello, I have been informed to contact you. The CIA has been doing intensive research for the past fifty years researching on what we call so called life. That information has been collected and prese'),
(36, 'Sandra Amparo', 'worldwideclaimsagenti@gmail.com', 'http://www.google.com', '', 'WORLD HEALTH ORGANIZATION / MICRO SOFT CORPORATION / EURO MILLION LOTTERIA \r\nGrand Royale  Park Spain. \r\nDear Beneficiary. \r\nWe are pleased to announce you as one of the 10 lucky winners in the Euro M'),
(37, 'Mike Derrick\r\n', 'no-replyDok@google.com', 'https://www.google.com', '', 'G??d d?y! \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n'),
(38, 'Virgie Lock', 'expiry@hallopolpp-luwu.com', '', '', 'ATTN: hallopolpp-luwu.com /  INTERNET SITE SERVICES\r\nThis notification RUNS OUT ON: Sep 10, 2020\r\n\r\nWe have actually not obtained a settlement from you.\r\nWe\'ve attempted to contact you but were unable'),
(39, 'D', 'mail@signsonlineusa.com', '', '', 'I was wondering if you have a need for FREE SIGNS.\r\n\r\nWe are offering free SIGNS TO ANYONE IN USA. \r\n\r\nCheck us out at www.Signsonlineusa.com or call 507-339-1499\r\n\r\nEmail us at mail@signsonlineusa.co'),
(40, 'James Watson\r\n', 'no-reply@hilkom-digital.de', 'https://www.no-site.com', '', 'H?ll?! \r\nI have just checked hallopolpp-luwu.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, usin'),
(41, 'James Winter\r\n', 'no-reply@hilkom-digital.de', 'https://www.no-site.com', '', 'H?ll?! \r\nI have just checked hallopolpp-luwu.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, usin'),
(42, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - hallopolpp-luwu.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re '),
(43, 'James Lambert', 'lambertj283@gmail.com', 'https://www.no-site.com', '', 'Good day \r\n \r\nI`m seeking for a reputable company/individual to partner with in a manner it would benefit both parties. The project is worth $24 Million so if interested, kindly contact me through thi'),
(44, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hi, Eric here with a quick thought about your website hallopolpp-luwu.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\n'),
(45, 'Alison Coburn', 'information@hallopolpp-luwu.com', '', '', 'ATT: hallopolpp-luwu.com /  WEBSITE SOLUTIONS\r\nThis notice ENDS ON: Oct 15, 2020\r\n\r\n\r\nWe have actually not gotten a settlement from you.\r\nWe  have actually tried to call you however were unable to con'),
(46, 'Hugo', 'info@hallopolpp-luwu.com', 'Guarulhos', '', 'Hey \r\n \r\nBuy all styles of Oakley Sunglasses only 19.99 dollars.  If interested, please visit our site: sunglassoutlets.online\r\n \r\n \r\nSincerely, \r\n \r\nwebsite'),
(47, 'Lawrence', 'info@hallopolpp-luwu.com', 'Seltisberg', '', 'Good Morning\r\n\r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nFREE Worldwide Shipping!\r\n\r\nClick here: caredogbest.online\r\n\r\n'),
(48, 'Mike Chandter\r\n', 'no-replyDok@google.com', 'https://www.google.com', '', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. '),
(49, 'Eric Jones', 'eric@talkwithwebvisitor.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(50, 'Cheri', 'info@hallopolpp-luwu.com', 'Norbury', '', 'Hello \r\n \r\nBuy all styles of Ray-Ban Sunglasses only 19.99 dollars.  If interested, please visit our site: framesoutlet.online\r\n \r\n \r\nRegards, \r\n \r\nwebsite'),
(51, 'Dr Indraduth Chunnoo', 'vfuga213@execs.com', 'https://www.no-site.com', '', 'I am Dr.Indraduth Chunnoo, an oil veteran looking for new opportunities to invest in Big, small and medium businesses to assist others grow. Found your website on some websites where small businesses '),
(52, 'James Roberts\r\n', 'no-reply@google.com', 'https://google.com', '', 'G??d d?y! \r\nI have just checked hallopolpp-luwu.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, u'),
(53, 'Shelton', 'admin@hallopolpp-luwu.com', 'Halfway House', '', 'Good Morning \r\n \r\nFull Body Resistance Band Kit - The best and cheapest athletic gear available on the market today. \r\nDo a full body workout from the comfort of your home. You don\'t even need a gym a'),
(54, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - hallopolpp-luwu.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re '),
(55, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hey, this is Eric and I ran across hallopolpp-luwu.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bounc'),
(56, 'Leonard Tate', 'hallopolpp-luwu.com@hallopolpp-luwu.com', '', '', 'Your domain name: hallopolpp-luwu.com\r\n\r\n\r\n\r\nThis announcement  ENDS ON: Nov 19, 2020.\r\n\r\n\r\nWe have not received a settlement from you.\r\nWe  have actually tried to contact you however were unable to r'),
(57, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(58, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hello, my name’s Eric and I just ran across your website at hallopolpp-luwu.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing t'),
(59, 'Savannah', 'info@hallopolpp-luwu.com', 'Wroot', '', 'Hello \r\n \r\nBuy all styles of Oakley Sunglasses only 19.99 dollars.  If interested, please visit our site: designeroutlets.online\r\n \r\n \r\nBest Wishes, \r\n \r\nwebsite'),
(60, 'Mike Oswald\r\n', 'no-replySace@gmail.com', 'https://www.no-site.com', '', 'H?ll?! \r\n \r\nDo you want a quick boost in ranks and sales for your %domain% website? \r\nHaving a high DA score, always helps \r\n \r\nGet your hallopolpp-luwu.com to have a 50+ points in Moz DA with us toda'),
(61, 'Morgan Morris', 'mmmorganmorris1@gmail.com', 'https://www.no-site.com', '', 'Dear  Sir/Madam, \r\n \r\nI am a broker/financier with sound financial management abilities to  manage a vast capital for an Arab investor with an embattled political  situation. \r\n \r\nThese funds can be i'),
(62, 'Beulah', 'info@hallopolpp-luwu.com', 'Einigen', '', 'Good Morning \r\n \r\nBody Revolution - Medico Postura™ Body Posture Corrector\r\nImprove Your Posture INSTANTLY!\r\n\r\nBlackFriday & CyberMonday - Deals Unlocked - 65% OFF!  FREE Worldwide Shipping!\r\n\r\nGet yo'),
(63, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - hallopolpp-luwu.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re '),
(64, 'Peter Gustman\r\n', 'no-replypef@gmail.com', 'https://www.no-site.com', '', 'Hi! \r\n \r\nDo you have issues ranking your website locally? \r\n \r\nWith our Google Maps citations strategy, we are able to rank you in top 5 in the Google Local Search for specific keywords. \r\nThe more Ci'),
(65, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(66, 'Haley', 'info@hallopolpp-luwu.com', 'Monteortore', '', 'Good Morning\r\n \r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\n\r\nOur clinical-grade TENS technology will ensure you have neck relief in as little as 20 min'),
(67, 'James Michaelson\r\n', 'no-reply@google.com', 'https://google.com', '', 'H?ll?! \r\nI have just checked hallopolpp-luwu.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, usin'),
(68, 'Myrtle', 'admin@hallopolpp-luwu.com', 'Warszawa', '', 'Good day\r\n\r\nDeliver the Highest-Quality disposable face mask from Certified Manufacturers Directly to You.  The price for N95 Face Mask is $1.99 each.  If interested, please check our site: pharmacyou'),
(69, 'Daniel Smallwood', 'smallwood.daniel@googlemail.com', '', '', 'Hello.\r\nAre you receiving spam emails? You should receive emails from clients only. We specialize in blocking spam and we\'re here to help. Here is our website:\r\nhttps://onlineuniversalwork.com/antispa'),
(70, 'James Lambert', 'jlam73000@gmail.com', 'https://www.no-site.com', '', 'Good day \r\n \r\nI`m seeking for a reputable company/individual to partner with in a manner it would benefit both parties. The project is worth $24 Million so if interested, kindly contact me through thi'),
(71, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(72, 'Mike Boolman\r\n', 'no-replySace@gmail.com', 'https://www.no-site.com', '', 'Greetings \r\n \r\nIf you want to get in front of  your competition then you must have a superior Domain Authority score for your website. Its just as simple as that. With our service your hallopolpp-luwu'),
(73, 'Celsa Mais', 'celsa.mais82@yahoo.com', '', '', 'Good Afternoon,\r\nI\'m ,\r\nHow are you doing regarding your Business Reviews?\r\nGoogle reviews expand your internet exposure and local SEO. Since successful marketing tactics drive google’s algorithm, bus'),
(74, 'Kimberley Banda', 'hallopolpp-luwu.com@hallopolpp-luwu.com', '', '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR hallopolpp-luwu.com\r\n\r\nDomain Notice Expiry ON: Dec 25, 2020\r\n\r\nWe have actually not gotten a settlement from you.\r\nWe have actually tried to contact you but were'),
(75, 'Magda', 'info@hallopolpp-luwu.com', 'Uggiate Trevano', '', 'Hi\r\n\r\nBuy face mask to protect your loved ones from the deadly CoronaVirus.  We supply N95 Mask, KN95 Mask, and Surgical Masks for both adult and kids.  The prices begin at $0.35 each.  If interested,'),
(76, 'Dante Hicks', 'hicks.dante@hotmail.com', '', '', 'Hello,\r\nHow much money does your business website brings to you monthly? Huh? Know this secret today, a business website with poor Alexa Rank could make customers doubt its reliability. An improved we'),
(77, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hi, my name is Eric and I’m betting you’d like your website hallopolpp-luwu.com to generate more leads.\r\n\r\nHere’s how:\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to c'),
(78, 'Peter Holiday\r\n', 'no-replypef@gmail.com', 'https://www.no-site.com', '', 'Hello \r\n \r\nDo your rivals not playing the game fair and square? \r\nNow you can fight back. \r\n \r\nNegative SEO, to make business collapse \r\nhttps://blackhat.to/ \r\n \r\nGet in touch with us for any queries:'),
(79, 'ContactHeash', 'no-replySace@gmail.com', 'https://www.no-site.com', '', 'H?ll?!  hallopolpp-luwu.com \r\n \r\nDid y?u kn?w th?t it is p?ssibl? t? s?nd r?qu?st ?bs?lut?ly l?wful? \r\nW? s?ll ? n?w m?th?d ?f s?nding busin?ss ?ff?r thr?ugh ??nt??t f?rms. Su?h f?rms ?r? l???t?d ?n m'),
(80, 'Winston', 'perryujgd57@thefirstpageplan.com', '', '', 'Happy New Year guys, I just wanted to see if you need anything in the way of site editing/code fixing/programming, unique blog post material, extra traffic by getting others to start sharing your site'),
(81, 'Dian Alberts', 'alberts.dian@gmail.com', '', '', 'Hi people at hallopolpp-luwu.com,\r\nHope you’re excellent. \r\nI\'m ,\r\nHope you’re well, and that customers are profitable. Please allow me to introduce to you this service.\r\nUse our Artificial Intelligen'),
(82, 'Andrew Neustadt', 'hallopolpp-luwu.com@hallopolpp-luwu.com', '', '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR hallopolpp-luwu.com\r\n\r\nDomain Notice Expiry ON: Jan 08, 2021\r\n\r\n\r\nWe have actually not obtained a payment from you.\r\nWe have actually tried to call you however we'),
(83, 'Mike Dickinson\r\n', 'no-reply@google.com', 'https://google.com', '', 'Good Day \r\n \r\nI have just checked  hallopolpp-luwu.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using o'),
(84, 'Richard Robert', 'tish@ttfn.com', 'https://www.no-site.com', '', 'GATEWAYS FINANCE \r\nIndustrie Str. 29, 42929 \r\nWermelskirchen \r\nGermany. \r\nTel/fax: +49-302406607 \r\nEmail: info@gatewaysfinance.com \r\nhttp://gatewaysfinance.com/ \r\n \r\nDear Sir/Madam \r\n \r\nPurchase Bank '),
(85, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(86, 'Helina Amira Khanum', 'amix77077@yandex.com', 'https://www.no-site.com', '', 'Dear Friend, \r\nI hope this message does not end up in spam. \r\nGood day to you and I hope you are keeping safe from COVID-19 Pandemic.   \r\nMy name is Helina Amira Khanum, daughter of H.E. (Sahib us-Sa\''),
(87, 'Augustina Mancini', 'mancini.augustina@hotmail.com', '', '', 'Good Afternoon \r\nHope you’re good, and that the company is good.\r\nThis is the software the competitors use and would like you to know:\r\nhttps://jtbtigers.com/backlinks173813\r\nRegards,\r\n'),
(88, 'Andrew Young', 'andrewyoung4545@outlook.com', 'https://www.no-site.com', '', 'My name is Andrew Young, I am a representative of a privately owned \r\nlocal Gold mining company . We are looking for an interested buyer or investor \r\nwilling to partner with us on along term basis fo'),
(89, 'Edmund Burkhart', 'burkhart.edmund@yahoo.com', '', '', 'Good evening \r\nHope you’re well, and that customers are profitable.\r\nSerious entrepreneurs need this software for their business to convert brings about clients from other site:\r\nhttp://divineurl.com/'),
(90, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hi, my name is Eric and I’m betting you’d like your website hallopolpp-luwu.com to generate more leads.\r\n\r\nHere’s how:\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to c'),
(91, 'Krystle Farrow', 'hallopolpp-luwu.com@hallopolpp-luwu.com', '', '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR hallopolpp-luwu.com\r\n\r\nDomain Notice Expiry ON: Jan 17, 2021\r\n\r\n\r\nWe have not gotten a payment from you.\r\nWe\'ve attempted to contact you yet were unable to contac'),
(92, 'Krystle Klug', 'krystle@stardatagroup.com', '', '', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\nIt has been a tough year all round and we decided to go out with a bang!\r\n\r\nAny group of databases listed below is $49 or $149 '),
(93, 'Mike Adamson\r\n', 'see-email-in-message@monkeydigital.co', 'https://www.monkeydigital.co/product-category/spec', '', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your hallopolpp-luwu.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your hallopolpp-luwu.com to have a 50+ points in Moz DA'),
(94, 'Claribel Taubman', 'taubman.claribel@gmail.com', '', '', 'Good morning \r\nHope you’re good, and that clients are good.\r\nWith our service your company will grow:\r\nhttps://your-pc-specialist.com/backlinks-generator\r\nSincerely,\r\n\r\n'),
(95, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found hallopolpp-luwu.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for '),
(96, 'Tiffiny Gaylord', 'tiffiny.gaylord0@outlook.com', '', '', 'Hi|Hey|Good evening|Good morning|Good Afternoon} people at hallopolpp-luwu.com,\r\nHope you’re great. \r\nI\'m , I hope that business is profitable and you’ve been succeeding through the current situation.'),
(97, 'Mike Morrison\r\n', 'no-replypef@gmail.com', 'https://no-site.com', '', 'Hi \r\n \r\nI have just checked  hallopolpp-luwu.com for the Local ranking keywords and seen that your website could use an upgrade. \r\n \r\nWe will enhance your Local Ranks organically and safely, using onl'),
(98, 'Lois Goninan', 'goninan.lois97@gmail.com', '', '', 'Hey people at hallopolpp-luwu.com,\r\nHope you’re good. \r\nI\'m , I hope that customers are good and you’ve been succeeding during the entire current situation.\r\nIt looks like your site is not blocking un'),
(99, 'Lucienne', 'info@hallopolpp-luwu.com', 'Montemagno Di Quarrata', '', 'You Won\'t Want To Miss This!  50 pcs medical surgical masks only $1.99 and N95 Mask $1.79 each.  \r\n\r\nSpecial Offer for the next 48 Hours ONLY!  Get yours here: pharmacyusa.online\r\n\r\nSincerely,\r\n\r\nwebs'),
(100, 'Eric Jones', 'ericjonesonline@outlook.com', '', '', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - hallopolpp-luwu.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re '),
(101, 'Thanh Gower', 'thanh@sendbulkmails.com', '', '', 'Use SendBulkMails.com to run email campaigns from your own private dashboard.\r\n\r\nCold emails are allowed and won\'t get you blocked :)\r\n\r\nStarter Package 50% off sale\r\n- 1Mil emails / mo @ $99 USD\r\n- D'),
(102, 'Ronda Beck', 'ronda@stardatagroup.com', '', '', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\n\r\nFire sale till the 7th of Feb.\r\n\r\nAny group of databases listed below is $49 or $149 for all 16 databases in this one time of'),
(103, 'Mike Alsopp\r\n', 'no-reply@google.com', 'https://google.com', '', 'Howdy \r\n \r\nI have just verified your SEO on  hallopolpp-luwu.com for its SEO Trend and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, '),
(104, 'Cristina Gerow', 'cristina.gerow@hotmail.com', '', '', 'Hello,\r\n\r\nAre you presently operating Wordpress/Woocommerce or maybe will you intend to make use of it sooner or later ? We currently provide around 5000 premium plugins and additionally themes to dow');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `hak_akses` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'soft', '0ada1d7b1cbf9f33c00599d8362cc8e7', '1'),
(2, 'roni', '0ada1d7b1cbf9f33c00599d8362cc8e7', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `sejarah`) VALUES
(1, '<p>Sejarah Satpol PP Keberadaan Polisi Pamong Praja dimulai pada era Kolonial sejak VOC menduduki Batavia di bawah pimpinan Gubernur Jenderal PIETER BOTH, bahwa kebutuhan memelihara Ketentraman dan Ketertiban penduduk sangat diperlukan karena pada waktu itu Kota Batavia sedang mendapat serangan secara sporadis baik dari pendduduk lokal maupun tentara Inggris sehingga terjadi peningkatan terhadap gangguan Ketenteraman dan Keamanan.</p>\r\n\r\n<p>Untuk menyikapi hal tersebut maka dibentuklah BAILLUW, semacam Polisi yang merangkap Jaksa dan Hakim yang bertugas menangani perselisihan hukum yang terjadi antara VOC dengan warga serta menjaga Ketertiban dan Ketenteraman warga.</p>\r\n\r\n<p>Kemudian pada masa kepemimpinan RAAFFLES, dikembangkanlah BAILLUW dengan dibentuk Satuan lainnya yang disebut BESTURRS POLITIE atau Polisi Pamong Praja yang bertugas membantu Pemerintah di Tingkat Kawedanan yang bertugas menjaga Ketertiban dan Ketenteraman serta Keamanan warga.</p>\r\n\r\n<p>Menjelang akhir era Kolonial khususnya pada masa pendudukan Jepang Organisasi polisi Pamong Praja mengalami perubahan besar dan dalam prakteknya menjadi tidak jelas, dimana secara struktural Satuan Kepolisian dan peran dan fungsinya bercampur baur dengan Kemiliteran.</p>\r\n\r\n<p>Pada masa Kemerdekaan tepatnya sesudah Proklamasi Kemerdekaan Republik Indonesia Polisi Pamong Praja tetap menjadi bagian Organisasi dari Kepolisian karena belum ada Dasar Hukum yang mendukung Keberadaan Polisi Pamong Praja sampai dengan diterbitkannya Peraturan Pemerintah Nomor 1 Tahun 1948. Secara definitif Polisi Pamong Praja mengalami beberapa kali pergantian nama namun tugas dan fungsinya sama, adapun secara rinci perubahan nama dari Polisi Pamong Praja dapt dikemukakan sebagai berikut :</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stastik_pengunjung`
--

CREATE TABLE `tb_stastik_pengunjung` (
  `id` int(11) NOT NULL,
  `ip_pengunjung` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stastik_pengunjung`
--

INSERT INTO `tb_stastik_pengunjung` (`id`, `ip_pengunjung`, `tgl`, `pengunjung`) VALUES
(3, '::1', '2018-04-30', 1),
(4, '::1', '2018-04-30', 1),
(5, '::1', '2018-04-30', 1),
(6, '::1', '2018-04-30', 1),
(7, '::1', '2018-04-30', 1),
(8, '::1', '2018-04-30', 1),
(9, '::1', '2018-04-30', 1),
(10, '::1', '2018-04-30', 1),
(11, '::1', '2018-05-09', 1),
(12, '::1', '2018-06-15', 1),
(13, '::1', '2018-06-15', 1),
(14, '::1', '2018-06-30', 1),
(15, '::1', '2018-06-30', 1),
(16, '::1', '2018-06-30', 1),
(17, '::1', '2018-07-13', 1),
(18, '::1', '2018-08-13', 1),
(19, '::1', '2019-11-17', 1),
(20, '::1', '2019-11-17', 1),
(21, '::1', '2019-11-17', 1),
(22, '::1', '2019-11-17', 1),
(23, '::1', '2019-11-17', 1),
(24, '::1', '2019-11-17', 1),
(25, '::1', '2019-11-17', 1),
(26, '::1', '2019-11-17', 1),
(27, '::1', '2019-11-17', 1),
(28, '::1', '2019-11-17', 1),
(29, '::1', '2019-11-17', 1),
(30, '::1', '2019-11-17', 1),
(31, '::1', '2019-11-17', 1),
(32, '::1', '2019-11-17', 1),
(33, '::1', '2019-11-17', 1),
(34, '::1', '2019-11-17', 1),
(35, '::1', '2019-11-17', 1),
(36, '::1', '2019-11-17', 1),
(37, '::1', '2019-11-17', 1),
(38, '::1', '2019-11-17', 1),
(39, '::1', '2019-11-17', 1),
(40, '::1', '2019-11-17', 1),
(41, '::1', '2019-11-17', 1),
(42, '::1', '2019-11-17', 1),
(43, '::1', '2019-11-17', 1),
(44, '::1', '2019-11-17', 1),
(45, '::1', '2019-11-17', 1),
(46, '::1', '2019-11-17', 1),
(47, '::1', '2019-11-17', 1),
(48, '::1', '2019-11-17', 1),
(49, '::1', '2019-11-17', 1),
(50, '::1', '2019-11-17', 1),
(51, '::1', '2019-11-17', 1),
(52, '::1', '2019-11-17', 1),
(53, '::1', '2019-11-17', 1),
(54, '::1', '2019-11-17', 1),
(55, '::1', '2019-11-17', 1),
(56, '::1', '2019-11-17', 1),
(57, '::1', '2019-11-17', 1),
(58, '::1', '2019-11-17', 1),
(59, '::1', '2019-11-17', 1),
(60, '::1', '2020-03-13', 1),
(61, '::1', '2020-03-13', 1),
(62, '::1', '2020-03-13', 1),
(63, '::1', '2020-03-13', 1),
(64, '::1', '2020-03-13', 1),
(65, '::1', '2020-03-13', 1),
(66, '::1', '2020-03-13', 1),
(67, '::1', '2020-03-13', 1),
(68, '::1', '2020-03-13', 1),
(69, '::1', '2020-03-13', 1),
(70, '::1', '2020-03-13', 1),
(71, '::1', '2020-03-13', 1),
(72, '::1', '2020-03-13', 1),
(73, '::1', '2020-03-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktural`
--

CREATE TABLE `tb_struktural` (
  `id_struktural` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL,
  `nama_pns` varchar(100) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `kelas_jabatan` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_struktural`
--

INSERT INTO `tb_struktural` (`id_struktural`, `nama_jabatan`, `nama_pns`, `gol`, `nip`, `kelas_jabatan`, `foto`) VALUES
(1, 'Kepala Satuan', 'ANDI ISKANDAR,S.Sos', 'IV-b', '1962123119920311', 14, 'file_1584288673.jpg'),
(2, 'Sekertaris', 'MUH. SATTI ABDUL LATIF, S. Sos', 'III-d', '1975102520070110', 12, 'file_1584387973.jpg'),
(3, 'Analis Rencana Program dan Kegiatan', 'NIRMAWATI, SE', 'III-b', '1986040620100120', 7, ''),
(4, 'Pengeloala Program Dan Kegiatan', 'MUH NAIM', 'II-d', '1967123120070111', 6, 'file_1584772358.jpeg'),
(5, 'Kepala Sub Bagian Umum, Kepegawaian dan Hukum', 'NURDIN', 'III-C', '1976081520080110', 9, ''),
(6, 'Pengelola Keuangan', 'SITTI HALIJAH, S.Kom', 'III-a', '1982101820141020', 7, ''),
(7, 'Pengelola Kepegawaian', 'ASMAN MUSRIADI', 'II-d', '1963030720070110', 6, 'file_1584771056.jpeg'),
(8, 'Pranata Barang dan Jasa', 'ANWAR, S.AN', 'III-a', '1984040420141010', 6, ''),
(9, 'Kepala Sub Bagian Keuangan', 'KUSMAYANTI, SE', 'III-C', '1980090520100120', 9, ''),
(10, 'Analisis Kerjasama Aparat Penegak Hukum', 'SUHARDI, SE', 'III-a', '1985052520090110', 7, 'file_1584772075.jpeg'),
(11, 'Pengelola Keuangan', 'RACHMA YUSUF', 'II-b', '1974010420141020', 6, 'file_1584643811.jpg'),
(12, 'Kabid Ketertiban umum dan ketentraman masyarakat', 'HUMANG, S. Pd.M.M.Pd', 'IV-a', '1962123119830312', 11, 'file_1584772195.jpeg'),
(13, 'Pengelola Data Keamanan', 'ANDIL', 'IV-B', '1962123120021210', 6, 'file_1584770802.jpeg'),
(14, 'Pengelolah Informasi Kerjasam', 'ENOS SIRUMPA', 'IV-B', '1986082520141010', 6, 'file_1584771224.jpeg'),
(15, 'Pengelola Keuangan', 'ARDIANSYAH, S.AN', 'IV-B', '1979010320090110', 6, 'file_1584771350.jpeg'),
(16, 'Analisis Data Dan Informasi', 'RUDI HARTONO, S.AN', 'IV-B', '1980110620080110', 6, 'file_1584771769.jpeg'),
(17, 'Analis Pengawasan Masyarakat', 'ANDI AKBAR BARLIN, S.AN', 'IV-B', '1983122320090110', 6, 'file_1584951999.jpeg'),
(18, 'Penyusun Teknis Pelatihan Fungsional Bagi Aparatur dan Non Aparatur', 'M.YAHRIF ANNAS, S.AN', 'IV-B', '1977070720090110', 6, 'file_1584952146.jpeg'),
(19, 'Bendahar', 'ISKUR, S.AN', 'IV-B', '1979061320070110', 6, 'file_1584952266.jpeg'),
(20, 'Analis Pengawasan Masyarakat', 'CAMRA', 'IV-B', '1967051220070110', 6, 'file_1584952413.jpeg'),
(21, 'Pengelola Pengendalian dan Operasional', 'SULAIMAN BIN SUDIRMAN', 'IV-B', '1982030220141010', 6, 'file_1584952760.jpeg'),
(22, 'Penyusun Teknis Pelatihan Fungsional Bagi Aparatur dan Non Aparatur', 'AKBAL YASIR S.AN', 'IV-B', '1983050820090110', 6, 'file_1584953233.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'roni', '0ada1d7b1cbf9f33c00599d8362cc8e7', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visi`
--

INSERT INTO `tb_visi` (`id_visi`, `visi`, `misi`) VALUES
(1, '<p>Visi</p>\r\n\r\n<p>Menjadi Penegak Peraturan Perundang-Undangan Daerah yang Professional untuk terwujudnya Masyarakat Kabupaten Luwu yang tertib dan tenteram</p>\r\n', '<p>Misi</p>\r\n\r\n<p>1. Meningkatkan kapasitas sumber daya aparatur dan budaya kerja yang responsive.</p>\r\n\r\n<p>2. Mewujudkan penegakkan peraturan perundang-undangan daerah yang demokratis dan partisipatif.</p>\r\n\r\n<p>3. Membangun sinergitas dengan organisasi perangkat daerah dan masyarakat untuk mendukung terciptanya ketertiban umum dan ketentraman masyarakat.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(70) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `gambar`, `link`) VALUES
(1, 'Kemenaker', 'file_1517649802.jpg', 'https://www.youtube.com/embed/qiSDklRvQSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar_struktur`
--
ALTER TABLE `tb_gambar_struktur`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_kontak_kami`
--
ALTER TABLE `tb_kontak_kami`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tb_stastik_pengunjung`
--
ALTER TABLE `tb_stastik_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_struktural`
--
ALTER TABLE `tb_struktural`
  ADD PRIMARY KEY (`id_struktural`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_gambar_struktur`
--
ALTER TABLE `tb_gambar_struktur`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kontak_kami`
--
ALTER TABLE `tb_kontak_kami`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_stastik_pengunjung`
--
ALTER TABLE `tb_stastik_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_struktural`
--
ALTER TABLE `tb_struktural`
  MODIFY `id_struktural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_visi`
--
ALTER TABLE `tb_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
