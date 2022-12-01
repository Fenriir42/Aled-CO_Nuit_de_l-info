CREATE DATABASE sauveteur;
USE sauveteur;

CREATE TABLE `sauvetage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `sauvetage` (`id`, `name`, `description`) VALUES
(1258, 'sauvetage titi du coffre fort', 'Il s\'était enfermé sans la clé'),
(123456, 'sauvetage à la sauvette', 'toto est en cour de sauvetage parce qu\'il étais un peu con');

CREATE TABLE `sauveteur` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `sauvetage`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sauveteur`
  ADD PRIMARY KEY (`id`);
