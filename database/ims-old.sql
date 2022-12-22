-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 12:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE `cons` (
  `idno` varchar(25) NOT NULL,
  `intdate` date NOT NULL,
  `type` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `size` varchar(25) NOT NULL,
  `noitem` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cons`
--

INSERT INTO `cons` (`idno`, `intdate`, `type`, `brand`, `size`, `noitem`) VALUES
('UJ/COMPSC/01', '2010-05-01', 'Duplicating sheet', '', 'A4', 1),
('UJ/COMPSC/02', '2011-12-14', 'Ballpoint pen(Red)', '', '', 12),
('UJ/COMPSC/03', '2012-02-14', 'Ballpoint pen(Black)', '', '', 10),
('UJ/COMPSC/04', '2014-06-05', 'Ballpoint pen(Blue)', '', '', 24),
('UJ/COMPSC/05', '2013-04-03', 'Binder gum', '', '', 2),
('UJ/COMPSC/06', '2014-12-14', 'Board cleaner', '', '', 2),
('UJ/COMPSC/07', '2011-11-05', 'Broom', '', '', 2),
('UJ/COMPSC/08', '2010-04-20', 'Duplicating sheet', '', 'A7', 2),
('UJ/COMPSC/09', '2010-01-20', 'Duplicating ink', '', '', 1),
('UJ/COMPSC/10', '2010-06-12', 'Duplicating sheet', '', 'A7', 1),
('UJ/COMPSC/11', '2010-01-20', 'Duplicating sheet', '', 'A4', 1),
('UJ/COMPSC/12', '2013-09-05', 'Cellotape', '', '1 "', 1),
('UJ/COMPSC/13', '2014-02-05', 'Cellotape', '', '2"', 1),
('UJ/COMPSC/14', '2012-01-08', 'Cellotape', '', '1"', 2),
('UJ/COMPSC/15', '2008-08-16', 'Ballpoint pen(Black)', '', '', 7),
('UJ/COMPSC/16', '2011-12-14', 'Ballpoint pen(Red)', '', '', 6),
('UJ/COMPSC/17', '2011-11-23', 'Ballpoint pen(Black)', '', '', 24),
('UJ/COMPSC/18', '2013-03-04', 'Ballpoint pen(Red)', '', '', 12),
('UJ/COMPSC/19', '2013-05-03', 'Ballpoint pen(Blue)', '', '', 1),
('UJ/COMPSC/20', '2011-12-27', 'Ballpoint pen(Red)', '', '', 4),
('UJ/COMPSC/21', '2011-12-20', 'Broom', '', '', 4),
('UJ/COMPSC/22', '2010-04-03', 'Duplicating sheet', '', 'A4', 1),
('UJ/COMPSC/23', '2010-01-20', 'Duplicating ink', '', '', 1),
('UJ/COMPSC/24', '2013-01-02', 'Envelop', '', 'Long', 15),
('UJ/COMPSC/25', '2012-12-07', 'Envelop bag', '', '15*10', 20);

-- --------------------------------------------------------

--
-- Table structure for table `furt`
--

CREATE TABLE `furt` (
  `idno` varchar(25) NOT NULL,
  `type` varchar(255) NOT NULL,
  `intdate` date NOT NULL,
  `mat` varchar(25) NOT NULL,
  `dimen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furt`
--

INSERT INTO `furt` (`idno`, `type`, `intdate`, `mat`, `dimen`) VALUES
('UJ/COMPSC/403/F/21/01', 'Cupboard', '1991-10-24', 'Wooden', ''),
('UJ/COMPSC/415/F/15/01', 'Filling Cabinet', '2012-11-06', '', ''),
('UJ/COMPSC/416/F/19/01', 'Cupboard', '2012-05-24', 'Steel', ''),
('UJ/COMPSC/418/F/11/01', 'Executive Cushioned Chairs', '1991-05-09', '', ''),
('UJ/COMPSC/418/F/13/01', 'Lecture Hall Chair', '1996-12-31', '', ''),
('UJ/COMPSC/423/F/17/01', 'Arm Chairs', '1998-04-06', '', ''),
('UJ/COMPSC/428/F/25/01', 'Shelves', '1992-09-05', 'Steel', ''),
('UJ/COMPSC/467/F/29/01', 'Computer Table', '2005-09-05', '', ''),
('UJ/COMPSC/469/F/35/01', 'Book Shelves', '2007-11-23', 'Iron', ''),
('UJ/COMPSC/469/F/39/01', 'Notice Board', '2013-01-09', '', ''),
('UJ/COMPSC/479/F/01/01', 'Executive Table', '1991-05-09', '', ''),
('UJ/COMPSC/480/F/03/01', 'Reading Room Table', '1991-05-24', '', ''),
('UJ/COMPSC/480/F/07/01', 'Office Table', '1992-11-20', '', ''),
('UJ/COMPSC/482/F/05/01', 'Study Table', '1991-05-24', '', ''),
('UJ/COMPSC/482/F/09/01', 'Lab-Table', '1994-11-22', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `idno` varchar(25) NOT NULL,
  `serial` varchar(25) NOT NULL,
  `intdate` date NOT NULL,
  `warrenty` date NOT NULL,
  `type` varchar(25) NOT NULL,
  `make` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `yrmanu` varchar(4) NOT NULL,
  `state` varchar(255) NOT NULL,
  `discpt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`idno`, `serial`, `intdate`, `warrenty`, `type`, `make`, `model`, `yrmanu`, `state`, `discpt`) VALUES
('UJ/COMPSC/425/LE/189/01', '', '2008-02-05', '0000-00-00', 'Notebook ', 'hp', 'NX 6320', '', '', ''),
('UJ/COMPSC/425/LE/195/01', '', '2009-08-06', '0000-00-00', 'Photocopy Machine', 'Cannon', 'IR201SN', '', '', ''),
('UJ/COMPSC/425/LE/247/05', '', '2017-02-14', '2018-02-14', 'Laptop', 'hp', 'ProBook 4530s', '2012', '', ''),
('UJ/COMPSC/425/LE/261/01', '', '2013-09-06', '0000-00-00', 'Computer', 'Apple', 'iMac', '', '', 'Workstation'),
('UJ/COMPSC/425/LE/273/01', '', '2014-11-05', '0000-00-00', 'Laptop', 'hp', 'ProBook 440G1', '', '', ''),
('UJ/COMPSC/425/LE/275/01', '', '2015-11-11', '0000-00-00', 'Computer', 'hp', 'ProDesk 600 G1 TWR', '', '', ''),
('UJ/COMPSC/762/LE/257/01', '', '2013-02-15', '0000-00-00', 'Multimedia Projector', 'Epson', 'EB 925', '', '', ''),
('UJ/COMPSC/LE/209/01', '', '2009-08-06', '0000-00-00', 'Network Switch', 'US Robotics', '', '', '', '24 port'),
('UJ/COMPSC/LE/223/01', '', '2010-11-01', '0000-00-00', 'Harddisk', 'Segate', '320GB', '', '', ''),
('UJ/COMPSC/LE/263/01', '', '2014-02-26', '0000-00-00', 'Interactive Projector', 'Hitachi', '', '', '', ''),
('UJ/COMPSC/LE/267/01', '', '2014-03-17', '0000-00-00', 'Printer', 'Xerox ', 'Phaser 3320', '', '', ''),
('UJ/COMPSC/LE/269/01', '', '2014-09-22', '0000-00-00', 'Projector', 'Epson', 'EB-X24', '', '', ''),
('UJ/COMPSC/LE/271/01', '', '2014-08-28', '0000-00-00', 'Laser Printer', 'Dell', 'B1260dn', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `issdate` date NOT NULL,
  `idno` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `rcvdept` varchar(25) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`issdate`, `idno`, `type`, `rcvdept`, `remark`) VALUES
('2012-08-17', 'UJ/COMPSC/425/LE/13/17', 'Stabilizer  ', 'Physical Education Unit', ''),
('2017-01-25', 'UJ/COMPSC/425/LE/13/18', 'Stabilizer SVC-2000', 'Dean Office', ''),
('2013-07-31', 'UJ/COMPSC/425/LE/13/24', 'Stabilizer  ', 'Fisheries', ''),
('2015-11-30', 'UJ/COMPSC/425/LE/131/08/C', 'Computer', 'Academic branch', ''),
('2015-11-30', 'UJ/COMPSC/425/LE/131/08/D', 'Computer', 'Academic branch', ''),
('2015-11-30', 'UJ/COMPSC/425/LE/131/09/A', 'Computer', 'Academic branch', ''),
('2015-11-30', 'UJ/COMPSC/425/LE/131/22/A', 'Computer', 'Academic branch', ''),
('2015-11-30', 'UJ/COMPSC/425/LE/131/22/B', 'Computer', 'Academic branch', ''),
('2015-11-30', 'UJ/COMPSC/425/LE/203/08/B', 'Computer', 'Academic branch', ''),
('2011-02-09', 'UJ/COMPSC/425/LE/91/05/A', 'Computer', 'Fisheries', ''),
('2011-02-09', 'UJ/COMPSC/425/LE/91/05/B', 'Computer', 'Fisheries', ''),
('2011-02-09', 'UJ/COMPSC/425/LE/91/05/C', 'Computer', 'Fisheries', ''),
('2011-02-09', 'UJ/COMPSC/425/LE/91/05/D', 'Computer', 'Fisheries', ''),
('2015-02-27', 'UJ/COMPSC/IRQUE/05/01', 'Computer chair', 'Botany', ''),
('2014-03-27', 'UJ/COMPSC/IRQUE/09/01', 'Printer', 'Finance Branch', ''),
('2014-06-26', 'UJ/COMPSC/LE/113/03', 'UPS', 'Botany', ''),
('2014-06-26', 'UJ/COMPSC/LE/137/03', 'UPS', 'Botany', ''),
('2014-06-26', 'UJ/COMPSC/LE/137/04', 'UPS', 'Botany', ''),
('2014-06-26', 'UJ/COMPSC/LE/137/05', 'UPS', 'Botany', ''),
('2014-06-26', 'UJ/COMPSC/LE/137/06', 'UPS', 'Botany', ''),
('2014-06-26', 'UJ/COMPSC/LE/137/12', 'UPS', 'Botany', ''),
('2014-03-27', 'UJ/COMPSC/LE/61/01', 'Printer', 'Finance Branch', '');

-- --------------------------------------------------------

--
-- Table structure for table `loan-rcv`
--

CREATE TABLE `loan-rcv` (
  `rcvdate` date NOT NULL,
  `idno` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `givendept` varchar(50) NOT NULL,
  `remark` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan-rcv`
--

INSERT INTO `loan-rcv` (`rcvdate`, `idno`, `type`, `givendept`, `remark`) VALUES
('0000-00-00', 'UJ/COMPSC/425/LE/91/05/A', '', '', ''),
('0000-00-00', 'UJ/COMPSC/425/LE/91/05/B', '', '', ''),
('0000-00-00', 'UJ/COMPSC/425/LE/91/05/c', '', '', ''),
('0000-00-00', 'UJ/COMPSC/425/LE/91/05/D', '', '', ''),
('0000-00-00', 'UJ/COMPSC/LE/61/01', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `idno` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `intdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`idno`, `name`, `intdate`) VALUES
('UJ/COMPSC/422/OE/47/01', 'Computer Chairs', '2005-07-05'),
('UJ/COMPSC/446/OE/35/01', 'Table Fan', '2000-01-24'),
('UJ/COMPSC/446/OE/35/05', 'Stand Fan', '2000-01-24'),
('UJ/COMPSC/467/OE/45/01', 'OHP Screen with Stand', '2001-08-15'),
('UJ/COMPSC/486/OE/05/01', 'Type Writter', '1996-07-24'),
('UJ/COMPSC/486/OE/07/01', 'Type Writter', '1995-10-28'),
('UJ/COMPSC/495/OE/37/01', 'Electric Kettle', '2000-10-24'),
('UJ/COMPSC/495/OE/39/01', 'Water Filter', '2000-10-24'),
('UJ/COMPSC/833/OE/41/01', 'Bicycle Lumala 56C-29162', '2000-12-22'),
('UJ/COMPSC/OE/33/01', 'Kettle', '1998-12-07'),
('UJ/COMPSC/OE/51/01', 'Telephone Receiver (SLT)', '2000-01-21'),
('UJ/COMPSC/OE/53/01', 'Crimping Tool', '2007-05-11'),
('UJ/COMPSC/OE/53/02', 'Crimping Tool', '2007-05-11'),
('UJ/COMPSC/OE/55/01', 'Blower Electric', '2008-06-19'),
('UJ/COMPSC/OE/57/01', 'Screen Projector', '2008-10-15'),
('UJ/COMPSC/OE/63/01', 'Refrigerator (Sisil)', '2014-02-26'),
('UJ/COMPSC/OE/73/01', 'Tea Containter', '2014-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `title`, `firstname`, `lastname`, `designation`, `email`, `username`, `password`) VALUES
(3, '', '', '', '', '', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `trsdate` date NOT NULL,
  `idno` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `rcvdept` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`trsdate`, `idno`, `type`, `rcvdept`) VALUES
('2012-05-14', 'UJ/COMPSC/425/LE/247/03', 'laptop', 'Dean Office'),
('2015-04-24', 'UJ/COMPSC/LE/223/01', 'Harddisk', 'Dean Office'),
('2015-04-20', 'UJ/COMPSC/LE/223/02', 'Harddisk', 'Botany'),
('2015-05-08', 'UJ/COMPSC/LE/225/01', 'Harddisk', 'Zoology'),
('2015-05-11', 'UJ/COMPSC/LE/233/01', 'Harddisk', 'Zoology'),
('2015-06-12', 'UJ/COMPSC/SIDA//03/01', 'laptop', 'Botany'),
('2014-05-14', 'UJ/COMPSC/SIDA/03/01', 'laptop', 'Botany'),
('2015-04-12', 'UJ/COMPSC/SIDA/10/01', 'laptop', 'Dean Office'),
('2015-06-12', 'UJ/COMPSC/SIDA/11/1', 'Apple macbook', 'Dean Office');

-- --------------------------------------------------------

--
-- Table structure for table `trans-rcv`
--

CREATE TABLE `trans-rcv` (
  `trsdate` date NOT NULL,
  `idno` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `givendept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans-rcv`
--

INSERT INTO `trans-rcv` (`trsdate`, `idno`, `type`, `givendept`) VALUES
('0000-00-00', 'UJ/COMPSC/425/LE/247/03', '', ''),
('0000-00-00', 'UJ/COMPSC/425/LE/247/04', '', ''),
('0000-00-00', 'UJ/COMPSC/425/LE/247/05', '', ''),
('0000-00-00', 'UJ/COMPSC/425/LE/247/06', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cons`
--
ALTER TABLE `cons`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `furt`
--
ALTER TABLE `furt`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `loan-rcv`
--
ALTER TABLE `loan-rcv`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `trans-rcv`
--
ALTER TABLE `trans-rcv`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
