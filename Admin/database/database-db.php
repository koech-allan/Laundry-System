CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`username`)
)