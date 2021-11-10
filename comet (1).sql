-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 05:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comet`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(11, 'HP', 'HP', '5a1492beaab743be7aa039fed256d564.png', 1, 0, '2021-09-29 17:36:30', '2021-09-30 15:12:05'),
(12, 'Realme', 'Realme', 'ca11e5850d63e10712dbc29db6a249c0.png', 1, 0, '2021-09-29 17:36:42', '2021-09-29 17:36:42'),
(13, 'Samsung', 'Samsung', 'a47c0828ee3bde90cf747e24ade1246d.png', 1, 0, '2021-09-29 17:36:56', '2021-10-01 06:04:55'),
(14, 'LG', 'LG', '94abe08a74abd55e35f51046fab4ae08.png', 1, 0, '2021-09-29 17:38:39', '2021-09-29 17:38:39'),
(15, 'Google', 'Google', 'd882ea68c031a4b6cd90452ae430f493.png', 1, 0, '2021-09-29 17:42:13', '2021-09-29 17:42:13'),
(16, 'Richman', 'Richman', 'e5eaaf05be00bfcd433f5f656de7641b.png', 1, 0, '2021-10-01 06:02:47', '2021-10-01 06:02:47'),
(18, 'sdfsaf', 'sdfsaf', '', 1, 0, '2021-10-02 16:15:11', '2021-10-02 16:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Bangladeshi Vajitable', 'bangladeshi-vajitable', 1, '2021-03-28 18:24:05', '2021-09-30 15:13:38'),
(15, 'Rajninti and orthoniti', 'rajninti-and-orthoniti', 1, '2021-03-28 18:24:10', '2021-09-30 15:25:49'),
(17, 'Vlog post', 'vlog-post', 1, '2021-03-28 19:19:45', '2021-09-30 15:25:21'),
(18, 'বিনোদন', 'binodn', 1, '2021-04-08 07:36:39', '2021-04-08 07:36:39'),
(19, 'খেলা', 'khela', 1, '2021-04-08 07:37:47', '2021-04-08 07:37:47'),
(20, 'বানিজ্য', 'banijz', 1, '2021-04-08 07:54:31', '2021-04-08 07:54:31'),
(23, 'শিক্ষা', 'শিক্ষা', 1, '2021-09-21 15:55:24', '2021-09-21 15:55:24'),
(24, 'চাকরি', 'চাকরি', 1, '2021-09-21 16:01:41', '2021-09-21 16:01:41'),
(25, 'বিশ্ব', 'বিশ্ব', 1, '2021-09-22 16:19:35', '2021-09-22 16:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 21, 14, NULL, NULL),
(2, 21, 17, NULL, NULL),
(3, 22, 17, NULL, NULL),
(4, 22, 15, NULL, NULL),
(5, 23, 15, NULL, NULL),
(6, 24, 19, NULL, NULL),
(7, 25, 19, NULL, NULL),
(8, 26, 19, NULL, NULL),
(9, 27, 18, NULL, NULL),
(10, 28, 18, NULL, NULL),
(11, 29, 18, NULL, NULL),
(12, 30, 18, NULL, NULL),
(13, 31, 20, NULL, NULL),
(14, 32, 20, NULL, NULL),
(15, 32, 19, NULL, NULL),
(16, 34, 20, NULL, NULL),
(17, 34, 19, NULL, NULL),
(18, 35, 20, NULL, NULL),
(19, 35, 18, NULL, NULL),
(20, 36, 15, NULL, NULL),
(21, 36, 14, NULL, NULL),
(22, 38, 19, NULL, NULL),
(23, 38, 18, NULL, NULL),
(24, 38, 15, NULL, NULL),
(25, 39, 18, NULL, NULL),
(26, 40, 20, NULL, NULL),
(27, 40, 18, NULL, NULL),
(28, 40, 15, NULL, NULL),
(29, 41, 23, NULL, NULL),
(30, 42, 23, NULL, NULL),
(31, 42, 19, NULL, NULL),
(32, 43, 24, NULL, NULL),
(33, 43, 23, NULL, NULL),
(34, 44, 25, NULL, NULL),
(35, 45, 20, NULL, NULL),
(36, 45, 19, NULL, NULL),
(37, 46, 25, NULL, NULL),
(38, 46, 24, NULL, NULL),
(39, 47, 25, NULL, NULL),
(40, 47, 20, NULL, NULL),
(41, 48, 24, NULL, NULL);

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
(4, '2021_03_19_224738_create_roles_table', 1),
(6, '2021_03_27_191514_create_categories_table', 2),
(7, '2021_03_29_225709_create_tags_table', 3),
(10, '2021_03_27_170702_create_posts_table', 4),
(11, '2021_04_03_235143_create_category_post_table', 5),
(12, '2021_04_08_120035_create_post_tag_table', 6),
(13, '2021_09_28_234950_create_brands_table', 7),
(19, '2021_10_01_131650_create_productcategories_table', 8),
(20, '2021_10_02_213818_create_producttags_table', 9),
(27, '2021_10_02_231722_create_products_table', 10);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `post_views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `featured`, `content`, `status`, `trash`, `post_views`, `created_at`, `updated_at`) VALUES
(23, 3, 'মাঝনদীতে ফেরিতে থাকা গাড়িতে আগুন, পুড়ল ১০ গাড়ি', 'majhndeete-ferite-thaka-garite-agun-purl-10-gari', '{\"post_type\":\"Image\",\"post_img\":\"73af51676c8960be80e447a977710835.jpg\",\"post_gall\":[],\"post_video\":\"\",\"post_audio\":null}', '<p><span class=\"marker\">ভোলা-লক্ষ্মীপুর নৌপথে</span> মেঘনা নদীতে গতকাল বুধবার রাতে ফেরিতে থাকা একটি গাড়িতে আগুন লেগে যায়। এতে ১০টি গাড়ি পুড়ে গেছে। তবে হতাহত হওয়ার কোনো ঘটনা ঘটেনি। ভোলার ইলিশা ফেরিঘাটের ব্যবস্থাপক পারভেজ খান প্রথম আলোকে এ তথ্য নিশ্চিত করেছেন।</p>\r\n\r\n<p>ফেরিঘাটের ব্যবস্থাপক ও প্রত্যক্ষদর্শীরা বলেন, গতকাল বুধবার দিবাগত রাত তিনটার দিকে লক্ষ্মীপুরের মজু চৌধুরীর হাট ফেরিঘাট থেকে কলমিলতা নামের ফেরিটি ১৫টি গাড়ি নিয়ে ছেড়ে আসে। মাঝনদীতে হঠাৎ একটি মালবাহী গাড়িতে আগুন লেগে যায়। আগুন পাশের গাড়িতে ছড়িয়ে পড়ে। ফায়ার সার্ভিসকে আগুন ছড়িয়ে পড়ার খবর দেওয়া হয়। ফায়ার সার্ভিস ও নৌ পুলিশ ভোলার ইলিশা ফেরিঘাটে থাকা &lsquo;কিষাণী&rsquo; নামের ফেরিতে করে ঘটনাস্থলে যায়। পরে তারা আগুন নিয়ন্ত্রণে আনে। তবে এর মধ্যে ১০টি গাড়ি পুড়ে যায়। পুড়ে গেছে গাড়িতে থাকা মালামাল।</p>', 1, 0, 0, '2021-04-08 06:22:28', '2021-04-08 06:30:17'),
(24, 3, 'দুই ম্যাচ নিষিদ্ধ নেইমার', 'dui-mzac-nishiddh-neimar', '{\"post_type\":\"Image\",\"post_img\":\"e452c057e925cb16d702d85bedae49b6.jpg\",\"post_gall\":[],\"post_video\":\"\",\"post_audio\":null}', '<p>লিলের বিপক্ষে সেই ম্যাচে বদলি হয়ে মাঠে নেমেছিলেন নেইমার। চোট কাটিয়ে আন্তর্জাতিক বিরতির আগেই মাঠে ফিরেছিলেন তিনি। কোনো গোল পাননি, গোল করাতেও পারেননি।</p>\r\n\r\n<p>তবে গত ৩ এপ্রিলের সে ম্যাচে &lsquo;খালি হাতে&rsquo; মাঠ ছাড়েননি পিএসজির ব্রাজিলিয়ান ফরোয়ার্ড। মেজাজ হারিয়ে দেখেন লাল কার্ড। এরপর জুটল নিষেধাজ্ঞাও। ফ্রান্সের পেশাদার লিগের (এলএফপি) শৃঙ্খলা কমিটি কাল নেইমারকে লিগ ওয়ানে দুই ম্যাচ নিষিদ্ধ করেছে।</p>\r\n\r\n<p>চ্যাম্পিয়নস লিগে কাল রাতে দারুণ খেলেছেন নেইমার। বায়ার্ন মিউনিখের বিপক্ষে পিএসজির ৩-২ গোলের জয়ে দুই গোল করিয়েছেন। এর মধ্যে একটি পাস তো মনোমুগ্ধকর। কেউ ভাবতেও পারেনি বলটা নেইমার নিজ দলের গোলকিপারের কাছে না পাঠিয়ে বায়ার্নের বক্সে ফেলবেন। সেখান থেকে গোল করেন মার্কিনিওস। এমন পারফরম্যান্সের রাতেই ঘরোয়া লিগে নিষেধাজ্ঞার খবর পান নেইমার।</p>\r\n\r\n<p>বিজ্ঞাপন</p>', 0, 0, 0, '2021-04-08 07:40:59', '2021-09-28 13:56:52'),
(25, 3, 'রাবাদারা আইপিএলে, সিরিজ পাকিস্তানের', 'rabadara-aipiele-sirij-pakistaner', '{\"post_type\":\"Gallery\",\"post_img\":\"\",\"post_gall\":[\"5a0f58ac1e2ee91cd333235babb38463.jpg\",\"2b262aacb346af73513a364f60fb5d9d.jpg\"],\"post_video\":\"\",\"post_audio\":null}', '<p>দক্ষিণ আফ্রিকার হয়ে সর্বোচ্চ ৭০ রান ওপেনার ইয়ানেমান ম্যালানের। তবে প্রোটিয়াদের জয়ের আশা দেখিয়েছিল কাইল ভারেইনা ও আন্দিলে ফিকোয়ার ১০৮ রানের ষষ্ঠ উইকেট জুটি। এক ওভারের ব্যবধানে দুজনের আউটেই শেষ প্রতিরোধ।</p>\r\n\r\n<p>পাকিস্তানের জয়ের নায়ক ফখর জামান। আগের ম্যাচে ১৯৩ রানের অসাধারণ এক ইনিংস খেলেও দলকে হারতে দেখা ফখর কালও পেয়েছেন সেঞ্চুরি। ১০৪ বলে ১০১ রান করেছেন এই বাঁহাতি। ইমাম-উল-হকের সঙ্গে উদ্বোধনী জুটিতে ১১২ রান তোলার পর দ্বিতীয় উইকেটে অধিনায়ক বাবর আজমকে নিয়ে ৯৪ রান যোগ করেন ফখর। ৬ রানের জন্য সেঞ্চুরি পাননি বাবর। ৫০ ওভারে ৭ উইকেট ৩২০ রান তোলে পাকিস্তান। হাসান আলীকে নিয়ে যার ৪৩-ই শেষ দুই ওভারে তুলেছেন বাবর।</p>\r\n\r\n<h2>সংক্ষিপ্ত স্কোর</h2>\r\n\r\n<p><strong>পাকিস্তান:</strong> ৫০ ওভারে ৩২০/৭ (ফখর ১০১, বাবর ৯৪, ইমাম ৫৭, হাসান ৩২*; মহারাজ ৩/৪৫, মার্করাম ২/৪৮)।</p>\r\n\r\n<p><strong>দক্ষিণ আফ্রিকা:</strong> ৪৯.৩ ওভারে ২৯২ (ম্যালান ৭০, ভেরেইনা ৬২, ফিকোয়াও ৫৪; নেওয়াজ ৩/৩৪, আফ্রিদি ৩/৫৮, রউফ ২/৪৫)।</p>\r\n\r\n<p><strong>ফল: </strong>পাকিস্তান ২৮ রানে জয়ী।</p>\r\n\r\n<p><strong>সিরিজ:</strong> ৩-ম্যাচ সিরিজে পাকিস্তান ২-১ এ জয়ী।</p>\r\n\r\n<p><strong>ম্যান অব দ্য ম্যাচ:</strong> বাবর আজম।</p>\r\n\r\n<p><strong>ম্যান অব দ্য সিরিজ: </strong>ফখর জামান।</p>', 0, 0, 0, '2021-04-08 07:43:09', '2021-06-12 17:30:48'),
(26, 3, 'সোনার দামে বিকানো গোল পেল চেলসি', 'sonar-dame-bikano-gol-pel-celsi', '{\"post_type\":\"Image\",\"post_img\":\"262a4b4493b0f4546d4fffecc1333168.jpg\",\"post_gall\":[],\"post_video\":\"\",\"post_audio\":null}', '<p>খেলা হচ্ছে নিরপেক্ষ ভেন্যু সেভিয়ায়। কাল রাতে কোয়ার্টার ফাইনাল প্রথম লেগটি ছিল চেলসির জন্য &lsquo;অ্যাওয়ে ম্যাচ&rsquo;। সোনার দামে বিকোনো অ্যাওয়ে গোল আর জয় নিয়েই মাঠ ছেড়েছে ইংলিশ ক্লাবটি। তাদের কাছে ২&ndash;০ গোলের হারে চ্যাম্পিয়নস লিগ সেমিফাইনালে ওঠার পথে বড় ধাক্কাই খেল পর্তুগিজ ক্লাব পোর্তো।</p>\r\n\r\n<p>চেলসি দুটো গোল পেয়েছে সম্পুর্ণ ব্যক্তিগত নৈপুণ্যের সৌজন্যে। ৩২ মিনিটে জর্জিনহোর পাস চেলসির ২২ বছর বয়সী অ্যাটাকিং মিডফিল্ডার ম্যাসন মাউন্ট।</p>\r\n\r\n<p>বল পেয়েই ডিফেন্ডারকে বোকা বানিয়ে পুরো উল্টো ঘুরে যান তিনি। এতে সামনে ফাঁকা জায়গা পেয়ে যান। কোনাকুনি শটে তাঁর করা গোলটি ছিল দর্শনীয়।</p>', 1, 0, 0, '2021-04-08 07:44:35', '2021-04-08 07:44:35'),
(27, 3, 'কবরীর জন‍্য আইসিইউ পাওয়া যাচ্ছে না', 'kbreer-jnz-aisiiu-pawa-zacche-na', '{\"post_type\":\"Image\",\"post_img\":\"cc6e0b74822b32106c12520673132be1.jpg\",\"post_gall\":[],\"post_video\":\"\",\"post_audio\":null}', '<p>করোনায় আক্রান্ত বরেণ্য অভিনেত্রী সারাহ বেগম কবরীর শারীরিক অবস্থার অবনতি হয়েছে। বুধবার দিবাগত রাতের শেষ দিকে তাঁর অবস্থার অবনতি হয়। চিকিৎসকেরা জানান, তাঁকে দ্রুত নিবিড় পরিচর্যা কেন্দ্রে (আইসিইউ) নেওয়া প্রয়োজন। কিন্তু আজ সকাল পর্যন্ত কবরীর জন&zwj;্য আইসিইউ খুঁজে পাওয়া যায়নি।</p>\r\n\r\n<p>আজ সকালে কবরীর সহকারী নূর উদ্দিন প্রথম আলোকে বলেন, &lsquo;ম্যাডামের শারীরিক অবস্থা নিয়ে আমরা ভীষণ চিন্তিত। যত দ্রুত সম্ভব তাঁকে আইসিইউ সাপোর্ট দিতে হবে। শেষ রাত থেকে তাঁর অক্সিজেন লেভেল বেশ ওঠানামা করছে। কী করব বুঝে উঠতে পারছি না। আমাদের সবার যেকোনো সমস্যায় তিনি কথা বলতেন। যেখানে যা দরকার, যত বড় পর্যায়ের মানুষকে বলা দরকার, তিনিই বলতেন। আমাদের সেই বলার মানুষটিই তো এখন অসুস্থ হয়ে হাসপাতালের বিছানায় শুয়ে আছেন। সরকারের উচ্চপর্যায়ে যাঁরা আছেন, তাঁরা যদি ম্যাডামের চিকিৎসার ব্যাপারে আলাদাভাবে নজর দিতেন, তাহলে আমরা কিছুটা শক্তি ও সাহস পেতাম। ভীষণ অসহায় লাগছে। ম্যাডামকে এভাবে দেখতে খুব কষ্ট লাগছে।&rsquo;</p>', 1, 0, 0, '2021-04-08 07:45:38', '2021-04-08 07:45:38'),
(28, 3, 'পোষা কুকরকে নাচ শেখান, যোগব্যায়াম করান মাধুরী', 'posha-kukrke-nac-sekhan-zogbzayam-kran-madhuree', '{\"post_type\":\"Video\",\"post_img\":\"\",\"post_gall\":[],\"post_video\":\"https:\\/\\/www.youtube.com\\/embed\\/xKuOF7bUrNY\",\"post_audio\":null}', '<p>গতকাল ছিল বিশ্ব স্বাস্থ্য দিবস। বলিউড তারকারা বিভিন্ন ছবি আর ভিডিওর সঙ্গে ক্যাপশনে স্বাস্থ্য নিয়ে বার্তা পোস্ট করে উদ্&zwnj;যাপন করেছেন দিনটি। বাদ যাননি মাধুরী দীক্ষিতও। দুটো ছবি আর একটি ভিডিও পোস্ট করে জানিয়েছেন স্বাস্থ্যকর জীবনের মন্ত্র। মাধুরী দীক্ষিত নেনে আর তাঁর</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>জীবনসঙ্গী শ্রীরাম নেনের পোষা কুকুরের নাম ক্যামেলো নেনে। প্রথম ছবিতে দেখা যাচ্ছে এই পোষা প্রাণীকে নিয়ে ইয়োগা করতে বসেছেন মাধুরী।</p>', 1, 0, 0, '2021-04-08 07:48:38', '2021-04-08 07:48:38'),
(29, 3, 'তাঁদের জন্য মন খারাপ দিলারা জামানের', 'tannder-jnz-mn-kharap-dilara-jamaner', '{\"post_type\":\"Gallery\",\"post_img\":\"\",\"post_gall\":[\"07bd0aaf77b204525b89941decec8851.jpg\",\"94c1b9d287347cf8b577dfcb142db836.jpg\",\"91235686167d9098f0b97fd244e70b59.jpg\"],\"post_video\":\"\",\"post_audio\":null}', '<p>&lsquo;আহারে! রাত নাই দিন নাই, প্রোডাকশনের অল্প আয়ের ছেলেগুলো কত কষ্ট করে শুটিং করে। এক দিন কাজ না থাকলে খেয়ে না খেয়ে দিন কাটায়। তারা সবার আগে শুটিংয়ে এসে সবার পরে বাসায় যায়। কিছু অভিনয়শিল্পী পুরোপুরি শুটিংয়ের ওপর নির্ভরশীল। লকডাউনে কাজ বন্ধ হলে এবার তাদের ভয়ানক দুর্গতি হবে।&rsquo; কথাগুলো বললেন ৭৯ বছর বয়স্ক অভিনেত্রী দিলারা জামান। করোনার দ্বিতীয় ঢেউয়ে নিজের চেয়ে শুটিংয়ের লাইট-ক্যামেরা সহকারী, প্রোডাকশন বয় ও সহকর্মীদের কথা ভেবেই তাঁর মন খারাপ।</p>', 1, 0, 0, '2021-04-08 07:50:42', '2021-04-08 07:50:42'),
(30, 3, 'সেলিম-রোজি দম্পতি করোনায় আক্রান্ত, বাসাতেই চিকিৎসা নিচ্ছেন', 'selim-roji-dmpti-kronay-akrant-basatei-cikittsa-nicchen', '{\"post_type\":\"Gallery\",\"post_img\":\"\",\"post_gall\":[\"31bfeee8e696c96f138e09f958001a74.jpg\",\"4783ac540c5c09ea403e59c689d4788d.jpg\",\"d1871ec39a37b1a50b987eea4f0bff38.jpg\",\"00e2d7924cebc35b535a6171c6e2bed0.jpeg\"],\"post_video\":\"\",\"post_audio\":null}', '<p>করোনায় আক্রান্ত হয়েছেন তারকা দম্পতি শহীদুজ্জামান সেলিম ও রোজী সিদ্দিকী। গত মাসের শেষের দিকে কিছুটা জ্বর, ঠান্ডা ও হাচি&ndash;কাঁশি ছিল অভিনেত্রী রোজী সিদ্দিকীর। ১ এপ্রিল কিছুটা অসুস্থতা অনুভব করেন শহীদুজ্জামান সেলিমও। অসুস্থতা বাড়তে থাকলে পরের দিন তাঁরা দুজনেই ঢাকার একটি হাসপাতালে করোনার নমুনা পরীক্ষা করান। ফলাফল আসে তাঁরা করোনা পজিটিভ। এখন তাঁরা চিকিৎসকদের পরামর্শে বাসাতে চিকিৎসা নিচ্ছেন।</p>\r\n\r\n<p>আজ বেলা ৩টার দিকে কথা হয় অভিনেতা শহীদুজ্জামান সেলিমের সঙ্গে। তিনি প্রথম আলোকে বলেন, &lsquo;প্রথম দিকে আমার স্ত্রী রোজীর (রোজী সিদ্দকী) শরীর বেশি অসুস্থ হয়ে পড়ে। তাঁর শ্বাসকষ্ট ও কাশি হওয়ায় কিছুটা ঘাবড়ে গিয়েছিলাম। দেরি না করে করোনা পরীক্ষা করিয়ে জানতে পারি, আমরা করোনায় আক্রান্ত। এখন রোজী আগের চেয়ে অনেকটা ভালো আছে। তবে তাঁর হালকা ঠান্ডা-জ্বর ও শারীরিক দুর্বলতা আছে। করোনায় আক্রান্ত জানার পর থেকে আমরা নিয়মিত চিকিৎসা ও ডাক্তারের পরামর্শ মেনে চলছি। বাসা থেকে একদমই বের হচ্ছি না। খাবার খাওয়ার ব্যাপারেও সচেতন আছি।&rsquo;</p>', 1, 0, 9, '2021-04-08 07:52:35', '2021-09-21 17:06:11'),
(31, 3, 'তথ্যপ্রযুক্তিতে বাংলাদেশের ভবিষ্যৎ দেখছে দক্ষিণ কোরিয়া: লি জাং কুন', 'tthzprzuktite-bangladeser-vbishztt-dekhche-dkshin-koriya-li-jang-kun', '{\"post_type\":\"Image\",\"post_img\":\"0afd02b6f43df2d9dbd16b64a931b464.jpeg\",\"post_gall\":[],\"post_video\":\"\",\"post_audio\":null}', '<p>তথ্যপ্রযুক্তির বিকাশের মধ্যে বাংলাদেশের ভবিষ্যৎ নিহিত আছে বলে মনে করে দক্ষিণ কোরিয়া। বিশেষ করে সৃজনশীলতা আর তরুণ জনগোষ্ঠীর উদ্ভাবনী শক্তিকে কাজে লাগিয়ে বাংলাদেশের অর্থনৈতিক উত্তরণের পর্বে তথ্যপ্রযুক্তি হতে পারে বড় নিয়ামক। আর উন্নয়নের অংশীদার হিসেবে বাংলাদেশের পাশে থাকতে চায় দক্ষিণ কোরিয়া।</p>\r\n\r\n<p>বাংলাদেশে নিযুক্ত দক্ষিণ কোরিয়ার রাষ্ট্রদূত লি জাং কুন সম্প্রতি গণমাধ্যমের সঙ্গে মতবিনিময়ের সময় দুই দেশের ভবিষ্যৎ সহযোগিতা নিয়ে এ মন্তব্য করেন।</p>\r\n\r\n<p>লি জাং কুন গত সপ্তাহে এই প্রতিবেদকসহ কয়েকটি গণমাধ্যমের প্রতিনিধিদের নিয়ে চট্টগ্রামের কেইপিজেড পরিদর্শন করেন। এরপর তিনি এবং ইয়াংওয়ানের চেয়ারম্যান কিহাক সাং গণমাধ্যমের সঙ্গে কথা বলেন। চট্টগ্রামের আনোয়ারা উপজেলায় অবস্থিত এবং কেইপিজেড নামে পরিচিত কোরিয়া রপ্তানি প্রক্রিয়াজাতকরণ এলাকা হচ্ছে কোরিয়ার খ্যাতনামা শিল্প গ্রুপ ইয়াংওয়ানের একটি</p>', 0, 0, 0, '2021-04-08 07:55:52', '2021-09-20 13:31:38'),
(39, 5, 'এসএসসি-এইচএসসি পরীক্ষা যখন শুরু হতে পারে', 'এসএসসি-এইচএসসি-পরীক্ষা-যখন-শুরু-হতে-পারে', '{\"post_type\":\"Image\",\"post_img\":\"a82af5945c167c37730fe3d44465e753.jpg\",\"post_gall\":[],\"post_video\":\"\",\"post_audio\":null}', '<p>চলতি বছরের এসএসসি ও সমমানের পরীক্ষা আগামী ১০ থেকে ১৫ নভেম্বরের মধ্যে শুরু করার পরিকল্পনা করছে শিক্ষা বোর্ডগুলো। আর এইচএসসি ও সমমানের পরীক্ষা ডিসেম্বরের প্রথম সপ্তাহে শুরু হতে পারে।</p>\r\n\r\n<p>এমন পরিকল্পনা নিয়ে প্রস্তুতি নিচ্ছে শিক্ষা বোর্ডগুলো। ঢাকা মাধ্যমিক ও উচ্চমাধ্যমিক শিক্ষা বোর্ডের চেয়ারম্যান নেহাল আহমেদ প্রথম আলোকে বলেন, এখন পর্যন্ত এমন পরিকল্পনা আছে। তবে এখনো পরীক্ষা শুরুর কোনো সুনির্দিষ্ট তারিখ ঠিক হয়নি। পরিস্থিতির কারণে এ পরিকল্পনায়ও কিছু ব্যত্যয় হতে পারে।</p>', 1, 0, 5, '2021-09-21 14:32:14', '2021-09-28 13:56:59'),
(40, 5, 'তৃতীয় ও চতুর্থ শ্রেণিতে আগামী সপ্তাহ থেকে দুদিন ক্লাস', 'তৃতীয়-ও-চতুর্থ-শ্রেণিতে-আগামী-সপ্তাহ-থেকে-দুদিন-ক্লাস', '{\"post_type\":\"Video\",\"post_img\":\"\",\"post_gall\":[],\"post_video\":\"https:\\/\\/www.youtube.com\\/embed\\/5xD0MNtVewU\",\"post_audio\":null}', '<p>মাধ্যমিকের অষ্টম ও নবম শ্রেণির পর আগামী সপ্তাহ থেকে প্রাথমিক স্তরের তৃতীয় ও চতুর্থ শ্রেণির ক্লাসও সপ্তাহে দুই দিন করে হবে। এখন এসব শ্রেণিতে সপ্তাহে এক দিন করে ক্লাস হচ্ছে।</p>\r\n\r\n<p>প্রাথমিক শিক্ষা অধিদপ্তরের একজন ঊর্ধ্বতন কর্মকর্তা প্রথম আলোকে এসব কথা জানান। এ বিষয়ে অধিদপ্তরের মহাপরিচালক আলমগীর মুহম্মদ মনসুরুল আলম আজ মঙ্গলবার প্রথম আলোকে বলেন, আদেশ দিয়ে বিষয়টি জানানো হবে।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>দীর্ঘ দেড় বছর বন্ধ থাকার পর ১২ সেপ্টেম্বর প্রাথমিক থেকে উচ্চমাধ্যমিক স্তর পর্যন্ত সব ধরনের শিক্ষাপ্রতিষ্ঠান খুলে দেওয়া হয়। এখন চলতি বছরের ও আগামী বছরের এসএসসি ও এইচএসসি পরীক্ষার্থী এবং পঞ্চম শ্রেণির শিক্ষার্থীদের প্রতিদিন ক্লাস নেওয়া হচ্ছে। আর অন্যান্য শ্রেণির ক্লাস সপ্তাহে এক দিন করে হয়ে এলেও এখন তা পর্যায়ক্রমে বাড়ছে।</p>\r\n\r\n<p>মাধ্যমিকে যেদিন যেসব শ্রেণির শিক্ষার্থীরা বিদ্যালয়ে যাচ্ছে, সেদিন তাদের দুটি করে ক্লাস হচ্ছে। আর প্রাথমিকে তিনটি করে ক্লাস হচ্ছে। তবে শিশু শ্রেণি, নার্সারি ও কেজি শ্রেণির মতো প্রাক্-প্রাথমিক স্তরের শ্রেণিকক্ষের ক্লাস আপাতত বন্ধ রয়েছে।</p>', 1, 0, 4, '2021-09-21 15:51:30', '2021-09-21 17:11:19'),
(41, 5, 'করোনা সংক্রমণ ৫ শতাংশের নিচে নামলে শিক্ষাকার্যক্রম পুরোদমে শুরু : প্রতিমন্ত্রী', 'করোনা-সংক্রমণ-৫-শতাংশের-নিচে-নামলে-শিক্ষাকার্যক্রম-পুরোদমে-শুরু-:-প্রতিমন্ত্রী', '{\"post_type\":\"Image\",\"post_img\":\"\",\"post_gall\":[],\"post_video\":\"invalid video link\",\"post_audio\":null}', '<p><strong><em><u>প্রাথমিক ও গণশিক্ষা প্রতিমন্ত্রী মো. জাকির হোসেন বলেন, বিদ্যালয়ের শ্রেণিকক্ষে পাঠদানের পাশাপাশি অনলাইনে শিক্ষা কার্যক্রমও চলমান থাকবে। এ ছাড়া শিক্ষার্থীদের বাড়ি বাড়ি ওয়ার্কশিট পৌঁছে দেওয়ার কার্যক্রম চলমান থাকবে।</u></em></strong></p>\r\n\r\n<p>গতকাল লালমনিরহাট জেলার প্রাথমিক শিক্ষাসংশ্লিষ্ট কর্মকর্তাদের সঙ্গে মতবিনিময় সভায় প্রধান অতিথির বক্তব্যে তিনি এসব কথা বলেন।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#f1c40f\">প্রতিমন্ত্রী বলেন, করোনা মহামারির ভয়াবহতায় সবচেয়ে বেশি ক্ষতি হয়েছে কোমলমতি শিক্ষার্থীদের। লেখাপড়ার এ ক্ষতি পুষিয়ে নিতে বিদ্যালয়ে পাঠদানের পাশাপাশি অনলাইন শিক্ষা কার্যক্রমও অব্যাহত থাকবে। কোমলমতি শিক্ষার্থীদের করোনা থেকে সুরক্ষা ও শিক্ষার ধারাবাহিকতা অব্যাহত রাখতে শিক্ষক-কর্মকর্তাদের গুরুত্বপূর্ণ ভূমিকা পালন করতে হবে। স্বাস্থ্যবিধি মানার ক্ষেত্রে শিক্ষা কর্মকর্তা, শিক্ষকসহ শিক্ষাপ্রতিষ্ঠানের সবাইকে সচেতন হতে হবে। বিদ্যালয়ে শিক্ষার্থীদের শতভাগ সুরক্ষা দেওয়ার ব্যবস্থা রাখতে হবে।</span></p>\r\n\r\n<p><em><a href=\"https://www.prothomalo.com/education/examination/%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B8%E0%A7%87%E0%A6%B0-%E0%A6%AA%E0%A6%BE%E0%A6%B6%E0%A6%BE%E0%A6%AA%E0%A6%BE%E0%A6%B6%E0%A6%BF-%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8%E0%A7%87-%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%AF%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A6%AE%E0%A6%93-%E0%A6%9A%E0%A6%B2%E0%A6%AC%E0%A7%87-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80\"><img alt=\"\" src=\"https://www.prothomalo.com/education/examination/%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B8%E0%A7%87%E0%A6%B0-%E0%A6%AA%E0%A6%BE%E0%A6%B6%E0%A6%BE%E0%A6%AA%E0%A6%BE%E0%A6%B6%E0%A6%BF-%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8%E0%A7%87-%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%AF%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A6%AE%E0%A6%93-%E0%A6%9A%E0%A6%B2%E0%A6%AC%E0%A7%87-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80\" /></a></em></p>\r\n\r\n<p>মতবিনিময় সভায় লালমনিরহাট জেলা পরিষদ চেয়ারম্যান মতিয়ার রহমান, পুলিশ সুপার আবিদা সুলতানা, বিভাগীয় উপপরিচালক মো. মুজাহিদুল ও জেলা প্রশাসক মো. জাফর বক্তব্য দেন।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, 0, 0, '2021-09-21 15:57:52', '2021-09-21 15:57:52'),
(42, 5, 'গুচ্ছ ভর্তি পরীক্ষা শুরু ১৭ অক্টোবর', 'গুচ্ছ-ভর্তি-পরীক্ষা-শুরু-১৭-অক্টোবর', '{\"post_type\":\"Image\",\"post_img\":\"5dbef34ae90a33593ed36958a107bb2d.jpg\",\"post_gall\":[],\"post_video\":\"invalid video link\",\"post_audio\":null}', '<p>গুচ্ছভুক্ত ২০টি সাধারণ, বিজ্ঞান ও প্রযুক্তি পাবলিক বিশ্ববিদ্যালয়ের সমন্বিত ভর্তি পরীক্ষার তারিখ নির্ধারণ করা হয়েছে। আগামী ১৭ অক্টোবর বিজ্ঞান বিভাগের &lsquo;এ&rsquo; ইউনিটে, ২৪ অক্টোবর বাণিজ্য বিভাগের &lsquo;বি&rsquo; ইউনিটে এবং ১ নভেম্বর মানবিক বিভাগের &lsquo;সি&rsquo; ইউনিটের ভর্তি পরীক্ষা অনুষ্ঠিত হবে।</p>\r\n\r\n<p>আজ মঙ্গলবার সমন্বিত ভর্তি পরীক্ষায় অংশ নেওয়া ২০ বিশ্ববিদ্যালয়ের উপাচার্যদের সমন্বয়ে গঠিত কোর কমিটির সভায় এই সিদ্ধান্ত নেওয়া হয়েছে। সভা শেষে কমিটির যুগ্ম আহ্বায়ক ও জগন্নাথ বিশ্ববিদ্যালয়ের ভারপ্রাপ্ত উপাচার্য কামালউদ্দীন আহমেদ প্রথম আলোকে এসব তথ্য নিশ্চিত করেন।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ভর্তিসংক্রান্ত বিস্তারিত তথ্য সমন্বিত ভর্তি পরীক্ষার অফিশিয়াল ওয়েবসাইটে (https://gstadmission.ac.bd) পাওয়া যাবে।</p>\r\n\r\n<h2><a href=\"https://www.prothomalo.com/education/admission/%E0%A6%97%E0%A7%81%E0%A6%9A%E0%A7%8D%E0%A6%9B-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81-%E0%A7%A7%E0%A7%AD-%E0%A6%85%E0%A6%95%E0%A7%8D%E0%A6%9F%E0%A7%8B%E0%A6%AC%E0%A6%B0\" target=\"_blank\"><img alt=\"\" src=\"https://images.prothomalo.com/prothomalo%2Fimport%2Fmedia%2F2020%2F02%2F19%2F74d59ad50a3bac6dc92118a85213402b-5e4d504997624.jpg?auto=format%2Ccompress&amp;format=webp&amp;w=640&amp;dpr=1.0\" /></a></h2>\r\n\r\n<p>সিদ্ধান্ত অনুযায়ী, ২০টি সাধারণ এবং বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের জন্য মোট তিনটি পরীক্ষা হবে । এর মধ্যে একটি পরীক্ষা হবে বিজ্ঞানের শিক্ষার্থীদের জন্য, আরেকটি মানবিকের জন্য এবং অন্যটি ব্যবসায় শিক্ষায় শিক্ষার্থীদের জন্য। এখন পর্যন্ত সিদ্ধান্ত হলো অনলাইনে নয়, সরাসরি ভর্তি পরীক্ষা হবে এসব বিশ্ববিদ্যালয়ে। ভর্তি পরীক্ষার প্রশ্ন হবে উচ্চমাধ্যমিকের পাঠ্যসূচির ভিত্তিতে।</p>\r\n\r\n<p>এবার প্রথমবারের মতো ২০টি সাধারণ এবং বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয় গুচ্ছ ভিত্তিতে ভর্তি পরীক্ষা নিচ্ছে। গত শিক্ষাবর্ষে সাতটি কৃষি বিশ্ববিদ্যালয় ও কৃষির প্রাধান্য থাকা বিশ্ববিদ্যালয় গুচ্ছ ভিত্তিতে ভর্তি পরীক্ষা শুরু করেছিল। গুচ্ছভিত্তিক পরীক্ষার মাধ্যমে একজন ভর্তি-ইচ্ছুক শিক্ষার্থী নিজ নিজ বিভাগে একটি পরীক্ষা দিয়েই যোগ্যতা ও আসন অনুযায়ী যেকোনো বিশ্ববিদ্যালয়ে ভর্তির সুযোগ পাবেন।</p>\r\n\r\n<h2>গুচ্ছের বিশ্ববিদ্যালয়গুলো হলো&mdash;</h2>\r\n\r\n<p>যে ২০টি বিশ্ববিদ্যালয়ে গুচ্ছভিত্তিতে ভর্তির সিদ্ধান্ত হয়েছে সেগুলো হলো জগন্নাথ বিশ্ববিদ্যালয়, ইসলামী বিশ্ববিদ্যালয়, শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, খুলনা বিশ্ববিদ্যালয়, হাজী মোহাম্মদ দানেশ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, কুমিল্লা বিশ্ববিদ্যালয়, জাতীয় কবি কাজী নজরুল ইসলাম বিশ্ববিদ্যালয়, যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, বেগম রোকেয়া বিশ্ববিদ্যালয়, পাবনা বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, বঙ্গবন্ধু শেখ মুজিবুর রহমান বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, বরিশাল বিশ্ববিদ্যালয়, রাঙামাটি বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, রবীন্দ্র বিশ্ববিদ্যালয়, বঙ্গবন্ধু শেখ মুজিবুর রহমান ডিজিটাল ইউনিভার্সিটি, শেখ হাসিনা বিশ্ববিদ্যালয় এবং বঙ্গমাতা শেখ ফজিলাতুন্নেছা মুজিব বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়।</p>', 1, 0, 6, '2021-09-21 16:01:19', '2021-09-28 14:33:07'),
(43, 5, '১৬৫০ কৃষি কর্মকর্তার কাজে যোগদানে আইনগত বাধা নেই', '১৬৫০-কৃষি-কর্মকর্তার-কাজে-যোগদানে-আইনগত-বাধা-নেই', '{\"post_type\":\"Image\",\"post_img\":\"ff951d6d359830460b11da1bfccd65bf.jpg\",\"post_gall\":[],\"post_video\":\"invalid video link\",\"post_audio\":null}', '<p>কৃষি সম্প্রসারণ অধিদপ্তরে ১ হাজার ৬৫০ উপসহকারী কৃষি কর্মকর্তা নিয়োগ নিয়ে হাইকোর্টের রায়ের বিরুদ্ধে আনা আবেদন খারিজ করে দিয়েছেন সুপ্রিম কোর্টের আপিল বিভাগ। প্রধান বিচারপতি সৈয়দ মাহমুদ হোসেনের নেতৃত্বে আপিল বিভাগ বেঞ্চ গতকাল সোমবার এ আদেশ দেন।</p>\r\n\r\n<p>ফলে ১ হাজার ৬৫০ জন উপসহকারী কৃষি কর্মকর্তা কাজে যোগ দিতে পারবেন বলে জানিয়েছেন আইনজীবীরা।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>এর আগে গত বৃহস্পতিবাবর এসব কৃষি কর্মকর্তাদের বিষয়ে আনা রিটে রায় দেন হাইকোর্ট। পরে হাইকোর্টের রায়ের বিরুদ্ধে আপিল বিভাগে আবেদন করেন সংক্ষুব্ধ ব্যক্তিরা।</p>\r\n\r\n<p>২০১৮ সালের ২৩ জানুয়ারি ১ হাজার ৬৫০ জন উপসহকারী কৃষি কর্মকর্তার নিয়োগের জন্য বিজ্ঞপ্তি প্রকাশ করা হয়। এর পরিপ্রেক্ষিতে সব ধরনের পরীক্ষা শেষে ২০২০ সালের ১৭ জানুয়ারি ফল প্রকাশ করা হয়। কিন্তু এতে কোটা পদ্ধতি সঠিকভাবে অনুসরণ না করে প্রাথমিক ফল প্রকাশ করা হয়েছে উল্লেখ করে কৃষি মন্ত্রণালয়ের সচিব ও কৃষি সম্প্রসারণ অধিদপ্তরের মহাপরিচালক বরাবরে আবেদন করেন মৌখিক পরীক্ষায় অংশ নেওয়া ৩৪ প্রার্থী। এতে ফল না পেয়ে মো. রাশেদুল ইসলামসহ চাকরিপ্রার্থী ৩৪ জন রিট আবেদন করেন। পরবর্তী সময়ে আরও অনেকে রিট করেন।<a href=\"https://googleads.g.doubleclick.net/pcs/click?xai=AKAOjsvAIkUOvJ4TteL9XAaJa21aAPRd2F8lQlxXIRihJ1eb4CrVsHVz1pjwxoI-RvNk9NFU-Yxmx2spYLCTI-NdUGJH8f-jlJ2w7y9CqDzMD-bEbMeOB5UUo13gLV0VZH4IOLWasZIDl-8a-O_kisRpurCaJgVy8C6Fl8apl2MqvNMG8vu2G-DEimAKxVmZ8PPa3ToyL1zQzeZc9Eiuo3jZrVMhuy8Q5lZmvw2RLJio-Sw6RAdrw80lcRSkFJflyTY2KrnbCoL0utoSP66vDy2GC25Cbn3sq9_hZ0ufTjekHhf4Akr7vA6_zHuMUajJ8Ksn99KR&amp;sai=AMfl-YSZbLBTCHyuQZbBvqRlu7HtGfkq8KXBwwe--tFBRm7f8tXUzMebl0oy7Cy0jCsZSrDnpM5-KianJFTyZWxcnjebKUySv6FwRTJXUmw78YGwKJmwFUlqiqCHWfa8K0nMtEU8TQ&amp;sig=Cg0ArKJSzDuHp53UUglK&amp;fbs_aeid=[gw_fbsaeid]&amp;adurl=https://chaldal.com/search/jafflong&amp;nm=8&amp;nx=199&amp;ny=-137&amp;mb=2\"><img alt=\"\" src=\"https://googleads.g.doubleclick.net/pcs/click?xai=AKAOjsvAIkUOvJ4TteL9XAaJa21aAPRd2F8lQlxXIRihJ1eb4CrVsHVz1pjwxoI-RvNk9NFU-Yxmx2spYLCTI-NdUGJH8f-jlJ2w7y9CqDzMD-bEbMeOB5UUo13gLV0VZH4IOLWasZIDl-8a-O_kisRpurCaJgVy8C6Fl8apl2MqvNMG8vu2G-DEimAKxVmZ8PPa3ToyL1zQzeZc9Eiuo3jZrVMhuy8Q5lZmvw2RLJio-Sw6RAdrw80lcRSkFJflyTY2KrnbCoL0utoSP66vDy2GC25Cbn3sq9_hZ0ufTjekHhf4Akr7vA6_zHuMUajJ8Ksn99KR&amp;sai=AMfl-YSZbLBTCHyuQZbBvqRlu7HtGfkq8KXBwwe--tFBRm7f8tXUzMebl0oy7Cy0jCsZSrDnpM5-KianJFTyZWxcnjebKUySv6FwRTJXUmw78YGwKJmwFUlqiqCHWfa8K0nMtEU8TQ&amp;sig=Cg0ArKJSzDuHp53UUglK&amp;fbs_aeid=[gw_fbsaeid]&amp;adurl=https://chaldal.com/search/jafflong&amp;nm=8&amp;nx=199&amp;ny=-137&amp;mb=2\" /></a></p>', 1, 0, 5, '2021-09-21 16:03:24', '2021-09-28 12:45:32'),
(44, 8, 'আফগানিস্তানের জন্য জাতিসংঘের জরুরি তহবিল উন্মুক্ত', 'আফগানিস্তানের-জন্য-জাতিসংঘের-জরুরি-তহবিল-উন্মুক্ত', '{\"post_type\":\"Video\",\"post_img\":\"a218d2def1754b76c3d815a93b61bc5b.jpg\",\"post_gall\":[],\"post_video\":\"https:\\/\\/www.youtube.com\\/embed\\/h-WYhw_sIlY\",\"post_audio\":null}', '<p>আফগানিস্তানে দুর্দশা কাটাতে জরুরিভাবে তহবিল উন্মুক্ত করেছে জাতিসংঘ। সংস্থাটির সহায়তা বিভাগের প্রধান মার্টিন গ্রিফিথস বুধবার বলেছেন, আফগানিস্তানের স্বাস্থ্যসেবা ব্যবস্থা ভেঙে পড়া ঠেকাতে তিনি সাড়ে চার কোটি মার্কিন ডলার জরুরি তহবিল উন্মুক্ত করেছেন।</p>\r\n\r\n<p>গ্রিফিথস সতর্ক করে বলেন, আফগানিস্তানে ওষুধ, চিকিৎসা সরঞ্জাম ও জ্বালানি দ্রুত শেষ হয়ে যাচ্ছে। সেখানকার প্রয়োজনীয় স্বাস্থ্যকর্মীদের বেতন দেওয়া হচ্ছে না।</p>\r\n\r\n<p>দেশটিতে মানুষের জীবন রক্ষার প্রয়োজনে তিনি তহবিল উন্মুক্ত করছেন।</p>\r\n\r\n<p>গ্রিফিথস আরও বলেন, আফগানিস্তানের জনগণের প্রয়োজনে তাদের পাশে দাঁড়াতে জাতিসংঘ বদ্ধপরিকর।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>এদিকে, সাধারণ পরিষদের অধিবেশনে যোগ দিতে তাই ইচ্ছা প্রকাশ করেছে আফগানিস্তানের তালেবান সরকার। এ জন্য চলতি সপ্তাহে জাতিসংঘকে একটি চিঠি দিয়েছে তারা।<br />\r\nবিবিসির খবরে বলা হয়, গত ১৫ আগস্ট আফগানিস্তানের নিয়ন্ত্রণ নেয় তালেবান। এরপর তারা দেশটিতে নতুন সরকার গঠন করেছে। তালেবান সরকারের পররাষ্ট্রমন্ত্রী হয়েছেন আমির খান মুত্তাকি। তিনি গত সোমবার চিঠি পাঠিয়েছেন জাতিসংঘের মহাসচিবের কাছে। এই চিঠিতে তিনি উল্লেখ করেছেন, জাতিসংঘের উচ্চপর্যায়ের এ সম্মেলনে অংশ নিতে চায় তালেবান।<br />\r\nজাতিসংঘের সাধারণ পরিষদের অধিবেশনে দাঁড়িয়ে আফগানিস্তানের পক্ষে জোরালো বক্তব্য দিয়েছেন কাতারের আমির শেখ তামিম বিন হামাদ আল থানি। একই সঙ্গে তিনি বলেছেন, তালেবানকে বর্জন করার পরিণামে বিভেদ-বিভক্তি বাড়বে।</p>', 1, 0, 0, '2021-09-22 16:25:40', '2021-09-22 16:25:40'),
(45, 8, 'This is head line', 'This-is-head-line', '{\"post_type\":\"Image\",\"post_img\":\"ad102bfc39cde830f8baf52f9b41ab95.jpg\",\"post_gall\":[],\"post_video\":\"invalid video link\",\"post_audio\":null}', '<p>fsaf</p>', 0, 1, 0, '2021-09-22 17:01:17', '2021-09-28 15:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 22, 8, NULL, NULL),
(2, 22, 6, NULL, NULL),
(3, 23, 10, NULL, NULL),
(4, 23, 9, NULL, NULL),
(5, 24, 14, NULL, NULL),
(6, 24, 13, NULL, NULL),
(7, 25, 14, NULL, NULL),
(8, 25, 13, NULL, NULL),
(9, 26, 14, NULL, NULL),
(10, 26, 13, NULL, NULL),
(11, 27, 14, NULL, NULL),
(12, 28, 14, NULL, NULL),
(13, 29, 14, NULL, NULL),
(14, 30, 14, NULL, NULL),
(15, 31, 10, NULL, NULL),
(16, 32, 15, NULL, NULL),
(17, 34, 15, NULL, NULL),
(18, 34, 14, NULL, NULL),
(19, 35, 15, NULL, NULL),
(20, 36, 13, NULL, NULL),
(21, 36, 10, NULL, NULL),
(22, 38, 14, NULL, NULL),
(23, 39, 14, NULL, NULL),
(24, 40, 14, NULL, NULL),
(25, 41, 15, NULL, NULL),
(26, 41, 14, NULL, NULL),
(27, 42, 16, NULL, NULL),
(28, 42, 13, NULL, NULL),
(29, 43, 15, NULL, NULL),
(30, 44, 16, NULL, NULL),
(31, 45, 16, NULL, NULL),
(32, 46, 13, NULL, NULL),
(33, 47, 15, NULL, NULL),
(34, 48, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `name`, `slug`, `image`, `icon`, `parent`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Purush', 'Purush', '', NULL, NULL, 1, 0, '2021-10-02 05:48:22', '2021-10-02 05:48:22'),
(2, 'Mohila', 'Mohila', '', NULL, NULL, 1, 0, '2021-10-02 05:48:34', '2021-10-02 05:48:34'),
(4, 'Fan', 'Fan', '', NULL, NULL, 1, 0, '2021-10-02 05:57:34', '2021-10-02 06:57:32'),
(5, 'Sharee', 'Sharee', NULL, NULL, 4, 1, 0, '2021-10-02 05:57:44', '2021-10-02 09:29:31'),
(6, 'Modhumoti', 'Modhumoti', NULL, NULL, 5, 1, 0, '2021-10-02 05:58:07', '2021-10-02 09:27:28'),
(7, 'BRB', 'BRB', NULL, NULL, 2, 1, 0, '2021-10-02 05:58:17', '2021-10-02 09:29:31'),
(9, 'Stand Fan', 'Stand-Fan', '', NULL, 4, 1, 0, '2021-10-02 05:58:57', '2021-10-02 05:58:57'),
(11, 'Shahi Lungi', 'Shahi-Lungi', '', NULL, 1, 1, 0, '2021-10-02 05:59:54', '2021-10-02 07:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` int(11) NOT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trending` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `regular_price`, `sale_price`, `stock`, `desc`, `short_desc`, `size`, `color`, `trending`, `image`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '44q', '44q', 4, 44, 4, '4', NULL, '[{\"size\":\"hh\",\"price\":\"44\",\"sale_price\":\"77\"}]', NULL, NULL, NULL, 1, 0, '2021-10-05 18:01:14', '2021-10-05 18:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `producttags`
--

CREATE TABLE `producttags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producttags`
--

INSERT INTO `producttags` (`id`, `name`, `slug`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(3, 'shiter', 'shiter', 1, 0, '2021-10-03 15:30:19', '2021-10-03 15:30:19'),
(4, 'Gorom', 'Gorom', 1, 0, '2021-10-03 15:30:32', '2021-10-03 15:30:32'),
(5, 'pakhi dress', 'pakhi-dress', 1, 0, '2021-10-03 15:31:53', '2021-10-03 15:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(9, 'রাজনীতি', 'রাজনীতি', 0, '2021-04-08 06:16:01', '2021-09-30 15:31:08'),
(10, 'অর্থনীতি', 'orthneeti', 1, '2021-04-08 06:17:24', '2021-09-30 15:19:58'),
(13, 'খেলা', 'খেলা', 1, '2021-04-08 07:39:17', '2021-09-28 17:43:31'),
(14, 'বিনোদন', 'বিনোদন', 1, '2021-04-08 07:39:28', '2021-09-28 17:37:16'),
(15, 'চাকরি', 'চাকরি', 1, '2021-04-08 08:57:18', '2021-09-28 17:37:18'),
(16, 'শিক্ষা ও সংস্কৃতি', 'শিক্ষা-ও-সংস্কৃতি', 1, '2021-09-21 15:58:46', '2021-09-28 17:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `phone_number`, `username`, `email_verified_at`, `password`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Md. Ashikujjaman shaikat', 2, 'mrshaikat0.cse@gmail.com', '8801919430500', NULL, NULL, '$2y$10$0tFtxdvDABtJyjSNeFpRjuoEXiM5SAW1Hr0IIDKly1ApyQdrTdfHm', 'avatar.jpg', 1, NULL, '2021-03-27 05:29:09', '2021-03-27 05:29:09'),
(4, 'Md shagor raton', 2, 'ctgonline63@gmail.com', '8801515296192', NULL, NULL, '$2y$10$wUEOXMXdOXbdhEJs.0G8RuXTej7/fdnrA51mBIhqFKN04RuckqUv2', 'avatar.jpg', 1, NULL, '2021-03-27 10:17:54', '2021-03-27 10:17:54'),
(5, 'admin', 2, 'admin@gmail.com', '01515296192', NULL, NULL, '$2y$10$l.egjFHVnzlv.KyZNiuaPODFtN60oUfDkmWhVFcQEic/UOJANTWfq', 'avatar.jpg', 1, NULL, '2021-09-20 13:30:02', '2021-09-20 13:30:02'),
(8, 'shaikt522', 2, 'mrshaikat0@gmail.com', '0145655211', NULL, NULL, '$2y$10$wDD4vsZr69JZGgO0bfxtn.4MFE883/rgHacCPchLb9Nv77eMkvMsG', 'avatar.jpg', 1, NULL, '2021-09-21 18:53:12', '2021-09-21 18:53:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productcategories_name_unique` (`name`),
  ADD UNIQUE KEY `productcategories_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttags`
--
ALTER TABLE `producttags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `producttags_name_unique` (`name`),
  ADD UNIQUE KEY `producttags_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `producttags`
--
ALTER TABLE `producttags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
