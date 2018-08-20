-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 20, 2018 lúc 01:22 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_final_exam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id_course` int(5) NOT NULL,
  `name_course` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status_course` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id_course`, `name_course`, `start_date`, `end_date`, `status_course`) VALUES
(1, 'Lập trình Android', '0000-00-00', '0000-00-00', 0),
(2, 'Lập trình Ruby', '0000-00-00', '0000-00-00', 1),
(4, 'Lập trình ASP', '0000-00-00', '0000-00-00', 1),
(5, 'Lập trình Node JS', '0000-00-00', '0000-00-00', 1),
(10, 'Lập trình HTML', '2018-08-20', '2018-08-20', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `id_noti` int(11) NOT NULL,
  `name_noti` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `date_noti` date NOT NULL,
  `id_gv` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`id_noti`, `name_noti`, `date_noti`, `id_gv`, `id_kh`) VALUES
(3, 'Sinh viên nộp bài tập sau 2 tuần', '2018-08-20', 4, 1),
(5, 'Thông báo kết quả thi cuối kì', '2018-08-20', 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id_sv` int(11) NOT NULL,
  `hoten_sv` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `gioitinh_sv` int(1) NOT NULL,
  `email_sv` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `sodt_sv` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `ngaysinh_sv` date NOT NULL,
  `course_sv` int(11) NOT NULL DEFAULT '0',
  `type_sv` int(11) NOT NULL,
  `nam_hoc_sv` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id_sv`, `hoten_sv`, `gioitinh_sv`, `email_sv`, `sodt_sv`, `ngaysinh_sv`, `course_sv`, `type_sv`, `nam_hoc_sv`) VALUES
(1, 'Đoàn Bùi Hữu', 1, '123@gmail.com', '2147483647', '2018-08-10', 1, 0, 0000),
(2, 'duy', 1, 'nguyenbaduy@gmail.com', '012312312312', '2018-08-10', 1, 0, 0000),
(3, 'duy', 1, '123123@gmaul.com', '01123123123', '2018-08-16', 2, 0, 2018),
(4, 'Bùi Hữu Đoàn', 1, 'doantb95@gmail.com', '123', '2018-08-09', 1, 0, 2018);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `numphone` int(12) NOT NULL,
  `password` varchar(45) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `id_courses` int(11) DEFAULT NULL,
  `discription` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `email`, `numphone`, `password`, `id_courses`, `discription`) VALUES
(1, '\0\0\0d\0\0\0o\0\0\0a\0\0\0n\0\0\0b', '\0\0\0d\0\0\0o\0\0\0a\0\0\0n\0\0\0b', 123, '1', NULL, NULL),
(2, 'Bùi', '\0\0\0d\0\0\0o\0\0\0a\0\0\0n\0\0\0b', 123, '\0挀㐀挀愀㐀㈀㌀㠀愀　戀', NULL, NULL),
(4, 'Bùi Hữu Đoàn', 'doanbh32@wru.vn', 123, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(5, 'Bùi Nhật Tùng', 'tungbtn@wru.vn', 122, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(6, 'Bùi Nhật Tùng1', 'tungbtn1@wru.vn', 122, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(7, 'Bùi Nhật Tùng1', 'tungbtn123@wru.vn', 122, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL),
(8, 'Đoàn 123', 'doan123@wru.vn', 123, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_noti`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_sv`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `id_noti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
