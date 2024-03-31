--User table
CREATE TABLE `user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `usertype` varchar(15) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
);


CREATE TABLE `futsal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(55) NOT NULL,
  `parking_available` tinyint(1) DEFAULT NULL,
  `price_per_hour` decimal(10,2) DEFAULT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `futsal_info` (`name`, `img_path`, `location`, `parking_available`, `price_per_hour`, `opening_time`, `closing_time`, `description`) VALUES
('Shankhamul Futsal', './assets/images/shakhamul.jpg', 'In futsal, teamwork makes the dream work. Work together ,play together, win together.','Shankhamul, Kathmandu', 1, 1000.00, '06:00:00', '22:00:00' ),
('Uniglobe Futsal', './assets/images/uniglobe.jpg', 'Discover the joy of futsal, where players of all ages and abilities come together to showcase their skills and love for the game.\" You all are warmly welcome in our futsal.', 'Kamaladi, Kathmandu ', 1, 1000.00, '06:00:00', '20:00:00'),
('Kumari Futsal', './assets/images/kumari.jpg', 'Discover the joy of futsal, where players of all ages and abilities come together to showcase their skills and love for the game.\" You all are warmly welcome in our futsal.', 'Paknajol, Kathmandu ', 0, 1000.00, '06:00:00', '20:00:00'),
('Royal Futsal', './assets/images/royal.jpg', 'Join the futsal fever sweeping the nation! Gather your squad and take on the challenge of our dynamic futsal leagues, where teamwork and strategy reign supreme.', 'Pushpa Nagar Marg, Kathmandu ', 1, 1200.00, '09:00:00', '17:00:00'),
('Kathmandu Futsal', './assets/images/kathmandu.jpg', 'Escape the ordinary and dive into the excitement of futsal. From friendly matches to competitive tournaments, there is always something thrilling happening on our courts', 'Bhrikuti, Kathmandu Funpark', 1, 1200.00, '06:00:00', '22:00:00'),
('Prime Futsal', './assets/images/prime.jpg', 'Discover the joy of futsal the ultimate fusion of soccer skills and indoor excitement. Bring your friends, bring your game, and let the good times roll!', 'Gyaneshwor, Kathmandu ', 1, 1200.00, '06:00:00', '20:00:00');
