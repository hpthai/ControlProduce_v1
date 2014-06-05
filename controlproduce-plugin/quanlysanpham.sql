-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2014 at 01:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlysanpham`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `maDonHang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenNguoiDat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soDT` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(5) NOT NULL,
  PRIMARY KEY (`maDonHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `douong`
--

CREATE TABLE IF NOT EXISTS `douong` (
  `maSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `donGia` int(11) NOT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khaivi`
--

CREATE TABLE IF NOT EXISTS `khaivi` (
  `maSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `donGia` int(11) NOT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khaivi`
--

INSERT INTO `khaivi` (`maSP`, `tenSP`, `donGia`) VALUES
('RKV', 'Rượu khai vị', 55000),
('SBC', 'Súp bắp cua', 55999),
('SKTN', 'Súp khoai tây nghiền', 55000),
('SN', 'Súp nấm', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `monchinh`
--

CREATE TABLE IF NOT EXISTS `monchinh` (
  `maSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `donGia` int(11) NOT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trangmieng`
--

CREATE TABLE IF NOT EXISTS `trangmieng` (
  `maSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `donGia` int(11) NOT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
