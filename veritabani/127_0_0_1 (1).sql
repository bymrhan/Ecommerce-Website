-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ağu 2022, 10:57:46
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev_db`
--
CREATE DATABASE IF NOT EXISTS `odev_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `odev_db`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminpanel`
--

CREATE TABLE `adminpanel` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimform`
--

CREATE TABLE `iletisimform` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `mesaj` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisimform`
--

INSERT INTO `iletisimform` (`id`, `ad`, `mail`, `telefon`, `mesaj`) VALUES
(1, 'sena', 'senadrg@gmail.com', '542', 'Hello Worlds'),
(13, 'deneme', 'bymrhan@gmail.com', '0542 271 91 83', 'deneme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `katagoriler`
--

CREATE TABLE `katagoriler` (
  `kat_id` int(11) NOT NULL,
  `k_katagori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `katagoriler`
--

INSERT INTO `katagoriler` (`kat_id`, `k_katagori`) VALUES
(1, 'bilim'),
(2, 'roman'),
(3, 'Felsefe'),
(4, 'Çizgi Roman'),
(5, 'Din Tasavvuf'),
(6, 'Araştırma - Tarih'),
(7, 'Sınavlara Hazırlık'),
(8, 'Kişisel Gelişim'),
(9, 'Çocuk ve Gençlik'),
(10, 'Edebiyat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE `kitap` (
  `id` int(11) NOT NULL,
  `kitap_adi` varchar(150) DEFAULT NULL,
  `kitap_turu` varchar(50) NOT NULL,
  `yazar` varchar(50) NOT NULL,
  `sayfa` int(50) NOT NULL,
  `yili` varchar(50) NOT NULL,
  `dili` varchar(20) NOT NULL,
  `fiyat` decimal(5,2) NOT NULL,
  `aciklama` varchar(1600) NOT NULL,
  `barkod` bigint(20) NOT NULL,
  `kapak_foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`id`, `kitap_adi`, `kitap_turu`, `yazar`, `sayfa`, `yili`, `dili`, `fiyat`, `aciklama`, `barkod`, `kapak_foto`) VALUES
(1, 'Şeker Portakalı', 'roman', 'Jose Mauro De Vasconcelos', 200, '2000', 'Türkçe', '26.25', 'Çevresindeki yoksulluğa hayalleriyle meydan okuyan afacan Zezé, ailesi maddi imkânsızlıklar nedeniyle yeni bir eve taşındığı zaman orada karşılaştığı ilk canlıyı bir şeker portakalı fidanını arkadaş edinmeyi başarır. Bu fidan onun sırdaşı ve yoldaşı olacaktır.\r\nBrezilyalı yazar José Mauro de Vasconcelos’un, “Yirmi yıl içimde taşıdım,” dediği ve on iki günde yazdığı Şeker Portakalı, okuyan herkese saflık, şefkat ve acı konusunda dersler vermeye devam eden bir klasik, gençlik edebiyatının yapıtaşlarından biri.', 9789750738609, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000064031-1.jpg'),
(2, 'Süt Lekesi', 'roman', 'Esra Ezmeci', 264, '2018', 'Türkçe', '22.00', 'Her insan lekeli midir?\r\n\r\nNe zaman bulaştı bu lekeler bize?\r\n\r\nHabil ile Kabil zamanında mı?\r\n\r\nBir yara mıdır bu leke, bir nişan mıdır yoksa?\r\n\r\nMasum, saf ve temiz olarak dünyaya gözlerini açan insanoğlu, neden bu dünyayı yaşanmaz kıldı?\r\n\r\nİnsan kötülükle mi doğar, sonra mı kötü olur?\r\n\r\nBir bebek, başka bebeği gördüğünde neden rahatsız olur, neden onu tırmalar, canını yakar?\r\n\r\nSÜT LEKESİ insanın içsesi olmaya aday bir roman. Kimseye söylemediklerimize, yalnızken kendimize bile fısıldayamadıklarımıza, aklımızdan bile geçiremediklerimize ışık tutuyor.\r\n\r\nAcı içinde kıvranırken gelen mutluluğu, karanlık içinde boğulurken yanan ışığı, çaresizlik içinde debelenirken yanı başınızdaki çareyi göreceksiniz.\r\n\r\nSadece iyiyi ve güçlüyü değil, kötüyü ve zayıfı da anlayacak, önyargılarınızdan rah', 9786053114772, 'https://i.dr.com.tr/cache/500x400-0/originals/0001778031001-1.jpg'),
(3, 'Ben Kirke', 'roman', 'Madeline Miller', 408, '2019', 'Türkçe', '30.00', 'NPR, Washington Post, Buzzfeed, People, Time, Amazon, Entertainment Weekly, Bustle ve Newsweek’e göre Yılın En İyi Kitabı\r\n\r\nGoodreads okurlarına göre 2018’in En İyi Fantastik Kitabı\r\n\r\n“Bu dikkat çekici hikâye sizi, Kirke’nin yaptığı bir büyü gibi etkisi altına alacak.”\r\n\r\n- Mary Doria Russell, Serçe’nin yazarı -\r\n\r\n“Tek kelimeyle büyüleyici ve zarif anlatımıyla Ben, Kirke, kadın yaşamının sıradan ve de sıradışı bir hikâyesi.”\r\n\r\n- Eimear McBride, Kız Natamam Bir Şeydir ‘ in yazarı -\r\n\r\nOzanlar benden, –erkek– kahramanın karşısında diz çöküp merhamet dilenen bir kadın olarak bahsetti hep; ilaç katarmışım tatlı şaraplarına, büyüleyip domuza çevirirmişim hızlı giden gemilerin tayfasını, babaevini unutturur, sılaya kavuşmalarına müsaade etmezmişim. Ne demeli, kadınlara haddini bildirmek ozanların en sevdiği vakit geçirme biçimidir; yerlerde sürünüp ağlamazsak gerçek bir hikâye olmazmış gibi.\r\n\r\nAma yanılıyorlar, yanılıyorsunuz: Cadılık illa nefret, kıskançlık ya da başka türlü bir kötülükten doğmaz; ben ilk büyümü aşkımdan yapmıştım.\r\n\r\nBen, Helios’un kızı, Aiaie Cadısı Kirke. Hayatım boyunca trajedinin beni bulmasını bekledim. Bulacağından hiç kuşkum yoktu çünkü başkalarının hak ettiğimi düşündüğünden daha fazla arzum, isyanım ve gücüm vardı, yıldırımları üstüne çekecek şeylerdi bunlar. Ve bir gün, artık bu dünyaya dayanamayacağım, diye düşündüm.\r\n\r\nBunun üzerine denizin derinliklerindeki kadim bir tanrı seslendi: Öyleyse çocuğum, başka bir dünya yap.\r\n\r\nBen, Kirke’de Madeline Miller; Odysseus, İkaros, Minotauros, Prometheus ve Zeus gibi mitolojik karakterlerin binlerce yıld', 9786053759584, 'https://i.dr.com.tr/cache/500x400-0/originals/0001836978001-1.jpg'),
(4, 'Büyük Sorulara Kısa Yanıtlar', 'bilim', 'Stephen Hawking', 256, '2018', 'Türkçe', '22.05', 'İnsanlar her daim büyük sorulara yanıt bulmak istemiştir:\r\nTanrı Var mı? Nereden geldik? Her Şey Nasıl Başladı? Evrende Bizden Başka Akıllı Yaşam Var mı? Zamanda Yolculuk Mümkün mü? Yapay Zekâ Bize Üstün Gelecek mi? Her şeyin gerisinde duran anlam ve tasarı nedir? Geçmişin yaratılış üzerinden açıklamaları bugün artık çok daha az uygun ve güvenilir görünüyor. Bu açıklamaların yerini New Age’ten Star Trek’e uzanan kendilerine yalnızca hurafe diyebileceğimiz çeşitli şeyler aldı. Gelgelelim gerçek bilim, bilimkurgudan çok daha tuhaf ve tatmin edici olabilir. Günümüzde bilim bütün bu sorulara yanıt\r\nbulmaya başladı.Hawking’in ölümünden önce yazdığı son yazıların derlemesi olan bu kitap,tarihin en önemli zihinlerinden birinin büyük sorulara verdiği yanıtlardan oluşuyor.\r\nHer Şeyin Teorisi filmindeki performansıyla Oscar kazanan Eddie Redmayne’in önsöz, Nobel Ödüllü bilim insanı Kip Thorne’un giriş ve Hawking’in kızı Lucy’nin sonsöz kaleme aldığı Büyük Sorulara Kısa Yanıtlar bir dehanın dünyaya bıraktığı son mesaj niteliğinde.\r\n\r\n“Hawking, insan zihninin artan gücünün bir sembolü.” -The Washington Post\r\n\r\n“Hawking’in okuyuculara son mesajı insanlık için umut olduğu yönünde.” -CNN\r\n\r\n“Büyük Sorulara Kısa Yanıtlar bilimin ve insanlığın geleceğine son derece açık ve anlaşılır bir bakış sunuyor.” -The Wall Street Journal\r\n\r\n“Bu olağanüstü kitap, görkemli bir yıldızın son parıltısı.” -The Telegraph', 9786051719092, 'https://i.dr.com.tr/cache/500x400-0/originals/0001791001001-1.jpg'),
(5, 'Kürk Mantolu Madonna', 'roman', 'Sabahattin Ali', 160, '1998', 'Türkçe', '4.00', 'İlk baskısı 1943 yılında yapılan Kürk Mantolu Madonna, günümüzde halen en çok ilgi gören ve satılan kitaplar arasında bulunuyor. Basıldığı günden bu yana 1 milyondan fazla satan kitap üzerine, birçok araştırma ve inceleme yapılmış, hakkında tezler yazılmış, fakat bu başarısının sırrı tam olarak çözülememiştir. Onu bu kadar özel kılan ve hala konuşuluyor olmasındaki en büyük pay, tabii ki Sabahattin Ali’nin usta kalemi ve başarılı ruh tahlilleridir.', 9789753638029, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000058245-1.jpg'),
(6, 'Hayvan Çiftliği', 'roman', 'George Orwell', 112, '1945', 'Türkçe', '9.80', 'Fazla çalıştırılan ve kötü muamele gören hayvanlar bir gün toplanıp yaşadıkları çiftliği ele geçirirler. Sonunda söz sahibi olmuşlardır, çiftlikte daha adil ve eşit bir toplum oluşturmaya kararlıdırlar. Domuzların öncülüğünde bu yeni düzeni kurmak için çalışmaya başlarlar. Bu düzen ilk başta çiftliğin gelişmesini sağlasa da zamanla hayvanların öngöremediği sorunlar ortaya çıkacak ve eskisinden daha acımasız bir rejim kurulacaktır.\r\n\r\nHayvan Çiftliği George Orwell’in modern klasikler arasına girmiş ikinci ünlü romanı ve çarpıcı bir politik taşlamadır. Şimdiye kadar yazılmış en iyi sistem eleştirilerinden biri olan bu roman, özgürlük amaçlı bir devrimin nasıl tek adamlığa evrilebileceğini gözler önüne serer. George Orwell’in alegorisi, bugün özgürlüğün saldırıya uğradığı her durum ve yerde güncelliğini koruyor.', 9789750719387, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000105409-1.jpg'),
(7, 'Tehlikeli Tırmanış', 'bilim', 'Hakan Bulgurlu', 240, '2021', 'Türkçe', '49.55', '“23 Mayıs 2019 tarihinde, Everest’in zirvesine ulaşabilen birkaç bin şanslı insandan biri oldum. Dünyanın en yüksek dağının zirvesinde durmak, doğanın hayranlık uyandıran kuvvetine şahit olmak insana kibrini unutturan bir tecrübe.\r\n\r\nEverest’e tırmanmak istememin birkaç sebebi vardı: iklim değişikliğinin yıkıcı etkisini göstermek için çevresel konulara odaklanmak, insanlara örnek olmak ve karşılaştığımız problemlere pratik çözümler aramak.\r\n\r\nYaptığım yolculukla, doğaya verdiğimiz zararı gözler önüne sermek, kaleme aldığım bu kitapta ise hem zirveye çıkarken karşılaştığım zorlukları hem de gezegenimizi ve insanlığın geleceğini koruma konusunda hepimizin karşılaştığı zorlukları anlatmak istedim.”', 9786257491037, 'https://i.dr.com.tr/cache/500x400-0/originals/0001949545001-1.jpg'),
(8, 'Beyinde Ararken Bağırsakta Buldum', 'bilim', 'Serkan Karaismailoğlu', 288, '2017', 'Türkçe', '27.30', 'Kadın Beyni Erkek Beyni kitabının yazarı Serkan Karaismailoğlu son kitabı Beyinde Ararken Bağırsakta Buldum ile gene şaşırtıyor bizi. Sadece şaşırmakla da kalmıyoruz, bağırsağın beynin karşısındaki galibiyetini bize o bilindik, esprili üslubuyla anlatırken bir gülümseme yerleşiyor yüzümüze…', 9786059367165, 'https://i.dr.com.tr/cache/500x400-0/originals/0001710505001-1.jpg'),
(9, 'Yeni Dünyanın Cesur İnsanı', 'bilim', 'Sinan Canan', 176, '2021', 'Türkçe', '32.50', 'Bu kitap senin için yazıldı. Burada tüm deneyimim, bilgim ve samimiyetimle, sana insan olarak hep unuttuğumuz ama her zamankinden daha çok hatırlamamız gereken temel konulardan bahsedeceğim.\r\n\r\nArtık yeni bir dünya, yeni dertler ve yeni imkânlar var. Bu yeni dünyada nasıl var olacağımızı yine bizler belirleyeceğiz. Yepyeni dertlerin çözümleri, yepyeni ve cesur bakış açıları istiyor. Bunun için ezberleri ve alışkanlıkları bir kenara bırakıp, her şeyi yeniden sorgulayıp, yeni farkındalıklar geliştirecek cesur insanlar gerek. İşte sen, Yeni Dünyanın Cesur İnsanı; kendini ve bizi “bu dertlerden” nasıl kurtaracaksın, bunun peşindeyim.\r\n\r\nBu kitap, hayatında yeni ve kritik kararlar vereceğin zamanlarda sana destek olmak, unutmuş olabileceklerini hatırlatmak amacıyla kaleme alındı. Umarım katkısı olur...', 9786059218955, 'https://i.dr.com.tr/cache/500x400-0/originals/0001949500001-1.jpg'),
(10, 'Dura Mater', 'bilim', 'Serkan Karaismailoğlu', 560, '2021', 'Türkçe', '42.25', 'Elma Yayınevi uzun zamandır merakla beklenen kitabı Dura Mater’le okurlarının karşısında…\r\n\r\n“Şu an ellerinizin arasında olan Dura Mater adlı kitap, 3 kitaptan oluşan Mater Serisinin üçüncü ve sonuncu kitabıdır. O nedenle Bölüm 101’den başlamaktadır. Eğer serinin ilk iki kitabını okumadıysanız lütfen elinizdeki kitabı usulca aldığınız rafa geri koyunuz.”\r\nYazar Serkan Karaismailoğlu, bu cümlelerle başlıyor Mater Serisinin 3. ve son bölümüne… İlk iki kitabın konusunu oluşturan heyecanlı serüveninin sonunu ve kahramanların yaşadıklarını okuyoruz Dura Mater’de. Her zamanki gibi bilim, bilim tarihi, macera ve heyecan dolu bir hikâye sizi bekliyor…', 9786257112376, 'https://i.dr.com.tr/cache/500x400-0/originals/0001934377001-1.jpg'),
(11, 'Zamanın Kısa Tarihi', 'bilim', 'Stephen Hawking', 256, '2017', 'Türkçe', '25.20', 'Zamanın Kısa Tarihi 1988 yılındaki ilk basımından bu yana geçen yıllar içerisinde bilimsel yazın alanında bir başyapıt konumu kazandı. Kırk dile çevrildi ve dokuz milyonun üzerinde baskı yaparak dev bir uluslararası ün kazandı. Kitap o dönemde evrenin doğası hakkında öğrendiğimiz en son bilgiler göz önüne alınarak yazılmıştı, öte yandan o günden bu güne hem atom-altı dünyanın hem de büyük ölçekte evrenin gözlem teknolojilerinde olağanüstü ilerlemeler yaşandı. Bu yeni gözlemler Profesör Hawking’in kitabın ilk baskısında yaptığı kuramsal öngörülerin çoğunu doğrulayan nitelikteydi. Bu gözlemlere, evrenin başlangıcından 300.000 yıl sonrasını araştıran ve Hawking’in varlığını ileri sürdüğü uzayzaman dokusundaki kırışıklıkları tespit eden Kozmik Ardalan Kâşifi COBE uydusunun son bulguları da dahildir. ', 9786051067582, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000562120-1.jpg'),
(12, 'Arachnoid Mater', 'bilim', 'Serkan Karaismailoğlu', 488, '2020', 'Türkçe', '35.75', 'Merhaba okuyucu. Kim olduğunu ya da hangi tarihte olduğumuzu bilmiyorum ama şu an bu satırları okuduğuna göre bir şekilde yolumuz kesişmiş demek. Baştan uyarayım. Burada yazanlar küçük bir olayın parçasıymış gibi görünse de aslında kökleri oldukça derinlere uzanan karışık bir hikâye var karşında. Hatırlayabildiğim kadar yazmaya çalıştım her şeyi. Çünkü ben sonum. Olur da bana bir şey olursa, nöronlarımda yaşamakta olan bu bilgiler toprağa gömülecek. O yüzden her şeyi yazmak istedim. Geçmişim ve hatıralarım ölmesinler diye onları diri diri sayfaların içine gömdüm. Umarım beni ve yaşadıklarımı anlarsın. Evime ve vücuduma hoş geldin.', 9786257112079, 'https://i.dr.com.tr/cache/500x400-0/originals/0001878105001-1.jpg'),
(13, 'İFA: İnsanın Fabrika Ayarları 3.Kitap - Sınırları Aşmak', 'bilim', 'Sinan Canan', 168, '2020', 'Türkçe', '32.50', 'Hepimiz “daha doğru yaşamaya” çalışıyoruz. Sürekli öğrenme peşindeyiz ama gittikçe genişleyen bilgi havuzundan çoğu zaman doğruları seçemiyoruz. Uzmanlar da sıklıkla görüş ayrılığına düşüyorlar. Konu “insan” iken, bilim de bu kadar açık ve net bir araçken bu kadar anlaşmazlık nereden geliyor?\r\n\r\nElinizdeki kitap, bir üçlemenin üçüncü kitabıdır. İnsanın Fabrika Ayarları serisi bir bütün olarak insanlığın gereklerini İFA edebilmek için, bilimsel gerçeklere farklı bir çerçeve öneriyor. İnsanın Fabrika Ayarları, kendinizi başka bir bakış açısından bir kez daha anlamaya davet ediyor.\r\n\r\nİnsan neden bu kadar çıplak ve aciz?\r\nBedensel ihtiyaçları karşılanan insan neden mutlu olamıyor?\r\nYüz yıl önceki insanların bilmediği bunca yeni “ölüm nedeni” nereden çıktı?\r\nNeden hareketsiz kalınca hastalanıyoruz?\r\nFazla yemek bize neden iyi gelmiyor?\r\nYalnız kalınca neden erken ölüyoruz?\r\nBedenin stres tepkileri, tüm hayvanların hayatta kalmasına yardımcı olurken, bizi neden bu kadar yoruyor hatta hasta edip öldürebiliyor?\r\nSınırlarını aşamayan, zihnini ve bedenini zorlamayan insanlar neden bunalıma giriyor?\r\nYaratılışımıza uygun bir yaşam kurmak ve bunu sürekli hale getirmek bu kadar zor mu?\r\n\r\nBu kitap, bu ve benzeri soruların cevaplarını vermekten ziyade kendiniz için en doğru cevapları bizzat sizin bulabilmeniz için yazıldı. Bundan sonrası ise size kalıyor.\r\n\r\nKendinize iyi bakın, göreceksiniz…', 9786059218733, 'https://i.dr.com.tr/cache/500x400-0/originals/0001895030001-1.jpg'),
(14, 'Sen Yola Çık Yol Sana Görünür', 'Kişisel Gelişim', ' Hakan Mengüç', 184, '2021', 'Türkçe', '19.20', 'Her Şey Vaktini Bekler. Ne Gül Vaktinden Önce Açar Ne de Güneş Vaktinden Önce Doğar. Biraz Sabret Senin Olan Sana Gelecektir.\r\n\r\nMevlana 21. yüzyılda dünyanın başına gelenleri görseydi acaba ne düşünürdü?\r\n\r\nBu hız çağında boğuştuğumuz sorunları çözüme ulaştırmak için bize nasıl yol gösterirdi?\r\n\r\nHakan Mengüç, kaleme aldığı bu yeni kitabında tam da bu soruların yanıtını arıyor.\r\n\r\nBüyük düşünür, sekiz yüz yıl öncesinden sesleniyor çağımızın acı çeken ruhlarına...\r\n\r\nOnlara 21 altın kuralı hatırlatıyor!\r\n\r\nHiçbir şeyin çaresiz ve çözümsüz olmadığını, her derdin içinde bir derman saklı olduğunu fısıldıyor.\r\n\r\nPeki ya o dermanı bulmak mümkün mü?\r\n\r\nDoğru yere bakınca evet...\r\n\r\nDoğru yeri bilen gönül gözünü uyandırmanın tam zamanı...\r\n\r\nAradığın hazine tam olarak durduğun yerde.\r\n\r\nHoş geldin yol arkadaşım.', 9786254415173, 'https://i.dr.com.tr/cache/500x400-0/originals/0001953769001-1.jpg'),
(15, ' Ben Kazanmadan Bitmez', 'Kişisel Gelişim', ' Bircan Yıldırım', 240, '2020', 'Türkçe', '17.40', 'Sosyolog, Eğitimci ve Aile danışmanı olan Yazar  Bircan Yıldırım, BEN KAZANMADAN BİTMEZ isimli kitabı ile tüm kalıpları yıkıyor. Sıradan kişisel gelişim kitaplarından farklı olarak daha okurken resimlerle sembollerle çizimlerle  bilinçaltı özel dil kalıpları ve mühürlemelerle uygulamalı olarak okuyucunun zihnini mucize frekansına kodlamayı başarıyor.\r\n\r\n Çok satan “HAYAT CESURLARA TORPİL GEÇER”, “YAŞAM TERAPİSİ ” ve “DUYGUSAL ZEKA  “ kitaplarının yazarı Bircan Yıldırım bu kez BEN KAZANMADAN BİTMEZ kitabı ile uygulamalı olarak  basit ve etkili tekniklerle kişinin neden benim başıma geliyor  dediği kısırdöngüleri kırıp istediği hayatı yaşamasının hiç de zor olmadığını okurlarına deneyimletiyor.\r\n\r\nHayır! Düzen bozulmadı, yeniden kuruldu... Yıkılan bir şey yok, değişen çok şey var sadece ve her değişim ürkütücü bir karmaşayla, çözümsüz gibi görünen sorunlarla ve sonsuz kaygılarla yağar insanın üzerine...\r\n\r\nYeni düzen bir tehdit değil, bir seçim...\r\n\r\nTeknolojik gelişmeler insan sağlığını korumaya yetmiyormuş, bir kez daha yüzleştik bu hakikatle... İnsanın sağlığı yine doğanın kanunlarına bağlı...\r\n\r\nYeni dünya, bambaşka bir disiplin öğretiyor insanoğluna:\r\n\r\n“Şikâyet etmemeyi, güvenmeyi ve olana teslimiyeti...”\r\n\r\nNe kadar şikâyete saparsan, o denli şükre davet edilirsin. Dengelenirsin.\r\n\r\nŞimdiye kadar şikâyet ettiğin ne varsa, hepsine şükretmeyi öğretiyor yeni düzen sana.\r\n\r\nBelki sarsarak, belki acıtarak, belki tokatlayarak... Belki sen anlayıncaya dek şiddetini artırarak...\r\n\r\nÇünkü ilahi düzen, vazgeçmemiştir senden. Sadece fark etmeni ve hak etmeni bekliyordur hayatı...', 9786053118442, 'https://i.dr.com.tr/cache/500x400-0/originals/0001871710001-1.jpg'),
(16, 'Var mısın? - Güçlü Bir Yaşam İçin Öneriler', 'Kişisel Gelişim', 'Doğan Cüceloğlu', 2021, '2021', 'Türkçe', '26.00', '“Gençliğimde gergin, stresli, mutsuz günlerim çok oldu. Kendimi suçlu hissettiğim, değersiz gördüğüm dönemler yaşadım. Şimdi hayatım anlamlı, coşkulu ve şükür duygusuyla dopdolu... Neden? İçinde yaşadığım koşulların iyileşmesinden mi? Geliştirdiğim farkındalıkların sonucu mu?”', 9786057635839, 'https://i.dr.com.tr/cache/500x400-0/originals/0001903548001-1.jpg'),
(17, ' Hayat Cesurlara Torpil Geçer-Özel Baskı', 'Kişisel Gelişim', ' Bircan Yıldırım', 256, '2020', 'Türkçe', '16.80', 'Kendini uzun yıllar nefes ve meditasyon tekniklerine adayan yazar Bircan Yıldırım, Hayat Cesurlara Torpil Geçer isimli kitabı ile tüm kalıpları yıkıyor. Sıradan kişisel gelişim kitaplarından farklı olarak hikayeleştirilmiş bir anlatımı tercih eden Yıldırım, böylece pek çok okuyucunun ilgisini çekmeyi başarıyor.\r\n\r\nCesaretin ana tema olarak işlendiği kurgu, okurlarını içsel bir yolculuğa çıkararak düşünmeye davet ediyor. Belirli bölümlerde nefes egzersizlerine de yer verilen kitap, aynı zamanda kişinin kendisine uygulayabileceği bir terapi niteliği taşıyor. Bircan Yıldırım’ın yalın ve akıcı anlatımı ile zenginleşen bu kitap, uçurumun kıyısında düşmeyi bekleyenlere büyük bir cesaret örneği sunuyor.', 9786053117308, 'https://i.dr.com.tr/cache/500x400-0/originals/0001856872001-1.jpg'),
(18, ' Duygusal Zeka', 'Kişisel Gelişim', ' Bircan Yıldırım', 96, '2020', 'Türkçe', '16.00', 'Kendinizi kışkırtmaya hazır mısınız?\r\nStres, korku ve endişelere karşı duygusal zekâ.\r\nİlişkiler, sağlık ve varoluş konularında sizler için yepyeni bir model.\r\nÇevremizdeki birçok insan sıkıntı, stres, endişe ve kaygı yaşıyor.\r\nBu kişilerin büyük bir çoğunluğu akıl hastası değildir. Bu kişilerin sorunları daha çok günlük yaşamın ve belirsizliklerin getirdiği sorunlardır. Yaşamda her sorunu çözümleyemeyiz ancak çözümleyemediğimiz bu sorunlarla baş etmeyi öğrenebiliriz. Yaşamın zor süreçlerinden geçerken ayakta kalabilmemiz ancak ve ancak duygularımızı yönetebilmemizle mümkündür.\r\nBu kitap bilinçaltı inançlarını yeniden yapılandırma teknikleriyle kodlayabileceğini, yaşamını bilinç seviyesinde duygusal zekânı geliştirerek yeniden nasıl şekillendirebileceğini armağan olarak veriyor.\r\nBu kitap, bu dünyaya sadece yiyip içmek, gezmek, eğlenmek, üremek ve tüketmek için gelmediğini hatırlatıyor!\r\nBu kitap dünyaya bizden bir “İZ” bırakmamız gerektiğini haykırıyor!\r\nSiz de değişime, gelişime, özgürleşmeye ve duygusal zekânızı geliştirmeye hazır mısınız?', 9786053110132, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000659504-1.jpg'),
(19, 'Yaşam Terapisi', 'Kişisel Gelişim', 'Bircan Yıldırım', 208, '2017', 'Türkçe', '14.40', 'Aradığını bulduğun yerdesin.\r\n\r\nO, diğerlerinde gördüğü iyiliğin, kötülüğün, güzelliğin, çirkinliğin, korkunun, sevginin, zenginliğin, fakirliğin bastırdığı bilincinin derinlerinden gelen kendi yansıması olduğunu anlamıştı. O, tüm yansımalarını sahiplenerek, kendisinin bu dünyada en iyi versiyonunu oluşturacağına dair söz vermişti. O, kendi bilincini dünyaya yansıttığını anlayıp, karanlık dünyasını aydınlatmayı seçmişti. O, giderek içinde daha da büyüyen yalnızlık hissinden ve dinmek bilmeyen sessiz çığlıklarından özgürleşmişti. O, bundan sonraki yaşamını, her şeyde Yaradan’ın aşkını hissederek, tutkuyla ve tereddüt etmeden istediği gibi yaşamaya adamıştı. O, kendisindeki kötülüğü, diğerindeki iyiliği kabul ederek içindeki savaşı durdurabileceğini anlamıştı. O, ışığına ve gölgesine sahip çıkabilecek kadar yürekliydi! O, öfkesinin öfkelendiği kişiden çok kendisine zarar verdiğini kavramıştı. O, önce içindeki sonra da tüm dünyadaki savaşı durduracağına inandığı bu kitaptaki bilgileri yaymaya kendisini adamıştı! Ve içimizden biri olan “O”, aslında hepimizin birer yansımasıydı!\r\n\r\nBilinçsizce merak ettiği değil, bilinçli farkındalıkla olmak istediği kişiye dönüşme cesareti gösteren tüm yüreklere...', 9786053112129, 'https://i.dr.com.tr/cache/500x400-0/originals/0001687399001-1.jpg'),
(21, 'Death Note - Ölüm Defteri 1', 'çizgi roman', 'Tsugumi Ooba', 200, '2011', 'Türkçe', '21.00', 'Japon çizgi romanlarına verilen isim olan Manga, dünyada bir çılgınlık halini almıştır. Death Note (Ölüm Defteri) yayınladığı bütün ülkelerde satış rekorları kıran ve geniş bir hayran kitlesine sahip en önemli manga serilerinden biridir.\r\n\r\nBu deftere adı yazılanlar ölür… Ölüm Tanrısı Şinigami Ryuk\'un insanoğlu dünyasına düşürdüğü defter: DEATH NOTE (ÖLÜM DEFTERİ).\r\n\r\nBu doğaüstü defteri bulan ve dünyadaki cani suçluları ortadan kaldırmak için kullanmaya karar veren Light Yagami (nam-ı diğer Kira) ile kimsenin çözemediği olaylarda polise yardım eden L adlı gizemli detektif arasındaki muhteşem mücadele böyle başlar.\r\n\r\nLight Yagami bu deftere ismini yazdığı ve yüzünü bildiği herkesin öleceğini keşfeder. Önceleri defteri kuşkuyla kullanmaya başlayan Light, ismini yazdığı insanların hayatlarının kendisinin belirlediği ölüm şekliyle son bulduğunu görür. Her geçen gün defterin yeni yeni özelliklerini öğrendikçe hayalindeki dünyayı yaratabilmek için defteri kullanmaya başlayarak adalet mekanizmasının yeterince cezalandıramadığı azılı suçluları öldürmeye karar verir. Suçlular gizemli bir şekilde ve peş peşe ölmeye başlayınca durum polisin dikkatini çeker ve dünyadaki birçok gizemli olayı çözmekle görevlendirilmiş olan \"L\" adlı dedektif, konuyu araştırmak üzere polisin yardımına koşar.\r\n', 9786055381028, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000377210-1.jpg'),
(22, 'Seraph Of The End-Kıyamet Meleği 2', 'çizgi roman', 'Takaya Kagami, Daisuke Furuye', 200, '2017', 'Türkçe', '20.45', 'Gizemli bir virüs dünyaya yayıldı ve 13 yaşın üzerindeki herkesin ölümüne neden oldu. Vampirler karanlık köşelerinden çıktılar ve hayatta kalan çocukları yer altının karanlığına mahkûm ettiler. Bu çocuklardan biri olan Yuiçiro vampirlerin elinden kurtulmayı başardı ve Japon İmparatorluğunun vampirlerle savaşan Ay Şeytanları Bölüğüne katıldı.\r\nEğitim almaya başlayan Yuiçiro, insanlığın sahip olduğu en ölümcül ve en güçlü silaha sahip olabilmek için amansız bir teste katılmaya ve kendini ispat etmeye hazırlanıyor. Bütün bunla olup biterken, vampirlerin arasına katılan yeni biri var: Yuiçiro’nun vampirlerin elinden kurtulmaya çalıştıkları gün öldüğünü sandığı en yakın arkadaşı Mikaela!', 9786059479127, 'https://i.dr.com.tr/cache/500x400-0/originals/0001727393001-1.jpg'),
(23, 'Seraph of the End-Kıyamet Meleği Cilt 1', 'çizgi roman', 'Takaya Kagami', 200, '2017', 'Türkçe', '20.45', 'Arkadaşlarının fedakârlığı sayesinde vampirlerin elinden kurtulan Yuiçiro’yu bekleyen büyük sürprizler var. Yuiçiro vampirlerden intikamını almak istiyor ancak insanlardan yedi kat daha güçlü olan vampirleri dize getirmek, onun için belki de asla gerçekleşmeyecek bir rüyadan ibaret olabilir.', 9786059479110, 'https://i.dr.com.tr/cache/500x400-0/originals/0001719167001-1.jpg'),
(24, 'Death Note - Ölüm Defteri 2', 'çizgi roman', 'Tsugumi Ooba', 100, '2011', 'Türkçe', '21.00', 'Japon çizgi romanlarına verilen isim olan Manga, dünyada bir çılgınlık halini almıştır. Death Note (Ölüm Defteri) yayınladığı bütün ülkelerde satış rekorları kıran ve geniş bir hayran kitlesine sahip en önemli manga serilerinden biridir.\r\n\r\nBu deftere adı yazılanlar ölür… Ölüm Tanrısı Şinigami Ryuk\'un insanoğlu dünyasına düşürdüğü defter: DEATH NOTE (ÖLÜM DEFTERİ).\r\n\r\nBu doğaüstü defteri bulan ve dünyadaki cani suçluları ortadan kaldırmak için kullanmaya karar veren Light Yagami (nam-ı diğer Kira) ile kimsenin çözemediği olaylarda polise yardım eden L adlı gizemli detektif arasındaki muhteşem mücadele böyle başlar.\r\n\r\nPeşindeki FBI ajanının adını öğrenmeyi başaran Light, yaptıklarının adaleti sağladığına olan kesin inancıyla bu olayı araştırmak için gönderilen ajanların tamamını öldürür; bu şekilde FBI\'ı bu meselede devre dışı bırakacağını düşünür. Fakat en ince ayrıntısına kadar düşünülmüş bir plan bile arkasında bazı izler bırakır. Light\'ın peşindeki L nihayet ortaya çıkarak Kira\'nın çevresine ördüğü ağı gittikçe daraltır. Böylece iki dahinin müthiş mücadelesi iyice şiddetlenir. Ve Light şimdi hem L hem polis hem de cesur nişanlıyla uğraşmak zorundadır…', 9786055381035, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000377211-1.jpg'),
(25, 'Avatar: The Last Airbender - Verilen Söz', 'çizgi roman', 'Gene Luen Yang', 240, '2020', 'Türkçe', '51.00', 'Aang ile arkadaşları, Ateş Ulusu’yla karşı karşıya gelmeleriyle başlayan heyecan verici yeni bir macerada tekrar buluşuyor !\r\n\r\nAteş Ulusu kolonilerini Toprak Krallığı’ndaki evlerini terk etmeye zorlayan bir plan, Ateş Lordu Zuko ile Toprak Kralı Kuei’yi savaşın eşiğine getirmiştir. Aang’le Katara iki ulus arasında barış sağlanması için yorulmak nedir bilmeden çalışırken, Sokka da Toph’a, okulundaki öğrencileri, rakip\r\nateş bükücüler sınıfı karşısında kendilerini savunmaya yardım etmektedir! Aang barışı vaktinde getirmeyi başarabilecek mi, yoksa Zuko’yla olan dostluğu mahvolup, dünya yeniden savaşa mı sürüklenecek?\r\nEisner ödüllü ve National Book Award adayı Gene Luen Yang’ın (American Born Chinese), Avatar’ın yaratıcıları Bryan Konietzko\r\nve Michael Dante DiMartino ile işbirliği içinde kaleme aldığı ve çizimleri, sanat ekibi Gurihiru (Captain America: Fighting Avenger) tarafından gerçekleştirilen bu çalışma, Avatar’ın bugüne kadarki en harika macerası! Bu ihtişamlı cilt, New York Times’ın çok satanları arasında bulunan Verilen Söz’ün üç bölümünün yanı sıra, Daha önce görülmemiş çizimlerin yer aldığı kapsamlı bir eskiz defterini bir araya getiriyor.', 9789757938668, 'https://i.dr.com.tr/cache/500x400-0/originals/0001897611001-1.jpg'),
(26, 'Squid Game', 'roman', 'Park Min Joon', 160, '2021', 'Türkçe', '26.60', 'Gırtlağına kadar borca, belaya ve pisliğe bulaşmış olan 456 kişi, gizemli bir organizasyon tarafından özenle seçilir. Bu organizasyon onlara hayatlarını kurtarmak için son bir şans teklif eder, bu şans aynı zamanda ölümcül sonuçlara yol açacak tuzakları da içinde barındırır.\r\nİçinde bulunduğumuz sistemi derinine sorgulatan Kalamar Oyunu (Squid Game) son günlerin popular teması Battle Royale ve Manga gezegeninin bileşenlerini bir araya toplayarak dünya çapında çok büyük bir başarı yakaladı ve dikkatleri üzerine çekti.\r\nK-Dünyası, dizinin geleceği, dizideki karakterler, oyunlar ve gözden kaçırdığınız tüm detayları bu kitapta bulabilirsiniz.\r\nSquid Game ile ilgili konuşulacak çok şey var ve bu kitap sadece bir başlangıç…\r\nArtık Numara 457’siniz ve oyuna dahilsiniz…', 9786052245286, 'https://i.dr.com.tr/cache/500x400-0/originals/0001955978001-1.jpg'),
(27, 'Kendisinin Efendisi Olmayan Hiç Kimse Özgür Değildir', 'Felsefe', 'Aslı Perker', 88, '2019', 'Türkçe', '11.00', '“Güneşin, ayın, yıldızların, yerin ve denizin tadını çıkaran kişi ne yalnızdır ne de çaresiz.”\r\n\r\nFrigyalı bir köle olarak doğduğu hayatı, stoacı bir filozof olarak tamamlayan Epiktetos\'un sadelik, akıl, güven, seçme özgürlüğü, an\'ı yaşama ve huzur üzerine inşa ettiği basit ama köklü felsefesi, günümüz insanının anlam arayışına iki bin yıl öncesinden ışık tutmaya devam ediyor hâlâ....', 9786053115878, 'https://i.dr.com.tr/cache/500x400-0/originals/0001830461001-1.jpg'),
(28, 'Jeff Bezos: Sıfırdan Zirveye', 'Felsefe', 'Jeff Bezos', 160, '2021', 'Türkçe', '11.00', 'Sıfırdan Zirveye’de, ufacık bir odadan kitap satışı yapan Amazon adlı mütevazı bir şirketin, dünyanın en değerli şirketlerinden biri haline nasıl geldiğini; her şeye sıfırdan başlayan Jeff Bezos’un nasıl dünyanın en zengin insanına dönüştüğünü Bezos’un kendi sözleriyle öğreneceksiniz. Jeff Bezos’un iş dünyasına ve hayata dair söyledikleri, size yepyeni bakış açıları kazandıracak.', 9786257864190, 'https://i.dr.com.tr/cache/500x400-0/originals/0001932650001-1.jpg'),
(29, 'Var mısın ki Yok Olmaktan Korkuyorsun?', 'Felsefe', 'Mesud Topal', 120, ' 2020', 'Türkçe', '11.00', '“Düşünmek ruhun kendi kendiyle konuşmasıdır...”\r\n\r\nTürk bir ailenin çocuğu olarak bin yüz elli yıl önce dünyaya gelen ve hayatı boyunca müzik, felsefe, botanik, matematik ve mantık alanında sayısız eserler kaleme alan Farabi, ilim ve düşün dünyasında “öğretmen” kabul edilen Aristoteles’ten sonra “ikinci öğretmen” kabul edilmiştir.\r\n\r\nSadece filozofları değil, sayısız bilimadamını da derinden etkilemiş, akımların ve icatların ilham kaynağı olmuştur.\r\n\r\nVarlıklı bir ailenin ferdi olarak saraya yakın olmasına rağmen siyasi iradeyi tamamen reddedip kendini ilme adamıştır. Günde yalnızca bir öğün yemekle hayatını sürdüren Farabi, zamanının her saniyesini ilimle geçirmeye gayret göstermiştir.\r\n\r\nÇünkü Farabi’ye göre insan ilmi aramakla mükelleftir. İlmi bulmak, onu öğrenmek ve onu anlatmak zorundadır.\r\n\r\nİlim Çin’de bile olsa kalkıp peşine düşmek gerekir. İnsan ilim için yaşamıyorsa ıstırap içinde, anlamsız ve mutsuz bir ömür geçiriyordur. Çağımız insanının anlamlı ve anlamsız gayretleriyle yüzleşmesi ve yeniden bir yaşam kurgusu inşa etmesi açısından Farabi’nin ilham dolu hayatı ve çalışmaları örnek alınacak niteliktedir.', 9786053117728, 'https://i.dr.com.tr/cache/500x400-0/originals/0001868909001-1.jpg'),
(30, 'Hiç Kimse Görmek İstemeyen Biri Kadar Kör Olamaz-İbni Sina', 'Felsefe', 'Hikmet Anıl Öztekin', 128, '2020', 'Türkçe', '11.00', 'İbni Sina ya da dünyanın tanıdığı isimle Avicenna...\r\n\r\n11. yüzyılda insanlığın cevap aradığı sorulara pozitif bilimci yaklaşımla karşılık vermiş bir felsefeci, eşsiz bir hekim, astronom, matematikçi ve fizikçi.\r\n\r\nHayatı boyunca sorular sormuş, “neden”lerin peşinden gitmiş, çok okumuş, çok araştırmış, çok incelemeler yapmış bir insanlık incisidir İbni Sina.\r\n\r\nİnsanlığın emekleme döneminde, taassubun karanlığına düşmeden, akıl ile bilimin ışığında yürüyen tarihin bu en büyük hekimi, başta Müslüman ve Avrupalı felsefeciler olmak üzere, Da Vinci’den Aziz Thomas’a kadar birçok düşünürü ve sanatçıyı da etkilemiştir.\r\n\r\nOnun portresi, bugün dünyanın en saygın okullarının duvarlarını, düşünceleri ise en aydınlık beyinleri süslüyor.', 9786053118886, 'https://i.dr.com.tr/cache/500x400-0/originals/0001875825001-1.jpg'),
(31, 'Dil Söyler Kulak Dinler Kalp Söyler Kainat Dinler-Aşkı Bulmanın Felsefesi', 'Felsefe', 'Taner Şanlıoğlu', 104, '2020', 'Türkçe', '11.00', '“Ölen\r\n\r\nbeden imiş\r\n\r\nâşıklar ölmez...”\r\n\r\nTürkçe şiirin öncüsü olarak tarihte ölümsüzleşen bir tasavvuf ve halk şairidir Yunus Emre...\r\n\r\nTekke şiiri geleneğini özgün bir söyleyişle Anadolu’ya yaymış bir gönül işçisidir. Aynı zamanda bir felsefenin de temsilcisidir. İnsanın nesneyle ve varoluşla ilişkisini dizelerinde ustalıkla işlemiştir.\r\n\r\nVar olmanın, hakikate ulaşmak için aklı kullanmanın ve aşka düşüp hiçliğe karışmanın yollarında çok değerli bir rehberdir Yunus Emre...', 9786053118145, 'https://i.dr.com.tr/cache/500x400-0/originals/0001869420001-1.jpg'),
(32, ' Kalbinde İyilik Biriktirenin Yolu Hep Açıktır', 'Felsefe', ' Ferhat Atik', 96, '2020', 'Türkçe', '11.00', '“Ey insan!\r\nKafdağı kadar yüksekte olsan da,\r\nkefene sığacak kadar küçüksün.\r\nUnutma, her şeyin bir hesabı var,\r\nüzdüğün kadar üzülürsün.”\r\n\r\nŞems-i Tebrizi’nin adı, Mevlana Celaleddin-i Rumi ile duyulmuş gibi sanılsa da aslında o, “İslam Dininin Güneşi”dir. Rumi’nin olgunlaşmasını sağlar ve Divan-ı Şems-i Tebrizi olmak üzere pek çok eseri yazmasında ona ilham ve bilgi kaynağı olur.\r\nŞems, Rumi’nin gölgede kalan kısmını aydınlatan cevherdir. Rumi’nin “merhamet okyanusuna” okyanus, “bilgi ummanına” umman katar. Rumi’yi tıkandığı yerden çıkarır, hakikatin göz kamaştırıcı aydınlığı ile kavuşturur.', 9786053118473, 'https://i.dr.com.tr/cache/500x400-0/originals/0001872066001-1.jpg'),
(33, 'Tanrılar Okulu', 'Felsefe', 'Stefano D\'Anna', 474, '2010', 'Türkçe', '55.25', 'İtalyan asıllı yazar ve modern çağ filozofu Prof. Stefano D’Anna, Tanrılar Okulu kitabı ile insanın kendi yaşamına dair devrim niteliğinde bir bakış açısı ortaya koyuyor. Eserinde bireyin hayata bir edilgen değil, tüm iyi ve kötü etkenlerin faili olarak bakması gerektiğini vurgulayan yazar, hikayeleştirme tekniği ile bunu oldukça etkileyici bir şekilde aktarıyor.\r\n\r\nOkurlarıyla ilk kez buluştuğu 2002 yılından günümüze dünya çapında büyük bir beğeni toplayan kitap, felsefi öğretisinin yanı sıra kişisel gelişim alanında da eşsiz bir rehber niteliği taşıyor. Bu kitabı okurken sadece yazarın yaşamında değil, kendi iç dünyanızda da el değmemiş derinliklere doğru bir yolculuk yapacaksınız.', 9786056105203, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000324077-1.jpg'),
(34, 'Platon - İnsanın Kendini Yenmesi En Büyük Zaferdir', 'Felsefe', 'Taner Şanlıoğlu', 80, '2020', 'Türkçe', '11.00', '\"Sadece bir iyi vardır: Bilgi.\r\n\r\nSadece bir kötü vardır: Cehalet.\"\r\n\r\nİdeal dünyanın en büyük temsilcisi olan Platon\'un günümüze kadar ulaşan eserleri üzerinden açığa çıkarılan 7 temel öğreti, yaşamın türlü zorluklarıyla başa çıkmak zorunda kalan modern insana uzun süre önce unutmuş olduğu bilgeliği tekrar hatırlatıyor. İyinin, doğrunun, ahlakın ve insanın tanımını hakikate en yakın şekliyle açıklayan Platon, binlerce yıl öncesinde kurmuş olduğu bilgelik okulu Akademi\'de, bizleri hâlâ öğrencisi olarak ağırlamaya devam ediyor.', 9786053119340, 'https://i.dr.com.tr/cache/500x400-0/originals/0001884100001-1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kupon`
--

CREATE TABLE `kupon` (
  `kup_id` int(11) NOT NULL,
  `kuponkod` varchar(20) NOT NULL,
  `indirimtutar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kupon`
--

INSERT INTO `kupon` (`kup_id`, `kuponkod`, `indirimtutar`) VALUES
(1, 'kitapiste15', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `adet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `id`, `adet`) VALUES
(82, 32, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `y_id` int(11) NOT NULL,
  `k_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `yorum` varchar(500) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`y_id`, `k_id`, `vote`, `yorum`, `ad`, `mail`) VALUES
(2, 32, 0, 'Kesinlikle tavsiye ediyorum. Yaşantınız da sizlere öncülük edecek bir eser ve tamamen akıcı anlatımıyla okuru mest eden bir eser. Ferhat Atik’in ellerine sağlık', 'feride', 'feride@gmail.com'),
(4, 1, 1, 'bu kitap kaldırılmalı!', 'yusuf', 'yusuf@gmail.com'),
(25, 28, 2, 'vote 2', 'feride', 'feride@gmail.com'),
(26, 28, 4, 'vote 4', 'fe', 'feride@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisimform`
--
ALTER TABLE `iletisimform`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `katagoriler`
--
ALTER TABLE `katagoriler`
  ADD PRIMARY KEY (`kat_id`);

--
-- Tablo için indeksler `kitap`
--
ALTER TABLE `kitap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kupon`
--
ALTER TABLE `kupon`
  ADD PRIMARY KEY (`kup_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`y_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimform`
--
ALTER TABLE `iletisimform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `katagoriler`
--
ALTER TABLE `katagoriler`
  MODIFY `kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kitap`
--
ALTER TABLE `kitap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `kupon`
--
ALTER TABLE `kupon`
  MODIFY `kup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `y_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
