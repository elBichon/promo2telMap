create database if not exists promo2tel character set utf8 collate utf8_unicode_ci;
use promo2tel;

grant all privileges on promo2tel.* to 'promo2tel_user'@'localhost' identified by 'secret';
