-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2021 at 05:21 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `birth_death` varchar(50) DEFAULT NULL,
  `author_image` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `birth_death`, `author_image`, `website`, `description`) VALUES
(1, 'Dale Carnegie', NULL, NULL, ' https://vi.wikipedia.org/wiki/Dale_Carnegie', 'Dale Breckenridge Carnegie (24 tháng 11 năm 1888 – 1 tháng 11 năm 1955) là một nhà văn và nhà thuyết trình Mỹ'),
(2, 'Baird T. Spalding', NULL, NULL, '', 'Baird Thomas Spalding (1872–1953) là một nhà văn tâm linh người Mỹ, tác giả của bộ sách tâm linh: Life and Teaching of the Masters of the Far East (Hành trình về phương Đông)'),
(3, 'Hans Christian Andersen', NULL, NULL, '', 'Hans Christian Andersen (2 tháng 4 năm 1805 – 4 tháng 8 năm 1875; tiếng Việt thường viết là Han-xơ Crít-xtian An-đéc-xen) là nhà văn người Đan Mạch chuyên viết truyện cổ tích cho thiếu nhi'),
(4, 'Nguyễn Du', NULL, NULL, NULL, 'Nguyễn Du (1766 –1820) tên tự là Tố Như, hiệu là Thanh Hiên, biệt hiệu là Hồng Sơn lạp hộ, Nam Hải điếu đồ , là một nhà thơ, nhà văn hóa lớn thời Lê mạt, Nguyễn sơ ở Việt Nam.'),
(5, 'Nam Cao', '1917 – 1951', 'Screenshot from 2021-02-04 13-57-52.png', 'www.namcao.net', 'Nam Cao (1915 hoặc 1917 – 1951) là một nhà văn và cũng là một chiến sĩ, liệt sĩ người Việt Nam. Ông là nhà văn hiện thực lớn (trước Cách mạng Tháng Tám), một nhà báo kháng chiến (sau Cách mạng), một trong những nhà văn tiêu biểu nhất thế kỷ 20.'),
(10, 'Nguyen trai', '1888-1999', '8-3-2021.png', 'www.nguyentrai.org', 'nha tho');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `description` text,
  `page_number` int DEFAULT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `publisher_id` int NOT NULL,
  `quantity` int NOT NULL,
  `year_of_publication` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `price_sale` float NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `isbn`, `book_name`, `description`, `page_number`, `author_id`, `category_id`, `publisher_id`, `quantity`, `year_of_publication`, `update_date`, `price_sale`, `image`) VALUES
(1, '1111111111', 'cap nhat sach 1', 'dac nhan tam cung hay!!!!!', 250, 1, 1, 1, 1, '2020-01-01', '2021-03-10', 100000, 'dac-nhan-tam.png'),
(2, '111117777', 'sach 2', 'cap nhat lai sach 2', 120, 2, 2, 2, 20, '2020-03-05', '2021-03-10', 99000, 'thay-doi-de-thanh-cong.png'),
(4, '111117777', 'doi ten moi', 'up ngay 3-5-2021', 200, 2, 3, 4, 17, '2020-03-05', '2021-03-05', 30000, 'hanh-trinh-ve-phuong-dong.jpg'),
(10, '111117777', 'sach 17', 'sach 17 khong hay', 200, 2, 3, 4, 17, '2020-03-05', '2021-03-05', 30000, 'truyen-kieu.jpg'),
(11, '111117777', 'sach 17', 'sach 17 khong hay', 200, 2, 3, 4, 17, '2020-03-05', '2021-03-05', 30000, 'truyen-kieu.jpg'),
(15, '111117777', 'sach 17', 'sach 17 khong hay', 200, 2, 3, 4, 17, '2020-03-05', '2021-03-10', 29000, 'truyen-kieu.jpg'),
(19, '88888888', 'co be ban diem', NULL, NULL, 1, 3, 3, 16, '2021-03-08', NULL, 211111, 'co-be-ban-diem.jpg'),
(20, '1111144444', 'chi pheo', 'cap nhat chi pheo', 120, 5, 5, 2, 30, '2021-03-08', '2021-03-10', 39000, 'chi-pheo.jpg'),
(21, '11111444422', 'co be ban diem', NULL, NULL, 3, 4, 3, 50, '2021-02-08', NULL, 99999, 'co-be-ban-diem.jpg'),
(22, '9999999999', 'Thay doi de thanh cong ', NULL, NULL, 1, 2, 4, 50, '2021-01-09', NULL, 89000, 'thay-doi-de-thanh-cong.png'),
(27, '978-440-29-9187-6', 'Cuon theo chieu gio', 'cap nhat thu 2', 200, 3, 2, 3, 16, '2021-03-09', '2021-03-10', 89000, 'exceptions-in-java-veranschaulicht-als-bild.jpg'),
(32, '978-125-56-5619-4', 'chi dau', 'Nguoi con gai dung cam', 100, 5, 5, 3, 21, '2019-10-10', NULL, 49000, 'chi-dau.jpg'),
(33, '978-162-74-2682-3', 'them sach moi lan 3', 'them sach lan 3', 100, 1, 2, 3, 21, '2020-05-10', '2021-03-10', 599000, '23-2-2021.png'),
(34, '978-735-91-3221-7', 'them sach lan 4', 'them sach lan 4', 32, 4, 3, 2, 11, '2020-01-12', '2021-03-10', 29000, '10-3-2021.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_des` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_des`) VALUES
(1, 'self help', 'SELF-HELP là thể loại sách được viết ra với mục đích hướng dẫn độc giả cách giải quyết và xử lý các vấn đề của bản thân.'),
(2, 'Kỹ năng mềm', 'Kỹ năng mềm - thuật ngữ dùng để chỉ kỹ năng quan trọng trong cuộc sống con người như: kỹ năng sống, giao tiếp, làm việc theo nhóm, kỹ năng quản lý thời gian, vượt qua khủng hoảng, đổi mới… Và cách để rèn luyện, học hỏi đó chính là đọc sách'),
(3, 'Triết lý nhân sinh', 'Quan niệm về sự sống con người'),
(4, 'Truyện cổ tích', 'Cổ tích là một thể loại văn học được tự sự dân gian sáng tác có xu thế hư cấu, bao gồm cổ tích thần kỳ, cổ tích thế sự, cổ tích phiêu lưu và cổ tích loài vật.'),
(5, 'Truyện ngắn', 'Truyện ngắn là một thể loại văn học. Nó thường là các câu chuyện kể bằng văn xuôi và có xu hướng ngắn gọn, súc tích và hàm nghĩa hơn các câu truyện dài như tiểu thuyết. Truyện ngắn thường chỉ tập trung vào một tình huống, một chủ đề nhất định. Trong khi đó, tiểu thuyết chứa được nhiều vấn đề, phủ sóng được một diện rộng lớn của đời sống.'),
(6, 'Thơ', 'Thơ là hình thức nghệ thuật dùng từ trong ngôn ngữ làm chất liệu, và sự chọn lọc từ cũng như tổ hợp của chúng được sắp xếp dưới hình thức lôgíc nhất định tạo nên hình ảnh hay gợi cảm âm thanh có tính thẩm mỹ cho người đọc, người nghe.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int NOT NULL,
  `employee_name` varchar(150) NOT NULL,
  `bithday` date DEFAULT NULL,
  `employee_address` varchar(255) NOT NULL,
  `employee_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `order_date` date NOT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int NOT NULL,
  `book_id` int NOT NULL,
  `quantity` int NOT NULL,
  `sale_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publisher_email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `publisher_name`, `publisher_address`, `publisher_email`) VALUES
(1, 'Nhà xuất bản Dân Trí', 'Đống Đa - Hà Nội', 'contact@vhv.vn'),
(2, 'Nhà xuất bản Lao Động', 'Đống Đa - Hà Nội', 'nxblaodong@yahoo.com'),
(3, 'Nhà xuất bản Hồng Đức', 'Quận Hoàn Kiếm - Hà Nội', ''),
(4, 'Nhà xuất bản Kim Đồng', 'Hai Bà Trưng, Hà Nội', 'info@nxbkimdong.com.vn');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `supplier_id` int NOT NULL,
  `date_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `purchase_id` int NOT NULL,
  `book_id` int NOT NULL,
  `quantity` int NOT NULL,
  `purchase_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`) VALUES
(1, 'Trí Việt', 'Quận 1 - thành phố Hồ Chí Minh', '028-38227979'),
(2, 'Phương Nam', 'Quận Tân Phú - Hồ Chí Minh', '19006401'),
(3, 'Công ty Cổ phần Sách Thái Hà', 'Cầu Giấy - Hà Nội', '(+84-4) 3793 0480');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_books_details`
-- (See below for the actual view)
--
CREATE TABLE `v_books_details` (
`book_id` int
,`isbn` varchar(50)
,`book_name` varchar(250)
,`description` text
,`page_number` int
,`quantity` int
,`price_sale` float
,`update_date` date
,`year_of_publication` date
,`image` varchar(1000)
,`author_name` varchar(255)
,`category_name` varchar(255)
,`publisher_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_books_list`
-- (See below for the actual view)
--
CREATE TABLE `v_books_list` (
`book_id` int
,`isbn` varchar(50)
,`book_name` varchar(250)
,`description` text
,`page_number` int
,`author_id` int
,`category_id` int
,`publisher_id` int
,`quantity` int
,`year_of_publication` date
,`update_date` date
,`price_sale` float
,`image` varchar(1000)
,`author_name` varchar(255)
,`publisher_name` varchar(255)
,`category_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_book_list`
-- (See below for the actual view)
--
CREATE TABLE `v_book_list` (
`book_id` int
,`isbn` varchar(50)
,`book_name` varchar(250)
,`price_sale` float
,`author_name` varchar(255)
,`category_name` varchar(255)
,`publisher_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `v_books_details`
--
DROP TABLE IF EXISTS `v_books_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_books_details`  AS  select `books`.`book_id` AS `book_id`,`books`.`isbn` AS `isbn`,`books`.`book_name` AS `book_name`,`books`.`description` AS `description`,`books`.`page_number` AS `page_number`,`books`.`quantity` AS `quantity`,`books`.`price_sale` AS `price_sale`,`books`.`update_date` AS `update_date`,`books`.`year_of_publication` AS `year_of_publication`,`books`.`image` AS `image`,`author`.`author_name` AS `author_name`,`categories`.`category_name` AS `category_name`,`publishers`.`publisher_name` AS `publisher_name` from (((`books` join `author` on((`books`.`author_id` = `author`.`author_id`))) join `categories` on((`books`.`category_id` = `categories`.`category_id`))) join `publishers` on((`books`.`publisher_id` = `publishers`.`publisher_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_books_list`
--
DROP TABLE IF EXISTS `v_books_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_books_list`  AS  select `books`.`book_id` AS `book_id`,`books`.`isbn` AS `isbn`,`books`.`book_name` AS `book_name`,`books`.`description` AS `description`,`books`.`page_number` AS `page_number`,`books`.`author_id` AS `author_id`,`books`.`category_id` AS `category_id`,`books`.`publisher_id` AS `publisher_id`,`books`.`quantity` AS `quantity`,`books`.`year_of_publication` AS `year_of_publication`,`books`.`update_date` AS `update_date`,`books`.`price_sale` AS `price_sale`,`books`.`image` AS `image`,`author`.`author_name` AS `author_name`,`publishers`.`publisher_name` AS `publisher_name`,`categories`.`category_name` AS `category_name` from (((`books` join `author` on((`author`.`author_id` = `books`.`author_id`))) join `categories` on((`categories`.`category_id` = `books`.`category_id`))) join `publishers` on((`publishers`.`publisher_id` = `books`.`publisher_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_book_list`
--
DROP TABLE IF EXISTS `v_book_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_book_list`  AS  select `books`.`book_id` AS `book_id`,`books`.`isbn` AS `isbn`,`books`.`book_name` AS `book_name`,`books`.`price_sale` AS `price_sale`,`author`.`author_name` AS `author_name`,`categories`.`category_name` AS `category_name`,`publishers`.`publisher_name` AS `publisher_name` from (((`books` join `author` on((`books`.`author_id` = `author`.`author_id`))) join `categories` on((`books`.`category_id` = `categories`.`category_id`))) join `publishers` on((`books`.`publisher_id` = `publishers`.`publisher_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`purchase_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`);

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `purchase_details_ibfk_2` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`purchase_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
