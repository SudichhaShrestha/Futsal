-- Table structure for table `user`
CREATE TABLE `user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `cpassword` VARCHAR(255) NOT NULL,
  `profile` VARCHAR(255) NOT NULL,
  `usertype` VARCHAR(15) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
);





-- Table structure for table `futsal_info`
CREATE TABLE `futsal_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `img_path` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) DEFAULT NULL,
  `location` VARCHAR(55) NOT NULL,
  `parking_available` TINYINT DEFAULT NULL,
  `price_per_hour` DECIMAL(10,2) DEFAULT NULL,
  `opening_time` TIME DEFAULT NULL,
  `closing_time` TIME DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Data for table `futsal_info`
INSERT INTO `futsal_info` (`id`, `name`, `img_path`, `description`, `location`, `parking_available`, `price_per_hour`, `opening_time`, `closing_time`) VALUES
(1, 'Shankhamul Futsal', './assets/images/shakhamul.jpg', 'In futsal, teamwork makes the dream work. Work together, play together, win together.', 'Shankhamul, Kathmandu', 1, 1324.00, '11:31:00', '22:29:00'),
(2, 'Uniglobe Futsal', './assets/images/uniglobe.jpg', 'Discover the joy of futsal, where players of all ages and abilities come together to showcase their skills and love for the game. You all are warmly welcome in our futsal.', 'Kamaladi, Kathmandu', 1, 1000.00, '06:00:00', '20:00:00'),
(3, 'Kumari Futsal', './assets/images/kumari.jpg', 'Discover the joy of futsal, where players of all ages and abilities come together to showcase their skills and love for the game. You all are warmly welcome in our futsal.', 'Paknajol, Kathmandu', 0, 1000.00, '06:00:00', '20:00:00'),
(4, 'Royal Futsal', './assets/images/royal.jpg', 'Join the futsal fever sweeping the nation! Gather your squad and take on the challenge of our dynamic futsal leagues, where teamwork and strategy reign supreme.', 'Pushpa Nagar Marg, Kathmandu', 1, 1200.00, '09:00:00', '17:00:00'),
(5, 'Kathmandu Futsal', './assets/images/kathmandu.jpg', 'Escape the ordinary and dive into the excitement of futsal. From friendly matches to competitive tournaments, there is always something thrilling happening on our courts', 'Bhrikuti, Kathmandu Funpark', 1, 1200.00, '06:00:00', '22:00:00'),
(6, 'Prime Futsal', './assets/images/prime.jpg', 'Discover the joy of futsal, the ultimate fusion of soccer skills and indoor excitement. Bring your friends, bring your game, and let the good times roll!', 'Gyaneshwor, Kathmandu', 1, 1200.00, '06:00:00', '20:00:00');
(7, 'United  Futsal', './assets/images/united.jpg', 'Ready for a new soccer challenge? Try futsal: indoor excitement for players of all levels!', 'Bafal, Kathmandu ', 1, 1000.00, '06:00:00', '20:00:00');
(8, 'Field Futsal', './assets/images/field.jpg', 'Futsal: Where skill meets speed. Join us for electrifying matches and non-stop action!', 'Sanepa, Kathmandu', 1, 1500.00, '07:00:00', '19:00:00');



-- Table structure for table `bookings`
CREATE TABLE `bookings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `person_name` VARCHAR(100) NOT NULL,
  `contact_number` VARCHAR(20) DEFAULT NULL,
  `email` VARCHAR(100) NOT NULL,
  `booking_datetime` DATETIME NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `futsal_id` INT NOT NULL,
  `status` VARCHAR(20) NOT NULL DEFAULT 'pending',
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  KEY `futsal_id` (`futsal_id`)
);
