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
