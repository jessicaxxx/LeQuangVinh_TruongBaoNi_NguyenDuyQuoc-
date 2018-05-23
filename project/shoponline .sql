-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2018 lúc 05:50 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoponline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name_categogy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `name_categogy`, `status`, `created`, `modified`) VALUES
(1, 'Branded Foods', 1, '2018-04-01 00:00:00', '2018-04-11 00:00:00'),
(2, 'Households', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(3, 'Veggies & Fruits', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(4, 'Kitchen', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(5, 'Short Codes', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(6, 'Beverages', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(7, 'Pet Food', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(8, 'Frozen Foods', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `name`, `price`, `detail`, `image`, `created`, `modified`, `description`) VALUES
(31, 7, 'Mì ly Kokomi Đại tôm chua cay 65g', '2.00', '3', 'mi-ly-kokomi-dai-tom-chua-cay-65g-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                Sợi mì Kokomi dai giòn được làm từ những nguyên liệu an toàn như bột mì, tinh bột khoai mì,... hấp dẫn, đậm đà.\r\nBên cạnh đó, gói gia vị còn được chế biến từ bột tôm, húng quế, ngò gai, hạt điều màu... tạo nên một hương vị tôm chua cay cay thơm ngon, kích thích vị giác.                   '),
(32, 5, 'Sữa tắm trắng da E100 Tinh chất sữa dê chai 1,2lít', '5.00', '6', 'st-e100-tinh-chat-sua-de-12l-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                Sữa tắm E100 chiết xuất sữa dê giàu vitamin E và dưỡng chất, nhẹ nhàng làm sạch và nuôi dưỡng làn da bạn hàng ngày, mang lại cho bạn làn da mịn màng, tự nhiên.\r\nSản phẩm đồng thời, sản phẩm còn có chức năng dưỡng ẩm, se khít lỗ chân lông.                   '),
(33, 2, 'Bột giặt nhiệt Aba Sạch tinh tươm 1,5kg', '10.00', '11', 'bg-nhiet-abba-1-5kg-1-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                         Với thành phần có chứa Thermoactiva giúp đánh bay mọi vết bẩn nhanh chóng.\r\nBột giặt Aba có khả năng làm các vết bẩn tan trong nước, cho vải trắng sạch như mới.\r\nSản phẩm chứa thành phần dẫn chất cellulose có khả năng chống bám tối ưu          '),
(34, 4, 'Nước xả vải Downy Tươi trẻ túi 1,5lít', '24.00', '25', 'nuoc-xa-downy-tuoi-tre-tui-15l-1-700x467-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                                Nước xả Downy Tươi trẻ với công thức đậm đặc giúp vải không bị khô cứng. Sản phẩm mang đến chất vải mềm mại tột cùng và hương nước hoa thơm ngát, cho quần áo luôn vương vấn hương thơm, cho bạn cảm giác sảng khoái, thoải mái cả ngày dài.   '),
(35, 8, 'Bánh bông lan cuộn kem bơ sữa Solite 360g (20 cái', '78.00', '79', 'banh-bong-lan-solite-swiss-roll-bo-sua-360gr-1-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                                   '),
(36, 6, 'Thùng mì 3 Miền Bò sợi phở (30 gói)', '52.00', '53', 'mi-reeva-3-mien-bo-soi-pho-65g-30-thung-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                         Sợi mì 3 Miền được làm từ bột đậu xanh, bột khoai tây, bột mì, màu tự nhiên, vitamin B1, B2, B3, B6, B9... trở nên dai, mềm hấp dẫn.\r\nGói gia vị đậm đà có dầu thực vật, muối, đường, bột thịt heo, bột hành, bột ớt, hành lá sấy, cà rốt sấy, bắp sấy...\r\nSợi mì dai ngon hòa quyện cùng nước súp đậm đà, hương vị thanh đạm, mang lại những trải nghiệm thú vị cho người thưởng thức.          '),
(37, 3, 'Xúc xích heo Red CP 20g (gói 5 cây)', '45.00', '46', 'xuc-xich-red-cp-heo-100g-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n  Xúc xích red CP heo 100g Sản phẩm dùng để ăn trực tiếp hoặc chế biến thành nhiều món ăn đậm vị khác nhau nhằm cung cấp các dưỡng chất thiết yếu mỗi ngày cho cơ thể. Được sản xuất trên dây chuyền công nghệ hiện đại, không chứa các chất phụ gia có hại nên đảm bảo an toàn cho sức khỏe người tiêu dùng.                '),
(38, 2, 'BVS Diana Sensi Cool Fresh Có cánh 23cm (8 miếng)', '72.00', '73', 'bvs-diana-sensi-cool-fresh-smc-23cm-8-mieng-1-2-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                                   Băng vệ sinh Diana Sensi Cool Fresh siêu mỏng cánh 8 miếng với công nghệ Menthol từ Nhật Bản mát thoáng bất ngờ và kiểm soát mùi hiệu quả.\r\nBề mặt vi sợi mềm mại với da thấm tan chất dịch đặc giữ miếng băng khô ráo.'),
(39, 4, 'Snack bắp Oishi vị phô mai 45g', '20.00', '21', 'snack-oishi-bap-ngot-vi-pho-mai-45gr-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                        Snack Oishi bắp ngọt vị phô mai được làm từ bột mì, gia vị phô mai, tinh bột sắn, dầu ăn, đường...\r\nHơn thế nữa, sản phẩm với những miếng snack giòn rụm cùng vị phô mai thơm ngon, hấp dẫn sẽ đem đến cho bạn những trải nghiệm độc đáo, đầy thú vị.          '),
(40, 2, 'Bình xịt côn trùng King Star hương Chanh 600ml', '41.00', '42', 'binh-xit-con-trung-king-star-600ml-1-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                     Bình xịt côn trùng King star 600ml có tác dụng tiêu diệt côn trùng nhanh chóng và hiệu quả tức thì giúp bạn gạt bỏ mọi nỗi lo về các chứng bệnh do côn trùng gây ra như: sốt xuất huyết, nguồn bệnh từ gián, kiến khoang...              '),
(41, 6, 'Sữa tắm gội X-men hương Gỗ chai 650g', '50.00', '75', 'tam-goi-x-men-sport-2in1-chai-650g-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                         Sữa tắm gội nước hoa X-men 2in1 Wood 650g với thành phần từ Sodium Laureth Sulfate, Sodium Chloride, Glycol Distearate, Glycerin, Water... giúp làm sạch và mang đến hương thơm quyến rũ cho tóc và cơ thể, là giải pháp tiện lợi cho nhu cầu tóc sạch khỏe và làn da sạch mát.          '),
(42, 3, 'Nước xả vải cho bé Comfort Đậm đặc cho da nhạy cảm gói 21ml (10 gói)', '80.00', '90', 'xv-comfort-dd-cho-da-nhay-cam-trang-10x21ml-30-d-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                                   Nước xả vải Comfort cho da nhạy cảm với công thức gồm ceteareath-25, acrylic polymer, hydroxyethylidene-1, calcium chloride,... là sự lựa chọn hàng đầu dành cho làn da nhạy cảm, phù hợp với quần áo trẻ em.\r\nĐồng thời giúp cho vải không bị khô cứng nhất là đối với quần áo cũ, mang lại sự mềm mại tuyệt đối cho áo quần.'),
(43, 5, 'Nước tinh khiết Sapuwa chai 330ml', '100.00', '101', 'nuoc-uong-dong-chai-sapuwa-330ml-2-1-1-700x467.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '     Nước tinh khiết Sapuwa là nước tinh khiết được xử lý qua hệ thống thẩm thấu ngược và ozon, thanh trùng bằng tia cực tím.\r\nSản phẩm chứa các khoáng chất có lợi cho sức khỏe, an toàn khi sử dụng.              \r\n                                   '),
(44, 5, 'Nước táo lên men Strongbow Gold chai 330ml', '46.00', '89', 'nuoc-ep-tao-strong-bow-gold-chai-330ml-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '       Nước táo lên men Strongbow là loại thức uống có nguồn gốc từ châu Âu và đã phổ biến toàn cầu từ hàng trăm năm nay.\r\nTáo chứa nhiều khoáng chất, dinh dưỡng, chất chống oxy hóa nên rất có lợi cho cơ thể, tốt cho hệ miễn dịch và cơ thể, giúp phòng ngừa ung thư một cách hiệu quả.             \r\n                                   '),
(46, 4, 'Ngũ cốc Nestlé Milo hương Socola hộp 170g', '100.00', '120', 'ngu-coc-an-sang-nestle-milo-170gam-2-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n Thành phần được chọn lọc kĩ càng: bột mì, đậu nành, gạo, ngô, chiết xuất mạch nha, muối, đường/cà phê với công thức đặc biệt đem tới hương vị thơm ngon hấp dẫn.\r\n                                  '),
(47, 8, 'Bột yến mạch Oatmeal Cereal hộp 800g', '57.00', '60', 'ngu-coc-yen-mach-800g-700x467-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '                   \r\n                                   Sản phẩm rất bổ dưỡng và cần thiết cho cơ thể nhờ đặc tính giúp giảm lượng cholesterol trong máu, cung cấp cho bạn khoáng chất cần thiết như selen, thiamin, photpho, mangan, đồng, acid folic, vitamin E và kẽm. ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `status`, `created`, `modified`) VALUES
(19, 'quangvinh', '123', 'lequangvinh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
