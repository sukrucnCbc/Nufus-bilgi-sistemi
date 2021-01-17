-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Tem 2020, 08:08:54
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nufus`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adres_islemleri_kayit_sd`
--

CREATE TABLE `adres_islemleri_kayit_sd` (
  `tc_id` int(11) NOT NULL,
  `il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mahalle_koy` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sokak` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `belge_duzenle`
--

CREATE TABLE `belge_duzenle` (
  `tc` int(11) NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baba_adı` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anne_adı` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `uyrugu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pasaport_fotograf_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ogrenci_belgesi_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `muvafakat_belgesi_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `foto_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `saglik_raporu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sabıka_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimlik_kartı_fotograf_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `belge_duzenle`
--

INSERT INTO `belge_duzenle` (`tc`, `isim`, `soyisim`, `baba_adı`, `anne_adı`, `dogum_tarihi`, `uyrugu`, `pasaport_fotograf_url`, `ogrenci_belgesi_url`, `muvafakat_belgesi_url`, `foto_url`, `saglik_raporu`, `sabıka_url`, `kimlik_kartı_fotograf_url`) VALUES
(1579486274, 'Mehmet', 'Taşıyan', 'Fazlı', 'Hayriye', '14.05.1982', 'TC', 'desktop/pasaport/mehmet.jpg', '', 'desktop/muvafakat/mehmet.jpg', 'desktop/pasaport/mehmet.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giris_ekranı`
--

CREATE TABLE `giris_ekranı` (
  `id` int(255) NOT NULL,
  `kullanici_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(9) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `giris_ekranı`
--

INSERT INTO `giris_ekranı` (`id`, `kullanici_adi`, `sifre`) VALUES
(1, 'admin', '123456'),
(2, 'haneficalp', 'ktuybs');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit_sil_degistir`
--

CREATE TABLE `kayit_sil_degistir` (
  `tc_id` int(11) NOT NULL,
  `kayit_silme_nedeni` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_degistirme_nedeni` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tc` int(11) NOT NULL,
  `yeni_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kayit_sil_degistir`
--

INSERT INTO `kayit_sil_degistir` (`tc_id`, `kayit_silme_nedeni`, `kayit_degistirme_nedeni`, `tc`, `yeni_soyad`) VALUES
(0, 'Ölüm', '', 88, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `id` int(255) NOT NULL,
  `tc_no` int(11) NOT NULL,
  `tel_no` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `saat` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`id`, `tc_no`, `tel_no`, `konu`, `il`, `ilce`, `tarih`, `saat`) VALUES
(1, 2147483647, '', 'pasaport', 'amasya', '', '2020-07-28', '02:59:00'),
(2, 2147483647, '5061510717', 'pasaport', '5', 'Merkez', '2020-07-06', '10:25:00'),
(3, 2147483647, '5438298839', 'pasaport', '28', 'Merkez', '2020-07-06', '14:30:00'),
(4, 2147483647, '5438298839', 'kimlik', '28', 'Merkez', '2020-07-14', '02:40:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yeni_nufus_kaydi`
--

CREATE TABLE `yeni_nufus_kaydi` (
  `id` int(11) NOT NULL,
  `tc_no` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_nedeni` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baba_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anne_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mahalle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sokak` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `no` int(11) NOT NULL,
  `dogum_yeri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `uyrugu` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yeni_nufus_kaydi`
--

INSERT INTO `yeni_nufus_kaydi` (`id`, `tc_no`, `kayit_nedeni`, `isim`, `soyisim`, `baba_adi`, `anne_adi`, `dogum_tarihi`, `il`, `ilce`, `mahalle`, `sokak`, `no`, `dogum_yeri`, `uyrugu`, `fotograf_url`) VALUES
(8, '', 'Göç', 'BAB', 'AD', 'AHD', 'ADH', '0000-00-00', '', 'Merkez', 'Bah', 'Dı', 0, 'AMASYA', 'TC', NULL),
(9, '', 'Göç', 'Şükrücan', 'Tekoglu', 'mehmet', 'Emine', '0000-00-00', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(10, '', 'Göç', 'Şükrücan', 'Tekoglu', 'mehmet', 'Emine', '0000-00-00', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(11, '60426795129', 'Göç', 'Şükrücan', 'Cebeci', 'Murat', 'Emine', '0000-00-00', '', 'Merkez', 'Bah', 'Diyar', 0, 'Amasya', 'TC', NULL),
(12, '66943500057', 'Göç', 'ALİ', 'VELİ', 'ALİ', 'VELİ', '0000-00-00', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(13, '60426795129', 'Doğum', 'Şükrücan', 'Cebeci', 'Murat', 'Emine', '2020-07-09', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(14, '60426795129', 'Doğum', 'Şükrücan', 'Cebeci', 'Murat', 'Emine', '2020-07-09', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(15, '60426795129', 'Doğum', 'Şükrücan', 'Cebeci', 'Murat', 'Emine', '2020-07-09', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(16, '60426795129', 'Doğum', 'Şükrücan', 'Cebeci', 'Murat', 'Emine', '2020-07-09', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(17, '60426795129', 'Doğum', 'Şükrücan', 'Cebeci', 'Murat', 'Emine', '2020-07-09', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(20, '28038243387', 'Yeni Vatandaş', 'EMİRHAN', 'CEBECİ', 'MURAT ', 'EMİNE', '2005-06-15', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(21, '28038243387', 'Yeni Vatandaş', 'EMİRHAN', 'CEBECİ', 'MURAT ', 'EMİNE', '2005-06-15', '', 'Merkez', 'Bahçeleriçi', 'Diyar', 0, 'Amasya', 'TC', NULL),
(26, '98948632044', 'Doğum', 'ARDA', 'KARACA', 'MUSTAFA', 'HAYRİYE', '2000-02-10', '', 'ÇANKAYA', '100.YIL', '1652.SOKAK', 0, 'YOZGAT', 'TC', NULL),
(27, '94753789558', 'Doğum', 'EMRE', 'ŞENTÜRK', 'MURAT', 'AYŞE', '2000-05-05', '', 'BİGADİÇ', '100.YIL', '1651', 0, 'İSTANBUL', 'TC', NULL),
(28, '65990950568', 'Yeni Vatandaş', 'BURAK', 'ŞENTÜRK', 'TURHAN', 'NURHAN', '2000-03-20', '', 'AYANCIK', 'SÖKÜÇAYIRI', '1240.SOK', 0, 'SİNOP', 'ÇERKES', NULL),
(29, '64502094166', 'Yeni Vatandaş', 'ALİ', 'YILMAZ', 'MUSTAFA', 'AYŞE', '1998-07-05', '5', 'BİGADİÇ', 'İLKADIM', 'GÜL', 5, 'YOZGAT', 'Yunan', NULL),
(30, '32757342184', 'Göç', 'VERLİ', 'BAKIRTAŞ', 'MEHMET', 'FATMA', '1997-10-14', '12', 'BİGADİÇ', 'Bah', '1652.SOKAK', 0, 'SİNOP', 'TC', NULL),
(37, '35306121292', 'Göç', 'TUBA', 'AKTAŞ', 'mehmet', 'FATMA', '2000-07-14', '11', 'ÇANKAYA', '100.YIL', 'GÜL', 0, 'SİNOP', 'TC', NULL),
(40, '93909904364', 'Yeni Vatandaş', 'İREM', 'KÖROĞLU', 'MUSTAFA', 'ZAHİDE', '2000-07-04', '53', 'PAZAR', 'SALARHA', 'CÜLÜS', 0, 'RİZE', 'TC', NULL),
(41, '72278620276', 'Göç', 'GÜRHAN', 'TEKOĞLU', 'ZAFER', 'AYŞEGÜL', '2000-11-30', '28', 'KEŞAP', 'DÜZKÖY', '24.SOK', 0, 'GİRESUN', 'TC', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adres_islemleri_kayit_sd`
--
ALTER TABLE `adres_islemleri_kayit_sd`
  ADD PRIMARY KEY (`tc_id`);

--
-- Tablo için indeksler `belge_duzenle`
--
ALTER TABLE `belge_duzenle`
  ADD PRIMARY KEY (`tc`);

--
-- Tablo için indeksler `giris_ekranı`
--
ALTER TABLE `giris_ekranı`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kayit_sil_degistir`
--
ALTER TABLE `kayit_sil_degistir`
  ADD PRIMARY KEY (`tc_id`);

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yeni_nufus_kaydi`
--
ALTER TABLE `yeni_nufus_kaydi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `giris_ekranı`
--
ALTER TABLE `giris_ekranı`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yeni_nufus_kaydi`
--
ALTER TABLE `yeni_nufus_kaydi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
