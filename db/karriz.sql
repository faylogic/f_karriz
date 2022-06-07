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

-- Dumping structure for table f_karriz.tb_blog
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

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_client
CREATE TABLE IF NOT EXISTS `tb_client` (
  `id_client` varchar(10) NOT NULL,
  `nm_client` varchar(10) DEFAULT NULL,
  `logo_client` text,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_contact
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

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_gallery
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

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_inbox
CREATE TABLE IF NOT EXISTS `tb_inbox` (
  `id_inbox` varchar(15) NOT NULL,
  `tgl` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id_inbox`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_kat_blog
CREATE TABLE IF NOT EXISTS `tb_kat_blog` (
  `id_kat_blog` varchar(10) NOT NULL,
  `nm_kat_blog` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_blog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_kat_gallery
CREATE TABLE IF NOT EXISTS `tb_kat_gallery` (
  `id_kat_gallery` varchar(15) NOT NULL,
  `nm_kat_gallery` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_kat_kegiatan
CREATE TABLE IF NOT EXISTS `tb_kat_kegiatan` (
  `id_kat_kegiatan` varchar(10) NOT NULL,
  `nm_kat_kegiatan` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_kat_product
CREATE TABLE IF NOT EXISTS `tb_kat_product` (
  `id_kat_product` varchar(10) NOT NULL,
  `nm_kat_product` varchar(150) DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_kat_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_kegiatan
CREATE TABLE IF NOT EXISTS `tb_kegiatan` (
  `id_kegiatan` varchar(10) NOT NULL,
  `id_kat_kegiatan` varchar(10) DEFAULT NULL,
  `nm_kegiatan` varchar(150) DEFAULT NULL,
  `slug` text,
  `tgl_kegiatan` date DEFAULT NULL,
  `file_thumbnail` text,
  `deskripsi` text,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_media
CREATE TABLE IF NOT EXISTS `tb_media` (
  `id_media` varchar(10) NOT NULL,
  `jenis_media` varchar(10) DEFAULT NULL,
  `file_media` text,
  `tgl_upload` date DEFAULT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_product
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
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_service
CREATE TABLE IF NOT EXISTS `tb_service` (
  `id_service` varchar(10) NOT NULL,
  `nm_service` varchar(150) DEFAULT NULL,
  `slug` text,
  `file_thumbnail` text,
  `deskripsi` text,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_testimoni
CREATE TABLE IF NOT EXISTS `tb_testimoni` (
  `id_testimoni` varchar(15) NOT NULL,
  `nm_testimoni` varchar(25) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  `testimoni` text,
  `tgl_testimoni` date DEFAULT NULL,
  `file_thumbnail` text,
  PRIMARY KEY (`id_testimoni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table f_karriz.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `usr` varchar(20) DEFAULT NULL,
  `pswd` text,
  `status_aktif` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for view f_karriz.v_blog
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

-- Dumping structure for view f_karriz.v_gallery
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

-- Dumping structure for view f_karriz.v_kegiatan
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

-- Dumping structure for view f_karriz.v_product
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
	`tanggal` DATE NULL,
	`nm_kat_product` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`file_kat_kegiatan` TEXT NULL COLLATE 'latin1_swedish_ci',
	`nm_service` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`file_service` TEXT NULL COLLATE 'latin1_swedish_ci',
	`slug_service` TEXT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view f_karriz.v_blog
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_blog`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_blog` AS select `a`.`id_blog` AS `id_blog`,`a`.`tgl_blog` AS `tgl_blog`,`a`.`judul_blog` AS `judul_blog`,
`a`.`author` AS `author`,`a`.`id_kat_blog` AS `id_kat_blog`,`a`.`slug` AS `slug`,`a`.`deskripsi` AS `deskripsi`,`a`.`file_thumbnail` AS `file_thumbnail`,`b`.`nm_kat_blog` AS `nm_kat_blog` from (`tb_blog` `a` left join `tb_kat_blog` `b` on((`b`.`id_kat_blog` = `a`.`id_kat_blog`))) ;

-- Dumping structure for view f_karriz.v_gallery
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_gallery`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_gallery` AS SELECT
a.*, b.nm_kat_gallery, b.file_thumbnail AS file_thumbnail_kat_gallery FROM tb_gallery AS a
LEFT JOIN tb_kat_gallery AS b ON b.id_kat_gallery = a.id_kat_gallery ;

-- Dumping structure for view f_karriz.v_kegiatan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_kegiatan`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_kegiatan` AS SELECT a.*, b.nm_kat_kegiatan, b.file_thumbnail AS file_kat_kegiatan
FROM tb_kegiatan AS a
LEFT JOIN tb_kat_kegiatan AS b
ON a.id_kat_kegiatan = b.id_kat_kegiatan ;

-- Dumping structure for view f_karriz.v_product
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_product`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_product` AS SELECT a.*, b.nm_kat_product, b.file_thumbnail AS file_kat_kegiatan, c.nm_service, c.file_thumbnail AS file_service, c.slug AS slug_service  FROM tb_product AS a
LEFT JOIN tb_kat_product AS b ON b.id_kat_product = a.id_kat_product
LEFT JOIN tb_service AS c ON c.id_service = a.id_service ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
