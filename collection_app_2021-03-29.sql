# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: collection_app
# Generation Time: 2021-03-29 13:54:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Kdramas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Kdramas`;

CREATE TABLE `Kdramas` (
  `Kdrama` varchar(600) NOT NULL DEFAULT '',
  `ReleaseYear` int(4) NOT NULL,
  `Starring` varchar(800) NOT NULL DEFAULT '',
  `Synopsis` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Kdramas` WRITE;
/*!40000 ALTER TABLE `Kdramas` DISABLE KEYS */;

INSERT INTO `Kdramas` (`Kdrama`, `ReleaseYear`, `Starring`, `Synopsis`)
VALUES
	('Extraordinary You',2019,'Kim Hye-yoon, Rowoon, Lee Jae-wook, Lee Na-eun, Jung Gun-joo, Kim Young-dae and Lee Tae-ri.','The series follows Eun Dan-oh (Kim Hye-yoon) who is a student at a prestigious academy. One day, by chance, she discovers that the world she lives in is a fantasy world of comics. She and everyone else are merely characters in a comic book entitled Secret,[c] all under the authority of their omnipotent and omniscient Writer. Dan-oh is only an extra character and, worse, the Writer gave her a lame set-up'),
	('Hotel Del Luna',2019,'Lee Ji-eun and Yeo Jin-goo.','\"Hotel Del Luna\" (previously known as guest house of the moon) is not like any other hotel. A supernatural place, the hotel is not visible in its true form during the daytime as humans can only come across the hotel under special circumstances. Its staff and clients are all souls/ghosts coming to terms with unfinished business in their former lives before they pass on to the afterlife and cycle of reincarnation. Jang Man-wol is the owner of this hotel, which is located in Myeong-dong, Seoul. Due to a huge sin committed a millennium ago, the hotel catering to the dead has been bound to her soul.'),
	('Start-Up',2020,'Bae Suzy, Nam Joo-hyuk, Kim Seon-ho and Kang Han-na.','Set in fictional Silicon Valley called Sandbox, Start-Up tells the story of people in the world of startup companies.\n\nDal-mi is a bright and ambitious young woman who dreams of becoming Korea’s Steve Jobs. Dal-mi doesn’t have a fancy background but she’s passionate about her work. She has bright energy and is a person of great vitality, having experience in a wide range of part-time jobs. Do-san, is the founder of Samsan Tech. A ‘math genius’ as a young boy, Do-san was once the pride of his family but became their shame now, as his business has been going down for the past two years.'),
	('Penthouse: War in Life',2021,' Lee Ji-ah, Kim So-yeon, Eugene, Um Ki-joon, Yoon Jong-hoon, and Park Eun-seok.','Penthouse tells the story of wealthy families living in Hera Palace and their children at Cheong-ah Arts School.'),
	('Doctor Stranger',2014,' Lee Jong-suk, Jin Se-yeon, Park Hae-jin and Kang So-Ra.','As a child, Park Hoon and his father Park Cheol were tricked and sent to North Korea. After being sent to North Korea, Park Hoon and his father were denied access to go back to South Korea. In North Korea, Park Hoon was trained to become a doctor by his father who was already a famous doctor.'),
	('Itaewon Class.',2020,'Park Seo-joon, Kim Da-mi, Yoo Jae-myung and Kwon Nara','Despite not being able to become a policeman, Park continues to live by principles that his father instilled in him.  After leaving prison, Park starts a pub called DanBam. The DanBam crew are all, by nature, social outcasts like Park.');

/*!40000 ALTER TABLE `Kdramas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
