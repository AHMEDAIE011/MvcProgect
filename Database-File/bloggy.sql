-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggy`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `product_id`) VALUES
(1, 'ahmed', 'info@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quam hic iusto tenetur aliquid, neque pariatur beatae. Similique, suscipit reprehenderit accusamus aliquid mollitia quisquam corrupti reiciendis, delectus sunt eaque itaque.\r\n', 6),
(2, 'ahmedali', 'info2222222@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quam hic iusto tenetur aliquid, neque pariatur beatae. Similique, suscipit reprehenderit accusamus aliquid mollitia quisquam corrupti reiciendis, delectus sunt eaque itaque.\r\n', 6),
(3, 'ahmed ali sayed', 'admin@admin.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quam hic iusto tenetur aliquid, neque pariatur beatae. Similique, suscipit reprehenderit accusamus aliquid mollitia quisquam corrupti reiciendis, delectus sunt eaque itaque.\r\n', 6),
(4, 'ahmed 200', 'admin@AHMED.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quam hic iusto tenetur aliquid, neque pariatur beatae. Similique, suscipit reprehenderit accusamus aliquid mollitia quisquam corrupti reiciendis, delectus sunt eaque itaque.\r\n', 7),
(5, 'mohamed', 'capomohamed819@yahoo.com', 'aasdasdsddadsddassadsadasdsadasaasdasdsddadsddassadsadasdsadasaasdasdsddadsddassadsadasdsadas', 6);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`) VALUES
(29, '1717338798.jpg', 7),
(30, '1717338813.jpg', 7),
(31, '1717338822.jpg', 7),
(35, '1718024745.webp', 2),
(36, '1718024761.jpeg', 2),
(37, '1718024841.jpeg', 2),
(38, '1718025731.jpg', 5),
(39, '1718025743.webp', 5),
(40, '1718026369.webp', 6),
(41, '1718026379.jpeg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `details`, `service_id`) VALUES
(2, 'منتخب مصر', 'هشام يكن يضع روشتة فوز منتخب مصر على غينيا بيساو..فيديو ', ' أكد هشام يكن، نجم الزمالك ومنتخب مصر السابق، ضرورة الربط بين الشق الدفاعى مع الشق الهجومى من أجل تحقيق فوز منتخب مصر على غينيا بيساو فى المواجهة المحدد لها السابعة مساء اليوم، فى الجولة الرابعة من تصفيات أفريقيا المؤهلة لنهائيات كأس العالم.\r\n\r\nوأضاف يكن، فى مداخلة هاتفية على تليفزيون اليوم السابع، أن انسجام اللاعبين ضرورة أيضا يمثل 70% من قوة الفراعنة، مشيرا إلى أهمية دور محمد صلاح فى المنتخب، مطالبا حسام حسن المدير الفنى للفراعنة بضرورة خلق الدعم لصلاح فى الهجوم عن طريق زملائه\r\n', 1),
(5, 'منتخب مصر لسيدات سلاح', 'سيدات مصر لسلاح سيف المبارزة يتوجن بذهبية ببطولة أفريقيا للفرق ', ' توج منتخب مصر لسيدات سلاح سيف المبارزة فى منافسات الفرق بالميدالية الذهبية ببطولة أفريقيا للسلاح التي تستضيفها المغرب وتستمر حتى 10 يونيو الجاري.\r\n\r\nوأحرز منتخب \"مصر\" الذهبية بعد فوزه على منتخب جنوب أفريقيا في المباراة النهائية بنتيجة 40 - 21، ليحصد المنتخب المصري على الميدالية الذهبية فيما حقق المنتخب جنوب أفريقيا الميدالية الفضية.', 1),
(6, 'السياحة:', 'جهود مكثفة لتقديم كافة التسهيلات وخدمات متميزة شاملة لحجاج السياحة ', ' في إطار حرص وزارة السياحة والآثار على تعزيز جودة الخدمات المقدمة لحجاج السياحة والتأكد من تقديم لهم أفضل الخدمات، تكثف الوزارة، جهودها التي تقوم بها لتقديم كافة التسهيلات والخدمات اللازمة المتميزة والرعاية الشاملة لهؤلاء الحجاج بما يضمن تجربة حج مريحة وميسرة، وهو ما يأتي في ضوء توجيهات الدولة المصرية في هذا الإطار.', 8),
(7, 'التعاون الدولى', 'وزيره التعاون الدولى تعقد مائدة مستديرة مع نائب رئيس بنك التنمية الجديد ', 'قبيل انطلاق فعاليات الملتقى الأول لبنك التنمية الجديد في مصر، عقدت الدكتورة رانيا المشاط، وزيرة التعاون الدولي والمحافظ المناوب لمصر لدى بنك التنمية الجديد، مائدة مستديرة مع أنيل كيشورا، نائب رئيس بنك التنمية الجديد وكبير مسؤولي المخاطر، وبمشاركة العديد من ممثلي القطاع الخاص ومراكز الفكر والأبحاث في مصر، من بينهم أسامة الجوهري، مساعد رئيس الوزراء ورئيس مركز المعلومات ودعم اتخاذ القرار، ومحمد إيهاب، المدير التنفيذي لشركة إنطلاق، والدكتور سمير صبري،', 8);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `details`) VALUES
(1, 'الرياضه', 'كل ما يهمك حول الاخبار الخاصه بالرياضه'),
(8, 'الاقتصاد', 'كل ما يهمك حول الاخبار الخاصه بالاقتصاد');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`) VALUES
(5, 'ahmed', 'ahmed@gmail.com', '$2y$10$rvv5HJ3rMOFhJ3ihuu7DrOskdB7jOcnSAp.iUHuEV6SXtiRHfRJyi', 'ali'),
(2, 'ahmed', 'aaadaasdaads@gmail.com', '$2y$10$P1NUvxGme6kcAJUxt1KYFeMdc5PQma0ap/TBKNzMyENbUrkqjdLmW', 'ahmedaieahmedaie'),
(3, 'ahemd ales', 'ahmed@gmail.com', '$2y$10$bpQQW5vjCLNK//xe9mn5fe7STjnZvs8g0D9R4qGFu036VOu5DV/zW', 'ahemd ales'),
(9, 'adminAhmedsss', 'admins@admin.com', '$2y$10$/pWIm4zVjAqWN005l4s5OuAYgaTzkS55mnmGKpKLGVh3He3ZOgcOm', 'ahemd asds'),
(6, 'ahmed', 'ahmed@gmail.com', '$2y$10$t8b/e93fySUpls546tf/9u5X9PbGzX5cvb8NfnyEt93FX4r2CDU.u', 'ali'),
(7, 'AHMEDALI', 'info@gmail.com', '$2y$10$IOCXvMNLI2Hs6dtaPvCPGOI/ArCmdUeAi22ZI4QYHa9fkiGVsx3Zi', 'AHMEDALI'),
(8, 'ahmedAli2', 'info2@gmail.com', '$2y$10$.IXq91Ef3OzFTVxCE2VQzuHq2USA/XtUfgzX1hP7DAdxPw3v0u9QO', 'ahmed ali'),
(10, 'adminAhmedAli', 'admin@admin.com', '$2y$10$Xkji4Hi7d2//is8mdrmHgOK/Xkuxlk.0HGK3XLB9MMzJc.lBbY7du', 'ahmed ali sayed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
