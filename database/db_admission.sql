
CREATE TABLE `student` (
  `id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `sname` varchar(200) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `class` varchar(10) NOT NULL,
  `shift` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blgroup` varchar(5) NOT NULL,
  `division` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
