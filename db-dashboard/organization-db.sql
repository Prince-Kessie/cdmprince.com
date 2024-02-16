

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `reset_token` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`, `reset_token`, `date_created`) VALUES
(8, 'Prince E. Kessie', '1227P', '1227', '2024-02-07'),
(13, 'Isaac P. Cooper', '19966', '1996', '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `cdm_leadership`
--

CREATE TABLE `cdm_leadership` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `role` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cdm_leadership`
--

INSERT INTO `cdm_leadership` (`id`, `fullname`, `email`, `contact`, `role`, `address`) VALUES
(1, 'Prince E. Kessie', 'kessieprince9@gmail.com', '0888993339', 'President and Founder', 'World Bank Community'),
(4, 'Joel J. Pittman', 'joel@gmail.com', '0881347971', 'Leader', 'Gotumo Town community'),
(5, 'Isaac P. Cooper ', 'isaac@gmail.com', '0881333660', 'Leader', 'World Bank Community'),
(6, 'Emmanuel S. Kollie', 'emmanuel@gmail.com', '0776793298', 'Leader', 'Walker Farm Community'),
(7, 'David J. Mulbah', 'david@gmail.com', '0775965509', 'Leader', 'World Bank Community'),
(8, 'Sansee Gbana', 'sansee@gmail.com', '0777830786', 'Leader', 'World Bank Community');

-- --------------------------------------------------------

--
-- Table structure for table `cdm_membership`
--

CREATE TABLE `cdm_membership` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cdm_membership`
--

INSERT INTO `cdm_membership` (`id`, `fullname`, `email`, `contact`, `address`) VALUES
(51, 'Prince Ezekiel Kessie', 'kessieprince9@gmail.com', '0775358075', 'Liberia'),
(52, 'Francis Kollie', 'francis@gmail.cm', '0775358023', 'China'),
(53, 'Othello Gray', 'othello@gmail.com', '077535855', 'Uganda'),
(54, 'George Paye', 'george@gmail.com', '0775358070', 'Liberia'),
(55, 'Mary Aaron', 'mary@gmail.com', '1234565688', 'Monrovia'),
(56, 'Mary Aaron', 'mary@gmail.com', '0775358072', 'Uganda');

-- --------------------------------------------------------

--
-- Table structure for table `client_contact`
--

CREATE TABLE `client_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_contact`
--

INSERT INTO `client_contact` (`id`, `fullname`, `email`, `subject`, `message`) VALUES
(2, 'Prince Ezekiel Kessie', 'kessieprince9@gmail.com', 'Inquiry', 'How can I become a member of cdm?'),
(3, 'George Sackie', 'george@gmail.com', 'Inquiry', 'Where is cdm main branch located?');

-- --------------------------------------------------------

--
-- Table structure for table `client_email_footer`
--

CREATE TABLE `client_email_footer` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_email_footer`
--

INSERT INTO `client_email_footer` (`id`, `email`) VALUES
(1, 'kessieprince9@gmail.com'),
(2, 'francis@gmail.cm'),
(3, 'choirleader@gmail.com'),
(19, 'prince@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client_reply`
--

CREATE TABLE `client_reply` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_reply`
--

INSERT INTO `client_reply` (`id`, `fullname`, `email`, `contact`, `message`) VALUES
(1, 'Prince Ezekiel Kessie', 'kessieprince9@gmail.com', '0775358075', 'This is very good!'),
(2, 'Moses Zayzay', 'moses@gmail.com', '07775640', 'God\'s blessings are upon you.');

-- --------------------------------------------------------

--
-- Table structure for table `client_subscribe`
--

CREATE TABLE `client_subscribe` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `language` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_subscribe`
--

INSERT INTO `client_subscribe` (`id`, `fullname`, `email`, `contact`, `language`, `message`) VALUES
(4, 'Lawrance Kollie', 'lawrance@gmail.com', '077764345', 'english', 'Glory'),
(5, 'Prince Ezekiel Kessie', 'kessieprince9@gmail.com', '0784332179', 'english', 'I am blessed!'),
(6, 'Isaac Cooper', 'cooper@gmail.com', '0888654360', 'french', 'What is cdm?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdm_leadership`
--
ALTER TABLE `cdm_leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdm_membership`
--
ALTER TABLE `cdm_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_contact`
--
ALTER TABLE `client_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_email_footer`
--
ALTER TABLE `client_email_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reply`
--
ALTER TABLE `client_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_subscribe`
--
ALTER TABLE `client_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cdm_leadership`
--
ALTER TABLE `cdm_leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cdm_membership`
--
ALTER TABLE `cdm_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `client_contact`
--
ALTER TABLE `client_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_email_footer`
--
ALTER TABLE `client_email_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client_reply`
--
ALTER TABLE `client_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_subscribe`
--
ALTER TABLE `client_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
