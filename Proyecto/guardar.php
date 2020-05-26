SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `datos` (
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `datos` (`nombre`, `correo`, `mensaje`) VALUES

COMMIT;