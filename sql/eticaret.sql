# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-01-17 01:14:32
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `tarih` datetime DEFAULT NULL,
  `siparisler` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

REPLACE INTO `admin` VALUES (1,'yakup','yakup_alt@hotmail.com','1995','admin','aktif','resim.jpg','1899-12-30 04:00:00',NULL);

#
# Structure for table "ayarlar"
#

CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `smtpserver` varchar(50) DEFAULT NULL,
  `smtpport` int(11) DEFAULT NULL,
  `smtpemail` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `adres` varchar(200) DEFAULT NULL,
  `sehir` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hakkimizda` text,
  `iletisim` text,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instegram` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "ayarlar"
#

REPLACE INTO `ayarlar` VALUES (1,'Demirhan Pazarlama','Hurmalar,Medine,Kudüs,ACVE','Demirhan Pazarlama Sizlere Türkiye\'nin En İyi Hurmalarını Sağlar.','Demirhan','demir',455,'yakup_alt@hotmail.com','45',NULL,'İstanbul','3962507',NULL,NULL,'<p>Firmamız, sekt&ouml;r&uuml;nde yılların verdiği tecr&uuml;beyle <strong>Demirhan Pazarlama </strong>tarafından&nbsp; 2015 yılında <strong>hurmacınız</strong> patentli markasıyla İstanbul Pendik&rsquo;teki d&uuml;kkanımızda hurma ve hurma &uuml;r&uuml;nleri &uuml;retim ve satışı ile ticari faaliyetlerine devam etmektedir.</p>\r\n\r\n<h3>Hedefimiz</h3>\r\n\r\n<p>Her &ccedil;eşit hurmayı yılın 365 g&uuml;n&uuml; t&uuml;keticiye ulaştırmak. Bununla beraber aktar, kuruyemiş, market, otel, catering ve y&ouml;resel &uuml;r&uuml;n satan mağazalara ayrıca Hac ve Umre adaylarımıza servis arabamızla sevkiyat ve adrese teslim hizmetler sunmaktır.</p>\r\n','<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><em><strong>100.YIL MAH </strong></em></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><em><strong>1004. SOK </strong></em></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><em><strong>No:7/A </strong></em></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><em><strong>MERKEZ / KARAB&Uuml;K </strong></em></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><em><strong>Tel: (0216) 564 26 26 - Fax: (0216) 564 26 36</strong></em></div>\r\n','yakup.altunoglu','yakupaltunoglu0',NULL);

#
# Structure for table "kategoriler"
#

CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `adi` varchar(100) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `keywords` varchar(150) DEFAULT NULL,
  `resim` varchar(50) DEFAULT NULL,
  `durum` varchar(50) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

#
# Data for table "kategoriler"
#

REPLACE INTO `kategoriler` VALUES (4,0,'MEDİNE HURMALARI',NULL,NULL,NULL,NULL,NULL),(5,0,'ACVE',NULL,NULL,NULL,NULL,NULL),(22,0,'YAŞ-TAZE HURMALAR',NULL,NULL,NULL,NULL,NULL),(30,0,'KUDÜS HURMALARI',NULL,NULL,NULL,NULL,NULL),(31,0,'HURMA ÜRÜNLERİ',NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "mesajlar"
#

CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `mesaj` varchar(255) DEFAULT NULL,
  `durum` varchar(10) DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(20) DEFAULT NULL,
  `adminnotu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "mesajlar"
#

REPLACE INTO `mesajlar` VALUES (1,'yakup','yakup_alt@hotmail.com','3692507','merhaabbafadsfs','Okundu','2017-12-31 20:39:48','::1','Müşteri ile iletişime geçildi\r\nGönderilecek'),(2,'hg','jhg@hotmail.com','jhg','jhg','Okundu','2018-01-09 20:35:21','::1','bvcbcvbc'),(3,'fgd','gfqg@gf','fd','ggf','Okundu','2018-01-09 20:44:14','::1',NULL);

#
# Structure for table "sepet"
#

CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "sepet"
#

REPLACE INTO `sepet` VALUES (3,NULL,'4','2017-12-31 12:12:32',1),(4,NULL,'4','2017-12-31 19:42:49',1),(5,NULL,'4','2018-01-09 20:34:54',1),(6,NULL,'4','2018-01-10 20:30:45',1),(12,'10','12','2018-01-12 20:30:23',1),(13,'10','32','2018-01-12 21:24:37',1);

#
# Structure for table "siparis_urunler"
#

CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_id` int(11) DEFAULT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `adi` varchar(10) DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `birim` varchar(10) DEFAULT NULL,
  `tutar` float DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

#
# Data for table "siparis_urunler"
#

REPLACE INTO `siparis_urunler` VALUES (43,15,5,NULL,'Mebrum Hur',28,NULL,28,'2017-12-30 18:55:41',1),(44,15,5,NULL,'Mebrum Hur',28,NULL,112,'2017-12-30 18:55:41',4),(45,16,5,NULL,'Sugai Hurm',34,NULL,34,'2017-12-31 11:40:50',1),(46,17,5,NULL,'Sugai Hurm',34,NULL,34,'2018-01-09 20:36:35',1),(47,18,10,NULL,'Meşruk Hur',22,NULL,22,'2018-01-12 20:28:29',1),(48,18,10,NULL,'Meşruk Hur',22,NULL,110,'2018-01-12 20:28:29',5),(49,19,5,NULL,'Sugai Hurm',34,NULL,34,'2018-01-17 00:33:30',1),(50,19,5,NULL,'Hurma Pekm',50,NULL,50,'2018-01-17 00:33:30',1);

#
# Structure for table "siparisler"
#

CREATE TABLE `siparisler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `tutar` float DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `durum` varchar(20) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) DEFAULT NULL,
  `kargofirma` varchar(20) DEFAULT NULL,
  `kargono` varchar(10) DEFAULT NULL,
  `mus_aciklama` varchar(255) DEFAULT NULL,
  `admin_aciklama` varchar(255) DEFAULT NULL,
  `adsoy` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "siparisler"
#

REPLACE INTO `siparisler` VALUES (15,'5','fevzi çakmak','5645456',140,'Ankara','Tamamlandı','2017-12-30 18:55:41','::1','aras','5',NULL,'teslim edildi','yakup altunoğlu'),(16,'5','fdssdf','456',34,'Ankara','Onaylandı','2017-12-31 11:40:50','::1','aras','454',NULL,'fdsdf','yakup altunoğlu'),(17,'5','','',34,'Ankara',NULL,'2018-01-09 20:36:35','::1',NULL,NULL,NULL,NULL,'yakup altunoğlu'),(18,'10','fevzi çakmak mah ','339636',132,'İSTANBUL',NULL,'2018-01-12 20:28:28','::1',NULL,NULL,NULL,NULL,'ali'),(19,'5','fdsdsfdsfdsfdsfds','05315839659',84,'istanbul',NULL,'2018-01-17 00:33:30','::1',NULL,NULL,NULL,NULL,'Yakup');

#
# Structure for table "urunler"
#

CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(150) DEFAULT NULL,
  `kodu` varchar(50) DEFAULT NULL,
  `turu` int(11) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `afiyat` float DEFAULT NULL,
  `sfiyat` float DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `aciklama` text,
  `durum` varchar(5) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `resim` varchar(50) DEFAULT NULL,
  `grubu` varchar(10) DEFAULT 'YENİ',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

#
# Data for table "urunler"
#

REPLACE INTO `urunler` VALUES (1,'Berni Medine Hurması',NULL,6,1,45,25,NULL,NULL,NULL,'<p>fsdfdsfddsffdsfdsfdsfds</p>\r\n','aktif',NULL,'slider_ikramlik.jpg','kampanya'),(2,'pantolon','4',1,1,2,2,4,'pantolon','pantolon',NULL,'aktif',NULL,'slider_sukkeri-908x320.jpg','kampanya'),(4,'Sugai Hurma - Duble',NULL,6,4,NULL,34,NULL,'Sugai Hurma - Duble','Sugai Hurma - Duble','<p>Sugai Hurma, (Sugay) şeker oranının düşük olması nedeniyle genelde şeker hastalarının tercih ettiği besleyici, sağlık açısından faydalı ve \"lezzetli bir hurma\" çeşididir.</p>\r\n','aktif',NULL,'sugai_shop_duble_2-500x450.jpg','vitrin'),(5,'Meşruk Hurma',NULL,6,4,NULL,22,NULL,'Meşruk Hurma','Meşruk Hurma','Medine Meşruk Hurması, özellikle Medine ve civarında yetişen, halkımız tarafından Medine Hurması diye bilinen, Hac ve Umre ziyaretlerinde ikram edilmek üzere en çok tercih edilen, çok az kabuklu lezzetli ve besleyici bir hurma çeşididi','aktif',NULL,'mesruk_pazar_001-500x450.jpg','yeni'),(6,'Hudri Hurma 500 gr.',NULL,6,4,NULL,16,NULL,'Hudri Hurma 500 gr.','Hudri Hurma 500 gr.','Hudri Hurma, eşsiz lezzetinin yanı sıra özellikle \"bayanlara ve çocuklara\" tavsiye edilen besleyici bir hurma çeşididir. Hudri Hurması, ayrıca kan yapıcı takviye besin özelliğinden dolayı tercih edilmektedir.','aktif',NULL,'hudri_2_2017-500x450.jpg','yeni'),(7,'Amber Hurma',NULL,6,4,NULL,40,NULL,'Amber Hurma','Amber Hurma','<p>merhabafds</p>\r\n','aktif',NULL,'indir.jpg','yeni'),(8,'Medjoul Hurma - Jumbo 5 kg.',NULL,6,30,NULL,250,NULL,'Medjoul Hurma - Jumbo 5 kg.','Medjoul Hurma - Jumbo 5 kg.','Kudüs Hurması, tüm yaştan herkesin severek yiyebileceği ve tadına asla doyamayacağınız, besleyici ve saymakla bitmeyecek kadar faydası bulunan enfes bir tadı olan hurma çeşitlerinden sadece biri “Kudüs  Hurması”. Ayrıca, Filistin hurması ve Medjool adıyla anılmaktadır.','aktif',NULL,'kudus_duble_20166_001-500x450.jpg','YENİ'),(9,'Medjoul Hurma - Medium 5 kg',NULL,6,30,NULL,200,NULL,'Medjoul Hurma - Medium 5 kg','Medjoul Hurma - Medium 5 kg','Kudüs Hurması, tüm yaştan herkesin severek yiyebileceği ve tadına asla doyamayacağınız, besleyici ve saymakla bitmeyecek kadar faydası bulunan enfes bir tadı olan hurma çeşitlerinden sadece biri “Kudüs  Hurması”. Ayrıca, Filistin hurması ve Medjool adıyla anılmaktadır.','aktif',NULL,'medjoul_medium-500x450.jpg','YENİ'),(10,' Hurma - Sukkari 3 kg.',NULL,6,30,NULL,78,NULL,'Yaş Hurma - Sukkari 3 kg.','Yaş Hurma - Sukkari 3 kg.','Taze Hurma, Medine\'den haftalık ithal edilmektedir. Taze Yaş Hurma, dalından olmamış halde toplanıp buzluklarda muhafaza edilen ve taze tadıyla yenilebilen kaliteli bir hurma çeşididir.\n',NULL,NULL,'sukkeri_gold_01-500x450.jpg','YENİ'),(12,'Dıheyni Hurma',NULL,6,31,NULL,24,NULL,'Dıheyni Hurma','Dıheyni Hurma','Medine Dıheyni Hurması, Medine ve civar bölgelerde yetişen, çok tercih edilen, lezzetli ve besleyici bir hurma çeşitlerindendir.','aktif',NULL,'dheyni_oz_00-500x450.jpg','vitrin'),(13,'Mebrum Hurma- 2 No',NULL,6,4,NULL,28,NULL,'Mebrum Hurma- 2 No','Mebrum Hurma- 2 No',NULL,'aktif',NULL,'mebrum_222_222-500x450.jpg','vitrin'),(14,'Mebrum Hurma - 1 No',NULL,6,4,NULL,35,NULL,'Mebrum Hurma - 1 No','Mebrum Hurma - 1 No','<p>fsd</p>\r\n','aktif',NULL,'mebrum_duble_222-500x450.jpg','vitrin'),(15,'Mebrum Hurma - Duble',NULL,6,4,NULL,39,NULL,'Mebrum Hurma - Duble','Mebrum Hurma - Duble',NULL,NULL,NULL,'mebrum_duble_20177755-500x450.jpg','vitrin'),(16,'Acve Hurma',NULL,6,16,NULL,10,NULL,'Acve Hurma','Acve Hurma','<p>D&uuml;nya &uuml;zerindeki en pahalı hurma olan Acve Hurması, olduk&ccedil;a k&uuml;&ccedil;&uuml;k, neredeyse zeytin b&uuml;y&uuml;kl&uuml;ğ&uuml;nde. Buna rağmen işlevleri &ccedil;ok b&uuml;y&uuml;k. Normal hurması yenilebileceği gibi macun haline getirilip de t&uuml;ketilebilir. İşte bu hurmanın faydaları şu şekilde: Acve Hurması, rahim kaslarını g&uuml;&ccedil;lendirir. Bu sayede doğumu olduk&ccedil;a kolaylaştırır. Doğum sonrası ağrı ve acıyı en aza indirir. Bunu sağlamak i&ccedil;in doğumdan 1-2 hafta &ouml;ncesinden başlayarak her g&uuml;n t&uuml;ketilmelidir.İ&ccedil;erdiği fruktozdan dolayı v&uuml;cut i&ccedil;in enerji kaynağıdır.B grubu vitaminleri i&ccedil;erdiği i&ccedil;in karaciğer i&ccedil;in &ccedil;ok faydalıdır. Sarılık hastalığına yakalanma riskini d&uuml;ş&uuml;r&uuml;r. Kısırlığın &ouml;n&uuml;ne ge&ccedil;er. İ&ccedil;inde &ccedil;ok fazla fosfor bulunduğu i&ccedil;in sadece engellemekle kalmaz, aynı zamanda kısırlık sorunu olanların iyileşmesinde kullanılabilir. Bağırsakları &ccedil;alıştırır ve iştah a&ccedil;ar. A vitamini muhtevasından dolayı g&ouml;z sağlığı i&ccedil;in &ouml;nemlidir. Ancak g&ouml;zlerinde ağrı olanların t&uuml;ketmesi sakıncalıdır. &Ccedil;&uuml;nk&uuml; g&ouml;z&uuml;n g&uuml;&ccedil;lenmesini sağlamasına paralel ağrı varsa, onu da daha şiddetli hale getirir. V&uuml;cuttaki toksin atımını kolaylaştırır. Hazmı kolaylaştırır. Bol miktarda demir i&ccedil;erir. Bu sayede kan yapar. Muhtevası bakımından ( fosfor, potasyum ) bebeklerin gelişiminde &ccedil;ok &ouml;nemlidir. Damar sertliğini ortadan kaldırır. Kolestrol&uuml; bitirir. V&uuml;cuttaki şeker seviyesini ayarlar. İ&ccedil; kanama ge&ccedil;irenlerin kanamasını durdurur.df</p>\r\n','pasif',NULL,'i22.jpg','rehber'),(17,'Hurma Ağacının Kalbi',NULL,NULL,17,NULL,NULL,NULL,'Hurma Ağacının Kalbi','Hurma Ağacının Kalbi','Hurma ağacı dünya üzerinde binlerce çeşidi olan bir ağaçtır. Bu geniş çeşitliliğinden dolayı oldukça geniş bir yetişme alanına sahip olmaktadır. Genel olarak kuru ve çok yağış almayan ama yer altı sularınca zengin olan bölgelerden hoşlanır bu ağaçlar. Ana vatanı olarak bilinen yer ise Basra körfezi etrafı olarak kayıtlara alınmıştır. Bu lokasyondan başlayarak doğu yönünde Hindistan bölgesine kadar yayılmış olan hurma batı yönünde bakıldığı zaman da Amerika dolaylarına kadar ilerlemektedir. Bu geniş doğudan batıya olan yayılımı ile beraber Afrika kıtasında da oldukça geniş bir yere yayılmış durumda olan hurma ağacı dünyanın birçok yerinde bu sayede karşımıza çıkabilmektedir.',NULL,NULL,'0x0-7.jpg','rehber'),(18,'Hurmanın Sağlığa 10 Faydası',NULL,NULL,18,NULL,NULL,NULL,NULL,NULL,'1) Kalp Dostu\nHurma, tansiyonu dengeleyen ve kalp ritmini düzenleyen minerallerden potasyumu zengin oranda içermektedir. Kolesterol içermemesi ve çok güçlü antioksidan özelliği ile kalbi zararlı bakterilerden ve mikroplardan koruyarak damar tıkanıklığı riskini düşürmesi hurmayı kalp dostu yapıyor. \n2) Cildi Gençleştiriyor\nHurma içeriğindeki antioksidan özelliği ile hücreleri yeniliyor. Böylelikle dokusu yenilenen cilt daha genç görünüyor. Ayrıca hurmanın içeriğindeki zengin B vitamini de ciltteki tahriş ve yaraları hızla iyileştiriyor. Hurma, cildin ihtiyaç duyduğu nemi de sağladığından dolayı cilt, daha elastiki bir yapıya sahip oluyor. \n3) Hafızayı Kuvvetlendiriyor\nHurma, içeriğindeki zengin A ve B vitamini ile magnezyum sayesinde hafızayı kuvvetlendiriyor. Bu nedenle hurmanın yaşlılık ve çocukluk döneminde düzenli tüketilmesinin hafızanın kuvvetlenmesine önemli katkıları olabilir. Hurmanın hafıza kuvvetlenmesine yapacağı katkılar üzerine yapılan son çalışmalar göstermiştir ki hurmanın içeriğinde zengin oranda bulunan B-Karotenin hafıza kaybının önlenmesinde önemli faydaları vardır. \n4) Zayıflatıyor\nHurmanın lif oranının yüksek olması midede uzun süre kalmasını sağladığından dolayı sindirimi yavaşlatarak uzun süre tokluk hissi veriyor. Böylelikle besin tüketimi de azalmış oluyor. Ayrıca hurmanın içeriğindeki potasyum ve demir mineralleri de metabolizmayı hızlandırdığından dolayı kilo vermeye yardımcı oluyor. Kilo vermek için hurma yiyenler, 4 adet hurmanın 60 kalori içerdiğini hiçbir zaman unutmamalı ve tükettikleri hurma sayısına dikkat etmelidir. \n5)Depresyonu Önlüyor\nGünümüzde yaşam oldukça hızlı olduğundan insanlar, stresten kaynaklı psikolojik rahatsızlıklara daha kolay yakalanabiliyor. Hurmada yüksek oranda bulunan B6 vitamini ve magnezyum minerali sinir sistemini güçlendirdiğinden dolayı çağımızın hastalığı olan depresyon hastalığını önlemede ve tedavi etmede hurma, çok önemli etkendir.\n6) Enfeksiyon Riskini Azaltıyor\nHurmadaki A ve C vitamini ile zengin selenyum hurmayı aynı zamanda güçlü bir antioksidan yaptığından dolayı hurma, vücudu mikroplardan ve bakterilerden temizlemek için en önemli besin kaynakları arasında yer alır. \n7) Sindirim Sistemi Hastalıkları Riskini Azaltıyor\nHurma, 100 gramında 6,7 gr lif içerdiğinden dolayı bağırsak fonksiyonları ile sindirim sistemini düzenlemede oldukça etkendir. Ayrıca sindirim sistemini düzenlediği için hemoroit, kolon kanseri ve kolit gibi sindirim sistemi rahatsızlıkları riskini azaltıcı etkiye sahiptir. \n8) Göz Dostu\nBeta karoten açısından zengin olan hurma, gözlerimizin sağlığını koruduğu gibi gece körlüğü gibi rahatsızlıkların meydana gelme riskini düşürüyor. Hurma, katarakt rahatsızlığının gecikmesinde de oldukça etkin bir besin maddesidir. \n9) Kansızlığı Önlüyor\nHurmanın içeriğindeki demir, kan hücrelerindeki hemoglobin sentezini artırdığından dolayı kansızlık riskini önemli oranda azalttığı gibi demir eksikliği nedeniyle tedavi görenlerde de tedavi sürecini hızlandırıcı etkiye sahiptir. B2 ve B3 vitaminleri açısından zengin olan hurma, kırmızı kan hücreleri üretimini artırıyor. Bu nedenle demir eksikliği olan kişilerin günlük 4 adet hurma yemeleri tavsiye ediliyor. \n10) Kemikleri Kuvvetlendirir\nHurma, kalsiyum ve fosfat açısından zengin olduğu için kemiklerin güçlenmesinde önemli etkiye sahiptir. Ayrıca kemik yumuşaması ve kemik erimesi gibi hastalıkların önüne geçiyor. ',NULL,NULL,'0x0-7.jpg','rehber'),(19,'Hurma Diyeti',NULL,NULL,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Hurma-Diyeti-İle-Kilo-Verme-Zayıflama.jpg','rehber'),(20,'Hurma Pekmezinin ',NULL,NULL,20,NULL,50,NULL,NULL,NULL,'HURMA PEKMEZİNİN FAYDALARI NELERDİR?\nHurma faydaları gibi hurma pekmezi de çeşitli hastalıklara yarar sağlar. Birçok rahatsızlığa karşı koruma sağlayan hurma pekmezinin faydaları şöyledir;\n\nKansızlığa iyi gelir. Vücuttaki demir eksikliğini gidererek kan yapar. Bu sayede vücuttaki halsizliği ve yorgunluğu da giderir.\nSindirim sistemini rahatlatır. Bağırsak hareketlerini düzenleyerek kabızlığa iyi gelmesi de hurma pekmezinin faydaları arasındadır. Böylece kolon kanseri ve basura karşı koruma sağlar.',NULL,NULL,'hurma-pekmezi.jpg','rehber'),(21,'Hurma Çekirdeğinin Faydaları',NULL,NULL,21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'i.jpg','rehber'),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2.png','kampanya'),(30,'Acve Hurması Jumbo','1',1,5,2,40,2,'Acve Hurması Jumbo','Acve Hurması Jumbo','','aktif',NULL,'sukkeri_3_kg-500x450 (1).jpg','YENİ'),(31,'Acve Hurması Doble','2',5,4,2,30,2,'Acve Hurması Doble','Acve Hurması Doble','','aktif',NULL,'sukkeri_3_kg-500x450 (1).jpg','YENİ'),(32,'Yaş Hurma - Sukkari 3 kg.','1',1,22,NULL,78,2,'Yaş Hurma - Sukkari 3 kg.','Yaş Hurma - Sukkari 3 kg.',NULL,'aktif',NULL,'sukkeri_3_kg-500x450 (1).jpg','YENİ'),(33,'İran Hurması - Mazafati 550 gr.',NULL,NULL,22,NULL,5,NULL,'İran Hurması - Mazafati 550 gr.','İran Hurması - Mazafati 550 gr.',NULL,NULL,NULL,'iran_mazafati_001-500x450.jpg','YENİ'),(34,'Hicazi Hurma Acve Hurma 400 Gr',NULL,NULL,5,NULL,45,NULL,'Doğal, Organik, Yöresel Ürünler - %100 Memnuniyet\r\nDoğal, Organik, Yöresel Ürünler - %100 Memnuniyet\r\n','Hicazi Hurma Acve Hurma 400 Gr',NULL,NULL,NULL,'hudri-hurma-1.jpg','YENİ');

#
# Structure for table "urunler_resim"
#

CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) DEFAULT NULL,
  `resim` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

#
# Data for table "urunler_resim"
#

REPLACE INTO `urunler_resim` VALUES (1,1,'resim.jpg'),(2,2,'WIN_20171023_092110.JPG'),(4,1,'favicon.png'),(5,1,'admin-text-dark.png'),(6,2,'favicon1.png'),(7,2,'admin-text-dark1.png'),(8,13,'mebrum_2_hurma.jpg'),(9,14,'mebrum_1_hurma_pazari_001-500x450.jpg'),(10,15,'mebrum_duble_hurma_pazari_001-500x450.jpg'),(11,4,'sugai_duble_hurma_pazari_001-500x450.jpg'),(13,12,'dheyni_hurma_pazari_001-500x450.jpg'),(14,5,'mesruk_hurma_pazari_001-500x450.jpg'),(15,6,'hudri_pazari_001-500x450.jpg'),(16,7,'amber_3000-500x450.jpg'),(17,8,'medjoul_box_jumbo-500x450.jpg'),(18,9,'medjoul_box_medium-85x77.jpg'),(19,10,'sukkeri_3_kg-500x450.jpg'),(21,22,'4.PNG'),(22,16,'54.PNG');

#
# Structure for table "uyeler"
#

CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `durum` varchar(5) DEFAULT NULL,
  `resim` varchar(50) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `sehir` varchar(50) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "uyeler"
#

REPLACE INTO `uyeler` VALUES (1,'ahmet','ahmet@hotmail','123','uye','aktif','ahmet.jpg','2017-02-01 10:30:00','fdfd',NULL,NULL),(5,'Yakup','yakup_alt@hotmail.com','1995','admin','aktif','resim.jpg',NULL,'istanbul','fdsdsfdsfdsfdsfds','05315839659'),(7,'ahmet','ahmet@hotmail','123','uye','aktif',NULL,NULL,'fdfd','dffdsf','2323343'),(8,'dfs','fsd@gmail.com','123','uye','aktif',NULL,NULL,NULL,NULL,NULL),(9,'emin','emin@hotmail.com','12345','uye','aktif',NULL,NULL,NULL,NULL,NULL),(10,'ali','ali@com','12345','uye','aktif',NULL,NULL,'ankaraa','fdsfds','32323');

#
# Structure for table "yorumlar"
#

CREATE TABLE `yorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konu` varchar(150) DEFAULT NULL,
  `yorum` text,
  `urunadi` varchar(100) DEFAULT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Data for table "yorumlar"
#

REPLACE INTO `yorumlar` VALUES (1,'2018-01-16 23:33:12',NULL,'dfsd',NULL,NULL),(2,'2018-01-16 23:33:43',NULL,'dfsd',NULL,NULL),(3,'2018-01-16 23:33:53',NULL,'dfsd',NULL,NULL),(4,'2018-01-16 23:41:39',NULL,'dfsddfsdf',NULL,NULL),(5,'2018-01-16 23:42:10',NULL,'dfsddfsdf',NULL,NULL),(6,'2018-01-16 23:42:18',NULL,'dfsddfsdf',NULL,NULL),(7,'2018-01-16 23:42:44',NULL,'dfsddfsdf',NULL,NULL),(8,'2018-01-16 23:42:54',NULL,'dfsddfsdffdsfds',NULL,NULL),(9,'2018-01-16 23:44:16',NULL,'dfsddfsdffdsfds',NULL,NULL),(10,'2018-01-16 23:46:01',NULL,'fdsfds',NULL,NULL),(11,'2018-01-16 23:52:19',NULL,'fdsfdsfds',NULL,NULL),(12,'2018-01-16 23:52:34',NULL,'fdsfdsfds',NULL,NULL),(13,'2018-01-16 23:52:51',NULL,'fdsfdsfds',NULL,NULL),(14,'2018-01-16 23:53:36',NULL,'fdsfdsfds',NULL,NULL),(15,'2018-01-16 23:55:34',NULL,'fdsfdsfds',NULL,NULL),(16,'2018-01-16 23:55:46',NULL,'fdsfdsdsf',NULL,NULL),(17,'2018-01-17 00:06:39','fdsds','fsdfsdfds',NULL,5),(18,'2018-01-17 00:12:03','dfds','fdsfdsf',NULL,5);
