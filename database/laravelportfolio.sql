-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 05:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Professional_Heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Short_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Long_Description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_of_Birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `Professional_Heading`, `Subheading`, `Short_Description`, `Long_Description`, `Date_of_Birth`, `Website`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX Designer & Web Developer.', 'Whats the difference between web design and development? And what about UI vs UX? What do these divisions mean? Why are there so many acronyms?? Dont tech people want everything to be user friendly!?', 'I have always creative and curious, looking for the next big adventure in everything that i do. I carefully select the projects i take on and work alongside some of the most talented people in the industry.', 'I believe must bring your whole self to the table if you want to thrive in today\'s competitive world; that\'s why i decided to create this hub for all my work, thoughts and ideas. I\'ve been blessed to have developed a growing audience of loyal followers wjo offer me fantastic feedback. Take a look at my work and stay up-to-date with everything i have planned.', '20 October, 1999', 'http://enchongdeeveraofficial.github.io/', '2022-03-03 02:23:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cloud_Storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Proffesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobile_No` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `Twitter`, `Facebook`, `Instagram`, `Cloud_Storage`, `Github`, `Address`, `Proffesion`, `Mobile_No`, `created_at`, `updated_at`) VALUES
(1, 'https://twitter.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://drive.google.com/drive/folders/1QrwK8M0aYESpwRK7HeEU6qRJeA_ofOSK?usp=sharing', 'https://github.com/deeveraEnchongOfficial', 'Sta.Barbara Pangasinan', 'Web Developer, Android Developer, Game Developer, Photo/Video Editor', '09307248329', '2022-03-03 02:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_23_020925_create_skills_table', 1),
(6, '2022_02_23_092452_create_seos_table', 1),
(7, '2022_02_24_091251_create_portfolios_table', 1),
(8, '2022_02_26_013508_create_abouts_table', 1),
(9, '2022_02_26_054851_create_resumes_table', 1),
(10, '2022_02_28_021410_create_information_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Project_Screenshot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Project_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Project_Link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `Project_Screenshot`, `Project_Name`, `Project_Link`, `created_at`, `updated_at`) VALUES
(1, '20220303022940.jpg', 'PHP', NULL, '2022-03-02 18:29:40', '2022-03-02 18:29:40'),
(2, '20220303023335.jpg', 'IT Project Management', NULL, '2022-03-02 18:33:35', '2022-03-02 18:33:35'),
(3, '20220303023353.jpg', 'Python', NULL, '2022-03-02 18:33:53', '2022-03-02 18:33:53'),
(4, '20220303023410.jpg', 'HTML', NULL, '2022-03-02 18:34:10', '2022-03-02 18:34:10'),
(5, '20220303023425.jpg', 'Deep Learning', NULL, '2022-03-02 18:34:25', '2022-03-02 18:34:25'),
(6, '20220303023438.jpg', 'Technolympics', NULL, '2022-03-02 18:34:38', '2022-03-02 18:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `Category`, `Course_Position`, `Institute`, `Duration`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'Education', 'Student', 'Tuliao Elementary School', '2006 - 2013', 'it was fun', '2022-03-02 18:20:49', '2022-03-02 18:20:49'),
(2, 'Education', 'Highschool Student', 'Tuliao National High School', '2013-2018', 'I am ambitious and driven. I thrive on challenge and constantly set goals for my self, so i have something to strive towards. I\'m not comfortable with setting, and I\'m always looking for an opportunity to do better and achieve greatness.', '2022-03-02 18:21:16', '2022-03-02 18:21:16'),
(3, 'Education', 'Bachelor of Information Technology', 'Pangasinan State University', '2018-2022', 'I am ambitious and driven. I thrive on challenge and constantly set goals for my self, so i have something to strive towards. I\'m not comfortable with setting, and I\'m always looking for an opportunity to do better and achieve greatness.', '2022-03-02 18:21:51', '2022-03-02 18:21:51'),
(4, 'Pofessional Experience', 'On The Job Training', 'Bitstop', '2017-2018', 'We repair hardware and software', '2022-03-02 18:22:15', '2022-03-02 18:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Siteicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Website_Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Site_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `Siteicon`, `Website_Title`, `Keywords`, `Site_Description`, `created_at`, `updated_at`) VALUES
(1, '20220302041552.png', 'Enchong', 'web development,php development', 'i am a web developer, i make website and php web portals .', '2022-03-03 02:03:49', '2022-03-02 18:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Skill_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expertise_Level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `Skill_Name`, `Expertise_Level`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 60, '2022-03-02 18:24:42', '2022-03-02 18:24:42'),
(2, 'CSS', 50, '2022-03-02 18:24:52', '2022-03-02 18:24:52'),
(3, 'PHP', 70, '2022-03-02 18:25:02', '2022-03-02 18:25:02'),
(4, 'MYSQL', 55, '2022-03-02 18:25:13', '2022-03-02 18:25:13'),
(5, 'Javascript', 45, '2022-03-02 18:25:30', '2022-03-02 18:25:30'),
(6, 'Bootstrap', 55, '2022-03-02 18:25:41', '2022-03-02 18:25:41'),
(7, 'Laravel', 50, '2022-03-02 18:25:51', '2022-03-02 18:25:51'),
(8, 'C#', 40, '2022-03-02 18:26:04', '2022-03-02 18:26:04'),
(9, 'Python', 40, '2022-03-02 18:26:13', '2022-03-02 18:26:13'),
(10, 'NodeJS', 35, '2022-03-02 18:26:24', '2022-03-02 18:26:24'),
(11, 'C', 40, '2022-03-02 18:26:33', '2022-03-02 18:26:33'),
(12, 'C++', 25, '2022-03-02 18:26:43', '2022-03-02 18:26:43'),
(13, 'Java', 45, '2022-03-02 18:26:53', '2022-03-02 18:26:53'),
(14, 'React.js', 25, '2022-03-02 18:27:03', '2022-03-02 18:27:03'),
(15, 'Jquery', 40, '2022-03-02 18:27:14', '2022-03-02 18:27:14'),
(16, 'Photoshop', 40, '2022-03-02 18:27:27', '2022-03-02 18:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_bg.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_image`, `cover_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Enchong', 'enchong@admin.com', NULL, '$2y$10$aXR5wFJqFPWCMvzknYF1D.HN5URMauufKOvMJOmLT.pM/b4FSsfQq', '20220303023146.png', '20220303023155.png', NULL, '2022-03-02 18:07:34', '2022-03-02 18:31:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
