-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 06:09 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamedetails`
--

CREATE TABLE `gamedetails` (
  `Game_ID` int(11) NOT NULL,
  `Game_Name` varchar(255) NOT NULL,
  `Game_Description` mediumtext NOT NULL,
  `OS` varchar(70) DEFAULT NULL,
  `Processor` varchar(70) DEFAULT NULL,
  `Memory` varchar(70) DEFAULT NULL,
  `Graphics` varchar(70) DEFAULT NULL,
  `DrectX` varchar(70) DEFAULT NULL,
  `Network` varchar(70) DEFAULT NULL,
  `HardDrive` varchar(70) DEFAULT NULL,
  `SoundCard` varchar(70) DEFAULT NULL,
  `YouTube_Link` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image_link` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `List_Img` varchar(50) NOT NULL,
  `Cover_Game_Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamedetails`
--

INSERT INTO `gamedetails` (`Game_ID`, `Game_Name`, `Game_Description`, `OS`, `Processor`, `Memory`, `Graphics`, `DrectX`, `Network`, `HardDrive`, `SoundCard`, `YouTube_Link`, `Price`, `Image_link`, `Quantity`, `List_Img`, `Cover_Game_Link`) VALUES
(1, 'Dark Souls III', 'Dark Souls continues to push the boundaries with the latest, ambitious chapter in the critically-acclaimed and genre-defining series. Prepare yourself and Embrace The Darkness!', 'Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit', 'Intel Core i3-530 @ 2.93 GHz / AMD Phenom II X4 810 @ 2.60 GHz', '6 GB RAM', 'NVIDIA GeForce GTX 470 @ 1 GB / ATI Radeon HD 6970 @ 1 GB', 'Version 11', 'Broadband Internet connection', '60 GB available space', 'DirectX-compatible', 'src="http://www.youtube.com/embed/_zDZYrIUgKE"', 3500, 'src="Image/darksoles3.jpg"', 10, 'src="Image/CaptureA.PNG"', 'src="images/Dark-Souls-III.jpg"'),
(2, 'Counter strike & global offensive', 'Counter-Strike: Global Offensive (CS: GO) will expand upon the team-based action gameplay that it pioneered when it was launched 14 years ago. CS: GO features new maps, characters, and weapons and delivers updated versions of the classic CS content (de_dust, etc.).', 'Windows® 7/Vista/XP.', 'Intel® Core™ 2 Duo E6600 or AMD Phenom™ X3 8750 processor or better.', '2 GB RAM.', 'Video card 256 MB DirectX 9-compatible support Pixel Shader 3.0.', 'Version 9.0c.', NULL, '8 GB available space.', NULL, 'src="http://www.youtube.com/embed/edYCtaNueQY"', 3000, 'src = "Image/counter strike global offensive.jpg"', 5, 'src="Image/CaptureC.PNG"', 'src="images/Counter_Strike_Global_Offensive.jpg"'),
(3, 'call of duty black ops 3', 'Welcome to Call of Duty: Black Ops III, a dark future where a new breed of Black Ops soldier emerges and the lines are blurred between humanity and the technology we created to stay ahead.', 'Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit', 'Intel® Core™ i3-530 @ 2.93 GHz / AMD Phenom™ II X4 810 @ 2.60 GHz', '6 GB RAM', 'NVIDIA® GeForce® GTX 470 @ 1 GB / ATI® Radeon™ HD 6970 @ 1 GB', 'Version 11', 'Broadband Internet connection', '60 GB available space', 'DirectX-compatible', 'src="http://www.youtube.com/embed/58Pspqx0XGs"', 2500, 'src= "Image/blackops3.jpg"', 7, 'src="Image/CaptureB.PNG"', 'src="images/cod 3.jpg"'),
(4, 'Tom clancy''s The Division ', 'Black Friday – a devastating pandemic sweeps through New York City, and one by one, basic services fail. In only days, without food or water, society collapses into chaos. The Division, an autonomous unit of tactical agents, is activated.', 'Windows 7, Windows 8.1, Windows 10 (64-bit versions only)', 'Intel Core i5-2400, AMD FX-6100 or better', '6GB', 'NVIDIA GeForce GTX 560 2 GB VRAM AMD Radeon HD 7770 with 2 GB VRAM', 'Version 11', NULL, '40 GB of space available', NULL, 'src="http://www.youtube.com/embed/8Bc2fv0jcgg"', 4000, 'src="Image/tom clancys the division.jpg"', 2, 'src="Image/CaptureE.PNG"', 'src="images/tom division.jpg"'),
(5, 'Grand Theft Auto 5', 'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.\r\n\r\nGrand Theft Auto V for PC features a range of major visual and technical upgrades to make Los Santos and Blaine County more immersive than ever. In addition to vastly increased draw distances, Grand Theft Auto V for PC runs at 60FPS in 1080p, with the ability to display visuals in 4K resolution. Players will experience a range of additions and improvements including:\r\n\r\nNew weapons, vehicles and activities\r\nAdditional wildlife\r\nDenser traffic\r\nNew foliage system\r\nEnhanced damage and weather effects, and much more\r\n\r\nAll these features are enhanced by stunning resolution, dramatic improvements to lighting, shadows, and textures, and a smooth frame-rate.\r\n\r\nThe PC versions of Grand Theft Auto V and Grand Theft Auto Online will also feature First Person Mode, giving players the chance to explore the incredibly detailed world of Los Santos and Blaine County in an entirely new way.\r\n\r\nGrand Theft Auto V for PC also includes the new Rockstar Editor, which gives players a full suite of editing tools to create and publish gameplay clips direct to both Social Club and YouTube.\r\n\r\nGrand Theft Auto V also comes with Grand Theft Auto Online, the dynamic and ever-evolving Grand Theft Auto universe. Enhancements to Grand Theft Auto Online for PC will include an increased player count, with online play for up to 30 players. All existing gameplay upgrades and Rockstar-developed content created since the original release of Grand Theft Auto Online will also be available for PC, with much more to come.', 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1', 'Intel Core 2 Quad CPU Q6600 AMD Phenom 9850 Quad-Core Processor', ' 4 GB RAM ', 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)', NULL, NULL, '65 GB available space', '100% DirectX 10 compatible', 'src="http://www.youtube.com/embed/N-xHcvug3WI"', 4000, 'src ="Image/gta5.jpg"', 6, 'src="Image/CaptureD.PNG"', 'src="images/grand theft 5.jpg"'),
(6, 'Call of Duty: World at War', 'Call of Duty is back, redefining war like you''ve never experienced before. Building on the Call of Duty 4®: Modern Warfare engine, Call of Duty: World at War immerses players into the most gritty and chaotic WWII combat ever experienced.', 'Windows XP/Vista/7', 'Pentium 4 @ 3 GHz/AMD 64 3200+', '512 MB (1 GB for Vista)', '256 MB (nVidia GeForce 6600/ATI Radeon X1600)', 'DirectX 9.0c', NULL, '8 GB Free', 'on-board or better', 'src="http://www.youtube.com/embed/Y_Ip_SaJqpg"', 3500, 'src = "Image/Call of Duty World at War.jpg"', 8, 'src="Image/CaptureF.PNG"', 'src="images/cod woarld at war.jpg"'),
(7, 'Dead pool', 'There are a few important things I need to say before you crack into my insanely sweet game. (Oof. Here we go again.) I''m a mercenary with an accelerated healing factor. I''ve been described as unstable, which is just plain coo-coo. (Wait, do sane people say coo-coo?) I''m gonna battle for the safety of ', 'Windows 8, Windows 7, Windows Vista, Windows XP', 'Intel Core 2 Duo E8200 @ 2.66 GHz or AMD Phenom X3 8750', '2 GB RAM', 'GeForce 8800 GT series 512MB RAM or ATI Radeon HD4850 512MBRAM', '9.0c', 'Broadband Internet connection', '7 GB HD space', 'DirectX® 9.0c or later', 'src="http://www.youtube.com/embed/rJ0CtZZhkxM"', 3500, 'src = "Image/deadpool1.jpg"', 7, 'src="Image/CaptureG.PNG"', 'src="images/dead pool.jpg"'),
(8, 'Survival Evolved', 'As a man or woman stranded naked, freezing & starving on a mysterious island, you must hunt, harvest, craft items, grow crops, & build shelters to survive. Use skill & cunning to kill, tame, breed, & ride Dinosaurs & primeval creatures living on ARK, and team up with hundreds of players or play locally!', '64-Bit Windows 7 Service Pack 1, or Windows 8', '2 GHz Dual-Core 64-bit CPU', '4000 MB RAM', 'DirectX10 Compatible GPU with 1 GB Video RAM', 'Version 10', NULL, '40000 MB available space', NULL, 'src="http://www.youtube.com/embed/aQM8yWoiy5s"', 3500, 'src = "Image/Survival Evolved.jpg"', 6, 'src="Image/CaptureI.PNG"', 'src="images/survival-evolved.jpg"'),
(9, 'Final Fantasy', 'Selling over five million copies since its release in 2000, FINAL FANTASY IX proudly returns on Steam! Now you can relive the adventures of Zidane and his crew on PC !', 'Vista /7/8/8.1/10', 'Intel Core 2 Duo 2GHz or higher', '2 GB RAM', 'NVIDIA GeForce 8600GTS or ATI Radeon HD4650 or higher', 'Version 9.0c', NULL, '7 GB available space', 'DirectSound® compatible sound card?DirectX®9.0c or later', 'src="http://www.youtube.com/embed/OWbzaPqdR_U"', 3500, 'src = "Image/Final Fantasy IX.png"', 10, 'src="Image/CaptureH.PNG"', 'src="images/final fantasy.jpg"'),
(10, 'Portal Knights', 'Join the ranks of the Spiral Knights. Stranded on an alien world, you must explore the ever-changing Clockworks beneath its surface.', 'Windows XP, Vista or 7', '1.3ghz processor', '512MB for Windows XP or 1GB for Windows Vista/7', '64MB Video Memory GeForce 5 series, ATI Radeon 8500.', NULL, NULL, '700MB', NULL, 'src="http://www.youtube.com/embed/P7OQRA2kDyE"', 3500, 'src = "Image/Portal Knights.png"', 8, 'src="Image/Capture9.PNG"', 'src="images/portal knights.jpg"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamedetails`
--
ALTER TABLE `gamedetails`
  ADD PRIMARY KEY (`Game_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamedetails`
--
ALTER TABLE `gamedetails`
  MODIFY `Game_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
