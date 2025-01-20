-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2025 at 10:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `china`
--

-- --------------------------------------------------------

--
-- Table structure for table `bgimg`
--

CREATE TABLE `bgimg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homebg` varchar(255) NOT NULL,
  `aboutbg` varchar(255) NOT NULL,
  `offerbg` varchar(255) NOT NULL,
  `contactbg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bgimg`
--

INSERT INTO `bgimg` (`id`, `homebg`, `aboutbg`, `offerbg`, `contactbg`, `created_at`, `updated_at`) VALUES
(2, 'public/YrWVT84NmIfNDBYbdbIAFb21naCNzQpe4G3cNR7L.jpg', 'public/whCVWHHGMnefdWdgeJ9Y4SHXfvIh6Ts8SPj4j68v.jpg', 'public/fo5DGEAF04scpiEPCPr0mKTv7Pxm5PN1yPkYCZQ3.jpg', 'public/iZF6Q7nSKT46O218oB6H9ULZ1RFxynZZ7pUi0MXs.jpg', '2025-01-19 19:42:20', '2025-01-19 19:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_fa` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name_en`, `name_fa`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Technoloy', 'تیکنالوژی', 'public/AvqZWVOj8uwlXpO6qYwjqojOC397xoX65W8KzZXy.jpg', '2025-01-19 19:45:18', '2025-01-19 19:45:18'),
(2, 'Home Furniture', 'فرنیچر خانه', 'public/14IapJ1X2DmPg7HYLjS0iDfQGv7TWbRdwWqeQitE.jpg', '2025-01-19 19:47:54', '2025-01-19 19:47:54'),
(3, 'Dishes', 'ظرف', 'public/U74WAfqsxb5RX6Yk7mq4aLRNjXrk1HfYuawEVz6u.jpg', '2025-01-19 19:51:00', '2025-01-19 19:51:00'),
(4, 'Home Decors', 'وسایل تزینی خانه', 'public/tQ3qGqszxVOHqUAtVi2qRp8fqazvcGHgOhtcHgX4.jpg', '2025-01-19 19:55:33', '2025-01-19 19:55:33'),
(5, 'Clothes', 'پوشاک', 'public/5zFrgOEfaiACftwF7fOMl5WfpAHSZHJTRC7foTdV.jpg', '2025-01-19 20:12:12', '2025-01-19 23:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `address_fa` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `info_en` text NOT NULL,
  `info_fa` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `number`, `email`, `address_en`, `address_fa`, `map`, `info_en`, `info_fa`, `img`, `created_at`, `updated_at`) VALUES
(1, '61415572652', 'sh.kosha2020@gmail.com', 'Sydney- NSW - Australia', 'سیدنی نیو ساوت ویلز استرالیا', 'public/tN5Cw5UPoXCtH0EskRv5ndEBrWOCppeD21HoGPO8.jpg', 'Nabawi China is a Sydney-based company specializing in sourcing and procurement services to connect Australian businesses with reliable suppliers in China. The company provides end-to-end solutions, including product sourcing, supplier negotiation, quality assurance, and logistics coordination. With a focus on efficiency and attention to detail, Nabawi China helps merchants streamline their supply chains, secure competitive pricing, and ensure high-quality products, making it a trusted partner for businesses seeking to leverage China\'s manufacturing capabilities.', 'Nabawi China یک شرکت مستقر در سیدنی است که متخصص در تامین منابع و خدمات تدارکاتی است تا مشاغل استرالیایی را با تامین کنندگان قابل اعتماد در چین مرتبط کند. این شرکت راه حل های نهایی از جمله منبع یابی محصول، مذاکره با تامین کننده، تضمین کیفیت و هماهنگی لجستیک را ارائه می دهد. نباوی چین با تمرکز بر کارایی و توجه به جزئیات، به بازرگانان کمک می‌کند تا زنجیره‌های تامین خود را ساده‌سازی کنند، قیمت‌های رقابتی را ایمن کنند و محصولات با کیفیت بالا را تضمین کنند و آن را به شریکی قابل اعتماد برای کسب‌وکارهایی تبدیل کنند که به دنبال استفاده از قابلیت‌های تولیدی چین هستند.', 'public/llVCPZ3GReZ1zUvySxmNF0fjLIqXToXUoZyGFZlg.jpg', '2025-01-19 20:53:54', '2025-01-19 23:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Shokrullah Kosha', 'sh.kosha2020@gmail.com', '03201162723', 'fsdafklas', '2025-01-19 21:40:03', '2025-01-19 21:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sh.kosha2020@gmail.com', '2025-01-19 23:35:54', '2025-01-19 23:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_12_31_075303_create_bgimg_table', 1),
(20, '2023_12_31_092008_create_contact_table', 1),
(21, '2023_12_31_102853_create_order_table', 1),
(22, '2023_12_31_161724_create_catagory_table', 1),
(23, '2024_01_01_140229_create_member_table', 1),
(24, '2024_01_01_142627_create_company_table', 1),
(25, '2024_01_02_055435_create_service_table', 1),
(26, '2024_01_06_054339_create_product_table', 1),
(27, '2024_01_07_094216_create_testimonial_table', 1),
(28, '2024_01_07_142503_create_offer_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_fa` varchar(255) NOT NULL,
  `content_en` text NOT NULL,
  `content_fa` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `title_en`, `title_fa`, `content_en`, `content_fa`, `img`, `created_at`, `updated_at`) VALUES
(2, '🌟 Special Offer Alert! 🌟', '🌟تخفیف بسیار ویژه🌟', 'We\'re excited to announce exclusive special offers for our valued customers! 🎉 Whether you\'re looking for high-quality sourcing, streamlined procurement, or reliable logistics solutions, we\'ve got the perfect deal for you.', 'ما هیجان زده هستیم که پیشنهادات ویژه انحصاری را برای مشتریان گرامی خود اعلام کنیم! 🎉 چه به دنبال منبع یابی با کیفیت بالا، تدارکات ساده، یا راه حل های لجستیکی مطمئن باشید، ما برای شما بهترین پیشنهاد را داریم.', 'public/ggQSfWVga2DTIqLnXT1A00Lg637tyBisF2qR7M9T.jpg', '2025-01-19 21:27:54', '2025-01-19 21:27:54'),
(3, '🌟 Exciting Special Offers for Our Valued Customers! 🌟', '🌟پیشنهادات ویژه هیجان انگیز برای مشتریان ارزشمند ما! 🌟', 'At Nabawi China, we believe in rewarding our customers with the best deals to support your business growth! 🚀 That’s why we’re thrilled to bring you exclusive special offers designed to make your sourcing and procurement easier, faster, and more affordable.', 'در Nabawi China، ما معتقدیم که به مشتریان خود با بهترین معاملات برای حمایت از رشد تجارت شما پاداش می دهیم! 🚀 به همین دلیل است که ما خوشحالیم که پیشنهادهای ویژه منحصر به فردی را برای شما ارائه می کنیم که به منظور آسان تر، سریع تر و مقرون به صرفه تر کردن منابع و تهیه شما طراحی شده است.', 'public/aOjLPFdp9c5iewJ0cetl6DlPJk0Adr5h3UKYNhUn.jpg', '2025-01-19 21:33:52', '2025-01-19 23:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product_id`, `product_name`, `name`, `email`, `number`, `detail`, `delivery`, `address`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Shokrullah Kosha', 'sh.kosha2020@gmail.com', '78789798', 'fdsakfksadf', 'By Ship', '28 Douglas st', '2025-01-19 21:39:55', '2025-01-19 21:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_fa` varchar(255) NOT NULL,
  `catagory_id` bigint(20) UNSIGNED NOT NULL,
  `detail_en` text NOT NULL,
  `detail_fa` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `productType` varchar(255) NOT NULL DEFAULT 'simple',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name_en`, `name_fa`, `catagory_id`, `detail_en`, `detail_fa`, `price`, `img`, `productType`, `created_at`, `updated_at`) VALUES
(1, 'Girls Cargo Paints', 'پتلون کارگو دخترانه', 5, 'New Cargo Paints || Outdoor || Indoor || Picnic - Stylish Girls and Ladies. All sizes', 'پتلون کارگو در رنگ های مختلف و موارد استفاده متفاوت', '$55', 'public/xyyBD5YWWes3U94HIR8NH0l3T3G5LE3BRBM8dtRc.jpg', 'simple', '2025-01-19 20:21:27', '2025-01-19 20:21:27'),
(2, 'Jacket', 'جاکت', 5, 'very good spring and autumn jackets', 'جاکت های بسیار خوبی بهاری و خزانی', '$93', 'public/6QCuRk9QPQkmggAuSSMTduOqgfm52IjPQSJtNHbo.jpg', 'featured', '2025-01-19 20:24:49', '2025-01-19 20:28:01'),
(3, 'Sun Block Hat', 'کلاه ضد افتاب', 5, 'Nice Product', 'کلاه تیت است', '$2', 'public/8RUMrhPQoo9cJcxrMqqS7pXUdVYKU8RtRqpGMbM4.jpg', 'simple', '2025-01-19 20:27:19', '2025-01-19 20:27:19'),
(4, 'Computer Mouse', 'موز برای لبتاب', 1, 'Nice colored mouse', 'یک موز بسبار امتو تیت', '$93', 'public/wYZwKHkfKG248Eh3v8wzjDpMXl0NofXCNbLwiN6N.jpg', 'featured', '2025-01-19 20:30:15', '2025-01-19 20:39:02'),
(5, 'Keyboard', 'کیبورد', 1, 'Keybaord with lights and soft', 'یک کیبورد نرم و رنگارنگ', '$105', 'public/rGr23J4K411AnZo6nLnNry0gCLqoQ1T1UPNWZDQV.jpg', 'featured', '2025-01-19 20:32:14', '2025-01-19 20:39:07'),
(6, 'Wall Light', 'چراغ دیواری', 4, 'decorate your walls with nice lights', 'برای تزیین دیوار های خانه تان', '$88', 'public/MODEHetB7VjfTWDr6e5HpY5Sa9rLJds8p0xxKBu2.jpg', 'simple', '2025-01-19 20:34:25', '2025-01-19 20:34:25'),
(7, 'Wooden Spoons', 'قاشق های چوبی', 3, 'Spoons made of wood, good for looking nice', 'قاشق های چوبی', '$433', 'public/EDtiZkAbXKy3vchEIOtRw0E9ivfm3xIRd4RLgzBw.jpg', 'simple', '2025-01-19 20:36:22', '2025-01-19 23:26:23'),
(8, 'Sofa', 'کوج', 2, 'Soft Sofas nice looking home', 'کوج بسیار تیت برای خانه', '$89', 'public/CqXQHbm31dmFX8EEru3iiuJqLN17rBLY4ZtouNk0.jpg', 'featured', '2025-01-19 20:38:17', '2025-01-19 20:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_fa` varchar(255) NOT NULL,
  `detail_en` text NOT NULL,
  `detail_fa` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name_en`, `name_fa`, `detail_en`, `detail_fa`, `created_at`, `updated_at`) VALUES
(1, 'Product Sourcing', 'پیدا کردن اجناس', 'Helping merchants find reliable suppliers and manufacturers for the products they want to sell.', 'کمک کردن به تاجران برای پیدا کردن کارخانه قابل اعتماد برای خرید', '2025-01-19 20:43:57', '2025-01-19 20:43:57'),
(2, 'Supplier Negotiation', 'مذاکره کردن', 'Negotiating pricing, terms, and conditions with suppliers to maximize profit margins for merchants.', 'مذاکره کردن با تامیل کننده ها برای قیمت مناسب', '2025-01-19 20:45:33', '2025-01-20 00:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `job`, `image`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shokrullah', 'Programmer', 'public/wjcpz9vprJE9FFgv8nWsPPivx2vtU2XLtf2H2CYt.jpg', 'This is the best company I have ever seen. It has really active support team who are available 24/7 for all the services they provide.', 'approved', '2025-01-19 20:55:40', '2025-01-19 20:56:00'),
(2, 'Shokrullah Kosha', 'Web Developer', 'public/bMwJL0WKYODSyRODyTJhsUExzYdpzGaugyLIbcb2.jpg', 'Nabawi China is highly regarded for its professionalism and efficiency in sourcing and procurement services. The company excels at connecting businesses with reliable suppliers in China, ensuring quality and cost-effectiveness.', 'approved', '2025-01-19 20:59:06', '2025-01-19 20:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Shokrullah Kosha', 'sh.kosha2020@gmail.com', NULL, '$2y$12$n3H.K1TRVJDlxlc.7HOZbOP1zy4607pOK/mGD1foPBx9KjJLCZnEC', 'admin', '2025-01-19 19:25:45', '2025-01-19 19:25:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgimg`
--
ALTER TABLE `bgimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bgimg`
--
ALTER TABLE `bgimg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
