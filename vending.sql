/*

Created by: Zachary Post
Use: Database for ZMAN-NEWS
10/19/2022

*/

DROP DATABASE IF EXISTS `news_base`;

CREATE DATABASE `news_base`;

USE `news_base`;

CREATE user  news_base_user@localhost IDENTIFIED by 'Zuper12310';
GRANT ALL PRIVILEGES ON *.* TO 'news_base_user'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE TABLE `articles` (
id INT(5) NOT NULL AUTO_INCREMENT,
img varchar(1000),
title varchar(50),
news varchar(10000),
author varchar(50),
primary key(id)
);


INSERT INTO `articles` (img,title,news,author)
VALUES ('https://wallpaper.dog/large/999875.jpg',"test","YOOOOO","Zachary Post");

INSERT INTO `articles` (img,title,news,author)
VALUES ('https://wallpaper.dog/large/999875.jpg',"test","YOOOOO","Zachary Post");

INSERT INTO `articles` (img,title,news,author)
VALUES ('https://wallpaper.dog/large/999875.jpg',"test","YOOOOO","Zachary Post");

INSERT INTO `articles` (img,title,news,author)
VALUES ('https://wallpaper.dog/large/999875.jpg',"test","YOOOOO","Zachary Post");

INSERT INTO `articles` (img,title,news,author)
VALUES ('https://wallpaper.dog/large/999875.jpg',"test","YOOOOO","Zachary Post");