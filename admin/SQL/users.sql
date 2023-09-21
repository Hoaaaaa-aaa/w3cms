-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 19, 2023 lúc 08:12 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `index`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Email`, `Pass`, `Created_at`) VALUES
(1, 'Doyle', 'dmcclary0@woothemes.com', 'yW1,`>#*2{c', '2023-09-19'),
(2, 'Trenna', 'tgriffithe1@flavors.me', 'yK4)&{W#V94KdS', '2023-09-21'),
(3, 'Hulda', 'hhan2@amazon.de', 'pM3\"mq4Ew(a05', '0000-00-00'),
(4, 'Brandtr', 'bfindon3@google.com.au', 'iK5%@', '0000-00-00'),
(5, 'Carmita', 'csherland4@engadget.com', 'jV7#C=Q@+MD/T/', '0000-00-00'),
(6, 'Leonelle', 'lrandle5@webs.com', 'wM1)hsI\', '0000-00-00'),
(7, 'Mara', 'mpettecrew6@about.com', 'pJ4|o@T$n8kPCf', '0000-00-00'),
(8, 'Tudor', 'tsteen7@dropbox.com', 'hL0|q!42Ru,~}>\\', '0000-00-00'),
(9, 'Rowan', 'rclimpson8@meetup.com', 'iP1!JY4a!hY88J', '0000-00-00'),
(10, 'Edgar', 'ebeincken9@reference.com', 'yC6|_qFI', '0000-00-00'),
(11, 'Aundrea', 'aclayilla@google.com.hk', 'wO1=d0_@t!Dj', '0000-00-00'),
(12, 'Matthaeus', 'mmewettb@admin.ch', 'mC2~{4cYl1Pb', '0000-00-00'),
(13, 'Hartwell', 'hcanoc@mlb.com', 'vB6$4?NU</', '0000-00-00'),
(14, 'Cad', 'cscarmand@webmd.com', 'hY8.|<hI%4DL9/\"h', '0000-00-00'),
(15, 'Theadora', 'tneale@mayoclinic.com', 'sQ5<x_R', '0000-00-00'),
(16, 'Jennine', 'jdickensonf@list-manage.com', 'cT8/YI\"*l8a_?', '0000-00-00'),
(17, 'Fletch', 'fmoppettg@vk.com', 'kN2\@|<Y2yfX`', '0000-00-00'),
(18, 'Glynn', 'gmckallh@washingtonpost.com', 'fO2/,<C{kImtg(', '0000-00-00'),
(19, 'Carole', 'cslatcheri@usa.gov', 'iT0!jyg?.s.', '0000-00-00'),
(20, 'Nevsa', 'nkennj@tinyurl.com', 'zG7(Vu!L(mI7>E', '0000-00-00'),
(21, 'Clovis', 'cwharfk@elegantthemes.com', 'cN5\"!APti\"kl(N|', '0000-00-00'),
(22, 'Keeley', 'kfloatl@privacy.gov.au', 'tO0<_)XA', '0000-00-00'),
(23, 'Jules', 'jgeanym@pen.io', 'oJ8|e$n,qSH.Mrsk', '0000-00-00'),
(24, 'Odessa', 'opettisalln@smh.com.au', 'sQ2!4r?&s>', '0000-00-00'),
(25, 'Tina', 'tpondero@webmd.com', 'iL8@m8\",\"6,!', '0000-00-00'),
(26, 'Aluino', 'asaillp@cam.ac.uk', 'iS1!n6f\"G$>b', '0000-00-00'),
(27, 'Adeline', 'aroughtq@thetimes.co.uk', 'jG3`T9~h=', '0000-00-00'),
(28, 'Eula', 'eflearr@ebay.co.uk', 'fE5_XZz`k', '0000-00-00'),
(29, 'Ase', 'abootess@go.com', 'vT7\X{!H%', '0000-00-00'),
(30, 'Michaelina', 'msarjeantt@home.pl', 'bE5,BRX_9z(y', '0000-00-00'),
(31, 'Rozalie', 'rsouthernwoodu@ameblo.jp', 'jJ3>&odsRw(BOu', '0000-00-00'),
(32, 'Selene', 'sabramoviciv@dmoz.org', 'hJ4%dRVM\34MN=', '0000-00-00'),
(33, 'Caye', 'csharplessw@hexun.com', 'jC8}1rWi$`_h|', '0000-00-00'),
(34, 'Julia', 'jsobeyx@opera.com', 'kT1&kO+baOv2%Ye', '0000-00-00'),
(35, 'Myrtia', 'mlidgeyy@tmall.com', 'gE0%S%{k=nr', '0000-00-00'),
(36, 'Birgitta', 'bklimovz@cmu.edu', 'zW9.O|OIA__BP3N', '0000-00-00'),
(37, 'Fredrick', 'fcordero10@liveinternet.ru', 'jU6!L$lE9wuYzIY', '0000-00-00'),
(38, 'Emelina', 'epuller11@fema.gov', 'xZ8}Wxt|c2pe,k', '0000-00-00'),
(39, 'Cordelie', 'csaggs12@123-reg.co.uk', 'eL7|3W2ga0_', '0000-00-00'),
(40, 'Webster', 'wsumshon13@mit.edu', 'dJ7+o3A/5{443,o', '0000-00-00'),
(41, 'Joelle', 'jsalzburger14@macromedia.com', 'dC6&>LVHXl)~+', '0000-00-00'),
(42, 'Hallsy', 'hcasswell15@ezinearticles.com', 'rW3~1A,<`qJG~', '0000-00-00'),
(43, 'Con', 'cpitblado16@mashable.com', 'gY4{ubyIAJrVhSx', '0000-00-00'),
(44, 'Buffy', 'bandrivel17@amazonaws.com', 'fU9,w$Y*\"C', '0000-00-00'),
(45, 'Craig', 'ctrahmel18@delicious.com', 'kG0.JPK4.vrQNYS#', '0000-00-00'),
(46, 'Dannie', 'dpakeman19@umich.edu', 'iN0)}T=5', '0000-00-00'),
(47, 'Isadora', 'iguitonneau1a@dot.gov', 'sQ1_!sG7dp`s@Eo', '0000-00-00'),
(48, 'Rafa', 'rpenchen1b@paypal.com', 'xT2@l<NMx0Ou@', '0000-00-00'),
(49, 'Umeko', 'ukiledal1c@usda.gov', 'wT9+VxC0,v.Zy@', '0000-00-00'),
(50, 'Rebecca', 'rovendon1d@flickr.com', 'gA0_XsbZy0', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
