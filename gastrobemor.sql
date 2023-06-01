-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 29 2023 г., 16:35
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gastrobemor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/user/registration/confirm', 2, NULL, NULL, NULL, 1596396267, 1596396267),
('/user/registration/connect', 2, NULL, NULL, NULL, 1596396267, 1596396267),
('/user/registration/register', 2, NULL, NULL, NULL, 1596396267, 1596396267),
('/user/registration/resend', 2, NULL, NULL, NULL, 1596396267, 1596396267),
('admin', 1, 'Administrator', 'admin', NULL, 1596395821, 1596426140),
('author', 1, 'Viloyat adminlari', 'author', NULL, 1596426118, 1596426174),
('debug', 2, 'Debugger management', 'admin', NULL, 1596426273, 1596426273),
('moderator', 1, 'Respublika admin', 'moderator', NULL, 1596426307, 1596426307),
('Permission management', 2, NULL, NULL, NULL, 1596426050, 1596426050),
('user', 1, 'Oddiy doyfalanuvchi', 'user', NULL, 1596426102, 1596426194),
('User management', 2, NULL, NULL, NULL, 1596396606, 1596426019);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 0x4f3a32383a226170705c636f6d706f6e656e74735c5573657247726f757052756c65223a333a7b733a343a226e616d65223b733a353a2261646d696e223b733a393a22637265617465644174223b693a313539363432353930383b733a393a22757064617465644174223b693a313539363432353930383b7d, 1596425908, 1596425908),
('author', 0x4f3a32383a226170705c636f6d706f6e656e74735c5573657247726f757052756c65223a333a7b733a343a226e616d65223b733a363a22617574686f72223b733a393a22637265617465644174223b693a313539363432353933333b733a393a22757064617465644174223b693a313539363432353933333b7d, 1596425933, 1596425933),
('moderator', 0x4f3a32383a226170705c636f6d706f6e656e74735c5573657247726f757052756c65223a333a7b733a343a226e616d65223b733a393a226d6f64657261746f72223b733a393a22637265617465644174223b693a313539363432363231353b733a393a22757064617465644174223b693a313539363432363231353b7d, 1596426215, 1596426215),
('user', 0x4f3a32383a226170705c636f6d706f6e656e74735c5573657247726f757052756c65223a333a7b733a343a226e616d65223b733a343a2275736572223b733a393a22637265617465644174223b693a313539363432353936363b733a393a22757064617465644174223b693a313539363432353936363b7d, 1596425966, 1596425966);

-- --------------------------------------------------------

--
-- Структура таблицы `bemor`
--

CREATE TABLE `bemor` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_day` int(11) NOT NULL,
  `telefon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jinsi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `olingan_signal` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `signal_1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `signal_2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `signal_3` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `signal_4` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tashxis` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `tashxis_file` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `manzili` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viloyat_id` int(11) NOT NULL,
  `tuman_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `bemor`
--

INSERT INTO `bemor` (`id`, `last_name`, `first_name`, `middle_name`, `birth_day`, `telefon`, `email`, `jinsi`, `created_at`, `updated_at`, `olingan_signal`, `signal_1`, `signal_2`, `signal_3`, `signal_4`, `tashxis`, `tashxis_file`, `manzili`, `avatar`, `viloyat_id`, `tuman_id`) VALUES
(13, 'Maxmudjanov', 'Sarvar', 'Ulug\'bekovich', 0, '+998(99) 950-29-58', 's.makhmudjanov@gmail.com', 'erkak', 1633775087, 1638350964, '', '', '', '', '', '', '', 'Toshkent', 'uploads/user/avatar/2021/Dec/01/xJ7HvT7wT13q.jpg', 0, 0),
(32, 'Aliqulov', 'Akmal', 'Xushmuratovich', 0, '+998(93) 600-01-11', 'akmalaliqulov@gmail.com', 'erkak', 1641384743, 1641385416, '', '', '', '', '', '', '', 'Toshkent', 'uploads/user/avatar/2022/Jan/05/Gds9BXtPCZFK.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `bizning_jamoa`
--

CREATE TABLE `bizning_jamoa` (
  `id` int(11) NOT NULL,
  `fish` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ish_joy` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rasm` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telegram` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `bizning_jamoa`
--

INSERT INTO `bizning_jamoa` (`id`, `fish`, `ish_joy`, `rasm`, `telegram`, `facebook`, `instagram`) VALUES
(1, 'Maxmudjanov Sarvar Ulugbekovich', 'TATU', 'uploads/bizningjamoa/rasm/2021/Dec/18/rwjccNAIMCaf.png', 'https://t.me/Sarvartuit', 'https://facebook.com/sarvar.mahmudjanov', 'sarvartuit'),
(2, 'ABDULLO', 'DMTT psixologi', 'uploads/bizningjamoa/rasm/2021/Dec/18/nfwoBC2vW_1o.jpg', '@Revanshino', '', ''),
(4, 'SAIDA Xasanova', 'Doktorant (PhD)', 'uploads/bizningjamoa/rasm/2021/Dec/30/IVZHlKgjQ6vZ.jpg', '@saida_ganijanovna', '', ''),
(5, 'LAYLO Salayeva', 'МТТДМҚТУМОИ кафедра катта ўқитувчиси', 'uploads/bizningjamoa/rasm/2021/Dec/30/W0XoWqn-QGv1.jpg', '', '', ''),
(6, 'INOMJON Teshaboyev', 'Qo\'qon universiteti katta o\'qituvchisi', 'uploads/bizningjamoa/rasm/2021/Dec/30/FztECvuW3whJ.jpg', '', '', ''),
(7, 'MUBINA', '', 'uploads/bizningjamoa/rasm/2021/Dec/30/dB8Zfr-wyZTa.jpg', '', '', ''),
(8, 'OTABEK Abduraxmonov', 'Namangan davlat universiteti katta o\'qituvchisi', 'uploads/bizningjamoa/rasm/2021/Dec/31/sU9W1bMlqJ2p.jpg', '', '', ''),
(9, 'ABDURASHID Abdumannobovich', 'Loyiha maslahatchisi', 'uploads/bizningjamoa/rasm/2021/Dec/31/96S4nM5rWBXV.png', 't.me/mtt_psixologi_uz', '', ''),
(10, 'MUNIRA SHODMONOVA', 'Navoiy shahar 7-son DMTT psixologi', NULL, 't.me/dmttpsixologi', '', ''),
(11, 'ABDUMALIK Abrayqulov', 'Portal dizayneri', NULL, '', '', ''),
(12, 'OTABEK Muxtorov', 'Andijon davlat universiteti o\'qituchisi', 'uploads/bizningjamoa/rasm/2022/Jan/01/XxUFEVLPtg-I.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `fikrlar`
--

CREATE TABLE `fikrlar` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `matn` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` int(11) NOT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `fikrlar`
--

INSERT INTO `fikrlar` (`id`, `user_id`, `matn`, `created_date`, `status`) VALUES
(26, 31, 'Жуда мухим лойиҳа йўлга куйилибди! Албатта хамкорлик киламиз, менда хам методикалар бор!!! Лойиҳани самарадорлиги жуда юкори бўлади албатта! Лойиҳа стратегияси психология соҳасини ривожлантиришга ва жамиятдаги жуда кўп жабҳалар тараққиётига мустаҳкам пойдевор бўлади!', 1641323096, 1),
(27, 34, 'Мазкур лойиха бугунги кунда жуда ахамиятли. Хамкасбим Мухтаров Отабек билан мактабгача таьлим муассасаларида болажонларнинг интеллектини ривожлантиришга каратилган методикалар устида эмпирик тахлил олиб бормокдамиз. Натижаларимизни албатта бахам курамиз.', 1641408873, 1),
(28, 35, 'Ushbu istiqbolli loyiha yangi tipdagi maktabgacha ta\'lim muassasalari faoliyatlari yanada takomillashuvida samarador ahamiyatga egadir! Loyiha doirasidagi metodikalar hamyonbop va adekvat. Hayrli loyihangizga doimo hayrihohmiz', 1641409718, 1),
(29, 41, 'Juda yaxshi tashkil etilibti barcha ma\'lumotlardan foydalanish uchun zarur barcha qo‘llanmalar mavjud', 1641975971, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gender`
--

INSERT INTO `gender` (`id`, `name`, `code`) VALUES
(1, 'Erkak', '1'),
(2, 'Ayol', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `hududiy_tashkilot`
--

CREATE TABLE `hududiy_tashkilot` (
  `id` int(11) NOT NULL,
  `nomi` varchar(2048) NOT NULL,
  `rahbar` varchar(256) NOT NULL,
  `viloyat_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hududiy_tashkilot`
--

INSERT INTO `hududiy_tashkilot` (`id`, `nomi`, `rahbar`, `viloyat_id`, `status`) VALUES
(3, 'Respublika vrachlar va farmasevtlarga litsenziya berishva attestatsiyadan o\'tkazish markazi', 'Maxmudjanov S.U.', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `hujjatlar`
--

CREATE TABLE `hujjatlar` (
  `id` int(11) NOT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `fayl` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `turi` int(2) NOT NULL,
  `narx` int(11) NOT NULL,
  `created_date` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `views` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `views_fake` int(11) DEFAULT NULL,
  `downloads_fake` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `hujjatlar`
--

INSERT INTO `hujjatlar` (`id`, `title`, `description`, `fayl`, `turi`, `narx`, `created_date`, `status`, `views`, `downloads`, `views_fake`, `downloads_fake`) VALUES
(1, 'O‘zbekiston Respublikasi Konstitutsiyasi', '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; text-indent: 35.45pt; line-height: normal; background: white;\"><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #333333; mso-fareast-language: RU;\">Ўзбекистон халқи: </span><span style=\"font-size: 14.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #333333; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">инсон ҳуқуқларига ва давлат суверенитети ғояларига содиқлигини тантанали равишда эълон қилиб, ҳозирги ва келажак авлодлар олдидаги юксак масъулиятини англаган ҳолда, ўзбек давлатчилиги ривожининг тарихий тажрибасига таяниб, демократия ва ижтимоий адолатга садоқатини намоён қилиб, халқаро ҳуқуқнинг умум эътироф этилган қоидалари устунлигини тан олган ҳолда, республика фуқароларининг муносиб ҳаёт кечиришларини таъминлашга интилиб, инсонпарвар демократик ҳуқуқий давлат барпо этишни кўзлаб, фуқаролар тинчлиги ва миллий тотувлигини таъминлаш мақсадида, ўзининг мухтор вакиллари сиймосида Ўзбекистон Республикасининг мазкур Конституциясини қабул қилади.</span></p>', 'uploads/metodikalar/fayl/2021/Nov/16/HN5Uwj4DkFd8.doc', 1, 0, 1639335600, 1, NULL, 6, NULL, 18),
(4, 'O‘zbekiston Respublikasining \"Ta’lim to‘g‘risida\" Qonuni', '<p class=\"MsoNormal\" style=\"background: white;\"><span lang=\"EN-US\" style=\"color: navy; mso-ansi-language: EN-US;\">Qonunchilik palatasi tomonidan 2020 yil 19 mayda qabul qilingan Senat tomonidan 2020 yil 7 avgustda ma&rsquo;qullangan.</span></p>\r\n<p><!-- [if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>RU</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <w:DoNotOptimizeForBrowser/>\r\n  <m:mathPr>\r\n   <m:mathFont m:val=\"Cambria Math\"/>\r\n   <m:brkBin m:val=\"before\"/>\r\n   <m:brkBinSub m:val=\"&#45;-\"/>\r\n   <m:smallFrac m:val=\"off\"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val=\"0\"/>\r\n   <m:rMargin m:val=\"0\"/>\r\n   <m:defJc m:val=\"centerGroup\"/>\r\n   <m:wrapIndent m:val=\"1440\"/>\r\n   <m:intLim m:val=\"subSup\"/>\r\n   <m:naryLim m:val=\"undOvr\"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"false\"\r\n  DefSemiHidden=\"false\" DefQFormat=\"false\" DefPriority=\"99\"\r\n  LatentStyleCount=\"371\">\r\n  <w:LsdException Locked=\"false\" Priority=\"0\" QFormat=\"true\" Name=\"Normal\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 9\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"header\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footer\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"35\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"caption\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of figures\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope return\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"line number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"page number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of authorities\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"macro\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"toa heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"10\" QFormat=\"true\" Name=\"Title\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Closing\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Signature\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Default Paragraph Font\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Message Header\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"11\" QFormat=\"true\" Name=\"Subtitle\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Salutation\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Date\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Note Heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Block Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Hyperlink\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"FollowedHyperlink\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"22\" QFormat=\"true\" Name=\"Strong\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"20\" QFormat=\"true\" Name=\"Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Document Map\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Plain Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"E-mail Signature\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Top of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Bottom of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal (Web)\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Acronym\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Cite\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Code\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Definition\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Keyboard\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Preformatted\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Sample\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Typewriter\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Variable\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Table\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation subject\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"No List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Contemporary\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Elegant\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Professional\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Balloon Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"Table Grid\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Theme\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Placeholder Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" QFormat=\"true\" Name=\"No Spacing\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Revision\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"34\" QFormat=\"true\"\r\n   Name=\"List Paragraph\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"29\" QFormat=\"true\" Name=\"Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"30\" QFormat=\"true\"\r\n   Name=\"Intense Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"19\" QFormat=\"true\"\r\n   Name=\"Subtle Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"21\" QFormat=\"true\"\r\n   Name=\"Intense Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"31\" QFormat=\"true\"\r\n   Name=\"Subtle Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"32\" QFormat=\"true\"\r\n   Name=\"Intense Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"33\" QFormat=\"true\" Name=\"Book Title\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"37\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Bibliography\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"TOC Heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"41\" Name=\"Plain Table 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"42\" Name=\"Plain Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"43\" Name=\"Plain Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"44\" Name=\"Plain Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"45\" Name=\"Plain Table 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"40\" Name=\"Grid Table Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"Grid Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"Grid Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"Grid Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"List Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"List Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"List Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 6\"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!-- [if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:\"Обычная таблица\";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:\"\";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin:0cm;\r\n	mso-para-margin-bottom:.0001pt;\r\n	mso-pagination:widow-orphan;\r\n	font-size:10.0pt;\r\n	font-family:\"Times New Roman\",serif;}\r\n</style>\r\n<![endif]--></p>', 'uploads/metodikalar/fayl/2021/Nov/22/iXFJaqBUo8ho.pdf', 1, 0, 1639681200, 1, NULL, 5, NULL, NULL),
(11, 'Конвенция о правах ребенка', '<p>Hujjat matni rus tilida berilgan.</p>\r\n<p>&nbsp;</p>', 'uploads/metodikalar/fayl/2021/Dec/17/wd3qdPYTGES8.doc', 1, 0, 1639681200, 1, NULL, 1, NULL, NULL),
(12, 'O‘zbekiston Respublikasining “Maktabgacha ta’lim va tarbiya to‘g‘risida” Qonuni', '<p class=\"MsoNormal\" style=\"background: white;\"><strong><span style=\"color: navy;\">Қонунчилик палатаси томонидан 2019 йил 22 октябрда қабул қилинган</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"background: white;\"><strong><span style=\"color: navy;\">Сенат томонидан 2019 йил 14 декабрда маъқулланган</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"background: white;\"><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Ушбу Қонуннинг мақсади мактабгача таълим ва тарбия соҳасидаги муносабатларни тартибга солишдан иборат.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/17/bNHcVXpquyk7.doc', 1, 0, 1639681200, 1, NULL, 3, NULL, NULL),
(13, 'O‘zbekiston Respublikasining “Bola huquqlarining kafolatlari to‘g‘risida” Qonuni', '<p class=\"MsoNormal\" style=\"margin-bottom: 3.0pt; line-height: normal;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: navy; mso-fareast-language: RU;\">Қонунчилик палатаси томонидан 2007 йил 23 ноябрда қабул қилинган<br />Сенат томонидан 2007 йил 1 декабрда маъқулланган</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 3.0pt; line-height: normal;\"><span style=\"font-size: 12pt; line-height: 107%; font-family: Arial, sans-serif;\">Ушбу Қонуннинг мақсади бола ҳуқуқларининг кафолатлари соҳасидаги муносабатларни тартибга солишдан иборат.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/17/YeGlNqvz4pOy.doc', 1, 0, 1639681200, 1, NULL, 3, NULL, NULL),
(14, 'O‘zbekiston Respublikasi Vazirlar Mahkamasining “Maktabgacha ta’lim va tarbiyaning davlat standartini tasdiqlash to‘g‘risida” qarori', '<p><span style=\"font-family: \'Times New Roman\', serif; font-size: 16px;\">Ўзбекистон Республикасининг </span><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">&laquo;Мактабгача таълим ва тарбия тўғрисида&raquo;ги&nbsp; <a href=\"http://lex.uz/ru/docs/4646908\"><span style=\"color: teal; text-decoration-line: none;\">Қонуни</span></a> ижросини таъминлаш, шунингдек, илк ва мактабгача ёшдаги болаларга самарали таълим-тарбия бериш ҳамда қулай шарт-шароитлар яратиш мақсадида қабул қилинган Вазирлар Маҳкамаси қарори.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/17/4VuMU4uXICfo.doc', 2, 0, 1639681200, 1, NULL, 5, NULL, NULL),
(15, '“Ilk qadam” maktabgacha ta’lim muassasasining Davlat o‘quv dasturi', '<p>Мактабгача таълим муассасасининг давлат ўқув дастури (қуйида: &laquo;МТМ давлат ўқув дастури&raquo;) Ўзбекистон Республикасининг илк ва мактабгача ёшдаги болаларни ривожланишига қўйиладиган Давлат талабларига мувофиқ ишлаб чиқилган меъёрий-ҳуқуқий ҳужжат бўлиб, унда мактабгача таълим муассасасининг мақсад ва вазифалари, ўқув-тарбиявий фаолиятнинг асосий ғоялари ифодаланган, шунингдек, болани таълимнинг кейинги босқичига ўтишидаги асосий компетенциялари белгиланган.&nbsp;</p>', 'uploads/metodikalar/fayl/2021/Dec/31/UbIUpXRdjirZ.pdf', 2, 0, 1639681200, 1, NULL, 3, NULL, NULL),
(16, '\"DMTT pedagoglarining ish xujjatlarini tasdiqlash to‘g‘risida\" Maktabgacha ta’lim vazirining buyrug‘i (155-buyruq)', '', 'uploads/metodikalar/fayl/2022/Jan/01/kjsLnHPvWvdg.pdf', 2, 0, 1639681200, 1, NULL, 3, NULL, NULL),
(17, '\"Davlat maktabgacha ta’lim tizimi xodimlari mehnatiga haq to‘lash tartibini yanada takomillashtirish chora-tadbirlari to‘g‘risida\" qaror', '<p><span style=\"font-size: 12pt; font-family: \'Times New Roman\', serif;\">Мактабгача таълим тизими ходимлари меҳнатига ҳақ тўлаш тартибини такомиллаштириш, келгусида мактабгача таълимни бошқариш самарадорлигини янада ошириш мақсадида Вазирлар Маҳкамаси қарори</span></p>', 'uploads/metodikalar/fayl/2021/Dec/17/6qKNZn7tj_Qo.doc', 2, 0, 1639681200, 1, NULL, 9, NULL, NULL),
(18, 'O‘q‘uv yili uchun Yillik (va oylik) ish rejasi SHAKLI (06.02 - (1, 2)', '<p class=\"MsoListParagraph\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: justify; text-indent: 35.45pt; line-height: normal; tab-stops: 42.55pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Maktabgacha ta&rsquo;lim tashkiloti psixologining o&lsquo;quv yili uchun yillik ish rejasi</span><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\"> 5 ta bo&lsquo;limdan iborat. </span><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Mazkur faylni yuklab olib, faoliyatingizda foydalanishingiz mumkin. Fayl (word) .doc shaklda.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/17/H_cH8KP624b0.rtf', 3, 0, 1639767600, 1, NULL, 24, NULL, NULL),
(19, 'O‘q‘uv yili uchun Yillik (va oylik) ish rejasi SHAKLIni to\'ldirish namunasi (06.02 - (1, 2)', '<p class=\"MsoListParagraph\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: justify; text-indent: 35.45pt; line-height: normal; tab-stops: 42.55pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Maktabgacha ta&rsquo;lim tashkiloti psixologining o&lsquo;quv yili uchun yillik (oylik) ish rejasi</span><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\"> 5 ta bo&lsquo;limdan iborat. Mazkur faylni yuklab olib, faoliyatingizda foydalanishingiz mumkin. Bynda \"</span><span style=\"font-family: \'Times New Roman\', serif; font-size: 18.6667px; text-indent: 47.2667px;\">o&lsquo;quv yili uchun</span><span style=\"font-family: \'Times New Roman\', serif; font-size: 18.6667px; text-indent: 47.2667px;\"> yillik (oylik) ish rejasi</span><span style=\"font-family: \'Times New Roman\', serif; font-size: 14pt; text-indent: 35.45pt;\">\"ning&nbsp;</span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 18.6667px;\">to\'ldirish bo\'yicha namuna keltirilgan. Fayl (word) .doc shaklda.</span></span></p>', 'uploads/metodikalar/fayl/2022/Feb/10/RbfYv6cgU96X.docx', 3, 6000, 1639681200, 1, NULL, 3, NULL, NULL),
(23, '\"Yil davomida o‘tkazadigan TADBIRLARI REJASI\" SHAKLI (06.02 - (3)', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Yil davomida o&lsquo;tkaziladigan tadbirlar.</span></strong>&nbsp;<span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Tadbirlar rejasiga psixolog faoliyati davomida tashkilot, tuman (shahar) miqyosida o&lsquo;tkaziladigan seminarlar, ochiq muloqotlar, treninglar, davra suhbatlari, oilalarga tashriflar, uchrashuvlar, mutaxassislar bilan mahorat maktablarini o&lsquo;tkazish shakli va muddatini belgilaydi.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/18/EPpB4owkm9wG.docx', 3, 0, 1639767600, 1, NULL, 11, NULL, NULL),
(24, '\"Yil davomida o‘tkazadigan TADBIRLARI REJASI\" SHAKLIni to\'ldirish namunasi (06.02 - (3)', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Yil davomida o&lsquo;tkaziladigan tadbirlar.</span> </strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Tadbirlar rejasiga psixolog faoliyati davomida tashkilot, tuman (shahar) miqyosida o&lsquo;tkaziladigan seminarlar, ochiq muloqotlar, treninglar, davra suhbatlari, oilalarga tashriflar, uchrashuvlar, mutaxassislar bilan mahorat maktablarini o&lsquo;tkazish shakli va muddatini belgilaydi.</span></p>', 'uploads/metodikalar/fayl/2022/Feb/10/kXMDoUEXeVue.docx', 3, 3000, 1639767600, 1, NULL, 2, NULL, 27);
INSERT INTO `hujjatlar` (`id`, `title`, `description`, `fayl`, `turi`, `narx`, `created_date`, `status`, `views`, `downloads`, `views_fake`, `downloads_fake`) VALUES
(25, '\"Ota-onalar va xodimlar uchun maslahatlar qaydnomasi\" SHAKLI (06.02 - (4)', '<p class=\"MsoListParagraph\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: justify; text-indent: 35.45pt; line-height: normal; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Ota-onalar va xodimlar uchun maslahatlar. </span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Ushbu bo&lsquo;limda psixolog maslahatiga muhtoj ota-onalar va xodimlarning murojaatlari hamda uning yechimi qayd etib boriladi. </span><em><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Izoh: Ma&rsquo;lumotlar yopiq saqlanadi.</span></em></p>', 'uploads/metodikalar/fayl/2021/Dec/18/4_VXyZNflp9S.docx', 3, 0, 1639767600, 1, NULL, 8, NULL, NULL),
(26, '\"Ota-onalar va xodimlar uchun maslahatlar qaydnomasi\" SHAKLini to\'ldirish namunasi (06.02 - (4)', '<p class=\"MsoListParagraph\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: justify; text-indent: 35.45pt; line-height: normal; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">4.</span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">&nbsp;</span><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Ota-onalar va xodimlar uchun maslahatlar. </span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Ushbu bo&lsquo;limda psixolog maslahatiga muhtoj ota-onalar va xodimlarning murojaatlari hamda uning yechimi qayd etib boriladi. </span><em><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Izoh: Ma&rsquo;lumotlar yopiq saqlanadi.</span></em></p>', 'uploads/metodikalar/fayl/2022/Feb/10/x2bgHiOfRFem.docx', 3, 3000, 1639767600, 1, NULL, 2, NULL, 27),
(27, '\"Umumiy o‘rta ta’limga ketadigan bolalar bilan olib boriladigan ISHLAR REJASI\" SHAKLI (06.02 - (5)', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">5.&nbsp;</span></strong><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">Umumiy o&lsquo;rta ta&rsquo;limga ketadigan bolalar bilan olib boriladigan ishlar.</span> </strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Bolalarni maktabga tayyorgarligini tekshirish uchun o&lsquo;tkaziladigan metodika va testlar o&lsquo;quv yili oxirida (aprel-mayda) o&lsquo;tkaziladi. Metodika va testlar natijalari ballar asosida aks ettiriladi. Metodika va testlar natijasida past ko&lsquo;rsatkich ko&lsquo;rsatgan bolalarni maktab psixologiga yo&lsquo;naltirish ishlari rejalashtiriladi.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/18/tFWbRisHK5cm.docx', 3, 0, 1639767600, 1, NULL, 7, NULL, NULL),
(28, '\"Umumiy o‘rta ta’limga ketadigan bolalar bilan olib boriladigan ISHLAR REJASI\" SHAKLini to\'ldirish namunasi (06.02 - (5)', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">5.&nbsp;</span></strong><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">Umumiy o&lsquo;rta ta&rsquo;limga ketadigan bolalar bilan olib boriladigan ishlar. </span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Bolalarni maktabga tayyorgarligini tekshirish uchun o&lsquo;tkaziladigan metodika va testlar o&lsquo;quv yili oxirida (aprel-mayda) o&lsquo;tkaziladi. Metodika va testlar natijalari ballar asosida aks ettiriladi. Metodika va testlar natijasida past ko&lsquo;rsatkich ko&lsquo;rsatgan bolalarni maktab psixologiga yo&lsquo;naltirish ishlari rejalashtiriladi.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/18/InjSQa7uhHOE.docx', 3, 4000, 1639767600, 1, NULL, 1, NULL, NULL),
(29, '\"Jarayonni kuzatish QAYDNOMASI\" SHAKLI (06.02 - (6)', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">6.</span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">&nbsp;<strong>Pedagogik jarayonni kuzatish. </strong></span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Kuzatuv daftari maktabgacha ta&rsquo;lim tashkiloti tarbiyalanuvchilari uchun guruhlar kesimida yuritiladi, bunda bolalarning moslashuv davri, ularning faoliyatlardagi ishtiroklari va pedagog-xodimlarning olib borayotgan ish jarayoni muntazam ravishda kuzatiladi. Kuzatuv jarayonida bolaning &ldquo;Ilk qadam&rdquo; davlat o&lsquo;quv dasturi asosida egallayotgan bilimlari, mashg&lsquo;ulot va o&lsquo;yinlarda tengdoshlari bilan munosabati, undan tashqari bolaning iqtidor qirralari, notinch, muammoli tomonlari, agressiya belgilari aniqlanishi mumkin (aniqlangan kamchiliklar kuzatuv natijasi bandida qayd etiladi).</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Kuzatuv natijalariga ko&lsquo;ra, psixolog tarbiyachi bilan birgalikda bolaning ta&rsquo;limiy-tarbiyaviy faoliyatdagi salbiy munosabati va aniqlangan muammolari yuzasidan induvidual ish olib boradi. Kuzatuv bir oyda 8-10 marotaba o&lsquo;tkaziladi.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/18/d1Qgyqwlt0gq.docx', 3, 0, 1639767600, 1, NULL, 9, NULL, NULL),
(30, '\"Jarayonni kuzatish QAYDNOMASI\" SHAKLini to\'ldirish namunasi (06.02 - (6)', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">6.</span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-bidi-font-family: \'Courier New\'; mso-ansi-language: UZ-CYR;\">&nbsp;<strong>Pedagogik jarayonni kuzatish. </strong></span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Kuzatuv daftari maktabgacha ta&rsquo;lim tashkiloti tarbiyalanuvchilari uchun guruhlar kesimida yuritiladi, bunda bolalarning moslashuv davri, ularning faoliyatlardagi ishtiroklari va pedagog-xodimlarning olib borayotgan ish jarayoni muntazam ravishda kuzatiladi. Kuzatuv jarayonida bolaning &ldquo;Ilk qadam&rdquo; davlat o&lsquo;quv dasturi asosida egallayotgan bilimlari, mashg&lsquo;ulot va o&lsquo;yinlarda tengdoshlari bilan munosabati, undan tashqari bolaning iqtidor qirralari, notinch, muammoli tomonlari, agressiya belgilari aniqlanishi mumkin (aniqlangan kamchiliklar kuzatuv natijasi bandida qayd etiladi).</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt; tab-stops: 42.55pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'Times New Roman\', serif;\">Kuzatuv natijalariga ko&lsquo;ra, psixolog tarbiyachi bilan birgalikda bolaning ta&rsquo;limiy-tarbiyaviy faoliyatdagi salbiy munosabati va aniqlangan muammolari yuzasidan induvidual ish olib boradi. Kuzatuv bir oyda 8-10 marotaba o&lsquo;tkaziladi.</span></p>', 'uploads/metodikalar/fayl/2021/Dec/18/oLyQM9WO0sW3.docx', 3, 3000, 1639767600, 1, NULL, 1, NULL, NULL),
(31, '\"Pedagoglar bilan o’zaro hamkorlik ish rejasi\" SHAKLI (06.03)', '', 'uploads/metodikalar/fayl/2021/Dec/18/4p_ttqdNuMkn.docx', 3, 0, 1639767600, 1, NULL, 8, NULL, NULL),
(32, '\"Pedagoglar bilan o’zaro hamkorlik ish rejasi\" SHAKLini to\'ldirish namunasi (06.03)', '', 'uploads/metodikalar/fayl/2021/Dec/18/syZWsnIWybSP.docx', 3, 5000, 1639767600, 1, NULL, 1, NULL, NULL),
(33, '\"Bolalarning psixologik rivojlanish darajalari ko‘rsatkichlari\" SHAKL (06.04)', '', 'uploads/metodikalar/fayl/2021/Dec/18/m-pDyewl_GHF.rtf', 3, 0, 1639767600, 1, NULL, 19, NULL, NULL),
(34, '\"Bolalarning psixologik rivojlanish darajalari ko‘rsatkichlari\" SHAKLini to\'ldirish namunasi (06.04)', '', 'uploads/metodikalar/fayl/2022/Feb/10/jrg0WOBOuI67.rtf', 3, 3000, 1639767600, 1, NULL, 2, NULL, 23),
(35, '\"Psixologik xulosalar va bolaning psixologik rivojlanish kartasi\" SHAKLini (06.04)', '', 'uploads/metodikalar/fayl/2021/Dec/18/R96vT39Y5Ozc.docx', 3, 0, 1639767600, 1, NULL, 10, NULL, NULL),
(36, '\"Psixologik xulosalar va bolaning psixologik rivojlanish kartasi\" SHAKLini to\'ldirish namunasi (06.04)', '', 'uploads/metodikalar/fayl/2021/Dec/18/bqClOhVhUhtM.docx', 3, 3000, 1639767600, 1, NULL, 2, NULL, NULL),
(37, '\"Korrektsion ish jurnali\" SHAKL (06.05)', '', 'uploads/metodikalar/fayl/2022/Feb/10/fe4WTb9j6llS.rtf', 3, 0, 1639767600, 1, NULL, 3, NULL, 51),
(38, '\"Korrektsion ish jurnali\" SHAKLini to\'ldirish namunasi (06.05)', '', 'uploads/metodikalar/fayl/2022/Feb/10/q-r_TPpwuwnS.rtf', 3, 4000, 1639767600, 1, NULL, 3, NULL, 24),
(41, 'O‘zbekiston Respublikasi Konstitutsiyasi', NULL, 'uploads/metodikalar/fayl/2021/Dec/30/o-RYHXZ-CMb0.doc', 4, 0, 1640804400, 1, NULL, 1, NULL, NULL),
(42, 'O‘zbekiston Respublikasining \"Ta’lim to‘g‘risida\" Qonuni', NULL, 'uploads/metodikalar/fayl/2021/Dec/30/xg7lV_ygGNI1.doc', 4, 0, 1640804400, 1, NULL, 2, NULL, NULL),
(43, 'Конвенция о правах ребенка', NULL, 'uploads/metodikalar/fayl/2021/Dec/30/R8nSoJHLJ6U5.doc', 4, 0, 1640887869, 1, NULL, NULL, NULL, NULL),
(44, 'O‘zbekiston Respublikasining “Bola huquqlarining kafolatlari to‘g‘risida” Qonuni', NULL, 'uploads/metodikalar/fayl/2021/Dec/30/QIp1AEw_uNbm.doc', 4, 0, 1640804400, 1, NULL, 1, NULL, NULL),
(45, 'O‘quvchilarni psixologik-pedagogik qo‘llab-quvvatlash ishlarini yanada takomillashtirish to‘g‘risida (577-son VM qarori)', NULL, 'uploads/metodikalar/fayl/2021/Dec/30/jVlHAl7Hv7rY.doc', 5, 0, 1640804400, 1, NULL, 3, NULL, NULL),
(48, 'Tushuntirish xati', NULL, 'uploads/metodikalar/fayl/2022/Jan/01/DTDGZCu0PjEP.pdf', 3, 0, 1640977200, 1, NULL, 12, NULL, NULL),
(49, 'Psixologik-pedagogik tashxis ishlarini qayd etish daftari', NULL, 'uploads/metodikalar/fayl/2022/Mar/17/Rz5xMpIqwjxy.docx', 6, 0, 1647457200, 1, NULL, 7, NULL, 16),
(50, 'Korreksion -rivojlantiruvchi ishlarni qayd etish daftari', NULL, 'uploads/metodikalar/fayl/2022/Mar/17/_JOvrBXB3nlI.docx', 6, 0, 1647457200, 1, NULL, 4, NULL, 18),
(51, 'Individual va guruhiy maslahatlarni qayd etish daftari', NULL, 'uploads/metodikalar/fayl/2022/Mar/17/Et_VBEGbIAvk.docx', 6, 0, 1647457200, 1, NULL, 8, NULL, 18),
(52, 'Psixologik ma’rifat ishlarinini qayd etish daftari', NULL, 'uploads/metodikalar/fayl/2022/Mar/17/5W-2dIYF2lFI.docx', 6, 0, 1647457200, 1, NULL, 4, NULL, 16);

-- --------------------------------------------------------

--
-- Структура таблицы `kasblar`
--

CREATE TABLE `kasblar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `kasblar`
--

INSERT INTO `kasblar` (`id`, `nomi`, `status`) VALUES
(3, 'MTT psixologi', 1),
(4, 'MTT tarbiyachisi', 1),
(7, 'Maktab psixologi', 1),
(10, 'Boshqa', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `kitoblar`
--

CREATE TABLE `kitoblar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `qisqa` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `muallif` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rasm` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `fayl` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `narx` int(11) NOT NULL,
  `created_date` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nashr_yili` int(4) DEFAULT NULL,
  `category_id` int(2) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `views_fake` int(11) DEFAULT NULL,
  `downloads_fake` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `kitoblar`
--

INSERT INTO `kitoblar` (`id`, `nomi`, `qisqa`, `muallif`, `rasm`, `fayl`, `narx`, `created_date`, `status`, `nashr_yili`, `category_id`, `views`, `downloads`, `views_fake`, `downloads_fake`) VALUES
(4, '“Endi, maktabga boraman” bolalarni maktabga psixologik tayyorlash', 'Ushbu “Endi, maktabga boraman” bolalarni maktabga psixologik tayyorlash maxsus dasturi asosida ishlab chiqilgan o‘quv qo‘llanma maktabgacha ta’lim tashkiloti tayyorlov guruhlaridagi bolalarini maktabga psixologik tayyorlash uchun mo‘ljallangan. Shuningdek, mazkur dasturdan maktabga tayyor bo‘lmagan boshlang‘ich sinf o‘quvchilari bilan korreksion ishlarni amalga oshirishda maktabning amaliyotchi pedagog-psixologlari ham foydalanishlari mumkin.', 'Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2021/Nov/20/rQ10BarE-z0J.jpg', 'uploads/kitoblar/fayl/2021/Dec/31/8ZeSThMBNyMD.pdf', 0, 0, 1, 2021, NULL, 203, 93, NULL, NULL),
(6, 'Maktabgacha yosh davridagi bolalarni psixologik jarayonlari diagnostikasi va korreksiyasi 1-qism', 'Ushbu “Maktabgacha yosh davridagi bolalarni psixologik jarayonlari diagnostikasi va korreksiyasi” uslubiy qo‘llanma maktabgacha ta’lim tashkiloti pedagogpsixologi tomonidan maktabgacha yosh davridagi (3-7 yosh) bolalarni bilish jarayonlarini diagnostika va korreksiya, shuningdek, korreksion-rivojlantirish ishlarini tashkil etish uchun mo‘ljallangan', 'Mualliflar guruhi', 'uploads/kitoblar/rasm/2022/Feb/10/Fm7TUKbLtm3C.jpeg', 'uploads/kitoblar/fayl/2022/Feb/19/BFjCB18Ge77E.pdf', 35000, 0, 1, 2021, NULL, 112, 12, 21, 19),
(7, 'Maktabgacha yosh davridagi bolalarni psixologik jarayonlari diagnostikasi va korreksiyasi 2-qism', 'Ushbu “Maktabgacha yosh davridagi bolalarni psixologik jarayonlari diagnostikasi va korreksiyasi” uslubiy qo‘llanma (2-qism) maktabgacha ta’lim tashkiloti psixologlari tomonidan maktabgacha yosh davridagi (3-7 yosh) bolalarda uchrab turadigan (tipik) psixologik muammolarini diagnostik va korreksion, shuningdek, korreksion-rivojlantiruvchi ishlarini tashkil etish uchun qo‘llanma bo‘lib xizmat qiladi', 'Mualliflar guruhi', 'uploads/kitoblar/rasm/2022/Feb/10/S7z5xR09rtyf.jpg', 'uploads/kitoblar/fayl/2022/Feb/19/nNIruzKoYQHm.pdf', 35000, 0, 1, 2021, NULL, 53, 17, 30, 18),
(9, 'Kasb-hunarga yo\'naltirish', 'O‘quv qo‘llanmada uzluksiz ta’lim tizimida kasbga yo‘naltirishning mazmun mohiyati, maktabgacha ta’lim muassasalarida kasbga yo‘naltirish, maktab o‘quvchilarini kasbga yo‘naltirish, ilg‘or xorijiy mamlakatlarda kasbga yo‘naltirish tajribasi, maktab o‘quvchilarini kasbni mustaqil tanlashga tayyorlashning nazariy-metodologik yondashuvlari va yuqori sinf o‘quvchilarini kasbni mustaqil tanlashga tayyorlash texnologiyalaridan foydalanish bo‘yicha o‘qituvchilarga uslubiy tavsiyalar taqdim etilgan.', 'Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2021/Nov/20/wVtyMhdv-2uA.jpg', 'uploads/kitoblar/fayl/2021/Nov/20/Ap6BkRp0A4EP.pdf', 0, 0, 1, 2019, NULL, 137, 19, 24, 17),
(10, '1-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'Mualliflar guruhi', 'uploads/kitoblar/rasm/2022/Jun/08/kzwQZj2IxXVX.png', 'uploads/kitoblar/fayl/2022/Jun/08/IyWix_T_W5eV.pdf', 12000, 0, 1, 2022, NULL, 26, NULL, 37, 33),
(11, '2-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/YraQPdWoA5_H.png', 'uploads/kitoblar/fayl/2022/Jun/08/ZbcCGsNa5Vvw.pdf', 12000, 0, 1, 2022, NULL, 9, NULL, 36, 30),
(12, '3-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/7igIuk17vCRB.png', 'uploads/kitoblar/fayl/2022/Jun/08/8HHB94ifIxtm.pdf', 12000, 0, 1, 2022, NULL, 7, NULL, 37, 30),
(13, '4-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/qmvnLQFaYIpl.png', 'uploads/kitoblar/fayl/2022/Jun/08/pqcgl5WQTq7M.pdf', 12000, 0, 1, 2022, NULL, 6, NULL, 36, 28),
(14, '5-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/OK4LrfqlZmbq.png', 'uploads/kitoblar/fayl/2022/Jun/08/Askks7AhkueY.pdf', 12000, 0, 1, 2022, NULL, 8, NULL, 36, 30),
(15, '6-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/y7qV7oCwHrAJ.png', 'uploads/kitoblar/fayl/2022/Jun/08/JXbSk9KvS-kk.pdf', 12000, 0, 1, 2022, NULL, 22, NULL, 36, 30),
(16, '7-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/xBBMjExTR5_f.png', 'uploads/kitoblar/fayl/2022/Jun/08/Mmd2I3N_IxyQ.pdf', 12000, 0, 1, 2022, NULL, 24, NULL, 39, 26),
(17, '8-qism. Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish', 'Ushbu “Maktabgacha yoshdagi bolalarning bilish jarayonlari va matematik tasavvurlarini rivojlantirish” uslubiy qo‘llanma Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan shu nomdagi innovatsion loyiha doirasida tayyorlangan bo‘lib, maktabgacha ta’lim yoshidagi bolalarning bilish jarayonlari va matematik tasavvurlarini o‘yin tamoyillari asosida rivojlantirishga asoslangan. Maktabgacha yoshdagi bolalarni rivojlantirishda mazkur qo‘llanmadan va uning onlayn imkoniyatlaridan maktabgacha ta’lim tizimining barcha xodimlari va ota-onalar foydalanishlari mumkin.', 'P.f.f.d. PhD, dots. Abdurashid Abdumannobovich Turg\'unov', 'uploads/kitoblar/rasm/2022/Jun/08/i5hS5pc2CAva.png', 'uploads/kitoblar/fayl/2022/Jun/08/3MfxUDvf7EXv.pdf', 12000, 0, 1, 2022, NULL, 12, NULL, 36, 28),
(18, 'Mаktаbgаchа tа’lim tizimidа psixologik xizmаtni rivojlаntirish. Monogrаfiya.', 'Mаktаbgаchа tа’lim tizimidа psixologik xizmаtni rivojlаntirish. Monogrаfiya. “Tafakkur qanoti”. Toshkent. – 2022. – 192 b.', 'Psixologiya fanlari doktori, dotsent Turg‘unov Abdurashid Abdumannobovich', 'uploads/kitoblar/rasm/2022/Dec/30/dX90T99SxiGZ.png', 'uploads/kitoblar/fayl/2022/Dec/30/vYJASCKvCFQD.pdf', 0, 0, 1, 2022, NULL, 4, NULL, 29, 3),
(19, 'Фарзанд тарбияси: Камчиликлар, хатолар, муаммолар ва уларнинг ечими (Тўлдирилган иккинчи нашр)', 'Мазкур ўқув-услубий қўлланма соғлом турмуш тарзини шакллантириш ва  соғлом болани тарбиялашга қаратилган бўлиб, унда бола тарбиясида ирсиятнинг  аҳамияти, ҳомиладорлик ва мактабгача ёш даврларида ота-оналар томонидан йўл  қўйилиши мумкин бўлган хатолар ва уларнинг кейинчалик намоён бўладиган  оқибатлари ҳамда уларнинг олдини олиш бўйича керакли йўл-йўриқлар, тавсия ва  маслаҳатлар берилган.', 'Psixologiya fanlari doktori (DSc), dotsent Ziyodaxon Rasulova', 'uploads/kitoblar/rasm/2023/Jan/13/aMkIezx_8r_E.jpg', 'uploads/kitoblar/fayl/2023/Jan/13/8FRkp_4PHH0j.pdf', 35000, 0, 1, 2020, NULL, 1, NULL, 30, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `kitob_turi`
--

CREATE TABLE `kitob_turi` (
  `id` int(11) NOT NULL,
  `nomi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `kitob_turi`
--

INSERT INTO `kitob_turi` (`id`, `nomi`, `status`) VALUES
(1, 'MTT Psixologiyasi', 1),
(2, 'Maktab psxologiyasi', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `korzinka`
--

CREATE TABLE `korzinka` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_type` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `order_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `mahsulot`
--

CREATE TABLE `mahsulot` (
  `id` int(11) NOT NULL,
  `nomi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `qisqa` text COLLATE utf8_unicode_ci NOT NULL,
  `narx` int(11) NOT NULL,
  `kategoriya` int(11) DEFAULT NULL,
  `yosh` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rasm` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `yoriqmona` int(1) NOT NULL,
  `motodik_natija` int(1) NOT NULL,
  `fayl` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `deleted_date` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `views` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `views_fake` int(11) DEFAULT NULL,
  `downloads_fake` int(11) DEFAULT NULL,
  `aloqa1` int(11) DEFAULT NULL,
  `aloqa2` int(11) DEFAULT NULL,
  `aloqa3` int(11) DEFAULT NULL,
  `mahsulotturi_id` int(11) DEFAULT NULL,
  `kasb_id` int(11) DEFAULT NULL,
  `index_uchun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `mahsulot`
--

INSERT INTO `mahsulot` (`id`, `nomi`, `qisqa`, `narx`, `kategoriya`, `yosh`, `rasm`, `yoriqmona`, `motodik_natija`, `fayl`, `created_date`, `updated_date`, `deleted_date`, `status`, `user_id`, `views`, `downloads`, `views_fake`, `downloads_fake`, `aloqa1`, `aloqa2`, `aloqa3`, `mahsulotturi_id`, `kasb_id`, `index_uchun`) VALUES
(6, 'Belgilarni to\'g\'ri qo\'y', '<p>Bola ilovadagi rasm yuqorisida ko&lsquo;rsatilgan namunadagidek, geometrik shakllar (kvadrat, uchburchak, aylana va romb) ichidagi belgilarni quyida ko&lsquo;rsatilgan, belgilari bo&lsquo;lmagan shakllar ichiga qo&lsquo;yib chiqish talab etiladi (rasm ilovada).</p>', 0, 4, '5', 'uploads/metodikalar/rasm/2021/Dec/31/qS_pr0ORY95o.png', 2, 2, 'uploads/metodikalar/fayl/2021/Dec/31/pqV8vUtT2H1_.pdf', 1640977200, NULL, NULL, 1, 0, 835, 27, 23, 15, 15, 9, 10, NULL, 3, 1),
(9, 'Nima tasvirlanganini top', '<p>Bolaga rasmning bir nechta qismlarini (navbatma-navbat) ko&lsquo;rsatib, unda nima tasvirlanganini aniqlash talab qilinadi. Bolaga rasmning &ldquo;A&rdquo; qismi ko&lsquo;rsatiladi va shu asosda rasmda nima tasvirlanganini topish taklif etiladi (10 soniya vaqt beriladi).</p>', 0, 4, '5', 'uploads/metodikalar/rasm/2021/Dec/31/yTEXX70hZn2i.png', 2, 2, 'uploads/metodikalar/fayl/2021/Dec/31/KjsOk5-tLAvr.pdf', -21600, NULL, NULL, 1, 0, 11, 12, 22, 18, 14, 10, 6, NULL, 3, 0),
(10, 'Idrok va tafakkurning rivojlanish darajasini aniqlash', '<p>Maktabgacha yoshdagi bolalarning idrok va tafakkurining rivojlanganlik darajasini aniqlash.</p>', 0, 4, '5', 'uploads/metodikalar/rasm/2022/Jan/01/0vyWY21HZHXg.jpeg', 2, 2, 'uploads/metodikalar/fayl/2021/Dec/31/DJLCGsPUdPk9.pdf', -21600, NULL, NULL, 1, 0, 41, 13, 67, 31, 6, NULL, 10, NULL, NULL, NULL),
(14, 'Yil fasllari', '<p><span lang=\"UZ-CYR\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: \'Times New Roman\', serif;\">Болага иловадаги расмларни кўрсатиб (навбатма-навбат), унда нима тасвирланганини сўраш керак бўлади</span></p>', 0, 4, '3-4', 'uploads/metodikalar/rasm/2022/Jan/01/766BmeiAWTFK.jpg', 2, 2, 'uploads/metodikalar/fayl/2022/Jan/01/baGxMToZ9YDB.pdf', -21600, NULL, NULL, 1, 0, 60, 22, 10, 3, 6, 9, 10, NULL, 3, 0),
(15, 'Kern-Yerasik. Maktabga tayyorlikni aniqlash testi', '<p><span lang=\"UZ-CYR\" style=\"font-size: 14pt; line-height: 115%;\"><span style=\"font-size: 14pt; line-height: 107%;\"><span style=\"font-family: Times New Roman, serif;\">T</span></span><span style=\"font-family: Calibri, sans-serif; font-size: 14pt; line-height: 107%;\">estdan to\'g\'ri foydalanish uchun \"Psixologga yo\'riqnoma\" va \"Maktabga tayyorlikni aniqlash testi varaqasi\"</span><span lang=\"EN-US\" style=\"font-family: Calibri, sans-serif; font-size: 14pt; line-height: 107%;\">ni</span><span style=\"font-family: Calibri, sans-serif; font-size: 14pt; line-height: 107%;\"> yuklab olishingiz mumkin.</span></span></p>', 0, 4, '6 - 7', 'uploads/metodikalar/rasm/2022/Jan/01/zfzeoHODDyyG.jpeg', 3, 3, 'uploads/metodikalar/fayl/2022/Jan/01/_ov32ycdWK2l.pdf', -21600, NULL, NULL, 1, 0, 28, 13, 22, 17, 6, 10, 9, NULL, 3, 0),
(16, '\"Psixologga yo\'riqnoma\" Kern-Yerasik. Maktabga tayyorlikni aniqlash testi', '<p><strong><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">\"</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">Psixologga</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">yo</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">\'</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">riqnoma</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">\"</span></strong><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">da</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">Siz</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">mazkur</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">metodikadan</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> (</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">testdan</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">) </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">foydalanishingiz</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">uchun</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">to</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">&rsquo;</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">liq</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">ko</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">&rsquo;</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">rsatma</span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\"> </span><span lang=\"EN-US\" style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">mavjud</span><span style=\"font-size: 14pt; line-height: 107%; font-family: Calibri, sans-serif;\">.</span></p>', 3000, 3, '6 - 7', 'uploads/metodikalar/rasm/2022/Jan/01/aiMyKFJlUPv-.jpeg', 2, 2, 'uploads/metodikalar/fayl/2022/Jan/01/20qbiSMFG0MQ.pdf', 1640977200, NULL, NULL, 1, 0, 353, 3, 23, 18, 15, 10, 6, NULL, 3, 1),
(17, 'Maktabga tayyorlikni aniqlash testi varaqasi', '<p>\"Maktabga tayyorlikni aniqlash testi varaqasi\" - bolani \"Maktabga tayyorlikni aniqlash testi\"dan o\'tkazishda barcha topshiriqlar uchun joy ajratilgan tayyor \"blanka\". Test natijalarini jamlab borish uchun qulay.</p>', 1000, 4, '6 - 7', 'uploads/metodikalar/rasm/2022/Jan/01/TsmgjFMD5qC7.jpeg', 2, 3, 'uploads/metodikalar/fayl/2022/Jan/01/20xpuMyoignD.pdf', 1640977200, NULL, NULL, 1, 0, 64, 14, 22, 21, 15, 16, 10, NULL, 3, 0),
(18, '“9 ta SHAKL” metodikasi', '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; text-indent: 35.45pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Metodikaning maqsadi</span></strong><strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">:</span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\"> </span><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">Bolaning ko&rsquo;rib, eslab qolish darajasini aniqlash.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; text-indent: 35.45pt;\"><strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-theme-font: minor-fareast; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Yosh toifasi: </span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-theme-font: minor-fareast; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">6-7 yosh.</span></p>', 0, 4, '6 - 7 ', 'uploads/metodikalar/rasm/2022/Jan/01/PqwGS7onBY6g.jpeg', 2, 3, 'uploads/metodikalar/fayl/2022/Jan/01/X61fesMfdBNi.pdf', 1640977200, NULL, NULL, 1, 0, 55, 13, 23, 13, 15, 16, 17, NULL, 3, 0),
(19, '“Grafik diktant” metodikasi', '<h4 style=\"text-indent: 35.45pt; line-height: 1; text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><span lang=\"UZ-CYR\" style=\"color: black;\">Metodikaning maqsadi:</span>&nbsp;Bolaning vizual va eshitish idrokni rivojlantirish, tahlil, sintez, xotirani shakllantirish, qat&rsquo;iyatlilikni tarbiyalash, katak qog&lsquo;ozda harakat qilish ko&lsquo;nikmalarini rivojlantirish.</span></h4><h4 style=\"text-indent: 35.45pt; line-height: 1; text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><span lang=\"UZ-CYR\" style=\"color: black;\">Shuningdek, metodikadan to\'g\'ri foydalanish uchun \"Psixologga yo\'riqnoma\"</span>ni yuklab olib, foydalanihsingiz mumkin. </span><span style=\"font-family: \'times new roman\', times, serif;\"><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\">Unda</span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">Siz</span></span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">mazkur</span></span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">metodikadan</span></span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">(</span>testdan) <span lang=\"UZ-CYR\">foydalanishingiz</span></span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">uchun</span></span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">to</span>&rsquo;liq</span><span lang=\"UZ-CYR\" style=\"text-align: justify; text-indent: 35.45pt;\"> <span lang=\"UZ-CYR\">ko</span>&rsquo;rsatma</span><span lang=\"EN-US\" style=\"text-align: justify; text-indent: 35.45pt;\">lar <span lang=\"UZ-CYR\">mavjud</span>.</span></span></h4>', 0, 4, '6 - 7', 'uploads/metodikalar/rasm/2022/Jan/01/wxeeJEtr3nWz.jpeg', 3, 2, 'uploads/metodikalar/fayl/2022/Jan/01/UAxBF1cBR7m1.pdf', 1640977200, NULL, NULL, 1, 0, 413, 14, 25, 16, 15, 16, 18, NULL, 3, 1),
(20, '\"Psixologga yo\'riqnoma\". “Grafik diktant” metodikasi', '<p class=\"MsoNormal\" style=\"margin-bottom: 6.0pt; text-align: justify; text-indent: 35.45pt; line-height: 115%;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Metodikaning maqsadi:</span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\"> Bolaning vizual va eshitish idrokni rivojlantirish, tahlil, sintez, xotirani shakllantirish, qat&rsquo;iyatlilikni tarbiyalash, katak qog&lsquo;ozda harakat qilish ko&lsquo;nikmalarini rivojlantirish.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 6.0pt; text-align: justify; text-indent: 35.45pt; line-height: 115%;\"><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Grafik diktant &ndash; bu korreksion-rivojlanish yo&lsquo;nalishi mashqlari. </span><span style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif;\">Grafik diktantni bajarish, bolalar zarur grafik ko&lsquo;nikmalarga ega bo&lsquo;ladilar, katak varaqda harakat qilishni o&lsquo;rganadilar, bolalarda vizual va eshitish idrokini, diqqat va xotiraning erkinligini rivojlanadi.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 6.0pt; text-align: justify; text-indent: 35.45pt; line-height: 115%;\"><strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">Yosh toifasi: </span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">6-7 yosh.</span></p>', 0, 4, '6 - 7', 'uploads/metodikalar/rasm/2022/Jan/01/r0uP_kYTpH5M.jpeg', 2, 2, 'uploads/metodikalar/fayl/2022/Jan/01/j0UjzN3vVjsi.pdf', 1640977200, NULL, NULL, 1, 0, 34, 9, 25, 36, 15, 18, 19, NULL, 3, 0),
(21, '“Uycha” metodikasi', '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; text-indent: 35.45pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Metodikaning maqsadi</span></strong><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">:</span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\"> </span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-bidi-font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-ansi-language: UZ-CYR;\">Bolada namunaga qarab ishlash, predmetni aniq ko&rsquo;chira olish malakasi, ixtiyoriy diqqati, idroki, fazoviy tasavvuri, mayda qo&rsquo;l motorikasining rivojlanish darajasini aniqlash.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; text-indent: 35.45pt;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-theme-font: minor-fareast; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Yosh toifasi: </span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-bidi-font-size: 26.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-theme-font: minor-fareast; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">6-7 yosh.</span></p>', 0, 4, '6-7 ', 'uploads/metodikalar/rasm/2022/Jan/01/oFP3759v5ox9.png', 2, 2, 'uploads/metodikalar/fayl/2022/Jan/01/mFwpw9pbAv8n.pdf', 1640977200, NULL, NULL, 1, 0, 135, 23, 42, 41, 15, 19, 18, NULL, 3, 0),
(22, 'Bola bilan suhbati uchun savollar', '<p style=\"text-align: justify;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-theme-font: minor-fareast; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Bola bilan suhbatlashish jarayonida u siz bilan suhbatlashishni istashi muhim. Agar siz bolani qiziqtira olmasangiz, sizning savollaringizga bolaning beradigan javoblarini uning ijtimoiy yetuklik ko&lsquo;rsatkichi sifatida qarash mumkin emas.</span></p>', 0, 4, '6 - 7 ', 'uploads/metodikalar/rasm/2022/Jan/01/0m3whLYgxcdu.jpeg', 2, 2, 'uploads/metodikalar/fayl/2022/Jan/01/nXYgg0Gl4JwA.pdf', 1640977200, NULL, NULL, 1, 0, 128, 22, 31, 31, 15, 19, 21, NULL, 3, 0),
(25, 'O‘quvchining maktabga ... munosabatini aniqlash metodikasi', '<p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt;\"><strong style=\"text-indent: 35.45pt;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-ansi-language: EN-US;\">Yosh toifasi: </span></strong><span lang=\"EN-US\" style=\"text-indent: 35.45pt; font-size: 14pt;\">4-5 sinf o&lsquo;quvchilari.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt;\"><strong style=\"text-indent: 35.45pt;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; mso-ansi-language: EN-US;\">Maqsad:</span></strong><span lang=\"EN-US\" style=\"text-indent: 35.45pt; font-size: 14pt;\">&nbsp;</span><span lang=\"UZ-CYR\" style=\"text-indent: 35.45pt; font-size: 14pt;\">O&lsquo;quvchining maktabga, bilim olishga va sinfdoshlarining unga bo&lsquo;lgan munosabatini aniqlash</span><span lang=\"EN-US\" style=\"text-indent: 35.45pt; font-size: 14pt;\">.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Natijalarni qayta ishlash uchun </span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Si</span><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">z</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">ga qulaylik yaratish maqsadida</span><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\"> </span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">jamoa</span><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">miz</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\"> tomonidan tayyorlagan<strong> &ldquo;Munosabatini aniqlash</strong></span><strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">&nbsp;&ndash;&nbsp;</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Psixologga yo</span><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">&lsquo;</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">riqnoma&rdquo;</span></strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\"> </span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">faylni yuklab oling</span><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">.</span></p>', 0, 4, '11-12', NULL, 3, 3, 'uploads/metodikalar/fayl/2022/Jan/06/LYGzLIwv5iAG.pdf', 1641409200, NULL, NULL, 1, 0, 56, 12, 25, 18, 26, 27, NULL, NULL, 7, 0),
(26, 'Psixologga yo‘riqnoma \"O‘quvchining maktabga, bilim olishga va sinfdoshlarining unga bo‘lgan munosabatini aniqlash\" metodikasi', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt;\"><span style=\"font-family: \'times new roman\', times, serif;\"><strong><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-ansi-language: UZ-CYR;\">Psixologga ko&lsquo;rsatma:</span></strong></span></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'times new roman\', times, serif;\">O&lsquo;quvchilar soniga nisbatan <strong>ilovani</strong> chop etib, о&lsquo;quvchilargi tegishli kо&lsquo;rsatmalar beriladi.</span></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 35.45pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14pt; font-family: \'times new roman\', times, serif;\">O&lsquo;quvchilardan metodikaga javoblarini belgilab bо&lsquo;lganidan sо&lsquo;ng natijalar tahlilini amalga oshirish uchun yig&lsquo;ib olinadi.</span></p><p><span style=\"font-family: \'times new roman\', times, serif;\"> <span lang=\"UZ-CYR\" style=\"font-size: 14pt;\">Natijalarni qayta ishlash uchun avvalo portaldan <strong>&ldquo;Munosabatini aniqlash.<br />4-5-sinf. (formula-jadval)&rdquo;</strong></span><strong><span lang=\"UZ-CYR\" style=\"font-size: 14pt;\"> </span></strong><span lang=\"EN-US\" style=\"font-size: 14pt;\">faylini</span><span lang=\"UZ-CYR\" style=\"font-size: 14pt;\"> yuklab olishingiz lozim.</span></span></p>', 3000, 4, '11-12 ', NULL, 3, 3, 'uploads/metodikalar/fayl/2022/Jan/06/zkv0_dNeqqkb.pdf', 1641409200, NULL, NULL, 1, 0, 80, 6, 22, 21, 25, 27, NULL, NULL, 7, 0),
(27, 'Psixologga yo‘riqnoma Excel \"O‘quvchining maktabga, bilim olishga va sinfdoshlarining unga bo‘lgan munosabatini aniqlash\" metodikasi', '<p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt;\"><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; mso-ansi-language: UZ-CYR;\">Unda jamoamiz tomonidan natijalarni qayta ishlash uchun tayyor formula-jadval tayyorlangan. Siz u orqali oson va qisqa muddatda natijalarni qayta ishlashingiz va tayyor <strong style=\"mso-bidi-font-weight: normal;\">&ldquo;O&lsquo;quvchining maktabga, bilim olishga va sinfdoshlarining unga bo&lsquo;lgan munosabatini aniqlash&rdquo; metodikasi natijalari to&lsquo;g&lsquo;risida ma&rsquo;lumot&rdquo;</strong>ga ega bo&lsquo;lishingiz mumkin.</span></p>', 4000, 3, '11-12', NULL, 2, 2, 'uploads/metodikalar/fayl/2022/Jan/06/mrlVo7krU3r3.xlsx', 1641409200, NULL, NULL, 1, 0, 121, 2, 23, 18, 25, 26, 17, NULL, 7, 0),
(28, 'O‘quvchilarning fanlarga bo‘lgan qiziqishlarini aniqlash bo‘yicha test', '<p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt; line-height: 115%;\"><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\">Maqsad:</span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\"> O&lsquo;quvchilarning fanlarga bo&lsquo;lgan qiziqishlarini aniqlashga hizmat qiladi.</span></p>', 0, 4, '15-16', NULL, 2, 2, 'uploads/metodikalar/fayl/2022/Apr/30/e2DIEzmb_rZi.pdf', 1651258800, NULL, NULL, 1, 0, 23, 1, 15, 14, 25, 26, 27, NULL, 7, 0),
(29, 'Psixologga yo‘riqnoma \"O‘quvchilarning fanlarga bo‘lgan qiziqishlarini aniqlash\" bo‘yicha test', '<p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt; line-height: 115%;\"><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\">Metodikani</span></strong><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: UZ-CYR;\"> </span></strong><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: UZ-CYR;\">o&lsquo;tkazish davri</span></strong><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\">:</span></strong><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: UZ-CYR;\"> </span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\">aprel</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: UZ-CYR;\"> oyi.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 4.0pt; text-align: justify; text-indent: 35.45pt; line-height: 115%;\"><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\">Maqsad:</span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; line-height: 115%; mso-ansi-language: EN-US;\"> O&lsquo;quvchilarning fanlarga bo&lsquo;lgan qiziqishlarini aniqlashga hizmat qiladi.</span></p>', 4000, 4, '15-16', NULL, 2, 2, 'uploads/metodikalar/fayl/2022/Apr/30/7zPD-wviUo5z.pdf', 1651258800, NULL, NULL, 1, 0, 32, NULL, 22, 20, 28, 26, 26, NULL, 7, 0),
(30, '“Intellekt tiplari” anketa so‘rovnomasi (G.Gardner)', '<p><strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Maqsad:</span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">&nbsp;</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">O&lsquo;quvchining </span><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">qanday intellect tipiga mansubligini aniqlashga xizmat qiladi.</span></p>', 1000, 4, '15-16', NULL, 2, 2, 'uploads/metodikalar/fayl/2022/May/05/M1WU6AxOUX8J.pdf', 1651690800, NULL, NULL, 1, 0, 38, NULL, 22, 18, 25, 28, 27, NULL, 7, 0),
(31, 'O‘quv motivatsiyasining yo‘nalganligini tashxis qilish metodikasi', '<p><strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">Maqsad:</span></strong><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">&nbsp;</span><span lang=\"UZ-CYR\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: UZ-CYR; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">O&lsquo;quvchining </span><span lang=\"EN-US\" style=\"font-size: 14.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">o&lsquo;quv fanlariga nisbatan motivatsion yo&lsquo;nalganligini aniqlash.</span></p>', 1000, 4, '14-16', NULL, 2, 2, 'uploads/metodikalar/fayl/2022/May/05/TVS5_JmwkPsI.pdf', 1651690800, NULL, NULL, 1, 0, 52, NULL, 26, 16, 30, 29, 27, NULL, 7, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `mahsulot_tavsiya`
--

CREATE TABLE `mahsulot_tavsiya` (
  `id` int(11) NOT NULL,
  `mahsulot_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `mahsulot_tavsiya`
--

INSERT INTO `mahsulot_tavsiya` (`id`, `mahsulot_id`, `user_id`, `status`) VALUES
(1, 19, 13, 1),
(2, 27, 13, 1),
(3, 6, 193, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `mahsulot_turi`
--

CREATE TABLE `mahsulot_turi` (
  `Id` int(11) NOT NULL,
  `nomi` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `mahsulot_turi`
--

INSERT INTO `mahsulot_turi` (`Id`, `nomi`, `status`) VALUES
(6, 'Diagnostik', 1),
(7, 'Korreksion', 1),
(8, 'Rivojlantiruvchi', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `mijoz_pm`
--

CREATE TABLE `mijoz_pm` (
  `id` int(11) NOT NULL,
  `nomi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `qisqa` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fayl` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `admin_fikr` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kategoriya_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `mijoz_pm`
--

INSERT INTO `mijoz_pm` (`id`, `nomi`, `qisqa`, `fayl`, `user_id`, `created_date`, `status`, `admin_fikr`, `kategoriya_id`) VALUES
(4, 'ривожлантириш методикаси', 'ривожлантириш учун ишлатилади', 'uploads/metodikapm/fayl/2021/Dec/05/Rri1QHOILak8.docx', 15, -21600, 3, 'Тест қабул қилинди', 4),
(8, 'Керн йерасик тести', 'Болаларни мактабга тайёрлигини аниқлашда фойдаланилади.', 'uploads/metodikapm/fayl/2022/Jan/01/HR6mNtoathZy.docx', 15, 1640977200, 3, 'Тест қабул қилинди', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'payme',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `product_ids`, `amount`, `state`, `user_id`, `phone`, `type`, `created_at`, `date`) VALUES
(6, '', '1000.00', 2, 21, '+998(97) 455-95', 'payme', '2021-12-09 13:55:32', '2021-12-22 09:06:07'),
(17, '', '1000.00', 2, 21, '+998(97) 455-95', 'payme', '2021-12-09 13:55:32', '2021-12-22 09:06:07'),
(43, '', '500.00', 2, 21, '+998(97) 455-95', 'click', '2021-12-21 13:12:12', '2021-12-22 09:06:07'),
(45, '', '35000.00', 2, 21, '+998(97) 455-95', 'payme', '2021-12-21 14:36:42', '2021-12-22 09:06:07'),
(59, '', '1000.00', 2, 21, '+998(97) 455-95', 'click', '2021-12-22 09:20:08', '2021-12-22 09:20:08'),
(61, '', '6000.00', 2, 21, '+998(97) 455-95', 'payme', '2021-12-22 11:58:29', '2021-12-22 11:58:29'),
(66, '', '1000.00', 2, 15, '+998(99) 801-01', 'payme', '2021-12-30 17:41:36', '2021-12-30 17:41:36'),
(67, '', '6000.00', 2, 15, '+998(99) 801-01', 'payme', '2021-12-30 18:02:44', '2021-12-30 18:02:44'),
(71, '', '1000.00', 2, 20, '+998(99) 884-21', 'click', '2021-12-31 10:31:05', '2021-12-31 10:31:05'),
(72, '', '1000.00', 2, 13, '+998(99) 950-29', 'payme', '2021-12-31 10:54:14', '2021-12-31 10:54:14'),
(74, '', '35000.00', 2, 15, '+998(99) 801-01', 'payme', '2021-12-31 15:09:29', '2021-12-31 15:09:29'),
(76, '', '1000.00', 2, 15, '+998(99) 801-01', 'payme', '2022-01-01 06:30:07', '2022-01-01 06:30:07'),
(77, '', '3000.00', 2, 15, '+998(99) 801-01', 'payme', '2022-01-01 07:53:45', '2022-01-01 07:53:45'),
(81, '', '1000.00', 2, 13, '+998(99) 950-29', 'payme', '2022-01-10 11:21:02', '2022-01-10 11:21:02'),
(89, '', '35000.00', 2, 44, '+998(33) 169-36', 'payme', '2022-01-17 06:35:03', '2022-01-17 06:35:03'),
(116, '', '35000.00', 2, 21, '+998(97) 455-95', 'payme', '2022-01-17 16:21:58', '2022-01-17 16:21:58'),
(117, '', '3000.00', 2, 21, '+998(97) 455-95', 'payme', '2022-01-17 16:35:20', '2022-01-17 16:35:20'),
(118, '', '35000.00', 2, 44, '+998(33) 169-36', 'payme', '2022-01-18 05:32:52', '2022-01-18 05:32:52'),
(119, '', '24000.00', 2, 30, '+998(94) 150-55', 'click', '2022-01-19 13:34:47', '2022-01-19 13:34:47'),
(129, '', '3000.00', 2, 62, '+998(90) 996-93', 'payme', '2022-02-07 06:21:57', '2022-02-07 06:21:57'),
(130, '', '1000.00', 2, 62, '+998(90) 996-93', 'payme', '2022-02-07 09:06:23', '2022-02-07 09:06:23'),
(131, '', '3000.00', 2, 67, '+998(90) 071-09', 'click', '2022-02-09 16:01:58', '2022-02-09 16:01:58'),
(132, '', '10000.00', 2, 67, '+998(90) 071-09', 'click', '2022-02-12 15:03:27', '2022-02-12 15:03:27'),
(134, '', '35000.00', 2, 46, '+998(99) 134-38', 'click', '2022-02-25 11:24:40', '2022-02-25 11:24:40'),
(136, '', '35000.00', 2, 46, '+998(99) 134-38', 'click', '2022-02-25 11:39:13', '2022-02-25 11:39:13'),
(139, '', '4000.00', 2, 67, '+998(90) 071-09', 'click', '2022-04-09 19:12:53', '2022-04-09 19:12:53');

-- --------------------------------------------------------

--
-- Структура таблицы `sahifalar`
--

CREATE TABLE `sahifalar` (
  `id` int(11) NOT NULL,
  `title` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `menyu_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `rasm` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qisqa` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fayl` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `deleted_date` int(11) DEFAULT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `videolink` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `sahifalar`
--

INSERT INTO `sahifalar` (`id`, `title`, `menyu_id`, `content`, `rasm`, `qisqa`, `fayl`, `created_date`, `deleted_date`, `updated_date`, `status`, `videolink`) VALUES
(9, 'Bolani maktabga psixologik tayyorligini tekshirish', 0, '<p>Bolani maktabga psixologik tayyorligini tekshirish.</p>', 'uploads/yangiliklar/rasm/2021/Nov/20/EBRMo0Vig_ko.jpg', 'Bolani maktabga psixologik tayyorligini tekshirish', NULL, NULL, NULL, NULL, 1, 'https://www.youtube.com/watch?v=q__Ww9l__EQ'),
(10, 'MAKTABGACHA YOSHDA O`YIN FAOLIYATINI QO`LLASH', 0, '<p>MAKTABGACHA YOSHDA O`YIN FAOLIYATINI QO`LLASH</p>', 'uploads/yangiliklar/rasm/2021/Nov/22/HnKnEUKF_2JE.jpg', 'MAKTABGACHA YOSHDA O`YIN FAOLIYATINI QO`LLASH', NULL, NULL, NULL, NULL, 1, 'https://www.youtube.com/watch?v=9vOfjynWV78'),
(11, 'SHAXSNING HATTI HARAKATLARINI O`RGANAMIZ', 0, '<p>SHAXSNING HATTI HARAKATLARINI O`RGANAMIZ</p>', 'uploads/yangiliklar/rasm/2021/Nov/22/Bz2bFMdTB47z.jpg', 'SHAXSNING HATTI HARAKATLARINI O`RGANAMIZ', NULL, NULL, NULL, NULL, 1, 'https://www.youtube.com/watch?v=wCnKHXyh__M'),
(12, 'Farzandingizning psixologik holati ota-onalarning munosabatiga bog‘liq', 0, '<p>Farzandingizning psixologik holati ota-onalarning munosabatiga bog&lsquo;liq</p>', 'uploads/yangiliklar/rasm/2021/Nov/22/ST31vLO7D6Ba.jpg', 'Farzandingizning psixologik holati ota-onalarning munosabatiga bog‘liq', NULL, NULL, NULL, NULL, 1, 'https://www.youtube.com/watch?v=BHxmcwSK780');

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `paycom_transaction_id` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `paycom_time` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `paycom_time_datetime` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `perform_time` datetime DEFAULT NULL,
  `cancel_time` datetime DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `state` tinyint(2) NOT NULL,
  `reason` tinyint(2) DEFAULT NULL,
  `receivers` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'JSON array of receivers',
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `transactions`
--

INSERT INTO `transactions` (`id`, `paycom_transaction_id`, `paycom_time`, `paycom_time_datetime`, `create_time`, `perform_time`, `cancel_time`, `amount`, `state`, `reason`, `receivers`, `order_id`) VALUES
(1, '619625a90f0bf6dea51fe133', '1637230040033', '2021-11-18 15:07:20', '2021-11-18 15:07:20', '2021-11-18 15:07:21', NULL, 100000, 2, NULL, NULL, 6),
(2, '61ac7c9054a8a59010540b8a', '1638694069736', '2021-12-05 13:47:49', '2021-12-05 13:47:50', '2021-12-05 13:47:51', NULL, 100000, 2, NULL, NULL, 17),
(3, '61cdef535e8cd68ec3c40519', '1640886142065', '2021-12-30 22:42:22', '2021-12-30 22:42:22', '2021-12-30 22:42:23', NULL, 100000, 2, NULL, NULL, 66),
(4, '61cdf446def2b658c3f1b365', '1640887382919', '2021-12-30 23:03:02', '2021-12-30 23:03:03', '2021-12-30 23:03:04', NULL, 600000, 2, NULL, NULL, 67),
(5, '61cee1588c6d797f543570c3', '1640948080355', '2021-12-31 15:54:40', '2021-12-31 15:54:40', '2021-12-31 15:54:41', NULL, 100000, 2, NULL, NULL, 72),
(6, '61cf1d2c372f0e5354f6c2ab', '1640963416417', '2021-12-31 20:10:16', '2021-12-31 20:10:16', '2021-12-31 20:10:17', NULL, 3500000, 2, NULL, NULL, 74),
(7, '61cff4f130b0f0775464cf30', '1641018634056', '2022-01-01 11:30:34', '2022-01-01 11:30:34', '2022-01-01 11:30:35', NULL, 100000, 2, NULL, NULL, 76),
(8, '61d0088bf87d8415543f267e', '1641023640845', '2022-01-01 12:54:00', '2022-01-01 12:54:01', '2022-01-01 12:54:01', NULL, 300000, 2, NULL, NULL, 77),
(9, '61dc16a0cb18ed442a6d34ac', '1641813683038', '2022-01-10 16:21:23', '2022-01-10 16:21:23', '2022-01-10 16:21:24', NULL, 100000, 2, NULL, NULL, 81),
(10, '61e50e19a70aaa3699d4260c', '1642401330103', '2022-01-17 11:35:30', '2022-01-17 11:35:30', '2022-01-17 11:35:31', NULL, 3500000, 2, NULL, NULL, 89),
(11, '61e6510d4e540f7fea64aff6', '1642484000248', '2022-01-18 10:33:20', '2022-01-18 10:33:20', '2022-01-18 10:33:21', NULL, 3500000, 2, NULL, NULL, 118),
(12, '6200ba89fe3169afa35e6ea8', '1644215036187', '2022-02-07 11:23:56', '2022-02-07 11:23:56', '2022-02-07 11:23:57', NULL, 300000, 2, NULL, NULL, 129),
(13, '6200e11281ad08e6a366769b', '1644224853939', '2022-02-07 14:07:33', '2022-02-07 14:07:34', '2022-02-07 14:07:35', NULL, 100000, 2, NULL, NULL, 130);

-- --------------------------------------------------------

--
-- Структура таблицы `tuman`
--

CREATE TABLE `tuman` (
  `tuman_id` int(11) NOT NULL,
  `tuman_nomi` varchar(80) NOT NULL,
  `viloyat_id` smallint(6) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tuman`
--

INSERT INTO `tuman` (`tuman_id`, `tuman_nomi`, `viloyat_id`, `status`) VALUES
(1, 'Amudaryo tumani', 1, 1),
(2, 'Beruniy tumani', 1, 1),
(3, 'Kegayli tumani', 1, 1),
(4, 'Qonliko\'l tumani', 1, 1),
(5, 'Qorao\'zak tumani', 1, 1),
(6, 'Qo\'ng\'irot tumani', 1, 1),
(7, 'Mo\'ynoq tumani', 1, 1),
(8, 'Nukus tumani', 1, 1),
(9, 'Nukus shahar', 1, 1),
(10, 'Taxtako\'pir tumani', 1, 1),
(11, 'To\'rtko\'l tumani', 1, 1),
(12, 'Xo\'jayli tumani', 1, 1),
(13, 'Chimboy tumani', 1, 1),
(14, 'Shumanay tumani', 1, 1),
(15, 'Ellikqal\'a tumani', 1, 1),
(16, 'Andijon shahri', 2, 1),
(17, 'Andijon tumani', 2, 1),
(18, 'Asaka tumani', 2, 1),
(19, 'Baliqchi tumani', 2, 1),
(20, 'Buloqboshi tumani', 2, 1),
(21, 'Bo\'z tumani', 2, 1),
(22, 'Jalaquduq tumani', 2, 1),
(23, 'Izboskan tumani', 2, 1),
(24, 'Qorasuv shahri', 2, 1),
(25, 'Qo\'rg\'ontepa tumani', 2, 1),
(26, 'Marhamat tumani', 2, 1),
(27, 'Oltinko\'l tumani', 2, 1),
(28, 'Paxtaobod tumani', 2, 1),
(29, 'Ulug\'nor tumani', 2, 1),
(30, 'Xonobod shahri', 2, 1),
(31, 'Xo\'jaobod tumani', 2, 1),
(32, 'Shaxrixon tumani', 2, 1),
(33, 'Buxoro shahri', 3, 1),
(34, 'Buxoro tumani', 3, 1),
(35, 'Vobkent tumani', 3, 1),
(36, 'G\'ijduvon tumani', 3, 1),
(37, 'Jondor tumani', 3, 1),
(38, 'Kogon tumani', 3, 1),
(39, 'Kogon shahri', 3, 1),
(40, 'Qorako\'l tumani', 3, 1),
(41, 'Qorovulbozor tumani', 3, 1),
(42, 'Olot tumani', 3, 1),
(43, 'Peshku tumani', 3, 1),
(44, 'Romitan tumani', 3, 1),
(45, 'Shofirkon tumani', 3, 1),
(46, 'Arnasoy tumani', 4, 1),
(47, 'Baxmal tumani', 4, 1),
(48, 'G\'allaorol tumani', 4, 1),
(49, 'Do\'stlik tumani', 4, 1),
(50, 'Jizzax tumani', 4, 1),
(51, 'Jizzax shahri', 4, 1),
(52, 'Zarbdor tumani', 4, 1),
(53, 'Zafarobod tumani', 4, 1),
(54, 'Zomin tumani', 4, 1),
(55, 'Mirzacho\'l tumani', 4, 1),
(56, 'Paxtakor tumani', 4, 1),
(57, 'Forish tumani', 4, 1),
(58, 'Yangiobod tumani', 4, 1),
(59, 'G\'uzor tumani', 5, 1),
(60, 'Dehqonobod tumani', 5, 1),
(61, 'Qamashi tumani', 5, 1),
(62, 'Qarshi tumani', 5, 1),
(63, 'Qarshi shahri', 5, 1),
(64, 'Kasbi tumani', 5, 1),
(65, 'Kitob tumani', 5, 1),
(66, 'Koson tumani', 5, 1),
(67, 'Mirishkor tumani', 5, 1),
(68, 'Muborak tumani', 5, 1),
(69, 'Nishon tumani', 5, 1),
(70, 'Chiroqchi tumani', 5, 1),
(71, 'Shahrisabz tumani', 5, 1),
(72, 'Yakkabog\' tumani', 5, 1),
(73, 'Zarafshon shahri', 6, 1),
(74, 'Karmana tumani', 6, 1),
(75, 'Qiziltepa tumani', 6, 1),
(76, 'Konimex tumani', 6, 1),
(77, 'Navbahor tumani', 6, 1),
(78, 'Navoiy shahri', 6, 1),
(79, 'Nurota tumani', 6, 1),
(80, 'Tomdi tumani', 6, 1),
(81, 'Uchquduq tumani', 6, 1),
(82, 'Xatirchi tumani', 6, 1),
(83, 'Kosonsoy tumani', 7, 1),
(84, 'Mingbuloq tumani', 7, 1),
(85, 'Namangan tumani', 7, 1),
(86, 'Namangan shahri', 7, 1),
(87, 'Norin tumani', 7, 1),
(88, 'Pop tumani', 7, 1),
(89, 'To\'raqo\'rg\'on tumani', 7, 1),
(90, 'Uychi tumani', 7, 1),
(91, 'Uchqo\'rg\'on tumani', 7, 1),
(92, 'Chortoq tumani', 7, 1),
(93, 'Chust tumani', 7, 1),
(94, 'Yangiqo\'rg\'on tumani', 7, 1),
(95, 'Bulung\'ur tumani', 8, 1),
(96, 'Jomboy tumani', 8, 1),
(97, 'Ishtixon tumani', 8, 1),
(98, 'Kattaqo\'rg\'on tumani', 8, 1),
(99, 'Kattaqo\'rg\'on shahri', 8, 1),
(100, 'Qo\'shrobot tumani', 8, 1),
(101, 'Narpay tumani', 8, 1),
(102, 'Nurobod tumani', 8, 1),
(103, 'Oqdaryo tumani', 8, 1),
(104, 'Payariq tumani', 8, 1),
(105, 'Pastdarg\'om tumani', 8, 1),
(106, 'Paxtachi tumani', 8, 1),
(107, 'Samarqand tumani', 8, 1),
(108, 'Samarqand shahri', 8, 1),
(109, 'Tayloq tumani', 8, 1),
(110, 'Urgut tumani', 8, 1),
(111, 'Angor tumani', 9, 1),
(112, 'Boysun tumani', 9, 1),
(113, 'Denov tumani', 9, 1),
(114, 'Jarqo\'rg\'on tumani', 9, 1),
(115, 'Qiziriq tumani', 9, 1),
(116, 'Qumqo\'rg\'on tumani', 9, 1),
(117, 'Muzrobot tumani', 9, 1),
(118, 'Oltinsoy tumani', 9, 1),
(119, 'Sariosiyo tumani', 9, 1),
(120, 'Termiz tumani', 9, 1),
(121, 'Termiz shahri', 9, 1),
(122, 'Uzun tumani', 9, 1),
(123, 'Sherobod tumani', 9, 1),
(124, 'Sho\'rchi tumani', 9, 1),
(125, 'Boyovut tumani', 10, 1),
(126, 'Guliston tumani', 10, 1),
(127, 'Guliston shahri', 10, 1),
(128, 'Mirzaobod tumani', 10, 1),
(129, 'Oqoltin tumani', 10, 1),
(130, 'Sayxunobod tumani', 10, 1),
(131, 'Sardoba tumani', 10, 1),
(132, 'Sirdaryo tumani', 10, 1),
(133, 'Xovos tumani', 10, 1),
(134, 'Shirin shahri', 10, 1),
(135, 'Yangier shahri', 10, 1),
(136, 'Angren shahri', 11, 1),
(137, 'Bekobod tumani', 11, 1),
(138, 'Bekobod shahri', 11, 1),
(139, 'Bo\'ka tumani', 11, 1),
(140, 'Bo\'stonliq tumani', 11, 1),
(141, 'Zangiota tumani', 11, 1),
(142, 'Qibray tumani', 11, 1),
(143, 'Quyichirchiq tumani', 11, 1),
(144, 'Oqqo\'rg\'on tumani', 11, 1),
(145, 'Olmaliq shahri', 11, 1),
(146, 'Ohangaron tumani', 11, 1),
(147, 'Parkent tumani', 11, 1),
(148, 'Piskent tumani', 11, 1),
(149, 'O\'rtachirchiq tumani', 11, 1),
(150, 'Chinoz tumani', 11, 1),
(151, 'Chirchiq shahri', 11, 1),
(152, 'Yuqorichirchiq tumani', 11, 1),
(153, 'Yangiyo\'l tumani', 11, 1),
(154, 'Beshariq tumani', 12, 1),
(155, 'Bog\'dod tumani', 12, 1),
(156, 'Buvayda tumani', 12, 1),
(157, 'Dang\'ara tumani', 12, 1),
(158, 'Yozyovon tumani', 12, 1),
(159, 'Quva tumani', 12, 1),
(160, 'Quvasoy shahri', 12, 1),
(161, 'Qo\'qon shahri', 12, 1),
(162, 'Qo\'shtepa tumani', 12, 1),
(163, 'Marg\'ilon shahri', 12, 1),
(164, 'Oltiariq tumani', 12, 1),
(165, 'Rishton tumani', 12, 1),
(166, 'So\'x tumani', 12, 1),
(167, 'Toshloq tumani', 12, 1),
(168, 'Uchko\'prik tumani', 12, 1),
(169, 'O\'zbekiston tumani', 12, 1),
(170, 'Farg\'ona tumani', 12, 1),
(171, 'Farg\'ona shahri', 12, 1),
(172, 'Furqat tumani', 12, 1),
(173, 'Bog\'ot tumani', 13, 1),
(174, 'Gurlan tumani', 13, 1),
(175, 'Qo\'shko\'pir tumani', 13, 1),
(176, 'Urganch tumani', 13, 1),
(177, 'Urganch shahri', 13, 1),
(178, 'Xiva tumani', 13, 1),
(179, 'Hazorasp tumani', 13, 1),
(180, 'Xonqa tumani', 13, 1),
(181, 'Shovot tumani', 13, 1),
(182, 'Yangiariq tumani', 13, 1),
(183, 'Yangibozor tumani', 13, 1),
(184, 'Bektemir tumani', 14, 1),
(185, 'M.Ulugbek tumani', 14, 1),
(186, 'Mirobod tumani', 14, 1),
(187, 'Olmazor tumani', 14, 1),
(188, 'Sergeli tumani', 14, 1),
(189, 'Uchtepa tumani', 14, 1),
(190, 'Yashnobod tumani', 14, 1),
(191, 'Chilonzor tumani', 14, 1),
(192, 'Shayxontoxur tumani', 14, 1),
(193, 'Yunusobod tumani', 14, 1),
(194, 'Yakkasaroy tumani', 14, 1),
(195, 'Aniqlanmagan', 15, 1),
(196, 'Qoraqalpog\'iston Respublikasi kiritilmagan tu', 1, 1),
(197, 'Andijon kiritilmagan tuman', 2, 1),
(198, 'Buxoro kiritilmagan tuman ', 3, 1),
(199, 'Jizzax kiritilmagan tuman', 4, 1),
(200, 'Qashqadaryo kiritilmagan tuman', 5, 1),
(201, 'Navoiy kiritilmagan tuman', 6, 1),
(202, 'Namangan kiritilmagan tuman', 7, 1),
(203, 'Samarqand kiritilmagan tuman', 8, 1),
(204, 'Surxondaryo kiritilmagan tuman', 9, 1),
(205, 'Sirdaryo kiritilmagan tuman', 10, 1),
(206, 'Toshkent viloyati kiritilmagan tuman', 11, 1),
(207, 'Farg\'ona kiritilmagan tuman', 12, 1),
(208, 'Xorazm kiritilmagan tuman', 13, 1),
(209, 'Toshkent shahri kiritilmagan tuman', 14, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `last_login_at` int(11) DEFAULT NULL,
  `role` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `viloyat_id` int(11) NOT NULL,
  `telefon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `tuman_id` int(11) DEFAULT NULL,
  `komissiya_id` int(11) DEFAULT NULL,
  `kasb_id` int(11) DEFAULT NULL,
  `activate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_token` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mutaxassislik_id` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `avatar` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `middle_name`, `email`, `password_hash`, `auth_key`, `created_at`, `updated_at`, `last_login_at`, `role`, `viloyat_id`, `telefon`, `status`, `tuman_id`, `komissiya_id`, `kasb_id`, `activate`, `activation_token`, `date_of_birth`, `mutaxassislik_id`, `gender_id`, `avatar`) VALUES
(12, 'Xoliqov', 'Abdulhamid', 'Maxmud o\'g\'li', 'xolioqovhamid@gmail.com', '$2y$13$6fa/DWHBa.jnSvxFxlBiB.Mk4PQY2QtR.jI.OlADO2xAjDI3JV9Ti', 'kUXj25TH2N1wz-mTaWZEZfoHdpdZslAS', 1633774062, 1637508303, NULL, 'user', 8, '+998(94) 656-25-21', 10, 16, NULL, 3, '', NULL, '1993-04-21', NULL, 1, NULL),
(13, 'Maxmudjanov', 'Sarvar', 'Ulug\'bekovich', 's.makhmudjanov@gmail.com', '$2y$13$4rMevrKM/zkD5riW3uqfO.ImrBCxa/dmXDEVMRXeCh3dt8YUHn98O', 'lYd-pqpHO_945NTrzE5jxZzVDdQxy8sw', 1633775087, 1638350964, NULL, 'admin', 3, '+998(99) 950-29-58', 10, NULL, NULL, 3, '', NULL, '1991-12-22', NULL, NULL, 'uploads/user/avatar/2021/Dec/01/xJ7HvT7wT13q.jpg'),
(15, 'Turg\'unov', 'Abdurashid', 'Abdumannob', 'fiz1983@mail.ru', '$2y$13$lbo8j9d41viZNnuujtWl1e6tluR9MILrLpbEcAFkTjx6m1UCKGW6i', 'PF-PWInVxnxX4xdOqsZF7ApNOSVnR_5A', 1634102434, 1640959247, NULL, 'admin', 2, '+998(99) 801-01-30', 10, 20, NULL, 10, '', NULL, '1983-05-17', NULL, NULL, 'uploads/user/avatar/2021/Dec/31/pTBb7EhU2L7H.jpg'),
(20, 'Aliqulov', 'Akmal', 'Xushmuratovich', 'greatdracon@mail.ru', '$2y$13$YQBA7BShTKdabC/ZUTXFs.9dfF3KSwW665uHw6C/44DaNUYBxcuk6', 'gXdmKnxdxvGZjagciEXZ-zay8xfNuZPG', 1635597981, 1638367957, NULL, 'admin', 5, '+998(99) 884-21-31', 10, 70, NULL, 3, '', NULL, '1989-12-11', NULL, NULL, 'uploads/user/avatar/2021/Dec/01/Y78_RO2PgwnM.png'),
(21, 'Maxmudjanov', 'Sanjarbek', 'Ulugbekovich', 'sanjar21021993@gmail.com', '$2y$13$7sWzoGKqqPVmjYy4twWP9O6kvFwa/UNtA4ZfRfC/u4gW10S/P1b5S', 'CbTFeQw4Rq4e8itUsUPugins-PvVoDDk', 1636899918, 1636899936, NULL, 'user', 1, '+998(97) 455-95-30', 10, 2, NULL, 3, '', NULL, '1993-02-21', NULL, NULL, NULL),
(27, 'Abdurahmonov', 'Otabek', 'Abdug‘affor o‘g‘li', '', '$2y$13$VrtB.dZPmhud9pXoH3sbPuzUvjoIcZ61xs/nxvlXAq2k1wLJnclxy', 'jw5RuYV2LRiWo7sq7jOSmXFcAMToZvtk', 1640974334, 1640974366, NULL, 'user', 7, '+998(99) 017-01-03', 10, 83, NULL, 10, '', NULL, '2022-04-11', NULL, NULL, NULL),
(28, 'Abrayqulov', 'Abdimalik', 'Umbarovich', 'auabdul87@gmail.com', '$2y$13$JhWviMAf2/C2iwrO0mHoYOu5Lhebj7PZVgCidKSyS1ryPRrX851DC', 'lAZZDrgznv5BDAHO9XY6OtYQuClMJjSO', 1641031885, 1641031921, NULL, 'user', 14, '+998(90) 973-95-15', 10, 187, NULL, 10, '', NULL, '1987-08-07', NULL, NULL, NULL),
(29, 'Xoshboqov', 'Kamol', 'Abdulatif o\'g\'li', 'kamolxoshboqov1995@gmail..com', '$2y$13$pFPOKem6fnqmj0OeEQUGA.YpO6eD5nVbmZMyidc7G1VplszW0Chfy', 'INnaGKvxiQXJlr0YYVyWemXbepnZ2qay', 1641135160, 1642234579, NULL, 'user', 9, '+998(97) 842-02-02', 9, 121, NULL, 3, '261014', '5RMtgGcOxnCpHFbAK58KkgX4Iq2nHQCL', '2022-01-02', NULL, NULL, NULL),
(30, 'Husanova', 'Rayhona', 'Dekanboyevna', 'husanovarayhona@.gmail.com', '$2y$13$cSLsawaEao5PAEsm5ILbTuFlx5S6y3JvGwmL7IoIWtTLbPCVWnIYq', 'oOs_gw75ypr8H5IYcMrGSwa3Jzsgsjds', 1641185098, 1642425256, NULL, 'user', 7, '+998(94) 150-55-88', 10, 83, NULL, 3, '', NULL, '2022-01-03', NULL, NULL, NULL),
(31, 'Muxtarov', 'Otabek', 'Shuxratjanovich', 'omuhtarov88@mail.ru', '$2y$13$4tbKHQz/BYTYwC407k5hj.ExdHR794.bkZ9JKSbDni52Gm91U86jK', 'mda13nhnlfkkMsv_-PRiZGWzObpC_8vP', 1641322547, 1641322790, NULL, 'user', 2, '+998(97) 998-83-38', 10, 16, NULL, 10, '', NULL, '1988-10-03', NULL, NULL, NULL),
(34, 'Шодиева', 'Райхон', 'Сайдуллаевна', 'rshodiyeva@mail.ru', '$2y$13$F7VYszlyDPBrqW1Fj1upVOesrZQWGbb/45u0Omu5Llmn5v.34pm72', 'HA3IzSuRojBuY949nNxjCzE7PB1r4ACT', 1641408336, 1641408356, NULL, 'user', 14, '+998(99) 647-70-50', 10, 187, NULL, 10, '', NULL, '1974-02-25', NULL, NULL, NULL),
(35, 'YUNUSOV ', 'ABROR', 'AZIMJANOVICH', 'ayunusov89@mail.ru', '$2y$13$3kFWtFk5ZmDVMuVRb7idHuFHkm7LaXBSt42UTA.HN3C.kz4iOnQJ.', '07sNnDyaBzBTXdiq5MUdw184J-DGyMoC', 1641408616, 1641408683, NULL, 'user', 2, '+998(99) 901-89-19', 10, 16, NULL, 10, '', NULL, '1989-12-23', NULL, NULL, NULL),
(36, 'Xudoyberdiyeva', 'Zulfizar ', 'Sa\'dulla qizi', 'zulfizarxudoyberdiyeva6@gmail.com', '$2y$13$HswGGG/5JS34Sl9tGEcvbuMWvOFppW8GwzHcq3bJnjlLXfgyKI2jq', 'iD7vqZUVgd_f0RlcxZjv-12TPz-l9bqF', 1641531272, 1641531290, NULL, 'user', 4, '+998(99) 576-67-35', 10, 47, NULL, 7, '', NULL, '1993-12-18', NULL, NULL, NULL),
(37, 'Xomidov', 'Abdullajon', 'Adxam o\'g\'li', 'abdullajonxomidov221@gmail', '$2y$13$uNE3HeppRGytD.FgnmdbZunTRsreDzd2PGSwaJg.8/gE3qMr7pQaS', 'k-GZnM-OPzsKR7QaKHikoJqeI1movNXf', 1641548451, 1641548451, NULL, 'user', 12, '+998(99) 365-19-03', 9, 162, NULL, 3, '400309', 'Z25dlm7ggeRFppwCFRGfaYIxdfwdYXrV', '19.03.1992', NULL, NULL, NULL),
(38, 'Yadgarova', 'Umida', 'Nayimovna', 'diana.dilmurodova.88@mail.ru', '$2y$13$Q8sRczBYxHTKzPLb8cwTA.ppXP.F0v70PaFPAZ4XWSn/yecQQ6nPa', 'KOs_UkfvYHrc3t3C626oyJ2Xrn04P2s4', 1641590078, 1641590149, NULL, 'user', 3, '+998(33) 060-21-21', 10, 37, NULL, 3, '', NULL, '1986-04-21', NULL, NULL, NULL),
(39, 'Vaxobova', 'Hadicha', '', 'sotvoldiyevnazarali001@gmail.com', '$2y$13$LOh9Xl6KvJd7tgfVA75nAuUbXncs1USvYhYfN4qHPn7oOM5h00G.G', 'qM1Y8EaF6yAODATuv7GzsFD5239hm-ie', 1641649835, 1641650103, NULL, 'user', 2, '+998(90) 169-36-38', 10, 25, NULL, 3, '', NULL, '1994-03-18', NULL, NULL, NULL),
(40, 'Hasanova ', 'Saidaxon', 'Ganijonovna', 'and.saida@mail.ru', '$2y$13$fiy1bA2eXg5hcH1Bl5OvheZ2TqRcPfb2yebulhOtDlYqHSt7A.hre', 'ey9WUomeSx6NJ4VSkHvWCsqdk55RobPd', 1641792217, 1641792217, NULL, 'user', 2, '+998(97) 834-00-16', 9, 16, NULL, 10, '254146', 'TsWOJ_6yIFmhXU6v-lqMZYjYGwaY5FXR', '1986-10-29', NULL, NULL, NULL),
(41, 'Babayeva', 'Bonu', 'Sayidmurod qizi', 'babayevabonu47@gmail.com', '$2y$13$gmfC8C0PTJN.Sn4z2PhgEu2uIQHSeaex.m8sqv8YXh0EU8BeuSDn2', 'IyxnhSAXvaCIUUqV4Wpq1-ALea4flJYA', 1641975595, 1641975692, NULL, 'user', 9, '+998(99) 092-88-94', 10, 114, NULL, 7, '', NULL, '1994-02-12', NULL, NULL, NULL),
(42, 'Kozimov', 'Ilhomjon', 'Yursinali o\'g\'li', 'ilhomjonkozimov1@gmail.com', '$2y$13$ESLEqOToIMrDwYhfSo3P1.jBxe2LN90YBBPrPAfPzxDjcRwC/Viyq', 'uoXnueXWcxG5xflms0dhU9g4tWoeWTGh', 1642224991, 1642225014, NULL, 'user', 12, '+998(99) 912-17-96', 10, 170, NULL, 7, '', NULL, '16.07.1996', NULL, NULL, NULL),
(44, 'Funny', 'Funny', 'Funny', 'funny@gmail.com', '$2y$13$2NACQFULcmUOmcbLOEQIhu.MWSGEb8KJ4mPioVaEtz0E5zuZsiwNG', 'FtXlxygFEIN4EIfd2tAoqOr4XycpQeNu', 1642400610, 1642400635, NULL, 'user', 2, '+998(33) 169-36-38', 10, 16, NULL, 3, '', NULL, '1984-01-17', NULL, NULL, NULL),
(45, 'Салахидинова', 'Холида', 'Халилжоновна', 'salahidinovaxolida@gmail.com', '$2y$13$PgR9hTAoS53/Quc0Doi77eDOYy8i7FzZ9AvHPIrLx6am0usPU33a6', 'oRQJPu_24Bwi52L-k8vyowoo1WWznSSc', 1642411619, 1644302194, NULL, 'user', 14, '+998(93) 186-11-37', 10, 193, NULL, 10, '', NULL, '1986-02-10', NULL, NULL, NULL),
(46, 'Shodmonova', 'Munira', 'Suyunovna', 'munirashodmonova621@gmail.com', '$2y$13$pTOlrR3U7Oswjf6Mwqg5Au/3P68G7l9469hs7ZZ0g0t320TGDif9m', 'pWlqcXbA3HkrXIEFKyLmsYM_p0V1N5xK', 1642478356, 1645787734, NULL, 'user', 6, '+998(99) 134-38-37', 10, 78, NULL, 3, '', NULL, '1986-05-27', NULL, NULL, NULL),
(48, 'Nematova', 'Nasiba', 'Òrol qizi', 'nasibabotirova99@gmail.com', '$2y$13$LlspH1Cy9BmmZVW6ytHJ.eufl1Phzbun04/5zwmtnu8UiynWTCOf6', 'Iw9YXnB2MuuJq-Xd83oUbnh0tsXXFnWE', 1642575179, 1642575179, NULL, 'user', 10, '+998(91) 108-17-99', 9, 128, NULL, 3, '842488', 'vpV7jPZBFXR4zE6zo3X6bQH4-b9Vdrsr', '2014-09-17', NULL, NULL, NULL),
(50, 'Nematova', 'Nasiba', 'Òrol qizi', 'nasibabotirova99@.com', '$2y$13$3Fb4teNPjK9cAL5lVkWxbeIdXww./s3s1LIt4VNGb2M1aJ2.4ASdi', 'nB9o6cIxUm1ymNOUMaU-Rd5y116fNjEq', 1642575447, 1642575465, NULL, 'user', 10, '+998(90) 108-17-99', 10, 128, NULL, 3, '', NULL, '2022-01-19', NULL, NULL, NULL),
(51, 'Turgunov', 'Baxromjon', 'Raximjonovich', 'btrbaxrom@gmail.com', '$2y$13$jBb0HaEriJl48iT.rtt9uOPth5bCnzM3pMLJE6gwvDx1G3EJxGWuW', 'eVPKidBX6rBw1D50LUGFlNRBmBdJQb1L', 1642792361, 1654250596, NULL, 'user', 2, '+998(97) 831-08-28', 10, 22, NULL, 10, '', NULL, '1985-08-28', NULL, NULL, NULL),
(52, 'Ibragimova ', 'Mavsuma', 'Aslamovna', 'iibrahimovamavsuma@gmail.com', '$2y$13$vvLRvSYp8m4JG9e47bhjnebKimELmmrHkxYa2aDMQyFnQzr56oZr6', 'D6u62rYPiQhd16lAaUHuinYfLQBTJjZS', 1643617089, 1643617089, NULL, 'user', 8, '+998(99) 450-39-44', 9, 105, NULL, 7, '117749', 'rcM5nr4HqNC79Xie5Iu0nmCxOf0sn_JL', '1989-12-26', NULL, NULL, NULL),
(53, 'Do\'lanova', 'Lola', 'To\'ra qizi', '@akrom dulanov', '$2y$13$WpVh9z.2X26KXRFxwvSHFeJQAi7ThD8F9c.P/NccdgH3WdhHncXiO', 'jGRHrqSiGKSspTkS1fALx6Xr3M-CtbBO', 1643634239, 1643635616, NULL, 'user', 14, '+998(99) 892-02-36', 10, 193, NULL, 3, '', NULL, '2022-01-31', NULL, NULL, NULL),
(54, 'Gafforova ', 'Maftuna', 'Ravshan qizi', 'usmonov', '$2y$13$Lw3xIV6cfnSIgcetPGgy4ekCSH6LGPO0AfEVMCaYaZNI/mU5UPREy', 'PUzF70f_v7cEFdh49TvPGFV_Kbt36duA', 1643640418, 1643640435, NULL, 'user', 9, '+998(97) 350-37-77', 10, 111, NULL, 3, '', NULL, '2022-01-31', NULL, NULL, NULL),
(55, 'Rahimova', 'Gulmira', 'Xurmat qizi', 'guli.2112153.jumaniyozova@gmail.com', '$2y$13$PQMJ76I4mUfXLveZ5gvsje9Vbg0aIucOTl4tYSHE6t24Z6Vg7FAe.', 'CZ3O8g8xAH0_YP2Wwuu4OkGl4fF0DxmT', 1643905636, 1643905690, NULL, 'user', 13, '+998(90) 559-03-47', 10, 181, NULL, 3, '', NULL, '2022-02-26', NULL, NULL, NULL),
(56, 'Mirzaliyeva', 'Saodat', 'Yursunbayevna', 'saodatmirzaliyeva@gmail.com', '$2y$13$/GvOZ2twzKq1OmvHulmMW.eAPS6i8EQUgMkg37YMxUytIrrI/Agca', 'KR1AC5qgkByINfAHILgT9rVDk6miI-gt', 1643907275, 1643907312, NULL, 'user', 11, '+998(93) 701-71-17', 10, 140, NULL, 3, '', NULL, '2022-02-28', NULL, NULL, NULL),
(57, 'Otajonova', 'Gulzira', 'Ozodovna', 'gulziraotajonova@gmail.com', '$2y$13$2fMxTgW/0nAabNSYuF3wT.BQBwD/QFiV8d/61EfF7aLranj8.tJj2', '_tGlAEamHSxjZyCCCnjAWBk7wOkqXleQ', 1643910924, 1643910924, NULL, 'user', 13, '+998(90) 738-95-83', 9, 175, NULL, 3, '621657', 'V7_GytNWnDOW2X44DtZX23Cr33bCEjRa', '1983-05-20', NULL, NULL, NULL),
(58, 'Mahmudova', 'Surayyo', 'Ulug\'bek qizi', 'surayyomahmudova237@gmail.com', '$2y$13$9Nd8Sw.uDiFQ9/A/MY92MuzDNQeFMshA1HvzRMSGeP1mD.yVpwfMW', 'J7xRRY8drmUn0e2F6eONFAkTXGRgM8jk', 1643911250, 1643911391, NULL, 'user', 11, '+998(97) 880-06-16', 9, 152, NULL, 3, '122657', 'cIxI1q_F3b9vRj5flCKeo09-VSUSex2k', '1996-08-20', NULL, NULL, NULL),
(59, 'Yusupova', 'Mahliyo', 'Põlatovna', 'davronkuliyevsamirbek@', '$2y$13$lixuGut38vrpgXPzHHPu6uTKxMqGBOOtQ2kKbhEUZGPZXPFjMt3eq', 'YPGItubWuzY-7IyE_y3KnjTQUXHjJDri', 1643914122, 1643914898, NULL, 'user', 3, '+998(93) 655-27-22', 9, 33, NULL, 3, '458394', '8JMe3b_zXGzY82HKaH5O6J0pMd5h1sgS', '1983-04-22', NULL, NULL, NULL),
(60, 'Uraimjonova', 'Odinaxon', 'Rafiqjon qizi', 'jamshiduraimjonov@gmail.com', '$2y$13$.EMi6HNmlg8OWpK96LY58exQ606MyaJiVey.IR248mdzvi9snyv7C', 'sDMyYYUeNxjKFbX50ZJfYsbtUzo769K-', 1643941703, 1643941703, NULL, 'user', 2, '+998(91) 608-65-85', 9, 17, NULL, 3, '878660', 'MpoHbVlgOPi5PZf00MnXhbTkCjq9th2p', '1999-02-05', NULL, NULL, NULL),
(61, 'Yoqubov ', 'Ibrohim ', 'Suyarqulovoch ', 'mail.ru', '$2y$13$4oTf13JipjC9JNjzXlGWNurMqy99e/NoSPQl7JU.NbK7DbXtFZw1W', 'XQyThBe4N6T1IuK19e5RIhlFXKoGI_uF', 1643953216, 1643953216, NULL, 'user', 8, '+998(99) 279-67-93', 9, 109, NULL, 3, '257632', 'rnAUO07CVCW1XR16cUBDrUJCmlXVfFvA', '1993-02-28', NULL, NULL, NULL),
(62, 'Saidov', 'Samandar', 'Muzaffarovich', 'samandarsaidov.uz@gmail.com', '$2y$13$kqBM9PWXyTXjiwlBt/M1aOB53JmDh6fvWVk4kByC1UsNTvSelLJpG', 'Eh7FHHemElnb0KxaQAh-lF61Liq1Ls4J', 1643978896, 1644212567, NULL, 'user', 9, '+998(90) 996-93-33', 10, 113, NULL, 10, '', NULL, '1990-11-26', NULL, NULL, NULL),
(65, 'Mamayunusova ', 'Mohinur', 'Muzaffarovna', 'mohinurmamayunusova182@gmail.com', '$2y$13$2S1Bc5GGBK.KyiDAUFewzuYgI4cWZyCtq.BxndxweDXPz6PdxLDqG', 'rpxGC-QZ-VIS793PpgrKd-kncZFJKVD5', 1644243214, 1644243239, NULL, 'user', 7, '+998(99) 977-34-27', 10, 84, NULL, 3, '', NULL, '2022-02-07', NULL, NULL, NULL),
(66, 'Umarova', 'Noila', 'Norqul qizi', 'umarovanoila635@ gmail.com', '$2y$13$jxoqa0xP8lMM5j.iiqUb2eDU67U6opEuSPbqo5wp7.k573JiSWZZu', 'rvwcSfl0z3Lgx7PhKnt4nMNYeuQD-M98', 1644394690, 1644394718, NULL, 'user', 2, '+998(97) 332-18-02', 10, 25, NULL, 3, '', NULL, '1993-05-05', NULL, NULL, NULL),
(67, 'Xo\'shboqov', 'Kamoliddin', 'Abdulatif o\'g\'li', 'kamolxoshboqov1995@gmail.com', '$2y$13$BJR.BLzkwS48C2O1gP1.Luz1GotA8YvVwh2UhvZBolddU3TK5EULe', 'MDOMe-aLwyRb1POKDq4WpK9YO8t_kbPg', 1644412670, 1644412705, NULL, 'user', 9, '+998(90) 071-09-19', 10, 121, NULL, 10, '', NULL, '1995-12-22', NULL, NULL, NULL),
(69, 'Qurbonova ', 'Zamira', 'Ahmadalievna', 'Qurbonova Zamira @Zamiragmailcom.', '$2y$13$ggNpE5F4ch3LiKeXWSYdn.kT6Eva.msbcBjpKFR8de9qkIdsx7xVW', '2y6bGnQJuWvNrsPwRXWU0ODkLPxHiAe8', 1644590858, 1644590923, NULL, 'user', 12, '+998(91) 354-01-83', 10, 170, NULL, 3, '', NULL, '1983-07-26', NULL, NULL, NULL),
(70, 'Tòrayeva', 'Dilnoza', 'Nurullayevna', 'torayevadilnoza@10gmail..com', '$2y$13$IJFlrrM0l6qrKI0KofSkVOqVbfvbZm2cM3L2kBwzV0mmNiusyJAXm', 'toBsUqwc73b4D_dsgZxjPtP5wZ7VbmQ5', 1644597533, 1644597533, NULL, 'user', 3, '+988(97) 848-06-33', 9, 43, NULL, 3, '283795', 'wTnov5QBvLM-LNIA6hHxzKjk4oLwTLX7', '1987-04-14', NULL, NULL, NULL),
(71, 'Sobiroova', 'Sabina', 'Olimovna', 'nazirjonsabina0207@gmail.com', '$2y$13$IxeX0t.DqFkze5oDg/JMKuCkgxRkLTRc5VlejvjhlRwjqYBcxDffS', 'DVEaaQw2PFS74vYyaNK-vUt2QpCA6DCa', 1644720310, 1644720310, NULL, 'user', 6, '+998(93) 078-44-22', 9, 79, NULL, 3, '631468', 'WOlBKTbEYYUZva3E1lQ-J-QublxbZeX0', '2022-02-07', NULL, NULL, NULL),
(73, 'Ziyadullayeva', 'Nigora', 'Temirovna', 'nziyadullaeva9495@gmail.com', '$2y$13$PjFKidVO562.unyQoHRTz.1uzkPLvmhxrBwwBHwR8Epnna8ZELVTm', 'TdV0T7loPAkH0Lo6qR1FxY-zHMHXFWM0', 1644779866, 1644779883, NULL, 'user', 8, '+998(90) 743-17-18', 10, 108, NULL, 3, '', NULL, '1995-09-07', NULL, NULL, NULL),
(74, 'Mamajonova ', 'GUulnoza', 'Xasanboyqizi', 'oqtemur@gmail.com', '$2y$13$wAGx3bfmZLp3CwEH3x1KVusSilarjHBaSEbKqfIfHPpPCsr89DPz6', 'LQSRzY1OROUiSarkB1aEeWJvxXyqVr6r', 1644812550, 1644812550, NULL, 'user', 12, '+998(99) 991-35-93', 9, 155, NULL, 3, '396913', 'g5sOnqLwL_54HIOSq1JjLBKKkpkFQCgH', '1993-12-19', NULL, NULL, NULL),
(77, 'Mamatraimov', 'O\'ktam', 'Choriyevich', 'uktammamatraimovchoriyevich@gmail.com', '$2y$13$C7oY1UM4MC3UhVGyUsX0ZenGkCMmWWB/priwAuwNEQLhBERTxhlni', 'bbxP_WJwfniHM5CJrXyWDXs69NqTR43U', 1645111511, 1645111635, NULL, 'user', 9, '+998(90) 942-19-19', 10, 118, NULL, 7, '', NULL, '1990-06-19', NULL, NULL, NULL),
(78, 'Hamidova', 'Lobar', 'Abdurashidovna', 'hamidovalobar1992@gmail.com', '$2y$13$90KZn.G9Tx/wpo5aY2nwFum1N1pvR.N3KkYdp2XkET.HJT3ZuyNlG', 'heaIYtIy22G2hZe1mNk-KB6lKeZa_E42', 1645180543, 1645180569, NULL, 'user', 6, '+998(99) 278-44-34', 10, 78, NULL, 7, '', NULL, '1992-12-11', NULL, NULL, NULL),
(79, 'Yuldosheva', 'Shohista', 'Sodiq qizi', 'yuldoshevashohista1991@gmail.com', '$2y$13$6iakA73c1HB416iosGRusOzeUc1oGep9VYDr0FpK2E4NZapQU044G', '_4oABVVcHz15-HD_FAvIb2VAYQEsgz1Q', 1645181023, 1645181062, NULL, 'user', 6, '+998(90) 620-71-67', 10, 78, NULL, 7, '', NULL, '1991-07-22', NULL, NULL, NULL),
(80, 'Xojiyeva', 'Nigora', 'Nayimovna', 'nigorahojiyeva30@mail.com', '$2y$13$Ps2sEM/Af33zFgdUAzlB5.GxtQ/ZG7lC8KUg1snkJgcgskQDhxMtS', '_PUqsH_FdVatOBqvAH5NU8SIRjweOft_', 1645449110, 1645449157, NULL, 'user', 3, '+998(93) 472-24-43', 10, 38, NULL, 3, '', NULL, '1990-01-02', NULL, NULL, NULL),
(81, 'Saidova', 'Nargiza ', 'Usmonovna', 'Nargiz@.uz', '$2y$13$.2JE/vLaVlBzrNnoSLeFb.cWAKYates1Lf.YzNG6KRaVejL40vVde', 'CTlQOSALk2D3uSI_tLfxsK5ODNVx5YjR', 1645610686, 1645610721, NULL, 'user', 8, '+998(99) 311-80-31', 10, 101, NULL, 3, '', NULL, '1980-08-30', NULL, NULL, NULL),
(84, 'Mahkamova', 'Dilafruz', 'Muzaffar qizi', 'dmahkamova9gmail.com', '$2y$13$bU1XiKLcAcPtcc2QIi95POz5jStfBfrnLIaKGYp236.hvk/Iymtvm', 'aQMX0uPbCpQTkO_Dpc7XF6XfUqlfkF5A', 1646059548, 1646059633, NULL, 'user', 12, '+998(90) 406-70-67', 10, 167, NULL, 3, '', NULL, '1997-10-09', NULL, NULL, NULL),
(86, 'Xurramova', 'Iroda', 'Fozil qizi', 'xurramovairoda429@gmail.com', '$2y$13$/TVcm0RcaQdF47hizjuyK.pgsgPMc2JoGfKKTPFNWQ4wBN1gyI8hC', 'sVTo9sZLEi6GxXbAYNs4NoDVIOz_kC5P', 1646197819, 1646197844, NULL, 'user', 8, '+998(99) 196-44-97', 10, 105, NULL, 3, '', NULL, '1997-09-08', NULL, NULL, NULL),
(87, 'Ziyodullayeva', 'Gulchiroy', 'Bahodirovna', 'gulchiroy7470@gmail.com', '$2y$13$oVZ4Ar6phUmw95qBBgszwu.M6KOCF2mHwn4yBp5hONpwFrGEmpCba', 'RxFzrSn75_Ip7PLOca4IY97hYS2iD2BB', 1646281261, 1646281285, NULL, 'user', 3, '+998(97) 487-74-70', 10, 37, NULL, 7, '', NULL, '1987-11-08', NULL, NULL, NULL),
(89, 'Xamidova', 'Shaxlo', 'Dalaboyevna', 'shaxloxamidova88@gmail.com', '$2y$13$OO6F367qDXU0EIi6haK2I.M4V1utjNlZWLmB2WjTb0bVbs3lcr2fm', 'ZGne2Tli_14Oj-7LKMX0A5qG2or9lERa', 1646315365, 1646315398, NULL, 'user', 7, '+998(94) 120-24-87', 10, 93, NULL, 3, '', NULL, '2022-03-03', NULL, NULL, NULL),
(91, 'Oqbutayeva', 'Barno', 'Yo‘ldoshevna', 'barno@', '$2y$13$aAi6DW9tuu6qJ8KE9T4sLu6VymLOYvNrrf3u.YBbZSLZsuqak3GZ.', 'IHKzH7eBafoz7swGN_mwd2E3-btYCvzl', 1646464938, 1646464938, NULL, 'user', 5, '+998(99) 622-46-87', 9, 72, NULL, 3, '302887', 'uVtbBAVp84057mJS8QBBX_cpAQv-o6sB', '1987-07-14', NULL, NULL, NULL),
(94, 'Pardaeva', 'Elmira', 'Izzatulloevna', 'zaynuraaziyoda@gmail.com', '$2y$13$Gk3AmxWV/MngFRE5GHOhY.2pILXQQ.FXKJeX/AhlRlxgprrw7AYAK', 'Jar9fP9fZf9p0plYPBBZnIipDP2KDDYL', 1646763327, 1646763327, NULL, 'user', 8, '+998(94) 476-68-28', 9, 108, NULL, 3, '401647', 'rw4zCMMIV94XhHoxH6AXNHbA7adySJsp', '1998-07-10', NULL, NULL, NULL),
(95, 'Nazarova', 'Zulfiya', 'Erkin qizi', 'qqwertnazarova@gmail.com', '$2y$13$dV3yoJ9SohUjjBPaOnsyCej0VBdxWMtgZG3YGAHgycIbQIxiagpCi', 'Ty6rr0uUlaPhmoYuOxaspkuWPCkRJjtW', 1646823387, 1646823826, NULL, 'user', 13, '+998(97) 510-92-82', 9, 177, NULL, 3, '972904', 'a2SriGlr5la3mI7_kuwZmM_3EcjpG_1E', '1995-08-12', NULL, NULL, NULL),
(96, 'Tursunova ', 'Mavluda ', 'Turg\'unjon qizi', 'tursunovamavluwkw@gmail.com', '$2y$13$92ZYbocWgmmYcqnpjnb/KOEM2Ozuzm6.S28hOMxXoQr49ziSlyLHO', 'JCQIZJCtV2YtDVq8vK4U423YpIRpyLsS', 1646922670, 1646922670, NULL, 'user', 11, '+998(99) 039-81-08', 9, 151, NULL, 3, '455341', 'oz_NvagceFsyUxHzF9MUEKoE8oPZKUWN', '2001-06-08', NULL, NULL, NULL),
(98, 'Saidova ', 'Dilafruz ', 'Ulug‘bek qizi ', 'dsaidova94@gmail.com', '$2y$13$KjjkLT.w5EZc/6bj15xJletZS4aZez7hks/Pn2RhCRujDQF7Kt0qW', 'zaUreeqRw-gdHHjBZxtHaPfqEwVTprYZ', 1647123620, 1647123620, NULL, 'user', 14, '+908(97) 770-11-03', 9, 188, NULL, 3, '528683', '9B7FNzZNNMANhTJC-X3BZeOIJ7upYBWe', '2022-02-06', NULL, NULL, NULL),
(101, 'Jakbarova ', 'Shoxista', 'Imomaliyevna', 'shoxistajakbarova@gmail com', '$2y$13$/NJVYsdb2tObX2O51mBsD.6Ti0DK39wAWUT6cYPwc6WCjH4axoxg6', 'nU7BzK0H8eV-FpO8OldaOsd1Ma3ciyjQ', 1647339300, 1648384252, NULL, 'user', 12, '+998(93) 648-83-01', 9, 154, NULL, 3, '330645', 'Mp7gPcgiQnEngu8yri9weMudymXmtSVB', '2020-03-12', NULL, NULL, NULL),
(102, 'Kasimova', 'Robiya', 'Mirsolixovna', 'kasimovarobiya91@gmail.com', '$2y$13$M6MHvE5ZcAS1QFUiZhNfyuy9PCD0dGIfkv/jqCe.tdM2YIhcBDeSG', 'zcSFeUqPPmfCg8-Jtzcmf9LlMsQbmr4Z', 1647537391, 1652713740, NULL, 'user', 14, '+998(97) 763-05-36', 10, 190, NULL, 3, '', NULL, '1991-08-22', NULL, NULL, NULL),
(103, 'Muxtorova', 'Ziyoda', 'Muqimjon qizi', 'ziyodamuhtorova@gmail.com', '$2y$13$AkILG5iPrDuXmDpKsmPQaeE3HeBI09KTY8GKuSNasHAQCqtV4NaLC', '9gVWWI5QO9MrXBd2pLzpzMUH_JT7U_ki', 1648092163, 1648092180, NULL, 'user', 2, '+998(97) 988-55-45', 10, 20, NULL, 3, '', NULL, '2022-04-14', NULL, NULL, NULL),
(105, 'Тошпулатова', 'Мухайе', 'Илхомовна', 'toshpulatovamuxayo@gmail.com', '$2y$13$gQSGzrbHwoaa0T1kGgbVyekis9c0W6kMV4mROMl0dVYo7Lp50irDu', 'Lh0CgZ46Db-aKtMwiKXWjtaisr3E9K7Y', 1648274881, 1648274937, NULL, 'user', 11, '+998(88) 877-81-15', 10, 151, NULL, 3, '', NULL, '1985-09-01', NULL, NULL, NULL),
(106, 'Butaboyeva ', 'Zarifa', 'Yakubovna', 'Zari', '$2y$13$Dlf.8BYGESh3kpk//RF.LuSXexLV53CvGViqqlqICYp8xbCemAzDm', '2oneZayVulEAwzQe4zfYtoKLWFSunlMT', 1648354329, 1648354329, NULL, 'user', 12, '+998(91) 141-10-80', 9, 169, NULL, 3, '979230', 'wkTahj9ns6GoM-gIlz9N9Thlj-kZcL6m', '1969-05-09', NULL, NULL, NULL),
(107, 'Hamroyeva', 'Muborak', 'Oripovna', 'muborakoripovna@gmail.com', '$2y$13$OfoBIXq/OeXkiGLEI0eeku.erY6uGbBx2VRRpTd/9f5mjPEEOI.B6', 'J4gVJyB_BaK8Jf6jlAPM0ul2HWs2reei', 1648390561, 1648390601, NULL, 'user', 6, '+998(91) 333-89-10', 10, 78, NULL, 3, '', NULL, '1989-10-10', NULL, NULL, NULL),
(108, 'Domlajonova ', 'Sadoqat', 'Tuychiboy qizi', 'tojiboyevasadow@gmail.com', '$2y$13$Nx1Li2CrAvWKBJmkWx/mLu8Iumu9FgMzLoEc6QHqLnqbMo08fM5Ve', 'raHs8oFYF5_VSfjBBQ8963IIsNw37bAF', 1648449625, 1648449642, NULL, 'user', 12, '+998(97) 627-13-05', 10, 165, NULL, 7, '', NULL, '1996-10-13', NULL, NULL, NULL),
(109, 'Ganiyeva', 'Gulruh', 'Valijon qizi', 'gulruh.ganieva@gmail.com', '$2y$13$uTDX1xHyIhfw35n4Bz0DBuyBHI9jfbr7xeE1qaxASdW.8NAD3xPh6', '09ChaUvf7mYB0MvUauAWu0vIZCBsyPz2', 1648552876, 1648552909, NULL, 'user', 14, '+998(97) 004-55-57', 10, 192, NULL, 10, '', NULL, '1991-07-29', NULL, NULL, NULL),
(111, 'Abdullayeva', 'Zarnigor', 'Gaybullayevna', 'qodirivxurshid19@gmail.ru', '$2y$13$96.x16yMtlSQWeRlpNaovOA7TeqAI5Un8o3ZbIpET9p9BP/iNN1zW', '8dAZLRGVCLwZUkjaKaFvdc6-QabFUF3l', 1648553571, 1648553607, NULL, 'user', 6, '+998(91) 335-87-19', 10, 75, NULL, 7, '', NULL, '1989-07-25', NULL, NULL, NULL),
(113, 'Xudayberdiyev ', 'Rahimnazar', 'Xolnazar o\'g\'li ', 'xudayberdiyevrahimnazar@gmail.com', '$2y$13$RhrzrWfjHYqdV/otgn/0zeqdDoZLH9Kv73pFp6Qo42Gbw7gQ.hszm', 'SqH5_ROWzzP4OKYT7HTQmN73jQjWEkjZ', 1648556090, 1648556118, NULL, 'user', 9, '+998(90) 378-99-08', 10, 116, NULL, 10, '', NULL, '1999-08-12', NULL, NULL, NULL),
(114, 'Saidov', 'Elmurod', 'Do\'stmurod o\'g\'li', 'saidovelmurod077@gmail.com', '$2y$13$jNh9xc8w6zchGjoly1gK4.qRm8N.GOT.nD/9Stsen7Ywm5CCNd1Um', '2Ge6xKKFA7LLPZeHAg3BQA9wdRbYra0y', 1648564567, 1648564590, NULL, 'user', 9, '+998(93) 768-91-27', 10, 117, NULL, 3, '', NULL, '1995-11-01', NULL, NULL, NULL),
(115, 'Туйчиева', 'Шахло', 'Шавкатовна', 'shahashovkatova@gmail.com', '$2y$13$DXIBz4gYSM9tCaYWpUYnFezQCkuGxe1h0rfT9BdWYNGd96Q34OiZy', 'XzwDnqTx-HF5aGdwQ0jQQhEiC6ZorQHQ', 1648566918, 1648566965, NULL, 'user', 14, '+998(99) 850-35-55', 10, 194, NULL, 3, '', NULL, '1985-02-19', NULL, NULL, NULL),
(117, 'To\'rayeva ', 'Nilufar ', 'G\'olib qizi ', 'nilufar@gmail.com', '$2y$13$VaYx9jmLGJ7UkQi6YfvOU.Fv9nuRT9zgxC/Zd5awyBrevoAih8EhW', 'V4U6Y0UoB63ts7J32hyXFfSSVuOJwjaf', 1648567159, 1648567187, NULL, 'user', 9, '+998(93) 954-17-98', 10, 114, NULL, 7, '', NULL, '1996-11-03', NULL, NULL, NULL),
(118, 'Almirov', 'Nazar', 'Sheraliyevich', 'almirovnazar00@gmail.com', '$2y$13$YiIThebRy7qb9wbOc0OuGOv92wbOZYdBelDpbAhbIW7vO/zlgXpgW', 'UXTA5lkweYWSbnDUQZV8M-H7qnmn-p3G', 1648567980, 1648568068, NULL, 'user', 5, '+998(90) 070-70-23', 10, 60, NULL, 7, '', NULL, '1986-10-20', NULL, NULL, NULL),
(119, 'Бобожонова', 'Мухлиса', 'Кузибоевна', 'bobozonovamuhlisa@gmail..com', '$2y$13$S3R6GSa28s44siTuQq46V.MohxoohcJNTyzZgfCiZO5u9tqmG1GTy', 'WhdiLs6IxmnXiX9DaeIUuHVMKRK2qxxc', 1648568442, 1648568481, NULL, 'user', 13, '+998(97) 516-17-24', 10, 175, NULL, 7, '', NULL, '1984-03-09', NULL, NULL, NULL),
(120, 'Abdusalomov', 'Tohir ', 'Nurillo o‘g‘li', 'tohirabdusalomov007@gmail.com', '$2y$13$EpGQ.taelUfOYd/lt/Nw.O3lnKlaVl2/e7YXAfwPfWBRK8dN.5qsC', 'MxcAssdpIhQaYH1r2eKuUqH8fiX6BMPD', 1648571545, 1648571564, NULL, 'user', 4, '+998(94) 193-97-13', 10, 52, NULL, 7, '', NULL, '1997-05-05', NULL, NULL, NULL),
(121, 'Валижанова', 'Мамура', 'Вилуровна', 'valijanovamamura@ru', '$2y$13$W7yNDFkCBObm8/GWEkUe4O/OA5GgY5evrY/uKvPznWgd9Ktw9ZePG', 'AH5ujYa9NZKToPnb-lXu2YSUPRL9jYUP', 1648572606, 1648572606, NULL, 'user', 14, '+978(97) 330-40-87', 9, 189, NULL, 7, '241710', '2N56UwxHy5YFyhdQjJr454ScNtLYIunJ', '1973-02-09', NULL, NULL, NULL),
(122, 'Ilxomjon', 'Abduraximov', 'Azimjon oʻgʻli', 'ailxomcheek@gmail.com', '$2y$13$olLdzfTfcbz6nlYRd62O.evXLJ7gSxqgoXnzeNQ.5STxcebyTaS9W', 'Z8rrTSvo-W5raeUoi2RlPkmYBt3gJ1tk', 1648572911, 1648572928, NULL, 'user', 2, '+998(33) 623-19-97', 10, 20, NULL, 7, '', NULL, '1997-06-23', NULL, NULL, NULL),
(123, 'Ibroximova', 'Ma\'murakhon', 'Alidjanovna', 'alijons167@gmail.com', '$2y$13$.p7glrBwdgHZkoDO09YSEuk2Ow/HkwroONuSQ1E4hXCIaVWnYrIpe', 'Ruu5vAGCDmUQMOIkUmPXqVAZbGAUN6lc', 1648573028, 1648573230, NULL, 'user', 14, '+998(93) 573-37-36', 10, 193, NULL, 7, '', NULL, '2022-04-23', NULL, NULL, NULL),
(127, 'Miliyeva', 'Muattar', 'Abduvahob qiz', 'muattarmiliyeva0811@gmail.com', '$2y$13$HoI.tIQWAXEqUYvIakNja..rSeA0/rU6PjQT/xDn5V9YyFS8ffQ86', 'OJN_8b0E7yYk40RsPcaLV4LQnF4uPIWh', 1648741939, 1652598125, NULL, 'user', 7, '+998(99) 375-55-41', 9, 93, NULL, 7, '878749', '1B1j90j4KBtzRVVksaBEKQ5-yNtxfBqW', '1992-11-08', NULL, NULL, NULL),
(128, 'Alikulova', 'Yulduz', 'Abdukaxarovna', 'yulduz1896@gmail.com', '$2y$13$txnWMVzYjCEgADtbiUkw5uJ1p1A3Mmw.Vza3.Ypdp/dras3n13uMC', 'rXZ4ybuvgbZgIOkOL07vTST4J9EToX5H', 1648745789, 1648745789, NULL, 'user', 11, '+998(90) 488-09-96', 9, 138, NULL, 3, '824596', 'zO3stSGOMiwaWVdskCG5MzapETpQT_M-', '1996-11-18', NULL, NULL, NULL),
(131, 'Soliyeva ', 'Feruza ', 'Olimjonovna', 'feruzasoliyeva429@gmail.com', '$2y$13$gdbEl6twE3DDlujxXw7vfeaKOaFPDZ7HvWG4aMwAuV5HHkB43F2h2', 'gAKCyYEQOk7mH5phBUrj2c6E3mLnMPvH', 1648872527, 1648872764, NULL, 'user', 6, '+998(93) 663-56-14', 10, 81, NULL, 3, '', NULL, '2022-04-26', NULL, NULL, NULL),
(132, 'Sahiyeva', 'Matluba', 'Toshpulat qizi', 'matlubasahiyevattatf@gmail.com', '$2y$13$J3ifmO38ObkOFw/qoFRAOua2X1NFwwmb2aShdN0D1SCvREqUF0Yim', 'hBVBSmY-XIsAQhM9qfOph9M-98SP8ScV', 1649176290, 1649176329, NULL, 'user', 9, '+998(93) 793-07-14', 10, 121, NULL, 10, '', NULL, '1991-10-19', NULL, NULL, NULL),
(133, 'Gʻanisherova', 'Nozima', 'Gʻanisher ', 'nozimaganisherova', '$2y$13$frTnq6xrbcrXFFWJ7oFL8urj9x51EWOL2uY3/TrbvXAd3G07VBcyO', 'xgZY6V-7JDqSf8mmddMiaXudgX8kOw5n', 1649518169, 1649518188, NULL, 'user', 5, '+998(90) 026-83-23', 10, 59, NULL, 3, '', NULL, '2000-09-04', NULL, NULL, NULL),
(134, 'Saidova', 'Iroda', 'Pòlat qizi', 'irodasaidova363@gmail.com', '$2y$13$y6NQedsyJ5zj0COjw5sSHeEesweLQjYyJpdhcM0MKbqilGbIym9gW', 'rEoB9vqYuJ04Bnl_qZIqLN_VjbiWSCGg', 1649522307, 1649522307, NULL, 'user', 13, '+998(93) 468-09-33', 9, 175, NULL, 7, '191087', 'jwzOidezrwZF7tUleZX34TiF_BzM_5Jn', '1993-12-09', NULL, NULL, NULL),
(135, 'Ollazarova ', 'Iroda ', 'Baxtiyor qizi ', 'ollazarovairoda@gmail.com', '$2y$13$nt.B2YWOf8yyiLr019q1EeExcDSsyP/uqPF3g04k8tB4UN3An0F4K', 'xdKGHLvKF_Wluhn-dS7BJS5aT_0TOkEk', 1649683084, 1649683110, NULL, 'user', 13, '+998(90) 432-16-19', 10, 181, NULL, 3, '', NULL, '1999-01-29', NULL, NULL, NULL),
(136, 'Bakiyeva', 'Emine', 'Anvarovna', 'eminebakiyeva5@gmail', '$2y$13$cRpvi9ueeDeZsg0xO2VFw.BQw1n/1EMyLUklbvTu8C1fX3FY01VDC', 'kEGn-mY1s8jRunMnD1u5J3tepeiLPZBt', 1649864544, 1649864790, NULL, 'user', 10, '+998(94) 588-75-08', 10, 132, NULL, 7, '', NULL, '1980-04-25', NULL, NULL, NULL),
(137, 'Niģmatillayeva ', 'Mahbuba', 'Mahammadvali qizi', 'Nizommahbuba@gmail.com', '$2y$13$WJj4dYYYL64XJLCn0ZEo9.Zx5ezddkqYgqFoosFY1lMPmB634GvJW', 'OnCvsTDfQYTu-DSPFYIzxbcc9mrssMhp', 1650178543, 1650178573, NULL, 'user', 11, '+998(99) 721-86-52', 10, 206, NULL, 3, '', NULL, '1996-12-25', NULL, NULL, NULL),
(139, 'Abduganiyeva', 'Sarvinoz ', 'Qodirali qizi', 'sarvinozabduganiyeva64@gmail.com', '$2y$13$06lYEzMG9kAW/W5rKZ675OkpEwEiZoyyew3kEJduhPR1r1DwnZtPC', 'EyE84LUeS3T8LTi603cH5_31GpqINVJ5', 1650532354, 1650532377, NULL, 'user', 11, '+998(93) 711-99-17', 10, 149, NULL, 7, '', NULL, '1999-03-17', NULL, NULL, NULL),
(141, 'Ibragimova', 'Ra\'no ', 'Xadyatillaevna', 'ibragimovaranosa34@gmail.com', '$2y$13$UtG9.Ti6KN16dNsI/giLb.1ixW798f1Bf4KUXUrvOX.OMhGN58gDm', 'FDVSTpSbRUuyGDFycMPZWvh2c8qjioDC', 1650610933, 1650610965, NULL, 'user', 2, '+998(90) 200-00-82', 10, 16, NULL, 3, '', NULL, '1982-09-03', NULL, NULL, NULL),
(142, 'Saidova', 'Sohiba', 'Rashidbekovna', 'sohibadunyo@gmail.com', '$2y$13$yU1sNa311TZPBiSv0ngyge29qdor46cJOFbedzIvtvPN6yV7dkCCy', 'qZdbSwUBVucXgxbI9FLTfvy9VxQX5ooy', 1650844843, 1650844894, NULL, 'user', 13, '+998(94) 071-50-03', 10, 179, NULL, 3, '', NULL, '1992-07-03', NULL, NULL, NULL),
(143, 'Teshaboyev', 'Inomjon', 'Adxamjonovich', 'teshaboevinomjon@gmail.com', '$2y$13$zLO16jpqIJ2z0YjYxwATCuFpvkc0o5EAieRu0PqJVwFQWisJvRB0m', 'CC5LmNx6gpTaQeaOisFtD9KIBG4Poi6Y', 1651298129, 1651298163, NULL, 'user', 12, '+998(99) 609-12-82', 10, 159, NULL, 7, '', NULL, '1982-12-12', NULL, NULL, NULL),
(144, 'Niyazova ', 'Muhabbat ', 'Ikromjonovna ', 'niyazovamuhabbat415@emal.com', '$2y$13$sbPQne6CccSLFJPEWTy9pOuyWChO0nXTKMqG1BbtHtgYlEGBNCWk.', 'iiTf6UVlWu3VdY7veTgKyBZqOwdXxotg', 1652019366, 1652019366, NULL, 'user', 7, '+998(93) 076-19-75', 9, 90, NULL, 7, '875397', 'cTb_D2FSqNd2i8Py-K22xwv00UN4_QWp', '1975-02-20', NULL, NULL, NULL),
(145, 'Axmedova', 'Nafosat', 'Umid qizi', 'nafosataxmedova7@gmail.com', '$2y$13$3sTXMSntvr3UO1sDp8iVs.GNKMLVldNuvoWrfn3SkFkJABWWjfTe.', '481RZucTVd9uJOEEURcN5IvJmBAH-SFG', 1652065422, 1652065442, NULL, 'user', 13, '+998(99) 387-53-43', 10, 173, NULL, 10, '', NULL, '1997-10-30', NULL, NULL, NULL),
(148, 'Aliyeva', 'Nargiza', 'Baxromjanovna', 'nasgizali2277@list.ru', '$2y$13$DDRO4fs3Fmb6LWUXGNEI0u.rkdSuBTAQ3QeHDAEPB.wSPa4GTOKcG', 'UpSZ1i4gIfxGBq-RGl4LBBwJVrmK9UO5', 1652100004, 1652100004, NULL, 'user', 7, '+998(97) 331-70-73', 9, 86, NULL, 3, '316301', 'sSww4p1lXSvKAVc2kKtWSGM83vZqKAhg', '1977-12-22', NULL, NULL, NULL),
(149, 'Kurbanbayev', 'Sardorbek', 'Kasimbay o\'g\'li', 'kurbanbayevsardorbek3@gmail.com', '$2y$13$X.1TdA.5azRrkoB7Cm7treVwmtYTFceRS34xk9LYIzmfUWXpVpwLi', 'P9eKrcTtnKek0CBs_jaKNIOKmOiz_FGs', 1652331471, 1652331497, NULL, 'user', 1, '+998(94) 148-95-15', 10, 11, NULL, 7, '', NULL, '1994-02-28', NULL, NULL, NULL),
(151, 'Sultanova ', 'Gulzira', 'Muratbaevna ', 'gulzira.@mail.uz', '$2y$13$1S2NJx.37rwZY5tYOCFdCuijuYye/TVy1zrTJSXUVMEwj..cgMZfm', 'oqu09eAGDxSZLks_gYKu4a6PFXT_oQol', 1652331557, 1652331577, NULL, 'user', 1, '+998(99) 053-88-94', 10, 9, NULL, 3, '', NULL, '2021-02-01', NULL, NULL, NULL),
(152, 'Omarova', 'Gulxan', 'Saylaubaevna', 'gulxan@.uz', '$2y$13$EKpDMb3O.5WVIDa4EuzqCeNjqxqVkkCWETxj8oQVXtCapHnh4iKR2', 'haqc2DSn8Br4eSHUH04sCtwq0OPHZydD', 1652331589, 1652331589, NULL, 'user', 1, '+938(61) 486-54', 9, 5, NULL, 7, '596671', 'mAAFPsCtUcj-jUdLZ_tMYOFfDMteMuQJ', '2022-12-26', NULL, NULL, NULL),
(154, 'Karayeva', 'Maxim', 'Gilijovna', 'kakabayevkuva@gmail.xom', '$2y$13$FbxUjhvpbUS7UX8kxbewH.8ttkGt6TC0zJnIA0U9EPOzuPuePRz86', 'slYt09kRkk_TfCkAR0SQmkcNqv9b8-tA', 1652349873, 1652349927, NULL, 'user', 1, '+998(99) 591-34-18', 10, 11, NULL, 7, '', NULL, '1990-11-03', NULL, NULL, NULL),
(156, 'Retbaeva', 'Balgan', 'XXX', '031021kzkz@gmail.com', '$2y$13$HRNyJ1O5v.SxPDfA9oG/Qu1cffte0wsjsSJiTJ7PkbE3gWd.7NZ/G', 'c4nHm0vqKUea_VIkRabI2Y6eTqLEeLjH', 1652350504, 1652350545, NULL, 'user', 1, '+998(93) 716-14-94', 10, 6, NULL, 7, '', NULL, '1994-05-26', NULL, NULL, NULL),
(158, 'Aliyeva', 'Dilnavoz', 'Tolqinboyevna', 'dilnavozaliyeva2@gmail.com', '$2y$13$BosdmKBktmAHOUzCD.fM4.9J.dWFjDX5bj6mQ.qBI4b0syCyPPRgK', 'HsJLmKHMtjGyAdC9Nu2Ph-6WSJLzq5Sg', 1652529925, 1652529925, NULL, 'user', 12, '+998(95) 045-47-90', 9, 165, NULL, 7, '121409', 'sVN1gTCMjvIoCL8rHKcsdY8lzV6OwwUm', '1990-09-01', NULL, NULL, NULL),
(160, 'Mòminova', 'Barchinoy', 'Sodiqjon qizi', 'azamatmominov165@gmail.uz', '$2y$13$pHFb6jDNFh.vcCbg6fJwtOzyXWQ9GYErbZjEOOMX4sOE/Yh/XJDhi', 'OVjz4XqIH0dr6Mi5r2Pzcq-j1XSvqE5S', 1652530145, 1653928508, NULL, 'user', 12, '+998(97) 417-40-90', 10, 170, NULL, 7, '', NULL, '1990-06-29', NULL, NULL, NULL),
(161, 'Jalilova', 'Shahlo', 'Muzaffarjon qizi', 'sjalilova56@gmail.com', '$2y$13$B9TrEYbQiJ/utuCtV1wqbevj0Nz48kZhzxjH3sg/xm42weYYujZyO', 'WyNNOByrn-lbIkxzobcCDr-z3iPRXPuE', 1652679337, 1652679337, NULL, 'user', 12, '+998(91) 125-03-44', 9, 165, NULL, 7, '302261', 'NW5G7XjdrXFSnHmkR5EAtGgJIUah0Ix0', '2022-03-30', NULL, NULL, NULL),
(162, 'Pozilova', 'Saidaxon', 'Davronovna', 'pozilovasaidaxon@gmail.com', '$2y$13$COm09ctBKUBZwYzXODG4dupcnbwLp/CY5hRf7gEZBgsNnGtYVBBOy', 'piI7O-nfLCoXQo3medOGOQ8EjeNtoTsW', 1652679472, 1652679540, NULL, 'user', 12, '+998(91) 143-85-68', 10, 168, NULL, 7, '', NULL, '1980-03-10', NULL, NULL, NULL),
(163, 'Utambetov', 'Rashid', 'Daribaevich', 'rashidutambetov48@gmail.com', '$2y$13$kDZjXx4u.sK66em/PDFkmu7PLHdvFkok4fqZI9V/d3e1LSxwCL6zm', 'iLb-c2tum1IIpxqIP07-uEedWAxXqozZ', 1652699177, 1652699222, NULL, 'user', 1, '+998(93) 360-16-61', 10, 3, NULL, 7, '', NULL, '1984-11-12', NULL, NULL, NULL),
(165, 'Qilichova ', 'Feruza ', 'Avazbek qizi ', '@qilichovaferuza2308@gmail.com', '$2y$13$7IqiNSsOtu./DKXcn0YA5eSg37TDaAMaAQeExAAL0x3EtnOnXHE/G', '9H3mqcMGi-eMJyjPq8a5rX6yHj9eeosg', 1653042447, 1653042482, NULL, 'user', 7, '+998(93) 321-77-09', 10, 87, NULL, 10, '', NULL, '2002-01-08', NULL, NULL, NULL),
(167, 'Sobiraliyeva', 'Mushtariy', 'Nazirjon qizi', '@mushtari.sobiraliyeva2000@mail.com', '$2y$13$2AAvFhpExhszSLJtdgT/x.kZF3qAJVQUZmh9lokNAy0G1WCpId3y.', 'Ftj2SJbK5plwjc1kUnHVZDngVk40drj3', 1653042541, 1653042935, NULL, 'user', 7, '+998(94) 306-14-46', 9, 93, NULL, 10, '992229', 'aV7Z4kHTqbPEMlTBJ8ENfq1aDQY4Hnvp', '2000-08-06', NULL, NULL, NULL),
(168, 'Ro\'ziboyeva ', 'Jumagul ', 'Abduqodir qizi ', 'jumagulroziboyeva@gmail.com', '$2y$13$uOVaJ04rWfV9/Bcew5OtluzStN6U6bDPPUrRCw8mKGMDhKrvdqRbm', 'udnJmJ_6LAD1Z15c34o5rLm_wPHnht7I', 1653042631, 1653042672, NULL, 'user', 7, '+998(94) 140-65-45', 10, 87, NULL, 10, '', NULL, '2002-02-15', NULL, NULL, NULL),
(169, 'Teshaboyeva', 'Malika', 'Abdumutalib qizi', '@teshaboyevamalika6@g.mailcom', '$2y$13$tsNjtWaRBD7Bye1lKpWWyeu/5SVDoxBVdUidr8fnI8TBHpc5HNLd2', 'YfbBTneUUu1kgj267PyCVNg9U6rrXZvl', 1653042663, 1653042689, NULL, 'user', 2, '+998(94) 874-22-65', 10, 19, NULL, 10, '', NULL, '2003-08-03', NULL, NULL, NULL),
(170, 'Bozorova ', 'Nazira ', 'Ergashali qizi', 'nazirabozorova531@gmail.com', '$2y$13$twVq4c4f2oJk.4IV7dXXK.cM0EBzKrw1ZE36291stJ.k4Un2WzVr.', 'kOBO3j4M65bEZYay5ZdotnlY_9M1VAVN', 1653042703, 1653042717, NULL, 'user', 7, '+998(93) 053-33-09', 10, 88, NULL, 4, '', NULL, '2000-05-09', NULL, NULL, NULL),
(171, 'Xolmirzayeva', 'Munavvarxon', 'Davlatali qizi', 'youdbshb@gmail.com', '$2y$13$vOnBA4JnQESsu503nNhD0O4wjw9uHKr8avc.PcxD9ptzL63HyzH6C', '3GorIX9cneXoUT5Dtpw9gnr7Kdj2U0Fl', 1653042755, 1653042830, NULL, 'user', 7, '+998(90) 752-35-95', 9, 90, NULL, 4, '611553', '1vmv_gFJ897o4tpKmiuLx6RPwy-3Neuq', '2002-03-18', NULL, NULL, NULL),
(172, 'Najmiddinova ', 'Komila', 'Abdulla qizi', 'najmiddinovakomila3@gmail.com', '$2y$13$0/34a0se.4iCx0cg1zxtv./nCoLOZA9.UKvrIHKJy/JXD81EWWTIe', 'Yt0y22Jc0WH43FfPn9o5_yurTvcxLW15', 1653042817, 1653042842, NULL, 'user', 7, '+998(93) 269-33-44', 10, 91, NULL, 10, '', NULL, '2002-04-15', NULL, NULL, NULL),
(173, 'Abdumannobova', 'Dilobar', 'Ravshanbek qizi', 'najimovmirzoxid@gmail.com', '$2y$13$vkVylhaMdUZZNfIHfTC77Oya2g1tA4EQTXzd1cZdj5nZANxOMrhK.', 'FGp5JQrReWORaYUKMUwANm5MNAX9jOOL', 1653042854, 1653042874, NULL, 'user', 7, '+998(94) 872-86-69', 10, 84, NULL, 3, '', NULL, '2002-09-06', NULL, NULL, NULL),
(174, 'Nurmamatova ', 'Maftuna ', 'G\'olibjon qizi ', 'maftunanurmamatova84@gmail.com', '$2y$13$jzy1bHiA6eOXWwwGSVuY0ObK5s0aec7YJqRJajxV0RgFbD536xP8C', 'wEGkGXwQ4Fz-6TWt4Znm6hZienR10zxC', 1653042919, 1653042937, NULL, 'user', 7, '+998(33) 340-21-03', 10, 87, NULL, 10, '', NULL, '2003-09-21', NULL, NULL, NULL),
(175, 'Fazliddinova', 'Nilufar', 'Axliddin ', 'nilufar', '$2y$13$4mZGvyJbTRnpaxT2aQBZEetaXoswCNU9yJnBrFm/1k0R03XEVGJz6', 'uyhWHOhKpeJTe1OyUDCgyyLDJrBnfUMs', 1653042921, 1653042977, NULL, 'user', 7, '+998(93) 059-55-07', 10, NULL, NULL, 10, '', NULL, '2002-02-04', NULL, NULL, NULL),
(176, 'Xoldorova', 'Mahinabonu', 'Rasuljon qizi', 'mxoldorova130@gmail.com', '$2y$13$VJzj1w6l8Vax32i/ZAiDW.RytjiywG0wELsARwmt4sLCZllb7xwoe', 'XJ0Z6mbDXmvxUu54uRuKpJ1xtEwb72Va', 1653043060, 1653043091, NULL, 'user', 7, '+998(93) 234-47-09', 10, 93, NULL, 10, '', NULL, '2000-11-12', NULL, NULL, NULL),
(177, 'SHokirova ', 'Zilola ', 'Isroiljon qizi', '@shokirovazilola8@gmail.com', '$2y$13$7.I.bDS185tFTwc00ALgQeNKarpwWg5s958Hnik7DTTUhv6ktlbMi', 'g97TrWd2iRY4vxEF8YfsSXApRxwsvIx2', 1653127350, 1653127379, NULL, 'user', 7, '+998(90) 797-62-02', 10, 83, NULL, 4, '', NULL, '2001-08-23', NULL, NULL, NULL),
(178, 'Sobirjanova ', 'Madinabonu', 'Oybek qizi', 'sobirjonovamadinabonu63@gmail.com', '$2y$13$cbsaHAP2ULGZgc45F1zuzObX5C7.DlqZOKcG9lOpBX1Z9lq6Vf9cO', 'g4ZPHtBs_PhaEDBqHAUuxVAg6euSsuab', 1653127353, 1653127379, NULL, 'user', 7, '+998(93) 150-83-03', 10, 85, NULL, 4, '', NULL, '2002-08-23', NULL, NULL, NULL),
(180, 'Baxriddinova ', 'Moxinur', 'Baxodir qizi', 'oqilbekbaxriddinov54@gmail.com', '$2y$13$ao79VE7KtejPinn10FysyODaOrtVDrWPwZbJp8YCVxbGHLFYvE85.', 'iP06skoUWyLicHq7nZsY4n1e6bXerSNl', 1653127658, 1653127672, NULL, 'user', 7, '+998(94) 081-04-24', 10, 85, NULL, 4, '', NULL, '2003-01-04', NULL, NULL, NULL),
(181, 'Abduqahhorova ', 'Oyjahon ', 'Sultonboy qizi ', 'marhaboxasanova1@gmail.com', '$2y$13$J799F8CfRlVKFfr8DY/NJu9uppvPoGVN3WyVOD5mO4xNhYioFNBR6', 'aYLj1wUERJNTRGTmmBmmhorZxEO9_TGH', 1653127850, 1653127879, NULL, 'user', 7, '+998(93) 212-01-03', 10, 87, NULL, 10, '', NULL, '2003-06-01', NULL, NULL, NULL),
(182, 'To‘xtaxo‘jayeva ', 'Muazzamxon', 'Shavkatjon qizi', 'mjashsmssms@gmail.com', '$2y$13$gSjKKzP2UyORq2Jy9cIlqOo5m17OB3BUdf0kD7KgQCGYv2R9pkxNy', 'QkPCy0EawCFPwY7bW82aGvKzTRxsjBFP', 1653128441, 1653128488, NULL, 'user', 7, '+998(93) 925-29-26', 10, 92, NULL, 4, '', NULL, '1993-04-10', NULL, NULL, NULL),
(188, 'Mòminova', 'Barchinoy', 'Sodiqjon qizi', 'azamatmominov@165gmailcom.uz', '$2y$13$goRVHw7VxTFkwjr2qfMiKuBJcimd2iNfNMmQdPAOB3/qv4.imm6wK', 'WjFE4jVdDd7ndoKJdATifcZGNQgHEZ47', 1653927684, 1653927684, NULL, 'user', 12, '+988(97) 417-40-90', 9, 170, NULL, 7, '857008', 'ufw11zP9t6nETlA1VkkONVMed6rvc460', '1990-06-29', NULL, NULL, NULL),
(189, 'Axtamova', 'Maxfuza', 'Asqad qizi', 'maxfuzaaxtamova@gmail.com', '$2y$13$MBXA1IwXMagHpoU.WAvDleLfB9hRkGScc7WkLYFoH3KXaicsRKPgm', 'EQeUhlfSB5DwbE3GV_JLkTTd9LbtHBf_', 1654148229, 1654149679, NULL, 'user', 3, '+998(99) 704-40-56', 9, 36, NULL, 3, '963446', 'crl3S1pJ90sDetTsDK8TZDRD4eUUgZdQ', '1996-02-27', NULL, NULL, NULL),
(190, 'Salimova', 'Zeboxon', 'Hoshimjon qizi', 'abdulloh @.', '$2y$13$y7igMVoJx3dvlf8OiDD1fORmi/3qFywjTGMUtLlsfki/GdpdEOqkG', 'KbQi4VPkweAXI-4P6h1XMNZTc9fso5cw', 1654153386, 1654153386, NULL, 'user', 2, '+998(99) 107--78', 9, 26, NULL, 3, '976617', 'XtjuPKCUhoyA7xMSb4HlrPAvWg2GjI0l', '2022-06-02', NULL, NULL, NULL),
(193, 'Abduvarisova ', 'Maftuna ', 'Abduvakhidovna', 'maftunka_smile@mail.ru', '$2y$13$xLsS1nNnn1G3IGpNIfeqgOWfHm67YEbgo0B48ssPX8PmNGuGx17uC', '9Ol44lB3NxNVPlA9YqtPq3yA3324uTbs', 1654786256, 1654786275, NULL, 'user', 14, '+998(99) 882-30-34', 10, 187, NULL, 3, '', NULL, '1995-03-23', NULL, NULL, NULL),
(194, 'Nurmatova', 'Dildoraxon', 'Erkinjon qizi', 'nurmatovadildora40@gmail.com', '$2y$13$3vkYtRW/baZrSo8ZrwpdGuJjyIQ2TRZQp.gjRQB8JonkEV9p5MZMW', 'YBX6rNsM8hUYmDcLLV7fF1rN6N0dbqvJ', 1656332207, 1656332207, NULL, 'user', 2, '+998(93) 976-48-96', 9, 23, NULL, 10, '570324', 'wnBq-XGIpoEOaam1NRX_GrSESutVygjB', '1996-08-25', NULL, NULL, NULL),
(195, 'Raxmatova ', 'Gulruh ', 'Hamroyevna ', 'gulruhraxmatova095@gmai', '$2y$13$ygHDm8RGiLbAb71kKXvkGehyjLHupFEl.xyyFn/rir59vxcrcblPe', 'IlewgKNb4S6LVyYz3xgL1gjooCNGl_RG', 1656347249, 1656347249, NULL, 'user', 5, '+998(90) 720-63-26', 9, 64, NULL, 3, '961621', 'eVArFeAqYGMsd8UZ4s9PgyDNBN2ZSA1V', '1987-04-20', NULL, NULL, NULL),
(198, 'Xamrayeva', 'Laylo', 'Mavlyanovna', 'xamrayevalaylo51@gmael.com', '$2y$13$Gdln7rtDabLefD.fx6KuE.GYVv5cpT5E56QfPRNeYkbZhPRvsQS5K', 'U7-9jMckZ9rc8bh2HptUaXaYGgTvslMj', 1656484883, 1656484929, NULL, 'user', 8, '+998(93) 235-53-41', 10, 102, NULL, 7, '', NULL, '1987-09-27', NULL, NULL, NULL),
(199, 'Bekkulova ', 'Shahnoza ', 'Qobilevna ', 'shahnozabekkulova', '$2y$13$V0X9uALdmXkri/kh3oEBTekYvQq1aFx.eybZGXS8R4qxjqz7KJd72', 'EXTYXgceXjgXtP6pXXzyB3bur0SO0Mll', 1656485035, 1656485067, NULL, 'user', 8, '+998(94) 470-39-10', 10, 104, NULL, 7, '', NULL, '1989-01-08', NULL, NULL, NULL),
(201, 'Akbarova', 'Iroda', 'Esanovna', 'IradaAkbarova@1990', '$2y$13$97O7aeMa2yQYYf09SiWQQu8ls5mOokVTLzRGH.oSVTTF6s5INWKsS', '8Zf4EsgzVC6sC1e_na9hqk2FWBBKmrxY', 1656485155, 1656485172, NULL, 'user', 8, '+998(90) 475-90-88', 10, 109, NULL, 7, '', NULL, '1990-12-20', NULL, NULL, NULL),
(209, 'Sayfullayev ', 'AbduQodir', 'Botirovich ', 'sayfullayevqodir@gmail.com', '$2y$13$A2eR3pGLvbipCzkPomlk4OXzoogYDxPRwrHnHKd40U4iUpNU0Rg.a', 'ira3kg2TfIU1LqcnihQ8WWFLcmfKKJ2W', 1660237001, 1660237001, NULL, 'user', 14, '+898(74) 617-56-6', 9, 185, NULL, 10, '986656', 'bqjRQL4NxVW8X3koh9MwCNNF6KXg33Wd', '1999-11-19', NULL, NULL, NULL),
(211, 'Rahimova ', 'Gulnora ', 'Sunnatovna', '(rahimovag222@gmail.', '$2y$13$sEr.e4vDifyIIMs7Flire.1J8/LIrm7MOxWcFwFvkIZciFtfnSDy2', 'm7mo9xOV8XrfUlaq2rkQzP0Pr-XpXCqa', 1660414192, 1660414212, NULL, 'user', 6, '+998(93) 313-20-30', 10, 74, NULL, 3, '', NULL, '2022-08-13', NULL, NULL, NULL),
(212, 'Xaytbekova ', 'Barchinoy', 'Xidir qizi', 'xaytbekovabarchinoy', '$2y$13$SOyxZ0lMnL8jMoUpc2A.O.vjPXOxCd5f4wOmExfqQJX.iACvQoJ.C', 'w-xgW_4WkOTvghTDqCwu8U09fRNjiNIt', 1660453236, 1660453236, NULL, 'user', 4, '+998(99) 096-25-31', 9, 52, NULL, 3, '121314', 'hAE9SFO90dtwf_obuf07aYgSqyCgNjlY', '2022-08-18', NULL, NULL, NULL),
(213, 'Bakirova', 'Iqbol', 'Hasanboy qizi', 'iqboloybakirova@gmail.com', '$2y$13$w.Dpt1uUiCkp7.vk19UOL.2LyImqKU.eGGm8gPLUO6C58wQ2rjmCS', 'SqDPa9JOeDrVt65rR3_dJIQ3dcsJHWeN', 1660472748, 1660472771, NULL, 'user', 11, '+998(99) 833-01-95', 10, 146, NULL, 3, '', NULL, '1995-01-30', NULL, NULL, NULL),
(214, 'ахадова', 'нилуфар', 'нодировна', 'axadova8187@gmail.com', '$2y$13$R/tAJc7uSJj/3K2Q//OZU.0glOLG1unJvXPeJYftiTymrdbI6SZHS', 'ktLXOpPOUow9q0GZImEYlIjSgIh0gFbK', 1660634747, 1660634833, NULL, 'user', 6, '+998(90) 504-75-81', 10, 79, NULL, 3, '', NULL, '1999-11-15', NULL, NULL, NULL),
(215, 'Karimova ', 'O\'g\'iljon', 'Abdullayevna', 'o\'g\'iljonkarimova.uz.@..com', '$2y$13$9d9b3apN/abj4FU2rAvV5.zkXd31SZ7He7yS34tjFPzvODxoBBKuS', 't_H2XNsniPytkDV0I3VWWsHWm18niL8l', 1660799981, 1660800024, NULL, 'user', 13, '+998(99) 347-70-73', 10, 177, NULL, 3, '', NULL, '2022-10-27', NULL, NULL, NULL),
(217, 'Mambedullaeva ', 'Gulshat', 'Allamuratovna', 'mambedulaevagulsat@gmail.com', '$2y$13$sX9qKlqkM0JNTI7BObITt.cBVf/F1L0v9UumFJ5af3YaeL/OZvMCy', 'OCPNjjWRYaP6ibgqd71pPcdRliAaH7Gr', 1663304687, 1663304687, NULL, 'user', 1, '+998(91) 386-10-85', 9, 6, NULL, 7, '497113', '4zI-R-uNiKyJ8kg9W2KltUj9crMU5uDu', '2022-09-27', NULL, NULL, NULL),
(218, 'Abdurohmonov ', 'Doniyor ', 'Ikromjon o\'g\'li ', 'doniyorabdurohmonov16@gmail.com', '$2y$13$EZz.Y9FVGfZ03Oq.Myk/IONb6j45PwlJZQQ6tNEu7zPQu..Uhi0tS', 'r0k9qd9vMDk5Y4aXsgY0vMV2uWDvfVqA', 1664165258, 1664165258, NULL, 'user', 7, '+998(93) 924-80-50', 9, 89, NULL, 7, '280934', 'ejSAsq3PIrlxpalbV-48vhDe_w4ELouY', '1995-03-08', NULL, NULL, NULL),
(219, 'Yusupov ', 'Sanjarbek', 'Anvarjonovich', 'yusupovsanjarbek@gmail.com', '$2y$13$YJiG2nQ84//NiZalNfN66eviTkxA45xFw242wF.mDm36xt1Ge6ueC', 'fnse3IkesHgubiUJ1A_fycPWzuXAMOmf', 1664343502, 1664343502, NULL, 'user', 2, '+998(99) 607-90-61', 9, 25, NULL, 3, '653265', 'JdrCPRAMPwDaVGlO2AQbpLYS61V4sTXk', '1992-04-02', NULL, NULL, NULL),
(225, 'Махкамова', 'Шодия ', 'Дилшод кизи', 'samuray_0110@mail.uz', '$2y$13$QT6BGJqOjptQWggek4c/jeWBQLQm9IqzcbXjSLjl85qqyQe5B1nIe', 'AskfBq8JQRXCX-nDX28gGu8K8UU7htqs', 1664824351, 1664824351, NULL, 'user', 14, '+998(99) 877-17-17', 9, 187, NULL, 3, '447325', 'CLRdTOuMgyvy9-LP6i8On9kMe0aKn64F', '2000-11-03', NULL, NULL, NULL),
(227, 'Makhamova', 'Shodiya', 'Dilshod qizi', 'maxkamoff757g@mail.com', '$2y$13$.W7c3SlnL4myxr0Vvpy6TuylYBG7l40RY4HNv5UyW9tonIlrVqvji', 'lUx7zeLq1i35IV1wWs2SdrSHOtlhkp2_', 1664903910, 1664903910, NULL, 'user', 14, '+998(90) 959-95-92', 9, 187, NULL, 3, '743126', 'gTk6WeUuhvpklGG0Zu4IcNf9ZSr1wJT0', '2000-11-03', NULL, NULL, NULL),
(229, 'Ganiyeva', 'Dilrabo', 'Zunaydilloyevna', 'd377466@gmail.com', '$2y$13$ESkTe3llNJjqZ9A9P.wrY.K/P/Z/o/hpBKPzWJnK6HBoBMBU0.9HG', 'IwpVnU-GzbPgkauoyPtYb94XvH4ZdJ7y', 1665218580, 1665218580, NULL, 'user', 3, '+998(97) 292-02-12', 9, 33, NULL, 3, '862971', '3o6-5ozU5zdwIuSgEg_bBjSetjfbi2Fc', '2022-04-12', NULL, NULL, NULL),
(230, 'Nurova', 'Gulnora', 'Andibasitovna', '29mtm@mail.ru', '$2y$13$LFgJlk0aT7KrEAqxkoqtvOjjWIFUJEV.lsqm3NwLsGWRnrwLvdPOa', 'jH-yc8BLXL2PJJm-9A4G55zYQPNgXCBg', 1665573677, 1665573677, NULL, 'user', 11, '+998(99) 852-79-26', 9, 147, NULL, 3, '526960', '_cTykevSRadHLHQSdvbR1QDAKgxVgPXw', '1990-08-21', NULL, NULL, NULL),
(231, 'Xo\'janiyozova', 'Dilafro\'z', 'Hayitmamatovna', 'x.dilafruz.9212@inbox.ru', '$2y$13$KcI4ZztmoIgiGrwo/DgF5O7L0V7pVMAd1GY8o24RgO115rpjZNSka', '3NvnF9b9O4XEIBW4inKbsA0O9x3Vj7aP', 1665726507, 1665726507, NULL, 'user', 13, '+998(91) 434-83-10', 9, 181, NULL, 3, '983700', 'JTuXYmHrB-j0JyWIVYqxFNZVWMFzqpqH', '1992-01-12', NULL, NULL, NULL),
(232, 'To\'rayeva', 'Sadafoy', 'G\'anijon qizi', 'turayevasadafoy@gmail.com', '$2y$13$e1DqCeb/c9Kvw1LWj1f7EuC02C/JXZp6GiJBmNVVF8rj1wGPJH3j6', 'A80uCWzVD8vVuRhvgb5iFW9FZ6Sy44ej', 1666063426, 1666063426, NULL, 'user', 3, '+998(93) 774-37-22', 9, 39, NULL, 3, '493584', 'wzgFu2MQw3KM_ah70-nmWq4UF6Mo-6xJ', '2000-10-01', NULL, NULL, NULL),
(233, 'Asqarjonova', 'Madina', 'Abdulloh qizi ', 'asqarjonova97@mail.ru', '$2y$13$ngZJ5NhqT7Z3W8WHPVGHkeD7NIQrMbUkMQ2/h0ODOP49xRGCy077.', 'EnMe9TFVQdJ4krc-O4BBC0TsG0dBz4uv', 1666718232, 1666718232, NULL, 'user', 14, '+998(97) 776-66-30', 9, 184, NULL, 3, '708545', 'tIxIHF_AroAya4ZQh_Bmla1G5Ya8pdqR', '1997-06-30', NULL, NULL, NULL),
(234, 'Abdullayeva', 'Gulhayo', 'Isomiddin qizi', 'abdullayevaxror95@gmail.uz', '$2y$13$EmcBcToulTfnp5a8icvnYOU/Gj4dGkhxZqwIUJM0hQz9djQFr8I0C', 'oC7ejSqA81BZeazSFtdzXcwS3DEPf77z', 1666761187, 1666761187, NULL, 'user', 7, '+998(99) 681-71-40', 9, 93, NULL, 3, '306334', 'YDuiiEOp7KPiI6AGybAGRPKNOEyGyrFX', '1995-07-08', NULL, NULL, NULL),
(236, 'Abdullayeva', 'Gulhayo', 'Isomiddin qizi', 'abdullayevaxror95@gmail.com', '$2y$13$1xDERXvutiziXfgi0AD81uE5nWNLoHU8qpc4JzSI9FF87OOl2UK42', 'fFjmv2ZV1mDrHcH7M1F4LaR_Y_Mz9llL', 1666761379, 1666761379, NULL, 'user', 7, '+998(97) 928-02-64', 9, 93, NULL, 3, '597289', '5xYcNQZjC_SUNil-G6Sq4k17Tb54Xi9o', '2022-10-26', NULL, NULL, NULL),
(237, 'Xolmirzayeva ', 'Mushtaribonu ', 'Murodjon qizi ', 'tirkashaliyevam@gmail.com', '$2y$13$9TZ0COg1.ItFjAfzWmjhcupQ9KlwqYWVNNTD8qq6v78fzZZlwf.9i', 'yjWOP35J-HIgW4oEKTZeFqx2mokd1RRQ', 1666906089, 1666906089, NULL, 'user', 12, '+998(90) 306-88-96', 9, 168, NULL, 3, '845574', '2Zx31OkFABalknU12f_zlwCAwaqf6KOZ', '1999-08-09', NULL, NULL, NULL),
(241, 'Usmanova', 'Ra\'noxon', 'Nimatjanovna', 'usmonovarano29@gmail.com', '$2y$13$TSzVzTsCpOuQ/4MhklwSsuGfUrYxAdqS5xSNHEs5xg0Xsy87NXrVi', '14NtQQvGyC2kwEGM0TPspU5AapKMbIyT', 1667967835, 1667967835, NULL, 'user', 2, '+998(97) 581-16-86', 9, 22, NULL, 3, '704458', 'jIVYcviskrgBlmOf0DBLOGmiP4MDGItJ', '1986-05-14', NULL, NULL, NULL),
(242, 'Otamurodova ', 'Roza', 'Otamurodovna', '@Otamurod', '$2y$13$1tD3jFV7Z6m7xm3uml42u.RuVYknxEAqOgv8BuBWyTSDBESY6MCkW', 'GZMvv88kXXhqJJMKlA6bAAkHkeq5YWUt', 1667967886, 1667967886, NULL, 'user', 8, '+998(90) 227-17-71', 9, 108, NULL, 3, '778662', 'TiOo4zA-NE55CZckCZb7u58s89OxD8bm', '1998-01-01', NULL, NULL, NULL),
(244, 'Abruyeva', 'Alfiya', 'Abruyevna', 'alfiyaabruyeva@gmail.com', '$2y$13$5943mxJnl0F/cN7cIILPdeVpMRGfv796jl3QUkDEl7yZe4GPJy/lG', 'JFlzFmF81K-Cr-jSox7T4amLW2meBgOQ', 1667968261, 1667968261, NULL, 'user', 5, '+998(91) 643-91-69', 9, 63, NULL, 3, '922163', '_e8lnIUspPLBHPLuDon-_2jFcHz1tV7c', '1986-12-04', NULL, NULL, NULL),
(246, 'Xalilova', 'Gulchehra', 'Jamilovna', 'mironjan77@gmail.com', '$2y$13$/bBwjUeDaEEPICPkqK6K5uLqNbeYGNoMGBZxanQSu8TRO6trPkeD.', 'JOKJxqBIbKRQcGiFrKHE1fDnNI8pF5U4', 1667968691, 1667968691, NULL, 'user', 3, '+998(93) 626-34-14', 9, 39, NULL, 3, '766885', 'JJzxhAr1FzVanhHQjdgrBZg0O80URwA5', '1977-12-10', NULL, NULL, NULL),
(247, 'Abduraimova', 'Xumoraxon', 'Alisherovna', 'bugalter 701@gmail.com', '$2y$13$Vkaum9kdIvcboYGHvbihqOQ0hq6chuuc2ONuziuzt2oCHcLLSkwz.', 'tvvfbdhPhjceuUZvNYa7bCu16QZofi-f', 1667968954, 1667968954, NULL, 'user', 11, '+998(93) 562-50-02', 9, 146, NULL, 3, '287524', 'ZS6sLAhs5agiISaLyP8sBHeDBBHcJWa0', '1990-12-15', NULL, NULL, NULL),
(249, 'Madaminova ', 'Sevara', 'Ro\"zimbayevna', 'sevaramadaminova1008@gmail.com', '$2y$13$brCWv7MP2/Lfr4Bx2zWZfuIgIq2t.in0sToG6Jz4Em/lTicHuFdsW', 's5CRPSufNZ_w6LSAyIrB5ujHolIRbLxM', 1667974676, 1667974676, NULL, 'user', 14, '+988(94) 684-57-55', 9, 190, NULL, 3, '782615', '6gw_9TLnYdx1hMyR0usGe7AB9hIeW7C1', '2022-08-10', NULL, NULL, NULL),
(250, 'Abzalova ', 'Malokhat ', 'Bohodirovna', 'malokhatabzalova2@gmail.com', '$2y$13$RtVveRt9g8XQ1USyrXZ/x.eRLFemQuovNsMfZZ/LX6zEZ70iNgVEq', 'QENkqKXMLVcSu7wf3PpcMjIa4eWsatdP', 1667974737, 1667974737, NULL, 'user', 14, '+998(93) 579-72-50', 9, 185, NULL, 3, '358352', 'GcHhJI7CwSwuYv5Y0EF_TeMYSjyCZmDI', '2022-11-26', NULL, NULL, NULL),
(251, 'Bobojonov', 'Tolibjon', 'Maqsud ogli', 'tolibjonbobojonov7@gmail.com', '$2y$13$xJG8bta7houMAhB6T1z8yO2WUXTFlGGxPO7WC60FOLyDdCgrq3kua', 'rhw7IkekCoR-OO7SIoyGLzeAg5UmIFgp', 1668106802, 1668106802, NULL, 'user', 13, '+998(93) 287-32-31', 9, 173, NULL, 3, '231190', '4dYmePzYSZ00WIeK_nHc6KGHtJ8UoypM', '1997-05-05', NULL, NULL, NULL),
(259, 'Aliqulov', 'Akmal', 'Xushmuratovich', 'akmalaliqulov@gmail.com', '$2y$13$VtTRp7S4HDv9whAZD6x.vOiwFq4b1kq5O0eF5oWxPVQFwCTuuvhMa', 'W2caXjq54ed4KIG-HJ_C9zj_E4CBJSW-', 1668599344, 1668599344, NULL, 'user', 14, '+998(93) 600-01-11', 9, 188, NULL, 10, '916569', 'DPATyTxtzO1vRdWr2F-of7mDfpU64Ni1', '1989-12-11', NULL, NULL, NULL),
(260, 'Axmadaliyeva', 'Zarina', 'Ortiqboyevna', 'axmadaliyevazarina@gmail.com', '$2y$13$Vh0jVbpyLFr1JzKyjvb1Mu6jngQ3UO/KDAMYAV0g.WDwMgna0Paty', 'K1QaCsRMJdNrI_UrqqWu_1gvXRKFR45O', 1668836442, 1668836442, NULL, 'user', 2, '+998(97) 339-00-90', 9, 23, NULL, 3, '852910', '2d0RNf8KeKPbqeyc57mkkgX7z_09qiU6', '1990-03-27', NULL, NULL, NULL),
(263, 'Quvatova', 'Farangiz', 'Sodiq qizi', 'farangizquvvatova9@gmail.com.', '$2y$13$41aWpZbyrQcIfsJLw72G6OeeDBMTpg0f/lC8OhCTVSsDH./CqP4Zq', 'QqhnsgICgv0i5Glu6mt7htEDW9yZdsyF', 1669191910, 1669191910, NULL, 'user', 5, '+998(90) 062-68-69', 9, 65, NULL, 3, '228513', 'PMl3nTH0sIGfl_ENn9zD7qtKZjnM-lqY', '1996-07-07', NULL, NULL, NULL),
(264, 'Hamidova ', 'Shoxsanam ', 'Komiljon qizi', 'shoxsanamkomilovna07@ mail.com', '$2y$13$cQ5Cm22KRkLorUc8.YJZ4eV4X8nf2K1mxgpBqLMhbPyqh5aSjw0ia', 'tCfGPWR6Dge2eqIrWoswK5GFGguBMYSo', 1669458717, 1669458717, NULL, 'user', 6, '+998(90) 717-22-17', 9, 75, NULL, 10, '995884', 'gHF9AXF9Cbl0cbl6I6_AChEVyYIu7yM9', '1999-09-06', NULL, NULL, NULL);
INSERT INTO `user` (`id`, `last_name`, `first_name`, `middle_name`, `email`, `password_hash`, `auth_key`, `created_at`, `updated_at`, `last_login_at`, `role`, `viloyat_id`, `telefon`, `status`, `tuman_id`, `komissiya_id`, `kasb_id`, `activate`, `activation_token`, `date_of_birth`, `mutaxassislik_id`, `gender_id`, `avatar`) VALUES
(265, 'Yunusova ', 'Mahliyoxon', 'Erkinjon qizi', 'yunusovamaxliyo728 gmail.com', '$2y$13$C/DxaF1sjNxk8agNNYgoYeqLEXiasQWRCbS2ojynyeLrkDCMZNUYO', '_MxPocT5t42MUaDKZRR5pDuVUe26LW_q', 1669610235, 1669610235, NULL, 'user', 12, '+998(90) 833-50-98', 9, 164, NULL, 3, '153150', 'D9hzq-YP81iHGH3JSgH1TOucxfQAIw8W', '1998-04-27', NULL, NULL, NULL),
(266, 'Berdiyeva ', 'Iroda', 'Urazali qizi', 'irodaberdiyeva13@gmail.com', '$2y$13$ihGxVT2NKVNynI1.Yofnn.Eva7OTH1ELS9Vn1Z2Q3fEwRD3Q9FV82', 'ZyhIlt4favcFBjY35l1yVQbBEk-Nh9Rz', 1672679527, 1672679527, NULL, 'user', 11, '+998(94) 157-08-99', 9, 145, NULL, 3, '142113', 'maw4m5xNngz9O9bmMXEpnYTM_fSDJEeq', '1999-08-30', NULL, NULL, NULL),
(267, 'Rustamaliyeva', 'Xurshidaxon', 'Ilxom qizi', 'toirjonrustamaliyev@gmail.com', '$2y$13$1UxSM6mY0SC9JjtXo8Eaxes2ZX6/Qr17eQGOUeA8DR4QLQ2D/cx22', 'xbPrvOFNx3XtHUDMiZCjKIl8ikKDM2Mt', 1672980045, 1672980045, NULL, 'user', 12, '+998(94) 493-01-08', 9, 156, NULL, 3, '318708', 'kahC_VSVwoxNOTBqsUs7BAQb1eYpbgt1', '2023-04-21', NULL, NULL, NULL),
(268, 'Rahimov', 'Aziz', 'Rahim oʻgʻli', 'azizrahimov853@gmail.com', '$2y$13$nomUGUg2/Pc1BXB1cEPgK.1M46MYTEcngpXBV.T2izLzBoamk6mlu', 'LbMWWX458UyxSc1RsNbWyZK87igCF4hi', 1673187604, 1673187604, NULL, 'user', 5, '+998(94) 236-23-66', 9, 63, NULL, 3, '197989', 'pJFZk9qnud_veXcE7kL9Wn129tDnpYwT', '1990-01-08', NULL, NULL, NULL),
(269, 'Матчанова', 'Феруза', 'Сура кизи', 'feruzamgu@mail.ru', '$2y$13$rHVZyOjyU.dTuZvOVsxFCe9WmkzyhIbfzn1/jquHjqmI1YK1XYuL6', 'OCkqImebIyTgRZwux1CSDYwMXTdGe44w', 1673257447, 1673257447, NULL, 'user', 14, '+978(72) 848-43', 9, 184, NULL, 3, '339209', 'JcMTtx2GIpblvGrA4knMRfGr8MWfoHRJ', '1995-08-08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `viloyat`
--

CREATE TABLE `viloyat` (
  `viloyat_id` int(11) NOT NULL,
  `viloyat_nomi` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `viloyat`
--

INSERT INTO `viloyat` (`viloyat_id`, `viloyat_nomi`, `status`) VALUES
(1, 'Qoraqalpog\'iston Respublikasi', 1),
(2, 'Andijon viloyati', 1),
(3, 'Buxoro viloyati', 1),
(4, 'Jizzax viloyati', 1),
(5, 'Qashqadaryo viloyati', 1),
(6, 'Navoiy viloyati', 1),
(7, 'Namangan viloyati', 1),
(8, 'Samarqand viloyati', 1),
(9, 'Surxondaryo viloyati', 1),
(10, 'Sirdaryo viloyati', 1),
(11, 'Toshkent viloyati', 1),
(12, 'Farg\'ona viloyati', 1),
(13, 'Xorazm viloyati', 1),
(14, 'Toshkent shahri', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bemor`
--
ALTER TABLE `bemor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- Индексы таблицы `viloyat`
--
ALTER TABLE `viloyat`
  ADD PRIMARY KEY (`viloyat_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bemor`
--
ALTER TABLE `bemor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `viloyat`
--
ALTER TABLE `viloyat`
  MODIFY `viloyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
