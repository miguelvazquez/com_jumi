CREATE TABLE IF NOT EXISTS `#__jumi` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `path` varchar(255) default NULL,
  `custom_script` text,
  `access` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `published` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM CHARACTER SET = `utf8`;

INSERT IGNORE INTO `#__jumi` VALUES (1, 'Hello Jumi!', 'hello-jumi', '', '<!-- Jumi intro including some php code (sitename, username) - see below. -->\r\n\r\n<?php\r\nfunction sitename() { //gets sitename\r\n $config = new JConfig();\r\n return $config->sitename;\r\n}\r\n$user = JFactory::getUser(); //gets user object\r\n?>\r\n\r\n<h3>Hello in the world of Jumi!</h3>\r\n<p>Jumi is a set of Joomla! extensions enabling to include custom codes (html, php, css, js, ...) into Joomla!</p>\r\n<ul>\r\n<li>Jumi <b>module</b> includes codes into Joomla! module positions,</li>\r\n<li>Jumi <b>plugin</b> includes codes into Joomla! articles,</li>\r\n<li>Jumi <b>component</b> creates separate Joomla! components from custom codes.</li>\r\n</ul>\r\n<p>We hope Jumi will be useful for your <strong><?php echo sitename(); ?></strong> site. As it is for more then 400.000 other webmasters and developers.</p>', 0, 0, 1);
INSERT IGNORE INTO `#__jumi` VALUES (2, 'Blogspot', 'blogspot', 'components/com_jumi/files/blogger.php', '<?php\r\n//Display joomla-jumi.blogspot.com\r\n//You can change following variables so you can display your own blog.\r\n$blogId = ''1748567850225926498'';\r\n$login = ''joomla-jumi'';\r\n$cacheTime = 86400;\r\n?>', 0, 0, 1);