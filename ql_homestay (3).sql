-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2019 lúc 03:33 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_homestay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `building`
--

CREATE TABLE `building` (
  `id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `district` text COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `buildingarea` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `numberroom` int(11) NOT NULL,
  `maxcustomer` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `deposit` int(11) NOT NULL,
  `status` bit(1) NOT NULL,
  `createddate` timestamp NULL DEFAULT NULL,
  `modifieddate` timestamp NULL DEFAULT NULL,
  `createdby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modifiedby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `building`
--

INSERT INTO `building` (`id`, `name`, `district`, `style`, `buildingarea`, `price`, `numberroom`, `maxcustomer`, `description`, `deposit`, `status`, `createddate`, `modifieddate`, `createdby`, `modifiedby`, `image`) VALUES
(25, '199x F5a Studio room Japan style', 'Quận 1, Hồ Chí Minh, Vietnam', 'Studio', '38', 1900000, 1, 2, '<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">✔️ Căn ph&ograve;ng ấm c&uacute;ng, tiện nghi theo phong c&aacute;ch H&agrave;n Quốc hiện đại tinh gọn</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">✔️ Căn hộ rộng 40 ph&ugrave; hợp cho 2 người</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">✔️ Những người đi c&ocirc;ng t&aacute;c hoặc những cặp đ&ocirc;i muốn đi kh&aacute;m ph&aacute; S&agrave;i G&ograve;n th&igrave; kh&ocirc;ng thể bỏ qua căn hộ n&agrave;y</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Ph&iacute;a dưới trệt c&oacute; c&agrave; ph&ecirc; v&agrave; khu vực trải nghiệm thực t&ecirc; ảo về du lịch nhật</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Căn ph&ograve;ng ấm c&uacute;ng, tiện nghi theo phong c&aacute;ch H&agrave;n Quốc</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Căn hộ rộng 30m2 ph&ugrave; hợp cho 2 người</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Những người đi c&ocirc;ng t&aacute;c hoặc những cặp đ&ocirc;i muốn đi kh&aacute;m ph&aacute; S&agrave;i G&ograve;n th&igrave; kh&ocirc;ng thể bỏ qua căn hộ n&agrave;y.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Vị tr&iacute; trung t&acirc;m tr&ecirc;n đường L&yacute; tư trọng</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Ph&iacute;a dưới trệt c&oacute; c&agrave; ph&ecirc; v&agrave; khu vực trải nghiệm thực t&ecirc; ảo về du lịch nhật, c&aacute;c bạn c&oacute; thể tham quan Nhật bản m&agrave; kh&ocirc;ng cần đi đ&acirc;u cả</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Căn hộ c&oacute; thể dễ d&agrave;ng di chuyển đến c&aacute;c địa điểm trung t&acirc;m của th&agrave;nh phố như: Nh&agrave; thờ Đức B&agrave;, phố đi bộ B&ugrave;i Viện, chợ Bến Th&agrave;nh</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Cacs khu ẩm thực vui chơi về đ&ecirc;m</p>', 100000, b'0', NULL, NULL, '', '', 'room_28886_54_1564762638.jpg'),
(31, 'Villa Anne Fleur - Luxury stay Pool & BBQ Cottage', 'Hồ Tây , Hà Nội , Việt Nam', 'Biệt thự', '220', 10000000, 4, 10, '<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Anne Fleur n<span style=\"box-sizing: inherit; color: #000000; font-size: 1rem !important; line-height: 1.5rem !important;\">ằm trải m&igrave;nh tr&ecirc;n khu resort Beverly Hill - H&ograve;a B&igrave;nh. Anne Fleur đẹp như một n&agrave;ng tiểu thư giữa chốn n&uacute;i rừng hoang sơ đang l&aacute;nh m&igrave;nh khỏi những ồn &agrave;o x&ocirc; bồ nơi phố thị.</span></p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">&nbsp;</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; color: #000000; font-size: 1rem !important; line-height: 1.5rem !important;\">Chỗ ở của ch&uacute;ng t&ocirc;i c&oacute;&nbsp;</span>tổng&nbsp;<span style=\"box-sizing: inherit; font-weight: bolder;\">diện t&iacute;ch tr&ecirc;n 400m2</span>. Trong đ&oacute;, c&oacute; 250m2 d&agrave;nh cho chỗ ở v&agrave; hơn 150m2 c&ograve;n lại bể bơi, quang cảnh thi&ecirc;n nhi&ecirc;n. Villa bao gồm gồm 1 ph&ograve;ng kh&aacute;ch, 1 ph&ograve;ng bếp, 5 ph&ograve;ng ngủ v&agrave; 4 ph&ograve;ng tắm.</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">&nbsp;</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Được ch&uacute;ng t&ocirc;i trang bị đầy đủ c&aacute;c thiết bị tiện nghi, hiện đại bậc nhất. Anne Fleur ph&ugrave; hợp cho k&igrave; nghỉ gia đ&igrave;nh v&agrave; nh&oacute;m bạn th&acirc;n từ 10-12 người.</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Ph&ograve;ng kh&aacute;ch rộng v&agrave; lu&ocirc;n tr&agrave;n ngập &aacute;nh s&aacute;ng do được sử dụng chủ yếu l&agrave; k&iacute;nh, gi&uacute;p cho bạn d&ugrave; c&oacute; ở trong nh&agrave; vẫn c&oacute; thể h&ograve;a m&igrave;nh được với thi&ecirc;n nhi&ecirc;n. Ph&ograve;ng kh&aacute;ch nổi bật với bộ sofa lớn m&agrave;u xanh ngọc với họa tiết hoa văn bắt mắt. C&ugrave;ng với 2 ghế matxa c&oacute; thể gi&uacute;p bạn c&oacute; k&igrave; nghỉ dưỡng thoải m&aacute;i nhất.</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">Ph&ograve;ng bếp lớn đầy đủ đồ d&ugrave;ng nấu nướng, gia vị để bạn c&oacute; thể tự nấu ăn những m&oacute;n bạn y&ecirc;u th&iacute;ch. Với bộ b&agrave;n ăn lớn c&oacute; sức chứa từ 10 - 12 người.</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">C&aacute;c ph&ograve;ng ngủ ngăn nắp, sạch sẽ c&oacute; sẵn chăn, ga, gối, đệm cao cấp, b&agrave;n trang điểm,...bạn sẽ c&oacute; giấc ngủ thật thoải tại Anne Fleur. C&aacute;c ph&ograve;ng tắm ri&ecirc;ng biệt, kh&eacute;p k&iacute;n đầy đủ đồ d&ugrave;ng sinh hoạt: b&igrave;nh n&oacute;ng lạnh, khăn tắm, dầu gội đầu,...</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">&nbsp;</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; color: #000000; font-size: 1rem !important; line-height: 1.5rem !important;\">Bước v&agrave;o b&ecirc;n trong, bạn sẽ bị cho&aacute;ng ngợp bởi vẻ đẹp tr&aacute;ng lệ, quyến rũ nhưng cũng rất ấm c&uacute;ng v&agrave; th&acirc;n thiện.&nbsp;</span>Anne Fleur l&agrave; sự kết hợp ho&agrave;n hảo giữa hai gam m&agrave;u: trắng v&agrave; xanh ngọc, tạo cảm gi&aacute;c rộng r&atilde;i, m&aacute;t mẻ. Được&nbsp;<span style=\"box-sizing: inherit; font-weight: bolder;\">thiết kế theo phong c&aacute;ch ch&acirc;u &Acirc;u</span>. Nội thất chủ yếu đều từ gỗ c&ocirc;ng nghiệp cao cấp.</p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; color: #000000; font-size: 1rem !important; line-height: 1.5rem !important;\">Ngay lối đi b&ecirc;n tr&aacute;i&nbsp;</span>Anne Fleur l&agrave;&nbsp;<span style=\"box-sizing: inherit; color: #000000; font-size: 1rem !important; line-height: 1.5rem !important;\">hồ bơi ngo&agrave;i trời. Kh&aacute;ch nghỉ ngơi c&oacute; thể đắm m&igrave;nh b&ecirc;n dưới những l&agrave;n nước trong xanh, m&aacute;t lạnh để xoa dịu đi c&aacute;i n&oacute;ng nực, oi bức của thời tiết.</span></p>\r\n<p class=\"ql-align-justify\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\">&nbsp;</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; font-family: Luxstay; font-size: 16px; color: #222222; line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; color: #000000; font-size: 1rem !important; line-height: 1.5rem !important;\">S&acirc;n sau l&agrave; nơi ho&agrave;n hảo để tổ chức những bữa tiệc nướng BBQ đ&uacute;ng chất - chỉ cần nhắm mắt lại l&agrave; bạn c&oacute; thể ngửi thấy m&ugrave;i thịt nướng đậm đ&agrave; dưới &aacute;nh trăng trung tuần. Nếu tới đ&acirc;y v&agrave;o một đ&ecirc;m đ&ocirc;ng gi&aacute; r&eacute;t, l&ograve; sưởi trong nh&agrave; ch&iacute;nh l&agrave; kh&ocirc;ng gian đặc biệt để cả gia đ&igrave;nh c&oacute; thể qu&acirc;y quần b&ecirc;n nhau.</span></p>', 300000, b'0', NULL, NULL, '', '', 'room_22276_73_1552983399.jpg'),
(32, 'aaaaaaaa', 'aaaaaaaaa', 'Căn hộ chung cư', '13', 1111110000, 1, 1, '', 13, b'0', NULL, NULL, '', '', 'room_19467_69_1547450925.jpg'),
(33, 'ádsa', 'Hà Nội', 'Nhà riêng', '30', 5500000, 2, 1, '', 500000, b'0', NULL, NULL, '', '', 'room_21562_69_1551845914.jpg'),
(36, 'rửew', 'Quảng Ninh', 'Studio', '30', 45000000, 2, 2, '', 500000, b'0', NULL, NULL, '', '', 'room_29745_253_1565775966.jpg'),
(37, 'ttt', 'Đà Nẵng', 'Biệt thự', '13', 11111100000, 5, 6, 'abv', 500000, b'0', NULL, NULL, '', '', 'room_23080_1_1554381254.jpg'),
(38, 'abcd', 'Đà Lạt', 'Biệt thự', '25', 45000000, 7, 10, 'abcd', 500000, b'0', NULL, NULL, '', '', '1538725704_canh-view-11.jpg'),
(39, 'jadhd', 'Vũng Tàu', 'Nhà riêng', '30', 1200000, 5, 4, 'fjdhdjfd', 500000, b'0', NULL, NULL, '', '', '1539835671_Phòng khách.jpg'),
(40, 'dep', 'Hội  An', 'Studio', '30', 9000000, 6, 9, 'scdd', 123456, b'0', NULL, NULL, '', '', 'room_18878_204_1567153109.jpg'),
(41, 'dk', 'Hội  An', 'Studio', '12', 1111110000, 0, 0, 'edheddjd', 500000, b'0', NULL, NULL, '', '', 'room_20059_5_1548478695.jpg'),
(42, 'abcf', 'Nha Trang', 'Biệt thự', '25', 45000000, 4, 7, 'thjdkdos', 5555, b'0', NULL, NULL, '', '', 'room_21087_146_1551067407.jpg'),
(48, 'aaaaaaaa', 'Quảng Ninh', 'Căn hộ chung cư', '30', 45000000, 1, 6, '546', 500000, b'0', NULL, NULL, '', '', '1.jpg'),
(49, 'bbbb', 'Hội An', 'Studio', '30', 595, 1, 1, '595', 1155, b'0', NULL, NULL, '', '', '1502270636_Bản_sao_của_IMG_9773-min.jpg'),
(50, 'Noble Apartment_ Studio 1', 'Hội An', 'Biệt thự', '12', 300000, 4, 4, 'Noble Apartment là một khu căn hộ gồm 23 phòng gồm Standard, Deluxe, Superior và One Bed Room Apartment. Toà nhà toạ lại tại Khu phố Trần Duy Hưng, một khu phố sầm uất, nhộn nhịp ngay trung tâm mới của Hà Nội, nhưng lại rất dễ tiếp cận với Đường Vành Đai III và Vành Đai II.\r\n\r\nKhu căn hộ không nằm trên mặt phố nên có một không gian hết sức yên tĩnh, riêng tư, thích hợp là chỗ nghỉ ngơi lý tưởng sau một ngày làm việc mệt nhọc. Toàn bộ các căn hộ đều được trang bị đầy đủ bếp và thiết bị nấu bếp để khách hàng có thể tự nấu những món ăn mình yêu thích và sẽ có cảm giác gần gũi như đang ở nhà.\r\n\r\nNoble Apartment sẽ là một điểm đến lý tưởng cho những khách hàng có những chuyến công tác dài ngày cần tìm một chỗ ở yên tĩnh, mà lại dễ đi lại, có các dịch vụ như khách sạn, nhưng lại gần gũi như ở nhà. Noble Apartment là một mô hình căn hộ khách sạn bởi đầu tư và phát triển bởi AAA Việt Nam, một đơn vị sở hữu chuỗi Khách Sạn Đại Dương.\r\n\r\nChỉ cần 5 phút đi bộ, quý khách đã có thể tiếp cận với trung tâm của Khu đô thị Trung Hoà Nhân Chính, nơi có rất nhiều quán ăn, nhà hàng, quán massage v.v.. Cách vị trí Noble Apartment chừng 500m là Đại siêu thị Big C, đối diện là Khu văn Phòng Charm Vit và Khách sạn 5 sao Grand Plaza.\r\n\r\nQuý khách còn có thể sử dụng các tuyết xe Bus chạy qua tuyến đường Trần Duy Hưng để vào trung tâm thành phố. Hoặc sử dụng tuyến Bus nhanh BRT để di chuyển về khu vực trung tâm.\r\n\r\nNoble Apartment_ Studio 1 có diện tích 23m2, với 1 phòng ngủ và 1 phòng tắm. Trong phòng có một góc bếp nhỏ xinh có sẵn đồ dùng nấu nướng cơ bản để bạn có thể nấu ăn những món đơn giản.', 2147483647, b'0', NULL, NULL, '', '', '8.jpg'),
(51, 'MIAH BOUTIQUE: New | Central | Nice view 401', 'Đà Lạt', 'Nhà riêng', '25', 3000000, 6, 7, ' Hoàn Kiếm, Hà Nội, Vietnam Xem bản đồ\r\n Căn hộ dịch vụ · 25 m2\r\nPhòng riêng · 1 phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)\r\n\r\nXin chào những vị khách và những người bạn tương lai của tôi.\r\n\r\nTôi là Chris, chào mừng các bạn đến với những căn phòng xinh xắn, mới tinh và sạch sẽ.\r\n\r\nNằm ở vị trí trung tâm của Hà Nội, từ đây chỉ mất 5 phút ( đi xe ) hoặc 10 phút ( đi bộ ) tới những địa điểm tham quan nổi tiếng nhất của Hà Nội: Phố đường tàu, phố lẩu, phố ăn đêm, lăng Bác, hồ Hoàn Kiếm, khu phố cổ.\r\n\r\nNhà được trang bị thang máy và tất cả các phòng được trang bị đầy đủ và đều có view, đặc biệt có 2 căn phòng to có ban công có thể nhìn thấy view rất đẹp.\r\n\r\nTầng 8 là tầng thượng nơi có thể ngắm toàn cảnh xung quanh.\r\n\r\nTiện ích, sạch sẽ, mới và đẹp. Hi vọng sớm được chào đón những vị khách quý.\r\n\r\nXin chào những vị khách và những người bạn tương lai của tôi.\r\n\r\nTôi là Chris, chào mừng các bạn đến với những căn phòng xinh xắn, mới tinh và sạch sẽ.\r\n\r\nNằm ở vị trí trung tâm của Hà Nội, từ đây chỉ mất 5 phút ( đi xe ) hoặc 10 phút ( đi bộ ) tới những địa điểm tham quan nổi tiếng nhất của Hà Nội: Phố đường tàu, phố lẩu, phố ăn đêm, lăng Bác, hồ Hoàn Kiếm, khu phố cổ.\r\n\r\nNhà được trang bị thang máy và tất cả các phòng được trang bị đầy đủ và đều có view, đặc biệt có 2 căn phòng to có ban công có thể nhìn thấy view rất đẹp.\r\n\r\nTầng 8 là tầng thượng nơi có thể ngắm toàn cảnh xung quanh.\r\n\r\nTiện ích, sạch sẽ, mới và đẹp. Hi vọng sớm được chào đón những vị khách quý.', 55555555, b'0', NULL, NULL, '', '', '1525834386__N5_3360.jpg'),
(52, 'MIAH BOUTIQUE: New | Central | Nice view 401', 'Hà Nội', 'Căn hộ chung cư', '12', 5000000, 5, 5, ' Hoàn Kiếm, Hà Nội, Vietnam Xem bản đồ\r\n Căn hộ dịch vụ · 25 m2\r\nPhòng riêng · 1 phòng tắm · 1 giường · 1 phòng ngủ · 2 khách (tối đa 2 khách)\r\n\r\nXin chào những vị khách và những người bạn tương lai của tôi.\r\n\r\nTôi là Chris, chào mừng các bạn đến với những căn phòng xinh xắn, mới tinh và sạch sẽ.\r\n\r\nNằm ở vị trí trung tâm của Hà Nội, từ đây chỉ mất 5 phút ( đi xe ) hoặc 10 phút ( đi bộ ) tới những địa điểm tham quan nổi tiếng nhất của Hà Nội: Phố đường tàu, phố lẩu, phố ăn đêm, lăng Bác, hồ Hoàn Kiếm, khu phố cổ.\r\n\r\nNhà được trang bị thang máy và tất cả các phòng được trang bị đầy đủ và đều có view, đặc biệt có 2 căn phòng to có ban công có thể nhìn thấy view rất đẹp.\r\n\r\nTầng 8 là tầng thượng nơi có thể ngắm toàn cảnh xung quanh.\r\n\r\nTiện ích, sạch sẽ, mới và đẹp. Hi vọng sớm được chào đón những vị khách quý.\r\n\r\nXin chào những vị khách và những người bạn tương lai của tôi.\r\n\r\nTôi là Chris, chào mừng các bạn đến với những căn phòng xinh xắn, mới tinh và sạch sẽ.\r\n\r\nNằm ở vị trí trung tâm của Hà Nội, từ đây chỉ mất 5 phút ( đi xe ) hoặc 10 phút ( đi bộ ) tới những địa điểm tham quan nổi tiếng nhất của Hà Nội: Phố đường tàu, phố lẩu, phố ăn đêm, lăng Bác, hồ Hoàn Kiếm, khu phố cổ.\r\n\r\nNhà được trang bị thang máy và tất cả các phòng được trang bị đầy đủ và đều có view, đặc biệt có 2 căn phòng to có ban công có thể nhìn thấy view rất đẹp.\r\n\r\nTầng 8 là tầng thượng nơi có thể ngắm toàn cảnh xung quanh.\r\n\r\nTiện ích, sạch sẽ, mới và đẹp. Hi vọng sớm được chào đón những vị khách quý.', 700000000, b'0', NULL, NULL, '', '', '6.jpg'),
(53, 'panda room⭐khép kín⭐phố cổ⭐5 phút đi bộ ra hồ Hoàn Kiếm', 'TP.Hồ Chí Minh', 'Căn hộ chung cư', '13', 3000000, 5, 5, ' Hoàn Kiếm, Hà Nội, Vietnam Xem bản đồ\r\n Nhà riêng · 27 m2\r\nPhòng riêng · 1 phòng tắm · 1 giường · 1 phòng ngủ · 1 khách (tối đa 3 khách)\r\n\r\nVị trí đẹp giữa trung tâm Hà Nội là một nơi lý tưởng để bạn và gấu tận hưởng kỳ nghỉ lãng mạn và đáng nhớ hoặc nơi ghi dấu ấn tuổi thơ của con bạn.\r\n\r\nLà một ngôi nhà cổ thoáng mát, sạch sẽ, đầy đủ tiện nghi\r\n\r\nCó bếp nấu, nhà vệ sinh khép kín, nhà thiết kế theo phong cách cổ điển rất ấm cúng và thoáng mát; sạch sẽ, tiện nghi.\r\n\r\nkhu dân cư an ninh\r\n\r\ncó khoá cửa Thông minh\r\n\r\nVị trí đẹp giữa trung tâm Hà Nội là một nơi lý tưởng để bạn và gấu tận hưởng kỳ nghỉ lãng mạn và đáng nhớ hoặc nơi ghi dấu ấn tuổi thơ của con bạn.\r\n\r\nLà một ngôi nhà cổ thoáng mát, sạch sẽ, đầy đủ tiện nghi\r\n\r\nCó bếp nấu, nhà vệ sinh khép kín, nhà thiết kế theo phong cách cổ điển rất ấm cúng và thoáng mát; sạch sẽ, tiện nghi.\r\n\r\nkhu dân cư an ninh\r\n\r\ncó khoá cửa Thông minh', 44444444, b'0', NULL, NULL, '', '', '1528866087_IMG_3581_(1)-min.jpg'),
(55, 'DaLAF House', 'Đà Lạt', 'Căn hộ chung cư', '5', 3000000, 5, 7, ' Đà Lạt, Lâm Đồng, Vietnam Xem bản đồ\r\n Nhà riêng · 160 m2\r\nNguyên căn · 4 phòng tắm · 6 giường · 4 phòng ngủ · 8 khách (tối đa 15 khách)\r\n\r\n-Nhà nằm trên đường Phan Đình Phụng (đường chính ở Đà Lạt).\r\n\r\n- Bạn sẽ có mọi thứ bạn có ở nhà như TV, tủ lạnh, bếp ga, nước miễn phí, ...\r\n\r\n- Bên cạnh đó, gần nhà là chợ hải sản lớn nhất nên bạn có thể mua cá tươi, tôm hùm, cua, ...\r\n\r\n- Nếu bạn đi bằng ô tô thì nhà có bãi đậu xe.\r\n\r\n- Và tầng cao nhất của ngôi nhà, bạn có thể tổ chức tiệc BBQ, ... cùng gia đình và ngắm thị trấn.\r\n\r\n\r\n\r\nTôi sẽ cung cấp cho bạn thông tin tốt nhất về Đà Lạt và hỗ trợ chuyến đi của bạn khi cần.\r\n\r\n\r\n\r\nTôi sẽ có sẵn trên phoine, SMS, Zalo, Facebook hoặc bất kỳ mạng xã hội nào - liên hệ với tôi bất cứ điều gì khi bạn cần giúp đỡ\r\n\r\n\r\n\r\nBạn có thể thuê xe máy với dịch vụ miễn phí là 5 - 7 đô la / ngày\r\n\r\n\r\n\r\nBạn cũng có thể thực hiện một chuyến tham quan thành phố quanh dalat bằng xe hơi với hướng dẫn viên của tôi. Nếu bạn không có máy bay, chỉ cần cho tôi biết bạn muốn đi đâu, tôi sẽ đi phần còn lại!\r\n\r\n-Nhà nằm trên đường Phan Đình Phụng (đường chính ở Đà Lạt).\r\n\r\n- Bạn sẽ có mọi thứ bạn có ở nhà như TV, tủ lạnh, bếp ga, nước miễn phí, ...\r\n\r\n- Bên cạnh đó, gần nhà là chợ hải sản lớn nhất nên bạn có thể mua cá tươi, tôm hùm, cua, ...\r\n\r\n- Nếu bạn đi bằng ô tô thì nhà có bãi đậu xe.\r\n\r\n- Và tầng cao nhất của ngôi nhà, bạn có thể tổ chức tiệc BBQ, ... cùng gia đình và ngắm thị trấn.\r\n\r\n\r\n\r\nTôi sẽ cung cấp cho bạn thông tin tốt nhất về Đà Lạt và hỗ trợ chuyến đi của bạn khi cần.\r\n\r\n\r\n\r\nTôi sẽ có sẵn trên phoine, SMS, Zalo, Facebook hoặc bất kỳ mạng xã hội nào - liên hệ với tôi bất cứ điều gì khi bạn cần giúp đỡ\r\n\r\n\r\n\r\nBạn có thể thuê xe máy với dịch vụ miễn phí là 5 - 7 đô la / ngày\r\n\r\n\r\n\r\nBạn cũng có thể thực hiện một chuyến tham quan thành phố quanh dalat bằng xe hơi với hướng dẫn viên của tôi. Nếu bạn không có máy bay, chỉ cần cho tôi biết bạn muốn đi đâu, tôi sẽ đi phần còn lại!', 60000000, b'0', NULL, NULL, '', '', 'room_22165_19_1552812450.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Address` text COLLATE utf8_unicode_ci,
  `Tittle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Address`, `Tittle`, `Content`) VALUES
(3, 'w', 'sddhsj@gmail.com', 'đư', 'ưdd', 'Nội dungdđ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `ID` bigint(20) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `role` bit(1) NOT NULL,
  `status` bit(1) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`ID`, `username`, `fullname`, `email`, `password`, `telephone`, `address`, `gender`, `description`, `role`, `status`, `image`) VALUES
(3, 'dat', 'Đặng Văn Đạt', 'datbo@gmail.com', '123', '0942365147', 'Hà Giang - Việt Nam', 1, 'Cao to đen hôi', b'0', b'1', 'datbo.jpg'),
(4, 'ha', 'Nguyễn Trịnh Hà', 'habobn@gmail.com', '123456', '0985902398', 'Phố Vũ Kiệt - Thành Phố Bắc Ninh', 1, 'Đẹp trai , ngoan hiền , đáng iêu từ nhỏ ♥', b'0', b'1', 'ha.jpg'),
(22, 'phuongsu', 'Nguyễn Minh Phương', 'phuongsu@gmail.com', '123', '0942363418', 'Thành phố Bắc Ninh', 0, 'Trắng trẻo xinh xắn đáng iêu ♥', b'0', b'0', 'phuong.jpg'),
(29, 'minhhieu', NULL, 'minhhieu@gmail.com', '123', '0942367481', '', NULL, '', b'0', b'0', ''),
(30, 'linh', NULL, 'linh@gmail.com', '123', '0975134658', '', NULL, '', b'0', b'0', ''),
(33, 'tuanlinh', NULL, 'tuanlinh@gmail.com', '123456', '0943657844', '', NULL, '', b'0', b'0', ''),
(34, 'nguyenvanthi', 'Nguyễn Văn Thì', 'vanthi@gmail.com', '09101998', '0349976565', 'Thường Tín', 1, 'Đẹp trai nhà giàu', b'0', b'0', ''),
(36, 'nguyenvanthi11', NULL, 'vanthi09101998@gmail.com', '123456', '0349976565', '', NULL, '', b'0', b'0', ''),
(37, 'danghieu0407', NULL, 'hieutongdang@gmail.com', '123456', '0909090909', '', NULL, '', b'0', b'0', ''),
(38, 'thi1234', NULL, 'thi@gmail.com', '123456', '0909090909', '', NULL, '', b'0', b'0', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_hs`
--

CREATE TABLE `order_hs` (
  `id` int(20) NOT NULL,
  `customerid` int(20) NOT NULL,
  `buildingid` int(20) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_hs`
--

INSERT INTO `order_hs` (`id`, `customerid`, `buildingid`, `price`, `image`, `status`, `date_order`) VALUES
(65, 38, 53, '3000000', '1528866087_IMG_3581_(1)-min.jpg', 2, '2019-11-20 10:47:51'),
(66, 38, 32, '1111110000', 'room_19467_69_1547450925.jpg', 2, '2019-11-20 10:48:38'),
(67, 34, 32, '1111110000', 'room_19467_69_1547450925.jpg', 2, '2019-11-20 10:51:16'),
(68, 34, 53, '3000000', '1528866087_IMG_3581_(1)-min.jpg', 2, '2019-11-20 11:05:34'),
(69, 34, 51, '3000000', '1525834386__N5_3360.jpg', 2, '2019-11-20 12:44:16'),
(70, 34, 52, '5000000', '6.jpg', 2, '2019-11-21 05:54:43'),
(71, 34, 38, '45000000', '1538725704_canh-view-11.jpg', 2, '2019-11-21 05:56:35'),
(72, 0, 32, '1111110000', 'room_19467_69_1547450925.jpg', 0, '2019-11-21 12:18:24'),
(73, 38, 32, '1111110000', 'room_19467_69_1547450925.jpg', 2, '2019-11-21 12:25:06'),
(74, 38, 32, '1111110000', 'room_19467_69_1547450925.jpg', 2, '2019-11-21 14:09:23'),
(75, 38, 55, '3000000', 'room_22165_19_1552812450.jpg', 2, '2019-11-21 14:16:30'),
(76, 38, 55, '3000000', 'room_22165_19_1552812450.jpg', 2, '2019-11-21 14:16:33'),
(77, 38, 52, '5000000', '6.jpg', 2, '2019-11-21 14:16:35'),
(78, 38, 32, '1111110000', 'room_19467_69_1547450925.jpg', 2, '2019-11-22 09:20:53'),
(79, 38, 32, '1111110000', 'room_19467_69_1547450925.jpg', 2, '2019-11-22 09:55:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `createddate` timestamp NULL DEFAULT NULL,
  `modifieddate` timestamp NULL DEFAULT NULL,
  `createdby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modifiedby` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `telephone`, `status`, `createddate`, `modifieddate`, `createdby`, `modifiedby`) VALUES
(5, 'Nguyễn Văn Thì', 'vanthi', '123', NULL, b'1', NULL, NULL, '', ''),
(6, 'Hiếu Đăng', 'admin', 'admin', NULL, b'1', NULL, NULL, '', ''),
(7, 'Thì Nguyễn', 'thi001', '123456', NULL, b'1', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_building`
--

CREATE TABLE `user_building` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `buildingid` bigint(20) NOT NULL,
  `rating` text COLLATE utf8_unicode_ci NOT NULL,
  `createddate` timestamp NULL DEFAULT NULL,
  `modifieddate` timestamp NULL DEFAULT NULL,
  `createdby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modifiedby` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_customer`
--

CREATE TABLE `user_customer` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `customerid` bigint(20) NOT NULL,
  `creaddate` timestamp NULL DEFAULT NULL,
  `modifieddate` timestamp NULL DEFAULT NULL,
  `createdby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modifiedby` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `order_hs`
--
ALTER TABLE `order_hs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`,`buildingid`),
  ADD KEY `buildingid` (`buildingid`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `user_building`
--
ALTER TABLE `user_building`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`buildingid`),
  ADD KEY `buildingid` (`buildingid`);

--
-- Chỉ mục cho bảng `user_customer`
--
ALTER TABLE `user_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`customerid`),
  ADD KEY `customerid` (`customerid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `building`
--
ALTER TABLE `building`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `order_hs`
--
ALTER TABLE `order_hs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_building`
--
ALTER TABLE `user_building`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_customer`
--
ALTER TABLE `user_customer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user_building`
--
ALTER TABLE `user_building`
  ADD CONSTRAINT `user_building_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_building_ibfk_2` FOREIGN KEY (`buildingid`) REFERENCES `building` (`id`);

--
-- Các ràng buộc cho bảng `user_customer`
--
ALTER TABLE `user_customer`
  ADD CONSTRAINT `user_customer_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_customer_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customer` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
