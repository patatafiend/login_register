

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'ako', '$2y$10$qjCnP9qRKCn0BzrcuJvvEeg0/6JbHh4UPGQB8kNneBBU70LI2jMqq');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  ADD UNIQUE KEY `username` (`username`);



ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
