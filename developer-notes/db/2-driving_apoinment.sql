CREATE TABLE driving_apponimnet(id int PRIMARY KEY AUTO_INCREMENT, date varchar(255),time varchar(255),location varchar(255),comments varchar(255));
ALTER TABLE driving_apponimnet add COLUMN user_id int ;
INSERT INTO driving_apponimnet(`user_id`,  `dates`,`times`, `location`, `comments`) VALUES (3,  '23-32-3003','23:23:PM', 'sdfd', 'sdfsdf');