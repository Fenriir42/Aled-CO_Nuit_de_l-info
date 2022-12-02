CREATE DATABASE jdrt_vih;
USE jdrt_vih;

-- The must of this part is to creat a tab we can used for register user
CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- The first tab is a admin status
INSERT INTO `register` (`id`, `name`, `description`) VALUES
(00000000000, 'admin', 'aled&co'),

-- The must of this tab is to send a output narration and update a register data
CREATE TABLE `play` (
  `chose_item` int(1) NOT NULL,
  `home` varchar(16383²) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- The first tab is a root
INSERT INTO `register` (`id`, `name`, `description`) VALUES
(0, 'none'),

ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jdrt_vih`
  ADD PRIMARY KEY (`id`);
