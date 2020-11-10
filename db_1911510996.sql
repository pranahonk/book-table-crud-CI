-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_1911510996.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `kode` int(13) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `stock` int(2) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_1911510996.buku: ~7 rows (approximately)
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(1, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Gramedia Widiasarana Indonesia', 'Mark Manson', '2025-02-05', 70);
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(2, 'Mindset', 'PENERBIT BACA', 'Carol S. Dweck, Ph.d.', '2019-12-06', 10);
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(3, 'Sapiens', 'Kepustakaan Populer Gramedia', 'Yuval Noah Harari', '2020-09-08', 50);
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(4, 'Dilan 2: Dia Adalah Dilanku Tahun 1991', 'Mizan Publishing', 'Pidi Baiq', '2012-06-29', 55);
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(928, 'Test1', 'Test1', 'Test1', '2020-10-31', 100);
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(938, 'Cooking With Love Ala Dapur Momychaa', ' Gramedia Pustaka Utama', 'Icha Irawan', '2020-10-24', 15);
INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tanggal`, `stock`) VALUES
	(942, 'Sebuh seni untuk hacking', 'Gramedia', 'Andi', '2020-10-24', 20);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
