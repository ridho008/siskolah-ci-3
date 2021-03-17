-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2021 at 03:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskolah-ci-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `foto_berita` varchar(100) DEFAULT NULL,
  `slug` varchar(256) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `foto_berita`, `slug`, `id_user`) VALUES
(1, 'What Is Lorem Ipsum?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper eleifend congue. Donec mollis sem et sem facilisis auctor. Vivamus nisi metus, fermentum nec commodo id, mattis et metus. Aliquam pulvinar elementum lorem non fringilla. Nulla ut arcu in leo egestas aliquam. Etiam non fermentum lorem. Donec tincidunt sem vel sagittis porta. Nunc volutpat risus diam, quis vulputate nunc vehicula nec. Donec vitae luctus tellus, non fringilla tellus. Suspendisse nec orci at odio vestibulum elementum quis in ligula. Morbi aliquam tortor vitae eros iaculis efficitur. Proin sit amet sodales diam, quis hendrerit lectus. Vestibulum luctus felis sed malesuada iaculis. Suspendisse dapibus sagittis lorem.</p>\r\n\r\n<p>Nulla faucibus magna magna, in eleifend lorem aliquet mollis. Nam eget quam vitae elit congue varius. Aliquam dictum ligula et urna porta cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras at luctus magna. Nulla sapien ligula, dapibus lacinia congue a, pulvinar eu nisl. Nullam sollicitudin venenatis vestibulum. Duis elementum ex sit amet risus molestie tristique. Donec id diam justo.</p>\r\n\r\n<p>Nulla dignissim nisi non tempor luctus. Nunc sapien dolor, rutrum et erat ut, fermentum malesuada nulla. Duis orci est, vulputate vel leo in, mollis dictum nulla. In maximus arcu ac urna faucibus placerat. Suspendisse tincidunt eget est id semper. Aliquam scelerisque posuere euismod. Quisque et porttitor felis.</p>\r\n\r\n<p>Fusce non massa nunc. Morbi ante dolor, suscipit ut vestibulum a, consectetur ut justo. Maecenas id finibus lectus. In molestie ligula vitae mattis scelerisque. Donec sapien odio, gravida ac felis et, eleifend tempor nibh. Suspendisse potenti. Vestibulum blandit accumsan tempus. Sed mattis augue justo, et mollis tellus lobortis et.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer at hendrerit dolor. Phasellus eleifend neque at orci varius dapibus. Aliquam a sapien venenatis, interdum odio nec, posuere lorem. Fusce aliquet nisi sed ante consectetur pellentesque. Proin sit amet arcu non purus maximus luctus. Praesent ac purus neque.</p>\r\n\r\n<p>Nullam id eleifend nibh, a sollicitudin ipsum. Nulla dignissim orci ac ligula sodales laoreet. Nullam ut ex sapien. Nam at molestie augue. Donec orci tellus, auctor nec ipsum eu, elementum facilisis ex. Donec sodales condimentum metus, non efficitur eros suscipit ac. Nunc ornare ultrices maximus.</p>', '2020-10-28', 'photo2.png', 'what-s-orem-ipsum', 1),
(2, 'Why Do We Use It?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor nisl vitae ligula dictum feugiat. Sed eget eros augue. Praesent pulvinar nulla urna, id vestibulum tellus interdum at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent dui libero, auctor a nunc non, dignissim convallis nisl. Cras et neque felis. Sed ut magna hendrerit, pretium nulla eu, rutrum nunc.</p>\r\n\r\n<p>Nulla mattis, magna nec bibendum luctus, massa lacus tempus massa, non sagittis est eros egestas nisi. Donec imperdiet erat quis nisl malesuada mattis. Sed id urna sit amet leo sodales ornare. Duis quis nisl et purus faucibus iaculis quis vel leo. Nam vehicula cursus urna, non sollicitudin felis commodo ac. Aliquam et arcu et lacus viverra varius et in elit. Proin dictum ipsum sapien, id vestibulum libero vehicula eu.</p>\r\n\r\n<p>Curabitur ipsum turpis, auctor eu turpis et, viverra tincidunt ligula. Nunc semper, metus nec pulvinar consectetur, urna tortor congue felis, ac maximus velit odio cursus urna. Cras euismod non sapien non consequat. Mauris sed mauris iaculis, ornare libero eget, sodales massa. Nunc posuere lobortis turpis at mollis. Sed sed lorem commodo, bibendum dui vitae, porta sapien. Nulla volutpat vitae tellus non ultricies. In laoreet consectetur erat. Suspendisse quis erat euismod, efficitur justo quis, tempus nibh. Etiam vel ante lorem. Ut id scelerisque nunc. Mauris nibh augue, gravida eget nunc eu, convallis maximus leo. In nec nulla viverra, egestas lectus suscipit, scelerisque tellus.</p>', '2020-10-30', 'photo3.jpg', 'asdajk', 1),
(3, 'Where Does It Come From?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque ligula arcu, id sollicitudin diam commodo commodo. Maecenas magna mauris, fermentum vel sapien eu, viverra tempor augue. In condimentum eleifend lacus, nec convallis massa hendrerit id. Nulla ullamcorper porta commodo. Fusce porta quis dolor quis vestibulum. Nulla ut arcu facilisis, laoreet metus non, maximus ligula. Maecenas ut dolor ac ante rutrum lobortis.</p>\r\n\r\n<p>Donec porttitor elementum nunc at porttitor. Cras nibh arcu, sodales ut justo ut, faucibus fringilla odio. Quisque eu molestie lectus. Vivamus feugiat libero lectus, sit amet suscipit lorem semper id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus feugiat purus, sit amet euismod leo. Curabitur dignissim commodo felis id pretium.</p>\r\n\r\n<p>Curabitur laoreet rhoncus est, et suscipit lorem aliquam at. Aliquam commodo velit leo, at venenatis magna euismod et. Aenean pharetra placerat erat, in lacinia lorem accumsan nec. Mauris turpis eros, consectetur nec ipsum ac, tincidunt commodo nulla. Vivamus sagittis porttitor lorem, dictum elementum felis bibendum finibus. Cras sodales nulla felis, ac aliquam mi ultrices in. Fusce feugiat velit mauris, quis blandit turpis imperdiet nec. Ut vel odio porttitor, placerat ligula id, condimentum urna. Vestibulum luctus dui lorem, lobortis consequat mi tempus in. Donec eleifend tempus tellus et feugiat. Sed neque neque, posuere vitae neque vitae, tempor vestibulum massa. Aliquam laoreet, mauris non venenatis feugiat, velit augue rutrum dui, eu suscipit diam purus nec nunc.</p>\r\n\r\n<p>Nulla erat diam, ultricies vitae convallis scelerisque, tincidunt eu elit. Duis et dapibus tortor. Nulla eu leo dictum, viverra risus malesuada, tincidunt erat. Duis sed vulputate velit, vitae pulvinar magna. Nullam volutpat interdum felis condimentum pulvinar. Morbi dignissim suscipit efficitur. Nunc eget faucibus turpis, vitae molestie elit. Praesent non ex dui. Curabitur tincidunt aliquam sem, eget pellentesque odio finibus ut. Morbi in convallis felis, sed elementum tellus. Proin consectetur ex nunc, id pretium arcu venenatis a. Duis efficitur ut tellus in tincidunt.</p>\r\n\r\n<p>Suspendisse vitae ligula auctor, porttitor turpis quis, blandit lorem. Integer sodales fermentum dui. Nam vel facilisis eros. Nam eget condimentum urna. Nullam placerat pharetra neque sit amet fermentum. Praesent felis eros, congue a magna a, lacinia mattis ligula. Vivamus et sapien velit. Aliquam sodales pretium lectus, ac elementum elit condimentum sed. Morbi dictum scelerisque convallis.</p>\r\n\r\n<p>Mauris orci justo, pellentesque ut posuere in, ornare maximus dui. Nam turpis ligula, facilisis at erat id, tristique placerat turpis. Ut viverra a felis id posuere. Integer dui turpis, accumsan vitae est eget, tincidunt maximus nulla. Curabitur sed consequat quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam varius eu odio quis fermentum. Curabitur risus odio, viverra vitae felis id, pharetra consequat erat. Phasellus lobortis, massa non aliquam gravida, mi ex dictum nisi, id consectetur ipsum tellus non diam.</p>\r\n\r\n<p>Integer urna risus, aliquam in ullamcorper eu, accumsan maximus nisl. In ut lacus interdum, aliquam elit sit amet, commodo urna. Proin id nunc ligula. Donec dignissim urna eget congue volutpat. Proin metus nulla, gravida quis ex in, semper eleifend arcu. Morbi eu placerat urna. Ut nisi diam, tempus efficitur nulla nec, condimentum ullamcorper ex. Vivamus efficitur euismod commodo. Integer consequat accumsan sem eget tempor. Sed ac dolor et sem suscipit bibendum non eu ante. Pellentesque gravida vel sem id elementum. Pellentesque eget dolor at justo blandit tempus a ut augue. Cras imperdiet id orci sed vulputate.</p>', '2020-10-30', 'photo4.jpg', 'ok-ok-ok', 1),
(4, 'Where Can I Get Some?', '<p>Suspendisse vitae ligula auctor, porttitor turpis quis, blandit lorem. Integer sodales fermentum dui. Nam vel facilisis eros. Nam eget condimentum urna. Nullam placerat pharetra neque sit amet fermentum. Praesent felis eros, congue a magna a, lacinia mattis ligula. Vivamus et sapien velit. Aliquam sodales pretium lectus, ac elementum elit condimentum sed. Morbi dictum scelerisque convallis.</p>\r\n\r\n<p>Mauris orci justo, pellentesque ut posuere in, ornare maximus dui. Nam turpis ligula, facilisis at erat id, tristique placerat turpis. Ut viverra a felis id posuere. Integer dui turpis, accumsan vitae est eget, tincidunt maximus nulla. Curabitur sed consequat quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam varius eu odio quis fermentum. Curabitur risus odio, viverra vitae felis id, pharetra consequat erat. Phasellus lobortis, massa non aliquam gravida, mi ex dictum nisi, id consectetur ipsum tellus non diam.</p>\r\n\r\n<p>Integer urna risus, aliquam in ullamcorper eu, accumsan maximus nisl. In ut lacus interdum, aliquam elit sit amet, commodo urna. Proin id nunc ligula. Donec dignissim urna eget congue volutpat. Proin metus nulla, gravida quis ex in, semper eleifend arcu. Morbi eu placerat urna. Ut nisi diam, tempus efficitur nulla nec, condimentum ullamcorper ex. Vivamus efficitur euismod commodo. Integer consequat accumsan sem eget tempor. Sed ac dolor et sem suscipit bibendum non eu ante. Pellentesque gravida vel sem id elementum. Pellentesque eget dolor at justo blandit tempus a ut augue. Cras imperdiet id orci sed vulputate.</p>\r\n\r\n<p>In arcu tellus, mattis gravida quam a, aliquam rutrum magna. Vivamus quis lobortis tellus. Cras viverra mi sit amet libero pellentesque, ac molestie tellus sodales. Fusce sit amet quam luctus ante feugiat convallis. Integer feugiat venenatis scelerisque. Etiam in venenatis libero. Aenean ipsum leo, tempor ut arcu vitae, sollicitudin varius ligula. Sed ornare lorem non magna finibus, at dignissim leo commodo. Suspendisse non efficitur risus. Pellentesque posuere est non lacus aliquet accumsan sit amet sed dui. Mauris nisi risus, cursus in rhoncus quis, luctus nec neque. Fusce non vehicula risus, vel dictum ligula.</p>', '2020-11-03', 'photo1.png', 'where-can-i-get-some', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `file` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `nama_file`, `file`) VALUES
(1, 'Materi IPA', 'ipa.pdf'),
(8, 'Materi Matematika', 'JADWAL KULIAH PRODI TI GANJIL _2020-2021 Final 1.xls'),
(9, 'Mnbmn', 'JADWAL KULIAH PRODI TI GANJIL _2020-2021 Final 1.xls');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(1, 1, 'ok', 'ok'),
(2, 2, '', 'photo2.png'),
(3, 2, '', 'prod-5.jpg'),
(6, 3, 'Coba1', 'avatar.png'),
(7, 3, 'Coba 2', 'prod-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `sampul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `sampul`) VALUES
(2, 'Wirausahaan', 'photo4.jpg'),
(3, 'Mencoba', 'avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tmp_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `foto_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `tmp_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(1, 875647, 'Hakim', 'Pekanbaru', '2020-10-07', 2, 'S1', 'user1-128x128.jpg'),
(9, 125675, 'Susanti M.Kom', 'Kalimantan', '2020-10-29', 4, 'S3', 'user2-160x160.jpg'),
(10, 83746789, 'Juki Harianto', 'Palembang', '2020-11-03', 3, 'S3', 'user6-128x128.jpg'),
(11, 39381829, 'Rania', 'Rengat', '2020-11-02', 1, 'S1', 'user3-128x128.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'Fisika'),
(3, 'Olahraga'),
(4, 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(11) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `foto_kepsek` varchar(256) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(200) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `nama_sekolah`, `alamat`, `telp`, `kepsek`, `nip`, `foto_kepsek`, `visi`, `misi`, `sejarah`) VALUES
(1, 'SMK Muhammadiyah 2 Pekanbaru', 'Jl.Ahmad Dahlan, Kecamatan Sukajadiii', 34758771, 'Ridho', 3246561, 'user1-128x128.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error fugit quidem cum, ea deserunt asperiores quam sequi reiciendis accusantium modi minus nobis adipisci similique quae maiores consectetur ', 'Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Eveniet impedit nulla beatae quos distinctio alias odio quas, unde voluptas accusantium incidunt illo deserunt, nihil amet necessitatibus exe', 'Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Dolore voluptatum praesentium debitis, alias ut amet, quod ab possimus iusto voluptas laudantium nemo quos, blanditiis iste omnis deleniti itaque accusamus nihil quidem est. Ipsa harum voluptatem iste velit porro, ad debitis molestiae. Reiciendis dolorem libero eaque assumenda et voluptas reprehenderit iste mollitia, commodi error harum, cum facere maxime adipisci ex ipsam sequi. Officiis non incidunt, dicta inventore in ducimus quo unde error id sapiente tempora, natus repellendus est adipisci quae, a numquam aut doloremque, consequatur aliquid. Esse magni aperiam similique optio recusandae quisquam odit tempora dicta unde, autem? Nihil tenetur deleniti ipsum commodi molestias hic, excepturi, minima iste quibusdam fugiat doloremque velit omnis nostrum dignissimos officia! Cupiditate, veritatis, cum! Repellendus consequuntur, quibusdam quo ut error aspernatur ipsam voluptatem fuga eius, molestiae.');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengu` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengu`, `judul_pengumuman`, `isi_pengumuman`, `tgl_pengumuman`) VALUES
(1, 'UTSss', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis voluptatem a suscipit praesentium, vitae provident quod blanditiis officia, nemo at molestiae repellat tempore ipsum! Tempore laudantium nemo optio quo nam!', '2020-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `tmp_lahir` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(40) DEFAULT NULL,
  `foto_siswa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(4, 1436576, 'Harun Saputra', 'Semarang', '2020-10-26', 'II', 'b8fb8598218627a57c12d134627e0f1e.jpeg'),
(5, 76565876, 'Juki Halilintar', 'Jakarta', '2020-10-27', 'IV', '103148279_1457596037777531_8075518570422749222_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengu`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
