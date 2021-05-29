-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 11:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futureinltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `about_title`, `about_subtitle`, `about_desctiption`, `quotes`, `quotes_by`, `quotes_desctiption`, `about_photo`, `created_at`, `updated_at`) VALUES
(1, 'George', 'A Young Music Composer', 'George Kachynski was born 4th March 1986 in Georgia. He spent his childhood in Hungary with his family, parents and brother. Since his childhood, art has always attracted him. He listened to classical music with great passion, especially the opera masterpieces.', 'Music is the poetry of the air', 'George', 'He also liked to write small plots and short stories. Thanks to his excellent knowledge of the Hungarian language, he won competitions in the Hungarian language and literature repeatedly, including the republican competition held in 1996 in Miskolc and in Budapest.', '1.jpeg', '2021-05-09 21:16:10', '2021-05-20 20:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `about_photos`
--

CREATE TABLE `about_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_photos`
--

INSERT INTO `about_photos` (`id`, `about_photo`, `created_at`, `updated_at`) VALUES
(1, '1.jpeg', NULL, '2021-05-16 15:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `ab_extras`
--

CREATE TABLE `ab_extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ab_extras`
--

INSERT INTO `ab_extras` (`id`, `desctiption`, `created_at`, `updated_at`) VALUES
(5, 'Since childhood, his hobby has been drawing, which still plays a significant role in his life up to these days. He had several exhibitions while living in Hungary and after his family returned to Georgia. It is particularly worth noting an international competition \"The Power of Humanism\" held by the \"Red Cross\" in 2002, where George\'s', NULL, NULL),
(6, 'painting took the first place. After that his canvases (paintings) were exhibited in the gallery', NULL, NULL),
(7, 'in Paris. He also won a prize and awards that were sent from France after the competition.', NULL, NULL),
(8, 'Despite his great love for art, George\'s musical career is amazing and unique. Since childhood, he was interested in music, but despite this, he took no serious steps in this field.', NULL, NULL),
(9, 'In addition, he was engaged in such sports as boxing and Water polo. His whole life changed after one international piano competition.', NULL, NULL),
(10, 'After returning to his homeland, it was very difficult for a little boy to build bridges with the community in the Georgian language, but his main way of expressing himself becomes music.', NULL, NULL),
(11, 'The international piano competition in Tbilisi made a great impression on him. After that, he decided to devote himself entirely to music. A 16-year-old boy approached each participant with admiration and condescension, took an autograph and went back home happy. Among the participants were such famous Georgian pianists as Khatya Buniatishvili, Tamar Chitadze, Ketevan Sepashvili, Tamar Licheli, Ketevan Kartvelishvili, etc.', NULL, NULL),
(12, 'George had to make a choice. Academy of Arts, music or sports? However, this piano competition was crucial. George started playing the piano by ear.', NULL, NULL),
(13, 'L.V. Beethoven - Sonata Op. 57 no.23 \"Appassionata\", F. Liszt - \"Hungarian Rhapsody\" No. 2, R. Lagidze - \"Rondo-toccata\", J.S. Bach - Prelude and fugue es-moll, Well-Tempered Clavier Book I, F. Chopin - Etude Op. 10 no.12 \"Revolutionary\". This is an entrance exam program learned by ear - he didn\'t know the notes. Despite this, he entered the Music School no.3 named after M.', NULL, NULL),
(14, 'Balanchivadze in Tbilisi, as his performance of such serious works made a great impression on the commissioners.', NULL, NULL),
(15, 'His first teachers were Tengiz Chitaishvili and Nodar Nakaidze, who taught him the basics of piano art. Piano lessons, started at the age of 16, and hard work brought results and a few months later in 2002, the \"Euro Contact\" organization invited him to the music festival \"Schweigerna\" in Germany, where he received a diploma and the title of laureate of the international festival.', NULL, NULL),
(16, 'Encouraged by this success, he started studying more diligently and in 2005 he gained the first prize for the best performance of a classical sonata at an organized competition in the Music School no.3 named after M. Balanchivadze,.', NULL, NULL),
(17, '2007 was a happy year in George\'s life. He was a first-year student of the piano faculty in the class of Professor Anan Khubutiya of the Tbilisi State Conservatory named after V. Sarajishvili. Professor Nana Khubutia played a huge role in his growth as a musician and a person. After studying with Professor Anan Khubutiya, Professor Manana Gotsiridze becomes his teacher, who continues to teach him and they have very close friendship.', NULL, NULL),
(18, 'While studying at the Conservatory, he became a laureate at the chamber music competition in 2014 and was awarded a special prize for the best performance of Georgian music.', NULL, NULL),
(19, 'George was a scholarship holder of the President of Georgia, as one of the most successful students. In addition, the Ministry of Culture of Georgia presented him with a diploma of a young teacher who successfully conducted master classes for students in the mountains. Tbilisi.', NULL, NULL),
(20, 'After completing his master\'s degree, George started working as a teacher in Batumi at the Central Music School named after Z.Paliashvili. Soon he went to Europe for the concerts. In the capital of the Czech Republic, Prague, he gives solo concerts and deserves the love and sympathy of listeners and the public of high society.', NULL, NULL),
(21, 'However, it reveals another side - a great desire to go to a monastery and become a monk. He goes to Greece, to Mount Athos, to Kiev, also lives in monasteries of Georgia, and in such way he wants to find something high, unknown, unusual for him. While making the final decision, he wants to fulfill his childhood dream of going to the capital of classical music Vienna, the birthplace of Mozart and Strauss. His visit to the city of dreams becomes crucial. George found his great love - Vienna, and it would be correct to say that this city still gives him inspiration to this day.', NULL, NULL),
(22, 'As a composer, George started composing while studying at the conservatory. His first work was the Concerto for Violin and Orchestra Op. 1 f-moll. This concert will bring great success to the composer in the future.', NULL, NULL),
(23, 'In 2018, in Vienna, where his recital took place-\"Chamber concert-George Kachinsky composer in portrait\". It should be noted that it was Professor Nana Khubutia who was delighted with the first such serious work and gave a great incentive for further creativity.', NULL, NULL),
(24, 'It is also worth noting George\'s project at the Vienna Folk Theater in 2019 with director Irinej Gachechiladze- \"The Telephone, L\'amour a trois.A one act comic opera in English by Gian Carlo Menotti\". After a successful performance at the Vienna Folk Theater, this project had a great success in the city of Bratislava.', NULL, NULL),
(25, 'George is the first Georgian composer to become a member of the \"Union of Austrian Composers\" in 2019. This is not only his own victory, this is Georgia\'s victory!', NULL, NULL),
(26, 'On 29th October 2020 his recital took place with a great success at the Vienna State Philharmonic, the so-called \"Musikverein\",where he performed the cycle, trio for soprano, flute and piano - \"Slavic Paintings\" Op. 17 and trio for piano, cello and flute \"Amadeus\" Op. 13, the latter was written in Vienna, in the house-museum of W. A. Mozart and was dedicated to him.', NULL, NULL),
(27, 'As a composer, George is a continuation of the line of romantic composers of the 19th century \r\n(Chopin, Schubert, Brahms, also Tchaikovsky, Rachmaninoff), as well as an amazing melodist, which is a rare phenomenon today. Due to this, his music is very close, loved and easily perceived by both ordinary listeners and professionals, and this is his success as a composer.', NULL, NULL),
(28, 'Today, George lives in Vienna and leads an active creative life as a composer and pianist.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allbanners`
--

CREATE TABLE `allbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner.jpg',
  `page_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allbanners`
--

INSERT INTO `allbanners` (`id`, `banner_bg`, `page_name`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Music Banner', '2021-05-11 08:00:54', '2021-05-13 18:30:27'),
(2, '2.jpg', 'About Banner Background', '2021-05-11 08:03:38', '2021-05-11 08:03:38'),
(3, '3.jpg', 'Event Banner Background', '2021-05-11 08:04:10', '2021-05-11 08:04:10'),
(4, '4.jpg', 'Blog Banner Background', '2021-05-11 08:04:18', '2021-05-11 08:04:19'),
(5, '5.jpg', 'Contact Banner Background', '2021-05-11 08:04:26', '2021-05-11 08:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `user_id`, `blog_name`, `blog_desctiption`, `quotes`, `quotes_by`, `quotes_desctiption`, `blog_photo`, `slug`, `created_at`, `updated_at`) VALUES
(16, 5, 2, '2017 Grammy Nominees', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', 'Hasin Haider', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt quos ex sint, ipsam sed laudantium maiores nam? Obcaecati aliquid, odio quia nemo doloribus amet in aspernatur dolores dolorem, tempora doloremque, veritatis autem maiores harum ad distinctio saepe deleniti repudiandae veniam deserunt adipisci quisquam! Quo, laboriosam pariatur debitis corporis quod facere deleniti? Repellendus quo qui quis rem quas fugiat adipisci nihil. Possimus animi nostrum sed impedit nihil facere id dolore aliquid, delectus ad dolorem vitae quia est molestias ex deserunt inventore repellendus assumenda optio quae neque? Quod beatae debitis, odio praesentium quisquam, magni possimus, quasi eos modi distinctio porro nam.', '16.jpeg', '2017-grammy-nominees-3rIDR', '2021-05-16 15:37:41', '2021-05-16 15:37:42'),
(17, 6, 2, 'Vibeman Favorite Songs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt quos ex sint, ipsam sed laudantium maiores nam? Obcaecati aliquid, odio quia nemo doloribus amet in aspernatur dolores dolorem, tempora doloremque, veritatis autem maiores harum ad distinctio saepe deleniti repudiandae veniam deserunt adipisci quisquam! Quo, laboriosam pariatur debitis corporis quod facere deleniti? Repellendus quo qui quis rem quas fugiat adipisci nihil. Possimus animi nostrum sed impedit nihil facere id dolore aliquid, delectus ad dolorem vitae quia est molestias ex deserunt inventore repellendus assumenda optio quae neque? Quod beatae debitis, Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', 'Hasin Haider', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt quos ex sint, ipsam sed laudantium maiores nam? Obcaecati aliquid, odio quia nemo doloribus amet in aspernatur dolores dolorem, tempora doloremque, veritatis autem maiores harum ad distinctio saepe deleniti repudiandae veniam deserunt adipisci quisquam! Quo, laboriosam pariatur debitis corporis quod facere deleniti? Repellendus quo qui quis rem quas fugiat adipisci nihil. Possimus animi nostrum sed impedit nihil facere id dolore aliquid, delectus ad dolorem vitae quia est molestias ex deserunt inventore repellendus assumenda optio quae neque? Quod beatae debitis, odio praesentium quisquam, magni possimus, quasi eos modi distinctio porro nam.', '17.jpeg', 'vibeman-favorite-songs-i7xOM', '2021-05-16 15:39:13', '2021-05-16 15:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `User_id`, `blog_category`, `created_at`, `updated_at`) VALUES
(5, '2', 'Event', '2021-05-16 15:25:38', NULL),
(6, '2', 'Blog', '2021-05-16 15:25:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messges`
--

CREATE TABLE `contact_messges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_from` date NOT NULL,
  `door_open` time NOT NULL,
  `show_start` time NOT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `event_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `slug_link`, `start_from`, `door_open`, `show_start`, `event_location`, `event_desctiption`, `ticket_price`, `event_photo`, `event_status`, `created_at`, `updated_at`) VALUES
(7, '-CHAMBER CONCERT | “GEORGE KACHINSKY COMPOSER IN PORTRAIT”', 'under-the-skin-GnKWp', '2018-09-25', '16:00:00', '16:03:00', 'VIENNA ALTES RATHAUS', 'Best concert ever !', '70', '7.jpeg', '2', '2021-05-16 15:58:01', '2021-05-20 21:14:56'),
(8, 'Concert in Prague. ( Evangelical church)', 'luxorlive-bEw3N', '2018-11-27', '16:00:00', '16:03:00', 'Prague', 'Best concert ever !', '50', '8.jpeg', '2', '2021-05-16 15:59:22', '2021-05-20 21:13:12'),
(9, 'Concert in Weidenkam place, Germany.', 'bacardi-original-bar-4IKuV', '2018-08-16', '16:00:00', '16:03:00', 'Germany.', 'Best concert ever !', '68', '9.jpeg', '2', '2021-05-16 16:01:07', '2021-05-20 21:13:10'),
(12, 'Prague,Czech republic. Solo recital in “Aria” hotel.', 'pragueczech-republic-solo-recital-in-aria-hotel-YW8Mb', '2018-04-23', '13:45:00', '14:45:00', 'Prague,Czech republic', 'Best concert ever !', '100', 'default.jpg', '2', '2021-05-20 21:17:06', '2021-05-20 21:17:09'),
(13, 'Art is the key to the spirit of  Nation”', 'art-is-the-key-to-the-spirit-of-nation-wYuRs', '2018-11-18', '13:45:00', '14:45:00', 'Prague,Czech republic', 'Best concert ever !', '100', 'default.jpg', '2', '2021-05-20 21:18:40', '2021-05-20 21:18:42'),
(14, 'A Christmas concert of classical music', 'a-christmas-concert-of-classical-music-7I3Cf', '2019-12-16', '13:45:00', '14:45:00', 'Vienna’s  historical Minoritenkirche church.', 'Best concert ever !', '100', 'default.jpg', '2', '2021-05-20 21:20:10', '2021-05-20 21:20:12'),
(15, 'The Telephone , L´ amour a Trois. A one-act comic opera in English by Gian  Carlo Menotti', 'the-telephone-l-amour-a-trois-a-one-act-comic-opera-in-english-by-gian-carlo-menotti-wdGYO', '2019-09-16', '13:45:00', '14:45:00', 'Tbilisi', 'Best concert ever !', '100', 'default.jpg', '2', '2021-05-20 21:22:38', '2021-05-20 21:27:15'),
(16, 'The Telephone , L´ amour a Trois. A one-act comic opera in English by Gian  Carlo Menotti. Directed by Irina Gachechiladze featuring Rustavi. Rustavi dramatic theater  named by Sh.Rustaveli.', 'the-telephone-l-amour-a-trois-a-one-act-comic-opera-in-english-by-gian-carlo-menotti-directed-by-irina-gachechiladze-featuring-rustavi-rustavi-dramatic-theater-named-by-shrustaveli-Gwzyb', '2019-09-16', '13:45:00', '14:45:00', 'Rustavi dramatic theater', 'Best concert ever !', '120', 'default.jpg', '2', '2021-05-20 21:27:09', '2021-05-20 21:27:14'),
(17, '. Solo recital in “Blüthner” piano gallery in Leipzig,Germany.', 'solo-recital-in-bluthner-piano-gallery-in-leipziggermany-wCxF8', '2019-02-01', '13:45:00', '14:45:00', 'Leipzig,Germany', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:28:29', '2021-05-20 21:28:33'),
(18, 'The Telephone , L´ amour a Trois. A one-act comic opera in English by Gian Carlo  Menotti.', 'the-telephone-l-amour-a-trois-a-one-act-comic-opera-in-english-by-gian-carlo-menotti-SSYsp', '2019-01-01', '13:45:00', '14:45:00', 'Vienna Volkstheater (Bratislava)', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:29:54', '2021-05-20 21:29:56'),
(19, 'heater am Olgaeck,Stuttgart,Germany. Solo recital.', 'heater-am-olgaeckstuttgartgermany-solo-recital-lLtWo', '2019-01-01', '13:45:00', '14:45:00', 'Theater am Olgaeck,Stuttgart,Germany.', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:31:19', '2021-05-20 21:31:22'),
(20, '. Solo recital in Bratislava.', 'solo-recital-in-bratislava-tCzaX', '2020-01-02', '13:45:00', '14:45:00', 'Bratislava.', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:32:44', '2021-05-20 21:32:46'),
(21, 'Concert in Bank Austria Salon organized by “Belcantismo”', 'concert-in-bank-austria-salon-organized-by-belcantismo-0OSyO', '2020-01-22', '13:45:00', '14:45:00', 'Austria Salon', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:33:53', '2021-05-20 21:33:55'),
(22, 'Concert in Bank Austria Salon organized by “Belcantismo” .', 'concert-in-bank-austria-salon-organized-by-belcantismo-0zepg', '2020-02-12', '13:45:00', '14:45:00', 'Austria Salon', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:34:57', '2021-05-20 21:34:59'),
(23, 'Concert in Bernstein Madonnen Palace,Austria.', 'concert-in-bernstein-madonnen-palaceaustria-lDQEc', '2020-08-07', '13:45:00', '14:45:00', 'Austria', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:35:44', '2021-05-20 21:35:47'),
(24, '. Solo recital at Barocsaal in Vienna, orginezed by Embasy of Georgia to the  Republic of Austria.', 'solo-recital-at-barocsaal-in-vienna-orginezed-by-embasy-of-georgia-to-the-republic-of-austria-GvDmY', '2020-12-18', '13:45:00', '14:45:00', 'Austria', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:36:40', '2021-05-20 21:36:42'),
(25, 'Concert in Bank Austria Salon organized by “Belcantismo”', 'concert-in-bank-austria-salon-organized-by-belcantismo-L55yS', '2020-03-12', '13:45:00', '14:45:00', 'Austria Salon', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:37:41', '2021-05-20 21:37:44'),
(26, 'George Kachinsky composer in residence in Vienna “Musikverein”, J.  Brahms hall. ( Vienna Philarmonic )', 'george-kachinsky-composer-in-residence-in-vienna-musikverein-j-brahms-hall-vienna-philarmonic-9pxzi', '2020-10-29', '13:45:00', '14:45:00', 'n Vienna “Musikverein”, J.  Brahms hall. ( Vienna Philarmonic )', 'Best concert ever !', '00', 'default.jpg', '2', '2021-05-20 21:39:04', '2021-05-20 21:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `event_controllers`
--

CREATE TABLE `event_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_photos`
--

CREATE TABLE `event_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_photos`
--

INSERT INTO `event_photos` (`id`, `event_photo`, `created_at`, `updated_at`) VALUES
(2, '2.jpeg', NULL, '2021-05-16 15:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `getins`
--

CREATE TABLE `getins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `getins`
--

INSERT INTO `getins` (`id`, `heading_name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'GET IN TOUCH ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos delectus quo totam nobis ut dolor aperiam alias voluptatibus et mollitia.', NULL, '2021-05-16 15:41:32'),
(2, 'Address', 'Level 13, 2 Elizabeth St,\r\nMelbourne Victoria\r\n3000 Australia', NULL, '2021-05-11 14:09:19'),
(3, 'First Mobile', '(+880)1992409030', NULL, NULL),
(4, 'Second Mobile Number', '(+880)1992409030', NULL, NULL),
(5, 'First Email', 'coderexpertzahid@gmail.com', NULL, NULL),
(6, 'Second Email', 'tohorabhasan@gmail.com', NULL, NULL),
(8, 'Facbook link', 'https://www.youtube.com/channel/UCFgWoX-ev6_FBpmpEERoiwg', NULL, '2021-05-20 18:07:03'),
(9, 'Youtube Link', 'https://www.youtube.com/channel/UCFgWoX-ev6_FBpmpEERoiwg', NULL, '2021-05-20 17:22:22'),
(11, 'SoundCloud', 'https://www.youtube.com/channel/UCFgWoX-ev6_FBpmpEERoiwg', NULL, '2021-05-20 18:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `heading`, `banner_bg`, `created_at`, `updated_at`) VALUES
(7, 'Music is the poetry of  the air', '7.jpeg', '2021-05-15 08:06:03', '2021-05-16 11:36:56'),
(8, 'Singing that comes from soul', '8.jpeg', '2021-05-16 11:37:55', '2021-05-16 11:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1.png', '2021-05-03 10:04:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `map`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14614.432780363135!2d90.43236957193538!3d23.68996560351037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9e7d89677bd%3A0x3b5c34ece56ca8e!2sJurain%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1621179875020!5m2!1sen!2sbd', NULL, '2021-05-16 15:50:48');

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
(4, '2021_05_03_160317_create_logos_table', 2),
(5, '2021_05_03_162915_create_home_banners_table', 3),
(6, '2021_05_05_231157_create_music_gallaries_table', 4),
(7, '2021_05_05_231220_create_music_gallary_headings_table', 4),
(8, '2021_05_08_022949_create_contact_messges_table', 5),
(9, '2021_05_08_142945_create_maps_table', 6),
(10, '2021_05_08_145951_create_event_controllers_table', 7),
(13, '2021_05_08_153643_create_events_table', 8),
(16, '2021_05_08_182634_create_blog_categories_table', 9),
(18, '2021_05_09_044525_create_blogs_table', 10),
(20, '2021_05_09_164459_create_testimonials_table', 11),
(22, '2021_05_10_030914_create_about_details_table', 12),
(23, '2021_05_10_050433_create_about_photos_table', 13),
(24, '2021_05_10_050510_create_event_photos_table', 13),
(25, '2021_05_11_134809_create_allbanners_table', 14),
(26, '2021_05_11_155751_create_getins_table', 15),
(27, '2021_05_21_022026_create_ab_extras_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `music_gallaries`
--

CREATE TABLE `music_gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `youtube_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'thumbnail.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_gallaries`
--

INSERT INTO `music_gallaries` (`id`, `youtube_link`, `video_thumbnail`, `created_at`, `updated_at`) VALUES
(14, 'https://youtu.be/tciAzINqIQw', '14.jpeg', '2021-05-16 11:44:23', '2021-05-20 21:48:15'),
(15, 'https://youtu.be/DcY9G5hMbVQ', '15.jpeg', '2021-05-16 11:45:15', '2021-05-20 21:47:16'),
(16, 'https://youtu.be/OgzfEU7hnxE', '16.jpeg', '2021-05-16 11:45:51', '2021-05-20 21:46:03'),
(17, 'https://youtu.be/ByC3ZS3fdh8', '17.jpeg', '2021-05-16 11:46:39', '2021-05-20 21:45:35'),
(18, 'https://youtu.be/XPKCSEdLvro', '18.jpeg', '2021-05-16 11:47:06', '2021-05-20 21:45:10'),
(19, 'https://youtu.be/li9D3YMU8MY', '19.jpeg', '2021-05-16 11:47:38', '2021-05-20 21:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `music_gallary_headings`
--

CREATE TABLE `music_gallary_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_gallary_headings`
--

INSERT INTO `music_gallary_headings` (`id`, `heading`, `sub_heading`, `created_at`, `updated_at`) VALUES
(1, 'MUSIC GALLERY', 'MUSIC', '2021-05-05 17:24:22', '2021-05-05 18:21:01');

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
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ster` int(11) NOT NULL,
  `what_client_say` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `service_name`, `ster`, `what_client_say`, `client_photo`, `created_at`, `updated_at`) VALUES
(12, 'Developer Parves', 'Musician', 5, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, rerum. Accusantium soluta iste saepe commodi ut repudiandae ratione deserunt sapiente.', '12.jpg', '2021-05-16 15:15:32', '2021-05-16 15:15:32'),
(13, 'Developer Mehedi', 'Singer', 4, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, rerum. Accusantium soluta iste saepe commodi ut repudiandae ratione deserunt sapiente.', '13.jpg', '2021-05-16 15:16:05', '2021-05-16 15:16:05'),
(14, 'Heidi Fisher', 'Singer', 5, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, rerum. Accusantium soluta iste saepe commodi ut repudiandae ratione deserunt sapiente.', '14.jpg', '2021-05-16 15:16:36', '2021-05-16 15:16:36'),
(15, 'Roshida Cabou', 'Actor', 5, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, rerum. Accusantium soluta iste saepe commodi ut repudiandae ratione deserunt sapiente.', '15.jpg', '2021-05-16 15:17:18', '2021-05-16 15:17:18');

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
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'shikderm211@gmail.com', '2021-05-02 07:51:00', '$2y$10$EBPHAU2OTXEw0xC0HFTSQu71.2.fwJXJAIOZVuaneqvH5TaUG8ZWa', 'default.jpg', NULL, '2021-05-03 09:49:38', '2021-05-03 09:49:38'),
(2, 'admin', 'admin@gmail.com', '2021-05-05 07:51:14', '$2y$10$90twj5DF8on0HsWWyWUNwOQecj2Dl2b.rdzER2ljt.IbOgTjWJek.', 'default.jpg', 'BurBDJIucZ3ITL9JPMZCKu4WjhnnKUHH73U3ZwvPWSGiyCp8sJ19Fd9wxTrT', '2021-05-04 13:04:33', '2021-05-04 13:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_photos`
--
ALTER TABLE `about_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ab_extras`
--
ALTER TABLE `ab_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allbanners`
--
ALTER TABLE `allbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messges`
--
ALTER TABLE `contact_messges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_controllers`
--
ALTER TABLE `event_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_photos`
--
ALTER TABLE `event_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getins`
--
ALTER TABLE `getins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_gallaries`
--
ALTER TABLE `music_gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_gallary_headings`
--
ALTER TABLE `music_gallary_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_photos`
--
ALTER TABLE `about_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ab_extras`
--
ALTER TABLE `ab_extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `allbanners`
--
ALTER TABLE `allbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_messges`
--
ALTER TABLE `contact_messges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `event_controllers`
--
ALTER TABLE `event_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_photos`
--
ALTER TABLE `event_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `getins`
--
ALTER TABLE `getins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5203;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `music_gallaries`
--
ALTER TABLE `music_gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `music_gallary_headings`
--
ALTER TABLE `music_gallary_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
