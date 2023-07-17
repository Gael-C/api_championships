-- Adminer 4.8.1 MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `leagues`;
CREATE TABLE `leagues` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_champion` bigint unsigned DEFAULT NULL,
  `most_successfull` bigint unsigned DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leagues_last_champion_foreign` (`last_champion`),
  KEY `leagues_most_successfull_foreign` (`most_successfull`),
  CONSTRAINT `leagues_last_champion_foreign` FOREIGN KEY (`last_champion`) REFERENCES `teams` (`id`),
  CONSTRAINT `leagues_most_successfull_foreign` FOREIGN KEY (`most_successfull`) REFERENCES `teams` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `leagues` (`id`, `name`, `creation`, `last_champion`, `most_successfull`, `description`, `created_at`, `updated_at`) VALUES
(1,	'Top 14',	'1892',	7,	12,	NULL,	NULL,	NULL),
(2,	'Pro D2',	'2000',	1,	6,	NULL,	NULL,	NULL),
(3,	'Premiership Rugby',	'1987',	36,	36,	NULL,	NULL,	NULL),
(4,	'United Rugby Championship',	'2001',	47,	54,	NULL,	NULL,	NULL),
(5,	'Champion\'s Cup',	'1995',	11,	12,	NULL,	NULL,	NULL),
(6,	'EPCR Challenge Cup',	'1996',	6,	5,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE `pictures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint unsigned DEFAULT NULL,
  `league_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pictures_team_id_foreign` (`team_id`),
  KEY `pictures_league_id_foreign` (`league_id`),
  CONSTRAINT `pictures_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pictures_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teams` (`id`, `created_at`, `updated_at`, `name`, `nickname`, `foundation`, `stade`, `capacity`, `website`, `facebook`, `twitter`, `instagram`, `youtube`, `description`) VALUES
(1,	NULL,	NULL,	'Avirons Bayonnais',	'AB',	'1906',	'Jean Dauger',	'18069',	'www.abrugby.fr',	'https://www.facebook.com/avironbayonnaisrugbypro',	'https://twitter.com/avironrugbypro',	'https://www.instagram.com/avironrugbypro/',	'',	NULL),
(2,	NULL,	NULL,	'Union Bordaux Bègles',	'UBB',	'2006',	'Chaban-Delmas',	'34462',	'http://www.ubbrugby.com/',	'https://www.facebook.com/ubbrugby',	'https://twitter.com/ubbrugby',	'https://www.instagram.com/ubbrugby',	'https://www.youtube.com/channel/UC0ofHgdtPGcNd21eVuBSWBQ',	NULL),
(3,	NULL,	NULL,	'Club Athlétique Brive Corrèze Limousin',	'CAB',	'1910',	'Amédée- Domenech',	'13379',	'www.cabrive-rugby.com',	'https://www.facebook.com/CA-Brive-Rugby-Officiel-136407633069304/',	'https://twitter.com/CABCLRUGBY',	'https://www.instagram.com/cabriverugbyofficiel/',	'',	NULL),
(4,	NULL,	NULL,	'Castres Olympique',	'CO',	'1906',	'Pierre-Fabre',	'12500',	'www.castres-olympique.com',	'https://www.facebook.com/CastresOlympiqueOfficiel',	'https://twitter.com/CastresRugby',	'https://www.instagram.com/castresrugby/',	'',	NULL),
(5,	NULL,	NULL,	'Association Sportive Montferrandaise Clermont Auvergne',	'ASM',	'1911',	'Marcel Michelin',	'19372',	'www.asm-rugby.com',	'https://fr-fr.facebook.com/asm.clermont.auvergne/',	'https://twitter.com/ASMOfficiel',	'',	'',	NULL),
(6,	NULL,	NULL,	'Lyon Olympique Universitaire',	'LOU',	'1896',	'Matmut Stadium Gerland',	'35029',	'www.lourugby.fr',	'https://www.facebook.com/LOU.Rugby/',	'https://twitter.com/lelourugby?lang=fr',	'https://www.instagram.com/lourugby1896/?hl=fr',	'https://www.youtube.com/channel/UCAwMdlmJy1PmeeXwdZuTjXw',	NULL),
(7,	NULL,	NULL,	'Montpellier Hérault Rugby',	'MHR',	'1986',	'GGL Stadium',	'15697',	'www.montpellier-rugby.com',	'https://www.facebook.com/Montpellier.Rugby',	'https://twitter.com/MHR_officiel',	'https://www.instagram.com/mhr_officiel',	'https://www.youtube.com/user/montpellierrugby?feature=results_main',	NULL),
(8,	NULL,	NULL,	'Section Paloise',	'SP',	'1902',	'Stade du Hameau',	'14588',	'http://www.section-paloise.com/',	'https://www.facebook.com/SectionPaloiseBearnPyrenees',	'http://instagram.com/sectionpaloisebearnpyrenees',	'http://instagram.com/sectionpaloisebearnpyrenees',	'',	NULL),
(9,	NULL,	NULL,	'Rugby Club Toulonnais',	'RCT',	'1908',	'Stade Mayol',	'17500',	'http://www.rctoulon.com/',	'https://www.facebook.com/RCTofficiel',	'https://twitter.com/rctofficiel',	'https://instagram.com/rctofficiel/',	'https://www.youtube.com/c/RCTRugbyClubToulonnais',	NULL),
(10,	NULL,	NULL,	'Stade Français Paris',	'SFP',	'1883',	'Jean-Bouin',	'25000',	'www.stade.fr',	'https://www.facebook.com/SFPARIS',	'https://twitter.com/SFParisRugby',	'https://www.instagram.com/stade_francais_paris/',	'https://www.youtube.com/channel/UC9HI0fd8SE_IfSaFkVKfPLA',	NULL),
(11,	NULL,	NULL,	'Stade Rochelais',	'SR',	'1898',	'Marcel Deflandre',	'16000',	'http://www.staderochelais.com/',	'https://www.facebook.com/staderochelais',	'https://twitter.com/staderochelais',	'https://www.instagram.com/staderochelais',	'https://www.dailymotion.com/staderochelais',	NULL),
(12,	NULL,	NULL,	'Stade Toulousain',	'ST',	'1907',	'Ernest Wallon',	'19000',	'www.stadetoulousain.fr',	'https://fr-fr.facebook.com/StadeToulousainOfficiel',	'https://twitter.com/StadeToulousain',	'http://instagram.com/stadetoulousainrugby',	'https://www.youtube.com/stadetoulousain',	NULL),
(13,	NULL,	NULL,	'Union Sportive Arlequins Perpignanais',	'USAP',	'1902',	'Aimé-Giral',	'14593',	'www.usap.fr',	'https://www.facebook.com/USAPOfficiel',	'https://twitter.com/usap_officiel',	'https://www.instagram.com/usapofficiel/',	'https://www.youtube.com/channel/UCUZuZFU1VeHD9ZJJ3t3wnsQ',	NULL),
(14,	NULL,	NULL,	'Racing 92',	'R92',	'1890',	'Paris La Défense Aréna',	'32000',	'www.racing92.fr',	'https://www.facebook.com/Racing92Officiel/',	'https://twitter.com/Racing92',	'https://www.instagram.com/Racing92/',	'https://www.youtube.com/channel/UC4MQWtqrcD567vQIKyBJcsQ/',	NULL),
(15,	NULL,	NULL,	'Provence Rugby Aix-Marseille',	'PR',	'1970',	'Maurice-David',	'6425',	'https://www.provencerugby.com/',	'https://www.facebook.com/ProvenceRugby',	'https://twitter.com/ProvenceRugby',	'https://instagram.com/provencerugbyofficiel/',	'https://www.youtube.com/channel/UC6j-ShG-12kluScwHKoEhew',	NULL),
(16,	NULL,	NULL,	'Stade Aurillacois Cantal Auvergne',	'SACA',	'1904',	'Jean-Alrice',	'7800',	'www.stade-aurillacois.fr',	'https://www.facebook.com/SArugbyofficiel/',	'https://twitter.com/SArugbyofficiel',	'https://www.instagram.com/sarugbyofficiel/',	'https://www.youtube.com/channel/UCouXlRCs_l6lnTG1pTSQKaQ',	NULL),
(17,	NULL,	NULL,	'Sportive Union Agen Lot-et-Garonne',	'SUA',	'1905',	'Armandie',	'14400',	'http://www.agen-rugby.com/',	'https://www.facebook.com/agenrugby/',	'https://twitter.com/agen_rugby',	'https://www.instagram.com/agen_rugby/',	'http://www.dailymotion.com/agenrugby',	NULL),
(18,	NULL,	NULL,	'Soyaux Angoulême XV Charente',	'SA XV',	'2010',	'Chanzy',	'8000',	'http://www.saxvcharente.fr/',	'https://www.facebook.com/saxvcharente.fr',	'https://twitter.com/saxv_charente',	'https://www.instagram.com/saxv_charente_rugby',	'',	NULL),
(19,	NULL,	NULL,	'Association Sportive Béziers Hérault',	'ASBH',	'1911',	'Raoul-Barrière',	'18255',	'https://www.asbh.net/',	'https://www.facebook.com/pages/ASBH-Officiel',	'https://twitter.com/ASBHOfficiel',	'https://www.instagram.com/asbhofficiel/',	'https://www.youtube.com/c/ASB%C3%A9ziersH%C3%A9raultRugby',	NULL),
(20,	NULL,	NULL,	'Biarritz Olympique',	'BO',	'1913',	'Parc des sports Aguiléra',	'13400',	'bo-pb.com',	'https://www.facebook.com/BOPB-page-officielle-208217155896387/',	'https://twitter.com/BOPBweb',	'https://www.instagram.com/bopb_officiel/?hl=fr',	'',	NULL),
(21,	NULL,	NULL,	'Union Sportive Carcasonnaise XV',	'USC XV',	'1899',	'Albert-Domec',	'6500',	'http://www.uscarcassonne.com/',	'https://www.facebook.com/USCXV',	'https://twitter.com/USCXV',	'https://www.instagram.com/uscarcassonnexv',	'https://www.youtube.com/user/UsCarcassonne1',	NULL),
(22,	NULL,	NULL,	'Colomiers Rugby',	'COL',	'1915',	'Michel Bendichou',	'11000',	'http://www.colomiers-rugby.com/',	'https://www.facebook.com/ColomiersRugbyOfficiel/',	'https://twitter.com/ColomiersRugby',	'https://instagram.com/colomiersrugby',	'',	NULL),
(23,	NULL,	NULL,	'Football Club de Grenoble Rugby',	'FCGB',	'1892',	'Stade des Alpes',	'20068',	'http://www.fcgrugby.com/',	'https://www.facebook.com/FCGrugby',	'https://twitter.com/fcgrugby?lang=fr',	'https://www.instagram.com/fcgrugby/',	'',	NULL),
(24,	NULL,	NULL,	'Union Sportive Montabanaise XV',	'USM XV',	'1903',	'Sapiac',	'1937',	'www.usmsapiac.fr',	'https://www.facebook.com/USMsapiac',	'https://twitter.com/UsmSapiacRugby',	'https://www.instagram.com/usm_sapiac/',	'https://www.youtube.com/channel/UCBOhWG8te6jvgqnx-2JPwWA',	NULL),
(25,	NULL,	NULL,	'Stade Montois Rugby',	'SMR',	'1908',	'André et Guy Boniface',	'8250',	'http://www.stademontoisrugby.fr/',	'https://www.facebook.com/SM.Rugby.Pro/',	'https://twitter.com/SMR_Rugby',	'https://www.instagram.com/stademontoisrugby/?hl=fr',	'',	NULL),
(26,	NULL,	NULL,	'Rugby Massy Club Essonne',	'RCME',	'1971',	'Jules Ladoumègue',	'3000',	'rcmessonne.com',	'https://www.facebook.com/pages/Rugby-Club-Massy-Essonne',	'https://twitter.com/RCME91',	'https://www.instagram.com/rcme_officiel/',	'https://www.youtube.com/channel/UCTYBfKIfruJbj8QRfL0PZ1w',	NULL),
(27,	NULL,	NULL,	'USON Nevers Rugby',	'USON',	'1903',	'Stade du Pré Fleuri ',	'7500',	'http://www.usonneversrugby.com/',	'https://www.facebook.com/UsonNeversRugby',	'https://twitter.com/usonneversrugby',	'https://www.instagram.com/usonneversrugby',	'https://www.youtube.com/user/UsonRugbyPlus',	NULL),
(28,	NULL,	NULL,	'Oyonnax Rugby',	'OYO',	'1909',	'Charles Mathon',	'11400',	'http://www.oyonnaxrugby.com/',	'https://www.facebook.com/OyonnaxRugbyOfficiel',	'https://twitter.com/OyonnaxRugby',	'https://www.instagram.com/oyonnaxrugby/?hl=fr',	'https://www.youtube.com/channel/UCf7BLip3jg_Vod8RRJa7T6Q',	NULL),
(29,	NULL,	NULL,	'Rouen Normandie Rugbyen',	'RNR',	'2009',	'Robert Diochon',	'12018',	'https://rouennormandierugby.fr/',	'https://www.facebook.com/RouenNormandieRugby/',	'https://twitter.com/rouenndierugby?lang=fr',	'https://www.instagram.com/rouen_normandie_rugby/',	'',	NULL),
(30,	NULL,	NULL,	'Rugby Club Vannetais',	'RCV',	'1950',	'La Rabine',	'11415',	'http://www.rugbyclubvannes.bzh/',	'https://www.facebook.com/RugbyClubVannes',	'https://twitter.com/RugbyClubVannes',	'https://www.instagram.com/rugbyclubvannes/',	'https://www.youtube.com/channel/UCcmJvevXM_U1OWchJwOJxbQ',	NULL),
(31,	NULL,	NULL,	'Bath Rugby',	'BR',	'1865',	'Recreation Ground',	'14000',	'https://www.bathrugby.com/',	'http://www.facebook.com/bathrugby',	'http://twitter.com/bathrugby',	'https://instagram.com/bathrugby/',	'https://www.youtube.com/user/BathRugbyTV',	NULL),
(32,	NULL,	NULL,	'Bristol Bears',	'Bears',	'1888',	'Ashton Gate Stadium',	'27000',	'https://www.bristolbearsrugby.com/',	'https://www.facebook.com/bristolbears',	'https://twitter.com/BristolBears',	'https://instagram.com/bristolbearsrfc/',	'https://www.youtube.com/c/Bristolbearstv',	NULL),
(33,	NULL,	NULL,	'Exeter Rugby Club',	'Chiefs',	'1871',	'Sandy Park ',	'12500',	'http://www.exeterchiefs.co.uk/',	'https://facebook.com/ExeterChiefs',	'https://twitter.com/ExeterChiefs',	'https://instagram.com/officialexeterchiefs/',	'https://www.youtube.com/user/officialexeterchiefs',	NULL),
(34,	NULL,	NULL,	'Gloucester Rugby',	'Cherry and Whites',	'1873',	'Kingsholm Stadium',	'16500',	'https://www.gloucesterrugby.co.uk/',	'https://facebook.com/GloucesterRugby',	'https://twitter.com/GloucesterRugby',	'https://instagram.com/officialGloucesterRugby',	'https://www.youtube.com/user/GloucesterRugbyTV',	NULL),
(35,	NULL,	NULL,	'Harlequin Football Club',	'Quins',	'1866',	'The Stoop',	'14800',	'https://www.quins.co.uk/',	'https://en-gb.facebook.com/harlequins/',	'https://twitter.com/Harlequins',	'https://www.instagram.com/harlequins',	'',	NULL),
(36,	NULL,	NULL,	'Leiceste Football Clubr',	'Tigers',	'1880',	'Welford Road Staidum',	'24000',	'http://www.tigers.co.uk/home.php',	'https://www.facebook.com/leicestertigers',	'https://twitter.com/leicestertigers',	'https://www.instagram.com/leicestertigers/',	'https://www.youtube.com/user/LeicesterTigersLTTV',	NULL),
(37,	NULL,	NULL,	'London Irish Football Club',	'The Exiles',	'1898',	'Gtech Community Stadium',	'17250',	'www.london-irish.com',	'https://www.facebook.com/LIRFC',	'https://twitter.com/londonirish',	'https://www.instagram.com/londonirish1898/',	'https://www.youtube.com/channel/UCQYMvGMgRj8Yjbdv72hOgXA',	NULL),
(38,	NULL,	NULL,	'Newcastle Falcons',	'Falcons',	'1877',	'Kingston Park',	'10200',	'http://www.newcastlefalcons.co.uk',	'https://www.facebook.com/newcastle.falcons',	'https://twitter.com/FalconsRugby',	'',	'https://www.youtube.com/user/NewcastleFalcons1',	NULL),
(39,	NULL,	NULL,	'Northampton Saints Rugby Football Club',	'Saints',	'1880',	'Franklin\'s Garden',	'15500',	'http://www.northamptonsaints.co.uk/',	'https://facebook.com/northamptonsaints',	'https://twitter.com/SaintsRugby',	'https://instagram.com/northamptonsaints',	'https://youtube.com/user/TheSaintsTV',	NULL),
(40,	NULL,	NULL,	'Sale Sharks Rugby Union Football Club',	'Sharks',	'1861',	'AJ Bell Stadium',	'12000',	'https://www.salesharks.com/',	'https://www.facebook.com/SaleSharksRugby/',	'https://twitter.com/SaleSharksRugby',	'https://www.instagram.com/salesharks/',	'https://www.youtube.com/channel/UC_k3xuhlC_jBgfpJdMqAKxw',	NULL),
(41,	NULL,	NULL,	'Saracens Football Club',	'Sarries',	'1876',	'StoneX Stadium',	'15000',	'http://www.saracens.com/',	'https://www.facebook.com/SaracensOfficial',	'https://twitter.com/Saracens',	'https://www.instagram.com/saracensofficial',	'https://www.youtube.com/channel/UCHZjhtppDSbFEXWA80d5WBw',	NULL),
(42,	NULL,	NULL,	'Bulls',	'The Bulls',	'1997',	'Lotus Versfeld',	'51762',	'bullsrugby.co.za',	'https://www.facebook.com/BullsOfficial',	'https://twitter.com/BlueBullsRugby',	'https://www.instagram.com/blue_bulls_official/',	'https://www.youtube.com/user/VodacomBulls/feed',	NULL),
(43,	NULL,	NULL,	'Cardiff Rugby',	'Blues',	'2003',	'Cardiff Arms Park',	'12500',	'https://www.cardiffrugby.wales/',	'https://www.facebook.com/cardiffrugby1876',	'https://twitter.com/cardiff_rugby',	'https://www.instagram.com/cardiff.rugby/',	'',	NULL),
(44,	NULL,	NULL,	'Connacht Rugby',	'Greens',	'1885',	'Galway Sportsground',	'8100',	'https://www.connachtrugby.ie/',	'https://www.facebook.com/ConnachtRugby',	'https://twitter.com/connachtrugby',	'https://www.instagram.com/connachtrugby/',	'',	NULL),
(45,	NULL,	NULL,	'Edimbourg Rugby',	'Gunners',	'1872',	'Murrayfield',	'67000',	'https://www.edinburghrugby.org/',	'https://www.facebook.com/EdinburghRugby',	'https://twitter.com/EdinburghRugby',	'https://www.instagram.com/edinburghrugby',	'https://www.youtube.com/EdinburghRugbyTV',	NULL),
(46,	NULL,	NULL,	'Glasgow Warriors',	'Warriors',	'1872',	'Scotstun Stadium',	'11000',	'http://www.glasgowwarriors.org/',	'https://www.facebook.com/GlasgowWarriors',	'https://twitter.com/GlasgowWarriors',	'https://www.instagram.com/glasgowwarriors',	'https://www.youtube.com/glasgowwarriors',	NULL),
(47,	NULL,	NULL,	'Leinster Rugby',	'Boys in blue',	'1875',	'RDS Arena',	'18500',	'http://www.leinsterrugby.ie/',	'https://www.facebook.com/leinsterrugby/?fref=ts',	'https://twitter.com/leinsterrugby',	'https://www.instagram.com/leinsterrugby/?hl=en',	'https://www.youtube.com/user/LeinsterrugbyTV',	NULL),
(48,	NULL,	NULL,	'Lions',	'Cats',	'1996',	'Ellis Park Stadium',	'59611',	'http://www.lionsrugby.co.za/',	'https://www.facebook.com/lionsrugbyco/',	'https://twitter.com/LionsRugbyCo',	'https://twitter.com/LionsRugbyCo',	'https://www.youtube.com/channel/UCdddB27Aoxea_QS0EyPJoRQ',	NULL),
(49,	NULL,	NULL,	'Scarlets',	'Scarlets',	'2003',	'Parc y Scarlets',	'14870',	'https://www.scarlets.wales/',	'https://www.facebook.com/OfficialScarlets/',	'https://twitter.com/scarlets_rugby',	'https://www.instagram.com/scarlets_rugby/',	'https://www.youtube.com/channel/UCSpQ51CzUYp_ambKRD7fDCg',	NULL),
(50,	NULL,	NULL,	'Munster Rugby',	'Red Army',	'1879',	'Thomond Park',	'26500',	'http://www.munsterrugby.ie/',	'',	'https://twitter.com/MunsterRugby',	'https://twitter.com/MunsterRugby',	'https://www.youtube.com/user/MunsterView',	NULL),
(51,	NULL,	NULL,	'Dragons RFC',	'Dragons',	'2003',	'Rodney Parade',	'11676',	'https://www.dragonsrugby.wales/',	'https://www.facebook.com/dragonsrfc.wales/',	'https://twitter.com/dragonsrugby',	'https://twitter.com/dragonsrugby',	'https://www.youtube.com/channel/UCdB_8F9Yqur14jXdSzxyQeA',	NULL),
(52,	NULL,	NULL,	'Ospreys',	'Y Gweilch',	'2003',	'Liberty Stadium',	'20000',	'http://www.ospreysrugby.com/',	'https://www.facebook.com/ospreysrugby',	'https://twitter.com/ospreys',	'https://www.instagram.com/ospreys_official/',	'https://www.youtube.com/user/OspreysHighlights',	NULL),
(53,	NULL,	NULL,	'Durban Sharks',	'Sharks',	'1996',	'Kings Park Stadium',	'55000',	'http://www.sharksrugby.co.za/',	'https://www.facebook.com/SharksRugby',	'https://twitter.com/SharksRugby',	'https://www.instagram.com/sharksrugby/',	'https://www.youtube.com/user/TheSharksZA',	NULL),
(54,	NULL,	NULL,	'Stormers',	'The Stormers',	'1996',	'Cape Town Stadium',	'55000',	'http://thestormers.com/',	'https://www.facebook.com/stormers',	'https://twitter.com/thestormers',	'https://www.instagram.com/dhlstormers/',	'https://www.youtube.com/user/StormersTV',	NULL),
(55,	NULL,	NULL,	'Benetton Rugby Trévise',	'Benetton',	'1932',	'Stadio Comunale di Monigo',	'6700',	'http://www.benettonrugby.it/',	'https://www.facebook.com/BenettonRugbyTreviso',	'https://twitter.com/benettonrugby?lang=it',	'https://www.instagram.com/benettonrugby/',	'https://www.youtube.com/user/BenettonRugby',	NULL),
(56,	NULL,	NULL,	' Rugby',	'UlsterMan',	'1872',	'Ravenhill Stadium',	'18200',	'http://www.ulsterrugby.com/',	'https://www.facebook.com/ulsterrugby/?utm_source=web&utm_medium=footer&utm_campaign=social-links',	'https://twitter.com/UlsterRugby?utm_source=web&utm_medium=footer&utm_campaign=social-links',	'https://www.instagram.com/officialulsterrugby',	'https://www.youtube.com/user/UlsterRugbyTV?sub_confirmation=1',	NULL),
(57,	NULL,	NULL,	'Zèbres Parma',	'Zèbra',	'1973',	'Stadio XXV Aprile',	'5000',	'https://www.zebreparma.it/',	'https://www.zebreparma.it/it-it/facebook.aspx',	'https://www.zebreparma.it/it-it/twitter.aspx',	'https://www.zebreparma.it/it-it/instagram.aspx',	'https://www.zebreparma.it/it-it/youtube.aspx',	NULL);

DROP TABLE IF EXISTS `league_team`;
CREATE TABLE `league_team` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `league_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `league_id` (`league_id`),
  KEY `team_id` (`team_id`),
  CONSTRAINT `teams_leagues_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  CONSTRAINT `teams_leagues_ibfk_2` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `league_team` (`id`, `team_id`, `league_id`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	NULL,	NULL),
(2,	1,	6,	NULL,	NULL),
(3,	2,	1,	NULL,	NULL),
(4,	2,	5,	NULL,	NULL),
(5,	3,	1,	NULL,	NULL),
(6,	3,	5,	NULL,	NULL),
(7,	4,	1,	NULL,	NULL),
(8,	4,	6,	NULL,	NULL),
(9,	5,	1,	NULL,	NULL),
(10,	5,	6,	NULL,	NULL),
(11,	6,	1,	NULL,	NULL),
(12,	6,	5,	NULL,	NULL),
(13,	7,	1,	NULL,	NULL),
(14,	7,	6,	NULL,	NULL),
(15,	8,	1,	NULL,	NULL),
(16,	8,	6,	NULL,	NULL),
(17,	9,	1,	NULL,	NULL),
(18,	9,	6,	NULL,	NULL),
(19,	10,	1,	NULL,	NULL),
(20,	10,	6,	NULL,	NULL),
(21,	11,	1,	NULL,	NULL),
(22,	11,	5,	NULL,	NULL),
(23,	12,	1,	NULL,	NULL),
(24,	12,	5,	NULL,	NULL),
(25,	13,	1,	NULL,	NULL),
(26,	13,	6,	NULL,	NULL),
(27,	14,	1,	NULL,	NULL),
(28,	14,	5,	NULL,	NULL),
(29,	15,	2,	NULL,	NULL),
(30,	16,	2,	NULL,	NULL),
(31,	17,	2,	NULL,	NULL),
(32,	18,	2,	NULL,	NULL),
(33,	19,	2,	NULL,	NULL),
(34,	20,	2,	NULL,	NULL),
(35,	21,	2,	NULL,	NULL),
(36,	22,	2,	NULL,	NULL),
(37,	23,	2,	NULL,	NULL),
(38,	24,	2,	NULL,	NULL),
(39,	25,	2,	NULL,	NULL),
(40,	26,	2,	NULL,	NULL),
(41,	27,	2,	NULL,	NULL),
(42,	28,	2,	NULL,	NULL),
(43,	29,	2,	NULL,	NULL),
(44,	30,	2,	NULL,	NULL),
(45,	31,	3,	NULL,	NULL),
(46,	31,	6,	NULL,	NULL),
(47,	32,	3,	NULL,	NULL),
(48,	32,	6,	NULL,	NULL),
(49,	33,	3,	NULL,	NULL),
(50,	33,	5,	NULL,	NULL),
(51,	34,	3,	NULL,	NULL),
(52,	34,	5,	NULL,	NULL),
(53,	35,	3,	NULL,	NULL),
(54,	35,	5,	NULL,	NULL),
(55,	36,	3,	NULL,	NULL),
(56,	36,	5,	NULL,	NULL),
(57,	37,	3,	NULL,	NULL),
(58,	37,	5,	NULL,	NULL),
(59,	38,	3,	NULL,	NULL),
(60,	38,	6,	NULL,	NULL),
(61,	39,	3,	NULL,	NULL),
(62,	39,	5,	NULL,	NULL),
(63,	40,	3,	NULL,	NULL),
(64,	40,	5,	NULL,	NULL),
(65,	41,	3,	NULL,	NULL),
(66,	41,	5,	NULL,	NULL),
(67,	42,	4,	NULL,	NULL),
(68,	42,	5,	NULL,	NULL),
(69,	43,	4,	NULL,	NULL),
(70,	43,	6,	NULL,	NULL),
(71,	44,	4,	NULL,	NULL),
(72,	44,	6,	NULL,	NULL),
(73,	45,	4,	NULL,	NULL),
(74,	45,	5,	NULL,	NULL),
(75,	46,	4,	NULL,	NULL),
(76,	46,	6,	NULL,	NULL),
(77,	47,	4,	NULL,	NULL),
(78,	47,	5,	NULL,	NULL),
(79,	48,	4,	NULL,	NULL),
(80,	48,	6,	NULL,	NULL),
(81,	49,	4,	NULL,	NULL),
(82,	49,	5,	NULL,	NULL),
(83,	50,	4,	NULL,	NULL),
(84,	50,	5,	NULL,	NULL),
(85,	51,	4,	NULL,	NULL),
(86,	51,	6,	NULL,	NULL),
(87,	52,	4,	NULL,	NULL),
(88,	52,	5,	NULL,	NULL),
(89,	53,	4,	NULL,	NULL),
(90,	53,	5,	NULL,	NULL),
(91,	54,	4,	NULL,	NULL),
(92,	54,	5,	NULL,	NULL),
(93,	55,	4,	NULL,	NULL),
(94,	55,	6,	NULL,	NULL),
(95,	56,	4,	NULL,	NULL),
(96,	56,	5,	NULL,	NULL),
(97,	57,	4,	NULL,	NULL),
(98,	57,	6,	NULL,	NULL);

-- 2023-05-19 06:19:53