
CREATE TABLE IF NOT EXISTS `` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NOT NULL,
  `isbn` varchar(45) DEFAULT NOT NULL,
  `nr-pages` int(11) DEFAULT,
  `image-url` varchar(250) DEFAULT,
  `publication-date` date DEFAULT NULL,
  `description` varchar(250) DEFAULT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

$conn = new mysqli($servername, $username, $password, $dbname);

INSERT INTO `books` (`id`, `title`, `isbn`, `nr-pages`, `image-url`, `publication-date`,`description` )
VALUES
	(1,'Pride and Prejudice', '9781435159631', '368', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781499806250/pride-and-prejudice-9781499806250_hr.jpg', '04/03/2015', '<p>Pride and Prejudice follows the turbulent relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. They must overcome the titular sins of pride and prejudice in order to fall in love and marry.</p>\n'),
;



