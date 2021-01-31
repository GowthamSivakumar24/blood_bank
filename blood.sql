-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2020 at 07:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_admin`
--

CREATE TABLE IF NOT EXISTS `web_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_admin`
--

INSERT INTO `web_admin` (`id`, `username`, `password`, `admin_email`) VALUES
(1, 'admin', 'admin123', 'info@kuruthi.com');

-- --------------------------------------------------------

--
-- Table structure for table `web_blood`
--

CREATE TABLE IF NOT EXISTS `web_blood` (
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `blood_group` varchar(155) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `web_blood`
--

INSERT INTO `web_blood` (`name`, `email`, `blood_group`, `status`, `phone`, `address`, `id`, `user_id`) VALUES
('Final', 'final@gmail.com', 'AB-', 0, '1234567890', 'jbc', 16, 11),
('tessttt', 'jhvjhv@gmail.com', 'O+', 0, '123456789`', 'dwe', 15, 9),
('hai', 'hai@gmail.com', 'AB+', 0, '2345678', 'fdx', 14, 10),
('Gokul', 'gokul@gmail.com', 'B+', 0, '1234', 'kmch, coimbatore', 13, 9),
('Goku', 'go@fka.com', 'B+', 0, '234567890', 'jgtcj', 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `web_catalog`
--

CREATE TABLE IF NOT EXISTS `web_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `short_content` longtext NOT NULL,
  `long_content` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `web_catalog`
--

INSERT INTO `web_catalog` (`id`, `position`, `name`, `seo_title`, `short_content`, `long_content`, `status`, `order`, `image`) VALUES
(3, '', 'test', 'test', '', '', 1, 1, '5e187a174867acibe catalogue -  India.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `web_category`
--

CREATE TABLE IF NOT EXISTS `web_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `title_arabic` varchar(150) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `web_category`
--

INSERT INTO `web_category` (`id`, `title`, `title_arabic`, `order`, `status`) VALUES
(1, 'Lab Equipment', '', 0, 1),
(14, 'Electrostatic Gun', '', 1, 1),
(15, 'Electrostatic Gun - Spare Parts', '', 2, 1),
(16, 'Booth Filter', '', 3, 1),
(17, 'Film Roll', '', 4, 1),
(18, 'Silicon Membrane', '', 5, 1),
(19, 'Powder Paint Line', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_cms`
--

CREATE TABLE IF NOT EXISTS `web_cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) NOT NULL,
  `menu_arabic` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_arabic` varchar(150) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `content_arabic` longtext NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_desc` varchar(255) NOT NULL,
  `page_keyword` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `web_cms`
--

INSERT INTO `web_cms` (`id`, `menu`, `menu_arabic`, `title`, `title_arabic`, `seo_title`, `content`, `content_arabic`, `page_title`, `page_desc`, `page_keyword`, `image`, `order`, `status`) VALUES
(1, 'Home', 'Ø§Ù„ØµÙØ­Ø© Ø§Ù„Ø±Ø¦ÙŠØ³ÙŠØ©', 'About the factory', 'Ø§Ù„ØµÙØ­Ø© Ø§Ù„Ø±Ø¦ÙŠØ³ÙŠØ©', 'home', '<p style="text-align:justify"><span style="color:rgb(178, 34, 34)"><span style="font-size:16px"><strong><span style="font-family:tahoma,geneva,sans-serif">About Us</span></strong></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">CiBE is an integrated enterprise, which focuses on brand, R&amp;D, Sales, Production and supply chain. We specialize in producing Powder Coating Related Item like Lab Equipment, Electrostatic Gun, Powder Coating booth, Oven, Pre-treatment Spray Booth, Conveyor.. All Product are of unique design, high tech and excellent quality. Several product performance indexes are in the lead position worldwide within same industry..</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We have experience at working with OEM products, have our own professional quality assurance team for vendor and product audits, have a logistics department and understand customs requirements that best meet your needs.</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We have a professional IT development team, who apply the latest software to proceeding an independent research and development on our Own ERP.</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:rgb(178, 34, 34)"><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Brief Overview of benefits for our service:</strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We work to provide a seamless service while mitigating the risk of Asian purchasing channels.</span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We increase the level of communication, breaking down the language and cultural barriers that often result in miscommunication and problems when buying directly</span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We leverage off our vendor base and long term relationships that we have already developed to provide competitive pricing that a stand-along buyer may not necessarily be able to achieve</span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'Home', 'Home', 'Home', '', 1, 1),
(2, 'About Us', '', ' About Us', '', 'about-us', '<p><span style="font-family:tahoma,geneva,sans-serif"><span style="font-size:14px"><span style="color:rgb(0, 0, 0)">Have you ever though of donating blood? In every 2 seconds someone in India requires blood to save his or her life. But some times even the willing blood donors do not have information about where to go in order to donate blood. Make a difference to your life by saving someone else&#39;s life by donating blood. You donated blood will save another life which may not exist without your contribution. If lack of blood causes any death, then it it is the shame of the humanity. Kuruthi Blood Bank is committed to provide a platform to both blood donors and recipients, so that it can aid to those who need blood for emergency.&nbsp;</span></span></span></p>\r\n', '', ' About Us', ' About Us', ' About Us', '', 2, 1),
(3, 'Request Blood', '', 'Request Blood', '', 'Request Blood', '<p>Request Blood</p>\r\n', '', 'Request Blood', 'Request Blood', 'Request Blood', '', 3, 1),
(5, 'Contact Us', 'Ø§ØªØµÙ„ Ø¨Ù†Ø§', 'Contact Us', 'Ø§ØªØµÙ„ Ø¨Ù†Ø§', 'contact-us', '<p>Contact Us</p>\r\n', '', 'Contact Us', 'Contact Us', 'Contact Us', '', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_group`
--

CREATE TABLE IF NOT EXISTS `web_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `title_arabic` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `content_arabic` longtext NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `web_group`
--

INSERT INTO `web_group` (`id`, `title`, `title_arabic`, `content`, `content_arabic`, `order`, `status`) VALUES
(1, 'Sri Mahalakshmi Tool', '', '<p><strong><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Activities</span></span></strong></p>\r\n\r\n<ol style="margin-left:40px">\r\n	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">PDC &amp; Gravity Dies</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Tool Designing</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">All Type of moulding Dies</span></span></li>\r\n</ol>\r\n', '', 1, 1),
(3, 'CiBE Tours & Travels', '', '<p>All Type Of Vehicle for tourisit Available</p>\r\n', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_latest`
--

CREATE TABLE IF NOT EXISTS `web_latest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `title_arabic` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `content_arabic` longtext NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `web_latest`
--

INSERT INTO `web_latest` (`id`, `title`, `title_arabic`, `content`, `content_arabic`, `order`, `status`) VALUES
(1, 'Thomas Watson Jr,', 'ØªØ§ÙŠÙ„ÙˆØ±', '<p style="text-align:center"><span style="color:#800080"><strong><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Good Design</span></span></strong></span></p>\r\n\r\n<p style="text-align:center"><span style="color:#800080"><strong><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Is&nbsp;</span></span></strong></span></p>\r\n\r\n<p style="text-align:center"><span style="color:#800080"><strong><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Good Business</span></span></strong></span></p>\r\n', '', 1, 1),
(4, 'Larry Page', 'Ø¹Ù„Ø§Ù…Ø©', '<p style="text-align: center;"><strong><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="color:#800080">&quot;Always Deliver More then Expected&quot;</span></span></span></strong></p>\r\n', '<p>ØªØµÙ…ÙŠÙ… Ø§Ù„ØªÙØ§Ø¹Ù„ Ø¨ÙŠÙ† Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø¥Ù„Ù‰ Ø£Ø¯Ù†Ù‰ Ø´Ù†Ù‚Ø§ Ø§Ù„ÙØ§ÙƒÙ‡Ø© bootstrapping Ø¨Ø¯Ø¡ Ø§Ù„ØªØ´ØºÙŠÙ„ Ø¥Ø·Ù„Ø§Ù‚ ØªØ¬Ø±Ø¨Ø© Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø§Ù„Ø·Ø±Ù Ø¹Ø±Ø¶ Ø§Ù„Ù†Ø·Ø§Ù‚ Ø§Ù„ØªØ±Ø¯Ø¯ÙŠ bandwidth ØªØµÙ…ÙŠÙ… Ø§Ù„ÙˆÙŠØ¨. Ø¨Ø¯Ø¡ Ø§Ù„ØªØ´ØºÙŠÙ„ ØªØ¬Ø±Ø¨Ø© Ø¨Ø¯Ø¡ Ø§Ù„ØªØ´ØºÙŠÙ„ Ø¹Ø±Ø¶ Ø§Ù„Ù†Ø·Ø§Ù‚ Ø§Ù„ØªØ±Ø¯Ø¯ÙŠ bandwidth ØªØµÙ…ÙŠÙ… Ø§Ù„ÙˆÙŠØ¨.</p>\r\n', 2, 1),
(5, 'Milton Berle', 'Ø¬Ø°Ø±', '<p style="text-align: center;"><strong><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="color:rgb(128, 0, 128)">&quot;If Opporunity Does&#39;t Knock, Build a Door&quot;</span></span></span></strong></p>\r\n', '<p>ØªØµÙ…ÙŠÙ… Ø§Ù„ØªÙØ§Ø¹Ù„ Ø¨ÙŠÙ† Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø¥Ù„Ù‰ Ø£Ø¯Ù†Ù‰ Ø´Ù†Ù‚Ø§ Ø§Ù„ÙØ§ÙƒÙ‡Ø© bootstrapping Ø¨Ø¯Ø¡ Ø§Ù„ØªØ´ØºÙŠÙ„ Ø¥Ø·Ù„Ø§Ù‚ ØªØ¬Ø±Ø¨Ø© Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø§Ù„Ø·Ø±Ù Ø¹Ø±Ø¶ Ø§Ù„Ù†Ø·Ø§Ù‚ Ø§Ù„ØªØ±Ø¯Ø¯ÙŠ bandwidth ØªØµÙ…ÙŠÙ… Ø§Ù„ÙˆÙŠØ¨. Ø¨Ø¯Ø¡ Ø§Ù„ØªØ´ØºÙŠÙ„ ØªØ¬Ø±Ø¨Ø© Ø¨Ø¯Ø¡ Ø§Ù„ØªØ´ØºÙŠÙ„ Ø¹Ø±Ø¶ Ø§Ù„Ù†Ø·Ø§Ù‚ Ø§Ù„ØªØ±Ø¯Ø¯ÙŠ bandwidth ØªØµÙ…ÙŠÙ… Ø§Ù„ÙˆÙŠØ¨.</p>\r\n', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_location`
--

CREATE TABLE IF NOT EXISTS `web_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `location` varchar(150) NOT NULL,
  `contact_name` varchar(150) NOT NULL,
  `contact_number` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `web_location`
--

INSERT INTO `web_location` (`id`, `country`, `location`, `contact_name`, `contact_number`, `email`, `order`, `status`) VALUES
(1, '1', 'Coimbatore', 'Mr.Arun', '9578702020', 'info@cibegroup.com', 1, 1),
(2, '2', 'Riyadh', 'Mr.Ayyuf', '+966-583333921', 'ayyuf@saace.co', 2, 1),
(3, '3', 'On Process', 'Mr.Habeeb', '+971-509331375', 'uaesales@cibegroup.com', 3, 1),
(5, '1', 'Hosur', 'Mr.Surendran', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE IF NOT EXISTS `web_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) NOT NULL,
  `site_title_arabic` varchar(150) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `address` longtext NOT NULL,
  `address_arabic` longtext NOT NULL,
  `fb` varchar(150) NOT NULL,
  `tw` varchar(150) NOT NULL,
  `yt` varchar(150) NOT NULL,
  `gp` varchar(150) NOT NULL,
  `tab1` varchar(150) NOT NULL,
  `tab2` varchar(150) NOT NULL,
  `tab3` varchar(150) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cont_text` longtext NOT NULL,
  `latest_news` longtext NOT NULL,
  `home_title1` varchar(150) NOT NULL,
  `home_title1_arabic` varchar(150) NOT NULL,
  `home_content1` longtext NOT NULL,
  `home_content1_arabic` longtext NOT NULL,
  `home_title2` varchar(150) NOT NULL,
  `home_title2_arabic` varchar(150) NOT NULL,
  `home_content2` longtext NOT NULL,
  `home_content2_arabic` longtext NOT NULL,
  `home_title3` varchar(150) NOT NULL,
  `home_title3_arabic` varchar(150) NOT NULL,
  `home_content3` longtext NOT NULL,
  `home_content3_arabic` longtext NOT NULL,
  `about_us` longtext NOT NULL,
  `landline` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `c_email` varchar(150) NOT NULL,
  `p_email` varchar(150) NOT NULL,
  `s_email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `site_title`, `site_title_arabic`, `site_email`, `contact_email`, `address`, `address_arabic`, `fb`, `tw`, `yt`, `gp`, `tab1`, `tab2`, `tab3`, `phone`, `cont_text`, `latest_news`, `home_title1`, `home_title1_arabic`, `home_content1`, `home_content1_arabic`, `home_title2`, `home_title2_arabic`, `home_content2`, `home_content2_arabic`, `home_title3`, `home_title3_arabic`, `home_content3`, `home_content3_arabic`, `about_us`, `landline`, `fax`, `c_email`, `p_email`, `s_email`) VALUES
(1, 'Kuruthi', '', 'info@kuruthi.com', '', 'KCT, Coimbatore-641049', '', '', '', '', '', '', '', '', '+91 8754828186', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '+91 (0) 422 2982020', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_slideshow`
--

CREATE TABLE IF NOT EXISTS `web_slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `cat_no` varchar(255) NOT NULL,
  `cat_no_arabic` varchar(150) NOT NULL,
  `menu` varchar(150) NOT NULL,
  `menu_arabic` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_arabic` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_1` varchar(150) NOT NULL,
  `image_2` varchar(150) NOT NULL,
  `image_3` varchar(150) NOT NULL,
  `image_4` varchar(150) NOT NULL,
  `image_5` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `price` varchar(150) NOT NULL,
  `content_arabic` longtext NOT NULL,
  `short_content` mediumtext NOT NULL,
  `short_content_arabic` mediumtext NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `web_slideshow`
--

INSERT INTO `web_slideshow` (`id`, `cat_id`, `cat_no`, `cat_no_arabic`, `menu`, `menu_arabic`, `title`, `title_arabic`, `image`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `content`, `price`, `content_arabic`, `short_content`, `short_content_arabic`, `order`, `status`) VALUES
(1, 1, 'Automatic Scratch Hardness Tester (SHT-001)', '', 'Automatic Scratch Hardness Tester (SHT-001)', '', 'Automatic Scratch Hardness Tester (SHT-001)', '', '5d18699808b91PHOTO-2019-06-30-13-14-24.jpg', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(2, 16, 'Fiberglass Filter Media / Paint Shop', '', 'Fiberglass Filter Media / Paint Shop', '', 'Fiberglass Filter Media / Paint Shop', '', '5d195a18692cbIMG-0099.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(3, 16, 'Paint Filter Paper / Spray Booth Filter', '', 'Paint Filter Paper / Spray Booth Filter', '', 'Paint Filter Paper / Spray Booth Filter', '', '5d195d66a41a2IMG-0097.PNG', '', '', '', '', '', '<p>hi</p>\r\n', '0', '', '', '', 0, 1),
(4, 18, 'Silicon Membrane / Wood Grain Transfer Film', '', 'Silicon Membrane / Wood Grain Transfer Film', '', 'Silicon Membrane / Wood Grain Transfer Film', '', '5d195fa7043baIMG-0102.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(5, 19, 'Lab Extruder', '', 'Lab Extruder', '', 'Lab Extruder', '', '5d1b196489ae9IMG-0229.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(6, 19, 'Powder Paint Manufacturing Line - Type A', '', 'Powder Paint Manufacturing Line - Type A', '', 'Powder Paint Manufacturing Line - Type A', '', '5d1b1c2e235c0IMG-0214.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(7, 19, 'Powder Paint Manufacturing Line - Type B', '', 'Powder Paint Manufacturing Line - Type B', '', 'Powder Paint Manufacturing Line - Type B', '', '5d1b1c53beda0IMG-0213.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(8, 19, 'Lab Grinder', '', 'Lab Grinder', '', 'Lab Grinder', '', '5d1b1e21d0c2dIMG-0232.PNG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(9, 1, 'Gloss O Meter', '', 'Gloss O Meter', '', 'Gloss O Meter', '', '5d1b1e4e5b415IMG-2412.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(10, 19, 'Water Cooled Cooling Belt', '', 'Water Cooled Cooling Belt', '', 'Water Cooled Cooling Belt', '', '5d1bb5c29d7bcIMG-0215.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(11, 19, 'Air Cooled Cooling Belt', '', 'Air Cooled Cooling Belt', '', 'Air Cooled Cooling Belt', '', '5d1bb614ede40IMG-0218.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(12, 19, 'High Speed Premixer', '', 'High Speed Premixer', '', 'High Speed Premixer', '', '5d1bb9b6477f4IMG-0252.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(13, 1, 'Salt Spray Chamber', '', 'Salt Spray Chamber', '', 'Salt Spray Chamber', '', '5d1bc44f2465fIMG-8133.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(14, 1, 'Lab Wood Finish Machine', '', 'Lab Wood Finish Machine', '', 'Lab Wood Finish Machine', '', '5d1bc49d0ededIMG-0106.JPG', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(15, 1, 'Impact Tester', '', 'Impact Tester', '', 'Impact Tester', '', '5d2f7670cdcaaimpact-tester-for-paint-500x500.jpg', '', '', '', '', '', '', '0', '', '', '', 0, 1),
(16, 14, 'EGM-05', 'EGM-05', 'EGM-05', 'EGM-05', 'Electrostatic Spare Gun', '', '5df3486a32aa5PHOTO-2019-11-19-14-35-26.jpg', '', '', '', '', '', '', '0', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_subcms`
--

CREATE TABLE IF NOT EXISTS `web_subcms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `menu_arabic` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_arabic` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `image_1` varchar(150) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `content_arabic` longtext NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_desc` varchar(255) NOT NULL,
  `page_keyword` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `web_subcms`
--

INSERT INTO `web_subcms` (`id`, `cat_id`, `menu`, `menu_arabic`, `title`, `title_arabic`, `image`, `image_1`, `seo_title`, `content`, `content_arabic`, `page_title`, `page_desc`, `page_keyword`, `order`, `status`) VALUES
(1, 5, 'Contact Details', 'Ø¨ÙŠØ§Ù†Ø§Øª Ø§Ù„Ù…ØªØµÙ„', 'Contact Details', 'Ø¨ÙŠØ§Ù†Ø§Øª Ø§Ù„Ù…ØªØµÙ„', '', '', 'contact-details', '<p>Contact Details</p>\r\n', '<p>Contact Details</p>\r\n', 'Contact Details', 'Contact Details', 'Contact Details', 1, 1),
(2, 5, 'Business Enquiry', 'Ø§Ø³ØªÙ‚ØµØ§Ø¡ Ø§Ù„Ø£Ø¹Ù…Ø§Ù„', 'Business Enquiry', 'Ø§Ø³ØªÙ‚ØµØ§Ø¡ Ø§Ù„Ø£Ø¹Ù…Ø§Ù„', '', '', 'business-enquiry', '<p>Business Enquiry</p>\r\n', '', 'Business Enquiry', 'Business Enquiry', 'Business Enquiry', 2, 1),
(3, 2, 'Company Profile', 'Ù…Ù„Ù Ø§Ù„Ø´Ø±ÙƒØ©', 'Company Profile', 'Ù…Ù„Ù Ø§Ù„Ø´Ø±ÙƒØ©', '', '5bcf97bf9c3b3IMG-20140915-WA0001.jpg', 'company-profile', '<p style="text-align:justify"><span style="color:#B22222"><span style="font-size:16px"><strong><span style="font-family:tahoma,geneva,sans-serif">About Us</span></strong></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">CiBE is an integrated enterprise, which focuses on brand, R&amp;D, Sales, Production and supply chain. We specialize in producing Powder Coating Related Item like Lab Equipment, Electrostatic Gun, Powder Coating booth, Oven, Pre-treatment Spray Booth, Conveyor.. All Product are of unique design, high tech and excellent quality. Several product performance indexes are in the lead position worldwide within same industry..</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We have experience at working with OEM products, have our own professional quality assurance team for vendor and product audits, have a logistics department and understand customs requirements that best meet your needs.</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We have a professional IT development team, who apply the latest software to proceeding an independent research and development on our Own ERP.</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#B22222"><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Brief Overview of benefits for our service:</strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We work to provide a seamless service while mitigating the risk of Asian purchasing channels.</span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We increase the level of communication, breaking down the language and cultural barriers that often result in miscommunication and problems when buying directly</span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">We leverage off our vendor base and long term relationships that we have already developed to provide competitive pricing that a stand-along buyer may not necessarily be able to achieve</span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Ø¨Ø¯Ø£ Ø§Ù„Ø³ÙŠØ¯ Ø£Ù…Ø§Ù†Øª Ø¹Ù„ÙŠ ØºÙ„Ø§Ù… Ù…Ø­Ù…Ø¯ ØŒ ÙˆÙ‡Ùˆ Ù…Ø³ØªØ«Ù…Ø± Ø¨Ø§ÙƒØ³ØªØ§Ù†ÙŠ Ù…Ù‚ÙŠÙ… ÙÙŠ Ø§Ù„Ù…Ù…Ù„ÙƒØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ© ØŒ Ù…ØµÙ†Ø¹ Ø¥ÙŠÙ…Ø§Ù†Øª Ø¹Ù„ÙŠ ØºÙ„Ø§Ù… Ù„Ù„Ø£Ø«Ø§Ø« Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ ÙÙŠ Ø§Ù„Ù…Ù†Ø·Ù‚Ø© Ø§Ù„ØµÙ†Ø§Ø¹ÙŠØ© ÙÙŠ Ø´ÙØ§ ØŒ Ø¬Ù†ÙˆØ¨ Ø§Ù„Ø±ÙŠØ§Ø¶ ÙÙŠ Ø¹Ø§Ù… 2002. Ù…Ù† Ø£Ø¬Ù„ ØªÙˆØ³ÙŠØ¹ Ø§Ù„Ø¥Ù†ØªØ§Ø¬ ÙˆØ§Ø­ØªØ§Ø¬ÙˆØ§ Ø¥Ù„Ù‰ Ø£ÙƒØ¨Ø± ÙˆØ£Ø­Ø¯Ø« ØªÙ… Ù†Ù‚Ù„ Ø§Ù„Ù…ØµÙ†Ø¹ Ø¥Ù„Ù‰ Ø±ÙˆØ² Ø§Ù„Ø°ÙŠ ÙŠÙ‚Ø¹ Ø¹Ù„Ù‰ Ø·Ø±ÙŠÙ‚ Ø§Ù„Ø±ÙŠØ§Ø¶ - Ø§Ù„Ø®Ø±Ø¬ Ø§Ù„Ø³Ø±ÙŠØ¹ ØŒ Ø­ÙŠØ« ØªØ¨Ù„Øº Ù…Ø³Ø§Ø­Ø© Ø§Ù„Ù…ØµÙ†Ø¹ 8000 Ù…ØªØ± Ù…Ø±Ø¨Ø¹. ÙˆÙ‡ÙŠ Ù…ØªØ®ØµØµØ© ÙÙŠ ØªØµÙ†ÙŠØ¹ Ø§Ù„Ø£Ø«Ø§Ø« Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ Ø¨Ù…Ø®ØªÙ„Ù Ø§Ù„Ø£Ø­Ø¬Ø§Ù… ÙˆØ§Ù„Ø£Ø­Ø¬Ø§Ù… ØŒ Ø¨Ù…ÙˆØ§ØµÙØ§Øª Ø¹Ø§Ù„ÙŠØ© Ø§Ù„Ø¬ÙˆØ¯Ø© ØŒ ÙˆØ¯Ù‚Ø© ÙÙŠ ØªØ·Ø¨ÙŠÙ‚ Ù…ÙˆØ§ØµÙØ§Øª Ø§Ù„Ù…Ø´Ø§Ø±ÙŠØ¹ ØŒ ÙˆÙ…Ø·Ø§Ø¨Ù‚Ø© Ù„Ù„Ù…ÙˆØ§ØµÙØ§Øª Ø§Ù„Ù‚ÙŠØ§Ø³ÙŠØ© Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©. Ø¥Ù†ØªØ§Ø¬Ù†Ø§ Ù‡Ùˆ Ø¹Ù„Ù‰ Ø§Ù„Ù†Ø­Ùˆ Ø§Ù„ØªØ§Ù„ÙŠ: Ø£Ø«Ø§Ø« Ù…ÙƒØªØ¨ÙŠ ØŒ Ø£Ø«Ø§Ø« ØªØ¹Ù„ÙŠÙ…ÙŠ ØŒ Ø£Ø«Ø§Ø« Ø·Ø¨ÙŠ ØŒ Ø£Ù†Ø¸Ù…Ø© ØªØ®Ø²ÙŠÙ† ØŒ Ø£Ø³Ø±Ø© ØŒ Ø®Ø²Ø§Ø¦Ù† ØŒ Ø·Ø§ÙˆÙ„Ø§Øª ØŒ Ø·Ø§ÙˆÙ„Ø§Øª ØŒ Ø®Ø²Ø§Ù†Ø§Øª ÙˆØ®Ø²Ø§Ø¦Ù† ØŒ Ø­ÙˆØ§Ø¬Ø² Ù…Ø¹Ø¯Ù†ÙŠØ© ØŒ Ø¬Ù…ÙŠØ¹ Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„Ø£Ø«Ø§Ø« Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ. ÙŠØªÙ…ÙŠØ² Ø§Ù„Ù…ØµÙ†Ø¹ Ø¨Ù…Ø¬Ù…ÙˆØ¹Ø© Ù…ØªÙ†ÙˆØ¹Ø© Ù…Ù† Ø§Ù„Ø·Ù„Ø§Ø¡ Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ Ø¨Ù…Ø§ ÙÙŠ Ø°Ù„Ùƒ Ø·Ù„Ø§Ø¡ Ø§Ù„Ù…Ø³Ø­ÙˆÙ‚ Ø¨Ø£Ø­Ø¯Ø« Ø§Ù„Ø£Ø³Ø§Ù„ÙŠØ¨ Ø§Ù„Ø­Ø¯ÙŠØ«Ø©. Ø¹Ù…Ù„ Ø§Ù„Ù…ØµÙ†Ø¹ Ø¹Ù„Ù‰ ØªØºØ·ÙŠØ© Ø§Ø­ØªÙŠØ§Ø¬Ø§Øª Ø§Ù„Ù‚Ø·Ø§Ø¹Ø§Øª Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ© ÙˆØ§Ù„Ù…Ø¤Ø³Ø³Ø§Øª ÙˆØ§Ù„Ø´Ø±ÙƒØ§Øª ÙˆØ§Ù„Ø³ÙˆÙ‚ Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ© ØŒ Ù…Ø¹ Ø§Ù„ÙƒÙØ§Ø¡Ø§Øª Ø§Ù„ÙˆØ·Ù†ÙŠØ© ÙˆØ§Ù„Ø£ÙŠØ¯ÙŠ Ø§Ù„ÙÙ†ÙŠØ© Ø§Ù„Ù…Ø­ØªØ±ÙØ© ØŒ Ø¹Ù„Ù‰ Ø§Ù„Ù…Ø¹Ø¯Ø§Øª Ø§Ù„Ù…ØªØ·ÙˆØ±Ø© ÙˆØ§Ù„ØªÙ‚Ù†ÙŠØ© Ø§Ù„Ø­Ø¯ÙŠØ«Ø© ÙˆØ§Ù„ØªÙ„Ù‚Ø§Ø¦ÙŠØ© ÙˆØ´Ø¨Ù‡ Ø§Ù„ÙŠØ¯ÙˆÙŠ. Ù…Ù†Ø° ØªØ£Ø³ÙŠØ³ Ø§Ù„Ù…ØµÙ†Ø¹ Ø­ØªÙ‰ Ø§Ù„Ø¢Ù† Ø§ÙƒØªØ³Ø¨Øª Ø®Ø¨Ø±Ø© ÙˆØ§Ø³Ø¹Ø© ÙÙŠ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø¬Ø§Ù„ ØªÙ†Ø¹ÙƒØ³ Ø¹Ù„Ù‰ Ø¬ÙˆØ¯Ø© Ù…Ù†ØªØ¬Ø§ØªÙ†Ø§ ÙˆØ§Ù„ØªÙ…ÙŠØ² ØŒ ÙˆÙ„ÙƒÙ† Ø§Ù„Ù…ØµÙ†Ø¹ Ø§ÙƒØªØ³Ø¨ Ø³Ù…Ø¹Ø© Ø·ÙŠØ¨Ø© ÙˆØ³Ù…Ø¹ØªÙ‡ Ù…Ø­ØªØ±Ù…Ø© ÙÙŠ Ù…Ø¬Ø§Ù„ Ø§Ù„ØªØ®ØµØµ</p>\r\n', 'Company Profile', 'Company Profile', 'Company Profile', 0, 1),
(4, 2, 'Message from Director', 'Ø±Ø³Ø§Ù„Ø© Ù…Ù† Ø§Ù„Ù…Ø¯ÙŠØ±', 'Message from Director', 'Ø±Ø³Ø§Ù„Ø© Ù…Ù† Ø§Ù„Ù…Ø¯ÙŠØ±', '5ce52e101a4bfIMG-0038.JPG', '5ce52e101b481IMG-0038.JPG', 'message-from-director', '<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Just like the famous saying, &ldquo;to accomplish great things we must dream as well as act&rdquo;. So moving forward from our previous themes of &ldquo;We Move&rdquo;, &ldquo;We Build&rdquo;, &ldquo;We Innovate&rdquo;, I present to you our theme for this year, &ldquo;We Sustain, We Grow&rdquo;.</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">In closing, I would like to thank all our stakeholders for the achievements we have built to date and here wishing everyone, may you grow from strength to strength, and that all your works are hitting the nail right on the head!</span></span></p>\r\n', '<pre style="text-align:right">\r\nØªÙ…Ø§Ù…Ø§ Ù…Ø«Ù„ Ø§Ù„Ù‚ÙˆÙ„ Ø§Ù„Ø´Ù‡ÙŠØ± ØŒ &quot;Ù„Ø¥Ù†Ø¬Ø§Ø² Ø£Ø´ÙŠØ§Ø¡ Ø¹Ø¸ÙŠÙ…Ø© ÙŠØ¬Ø¨ Ø£Ù† Ù†Ø­Ù„Ù… ÙˆÙƒØ°Ù„Ùƒ Ø§Ù„Ø¹Ù…Ù„&quot;. Ø¥Ø°Ø§Ù‹ Ù…Ù† Ø®Ù„Ø§Ù„ Ø§Ù„Ù…Ø¶ÙŠ Ù‚Ø¯Ù…Ù‹Ø§ ÙÙŠ Ù…ÙˆØ¶ÙˆØ¹Ø§ØªÙ†Ø§ Ø§Ù„Ø³Ø§Ø¨Ù‚Ø© ÙˆÙ‡ÙŠ &quot;Ù†Ø­Ù† Ù†ØªØ­Ø±Ùƒ&quot; ØŒ Ùˆ &quot;Ù†Ø­Ù† Ù†Ø¨Ù†ÙŠ&quot; ØŒ Ùˆ &quot;Ù†Ø­Ù† Ù†Ø¨ØªÙƒØ±&quot; ØŒ Ø£Ù‚Ø¯Ù… Ø¥Ù„ÙŠÙƒÙ… Ù…ÙˆØ¶ÙˆØ¹Ù†Ø§ Ù„Ù‡Ø°Ø§ Ø§Ù„Ø¹Ø§Ù… ØŒ &quot;Ù†Ø­Ù† Ù†Ø­Ø§ÙØ¸ ØŒ ÙˆÙ†Ù†Ù…Ùˆ&quot;.\r\n\r\nÙÙŠ Ø§Ù„Ø®ØªØ§Ù… ØŒ Ø£ÙˆØ¯ Ø£Ù† Ø£Ø´ÙƒØ± Ø¬Ù…ÙŠØ¹ Ø£ØµØ­Ø§Ø¨ Ø§Ù„Ù…ØµÙ„Ø­Ø© Ù„Ø¯ÙŠÙ†Ø§ Ø¹Ù„Ù‰ Ø§Ù„Ø¥Ù†Ø¬Ø§Ø²Ø§Øª Ø§Ù„ØªÙŠ Ø­Ù‚Ù‚Ù†Ø§Ù‡Ø§ Ø­ØªÙ‰ Ø§Ù„Ø¢Ù† ÙˆÙ‡Ù†Ø§ Ø£ØªÙ…Ù†Ù‰ Ù„Ù„Ø¬Ù…ÙŠØ¹ ØŒ Ù‡Ù„ ÙŠÙ…ÙƒÙ† Ø£Ù† ØªÙ†Ù…Ùˆ Ù…Ù† Ù‚ÙˆØ© Ø¥Ù„Ù‰ Ù‚ÙˆØ© ØŒ ÙˆØ£Ù† Ø¬Ù…ÙŠØ¹ Ø£Ø¹Ù…Ø§Ù„Ùƒ ØªØ¶ØºØ· Ø¹Ù„Ù‰ Ø±Ø£Ø³Ùƒ!</pre>\r\n', 'Message from Director', 'Message from Director', 'Message from Director', 1, 1),
(5, 2, 'Management Team', 'ÙØ±ÙŠÙ‚ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø©', 'Management Team', 'ÙØ±ÙŠÙ‚ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø©', '5ce52e72c0378IMG-0038.JPG', '', 'management-team', '<p>Management Team</p>\r\n', '', 'Management Team', 'Management Team', 'Management Team', 5, 1),
(6, 2, 'Our Vision', 'Ø±Ø¤ÙŠØªÙ†Ø§', 'Our Vision', 'Ø±Ø¤ÙŠØªÙ†Ø§', '', '', '', '<div class="kc_text_block our-vision" style="box-sizing: border-box; margin: 0px; padding: 36px 220px 26px 30px; outline: none medium; background-image: url(">\r\n<p style="text-align:center"><span style="color:#800080"><span style="font-size:18px"><span style="font-family:lucida sans unicode,lucida grande,sans-serif">We will provide trustworthy and high quality products utilizing an ethical and&nbsp;professional approach to create value for customers to earn their lifetime loyalty&nbsp;and to exceed customer expectations</span></span></span></p>\r\n</div>\r\n', '', '', '', '', 2, 1),
(10, 6, 'View', 'View', 'View', 'View', '', '', '', '', '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_team`
--

CREATE TABLE IF NOT EXISTS `web_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `short_content` longtext NOT NULL,
  `long_content` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `web_team`
--

INSERT INTO `web_team` (`id`, `position`, `name`, `seo_title`, `short_content`, `long_content`, `status`, `order`, `image`) VALUES
(6, 'General Manager', 'Er. Arun Babu', 'B.Tech - Chemical Engineer', 'Mr. Arun Babu is a holder of bachelor degree in chemical engineering from Anna university ,Tamilnadu . He started his carrier as a Quality engineer in TPCL in the year of 2006, then he moved to SAK powder coating Saudi Arabia in 2009 and stared working as a production manager . In his 13 years of experience he was worked with various departments of powder coating ( Quality control, technical services, Research and Development, Production). Also he has vast experience in powder coating line installation and testing equipment manufacturing. He stared his own company CiBE , which proving complete solutions to the coaters in new powder coating line installation, modification of existing line, cost effective spare parts, effective power consumption, testing equipments and pretreatment.', '<div dir="ltr" style="color: rgb(34, 34, 34); font-family: Arial,Helvetica,sans-serif; font-size: 13.33px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:georgia,serif">Mr. Arun Babu is a holder of bachelor degree in chemical engineering from Anna university ,Tamilnadu . He started his carrier as a Quality engineer in TPCL in the year of 2006, then he moved to SAK powder coating Saudi Arabia in 2009 and stared working as a production manager . In his 13 years of experience he was worked with various departments of powder coating ( Quality control, technical services, Research and Development, Production). Also he has vast experience in powder coating line installation and testing equipment manufacturing. He stared his own company CiBE , which proving complete solutions to the coaters in new powder coating line installation, modification of existing line, cost effective spare parts, effective power consumption, testing equipments and pretreatment.</span></span></p>\r\n</div>\r\n', 1, 1, '5ce5318149664IMG-0038.JPG'),
(7, 'Finacial Advisor', 'Er. Jayachandran (UK)', 'M.S - Chemical Engineer', '', '', 1, 1, '5d192032e571612548858_10207515483717931_5660589722427996714_n.jpg'),
(8, 'Design Manager', 'Er. J. Prasath', '', '', '', 1, 0, '5d20d4c78636bE4E12C74-B48B-4648-AA0F-093943524121.jpeg'),
(9, 'Technical - General Manager', 'Er. S.C. Chidambaram', '', '', '', 1, 0, '5d22eee5de7d6unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `web_user`
--

CREATE TABLE IF NOT EXISTS `web_user` (
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `blood_group` varchar(155) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `date` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `web_user`
--

INSERT INTO `web_user` (`name`, `email`, `password`, `blood_group`, `status`, `phone`, `address`, `date`, `id`, `msg`) VALUES
('Gokul', 'ravi@gmail.com', '1', 'B+', 1, '1234567890', 'KCT', '', 6, ''),
('Dhanabal', 'dhanabalcric@gmail.com', '1', 'A+', 1, '9698708073', '', '', 5, ''),
('Kavin', 'kavin@gmail.com', '1', 'B+', 1, '1234567890', '', '', 7, ''),
('test', 'test@gmail.co', '1', 'B-', 1, '1234567', '', '', 8, ''),
('gokul', 'gokul@gmail.com', '1', 'AB+', 1, '1234567890', '', '', 9, 'i got donor'),
('hai', 'hai@gmail.com', '1', 'O+', 1, '2345678', '', '', 10, ''),
('Final ', 'final@gmail.com', '1', 'AB-', 1, '1234567890', '', '', 11, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
