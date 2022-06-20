-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table f_karriz_id.tb_blog
CREATE TABLE IF NOT EXISTS `tb_blog` (
  `id_blog` varchar(10) NOT NULL,
  `id_kat_blog` varchar(10) DEFAULT NULL,
  `judul_blog` varchar(150) DEFAULT NULL,
  `slug` text,
  `tgl_blog` date DEFAULT NULL,
  `author` varchar(25) DEFAULT NULL,
  `file_thumbnail` text,
  `deskripsi` text,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_blog: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_blog` DISABLE KEYS */;
INSERT IGNORE INTO `tb_blog` (`id_blog`, `id_kat_blog`, `judul_blog`, `slug`, `tgl_blog`, `author`, `file_thumbnail`, `deskripsi`) VALUES
	('2021100001', 'KT001', 'LURUSKAN NIAT KARENA APA?', 'luruskan-niat-karena-apa', '2021-10-21', 'Rizki Abd', 'luruskan-niat-karena-apa-karena-siapa-image.png', '<p>Segala aktifitas yang kita lakukan tentu berdasarkan niat, saya rasa hanya orang tidak berakal atau tidak tahu cara menggunakan akal yang melakukan aktifitas tanpa niat.</p>\r\n<p>Niat ini penting, sebelum kita memutuskan tindakan kita. Niat itu apa? Gimana cara menentukan niat?</p>\r\n<p>Nah, niat bisa kita artikan "keinginan", sekolah niatnya pengen pinter, pengen punya banyak temen, pengen dapet prestasi, pengen gampang cari kerja, itu contohnya.</p>\r\n<p>Apa pentingnya niat? Sudah jelas kan? tentu biar jelas tindakan kita, arahnya mau kemana, apa akhir yang kita capai dari keputusan tindakan kita.</p>\r\n<p>Hal lain yang tidak kalah penting, disaat tindakan kita dirasa ada yang salah, cek kembali niat kita, apa sudah sesuai dengan jalur? Apa jangan2 kita sengaja bikin tersesat dan menyerah dengan niat?</p>\r\n<p>Kuatin lagi, Karena Siapa kita melakukan ini? orang tua? diri sendiri? sahabat? atau lainnya.</p>\r\n<p>Saya sarankan, yuk selesaikan niat kita diawal, jangan sampai niat2 lain tiba2 muncul dan mengganggu niat awal kita. </p>\r\n<p>Yuk kita biasakan selesaikan apa yang kita mulai, jadilah petarung, jadilah jiwa yang bertanggung jawab terhadap diri sendiri.</p>\r\n<p>SemangatBerjuang!</p>\r\n<p>Salam BacaKuy!</p>'),
	('2021100002', 'KT001', 'PERUBAHAN BUTUH PENGORBANAN', 'perubahan-butuh-pengorbanan', '2021-10-21', 'Rizki Abd', 'perubahan-butuh-pengorbanan-image.png', '<p>Banyak orang yang merasa, ko saya gini-gini aja ya? Ko mereka bisa sih kayak gt? Ko mereka bisa berubah cepet banget ya?</p>\r\n<p>Tentu kita akan bicarakan tentang perubahan yang lebih baik. Apa kamu mau? merasakan perubahan ke arah yang lebih baik? Yap, bagi yang berakal pastinya mau donk!&nbsp;</p>\r\n<p>oke, oke!</p>\r\n<p>Karena perubahan ini adalah hal yang banyak diinginkan, tentu tidak "tring!" tiba2 langsung berubah, tentu harus ada "Pengorbanan" yang harus kamu lakukan. Apa itu?</p>\r\n<p>Ada 2 poin yang berperan penting dalam proses perubahan kamu, sebetulnya banyak, namun saya coba share 2 poin ini ya, oke!?</p>\r\n<p>1. Mindset/Cara Berfikir<br />Mindset seseorang sangat menentukan perubahan, mengapa? Karena mindset ini menentukan ke arah mana cara berfikir kamu. Contohnya,&nbsp;</p>\r\n<p>"Oke, saya punya waktu luang, butuh refreshing, oke saya harus bermain game" setiap punya waktu luang dan butuh refresh, larinya ke game, sampai seterusnya, dia belum mencoba cara lain, misalnya baca buku, olahraga, dll. Cara melatih agar mindset kamu lebih terbuka yaitu fikirkan cara baru. Jika memang kamu fokus bermain game untuk kebutuhan masa depan, tentu wajar jika memang demikian. Namun bagi kamu yang game itu hanya sekedar hobi biasa, Ingat, "Banyak jalan menuju roma", yuk cari cara lainnya untuk melatih mindset kamu.</p>\r\n<p>Contoh selanjutnya, "Saat kamu merasa kalau kamu gak akan bisa berubah, kamu merasa ya bakal gini aja, gak bisa berubah", ini mindset yang kurang baik, padahal kamu belum mencobanya dengan sepenuh hati.</p>\r\n<p>2. Aktifitas/Kegiatan<br />Nah, hal lain yang bisa membuat perubahan positif terhadap kamu adalah aktifitas kamu sehari2, bergaul dengan siapa, kegiatan apa saja, itu tentu mempengaruhi.</p>\r\n<p>Saran saya, silakan fikirkan, kira2 aktifitas apa saja yang menurutmu sebetulnya kurang bermanfaat, atau pertemanan mana yang membuat kamu tidak mendapat manfaat malah membawa kamu kepada hal2 negatif. Maka kurangi lah, sedikit demi sedikit.</p>\r\n<p>Tentu itu dikembalikan lagi kepada kamu, jika memang kamu merasa diri dan hidup kamu gini2 saja, tidak ada perubahan, belum menjadi diri yang diharapkan, maka bersiaplah untuk mengorbankan poin2 diatas.</p>\r\n<p>Sebaliknya, jika dirasa saat ini kamu mendapatkan perkembangan yang luarbiasa, maka pertahankan lebih bagus lagi ditingkatkan.</p>\r\n<p>Siap Berubah ke arah lebih baik? Siap!?</p>\r\n<p>SemangatBerjuang!</p>\r\n<p>Salam BacaKuy!</p>'),
	('2021110001', 'KT002', '3 Jenis Stiker Yang Dipakai Pebisnis', '3-jenis-stiker-yang-dipakai-pebisnis', '2021-11-27', 'Admin', '3-jenis-stiker-yang-dipakai-pebisnis-image.png', '<p>Stiker merupakan media promosi yang coock untuk mengenalkan produk, cara kerja stiker ini yaitu menempel di suatu objek. Ada 3 jenis Stiker yang sering dipakai para pebisnis kecil ataupun besar, yaitu :</p>\r\n<p><strong>1. Stiker Cromo</strong><br />Stiker cromo/kromo merupakan jenis yang paling diminati, karena harga yang cukup terjangkau dan mempunyai daya rekat yang tinggi sampai sulit untuk dilepas, biasanya meninggalkan bekas saking rekatnya stiker jenis ini.</p>\r\n<p>Kekurangannya dibandingkan stiker yang lainnya di artikel ini, lebih mudah sobek, kurang kuat jika terkena air atau panas terik matahari.<br />Stiker ini biasa digunakan untuk label makanan, stiker kampanye, stiker indoor, stiker event, dll.</p>\r\n<p><a href="../../store-detail/cetak-stiker-cromo-a3-murah" target="_blank" rel="noopener">Klik : Cek Produk Stiker Cromo</a></p>\r\n<p><strong>2. Stiker Vinyl</strong><br />Stiker jenis ini dipilih karena kualitas dan daya tahan cukup lama, mempunyai daya rekat yang kuat, tampilan lebih cerah/glossy. Stiker jenis ini tidak mudah robek, meskipun daya rekat sangat kuat, namun membersihkannya cukup mudah, karena tidak mudah sobek.</p>\r\n<p>Stiker ini biasa digunakan untuk stiker komunitas, stiker wevent, stiker kendaraan, stiker outdoor, dll. Dari segi harga stiker ini masih terbilang terjangkau, meski lebih sedikit dibandingkan jenis cromo.</p>\r\n<p><a href="../../store-detail/cetak-stiker-vinyl-a3-murah" target="_blank" rel="noopener">Klik : Cek produk Stiker Vinyl</a></p>\r\n<p><strong>3. Stiker Transparan</strong><br />Stiker jenis ini mempunyai keunikan khusus, yaitu transparan/tembus pandang, berbeda dengan jenis sebelumnya yang biasanya berbahan dasar putih. Stiker jenis ini biasa dipakai untuk cup minuman, atau kemasan yang menginginkan objek produk terlihat dari luar. Harga stiker jenis ini sama dengan stiker vinyl.</p>\r\n<p>Itulah 3 jenis stiker yang sering dipakai para pebisnis, tergantung kegunaan dan kebutuhan kamu, mau bikin stiker untuk apa? Mau konsultasi tentang stiker? Yuk chat!</p>');
/*!40000 ALTER TABLE `tb_blog` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_client
CREATE TABLE IF NOT EXISTS `tb_client` (
  `id_client` varchar(10) NOT NULL,
  `nm_client` varchar(10) DEFAULT NULL,
  `logo_client` text,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_client: ~13 rows (approximately)
/*!40000 ALTER TABLE `tb_client` DISABLE KEYS */;
INSERT IGNORE INTO `tb_client` (`id_client`, `nm_client`, `logo_client`) VALUES
	('CL007', 'aqla', 'aqla-image.jpg'),
	('CL008', 'artek', 'artek-image.jpg'),
	('CL009', 'Asia', 'Asia-image.jpg'),
	('CL010', 'B3', 'B3-image.jpg'),
	('CL011', 'IM', 'IM-image.jpg'),
	('CL012', 'Istana', 'Istana-image.jpg'),
	('CL013', 'max', 'max-image.jpg'),
	('CL014', 'riau', 'riau-image.jpg'),
	('CL015', 'rsu', 'rsu-image.jpg'),
	('CL016', 'sentul', 'sentul-image.jpg'),
	('CL017', 'sinar', 'sinar-image.jpg'),
	('CL018', 'taman baca', 'taman_baca-image.jpg'),
	('CL019', 'tas', 'tas-image.jpg');
/*!40000 ALTER TABLE `tb_client` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_contact
CREATE TABLE IF NOT EXISTS `tb_contact` (
  `id_contact` varchar(10) NOT NULL,
  `alamat` text,
  `email` text,
  `no_telp` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `fb` text,
  `tw` text,
  `ig` text,
  `link_map` text,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_contact: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_contact` DISABLE KEYS */;
INSERT IGNORE INTO `tb_contact` (`id_contact`, `alamat`, `email`, `no_telp`, `no_hp`, `fb`, `tw`, `ig`, `link_map`) VALUES
	('CT001', 'Perum Karaba,\r\nBlok GN, No. 12 Desa Wadas,\r\nKecamatan Telukjambe, Karawang', 'karriz.id@gmail.com', '6291295948855', '6281295949696', 'https://web.facebook.com/karriz.id/?_rdc=1&_rdr', '', 'https://www.instagram.com/karriz.id/', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507614.08881094586!2d106.7515430348298!3d-6.298502838658141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699d83875f4a0b%3A0x39c71bc30384cff9!2sKarriz%20Store!5e0!3m2!1sid!2sid!4v1634162939204!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>');
/*!40000 ALTER TABLE `tb_contact` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_gallery
CREATE TABLE IF NOT EXISTS `tb_gallery` (
  `id_gallery` varchar(15) NOT NULL,
  `id_kat_gallery` varchar(15) DEFAULT NULL,
  `nm_gallery` varchar(250) DEFAULT NULL,
  `slug` text,
  `deskripsi` text,
  `file_thumbnail` text,
  `tgl_gallery` date DEFAULT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_gallery: ~6 rows (approximately)
/*!40000 ALTER TABLE `tb_gallery` DISABLE KEYS */;
INSERT IGNORE INTO `tb_gallery` (`id_gallery`, `id_kat_gallery`, `nm_gallery`, `slug`, `deskripsi`, `file_thumbnail`, `tgl_gallery`) VALUES
	('2021110001', 'KT001', '1', '1', '', '1-image.png', '2021-11-27'),
	('2021110003', 'KT001', '3', '3', '', '3-image.png', '2021-11-27'),
	('2021110004', 'KT001', '4', '4', '', '4-image.png', '2021-11-27'),
	('2021110005', 'KT001', '5', '5', '', '5-image.png', '2021-11-27'),
	('2021110006', 'KT001', '6', '6', '', '6-image.png', '2021-11-27'),
	('2021110007', 'KT001', '7', '7', '', '7-image.png', '2021-11-27');
/*!40000 ALTER TABLE `tb_gallery` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_inbox
CREATE TABLE IF NOT EXISTS `tb_inbox` (
  `id_inbox` varchar(15) NOT NULL,
  `tgl` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id_inbox`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_inbox: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_inbox` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_kat_blog
CREATE TABLE IF NOT EXISTS `tb_kat_blog` (
  `id_kat_blog` varchar(10) NOT NULL,
  `nm_kat_blog` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_blog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_kat_blog: ~5 rows (approximately)
/*!40000 ALTER TABLE `tb_kat_blog` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kat_blog` (`id_kat_blog`, `nm_kat_blog`, `file_thumbnail`) VALUES
	('KT001', 'INSPIRASI', NULL),
	('KT002', 'TIPS', NULL),
	('KT003', 'BISNIS', NULL),
	('KT004', 'INFO', NULL),
	('KT005', 'DOWNLOAD', NULL);
/*!40000 ALTER TABLE `tb_kat_blog` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_kat_gallery
CREATE TABLE IF NOT EXISTS `tb_kat_gallery` (
  `id_kat_gallery` varchar(15) NOT NULL,
  `nm_kat_gallery` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_kat_gallery: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_kat_gallery` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kat_gallery` (`id_kat_gallery`, `nm_kat_gallery`, `file_thumbnail`) VALUES
	('KT001', 'Digital Printing', NULL),
	('KT002', 'Aqiqah', NULL),
	('KT003', 'Konveksi', NULL);
/*!40000 ALTER TABLE `tb_kat_gallery` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_kat_kegiatan
CREATE TABLE IF NOT EXISTS `tb_kat_kegiatan` (
  `id_kat_kegiatan` varchar(10) NOT NULL,
  `nm_kat_kegiatan` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_kat_kegiatan: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_kat_kegiatan` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kat_kegiatan` (`id_kat_kegiatan`, `nm_kat_kegiatan`, `file_thumbnail`) VALUES
	('KT001', 'Bisnis', NULL),
	('KT002', 'Training', NULL),
	('KT003', 'Kajian', NULL);
/*!40000 ALTER TABLE `tb_kat_kegiatan` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_kat_product
CREATE TABLE IF NOT EXISTS `tb_kat_product` (
  `id_kat_product` varchar(10) NOT NULL,
  `nm_kat_product` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_kat_product: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_kat_product` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kat_product` (`id_kat_product`, `nm_kat_product`, `file_thumbnail`) VALUES
	('KT001', 'Printing', NULL),
	('KT002', 'Aqiqah', NULL),
	('KT003', 'Konveksi', NULL);
/*!40000 ALTER TABLE `tb_kat_product` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_kegiatan
CREATE TABLE IF NOT EXISTS `tb_kegiatan` (
  `id_kegiatan` varchar(10) NOT NULL,
  `id_kat_kegiatan` varchar(10) DEFAULT NULL,
  `nm_kegiatan` varchar(150) DEFAULT NULL,
  `slug` text,
  `kontak_wa` varchar(15) NOT NULL,
  `tgl_kegiatan` date DEFAULT NULL,
  `file_thumbnail` text,
  `deskripsi` text,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_kegiatan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_kegiatan` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kegiatan` (`id_kegiatan`, `id_kat_kegiatan`, `nm_kegiatan`, `slug`, `kontak_wa`, `tgl_kegiatan`, `file_thumbnail`, `deskripsi`) VALUES
	('2021100001', 'KT002', 'AKADEMI VOLKAP - Kelas 4', 'akademi-volkap-kelas-4', '6281295949696', '2021-10-21', 'akademi-volkap-kelas-4-image.jpeg', ''),
	('2021100002', 'KT003', 'Manajemen Diri Dimasa Pandemi - Kajian Online', 'manajemen-diri-dimasa-pandemi-kajian-online', '6281295949696', '2021-10-24', 'manajemen-diri-dimasa-pandemi-kajian-online-image.jpeg', '<p><strong>KAJIAN ONLINE</strong><br />Bareng Karawang Peduli</p>\r\n<p>Pandemi Covid19 bertahun-tahun menemani kita, banyak perubahan-perubahan yang tidak pernah kita sangka sebelumnya, kesiapan diri kita menghadapi pandemi ini menjadi kunci utama agar kita terus berjuang, karena sejatinya Allah telah menetapkan semua ini. Lantas bagaimana cara terbaik bagi kita sebagai hamba-Nya merespon semua ini?</p>\r\n<p>Yuk ikuti Kajian Online bersama Karawang Peduli dengan tema :<br /><strong>"MANAJEMEN DIRI DIMASA PANDEMI"</strong><br />Bersama <br /><strong>UST. A. LUQMANUL HAQIEM</strong></p>\r\n<p>Moderator : <br /><strong>Rizki Abd. Jabbar</strong><br />====<br />FREE untuk UMUM!<br />====<br />????? Kamis, 30 September 2021<br />? 19.30 WIB s/d Selesai<br />???? Via Zoom Meeting</p>\r\n<p>Dapatkan Link Zoom dengan Klik : <br />https://bit.ly/kajianonlineKP </p>\r\n<p>Info :<br />???? 0859-3942-8697</p>'),
	('2021110001', 'KT002', 'AKADEMI VOLKAP - Kelas 5', 'akademi-volkap-kelas-5', '', '2021-11-27', 'akademi-volkap-kelas-5-image.jpeg', '<p>AKADEMI VOLKAP - Kelas V<br />proudly Present Karawang Peduli</p>\r\n<p>Dalam rangka mempersiapkan SDM relawan yang siap siaga menghadapi bencana, maka diperlukan pengetahuan dasar apa saja yang harus dilakukan relawan di komunitas/lembaga.</p>\r\n<p>Yuk sharing bareng Karawang Peduli dalam acara Akademi Volkap kelas V dengan Tema :</p>\r\n<p>"MANAJEMEN RELAWAN SIAGA BENCANA"</p>\r\n<p>Bersama &nbsp;:&nbsp;<br />Kang Irawan, S.Pd., M.Pd<br />(Satgas BPBD Karawang)</p>\r\n<p>Akan dilaksanakan pada :&nbsp;<br />????? Ahad, 28 November 2021<br />? 08.00 s/d Selesai<br />???? Aula Gedung Pengungsian PMI Desa Parungsari</p>\r\n<p>Registrasi :<br />https://bit.ly/daftarakademivolkap</p>\r\n<p>Benefit:<br />1. Ilmu Bermanfaat<br />2. Menambah Relasi<br />3. Sertifikat<br />4. Souvenir<br />5. Free Snack<br />6. Voucher Menarik (Bagi yang beruntung)</p>\r\n<p>HTM untuk umum : ???? Rp 35.000</p>\r\n<p>Peserta Terbatas, yuk daftar sekarang juga!!!</p>');
/*!40000 ALTER TABLE `tb_kegiatan` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_media
CREATE TABLE IF NOT EXISTS `tb_media` (
  `id_media` varchar(10) NOT NULL,
  `jenis_media` varchar(10) DEFAULT NULL,
  `file_media` text,
  `tgl_upload` date DEFAULT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_media: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_media` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_product
CREATE TABLE IF NOT EXISTS `tb_product` (
  `id_product` varchar(15) NOT NULL,
  `id_kat_product` varchar(10) DEFAULT NULL,
  `id_service` varchar(10) DEFAULT NULL,
  `nm_product` varchar(100) DEFAULT NULL,
  `slug` text,
  `satuan` varchar(20) DEFAULT NULL,
  `harga_satuan` varchar(12) DEFAULT NULL,
  `harga_discount` varchar(12) DEFAULT NULL,
  `discount_percent` varchar(3) DEFAULT NULL,
  `deskripsi` text,
  `file_gambar` text,
  `status_aktif` int(1) DEFAULT '0',
  `status_promo` int(1) DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_product: ~5 rows (approximately)
/*!40000 ALTER TABLE `tb_product` DISABLE KEYS */;
INSERT IGNORE INTO `tb_product` (`id_product`, `id_kat_product`, `id_service`, `nm_product`, `slug`, `satuan`, `harga_satuan`, `harga_discount`, `discount_percent`, `deskripsi`, `file_gambar`, `status_aktif`, `status_promo`, `tanggal`) VALUES
	('2021100001', 'KT001', 'SV001', 'Cetak Kop Amplop Surat BW/Colour', 'cetak-kop-amplop-surat-bwcolour', NULL, '650', NULL, NULL, '<p>KARRIZ STORE DIGITAL PRINTING PROMO MURAH !!!<br />Minimum Order 100pcs - FREE DESAIN >> minimal 1.000 pcs<br /><br />Perhatian!!!<br /><br />Spesifikasi :<br />- Size A : Amplop Putih Uk. 11x23 cm<br />- Size B :</p>\r\n<p>(tipe & ukuran lainnya bisa cek di etalase)</p>\r\n<p>Cara Pemesanan :<br />1. Lakukan Pembelian dan Pembayaran<br />2. Kirim File Gambar (Desain Anda) ke :</p>\r\n<p>* Ke email / wa (Tanya di Chat ya)<br />* Subject Pesan = Sesuai No.Invoice / No.Pesanan Anda.</p>\r\n<p>3. Proses Cetak > Pengiriman Silahkan Chat kami untuk informasi lebih lanjut.</p>\r\n<p>Kami Juga menerima Cetak : banner, spanduk, x-banner, roll banner, sticker, cetak brosur, flyer, pamflet, poster, map, amplop, kop surat, kartu nama, pin/ganci, id card, stempel, souvenir promosi, seminar kit, Print DTG, kaos, jaket, rompi, dll. Terimakasih.</p>\r\n<p>#kopsurat #cetakamplop #kopamplop #kopamplopmurah #cetakamplopmurah #printing #percetakan</p>', 'cetak-kop-amplop-image.png', 0, 0, '2021-10-17'),
	('2021100002', 'KT001', 'SV001', 'Cetak Foto Walldecor MDF', 'cetak-foto-walldecor-mdf', NULL, '20,000', NULL, NULL, '<p>Cetak Custom Foto/Poster Sesuai keinginan.</p>\r\n<p>Produk ini cocok buat foto wedding, foto pribadi, quote, atau lainnya untuk di pajang di meja atau dinding.<br />Sudah dipasang gantungan bingkai, jadi tinggal cantol aja ya kak ^_^</p>\r\n<p>Mohon Diperhatikan!<br />- Setelah Order Kirim Fotonya di WAaa /imeel ka.<br />- Usahakan kirim foto KUALITAS BAGUS / HD jika ingin hasil maksimal.<br />- Tidak menerima komplain saat barang sampai karena KITA HASIL SESUAI FOTO YANG DIKIRIM.<br />- Tidak ada Permintaan Konfirmasi Pesanan minta DI FOTOIN saat sudah selesai ka yaa...karena untuk mempercepat Proses pengerjaan dan Pengiriman.<br />- Estimasi Pengerjaan 2 hari kerja .<br />- Sudah di laminasi Doff / Matte<br />- Semua ukuran dikami menggunakan Papan Ketebalan 9 mm<br />- Tinggal dipajang langsung karena sudah dilengkapi dengan Gantungan Bingkai.<br />- Untuk Kerusakan yang diakibatkan oleh jasa kurir, kita tidak bisa bertanggung jawab ( tapi dari kita diberikan packing yang super baik + super tebal bisa mengurangin resiko kerusakan) dipastikan AMAN<br />- No return / complain jika terjadi kerusakan oleh pihak expedisi<br />- Setuju = Beli terimakasih :)</p>\r\n<p>Ukuran Cetak Foto Media MDF yang tersedia :<br />- 15x30 = 1 Kg muat 4 Foto<br />- 20x30 = 1 Kg muat 3 Foto<br />- 20x20 = 1 Kg muat 3 Foto<br />- 30x40 = 1 Kg muat 3 Foto</p>', 'cetak-foto-walldecor-mdf-image.png', 0, 0, '2021-10-30'),
	('2021100003', 'KT001', 'SV001', 'Cetak Stiker Cromo | A3 | MURAH !!!', 'cetak-stiker-cromo-a3-murah', NULL, '10,000', NULL, NULL, '<p>Spesifikasi :<br />- Ukuran A3+<br />- &nbsp;Bahan Cromo<br />- Cetak Fullcolour<br />- File siap cetak (format Pdf, psd, jpeg).<br />- Resolusi File Ideal 300 px / inch<br />- Minimal (10 lbr) dan kelipatannya<br />- Harga satuan langsung chat<br />- File Boleh Berbeda - Beda</p>\r\n<p>Lama Pengerjaan 1 HARI SELESAI</p>\r\n<p>WARNING !<br />1. File yang dikirim HARUS SESUAI ukuran ada di spesifikasi<br />2. File siap cetak TANPA EDIT<br />3. Kami cetak sesuai File yang dikirim tanpa MERUBAH FILE<br />4. Untuk Warna akan turun karena warna komputer dan hasil TIDAK AKAN SAMA PERSIS<br />5.Untuk Pemesanan lebih dari 100 ,harus kelipatan 4 (Misal 104 , 108 , 112 dan seterus nya )</p>', 'cetak-stiker-cromo-a3-murah-image.png', 0, 0, '2021-10-30'),
	('2021100004', 'KT001', 'SV001', 'Cetak Stiker Vinyl | A3 | MURAH !!!', 'cetak-stiker-vinyl-a3-murah', NULL, '15,000', NULL, NULL, '<p>Spesifikasi :<br />- Ukuran A3+<br />- &nbsp;Bahan Vinyl<br />- Cetak Fullcolour<br />- File siap cetak (format Pdf, psd, jpeg).<br />- Resolusi File Ideal 300 px / inch<br />- Minimal (10 lbr) dan kelipatannya<br />- Harga satuan chat langsung<br />- File Boleh Berbeda - Beda</p>\r\n<p>Lama Pengerjaan 1 HARI SELESAI</p>\r\n<p>WARNING !<br />1. File yang dikirim HARUS SESUAI ukuran ada di spesifikasi<br />2. File siap cetak TANPA EDIT<br />3. Kami cetak sesuai File yang dikirim tanpa MERUBAH FILE<br />4. Untuk Warna akan turun karena warna komputer dan hasil TIDAK AKAN SAMA PERSIS<br />5.Untuk Pemesanan lebih dari 100 ,harus kelipatan 4 (Misal 104 , 108 , 112 dan seterus nya )</p>', 'cetak-stiker-vinyl-a3-murah-image.png', 0, 0, '2021-10-30'),
	('2021100005', 'KT001', 'SV001', 'Stempel Otomatis Warna', 'stempel-otomatis-warna', NULL, '65,000', NULL, NULL, '<p>Produk Stempel Warna adalah stempel sudah siap pakai, sudah ada tinta didalamnya, tidak perlu pakai bantalan atau bak stempel lagi. Sangat praktis, kalau tintanya habis bisa diisi ulang.</p>\r\n<p>Bisa untuk 1-3 warna (disarankan maksimal 2 warna biar hasil optimal), pengerjaan cepat.</p>\r\n<p>Ukuran STANDAR : <br />- Bulat 28 mm <br />- Bulat 35 mm <br />- Bulat 40 mm <br />- Bulat 45 mm <br />- Persegi Panjang 13 x 43 mm <br />- Persegi Panjang 22 x 43 mm <br />- Persegi Panjang 27 x 43 mm <br />- Persegi Panjang 15 x 45 mm <br />- Persegi Panjang 13 x 55 mm <br />- Persegi Panjang 17 x 55 mm <br />- Persegi Panjang 22 x 55 mm <br />- Kotak 35 x 35 mm <br />- Oval 30 x 45 mm </p>\r\n<p>Ukuran diatas adalah ukuran gagang atau casing stempel.., dan utk hasil capnya lbh kecil 2,5mm dari ukuran gagang. misalnya ukuran gagang 40mm hasil capnya nanti 37,5mm. <br /><br />Warna Pilihan Merah, Biru Tua, Biru Muda, Hijau Tua, Hijau Muda, Orange, Kuning, Pink, Abu - Abu, Cokelat, Hitam, Ungu.<br /><br />Sebelum order silahkan tanya difitur chat...!!! untuk konfirmasi design dan pengeditan file. (Desain akan kami buat setelah pembayaran pesanan selesai dilakukan)</p>\r\n<p>&nbsp;</p>\r\n<p>#stempel #stempelkarawang #karawang #percetakankarawang #konveksikarawang #karriz.id #karriz #karrizkarawang</p>', 'stempel-otomatis-warna-image.png', 0, 1, '2021-10-30'),
	('2021100006', 'KT003', 'SV002', 'Kaos Custom Sablon DTF Premium', 'kaos-custom-sablon-dtf-premium', NULL, '55,000', NULL, NULL, '<p>[PROMO KAOS DESAIN SUKA-SUKA]</p>\r\n<p>Sudah termasuk :<br />- Kaos : Cotton Combed 30s, ukuran S-XL, XXL, XXXL<br />- Sablon : DTF High Quality Full Colour<br />- Sehari Beres!</p>\r\n<p>Bahan lembut, kualitas sablon terjamin, sablon full colour.</p>\r\n<p>#sablonkarawang #kaosdtf #kaoskarawang #konveksikarawang #cetakkaos #kaosmurah #sablonmurah&nbsp;</p>', 'kaos-custom-sablon-dtf-premium-image.png', 0, 1, '2021-10-30');
/*!40000 ALTER TABLE `tb_product` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_promo
CREATE TABLE IF NOT EXISTS `tb_promo` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `link_promo` text,
  `file_promo` text,
  `lokasi_banner` varchar(15) DEFAULT NULL,
  `status_aktif` int(11) DEFAULT '0',
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_promo: ~4 rows (approximately)
/*!40000 ALTER TABLE `tb_promo` DISABLE KEYS */;
INSERT IGNORE INTO `tb_promo` (`id_promo`, `link_promo`, `file_promo`, `lokasi_banner`, `status_aktif`) VALUES
	(2, 'https://www.domainesia.com/', 'COVER-ARTIKEL-ALT-100-6-Perbedaan-Spanduk-dan-Banner-Ukuran-Bahan-dan-Jenisnya-1024x426.png', 'Atas', 1),
	(3, 'https://www.domainesia.com/', 'COVER-ARTIKEL-ALT-100-6-Perbedaan-Spanduk-dan-Banner-Ukuran-Bahan-dan-Jenisnya-1024x4261.png', 'Atas', 1),
	(4, 'https://www.domainesia.com/', 'COVER-ARTIKEL-ALT-100-6-Perbedaan-Spanduk-dan-Banner-Ukuran-Bahan-dan-Jenisnya-1024x4262.png', 'Atas', 1),
	(5, 'https://www.domainesia.com/', 'COVER-ARTIKEL-ALT-100-6-Perbedaan-Spanduk-dan-Banner-Ukuran-Bahan-dan-Jenisnya-1024x4263.png', 'Bawah', 1);
/*!40000 ALTER TABLE `tb_promo` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_service
CREATE TABLE IF NOT EXISTS `tb_service` (
  `id_service` varchar(10) NOT NULL,
  `nm_service` varchar(150) DEFAULT NULL,
  `slug` text,
  `file_thumbnail` text,
  `deskripsi` text,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_service: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_service` DISABLE KEYS */;
INSERT IGNORE INTO `tb_service` (`id_service`, `nm_service`, `slug`, `file_thumbnail`, `deskripsi`) VALUES
	('SV001', 'Digital Printing', 'digital-printing', 'digital-printing-image.png', '<p>Melayani segala jenis cetak untuk kebutuhan promosi usaha anda, dengan mengutamakan kecepatan peoduksi, ketepatan produk yang sesuai keinginan dan harga yang bersahabat disesuaikan budget anda. </p>'),
	('SV002', 'Konveksi', 'konveksi', 'konveksi-image.png', ''),
	('SV003', 'Qurban', 'qurban', 'qurban-image.png', '<p><strong>Karriz Qurban </strong>siap melayani ibadah Qurban anda, menyediakan Domba & Sapi dengan kualitas terbaik</p>');
/*!40000 ALTER TABLE `tb_service` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_slideshow
CREATE TABLE IF NOT EXISTS `tb_slideshow` (
  `id_slideshow` varchar(15) NOT NULL,
  `link` text,
  `file_slideshow` text,
  `status_aktif` int(1) DEFAULT '1',
  PRIMARY KEY (`id_slideshow`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_slideshow: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_slideshow` DISABLE KEYS */;
INSERT IGNORE INTO `tb_slideshow` (`id_slideshow`, `link`, `file_slideshow`, `status_aktif`) VALUES
	('SL001', 'https://www.domainesia.com/', 'SL001-image.jpg', 1),
	('SL002', 'https://www.domainesia.com/', 'SL002-image.jpg', 1);
/*!40000 ALTER TABLE `tb_slideshow` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_testimoni
CREATE TABLE IF NOT EXISTS `tb_testimoni` (
  `id_testimoni` varchar(15) NOT NULL,
  `nm_testimoni` varchar(25) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  `testimoni` text,
  `tgl_testimoni` date DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_testimoni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_testimoni: ~8 rows (approximately)
/*!40000 ALTER TABLE `tb_testimoni` DISABLE KEYS */;
INSERT IGNORE INTO `tb_testimoni` (`id_testimoni`, `nm_testimoni`, `instansi`, `testimoni`, `tgl_testimoni`, `file_thumbnail`) VALUES
	('2021001', 'Karimah', '', 'Produknya mantaap, cepat beres, kualitas terbaik!', '2021-10-21', 'Karimah-image.png'),
	('2021002', 'Fajri', '', 'Cepet beres! bakal jadi langganan disini! Sesuai harapan produknya, CS nya ramah ', '2021-10-21', 'Fajri-image.png'),
	('2021003', 'Bima', '', 'kereeen,, suka sama produknya, pengerjaannya cepet, sesuai pesenan!', '2021-10-21', 'Bima-image.png'),
	('2022001', 'Lumayan', '', '', '2022-03-21', 'Lumayan-image.png'),
	('2022002', 'Exelent', '', '', '2022-03-21', 'Exelent-image.png'),
	('2022003', 'Arna', '', '', '2022-03-21', 'Arna-image.png'),
	('2022004', 'Muhamad', '', '', '2022-03-21', 'Muhamad-image.png'),
	('2022005', '7', '', '', '2022-03-21', '7-image.png');
/*!40000 ALTER TABLE `tb_testimoni` ENABLE KEYS */;

-- Dumping structure for table f_karriz_id.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `usr` varchar(20) DEFAULT NULL,
  `pswd` text,
  `status_aktif` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table f_karriz_id.tb_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT IGNORE INTO `tb_user` (`id_user`, `usr`, `pswd`, `status_aktif`) VALUES
	('001', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 1);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

-- Dumping structure for view f_karriz_id.v_blog
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_blog` (
	`id_blog` VARCHAR(10) NOT NULL COLLATE 'latin1_swedish_ci',
	`tgl_blog` DATE NULL,
	`judul_blog` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`author` VARCHAR(25) NULL COLLATE 'latin1_swedish_ci',
	`id_kat_blog` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`slug` TEXT NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` TEXT NULL COLLATE 'latin1_swedish_ci',
	`file_thumbnail` TEXT NULL COLLATE 'latin1_swedish_ci',
	`nm_kat_blog` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view f_karriz_id.v_gallery
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_gallery` (
	`id_gallery` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kat_gallery` VARCHAR(15) NULL COLLATE 'latin1_swedish_ci',
	`nm_gallery` VARCHAR(250) NULL COLLATE 'latin1_swedish_ci',
	`slug` TEXT NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` TEXT NULL COLLATE 'latin1_swedish_ci',
	`file_thumbnail` TEXT NULL COLLATE 'latin1_swedish_ci',
	`tgl_gallery` DATE NULL,
	`nm_kat_gallery` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`file_thumbnail_kat_gallery` TEXT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view f_karriz_id.v_kegiatan
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_kegiatan` (
	`id_kegiatan` VARCHAR(10) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kat_kegiatan` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`nm_kegiatan` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`slug` TEXT NULL COLLATE 'latin1_swedish_ci',
	`tgl_kegiatan` DATE NULL,
	`file_thumbnail` TEXT NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` TEXT NULL COLLATE 'latin1_swedish_ci',
	`nm_kat_kegiatan` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`file_kat_kegiatan` TEXT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view f_karriz_id.v_product
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_product` (
	`id_product` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kat_product` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`id_service` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`nm_product` VARCHAR(100) NULL COLLATE 'latin1_swedish_ci',
	`slug` TEXT NULL COLLATE 'latin1_swedish_ci',
	`satuan` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`harga_satuan` VARCHAR(12) NULL COLLATE 'latin1_swedish_ci',
	`harga_discount` VARCHAR(12) NULL COLLATE 'latin1_swedish_ci',
	`discount_percent` VARCHAR(3) NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` TEXT NULL COLLATE 'latin1_swedish_ci',
	`file_gambar` TEXT NULL COLLATE 'latin1_swedish_ci',
	`status_aktif` INT(1) NULL,
	`status_promo` INT(1) NULL,
	`tanggal` DATE NULL,
	`nm_kat_product` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`file_kat_kegiatan` TEXT NULL COLLATE 'latin1_swedish_ci',
	`nm_service` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`file_service` TEXT NULL COLLATE 'latin1_swedish_ci',
	`slug_service` TEXT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view f_karriz_id.v_blog
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_blog`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_blog` AS select `a`.`id_blog` AS `id_blog`,`a`.`tgl_blog` AS `tgl_blog`,`a`.`judul_blog` AS `judul_blog`,
`a`.`author` AS `author`,`a`.`id_kat_blog` AS `id_kat_blog`,`a`.`slug` AS `slug`,`a`.`deskripsi` AS `deskripsi`,`a`.`file_thumbnail` AS `file_thumbnail`,`b`.`nm_kat_blog` AS `nm_kat_blog` from (`tb_blog` `a` left join `tb_kat_blog` `b` on((`b`.`id_kat_blog` = `a`.`id_kat_blog`))) ;

-- Dumping structure for view f_karriz_id.v_gallery
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_gallery`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_gallery` AS SELECT
a.*, b.nm_kat_gallery, b.file_thumbnail AS file_thumbnail_kat_gallery FROM tb_gallery AS a
LEFT JOIN tb_kat_gallery AS b ON b.id_kat_gallery = a.id_kat_gallery ;

-- Dumping structure for view f_karriz_id.v_kegiatan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_kegiatan`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_kegiatan` AS SELECT a.*, b.nm_kat_kegiatan, b.file_thumbnail AS file_kat_kegiatan
FROM tb_kegiatan AS a
LEFT JOIN tb_kat_kegiatan AS b
ON a.id_kat_kegiatan = b.id_kat_kegiatan ;

-- Dumping structure for view f_karriz_id.v_product
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_product`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_product` AS SELECT a.*, b.nm_kat_product, b.file_thumbnail AS file_kat_kegiatan, c.nm_service, c.file_thumbnail AS file_service, c.slug AS slug_service  FROM tb_product AS a
LEFT JOIN tb_kat_product AS b ON b.id_kat_product = a.id_kat_product
LEFT JOIN tb_service AS c ON c.id_service = a.id_service ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
