
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `loginsqli`
--
CREATE DATABASE IF NOT EXISTS `dbs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbs`;

-- --------------------------------------------------------


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(33) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `description`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'All hail the admin!!'),
(2, 'bob', '5f4dcc3b5aa765d61d8327deb882cf99', 'bobby', 'Sup! I love swimming!'),
(3, 'ramesh', '9aeaed51f2b0f6680c4ed4b07fb1a83c', 'ramesh', 'I love 5 star!'),
(4, 'suresh', '9aeaed51f2b0f6680c4ed4b07fb1a83c', 'suresh', 'I love 5 star toooo!'),
(5, 'alice', 'c93239cae450631e9f55d71aed99e918', 'alice', 'In wonderland right now :O'),
(6, 'voldemort', '856936b417f82c06139c74fa73b1abbe', 'voldemort', 'How dare you! Avada kedavra!'),
(7, 'frodo', 'f0f8820ee817181d9c6852a097d70d8d', 'frodo', 'Need to go to Mordor. Like right now!'),
(8, 'hodor', 'a55287e9d0b40429e5a944d10132c93e', 'hodor', 'Hodor'),
(65, 'rhombus', 'e52848c0eb863d96bc124737116f23a4', 'rambo', 'Im the rambo!! Bwahahaha!');


DROP TABLE IF EXISTS `products`;
CREATE TABLE products (
  name char(64),
  secret char(64),
  description varchar(250)
);

INSERT INTO products
VALUES('facebook', '3d59f7548e1af2151b64135003ce63c0a484c26b9b8b166a7b1c1805ec34b00a', 'Awesome! You did it');
INSERT INTO products
VALUES('messenger', '3d59f7548e1af2151b64135003ce63c0a484c26b9b8b166a7b1c1805ec34b00a', 'Darn! So close');
INSERT INTO products
VALUES('instagram', '3d59f7548e1af2151b64135003ce63c0a484c26b9b8b166a7b1c1805ec34b00a', 'Darn! So close');
INSERT INTO products
VALUES('whatsapp', '3d59f7548e1af2151b64135003ce63c0a484c26b9b8b166a7b1c1805ec34b00a', 'Darn! So close');
INSERT INTO products
VALUES('oculus-rift', '3d59f7548e1af2151b64135003ce63c0a484c26b9b8b166a7b1c1805ec34b00a', 'Darn! So close');

