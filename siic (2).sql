-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 03:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `role`, `timestamp`) VALUES
('admin', '12345678', 1, '2018-04-02 13:39:37'),
('hello', '12345678', 1, '2018-04-02 13:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `siic_id` bigint(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `experience` int(2) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `soft_knowledge` varchar(100) DEFAULT NULL,
  `uniq_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Faculty Registration Details';

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`siic_id`, `name`, `contact`, `email`, `dob`, `reg_no`, `department`, `experience`, `interest`, `soft_knowledge`, `uniq_code`) VALUES
(15201001, 'Rathinam A', 9884238646, 'rathinam.a@ktr.srmuniv.ac.in', '1974-06-03', '100279', 'EEE', 19, 'Robotics,Intelligent Systems,Embedded systems,Satelite design', 'C,C++,MATLAB', '3041734b78766e6e1135915c2c9a570e'),
(15201002, 'Vinoth Kumar Annamalai', 9943570555, 'vinothkumar.a@ktr.srmuniv.ac.in', '1989-07-22', '101654', 'Aeroapace', 2, 'UAV, Flight Control System.', 'CATIA, ANSYS, MATLAB and Arduino Programming', '163e562489508e38b2fdf32acbcbd446'),
(15201003, 'Nikunj Panchal', 8148606827, 'nikunjpanchal.r@ktr.srmuniv.ac.in', '1993-05-02', '201172', 'Mechatronics', 4, 'Robotics, Electronics, designing ', 'Catia', '57cbc52a98b4ac51ab15e93aebbbe5d1'),
(15201004, 'M.Anburajan', 9790840279, 'hod.biomedi@ktr.srmuniv.ac.in', '1968-09-07', '100036', 'Biomedical', 20, 'biomedical instrumentation', '', '9e233f9afc541576b6885daa903de072'),
(15201005, 'RAMESH N', 9840483909, 'ramesh.n@ktr.srmuniv.ac.in', '1980-04-03', '101267', 'SchoolOfArchitecture', 4, 'architecture', 'ms office, auto cad, ', '98838fbc0402bbe885bb47d0cbd99d5f'),
(15201006, 'j.b.', 9874563211, 'JBBLB@ktr.srmuniv.ac.in', '2000-12-21', '4368789676', 'Aeroapace', 5, 'sdvd', 'svvf', '04c89e2f93b1d1346e7c343797e8c65e'),
(15201007, 'Dr. A. Vimala Juliet', 9940449418, 'hod.ice@ktr.srmuniv.ac.in', '1969-12-21', '100363', 'EIE', 21, 'InstrumentationMicro-electromechanical systems, Process Control &amp; Control Systems', 'LabVIEW, MEMS Softwares', 'b9b42ca22acc7a0b588fb520564bd1f0'),
(15201008, 'R.BAKIYA LAKSHMI', 9965498118, 'bakiyalakshmi.r@ktr.srmuniv.ac.in', '1981-08-17', '100379', 'EIE', 7, 'MEMS', 'MATLAB, MEMS, LabVIEW', 'ac1d2e3f48a0911e3c46f4ca6be72df0'),
(15201009, 'KRUSHNASAMY V S', 9994431562, 'krushnasamy.v@ktr.srmuniv.ac.in', '1979-07-29', '100374', 'EIE', 10, 'soft computing,control systems,measurements', 'matlab', 'a102cfad896d3d92fe9b80dffc5296e2'),
(15201010, 'NIKUNJ PANCHAL', 8148606827, 'nikunjpnchal@ktr.srmuniv.ac.in', '1993-05-02', '201172', 'Mechatronics', 1, 'robotics', 'catia,', '018bc930c5eec1b77d639d8205b17b27'),
(15201011, 'manoj', 9789968568, 'manojkumar.v@ktr.srmuniv.ac.in', '1988-03-19', '101353', 'Mechanical', 3, 'robotics,image processing', 'MATLAB,SCILAB,ARDUINO,EMBEDDED C,VISUAL BASIC', '489a2cb95acd9ce71074e818d16b4e05'),
(15201012, 'P.K.SENTHILKUMAR', 9443557131, 'senthilkumar.p@ktr.srmuniv.ac.in', '1975-03-07', '100369', 'ICE', 8, 'control systems,MEMS,Process control', 'comsol,MATLAB', '898a0e8967ca7b579489350aeec28122'),
(15201013, 'C. LIKITH KUMAR REDDY', 9677258662, 'likithkumar.c@ktr.srmuniv.ac.in', '1989-03-11', '101362', 'ICE', 3, 'MEMS, Control System', 'COMSOL Multiphysics, COventorware, LabVIEW, MatLAB', '5ae4937f7d3be6080fb43a6a434197d9'),
(15201014, 'M S Vasanthi', 9940117438, 'vasanthi.m@ktr.srmuniv.ac.in', '1973-01-22', '100216', 'Telecommunication', 17, 'RF System Design', 'MATLAB, SCILAB, Advanced Design System, Python, C, C++', 'fcb50b9de2274264bd3ec9a5b7262e85'),
(15201015, 'Dr.Nisha Ashokan', 9500066519, 'nisha.a@ktr.srmuniv.ac.in', '1972-03-05', '170013', 'SchoolOfManagement', 17, 'entrepreneurship and economics', '', 'a824c769ee5f71e50eee0a63406391f3'),
(15201016, 'RANIT ASH', 7358589760, 'ranit_kumar@ktr.srmuniv.ac.in', '1997-02-06', '226296', 'Mechanical', 1, 'AUTOMOBILES, AEROSPACE AND MODEL DESINGING', 'NA', '15aab25d191f9a694628bde31604d277'),
(15201017, 'Arockia Vijay  Joseph', 9677002684, 'arockiavijay.j@ktr.srmuniv.ac.in', '1986-08-14', '101544', 'EIE', 4, 'Control Systems, Aerospace and Automotive Systems', 'C, MATLAB', '21d041095a79b56aace655937b9cd26b'),
(15201018, 'Dr.G.Joselin retna kumar', 9444435407, 'joselin.rk@ktr.srmuniv.ac.in', '1981-07-10', '100375', 'EIE', 11, 'Wireless automation, Sensor network, Process control', 'Matlab, SPICE, PLC', 'e359451084f2ed32774235f24c0d2fd3'),
(15201019, 'Nurmesh Bhartiya', 8940377265, 'nurmeshbhartiya.c@ktr.srmuniv.ac.in', '1985-08-01', '101371', 'ICE', 3, 'Digital Signal Processing, Control System, Digital Electronics, Electronics and Instrumentation', 'MatLab, Labview, \r\nMicrosoft Visual C', '58a61e89be9ec621c44d7aeb054cd45d'),
(15201020, 'vibha.k', 9962302301, 'vibha.k@ktr.srmuniv.ac.in', '1985-07-21', '100653', 'EIE', 7, 'power electronics,control system,sensors &amp;amp; transducers', 'Matlab,VI,Pspice', '1f42535cf87537b3130a575ae52c8ab5'),
(15201021, 'Vasanthakumar Sekar', 9790901661, 'vasanthakumar.s@ktr.srmuniv.ac.in', '1984-09-30', '101531', 'EIE', 4, 'Control System', 'LabVIEW,Matlab, Ardinuo, C, C++, Latex', '12201547455d08bd78ec21984a22bc04'),
(15201022, 'B.Hemalatha', 9841403233, 'hema.b@ktr.srmuniv.ac.in', '1978-03-20', '100373', 'ICE', 12, 'Neural networks, Fuzzy logic,Labview,Robotics', 'Labview, MatLab', 'a108365771e9072fafc39e8629063017'),
(15201023, 'S.Saranyaa', 9952494613, 'saranyaa.s@ktr.srmuniv.ac.in', '1989-09-27', '101285', 'ICE', 3, 'process control, Instrumentation &amp;amp; MEMS', 'MATLAB, LabVIEW , COMSOL', '84bee4a656236ba752b6e7886997c62c'),
(15201024, 'S.INDIRANI', 9791059376, 'indirani.s@ktr.srmuniv.ac.in', '1970-05-30', '100915', 'EIE', 17, 'MEMS', 'MATLAB\r\nLABVIEW\r\nMEMS', '60e11f5a54f2ec861411e25ee664371a'),
(15201025, 'Anitha Saraswathi.P', 8056786867, 'anitha.p@ktr.srmuniv.ac.in', '1980-09-14', '101233', 'ICE', 8, 'control system', 'MATLAB, C, C++, SIEBEL CRM, LabVIEW', 'be80e75d5341cf46dbb3762ef7b69e6c'),
(15201026, 'Dr.Karnam Anantha Sunitha', 9600086770, 'sunitha.k@ktr.srmuniv.ac.in', '1981-12-08', '100377', 'EIE', 8, 'Embedded Systems, Bio signal Processing, Techniques in Artificial Intelligence , Telemedicine Techni', 'LabVIEW,MATLAB,Embedded Programming', 'f4f3a5262d4f6ec9e745bf27e2aa1bd3'),
(15201027, 'MYDHILI', 8939054042, 'mydhili.p@ktr.srmuniv.ac.in', '1988-05-23', '101095', 'EIE', 5, 'digital image processing', '', '9d2c03a7ee2ce50fce3aa54bc4850696'),
(15201028, 'Jekan.P', 9715588446, 'jegan.p@ktr.srmuniv.ac.in', '1983-03-05', '100978', 'EIE', 5, 'controller design for system and process,industrial Automation', 'Mat Lab, Pspice, Labview', 'a2701ed609be6c608c24a33d13ad0cc2'),
(15201029, 'N.DEEPA', 7358579903, 'deepa.n@ktr.srmuniv.ac.in', '1982-01-19', '100611', 'ICE', 7, 'process control, Instrumentation &amp;amp; MEMS', 'MATLAB, LabVEIW , COMSOL', 'eddb283e06d65e0c8808539d27f3e4a3'),
(15201030, 'Sharanya', 9952599674, 'sharanya.s@ktr.srmuniv.ac.in', '0000-00-00', '101372', 'EIE', 3, 'Process Control, Neural Networks and Fuzzy Logic.', 'MATLab, LABVIEW , basics of C and C++', 'b06c6081c0d961d427573f468ebbcd44'),
(15201031, 'X.JOANOFARC', 9994210102, 'joanf.x@ktr.srmuniv.ac.in', '1984-12-18', '100751', 'EIE', 6, 'advanced electronics, control systems', 'MATLAB, Labview', '054e47bdff87cec533a08eb605943f6d'),
(15201032, 'A.ASUNTHA', 9551925514, 'asuntha.a@ktr.srmuniv.ac.in', '1978-09-22', '100714', 'EIE', 6, 'non-linear control systems', 'Matlab', '67f31c395ee42eddf220597a152bf84e'),
(15201033, 'A.BRINDHA', 9884837225, 'brindha.a@ktr.srmuniv.ac.in', '1988-01-10', '101090', 'EIE', 4, 'Electronics and control', 'LabVIEW, dSPACE,MatLAB', '3d09844cf1d08c217a4eba54c0253761'),
(15201034, 'Sam Jeba Kumar.J', 9443170705, 'jebakumar.j@ktr.srmuniv.ac.in', '1972-06-07', '100366', 'ICE', 9, 'MEMS, Automation', 'C, C++', 'a012faa63d55d81361de62550a618199'),
(15201035, 'Mrs.P.Punitha', 9500743046, 'punitha.p@ktr.srmuniv.ac.in', '1984-05-29', '101361', 'EIE', 5, 'Control Systems, Drives and Control, machine design', 'C, Mat lab, Lab View, Auto Cad, PsPice', '641f20e40b7bda623854b85228e0ee54'),
(15201036, 'Kunwar aditya', 7092887033, 'kunwaraditya_mri@ktr.srmuniv.ac.in', '1998-05-31', 'RA15110040', 'ECE', 1, 'Designing fabricating PCB, robotics, UAV', 'C++,scilab', '8b175dd45accd7622ceac585a50512ac'),
(15201037, 'GOUTHAM MAREESWARAN.B', 9790416854, 'gouthammareeswaran.b@ktr.srmuniv.ac.in', '1989-11-18', '101964', 'Mechatronics', 1, 'FACTORY AUTOMATION, AUTONOMOUS ROBOT,MACHINE VISION, COMPUTER INTEGRATED MANUFACTURING ,', 'CATIA V5 , DELMIA V5 , SOLIDWORKS, ABACUS, MASTER CAM X9 ,MATLAB,OPEN CV C++, CNC PROGRAM, VC++', 'b07a527edfd0019bd5d3f36d9b335af4'),
(15201038, 'Ramar', 9840792907, 'ramar.v@ktr.srmuniv.ac.in', '1985-06-03', '90100036', 'SchoolOfManagement', 8, 'Management', 'PHP, C, Photoshop', '17ff74154a3a9bdb2149167ba474b7ec'),
(15201039, 'dr alok kumar', 9043892137, 'alokkumar.m@ktr.srmuniv.ac.in', '0000-00-00', '101445', 'Nanotechnology', 2, 'nanotechnologgy', 'matlab, c', 'afc454e91b55c9a0041d5c5c0204357d'),
(15201040, 'K Sivanathan', 9840123959, 'sivanathan.k@ktr.srmuniv.ac.in', '1980-05-05', '100731', 'Mechatronics', 12, 'Mechatronics, Autonomous systems, swarm robotics', 'LabVIEW, Matlab', '00e113701f7d8aa9ed94cefb9771a767');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `unique_id` varchar(64) NOT NULL,
  `entered_by` varchar(64) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `image_url` varchar(64) NOT NULL,
  `specs` varchar(64) NOT NULL,
  `quantity` int(64) NOT NULL,
  `price` int(64) NOT NULL,
  `entered_on` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`unique_id`, `entered_by`, `product_name`, `image_url`, `specs`, `quantity`, `price`, `entered_on`) VALUES
('', '', '', '', '19*8', 2, 3800, ''),
('8064860f-14e3-449d-92a4-27902eece0d8', '', '', '', '19*8', 2, 3800, '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_request`
--

CREATE TABLE `inventory_request` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `item_id` varchar(64) NOT NULL,
  `uid` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_request`
--

INSERT INTO `inventory_request` (`timestamp`, `item_id`, `uid`) VALUES
('2017-09-06 07:44:24', '1', 'S598fe7fbda566'),
('2017-09-07 06:07:18', '1', 'S598fe7fbda566'),
('2017-09-07 06:07:22', '1', 'S598fe7fbda566'),
('2017-09-14 13:28:37', '1', 'S598fe7fbda566'),
('2017-10-01 12:23:23', '1', 'S598fe7fbda566'),
('2017-11-10 05:13:44', '', 'ST5a053355db7e7'),
('2017-11-10 05:13:45', '', 'ST5a053355db7e7'),
('2017-11-10 05:13:45', '', 'ST5a053355db7e7'),
('2017-11-10 05:13:47', '', 'ST5a053355db7e7'),
('2018-01-17 10:57:54', '', 'S598fe7fbda566');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `reg_no` varchar(128) NOT NULL,
  `dept` varchar(128) NOT NULL,
  `desig` text NOT NULL,
  `qualifications` text NOT NULL,
  `experience` text NOT NULL,
  `aoi` text NOT NULL,
  `value_add` text NOT NULL,
  `startup_exp` text NOT NULL,
  `hours` varchar(512) NOT NULL,
  `spec_train` varchar(512) NOT NULL,
  `contact` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile_img` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `name`, `reg_no`, `dept`, `desig`, `qualifications`, `experience`, `aoi`, `value_add`, `startup_exp`, `hours`, `spec_train`, `contact`, `email`, `profile_img`, `password`, `timestamp`) VALUES
(3, 'Nikunj Panchal', '201172', 'others', 'Manager- SIIC', 'B.Tech', '3', 'Robotics and Automation ', 'Idea to Prototype(Technical)', 'Yes', '6 ', 'Yes', '8148606827', 'nikunjpanchal.r@ktr.srmuniv.ac.in', '3.png', '5a6ec8ff7b668', '2018-01-29 07:10:55'),
(5, 'Dr.Varshini Karthik', '100039', 'Department of Biomedical Engineering', 'Hod in charge', 'PhD', '15 years 6 months', 'Biomedical instrumentation', 'Idea to Prototype(Technical)', 'No', '3 hours', 'Yes', '9841582226', 'varshini.k@ktr.srmuniv.ac.in', '5.jpg', '5a717d6881c55', '2018-01-31 08:25:12'),
(6, 'Vijay', '101575', 'Department of Civil Engineering', 'Assistant Professor', 'M.Tech', '5years 2months', 'Structural engineering, civil disciplines', 'Idea to Prototype(Technical)', 'Yes', 'After 3pm and Saturday', 'Yes', '+919952093233', 'vijay.a@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a717d9fe0249', '2018-01-31 08:26:07'),
(7, 'Theresal ', '101239', 'Department of Electronics & Communication', 'APOG', 'ME', '11', 'Optical network ', 'Networking', 'Yes', '3 hours', 'Yes', '8870064620 ', 'theresal.t@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a717e28774ef', '2018-01-31 08:28:24'),
(8, 'Rex Arunraj', '100361', 'Department of Genetic Engineering', 'Assistant Professor SG', 'Ph.D', '19', 'plant biotech, biotechnology ', 'Idea to Prototype(Technical)', 'Yes', '2-3', 'Yes', '9444025651', 'rexarunraj.d@ktr.srmuniv.ac.in', '', '5a717e2f4906a', '2018-01-31 08:28:31'),
(9, 'P. Sandeep koka', '102041', 'others', 'Facility Manager', 'PhD', '3', 'Biotechnology', 'Idea to Prototype(Technical)', 'Yes', '8', 'Yes', '9962886673', 'padma.ra@ktr.srmuniv.ac.in', '', '5a717e5bbbe2d', '2018-01-31 08:29:15'),
(10, 'Dr. S. Premlatha', '17000037', 'School of Business and Management', 'Associate Professor', 'Ph. D', '30 ', 'Strategic management /Marketing/Product and brand Management', 'Product to Market(Business)', 'Yes', '2', 'Yes', '9940354345', 'premlatha.s@ktr.srmuniv.ac.in', '', '5a71806b133ff', '2018-01-31 08:38:03'),
(11, 'SANKARA MOORTHY K', '17000050', 'School of Business and Management', 'Assistant professor', 'M. B. A', '8', 'MARKETING', 'Product to Market(Business)', 'No', '5', 'Yes', '9944942246', 'sankaramoorthy.k@ktr.srmuniv.ac.in', '', '5a71809617a42', '2018-01-31 08:38:46'),
(12, 'Senthilkumar', '101612', 'Department of Genetic Engineering', 'AP Sr.G', 'Ph.D', '10', 'Genomics, Plant tissue culture, Transgenic Plants', 'Product to Market(Business)', 'No', '2', 'Yes', '9443086561', 'senthilkumar.pa@ktr.srmuniv.ac.in', '', '5a71811acb33f', '2018-01-31 08:40:58'),
(13, 'Dr. W. Richard Thilagaraj', '100066', 'Department of Biotechnology', 'Assistant Professor', 'Ph.D', '12', 'Environmental Biotechnology', 'Product to Market(Business)', 'Yes', '4 hours', 'Yes', '+919840712683', 'richardthilagaraj.w@ktr.srmuniv.ac.in', '', '5a71838010fbb', '2018-01-31 08:51:12'),
(14, 'Leenus Jesu Martin', '100515', 'Department of Automobile Engineering', 'Professor', 'PhD', '30', 'IC Engines, Racing Cars..', 'Idea to Prototype(Technical)', 'Yes', '8 hrs', 'Yes', '9940036021', 'leenus.m@ktr.srmuniv.ac.in', '', '5a7183abd9ac3', '2018-01-31 08:51:55'),
(15, 'R. Rajkumar', '101700', 'Department of Computer Science Engineering', 'Assistant Professor', 'M.Tech', '4.5', 'Artificial Intelligence, Internet of Things, Machine Learning, Medical analyics', 'Legal Assistance', 'Yes', 'Daily ', 'Yes', '09894808403', 'rajkumar.ra@ktr.srmuniv.ac.in', '', '5a718467291f1', '2018-01-31 08:55:03'),
(16, 'Rathinam', '100279', 'Department of Electrical and Electronics', 'Assistant Professor -SG', 'PhD', '21', 'Power systems , Machine Learning, Embedded Systems', 'Idea to Prototype(Technical)', 'Yes', '6 pm', 'Yes', '9884238646', 'rathinam.a@ktr.srmuniv.ac.in', '', '5a71863eb0832', '2018-01-31 09:02:54'),
(17, 'Sugam Malviya', 'RA1411020010030', 'Department of Software Engineering', 'Works in wisopt', 'B.Tech', '1', 'Programming', 'Idea to Prototype(Technical)', 'Yes', '1.', 'Yes', '9003753661', 'Sugam@wisopt.com@ktr.srmuniv.ac.in', '', '5a7186a12402a', '2018-01-31 09:04:33'),
(18, 'P.A.Sridhar', '102339', 'Department of Electronics & Instrumentation', 'Assistant Professor (Research)', 'PhD', '10', 'Biomedical electronics and instrumentation', 'Idea to Prototype(Technical)', 'No', '2', 'Yes', '7598227170', 'sridhar.ar@ktr.srmuniv.ac.in', '', '5a718784410e4', '2018-01-31 09:08:20'),
(19, 'Chezhiyan S', '101899', 'Department of Civil Engineering', 'Assistant Professor (O.G)', 'M.E.', '4.5 years', 'Offshore Foundation', 'Others', 'No', 'Day order 4, 9.00am to 12.00 noon', 'No', '9150024670', 'chezhiyan. S@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a718d33cf6f9', '2018-01-31 09:32:35'),
(20, 'Sivanathan K', '100731', 'Department of Mechatronics', 'AP (Sr.G)', 'ME (PhD)', '12+', 'Control Systems, System Integration, Mechatronics,&Autonomous Systems', 'Idea to Prototype(Technical)', 'Yes', '5 hours', 'Yes', '9840123959', 'Sivanathan.k@ktr.srmuniv.ac.in', '', '5a719338807ba', '2018-01-31 09:58:16'),
(21, 'Dr. A. K. JAYANTHY ', '101255', 'Department of Biomedical Engineering', 'Professor ', 'PhD', '23', 'Biomedical Instrumentation ', 'Idea to Prototype(Technical)', 'No', '10hrs', 'Yes', '9841265925', 'jayanthy.k@ktr.srmuniv.ac.in @ktr.srmuniv.ac.in', '', '5a7195b241d59', '2018-01-31 10:08:50'),
(22, 'Vigneshwaran', '101751', 'Department of Mechatronics', 'Asst prof (og)', 'M.Tech', '7', 'Product development', 'Idea to Prototype(Technical)', 'Yes', '3 pm to 5 pm', 'Yes', '9500010208', 'Vigneshwaran.s@ktr.srmuniv.ac.in', '', '5a71968fc6401', '2018-01-31 10:12:31'),
(23, 'Vijayakumar ', '100271 ', 'Department of Electronics & Communication', 'AP(S. G) ', 'M. E', '17', 'Wireless communication, machine learning, signal processing, image processing and embedded system ', 'Idea to Prototype(Technical)', 'No', '2', 'Yes', '7358927171 ', 'Vijayakumar. P@ktr.srmuniv.ac.in', '', '5a7198eee7e69', '2018-01-31 10:22:38'),
(24, 'Dr.Venkatramaiah Nutalapati', '102379', 'Department of Chemistry', 'Research assistant professor', 'Ph.D', '12', 'Sensors, OLEDs', 'Idea to Prototype(Technical)', 'Yes', '6', 'No', '9686807902', 'venkatramaiahnutalapati.v@ktr.srmuniv.ac.in', '', '5a7199a0e38b3', '2018-01-31 10:25:36'),
(25, 'Monika', '101986', 'Department of Electronics & Communication', 'Assistant professor', 'ME', '2 years  6 months', 'Network', 'Organization Development', 'No', 'Day 1 AN', 'Yes', '9566975504', 'monika.r@ktr.srmuniv.ac.in', '', '5a7199fe4994b', '2018-01-31 10:27:10'),
(26, 'Dr. Santhosh Nallapu', '102115', 'Department of Mathematics', 'Assistant professor ', 'Ph. D', '2', 'Fluid dynamics ', 'Others', 'No', 'After 5pm every working day.', 'Yes', '9949082987', 'santhoshnallapu.y@ktr.srmuniv.ac.in', '', '5a719f6a56fb9', '2018-01-31 10:50:18'),
(27, 'lakshmiprabha', '101302', 'Department of Biomedical Engineering', 'Assistant professor(O.G)', 'M.Tech', '6years', 'Medical image processing,Biosignal Analysis', 'Source of Funds/Investors', 'No', 'Day 3', 'Yes', '7299637127', 'lakshmiprabha.p@ktr.srmuniv.ac.in', '', '5a71a9bc1393f', '2018-01-31 11:34:20'),
(28, 'Lavanya S', '101936', 'Department of Information Technology', 'Assistant Professor', 'M.Tech', '3', 'Machine learning, Deep Learning', 'Idea to Prototype(Technical)', 'No', '8', 'Yes', '9629732192', 'lavanya.se@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a71b4021063b', '2018-01-31 12:18:10'),
(29, 'RAJESHBABU CHANDRAN', '101305', 'Department of Computer Science Engineering', 'AP (Sr.G)', 'M.Tech.,', '7 years', 'Computer/Wireless  Networks ', 'Idea to Prototype(Technical)', 'No', 'Day 4', 'Yes', '09994089886', 'rajeshbabu.c@ktr.srmuniv.ac.in', '', '5a71bd2198ec3', '2018-01-31 12:57:05'),
(30, 'Dr Subhransu sekhar Dash', '100276', 'Department of Electrical and Electronics', 'Professor', 'PhD', '20', 'Smart grid Renewable energy', 'Organization Development', 'Yes', '6 hoirs', 'Yes', '9884356933', 'Sekhardash.s@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a71bebf506b2', '2018-01-31 13:03:59'),
(31, 'jeyalaskhmi  r', '100112', 'Department of Chemistry', 'Professor', 'Ph.D', '28', 'Material chemistry', 'Idea to Prototype(Technical)', 'No', '2nd day order after noon', 'Yes', '09444107321', 'Jeyalakshmi.r@ktr.srmuniv.ac.in', '', '5a71cc25b95af', '2018-01-31 14:01:09'),
(32, 'Baburaj Baskar', '101820', 'Department of Chemistry', 'Assistant Professor', 'Ph.d, Post doc.,', '13', 'Biocatalyst, Biotransformation, Biologically active molecules for anti cancer, anti diabetic studies, Biofuels, transition metal catalyst, Asymmetric reduction, Process development and Technology transfer', 'Idea to Prototype(Technical)', 'No', 'after 5 pm', 'Yes', '09444741149', 'baskar.b@ktr.srmuniv.ac.in', '', '5a71cffb50692', '2018-01-31 14:17:31'),
(33, 'Dr S Renold Elsen', '102378', 'Department of Mechanical Engineering', 'Assistant Professor (AP)', 'PhD', '7', 'Innovation and product development.', 'Idea to Prototype(Technical)', 'No', 'After college hours', 'Yes', '09994304360', 'renoldelsen.s@ktr.srmuniv.ac.in', '', '5a71de2002bdf', '2018-01-31 15:17:52'),
(34, 'K.Kalimuthu', '100240', 'Department of Electronics & Communication', 'Assistant Professor(S.G)', 'Ph.D', '14', 'Biomedeical signal processing, wireless sensor netowrks, underwater communication', 'Idea to Prototype(Technical)', 'No', '10Hrs (within the working hours), after working hours and weekend fully', 'Yes', '9841631531', 'kalimuthu.k@ktr.srmuniv.ac.in', '', '5a71fb2a9c3c8', '2018-01-31 17:21:46'),
(35, 'Oinam Robita Chanu', '101624', 'Department of Biomedical Engineering', 'Assistant Professor', 'M.Tech', '4', 'Biomedical', 'Legal Assistance', 'No', 'Week days', 'Yes', '8438196586', 'robitachanu.o@ktr.srmuniv.ac.in', '', '5a71ffdd6166b', '2018-01-31 17:41:49'),
(36, 'Kirthiga Devi', '101951', 'Department of Information Technology', 'Assistant professor (og)', 'Mtech', '2', 'Big data ,machine learning, deep learning ', 'Networking', 'Yes', '4-5', 'Yes', '7395928996', 'kirthigadevi.t@ktr.srmuniv.ac.in', '', '5a7258e94c971', '2018-02-01 00:01:45'),
(37, 'Savaridasan', '101541', 'Department of Information Technology', 'Assistant Professor', 'MTech Information Security', '7 ', 'Cloud Computing Security, Cyber Security, Data Mining, Internet of Things', 'Organization Development', 'No', 'Day order 2 afternoon sessions', 'Yes', '9894560296', 'savaridassan.p@ktr.srmuniv.ac.in', '', '5a7263083b1c2', '2018-02-01 00:44:56'),
(38, 'RAMRAJ', '101871', 'Department of Software Engineering', 'Assistant professor', 'ME', '5', 'Machine learning, Deep learning, software engineering, big data analytics.', 'Idea to Prototype(Technical)', 'No', '5', 'Yes', '9840859557', 'ramraj.s@ktr.srmuniv.ac.in', '', '5a7289b75cd20', '2018-02-01 03:29:59'),
(39, 'Dr.T.Jayanthi', '100040', 'Department of Biomedical Engineering', 'Assistant professor ', 'Ph.d', '10 years', 'Biomedical instrumentation ', 'Idea to Prototype(Technical)', 'No', '2 to 3 hours ', 'Yes', '9840490315', 'Jayanthi.t@ktr.srmuniv.ac.in', '', '5a729ba13f3ba', '2018-02-01 04:46:25'),
(40, 'A.Vinnarasi', '101161', 'Department of Electronics & Communication', 'AP', 'M.tech', '12', 'mobile communication,Embedded systems', 'Idea to Prototype(Technical)', 'No', 'day 2 FN', 'Yes', '9840909572', 'vinnarasi.a@@ktr.srmuniv.ac.in', '', '5a72a382b865e', '2018-02-01 05:20:02'),
(41, 'DR.M.CHITRA', '17000033', 'School of Business and Management', 'ASSISTANT PROFESSOR (Sr.G)', 'Ph.D', '18 YEARS', 'ENTREPRENEURSHIP AND MARKETING', 'Product to Market(Business)', 'Yes', '5 HOURS ', 'Yes', '9894194382', 'chitra.m@ktr.srmuniv.ac.in', '', '5a72b791c8cf7', '2018-02-01 06:45:37'),
(42, 'Dr. S. Chandravathanam', '101626', 'Department of Chemistry', 'Assistant Professor', 'pH. D.', '8', 'Fuel cells, Electrochemical Capacitors, Photocatalytic Conversion of Carbon dioxide', 'Idea to Prototype(Technical)', 'Yes', 'Any working hour between 8am to 4 pm. If required on Saturday', 'Yes', '9884487736', 'chandravathanam.s@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a72bb23da93f', '2018-02-01 07:00:51'),
(43, 'Dr.D.Sattianadan', '100298', 'Department of Electrical and Electronics', 'AP(SG)', 'Ph.D', '15 yrs', 'Power systems', 'Idea to Prototype(Technical)', 'No', '4-5pm', 'No', '9940209579', 'sattianandan.d@ktr.srmuniv.ac.in', '', '5a72d4ba91b42', '2018-02-01 08:50:02'),
(44, 'P.Celina', '17000042', 'School of Business and Management', 'Assistant Professor ', 'MBA', '10', 'Human Resouce', 'Organization Development', 'Yes', '10 hrs', 'Yes', '9566354648', 'Celina.p@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a72dad1a7ecc', '2018-02-01 09:16:01'),
(45, 'Christopher Samuel', '101734', 'Department of Civil Engineering', 'Associate Professor ', 'PhD', '26', 'Environment, Manufacturing', 'Organization Development', 'Yes', '5', 'Yes', '+919940194664', 'christophersamuel.g@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a72df398a779', '2018-02-01 09:34:49'),
(46, 'C.T.MANIMEGALAI', '100224', 'Department of Telecommunication', 'Assistant Professor', 'Ph.D', '20', 'Wireless communications', 'Idea to Prototype(Technical)', 'No', '3 hrs', 'Yes', '8870724854', 'manimegalai.c@ktr.srmuniv.ac.in', '', '5a72e002e2f46', '2018-02-01 09:38:10'),
(47, 'A.Suvarnamma', '101224', 'Department of Electronics & Communication', 'AP', 'M.Tech', '9 years', 'Bio medical signal processing and sensors, Waste management', 'Idea to Prototype(Technical)', 'No', '3 hrs', 'Yes', '9042558167', 'suvarnamm.a@ktr.srmuniv.ac.in', '', '5a72e94fabab5', '2018-02-01 10:17:51'),
(48, 'A. Anilet Bala', '101334', 'Department of Electronics & Communication', 'A.P(O.G)', 'M. E', '5', 'Image processing ', 'Idea to Prototype(Technical)', 'No', '2 hours ', 'Yes', '9841580654', 'aniletbala.a@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a72e9f0622d4', '2018-02-01 10:20:32'),
(49, 'Dr.S.SENTHIL SELVAN', '101671', 'Department of Civil Engineering', 'PROFESSOR', 'Ph.D', '21 years', 'Steel Concrete Composite Structures', 'Organization Development', 'Yes', 'Daily 4.00 pm to 5.00 pm', 'Yes', '9444210026', 'senthilselvan.s@ktr.srmuniv.ac.in', '', '5a72ef07f0b0f', '2018-02-01 10:42:15'),
(50, 'D Kumaran', '101807', 'Department of Mechanical Engineering', 'Assistant Profeasor (Senior Grade)', 'M.E. (Product Design and development)', '17', 'composite Materials, New Product Design and development', 'Idea to Prototype(Technical)', 'No', '1 - 2 hours in the mornings', 'Yes', '9790799585', 'kumaran.d@ktr.srmuniv.ac.in', '', '5a73051acc055', '2018-02-01 12:16:26'),
(51, 'S.Latha', '101503', 'Department of Electronics & Communication', 'Assistant Professor, OG', 'ME', '6', 'Medical Image Processing', 'Idea to Prototype(Technical)', 'No', '3', 'Yes', '09487413951', 'latha.su@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a730b717d8d1', '2018-02-01 12:43:29'),
(52, 'P.Muthu', '101309', 'Department of Biomedical Engineering', 'Assistant Professor', 'M.Tech', '12.7', 'Biomaterials, Medical Image Processing ', 'Idea to Prototype(Technical)', 'No', '3', 'Yes', '9486338640', 'muthu.p@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a730c0dde7f9', '2018-02-01 12:46:05'),
(53, 'Sudarsan', '100146', 'Department of Civil Engineering', 'Assistant Professor', 'PhD', '16', 'Environmental ', 'Idea to Prototype(Technical)', 'No', '4', 'Yes', '09003078348', 'Sudarsan.j@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a73396d59742', '2018-02-01 15:59:41'),
(54, 'Sudarsan', '100146', 'Department of Civil Engineering', 'Assistant Professor', 'PhD', '16', 'Environmental ', 'Idea to Prototype(Technical)', 'No', '4', 'Yes', '09003078348', 'Sudarsan.j@ktr.srmuniv.ac.in', '', '5a7339a972701', '2018-02-01 16:00:41'),
(55, 'Vinothkumar.A', '101654', 'Department of Aerospace Engineering', 'Assistant professor ', 'M.E', '5', 'Unmanned aerial vehicle, drones, rocket propulsion and flight control systems ', 'Idea to Prototype(Technical)', 'Yes', '5.30', 'Yes', '9943570555', 'Vinothkumar.a@ktr.srmuniv.ac.in', '', '5a733ff661e55', '2018-02-01 16:27:34'),
(56, 'T.Karthy', '100821', 'Department of Mathematics', 'Assistant Professor ', 'M.Phil', '13', 'Mathematics ', 'Organization Development', 'No', '3 to 4 hours', 'Yes', '9942404503', 'karthy.t@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a7349ef77b71', '2018-02-01 17:10:07'),
(57, 'K Subha Sharmini', '101290', 'Department of Electrical and Electronics', 'AP Sr Grade', 'M Tech', '16', 'Power electronics and Sustainable Energy', 'Idea to Prototype(Technical)', 'No', '4 to 5 hours', 'Yes', '9443581662', 'subha.k@ktr.srmuniv.ac.in', '', '5a73d91112331', '2018-02-02 03:20:49'),
(58, 'Srilekha MK', '101124', 'Department of Electronics & Communication', 'Assistant Professor (OG)', 'M.E.', '13', 'Career guidance', 'Organization Development', 'No', 'Day order 3', 'Yes', '9840291613', 'srilekha.m@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a73e078aa946', '2018-02-02 03:52:24'),
(59, 'Jeyasekar A', '100171 ', 'Department of Computer Science Engineering', 'Assistance Professor', 'Ph. D', '27', 'Cyber physical system', 'Idea to Prototype(Technical)', 'Yes', 'Daily one hour', 'Yes', '9840127370', 'jeyasekar.a@ktr.srmuniv.ac.in @ktr.srmuniv.ac.in', '', '5a73e49e62dff', '2018-02-02 04:10:06'),
(60, 'K.R.Jansi', '100180', 'Department of Computer Science Engineering', 'Assistant professor (S.G)', 'M.Tech', '13', 'Wireless networks, cloud computing,IoT', 'Idea to Prototype(Technical)', 'Yes', '5 hours', 'No', '9600082712', 'Jansi.k@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a73f17f16d9e', '2018-02-02 05:05:03'),
(61, 'Bhakkiyalakshmi R', '101129', 'Department of Electronics & Communication', 'Assistant professor', 'M.E', '7', 'Guidance', 'Others', 'No', '1 hour', 'Yes', '9841263886', 'bhakkiyalakshmi.r@ktr.srmuniv.ac.in', '', '5a741988973a7', '2018-02-02 07:55:52'),
(62, 'DR.K.SANTHANA LAKSHMI', '17000032', 'School of Business and Management', 'Assistant professor (Sr.G)', 'Ph.D', '20 years', 'HR domain relayed & Legal aspects of business....', 'Networking', 'No', '2 hours', 'No', '9894228738', 'santhanalakshmi.k@ktr.srmuniv.ac.in', '', '5a741e7970079', '2018-02-02 08:16:57'),
(63, 'Manikandaprabhu Sundaramoorthy', '101274', 'Department of Civil Engineering', 'Assistant professor sr.g', 'MSc', '6', 'Concrete technology', 'Idea to Prototype(Technical)', 'No', '8', 'Yes', '9962288244', 'manikandaprabhu.s@ktr.srmuniv.ac.in', '', '5a743ec3e0743', '2018-02-02 10:34:43'),
(64, 'P.Ponnammal', '101314', 'Department of Electronics & Communication', 'Asst professor/O.G', 'M.E ', '11 years', 'Student guidance', 'Idea to Prototype(Technical)', 'No', '1 hour', 'Yes', '8939039058', 'ponnammal.p@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a74799be3ff9', '2018-02-02 14:45:47'),
(65, 'Sundaresan.T', '100622', 'Department of Mathematics', 'Assistant Professor', 'M.Mphil Mathematics', '17Yrs', 'Administration ', 'Others', 'No', '10am to 12noon', 'Yes', '9842459339', 'sundaresan.t@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a74ae4ea17d2', '2018-02-02 18:30:38'),
(66, 'RAJPRASAD.J', '100983', 'Department of Civil Engineering', 'Asst.prof(Sr.G)', 'M.Tech', '8years Teaching 4years on site construction', 'CIVIL', 'Others', 'Yes', '2hours', 'Yes', '9380403006', 'rajprasad.j@ktr.srmuniv.ac.in', '', '5a757ea586117', '2018-02-03 09:19:33'),
(67, 'Sambath', '100424', 'Department of Mathematics', 'Assistant professor - senior grade', 'M.sc. M.Phil, PGDCA, PH. D', '25', 'Organisation of events', 'Financial Management', 'No', '6 hours', 'Yes', '9444451355', 'sampath.p@ktr.srmuniv.ac.in', '', '5a7583f731704', '2018-02-03 09:42:15'),
(68, 'P. Eswaran', '100251', 'Department of Electronics & Communication', 'Assistant Professor (SG)', 'PhD', 'Academic:15 years and Industry: 8 years', 'Multidisciplinary', 'Idea to Prototype(Technical)', 'Yes', '3-5 hours ', 'Yes', '9941498416', 'eswaran.p@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a75f07937ca9', '2018-02-03 17:25:13'),
(69, 'Manigandan M', '102056', 'Department of Electronics & Communication', 'Assistant Professor Ordinary Grade', 'M.E. Mechatronics, PG Diploma IPRPM', '13', 'Embedded System, Computer Vision, Signal Processing, Internet of Things, Patents', 'Idea to Prototype(Technical)', 'No', 'Day Order 4 (AN) and 5(Full day)', 'Yes', '08939708340', 'manigandan.m@ktr.srmuniv.ac.in', '', '5a76a4e37ca1e', '2018-02-04 06:14:59'),
(70, 'Sachikanta Nanda', '100647', 'Department of Civil Engineering', 'Assistant professor (Sir. G.)', 'M.Tech. ', '10', 'RS and GIS, EIA, DISASTER MANAGEMENT', 'Idea to Prototype(Technical)', 'No', '3', 'Yes', '09884081794', 'sachikanta.n@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a77ff192b300', '2018-02-05 06:52:09'),
(71, 'DHANASEKARAN M', '101629', 'Department of Mechanical Engineering', 'ASSISTANT PROFESSOR', 'M.TECH', '6', 'Titanium alloys', 'Idea to Prototype(Technical)', 'No', '5-6 pm', 'No', '7708366813', 'dhanasekaran.m@ktr.srmuniv.ac.in', '', '5a7d249e85363', '2018-02-09 04:33:34'),
(72, 'Meena Parvathy Sankar ', '101178', 'Department of Mathematics', 'Assistant Professor (OG)', 'M.Phil', '12', 'Graph Grammars and P system ', 'Idea to Prototype(Technical)', 'No', '5', 'Yes', '9444104432', 'meena,p@ktr.srmuniv.ac.in@ktr.srmuniv.ac.in', '', '5a807f0cde826', '2018-02-11 17:36:12'),
(73, 'AB', '12345', 'College of Medicine', 'HOD', 'abc', '10', 'Healthcare', 'Idea to Prototype(Technical)', 'No', '5', 'Yes', '1234567890', 'shan@ktr.srmuniv.ac.in', '', '5a82b97349739', '2018-02-13 10:09:55'),
(74, 'M Hariharan', '102189', 'Department of Biomedical Engineering', 'Associate Professor ', 'PhD ', '12', 'AI, biomedical engineering,  healthcare ', 'Idea to Prototype(Technical)', 'No', '4', 'Yes', '9791051613', 'hariharan. m@ktr.srmuniv.ac.in', '', '5a82b97a58047', '2018-02-13 10:10:02'),
(75, 'sdfsdf', 'fsdf', 'Department of Mechanical Engineering', 'ssdfdd', 'fsdfsf', '6', 'sdf', 'Product to Market(Business)', 'Yes', '5', 'Yes', '978465132', 'fsdfd@ktr.srmuniv.ac.in', '', '5ab3e50b0f041', '2018-03-22 17:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` varchar(32) NOT NULL,
  `sender_email` varchar(32) NOT NULL,
  `sender_type` varchar(32) NOT NULL,
  `receiver_email` varchar(32) NOT NULL,
  `receiver_type` varchar(32) NOT NULL,
  `notif_type` varchar(32) NOT NULL,
  `notif_body` varchar(1024) NOT NULL,
  `unread` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` varchar(64) NOT NULL,
  `project_title` varchar(128) NOT NULL,
  `project_requirement` text NOT NULL,
  `project_bp` varchar(64) NOT NULL,
  `user` varchar(64) NOT NULL,
  `team` varchar(16) NOT NULL,
  `project_status` varchar(16) NOT NULL DEFAULT 'unread',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_title`, `project_requirement`, `project_bp`, `user`, `team`, `project_status`, `timestamp`) VALUES
('PR599b178199f01', 'Automated Automobile Purification System(AAPS)', 'We are ready with the prototype, need workspace and some funding to develop the project and launch a team.', 'PR599b178199f01.docx', 'ashfaqahmed_allahpichai@srmuniv.edu.in', 'false', 'rejected', '2017-08-24 16:15:04'),
('PR599f3f0c74170', 'test', 'test', 'PR599f3f0c74170.zip', 'NIKUNJ_PANCHAL@SRMUNIV.EDU.IN', 'false', 'unread', '2017-08-24 21:03:08'),
('PR59a02a4462002', 'Automated Automobile Purification System(AAPS)', 'Workspace\r\nFunding\r\nMentor', 'PR59a02a4462002.docx', 'ashfaqahmed_allahpichai@srmuniv.edu.in', 'false', 'unread', '2017-08-25 13:46:44'),
('PR59a1af2ea235e', 'Overheating free mobile back cover', 'Funding is major requirement .\r\nRest everything else has been already figured out.', 'PR59a1af2ea235e.docx', 'vishal_manoj@srmuniv.edu.in', 'false', 'unread', '2017-08-26 17:26:06'),
('PR59a315d7c4a67', 'TEAM HOVERJET', '1) LAB EQUIPPED WITH BASIC TOOLS LIKE ANGLE CUTTER, ANGLE GRINDER, DRILL MACHINE, ETC, ETC\r\n2) MANGANESE BRONZE ALLOY AND PLATINUM/SEAL / ALUMINIUM ALLOY\r\n3) LITHIUM POLYMER BATTERY\r\n4)BRUSH LESS DC MOTOR\r\n5) CARBON FIBER ROD', 'PR59a315d7c4a67.pdf', 'mayanksati_ma@srmuniv.edu.in', 'false', 'unread', '2017-08-27 18:56:23'),
('PR59e0b2c8c9dff', 'Test', 'test', 'PR59e0b2c8c9dff.docx', 'rohananand_atulanand@srmuniv.edu.in', 'false', 'rejected', '2017-10-27 11:18:32'),
('PR5a758027797b5', 'iwjeksjjk,a', 'sfhkdsjskjdfbbncnscnc \r\nfjdskf,\r\ndfhsjb', 'PR5a758027797b5.doc', 'nikunj_panchal@srmuniv.edu.in', 'false', 'unread', '2018-02-03 09:25:59'),
('PR5a75802a29ccb', 'iwjeksjjk,a', 'sfhkdsjskjdfbbncnscnc \r\nfjdskf,\r\ndfhsjb', 'PR5a75802a29ccb.doc', 'nikunj_panchal@srmuniv.edu.in', 'false', 'unread', '2018-02-03 09:26:02'),
('PR5a87204bc0d7d', 'MINI MOBILE ANTENNA', 'i need guidance of a professor who is good in antennas , network and communication  and a team mate who is good at coding .', 'PR5a87204bc0d7d.docx', 'teerthkoradiya_ramesh@srmuniv.edu.in', 'false', 'unread', '2018-02-16 18:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `research_id` varchar(64) NOT NULL,
  `research_title` varchar(128) NOT NULL,
  `research_report` text NOT NULL,
  `research_requirement` text NOT NULL,
  `user` varchar(64) NOT NULL,
  `team` varchar(16) NOT NULL,
  `research_status` varchar(16) NOT NULL DEFAULT 'unread',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `startup`
--

CREATE TABLE `startup` (
  `startup_id` varchar(64) NOT NULL,
  `startup_title` varchar(128) NOT NULL,
  `startup_bp` varchar(64) NOT NULL,
  `user` varchar(64) NOT NULL,
  `team` varchar(16) NOT NULL,
  `startup_status` varchar(16) NOT NULL DEFAULT 'unread',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startup`
--

INSERT INTO `startup` (`startup_id`, `startup_title`, `startup_bp`, `user`, `team`, `startup_status`, `timestamp`) VALUES
('ST5996e661cc489', 'Cambrionics Life science', 'ST5996e661cc489.docx', 'sudharsan_varatharajan@srmuniv.edu.in', 'false', 'accepted', '2017-08-24 16:59:07'),
('ST5996ee9e92a62', 'SRM Innovation And Incubation Centre', 'ST5996ee9e92a62.pdf', 'nikunj_panchal@srmuniv.edu.in', 'false', 'rejected', '2017-09-05 12:30:56'),
('ST599bb12a683e9', 'Cambrionics Life science', 'ST599bb12a683e9.docx', 'sudharsan_varatharajan@srmuniv.edu.in', 'false', 'accepted', '2017-08-24 16:58:44'),
('ST599c24879b434', 'FizzFlyer', 'ST599c24879b434.docx', 'dipanshugupta_rajeev@srmuniv.edu.in', 'false', 'accepted', '2017-08-24 16:58:51'),
('ST599db991c0c2c', 'E-Rickshaw Rapid Transit System', 'ST599db991c0c2c.pdf', 'harshilpugalia_pr@srmuniv.edu.in', 'false', 'rejected', '2017-09-05 12:31:06'),
('ST599e6c077d92e', 'Taurus Defence Robotics', 'ST599e6c077d92e.pdf', 'vignesh_manim@srmuniv.edu.in', 'false', 'accepted', '2017-08-24 16:59:02'),
('ST599ffdf93b788', 'Bhagwate', 'ST599ffdf93b788.pdf', 'pushansoni_atu@srmuniv.edu.in', 'false', 'rejected', '2017-09-05 12:31:20'),
('ST59a04623ddd4d', 'Tervi', 'ST59a04623ddd4d.pdf', '', '', 'accepted', '2017-08-26 10:31:26'),
('ST59a05b16c3c30', 'FusionEra_Businessplan', 'ST59a05b16c3c30.pdf', 'akbarali_baig@srmuniv.edu.in', 'false', 'accepted', '2017-08-25 18:45:29'),
('ST59a06ebbafd50', 'Universal FoodMaker Machine', 'ST59a06ebbafd50.pdf', 'deep_pareshpatel@srmuniv.edu.in', 'false', 'accepted', '2017-08-25 18:45:08'),
('ST59a083058539d', 'Potable Washing Machine', 'ST59a083058539d.pdf', 'vedant_bhavin@srmuniv.edu.in', 'false', 'accepted', '2017-08-26 10:29:42'),
('ST59a10f0dea7ec', '', 'ST59a10f0dea7ec.pdf', 'souravsharma_harikishan@srmuniv.edu.in', 'false', 'accepted', '2017-08-26 11:20:07'),
('ST59a1619610897', 'nascento', 'ST59a1619610897.pdf', 'aritrabhawani_ajantakumar@srmuniv.edu.in', 'false', 'rejected', '2017-09-05 12:31:32'),
('ST59a193a1d934e', 'TutorIN', 'ST59a193a1d934e.pdf', 'shreysachan_jit@srmuniv.edu.in', 'false', 'rejected', '2017-09-05 12:31:26'),
('ST59a19b2b842c3', 'hg', 'ST59a19b2b842c3.pdf', '', '', 'accepted', '2017-08-26 17:22:23'),
('ST59a1c30464169', '', 'ST59a1c30464169.pdf', 'mayanksati_ma@srmuniv.edu.in', 'false', 'rejected', '2017-09-05 12:31:46'),
('ST59a26ed3b5b79', 'KustomBuggy', 'ST59a26ed3b5b79.pdf', 'rubelpoddar_kashinath@srmuniv.edu.in', 'false', 'accepted', '2017-08-27 10:45:12'),
('ST59a284dfecbdc', 'Project S.A.L.T', 'ST59a284dfecbdc.pdf', 'kartikrana_lalith@srmuniv.edu.in', 'false', 'accepted', '2017-08-27 10:45:03'),
('ST59a2f32b99e51', 'Dudes Gaming Studio', 'ST59a2f32b99e51.pdf', 'abbhivignesh_kandasamy@srmuniv.edu.in', 'false', 'accepted', '2017-08-28 09:38:25'),
('ST59a45eb3d5aec', 'Cambrionics Life science', 'ST59a45eb3d5aec.pdf', 'sudharsan_varatharajan@srmuniv.edu.in', 'false', 'accepted', '2017-09-01 08:09:28'),
('ST59e0b2a1c51b8', 'TEST DO NOT OPEN', 'ST59e0b2a1c51b8.docx', 'rohananand_atulanand@srmuniv.edu.in', 'false', 'unread', '2017-10-13 12:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` varchar(32) NOT NULL,
  `team_email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `team_name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `logo` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `website` varchar(128) NOT NULL,
  `contact` varchar(32) NOT NULL,
  `fb` varchar(128) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_email`, `password`, `team_name`, `description`, `count`, `logo`, `type`, `website`, `contact`, `fb`, `timestamp`) VALUES
('ST599b00a12e387', 'robocon@srmiic.com', 'c64cbfec272df7e84f8a784f8eb77e8c', 'SRM ROBOCON', 'SRM Team Robocon is the Robotics team of SRM University, Kattankulathur, Chennai. We take part in the annual competition ABU Robocon.\n\nWe are a group of students who are deeply interested in Robotics and its varied application in different fields. We have been working on such stuff since our 1st year by participating in different national and international events and competition like Texas Instrumentationâ€™s ADC, Nokia Application Program, Dosa Maker, DRDO Project, advanced personal projects etc . We have also participated in the international robotics competition â€œROBOCON&quot;\n\nMission\na)	For University\nâ€¢	Win in this competition would add laurels to the University.\nâ€¢	More students would be encouraged to participate in such reputed competitions.\nâ€¢	SRM University will be known by international robotics community.\nâ€¢	More companies can come forward for projects and internship proposals.\n\nb)	For Students\nâ€¢	To develop as a versatile engineer and nurture innovative ideas and technical skills.\nâ€¢	To gather the collective ideas of the young budding engineers and to be able to implement it.\nâ€¢	To create an atmosphere of learning.\n\nAnd thus we will be representing our college on an International level and will be exposing the students of the present and upcoming batches to the high international technical standards.', 0, 'ST599b00a12e387.jpg', 'team', '', '', '', '2017-11-09 14:03:58'),
('ST5a053355db7e7', 'solution@squarepig.in', 'a83095e4ff577ea699ae15a10459ced1', 'SquarePig', 'OUR TEAM- \r\nWE ARE THE TEAM OF 5 PEOPLE \r\n1. TWO 3rd YEAR STUDENT OF AUTOMOBILE (SRM KTR, SRM NCR)-  CEO, MARKETTING DIRECTOR.\r\n2. ONE PROFESSIONAL WEB DEVELOPER FROM DIFFERENT STATE AND COMPANY.\r\n3. ONE WAREHOUSE MANAGER FROM DIFFERENT STATE AND COLLEGE.\r\n4. ONE MARKETTING MANAGER FROM DIFFERENT STATE AND COLLEGE\r\n\r\nWHAT WE DO-\r\n1.	WE HAVE BUILT A ONE OF A KIND COLLABORATIVE E-COMMERCE PLATFORM FOR ARTISTS AND BUYERS TO PROVIDE ACKNOWLEDGEMENT TO THE HIDDEN ARTISTS OF INDIA, ARTISTS CAN START EARNING ENDLESSLY BY UPLOADING A PICTURE OF HIS/HER ARTWORK. WE PROCESS THE UPLOADED IMAGES AND MAKE IT CANVAS PRINTABLE AND EVERYTIME SOMEONE BUYS IT A SPECIFIC AMMOUNT ADDS UP INTO ARTISTâ€™S BANK ACCOUNT. ALL THEY NEED TO DO IS JUST UPLOAD A PICTURE AND THATâ€™S IT!\r\n*SELLER DOESNâ€™T NEED TO COURIER THEARTWORK TO THE BUYER, UPLOADING A PICTURE IS ALL THEY NEED TO DO. \r\n2.	WE HELP POOR HANDICRAFT VENDORS TO SELL THEIR HANDICRAFTS ON OUR PLATFORM BECAUSE THEY ARE USUALLY SKILLED IN MAKING A MASTERPIECE BUT THEY DONâ€™T KNOW HOW TO SELL IT SO WE PROVIDE THEM A PLATFORM TO SHOWCASE AND SELL THEIR HANDICRAFTS.\r\n3.	WE SELL POSTERS AS A SECONDARY STREAM TO KEEP OUR BUSINESS RUNNING ON FOR WALL DÃ‰COR AND WE DESIGN POSTERS FOR COMMERCIAL PURPOSE FOR FREE OF COST, BUYER JUST HAD TO PAY THE POSTER COST!\r\n4.	WE SELL HIGH QUALITY POSTERS AT THE CHEAPEST PRICE AVAILABLE ONLINE/OFFLINE WHICH ALLOWS OUR PRINTING PARTNER AN OPPORTUNITY TO EARN AND WITH INCREASE OF DEMAND EMPLOYMENT INCREASES AS WELL.\r\n5.	WE ARE FOCUSSED TO BRING BACK THE INTEREST OF YOUTH INTO INDIAN CULTURE THROUGH INDIAâ€™S ARTISTIC ABILITY BY SELLING THE ARTWORK, REPRESENTING THE CULTURE OF SPECIFIC STATE AND CITY.\r\n\r\nACHIEVEMENTS-\r\n1. WE HAVE A STARTUP RECOGNITION LETTER FROM STARTUP INDIA (DIPP), GOVERNMENT OF INDIA\r\n2. OUR SITE IS LIVE AND WE ARE AT EARLY TRACTION STAGE.', 0, 'ST5a053355db7e7.jpg', 'team', 'www.SquarePig.in', '8218627919', 'www.fb.com/squarepig.in', '2017-11-29 19:45:54'),
('ST5a054490149b6', 'info@cambrionics.com', 'd05841cc4593f3b6b4dcd0d6304b119f', 'Cambrionics Life Science', 'â€˜Extending the limits of science and exploring the unknown is always exciting â€¦â€™\r\nWe are Cambrionics Life science, a community of amateur biologists, tinkerers, science lovers, Tony Starks, and Bruce Banners who have banded together to bring biology beyond the walls of laboratory. \r\nIndependent Research and DIY science has been our backbone in building knowledge. We believe that science should not be bound within the laboratories, and has to be available to ALL. Our goal is to decode and democratize this technology, putting tools into the hands of those who are keen to learn and explore. â€œBiology for ALLâ€ is our motto. We try to bring science closer to people like you and ME through our innovations.\r\n\r\nWe successfully organized Rare disease Day for the cause of genetically affected kids. We have applied for provisional patent for our products. We made our first sales of our merchandises during a national level conference. We have our first client SRM Public School accepting our edutainment module which will start from June 2018.', 0, 'ST5a054490149b6.jpg', 'team', '', '', '', '2017-11-11 05:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `team_invites`
--

CREATE TABLE `team_invites` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `authkey` varchar(128) NOT NULL,
  `valid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_invites`
--

INSERT INTO `team_invites` (`id`, `email`, `authkey`, `valid`, `timestamp`) VALUES
(1, 'nikunj.mechatronics@gmail.com', '645d6dd8c48706397a208a3e53c308a4', 1, '2017-09-22 16:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `uid` varchar(64) NOT NULL,
  `team_id` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`uid`, `team_id`, `status`, `timestamp`) VALUES
('S5998692fe65e2', 'ST5998677088027', 'requested', '2017-08-19 18:45:56'),
('S598fe7fbda566', 'ST599b00a12e387', 'requested', '2017-08-21 15:48:21'),
('S5a054ec139a23', 'ST5a052f7e32384', 'requested', '2017-11-10 10:14:39'),
('S5a0604f4e0fb5', 'ST5a05cb1aa5bde', 'requested', '2017-11-10 20:03:54'),
('S5a808c7a08490', 'ST5a20ddaec2d18', 'requested', '2018-02-11 18:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` int(11) NOT NULL,
  `status` varchar(16) NOT NULL DEFAULT 'unset',
  `authkey` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `role`, `status`, `authkey`, `timestamp`) VALUES
('S598fe7fbda566', 'nikunj_panchal@srmuniv.edu.in', '7694f4a66316e53c8cdd9d9954bd611d', 3, 'set', '422ef2ce0660b60cf7d7f361f5951039', '2018-04-01 13:55:49'),
('S598fe85167188', 'sayan_prabalkanti@srmuniv.edu.in', '72d78b6caa93bf268eb0099c1fa4219f', 3, 'set', '4e5bf534327de7599713726e5619015a', '2017-08-13 14:57:51'),
('S5992b9acd03a7', 'rohananand_atulanand@srmuniv.edu.in', '12ac8ea33ed0e6992e4bd801d29e5bae', 3, 'set', 'b948bce624b21f15625ad3c83eb97345', '2017-08-15 09:07:49'),
('S59969a9d3f5dd', 'saireddy_tharun@srmuniv.edu.in', '3b58dfbc35a49fe0078fec3a0fe7d524', 3, 'unset', '74d13a3cbb73f21ed72eafd28c590d81', '2017-08-18 07:43:25'),
('S59969ae85beb8', 'subhojyoti_subhajit@srmuniv.edu.in', '8afa17d95d9c6aba404ebe78ed2ba2bf', 3, 'unset', '43241f945def8d52f0f31aa84948281c', '2017-08-18 07:44:40'),
('S59969aedea595', 'unmesh_manojingle@srmuniv.edu.in', '68c2fe03b2cb99cbd0de2b4ec090c127', 3, 'set', 'a76176501d9ad17008ca6a1840f44e18', '2017-08-18 07:45:04'),
('S59969bc008019', 'adityasingh_de@srmuniv.edu.in', 'fffaf1228adacbf4514fc97d9ef41eae', 3, 'set', '39a9446ddf421e961b950b812102f1b6', '2017-08-18 07:50:14'),
('S59969c7c180ce', 'devanshiarora_bharatbhushan@srmuniv.edu.in', 'a5bcf25c271a5ba1489c3a9d14a7459e', 3, 'unset', 'c3ca343136977d3733653090623f85e4', '2017-08-18 07:51:24'),
('S59969ddd1d60c', 'sudharsan_varatharajan@srmuniv.edu.in', '3e0434144473eb9aa1afcf15d5a0e814', 3, 'set', 'c840f1fe607e230f93ce1b52627c3443', '2017-08-18 07:58:13'),
('S5996a13d466fd', 'skushagra29@gmail.com@srmuniv.edu.in', '6d380cad1d0104c8f49b384b3093a1d1', 3, 'unset', '624874fd96eeed5cf69b2f66301ec5f7', '2017-08-18 08:11:41'),
('S5996a40011cac', 'harshilpugalia_pr@srmuniv.edu.in', '0dec692af7e43a9d5815eb398d6200b7', 3, 'set', '8e5847552e48e26da9875f51bfc000dc', '2017-08-18 08:24:42'),
('S5996a83d467c8', 'Kartikluthra_s@srmuniv.edu.in', '7c97af616de4550a3ff1068bfd732321', 3, 'set', '9e0475876e04f69e58f770734927fa07', '2017-08-18 08:42:07'),
('S5996aad65a000', 'sanjana_gopalen@srmuniv.edu.in', 'd601d62f493e3314f363e999f1257393', 3, 'set', '3cad444a26fffa7cff5914a01b7b8b85', '2017-08-18 08:52:57'),
('S5996af30a4c41', 'ashutoshupadhyay_v@srmuniv.edu.in@srmuniv.edu.in', '933f568e3294b5fea1efc5c670cc86ec', 3, 'unset', '44f480fc101704a3c345c5c6e611acd2', '2017-08-18 09:11:12'),
('S5996b25428576', 'ashutoshupadhyay_v@srmuniv.edu.in', '18da09a4d1a922a1d82d56b6510ee4a7', 3, 'unset', '415dbd79f5830cb0dfa971dc75759ae5', '2017-08-18 09:24:36'),
('S5996b2e51628e', 'rajasingh_sh@srmuniv.edu.in', '0b0ff967571c2ab5a31be7ed138ba384', 3, 'set', '63234db6bf64923b4f50ed00dff1f3c6', '2017-08-18 09:27:19'),
('S5996b6e09a9a8', 'raghavsobti_rajiv@srmuniv.edu.in', '48212c357e8b1fd5328ffb3eebf8cf39', 3, 'unset', '14fbea68f70c55808fc4703b3e368789', '2017-08-18 09:44:00'),
('S5996bb476b87e', 'dishajain_r@srmuniv.edu.in', 'be7a0c222fe015186f4758cc031724ad', 3, 'set', 'ec7472af552c05343743d79256cfcc3b', '2017-08-19 09:40:33'),
('S5996c4a924edc', 'sruthilaya_s@srmuniv.edu.in', '4fb5df428727e5f14f08db41cf6f10dc', 3, 'set', 'caa5e2b7175f4cb255b43232eec45313', '2017-08-18 10:46:23'),
('S5996caee1bbf6', 'saurabhmenon_ra@srmuniv.edu.in', '60a006b7ca00dc749c5fc19e875da627', 3, 'unset', '19eb7a7e91362d4b76c8eda0ca17e821', '2017-08-18 11:09:34'),
('S5996d4cc65493', 'mayank_dutt@srmuniv.edu.in', '6c858e187e8e7672243237224f337e7b', 3, 'unset', '3811fca660cd95d3f66ba5ce4ed0edf0', '2017-08-18 11:51:40'),
('S5996dfe2205d4', 'jeanojoseph_vin@srmuniv.edu.in', '2a50c1ec91b2a6d00041e4a74a6a0eb6', 3, 'set', 'd875c7db1839bfb105952fc728f5b10b', '2017-08-18 12:39:17'),
('S5996ed5736008', 'anirudh_jeetendra@srmuniv.edu.in', '702c78babb913edb4ca6f4550d589d5e', 3, 'set', '460a90fc9f3579cc86475df98f8d2fa0', '2017-08-18 13:37:21'),
('S5996edd141315', 'harshineesriram_sriram@srmuniv.edu.in', 'a2fb4ee73e84a5fe9c21ac6b68f4df7f', 3, 'set', '7fabc370e383765d746d80c744e2860f', '2017-08-18 13:40:07'),
('S5996f6df789cf', 'drishtide_jayatosh@srmuniv.edu.in', '8dbd2cc0b142590fb80b6a0f665adbad', 3, 'set', 'c3b4d42ab2d1fb71c2559372c681dbbb', '2017-08-18 14:44:11'),
('S5997054d5b10d', 'shreysachan_jit@srmuniv.edu.in', 'd649cf1aa713c9e459acb413c80ae5f8', 3, 'set', 'bbbca52d0b5f590ac07004e13e128ef6', '2017-08-18 15:21:30'),
('S59971036907bf', 'seelamsiva_schandra@srmuniv.edu.in', 'a33171cc2e2c8707605c4c84d8627cb4', 3, 'set', '3fec43a1062a7e09736542bb63ace2d2', '2017-08-18 16:05:44'),
('S5997340696dda', 'Satrudhan_kumar@srmuniv.edu.in', 'e464d62c96a567406a35a4801c9587aa', 3, 'set', '7f5523039abbdf22404507790f882725', '2017-08-18 18:42:45'),
('S59973ce32d473', 'ranvijaytanwar_raj@srmuniv.edu.in', '91efe3cfb110214bcad61e01ad6c1c8e', 3, 'unset', 'f19cae378af2ba4b883bba4486ca617c', '2017-08-18 19:15:47'),
('S59974102f0530', 'ritvik_gajendra@srmuniv.edu.in', '8cd40ecc135ed458bd75dcd3fb25576c', 3, 'set', '6b9e1ec3843be15b722bc5e0b83f0843', '2017-08-18 19:34:35'),
('S599743c2171b0', 'Harshkumar_hemantkumar@srmuniv.edu.in', 'af52763bf20b3f19660867632699e931', 3, 'set', '5eba3e11c04815cf76ddb567a682a94c', '2017-08-18 19:45:22'),
('S5997482a3b825', 'shashvatagarwal_rup@srmuniv.edu.in', '40a097b8bd7254e0ae2d7688c3119c7e', 3, 'set', '222fc83cd2c39214e503f7dcdc48240d', '2017-08-18 20:07:02'),
('S5997551c1b5fb', 'lakshit_pargal@srmuniv.edu.in', '9250a079fa5304318d78baedc0850d21', 3, 'set', 'c06875ebdbe5f3660c6a144942bf4ade', '2017-08-19 06:56:03'),
('S5997e11e8bdd5', 'sonish_biswal@srmuniv.edu.in', 'bd318ebf57230616cc44bf371008e7c5', 3, 'set', '2e081ed990465195f6a40a881228938a', '2017-08-19 06:56:50'),
('S5997f15776b48', 'shikharchandnani_dwa@srmuniv.edu.in', '534176449a455726f70cecb153c504f4', 3, 'set', 'd49916376383191d4bf9105fdfa7004e', '2017-08-19 13:39:51'),
('S5997f62606638', 'fake@srmuniv.edu.in', '12ac8ea33ed0e6992e4bd801d29e5bae', 3, 'unset', '3332612d6437c117c2ed8402f7bac7b0', '2017-08-19 08:26:14'),
('S5997fce154bd9', 'mohnish_s@srmuniv.edu.in', 'e5fcc6f226d553a00601accfee21ea67', 3, 'set', '9e04dcd3b37ea4ad179ca936b77cfeaf', '2017-08-19 08:55:33'),
('S599803520a918', 'vennamsai_rajendra@srmuniv.edu.in', 'bae1ba6744924703589adac769bfcbf3', 3, 'set', '41c1b4aa49bd8c668cf81ef0918e95f8', '2017-08-19 09:24:30'),
('S59985b58d3854', 'abhishek_joseph@srmuniv.edu.in', 'd0ae57c3698cb49c69983d9ab0ec22a5', 3, 'set', '2d24cd1e94ae5a0c5adc17ec8dc7f4ed', '2017-08-19 15:38:47'),
('S59986614cb91e', 'sreeharisathyapal@gmail.com@srmuniv.edu.in', 'a123195ec7ef931a1194ec97980c15db', 3, 'unset', '043b3a2bb497c11c016b58ce39787d19', '2017-08-19 16:23:48'),
('S5998692fe65e2', 'sreehari_sathyapal@srmuniv.edu.in', 'a123195ec7ef931a1194ec97980c15db', 3, 'set', 'ba38e6169aa904e66ac5a840e545621b', '2017-08-19 18:41:56'),
('S5998a6f72444a', 'riteshbhat_chandnarayan@srmuniv.edu.in', 'b4af804009cb036a4ccdc33431ef9ac9', 3, 'set', '9f8ce5e4b7875f2da966d6f134abeafd', '2017-08-19 21:01:52'),
('S599909e3ab095', 'innou.vishal@gmail.com@srmuniv.edu.in', '95023bfdc51aa92c7876e6a2d21ce756', 3, 'unset', 'b28f3e97b95da581ca2db125f43410ff', '2017-08-20 04:02:43'),
('S59990cb332155', 'vishal_manoj@srmuniv.edu.in@srmuniv.edu.in', '6654c664078ded78b75b79bcddc0c483', 3, 'unset', '7f3934143fa05b988d685b904692e594', '2017-08-20 04:14:43'),
('S599914b57d618', 'Kamali_kannan@srmuniv.edu.in', '43f2a4aa0837b0a8ebe3b5a55874434a', 3, 'set', '25da8421fbd5868cfedb8e66d1165651', '2017-08-20 04:50:38'),
('S59992c733c705', 'parichaymukherjee_pratap@srmuniv.edu.in', '9465867925ba497588720a7941db234c', 3, 'set', '3f7a107c2187445def1a6f7f15c529bf', '2017-08-20 06:31:27'),
('S5999608217615', 'Krishna_ravi@srmuniv.edu.in', '67e345ee6d075de47e43451dc0281c83', 3, 'set', '36cd7f928d4e061e63341e4a529a41ec', '2017-08-20 10:13:17'),
('S5999878ee77b6', 'guganithi_js@srmuniv.edu.in', '7da86aae0ecc41eb351373af16211427', 3, 'set', '24f6d3a530fb1fe44c9e028df84c7d96', '2017-08-29 06:39:44'),
('S5999b25a70692', 'pushansoni_atu@srmuniv.edu.in', '4031d86a58edfce5b24500a3be3cf8c1', 3, 'set', '30894b4b305e35a3ebe6bf0e519c5f98', '2017-08-20 16:04:10'),
('S5999d87ba1800', 'shaikhahtesabullah_n@srmuniv.edu.in', 'fc1999616f7c199478731b2e3e44c055', 3, 'set', 'd1eb386dc87cb4c1b085d05cd4880eef', '2017-08-20 18:44:44'),
('S599a679cdf2d5', '@srmuniv.edu.in', 'd41d8cd98f00b204e9800998ecf8427e', 3, 'unset', '96f43f04fba413838a652f7f86cac12e', '2017-08-21 04:54:52'),
('S599ac3812f046', 'Purushotham_ramesh@srmuniv.edu.in', 'c7470f33c214ad89306572c059677ef2', 3, 'unset', '224d227938ba4426cf91ed6a42b6a103', '2017-08-21 11:26:57'),
('S599ac7625c83d', 'Purushotham_ramesh@srmuniv.edu.in@srmuniv.edu.in', 'c7470f33c214ad89306572c059677ef2', 3, 'unset', 'd13e3290549a1bad094cd286a86bcbe5', '2017-08-21 11:43:30'),
('S599b10ff548d8', 'ashfaqahmed_allahpichai@srmuniv.edu.in', 'a319a6e5a80c62a9169ceaf2fe344b14', 3, 'set', '10570384215d8e7e332f60833b703ac7', '2017-08-21 16:57:57'),
('S599b1b4e33d43', 'yogeswaran_ganapathy@srmuniv.edu.in', '1c3b85846c254990deb6d11faf90dd38', 3, 'set', 'f84d708d2a94dee103be55dcc8289d9b', '2017-08-21 17:58:21'),
('S599be99f29ff7', 'rajasekar_p@srmuniv.edu.in', '843ca64c9d35ff0f7dbe9dbd902b38fb', 3, 'set', '4309ad602a96e2da548f0f3df5b4e521', '2017-08-22 08:22:15'),
('S599c21a203564', 'dipanshugupta_rajeev@srmuniv.edu.in', '860081f8a265434811924649947895b0', 3, 'set', '22213b9e980b918035cf4e77604bb518', '2017-08-22 12:21:10'),
('S599c5295cbcbe', 'abhirupbose_partha@srmuniv.edu.in', '22c784bb96a83bb2c0189ba1d26fd53b', 3, 'set', '9a16622a49eb3d3d915a1ef7b1c12042', '2017-08-22 15:52:54'),
('S599c657ea3da4', 'digendrakumar_rajesh@srmuniv.edu.in', 'ae44d047ef1d7cf5566164132fd9ba8c', 3, 'set', '53c1e609adce1f19c37a48ee5513d11c', '2017-08-22 17:10:48'),
('S599d7fc096758', 'aritrabhawani_ajantakumar@srmuniv.edu.in', '99ea640f10106bbd25fec070f15373ca', 3, 'set', '76362cae230250f7e217dfee69efc01a', '2017-08-23 13:16:53'),
('S599dc5ea65220', 'dheemanth_reddy@srmuniv.edu.in', 'd64428c0734282f6dfcdc9dfd8d49844', 3, 'set', '6b6d4c0592a9732aaeb006504534a729', '2017-08-23 18:14:25'),
('S599dd0fe074f0', 'souravsharma_harikishan@srmuniv.edu.in', 'd86bb1edddd0f8eb3fa19835eca5ae98', 3, 'set', '80d9385972b30796ef48ad49b4d520f8', '2017-08-23 19:07:04'),
('S599e68f17779f', 'vibhakar_se@srmuniv.edu.in', '8c8b11d62532ed35bdf4171ebf543574', 3, 'unset', '4e69dfd186c485f15257af3026106708', '2017-08-24 05:49:37'),
('S599e6a313ed54', 'vigenesh_manim@srmuniv.edu.in', '8c8b11d62532ed35bdf4171ebf543574', 3, 'unset', '55daa4749e811ca75d27b81841231705', '2017-08-24 05:54:57'),
('S599e6b0f8ac61', 'vignesh_manim@srmuniv.edu.in', '8c8b11d62532ed35bdf4171ebf543574', 3, 'set', 'a684aac1719d02d4ba8ad51c0a2fea47', '2017-08-24 05:58:53'),
('S599e82d998d4e', 'viditnaithani_vinay@srmuniv.edu.in', 'b3d72bbe42445cd82f970d4304376d22', 3, 'unset', 'b3cbf69dd3aa0d16217cb1f6910a2c46', '2017-08-24 07:40:09'),
('S599eee85bfc71', 'Rubelpoddar_kashinath@srmuniv.edu.in', 'bd0d28cdb7676ee26d78d51b31d1ad08', 3, 'set', '38730ccb8a4f29c936b4e5c6075be400', '2017-08-24 15:23:58'),
('S599fe2fa78770', 'sugam_malviya@srmuniv.edu.in', '6c2fdd3c2d6cafebad6675c52e54b8a7', 3, 'set', '8d352e2697ec2302588f16b99c0fcf1f', '2017-08-25 08:43:02'),
('S599fe450f2d58', 'aniketghosh_ashimkumar@srmuniv.edu.in', 'dbfd44bbda4f80c3c4fd2dc31c83eda6', 3, 'set', '074fba07ef7e2b2774a89b2320598754', '2017-08-25 10:01:32'),
('S599ff9961290a', 'survesh_balaji@srmuniv.edu.in', '847d689634a14917966116a0b77492cd', 3, 'set', '9462b77d90bd2a74ef21e4b995e3eb1b', '2017-08-25 10:19:16'),
('S59a0271036db2', 'swathi_lenin@srmuniv.edu.in', '7f53ea7d071305dd4a89f70ae34481cd', 3, 'set', 'c4e076067ee57117e39db7370ea94eea', '2017-08-25 13:35:41'),
('S59a034c897504', 'vedant_bhavin@srmuniv.edu.in', '4c1c4cec320a345e06c7c4fa67fb85be', 3, 'set', '997d6fa0063c22d90e86e59d91b8e05b', '2017-08-25 14:33:48'),
('S59a04c7c5a9e0', 'akbarali_baig@srmuniv.edu.in', 'd60bc1339c046980924c85adf811f5d6', 3, 'set', '660767f17ab4a201b7d31b1ea67ef21c', '2017-08-25 16:14:38'),
('S59a062b96fb44', 'deep_pareshpatel@srmuniv.edu.in', 'dbc9a75196d08a94161ee140b84b39ee', 3, 'set', '46c25a26cc863c87abbc6f6d1803ec8f', '2017-08-25 17:48:25'),
('S59a088631cd59', 'durgesh_joshi@srmuniv.edu.in', 'aa9d97e6e5934f863456c947332b9dc9', 3, 'set', '7e9cebcc7901acad340ceeded1ec77e8', '2017-08-25 20:36:00'),
('S59a105b02baec', 'mihir_gupta@srmuniv.edu.in', '4b756d348647eb26ec46646ef109c085', 3, 'unset', '748e9972d84a5e36422af953c4bca378', '2017-08-26 05:22:56'),
('S59a120c97a293', 'yashmandloi_prakash@srmuniv.edu.in', '6d2d5992f437f03c7ba59a6997e4021f', 3, 'set', 'f1a0066991c1b6b860c841016daf1e41', '2017-08-26 07:18:50'),
('S59a15ca54df9a', 'vishal_manoj@srmuniv.edu.in', '95023bfdc51aa92c7876e6a2d21ce756', 3, 'set', '65c67a9bf5d7476f0a27cf4ad64d0e5e', '2017-08-26 11:34:22'),
('S59a16baebad15', 'abbhivignesh_kandasamy@srmuniv.edu.in', '464f404c47c699c01d718c86a7e2ec60', 3, 'set', '5b4d46689a6340c6777b4019e52a3a8c', '2017-08-26 12:38:39'),
('S59a178312198e', 'kartikrana_lalith@srmuniv.edu.in', '18f159f32a778f7d11c5b0a374e83672', 3, 'set', '548d70e11108b9b37b4d90d76fb1c7d4', '2017-08-26 13:32:24'),
('S59a17e1b6e7b2', 'narasimha_madhu@srmuniv.edu.in', 'b3f42cde7f902fae61494df125146c5f', 3, 'set', '43c23b931f8c0508d8571a11236e3270', '2017-08-26 13:57:09'),
('S59a1b4022dbcd', 'sivashanmugam_shiva@srmuniv.edu.in', '0f3b15fc0cbf87ce6a7078751777ef32', 3, 'set', '84fd2f7c069635e5c6a1e7842abefe39', '2017-08-26 17:47:16'),
('S59a1b92bec36d', 'mayanksati_ma@srmuniv.edu.in', '08fe4ca606305c3c6567e5b7407a9eb8', 3, 'set', 'ad5200e9f9d2d5d4d0d519ee79e8fcd6', '2017-08-26 18:10:58'),
('S59a1bada7de78', 'garvitgupta_de@srmuniv.edu.in', 'd7dbbc4763040dcfe055966443a0f214', 3, 'set', '780d598b55220cd65b0ea7d5a9e63f7b', '2017-08-26 18:16:19'),
('S59a1bdbb6ae1d', 'amangoel_rakesh@srmuniv.edu.in', 'ec62cc224b617476c5edec8829792b05', 3, 'set', 'a80fd0d6f0f3079ff4510143c9d60496', '2017-08-26 18:32:07'),
('S59a2e4ae13e7f', 'pratik_goutam@srmuniv.edu.in', '599567a25697f7fe28ba59f025f07113', 3, 'unset', '524281a95a3418b833a675c0b9662263', '2017-08-27 15:26:38'),
('S59a44988ddefd', 'abhilashadey_ab@srmuniv.edu.in', 'e3b945795826c46ecacf3500f4f08a70', 3, 'set', 'b6f4f16a5a6f6262272681dd79c66d15', '2017-08-28 16:49:30'),
('S59a845c126004', 'Kadam_h@srmuniv.edu.in', '87b8282f7d3f7206518e7e83946095ca', 3, 'unset', '7e7215a74da6acfc43a15c901bc57b58', '2017-08-31 17:22:09'),
('S59aa52e209436', 'manojkumar_mu@srmuniv.edu.in', '9085e00971ab914026e2edf04935c2c7', 3, 'set', '2d1f9ed6bd424fd9b34119dd58ac2a51', '2017-09-02 06:43:53'),
('S59ae96e07d253', 'Sreejathumma_mohan@srmuniv.edu.in', '380f43098d377b1705af989748de525f', 3, 'set', 'b3c828f844e875d353c93e3934d145c8', '2017-09-07 07:34:55'),
('S59b6e5b4035bd', 'aishvary_khandelwal@srmuniv.edu.in', '48f9f14d505eb97b45306888642c1cd3', 3, 'set', '6ce955371a1624e4b52ca1346641130c', '2017-09-11 19:38:18'),
('S59b7ebd4a9815', 'bishwaroop_ba@srmuniv.edu.in', 'b5a0249b0e7bf3af0f87e7cfc036c586', 3, 'set', 'b69d4a0f27d2d803b267d2c059ab3b89', '2017-09-12 14:19:20'),
('S59c135eeb6167', 'gokulakrishna_ka@srmuniv.edu.in', '7701a21b9e7979f8a272203133066d28', 3, 'set', 'ae57e9c802de3b5470edc02213408657', '2017-09-19 15:26:06'),
('S59c25c39ab140', 'bvanthian_tbalasubramanian@srmuniv.edu.in', '2c3830c887c3c90450558cce8cae8629', 3, 'unset', '38f7ab700902a9185aee705aaf745fb7', '2017-09-20 12:16:57'),
('S59ca4ccd18914', 'mehulsingh_man@srmuniv.edu.in', 'f4eed03a99ccad90662fe893423e0527', 3, 'unset', '405bfce5a2e13a5c2623f8810549bca5', '2017-09-26 12:49:17'),
('S5a052f4c94873', 'abishek_pal@srmuniv.edu.in', '5419f4ca1858fdb2c92c441160168613', 3, 'set', '30de8be5061050ceacf74d7626377cec', '2017-11-10 04:47:26'),
('S5a054ec139a23', 'raunak_pramod@srmuniv.edu.in', 'a37a6963f94b166bb431dede76801870', 3, 'set', 'cb1532493ecfab0c7c157f23f37961b7', '2017-11-10 07:01:59'),
('S5a0582be33c05', 'vineeth_lakshmanarao@srmuniv.edu.in', '45bb8defd4fa9448f15ab723fd8b1d53', 3, 'set', '02f56974e6908208d96aff416634f2ef', '2017-11-10 10:43:27'),
('S5a059146ef39f', 'yashwanth_subrahmanyam@srmuniv.edu.in', '354d97c4c022cf9f3ab9f2c94a516156', 3, 'set', 'e88651ea20cf84d72820e348272a707e', '2017-11-10 11:45:34'),
('S5a05e8d3d1760', 'tuhin_sengupta@srmuniv.edu.in', '060829a6ec813d2e9fb115708c5ff4f9', 3, 'set', '9609e736a84b52fa55b49ccb0d75a84e', '2017-11-10 18:00:14'),
('S5a05ea1b47bb6', 'akhilnichani_rajesh@srmuniv.edu.in', '9876895cd0d5b94db0a56d3bb44bec0b', 3, 'set', 'e3dd7502bf589a010b6836a9cdda7af0', '2017-11-10 18:11:03'),
('S5a0604f4e0fb5', 'muthu_pitchamuthu@srmuniv.edu.in', '84ac01be4dd384ce826dc60e08ebe304', 3, 'set', '6c59ef00633ead3d3c13470e11299dbe', '2017-11-10 19:59:24'),
('S5a0694e485e99', 'rahini_pugazhendhi@srmuniv.edu.in', 'aee3d7e12beb50bbf9234c3ad347079a', 3, 'unset', 'ccd1f90f310f54867fbb61480ae088cd', '2017-11-11 06:12:52'),
('S5a06cac915a81', 'ranjithkumar_ravinder@srmuniv.edu.in', '1587c6838ed605ae5f529c8cbb2b9c19', 3, 'set', '6ca37ecaf4b36ba8ee7a2317001486eb', '2017-11-11 10:05:02'),
('S5a07d41ef2744', 'sudiptabx@srmuniv.edu.in', '59a6dfebdefdd7301864536f47dfc3c5', 3, 'unset', '4f2eb5befe7dbddd002504a2b391f3f1', '2017-11-12 04:54:54'),
('S5a0aa8576bc35', 'sudarshan_ts@srmuniv.edu.in', '0072bd3998e6f68cda3888b80e071ba7', 3, 'unset', '9f9945bed5b16b18c9a38fb9fa9049d6', '2017-11-14 08:24:55'),
('S5a0e858eccc27', 'yashrajshrivastava_na@srmuniv.edu.in', '43334ea284165ca73be0c963b9b8c6f5', 3, 'set', 'cc1b6b175629080cb8311b6c067211da', '2017-11-17 06:50:07'),
('S5a131924da4fb', 'harinarayanan_sh@srmuniv.edu.in', '5021205526c1d4eab614f152f2430247', 3, 'set', 'd3b7e24bbfbd455327037859f42d8878', '2017-11-20 18:11:03'),
('S5a192691781fa', 'ZAP@srmuniv.edu.in', '903a98d709fa4683aaaa036b84c125a6', 3, 'unset', 'cb8a9310237bb018265b0b05ca9505a9', '2017-11-25 08:15:13'),
('S5a20e28c7033c', 'gundumalle_sushanth@srmuniv.edu.in', '1c45cd04b2ece5a6723b2a3eacf53c96', 3, 'set', '977e2d946fd357f1bf5feeb713a44026', '2017-12-01 05:14:39'),
('S5a4f1315adcf4', 'surbhit_sumesh@srmuniv.edu.in', 'b66132402c99feaaa59e917b130594c1', 3, 'set', '162bc7d705e2c92d5843ed0e54ada0b9', '2018-01-05 05:55:05'),
('S5a4fa4e670f34', 'sidhdharth_siva@srmuniv.edu.in', 'adb1cf47c191984d90cc57abe4e5f6f3', 3, 'set', 'abfe41a2637267cbd095cf37864eae5e', '2018-01-05 16:18:02'),
('S5a60410cf0b0b', 'shubham_saurav@srmuniv.edu.in', '02adda0e64ee0cbbcef4373618c4eb1f', 3, 'set', 'ce5af78205cd4e7ff8730748a1b44d14', '2018-01-18 07:00:10'),
('S5a660010293aa', 'pinakisaha_ab@srmuniv.edu.in', '1cb7ae1ada319e3353a09889e9992835', 3, 'unset', '276f375603fbdf137ce8e8c4ea23b600', '2018-01-22 15:15:28'),
('S5a75be1d1aea5', 'rahulkumar_ramadhar@srmuniv.edu.in', '4e78c0f3351988707b3cf3d62cf585e7', 3, 'set', '939d74ded15c025b5d7871b8df7b85ce', '2018-02-03 13:54:46'),
('S5a7600fbf17c7', 'nalluri_bharath@srmuniv.edu.in', 'ce53059bc0fef4754000316f72f6e733', 3, 'set', 'c8f8261e26caa52e20534875dc88bfb1', '2018-02-04 02:42:21'),
('S5a7618a0f4003', 'ma_mat@srmuniv.edu.in', 'd71e31ce8fd906d1ecc7562eaec93195', 3, 'set', 'bd1120d521e1fab1613fe1e8ec41bcb3', '2018-02-03 20:20:48'),
('S5a7687d1e2c4e', 'aakashgupta_vinod@srmuniv.edu.in', '6baf7304c0ce8a80dcf34cb88e6d8867', 3, 'unset', '7ad84c4b4d30222228bfb1c17ec8f522', '2018-02-04 04:10:57'),
('S5a76c8d9972fe', 'Anurag_akhilesh@srmuniv.edu.in', 'e66832a62cacfaebc48b42995dcae88f', 3, 'set', 'adb65ebf51cdfae0236bde79e05d468d', '2018-02-04 08:53:19'),
('S5a76c9aeb395c', 'tejomurthula_tejomurthula@srmuniv.edu.in', '55dbe6bbdc0f226761ed75628408c1df', 3, 'set', '0fd8417ddcc0911d3d024582752cda00', '2018-02-04 14:15:25'),
('S5a76cbf31c812', 'shubhamsarangi_nrusinha@srmuniv.edu.in', '5e992ee9bbe4fb1fb01a82684712c1ee', 3, 'set', '5a1009c3597e2364511ee9e8cb64058d', '2018-02-04 09:07:53'),
('S5a76cfb518a86', 'debanjanmandal_anup@srmuniv.edu.in', '8002bc5744770c6395dfeec2458c1830', 3, 'set', '586c0bdba899dfa5548772c175780c8f', '2018-02-04 09:29:20'),
('S5a76ef1356952', 'sunilkhatri_r@srmuniv.edu.in', 'df4d1db892831085e14948b911e86893', 3, 'set', '5bcd10fc99efb10e20e1b3267bc29233', '2018-02-04 11:35:51'),
('S5a770c1be3bf6', 'ashutoshmishra709@srmuniv.edu.in', '372ce187f49cbe1470c3fe057c4afd74', 3, 'unset', 'b10864fe6a6ad729838df925d503ef53', '2018-02-04 13:35:23'),
('S5a789f732349c', 'ritvik_narayan@srmuniv.edu.in', '8cdb7fee827deaf069f3ff4d8e48bd23', 3, 'set', 'e6cffd042b4c3d06be8317780dccbf6c', '2018-02-05 18:23:37'),
('S5a789f9bef750', 'Karar_imtiyaz@srmuniv.edu.in', '75b43eac8d215582f6bcab4532eb854e', 3, 'set', '624f9c120cdb9165f1f2a602df78cc1a', '2018-02-05 18:21:16'),
('S5a79b12b6d2da', 'abdulrehman_sadique@srmuniv.edu.in', '928382a9aa11fb8db0f5a17e27984583', 3, 'set', 'e2844ecf09073c92e3f53adce551b125', '2018-02-06 14:07:16'),
('S5a7bf6723f6d2', 'teerthkoradiya_ramesh@srmuniv.edu.in', '81f97d80549ae0c48c6241f613b4ba41', 3, 'set', 'd3c08ad79dc22e80373eb17d5f2a7bbe', '2018-02-08 08:13:51'),
('S5a7e1d25d25e8', 'sonakshi_sonakshi@srmuniv.edu.in', 'b3d544d5b828fbed2f770aaba14f1c9c', 3, 'set', 'fde0337d65cd303d766282ce5c55208b', '2018-02-10 05:29:26'),
('S5a80289566bc5', 'Soham_chakraborty@srmuniv.edu.in', 'aab8aabf7761cf33d874ea25eb76744c', 3, 'set', 'a81c4fe9b8ea4134f11c4033e201601b', '2018-02-11 11:31:55'),
('S5a808c7a08490', 'ssameer_sureshkumar@srmuniv.edu.in', 'd524813536b71639999ba12bdb3621a8', 3, 'set', 'ee19463b9160a79634ef6882710830de', '2018-02-11 18:37:57'),
('S5a8197190b77b', 'rohith_m@srmuniv.edu.in', '5177d1f829d5d81473fb6b5941f06710', 3, 'set', 'c60a37d81b95af51018374e53f506b5d', '2018-02-12 13:36:19'),
('S5a830fb7c401e', 'adhirajchakravorty_rubul@srmuniv.edu.in', '0ac2fad749a21d0c16eddf834b2792f9', 3, 'set', 'fa587359cf537447b01e0a7ce266d612', '2018-02-13 16:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `uid` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `register_no` varchar(32) NOT NULL,
  `dept` varchar(128) NOT NULL,
  `year` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `dob` varchar(32) NOT NULL,
  `skills` text NOT NULL,
  `address` text NOT NULL,
  `hobbies` text NOT NULL,
  `achievements` text NOT NULL,
  `experience` text NOT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`uid`, `email`, `name`, `register_no`, `dept`, `year`, `description`, `dob`, `skills`, `address`, `hobbies`, `achievements`, `experience`, `avatar`, `timestamp`) VALUES
('S598fe7fbda566', 'nikunj_panchal@srmuniv.edu.in', 'Nikunj Panchal', '201172', 'SRM innovation and incubation Centre', '3', '', '02-05-1991', 'Robotics, Designing , Product Designing ,Development', 'MSQD, Chennai', 'Chess, Cricket, Football', '', '', 'S598fe7fbda566.jpg', '2017-08-18 13:39:41'),
('S598fe85167188', 'sayan_prabalkanti@srmuniv.edu.in', 'SAYAN BERA', 'RA1411001010128', '603203', '4', 'F', '19-03-1995', 'CMO', 'HOUSE NO. 30, PILLIYAR KOIL STREET, POTHERI, KANCHEEPURAM DIST., CHENNAI-603203', 'Foodaholic', 'Abc', 'A to Z', 'S598fe85167188.jpg', '2017-08-13 05:49:05'),
('S5992b9acd03a7', 'rohananand_atulanand@srmuniv.edu.in', 'Rohan Anand', 'RA1411008010252', 'IT', '4', 'Maybe later', '17-10-1996', 'Full Stack Web developer', 'G 306 Abode Valley', 'gaming', 'Hackathons', 'lots :)', 'S5992b9acd03a7.jpg', '2017-08-15 09:06:52'),
('S59969ae85beb8', 'subhojyoti_subhajit@srmuniv.edu.in', 'Subhojyoti Ganguly', 'RA1511014010078', 'Genetic engineering', '3', 'I am a third year genetic engineering student. I am very much  interested in creating a startup, which would focus on bioengineering and its positive applications on the society as well as in the defence sector.', '31-12-1995', 'Innovative, hard working', 'C39/B.S Estate/D road, Anil sur path/ Kadma', 'Driving, swimming', 'Passed 12th standard', 'Worked in Tata hospital in the pathology department', 'S59969ae85beb8.jpg', '2017-08-18 07:44:40'),
('S59969aedea595', 'unmesh_manojingle@srmuniv.edu.in', 'UNMESH Manoj Ingle', 'RA1611001010006', 'Civil Engineering', '2016', 'Wanted to make a building structure with lowest cost so that every person dreams of making home will be not that much expensive. Aiming for the low cost structure in the world with lots of durability , and worked in all weather conditions .', '23-02-1999', 'Business oriented', 'N103,Abode valley, kakkan street  potheri,chennai', 'Gyming , badminton and reading biographies', 'Yet to be achieved', 'Non', 'S59969aedea595.jpg', '2017-08-18 07:44:45'),
('S59969bc008019', 'adityasingh_de@srmuniv.edu.in', 'Aditya Singh', 'RA1711003010112', 'CSE', '1', '', '28-09-2000', 'imaginative , programming', '765/6 Jagriti Vihar,', 'photography', '', '', 'S59969bc008019.jpg', '2017-08-18 07:48:16'),
('S59969ddd1d60c', 'sudharsan_varatharajan@srmuniv.edu.in', 'Sudharsan V', 'RA1411014010088', 'Genetic Engineering', '2014', '', '29-08-1996', 'Graphic designing, independent researcher', '', 'reading books, blogging', 'Mudhalvan Award - Honeybee club, JENESYS fellowship', 'Founder Cambrionics Life science, various research projects, Fellow at IISC', 'S59969ddd1d60c.jpg', '2017-08-18 07:57:17'),
('S5996a13d466fd', 'skushagra29@gmail.com@srmuniv.edu.in', 'Kushagra Singh', 'RA1511007010044', 'Chemical', '2017', '', '07-11-1997', 'Leadership , workaholic , positive projection', 'Flat no 612 A block Safa apartments guduvancherry', 'Cricket , movies , adventures', '', '', 'S5996a13d466fd.jpg', '2017-08-18 08:11:41'),
('S5996a40011cac', 'harshilpugalia_pr@srmuniv.edu.in', 'Harshil Pugalia', 'RA1511003010549', 'CSE', '3', 'Well I can tell this in verbal too lazy to write about myself!', '26-10-1995', 'Coding, Computer Vision, AppDeveloper, image editting', '2147, Estancia', 'Reading Book, Swimming, Learning new spoken languages!', 'Olympiad School Rank 1 in maths and science,  Got 1st prize for project sensor network in physics project exhibition in 1st year', 'Did training about organisational computer network set-up at NTPC', 'S5996a40011cac.jpg', '2017-08-18 08:23:28'),
('S5996a83d467c8', 'Kartikluthra_s@srmuniv.edu.in', 'Kartik', 'RA1611002010943', 'MECHANICAL', '2', '', '23-09-1998', 'Planning', '1117 Estancia tower 1 core 2', 'Reading, dancing, swimming', 'National level dancer', 'Nil', 'S5996a83d467c8.jpg', '2017-08-18 08:41:33'),
('S5996aad65a000', 'sanjana_gopalen@srmuniv.edu.in', 'Sanjana Sarma', 'RA1411002010380', 'Mechanical', '4', '', '16-03-1996', 'SolidWorksâ„¢, ANSYS, C++, PRO-E.', 'FLAT NO.2025, TOWER 2, ESTANCIA APARTMENTS, NEAR ZOHO CORPORRATION, GUDUVANCHERRY, CHENNAI-603203, TAMIL NADU', 'Dancing, Reading, Writing.', 'Presented an abstract on the topic helical coil heat exchangers for IIT CHEMCON,  Presented a paper on the topic thermoelectric cooling system for commercial purposes for SRM Research day, Completed a project on the topic  Efficiency analysis of different radiator models.', 'Interned at BGR ENERGY SYSTEMS LTD, Interned at SIGMA-PI POWER sources Pvt ltd a defense electronics  company.', 'S5996aad65a000.jpg', '2017-08-18 08:52:38'),
('S5996b2e51628e', 'rajasingh_sh@srmuniv.edu.in', 'Raja singh', 'RA1711008010300', 'IT', '1', 'I am raja Btech 1St year student and i am from bihar And  i am co founder of Educare- nurturing future mind .It works as help desk which gives advice to the students regarding their career,Admission,course selection and any query related to study and i am also a co founder of Equity which helps the homeless and job less people.I also work as a motivator.I motivated others through number of speech.i want to work for betterment of other people so that i am joining siic.', '05-09-1999', 'motivator', 'At -Kolasi,dist-Katihar,State-Bihar,854106,India', 'Reading biography', 'co founder of Educare(Help desk) and Equity(Help desk)', '3 Month', 'S5996b2e51628e.jpg', '2017-08-18 09:27:01'),
('S5996bb476b87e', 'dishajain_r@srmuniv.edu.in', 'Disha', 'RA1711013010080', 'Biomedical engineering', '1', 'Im disha jain studying in SRM and want to become a researcher!', '18-11-1999', 'Little kungfu,little drawing,singing', '11-34-3,balaji nivas,kutumbarao street,vijayawada-520001', 'Playing', 'N/A', 'N/A', 'S5996bb476b87e.jpg', '2017-08-18 10:02:47'),
('S5996c4a924edc', 'sruthilaya_s@srmuniv.edu.in', 'Sruthilaya S', 'RA1511008010249', 'IT', '3', '', '15-12-1996', 'Basketball player', '42,KPR layout 3rd street ,singanallur,Coimbatore-05', 'Singing,books', 'State level Basketball player', '6 years', NULL, '2017-08-18 10:42:49'),
('S5996dfe2205d4', 'jeanojoseph_vin@srmuniv.edu.in', 'Jeano Joseph V', 'RA1511002010069', 'Mechanical', '-3', 'Constantly in search of innovation to contribute and be a part of.', '24-03-1997', 'Creative Designer,', 'Q405, Abode Valley, Potheri, Chennai-603203', 'Music, Books and the World Wide Web.', '', 'Designer at Feynman Tech, Project Pedal.', 'S5996dfe2205d4.jpeg', '2017-08-18 12:38:58'),
('S5996ed5736008', 'anirudh_jeetendra@srmuniv.edu.in', 'Anirudh Singh Chundawat', 'RA1511011010156', 'Automobile', '3', '', '27-07-1997', 'CAD, CAM, Composites Engineering, Web development', 'S-405, Abode Valley, Kakkan Street, Potheri, Near SRM University', 'Business studies, Reading (non-fiction)', '', '', 'S5996ed5736008.png', '2017-08-18 13:36:23'),
('S5996edd141315', 'harshineesriram_sriram@srmuniv.edu.in', 'Harshinee Sriram', 'RA1611003010489', 'Computer Science and Engineering', '2', 'Hi! I am nineteen years old and I am currently pursuing Computer Science and Engineering in SRM University, Kattankulathur. Being brought up in 12 States and nurtured by over 15 schools across India, I developed interests in communicating with a computer, giving way to coding, and sharing my thoughts and wildest theories with the populace, via writing. I write for others, portrayed through freelancing, and I write for myself, showcased through my personal blog: www.thelittlesoflife.wordpress.com', '24-07-1998', 'Android development, Content writing, Creative writing, Sales and Marketing', '409, Kalpana Chawla International Hostel, SRM University', 'Writing, Coding, Singing, Reading.', 'Secured gold medal among 1000 entries in school level essay writing  competition organised by Tata Consultancy Services.', 'Intern at the Climber under Sales and Marketing domain, Android Application Developer of Aakash Research Labs, Freelance writer at Upwork.', NULL, '2017-08-18 13:38:25'),
('S5996f6df789cf', 'drishtide_jayatosh@srmuniv.edu.in', 'DRISHTI DE', 'RA1611003010583', 'CSE', '2016', '1. A topper from Meghalaya Board of School Education (MBOSE) :\r\na). 5th Position holder in SSLC -2014\r\nb). 3rd Position holder in HSSLC (Science)- 2016\r\n2.. Awarded by Rashtriya Hindi Vikas Sammelan , Shillong- 793006, Meghalaya for best performance in Hindi in the year 2014\r\n3. Won number of prizes in essay writing, poetry writing, speech competition etc.', '09-12-1998', 'Fluent and effective Communication - also learning German language', '1. SRM Address: Room No. 409, Kalpana Chawla International Hostel, SRM Ladies Hostels, SRM University, Kattankulathur, Kanchipuram - 603203, Tamilnadu | 2. Home Address: C/o. Prof. Jayatosh De, Head &amp; Associate Professor, Dept of Chemistry, Don Bosco College, Tura- 794002, Meghalaya', 'Reading , trying innovative ideas,', 'Inplant training in BSNL', 'Attending and participating in KJP Automation workshop on Arduino.', 'S5996f6df789cf.jpg', '2017-08-18 14:17:03'),
('S5997054d5b10d', 'shreysachan_jit@srmuniv.edu.in', 'Raghav Sobti', 'RA1611008010791', 'Information Technology', '2', '', '14-02-1997', 'Photoshop, Creative writing', 'VGN Southern Avenue, A308', 'Reading books, Making To Do, Writing, Listening and Brainstorming.', '', '1 year experience with my project', 'S5997054d5b10d.jpg', '2017-08-18 15:18:37'),
('S59971036907bf', 'seelamsiva_schandra@srmuniv.edu.in', 'Siva naga sai', 'RA1611003010065', 'Cse', '2', 'Name: Siva naga sai\r\nPh no: 8124581384\r\nEmail:sai.17.2.1999@gmail.com\r\nDob:17021999\r\nAge:18', '17-02-1999', 'Beginner programming in c,c++,pearl,python and networking,basics of hacking', 'A5/6 penna colony, belkatur, rangareddy,501158', 'Code compiling,surfing in internet for hacking and entertainment', 'None', 'None', 'S59971036907bf.jpg', '2017-08-18 16:05:10'),
('S5997340696dda', 'Satrudhan_kumar@srmuniv.edu.in', 'Satrudhan kumar sah', 'RA1711002010244', 'MECHANICAL', '1', 'Hoverbike helps in many aspect\r\nWe will be free from traffic\r\nTime consumer..\r\nWill be 1 st peoject in india 1st time', '14-02-1997', 'Techanical', 'Oori hostel room no.419 third floor', 'Making Drone', '', 'Since i making drone from 10 class', 'S5997340696dda.jpg', '2017-08-18 18:37:58'),
('S59974102f0530', 'ritvik_gajendra@srmuniv.edu.in', '1nf1kn1ght', 'RA1611019010099', 'ASE', '2', '', '16-03-1998', 'non aware', 'Dr B.C HOSTEL', 'designing systems and machines , gaming, cycling, muzic, jokes', 'none', '???', 'S59974102f0530.jpg', '2017-08-18 19:33:23'),
('S599743c2171b0', 'Harshkumar_hemantkumar@srmuniv.edu.in', 'Harsh Modi', 'RA1711003010137', 'C.S.E', '1', 'I am an enthusiastic person with good sense of humor and a very jolly nature. I can participate in model making and provide as well as learn new ideas and experiences from it.', '31-10-1999', 'Good in technical ideas for projects.', '504/Nelson Mandela', 'Traveling, creating new models, reading poetry.', 'State level selected for science project, selected for club in SRM', 'Worked with teams in science fair, participated in science projects for 4 years.', 'S599743c2171b0.jpg', '2017-08-18 19:45:06'),
('S5997482a3b825', 'shashvatagarwal_rup@srmuniv.edu.in', 'Shashvat Agarwal', 'RA1511002010682', 'Mechanical', '3', '', '09-09-1998', 'Punctual', 'B-202 V G N SOUTHERN AVENUE KAVANUR', 'Music', '', '', 'S5997482a3b825.jpg', '2017-08-18 20:03:54'),
('S5997551c1b5fb', 'lakshit_pargal@srmuniv.edu.in', 'Lakshit Pargal', 'RA1711002010410', 'Mechanical', '1', 'My name is Lakshit.', '29-12-1998', 'I can build new things, innovative mind.', '1948 sonipat, Haryana.', 'Building new gadgets.', 'Was called at an international science conference to present my research work', 'Just some knowledge through Google. Have build many things.', 'S5997551c1b5fb.jpg', '2017-08-18 20:59:08'),
('S5997e11e8bdd5', 'sonish_biswal@srmuniv.edu.in', 'SONISH BISWAL', '9090872352', 'CSE', '1', 'I want a chance to proof something. I think my idea will not able to attract you but if u help me then I may develop myself for future use', '02-02-1999', 'creativity and can generate some idea if work under any team', 'KAARI BOYS HOSTEL', 'sports', 'nothing', 'nil', 'S5997e11e8bdd5.jpg', '2017-08-19 06:56:30'),
('S5997f15776b48', 'shikharchandnani_dwa@srmuniv.edu.in', 'Shikhar Chandnani', 'RA1511004010704', 'ECE', '3', 'I would describe myself as someone who is honest, caring, intelligent, hardworking, and ambitious. I have a great sense of humour. I am an easy going person &amp; donâ€™t get easily disturbed by downâ€™s in my life. I also enjoy travelling, watching movies, going out for dinner, and having great intellectual conversations!', '24-12-1997', 'Hard worker, helpful, confident', 'Sannasi hostel,SRM university, chennai', 'Sports', 'Won in an aarush event', '-', 'S5997f15776b48.jpg', '2017-08-19 08:05:43'),
('S5997f62606638', 'fake@srmuniv.edu.in', 'Fake', 'RA1411008010252', 'IT', '3', 'as', '02-09-2017', 'asd', 'abcde', 'asd', 'asd', 'asddsadsa', 'S5997f62606638.jpg', '2017-08-19 08:26:14'),
('S5997fce154bd9', 'mohnish_s@srmuniv.edu.in', 'S.Mohnish', 'RA1711013010001', 'Biomedical engineering', '2017', 'I am a first year student ,I am interested in pharma industry/biomedical industry', '20-06-1999', 'Communication , logical thinking,leadership,', 'Bf4 ambrosia apartments Ganapathy nagar semmencherri Chennai 600119', 'Football', '', '', NULL, '2017-08-19 08:54:57'),
('S599803520a918', 'vennamsai_rajendra@srmuniv.edu.in', 'Sai Sameer Vennam', 'RA1611003010429', 'Computer Science', '2', 'I am a second year Undergraduate Student in Computer Science. My hobbies are reading books,Watching Tv shows and just having fun generally.', '11-03-1999', 'C,C++,Python', 'Flat no 2, Sudha residency,Ramannapet 1st line', 'Reading books', '', '', 'S599803520a918.jpg', '2017-08-19 09:22:26'),
('S59985b58d3854', 'abhishek_joseph@srmuniv.edu.in', 'ABHISHEK JOSEPH', 'RA1411003010755', 'COMPUTER SCIENCE AND ENGINEERING', '4', 'I am very much passionate about Entrepreneurship and have been trying out Entrepreneurial activities since my class 8th. I personally feel that there is a need of change in Education sector and am working in the same domain to bring a change in the system and the society.', '22-10-1996', 'MARKETING, SALES, PLANNING, STRATEGY IMPLEMENTATION, AND ORGANISER', 'CHRIST THE KING INTER COLLEGE, GANDHIPURAM AGRA ROAD TUNDLA DIST FIROZABAD UP INDIA 283204', 'PLAYING GUITAR AND KEYBOARD', 'MICROSOFT CERTIFIED PROFESSIONAL FOR MS POWERPOINT 2013', 'WORKED IN 3 STARTUPS BEFORE AS THE CO-FOUNDER AND CURRENTLY THE FOUNDER OF LEVEL INFINITE EDU-TECH STARTUP', 'S59985b58d3854.jpg', '2017-08-19 15:38:00'),
('S59986614cb91e', 'sreeharisathyapal@gmail.com@srmuniv.edu.in', 'Sreehari Sathyapal', 'RA1711002010354', 'Mechanical Engineering', '2017', '', '26-11-1998', 'Photography, Entrepreneurship, Communication, Driving', 'Thekkumpurath House, Sukapuram PO, Edappal, 679576', 'Photography, Travelling, Sketching', '', 'Entrepreneurship, Photography.', NULL, '2017-08-19 16:23:48'),
('S5998692fe65e2', 'sreehari_sathyapal@srmuniv.edu.in', 'Sreehari Sathyapal', 'RA1711002010354', 'Mechanical Engineering', '2017', '', '26-11-1998', 'Photography, Entrepreneurship, Communication, Driving', 'Thekkumpurath House, Sukapuram PO, Edappal, 679576', 'Photography, Travelling, Sketching', '', 'Entrepreneurship, Photography.', 'S5998692fe65e2.jpg', '2017-08-19 16:37:03'),
('S5998a6f72444a', 'riteshbhat_chandnarayan@srmuniv.edu.in', 'Ritesh Bhat', 'RA1411008010272', 'Information Technology', '4', 'hackSlanger Online..!!', '17-09-1996', 'Hybrid App Development, Web Development, Data Anaysis', 'Chennai, SRM university', 'Novel Collection', 'Winner @ Save The hacker hackathon by Freshdesk (Fan Fav App)', '&lt;team_lead&gt; @ Think-Digital', 'S5998a6f72444a.jpg', '2017-08-19 21:00:39'),
('S599914b57d618', 'Kamali_kannan@srmuniv.edu.in', 'Kamalikannan', 'RA1711014010013', 'Genetic engineering', '2017', '', '25-11-1999', 'Sketching', 'No 1 , kings flat, elumalai street, George colony, Tvk nagar , Perambur, Chennai 600011', 'Painting', 'State trophy in chess', '2years', 'S599914b57d618.jpg', '2017-08-20 04:48:53'),
('S59992c733c705', 'parichaymukherjee_pratap@srmuniv.edu.in', 'Parichay', 'Ra1411005010035', 'EEE', '4', 'I am doing my 4th year in EEE, B.tech.I am running a successful textile business along with my teamates and now we are planning to start a micro scale manufacturing industry in Tamil Nadu.', '24-06-1996', 'Marketing and Leadership', 'G-304,Abode valley', 'Reading books and Travelling', 'Commencia 1st place', 'Running a business in textile and  doing trading', 'S59992c733c705.jpg', '2017-08-20 06:30:11'),
('S5999608217615', 'Krishna_ravi@srmuniv.edu.in', 'K M S KRISHNA YAZI', 'RA1411003010324', 'Cse', '2014', '', '25-01-1997', 'Basic coding, Ms office, Speaking, Management, Writing', '1098, Estancia, Guduvancheri, Chennai - 603203', 'Reading novels', 'Honorable Mention at NASA Ames space settlement contest 2013', '', 'S5999608217615.jpg', '2017-08-20 10:12:18'),
('S5999878ee77b6', 'guganithi_js@srmuniv.edu.in', 'J.S.Guganithi', 'RA1711008010232', 'IT', '1', '', '24-05-1999', 'Drawing', '2/84A, masilamani street,, palavakkam', 'Badminton', 'Won the intertournament qatar', '', 'S5999878ee77b6.jpg', '2017-08-20 12:58:54'),
('S5999b25a70692', 'pushansoni_atu@srmuniv.edu.in', 'Pushan soni', 'RA1511002010418', 'Mechanical', '3', 'I dream big. According to me if a person cannot dream big, he is just an ordinary one. With the will and power, a person can achieve everything and anything he dreams of. I am a God loving person. I believe in human equality. Each and everyone is equal and everyone has the right to the things that nature has provided us. We people are here on this earth to beautify the glory of nature, not to destroy it. This reflects my sincere concern towards our nature. I love to meet new people and learn something good from each one of them. I have a quality of self-realisation in which I regularly work on my wrong behaviour and try to fix them.\r\nâ€œA PERSON WHO LEARNS FROM HIS MISTAKES IS INTELLIGENT BUT THE PERSON WHO LEARNS FROM THE MISTAKES OF OTHERS IS THE REAL GENIUS. â€œ\r\nI listen to all, but I do what my heart and mind says to me. I do care for people who care for me and also for those who care for others.\r\nâ€œNOT MONEY, CHARACTER IS A MANâ€™S REAL ASSET.â€\r\nI am a business minded person and I believe in doing business in good faith. Money and assets earned by kicking the rights of poor are next to sin. A gentleman is who, which takes the whole world with him to the path of prosperity and serves each and everyone till his last breath.', '02-10-1997', 'leadership, product development, management etc', '2172 estancia towers guduvancherry', 'Collecting quotes said by famous personalities, reading about technology and grasping general knowledge', 'started a Company on my own', 'Worked with AIESEC in sales and external relations, Interned at many manufacturing industries', 'S5999b25a70692.jpg', '2017-08-30 09:38:59'),
('S5999d87ba1800', 'shaikhahtesabullah_n@srmuniv.edu.in', 'Aman Shaikh', 'RA1711002010237', 'mechanical engineering', '1', '*Team of 5 people\r\n*3 mechanical students\r\n   1 computer science student\r\n   1 mechatronics student\r\n*Young and aspiring  entrepreneurs\r\n*accommodation- NRI premium hostel, SRM university, kattankulathur\r\n* planning to develop an app and website, need your guidance and help', '10-01-2000', 'Public Speaking, communication and negotiation, Leadership, professionalism, Debate skills, interpersonal skills, networking', 'room no 205, Nri premium, SRM university, kattankulathur, chennai, tamil nadu, 603203', 'Read biographies, books, chess, watch space documentaries,  write research papers', 'student of the year in previous school (mumbai)', 'none', 'S5999d87ba1800.jpg', '2017-08-20 18:44:11'),
('S599b10ff548d8', 'ashfaqahmed_allahpichai@srmuniv.edu.in', 'Ashfaq Ahmed', 'RA1611002010903', 'Mechanical', '2', 'A mechanical engineering student passionate about working on different projects irrespective of the domains ,especially on green energy projects.', '07-11-1997', 'Technical skills like Coding, 3d modelling, soldering, and good communication skills', 'No.55 Mohanapriya nagar, Guduvancheri, Kanchipuram dt. Pincode:603202', 'Coding, working on projects, reading books', 'Won first prize in Techknow competition.', 'Participated in national level science exhibition during school days, working on projects with college mates. No experience of working in any srm teams.', 'S599b10ff548d8.jpg', '2017-08-21 16:59:27'),
('S599b1b4e33d43', 'yogeswaran_ganapathy@srmuniv.edu.in', 'Yogeswaran G', 'RA1611002010795', 'Mechanical engineering', '2', 'Always yearn to learn!', '25-10-1998', 'Inquisitive', 'D4 Santha Enlave, 10 Chakrapani Street Guindy Chennai 600032', 'TV, social media , newspapers', 'None', 'None', 'S599b1b4e33d43.jpg', '2017-08-21 17:41:34'),
('S599be99f29ff7', 'rajasekar_p@srmuniv.edu.in', 'Rajasekar_2017', 'RA1711008010390', 'IT', '1', 'I have talent but I have no chance to show my talent', '08-11-1999', 'Business minded,knowledge.', 'C/9,Arasunagar colony,Ariyalur', 'Sports', 'National player', '', 'S599be99f29ff7.jpg', '2017-08-22 08:27:57'),
('S599c21a203564', 'dipanshugupta_rajeev@srmuniv.edu.in', 'Dipanshu Gupta', 'RA1411020010151', 'SWE', '4', '', '15-02-1996', 'Leadership, Decisive and many more', '13/840 ramanandi, saraffa bazar', 'Travelling and gaming', '', '', 'S599c21a203564.jpg', '2017-08-22 12:20:50'),
('S599c5295cbcbe', 'abhirupbose_partha@srmuniv.edu.in', 'Abhirup Bose', 'RA1611008010644', 'Information technology', '2', '', '17-07-1998', 'Robust Technical skills in web development, and excellence in managerial and leadership skills', 'Doshi Symphony,velachery tambaram main road chennai-600100', 'Computer Programming , movies, fashion', 'I have always been in the top percentile in class, won state level table tennis competition', 'Years of research on how to start my own company', 'S599c5295cbcbe.jpg', '2017-08-22 15:49:41'),
('S599c657ea3da4', 'digendrakumar_rajesh@srmuniv.edu.in', 'Digendra Kumar Sahu', 'RA1611008010516', 'Information Technology', '2', '', '11-08-1999', 'Market management, Team management', '3105, Tower 3, Estancia apartment, near zoho corporation, Guduvanchery, Kanchipuram Dt. Tamilnadu, India 603203', '', '', '', NULL, '2017-08-22 17:10:22'),
('S599d7fc096758', 'aritrabhawani_ajantakumar@srmuniv.edu.in', 'aritra bhawani', 'RA1611005010335', 'EEE', '2', 'Myself Aritra Bhawani, a second year engineering student at SRM university. \r\nCurrently working with a startup in IoT development, with the NGO Blooming Beacon as a web developer, doing research work with a professor at SRM university in wireless power transmission and freelancing on upwork.com \r\nBut am really looking forward for a start-up with my friend.\r\nThe detailed portfolio of my works and knowledge can be checked on the website I created. \r\nhttp://www.aritra-bhawani.tk/', '12-02-1998', 'front-end development &amp; IoT development', '71/G Raja Road, Sukchar, Kolkara-700115', 'playing with arduino and other microcontrollers', 'freelancing on upwork &amp; created my blog at http://www.aritra-bhawani.tk/', 'in front-end developer with knowledge in bootstrap, semantic and jquerys along with regular html, css and js with decent knowledge on IoT development and arduino projects', 'S599d7fc096758.jpg', '2017-08-23 13:14:40'),
('S599dc5ea65220', 'dheemanth_reddy@srmuniv.edu.in', 'S V Dheemanth Reddy', 'RA1411004010083', 'ECE', '4', '', '22-08-1997', 'Operations, marketing ,acting', '504 sannasi c hostel srm college', 'Telugu content writing, reading books', '', 'Worked as a executive producer for tedxsrmkattankulathur, executive director at  ieeesbsrm, worked as a committee head in operations and resources for aaruush, former co founder for startup the delegate', NULL, '2017-08-23 18:14:02'),
('S599dd0fe074f0', 'souravsharma_harikishan@srmuniv.edu.in', 'Sourav Sharma', 'RA1611004010817', 'Ece', '2', 'Student and an entrepreneur', '19-03-1997', 'Entrepreneurship', 'Srm university', 'Meeting new people', 'Ringbucket.com', 'Working on ringbucket.com', 'S599dd0fe074f0.png', '2017-08-23 19:01:18'),
('S599e68f17779f', 'vibhakar_se@srmuniv.edu.in', 'Vibhakar', 'RA1652001010506', 'MBA', '2', '', '23-06-1995', 'Designing', '3, West Kalmandapam Lane, Royapuram Chennai 13', '', '', '', 'S599e68f17779f.jpg', '2017-08-24 05:49:37'),
('S599e6a313ed54', 'vigenesh_manim@srmuniv.edu.in', 'M.Vignesh', 'RA1652001010507', 'MBA', '2', '', '17-12-1994', 'Entrepreneurship', 'No 5/10-34 Poonthottam 2nd Street, St.Thomas Mount,Chennai-600016', '', '', '', 'S599e6a313ed54.jpg', '2017-08-24 05:54:57'),
('S599e6b0f8ac61', 'vignesh_manim@srmuniv.edu.in', 'M.Vignesh', 'RA1652001010507', 'MBA', '2', '', '17-12-1994', 'Entrepreneurship', 'No 5/10-34 Poonthottam 2nd Street, St.Thomas Mount,Chennai-600016', '', '', '', 'S599e6b0f8ac61.jpg', '2017-08-24 05:58:39'),
('S599eee85bfc71', 'Rubelpoddar_kashinath@srmuniv.edu.in', 'Rubel Poddar', '9674420249', 'Mechanical', '2', 'I am a 20 year old guy. Immensely interested in starups, meanwhile working on a e-commerce platform based startup.', '23-11-1996', 'Management, entrepreneurship,', 'Abode valley potheri', 'Social media, cricket, gaming,', 'Yet to come', 'School government, school project manager.', 'S599eee85bfc71.jpg', '2017-08-24 15:19:33'),
('S599fe2fa78770', 'sugam_malviya@srmuniv.edu.in', 'Sugam Malviya', 'RA1411020010030', 'Software', '2018', '', '17-10-1996', 'Full Stack Developer, Leadership', 'Near Indian Bank, Nellikuppam Road, Guduvancherry.', 'Reading Books, Music', '', '', NULL, '2017-08-25 08:42:34'),
('S599fe450f2d58', 'aniketghosh_ashimkumar@srmuniv.edu.in', 'Aniket Ghosh', 'RA1611005010295', 'Electrical and Electronics Engineering', '2', 'I am Aniket Ghosh from West Bengal,\r\nI am from EEE Department. I have been part of Hybrutos Racing since first year. I love what I am studying. I have interest In pure Electrical. I have designed PCBs and have done engine harness wiring in my team. Apart from this I love watching and \r\n playing football.', '16-12-1997', 'PCB Designing, Wiring , Coding', 'Ashalata Apt. Flat B1 2nd Floor 247 Bansdroni Place near Ambagan Rickshaw Stand Kolkata-700070', 'Reading Articles, Learning Languages, Electronic Projects', 'Designed PCBs and Engine Wiring in Hybrutos Racing.', 'Currently in Hybrustos Racing since one year', 'S599fe450f2d58.jpg', '2017-08-25 08:48:17'),
('S599ff736de6fb', 'Survesh_balaji@srmuniv.edu.in@srmuniv.edu.in', 'Survesh B', 'RA1511018010104', 'Mechatronics', '3', 'I am a budding entrepreneur with an aim to innovate the way we transport people and things.', '20-08-1997', 'Entrepreneurship, technical knowledge,CATIA,MATLAB, python, LabVIEW,eagle', 'No.5 , G4, Rani Ganga Apartments, Ram Nagar, Nanganallur, Chennai - 600061', 'Guitar,football,tennis,music', 'Won the IGNITE 2012 award from Dr.APJ Abdul Kalam', 'Developed the communication system for Team Rudra for their mars rover that took part in 2016 competition', 'S599ff736de6fb.jpg', '2017-08-25 10:08:54'),
('S599ff9961290a', 'survesh_balaji@srmuniv.edu.in', 'Survesh Balaji', 'RA1511018010104', 'Mechatronics', '3', 'I am a enthusiastic entrepreneur whose aim is to brighten the vision towards future.', '20-08-2017', 'matlab,python,c++,java,catia,ansys,photoshop,after effects.3ds max', 'No.5,G4, Rani Ganga Apartments,Ram Nagar,First main road,nanganallur,chennai-61', 'Guitar,Music,Tennis,Trading', 'Got ignite 2012 award from Dr.A.P.J. Abdul kalam', 'Designed the communication system from scratch for team Rudra for Mars rover which took part in URC 2016', NULL, '2017-08-25 10:19:02'),
('S59a0271036db2', 'swathi_lenin@srmuniv.edu.in', 'Swathi Lenin', 'RA1511018010079', 'Mechatronics', '3', 'An organised person looking up for new opportunities.', '07-12-1997', 'Good communtiation skills. Also, a good team player.', 'No:36, Nallappa Street, Nehru Nagar, Chromepet, Chennai-600 044', 'I love reading books and have a passion for writing.', 'I have not achieved something really big.', 'I have been a part of the student council at my school and various other teams. I also have the experience of organizing a few events.', NULL, '2017-08-25 13:33:04'),
('S59a034c897504', 'vedant_bhavin@srmuniv.edu.in', 'Vedant', 'RA1411018010213', 'Mechatronics', '4', 'District level winner of Science fair 2007\r\nProject- Neural networking of brain and it working\r\nState level winner of Science fair 2009\r\nProject- Green energy by bio coal\r\n\r\nCompleted Lema Labes level 1\r\nA Course in robotics (2014)\r\n\r\nBecame co-ordinater in the National Tech fest (Aarush-2015)\r\n\r\nParticipated in the international Robotics competition-ABU ROBOCON(2016 ).\r\n                                   international Robotics competition-ABU ROBOCON(2017 ).\r\n(As a designing head and analyst of the team)', '25-11-1996', 'Designing', 'S-402 Abode Valley, 54 kakkan street , potheri', 'science videos', 'Became designing head and analyst of TEAM SRM ROBOCON Became Technical head of AME (association of mechatronics engineers) (2017).    Became leader of SRM TEAM ROBOCON(2018) Became head of TEAM ARC (collaboration of SRM TEAM ROBOCON and AME).', '3 years robocon, 12 years Aarrush', 'S59a034c897504.jpg', '2017-08-25 14:31:36'),
('S59a04c7c5a9e0', 'akbarali_baig@srmuniv.edu.in', 'Akbar Ali Baig', '1111310077', 'Automobile Engineering', '4', '', '13-06-1995', 'Business Development', 'C508 ,SIS MARAKESH,URAPAKKAM 603202', 'Reading books', 'NATIONAL CHAMPIONS FSI2016,SUPRA 2014', 'Formula Student team alumni', 'S59a04c7c5a9e0.jpg', '2017-08-25 16:12:44'),
('S59a062b96fb44', 'deep_pareshpatel@srmuniv.edu.in', 'Deep', 'RA1411018010232', 'Mechatronics', '4', '', '07-07-1996', 'PCB designing ,Wiring,System Integration', '306 J block ,SRM hostel', 'Robocon', '', '', 'S59a062b96fb44.jpg', '2017-08-25 17:47:37'),
('S59a088631cd59', 'durgesh_joshi@srmuniv.edu.in', 'Durgesh Joshi', '1061110001', 'instrumentation and control', '-2', '', '31-01-1992', 'Entrepreneurship', 'Shaktinagar, karanprayag, uttarakhand, 246444', 'Networking, Browsing and movies.', 'NO such big individual achievement till now.', 'former Instrumentation engineer at Easy solution pvt. ltd. and startup experience of almost 2 years', 'S59a088631cd59.png', '2017-08-25 20:28:19'),
('S59a105b02baec', 'mihir_gupta@srmuniv.edu.in', 'Mihir Gupta', 'RA1711003010730', 'CSE', '1', '', '22-10-1998', 'Good in Maths', '13/29 First floor, Shakti Nagar, New delhi', 'playing cricket, listing music', '', '', 'S59a105b02baec.jpg', '2017-08-26 05:22:56'),
('S59a120c97a293', 'yashmandloi_prakash@srmuniv.edu.in', 'Yash Mandloi', 'RA1411001010008', 'Civil Engineering', '4', 'ModEco-Modified Economically.\nThe startup by Engineers integrating their talents in the field of pursuing experience.\nInnovation and renovation is the motto of the company.\nYoung talents are provided with the scope of exhibiting their creativity, ideas and talents.\nThe team focuses onÂ  renovation of an existingÂ Â  non furnished house economically and efficiently by utilizing the expertise of the team.\nWe basically focus on reuse, recycle and renovate.\nCustomised designingÂ  of the furnitures, woodwork, interiors , lighting and ambience integrated along with the soul objective of Low Budget Makeover.\nDIYs, client friendly designs and architectural touches adds to the charm ofÂ  astounding design ideas.\nWe aim at bringing a revolution in the arena ofÂ  interiors and gifting you the latest,cheapest and of course the best with the help of our skillful and talented employees.\nWe are there to lend our helping hands and support the people in making their dream home, dreams come true at a very affordable price.\nSo why fear when we are here?\nMake yourselves Hassle free and tension free, support us, promote us and see the magic after your AMAZING WORTHY INVESTMENT.', '03-10-1995', 'Designing, Creativity, Management', 'V207, Abode Valley , Potheri', 'Designing, listening music, playing', 'Scholarship on the basis of merit', 'Internship in architectural firm, worked as a member in management team in a food and entertainment based startup, worked in a labour supply based business', 'S59a120c97a293.jpg', '2017-08-26 11:53:48'),
('S59a15ca54df9a', 'vishal_manoj@srmuniv.edu.in', 'Vishal Ved', 'RA1511019010101', 'Aerospace', '2015', '.', '18-12-1997', 'Inventive abilities, Product development Skills , Patent writing skills , Marketing skills , Entrepreneurial skills.', 'H/No. 17 Abdul Kalam Street, Pottheri', 'Sketching , Reading books , sharing scientific posts on my whatsapp group Helloscience', 'I have filed 4 patents till now on different different topics and soon enough one of them are going to be in the market soon.', '3 years experience in inventing &amp; 1 year experience in marketing mainly  because of  the market surveys about my new products .', NULL, '2017-08-26 11:33:57'),
('S59a16baebad15', 'abbhivignesh_kandasamy@srmuniv.edu.in', 'K. Abbhi Vignesh', 'RA1652001010445', 'M.B.A', '2', '', '19-11-1994', 'Game Designing, vehicle modeling, graphic designing, 3D Printing', 'New no 13 ,Old no 7, 4th cross street west shenoy nagar', '3D printing, Cricket, travelling', '3rd in Indo ASC solar car challenge, finalist in NIYANTRA , Best project award for E-Bike design', '', 'S59a16baebad15.jpg', '2017-08-26 12:38:06'),
('S59a178312198e', 'kartikrana_lalith@srmuniv.edu.in', 'kartik rana', 'RA1611013010096', 'Biomedical', '2', 'Experienced Founder which aims to develop clean &amp; more efficient ways to enhance the world of humanity with the help of technology with a polished Skill set of Electronics, Android Development, Website Development, 3D modeling, Matlab, Ethical Hacking &amp; Computer Hardware and Networking.', '30-07-1997', 'Electronics , Android app development, Website development, 3D Modeling, Matlab, Ethical Hacking, Computer hardware and networking', 'A-119, gangotri colony, roorkee  road, Meerut (U.P) - 250001', 'Creation of Sci-fi technologies', '1. Created and handled a startup alone and sold 400 units in a year time,', 'Own a startup since 2015 and created a home automation consumer grade product and sold 400 units. Joined a team named Infi-Alpha Hyperloop in 2016 and designed the levitation system and power system there as a electronics and embedded circuits engineer .', 'S59a178312198e.jpg', '2017-08-26 13:31:29'),
('S59a17e1b6e7b2', 'narasimha_madhu@srmuniv.edu.in', 'BVN Madhu', '1111210168', 'Automobile Engineering', '2016', 'An avid automotive enthusiast.', '19-01-1995', 'Solidworks, CATIA, Lotus Shark, Photoshop, Autodesk 3ds 3Max', 'Door number 1-1-64, New Venkojipalem, Vizag, Andhra Pradesh', 'Go Karting, Sketching', 'Member of Camber Racing, Won several awards at National Level Formula Student Events.', 'Suspension Engineer R&amp;D at Renault Nissan from July 2016 to June 2017,  Team Captain at Camber Racing 2015-16, Suspension and fabrication Engineer at Camber Racing 2013-2015.', NULL, '2017-08-26 13:56:43'),
('S59a1b92bec36d', 'mayanksati_ma@srmuniv.edu.in', 'MAYANK SATI', 'RA1511003010564', 'CSE', '3', 'THERE IS A PHASE IN LIFE WHEN YOU ARE NEITHER INDEPENDENT NOR DEPENDENT.  I AM THE ONE WHO BECAME INDEPENDENT AFTER 10TH STANDARD AND STARTED TAKING MY OWN DECISION AND THEN ONLY I THOUGHT OF CONNECTING PEOPLE AND DO SOMETHING FOR THEIR WELL BEING. I WANT TO CREATE A PLATFORM WHERE THE WORK OF ENTREPRENEURS CAN PROVIDE BENEFITS DIRECTLY TO INDIVIDUAL. I WANT TO WORK WITH STARTUPS THAT DIRECTLY EMPOWER DIFFERENT SECTION OF SOCIETY. AND IF I TALK ABOUT MY PERSONAL LIFE I AM AN ENVIRONMENT LOVER AND ALSO WANT TO WORK FOR THE BETTERMENT OF SAME. I HAVE A DEEP INTEREST IN RELIGIOUS STUDIES AND WANT RELIGION TO BECOME A GREATEST MEDIUM TO CONNECT PEOPLE IN 21ST CENTURY. I LOVE PHOTOGRAPHY AND I WENT TO A TOUR IN NORTH EASTERN INDIA FOR THE SAME.', '30-09-1997', 'LEADERSHIP, PUBLIC SPEAKING, PUBLIC MOTIVATION,', 'ROOM NO 515, BEGAN HOSTELS, SRM UNIVERSITY', 'TRAVELLING, PHOTOGRAPHY, RELIGIOUS STUDIES AND POLITICAL DEBATES', 'LARGE NO. OF MUNS,', '', 'S59a1b92bec36d.jpg', '2017-08-26 18:08:44'),
('S59a1bada7de78', 'garvitgupta_de@srmuniv.edu.in', 'Garvit Gupta', 'RA1511020010122', 'Software Engineering', '3', '', '21-10-1996', 'Java, C, C++, HTML, AngularJs, Time Management, Team Management', 'Z-206, Abode Valley, Potheri, Kattankulathur', 'Dancing, Acting, Reading', '', 'Worked as a Business Developer for GoOut.Inc, Corporate Head of SRMAUV, President of Software Engineering Association, Member of MTS, CHennai -Chapter Head of Grapevine, Event Organiser of TedX SRMKTR', NULL, '2017-08-26 18:15:55'),
('S59a2e4ae13e7f', 'pratik_goutam@srmuniv.edu.in', 'Pratik Chakraborty', 'RA1611004010614', 'Electronics and Communication', '2', '', '09-08-1997', 'Coder, Leader of Team Web', 'Hiranandani Estate, F-1205 Bhoomi Acres', 'Painting, Dancing', 'Successfully started a project under the guidance of SIIC. Organised and taken part in MUNs in the last 4 years.', 'School and college fests. Former Badge and office holder in United Students Organisation. No internships so far. But am currently leading a team of 13 for the project TAASC', 'S59a2e4ae13e7f.jpg', '2017-08-27 15:26:38'),
('S59a44988ddefd', 'abhilashadey_ab@srmuniv.edu.in', 'ABHILASHA DEY', 'RA1511003010743', 'CSE', '3', 'OVERVIEW\r\nâ€¢	Software Engineer at Recon SubSea.\r\nâ€¢	Experienced in working in Python and Java for the user interface (GUI) development and Software and Electronics integration.\r\nâ€¢	Member of the SRM-MTS Student Chapter\r\n\r\n\r\nINTERPERSONAL SKILLS\r\n\r\nâ€¢	Confident and resourceful with a willingness to learn new concepts and apply them successfully.\r\nâ€¢	Ability to rapidly build relationship and set up trust.\r\nâ€¢	Good at cooperating &amp; communicating with other team members for efficient management work.', '08-08-1996', 'Coding/Management/Grasping power/Leadership/Effective Communication', 'House no.60, Kanke Road , Ranchi, JH', 'Reading/Travelling/Public Speaking/Skill-set Development', '91.8% in 12th and 10 GPA in 10th std', 'EXPERIENCE  â€¢	Two years of experience in being part of a student team RECON SUBSEA involved in underwater robotics and aiming to participate in the MATE International ROV Competition held usually every year in the NASA Neutral Buoyancy Lab, Houston, Texas, USA. â€¢	Worked with various electronic sensors such as an IMU (Inertial Measurement Unit), AHRS-8 (Attitude Heading and Referencing System) by Sparton NavEx. â€¢	Currently working with a PID Controller for the underwater ROV.', 'S59a44988ddefd.jpg', '2017-08-28 16:49:13'),
('S59a845c126004', 'Kadam_h@srmuniv.edu.in', 'Kadam solanki', 'RA1711008010081', 'Information technology', '1', 'Tall man with 6 feet of height with a weight of 68kg. Curly hair with a round face.', '03-06-2000', 'Advanced c++, HTML', '26/50,nammalwar lane,2nd floor, sowcarpet', 'Learning new technology and designing skills.', 'Created a game and a flight booking code in c++ language', '2 years', 'S59a845c126004.jpg', '2017-08-31 17:22:09'),
('S59aa52e209436', 'manojkumar_mu@srmuniv.edu.in', 'Manoj', 'RA1511003010457', 'CSE', '3', 'I am gamer', '29-08-2017', 'competitive coding', 'munagala junction', 'Reading', 'IQ is high', '2 yrs', 'S59aa52e209436.jpg', '2017-09-02 06:42:42'),
('S59ae96e07d253', 'Sreejathumma_mohan@srmuniv.edu.in', 'Sreeja thumma', 'RA1651001010213', 'School of Management', '2', 'Sreeja thumma', '30-08-1997', 'Good leadership skills, marketing', '108,E- block , featherlite vaikuntam,urrapakam, kanchipuram,', 'Singing, sleeping', '-', '-', NULL, '2017-09-05 12:21:52'),
('S59b6e5b4035bd', 'aishvary_khandelwal@srmuniv.edu.in', 'Aishvary Khandelwal', 'RA1711003011376', 'CSE', '1', 'My name is Aishvary Khandelwal freshman from CSE department. I am from Jaipur, Rajasthan. I have done a few failed startups to start with. My first startup was about improving traffic conditions in India, my 2nd one was about a perfect app for an automobile driver. My third one was about accomodation for specially students. I am currently working on two projects one on trip planner and other on an educational website.', '01-10-1999', 'Not any special skill to start with....but I am very eager about learning and growing as an aspiring entrepreneur..', 'Room no. 520, 4th floor, OORI block, SRM Hostels, SRM University, Potheri village,  Kattankulathur', 'Reading graphic novels, comics, etc.  , Playing video games, Quora, and Coding (still in learning phase).', 'Nothing I have achieved in this field particularly, but I am working on a startup right now with my friends.', 'I have done a few failed startups.', NULL, '2017-09-11 19:36:20'),
('S59b7ebd4a9815', 'bishwaroop_ba@srmuniv.edu.in', 'Bishwaroop Bhattacharjee', 'RA1511003010490', 'CSE', '3', 'Undergrad, coder, good planner and manager, hardworking, practical.', '25-04-1997', 'Leadership', 'Potheri,Chennai', 'Music', '', 'Started up a new club here, and running successfully .', NULL, '2017-09-12 14:14:44'),
('S59c135eeb6167', 'gokulakrishna_ka@srmuniv.edu.in', 'Gokulakrishna. K', 'Ra1711014010107', 'Genetics', '1', '', '30-10-1999', 'Desin', 'No-955,10street,ashok anger, chennai-600083', 'Drawing', '', '', NULL, '2017-09-19 15:21:19'),
('S59c25c39ab140', 'bvanthian_tbalasubramanian@srmuniv.edu.in', 'Vanthian Balasubramanian', 'RA1411017010004', 'Electronics and Instrumentation', '4', '', '31-08-1996', 'Writting, Management', '4/239-10, J.S Nagar, 4th street, Muthiahpuram, Tuticorin', 'Writing, Travelling', 'Member of SIIC', 'Planning and Operations associate at SIIC', NULL, '2017-09-20 12:16:57'),
('S5a052f4c94873', 'abishek_pal@srmuniv.edu.in', 'ABISHEK', 'RA1511002010843', 'MECHANICAL', '3', '', '04-03-1998', 'plc,repair', '3/20 ATTHIYANNANKADU , KARUKKAMPALYAM , MORUR BIT 2', 'movie', '', '', 'S5a052f4c94873.jpg', '2017-11-10 04:47:09'),
('S5a054ec139a23', 'raunak_pramod@srmuniv.edu.in', 'Raunak Deshmukh', 'RA1411002010428', 'Mechanical Engineering', '4', 'I am a very motivated and diligent person aspiring to have a successful career as an industrial designer as I believe I have the combination of art and engineering skill set; drawing skills, creativity and technical knowledge which are critical for an industrial designer.', '19-08-1996', '3D Visualisation, Problem Solving, Team player, 3D Modelling, Sketching, Design Thinking', 'B1/702, Omkar CHS, Chikuwadi, Borivali West, Mumbai-400092', 'Football, Movies', '', '', 'S5a054ec139a23.jpg', '2017-11-10 10:14:27'),
('S5a0582be33c05', 'vineeth_lakshmanarao@srmuniv.edu.in', 'Vineeth Pydi', 'RA1611004010940', 'ECE', '2', 'Hardworking and eager to learn', '29-09-1998', 'C++', 'Flat No. K-408,Abode Valley,Potheri', 'Gaming', 'Mini projects', 'Mini projects', NULL, '2017-11-10 10:43:10'),
('S5a059146ef39f', 'yashwanth_subrahmanyam@srmuniv.edu.in', 'Nvs Yashwanth', 'RA1611004010050', 'E.C.E', '2', '', '21-11-1998', 'Pspice , Logisem ,Programming in c/c++ &amp; python , Basic knowledge of Arduino , 3-D modelling and Visual Effects with BLENDER', 'Flat :K-408,Abode Valley, 54 kakkan street, Potheri, Tamil Nadu', 'Coding , Reading Books , etc', 'Merit Scholarship', '1 Year of experience with Coding and Arduino', NULL, '2017-11-10 11:45:11'),
('S5a05e8d3d1760', 'tuhin_sengupta@srmuniv.edu.in', 'Tuhin Sengupta', 'RA1711013010020', 'Biomedical engineering (BME)', '1', 'I am an army officers son.  Taking part in such an initiative is the reason of my army life background.  I am interested in making some new techs which will improve and help the soldiers to a great extent during war.  I am a horse rider and a speaker.', '02-08-2000', 'Creative thinking and logical thinking,  rapid decision making,  speaking skills', 'SRM Hostel,SRM university, Kattankulathur -603 203, Kanchipuram DT., Tamil Nadu', 'Horse riding,  dancing , speech and music', 'Inter school dance competition -1 position,  inter school speech and debate competition -3rd,  2nd.  Yet to achieve more', 'Being an army officers son i have lived in army environment for 17 years,  have seen the two sides of defence life -bad and good,  changed more than 11 scools, exposure to new environment every year.', 'S5a05e8d3d1760.jpg', '2017-11-10 17:58:44'),
('S5a05ea1b47bb6', 'akhilnichani_rajesh@srmuniv.edu.in', 'Akhil Nichani', 'RA1411004010240', 'Ece', '4', '', '22-03-1996', 'Hands on maker', 'Harrington Road Chetpet Chennai 600031', 'Gardening, swimming, reading', 'Not much honestly', '', NULL, '2017-11-10 18:04:11'),
('S5a0604f4e0fb5', 'muthu_pitchamuthu@srmuniv.edu.in', 'MUTHU KRISHNAN P', 'RA1511019010004', 'AEROSPACE', '3', 'Experienced Structural Design and Embedded Systems Hobbyist with a demonstrated history of working in the Unmanned Aerial Vehicle industry. Skilled in Embedded Systems, Computer-Aided Design (CAD), and Computer Aided Manufacturing and Simulations. Aspiring Student in Bachelor of Technology (BTech) focused in Aerospace, Aeronautical and Astronautical/Space Engineering from SRM University.', '25-01-1998', 'Design and Manufacturing Technology-CAD CAM CAE, Simulation Technology, Embedded systems', '60/A, PILLAIYAR KOIL STREET,  THIRUVA, NMIYUR, CHENNAI', 'UAV Hobbyist', '', 'Former Intern at National Formosa University, Former Structural Design, Simulation and Embedded sytems engineer at SRM SCRO', 'S5a0604f4e0fb5.jpg', '2017-11-10 19:58:45'),
('S5a0694e485e99', 'rahini_pugazhendhi@srmuniv.edu.in', 'Rahini Pugazhendhi', 'RA1612036010002', 'Food Processing', '5', '', '02-06-1993', 'Start up writer', '', 'Reading books', '', '', NULL, '2017-11-11 06:12:52'),
('S5a06cac915a81', 'ranjithkumar_ravinder@srmuniv.edu.in', 'Ranjith Kumar Bandari', 'RA1611004010434', 'ECE', '2', 'ECE student', '03-03-1999', '--', 'Pf hostel, SRM university', 'Watching movies', 'Nothing', 'Nothing', NULL, '2017-11-11 10:02:49'),
('S5a0aa8576bc35', 'sudarshan_ts@srmuniv.edu.in', 'SUDARSHAN.S', 'RA1511005010088', 'Electrical and Electronics Engineering', '3', '', '16-10-1997', 'Technical', 'S-1,Rose court ,Venkatesapuram, 1st main road, Vandalur-600048', 'Technically related creative ideas', '', '', 'S5a0aa8576bc35.jpeg', '2017-11-14 08:24:55'),
('S5a0e858eccc27', 'yashrajshrivastava_na@srmuniv.edu.in', 'Yashraj Shrivastava', 'RA1511003010303', 'CSE', '3', '', '09-01-1998', 'Data Analytics, Business Development', '4E, Niger Block, SRM Green Pearl Phase 2, Periyar Street, Potheri, Chennai', 'Playing Guitar, Tennis, Reading', 'Recognition for Technical Presentation - SRM CDC, Data Analytics Intern under Prof. Sameer Mathur- IIM Lucknow, IITM E-Cell Campus Ambassador.', 'Experience of working in 2 startups, both in the field of Education. First being a budding startup while the latter being an IIM-B incubated company..', 'S5a0e858eccc27.jpg', '2017-11-17 06:45:35'),
('S5a131924da4fb', 'harinarayanan_sh@srmuniv.edu.in', 'Hari Narayanan S', 'RA1511020010017', 'Software Engineering', '3', '', '17-10-1997', 'Javascript Developer', 'PF Hostel, SRM Hostels, SRM University', 'Sleeping', 'None', 'None', 'S5a131924da4fb.png', '2017-11-20 18:04:21'),
('S5a192691781fa', 'ZAP@srmuniv.edu.in', 'ZAP', 'ZAP', 'ZAP', '1', '', 'ZAP', 'ZAP', 'ZAP', 'ZAP', 'ZAP', 'ZAP', NULL, '2017-11-25 08:15:13'),
('S5a20e28c7033c', 'gundumalle_sushanth@srmuniv.edu.in', 'Sushanth Vinjay', 'RA1711018010073', 'Mechatronics', '4', 'Aiming to do something different in life is what I believe and stand by. Standing out of the crowd is my key inspiration to achieve it. I never allow my schooling to get into the way of my education.', '11-08-1999', 'Public speaking', 'Room No:718 G SRM HOSTELS, SRM University', 'Reading tech reports, making YouTube videos', 'Delivered Martin Luther King Jr. speech in the school assembly', 'School House captain', NULL, '2017-12-01 05:03:08'),
('S5a4f1315adcf4', 'surbhit_sumesh@srmuniv.edu.in', 'Surbhit Sinha', '7338799105', 'Mechanical', '2', 'This is Surbhit Sinha. Born on 09/10/1997.\r\nComing from a middle class family my ,father works in a Bank.\r\nI have working experience with automobile firms in regards of innovation.\r\nI have dreams to reach Formula 1 engineering companies.\r\nDie-Heart fan of Formula 1 Racing.\r\nInterested in place which innolve mechanical works.', '09-10-1997', 'Mechanical parts innovation .', 'Q-block Abode Valley,new Kakkan street,potheri srm nagar kattankullathur,chennai.', 'watching Formula 1 Races,Indy car races.', 'Have completed projects on piezo-electric energy harvesting and carbon fiber induction in Mahindra and Mahindra Pvt.Ltd.', 'Have experience working with Mahindra and Mahindra,Nagpur on several innovative  projects.', NULL, '2018-01-05 05:54:29'),
('S5a4fa4e670f34', 'sidhdharth_siva@srmuniv.edu.in', 'sidhdharth', 'RA1611008010103', 'IT', '2', '', '25-06-1999', 'Python, JS, HTML, CSS, jQuery, Video Editing', 'BF3, Gurugothai Apts., 8th Cross, 2nd Main Road, New Colony, Chromepet, Chennai - 44', 'Philosophy', '', '', NULL, '2018-01-05 16:16:38'),
('S5a60410cf0b0b', 'shubham_saurav@srmuniv.edu.in', 'Shubham Saurav', 'RA1711008010231', 'IT', '1', '', '19-09-1999', 'Art athelete', 'Paari g block 114, Kattankulathur kanchipuram', 'Sports art ancq', 'Ancq', '', 'S5a60410cf0b0b.jpg', '2018-01-18 06:39:09'),
('S5a660010293aa', 'pinakisaha_ab@srmuniv.edu.in', 'Pinaki Saha', 'RA1511003010230', 'CSE', '3', 'web', '08-07-1996', 'web', 'Pf hostel room no 622, srm university, kattankulathur', 'web', 'web', 'web', NULL, '2018-01-22 15:15:28');
INSERT INTO `user_profiles` (`uid`, `email`, `name`, `register_no`, `dept`, `year`, `description`, `dob`, `skills`, `address`, `hobbies`, `achievements`, `experience`, `avatar`, `timestamp`) VALUES
('S5a75be1d1aea5', 'rahulkumar_ramadhar@srmuniv.edu.in', 'Rahul kumar', 'RA1611002010336', 'Mechanical', '2', 'I have clear, logical and practical approach to problem solving and a relentless drive to see things through to completion,I am  more of a smart worker than hard worker.Currently Iâ€™m a student of 2nd year pursuing the degree of Mechanical Engineering from SRM Institute Of Science And Technology. I am eager to learn new technologies and methodologies also I am always willing to innovate the new things which can improve the existing technology.Automation is my prime idea of interest.', '05-01-1999', 'Fabrication with various power tools,designing(Autocad,Catia,Solidworks)', 'Sannasi A block SRM Institute Of Science And Technology Kattankulathur', 'Watching movies.', '', '2 months experience at SRM team robocon', 'S5a75be1d1aea5.jpg', '2018-02-03 13:50:21'),
('S5a7600fbf17c7', 'nalluri_bharath@srmuniv.edu.in', 'Bharath Nalluri', 'RA1711003010341', 'Cse', '1', '', '20-09-1999', 'Begginer,ready to do any work', 'Guntur Andhra Pradesh', 'Playing cricket', 'Working for that', 'Nil', NULL, '2018-02-03 18:35:40'),
('S5a7618a0f4003', 'ma_mat@srmuniv.edu.in', 'Maadi', 'RA1511002010145', 'Mechanical', '3', 'I love product design.', '02-06-1998', 'Designing', 'Sannasi Hostel', 'Gaming', 'Won some competitions', '3', 'S5a7618a0f4003.png', '2018-02-03 20:16:33'),
('S5a7687d1e2c4e', 'aakashgupta_vinod@srmuniv.edu.in', 'Aakash Gupta', 'RA1611003030382', 'CSE', '2', 'I am Aakash Gupta, studying in SRMIST NCR Campus pursuing Btech CSE  Second Year. I am a Startup Enthusiast. You would find me reading about  latest happenings in Startup Industry when not studying or having a break. I have a good experience of Social Media as of worked for RVCJ and Wittyfeed. Also i have done an Internship with Jugnoo, with their new venture of Meals.', '11-05-1999', 'Social Media Management, Analytics, Designing, Content Creation', 'SRMIST NCR', 'Brainstorming, Reading, Watching American TV Serials', '', 'Internship with Jugnoo, Social Media work with Wittyfeed and RVCJ', NULL, '2018-02-04 04:10:58'),
('S5a76c8d9972fe', 'Anurag_akhilesh@srmuniv.edu.in', 'Anurag shukla', 'RA1611002010566', 'Mechanical', '2', '', '23-01-1999', 'AutoCAD, solid works, Catia, mechanical fabrication', 'B9 ,BC Roy hostel, Srm university', '', '', '', 'S5a76c8d9972fe.jpg', '2018-02-04 08:48:26'),
('S5a76c9aeb395c', 'tejomurthula_tejomurthula@srmuniv.edu.in', 'Tejomurthula Bhuvana Teja', 'RA1511011010126', 'Automobile', '3', '', '15-05-1998', 'Data Entry, Research, Ansys', '', '', '', '', NULL, '2018-02-04 08:51:59'),
('S5a76cfb518a86', 'debanjanmandal_anup@srmuniv.edu.in', 'Debanjan Mandal', 'RA1611002010502', 'Mechanical Engineering', '2', 'My name is Debanjan Mandal.My hometown is Durgapur, West Bengal.I am interested in robotics especially eager to work on humanoid robots.I Worked for a short period of 6 months in SRM team Humanoid.I love to travel new places and meet new people.In my free times, I listen to music.My father is also an engineer.', '08-02-1998', 'Catia,Sollidwords,2D AutoCAD Drafting', 'room no.-218, Sanasi A -block, SRM Institute of Science and Technology, Kttankalathur, dist.- Kancheepuram', 'Listening music,Travelling', '', 'Ex-Member of SRM Team Humanoid(Worked as Designer for self balancing seesaw)', 'S5a76cfb518a86.jpg', '2018-02-04 09:17:41'),
('S5a76ef1356952', 'sunilkhatri_r@srmuniv.edu.in', 'sunil', 'RA1711005010291', 'EEE', '1', 'Love to make drones although i am new to this but i love my job.\r\nI have made motion sensor with pir. that was the 2nd thing i hv made so as to get  more practical knowledge about electronic instruments .', '21-01-1999', 'Designing pcb, diy drones', 'Alakhnanda Colony vaishali nagar', 'DIY Drones', '', '', 'S5a76ef1356952.jpg', '2018-02-04 11:31:31'),
('S5a770c1be3bf6', 'ashutoshmishra709@srmuniv.edu.in', 'Ashutosh MIshra', 'RA1511001020116', 'Civil Enginnering', '3', 'I am From Civil Department 3rd year and coming up from ramapuram campus. Well i am willing to work for the growth of the country by giving valuable ideas to you. My work is not go just work for money , its also to make people comfortable in their life. They should get the basic needs in their houses. I am mostly interested in research work. And making our society strong as much i can is my goal. What i have gained little knowledge i want to give back to society.', '31-12-1996', 'listening', '5/5 Madhavan street  bharatsalai road Ramapuram Chennai', 'Playing, Reading novels, Cooking, Singing', '1.Published International Paper', '1.Coordinator for Srmist Alumini Affairs   2. Member Of Tech-A-Mania', NULL, '2018-02-04 13:35:24'),
('S5a789f732349c', 'ritvik_narayan@srmuniv.edu.in', 'RITVIK REDDY V', 'RA1611003010366', 'Computer Science and Engineering', '2', '', '03-06-1999', 'coding in java,c++,c', '', '', '', '', NULL, '2018-02-05 18:16:19'),
('S5a789f9bef750', 'Karar_imtiyaz@srmuniv.edu.in', 'Karar Ahmad khan', 'RA1511019010064', 'Aerospace', '3', 'I believe in taking opportunities where ever you get it.', '23-05-1996', '3d modelling and design', 'Estancia', 'Watching movies, learning new softwares', '', 'Worked in Infeon super mileage, SRM Alumni Affairs', NULL, '2018-02-05 18:17:00'),
('S5a79b12b6d2da', 'abdulrehman_sadique@srmuniv.edu.in', 'Abdulrehman Noorani', 'RA1611019010093', 'Aerospace', '2', 'I belong to Gujarat. Mostly dedicated to technical works. Like to explore technology. Aiming to become better and successfull person in life.', '17-09-1998', 'Problem Solving, Operational Machining, Autocad, Catia', 'Room 4, Nos. 30, Pillayar Kovil Street, dist. Kanchipuram, Potheri', 'Playing cricket, browsing', 'NA', 'NA', 'S5a79b12b6d2da.jpg', '2018-02-06 13:44:11'),
('S5a7bf6723f6d2', 'teerthkoradiya_ramesh@srmuniv.edu.in', 'Teerth koradiya', 'RA1511018010228', 'Mechatronics', '3', 'Done internship in jyoti cnc automation. \r\nI have done my 11th, 12th in electronics, so I have made small devices like metal detector,fire alarm, accelerometer,', '03-10-1997', 'Good at autocad, good teamwork, flexible', 'Abode Valley', 'Sketching', '', 'Work experience in conrods', NULL, '2018-02-08 07:04:18'),
('S5a7e1d25d25e8', 'sonakshi_sonakshi@srmuniv.edu.in', 'Sonakshi', 'RA1711003011021', 'Cse', '1', '', '19-12-1999', 'Coding', 'Srm university', 'Reading novels', '', '', NULL, '2018-02-09 22:13:58'),
('S5a80289566bc5', 'Soham_chakraborty@srmuniv.edu.in', 'Soham chakraborty', 'RA1711017010008', 'EIE', '1', '', '27-11-1998', 'Design making', 'Neel castle , plot- 54,sec- 3 ,mumbai', 'Drawing, singing', '', '', 'S5a80289566bc5.jpg', '2018-02-11 11:27:17'),
('S5a808c7a08490', 'ssameer_sureshkumar@srmuniv.edu.in', 'SSAMEER SKUMAR', 'RA1611002010318', 'MECHANICAL', '2', 'I always want to progress in life along with a team because I believe in teamwork, always eager to learn new technology so that it can be used in the welfare of the society.', '12-11-1998', 'auto CAD, solid works, catia (basics)', 'SRM UNIVERSITY', 'badminton, playing guitar, riding bike', '', '6 month approx', NULL, '2018-02-11 18:33:30'),
('S5a8197190b77b', 'rohith_m@srmuniv.edu.in', 'Rohith M', 'RA1611018010096', 'Mechatronics', '2', 'I am a result oriented and determined individual looking forward to learning new things and progressing in my professional life.  I am looking for challenging opportunities that will help me utilize my skills to contribute to the organization.', '24-09-1998', 'Electronics, Arduino, Marketing, Finance Management, Market Ressrarch and Analysis, Leadership, Event Coordinator at Aaruush', '#227, A block, Sannasi Hostel, SRM University. Kattankulalthur', 'Projects, Reading,  Research', 'Semi-Finalist at Hyperloop One Global Challenge (Asia top 6), Qualified to penultimate round of SpaceX Hyperloop Pod Competiton,  1st Place in Kinesis Science Model Making Competition etc...', 'Corporate Assocaiate at Infi-Alpha Hyperloop, Propulsion and Braking Engineer at Infi-Alpha Hyperloop,', NULL, '2018-02-12 13:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`siic_id`),
  ADD UNIQUE KEY `email` (`email`,`uniq_code`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `startup`
--
ALTER TABLE `startup`
  ADD PRIMARY KEY (`startup_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`),
  ADD UNIQUE KEY `team_email` (`team_email`);

--
-- Indexes for table `team_invites`
--
ALTER TABLE `team_invites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `siic_id` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15201041;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `team_invites`
--
ALTER TABLE `team_invites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
