-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2012 at 09:40 PM
-- Server version: 5.1.62
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpg2011`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `tile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_message` text NOT NULL,
  `activity_js` text NOT NULL,
  `activity_dt` decimal(15,2) NOT NULL,
  PRIMARY KEY (`activity_id`),
  KEY `tile_id` (`tile_id`,`user_id`,`activity_dt`),
  KEY `activity_dt` (`activity_dt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2028 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `tile_id`, `user_id`, `activity_message`, `activity_js`, `activity_dt`) VALUES
(1987, 4, 0, '', 'removeMob(4);', 1349062839.82),
(1988, 3, 0, '', 'showMob(4,''Aubree Mae'',''mobavatar-02875bc0725f87fa1b67fce1c779e62a.jpg'');', 1349062839.86),
(1989, 3, 0, '', 'removeMob(4);', 1349062860.32),
(1990, 2, 0, '', 'showMob(4,''Aubree Mae'',''mobavatar-02875bc0725f87fa1b67fce1c779e62a.jpg'');', 1349062860.41),
(1991, 13, 0, '', 'removeMob(3);', 1349062870.64),
(1992, 26, 0, '', 'showMob(3,''Josie Belle'',''mobavatar-c4363f0efea7863efca1efd32b08c8e2.jpg'');', 1349062870.66),
(1993, 17, 11, '', 'showUser(11,''BrandonReese'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349062860.25),
(1994, 20, 11, '', 'removeUser(11);', 1349062860.28),
(1995, 16, 11, '', 'showUser(11,''BrandonReese'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349062861.38),
(1996, 17, 11, '', 'removeUser(11);', 1349062861.41),
(1997, 15, 11, '', 'showUser(11,''BrandonReese'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349062862.28),
(1998, 16, 11, '', 'removeUser(11);', 1349062862.31),
(1999, 14, 11, '', 'showUser(11,''BrandonReese'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349062863.22),
(2000, 15, 11, '', 'removeUser(11);', 1349062863.24),
(2001, 1, 11, '', 'showUser(11,''BrandonReese'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349062863.91),
(2002, 14, 11, '', 'removeUser(11);', 1349062863.93),
(2003, 1, 11, 'Admin appears from within the void!', 'showUser(''11'');', 1349150069.40),
(2004, 2, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150080.41),
(2005, 1, 11, '', 'removeUser(11);', 1349150080.45),
(2006, 3, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150083.88),
(2007, 2, 11, '', 'removeUser(11);', 1349150083.91),
(2008, 4, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150085.02),
(2009, 3, 11, '', 'removeUser(11);', 1349150085.04),
(2010, 11, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150086.08),
(2011, 4, 11, '', 'removeUser(11);', 1349150086.11),
(2012, 4, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150087.48),
(2013, 11, 11, '', 'removeUser(11);', 1349150087.51),
(2014, 3, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150088.28),
(2015, 4, 11, '', 'removeUser(11);', 1349150088.33),
(2016, 2, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150089.03),
(2017, 3, 11, '', 'removeUser(11);', 1349150089.07),
(2018, 1, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150089.75),
(2019, 2, 11, '', 'removeUser(11);', 1349150089.77),
(2020, 5, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150090.75),
(2021, 1, 11, '', 'removeUser(11);', 1349150090.78),
(2022, 6, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150091.64),
(2023, 5, 11, '', 'removeUser(11);', 1349150091.66),
(2024, 24, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150092.84),
(2025, 6, 11, '', 'removeUser(11);', 1349150092.90),
(2026, 6, 11, '', 'showUser(11,''Admin'',''user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg'');', 1349150094.75),
(2027, 24, 11, '', 'removeUser(11);', 1349150094.83);

-- --------------------------------------------------------

--
-- Table structure for table `mobs`
--

CREATE TABLE IF NOT EXISTS `mobs` (
  `mob_id` int(11) NOT NULL AUTO_INCREMENT,
  `mob_name` text NOT NULL,
  `tile_id` int(11) NOT NULL,
  `mob_stationary` int(11) NOT NULL DEFAULT '0',
  `mob_avatar` varchar(96) NOT NULL,
  PRIMARY KEY (`mob_id`),
  KEY `mob_stationary` (`mob_stationary`),
  KEY `tile_id` (`tile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mobs`
--

INSERT INTO `mobs` (`mob_id`, `mob_name`, `tile_id`, `mob_stationary`, `mob_avatar`) VALUES
(1, 'An Angy Old Man', 21, 0, 'mobavatar-db9b393c89d928d78195103b4e7767b5.jpg'),
(2, 'A Happy Old Man', 11, 0, 'mobavatar-d7f8f8c1e69625b4d9cd47c4345e7e57.jpg'),
(3, 'Josie Belle', 26, 0, 'mobavatar-c4363f0efea7863efca1efd32b08c8e2.jpg'),
(4, 'Aubree Mae', 2, 0, 'mobavatar-02875bc0725f87fa1b67fce1c779e62a.jpg'),
(5, 'Madi Jean', 19, 0, 'mobavatar-0292865e4407c0400b811721fc835ff5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `last_url` varchar(64) NOT NULL,
  `tile_id` int(11) NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `user_id` (`user_id`),
  KEY `tile_id` (`tile_id`),
  KEY `session_expire` (`session_expire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `user_id`, `session_expire`, `last_url`, `tile_id`) VALUES
('57bfe97d1b1fef63ff60eba68936a123', 11, 1349154546, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `setting` varchar(24) NOT NULL,
  `setting_value` text NOT NULL,
  PRIMARY KEY (`setting`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting`, `setting_value`) VALUES
('template_dir', '../templates'),
('site_url', 'http://rpg.bremaweb.com'),
('debug', '1'),
('self_consign_percent', '.65'),
('drop_consign_percent', '.5'),
('tax_rate', '.07725'),
('active_sale', '2'),
('image_url', 'http://rpg.bremaweb.com/images'),
('site_name', 'RPG 2011'),
('avatar_url', 'http://rpg.bremaweb.com/avatars/'),
('avatar_dir', '/web/avatars');

-- --------------------------------------------------------

--
-- Table structure for table `tiles`
--

CREATE TABLE IF NOT EXISTS `tiles` (
  `tile_id` int(11) NOT NULL AUTO_INCREMENT,
  `tile_x` int(11) NOT NULL,
  `tile_y` int(11) NOT NULL,
  `tile_z` int(11) NOT NULL,
  `tile_title` varchar(64) NOT NULL,
  `tile_desc` varchar(512) NOT NULL,
  `tile_exits` text NOT NULL,
  `tile_resistance` float NOT NULL DEFAULT '0.05',
  PRIMARY KEY (`tile_id`),
  KEY `coordinates` (`tile_x`,`tile_y`,`tile_z`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tiles`
--

INSERT INTO `tiles` (`tile_id`, `tile_x`, `tile_y`, `tile_z`, `tile_title`, `tile_desc`, `tile_exits`, `tile_resistance`) VALUES
(1, 0, 0, 0, 'City Center', 'You are standing at the center of a small city. Family owned shops surround you on all sides. To the South you see a building that is the city hall.', 'a:4:{s:5:"north";a:1:{s:7:"tile_id";s:2:"14";}s:5:"south";a:1:{s:7:"tile_id";s:1:"2";}s:4:"east";a:1:{s:7:"tile_id";s:1:"8";}s:4:"west";a:1:{s:7:"tile_id";s:1:"5";}}', 0.05),
(2, 0, -1, 0, 'Council Street', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:1:"1";}s:5:"south";a:1:{s:7:"tile_id";s:1:"3";}}', 0.05),
(3, 0, -2, 0, 'Council Street', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:1:"2";}s:5:"south";a:1:{s:7:"tile_id";s:1:"4";}}', 0.05),
(4, 0, -3, 0, 'Council Street', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:1:"3";}s:5:"south";a:1:{s:7:"tile_id";s:2:"11";}}', 0.05),
(5, -1, 0, 0, 'West Commercial', 'undefined', 'a:2:{s:4:"east";a:1:{s:7:"tile_id";s:1:"1";}s:4:"west";a:1:{s:7:"tile_id";s:1:"6";}}', 0.05),
(6, -2, 0, 0, 'West Commercial', 'undefined', 'a:2:{s:4:"east";a:1:{s:7:"tile_id";s:1:"5";}s:4:"west";a:1:{s:7:"tile_id";s:1:"7";}}', 0.05),
(7, -3, 0, 0, 'West Commercial', 'undefined', 'a:2:{s:4:"east";a:1:{s:7:"tile_id";s:1:"6";}s:4:"west";a:1:{s:7:"tile_id";s:2:"13";}}', 0.05),
(8, 1, 0, 0, 'East Commercial', 'undefined', 'a:2:{s:4:"east";a:1:{s:7:"tile_id";s:1:"9";}s:4:"west";a:1:{s:7:"tile_id";s:1:"1";}}', 0.05),
(9, 2, 0, 0, 'East Commercial', 'undefined', 'a:2:{s:4:"east";a:1:{s:7:"tile_id";s:2:"10";}s:4:"west";a:1:{s:7:"tile_id";s:1:"8";}}', 0.05),
(10, 3, 0, 0, 'East Commercial', 'undefined', 'a:2:{s:4:"east";a:1:{s:7:"tile_id";s:2:"12";}s:4:"west";a:1:{s:7:"tile_id";s:1:"9";}}', 0.05),
(11, 0, -4, 0, 'Council Street', 'undefined', 'a:1:{s:5:"north";a:1:{s:7:"tile_id";s:1:"4";}}', 0.05),
(12, 4, 0, 0, 'East Commercial', 'undefined', 'a:1:{s:4:"west";a:1:{s:7:"tile_id";s:2:"10";}}', 0.05),
(13, -4, 0, 0, 'West Commercial', 'undefined', 'a:1:{s:4:"east";a:1:{s:7:"tile_id";s:1:"7";}}', 0.05),
(14, 0, 1, 0, 'Council Street', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:2:"15";}s:5:"south";a:1:{s:7:"tile_id";s:1:"1";}}', 0.05),
(15, 0, 2, 0, 'Council Street', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:2:"16";}s:5:"south";a:1:{s:7:"tile_id";s:2:"14";}}', 0.05),
(16, 0, 3, 0, 'Council Street', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:2:"17";}s:5:"south";a:1:{s:7:"tile_id";s:2:"15";}}', 0.05),
(17, 0, 4, 0, 'The Court Yard', 'undefined', 'a:4:{s:5:"north";a:1:{s:7:"tile_id";s:2:"20";}s:5:"south";a:1:{s:7:"tile_id";s:2:"16";}s:4:"east";a:1:{s:7:"tile_id";s:2:"22";}s:4:"west";a:1:{s:7:"tile_id";s:2:"18";}}', 0.05),
(18, -1, 4, 0, 'Court Yard SW', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:2:"19";}s:4:"east";a:1:{s:7:"tile_id";s:2:"17";}}', 0.05),
(19, -1, 5, 0, 'Court Yard NW', 'undefined', 'a:2:{s:5:"south";a:1:{s:7:"tile_id";s:2:"18";}s:4:"east";a:1:{s:7:"tile_id";s:2:"20";}}', 0.05),
(20, 0, 5, 0, 'Court Yard', 'undefined', 'a:4:{s:5:"north";a:1:{s:7:"tile_id";s:2:"23";}s:5:"south";a:1:{s:7:"tile_id";s:2:"17";}s:4:"east";a:1:{s:7:"tile_id";s:2:"21";}s:4:"west";a:1:{s:7:"tile_id";s:2:"19";}}', 0.05),
(21, 1, 5, 0, 'Court Yard NE', 'undefined', 'a:2:{s:5:"south";a:1:{s:7:"tile_id";s:2:"22";}s:4:"west";a:1:{s:7:"tile_id";s:2:"20";}}', 0.05),
(22, 1, 4, 0, 'Court Yard SE', 'undefined', 'a:2:{s:5:"north";a:1:{s:7:"tile_id";s:2:"21";}s:4:"west";a:1:{s:7:"tile_id";s:2:"17";}}', 0.05),
(23, 0, 6, 0, 'Inner Court', 'undefined', 'a:1:{s:5:"south";a:1:{s:7:"tile_id";s:2:"20";}}', 0.05),
(24, -2, 1, 0, 'Meat Shop', 'undefined', 'a:1:{s:5:"south";a:1:{s:7:"tile_id";s:1:"6";}}', 0.05),
(25, -3, -1, 0, 'Fruit Shop', 'undefined', 'a:1:{s:5:"north";a:1:{s:7:"tile_id";s:1:"7";}}', 0.05),
(26, -4, 1, 0, 'Vegetable Shop', 'undefined', 'a:1:{s:5:"south";a:1:{s:7:"tile_id";s:2:"13";}}', 0.05),
(27, 2, -1, 0, 'Weapon Shop', 'undefined', 'a:1:{s:5:"north";a:1:{s:7:"tile_id";s:1:"9";}}', 0.05),
(28, 3, 1, 0, 'Armor Shop', 'undefined', 'a:1:{s:5:"south";a:1:{s:7:"tile_id";s:2:"10";}}', 0.05),
(29, 4, -1, 0, 'Accessories Shop', 'undefined', 'a:1:{s:5:"north";a:1:{s:7:"tile_id";s:2:"12";}}', 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(60) NOT NULL,
  `user_verified` varchar(1) NOT NULL DEFAULT '0',
  `user_verify_code` text NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_admin` int(11) NOT NULL,
  `user_email_freq` int(11) NOT NULL DEFAULT '0',
  `user_expires` int(11) NOT NULL,
  `user_cname` varchar(32) NOT NULL,
  `tile_id` int(11) NOT NULL,
  `user_x` int(11) NOT NULL,
  `user_y` int(11) NOT NULL,
  `user_z` int(11) NOT NULL,
  `user_ingame` varchar(1) NOT NULL,
  `user_avatar` varchar(96) NOT NULL,
  `user_health` float NOT NULL DEFAULT '1',
  `user_mana` float NOT NULL DEFAULT '1',
  `user_energy` float NOT NULL DEFAULT '1',
  `user_stamina` float NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `tile_id` (`tile_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_verified`, `user_verify_code`, `user_password`, `user_admin`, `user_email_freq`, `user_expires`, `user_cname`, `tile_id`, `user_x`, `user_y`, `user_z`, `user_ingame`, `user_avatar`, `user_health`, `user_mana`, `user_energy`, `user_stamina`) VALUES
(11, 'admin', '0', '9af88566ef9eb1478da4d4ddc92067a9', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 1307852495, 'Admin', 6, 0, 0, 0, '', 'user11avatar-8123f5c8bd1a2ca5955f4520e65908b5.jpg', 1, 1, 0.033306, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_ingame`
--

CREATE TABLE IF NOT EXISTS `users_ingame` (
  `ingame_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`ingame_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
