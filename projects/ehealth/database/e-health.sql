-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2023 at 02:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-health`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `announce_id` int NOT NULL AUTO_INCREMENT,
  `announce` varchar(500) NOT NULL,
  PRIMARY KEY (`announce_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_id`, `announce`) VALUES
(33, '<p>Some</p>'),
(34, '<p>Some</p>'),
(35, '<p>Some</p>'),
(36, '<p>Some</p>'),
(42, '<h2>This  is sample announcement</h2><p><br></p><ol><li>This</li><li>Is </li><li>Announcement</li><li><em>Not for us</em></li></ol>'),
(41, '<h1>Something Fun</h1>'),
(45, '<p>Add</p>'),
(44, '<p>Additional Announcement</p>');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

DROP TABLE IF EXISTS `health`;
CREATE TABLE IF NOT EXISTS `health` (
  `health_id` int NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `civil` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  `consult_date` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `pobirth` varchar(100) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `town` varchar(250) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `guardian_brgy` varchar(250) NOT NULL,
  `guardian_town` varchar(250) NOT NULL,
  `hypertension` varchar(10) NOT NULL,
  `diabetes` varchar(10) NOT NULL,
  `stroke` varchar(10) NOT NULL,
  `asthma` varchar(10) NOT NULL,
  `kidney` varchar(10) NOT NULL,
  `glaucoma` varchar(10) NOT NULL,
  `myopia` varchar(10) NOT NULL,
  `hyperopia` varchar(10) NOT NULL,
  `cataract` varchar(10) NOT NULL,
  `harelip` varchar(10) NOT NULL,
  `cancer` varchar(10) NOT NULL,
  `cancer_spec` varchar(50) NOT NULL,
  `allergy` varchar(10) NOT NULL,
  `allergy_spec` varchar(50) NOT NULL,
  `othersfamed` varchar(20) NOT NULL,
  `otherfamed_spec` varchar(50) NOT NULL,
  `measles` varchar(10) NOT NULL,
  `mumps` varchar(10) NOT NULL,
  `chickenpox` varchar(10) NOT NULL,
  `german_measles` varchar(10) NOT NULL,
  `diphtheria` varchar(10) NOT NULL,
  `pertussis` varchar(10) NOT NULL,
  `tetanus` varchar(10) NOT NULL,
  `otherpersonal` varchar(20) NOT NULL,
  `otherspersonal_spec` varchar(50) NOT NULL,
  `diphteria_vac` varchar(10) NOT NULL,
  `hepa_vac` varchar(10) NOT NULL,
  `flu_vac` varchar(10) NOT NULL,
  `mumps_vac` varchar(10) NOT NULL,
  `covid_vac` varchar(10) NOT NULL,
  `others_vac` varchar(50) NOT NULL,
  `others_vac_spec` varchar(50) NOT NULL,
  `mens_period` varchar(10) NOT NULL,
  `mens_days` varchar(10) NOT NULL,
  `dysmenorhea` varchar(10) NOT NULL,
  `hospitalization` varchar(10) NOT NULL,
  `hospi_diagnos` varchar(10) NOT NULL,
  `pierced` varchar(10) NOT NULL,
  `pierced_whens` varchar(10) NOT NULL,
  `tattoo` varchar(10) NOT NULL,
  `tattoo_where` varchar(100) NOT NULL,
  `tattoo_when` varchar(10) NOT NULL,
  `smoke` varchar(10) NOT NULL,
  `stick_day` varchar(10) NOT NULL,
  `alcohol` varchar(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `alcohol_often` varchar(10) NOT NULL,
  `other_disease` varchar(10) NOT NULL,
  `other_diagnos` varchar(10) NOT NULL,
  `other_treat` varchar(10) NOT NULL,
  PRIMARY KEY (`health_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`health_id`, `student_id`, `civil`, `semester`, `school_year`, `consult_date`, `height`, `weight`, `bday`, `pobirth`, `brgy`, `town`, `father`, `mother`, `guardian_brgy`, `guardian_town`, `hypertension`, `diabetes`, `stroke`, `asthma`, `kidney`, `glaucoma`, `myopia`, `hyperopia`, `cataract`, `harelip`, `cancer`, `cancer_spec`, `allergy`, `allergy_spec`, `othersfamed`, `otherfamed_spec`, `measles`, `mumps`, `chickenpox`, `german_measles`, `diphtheria`, `pertussis`, `tetanus`, `otherpersonal`, `otherspersonal_spec`, `diphteria_vac`, `hepa_vac`, `flu_vac`, `mumps_vac`, `covid_vac`, `others_vac`, `others_vac_spec`, `mens_period`, `mens_days`, `dysmenorhea`, `hospitalization`, `hospi_diagnos`, `pierced`, `pierced_whens`, `tattoo`, `tattoo_where`, `tattoo_when`, `smoke`, `stick_day`, `alcohol`, `brand`, `alcohol_often`, `other_disease`, `other_diagnos`, `other_treat`) VALUES
(1, '54', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '1', '1', '0', '0', '0', '0', '0', '0', '', '1', '0', '0', '0', '0', '0', '', '', '', 'no', 'yes', '', 'no', '', 'no', '', '', 'no', '', 'no', '', 'not', 'yes', '', ''),
(2, '47', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '', '', '', 'no', 'no', '', 'no', '', 'no', '', '', 'no', '', 'no', '', 'not', 'yes', '', ''),
(3, '52', '', '1stSem,2023-2024', '2023-2024', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '54', '', '2ndSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '49', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '45', '', '1stSem,2022-2023', '2022-2023', '2023-07-03', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '', '', '', 'no', 'yes', '', 'no', '', 'no', '', '', 'yes', '5', 'no', '', 'not', 'no', '', ''),
(7, '45', '', '2ndSem,2022-2023', '2022-2023', '2023-07-04', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '', '', '', 'no', 'no', '', 'no', '', 'no', '', '', 'no', '', 'no', '', 'not', 'no', '', ''),
(9, '55', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '', '0', '', '0', '0', '0', '1', '0', '0', '0', '0', '', '0', '0', '0', '0', '1', '0', '', '', '', 'no', 'yes', '', 'no', '', 'no', '', '', 'no', '', 'no', '', 'not', 'no', '', ''),
(10, '52', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '53', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '56', '', '1stSem,2022-2023', '2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

DROP TABLE IF EXISTS `school_year`;
CREATE TABLE IF NOT EXISTS `school_year` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id`, `sy_name`) VALUES
(3, '2022-2023'),
(4, '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sem_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `sem_name`) VALUES
(5, '1stSem,2022-2023'),
(6, '2ndSem,2022-2023'),
(7, '1stSem,2023-2024'),
(8, '2ndSem,2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `str`
--

DROP TABLE IF EXISTS `str`;
CREATE TABLE IF NOT EXISTS `str` (
  `str_id` int NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `strhypertension` varchar(10) NOT NULL,
  `strdiabetes` varchar(10) NOT NULL,
  `strcardio` varchar(10) NOT NULL,
  `strptb` varchar(10) NOT NULL,
  `strhyperacid` varchar(10) NOT NULL,
  `strallergy` varchar(10) NOT NULL,
  `strepilepsy` varchar(10) NOT NULL,
  `strasthma` varchar(10) NOT NULL,
  `strdysmenorrhea` varchar(10) NOT NULL,
  `strliver` varchar(50) NOT NULL,
  `struti` varchar(10) NOT NULL,
  `strothers` varchar(20) NOT NULL,
  `strothers_spec` varchar(50) NOT NULL,
  `pebp` varchar(50) NOT NULL,
  `pepr` varchar(50) NOT NULL,
  `prheent` varchar(50) NOT NULL,
  `pechest` varchar(50) NOT NULL,
  `peheart` varchar(50) NOT NULL,
  `pelungs` varchar(50) NOT NULL,
  `peabdomen` varchar(50) NOT NULL,
  `pegenitalia` varchar(50) NOT NULL,
  `peextrem` varchar(50) NOT NULL,
  `peskin` varchar(50) NOT NULL,
  `peneurology` varchar(50) NOT NULL,
  `peother_disease` varchar(50) NOT NULL,
  `pediagnos` varchar(5) NOT NULL,
  `petreatment` varchar(50) NOT NULL,
  `peremarks` varchar(50) NOT NULL,
  PRIMARY KEY (`str_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `str`
--

INSERT INTO `str` (`str_id`, `student_id`, `semester`, `strhypertension`, `strdiabetes`, `strcardio`, `strptb`, `strhyperacid`, `strallergy`, `strepilepsy`, `strasthma`, `strdysmenorrhea`, `strliver`, `struti`, `strothers`, `strothers_spec`, `pebp`, `pepr`, `prheent`, `pechest`, `peheart`, `pelungs`, `peabdomen`, `pegenitalia`, `peextrem`, `peskin`, `peneurology`, `peother_disease`, `pediagnos`, `petreatment`, `peremarks`) VALUES
(1, '54', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '47', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '52', '1stSem,2023-2024', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '54', '2ndSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '49', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '45', '1stSem,2022-2023', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', '', '', ''),
(7, '45', '2ndSem,2022-2023', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', ''),
(9, '55', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '52', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '53', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '56', '1stSem,2022-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_sec` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(250) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `firstname`, `lastname`, `year_sec`, `course`, `age`, `gender`, `contact`, `password`, `profile`) VALUES
(49, 'DAT-BAT Student', 'TestDAT-BAT', 'Student', '4-AB', 'DAT-BAT', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(48, 'Some', 'Sample Some', 'Student', '4-AB', 'BTVTED', '23', 'Male', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(47, 'Exas', 'Additional', 'Student', '4-AB', 'BSIT', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(45, 'Stu', 'Sample', 'Student', '4-AB', 'BSIT', '23', 'Female', '09092735719', '123456', '../uploads/profile.png'),
(46, 'Exa', 'Example', 'Student', '4-AB', 'BSED', '23', 'Male', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(50, 'Addd', 'Added', 'Student', '4-AB', 'BSED', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(51, 'Exaassss', 'Saamppss', 'Student', '4-AB', 'BTVTED', '23', 'Male', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(52, 'Exxxx', 'EXXXXX', 'Student', '4-AB', 'BSIT', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(53, 'SAAAMMMPP', 'Xammpppss', 'Student', '4-AB', 'BSIT', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(54, 'Stuuuuu', 'ADDDSSS', 'Student', '4-AB', 'BSIT', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(55, 'Samplesssss', 'Sammpssss', 'Student', '4-AB', 'BSIT', '23', 'Female', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(56, 'Somebtv', 'btveted', 'Student', '4-ABC', 'BTVTED', '23', 'Male', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(250) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `firstname`, `lastname`, `age`, `contact`, `password`, `profile`) VALUES
(11, 'Sample', 'My', 'Teacher', '30', '09363609838', '654321', 'uploads/d8nf3rz-f414e46b-1d7e-4665-a340-c98d51322957.png'),
(12, 'Test', 'Test', 'Teacher', '25', '09092735719', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png'),
(30, 'Trial', 'Trial', 'Teacher', '30', '0978242', '123456', 'https://tinypic.host/images/2022/12/19/img_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `trecord`
--

DROP TABLE IF EXISTS `trecord`;
CREATE TABLE IF NOT EXISTS `trecord` (
  `trecord_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `physician_or_nurse` varchar(100) NOT NULL,
  PRIMARY KEY (`trecord_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
