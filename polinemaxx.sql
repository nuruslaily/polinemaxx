-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 07:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polinemaxx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Bella', 'bella', 'bella123');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `dimensi` enum('2D','3D','','') DEFAULT NULL,
  `usia` varchar(30) DEFAULT NULL,
  `trailer` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `durasi` time NOT NULL,
  `produser` varchar(300) NOT NULL,
  `direktor` varchar(300) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `cast` varchar(1000) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `gambar`, `dimensi`, `usia`, `trailer`, `nama`, `kategori`, `durasi`, `produser`, `direktor`, `penulis`, `cast`, `deskripsi`) VALUES
(3, 'maleficent2.jpg', '2D', '17+', 'maleficent_2.mp4', 'Maleficent 2', 'Fantasi', '01:50:00', 'Bryan H. Carroll,Chris Castaldi, Duncan Henderson, Angelina Jolie, Jeff Kirschenbaum, R.J. Mino, Nikki Penny, Joe Roth, Zack Roth, Matt Smith, Michael Vieira, Linda Woolverton', 'Joachim Rønning', 'Linda Woolverton, Noah Harpster, Micah Fitzerman-Blue', 'Angelina Jolie, Elle Fanning, Michelle Pfeiffer, Chiwetel Ejiofor, Sam Riley, Ed Skrein, Harris Dickinson, Imelda Staunton, Juno Temple, Lesley Manville , Robert Lindsay as King John, Warwick Davis, Jenn Murray as Gerda, David Gyasi, Judith Shekoni, Miyavi , Kae Alexander , Aline Mowat, Emma Maclennon , John Carew , Freddie Wise', 'Lima tahun damai telah berlalu sejak kematian Raja yang terduplikasi, raja Stefan, di Maleficent (2014), dan, sekarang, sebuah peristiwa yang tak terduga tetapi menggembirakan akan menyatukan kerajaan Ulstead fana dan peri-ranah dari Moor terpesona. Namun, sekali lagi, pengkhianatan yang menjijikkan berdiri di jalan kasih muda yang sejati, sebagai iri hati, ambisi yang tak terhingga dan pikiran yang tidak mulia merayap di jantung manusia. Sekarang, dua dunia tetangga menemukan diri mereka dibagi dengan ketakutan dan prasangka, dan, sedih, Serikat yang akan datang membuka jalan untuk konfrontasi semua-out. Secara mendadak, sprite bersayap megah, Maleficent, dan Princess Aurora yang indah tertangkap di tengah'),
(4, 'Brahms_The_Boy_Poster.jpg', '2D', '17+', 'btp2.mp4', 'Brahms: The Boy II', 'Horror', '01:26:00', 'Richard S. Wright', 'William Brent Bell', 'Stacey Menear', 'Katie Holmes, Owain Yeoman, Christopher Convery, Ralph Ineson, Anjali Jay, Oliver Rice, Natalie Moon, Daphne Hoskins, Joely Collins', 'Sebuah invasi rumah daun Liza dengan cedera kepala dan putranya Jude trauma dan diam selama berbulan-bulan. Seiring dengan Sean, suami Liza dan ayah Yudas, mereka bergerak melintasi negara ke properti Heelshires. Sementara menjelajahi hutan, Jude menemukan boneka porselen terkubur di kuburan dangkal di tanah dan debu dari kotoran sebelum memutuskan untuk membawanya pulang. Liza dan Sean percaya ia menggunakan boneka untuk mengekspresikan perasaannya tetapi menjadi lebih menyeramkan dengan boneka meletakkan aturan. Yudas menjadi ditarik di kamarnya, membawa boneka itu bersamanya kemanapun dia pergi. \r\n\r\nOrang tua segera belajar sejarah jahat boneka, dengan semua pembunuhan dan bunuh diri. Lebih banyak insiden yang tidak biasa terjadi, seperti meja ruang makan runtuh ketika Yudas memperingatkan ibunya untuk tidak membuat boneka marah. Liza juga melihat gambar mengerikan dan kekerasan dalam catatan Yudas. Groundskeeper Joseph memasuki rumah, membidik sebuah senapan di Liza. Dia mulai menceritakan kisah tentang bagaimana Brahms memintanya untuk menempatkan dia kembali bersama-sama, membuat Yudas menjadi sasaran mudah bagi boneka itu karena ia tidak menghendaki keras. Dia kemudian mengatakan padanya bahwa Brahms akan mengambil Yudas pergi selamanya. Liza menyerang Yusuf dengan senapan, sebelum mulai mencari anaknya. Dia pergi ke ruang bawah tanah dan menemukan Yudas dalam keadaan Trans-seperti, siap untuk mengorbankan dirinya dengan boneka. Liza berhasil meyakinkan Yudas bahwa mereka akan mengambil Brahms rumah dan menjadi sebuah keluarga, tanpa melihat Sean datang dan mematahkan Brahms \' kepala dengan palu croquet sebelum Yusuf datang berjalan masuk Brahms \' kepala pecah, mengungkapkan sebuah boneka setan di bawahnya, lebih menyeramkan daripada porselen polos wajah. Brahms kemudian membunuh Yusuf tanpa ragu. \r\n\r\nYudas memilih Brahms atas, meyakinkan dia bahwa mereka akan baik-bagus saja sebelum melemparkan boneka itu ke dalam api. Keluarga merangkul dan kembali ke rumah mereka, hidup bahagia seperti sebelum insiden invasi rumah. Pada malam hari, Yudas memakai topeng muka Brahms. '),
(5, '20FISD.jpg', '2D', '18+', 'fisd.mp4', 'Fantasy Islands', 'Horror', '01:50:00', 'Jason Blum, Marc Toberoff, Jeff Wadlow ', 'Jeff Wadlow', ' Jillian Jacobs, Jeff Wadlow , Christopher Roach', 'Michael Pena, Maggie Q, Lucy Hale, Austin Stowell, Portia Doubleday, Jimmy O. Yang, Ryan Hansen, Michael Rooker', 'Fantasy Island merupakan adaptasi serial horor televisi tahun 1970-an. Film ini berkisah tentang supernatural Amerika yang disutradarai dan ditulis oleh Jeff Wadlow. Sebuah imajinasi ulang dan prekuel untuk serial televisi ABC 1977 dengan nama yang sama, dibintangi oleh Michael Peña, Maggie Q, Lucy Hale, Austin Stowell, Portia Doubleday, Jimmy O. yang, Ryan Hansen, dan Michael rooker. Diproduksi oleh Wadlow dan Marc toberoff, serta Jason Blum melalui blumhouse Productions banner, plot mengikuti lima orang yang mengunjungi Pulau eponim, menemukan bahwa fantasi impian mereka dibawa ke kehidupan mulai berubah menjadi mimpi buruk hidup mengerikan mereka harus mencoba untuk bertahan hidup.'),
(6, 'milea2.jpg', '2D', '17+', 'msrd2.mp4', 'Milea Suara Dari Dilan', 'Romantis', '01:42:00', 'Ody Mulya Hidayat ', 'Fajar Bustomi, Pidi Baiq', 'Pidi Baiq, Titien Wattimena ', 'Bucek, Debo Andrios, Gusti Rayhan, Happy Salma, Iqbaal Dhiafakhri Ramadhan, Ira Wibowo, Muhammad Farhan, Vanesha Prescilla, Yoriko Angeline, Zulfa Maharani', 'Dilan (Iqbaal Ramadhan), panglima perang geng motor di Bandung pada awal tahun 90-an, menjalin hubungan dengan seorang siswi baru dari Jakarta bernama Milea (Vanesha Prescilla). Dilan selalu senang ketika dia bersama Milea, tapi teman geng motornya merasa bahwa dilan semakin menjauh dari kelompoknya karena Milea. Sebuah peristiwa mengerikan terjadi: salah satu anggota mereka, Akew (Gusti rayhan), meninggal karena dipukuli oleh sekelompok orang. Insiden membuat Milea khawatir tentang keamanan dilan. Milea membuat keputusan untuk berpisah dengan dilan sebagai peringatan untuk dilan untuk menjauh dari geng motor. Insiden yang Akew menyeret dilan kepada pihak berwenang bersama teman-temannya. \r\n\r\nPerpisahan yang hanya merupakan gertakan bagi Milea menjadi perpisahan yang berlangsung sampai mereka lulus dari perguruan tinggi dan dibesarkan. Mereka berdua masih membawa perasaan yang sama ketika mereka bertemu lagi di sebuah reuni, tetapi masing-masing telah memiliki pasangan.'),
(8, 'nkcthi2.jpeg', '2D', '17+', 'nkcthi.mp4', 'Nanti Kita Cerita Tentang Hari Ini', 'Drama', '02:01:00', 'Anggia Kharisma', 'Angga Dwimas Sasongko', 'Marcella FP', 'Rachel Amanda, Rio Dewanto, Sheila Dara Aisha, Donny Damara, Susan Bachtiar, Ardhito Pramono, Oka Antara, Niken Anjani, Agla Artalidia', 'Angkasa (Rio Dewanto), Aurora (Sheila Dara Aisha), dan Awan (Rachel Amanda) adalah kakak beradik yang hidup dalam keluarga yang tampak bahagia. Setelah mengalami kegagalan besar pertamanya, Awan berkenalan dengan Kale (Ardhito Pramono), seorang cowok eksentrik yang memberikan Awan pengalaman hidup baru, tentang patah, bangun, jatuh, tumbuh, hilang, dan semua ketakutan manusia pada umumnya. Perubahan sikap Awan mendapat tekanan dari orang tuanya. Hal tersebut mendorong pemberontakan ketiga kakak beradik ini yang menyebabkan terungkapnya rahasia dan trauma besar dalam keluarga mereka.'),
(9, 'ainun.jpg', '2D', '17+', 'videoplayback.mp4', 'Habibie & Ainun 3', 'Sejarah', '02:01:00', 'Manoj Punjabi', 'Hanung Bramantyo', ' David McElroy, Mario Kassar', 'Maudy Ayunda, Jefri Nichol, Reza Rahadian', 'Film ini dibuka dengan kenangan produser Manoj Punjabi terhadap B. J. Habibie yang meninggal pada 11 September 2019.  Pada 22 Mei 2011, Habibie (Reza Rahadian) pergi ke kuburan Ainun untuk mengenang setahun kematian istrinya. Setelah berziarah, Habibie yang masih berduka sedang meratapi kematian istrinya, sementara keluarga Habibie menyiapkan makan malam. Habibie lewat Thareq menginginkan suasana bahagia ketika makan malam. Habibie atas keinginan cucu-cucunya menceritakan \"Eyang Putri\", panggilan Hasri Ainun Besari.'),
(10, 'sonic_hedgehog.jpg', '2D', '13+', 'sonic.mp4', 'Sonic the Hedgehog', 'Aksi', '01:40:00', 'Toby Ascher, Takeshi Ito, Toru Nakahara', 'Jeff Fowler', 'Josh Miller , Pat Casey', 'Ben Schwartz, Jim Carrey, James Marsden, Tika Sumpter, Lee Majdoub, Natasha Rothwell, Melody Nosipho Niemann, Adam Pally, Neal McDonough, Tom Butler, Frank C. Turner', 'Based on the global blockbuster videogame franchise from Sega, SONIC THE HEDGEHOG tells the story of the world\'s speediest hedgehog as he embraces his new home on Earth. In this live-action adventure comedy, Sonic and his new best friend Tom (James Marsden) team up to defend the planet from the evil genius Dr. Robotnik (Jim Carrey) and his plans for world domination. The family-friendly film also stars Tika Sumpter and Ben Schwartz as the voice of Sonic');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `bioskop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `nama`, `alamat`, `telp`, `bioskop`) VALUES
(1, 'ARAYA XXI', 'Jln. Blimbing Indah Megah No.2', '(0341) 408201', 'cinemaxxi'),
(2, 'DIENG 21', 'Jl. Raya Langsep No. 2', '(0341) 575421', 'cinema21');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id_transaksi` int(5) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `film` int(10) DEFAULT NULL,
  `bioskop` int(5) NOT NULL,
  `jam` time NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `total` int(20) DEFAULT NULL,
  `kursi` varchar(255) NOT NULL,
  `bayar` enum('BNI','BRI','Gopay','Dana','OVO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pembelian`
--

INSERT INTO `transaksi_pembelian` (`id_transaksi`, `user`, `film`, `bioskop`, `jam`, `jumlah`, `harga`, `total`, `kursi`, `bayar`) VALUES
(1, 10000, 8, 1, '00:00:15', 2, 30000, 60000, 'D6,D7', 'OVO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `nohp`, `email`, `password`) VALUES
(10000, 'Sasa Anggraini', 'Jl. Kamboja Mekar 30', '089756788899', 'sasa@gmail.com', 'sasa123'),
(10001, 'Danang Pamungkas', 'Jl. Ksatria Prajurit 1', '081233441222', 'danang@gmail.com', 'danang123'),
(10002, 'Siyam Marzuki', 'Jl. Pahlawan Bumi 12', '082123543142', 's.marzuki@gmail.com', 'siyam123'),
(10003, 'Haris Jamal', 'Jl. Pandawa 5', '082199000123', 'haris@gmail.com', 'haris123'),
(10004, 'Deni Cahyono', 'Jl. Kembar Jaya 12', '085678124555', 'deni.c@gmail.com', 'deni123'),
(10006, 'Jamal Mudi', 'Jl. Kembang Kertas 12', '089111555666', 'jamal@gmail.com', 'jamal123'),
(10007, 'nuyus', 'jl ikan tombro', '08816254736', 'nuruslaily88@gmail.com', 'Nurus @8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_transtheater` (`bioskop`),
  ADD KEY `FK_user` (`user`),
  ADD KEY `FK_film` (`film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD CONSTRAINT `FK_film` FOREIGN KEY (`film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `FK_transtheater` FOREIGN KEY (`bioskop`) REFERENCES `theater` (`id`),
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
