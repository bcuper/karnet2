<h1>Aplikacja do obsługi karnetu sprtowego</h1>
<p>Napisana przy pomocy szablonu Yii2 basic</p>

<hr>

<h3>Baza SQL</h3>
<p>Struktura tabel wraz z przykładowymi danymi</p>
<p><code>
DROP TABLE IF EXISTS `cennik`;
CREATE TABLE IF NOT EXISTS `cennik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


INSERT INTO `cennik` (`id`, `nazwa`, `cena`) VALUES
(1, 'Strefa H2O', 13),
(2, 'Łabedzia', 15);

-- --------------------------------------------------------

DROP TABLE IF EXISTS `doladowania`;
CREATE TABLE IF NOT EXISTS `doladowania` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opis` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `waznosc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


INSERT INTO `doladowania` (`id`, `opis`, `cena`, `waznosc`) VALUES
(1, 'Doładowanie 50 zł na 30 dni', '50.00', 30),
(2, 'Doładowanie 100 zł na 60 dni ', '100.00', 60),
(3, 'Doładowanie 150 zł na 90 dni', '150.00', 90),
(4, 'Doładowanie 500 zł na 120 dni', '500.00', 120);

-- --------------------------------------------------------

DROP TABLE IF EXISTS `kasjerzy`;
CREATE TABLE IF NOT EXISTS `kasjerzy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasjer` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


INSERT INTO `kasjerzy` (`id`, `kasjer`) VALUES
(1, 'Kasjer 1'),
(2, 'Kasjer 2'),
(3, 'Kasjer 3'),
(4, 'Kasjer 4');

-- --------------------------------------------------------


DROP TABLE IF EXISTS `operacje`;
CREATE TABLE IF NOT EXISTS `operacje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opis` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(11,2) NOT NULL,
  `rodz` enum('+','-') COLLATE utf8_polish_ci NOT NULL,
  `kasjer_id` int(11) NOT NULL,
  `data_dodania` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


INSERT INTO `operacje` (`id`, `opis`, `cena`, `rodz`, `kasjer_id`, `data_dodania`) VALUES
(1, 'doładowanie karnetu 500', '500.00', '+', 1, '2019-10-17 11:52:05'),
(2, 'test', '13.00', '-', 1, '2020-05-13 07:20:00'),
(3, 'test', '1.44', '-', 3, '2020-05-12 09:55:16'),
(4, 'Przekroczenie czasu', '0.22', '-', 1, '2020-05-13 08:29:00'),
(5, 'Przekroczenie czasu', '0.33', '-', 1, '2020-05-13 09:39:00'),
(6, 'Przekroczenie czasu', '1.21', '-', 1, '2020-05-13 09:45:00'),
(7, 'Doładowanie 150 zł na 90 dni', '150.00', '+', 1, '2020-05-13 10:02:00');


DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

</code></p>