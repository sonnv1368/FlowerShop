-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2013 at 10:40 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoatuoidep`
--

-- --------------------------------------------------------

--
-- Table structure for table `fl_caidat`
--

CREATE TABLE IF NOT EXISTS `fl_caidat` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tencauhinh` text CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `mota` text CHARACTER SET utf8 NOT NULL,
  `loai` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='lưu cấu hình cho web' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fl_caidat`
--

INSERT INTO `fl_caidat` (`ma`, `tencauhinh`, `noidung`, `mota`, `loai`) VALUES
(2, 'Ảnh banner', 'http://localhost/hoatuoidep/public/uploads/configs/banner-1.jpg http://localhost/hoatuoidep/public/uploads/configs/banner-2.jpg http://localhost/hoatuoidep/public/uploads/configs/banner-3.jpg http://localhost/hoatuoidep/public/uploads/configs/banner-4.jpg', '<p>Ảnh banner quảng c&aacute;o</p>', 'img');

-- --------------------------------------------------------

--
-- Table structure for table `fl_chitiet_donhang`
--

CREATE TABLE IF NOT EXISTS `fl_chitiet_donhang` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `masp` int(10) unsigned NOT NULL,
  `soluong` int(10) unsigned NOT NULL,
  `giathanh` int(10) unsigned NOT NULL,
  `ma_donhang` int(10) unsigned NOT NULL,
  `ngaytao` varchar(45) NOT NULL,
  `trangthai` text CHARACTER SET utf8 NOT NULL,
  `thanhtien` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=116 ;

--
-- Dumping data for table `fl_chitiet_donhang`
--

INSERT INTO `fl_chitiet_donhang` (`ma`, `masp`, `soluong`, `giathanh`, `ma_donhang`, `ngaytao`, `trangthai`, `thanhtien`) VALUES
(48, 56, 2, 700000, 50, '10-05-2013', 'Đã xử lý', 1400000),
(49, 35, 3, 900000, 51, '10-05-2013', 'Đã xử lý', 2700000),
(52, 50, 1, 1800000, 53, '10-05-2013', 'Đã xử lý', 1800000),
(53, 67, 3, 700000, 53, '10-05-2013', 'Đã xử lý', 2100000),
(54, 44, 1, 750000, 53, '10-05-2013', 'Đã xử lý', 750000),
(55, 70, 1, 750000, 54, '10-05-2013', 'Đã xử lý', 750000),
(56, 19, 17, 900000, 55, '10-05-2013', 'Đã xử lý', 15300000),
(57, 32, 15, 450000, 55, '10-05-2013', 'Đã xử lý', 6750000),
(58, 22, 1, 650000, 56, '10-05-2013', 'Đã xử lý', 650000),
(59, 27, 1, 350000, 57, '10-05-2013', 'Đã xử lý', 350000),
(60, 34, 1, 1000000, 57, '10-05-2013', 'Đã xử lý', 1000000),
(61, 46, 1, 2500000, 57, '10-05-2013', 'Đã xử lý', 2500000),
(62, 60, 1, 600000, 57, '10-05-2013', 'Đã xử lý', 600000),
(63, 71, 1, 1200000, 57, '10-05-2013', 'Đã xử lý', 1200000),
(64, 21, 1, 1200000, 57, '10-05-2013', 'Đã xử lý', 1200000),
(65, 82, 15, 150000, 58, '11-05-2013', 'Đã xử lý', 2250000),
(66, 34, 12, 1000000, 58, '11-05-2013', 'Đã xử lý', 12000000),
(67, 110, 15, 1200000, 58, '11-05-2013', 'Đã xử lý', 18000000),
(68, 52, 15, 500000, 58, '11-05-2013', 'Đã xử lý', 7500000),
(69, 121, 15, 1000000, 58, '11-05-2013', 'Đã xử lý', 15000000),
(70, 69, 15, 600000, 58, '11-05-2013', 'Đã xử lý', 9000000),
(71, 82, 1, 150000, 59, '11-05-2013', 'Đã xử lý', 150000),
(72, 34, 1, 1000000, 59, '11-05-2013', 'Đã xử lý', 1000000),
(73, 110, 1, 1200000, 59, '11-05-2013', 'Đã xử lý', 1200000),
(74, 121, 1, 1000000, 59, '11-05-2013', 'Đã xử lý', 1000000),
(75, 69, 1, 600000, 59, '11-05-2013', 'Đã xử lý', 600000),
(76, 35, 17, 900000, 60, '11-05-2013', 'Đã xử lý', 15300000),
(77, 75, 5, 1200000, 61, '12-05-2013', 'Đã xử lý', 6000000),
(78, 32, 1, 450000, 61, '12-05-2013', 'Chờ xử lý', 450000),
(79, 22, 2, 650000, 62, '03-04-2013', 'Đã xử lý', 1300000),
(80, 138, 1, 850000, 62, '03-04-2013', 'Đã xử lý', 850000),
(81, 145, 1, 900000, 62, '03-04-2013', 'Đã xử lý', 900000),
(82, 167, 1, 800000, 62, '03-04-2013', 'Đã xử lý', 800000),
(83, 160, 1, 1200000, 62, '03-04-2013', 'Đã xử lý', 1200000),
(84, 161, 1, 1300000, 62, '03-04-2013', 'Đã xử lý', 1300000),
(85, 22, 1, 650000, 63, '03-04-2013', 'Đã xử lý', 650000),
(86, 138, 1, 850000, 63, '03-04-2013', 'Đã xử lý', 850000),
(87, 167, 1, 800000, 63, '03-04-2013', 'Đã xử lý', 800000),
(88, 161, 1, 1300000, 63, '03-04-2013', 'Đã xử lý', 1300000),
(89, 164, 5, 1000000, 64, '12-03-2013', 'Đã xử lý', 5000000),
(90, 136, 1, 500000, 64, '12-03-2013', 'Đã xử lý', 500000),
(91, 137, 3, 1000000, 64, '12-03-2013', 'Đã xử lý', 3000000),
(92, 16, 1, 1000000, 65, '26-02-2013', 'Đã xử lý', 1000000),
(93, 17, 1, 800000, 65, '26-02-2013', 'Đã xử lý', 800000),
(94, 18, 1, 750000, 65, '26-02-2013', 'Đã xử lý', 750000),
(95, 167, 1, 800000, 66, '19-12-2012', 'Đã xử lý', 800000),
(96, 121, 1, 1000000, 66, '19-12-2012', 'Đã xử lý', 1000000),
(97, 47, 1, 500000, 66, '19-12-2012', 'Đã xử lý', 500000),
(98, 23, 1, 550000, 67, '19-12-2012', 'Đã xử lý', 550000),
(99, 24, 1, 1000000, 67, '19-12-2012', 'Đã xử lý', 1000000),
(100, 51, 1, 600000, 67, '19-12-2012', 'Đã xử lý', 600000),
(101, 139, 1, 900000, 68, '21-05-2013', 'Đã xử lý', 900000),
(102, 97, 1, 1600000, 68, '21-05-2013', 'Đã xử lý', 1600000),
(105, 16, 1, 1000000, 70, '23-05-2013', 'Đã xử lý', 1000000),
(106, 16, 1, 1000000, 71, '23-05-2013', 'Đã xử lý', 1000000),
(112, 91, 1, 1500000, 73, '24-05-2013', 'Đã xử lý', 1500000),
(113, 135, 1, 900000, 73, '24-05-2013', 'Đã xử lý', 900000),
(114, 65, 1, 900000, 74, '24-05-2013', 'Đã xử lý', 900000),
(115, 60, 1, 600000, 74, '24-05-2013', 'Đã xử lý', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `fl_danhmuc`
--

CREATE TABLE IF NOT EXISTS `fl_danhmuc` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tendanhmuc` text CHARACTER SET utf8 NOT NULL,
  `mota` text CHARACTER SET utf8 NOT NULL,
  `anh` text,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Lưu danh mục sản phẩm' AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fl_danhmuc`
--

INSERT INTO `fl_danhmuc` (`ma`, `tendanhmuc`, `mota`, `anh`) VALUES
(1, 'Hoa tình yêu', '<p>Hoa l&atilde;ng mạn cho c&aacute;c đ&ocirc;i t&igrave;nh nh&acirc;n</p>', 'http://localhost/hoatuoidep/public/uploads/products/Tang-nguoi-anh-yeu.jpg'),
(2, 'Hoa sinh nhật', '<p>C&aacute;c loại hoa sinh nhật, đẹp, dễ thương</p>', 'http://localhost/hoatuoidep/public/uploads/products/sn19.jpg'),
(3, 'Hoa chúc mừng', '<p>C&aacute;c loại hoa phục vụ cho lễ tết, hội h&egrave;....</p>', 'http://localhost/hoatuoidep/public/uploads/products/co5.jpg'),
(5, 'Hoa khai trương ', '<p>Lẵng hoa phục vụ khai trương cửa h&agrave;ng, nh&agrave; h&agrave;ng, c&ocirc;ng ty....</p>', 'http://localhost/hoatuoidep/public/uploads/products/415-516-thickbox_4.jpg'),
(6, 'Hoa sự kiện', '<p>Hoa d&agrave;nh cho những sự kiện lớn nhỏ</p>', 'http://localhost/hoatuoidep/public/uploads/products/12.jpg'),
(7, 'Hoa văn phòng', '<p>hoa d&agrave;nh cho những ph&ograve;ng l&agrave;m việc th&acirc;n thương v&agrave; sang trọng</p>', 'http://localhost/hoatuoidep/public/uploads/products/13.jpg'),
(8, 'Quà tặng', '<p>Qu&agrave; tặng d&agrave;nh cho những người m&agrave; m&igrave;nh y&ecirc;u thương</p>', 'http://localhost/hoatuoidep/public/uploads/products/12.jpg'),
(9, 'Hoa 20-11', '<p>Hoa d&agrave;nh cho những thầy c&ocirc; y&ecirc;u qu&yacute; của ch&uacute;ng m&igrave;nh</p>', 'http://localhost/hoatuoidep/public/uploads/products/15.jpg'),
(10, 'Hoa cưới', '<p>Hoa hạnh ph&uacute;c của mọi người</p>', 'http://localhost/hoatuoidep/public/uploads/products/23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fl_donhang`
--

CREATE TABLE IF NOT EXISTS `fl_donhang` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ma_kh` int(10) unsigned NOT NULL,
  `ngaytao` text CHARACTER SET utf8 NOT NULL,
  `noinhan` text CHARACTER SET utf8 NOT NULL,
  `nguoinhan` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `fl_donhang`
--

INSERT INTO `fl_donhang` (`ma`, `ma_kh`, `ngaytao`, `noinhan`, `nguoinhan`) VALUES
(50, 10, '10-05-2013', 'số 445 Minh Khai - Hà Nội', 'Gặp Phượng'),
(51, 10, '10-05-2013', 'Số nhà 445 Minh Khai - Hà Nội', 'Gặp Phượng'),
(53, 12, '10-05-2013', 'Số 45 Điện Biên Phủ - Hà Nội', 'Gặp Nam'),
(54, 13, '10-05-2013', '76 Đường Bưởi', 'Gặp Hoàng phòng hành chính'),
(55, 14, '10-05-2013', 'Số 9 Bạch Mai', 'Gặp Ngô Hằng'),
(56, 14, '10-05-2013', '34 Bạch Mai', 'Gặp Hằng'),
(57, 14, '10-05-2013', 'Số 7 Bạch Mai', ''),
(58, 16, '11-05-2013', '46 Xuân Thủy - Cầu Giấy', 'Gặp Tuyền'),
(59, 11, '11-05-2013', '45 Minh Khai', 'Gặp chị Hương'),
(60, 13, '11-05-2013', 'a', 'a'),
(61, 11, '12-05-2013', 'a', 's'),
(62, 19, '03-04-2013', '46 Bờ Hồ - Hà Nội', 'nhận hàng vào buổi chiều, gặp bạn Loan'),
(63, 20, '03-04-2013', 'số nhà 15 đường Nguyễn Văn Cừ', 'gặp bạn Hà'),
(64, 21, '12-03-2013', '50 Bạch Mai', 'gặp chú Quân'),
(65, 22, '26-02-2013', '57 Bạch Mai', 'Gặp hà'),
(66, 22, '19-12-2012', '57 Bạch Mai', ''),
(67, 12, '19-12-2012', '67 Nguyễn Trãi', 'gặp Nam'),
(68, 23, '21-05-2013', '45 Đại La', 'gặp Lan'),
(70, 19, '23-05-2013', '34 minh khai', 'gặp loan'),
(71, 19, '23-05-2013', 'a', 'a'),
(73, 24, '24-05-2013', '46 Quán Thánh', 'gặp Phương'),
(74, 19, '24-05-2013', '23 Minh Khai', 'gặp laon');

-- --------------------------------------------------------

--
-- Table structure for table `fl_khachhang`
--

CREATE TABLE IF NOT EXISTS `fl_khachhang` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `taikhoan` varchar(45) NOT NULL,
  `matkhau` varchar(45) NOT NULL,
  `tendaydu` text CHARACTER SET utf8,
  `gioitinh` text CHARACTER SET utf8 NOT NULL,
  `namsinh` varchar(45) DEFAULT NULL,
  `diachi` text CHARACTER SET utf8,
  `sodt` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `ngaytao` varchar(45) DEFAULT NULL,
  `tenhienthi` text CHARACTER SET utf8,
  `trangthai` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Lưu thông tin khách hàng đăng ký vào trang' AUTO_INCREMENT=25 ;

--
-- Dumping data for table `fl_khachhang`
--

INSERT INTO `fl_khachhang` (`ma`, `taikhoan`, `matkhau`, `tendaydu`, `gioitinh`, `namsinh`, `diachi`, `sodt`, `email`, `ngaytao`, `tenhienthi`, `trangthai`) VALUES
(11, 'nguyenhuong', '8ad507611e48c01724dbf45753476faa', 'Nguyễn Thu Hương', 'Nữ', '5/6/1993', '223 Cầu Giấy - Hà Nội', '09444666779', 'nguyenhuong@gmail.com', '13-05-2013', 'nguyenhuong', 1),
(12, 'trannam', '7019d2a06f838ea83e2d502a502e955d', 'Trần Nam', 'Nam', '9/4/1985', '46 Đường Láng - Cầu Giấy', '01238887776', 'trannam@gmail.com', '10-05-2013', 'Nam', 1),
(13, 'khanhhoang', 'ace3374f89ce2cbd2cbf13eddc5d1165', 'Khánh Hoàng', 'Nam', '9/9/1982', 'Hưng Yên', '0904568666', 'khanhhoang@gmail.com', '10-05-2013', 'Khánh Hoàng', 1),
(14, 'ngohang', '93addf8cc367389a2277a90b60365240', 'Ngô Hằng', 'Nữ', '6/6/1987', 'Số 7 Bạch Mai', '0947256888', 'ngohang@gmail.com', '10-05-2013', 'Ngô Hằng', 1),
(16, 'thanhtuyen', 'e41be255d114e8e51705dd5178238427', 'Thanh Tuyền', 'Nam', '9/9/1987', '76 Xuẩn Thủy - Cầu Giấy - Hà Nội', '0974555888', 'thanhtuyen@gmail.com', '11-05-2013', 'thanhtuyen', 1),
(17, 'ngochanh', '9016562b4162d393da61a41a0afda7be', 'Nguyễn Ngọc Hạnh', 'Nữ', '6/10/1991', 'Số 34 Xuân Thủy - Cầu Giấy - Hà Nội', '012345690', 'ngochanh123@gmail.com', '13-05-2013', 'ngochanh', 1),
(18, 'hoangyen', '7c1434f12f99039e81a662f0640686b4', 'Hoàng Yên', 'Nữ', '5/6/1991', '56 Nguyễn Trãi - Hà Nội', '0125666888', 'hoangyen@gmail.com', '12-05-2013', 'hoangyen', 1),
(19, 'loanloan', '4a8ede441a6ace2e83242ed5fd80f631', 'Nguyễn Loan', 'Nữ', '5/5/1991', '67 Bờ Hồ', '0123555888', 'loanloan@gmail.com', '03-04-2013', 'loanloan', 1),
(20, 'haha123', '01ddae4032e17a1c338baac9c4322b30', 'Trần Hà', 'Nam', '5/5/1989', 'Bắc Ninh', '0974666888', 'haha123@gmail.com', '03-04-2013', 'haha1123', 1),
(21, 'quanquan', '3585751fccbf7574e266bf4ac5e14485', 'Ngô Quân', 'Nam', '5/4/1968', '50 Bạch Mai', '0123999444', 'quanquan@gmail.com', '12-03-2013', 'quanquan', 1),
(22, 'tranhue', 'ec33f74390dd07d373f26d88fb872db4', 'Trần Thị Huệ', 'Nữ', '5/4/1991', 'Văn Giang - Hưng Yên', '0974068999', 'tranhue@gmail.com', '28-02-2013', 'tranhue', 1),
(23, 'ngolan', '22a0ed501bbc3b0dd55f3280cede8790', 'Ngô Lan', 'Nữ', '5/4/1991', 'Ngô Lan', '0123555888', 'ngolan@gmail.com', '21-05-2013', 'ngolan', 1),
(24, 'phuongphuong', '48b7647ec62860e0997283e99eda1b2b', 'Nguyễn Phượng', 'Nữ', '5/4/1991', '45 Xã Đàn', '0123547777', 'phuongphuong@gmail.com', '24-05-2013', 'phuongphuong', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fl_nhaphang`
--

CREATE TABLE IF NOT EXISTS `fl_nhaphang` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ma_sp` int(10) unsigned NOT NULL,
  `ngaynhap` varchar(45) NOT NULL,
  `soluong` int(10) unsigned NOT NULL,
  `giatien` int(10) unsigned NOT NULL,
  `thanhtien` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='thống kê lượt nhập hàng' AUTO_INCREMENT=172 ;

--
-- Dumping data for table `fl_nhaphang`
--

INSERT INTO `fl_nhaphang` (`ma`, `ma_sp`, `ngaynhap`, `soluong`, `giatien`, `thanhtien`) VALUES
(18, 16, '10-05-2013', 20, 700000, 14000000),
(19, 17, '10-05-2013', 20, 500000, 10000000),
(20, 18, '10-05-2013', 20, 450000, 9000000),
(21, 19, '10-05-2013', 20, 600000, 12000000),
(22, 20, '10-05-2013', 20, 300000, 6000000),
(23, 21, '10-05-2013', 20, 900000, 18000000),
(24, 22, '10-05-2013', 20, 350000, 7000000),
(25, 23, '10-05-2013', 20, 250000, 5000000),
(26, 24, '10-05-2013', 20, 700000, 14000000),
(27, 25, '10-05-2013', 20, 750000, 15000000),
(28, 26, '10-05-2013', 20, 600000, 12000000),
(29, 27, '10-05-2013', 20, 150000, 3000000),
(30, 28, '10-05-2013', 20, 450000, 9000000),
(31, 29, '10-05-2013', 20, 800000, 16000000),
(32, 30, '10-05-2013', 20, 40000, 800000),
(33, 31, '10-05-2013', 20, 30000, 600000),
(34, 32, '10-05-2013', 20, 150000, 3000000),
(35, 33, '10-05-2013', 20, 300000, 6000000),
(36, 34, '10-05-2013', 20, 700000, 14000000),
(37, 35, '10-05-2013', 20, 600000, 12000000),
(38, 36, '10-05-2013', 20, 850000, 17000000),
(39, 37, '10-05-2013', 20, 1500000, 30000000),
(40, 38, '10-05-2013', 20, 1200000, 24000000),
(41, 39, '10-05-2013', 20, 500000, 10000000),
(42, 40, '10-05-2013', 20, 300000, 6000000),
(43, 41, '10-05-2013', 20, 550000, 11000000),
(44, 42, '10-05-2013', 20, 700000, 14000000),
(45, 43, '10-05-2013', 20, 1000000, 20000000),
(46, 44, '10-05-2013', 20, 450000, 9000000),
(47, 45, '10-05-2013', 20, 600000, 12000000),
(48, 46, '10-05-2013', 20, 1800000, 36000000),
(49, 47, '10-05-2013', 20, 200000, 4000000),
(50, 48, '10-05-2013', 20, 600000, 12000000),
(51, 49, '10-05-2013', 20, 600000, 12000000),
(52, 50, '10-05-2013', 20, 600000, 12000000),
(53, 51, '10-05-2013', 20, 200000, 4000000),
(54, 52, '10-05-2013', 20, 100000, 2000000),
(55, 53, '10-05-2013', 20, 300000, 6000000),
(56, 54, '10-05-2013', 20, 500000, 10000000),
(57, 55, '10-05-2013', 20, 900000, 18000000),
(58, 56, '10-05-2013', 20, 300000, 6000000),
(59, 57, '10-05-2013', 20, 600000, 12000000),
(60, 58, '10-05-2013', 20, 900000, 18000000),
(61, 59, '10-05-2013', 20, 600000, 12000000),
(62, 60, '10-05-2013', 20, 200000, 4000000),
(63, 61, '10-05-2013', 20, 300000, 6000000),
(64, 62, '10-05-2013', 20, 600000, 12000000),
(65, 63, '10-05-2013', 20, 400000, 8000000),
(66, 63, '10-05-2013', 20, 600000, 12000000),
(67, 65, '10-05-2013', 20, 600000, 12000000),
(68, 66, '10-05-2013', 20, 500000, 10000000),
(69, 67, '10-05-2013', 20, 300000, 6000000),
(70, 68, '10-05-2013', 20, 200000, 4000000),
(71, 69, '10-05-2013', 20, 400000, 8000000),
(72, 70, '10-05-2013', 20, 350000, 7000000),
(73, 71, '10-05-2013', 20, 600000, 12000000),
(74, 72, '11-05-2013', 20, 500000, 10000000),
(75, 73, '11-05-2013', 20, 350000, 7000000),
(76, 74, '11-05-2013', 20, 200000, 4000000),
(77, 75, '11-05-2013', 20, 700000, 14000000),
(78, 76, '11-05-2013', 20, 450000, 9000000),
(79, 77, '11-05-2013', 20, 100000, 2000000),
(80, 78, '11-05-2013', 20, 450000, 9000000),
(81, 79, '11-05-2013', 20, 800000, 16000000),
(82, 80, '11-05-2013', 20, 350000, 7000000),
(83, 81, '11-05-2013', 20, 300000, 6000000),
(84, 82, '11-05-2013', 20, 900000, 18000000),
(85, 83, '11-05-2013', 20, 500000, 10000000),
(86, 84, '11-05-2013', 20, 250000, 5000000),
(87, 85, '11-05-2013', 20, 300000, 6000000),
(88, 86, '11-05-2013', 20, 500000, 10000000),
(89, 87, '11-05-2013', 20, 100000, 2000000),
(90, 88, '11-05-2013', 20, 200000, 4000000),
(91, 89, '11-05-2013', 20, 350000, 7000000),
(92, 90, '11-05-2013', 0, 0, 0),
(93, 91, '11-05-2013', 20, 900000, 18000000),
(94, 92, '11-05-2013', 20, 300000, 6000000),
(95, 93, '11-05-2013', 20, 250000, 5000000),
(96, 94, '11-05-2013', 20, 100000, 2000000),
(97, 95, '11-05-2013', 20, 500000, 10000000),
(98, 96, '11-05-2013', 20, 400000, 8000000),
(99, 97, '11-05-2013', 20, 900000, 18000000),
(100, 98, '11-05-2013', 20, 700000, 14000000),
(101, 99, '11-05-2013', 20, 500000, 10000000),
(102, 100, '11-05-2013', 20, 150000, 3000000),
(103, 101, '11-05-2013', 20, 600000, 12000000),
(104, 102, '11-05-2013', 20, 450000, 9000000),
(105, 103, '11-05-2013', 20, 350000, 7000000),
(106, 104, '11-05-2013', 20, 500000, 10000000),
(107, 105, '11-05-2013', 20, 150000, 3000000),
(108, 106, '11-05-2013', 20, 100000, 2000000),
(109, 107, '11-05-2013', 20, 450000, 9000000),
(110, 108, '11-05-2013', 20, 600000, 12000000),
(111, 109, '11-05-2013', 20, 800000, 16000000),
(112, 110, '11-05-2013', 20, 700000, 14000000),
(113, 111, '11-05-2013', 20, 500000, 10000000),
(114, 112, '11-05-2013', 20, 600000, 12000000),
(115, 113, '11-05-2013', 20, 200000, 4000000),
(116, 114, '11-05-2013', 20, 150000, 3000000),
(117, 115, '11-05-2013', 20, 450000, 9000000),
(118, 116, '11-05-2013', 20, 600000, 12000000),
(119, 117, '11-05-2013', 20, 100000, 2000000),
(120, 118, '11-05-2013', 20, 700000, 14000000),
(121, 119, '11-05-2013', 20, 200000, 4000000),
(122, 120, '11-05-2013', 20, 150000, 3000000),
(123, 121, '11-05-2013', 20, 600000, 12000000),
(124, 122, '11-05-2013', 20, 500000, 10000000),
(125, 123, '11-05-2013', 20, 550000, 11000000),
(126, 124, '11-05-2013', 20, 100000, 2000000),
(127, 125, '11-05-2013', 20, 400000, 8000000),
(128, 126, '11-05-2013', 20, 700000, 14000000),
(129, 127, '11-05-2013', 20, 300000, 6000000),
(130, 128, '11-05-2013', 20, 600000, 12000000),
(131, 128, '11-05-2013', 20, 600000, 12000000),
(132, 35, '11-05-2013', 20, 850000, 17000000),
(133, 131, '11-05-2013', 20, 400000, 8000000),
(134, 132, '12-05-2013', 20, 500000, 10000000),
(135, 133, '12-05-2013', 20, 300000, 6000000),
(136, 134, '12-05-2013', 0, 0, 0),
(137, 135, '12-05-2013', 20, 500000, 10000000),
(138, 136, '12-05-2013', 20, 150000, 3000000),
(139, 137, '12-05-2013', 20, 600000, 12000000),
(140, 138, '12-05-2013', 20, 400000, 8000000),
(141, 139, '18-05-2013', 20, 450000, 9000000),
(142, 140, '18-05-2013', 20, 200000, 4000000),
(143, 141, '18-05-2013', 0, 30000, 0),
(144, 142, '18-05-2013', 20, 200000, 4000000),
(145, 143, '18-05-2013', 20, 400000, 8000000),
(146, 144, '18-05-2013', 20, 900000, 18000000),
(147, 145, '18-05-2013', 20, 400000, 8000000),
(148, 146, '18-05-2013', 20, 700000, 14000000),
(149, 147, '18-05-2013', 20, 350000, 7000000),
(150, 148, '18-05-2013', 20, 850000, 17000000),
(151, 149, '18-05-2013', 20, 500000, 10000000),
(152, 150, '18-05-2013', 20, 500000, 10000000),
(153, 151, '18-05-2013', 20, 200000, 4000000),
(154, 152, '18-05-2013', 20, 300000, 6000000),
(155, 153, '18-05-2013', 20, 800000, 16000000),
(156, 154, '18-05-2013', 20, 700000, 14000000),
(157, 155, '18-05-2013', 20, 150000, 3000000),
(158, 156, '18-05-2013', 20, 200000, 4000000),
(159, 157, '18-05-2013', 20, 500000, 10000000),
(160, 158, '18-05-2013', 20, 200000, 4000000),
(161, 159, '18-05-2013', 20, 300000, 6000000),
(162, 160, '18-05-2013', 20, 800000, 16000000),
(163, 161, '18-05-2013', 20, 900000, 18000000),
(164, 162, '18-05-2013', 20, 400000, 8000000),
(165, 163, '18-05-2013', 20, 600000, 12000000),
(166, 164, '18-05-2013', 20, 700000, 14000000),
(167, 165, '18-05-2013', 20, 800000, 16000000),
(168, 166, '18-05-2013', 20, 150000, 3000000),
(169, 167, '18-05-2013', 20, 500000, 10000000),
(170, 160, '18-05-2013', 30, 900000, 27000000),
(171, 168, '24-05-2013', 20, 500000, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `fl_quantri`
--

CREATE TABLE IF NOT EXISTS `fl_quantri` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `taikhoan` varchar(45) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(45) CHARACTER SET utf8 NOT NULL,
  `tendaydu` text CHARACTER SET utf8 NOT NULL,
  `gioitinh` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `sodt` varchar(45) CHARACTER SET utf8 NOT NULL,
  `diachi` text CHARACTER SET utf8 NOT NULL,
  `ma_quyen` int(10) unsigned NOT NULL,
  `trangthai` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='chứa thông tin quản trị viên trên hệ thống' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fl_quantri`
--

INSERT INTO `fl_quantri` (`ma`, `taikhoan`, `matkhau`, `tendaydu`, `gioitinh`, `email`, `sodt`, `diachi`, `ma_quyen`, `trangthai`) VALUES
(5, 'tranhuong', '591495e93898eac31be227f5993b7a03', 'Trần Thị Hương', 'Nữ', 'tranhuong@gmail.com', '01236668885', 'Mễ Sở - Văn Giang - Hưng Yên', 2, 1),
(6, 'ngotuan', '63049e945e7737a52cd984f82ca51db0', 'Ngô Văn Tuấn', 'Nam', 'ngotuan', '0904222565', 'Số 56 Ba Đình - Hà Nội', 3, 1),
(7, 'nguyenphuong', '46cfd045e3dac5fa784ae05c8be6b924', 'Nguyễn Thị Phượng', 'Nữ', 'nguyenphuong3291@gmail.com', '0974064338', 'Số 228 - Minh Khai - Hai Bà Trưng - Hà Nội', 1, 1),
(8, '<div><./div>', '202cb962ac59075b964b07152d234b70', 'Phùng Hiếu Nghĩa', 'Nam', 'genki@yahoo.com', '6686868', 'nnnnnn', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fl_quyen`
--

CREATE TABLE IF NOT EXISTS `fl_quyen` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten` text CHARACTER SET utf8 NOT NULL,
  `mota` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Thông tin quyền hạn của khách hàng và nhân viên' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fl_quyen`
--

INSERT INTO `fl_quyen` (`ma`, `ten`, `mota`) VALUES
(1, 'Quản trị viên', 'Đầy dủ mọi quyền hạn trên hệ thống'),
(2, 'Quản lý sản phẩm', 'Xem, thêm, sửa xóa, sản phẩm trên hệ thống, quản lý đơn hàng'),
(3, 'Quản lý bài viết', 'xem sửa xóa bài viết trên hệ thống');

-- --------------------------------------------------------

--
-- Table structure for table `fl_sanpham`
--

CREATE TABLE IF NOT EXISTS `fl_sanpham` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tensp` text CHARACTER SET utf8 NOT NULL,
  `ma_danhmuc` int(10) unsigned NOT NULL,
  `soluong` int(10) unsigned NOT NULL,
  `ngaytao` varchar(45) NOT NULL,
  `giaban` int(10) unsigned NOT NULL,
  `gianhap` int(11) NOT NULL,
  `anh` text NOT NULL,
  `mota` text CHARACTER SET utf8 NOT NULL,
  `lanban` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='lưu thông tin sản phẩm' AUTO_INCREMENT=169 ;

--
-- Dumping data for table `fl_sanpham`
--

INSERT INTO `fl_sanpham` (`ma`, `tensp`, `ma_danhmuc`, `soluong`, `ngaytao`, `giaban`, `gianhap`, `anh`, `mota`, `lanban`) VALUES
(16, 'Hoa tình yêu 1', 1, 17, '20-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/ty1.JPG', '<p>Tr&aacute;i tim t&igrave;nh y&ecirc;u</p>', 3),
(17, 'hoa tình yêu 2', 1, 19, '18-05-2013', 800000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/ty2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(18, 'Hoa tình yêu 3', 1, 19, '17-05-2013', 750000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/ty3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(19, 'Hoa tình yêu 4', 1, 2, '18-05-2013', 900000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/ty4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(20, 'Hoa tình yêu 5', 1, 20, '20-05-2013', 600000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/ty5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(21, 'Hoa tình yêu 6', 1, 19, '20-05-2013', 1200000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/ty6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(22, 'Hoa tình yêu 7', 1, 4, '20-05-2013', 650000, 350000, 'http://localhost/hoatuoidep/public/uploads/products/ty7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 3),
(23, 'Hoa sinh nhật 1', 2, 19, '18-05-2013', 550000, 250000, 'http://localhost/hoatuoidep/public/uploads/products/sn1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(24, 'Hoa sinh nhật 2', 2, 19, '15-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/sn2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(26, 'Hoa sinh nhật 4', 2, 20, '20-05-2013', 900000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/sn4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(27, 'Hoa sinh nhật 5', 2, 19, '20-03-2013', 350000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/sn5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(28, 'Hoa sinh nhật 6', 2, 20, '24-05-2013', 750000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/sn6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(29, 'Hoa sinh nhật 7', 2, 20, '20-05-2013', 1100000, 800000, 'http://localhost/hoatuoidep/public/uploads/products/sn7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(38, 'Hoa khai trương 2', 5, 20, '20-05-2013', 1500000, 1200000, 'http://localhost/hoatuoidep/public/uploads/products/kt2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(39, 'Hoa khai trương 3', 5, 20, '24-05-2013', 800000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/kt3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(40, 'Hoa khai trương 4', 5, 20, '22-05-2013', 700000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/kt4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(41, 'Hoa khai trương 5', 5, 20, '22-05-2013', 850000, 550000, 'http://localhost/hoatuoidep/public/uploads/products/kt5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(42, 'Hoa khai trương 6', 5, 20, '22-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/kt6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(43, 'Hoa khai trương 7', 5, 20, '20-05-2013', 1300000, 1000000, 'http://localhost/hoatuoidep/public/uploads/products/kt7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(44, 'Hoa sự kiện 1', 6, 19, '22-05-2013', 750000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/sk1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(45, 'Hoa sự kiện 2', 6, 20, '22-05-2013', 900000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/sk2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(46, 'Hoa sự kiện 3', 6, 19, '22-05-2013', 2500000, 1800000, 'http://localhost/hoatuoidep/public/uploads/products/sk3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(47, 'Hoa sự kiện 4', 6, 19, '22-05-2013', 500000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/sk4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(48, 'Hoa sự kiện 5', 6, 20, '22-05-2013', 1200000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/sk5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(49, 'Hoa sự kiện 6', 6, 20, '20-05-2013', 1500000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/sk6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(50, 'Hoa sự kiện 7', 6, 19, '22-05-2013', 1800000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/sk7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(51, 'Hoa văn phòng 1', 7, 19, '15-05-2013', 600000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/vp1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(52, 'Hoa văn phòng 2', 7, 5, '24-05-2013', 500000, 100000, 'http://localhost/hoatuoidep/public/uploads/products/vp2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(53, 'Hoa văn phòng 3', 7, 20, '24-05-2013', 800000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/vp3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(54, 'Hoa văn phòng 4', 7, 20, '22-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/vp4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(55, 'Hoa văn phòng 5', 7, 20, '22-05-2013', 1500000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/vp5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(56, 'Hoa văn phòng 6', 7, 18, '22-05-2013', 700000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/vp6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(57, 'Hoa văn phòng 7', 7, 20, '22-05-2013', 1100000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/vp7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(58, 'Quà tặng 1', 8, 20, '22-05-2013', 1300000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/qt1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(59, 'Quà tặng 2', 8, 20, '22-05-2013', 1200000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/qt2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(60, 'Quà tặng 3', 8, 18, '22-05-2013', 600000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/qt3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(61, 'Quà tặng 4', 8, 20, '22-05-2013', 900000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/qt4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(62, 'Quà tặng 5', 8, 20, '22-05-2013', 1300000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/qt5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(63, 'Quà tặng 7', 8, 20, '24-05-2013', 800000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/qt6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(64, 'Quà tặng 7', 8, 20, '15-05-2013', 1100000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/qt7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(65, 'Hoa 20-11 1', 9, 19, '24-05-2013', 900000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/co1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(66, 'Hoa 20-11 2', 9, 20, '24-05-2013', 700000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/co2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(67, 'Hoa 20-11 3', 9, 17, '15-05-2013', 700000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/co3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(68, 'Hoa 20-11 4', 9, 20, '19-05-2013', 700000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/co4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(69, 'Hoa 20-11 5', 9, 4, '24-05-2013', 600000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/co5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(70, 'Hoa 20-11 6', 9, 19, '22-05-2013', 750000, 350000, 'http://localhost/hoatuoidep/public/uploads/products/co6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(71, 'Hoa 20-11 7', 9, 19, '22-05-2013', 1200000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/co7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(72, 'Hoa tình yêu 8', 1, 20, '22-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/ty8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(73, 'hoa tình yêu 9', 1, 20, '22-05-2013', 600000, 350000, 'http://localhost/hoatuoidep/public/uploads/products/ty9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(74, 'hoa tình yêu 10', 1, 20, '24-05-2013', 600000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/ty10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(75, 'Hoa tình yêu 11', 1, 15, '16-05-2013', 1200000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/ty11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(76, 'Hoa tình yêu 12', 1, 20, '24-05-2013', 900000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/ty12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(77, 'Hoa sinh nhật 8', 2, 20, '20-05-2013', 400000, 100000, 'http://localhost/hoatuoidep/public/uploads/products/sn8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(78, 'Hoa sinh nhật 9', 2, 20, '24-05-2013', 800000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/sn9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(79, 'Hoa sinh nhật 10', 2, 20, '24-05-2013', 1200000, 800000, 'http://localhost/hoatuoidep/public/uploads/products/sn10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(80, 'Hoa sinh nhật 11', 2, 20, '15-05-2013', 700000, 350000, 'http://localhost/hoatuoidep/public/uploads/products/sn11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(81, 'Hoa sinh nhật 12', 2, 20, '24-05-2013', 600000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/sn12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(82, 'Hoa sinh nhật 13', 2, 4, '24-05-2013', 150000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/sn13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(83, 'Hoa sinh nhật 14', 2, 20, '24-05-2013', 800000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/sn14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(91, 'Hoa khai trương 8', 5, 19, '24-05-2013', 1500000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/kt8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(92, 'Hoa khai trương 9', 5, 20, '24-05-2013', 700000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/kt9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(93, 'Hoa khai trương 10', 5, 20, '24-05-2013', 800000, 250000, 'http://localhost/hoatuoidep/public/uploads/products/kt10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(94, 'Hoa khai trương 11', 5, 20, '24-05-2013', 500000, 100000, 'http://localhost/hoatuoidep/public/uploads/products/kt11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(95, 'Hoa khai trương 12', 5, 20, '24-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/kt12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(96, 'Hoa khai trương 13', 5, 20, '24-05-2013', 700000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/kt13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(97, 'Hoa khai trương 14', 5, 19, '24-05-2013', 1600000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/kt14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(98, 'Hoa khai trương 15', 5, 20, '24-05-2013', 1100000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/kt15.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(99, 'Hoa sự kiện 8', 6, 20, '24-05-2013', 200000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/sk8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(100, 'Hoa sự kiện 9', 6, 20, '20-05-2013', 500000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/sk9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(101, 'Hoa sự kiện 10', 6, 20, '20-05-2013', 1200000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/sk10.png', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(102, 'Hoa sự kiện 11', 6, 20, '20-05-2013', 850000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/sk11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(103, 'Hoa sự kiện 12', 6, 20, '20-05-2013', 600000, 350000, 'http://localhost/hoatuoidep/public/uploads/products/sk12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(104, 'Hoa sự kiện 13', 6, 20, '20-05-2013', 1000000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/sk13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(105, 'Hoa văn phòng 8', 7, 20, '20-05-2013', 500000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/vp8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(106, 'Hoa văn phòng 9', 7, 20, '20-05-2013', 450000, 100000, 'http://localhost/hoatuoidep/public/uploads/products/vp9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(107, 'Hoa văn phòng 10', 7, 20, '22-05-2013', 800000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/vp10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(108, 'Hoa văn phòng 11', 7, 20, '20-05-2013', 950000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/vp11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(109, 'Hoa văn phòng 12', 7, 20, '20-05-2013', 1400000, 800000, 'http://localhost/hoatuoidep/public/uploads/products/vp12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(110, 'Hoa văn phòng 13', 7, 4, '15-05-2013', 1200000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/vp13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(111, 'Hoa văn phòng 14', 7, 20, '20-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/vp14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(112, 'Hoa văn phòng 15', 7, 20, '15-05-2013', 1000000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/vp15.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(113, 'Quà tặng 8', 8, 20, '20-05-2013', 500000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/qt8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(114, 'Quà tặng 9', 8, 20, '20-05-2013', 450000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/qt9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(115, 'Quà tặng 10', 8, 20, '20-05-2013', 800000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/qt10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(116, 'Quà tặng 11', 8, 20, '20-05-2013', 900000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/qt11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(117, 'Quà tặng 12', 8, 20, '22-05-2013', 350000, 100000, 'http://localhost/hoatuoidep/public/uploads/products/qt12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(118, 'Quà tặng 13', 8, 20, '22-05-2013', 1100000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/qt13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(119, 'Hoa 20-11 8', 9, 20, '22-05-2013', 500000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/co8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(120, 'Hoa 20-11 9', 9, 20, '22-05-2013', 450000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/co9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(121, 'Hoa 20-11 10', 9, 3, '18-05-2013', 1000000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/co10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 3),
(122, 'Hoa 20-11 11', 9, 20, '18-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/co11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(123, 'Hoa 20-11 12', 9, 20, '18-05-2013', 1400000, 550000, 'http://localhost/hoatuoidep/public/uploads/products/co12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(124, 'Hoa 20-11 13', 9, 20, '18-05-2013', 350000, 100000, 'http://localhost/hoatuoidep/public/uploads/products/co13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(125, 'Hoa 20-1114', 9, 20, '18-05-2013', 800000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/co14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(126, 'Hoa 20-11 15', 9, 20, '18-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/co15.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(127, 'Hoa 20-11 16', 9, 20, '18-05-2013', 650000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/co16.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(128, 'Hoa 20-11 17', 9, 20, '18-05-2013', 950000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/co17.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(131, 'Hoa văn phòng 16', 7, 20, '18-05-2013', 800000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/vp16.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(132, 'Hoa sinh nhật 15', 2, 20, '18-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/sn15.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(135, 'Hoa khai trương 16', 5, 19, '18-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/kt16.png', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(136, 'Hoa sự kiện 14', 6, 19, '15-05-2013', 500000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/sk14.png', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(137, 'Hoa văn phòng 17', 7, 17, '18-05-2013', 1000000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/vp17.png', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(138, 'Hoa 20-11 18', 9, 18, '18-05-2013', 850000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/co18.png', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(139, 'Hoa tình yêu 13', 1, 19, '18-05-2013', 900000, 450000, 'http://localhost/hoatuoidep/public/uploads/products/ty13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(140, 'Hoa tình yêu 15', 1, 20, '18-05-2013', 500000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/ty14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(141, 'Hoa cưới 1', 10, 2, '18-05-2013', 90000, 30000, 'http://localhost/hoatuoidep/public/uploads/products/c1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(142, 'Hoa cưới 2', 10, 20, '18-05-2013', 800000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/c2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(143, 'Hoa cưới 3', 10, 20, '18-05-2013', 700000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/c3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(144, 'Hoa cưới 4', 10, 20, '18-05-2013', 120000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/c4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(145, 'Hoa cưới 5', 10, 19, '15-05-2013', 900000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/c5.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(146, 'Hoa cưới 6', 10, 20, '18-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/c6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(147, 'Hoa cưới 7', 10, 20, '18-05-2013', 600000, 350000, 'http://localhost/hoatuoidep/public/uploads/products/c7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(148, 'Hoa cưới 8', 10, 20, '18-05-2013', 1100000, 850000, 'http://localhost/hoatuoidep/public/uploads/products/c8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(149, 'Hoa cưới 9', 10, 20, '18-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/c9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(150, 'Hoa cưới 10', 10, 20, '18-05-2013', 800000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/c10.jpeg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(151, 'Hoa cưới 11', 10, 20, '18-05-2013', 500000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/c11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(152, 'hoa cưới 12', 10, 20, '18-05-2013', 700000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/c12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(153, 'Hoa cưới 13', 10, 20, '18-05-2013', 1300000, 800000, 'http://localhost/hoatuoidep/public/uploads/products/c13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(154, 'Hoa cưới 14', 10, 20, '18-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/c14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(155, 'Hoa chúc mừng 1', 3, 20, '18-05-2013', 500000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/cm1.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(156, 'Hoa chúc mừng 2', 3, 20, '18-05-2013', 600000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/cm2.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(157, 'Hoa chúc mừng 3', 3, 20, '18-05-2013', 800000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/cm3.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(158, 'Hoa chúc mừng 4', 3, 20, '18-05-2013', 500000, 200000, 'http://localhost/hoatuoidep/public/uploads/products/cm4.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(159, 'Hoa chúc mừng 6', 3, 20, '18-05-2013', 700000, 300000, 'http://localhost/hoatuoidep/public/uploads/products/cm6.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(160, 'hoa chúc mừng 7', 3, 29, '15-05-2013', 1200000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/cm7.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(161, 'Hoa chúc mừng 8', 3, 3, '18-05-2013', 1300000, 900000, 'http://localhost/hoatuoidep/public/uploads/products/cm8.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 2),
(162, 'Hoa chúc mừng 9', 3, 20, '18-05-2013', 800000, 400000, 'http://localhost/hoatuoidep/public/uploads/products/cm9.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(163, 'Hoa chúc mừng 10', 3, 20, '18-05-2013', 900000, 600000, 'http://localhost/hoatuoidep/public/uploads/products/cm10.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(164, 'Hoa chúc mừng 11', 3, 15, '18-05-2013', 1000000, 700000, 'http://localhost/hoatuoidep/public/uploads/products/cm11.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 1),
(165, 'Hoa chúc mừng 12', 3, 20, '18-05-2013', 1200000, 800000, 'http://localhost/hoatuoidep/public/uploads/products/cm12.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(166, 'Hoa chúc mừng 13', 3, 20, '18-05-2013', 450000, 150000, 'http://localhost/hoatuoidep/public/uploads/products/cm13.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0),
(167, 'Hoa chúc mừng 14', 3, 17, '18-05-2013', 800000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/cm14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 3),
(168, 'Hoa chúc mừng 15', 3, 20, '24-05-2013', 900000, 500000, 'http://localhost/hoatuoidep/public/uploads/products/cm14.jpg', '<p>Nhập m&ocirc; tả cho danh mục</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fl_tintuc`
--

CREATE TABLE IF NOT EXISTS `fl_tintuc` (
  `ma` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tieude` text CHARACTER SET utf8 NOT NULL,
  `tieudengan` text CHARACTER SET utf8,
  `tacgia` text CHARACTER SET utf8 NOT NULL,
  `ngaytao` varchar(45) NOT NULL,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `trangthai` int(10) unsigned NOT NULL,
  `loai_tin` varchar(45) NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Bài viết, tin tức' AUTO_INCREMENT=38 ;

--
-- Dumping data for table `fl_tintuc`
--

INSERT INTO `fl_tintuc` (`ma`, `tieude`, `tieudengan`, `tacgia`, `ngaytao`, `noidung`, `trangthai`, `loai_tin`) VALUES
(29, 'Bỏ ra 26 năm để biến nhà thành “vương quốc của những loài hoa”', NULL, 'nguyenphuong', '18/05/2013', '<div class="article-tools clearfix" style="margin: 0px; padding: 0px; border: 0px; font-size: 11px; clear: both; position: relative; color: #333333; font-family: Arial, Helvetica, sans-serif; text-align: left;">\n<ul class="actions" style="margin: 0px; padding: 0px; border: 0px; list-style: none; float: right;">\n<li class="print-icon" style="margin: 0px; padding: 0px; border: 0px; background-image: none; line-height: 1; overflow: hidden; display: inline; background-position: initial initial; background-repeat: initial initial;"><a style="margin: 0px; padding: 0px; border: 0px; color: #333333; text-decoration: none;" title="In b&agrave;i n&agrave;y" href="http://dienhoa247.vn/chuyen-muc-hoa/tin-tuc-su-kien/77-bo-ra-26-nam-de-bien-nha-thanh-vuong-quoc-cua-nhung-loai-hoa.html?tmpl=component&amp;print=1&amp;layout=default&amp;page=" rel="nofollow"><br /><br /></a></li>\n</ul>\n</div>\n<p>&nbsp;</p>\n<p>&Ocirc;ng b&agrave; Strange đ&atilde; bắt đầu qu&aacute; tr&igrave;nh cải tạo v&agrave; biến nh&agrave; m&igrave;nh trở th&agrave;nh một vườn hoa tr&agrave;n ngập m&agrave;u sắc từ c&aacute;ch đ&acirc;y 26 năm. Cặp đ&ocirc;i n&agrave;y đ&atilde; bỏ ra h&agrave;ng trăm bảng Anh mỗi năm để mua hạt giống v&agrave; hoa, nu&ocirc;i dưỡng b&ecirc;n trong nh&agrave; k&iacute;nh trước trước khi trang tr&iacute; v&agrave; đặt ch&uacute;ng l&ecirc;n căn nh&agrave; của m&igrave;nh.</p>\n<p>&nbsp;</p>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;" align="center"><a style="margin: 0px; padding: 0px; border: 0px; color: #333333; text-decoration: none;" href="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/1.jpg" rel="lightbox[roadtrip]"><img style="margin: 0px auto; padding: 0px; max-width: 526px; display: block;" src="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/1.jpg" alt="" width="415" height="447" border="0" /></a></div>\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;">&nbsp;Căn nh&agrave; tuyệt đẹp v&agrave; tr&agrave;n ngập m&agrave;u sắc hoa của &ocirc;ng b&agrave; Strange</p>\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;">&ldquo;Ch&uacute;ng t&ocirc;i đ&atilde; từng chứng kiến những giỏ hoa đầy m&agrave;u sắc hết sức đẹp mắt. Điều n&agrave;y đ&atilde; truyền cảm hứng cho ch&uacute;ng t&ocirc;i trang tr&iacute; căn nh&agrave; m&igrave;nh tr&agrave;n ngập m&agrave;u hoa&rdquo;, b&agrave; Strange, năm nay đ&atilde; 65 tuổi, cho biết. &ldquo;Ch&uacute;ng t&ocirc;i đ&atilde; trồng ng&agrave;y c&agrave;ng nhiều hoa cho căn hộ của m&igrave;nh&rdquo;.<br /><br />Căn nh&agrave; tuyệt đẹp của cặp vợ chồng đ&atilde; thu h&uacute;t sự ch&uacute; &yacute; của bất kỳ ai l&aacute;i&nbsp;xe&nbsp;ngang qua nh&agrave; họ. Những ai chứng kiến đều th&iacute;ch th&uacute; v&agrave; th&aacute;n phục với căn nh&agrave; đầy m&agrave;u sắc của những lo&agrave;i hoa.</p>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;" align="center"><a style="margin: 0px; padding: 0px; border: 0px; color: #333333; text-decoration: none;" href="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/2.jpg" rel="lightbox[roadtrip]"><img style="margin: 0px auto; padding: 0px; max-width: 526px; display: block;" src="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/2.jpg" alt="" border="0" /></a>&nbsp;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="center">Ngay từ năm 1988, căn nh&agrave; của &ocirc;ng b&agrave; Strange&nbsp;đ&atilde; trở n&ecirc;n xinh đẹp v&agrave; tr&agrave;n ngập hoa</div>\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;">Một người phụ nữ thậm ch&iacute; c&ograve;n gửi tặng cho cặp vợ chồng n&agrave;y phiếu mua h&agrave;ng giảm gi&aacute; v&agrave;o mỗi dịp Gi&aacute;ng sinh, như một c&aacute;ch để b&agrave;y tỏ sự biết ơn cho việc tạo ra một cảnh tượng đẹp như vậy.<br /><br />&ldquo;Mọi người th&iacute;ch th&uacute; cảnh tượng n&agrave;y. Ch&uacute;ng t&ocirc;i gửi được những tấm thiệp cảm ơn của cả những người m&agrave; ch&uacute;ng t&ocirc;i chưa bao giờ gặp&rdquo;, b&agrave; Strange cho biết th&ecirc;m.<br /><br />Hiện vẫn đang hoạt động tại c&aacute;c tổ chức x&atilde; hội, do vậy &ocirc;ng b&agrave; Strange chỉ c&ograve;n thời gian buổi tối v&agrave; những ng&agrave;y cuối tuần để chăm s&oacute;c cho vườn hoa của m&igrave;nh..<br /><br />&ldquo;Ch&uacute;ng t&ocirc;i chưa từng nghĩ đến số tiền m&agrave; m&igrave;nh đ&atilde; bỏ ra cho khu vườn n&agrave;y, tuy nhi&ecirc;n chắc hẳn rằng n&oacute; sẽ rất lớn.&rdquo;, b&agrave; Strange n&oacute;i. &ldquo;D&ugrave; vậy, điều n&agrave;y ho&agrave;n to&agrave;n xứng đ&aacute;ng. Ch&uacute;ng t&ocirc;i rất h&agrave;i l&ograve;ng với những g&igrave; m&igrave;nh đ&atilde; tạo ra&rdquo;.<br /><br /></p>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;" align="center"><a style="margin: 0px; padding: 0px; border: 0px; color: #333333; text-decoration: none;" href="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/3.jpg" rel="lightbox[roadtrip]"><img style="margin: 0px auto; padding: 0px; max-width: 526px; display: block;" src="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/3.jpg" alt="" border="0" /></a>&nbsp;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="center">&nbsp;Bất kỳ ai l&aacute;i xe qua căn nh&agrave; đều kh&ocirc;ng thể kh&ocirc;ng ch&uacute; &yacute;</div>\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: left;">Hiện cặp vợ chồng Strange kh&ocirc;ng phải lo lắng về qu&aacute; tr&igrave;nh tưới ti&ecirc;u cho khu vườn hoa của m&igrave;nh nhờ v&agrave;o một hệ thống thủy lợi, sẽ gi&uacute;p họ tưới ti&ecirc;u tự động cho khu vườn.<br /><br />&Ocirc;ng b&agrave; Strange cho biết vẫn chưa c&oacute; &yacute; định ngừng ph&aacute;t triển khu vườn v&agrave; khẳng định sẽ tiếp tục bổ sung những lo&agrave;i hoa mới để cho khu vườn th&ecirc;m sinh động v&agrave; đẹp mắt.<br /><br /></p>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;" align="center"><a style="margin: 0px; padding: 0px; border: 0px; color: #f7688d; text-decoration: none;" href="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/4.jpg" rel="lightbox[roadtrip]"><img style="margin: 0px auto; padding: 0px; max-width: 526px; display: block;" src="http://img.2sao.vietnamnet.vn/2012/08/18/10/01/4.jpg" alt="" border="0" /></a>&nbsp;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="center">&nbsp;&Ocirc;ng b&agrave; Strange vẫn tiếp tục muốn mở rộng vườn hoa của m&igrave;nh</div>\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px;">&nbsp;</p>', 1, 'news'),
(34, 'Sự Tích Hoa Thuỷ Tiên', NULL, 'nguyenphuong', '19/05/2013', '<p><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';">Theo truyền thuyết kể rằng, c&oacute; hai vợ chồng thần K&ecirc;ph&iacute;t v&agrave; Lavơri&ocirc;na sinh hạ được một cậu con trai rất xinh xắn. Vị thần nhỏ c&oacute; gương mặt trắng trẻo, cặp mắt s&aacute;ng, m&aacute;i t&oacute;c quăn t&iacute;t, t&ecirc;n l&agrave; Narơx&iacute;t v&agrave; được thay cha l&agrave;m h&agrave; b&aacute; trị v&igrave; một v&ugrave;ng s&ocirc;ng nước rộng lớn.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';">- &Ocirc;i, đứa trẻ mới đẹp l&agrave;m sao! Đ&uacute;ng l&agrave; một đứa con tuyệt vời! - C&aacute;c nữ thần đến thăm Narơx&iacute;t đều tấm tắc khen ngợi.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';">Nhưng kh&ocirc;ng phải vị thần n&agrave;o cũng thật t&acirc;m ch&uacute;c mừng vợ chồng K&ecirc;ph&iacute;t v&agrave; Lavơri&ocirc;na c&oacute; đứa con trai xin đẹp nhất. Cũng c&oacute; vị thần t&iacute;nh hay ghen gh&eacute;t, đố kỵ niềm hạnh ph&uacute;c m&agrave; tạo h&oacute;a đ&atilde; ban cho gia đ&igrave;nh thần K&ecirc;ph&iacute;t. Khi lo&agrave;i c&aacute; bơi từ Đ&ocirc;ng sang T&acirc;y loan tin về vẻ đẹp v&agrave; tr&iacute; tuệ của con trai nữ thần Lavơri&ocirc;na, nữ thần Sứa cảm thấy v&ocirc; c&ugrave;ng ganh tỵ. Bởi v&igrave; ả c&oacute; một đứa con trai vốn rất xấu x&iacute; lại ngốc nghếch. Do đ&oacute;, c&agrave;ng nghe mọi người khen ngợi Narơx&iacute;t bao nhi&ecirc;u, ả c&agrave;ng tức giận v&agrave; ghen gh&eacute;t bấy nhi&ecirc;u. Đến nỗi những con rắn phủ tr&ecirc;n đầu ả thay cho t&oacute;c dựng đứng l&ecirc;n, phun lưỡi ph&igrave; ph&igrave;. Nữ thần Sứa nghiến răng tr&egrave;o trẹo nguyền rủa:</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';">- Vẻ đẹp của mi sẽ giết chết mi. Mi sẽ phải l&ograve;ng ch&iacute;nh h&igrave;nh b&oacute;ng của mi. Mi chỉ trở n&ecirc;n tốt bụng v&igrave; l&ograve;ng hiếu danh, v&agrave; sẽ trở n&ecirc;n th&ocirc;ng minh chỉ v&igrave; th&oacute;i ki&ecirc;u căng. Khoảnh khắc mi nh&igrave;n thấy b&oacute;ng h&igrave;nh m&igrave;nh trong gương ch&iacute;nh l&agrave; l&uacute;c mi bắt đầu phải chấp nhận c&aacute;i chết.&nbsp;</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /></p>\n<div style="margin: 0px; padding: 0px; color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa; text-align: center;"><a style="color: #04980f; text-decoration: none;" href="http://diendan.vietflower.info/%3Ca%20href=" target="_blank"><img style="max-width: 500px; cursor: pointer;" src="http://farm7.static.flickr.com/6153/6168284351_0ae99e3b2d.jpg" alt="" border="0" /></a></div>\n<p><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;"><br /></span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Những con c&aacute; bơi ngược lại từ T&acirc;y sang Đ&ocirc;ng mang tin về lời nguyền của nữ thần Sứa đến lưu vực s&ocirc;ng do K&ecirc;ph&iacute;t trị v&igrave;. Thần K&ecirc;ph&iacute;t lo sợ đập vỡ tất cả c&aacute;c gương c&oacute; dưới thủy cung, c&ograve;n c&aacute;c mảnh k&iacute;nh vụn th&igrave; quẳng l&ecirc;n đất liền. Từ khi nhỏ, Narơx&iacute;t chỉ nghe n&oacute;i về vẻ đẹp v&agrave; tr&aacute;i tim nh&acirc;n hậu của m&igrave;nh. Đến khi hiểu biết một ch&uacute;t, ch&agrave;ng nghĩ rằng m&igrave;nh cần phải trở th&agrave;nh một người nh&acirc;n hậu v&agrave; th&ocirc;ng minh, mặc d&ugrave; l&agrave;m được việc đ&oacute; kh&ocirc;ng phải l&agrave; chuyện dễ d&agrave;ng. Khi đ&aacute;m con của c&aacute;c nữ thần kh&aacute;c d&agrave;nh một ch&uacute;t trong khẩu phần ăn s&aacute;ng hoặc bữa trưa của m&igrave;nh cho c&aacute;, th&igrave; Nanơx&iacute;t cũng kh&ocirc;ng muốn mang tiếng l&agrave; keo kiệt, n&ecirc;n n&eacute;m cho c&aacute; một &iacute;t thức ăn. D&ugrave; chỉ bớt lại một phần thức ăn nhỏ nhoi, nhưng ch&agrave;ng tin rằng việc ch&agrave;ng l&agrave;m tốt hơn nhiều so với việc những người kh&aacute;c, bởi lẽ thức ăn ch&agrave;ng cho kh&ocirc;ng phải l&agrave; thức ăn d&acirc;n d&atilde; m&agrave; l&agrave; thức ăn của nh&agrave; thần. Nhưng sau đ&oacute;, ch&agrave;ng kh&ocirc;n ngoan ngầm giữ lại phần thức ăn của m&igrave;nh, m&agrave; lấy phần thức ăn của mẹ để đem cho, khiến đ&aacute;m con của c&aacute;c vị thần kh&aacute;c phải th&aacute;n phục về sự h&agrave;o hiệp v&agrave; qu&ecirc;n m&igrave;nh của ch&agrave;ng.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Thời gian dần tr&ocirc;i nhanh, mới ng&agrave;y n&agrave;o Narơx&iacute;t c&ograve;n chơi đ&ugrave;a với lũ c&aacute;, nhặt nhạnh những vỏ hến, vỏ s&ograve; trang điểm nơi ở của m&igrave;nh. C&ograve;n b&acirc;y giờ, ch&agrave;ng đ&atilde; trở th&agrave;nh một ch&agrave;ng trai chững chạc, khỏe mạnh v&agrave; đẹp trai nhất v&ugrave;ng. L&uacute;c nhỏ, đ&aacute;m con của c&aacute;c vị thần thường c&ugrave;ng với ch&agrave;ng nu&ocirc;i c&aacute;, chơi c&aacute;c tr&ograve; chơi, nay lớn l&ecirc;n mỗi đứa đều c&oacute; một sở th&iacute;ch ri&ecirc;ng. Đứa n&agrave;o cũng muốn tỏ ra kh&ocirc;n ngoan linh lợi. Ch&uacute;ng đọc cho nhau nghe những b&agrave;i thơ tự s&aacute;ng t&aacute;c, h&aacute;t những b&agrave;i ca tự nghĩ ra v&agrave; thi xem ai kh&eacute;o l&eacute;o v&agrave; bơi nhanh nhất. Narơx&iacute;t cũng s&aacute;ng t&aacute;c thơ, nhưng chẳng bao l&acirc;u ch&agrave;ng hiểu rằng c&oacute; một đứa trong đ&aacute;m con của c&aacute;c vị thần tỏ ra trội hơn ch&agrave;ng, khiến ch&agrave;ng đem l&ograve;ng ghen gh&eacute;t, phỉ b&aacute;ng tất cả b&egrave; bạn m&igrave;nh.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /></p>\n<div style="margin: 0px; padding: 0px; color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa; text-align: center;"><a style="color: #04980f; text-decoration: none;" href="http://diendan.vietflower.info/%3Ca%20href=" target="_blank"><img style="max-width: 500px; cursor: pointer;" src="http://farm7.static.flickr.com/6160/6168290991_77c8e63ac9.jpg" alt="" border="0" /></a></div>\n<p><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;"><br /></span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">C&aacute;c nữ thần c&oacute; tuổi thường x&igrave; x&agrave;o: &ldquo;Đ&oacute; l&agrave; một ch&agrave;ng trai th&ocirc;ng minh v&agrave; t&agrave;i hoa! Con g&aacute;i của vị thần n&agrave;o được ch&agrave;ng lấy l&agrave;m vợ th&igrave; thật l&agrave; diễm ph&uacute;c&rdquo;. Họ tỏ &yacute; ghen tỵ với người vợ tương lai của Narơx&iacute;t. C&ograve;n c&aacute;c nữ thần trẻ đồng trang lứa với Narơx&iacute;t, th&igrave; rắp t&acirc;m quyến rũ ch&agrave;ng bằng vẻ đẹp v&agrave; sự dịu d&agrave;ng của m&igrave;nh. Cuối c&ugrave;ng, Narơx&iacute;t quyết định kết h&ocirc;n với Ekh&ocirc;, c&ocirc; g&aacute;i đẹp nhất trong nh&oacute;m thiếu nữ con của c&aacute;c vị thần.&nbsp;</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Trước ng&agrave;y cưới, Ekh&ocirc; bảo Narơx&iacute;t l&ecirc;n bờ s&ocirc;ng h&aacute;i cho n&agrave;ng b&ocirc;ng hoa Anh Đ&agrave;o để n&agrave;ng g&agrave;i l&ecirc;n m&aacute;i t&oacute;c xanh của m&igrave;nh. Narơx&iacute;t vui vẻ l&ecirc;n bờ h&aacute;i cả một b&oacute; hoa v&agrave; khi c&uacute;i gập người toan nhảy xuống nước, th&igrave; bỗng nhi&ecirc;n ch&agrave;ng nh&igrave;n thấy b&oacute;ng h&igrave;nh của m&igrave;nh tr&ecirc;n mặt nước.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">- Đẹp qu&aacute;! Kể từ khi khai thi&ecirc;n lập địa đến nay, ta chưa thấy ai được chứng kiến sự tuyệt diệu như thế n&agrave;y! - Ch&agrave;ng thốt l&ecirc;n rồi sững người như bị bỏ b&ugrave;a m&ecirc;.&nbsp;</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Trong khi nh&igrave;n chằm chằm v&agrave;o c&aacute;i b&oacute;ng của m&igrave;nh, ch&agrave;ng qu&ecirc;n mất Ekh&ocirc;, người m&agrave; ng&agrave;y mai c&ugrave;ng ch&agrave;ng l&agrave;m lễ cưới. Ch&agrave;ng n&eacute;m b&oacute; hoa xuống cỏ v&agrave; khi đứng dậy t&acirc;m tr&iacute; của ch&agrave;ng kh&ocirc;ng dứt ra kh&ocirc;ng h&igrave;nh b&oacute;ng của m&igrave;nh.&nbsp;</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">- Đ&uacute;ng rồi! Ta kh&ocirc;ng chỉ l&agrave; một ch&agrave;ng trai th&ocirc;ng minh, đ&ocirc;n hậu nhất m&agrave; c&ograve;n đẹp nhất nữa - Narơx&iacute;t dương dương tự đắc.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Đợi m&atilde;i kh&ocirc;ng thấy người y&ecirc;u trở về, Ekh&ocirc; đ&agrave;nh ngoi l&ecirc;n mặt nước. Tức th&igrave;, n&agrave;ng bị Narơx&iacute;t mắng nhiếc thậm tệ, chỉ v&igrave; n&agrave;ng đ&atilde; l&agrave;m mặt nước xao động. Ekh&ocirc; kh&ocirc;ng tin Narơx&iacute;t lại l&agrave; người như thế,. N&agrave;ng vừa l&agrave;m l&agrave;nh với ch&agrave;ng vừa xoa cho mặt nước trở lại phẳng lặng.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">- Ta biết, em ghen với vẻ đẹp của ta, v&igrave; vậy em t&igrave;m c&aacute;ch cản trở ta. Đừng vờ vĩnh nữa, h&atilde;y trở lại thủy cung đi.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">- Ch&agrave;ng th&acirc;n y&ecirc;u! Em l&agrave; c&ocirc; g&aacute;i đẹp nhất trong đ&aacute;m t&ocirc;n nữ nh&agrave; thần, cớ sao em lại ghen gh&eacute;t với vẻ đẹp của ch&agrave;ng? - Ekh&ocirc; n&oacute;i v&agrave; vẫn nghĩ rằng người y&ecirc;u của m&igrave;nh n&oacute;i đ&ugrave;a.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">- Trước khi chưa nh&igrave;n thấy h&igrave;nh b&oacute;ng của m&igrave;nh, anh cứ nghĩ em l&agrave; một người đẹp nhất. Nhưng b&acirc;y giờ, h&atilde;y nh&igrave;n v&agrave;o gương mặt n&agrave;y, nh&igrave;n v&agrave;o h&igrave;nh b&oacute;ng n&agrave;y, em sẽ hiểu ch&iacute;nh Aphơr&ocirc;đita c&ograve;n chưa xứng đ&aacute;ng trở th&agrave;nh vợ ta, huống hồ g&igrave; n&agrave;ng - Narơx&iacute;t đ&aacute;p v&agrave; kh&ocirc;ng giấu được sự say m&ecirc; vẻ đẹp của ch&iacute;nh m&igrave;nh.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Đối với Ekh&ocirc;, cũng như c&aacute;c thiếu nữ nh&agrave; thần kh&aacute;c, th&igrave; kh&ocirc;ng c&oacute; g&igrave; đ&aacute;ng giận hơn l&agrave; việc người t&igrave;nh kh&ocirc;ng thừa nhận sắc đẹp của m&igrave;nh. Hoặc nếu như Ekh&ocirc; quả l&agrave; kh&ocirc;ng c&oacute; sắc đẹp hơn người, th&igrave; n&agrave;ng cũng kh&ocirc;ng chịu nổi sự nhạo b&aacute;ng của người kh&aacute;c, nhất l&agrave; người m&igrave;nh y&ecirc;u thương nhất.</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /></p>\n<div style="margin: 0px; padding: 0px; color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa; text-align: center;"><a style="color: #04980f; text-decoration: none;" href="http://diendan.vietflower.info/%3Ca%20href=" target="_blank"><img style="max-width: 500px; cursor: pointer;" src="http://farm7.static.flickr.com/6179/6168291021_6c08d3403a.jpg" alt="" border="0" /></a></div>\n<p><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;"><br /></span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Những lời n&oacute;i của Narơx&iacute;t khiến Ekh&ocirc; tức tối đến nỗi n&agrave;ng gọi ch&agrave;ng l&agrave; một kẻ ngu ngốc tự say đắm ch&iacute;nh h&igrave;nh ảnh của m&igrave;nh. N&agrave;ng liền đem chuyện n&agrave;y kể lại cho mẹ n&agrave;ng nghe v&agrave; n&oacute;i rằng ch&agrave;ng đ&atilde; bị mất tr&iacute;. Thần K&ecirc;ph&iacute;t đ&atilde; ho&agrave;i c&ocirc;ng thuyết phục con trai m&igrave;nh quay trở lại thủy cung, v&agrave; những giọt nước mắt cầu xin của người mẹ cũng trở th&agrave;nh v&ocirc; nghĩa. Narơx&iacute;t ở lại hẳn tr&ecirc;n bờ, v&agrave; kh&ocirc;ng ngừng nh&igrave;n xuống mặt nước, lải nhải về sắc đẹp của m&igrave;nh. Cứ như thế, từ ng&agrave;y n&agrave;y qua ng&agrave;y kh&aacute;c, người ch&agrave;ng teo t&oacute;p lại v&agrave; chết tr&ecirc;n đất liền.&nbsp;</span></span><br style="color: #333333; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; font-size: 13px; background-color: #fafafa;" /><span style="color: #333333; font-size: 13px; background-color: #fafafa; font-family: ''Times New Roman'';"><span style="font-family: ''Times New Roman'', Times, serif;">Khi Narơx&iacute;t chết rồi, Ekh&ocirc; thường bơi đến v&ugrave;ng nước m&agrave; ch&agrave;ng từng soi m&igrave;nh v&agrave;o đ&oacute;. N&agrave;ng thở d&agrave;i th&igrave; thầm: "T&igrave;nh y&ecirc;u của ta mới tuyệt diệu l&agrave;m sao...". Để giữ m&atilde;i những kỷ niệm về Narơx&iacute;t, n&agrave;ng b&egrave;n trồng v&agrave;o chỗ đất m&agrave; Narơx&iacute;t nằm một b&ocirc;ng hoa rất đẹp m&agrave; người đời nay thường gọi l&agrave; Hoa Thủy Ti&ecirc;n.</span></span></p>', 1, 'news');
INSERT INTO `fl_tintuc` (`ma`, `tieude`, `tieudengan`, `tacgia`, `ngaytao`, `noidung`, `trangthai`, `loai_tin`) VALUES
(36, 'Truyền Thuyết Hoa Tuylip', NULL, 'nguyenphuong', '19/05/2013', '<p><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Bạn đ&atilde; c&oacute; dịp được nghe hoa tr&ograve; chuyện chưa? C&ograve;n t&ocirc;i, th&uacute; thật l&agrave; v&agrave;o một sớm đầu xu&acirc;n t&ocirc;i đ&atilde; t&igrave;nh cờ được nghe hoa Tuyết tr&ograve; chuyện với hoa Tuy L&iacute;p của người Udơbếch rồi. Đ&uacute;ng hơn l&agrave; hoa Tuy L&iacute;p n&oacute;i, c&ograve;n hoa Tuyết th&igrave; chỉ lắng tai nghe, thi thoảng mới ngắt lời bạn bằng một v&agrave;i c&acirc;u hỏi.</span></p>\n<p><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Nhưng tốt nhất l&agrave; t&ocirc;i sẽ kể lần lượt cho c&aacute;c bạn nghe mọi chuyện. T&ocirc;i đ&atilde; được một người bạn g&aacute;i tặng cho mấy hạt hoa Tuy L&iacute;p t&igrave;m được tr&ecirc;n c&aacute;c sườn đ&aacute; Derapsan. Về m&ugrave;a Thu t&ocirc;i đem những c&aacute;i hạt ấy trồng trong mảnh vườn b&ecirc;n cạnh bức tường nh&agrave;, gần một kh&oacute;m hoa Tuyết.</span></p>\n<p><br /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><a class="lightwindow" style="color: #22229c; font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" href="http://i29.photobucket.com/albums/c298/nvth20005/mclrs-tulips-1024.jpg" rel="lightwindow[posts]"><img class="tcattdimgresizer" style="display: block; margin-left: auto; margin-right: auto;" title="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." src="http://i29.photobucket.com/albums/c298/nvth20005/mclrs-tulips-1024.jpg" alt="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." border="0" /></a><br /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">M&ugrave;a Xu&acirc;n, tuyết thường tan v&agrave;o th&aacute;ng ba, tiết trời ấm &aacute;p một c&aacute;ch đặc biệt. Tất cả c&aacute;c b&ocirc;ng hoa Tuyết cũng như hoa Tuy L&iacute;p đều lần lượt nh&uacute; l&ecirc;n qua một lớp tuyết mỏng v&agrave; hớn hở đ&oacute;n ch&agrave;o m&ugrave;a xu&acirc;n.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><a class="lightwindow" style="color: #22229c; font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" href="http://i29.photobucket.com/albums/c298/nvth20005/tulip.jpg" rel="lightwindow[posts]"><img class="tcattdimgresizer" style="display: block; margin-left: auto; margin-right: auto;" title="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." src="http://i29.photobucket.com/albums/c298/nvth20005/tulip.jpg" alt="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." border="0" /></a><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">V&agrave;o một đ&ecirc;m th&aacute;ng tư, t&ocirc;i ngồi lại kh&aacute; muộn trước một c&ocirc;ng tr&igrave;nh m&agrave; t&ocirc;i chỉ muốn l&agrave;m cho xong ngay. Khi t&ocirc;i đặt dấu chấm cuối c&ugrave;ng rồi ra mở cửa sổ, ngồi xuống chiếc ghế b&agrave;nh nghỉ xả hơi, h&iacute;t thở luồng kh&ocirc;ng kh&iacute; trong l&agrave;nh th&igrave; ở ph&iacute;a ch&acirc;n trời đ&atilde; rực l&ecirc;n &aacute;nh b&igrave;nh minh. T&ocirc;i chợt nghe c&oacute; tiếng reo thanh thanh, thật tươi r&oacute;i v&agrave; dễ chịu, hệt như những chiếc ly pha l&ecirc; chạm nhẹ v&agrave;o nhau ở đ&acirc;u đ&oacute;.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Xin ch&agrave;o - B&ocirc;ng hoa Tuyết khẽ l&ecirc;n tiếng.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Sau đấy l&agrave; giọng đ&aacute;p lại hơi kh&ocirc; một ch&uacute;t:</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Ch&agrave;o!</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Hẳn cậu l&agrave; người ở xứ kh&aacute;c đến khu vườn nh&agrave; ch&uacute;ng tớ? - Vẫn giọng n&oacute;i thanh thản hỏi?</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Lần đầu ti&ecirc;n t&ocirc;i được nở hoa ở đ&acirc;y.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Vậy, ch&uacute;ng ta quen nhau rồi nh&eacute;. T&ocirc;i l&agrave; c&acirc;y hoa Tuyết.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- C&ograve;n t&ocirc;i l&agrave; hoa Tuy L&iacute;p.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Cậu từ đ&acirc;u tới đ&acirc;y?</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Từ một miền xa lắm, c&oacute; t&ecirc;n l&agrave; Udơb&ecirc;kixtan.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- ồ, cậu ở xa thật đấy - Hoa Tuyết thỏ thẻ, l&agrave;m như n&oacute; đ&atilde; qu&aacute; biết Udơb&ecirc;kixtan ở đ&acirc;u v&agrave; xa x&ocirc;i như thế n&agrave;o - Theo phong tục của vườn nh&agrave; tớ, cậu cần phải kể cho tớ nghe về chuyện của đời cậu.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Chuyện đời m&igrave;nh th&igrave; ng&aacute;n ngẩm lắm - Hoa Tuy L&iacute;p thở d&agrave;i. Ch&uacute;ng t&ocirc;i đ&atilde; truyền đời truyền kiếp kể cho nhau nghe để kh&ocirc;ng một ai trong ch&uacute;ng t&ocirc;i qu&ecirc;n rằng, c&ocirc; b&eacute; Tuy L&iacute;p đ&atilde; phải g&aacute;nh chịu.... những b&ocirc;ng hoa của ch&uacute;ng t&ocirc;i phải ch&aacute;y l&ecirc;n ngọn lửa vĩnh cửu để tưởng nhớ ai...</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Một ng&agrave;n năm trước đ&acirc;y tại một thung lung trong n&uacute;i Derapsan c&oacute; một người sống bằng nghề chăn cừu t&ecirc;n l&agrave; Xabiđan. &Ocirc;ng sống rất cực khổ v&igrave; đ&agrave;n cừu &ocirc;ng chăn dắt kh&ocirc;ng phải l&agrave; sở hữu của &ocirc;ng m&agrave; l&agrave; của điền chủ Ham&iacute;t. Xabiđan chỉ c&oacute; đ&ocirc;i c&aacute;nh tay lực lưỡng, một c&acirc;y s&aacute;o tự kho&eacute;t lấy v&agrave; bảy c&ocirc; con g&aacute;i mắt đen huyền. C&ocirc; &uacute;t c&oacute; t&ecirc;n gọi hơi kh&aacute;c thường: Tuy L&iacute;p. Xabiđan rất y&ecirc;u qu&iacute; c&aacute;c con g&aacute;i của m&igrave;nh, xong cũng đ&atilde; nhiều lần &ocirc;ng than thở:</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- &Ocirc;i, gi&aacute; ta c&oacute; đứa con trai....</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- V&igrave; sao &ocirc;ng ta lại th&iacute;ch con trai hơn? - C&acirc;y hoa Tuyết hỏi.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- V&igrave; đối với một người cha, con trai giống như đ&ocirc;i c&aacute;nh. C&ograve;n con g&aacute;i... con g&aacute;i rồi sẽ đi lấy chồng, sẽ bỏ cha v&agrave; để lại cho tr&aacute;i tim &ocirc;ng nỗi đơn độc v&agrave; buồn rầu.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Một h&ocirc;m, c&ocirc; &uacute;t v&agrave; l&agrave; c&ocirc; g&aacute;i đẹp nhất của người chăn cừu - n&agrave;ng Tuy L&iacute;p mười tuổi, mang bữa ăn trưa đến cho cha. Để cho người cha đang mệt mỏi được khu&acirc;y khoả, n&agrave;ng b&egrave;n cất tiếng h&aacute;t những b&agrave;i h&aacute;t n&agrave;ng tự nghĩ ra v&agrave; nhảy những điệu m&uacute;a tr&ocirc;ng thật uyển chuyển v&agrave; đẹp mắt. Đ&ocirc;i g&ograve; m&aacute; n&agrave;ng cứ hồng h&agrave;o th&ecirc;m l&ecirc;n, v&agrave; cặp mắt đen l&aacute;y th&igrave; s&aacute;ng rực như hai v&igrave; sao, kh&ocirc;ng một c&ocirc;ng ch&uacute;a n&agrave;o c&oacute; thể s&aacute;nh được.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><a class="lightwindow" style="color: #22229c; font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" href="http://i29.photobucket.com/albums/c298/nvth20005/white-pink-tulips-1024.jpg" rel="lightwindow[posts]"><img class="tcattdimgresizer" style="display: block; margin-left: auto; margin-right: auto;" title="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." src="http://i29.photobucket.com/albums/c298/nvth20005/white-pink-tulips-1024.jpg" alt="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." border="0" /></a><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Đ&uacute;ng giờ khắc ấy, số phận cay nghiệt đ&atilde; ph&aacute;i điền chủ Ham&iacute;t cưỡi một con ngựa h&ugrave;ng dũng đến trước đ&agrave;n cừu. Vừa tr&ocirc;ng thấy n&agrave;ng Tuy L&iacute;p nhảy m&uacute;a, g&atilde; b&egrave;n dừng ngựa lại, nấp sau mấy bụi c&acirc;y nhỏ theo d&otilde;i từng động t&aacute;c nhảy tuyệt diệu của c&ocirc; g&aacute;i kiều diễm.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Nhảy xong Tuy L&iacute;p n&oacute;i với cha:</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- Cha ơi, con muốn được m&uacute;a h&aacute;t cả đời để cho mọi người được vui sướng.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">- &Ocirc;i, con y&ecirc;u qu&iacute; của ta - người cha lắc đầu - Con l&agrave; một c&ocirc; g&aacute;i ngh&egrave;o h&egrave;n, kiếm đ&acirc;u ra những xi&ecirc;m &aacute;o lụa l&agrave; v&agrave; những bộ y phục m&uacute;a trong suốt?</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Ham&iacute;t r&igrave;nh chờ cho đến khi c&ocirc; g&aacute;i mang b&aacute;t đĩa về nh&agrave; th&igrave; x&ocirc;ng ra t&uacute;m lấy c&ocirc; đưa c&ocirc; về dinh cơ nh&agrave; m&igrave;nh. G&atilde; đẩy Tuy L&iacute;p v&agrave;o một căn ph&ograve;ng k&iacute;n, ở đ&oacute; đ&atilde; c&oacute; h&agrave;ng trăm c&ocirc; g&aacute;i đẹp đang dệt thảm. Suốt từ l&uacute;c mặt trời mọc cho đến tận ho&agrave;ng h&ocirc;n, Tuy L&iacute;p dầm m&igrave;nh trong đ&aacute;m bụi nhuế nho&aacute; với c&ocirc;ng việc dệt thảm tẻ ngắt v&agrave; mệt mỏi. Một m&ugrave;a H&egrave; tối tăm v&agrave; tuyệt vọng đ&atilde; qua. Rồi m&ugrave;a Thu v&agrave; m&ugrave;a Đ&ocirc;ng cũng chấm hết. Nhưng khi m&ugrave;a Xu&acirc;n vừa đến th&igrave; nỗi buồn nhớ n&uacute;i non, nhớ những con suối chảy r&igrave; r&agrave;o v&agrave; tiếng chim ca bỗng d&agrave;y v&ograve; Tuy L&iacute;p kh&ocirc;n ngu&ocirc;i, khiến n&agrave;ng phải đi đến quyết định: Hoặc l&agrave; chết hoặc l&agrave; trở về với tự do.</span><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><a class="lightwindow" style="color: #22229c; font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" href="http://i29.photobucket.com/albums/c298/nvth20005/yellow_tulips_wp-1024.jpg" rel="lightwindow[posts]"><img class="tcattdimgresizer" style="display: block; margin-left: auto; margin-right: auto;" title="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." src="http://i29.photobucket.com/albums/c298/nvth20005/yellow_tulips_wp-1024.jpg" alt="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." border="0" /></a><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;" /><br /><span style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; background-color: #f5f5ff;">Một bữa nọ, c&ocirc; g&aacute;i lại b&ecirc;n cửa sổ ph&oacute;ng tầm mắt qua lỗ khe nhỏ nh&igrave;n xuống ph&iacute;a dưới. N&agrave;ng ph&aacute;t hiện ra ở ngay dưới ch&acirc;n cửa sổ c&oacute; v&ocirc; số những mảnh chai, k&iacute;nh vỡ - đ&oacute; ch&iacute;nh l&agrave; c&aacute;i bẫy, nếu t&ugrave; nh&acirc;n nữ n&agrave;o liều mạng ph&aacute; cửa sổ bỏ trốn th&igrave; sẽ bị cứa đứt ch&acirc;n</span></p>', 1, 'news'),
(37, '', NULL, 'nguyenphuong', '19/05/2013', '<p>&nbsp;</p>\n<h1 style="margin: 0cm 0cm 0.0001pt -0.75pt;" align="center">&nbsp;</h1>\n<h1 style="margin: 0cm 0cm 0.0001pt -0.75pt;" align="center"><span style="font-size: 26.0pt; font-family: Arial; color: blue; mso-bidi-font-weight: normal;">Giới thiệu Flowershop</span></h1>\n<p style="margin: 0cm; margin-bottom: .0001pt; background: whitesmoke;"><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">&nbsp;</span></p>\n<p style="margin: 0cm 0cm 0.0001pt; background-position: initial initial; background-repeat: initial initial;"><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">C&ugrave;ng với sự ph&aacute;t triển của nền kinh tế, con người ng&agrave;y c&agrave;ng bộn bề với trăm ngh&igrave;n c&ocirc;ng việc, ch&uacute;ng ta kh&ocirc;ng c&oacute; nhiều thời gian cho việc t&igrave;m kiếm, chọn lựa mua sắm những m&oacute;n qu&agrave; c&oacute; &yacute; nghĩa cho những người th&acirc;n y&ecirc;u.<br /> <br /> Chắc hẳn c&aacute;c bạn đ&atilde; kh&ocirc;ng &iacute;t lần phải suy nghĩ, băn khoăn khi muốn tặng cho ai đ&oacute; một m&oacute;n qu&agrave; sao cho độc đ&aacute;o mới lạ v&agrave; quan trọng l&agrave; phải mang nhiều &yacute; nghĩa.<br /> <br /> &ldquo;<em><strong>Tặng qu&agrave; l&agrave; một nghệ thuật, gi&aacute; trị kh&ocirc;ng ở m&oacute;n qu&agrave; m&agrave; l&agrave; ở c&aacute;ch tặng</strong></em>&rdquo;. Vậy bạn phải l&agrave;m thế n&agrave;o để người nhận, cảm nhận hết t&igrave;nh cảm của bạn d&agrave;nh cho họ?<br /> <br /> T&igrave;nh cảm y&ecirc;u thương hay sự quan t&acirc;m đ&acirc;u chỉ thể hiện bằng lời?<br /> <br /> <a href="http://flowerbox.vn/"><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">Flowershop.com</span></a><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">&nbsp;</span>lu&ocirc;n tr&acirc;n trọng v&agrave; muốn chia sẽ c&ugrave;ng bạn những t&acirc;m tư v&agrave; t&igrave;nh cảm ch&acirc;n th&agrave;nh m&agrave; bạn muốn d&agrave;nh tặng cho người th&acirc;n.<br /> <br /> Ch&uacute;ng t&ocirc;i sẽ mang những sắc hoa tươi thắm nhất, những m&oacute;n qu&agrave; &yacute; nghĩa nhất đến với người th&acirc;n y&ecirc;u của bạn tr&ecirc;n khắp mọi miền, khoảng c&aacute;ch về kh&ocirc;ng gian v&agrave; thời gian kh&ocirc;ng c&ograve;n l&agrave; vấn đề nữa.<br /> <br /><em><span style="font-size: 14pt; font-family: Arial; font-style: normal;">Ch&uacute;ng t&ocirc;i cũng lu&ocirc;n ch&uacute; trọng quan t&acirc;m đến c&aacute;c văn ph&ograve;ng, c&ocirc;ng sở, đặc biệt sẽ c&oacute; gi&aacute; ưu đ&atilde;i cho những cơ quan đặt hoa theo định k&igrave; d&agrave;i hạn, hoặc l&agrave;m hoa cho hội nghị, hội thao, những ng&agrave;y lễ lớn của qu&yacute; c&ocirc;ng ty.</span></em><span style="font-size: 14pt; font-family: Arial;"><br /> <!--[if !supportLineBreakNewLine]--><br /> <!--[endif]--></span> <br /> Triết l&iacute; kinh doanh của<span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">&nbsp;</span><a href="http://flowerbox.vn/"><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">Flowershop.com</span></a><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">&nbsp;</span>l&agrave; mang lại cho qu&yacute; kh&aacute;ch sự h&agrave;i l&ograve;ng hơn cả sự mong đợi, bằng chất lượng sản phẩm v&agrave; dịch vụ tốt, sự &acirc;n cần chu đ&aacute;o của đội ngủ nh&acirc;n vi&ecirc;n năng động v&agrave; trẻ trung.</span></p>\n<p style="margin: 0cm 0cm 0.0001pt; text-align: center; background-position: initial initial; background-repeat: initial initial;" align="center">&nbsp;</p>\n<p style="margin: 0cm 0cm 0.0001pt; text-align: center; background-position: initial initial; background-repeat: initial initial;" align="center"><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; text-align: start; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; text-align: start; background-color: #f5f5ff;" /><a class="lightwindow" style="color: #ff4400; font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; text-align: start; background-color: #f5f5ff;" href="http://i29.photobucket.com/albums/c298/nvth20005/Tylipno.jpg" rel="lightwindow[posts]"><img class="tcattdimgresizer" title="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." src="http://i29.photobucket.com/albums/c298/nvth20005/Tylipno.jpg" alt="Bấm v&agrave;o ảnh để xem k&iacute;ch cỡ đầy đủ." border="0" /></a><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; text-align: start; background-color: #f5f5ff;" /><br style="font-family: verdana, geneva, lucida, ''lucida grande'', arial, helvetica, sans-serif; font-size: 13px; text-align: start; background-color: #f5f5ff;" /></p>\n<p style="margin: 0cm 0cm 0.0001pt; text-align: center; background-position: initial initial; background-repeat: initial initial;" align="center">&nbsp;</p>\n<p style="margin: 0cm 0cm 0.0001pt; text-align: center; background-position: initial initial; background-repeat: initial initial;" align="center">&nbsp;</p>\n<p style="margin: 0cm 0cm 0.0001pt; text-align: center; background-position: initial initial; background-repeat: initial initial;" align="center">&nbsp;</p>\n<p style="margin: 0cm 0cm 0.0001pt; text-align: center; background-position: initial initial; background-repeat: initial initial;" align="center"><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">&nbsp;</span></p>\n<p style="margin: 0cm 0cm 0.0001pt; background-position: initial initial; background-repeat: initial initial;"><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">H&atilde;y đến với Flowershop.com. Mọi nhu cầu về hoa sẽ được đ&aacute;p ứng. </span></p>\n<p style="margin: 0cm 0cm 0.0001pt; background-position: initial initial; background-repeat: initial initial;"><span style="font-size: 14.0pt; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; color: #993366; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">Hotline:<span class="apple-converted-space">&nbsp;</span><strong>0974064338</strong></span></p>\n<p style="margin: 0cm 0cm 0.0001pt; background-position: initial initial; background-repeat: initial initial;"><strong><em><span style="font-size: 14.0pt; font-family: Tahoma; color: #993366;">(Hoa Tươi Flowershop.com)</span></em></strong></p>\n<p>&nbsp;</p>', 1, 'about');
