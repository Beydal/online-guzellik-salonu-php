-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2025, 20:12:09
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `site_title` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `site_description` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `site_author` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `site_renk` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `telefon1` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `telefon2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `whatsapp` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `email1` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `email2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `adres1` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `adres2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `google_maps` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `twitter` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `linkedin` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `telegram` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `youtube` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `instagram` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `logo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `footer_logo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `favicon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `footer_copyright` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `site_mail` text,
  `site_mail_sifre` text,
  `site_mail_port` text,
  `site_mail_host` text,
  `gonderen_email` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_title`, `site_description`, `site_author`, `site_renk`, `telefon1`, `telefon2`, `whatsapp`, `email1`, `email2`, `adres1`, `adres2`, `google_maps`, `facebook`, `twitter`, `linkedin`, `telegram`, `youtube`, `instagram`, `logo`, `footer_logo`, `favicon`, `footer_copyright`, `site_mail`, `site_mail_sifre`, `site_mail_port`, `site_mail_host`, `gonderen_email`) VALUES
(1, 'Güzellik Merkezi ', 'Güzellik Merkezi', 'Güzellik Merkezi ', '#e22400', '0555 555 55 55 ', ' 055 555 55 55', '0555 555 55 55 ', 'demo@demo.com', 'demo@demo.com', 'Gaziantep / Merkez', 'Gaziantep / Merkez', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.79327595135!2d28.8720964464606!3d41.00549580940238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1638453047556!5m2!1str!2str\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '#', '#', '#', '#', '#', '#', '830751712-guzellik-merkezi.png', '768439107-guzellik-merkezi.png', '891780895-guzellik-merkezi.png', 'Copyright © 2025 Beyza Nur Dalgacı Tüm Hakları Saklıdır.', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ekibimiz`
--

CREATE TABLE `ekibimiz` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `unvan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ekibimiz`
--

INSERT INTO `ekibimiz` (`id`, `adi`, `sira`, `resim`, `unvan`, `durum`, `aciklama`) VALUES
(3, 'Beyza Nur Dalgacı', '1', '462-beyza-nur-dalgaci.webp', 'Güzellik Uzmanı', 'on', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n'),
(4, 'Emre Kızıl', '1', '37-emre-kizil.webp', 'Güzellik Uzmanı', 'on', ''),
(5, 'Metin Dilmen', '2', '272-metin-dilmen.webp', 'Güzellik Uzmanı', 'on', ''),
(6, 'Gökhan Aykut', '4', '661-gokhan-aykut.webp', 'Güzellik Uzmanı', 'on', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `adi`, `sira`, `resim`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `tarih`) VALUES
(1, 'Galeri 1', '1', '560-galeri-1.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'on', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'galeri-1', 'galeri', '18.12.2021'),
(2, 'Galeri 2', '2', '756-galeri-2.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'on', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'galeri-2', 'galeri', '18.12.2021'),
(3, 'Galeri 3', '3', 'galeri-3-7493942.webp', 'qweqwewq', 'on', '', 'galeri-3', 'sayfalar', '18.12.2021'),
(4, 'Galeri 4', '4', 'galeri-4-3643500.webp', 'Galeri 4', 'on', '', 'galeri-4', 'sayfalar', '18.12.2021'),
(5, 'Galeri 5', '5', 'galeri-5-5073314.webp', 'Galeri 5', 'on', '', 'galeri-5', 'sayfalar', '18.12.2021'),
(6, 'Galeri 6', '6', 'galeri-6-9606283.webp', 'Galeri 5', 'on', '', 'galeri-6', 'sayfalar', '18.12.2021');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `adi`, `sira`, `resim`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `tarih`) VALUES
(1, 'Makyaj Nedir ', '1', '171-makyaj-nedir.webp', 'Kişinin isteği doğrultusunda kozmetik ürünler yardımıyla (yüz, dudak, göz ve burun şekli dikkate alınarak) kusurlu bölümlerinin kapatılıp yüzün güzel bölümlerinin ön plana çıkarıldığı uygulamaya makyaj denir.', 'on', '<h2><strong>Neden Makyaj Kullanılır?</strong></h2>\r\n\r\n<p>Makyaj;</p>\r\n\r\n<ul>\r\n	<li>Y&uuml;zdeki kusurları kapatmak,</li>\r\n	<li>Değişiklik yaratmak</li>\r\n	<li>Bakımlı ve g&uuml;zel g&ouml;r&uuml;nmek</li>\r\n	<li>G&uuml;zel yanları ortaya &ccedil;ıkartmak,</li>\r\n</ul>\r\n\r\n<p>amacı ile yapılmaktadır. Makyaj yapmak hem sosyal algıyı hem de &ouml;zg&uuml;veni etkilemektedir. Makyajın kadının hem kendisini hem de başkaları tarafından pozitif değerlendirilmesiyle ilişkili olduğunu artık biliyoruz ancak şaşırtıcı olan pozitif etki alanlarının &ccedil;okluğu ve belki de sınırsızlığı. Makyaj yapmak &ouml;zg&uuml;veni olumlu y&ouml;nde etkiliyor. Ancak sanılanın aksine makyaj her zaman y&uuml;ksek &ouml;zg&uuml;venin bir g&ouml;stergesi olmayabiliyor. Yapılan &ccedil;alışmalarda d&uuml;ş&uuml;k &ouml;zg&uuml;venli bireylerin bir &lsquo;&ouml;z tedavi&rsquo; girişimi olarak kozmetik &uuml;r&uuml;nlerden yardım aldıkları g&ouml;r&uuml;l&uuml;yor.&nbsp;</p>\r\n\r\n<p>Kişilik &ouml;zellikleri ve makyaj yapma davranışını inceleyen &ccedil;alışmalar i&ccedil;e d&ouml;n&uuml;k kişilik &ouml;zelliklerine sahip olanların daha &ccedil;ok makyaj yapan grupta olabileceğini g&ouml;steriyor. Bu kişiler dikkat &ccedil;ekmekten &ccedil;ok bir &ccedil;eşit savunma mekanizmasıyla dikkati y&ouml;netmek i&ccedil;in makyaj yapıyor ve makyajı g&uuml;nl&uuml;k hayatta kabul g&ouml;ren bir &lsquo;maske&rsquo; olarak kullanıyor. Makyaj ayrıca leke ve sivilceleri de kapatır; cilde daha gen&ccedil; bir g&ouml;r&uuml;n&uuml;m kazandırır. B&uuml;t&uuml;n bunlar, erkek i&ccedil;in &ccedil;ok &ouml;nemli bir tercih nedeni olan &uuml;retkenliği &ccedil;ağrıştırır. B&uuml;y&uuml;k g&ouml;zler ve uzun kirpikler de kadınsı bir y&uuml;ze &ccedil;ocuksu bir hava katar. Bu da erkekte koruma ve kollama i&ccedil;g&uuml;d&uuml;lerini harekete ge&ccedil;irir.</p>\r\n', 'makyaj-nedir', 'haberler', '21.05.2025'),
(2, 'GÜZELLİK NEDİR?', '2', '781-guzellik-nedir.webp', 'Güzellik, bir canlının, somut bir nesnenin veya soyut bir kavramın algısal bir haz duyumsatan; hoşnutluk veren hususiyetidir. Güzellik, estetiğin, toplum bilimin, toplumsal ruh biliminin ve kültürün bir parçası olarak incelenir ve kültürel yapılanmada son derece ticarileşmiştir.', 'on', '<p>Felsefe tarihi boyunca g&uuml;zellik problemi filozofların &ccedil;oğunu ilgilendirmiştir. G&uuml;zelin ne olduğu konusunda sanat&ccedil;ıdan sanat&ccedil;ıya olduğu kadar filozoftan filozofa farklı d&uuml;ş&uuml;nceler ortaya &ccedil;ıkmıştır. Aşık Veysel: &quot; g&uuml;zelliğin on para etmez bu bendeki aşk olmasa&quot; derken g&uuml;zelliği onu&nbsp;algılayanın g&ouml;nl&uuml;ne, beğenisine bağlar.<br />\r\n<br />\r\nBiz hoşumuza giden bir manzara karşısında ya da dinlediğimiz bir m&uuml;zik karşısında yalnız haz almakla kalmaz, aynı zamanda yaşadığımız estetik durumu bir değer yargısı ile ifade ederiz. G&uuml;zel bir manzara, g&uuml;zel bir m&uuml;zik gibi. O halde&nbsp;<strong>g&uuml;zel ya da g&uuml;zellik estetik olayın ayrılmaz bir par&ccedil;asıdır</strong>. Buna g&ouml;re g&uuml;zellik nedir? Bu soru bir g&uuml;zellik felsefesinin varlığına g&ouml;t&uuml;r&uuml;r ve estetik sorunlar arasında ilk sorulan soru olur.<br />\r\n<br />\r\nG&uuml;zelliğin bir felsefe sorunu olması Platon ile başlar.&nbsp;Platon&rsquo;a g&ouml;re ger&ccedil;ek g&uuml;zellik, g&ouml;rd&uuml;ğ&uuml;m&uuml;z nesnelerin oluşturduğu evrendeki g&uuml;zellikler olmayıp idealar evlerindeki &ldquo;g&uuml;zel&rdquo; ideasıdır. Tabiatın g&uuml;zelliği, g&uuml;zel ideasından pay aldığı &ouml;l&ccedil;&uuml;de bize g&uuml;zel g&ouml;r&uuml;n&uuml;r. Yani tabiatın g&uuml;zelliği, asıl g&uuml;zellik değil, g&uuml;zelliğin kopyasıdır.<br />\r\n<br />\r\nBir sanat tarih&ccedil;isi, bir mimari eseri &ldquo;kim, ne zaman ni&ccedil;in, nasıl yapmış&rdquo; gibi sorularına cevap ararken uzmanlık alanıyla ilgili bilgi edinmiş olur ancak estetik tavır i&ccedil;inde olmaz. O daha &ccedil;ok bilimsel bir tutum takınır. Dolayısıyla estetik yaşantı değil, bilimsel deneyim yaşamış olur. Sanat eseri, estetik bir nesnedir;yani &ldquo;g&uuml;zel olması&rdquo; beklentisiyle yapılmış bir şeydir. Her sanat eserinin yapıldığı bir maddesi vardır. Taşlar, madenler, bez par&ccedil;aları, k&acirc;ğıtlar, boyalar, sesler veya kelimeler vb. sanat eserinin maddesini oluşturur. Bu maddeler bilim adamının ve zanaat&ccedil;ının elinde kullanılacak bir araca d&ouml;n&uuml;ş&uuml;rken sanat&ccedil;ının asıl kaygısı kullanım veya işe yararlık değil g&uuml;zelliktir.<br />\r\n<br />\r\nNesnelerdeki g&uuml;zelliği bulmaya y&ouml;nelik ilgimiz ve dikkat olarak adlandırılır. Estetik dikkat, estetik nesneyi oluşturan maddi unsurlara y&ouml;nelik değil, onların bir kompozisyonla bir araya gelerek oluşturdukları b&uuml;t&uuml;nde aradığımız soyut bir şeydir.<br />\r\n<br />\r\nG&uuml;zel ve &ccedil;irkin, iyi ve k&ouml;t&uuml;, hoş ve y&uuml;ce, doğru ve yanlış g&uuml;nl&uuml;k hayatta sık&ccedil;a kullanıldığımız kavramlardır. Peki, bunlar arasında nasıl bir ilişki vardır? Platon&rsquo;a g&ouml;re g&uuml;zel&nbsp; olan, iyi ve doğru olandır; iyi ve doğru olan da g&uuml;zel. Dolayısıyla g&uuml;zeli kavrayan kişi, iyiyi de kavramış olur. G&uuml;zel olan, aynı zamanda hoş ve y&uuml;cedir. Kant, Platon&rsquo;un &ouml;zdeşleştirmesine katılmaz. Bunların hepsi birbirinden farklı anlamlara sahiptir. G&uuml;zellik estetikle, iyilik ahlakla, doğruluk bilgiyle, hoşluk hissi bedensel zevkle, y&uuml;celik ise doğa ve tanrıyla ilgilidir. G&uuml;zel, insanlarda estetik haz ze heyecan uyandırır. İyi, davranışlarımızla ilgidir ve bazı davranışlardan zevk hoşumuza gitmese de iyidir.<br />\r\n<br />\r\n<strong>Aristoteles&#39;e g&ouml;re g&uuml;zellik bir ahenk, orantı ve d&uuml;zendir</strong>. Bu nedenle orantıdan yoksun olan hi&ccedil;bir şey g&uuml;zel olamaz.<br />\r\n<br />\r\nBir bakışta g&ouml;remeyeceğimiz kadar b&uuml;y&uuml;k olan ya da mercekle g&ouml;remeyeceğimiz bir eser g&uuml;zel olamaz. G&uuml;zel, insanın algılama sınırlarını aşmamalıdır.<br />\r\n<br />\r\nİki t&uuml;r g&uuml;zellik s&ouml;z konusudur. Doğanın g&uuml;zelliği ve sanat eserinin g&uuml;zelliği. Estetiğin ana&nbsp; konusu g&uuml;zelliktir ve bu y&uuml;zden estetik, sanat eserindeki g&uuml;zelle de ilgilenir, doğadaki g&uuml;zelle de. Estetiğin sanat felsefesinden farkı da budur. G&uuml;zel niteliği taşıyan şeylere estetik nesne denir. Kant&rsquo;a g&ouml;re doğadaki g&uuml;zellik, y&uuml;ce olarak adlandırıldığında onu temaşa edende saygı, hayranlık, şaşkınlık ve &uuml;rperti duyguları uyandırır. Ger&ccedil;ek g&uuml;llerin g&uuml;zelliğinden yapay g&uuml;ller yapmayı &ouml;ğrenebiliriz, kuşların ağa&ccedil; dallarına yuva yapması izleyerek yapay dallar ve yuvalar yapabiliriz: Doğadaki g&uuml;zeli taklit edebiliriz.</p>\r\n', 'guzellik-nedir', 'haberler', '21.05.2025'),
(3, 'Pedikür nedir?', '3', '369-pedikur-nedir.webp', '\r\nManikür nedir diye detaylı bir rehber hazırlamıştık! Ancak pedikür konusu da en çok merak edilenlerden birisi. Biz de Melo App olarak bu yazımızda pedikür nedir, ne işe yarar, pedikür zararlı mı gibi soruların hepsine cevap vereceğiz\r\n\r\nÖncelikle bakalım pedikür ne demek veya pedikür nedir? Pedikür aslında latince terimlerin birleşmesi sonucu ortaya çıkan bir terim. Latince’de ayak anlamına gelen “pedis” ve bakım anlamına gelen cura kelimelerden türetilen bir terim. Yani anlayacağınız üzere pedikür ayak ve tırnak bakımı uygulamalarına verilen bir isimdir.', 'on', '<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Pedik&uuml;r aslında sadece ayak tırnaklarınıza oje s&uuml;rmek değil, ayaklarınızın ve ayak tırnaklarınızın bakımına verilen bir isim. Bununla birlikte pedik&uuml;r erkekler i&ccedil;in de uygulanan bir işlemdir. Pedik&uuml;r genel olarak ayak tırnaklarınızın kesilmesi veya kısaltılmasını, ayak tırnaklarınızdaki hoş g&ouml;r&uuml;n&uuml;me sahip olmayan etlerin kesilmesini, ayak derinize bakım yapılmasına, &ouml;l&uuml; dokunun uzaklaştırılmasını da sağlar.&nbsp;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Bunlar haricinde ayaklarınıza gerekli nemi kazandırmak ve tırnaklarınızı daha g&uuml;&ccedil;l&uuml; duruma getirmek i&ccedil;in de pedik&uuml;r yaptırabilirsiniz</span></span></span></p>\r\n\r\n<h2><span style=\"font-size:13pt\"><span style=\"color:#2f5496\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:28px !important\"><span style=\"color:black\">Pedik&uuml;r Neden Yapılır?</span></span></span></span></span></h2>\r\n\r\n<h2><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Pedik&uuml;r&uuml;n yapılma sebepleri arasında tıbbi ve kozmetik sebepleri gerek&ccedil;e g&ouml;sterebiliriz. Bununla birlikte ayaklarınızın da hoş ve bakımlı bir şekilde g&ouml;z&uuml;kmesi de g&uuml;n&uuml;m&uuml;zde en &ouml;nemli konulardan birisidir. Tıpkı ellerimizde olduğu gibi</span></span></span></h2>\r\n', 'pedikur-nedir', 'haberler', '21.05.2025'),
(4, 'Manikür Nedir?', '4', '320-manikur-nedir.webp', '\r\nManikür, el ve ayak bakımının bir parçası olarak tırnakların temizlenmesi ve şekillendirilmesi için yapılan bir işlemdir. Bu işlem genellikle uzmanlık gerektirir ve tırnak eti kesimi de içerir. Ancak tırnak eti kesimi yapılırken çok dikkatli olmak gerekir, çünkü yanlışlıkla etin kesilmesi acı ve enfeksiyona sebep olabilir.', 'on', '<p>Manik&uuml;r, tırnakların temizlenmesi ve şekillendirilmesi ile başlar. Tırnaklar &ouml;zel bir şekilde kesilir ve t&ouml;rp&uuml;lenir, sonra da cuticle adı verilen tırnak etleri kesilip itilir. Bu işlem tırnaklara daha d&uuml;zg&uuml;n ve bakımlı bir g&ouml;r&uuml;n&uuml;m kazandırır.</p>\r\n\r\n<p>Manik&uuml;r sadece estetik bir işlem değildir, aynı zamanda tırnak sağlığını korumaya da yardımcı olur. Tırnakları d&uuml;zenli olarak bakım yapmak tırnakların sağlıklı ve g&uuml;&ccedil;l&uuml; kalmasına yardımcı olur.</p>\r\n\r\n<p>Tırnakların temizlenmesi ve şekillendirilmesi i&ccedil;in yapılan manik&uuml;r, herkesin evde yapabileceği bir iş olarak d&uuml;ş&uuml;n&uuml;lebilir. Ancak tırnak eti kesimi gibi daha detaylı işlemler i&ccedil;in bir uzmandan yardım almak daha doğru bir tercih olabilir.</p>\r\n\r\n<h3><strong>Manik&uuml;r Nasıl Yapılır?</strong></h3>\r\n\r\n<p>Manik&uuml;r, ellerin bakımlı ve şık g&ouml;r&uuml;nmesi i&ccedil;in olduk&ccedil;a &ouml;nemli bir adımdır. Manik&uuml;r yaparken ihtiyacın olan basit malzemelerle bu işlemi kolaylıkla evde de ger&ccedil;ekleştirebilirsin. Bu yazıda, adım adım nasıl manik&uuml;r yapılacağını a&ccedil;ıklayacağımız adımları takip edebilirsiniz. Ellerinizi ve tırnaklarınızı d&uuml;zenli olarak bakım yaparak korumak i&ccedil;in bu adımları uygulayabilirsiniz. Manik&uuml;r yapmanın p&uuml;f noktalarını &ouml;ğrenmek i&ccedil;in yazının devamını okumaya devam edin.</p>\r\n', 'manikur-nedir', 'haberler', '21.05.2025');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `adi`, `sira`, `resim`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `tarih`) VALUES
(8, 'Boyun Germe', '2', '3270260-boyun-germe.png', 'Boyun germe estetik bir plastik cerrahidir, temelde yaşa göre boyundaki fazla deri ve yağın alınması işlemidir.', 'on', '<p style=\"text-align:justify\"><strong>Boyun germe</strong>&nbsp;ameliyatı ise&nbsp;<strong>boyun</strong>&nbsp;b&ouml;lgesinde meydana gelen kırışıklık, gevşeme ve sarkma gibi durumların d&uuml;zeltilmesi i&ccedil;in &ccedil;ene altındaki gıdı b&ouml;lgesinden başlayarak t&uuml;m&nbsp;<strong>boyun</strong>&nbsp;derisin ve altında kalan yağ ve kas dokularının gerdirildiği, fazla dokuların da &ccedil;ıkarıldığı bir operasyondur.</p>\r\n', 'boyun-germe', 'hizmetler', '21.05.2025'),
(9, 'Kaş kaldırma', '3', '729622-kas-kaldirma.png', 'Kaş kaldırma, yüzünüzde daha genç bir görünüm yaratmak için yapılan kozmetik cerrahi bir işlemdir. Prosedür sarkmayı azaltabilir.', 'on', '<p style=\"text-align:justify\">Kaş kaldırma,&nbsp;<strong>kaş b&ouml;lgesinin sarkan ve cansız g&ouml;r&uuml;nen yapısını d&uuml;zeltmek amacıyla kullanılan tekniklerden oluşur</strong>. Ameliyatlı ve ameliyatsız bir şekilde işlem yapılması m&uuml;mk&uuml;nd&uuml;r. Y&uuml;z ifadesinin ve simetrisinin d&uuml;zelmesi noktasında uygulamanın &ouml;nemi b&uuml;y&uuml;kt&uuml;r.</p>\r\n', 'kas-kaldirma', 'hizmetler', '21.05.2025');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

CREATE TABLE `ilanlar` (
  `id` int(11) NOT NULL,
  `ilan_adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `fiyat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `adres` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `google_maps` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `video` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `gtarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `hit` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ilanlar`
--

INSERT INTO `ilanlar` (`id`, `ilan_adi`, `fiyat`, `adres`, `resim`, `aciklama`, `google_maps`, `video`, `tur`, `durum`, `tarih`, `seo`, `gtarih`, `hit`) VALUES
(1, 'Bahçeli manzaralı ', '55', '55 W Jackson Blvd, Chicago, IL 60604, USA', '404-bahceli-manzarali.webp', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, suscipit, numquam accusantium eligendi veniam dolor placeat earum illo corporis esse nulla facere sunt assumenda? Perferendis omnis magni quos fugiat explicabo.</p>\r\n\r\n<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit laboriosam voluptates dignissimos? Dolorum sed culpa repellat, itaque quas nostrum, eos qui nemo fugit reiciendis laboriosam vero magnam nam, dolorem officia.</p>\r\n\r\n<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus voluptas assumenda ab, quos sequi rerum. Quos iusto ab alias, exercitationem autem a doloribus non. Vel porro tenetur omnis ut numquam.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180875.28138651486!2d28.872096530693135!3d41.00523670852465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1638459538653!5m2!1str!2str\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '<iframe width=\"100%\" height=\"656\" src=\"https://www.youtube.com/embed/-NInBEdSvp8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ilanlar', 'on', '08.12.2021', 'bahceli-manzarali', '12.12.2021', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimler`
--

CREATE TABLE `iletisimler` (
  `id` int(11) NOT NULL,
  `adsoyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `konu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `telefon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `email` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `mesaj` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `iletisimler`
--

INSERT INTO `iletisimler` (`id`, `adsoyad`, `konu`, `telefon`, `email`, `mesaj`, `tarih`) VALUES
(4, 'Beyzanur Dalgacı', 'İş', '0555 555 55 55', 'demo@demo.com', 'değerlendirmenizi bekliyorum', '21.05.2025'),
(5, 'Beyzanur Dalgacı', 'İş', '0555 555 55 55', 'demo@demo.com', 'germe', '22.05.2025');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istatik`
--

CREATE TABLE `istatik` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `icon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `istatik`
--

INSERT INTO `istatik` (`id`, `adi`, `sira`, `aciklama`, `icon`, `durum`) VALUES
(5, 'Uzman mühendislerimiz var', '1', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>\r\n', 'Mühendisler', 'on'),
(6, '7/24 müşteri desteği.', '2', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>\r\n', '7/24 Destek', 'on'),
(7, 'Müşteri Memnuniyeti', '3', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>\r\n', 'Memnuniyet', 'on');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mailler`
--

CREATE TABLE `mailler` (
  `id` int(11) NOT NULL,
  `mail` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mailler`
--

INSERT INTO `mailler` (`id`, `mail`) VALUES
(1, 'hilelicocuk5@gmail.com, umuttamirci7@gmail.com'),
(2, 'hilelicocuk5@gmail.com,umuttamirci37@gmail.com'),
(3, 'hilelicocuk5@gmail.com'),
(4, 'hilelicocuk5@gmail.com'),
(5, 'hilelicocuk5@gmail.com, umuttamirci7@gmail.com'),
(6, 'hilelicocuk5@gmail.com, umuttamirci37@gmail.com'),
(7, 'umuttamirci37@gmail.com,hilelicocuk5@gmail.com'),
(8, 'hilelicocuk5@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `id` int(11) NOT NULL,
  `adsoyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `email` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `telefon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `hizmet` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `mesaj` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `sira`, `adi`, `linki`, `durum`, `resim`) VALUES
(1, '1', 'Beyza Nur Dalgacı', '', 'on', '738-beyza-nur-dalgaci.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `adi`, `sira`, `resim`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `tarih`) VALUES
(1, 'Hakkımızda', '1', '-hakkimizda.webp', 'Salonumuz, Gaziantep‘de bulunan ve faaliyetlerine 2025 yılından beri devam eden  güzelik salonları arasında kısa sürede ünlenmiş, hizmetlerini sadece kadınlara yönelik sürdüren firma, en çok tavsiye edilen güzellik salonları arasına girmiştir.\r\n\r\n her zaman güler yüzlü ve alanlarında uzman çalışanlarıyla, kaliteli hizmet sunarak, hijyenik bir ortamda çeşitli uygulamalarla uzun soluklu ilişkiler kurmayı amaç edinmiştir.', 'on', '<h2>????&nbsp;G&uuml;zelliğinize değer katmak i&ccedil;in buradayız!</h2>\r\n\r\n<p><strong>G&uuml;zellik Salonu</strong>, g&uuml;zellik ve bakım alanında en g&uuml;ncel teknolojileri, hijyenik uygulamaları ve uzman kadrosunu bir araya getirerek sizlere konforlu ve etkili &ccedil;&ouml;z&uuml;mler sunar. Her biri alanında eğitimli profesyonellerden oluşan ekibimizle, cildinizin, v&uuml;cudunuzun ve ruhunuzun yenilenmesi i&ccedil;in titizlikle &ccedil;alışıyoruz.</p>\r\n\r\n<p>Modern cihazlarımızla sunduğumuz&nbsp;<strong>lazer epilasyon, cilt bakımı, Hydrafacial, protez tırnak, ipek kirpik, kalıcı oje, kalıcı makyaj</strong>&nbsp;ve daha bir&ccedil;ok uygulama sayesinde, g&uuml;zelliğinizi doğal bir ışıltıyla ortaya &ccedil;ıkarmayı hedefliyoruz. Salonumuzda sadece fiziksel g&ouml;r&uuml;n&uuml;m değil, aynı zamanda&nbsp;<strong>&ouml;zg&uuml;veniniz ve yaşam kaliteniz</strong>&nbsp;de d&ouml;n&uuml;ş&uuml;r.</p>\r\n\r\n<p>M&uuml;şteri memnuniyeti, kişiye &ouml;zel &ccedil;&ouml;z&uuml;mler ve s&uuml;rd&uuml;r&uuml;lebilir g&uuml;zellik ilkeleriyle hizmet veriyor; size sadece kendinizi iyi hissetmek kalıyor. Siz hayal edin, biz ger&ccedil;ekleştirelim!</p>\r\n\r\n<h3><strong>Neden Bizi Tercih Etmelisiniz?</strong><br />\r\n&nbsp;</h3>\r\n\r\n<p>????&zwj;????&nbsp;<strong>Uzman ve g&uuml;ler y&uuml;zl&uuml; kadro</strong><br />\r\n????&nbsp;<strong>Steril ve konforlu salon ortamı</strong><br />\r\n????&nbsp;<strong>Kaliteli &uuml;r&uuml;nler ve son teknoloji cihazlar</strong><br />\r\n????&nbsp;<strong>Kişiye &ouml;zel bakım planları</strong><br />\r\n????️&nbsp;<strong>Doğal, sağlıklı ve kalıcı sonu&ccedil;lar</strong></p>\r\n\r\n<p><strong>Siz de g&uuml;zelliğinize değer verenlerdenseniz, doğru yerdesiniz.</strong><br />\r\nRandevunuzu hemen oluşturun, bakım rit&uuml;elinizi birlikte planlayalım</p>\r\n', 'hakkimizda', 'sayfalar', '21.05.2025'),
(2, 'Gizlilik Politikasi', '2', '831-gizlilik-politikasi.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'on', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'gizlilik-politikasi', 'sayfalar', '21.05.2025');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `adi`, `sira`, `resim`, `durum`) VALUES
(1, 'Bölgenizdeki En İyi Cilt Bakım Hizmeti', '1', '168-bolgenizdeki-en-iyi-cilt-bakim-hizmeti.webp', 'on');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `id` int(11) NOT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`id`, `sira`, `adi`, `aciklama`, `durum`) VALUES
(1, '1', 'Neden Güzellik Bakımı Tercih Edilmeli?', '<p>Cilt&nbsp;<strong>bakımı</strong>&nbsp;yalnızca g&uuml;zel bir g&ouml;r&uuml;n&uuml;m sağlamakla kalmaz. Ayrıca cildin daha sağlıklı olmasına da yardımcı olur. Cilt her zaman g&uuml;neşe ve &ccedil;evresel kirleticilere maruz kaldığından &ccedil;eşitli hasarlar ortaya &ccedil;ıkabilir. Bu nedenle, doğru ve d&uuml;zenli cilt&nbsp;<strong>bakımı</strong>&nbsp;rutini uygulanması &ouml;nemlidir.</p>\r\n', 'on');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `adi`, `sira`, `resim`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `tarih`) VALUES
(7, 'Makyaj Malzemesi', '1', '569-makyaj-malzemesi.webp', 'Makyaj, kozmetik ürünlerin kullanımıyla yüzde görünümü değiştirme ve güzelleştirme işlemidir. ', 'on', '<p>&nbsp;</p>\r\n\r\n<h2><strong>Neden Makyaj Kullanılır?</strong></h2>\r\n\r\n<p>Makyaj;</p>\r\n\r\n<ul>\r\n	<li>Y&uuml;zdeki kusurları kapatmak,</li>\r\n	<li>Değişiklik yaratmak</li>\r\n	<li>Bakımlı ve g&uuml;zel g&ouml;r&uuml;nmek</li>\r\n	<li>G&uuml;zel yanları ortaya &ccedil;ıkartmak,</li>\r\n</ul>\r\n\r\n<p>amacı ile yapılmaktadır. Makyaj yapmak hem sosyal algıyı hem de &ouml;zg&uuml;veni etkilemektedir. Makyajın kadının hem kendisini hem de başkaları tarafından pozitif değerlendirilmesiyle ilişkili olduğunu artık biliyoruz ancak şaşırtıcı olan pozitif etki alanlarının &ccedil;okluğu ve belki de sınırsızlığı. Makyaj yapmak &ouml;zg&uuml;veni olumlu y&ouml;nde etkiliyor. Ancak sanılanın aksine makyaj her zaman y&uuml;ksek &ouml;zg&uuml;venin bir g&ouml;stergesi olmayabiliyor. Yapılan &ccedil;alışmalarda d&uuml;ş&uuml;k &ouml;zg&uuml;venli bireylerin bir &lsquo;&ouml;z tedavi&rsquo; girişimi olarak kozmetik &uuml;r&uuml;nlerden yardım aldıkları g&ouml;r&uuml;l&uuml;yor.&nbsp;</p>\r\n', 'makyaj-malzemesi', 'urunler', '21.05.2025'),
(8, ' Toz Açıcı', '8', 'toz-acici-3071292.webp', 'İçeriğindeki e vitamini ile saçı yıpratmadan açar;bekleme süresi 15-20 dakikadır.\r\n\r\n', 'on', '', 'toz-acici', 'urunler', '21.05.2025'),
(9, 'İtalyano Pedikür Makası', '9', 'italyano-pedikur-makasi-2735897.webp', 'Sert yapılı tırnaklar ve özellikle el ayak tırnaklarını kesmek için idealdir. Keskin ağız yapısıyla tek seferde manikürü pedikürü tamamlamanızı sağlar. Islak ve nemli bırakılmaması önerilir. Ürün Boyutu 10 CM\r\n\r\n', 'on', '', 'italyano-pedikur-makasi', 'urunler', '21.05.2025');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_img`
--

CREATE TABLE `urun_img` (
  `id` int(11) NOT NULL,
  `urun_id` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urun_img`
--

INSERT INTO `urun_img` (`id`, `urun_id`, `tur`, `img`) VALUES
(131, '4', 'urunler', '1639679852-61bb876c5cd78.jpg'),
(128, '2', NULL, '1639677128-61bb7cc84aec6.jpg'),
(127, '1', NULL, '1639677002-61bb7c4a91885.jpg'),
(126, NULL, NULL, '1639676961-61bb7c2189370.jpg'),
(161, '3', 'haberler', '1747858444-682e340c4adeb.jpg'),
(158, '1', 'haberler', '1747858017-682e3261b16d0.jpg'),
(148, '6', 'urunler', '1639781375-61bd13ff2f12e.jpg'),
(147, '6', 'urunler', '1639781365-61bd13f55c1b0.jpg'),
(146, '5', 'urunler', '1639790881-61bd3921cb66c.png'),
(145, '5', 'urunler', '1639790881-61bd3921cb59d.png'),
(144, '5', 'urunler', '1639790881-61bd3921cb370.png'),
(143, '5', 'urunler', '1639790881-61bd3921cb360.png'),
(142, '5', 'urunler', '1639790881-61bd3921cb295.png'),
(160, '2', 'haberler', '1747858362-682e33bac9bae.jpg'),
(162, '4', 'haberler', '1747858623-682e34bfd9561.jpg'),
(155, '7', 'urunler', '1747858961-682e3611465b9.png'),
(156, '8', 'urunler', '1747859105-682e36a18f11c.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_secenek`
--

CREATE TABLE `urun_secenek` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urun_secenek`
--

INSERT INTO `urun_secenek` (`id`, `urun_id`, `baslik`) VALUES
(51, 1, 'Beden'),
(25, 2, 'Beden'),
(52, 3, 'Beden'),
(27, 4, 'Beden'),
(28, 5, 'Beden'),
(29, 6, 'Beden'),
(30, 7, 'Beden'),
(31, 8, 'Beden'),
(32, 9, 'Beden'),
(33, 10, 'Beden'),
(34, 11, 'Beden'),
(35, 12, 'Beden'),
(36, 13, 'Beden'),
(37, 14, 'Beden'),
(38, 15, 'Beden'),
(39, 16, 'Beden'),
(40, 17, 'Beden'),
(41, 18, 'Beden'),
(42, 19, 'Beden'),
(43, 20, 'Beden'),
(44, 21, 'Beden'),
(45, 22, 'Beden'),
(46, 23, 'Beden'),
(47, 24, 'Beden');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_secenek_alt`
--

CREATE TABLE `urun_secenek_alt` (
  `id` int(11) NOT NULL,
  `urun_secenek_id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `fiyat` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urun_secenek_alt`
--

INSERT INTO `urun_secenek_alt` (`id`, `urun_secenek_id`, `baslik`, `stok`, `fiyat`) VALUES
(153, 51, 'XL', 10, '10'),
(152, 51, 'M', 10, '10'),
(151, 51, 'S', 10, '10'),
(75, 25, 'XL', 10, '10'),
(74, 25, 'M', 10, '10'),
(73, 25, 'S', 10, '10'),
(156, 52, 'S', 10, '10'),
(155, 52, 'M', 10, '10'),
(154, 52, 'XL', 6, '10'),
(81, 27, 'XL', 10, '10'),
(80, 27, 'M', 10, '10'),
(79, 27, 'S', 10, '10'),
(84, 28, 'XL', 10, '10'),
(83, 28, 'M', 10, '10'),
(82, 28, 'S', 10, '10'),
(87, 29, 'XL', 10, '10'),
(86, 29, 'M', 10, '10'),
(85, 29, 'S', 10, '10'),
(90, 30, 'XL', 10, '10'),
(89, 30, 'M', 10, '10'),
(88, 30, 'S', 10, '10'),
(93, 31, 'XL', 10, '10'),
(92, 31, 'M', 10, '10'),
(91, 31, 'S', 10, '10'),
(96, 32, 'XL', 10, '10'),
(95, 32, 'M', 10, '10'),
(94, 32, 'S', 10, '10'),
(99, 33, 'XL', 10, '10'),
(98, 33, 'M', 10, '10'),
(97, 33, 'S', 10, '10'),
(102, 34, 'XL', 10, '10'),
(101, 34, 'M', 10, '10'),
(100, 34, 'S', 10, '10'),
(105, 35, 'XL', 10, '10'),
(104, 35, 'M', 10, '10'),
(103, 35, 'S', 10, '10'),
(108, 36, 'XL', 10, '10'),
(107, 36, 'M', 10, '10'),
(106, 36, 'S', 10, '10'),
(111, 37, 'XL', 10, '10'),
(110, 37, 'M', 10, '10'),
(109, 37, 'S', 10, '10'),
(114, 38, 'XL', 10, '10'),
(113, 38, 'M', 10, '10'),
(112, 38, 'S', 10, '10'),
(117, 39, 'XL', 10, '10'),
(116, 39, 'M', 10, '10'),
(115, 39, 'S', 10, '10'),
(120, 40, 'XL', 10, '10'),
(119, 40, 'M', 10, '10'),
(118, 40, 'S', 10, '10'),
(123, 41, 'XL', 10, '10'),
(122, 41, 'M', 10, '10'),
(121, 41, 'S', 10, '10'),
(126, 42, 'XL', 10, '10'),
(125, 42, 'M', 10, '10'),
(124, 42, 'S', 10, '10'),
(129, 43, 'XL', 10, '10'),
(128, 43, 'M', -2, '10'),
(127, 43, 'S', 10, '10'),
(132, 44, 'XL', 10, '10'),
(131, 44, 'M', 10, '10'),
(130, 44, 'S', 10, '10'),
(135, 45, 'XL', 10, '10'),
(134, 45, 'M', 10, '10'),
(133, 45, 'S', 10, '10'),
(138, 46, 'XL', 10, '10'),
(137, 46, 'M', 10, '10'),
(136, 46, 'S', 10, '10'),
(141, 47, 'XL', 10, '10'),
(140, 47, 'M', 10, '10'),
(139, 47, 'S', 10, '10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`id`, `adi`, `sira`, `resim`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `tarih`) VALUES
(1, 'Video 1', '1', '605-video-1.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'on', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'video-1', 'video', '21.05.2025'),
(2, 'Video 2', '2', '471-video-2.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'on', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'video-2', 'video', '21.05.2025');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `normalsifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `adi`, `sifre`, `normalsifre`) VALUES
(3, 'demo@demo.com', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'demo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `unvan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `adi`, `sira`, `resim`, `unvan`, `durum`, `aciklama`) VALUES
(3, 'Beyza Nur Dalgacı', '1', '357-beyza-nur-dalgaci.webp', 'Web Tasarım', 'on', '<p><strong>Hizmetten &Ccedil;ok Memnun Kaldım Profesyonel bir ekipler</strong></p>\r\n'),
(4, 'Emre Kızıl', '2', '-emre-kizil.webp', 'İç Mimar', 'on', '<p><strong>Daha &ouml;nce bu kadar ilgili bir firma g&ouml;rmedim teşekk&uuml;rler</strong></p>\r\n'),
(5, 'Metin Dilmen', '3', '-metin-dilmen.webp', 'İnşaat Mühendisi', 'on', '<p><strong>Lazer de Gaziantep b&ouml;lgesinde tek olan firma&nbsp;</strong></p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ekibimiz`
--
ALTER TABLE `ekibimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisimler`
--
ALTER TABLE `iletisimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `istatik`
--
ALTER TABLE `istatik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mailler`
--
ALTER TABLE `mailler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_img`
--
ALTER TABLE `urun_img`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_secenek`
--
ALTER TABLE `urun_secenek`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_secenek_alt`
--
ALTER TABLE `urun_secenek_alt`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ekibimiz`
--
ALTER TABLE `ekibimiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimler`
--
ALTER TABLE `iletisimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `istatik`
--
ALTER TABLE `istatik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `mailler`
--
ALTER TABLE `mailler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urun_img`
--
ALTER TABLE `urun_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- Tablo için AUTO_INCREMENT değeri `urun_secenek`
--
ALTER TABLE `urun_secenek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Tablo için AUTO_INCREMENT değeri `urun_secenek_alt`
--
ALTER TABLE `urun_secenek_alt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
