-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 08:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdeveloper`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetFooterData` ()  BEGIN
    SELECT title,text FROM footercontent;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `back_front`
--

CREATE TABLE `back_front` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `back_front`
--

INSERT INTO `back_front` (`id`, `title`, `text`, `video`) VALUES
(1, 'back-end/front-end', 'به طور کلی به فرایند ایجاد یک وب سایت ، طراحی صفحات وب می گویند . طراحی وب شامل بسیاری از مهارت ها و رشته های مختلف در تولید و نگهداری وب سایت ها می شود.طراحی صفحات وب شامل طراحی گرافیک وب، طرح بندی صفحه وب ، بهینه سازی موتور جستجوگر و تولید محتوا می باشد\r\n\r\n', 'video/main1.gif');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) NOT NULL,
  `title` varchar(25) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(4000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `title`, `text`) VALUES
(2, 'صفحات وب', 'ما در راست چین به شما کمک می کنیم کسب و کار آنلاین خودتان را با قالب های وردپرس، افزونه های کاربردی و اسکریپت های حرفه ای سریع، ساده و ارزان بسازید. برنامه نویسان راست چین تلاش می کنند راه اندازی وب سایت به یک تجربه حرفه ای از کیفیت و خدمات پشتیبانی تبدیل شود. مدرن ترین متدهای طراحی وب در قالب هزاران محصول آماده طراحی سایت هم اکنون در دسترس شماست'),
(3, 'خصوصیات', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.!'),
(6, 'پروژه های بزرگ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.?'),
(10, ' پروژه های بزرگ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.?'),
(11, 'جدیدترین پستها', 'React js یکی از کتابخانه های جاوا اسکریپت است که open source است. برنامه نویسان فرانت اند برای ساخت ui و صفحات وب اپلیکیشن های تک صفحه ای استفاده می کنند. قبل از یادگیری react شما باید حداقل آشنایی لازم را با جاوا اسکریپت داشته باشید. پویایی المنت های صفحات وب به خاطر استفاده از جاوا اسکریپت و یا کتابخانه های آن است. کتابخانه های javascript کدهای آماده ای هستند که با جاوا اسکریپت توسعه داده شده اند.'),
(12, 'تیم ما', 'تیم مامتشکل از مهندسین وطراحان خبره می باشد که درکمترین زمان وکمترین هزینه خدمات طراحی وب سایت را به مشتریان گرامی تحویل دهند همیشه ازاینکه ئرکنار شما هستیم به تیم  طراح این شرکت می بالیم'),
(13, 'سوالات متداول', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.!\r\n\r\n'),
(14, 'تماس با ما', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.!');

-- --------------------------------------------------------

--
-- Table structure for table `newposts`
--

CREATE TABLE `newposts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(400) COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `more` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `newposts`
--

INSERT INTO `newposts` (`id`, `title`, `text`, `img`, `more`) VALUES
(1, 'دربارهmy-sql', 'بانک اطلاعاتی به بیان ساده مجموعه‌ای از داده های ساختار یافته است', 'img/our colleagues1.jpg', '<a href=\"about_mysql.php\">بیشتر...</a>'),
(2, 'کتابخانه های جاوا اسکریپت', 'داشتن یک وبسایت عالی نیازمند توانایی های بسیاری است، اما یادتان نرود که هیچ احتیاجی به توسعه همه چیز از ابتدای آن ندارید. برای استفاده از هرکدام کتابخانه هایی که در این مقاله از آن ها صحبت می شود شما نیازی ندارید که در رابطه با آن کتابخانه حرفه‌ای باشید، تنها داشتن دانش کافی از جاوا اسکریپت تا حد زیادی کافی است.', 'img/our colleagues2.jpg', '<a href=\"#\">بیشتر</a>'),
(3, 'فریم ورک های php', 'فریم ورک های PHP بستری برای ایجاد برنامه‌های وب PHP است. این فریمورک‌ها از کتابخانه‌های کد (code libraries) برای توابع متداول استفاده می‌کنند، و تعداد کدهای اصلی مورد نیاز برای نوشتن را کاهش می‌دهند. در واقع فریم ورک های PHP ساختار اساسی را برای ساده‌سازی توسعه برنامه‌های وب فراهم می‌کند و اکثر توسعه‌دهندگان از آنها استفاده می‌کنند چرا که روند توسعه را تسریع می‌کنند. در این مقاله به شما خواهیم گفت', 'img/our colleagues3.png', '<a href=\"#\">بیشتر</a>');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(400) COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `name`, `text`, `img`) VALUES
(1, 'جان اسمیت', 'توسعه دهنده صفحات وب', 'img/our colleagues6.jpg'),
(2, 'جسیکاراش', 'فاندر', 'img/team4.jpg'),
(3, 'جیسون هابیت', 'طراح پایگاه داده', 'img/team3.jfif'),
(4, 'سامانتااسمیت', 'Co-finder', 'img/team2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(400) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `text`) VALUES
(1, 'سوال اول', 'آیا وب اپلیکیشن هم خروجی دارید؟<br>\r\nپاسخ :بله در صورت تمایل کارفرما خروجی وب اپلیکیشن هم ارائه می شود\r\n'),
(2, 'سوال دوم', 'سایت در تبلیغات گوگل تبلیغ می گردد؟<br>\r\nپاسخ: بله درصورت تمایل واخذ هزینه تبلیغات این گزینه در صفحه تبلیغات گوگل فعال می گردد'),
(3, 'سوال سوم', 'ترندسایت چقدرطول میکشد؟<br>\r\nپاسخ: باتوجه به پروسه این کارتوسط گوگل آنالاتیکس حدود40تا60روز زمان بر هست...');

-- --------------------------------------------------------

--
-- Table structure for table `responsive_webpages`
--

CREATE TABLE `responsive_webpages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `responsive_webpages`
--

INSERT INTO `responsive_webpages` (`id`, `title`, `text`, `img`) VALUES
(3, 'صفحات وب', 'مابه شما کمک می کنیم تا آنچه در رویای شماست به حقیقت بپیوندد ...طراحی سایتهای کاملا ریسپانسیو مطابق سلیقه شما قابل استفاده در انواع  گجتها وظاهری زیبا فقط به تیم ما بپیوندید', 'img/Programmer-cuate.png');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `text`, `logo`) VALUES
(1, 'instagram', 'img/instagram.png'),
(2, 'facebook', 'img/facebook.png'),
(3, 'twitter', 'img/twitter.png'),
(4, 'telegram', 'img/telegram.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(25) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '1234', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `web_pages`
--

CREATE TABLE `web_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(4000) COLLATE utf8_persian_ci NOT NULL,
  `icon_name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `icon_text` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `web_pages`
--

INSERT INTO `web_pages` (`id`, `title`, `description`, `icon_name`, `icon_text`, `img`) VALUES
(1, 'صفحات وب', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.!', 'قوی', 'وب سایتهای قوی', 'img/cpu.png'),
(2, '', '', 'شبکه موبایل', 'پشتیبانی از شبکه های سلولی موبایل', 'img/mobile.png'),
(3, 'صفحات وب', 'درباره صفحات وب', 'پشتیبانی ازشبکه ', 'پشتیبانی ازشبکه های سرور واینرانت محلی', 'img/network.png'),
(4, '', '', 'سرور', 'دارای سرورهای قدرتمندوپشتیبانی از انواع هاست و دامین', 'img/server.png'),
(5, '', '', 'فضای ابری', 'پشتیبانی از فضای ابری(cloud)جهت افزایش سرعت وحجم بیشتر', 'img/cloud.png'),
(6, '', '', 'دانلود', 'فضای دانلودبیشتر', 'img/download.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `back_front`
--
ALTER TABLE `back_front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newposts`
--
ALTER TABLE `newposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsive_webpages`
--
ALTER TABLE `responsive_webpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `web_pages`
--
ALTER TABLE `web_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `back_front`
--
ALTER TABLE `back_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newposts`
--
ALTER TABLE `newposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `responsive_webpages`
--
ALTER TABLE `responsive_webpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_pages`
--
ALTER TABLE `web_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
