-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2021 at 02:42 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `album_id` int NOT NULL,
  `album_image` varchar(100) DEFAULT NULL,
  `album_name` varchar(80) DEFAULT NULL,
  `artist_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_image`, `album_name`, `artist_id`) VALUES
(1, 'rare.jpg', 'Rare', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Artist_id` int NOT NULL,
  `Artist_image` varchar(100) NOT NULL,
  `Artist_name` varchar(80) NOT NULL,
  `Artist_cover_image` varchar(150) NOT NULL,
  `p_name` varchar(70) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Artist_id`, `Artist_image`, `Artist_name`, `Artist_cover_image`, `p_name`, `color`) VALUES
(1, './Assets/webPlayerAssets/artists/selenaGomez.jpg', 'Selena Gomez', './Assets/webPlayerAssets/artists/cover_selena.jpg', 'selena', '#7618a5'),
(2, './Assets/webPlayerAssets/artists/billieEilish.jpg', 'Billie Eilish', './Assets/webPlayerAssets/artists/cover_billie.jpg', 'billie', '#39b23b'),
(3, './Assets/webPlayerAssets/artists/theWeeknd.jpg', 'The Weeknd', './Assets/webPlayerAssets/artists/cover_weeknd.png', 'weeknd', '#169999'),
(4, './Assets/webPlayerAssets/artists/halsey.jpg', 'Halsey', './Assets/webPlayerAssets/artists/cover_halsey.jpg', 'halsey', '#e713c3'),
(5, './Assets/webPlayerAssets/artists/edSheeran.png', 'Ed Sheeran', './Assets/webPlayerAssets/artists/cover_edsheeran.jpg', 'edsheeran', '#5d4247'),
(6, './Assets/webPlayerAssets/artists/justinBieber.jpg', 'Justin Bieber', './Assets/webPlayerAssets/artists/cover_justin.jpg', 'justin', '#291341'),
(7, './Assets/webPlayerAssets/artists/zayn.jpg', 'Zayn Malik', './Assets/webPlayerAssets/artists/cover_zayn.jpg', 'zayn', '#b04348'),
(8, './Assets/webPlayerAssets/artists/taylor.jpg', 'Taylor Swift', './Assets/webPlayerAssets/artists/cover_taylor.jpg', 'taylor', '#be0b60'),
(9, './Assets/webPlayerAssets/artists/maroon5.jpg', 'Maroon 5', './Assets/webPlayerAssets/artists/cover_maroon5.jpg', 'maroon', '#4aba7c'),
(10, './Assets/webPlayerAssets/artists/bts.png', 'BTS', './Assets/webPlayerAssets/artists/cover_bts.jpg', 'bts', '#d1d351'),
(11, './Assets/webPlayerAssets/artists/harryStyles.jpg', 'Harry Styles', './Assets/webPlayerAssets/artists/cover_harry.jpg', 'harry', '#a866d1'),
(12, './Assets/webPlayerAssets/artists/shakira.jpg', 'Shakira', './Assets/webPlayerAssets/artists/cover_shakira.jpg', 'shakira', '#d54566'),
(13, './Assets/webPlayerAssets/artists/eminem.jpeg', 'Eminem', './Assets/webPlayerAssets/artists/cover_eminem.jpg', 'eminem', '#324079'),
(14, './Assets/webPlayerAssets/artists/anneMarie.jpg', 'Anne Marie', './Assets/webPlayerAssets/artists/cover_anne.jpg', 'anne', '#e53281'),
(15, './Assets/webPlayerAssets/artists/adele.jpg', 'Adele', '', 'adele', ''),
(16, './Assets/webPlayerAssets/artists/ellieGoulding.jpg', 'Ellie Goulding', '', 'ellieGoulding', ''),
(17, './Assets/webPlayerAssets/artists/jaiWaetford.jpg', 'Jay Waetford', '', 'jayWaetford', ''),
(18, './Assets/webPlayerAssets/artists/jamesArthur.jpg', 'James Arthur', '', 'jamesArthur', ''),
(19, './Assets/webPlayerAssets/artists/lordHuron.jpg', 'Lord Huron', '', 'lordHuron', ''),
(20, './Assets/webPlayerAssets/artists/passenger.jpg', 'Passenger', '', 'passenger', ''),
(21, './Assets/webPlayerAssets/artists/skylarGrey.jpg', 'Skyler Grey', '', 'skyler', '');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collection_id` int NOT NULL,
  `collection_title_id` int NOT NULL,
  `playlist_id` int DEFAULT NULL,
  `artist_id` int DEFAULT NULL,
  `album_id` int DEFAULT NULL,
  `song_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`collection_id`, `collection_title_id`, `playlist_id`, `artist_id`, `album_id`, `song_id`) VALUES
(1, 1, NULL, 1, NULL, NULL),
(8, 1, NULL, 2, NULL, NULL),
(9, 1, NULL, 3, NULL, NULL),
(10, 1, NULL, 4, NULL, NULL),
(11, 1, NULL, 5, NULL, NULL),
(12, 1, NULL, 6, NULL, NULL),
(13, 2, 1, NULL, NULL, NULL),
(14, 2, 2, NULL, NULL, NULL),
(15, 2, 3, NULL, NULL, NULL),
(16, 2, 4, NULL, NULL, NULL),
(17, 2, 5, NULL, NULL, NULL),
(18, 2, 6, NULL, NULL, NULL),
(19, 3, NULL, 7, NULL, NULL),
(20, 3, NULL, 8, NULL, NULL),
(21, 3, NULL, 9, NULL, NULL),
(22, 3, NULL, 10, NULL, NULL),
(23, 3, NULL, 11, NULL, NULL),
(24, 3, NULL, 12, NULL, NULL),
(25, 4, NULL, 14, NULL, NULL),
(26, 4, NULL, 2, NULL, NULL),
(27, 4, NULL, 4, NULL, NULL),
(28, 4, NULL, 13, NULL, NULL),
(29, 4, NULL, 6, NULL, NULL),
(30, 4, NULL, 10, NULL, NULL),
(31, 5, NULL, 4, NULL, 24),
(32, 5, NULL, 14, NULL, 2),
(33, 5, NULL, 10, NULL, 11),
(34, 5, NULL, 14, NULL, 3),
(35, 5, NULL, 13, NULL, 21),
(36, 5, NULL, 6, NULL, 35),
(37, 6, NULL, 6, NULL, 31),
(38, 6, NULL, 14, NULL, 4),
(39, 6, NULL, 5, NULL, 16),
(40, 6, NULL, 4, NULL, 25),
(41, 6, NULL, 9, NULL, 40),
(42, 6, NULL, 1, NULL, 45),
(43, 7, NULL, 2, NULL, 7),
(44, 7, NULL, 14, NULL, 5),
(45, 7, NULL, 19, NULL, 36),
(46, 7, NULL, 20, NULL, 41),
(47, 7, NULL, 1, NULL, 46),
(48, 7, NULL, 7, NULL, 67),
(49, 8, NULL, 7, NULL, 67),
(50, 8, NULL, 1, NULL, 45),
(51, 8, NULL, 6, NULL, 35),
(52, 8, NULL, 1, NULL, 46),
(53, 8, NULL, 19, NULL, 36),
(54, 8, NULL, 4, NULL, 25),
(55, 8, NULL, 4, NULL, 24),
(56, 8, NULL, 5, NULL, 16),
(57, 8, NULL, 10, NULL, 11),
(58, 8, NULL, 14, NULL, 3),
(59, 8, NULL, 14, NULL, 5),
(60, 8, NULL, 2, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `collection_title`
--

CREATE TABLE `collection_title` (
  `collection_title_id` int NOT NULL,
  `collection_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `collection_title`
--

INSERT INTO `collection_title` (`collection_title_id`, `collection_name`) VALUES
(1, 'Best of Artists'),
(2, 'Mood'),
(3, 'Poplular Artist'),
(4, 'Trending Artists'),
(5, 'Sing Along'),
(6, 'Rainy Day Jazz'),
(7, 'Lo-Fi Beats'),
(8, 'Trending Songs');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` int NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `caption_heading` varchar(100) NOT NULL,
  `caption_content` varchar(200) NOT NULL,
  `laravel` varchar(100) NOT NULL,
  `phplink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `slider_image`, `caption_heading`, `caption_content`, `laravel`, `phplink`) VALUES
(1, './Assets/landingAssets/Slider_billie.jpg', 'Billie Eilish', 'When We All Fall Asleep, Where Do We Go ?', '/play/billie', 'http://localhost:3005/music/play.php?artist=billie'),
(2, './Assets/landingAssets/Slider_ariana.jpg', 'Maroon 5', 'Sweetener', '/play/maroon', 'http://localhost:3005/music/play.php?artist=maroon'),
(3, './Assets/landingAssets/Slider_halsey.jpg', 'Halsey', 'Manic', '/play/halsey', 'http://localhost:3005/music/play.php?artist=halsey'),
(4, './Assets/landingAssets/Slider_edshreen.jpg', 'ED Shreen', 'Divide', '/play/edsheeran', 'http://localhost:3005/music/play.php?artist=edsheeran'),
(5, './Assets/landingAssets/Slider_harry.jpg', 'HARRY STYLES', 'FINE LINE', '/play/harry', 'http://localhost:3005/music/play.php?artist=harry');

-- --------------------------------------------------------

--
-- Table structure for table `landing_grid`
--

CREATE TABLE `landing_grid` (
  `id` int NOT NULL,
  `grid_image` varchar(200) NOT NULL,
  `grid_content_title` varchar(100) NOT NULL,
  `grid_content` varchar(200) NOT NULL,
  `laravel` varchar(100) NOT NULL,
  `phplink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `landing_grid`
--

INSERT INTO `landing_grid` (`id`, `grid_image`, `grid_content_title`, `grid_content`, `laravel`, `phplink`) VALUES
(1, './Assets/landingAssets/eminem.jpg', 'Eminem', 'Music To Be Murdered', '/play/eminem', 'http://localhost:3005/music/play.php?artist=eminem'),
(2, './Assets/landingAssets/justinBieber.jpg', 'Justin Bieber', 'Changes', '/play/justin', 'http://localhost:3005/music/play.php?artist=justin'),
(3, './Assets/landingAssets/selenaGomez.jpg', 'Selena Gomez', 'Rare', '/play/selena', 'http://localhost:3005/music/play.php?artist=selena'),
(4, './Assets/landingAssets/theWeekend.jpg', 'The Weekend', 'Blinding Lights', '/play/weeknd', 'http://localhost:3005/music/play.php?artist=weeknd'),
(5, './Assets/landingAssets/harryStyles.png', 'Harry Styles', 'Fine Line', '/play/harry', 'http://localhost:3005/music/play.php?artist=harry'),
(6, './Assets/landingAssets/chainsmokers.jpg', 'Billie Eilish', 'World War Joy', '/play/billie', 'http://localhost:3005/music/play.php?artist=billie'),
(7, './Assets/landingAssets/maroon5.jpg', 'Maroon 5', 'Memories', '/play/maroon', 'http://localhost:3005/music/play.php?artist=maroon'),
(8, './Assets/landingAssets/taylor.jpg', 'Taylor Swift', 'Lover', '/play/taylor', 'http://localhost:3005/music/play.php?artist=taylor');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int NOT NULL,
  `playlist_name` varchar(100) NOT NULL,
  `playlist_image` varchar(100) NOT NULL,
  `Playlist_cover_image` varchar(150) NOT NULL,
  `color` varchar(20) NOT NULL,
  `p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `playlist_name`, `playlist_image`, `Playlist_cover_image`, `color`, `p_name`) VALUES
(1, 'Warm Fuzzy Feelings', './Assets/webPlayerAssets/playlist/warm.jpg', './Assets/webPlayerAssets/playlist/cover_warm.jpg', '#4fa0cf', 'warm'),
(2, 'Happiness Pills', './Assets/webPlayerAssets/playlist/happinessPills.jpg', './Assets/webPlayerAssets/playlist/cover_happiness.jpg', '#35caa8', 'happiness'),
(3, 'Workout Beats', './Assets/webPlayerAssets/playlist/workoutBeats.jpg', './Assets/webPlayerAssets/playlist/cover_workout.png', '#18587d', 'workout'),
(4, 'Coffee & Chill', './Assets/webPlayerAssets/playlist/Coffee&Chill.jpeg', './Assets/webPlayerAssets/playlist/cover_coffee.png', '#745152', 'coffee'),
(5, 'Sad Beats', './Assets/webPlayerAssets/playlist/sadBeats.jpg', './Assets/webPlayerAssets/playlist/cover_sad.jpg', '#377e89', 'sad'),
(6, 'Acoustic Chill', './Assets/webPlayerAssets/playlist/acousticChill.jpg', './Assets/webPlayerAssets/playlist/cover_acoustic.jpg', '#4b2a2c', 'acoustic');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_songs`
--

CREATE TABLE `playlist_songs` (
  `id` int NOT NULL,
  `playlist_id` int DEFAULT NULL,
  `song_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `playlist_songs`
--

INSERT INTO `playlist_songs` (`id`, `playlist_id`, `song_id`) VALUES
(1, 1, 66),
(2, 1, 14),
(3, 1, 23),
(4, 1, 29),
(5, 1, 30),
(6, 1, 49),
(7, 2, 44),
(8, 2, 32),
(9, 2, 50),
(10, 2, 58),
(11, 2, 63),
(12, 2, 3),
(13, 2, 11),
(14, 3, 18),
(15, 3, 21),
(16, 3, 25),
(17, 3, 37),
(18, 3, 57),
(19, 3, 64),
(20, 3, 62),
(21, 3, 9),
(22, 4, 14),
(23, 4, 2),
(24, 4, 17),
(25, 4, 24),
(26, 4, 5),
(27, 4, 35),
(28, 4, 49),
(29, 5, 15),
(30, 5, 25),
(31, 5, 1),
(32, 5, 36),
(33, 5, 41),
(34, 5, 47),
(35, 6, 15),
(36, 6, 55),
(37, 6, 56),
(38, 6, 66),
(39, 6, 46),
(40, 6, 33),
(41, 6, 27);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int NOT NULL,
  `song_name` varchar(100) NOT NULL,
  `song_address` varchar(200) NOT NULL,
  `song_image` varchar(150) DEFAULT NULL,
  `artist_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `song_address`, `song_image`, `artist_id`) VALUES
(1, 'Hello', './Assets/webPlayerAssets/songs/Adele - Hello.mp3', NULL, 15),
(2, '2002', './Assets/webPlayerAssets/songs/Anne-Marie - 2002.mp3', './Assets/webPlayerAssets/songs/images/2002.jpg', 14),
(3, 'Friends', './Assets/webPlayerAssets/songs/Anne-Marie - FRIENDS.mp3', './Assets/webPlayerAssets/songs/images/friends.jpg', 14),
(4, 'I\'m Lonely ', './Assets/webPlayerAssets/songs/Anne-Marie - i m lonely.mp3', './Assets/webPlayerAssets/songs/images/lonely.png', 14),
(5, 'Rewrite The Stars', './Assets/webPlayerAssets/songs/Anne-Marie - Rewrite the Stars.mp3', './Assets/webPlayerAssets/songs/images/rewriteTheStars.jpg', 14),
(6, 'Bury a Friend', './Assets/webPlayerAssets/songs/Billie Eilish - bury a friend.mp3', NULL, 2),
(7, 'Lovely', './Assets/webPlayerAssets/songs/Billie Eilish - lovely ft. Khalid_2.mp3', './Assets/webPlayerAssets/songs/images/lovely.jpg', 2),
(8, 'When The Party is Over', './Assets/webPlayerAssets/songs/Billie Eilish - when the party s over.mp3', NULL, 2),
(9, 'Bad Guy', './Assets/webPlayerAssets/songs/Billie Eilish, Justin Bieber - bad guy.mp3', NULL, 2),
(10, 'Black Swan', './Assets/webPlayerAssets/songs/BTS - Black Swan.mp3', NULL, 10),
(11, 'Boy With Luv', './Assets./webPlayerAssets./songs/BTS - boy with luv.mp3', './Assets/webPlayerAssets/songs/images/boyWithLuv.jpg', 10),
(12, 'Louder Than Bombs', './Assets./webPlayerAssets./songs/BTS - Louder Than Bombs.mp3', NULL, 10),
(13, 'ON', './Assets./webPlayerAssets./songs/BTS - ON.mp3', NULL, 10),
(14, 'All of The Stars', './Assets./webPlayerAssets./songs/Ed Sheeran - All Of The Stars.mp3', NULL, 5),
(15, 'Photograph', './Assets./webPlayerAssets./songs/Ed Sheeran - Photograph.mp3', NULL, 5),
(16, 'Shape of You', './Assets./webPlayerAssets./songs/Ed Sheeran - Shape of You.mp3', './Assets/webPlayerAssets/songs/images/shapeOfYou.jpg', 5),
(17, 'Love Me Like You Do', './Assets./webPlayerAssets./songs/Ellie Goulding - Love Me Like You Do.mp3', NULL, 16),
(18, 'Mokingbird', './Assets./webPlayerAssets./songs/Eminem - Mockingbird.mp3', NULL, 13),
(19, 'Rap God', './Assets./webPlayerAssets./songs/Eminem - Rap God.mp3', NULL, 13),
(20, 'Venom', './Assets./webPlayerAssets./songs/Eminem - Venom.mp3', NULL, 13),
(21, 'Love The Way You Lie', './Assets./webPlayerAssets./songs/Eminem ft Rihanna - Love the way you lie.mp3', './Assets/webPlayerAssets/songs/images/loveTheWayYouLie.jpg', 13),
(22, 'The Monster', './Assets./webPlayerAssets./songs/Eminem ft. Rihanna - The Monster.mp3', NULL, 13),
(23, 'Closer', './Assets./webPlayerAssets./songs/Halsey - Closer.mp3', NULL, 4),
(24, 'Eastside', './Assets./webPlayerAssets./songs/Halsey - Eastside.mp3', './Assets/webPlayerAssets/songs/images/eastside.png', 4),
(25, 'Without Me', './Assets./webPlayerAssets./songs/Halsey - Without Me.mp3', './Assets/webPlayerAssets/songs/images/withoutMe.jpg', 4),
(26, 'Adore You', './Assets./webPlayerAssets./songs/Harry Styles - Adore You.mp3', NULL, 11),
(27, 'Falling', './Assets./webPlayerAssets./songs/Harry Styles - Falling.mp3', NULL, 11),
(28, 'Lights Up', './Assets./webPlayerAssets./songs/Harry Styles - Lights Up.mp3', NULL, 11),
(29, 'Shy', './Assets./webPlayerAssets./songs/Jai Waetford - Shy.mp3', NULL, 17),
(30, 'Say You Wont Let Go', './Assets./webPlayerAssets./songs/James Arthur - Say you won t let go.mp3', NULL, 18),
(31, '10,000 Hours', './Assets./webPlayerAssets./songs/Justin Bieber - 10,000 Hours.mp3', './Assets/webPlayerAssets/songs/images/10000Hours.jpg', 6),
(32, 'Intentions', './Assets/webPlayerAssets/songs/Justin Bieber - Intentions.mp3', '', 6),
(33, 'Love Yourself', './Assets/webPlayerAssets/songs/Justin Bieber - Love Yourself.mp3', NULL, 6),
(34, 'What Do You Mean', './Assets/webPlayerAssets/songs/Justin bieber - what do you mean.mp3', NULL, 6),
(35, 'Yummy', './Assets/webPlayerAssets/songs/Justin Bieber - Yummy.mp3', './Assets/webPlayerAssets/songs/images/yummy.jpeg', 6),
(36, 'The Night We Met', './Assets/webPlayerAssets/songs/Lord Huron - The Night We Met.mp3', './Assets/webPlayerAssets/songs/images/theNightWeMet.jpg', 19),
(37, 'Animals', './Assets/webPlayerAssets/songs/Maroon 5 - Animals.mp3', NULL, 9),
(38, 'Girls Like You', './Assets/webPlayerAssets/songs/Maroon 5 - Girls Like You.mp3', NULL, 9),
(39, 'Memories', './Assets/webPlayerAssets/songs/Maroon 5 - Memories.mp3', NULL, 9),
(40, 'Sugar', './Assets/webPlayerAssets/songs/Maroon 5 - Sugar.mp3', './Assets/webPlayerAssets/songs/images/sugar.jpg', 9),
(41, 'Let Her Go', './Assets/webPlayerAssets/songs/Passenger Let Her Go.mp3', './Assets/webPlayerAssets/songs/images/letHerGo.jpg', 20),
(42, 'Back To You', './Assets/webPlayerAssets/songs/Selena Gomez - Back To You.mp3', NULL, 1),
(43, 'Come and Get It', './Assets/webPlayerAssets/songs/Selena Gomez - Come & Get It.mp3', NULL, 1),
(44, 'I cant\'t Get Enough', './Assets/webPlayerAssets/songs/Selena Gomez - I Can t Get Enough.mp3', NULL, 1),
(45, 'It Ain\'t Me', './Assets/webPlayerAssets/songs/Selena Gomez - It Ain t Me.mp3', './Assets/webPlayerAssets/songs/images/itAintMe.png', 1),
(46, 'Only You', './Assets/webPlayerAssets/songs/Selena Gomez - Only You.mp3', './Assets/webPlayerAssets/songs/images/onlyYou.jpg', 1),
(47, 'The Heart Wants What It Wants', './Assets/webPlayerAssets/songs/Selena Gomez - The Heart Wants What It Wants.mp3', NULL, 1),
(48, 'Who Says', './Assets/webPlayerAssets/songs/Selena Gomez - Who Says.mp3', NULL, 1),
(49, 'Wolves', './Assets/webPlayerAssets/songs/Selena Gomez - Wolves.mp3', NULL, 1),
(50, 'Chantaje', './Assets/webPlayerAssets/songs/Shakira - Chantaje.mp3', NULL, 12),
(51, 'Hips Don\'t Lie', './Assets/webPlayerAssets/songs/Shakira - Hips Don t Lie.mp3', NULL, 12),
(52, 'Loca', './Assets/webPlayerAssets/songs/Shakira - Loca.mp3', NULL, 12),
(53, 'Waka Waka', './Assets/webPlayerAssets/songs/Shakira - Waka Waka.mp3', NULL, 12),
(54, 'Whenever Wherever', './Assets/webPlayerAssets/songs/Shakira - Whenever.mp3', NULL, 12),
(55, 'Coming Home', './Assets/webPlayerAssets/songs/Skylar Grey - Coming Home.mp3', NULL, 21),
(56, 'Blank Space', './Assets/webPlayerAssets/songs/Taylor Swift - Blank Space.mp3', NULL, 8),
(57, 'I Knew You Were Trouble', './Assets/webPlayerAssets/songs/Taylor Swift - I Knew You Were Trouble.mp3', NULL, 8),
(58, 'ME', './Assets/webPlayerAssets/songs/Taylor Swift - ME.mp3', NULL, 8),
(59, 'Wildest Dreams', './Assets/webPlayerAssets/songs/Taylor Swift - Wildest Dreams.mp3', NULL, 8),
(60, 'You Belong With Me', './Assets/webPlayerAssets/songs/Taylor Swift - You Belong With Me.mp3', NULL, 8),
(61, 'Alone Again', './Assets/webPlayerAssets/songs/The Weeknd - Alone Again.mp3', NULL, 3),
(62, 'Blinding Lights', './Assets/webPlayerAssets/songs/The Weeknd - Blinding Lights.mp3', NULL, 3),
(63, 'Starboy', './Assets/webPlayerAssets/songs/The Weeknd - Starboy.mp3', NULL, 3),
(64, 'Dusk Till Dawn', './Assets/webPlayerAssets/songs/Zayn - Dusk Till Dawn.mp3', NULL, 7),
(65, 'I Don\'t wanna Live Forever', './Assets/webPlayerAssets/songs/Zayn - I Dont Wanna Live.mp3', NULL, 7),
(66, 'Let Me', './Assets/webPlayerAssets/songs/Zayn - Let Me.mp3', NULL, 7),
(67, 'Pillow Talk', './Assets/webPlayerAssets/songs/Zayn - PillowTalk.mp3', './Assets/webPlayerAssets/songs/images/pillowTalk.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Bhavesh', 'bhaveshsingh022000@hotmail.com', 'Bhavesh@2017', 9425519826),
(3, 'demo', 'demo@gmail.com', 'demo123', 32626797),
(3, 'Tikesh', 'tikesh22@yahoo.com', 'Tikesh@123', 7803083084);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_playlist`
--

CREATE TABLE `user_playlist` (
  `id` int NOT NULL,
  `song_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_playlist`
--

INSERT INTO `user_playlist` (`id`, `song_id`, `user_id`) VALUES
(1, 66, 3),
(2, 30, 3),
(4, 46, 3),
(5, 18, 3),
(6, 25, 1),
(7, 42, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Artist_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`),
  ADD KEY `playlist_id` (`playlist_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `collection_title_id` (`collection_title_id`),
  ADD KEY `fk_song_id` (`song_id`);

--
-- Indexes for table `collection_title`
--
ALTER TABLE `collection_title`
  ADD PRIMARY KEY (`collection_title_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_grid`
--
ALTER TABLE `landing_grid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Indexes for table `playlist_songs`
--
ALTER TABLE `playlist_songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlist_id` (`playlist_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`,`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_playlist`
--
ALTER TABLE `user_playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `song_id` (`song_id`),
  ADD KEY `FK_userID` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `album_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `Artist_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `collection_title`
--
ALTER TABLE `collection_title`
  MODIFY `collection_title_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing`
--
ALTER TABLE `landing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `landing_grid`
--
ALTER TABLE `landing_grid`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlist_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `playlist_songs`
--
ALTER TABLE `playlist_songs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_playlist`
--
ALTER TABLE `user_playlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`Artist_id`);

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`playlist_id`),
  ADD CONSTRAINT `collection_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`Artist_id`),
  ADD CONSTRAINT `collection_ibfk_3` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`),
  ADD CONSTRAINT `collection_ibfk_4` FOREIGN KEY (`collection_title_id`) REFERENCES `collection_title` (`collection_title_id`),
  ADD CONSTRAINT `fk_song_id` FOREIGN KEY (`song_id`) REFERENCES `songs` (`song_id`);

--
-- Constraints for table `playlist_songs`
--
ALTER TABLE `playlist_songs`
  ADD CONSTRAINT `playlist_songs_ibfk_1` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`playlist_id`),
  ADD CONSTRAINT `playlist_songs_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `songs` (`song_id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`Artist_id`);

--
-- Constraints for table `user_playlist`
--
ALTER TABLE `user_playlist`
  ADD CONSTRAINT `FK_userID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_playlist_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`song_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
