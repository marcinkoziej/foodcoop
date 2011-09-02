-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 01 Wrz 2011, 19:02
-- Wersja serwera: 5.0.45
-- Wersja PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Baza danych: `foodcoop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `categories`
--

CREATE TABLE `categories` (
  `id` int(8) NOT NULL auto_increment,
  `name` char(20) collate utf8_polish_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'owoce');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL auto_increment,
  `name` char(40) collate utf8_polish_ci default NULL,
  `unit` char(10) collate utf8_polish_ci default NULL,
  `price` float default NULL,
  `category_id` int(8) default NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `products`
--

