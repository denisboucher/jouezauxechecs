CREATE TABLE IF NOT EXISTS `verif` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `uid` int(4) NOT NULL,
  `session` varchar(30) NOT NULL,
  `timestand` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;
