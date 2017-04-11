DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS 'article' (

art_id integer not null primary key auto_increment,

art_title varchar(100) not null,

art_content varchar(2000) not null,

art_date datetime not null,

art_like int(11) not null,

art_dislike int(11) not null,

art_public tinyint(1) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;



DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` ( 

usr_id integer not null primary key auto_increment,

usr_login varchar(50) not null,

usr_mail varchar(256) not null,

usr_psswd varchar(50) not null,

usr_news tinyint(1) not null, 

usr_admin tinyint(1) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;
 

