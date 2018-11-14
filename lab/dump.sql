--
-- Table structure for table `listado`
--

CREATE TABLE `listado` (
  `id` int(8) NOT NULL,
  `pais` varchar(700) NOT NULL,
  `capital` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listado`
--

INSERT INTO `listado` (`id`, `pais`, `capital`) VALUES
(3, 'Venezuela', 'Caracas'),
(6, 'Alemania', 'Berlin'),
(7, 'Italia', 'Roma'),
(8, 'Francia', 'Paris'),
(9, 'Inglaterra', 'Londres'),
(10, 'Paraguay', 'Asuncion'),
(11, 'Chile', 'Santiago');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'admin', '8888'),
(2, 'student', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listado`
--
ALTER TABLE `listado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listado`
--
ALTER TABLE `listado`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
