-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 27, 2019 at 08:21 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Pastania`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_store`
--

CREATE TABLE `delivery_store` (
  `sid` int(1) DEFAULT NULL,
  `postcode` int(3) DEFAULT NULL,
  `sub_postcode` int(2) DEFAULT NULL,
  `city` varchar(3) DEFAULT NULL,
  `district` varchar(3) DEFAULT NULL,
  `area` varchar(3) DEFAULT NULL,
  `store_no` int(6) DEFAULT NULL,
  `store_id` varchar(5) DEFAULT NULL,
  `address` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_store`
--

INSERT INTO `delivery_store` (`sid`, `postcode`, `sub_postcode`, `city`, `district`, `area`, `store_no`, `store_id`, `address`) VALUES
(1, 406, 46, '台中市', '北屯區', '松竹里', 991942, '崇尚門市', '台中市北屯區崇德路二段450號1樓'),
(2, 406, 46, '台中市', '北屯區', '松竹里', 136886, '鑫巴黎門市', '40646 台中市北屯區崇德路二段119號1樓');

-- --------------------------------------------------------

--
-- Table structure for table `giftbox`
--

CREATE TABLE `giftbox` (
  `sid` int(1) DEFAULT NULL,
  `Image` varchar(7) DEFAULT NULL,
  `Name_En` varchar(42) DEFAULT NULL,
  `Name_Ch` varchar(14) DEFAULT NULL,
  `Price` int(3) DEFAULT NULL,
  `Weight` varchar(5) DEFAULT NULL,
  `productinfo_sid` int(2) DEFAULT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `sauce_sid` int(1) DEFAULT NULL,
  `recipe_sid` int(2) DEFAULT NULL,
  `cook_time` varchar(5) DEFAULT NULL,
  `length` varchar(10) DEFAULT NULL,
  `diameter` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giftbox`
--

INSERT INTO `giftbox` (`sid`, `Image`, `Name_En`, `Name_Ch`, `Price`, `Weight`, `productinfo_sid`, `Description`, `sauce_sid`, `recipe_sid`, `cook_time`, `length`, `diameter`) VALUES
(1, 'gift_01', 'Puttanesca sauce with Torchio P°16 ', '煙花女醬與火炬麵 ', 260, '1000g', 42, '蛋香火炬麵搭配辛辣煙花女醬，散發交響滋味，值得一再品嚐。', 2, 11, '10', 'N/A', 'N/A'),
(2, 'gift_02', 'Genovese sauce with Troffiette P°14 ', '熱那亞醬青醬與特飛麵 ', 350, '1000g', 40, '香氣濃郁的特飛麵，配上傳統熱那亞醬青醬，交織成令人難忘的經典美味。', 3, 35, '12-15', '40mm', '5.5mm'),
(3, 'gift_03', 'Walnut sauce with Corzetti P°8  ', '核桃醬與壓花圓麵', 380, '1000g', 34, '散發濃郁香氣的核桃醬搭配Q彈趣味圖騰壓花圓麵，令人意猶未盡的美味，是到溫暖人心的美味佳餚。', 4, 16, '8', '60mm', '1.5mm'),
(4, 'gift_04', 'Salsa Verde with Capellini L°9', '道地義大利青醬與義大利細髮麵', 300, '1000g', 9, '道地義大利青醬與具代表性的義大利圓直麵均勻攪拌後，每一口都能感受到清爽香料味，', 6, 35, '10', '30cm', '2.5mm'),
(5, 'gift_05', 'all’Amatriciana sauce with Penne Lisce S°1', '辣味蕃茄醬與斜管麵', 250, '1000g', 50, '特殊中空吸管麵，有效鎖住帶有辣味和鹹香肉味的香辣紅醬，迸發出多層次口感。', 8, 34, '11', '7cm', '3mm'),
(6, 'gift_06', 'Ragù Napoletano with Ziti Tagliati S°22', '拿坡里番茄醬與水管麵', 270, '1000g', 71, '讓人開胃的拿坡里番茄醬與中空造型的吸管麵搭配，儼然是到必吃的義式美味。 ', 7, 43, '8', '10cm', '5mm');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `postcode` varchar(5) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `mobile`, `postcode`, `city`, `address`, `birthday`, `hash`, `activated`, `nickname`, `create_at`) VALUES
(4, '111@hhh.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '崇德路二段', NULL, 'bb74437228ba50f15b272175845a273026aa9517', 0, 'wer', '2019-01-22 21:32:22'),
(5, '123@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '90adde4ff622bf7ab8850915e8ccde61220e86e6', 0, '1234', '2019-01-23 00:21:29'),
(6, '12345@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '29fdd6ff156f7e847aab60530d65fcdab33cc148', 0, '1234', '2019-01-23 00:24:59'),
(7, '12@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, 'ea52cbb8d94a71b356f408772c8e1b70b645267f', 0, '1234', '2019-01-23 00:43:28'),
(8, '2@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '7efb3826c53530f722444c975c849c334db22ecb', 0, '1234', '2019-01-23 00:44:46'),
(9, '1@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '29406a850733db8dd1becf72c247b50aa95ee046', 0, '1234', '2019-01-23 00:45:06'),
(10, '4@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, 'c0c440160babdf07decce2634a2b933961cc3b80', 0, '1234', '2019-01-23 00:48:02'),
(11, '6@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, 'eb203e92e0ebc850100ae0286b258d49b7c638fa', 0, '1234', '2019-01-23 00:50:10'),
(12, '8@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '1fffa584e83d915258f34ba21a4a942d44a58a48', 0, '1234', '2019-01-23 00:50:54'),
(13, '7@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '134047ee82b77fe70c9a323e09479e8261d65970', 0, '1234', '2019-01-23 00:51:40'),
(14, '9@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '崇德路二段', NULL, '944914aeb0ae050d1f39d26ba4a387b0adbe355c', 0, '1234', '2019-01-23 00:52:29'),
(15, '444@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, '69a8140a34d78c771003fe17e82c1a57313cc6c4', 0, '1234', '2019-01-23 00:53:39'),
(16, '33@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, 'e58c8f6c08eaae7da9b6796b35912ed86ed27baf', 0, '1234', '2019-01-23 00:54:44'),
(17, '23@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, 'f9eb5827e24ab93645a8b418ea44b5f9428f4487', 0, '1234', '2019-01-23 00:56:57'),
(18, '55@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123444', NULL, '4a70cb37ce9ee8103e93cabee239ab0d605ffe47', 0, '1234', '2019-01-23 00:59:02'),
(19, '66@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '12', NULL, '95d92487cc78f2a8c4f6cf420ada0b37580a52ab', 0, '1234', '2019-01-23 00:59:38'),
(20, '77@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234567', NULL, 'e190af052b57a3d1e4c32d22ff87ace389567372', 0, '1234', '2019-01-23 01:00:39'),
(21, '999@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1', NULL, '08de797847d3b9657294ad7a8657fd651039cce8', 0, '123', '2019-01-23 01:02:46'),
(22, '12222222@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1', NULL, '4dbdb5cf41e040f4540de83e28368b5933a49c25', 0, '21', '2019-01-23 10:22:05'),
(23, '1345@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1', NULL, '172b69bc7e17dbb397ae02a24f64a7ab7850c6c0', 0, '123', '2019-01-23 14:46:41'),
(24, '123456@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123', NULL, '9a38fa3bd4d1f8dc67212512b12f55afdc93a682', 0, '123', '2019-01-23 15:23:35'),
(25, '123456566@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1', NULL, '91d82a4e7382d89431af84594c89d42a0b507506', 0, '123', '2019-01-23 15:28:16'),
(26, '888@hor.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '12', NULL, '82b566c8344312b96c69399f78cd946ea0d711c0', 0, '12', '2019-01-23 16:40:13'),
(27, '00000@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1234', NULL, 'a871dcb1fdd5f92a5e85974dbb948d94c36456ed', 0, '12', '2019-01-23 16:41:13'),
(28, '22233@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123', NULL, '53cd26dea9c4a48016032882f57d5a2c565d2caa', 0, '123', '2019-01-23 16:41:53'),
(29, '777777@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123', NULL, 'a0d65de525ced06a63f7a2ecbc5f399bcca4bb6d', 0, '123', '2019-01-23 16:42:31'),
(30, '55555@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123', NULL, '13e45a979b0a9d7cd3e620927112cae101338e09', 0, '23423', '2019-01-23 16:42:58'),
(31, '1234666666@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123', NULL, '95a2825ed475c0738839d2097d120a4401edaedc', 0, '123', '2019-01-23 16:43:41'),
(32, '12322222@jpt.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '123', NULL, 'bab5de993cd089dedce2bd4becda51f0da8d6add', 0, '123', '2019-01-23 21:44:25'),
(33, '22020@hotmail.xom', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, '1', NULL, '3167c9b8f0662cdfd4a82f1509fc2cce50d59613', 0, 'w2234', '2019-01-26 17:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `mobile` int(11) DEFAULT NULL,
  `delivery_way` int(11) DEFAULT NULL,
  `delivery_time` int(11) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `sid` int(11) NOT NULL,
  `order_sid` int(11) NOT NULL,
  `product_sid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pasta_map`
--

CREATE TABLE `pasta_map` (
  `No.` int(2) DEFAULT NULL,
  `Image` varchar(17) DEFAULT NULL,
  `Area` varchar(5) DEFAULT NULL,
  `District_En` varchar(21) DEFAULT NULL,
  `District_Ch` varchar(11) DEFAULT NULL,
  `Recipe_no` int(2) DEFAULT NULL,
  `Recipe_name_En` varchar(43) DEFAULT NULL,
  `Recipe_name_Ch` varchar(13) DEFAULT NULL,
  `Description` varchar(366) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasta_map`
--

INSERT INTO `pasta_map` (`No.`, `Image`, `Area`, `District_En`, `District_Ch`, `Recipe_no`, `Recipe_name_En`, `Recipe_name_Ch`, `Description`) VALUES
(1, '52_light_SWPC', 'north', 'Trentino-Alto Adige', '特倫提諾-上阿迪傑大區', 52, 'Spinach with Parmesan Cheese Spaghetti', '菠菜帕瑪森起司義大利麵', '特倫提諾-阿迪傑區鄰近阿爾卑斯山脈，能夠欣賞到美麗的山景，另外還有純樸的鄉村景色，經常可看見大小約五公頃的小型釀酒酒莊，產出的葡萄酒品質相當優良。\n這裡的飲食簡單自然，喜歡以蔬菜乳製品入菜，口味清爽香醇。'),
(2, '53_typical_FCWH', 'north', 'Valle d\'Aosta', '瓦萊達奧斯塔區', 53, 'Fontina Cheese  Spaghetti with Ham', '芳提那起司火腿義大利麵', '瓦萊達奧斯塔地區是義大利一個多山的行政區，這裡有著原產地保護認證的記分起司，口味香醇濃郁，被用於烹飪許多食品。'),
(3, '22_light_AWQTABS', 'north', 'Piemonte', '皮埃蒙特區', 22, 'Agnolotti with Quick Tomato and Basil Sauce', '義大利餃佐番茄與巴西里醬汁', '皮埃蒙特區是一塊農產豐足的地區，盛產小麥、稻米、玉蜀黍及葡萄。\n義大利餃起源於皮埃蒙特，為義大利北部的原始義大利麵食之一。'),
(4, '23_starter_TC', 'north', 'Lombardia', '倫巴底區', 23, 'Tortellini Carbonara', '義大利餛飩佐培根', '義大利六分之一的人口居住在倫巴底區，首府為義大利北部的最大城市米蘭，可以說是充滿美食與文化的繁華地區。'),
(5, '33_typical_BCL', 'east', 'Veneto', '威尼托區', 33, 'Bigoli Con L\'anatra', '鴨肉醬義大利麵', '威尼托區從多洛米蒂山脈延伸至橫跨大海的平原，以及著名的威尼斯島嶼。\n該地區農業的主要產品是菊苣、蘆筍、玉米粥以及加爾達湖周圍的淡橄欖油，而奶產品則有艾斯阿格乾酪，另一方面鱈魚為世界上內廣為人知。'),
(6, '54_typical_FVG', 'east', 'Friuli-Venezia Giulia', '佛里烏利-威尼斯朱利亞', 54, 'Raviolini di Pere Ravioli Pasta with Pear', '起司義大利餃', '佛里烏利-威尼斯朱利亞是義大利的自治區，毗鄰威尼托政區亞得里亞海。\n該地區農業的主要產品是葡萄酒，特別是白葡萄酒為世界上內廣為人知。'),
(7, '55_typical_TAP', 'north', 'Liguria', '利古里亞區', 55, 'Tripoline al Pesto', '青醬義大利麵', 'Pesto源自於pestare這個字，意思是搗碎或粉碎，指的是用研缽和杵製作醬汁的原始方法。\n早期羅勒傳到羅馬帝國之後，只在利古里亞地區與普羅旺斯地區種得好。這兩地的人就把羅勒就拿來代替原本羅馬Moretum醬中的香草，也把原本Moretum醬用的羊奶起司改成當地產的硬起司。熱那亞地區的利古里亞人更進一步在醬中加了松子增添美味。'),
(8, '24_party_LAB', 'east', 'Emilia-Romagna', '艾米利亞-羅馬涅區', 24, 'Lasagne alla Bolognese', '波隆那肉醬千層麵', '艾米利亞-羅馬涅區是義大利最發達的大區之一，亦是義大利著名的美食天堂。\n波隆那肉醬千層麵為該地經典的義式美食，為著名卡通明星加菲貓的最愛。'),
(9, '56_typical_PWOR', 'east', 'Toscana', '托斯卡尼', 56, 'Pici with Old Ragù', '經典義式肉醬烏龍麵', '義式手工圓麵Pici是義大利特有的手做麵條，發源於托斯卡納西恩納地區，口感飽滿有嚼勁；Ragù則是傳統搭配義大利麵的特製肉醬，搭配起來就是義大利原味！\n本地的熟酪及網烤肉類深受喜愛，托斯卡人對豆類獨具品味，最知名的是鼠尾草與橄欖油煮白豆。\n托斯卡人也喜愛濃湯其它較受歡迎的菜餚還有佛羅倫斯牛排及烤或酒燉野豬、鹿與兔等野味，通常以當地生產聞名於世的香堤酒來清洗野味。'),
(10, '25_typical_BTP', 'west', 'Umbria', '溫布利亞區', 25, 'Spaghetti with Truffle', '松露義大利麵', '溫布利亞，盛產橄欖、豆類、穀物和黑白松露，全區植被豐富常青，自然環境優美，素有義大利的綠色心臟之稱。\n松露為該地特產，也順理成章的成為該地國民美食，義大利麵的重要搭檔。'),
(11, '57_occasion_V', 'east', 'Marche', '馬凱區', 57, 'Vincisgrassi', '馬凱千層麵', '馬凱區位於亞得里亞海岸，自然是吃海鮮的好地方，馬爾凱人的日常生活中也少不了肉食，從鴿子到羊肉，他們無所不吃。\n鮮蛋意麵和烤箱烘焙的麵食在這里大受歡迎，馬凱千層麵是經典的傳統義大利麵食，面條軟滑可口，散發著白葡萄酒的清香，裡面點綴著牛肉、蔬菜和野生菇等。'),
(12, '58_typical_C', 'west', 'Lazio', '拉吉歐區', 58, 'Carbonara', '義式培根蛋麵', '義式培根蛋麵Carbonara是一道起源於義大利語“木炭”的羅馬美食。其來源眾說紛紜，最有可能的三種為：\n據說當時制炭師傅休息時吃的義大利麵上都有從手上不小心撒下的小炭灰，后來餐廳就順勢推出這種上頭撒著黑胡椒，其名為「炭燒職人風味」的義大利麵，也就是Carbonara。\n由於燒制木炭的地點都離城市有段距離以及屬於重勞動工作，因此在食材上就會選擇易攜帶、便宜、不易壞能補充體力的食物，如義大利麵、雞蛋、鹽漬豬肉(或煙熏培根)、起司以及黑胡椒，用這些材料做出來就是Carbonara。\n19世紀時，法國大革命帶來的暴風雨席卷了整個歐洲，當時的義大利有個叫\"燒炭黨carbon\"的政治團體也企圖利用這股風潮來引發革命，但結果以失敗告終，后來在逃亡的過程中「燒炭黨」的某個中心人物也就這樣剛好的發明了這款名為Carbonara的義大利麵。'),
(13, '59_party_AF', 'west', 'Abruzzo', '阿布魯佐區', 59, 'Linguine with Saffron Lamb Sauce', '從寬扁麵麵佐番紅花羊肉醬', '阿布魯佐區以下列食材而聞名：\n藏紅花、橄欖油、甘草、羊肉、羊奶起司、松露和蘑菇、紅蒜、迷迭香、熱辣椒以及蔬菜。'),
(14, '60_occasion_CCRDM', 'west', 'Molise', '莫利塞區', 60, 'Cavatelli with Pork Ragout', '燉肉扭指麵', '莫利塞是一個小而美麗的地區，以其義大利麵和特級初榨橄欖油而聞名。\n盛產葡萄酒、穀物、橄欖油、蔬菜、水果和乳製品。'),
(15, '61_typical_SAS', 'south', 'Campania', '坎帕尼亞區', 61, 'Spaghetti allo Scoglio', '海鮮義大利麵', '坎帕尼亞區屬於地中海型氣候，春夏乾爽宜人，降雨季節多在秋冬，適合各式各樣的作物生長，由於地理位子鄰近海，海鮮也是數一數二的。'),
(16, '51_typical_AWBS', 'south', 'Puglia', '普利亞區', 51, 'Anchovy with Broccoli Sauce', '鯷魚青花椰菜義大利麵', '普利亞區處於義大利靴型地圖的鞋跟位置，這裡陽光充足，非常適合種植，所以擁有品種豐富的蔬菜，在這裡的蠶豆、青花椰菜、茄子、燈籠椒都可以被製作成義大利麵。'),
(17, '62_party_B', 'south', 'Basilicata', '巴西利卡塔區', 62, 'Strascinati con Mollica e Peperoni Cruschi', '橄欖油炒紅椒乾義大利麵', '巴西利卡塔區在農業方面以栽種小麥、土豆為主，另亦有畜養牛隻。'),
(18, '63_occasion_C', 'south', 'Calabria', '卡拉布里亞區', 63, 'Fresh Tomato Anchovy Pasta', '鮮茄鯷魚義大利麵', '鯷魚和碎麵包塊為卡拉布里亞區名產，聖誕節時經常食用。'),
(19, '64_light_PAN', 'south', 'Sicilia', '西西里島', 64, 'Pasta Alla Norma', '西西里茄香諾瑪麻花麵', '西西里盛產茄子、番茄、酸豆、葡萄乾、松子。'),
(20, '65_occasion_SC', 'west', 'Sardegna', '薩丁尼亞島', 65, 'Sardinian Culurgiones', '薩丁尼亞餃', '薩丁尼亞島是一個多山的島嶼，周圍環繞著地中海的翡翠海域，擁有獨特的自有的文化。\n因為地理條件，鮪魚和烏魚的菜餚在薩丁尼亞島很常見。\n羊奶起士幾乎被使用在薩丁尼亞島的每一餐菜餚。');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `sid` int(3) DEFAULT NULL,
  `Image_large` varchar(28) DEFAULT NULL,
  `Image_small` varchar(29) DEFAULT NULL,
  `image_bgs` varchar(31) DEFAULT NULL,
  `productlist_sid` int(1) DEFAULT NULL,
  `product_no` varchar(4) DEFAULT NULL,
  `Name_En` varchar(24) DEFAULT NULL,
  `Name_Ch` varchar(8) DEFAULT NULL,
  `Price` int(3) DEFAULT NULL,
  `Serve` int(2) DEFAULT NULL,
  `Description` varchar(162) DEFAULT NULL,
  `Cook_time` varchar(5) DEFAULT NULL,
  `Length` varchar(6) DEFAULT NULL,
  `Diameter` varchar(6) DEFAULT NULL,
  `Recipe_sid` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`sid`, `Image_large`, `Image_small`, `image_bgs`, `productlist_sid`, `product_no`, `Name_En`, `Name_Ch`, `Price`, `Serve`, `Description`, `Cook_time`, `Length`, `Diameter`, `Recipe_sid`) VALUES
(1, 'L1_Bigoli', 'L1_Bigoli_s', 'L1_Bigoli_bgs', 0, 'L°1', 'Bigoli', '威尼斯經典圓粗麵', 100, 10, 'Bigoli原本是一道天主教徒在齋戒時的料理，但現在是義大利人一年四季都會吃的經典義大利麵，形狀比一般義大利直麵粗長，使用全麥麵粉再加入鴨蛋製成獨特風味有著樸實的口感，其粗糙不平的表面使它更能吸附醬汁。', '8', '25cm', '2.5mm', 32),
(2, 'L2_Bucatini', 'L2_Bucatini_s', 'L2_Bucatini_bgs', 0, 'L°2', 'Bucatini', '吸管麵', 80, 10, '中空的長圓條直麵是羅馬常見的麵型，取名自義大利文Buco，帶有「孔洞」的義思，早期人們是以桿平的麵皮包覆竹籤，讓麵皮中間形成孔洞，外形如吸管一般，方便醬汁夾藏在孔洞中，藉此豐富義大利麵料理的味道層次，口感也非常有彈性，也增加了咀嚼的樂趣。', '11', '30cm', '3mm', 34),
(3, 'L3_Matriciani', 'L3_Matriciani_s', 'L3_Matriciani_bgs', 0, 'L°3', 'Matriciani', '牧羊人麵 ', 80, 10, '傳說這道麵食是幾世紀前由義大利中部的牧羊人所發明，隨後牧羊人麵在傳入羅馬地區逐漸在當地流行開來，成為一道經典羅馬料理，形體較粗且硬的口感讓人有飽足感。', '8', '25cm', '2.5mm', 33),
(4, 'L4_Fedelini', 'L4_Fedelini_s', 'L4_Fedelini_bgs', 0, 'L°4', 'Fedelini', '義大利細麵', 80, 10, 'Fedelini起源於14世紀初，麵條非常細薄，使之與一般與義大利麵區別開來，傳統以奶油為基底的醬汁為搭配 。', '8', '30cm', '1.4mm', 36),
(5, 'L5_Fusilli', 'L5_Fusilli_s', 'L5_Fusilli_bgs', 0, 'L°5', 'Fusilli', '雙螺旋麵', 89, 10, 'Fusilli的雙螺旋形狀以及鬆韌口感能輕鬆留住醬汁，傳統搭配螺旋麵的佐料是小蕃茄、莫札瑞拉起司、羅勒和橄欖油 。', '8', '40mm', '10mm', 37),
(6, 'L6_Fusilli_Bucati_Corti', 'L6_Fusilli_Bucati_Corti_s', 'L6_Fusilli_Bucati_Corti__bgs', 0, 'L°6', 'Fusilli Bucati Corti ', '螺旋空心麵', 115, 10, '粗糙的表面以及貫穿中心的形狀，讓麵條能有效吸收醬汁味道顯得更為豐富，其蛋白質含量極高，增加了麵條的彈性與韌性，在多樣化性的烹調方式中，依然保持優雅的琥珀色以及吸引人的空心螺旋形狀。', '8', '40mm', '10.5mm', 39),
(7, 'L7_Fusilli_Bucati_Lunghi', 'L7_Fusilli_Bucati_Lunghi_s', 'L7_Fusilli_Bucati_Lunghi_bgs', 0, 'L°7', 'Fusilli Bucati Lunghi', '空心螺旋長麵', 115, 10, '長度近似於義大利直麵的空心螺旋麵，在過去必須用熟練的技巧在編織針周圍快速扭轉一條又一條的義大利麵條，適合與香蒜醬、帕瑪森醬或拿坡里醬搭配使用。', '12', '30cm', '8.5mm', 40),
(8, 'L8_Capelli_dAngelo', 'L8_Capelli_dAngelo_s', 'L8_Capelli_dAngelo_bgs', 0, 'L°8', 'Capelli d‘Angelo', '天使麵', 135, 10, 'Capelli d‘Angelo是最薄的長麵食之一，麵的質地很輕盈，在文藝復興時期，天使麵製作方式極其辛苦，被認為幾乎是不可能製成的形狀，因此被稱為”天使的髮絲“，被視為最頂級的麵食，這對於9個月以上的嬰兒來說是理想的食物，可以幫助他們習慣成年人吃的食物，佐以蕃茄醬、橄欖油和帶著淡香的羅勒葉，是最傳統的調味方法。', '12-15', '15cm', '1.15mm', 41),
(9, 'L9_Capellini', 'L9_Capellini_s', 'L9_Capellini_bgs', 0, 'L°9', 'Capellini', '義大利細髮麵', 115, 5, '義大利細髮麵在義大利文稱為的“細小的頭髮”，比起一般的直圓麵較細些，搭配清淡的醬汁，如橄欖油或是由海鮮製成的醬汁，在許多義大利地區也用細麵來製作湯品。', '10', '30cm', '2.5mm', 11),
(10, 'L10_Maccheroni', 'L10_Maccheroni_s', 'L10_Maccheroni_bgs', 0, 'L°10', 'Maccheroni', '通心麵', 89, 10, 'Maccheroni為一種短而寬，外面有條紋的通心麵， 其內部是空心的，因為它可以更好地吸收伴隨它的醬汁，以蕃茄醬、橄欖油和羅勒葉料理，是最傳統的調味方法。', '10', '40mm', '10mm', 38),
(11, 'L11_Maccheroni_Inferrettati', 'L11_Maccheroni_Inferrettati_s', 'L11_Maccheroni_Inferrettati_bgs', 0, 'L°11', 'Maccheroni Inferrettati ', '通心長條麵 ', 80, 10, '一種長的管狀麵食，利用織針或在薄木棍上滾動一小塊麵團製成， 這種麵食製作技術遍布義大利南部和中心， 以蔬菜熬煮為基底醬汁，加上些許羊肉或豬肉以及義大利羊奶起司調製而成的辛辣肉醬是義大利南部傳統烹煮方式。', '9', '15cm', '5.5mm', 40),
(12, 'L12_Pici', 'L12_Pici_s', 'L12_Pici__bgs', 0, 'L°12', 'Pici', '義式烏龍麵', 70, 10, '粗細不均的義式烏龍麵與吸管麵外形相似，以粗粒麥粉麵團製作，意思是黏的麵條，由粗糧粉和水製成，並額外添加雞蛋以增加麵的彈性 ，各種醬汁都可搭配得宜。', '12', '20cm', '3mm', 33),
(13, 'L13_Spaghetti', 'L13_Spaghetti_s', 'L13_Spaghetti_bgs', 0, 'L°13', 'Spaghetti', '圓直麵', 105, 10, '最流行也最傳統的義大利麵，佔了全世界義大利麵消耗量的三分之二。它的意思是一小段細繩或麻線(spago)，用杜蘭小麥粉與水簡單地製成，傳統上習慣搭配簡單的蕃茄醬汁，但世界各地普遍喜愛肉醬汁。', '8', '25cm', '2.4mm', 9),
(14, 'L14_Spaghettini', 'L14_Spaghettini_s', 'L14_Spaghettini_bgs', 0, 'L°14', 'Spaghettini ', '細直麵', 105, 10, '小一號的圓直麵減少了烹飪時間和咀嚼困難， 這使得細直麵在國外非常受歡迎，因為非常細，所以可以更快煮熟。細直麵適合清爽醬料。', '11', '25cm', '2mm', 36),
(15, 'L15_Spaghettoni', 'L15_Spaghettoni_s', 'L15_Spaghettoni_bgs', 0, 'L°15', 'Spaghettoni ', '長圓麵', 80, 10, '長圓麵的厚度比比圓直麵更寬，這個名字的義思是義大利語中的“繩索長度”，長圓麵比一般圓直麵需要多幾分鐘的烹煮時間，但會給予更豐富的口感。', '8', '25cm', '2.8mm', 34),
(16, 'L16_Vermicelli', 'L16_Vermicelli_s', 'L16_Vermicelli_bgs', 0, 'L°16', 'Vermicelli', '小蟲麵', 145, 10, '其圓形截麵與義大利直麵比較像，\"Vermicelli\"在義大利語中義思是\"小蟲子\"，通常被用來煮湯或是沙拉當作前菜。', '8', '15mm', '0.8mm', 22),
(17, 'L17_Vermicelloni', 'L17_Vermicelloni_s', 'L17_Vermicelloni_bgs', 0, 'L°17', 'Vermicelloni', '蟲蟲麵', 85, 10, '蟲蟲麵比圓直麵略薄， 現在很難找到的原因，這可能與他們的名字有關，它的文學意味著大蟲，聽起來並不是盤子裡開胃的食物，通常搭配豐盛的番茄肉醬。', '8', '30cm', '2.6mm', 11),
(18, 'R1_Mafalde', 'R1_Mafalde_s', 'R1_Mafalde_bgs', 0, 'R°1', 'Mafalde', '小公主麵', 115, 10, '源於南部義大利，乃為慶祝義大利公主誕生製造而成，因此有小公主的別稱，兩側呈波浪紋，可搭配濃郁奶香起司以及辛香料或是野味肉醬。', '8', '25cm', '1.1mm', 33),
(19, 'R2_Tripoline', 'R2_Tripoline_s', 'R2_Tripoline_bgs', 0, 'R°2', 'Tripoline', '花邊闊麵', 115, 8, '一種只帶一邊波浪形邊緣的長絲帶義大利面，它是為紀念那不勒斯的國王艾曼紐二世而創立的，其特殊的形狀義味著捲曲的部分比光滑的部分保留更多的醬汁，一旦煮熟，兩邊具有不同的黏稠度，非常適合用肉類製作義大利麵食，醬料應該包括具明顯風味的醬料，例如用野味和內臟製備的醬汁。', '7', '26cm', '1.1mm', 32),
(20, 'R3_Linguine', 'R3_Linguine_s', 'R3_Linguine_bgs', 0, 'R°3', 'Linguine', '細麵', 105, 10, '由拿坡里流傳到義大利北部港口熱內亞，從義大利直麵開始發展出扁平的麵型，成為世界除了直麵以外，最為有名的義大利麵種，適合與各式醬汁烹煮，也可以搭配蔬菜與海鮮食材，能夠充分展現地中海料理的特殊風味。', '8', '25cm', '1.1mm', 34),
(21, 'R4_Sagnarelli', 'R4_Sagnarelli_s', 'R4_Sagnarelli_bgs', 0, 'R°4', 'Sagnarelli ', '矩形鋸齒麵', 115, 10, 'Sagnarelli 是一種帶狀的扁短義大利面，通常是帶鋸齒狀邊緣的矩形帶，適合濃郁的肉醬或奶油醬來搭配。', '12', '5cm', '1.1mm', 16),
(22, 'R5_Pizzoccheri', 'R5_Pizzoccheri_s', 'R5_Pizzoccheri_bgs', 0, 'R°5', 'Pizzoccheri ', '義式蕎麥麵', 80, 10, 'Pizzoccheri 主要由蕎麥粉組成，常被用在冬季當主食，適合清爽風味，搭配新鮮香草與香料加些許橄欖油。', '11', '30cm', '2.6mm', 18),
(23, 'R6_Pillus', 'R6_Pillus_s', 'R6_Pillus_bgs', 0, 'R°6', 'Pillus', '薩丁尼亞島緞帶麵', 150, 10, 'Pillus 是一種傳統薄帶狀義大利麵食，由杜籃粉加蛋以及水製成，麵糰被揉捏很長時間後，被切成長約2公分寬的長條帶，適合與各種各樣的醬汁做搭配。 ', '12', '15cm', '1.1mm', 25),
(24, 'R7_Bavette', 'R7_Bavette_s', 'R7_Bavette_bgs', 0, 'R°7', 'Bavette', '細扁麵', 110, 10, 'Bavette 是義大利最古老的麵型之一，扁平的麵身滿足了咀嚼的口感，重複加熱也不失彈性．沾附醬汁容易，適合奶油、青醬及香料的料理方式。', '12', '50cm', '2mm', 58),
(25, 'R8_Pappardelle', 'R8_Pappardelle_s', 'R8_Pappardelle_bgs', 0, 'R°8', 'Pappardelle', '寬帶麵', 125, 8, 'Pappardelle 這是一種加入雞蛋的義大利麵食，Pappardelle在當地方言是“吃”的意思，非常適合用肉類製作義大利麵食，醬料應該包括具明顯風味的醬料，例如用野味和內臟製備的醬汁。', '12', '25cm', '1.1mm', 25),
(26, 'R9_Lasagne_Ricce', 'R9_Lasagne_Ricce_s', 'R9_Lasagne_Ricce_bgs', 0, 'R°9', 'Lasagne Ricce ', '波浪寬帶麵', 135, 12, 'Lasagne Ricce 是捲曲波浪狀或荷葉邊的千層麵，可讓較輕的醬汁更好地滲透到菜餚中。在西西里島，是聖誕餐桌上的主食，傳統上搭配番茄肉醬或可焗烤上菜。', '45', '25.4cm', '1.1mm', 13),
(27, 'P1_Farfalle_Tricolore', 'P1_Farfalle_Tricolore_s', 'P1_Farfalle _Tricolore_bgs', 4, 'P°1', 'Farfalle  Tricolore', '蝴蝶麵', 89, 10, '蝴蝶麵名字來源於典型的蝴蝶形狀，中間微微凸起。 最受青睞的搭配醬料是口感細膩的滷汁， 也可以用來配製五彩繽紛的義麵沙拉。', '12', '39mm', 'N/A', 49),
(28, 'P2_Assabesi', 'P2_Assabesi_s', 'P2_Assabesi_bgs', 4, 'P°2', 'Assabesi ', '阿薩麵', 99, 10, '1896年，一間大型船運公司購買了紅海的阿薩港，阿薩麵的命名也是源自於此。阿薩麵看起來像是帶有摺邊的小卵形，可搭配肉湯一起燉煮。', '10', 'N/A', 'N/A', 51),
(29, 'P3_Ballerine', 'P3_Ballerine_s', 'P3_Ballerine_bgs', 4, 'P°3', 'Ballerine', '舞動麵', 89, 10, '螺旋而下捲曲而成的麵型，猶如芭蕾女伶般選轉的姿態，屬於短義大利麵的一種，適用於沙拉或者薄湯。', '8', 'N/A', 'N/A', 14),
(30, 'P4_Busiate', 'P4_Busiate_s', 'P4_Busiate_bgs', 4, 'P°4', 'Busiate', '西西里捲捲麵', 100, 10, '西西里捲捲麵是一種長通心粉，其名稱源自一種蘆葦，西西里捲捲麵傳統上配有香蒜醬，是一種由杏仁、番茄、大蒜和羅勒製成的醬汁。', '10', '10cm', '3cm', 18),
(31, 'P5_Canestrini', 'P5_Canestrini_s', 'P5_Canestrini_bgs', 4, 'P°5', 'Canestrini', '提籃麵', 80, 10, '小而精巧的迷你提籃麵麵，形狀類似柳條，事實上提籃麵的形狀也是由蝴蝶麵衍生而來。憑藉著像有兩個杯子一樣的造型，也可以很好的包覆醬汁來食用，適合搭配湯品、燉菜或義大利麵沙拉。', '12', '22.5mm', '9.5mm', 51),
(32, 'P6_Casarecci', 'P6_Casarecci_s', 'P6_Casarecci_bgs', 4, 'P°6', 'Casarecci', '扭紋柴麵', 80, 10, 'Casarecci是來自南義西西里的經典麵款，向內捲起的麵體中間留有凹槽，飽足吸納醬汁讓麵條更有滋味。', '11', 'N/A', 'N/A', 17),
(33, 'P7_Maltagliati', 'P7_Maltagliati_s', 'P7_Maltagliati_bgs', 4, 'P°7', 'Maltagliati', '亂切麵', 100, 10, '源於艾米利亞區的短形義大利麵，通常製作時皆不拘小節，麵糰擀開之後隨手切開成塊狀，因此每一片的形狀、厚度都不盡相同，適合做成薄湯和豆湯一起煮。', '7', 'N/A', 'N/A', 19),
(34, 'P8_Corzetti', 'P8_Corzetti_s', 'P8_Corzetti_bgs', 4, 'P°8', 'Corzetti', '壓花圓麵', 80, 5, '在文藝復興時期的法庭上被記錄下來，每件作品都印有皇室家族的徽章和有各自風格的十字形狀。 有時也會印有幾何或植物圖案，引用了自他們所引以為傲的一些慶祝活動。是種小而薄的義大利麵，使用特殊的木製手工工具進行浮雕裝飾，壓花有助於義大利麵更好地包覆住醬汁，通常搭配肉、蘑菇醬、香蒜醬，松子或核桃醬，也可用魚露或淡奶油醬做出清爽料理。', '8', '60mm ', '1.5mm', 16),
(35, 'P9_Capunti', 'P9_Capunti_s', 'P9_Capunti_bgs', 4, 'P°9', 'Capunti', '蚯蚓麵', 80, 10, '是一種短凸橢圓形義大利麵，使用三隻手指按壓成型，類似於切開的空豌豆莢，容易包覆醬汁，適合搭配番茄醬肉和蘑菇做成冷麵。', '12-15', '20mm', 'N/A', 62),
(36, 'P10_Cavatelli', 'P10_Cavatelli_s', 'P10_Cavatelli_bgs', 4, 'P°10', 'Cavatelli', '扭指麵', 109, 10, '一種小殼狀義大利麵，邊緣捲起略短於扭紋柴麵，也被稱為義大利版的貓耳朵，看起來像小型的熱狗麵包。Cavatelli也有“小空洞”之義，常與大蒜和花椰菜搭配。', '12-15', '20mm', '7mm', 60),
(37, 'P11_Cencioni', 'P11_Cencioni_s', 'P11_Cencioni_bgs', 4, 'P°11', 'Cencioni', '抹布麵', 89, 10, '抹布麵是義大利文中的“抹布”或“洗碗布”之義，是使用薄擀麵棍滾動麵團所製作出的麵食，在每一面上都具有不同紋理的橢圓形，可搭配肉醬或燉菜或是用湯一起煮。', '12', 'N/A', 'N/A', 20),
(38, 'P12_Margherite', 'P12_Margherite_s', 'P12_Margherite_bgs', 4, 'P°12', 'Margherite', '雛菊麵', 89, 5, '雖然叫雛菊麵，但這種義大利麵形狀看起來更像貝殼，外面有脊，適合搭配濃郁醬汁。 ', '8', 'N/A', 'N/A', 53),
(39, 'P13_Pasta_al_Ceppo', 'P13_Pasta_al_Ceppo_s', 'P13_Pasta_al_Ceppo_bgs', 4, 'P°13', 'Pasta al Ceppo', '肉桂棒麵', 89, 10, '肉桂棒麵條富有嚼勁，和肉類一同烹煮時，可以很好地將醬汁包覆在其中，也適合用烤的或配香腸和蒜頭醬。', '10', '5cm', '13mm', 17),
(40, 'P14_Troffiette', 'P14_Troffiette_s', 'P14_Troffiette_bgs', 4, 'P°14', 'Troffiette', '特飛麵 ', 109, 10, '特飛麵是利古里亞區最著名的義大利麵。特飛麵在平坦的表面上滾動一小塊麵團，形成一個短圓形長度的義大利麵，帶有錐形末端，然後將其扭曲形成最終形狀。是非常家庭式的一種義大利麵，常做青醬口味。', '12-15', '40mm', '5.5mm', 15),
(41, 'P15_Orecchiette', 'P15_Orecchiette_s', 'P15_Orecchiette_bgs', 4, 'P°15', 'Orecchiette', '貓耳朵', 89, 10, '貓耳朵是義大利南部流行的義大利麵， 等同於中國的貓耳朵。名字來自他們的形狀，類似於一個小耳朵，傳統搭配番茄醬底，也會加上點小肉丸或羊奶起司。', '12-15', 'N/A', 'N/A', 12),
(42, 'P16_Torchio', 'P16_Torchio_s', 'P16_Torchio_bgs', 4, 'P°16', 'Torchio', '火炬麵', 89, 10, '由雞蛋作成的義大利麵，它常見於義大利北部或中部。被製成看起來類似於火炬底部的形狀，很適合舀起以及承受較重的厚實醬汁，與肉或蔬菜一起食用。 適合使用煙花女醬加上豌豆和香腸。 ', '10', 'N/A', 'N/A', 11),
(43, 'P17_Strozzapreti', 'P17_Strozzapreti_s', 'P17_Strozzapreti_bgs', 4, 'P°17', 'Strozzapreti', '捲捲麵', 89, 10, '麵團以厚平板捲起，然後將其切成條狀後在手掌之間輕輕滾動或扭曲。通常這種義大利麵大小或形狀不均勻，通常搭配濃郁醬汁番茄醬或青醬。', '10', '6cm', 'N/A', 21),
(44, 'P18_Francesine', 'P18_Francesine_s', 'P18_Francesine_bgs', 4, 'P°18', 'Francesine', '領結麵', 89, 8, '像一個帶有夾心的小蝴蝶結，領結麵條為特殊膳食或活動提供獨特的形狀，如商務晚宴或正式慶祝活動，適合以橄欖油烹調以及柔和的醬汁調味。', '9', 'N/A', 'N/A', 18),
(45, 'P19_Funghetti', 'P19_Funghetti_s', 'P19_Funghetti_bgs', 4, 'P°19', 'Funghetti', '菇菇麵', 80, 10, '菇菇麵是形狀的雞蛋義大利麵，正因為它們特殊的形狀，讓味道更加地明顯，適合搭配濃郁醬汁。', '5', 'N/A', 'N/A', 5),
(46, 'P20_Fusi_Istriani', 'P20_Fusi_Istriani_s', 'P20_Fusi_Istriani_bgs', 4, 'P°20', 'Fusi Istriani', '伊斯特拉的紡錘', 80, 10, '受到鄰國斯洛文尼亞影響而產生的特有麵體，中文直接翻譯成「伊斯特拉的紡錘」（Istrian spindles)，是一種口感Q彈的麵，非常適合搭配肉醬。', '10', 'N/A', 'N/A', 51),
(47, 'P21_Garganelli', 'P21_Garganelli_s', 'P21_Garganelli_bgs', 4, 'P°21', 'Garganelli', '溝紋管麵', 89, 10, 'Garganelli 的做法是拿一片雞蛋麵糰擀出來的約四公分的小麵片，接著用一根木棒做成斜角地把麵片圈捲起來，最後載有條文的籃子或簍子上揪出勾紋，傳統上會放進雞高湯裡作成湯麵。', '7', '65mm', '14mm', 11),
(48, 'P22_Gigli', 'P22_Gigli_s', 'P22_Gigli_bgs', 4, 'P°22', 'Gigli', '百合麵', 115, 10, '百合麵的每個帶凹槽邊緣都被捲成一個錐形花，最適合搭配豐富的醬汁，也適合用烤的。', '7-10', '25mm', '13mm', 14),
(49, 'P23_Lanterne', 'P23_Lanterne_s', 'P23_Lanterne_bgs', 4, 'P°23', 'Lanterne', '燈籠麵', 115, 10, 'Lanterne 一字來自義大利文的石油燈籠之義，旋渦形狀使其成為搭配任何醬汁的絕佳選擇。', '10', 'N/A', 'N/A', 27),
(50, 'S1_Penne_Lisce', 'S1_Penne_Lisce_s', 'S1_Penne_Lisce_bgs', 1, 'S°1', 'Penne Lisce', '斜管麵', 89, 10, '斜管麵在光滑斜管麵中最為知名，口感上較為細膩柔軟，能夠襯托出調味香料與麵條本身的香味。Penne一詞在義大利語裡面指的是古代寫字用的鵝毛筆，而鵝毛筆的樣貌，也直接呈現在麵條外觀上，有著長條管狀與尖尖的斜角切口。適合的食材搭配有肉醬、香腸、燉肉、蕈菇或是搭配蔬菜也是很好的搭配。', '11', '7cm', '3mm', 46),
(51, 'S2_Penne_Rigate', 'S2_Penne_Rigate_s', 'S2_Penne_Rigate_bgs', 1, 'S°2', 'Penne Rigate ', '斜管條紋麵', 89, 10, '斜管條紋麵是一種帶有條紋的斜管麵，也是最顯為人知的一種義大利麵。斜管條紋麵適用較薄的醬汁，其中義式辣醬口味搭配最為經典。', '11', '7cm', '3mm', 46),
(52, 'S3_Pennoni_Rigati', 'S3_Pennoni_Rigatin_s', 'S3_Pennoni_Rigatin_bgs', 1, 'S°3', 'Pennoni Rigatin', '大型斜管麵', 89, 10, '大型斜管麵，適合搭配較薄的醬汁。此種義大利麵的烹調方式較靈活，適用於地中海料理，其中特別適合做焗烤義大利麵。', '12', '5cm', '7.5mm', 50),
(53, 'S4_Mezze_Penne_Rigate', 'S4_Mezze_Penne_Rigate_s', 'S4_Mezze_Penne_Rigate_bgs', 1, 'S°4', 'Mezze Penne Rigate', '迷你斜管麵', 89, 10, '迷你斜管麵適合使用較薄的醬汁，口味食材上適合使用番茄醬汁、莫札瑞拉起司、羅勒與辣椒做搭配。', '11', '3cm', '5.5mm', 43),
(54, 'S5_Rigatoni', 'S5_Rigatoni_s', 'S5_Rigatoni_bgs', 1, 'S°5', 'Rigatoni ', '大型粗通心粉', 109, 10, '大型粗通心粉為羅馬地區經典代表的義大利麵，有著粗大的直徑厚度和條紋的外表，口味上適合搭配紅醬、鴨肝醬，食材搭配牛肉腸更是一道經典的菜餚。', '13', '8cm', '10mm', 43),
(55, 'S6_Mezzi_Rigatonin', 'S6_Mezzi_Rigatonin_s', 'S6_Mezzi_Rigatonin_bgs', 1, 'S°6', 'Mezzi Rigatonin', '中型粗通心粉', 89, 10, '中型粗通心粉適合用較濃稠的醬汁搭配，使醬汁能夠流入麵條的空新部分，鎖住醬汁。', '13', '5cm', '10mm', 50),
(56, 'S7_Fusilli', 'S7_Fusilli_s', 'S7_Fusilli_bgs', 1, 'S°7', 'Fusilli', '螺旋麵', 109, 10, '螺旋麵有著螺旋的外型特別容易鎖住醬汁，口味搭配上不論是番茄醬汁、奶油醬汁、青醬都可成為一道佳餚，也可做成沙拉來食用。', '10', '5cm', 'N/A', 44),
(57, 'S8_Fusilli_Corti_Bucatin', 'S8_Fusilli_Corti_Bucatin_s', 'S8_Fusilli_Corti_Bucatin_bgs', 1, 'S°8', 'Fusilli Corti Bucatin', '彈簧麵', 109, 10, '彈簧麵中間有空隙可以鎖住醬汁，烹煮方式多元，特別適合烤製或是做成沙拉，口味可搭配較濃厚的肉醬，另外搭配魚肉海鮮食材也是不錯的選擇。\n', '7', '10cm', '5.5mm', 45),
(58, 'S9_Lumache_Rigate', 'S9_Lumache_Rigate_s', 'S9_Lumache_Rigate_bgs', 1, 'S°9', 'Lumache Rigate', '蝸牛麵', 109, 5, '蝸牛麵有著蝸牛的外型，口味上適合搭配肉醬和蔬菜。', '8', 'N/A', 'N/A', 47),
(59, 'S10_Lumachine', 'S10_Lumachine_s', 'S10_Lumachine_bgs', 1, 'S°10', 'Lumachine ', '迷你蝸牛麵', 109, 10, '迷你蝸牛麵小巧的尺寸，特別受到孩子的喜愛，口味上最適合地中海口味的料理。', '12', 'N/A', 'N/A', 51),
(60, 'S11_Caserecce', 'S11_Caserecce_s', 'S11_Caserecce_bgs', 1, 'S°11', 'Caserecce ', '麻花捲麵', 89, 10, '麻花捲麵是南義大利的經典麵款，外表猶如一張光滑捲曲的羊皮紙，向內捲起的麵體中間留有凹槽，飽足吸納醬汁讓麵條更有滋味，屬於一種家常麵。食材上適合使用松子與碗豆做搭配。', '11', '6cm', '5.5mm', 48),
(61, 'S12_Orecchiette', 'S12_Orecchiette_s', 'S12_Orecchiette_bgs', 1, 'S°12', 'Orecchiette', '貓耳朵麵', 89, 10, '貓耳朵麵為普利亞區的經典義大利麵，麵體外型為圓盤狀，中心部位稍有凹陷，邊緣特別容易吸收醬汁。食材上適合使用、青花椰菜、起司與羊肉做搭配。', '11', 'N/A', 'N/A', 51),
(62, 'S13_Conchiglie_Rigate', 'S13_Conchiglie_Rigate_s', 'S13_Conchiglie_Rigate_bgs', 1, 'S°13', 'Conchiglie Rigate', '貝殼麵', 89, 5, '貝殼麵能鎖住各種調味和醬汁，所以廣受好評，貝殼麵適合做焗烤再配上魚類或肉類與番茄醬汁。', '11', 'N/A', 'N/A', 49),
(63, 'S14_Conchigliette_Rigate', 'S14_Conchigliette_Rigate_s', 'S14_Conchigliette_Rigate_bgs', 1, 'S°14', 'Conchigliette Rigate ', '迷你貝殼麵', 89, 10, '迷你貝殼麵適合煮湯食用，使用蔬菜湯底加入碗豆或鷹嘴豆煮成濃湯做食用。', '9', 'N/A', 'N/A', 1),
(64, 'S15_Gemellin', 'S15_Gemellin_s', 'S15_Gemellin_bgs', 1, 'S°15', 'Gemellin', '螺絲粉', 89, 10, '螺絲粉由兩條細麵條交織而成，口感較為紮實，其外型像是螺絲，特別受孩子的喜愛。口味搭配上適合較濃稠的醬汁，特別是適合番茄醬汁，也可做成沙拉來食用。', '8', '4cm', 'N/A', 45),
(65, 'S16_Rotelle', 'S16_Rotelle_s', 'S16_Rotelle_bgs', 1, 'S°16', 'Rotelle ', '車輪麵', 109, 10, '車輪麵外型特別受孩子的喜愛，車輪內部溝槽空隙，容易使切碎的食材和醬汁進到空隙中和麵融合在一起，讓料理更添美味。適合與清爽的醬汁與細碎的食材一同享用，煮成湯或做成沙拉也是不錯的選擇。', '7', 'N/A', 'N/A', 42),
(66, 'S17_Gnocchi', 'S17_Gnocchi_s', 'S17_Gnocchi_bgs', 1, 'S°17', 'Gnocchi ', '玉棋麵', 109, 10, '玉棋麵模仿了手作麵疙撘的樣貌，中間呈現凹狀，使醬汁聚集在中間，讓味道更為濃郁。適合用烤製的烹煮方式再搭配較濃郁的醬汁，口味以蕃茄羅勒和肉醬為最佳搭配。', '8', 'N/A', 'N/A', 39),
(67, 'S18_Gnocchetti_Sardi', 'S18_Gnocchetti_Sardi_s', 'S18_Gnocchetti_Sardi_bgs', 1, 'S°18', 'Gnocchetti Sardi', '迷你玉棋麵', 109, 10, '迷你玉棋麵來自薩丁尼亞島，傳說以前有一位貧窮婦人，因為沒有糧食給作戰回來的丈夫吃，在一顆老樹旁哭泣，老樹聽見她的哭聲，於是叫她把樹幹上的節瘤砍下來煮給丈夫吃，她照辦了。等她把鍋蓋掀開，發現原本在鍋裡煮的節瘤竟變成了鬆軟的麵疙瘩。迷你玉棋麵適合與較薄的醬汁做搭配，也可加入一些番紅花與羊起司做調味。', '11', 'N/A', 'N/A', 28),
(68, 'S19_Cavatappi', 'S19_Cavatappi_s', 'S19_Cavatappi_bgs', 1, 'S°19', 'Cavatappi ', '螺旋管麵', 109, 8, '螺旋管麵外表呈現捲曲管狀或是螺絲狀，雙開口和表面的條紋，能夠與較薄的醬汁做結合，鎖住醬汁調味的味道。口味上特別適合肉醬或海鮮口味，也可以做成沙拉來食用。', '8', '3cm', 'N/A', 38),
(69, 'S20_Sedani', 'S20_Sedani_s', 'S20_Sedani_bgs', 1, 'S°20', 'Sedani', '大條紋通心麵', 99, 10, '大條紋通心麵看起來像略微彎曲的芹菜莖，表面有細直條紋，內部呈現空心，此種麵條特別適合做成沙拉來食用。', '8', '8cm', '5mm', 46),
(70, 'S21_Sedaninin', 'S21_Sedaninin_s', 'S21_Sedaninin_bgs', 1, 'S°21', 'Sedaninin', '小條紋通心麵', 99, 10, '小條紋通心麵看起來像略微彎曲的芹菜莖，表面有細直條紋，內部呈現空心，此種麵條特別適合做成沙拉來食用。', '8', '5cm', '3mm', 43),
(71, 'S22_Ziti_Tagliati', 'S22_Ziti_Tagliati_s', 'S22_Ziti_Tagliati_bgs', 1, 'S°22', 'Ziti Tagliati', '水管麵', 99, 10, '水管麵來自義大利中部至中南部一帶，兩端切口平整，口感厚實有咬勁富有彈性， 醬料可以填塞在管中，適合番茄醬汁、奶油醬汁及海鮮焗烤等作法。', '8', '10cm', '5mm', 14),
(72, 'S23_Sagnette_Abruzzesi', 'S23_Sagnette_Abruzzesi_s', 'S23_Sagnette_Abruzzesi_bgs', 1, 'S°23', 'Sagnette Abruzzesi ', '紙條麵', 99, 10, '紙條麵來自西西里島，是義大利南部地區的特色麵種。外表像一塊小而光滑的羊皮紙，此種麵條非常適合搭配燉肉，看似表面光滑，表面有許多細孔，容易吸取醬汁。', '12', '8cm', '1.1mm', 53),
(73, 'S24_Spaccatella', 'S24_Spaccatella_s', 'S24_Spaccatella_bgs', 1, 'S°24', 'Spaccatella ', '懸月麵', 99, 10, '懸月麵來自西西里島，有著獨特的弧形造型，中間有一個空隙可以鎖住醬汁，特別是濃厚的醬汁。口味上非常適合搭配番茄製成的醬與起司。', '10', 'N/A', 'N/A', 52),
(74, 'S25_Racchette', 'S25_Racchette_s', 'S25_Racchette_bgs', 1, 'S°25', 'Racchette ', '網球拍麵', 109, 12, '網球拍麵呈現網球拍的造型，富有創意性，網球拍麵簡單搭配番茄醬汁，再加上肉醬或是蕈菇類的食材，就是一道美味佳餚。', '11', 'N/A', 'N/A', 42),
(75, 'F1_Agnolotti', 'F1_Agnolotti_s', 'F1_Agnolotti_bgs', 3, 'F°1', 'Agnolotti', '枕頭餃', 200, 8, '枕頭餃是皮埃蒙特地區典型的義大利麵食，由小塊扁平麵團麵團製成，折疊在烤肉或蔬菜的餡料上。形狀是半圓形的，但傳統上枕頭餃是方形的，適合搭配番茄醬汁佐香料。', '3-5', '40mm', 'N/A', 22),
(76, 'F2_Agnolotti_del_Plin', 'F2_Agnolotti_del_Plin_s', 'F2_Agnolotti_del_Plin_bgs', 3, 'F°2', 'Agnolotti del Plin', '迷你枕頭餃', 200, 10, '迷你枕頭餃義大利語中的Plin的義思是“捏”，因為在每個填充物之間用拇指和食指捏住以封閉並密封小麵食包。內餡幾乎塞滿肉，可搭配牛肉湯和少許的奶油料理。', '3-5', '30mm', 'N/A', 54),
(77, 'F3_Cappelletti', 'F3_Cappelletti_s', 'F3_Cappelletti_bgs', 3, 'F°3', 'Cappelletti', '羅馬涅餃', 200, 8, '羅馬涅餃通常塞滿起司配上些許牛肉，它們是義大利羅馬涅的典型代表代，適合與蘑菇做料理。', '3-5', '45mm', 'N/A', 23),
(78, 'F4_Cappelletti_Umbria', 'F4_Cappelletti_Umbria_s', 'F4_Cappelletti_Umbria_bgs', 3, 'F°4', 'Cappelletti Umbria', '小帽子', 200, 8, '小帽子與羅馬涅餃差異在於造型為帽子型狀，為聖誕節時在義大利的必備佳餚，適合以義大利肉醬與帕馬森起司做搭配。', '3-5', '40mm', 'N/A', 27),
(79, 'F5_Caramelle', 'F5_Caramelle_s', 'F5_Caramelle_bgs', 3, 'F°5', 'Caramelle', '糖果麵', 200, 10, '糖果麵如同字義上，外型就如同糖果一般。主要在帕爾馬和皮亞琴察區，主要為假日、節慶或周末的早午餐所準備，適合與義大利肉醬和帕馬森起司搭配。', '4-5', '80mm', 'N/A', 29),
(80, 'F6_Casoncelli', 'F6_Casoncelli_s', 'F6_Casoncelli_bgs', 3, 'F°6', 'Casoncelli', '床單麵', 200, 10, '床單麵是一種填充義大利麵，來自於義大利倫巴底地區。通常由兩片義大利面組成在邊緣處壓在一起，通常與白鮭搭配，再以鼠尾草葉與融化的奶油調味。 ', '5-6', '4cm', 'N/A', 28),
(81, 'F7_Conchiglioni', 'F7_Conchiglioni_s', 'F7_Conchiglioni_bgs', 3, 'F°7', 'Conchiglioni', '大貝殼麵', 200, 10, '大貝殼麵適合使用番茄與起司製成焗烤。', '10-12', 'N/A', 'N/A', 26),
(82, 'F8_Mezzelune', 'F8_Mezzelune_s', 'F8_Mezzelune_bgs', 3, 'F°8', 'Mezzelune', '半月餃', 200, 8, '半月餃為義大利語為半月的意思，是一種半圓形的義大利麵，適合配上蘑菇、香蒜醬、義大利香腸、海鮮或櫻桃番茄。', '4-6', '40mm', 'N/A', 28),
(83, 'F9_Pansotti', 'F9_Pansotti_s', 'F9_Pansotti_bgs', 3, 'F°9', 'Pansotti', '肚子餃', 200, 8, '肚子餃產於利古利亞區，其麵體名稱源於義大利語Pansotti具有大肚子意思，是一個典型的包餡義大利麵食，適合搭配當地傳統核桃醬或是簡易的搭配奶油。', '6-8', 'N/A', 'N/A', 31),
(84, 'F10_Ravioletti', 'F10_Ravioletti_s', 'F10_Ravioletti_bgs', 3, 'F°10', 'Ravioletti', '小餃子', 200, 10, '小餃子是由兩層薄麵食麵團密封而成，通常以肉湯或搭配義大利麵醬的形式供應，適合粉紅醬與帕馬森起司作搭配。', '3', '35mm', 'N/A', 22),
(85, 'F11_Ravioli', 'F11_Ravioli_s', 'F11_Ravioli_bgs', 3, 'F°11', 'Ravioli', '餃子', 200, 8, '餃子的填充物根據其準備區域而變化。在羅馬和拉齊奧，餡料採用義大利乳清起司、菠菜、肉荳蔻和黑胡椒製成。在撒丁島，餛飩充滿了義大利乳清起司和磨碎的檸檬皮，適合以橄欖油、蘑菇醬來搭配。', '4', '40mm', 'N/A', 30),
(86, 'F12_Raviolo', 'F12_Raviolo_s', 'F12_Raviolo_bgs', 3, 'F°12', 'Raviolo', '大餃子', 200, 5, '大餃子是由兩層薄麵食麵團密封而成，通常以肉湯或搭配義大利麵醬的形式供應，適合以巴西里與蒜味番茄醬來搭配。', '6', '45mm', 'N/A', 30),
(87, 'F13_Sacchettoni', 'F13_Sacchettoni_s', 'F13_Sacchettoni_bgs', 3, 'F°13', 'Sacchettoni', '小錢包', 200, 8, '小錢包是一種包餡義大利麵，也被稱為“乞丐的錢包”。 它由小圓圈或正方形的麵團組成，在頂端會有個束口像個小袋子。可以添加各種餡料，也可搭配帕馬森起司以及番茄湯。', '5', '40mm', 'N/A', 23),
(88, 'F14_Tortelli', 'F14_Tortelli_s', 'F14_Tortelli_bgs', 3, 'F°14', 'Tortelli', '餛飩', 200, 10, '餛飩是托斯卡尼地區的傳統義大利麵。 它有幾種形狀，包括方形、半圓形或扭曲成圓形帽狀形式，適合以大蒜與奶油調味。', '10', '40mm', 'N/A', 29),
(89, 'F15_Tortellini', 'F15_Tortellini_s', 'F15_Tortellini_bgs', 3, 'F°15', 'Tortellini', '小餛飩', 200, 10, '小餛飩有幾種形狀，包括方形、半圓形或扭曲成圓形帽狀形式，適合拌入蛋、培根、大蒜、蔥和羅勒。', '10', '35mm', 'N/A', 23),
(90, 'F16_Tortelloni', 'F16_Tortelloni_s', 'F16_Tortelloni_bgs', 3, 'F°16', 'Tortelloni', '大餛飩', 200, 8, '大餛飩有幾種形狀，包括方形、半圓形或扭曲成圓形帽狀形式，適合用義大利肉醬與帕馬森起司搭配。', '10', '45mm', 'N/A', 23),
(91, 'F17_Fazzoletti_Ripieni', 'F17_Fazzoletti_Ripieni_s', 'F17_Fazzoletti_Ripieni_bgs', 3, 'F°17', 'Fazzoletti Ripieni', '手帕包', 200, 12, '手帕包當中添加了餡料，適合添加奶油與蘑菇。', '15-18', '12.5cm', '0.5mm', 23),
(92, 'F18_Manicotti', 'F18_Manicotti_s', 'F18_Manicotti_bgs', 3, 'F°18', 'Manicotti', '小袖子', 80, 10, '小袖子在義大利語中代表著愚人、小袖子，煮熟後再添加傳統的肉醬或是蔬菜調味醬等。', '7', '7cm', '5mm', 22),
(93, 'F19_Fazzoletti', 'F19_Fazzoletti_s', 'F19_Fazzoletti_bgs', 3, 'F°19', 'Fazzoletti', '手帕麵', 85, 8, '手帕麵命名由來自於古比奧區的 Ceri Festival 所穿戴的傳統紅色手帕，可搭配香蒜醬或傳統肉醬調味。', '2', '8cm', '1.1mm', 34),
(94, 'F20_Foglie_dUlivo', 'F20_Foglie_dUlivo_s', 'F20_Foglie_dUlivo_bgs', 3, 'F°20', 'Foglie d’ Ulivo', '橄欖葉麵', 80, 10, '橄欖葉麵是一種以橄欖葉形狀製作的義大利麵，麵糰中會加入香料，使其顏色呈現綠粉色，適合以番茄肉醬搭配雞肉與菠菜後淋上橄欖油。', '15', '4cm', '1.1mm', 52),
(96, 'F22_Mparrettati', 'F22_Mparrettati_s', 'F22_Mparrettati_bgs', 3, 'F°22', 'Mparrettati', '鉛筆麵', 79, 10, '鉛筆麵是一種長型義大利麵，有著一根鉛筆的寬度，利於吸收義大利麵醬，適合搭配各式義大利麵醬、橄欖油與起司。', '5', '15cm', '3.5mm', 46),
(97, 'F23_Passatelli', 'F23_Passatelli_s', 'F23_Passatelli_bgs', 3, 'F°23', 'Passatelli', '樹枝麵', 99, 10, '樹枝麵是由麵包屑、雞蛋、磨碎的帕瑪森起司以及麵團製作而成，它通搭配雞湯一同烹煮。', '2', '18cm', '3.5mm', 8),
(98, 'F24_Sagne_Ncaannulate', 'F24_Sagne_Ncaannulate_s', 'F24_Sagne_Ncaannulate_bgs', 3, 'F°24', 'Sagne ‘Ncaannulate', '海藻麵', 109, 10, '海藻麵是位於普莉亞區的傳統麵條，將捲狀麵條切成了細麵條，然後將它們纏繞於木釘上，形成螺旋狀，以番茄、大蒜醬與義大利乳清起司作搭配。', '3-4', '10cm', '3mm', 18),
(99, 'M1_Alfabeto', 'M1_Alfabeto_s', 'M1_Alfabeto_bgs', 2, 'M°1', 'Alfabeto ', '字母麵', 89, 10, '字母麵是為了激發孩子們的想像力而發明的，並且可以啟蒙孩子閱讀認字，這種義大利麵可以用於濃稠的奶油或天鵝絨湯。', '5', '4.5mm', '3.5mm', 1),
(100, 'M2_Anelli_Siciliani', 'M2_Anelli_Siciliani_s', 'M2_Anelli_Siciliani_bgs', 2, 'M°2', 'Anelli Siciliani', '西西里環麵', 89, 10, '西西里環麵是西西里島傳統義大利麵，具有獨特形狀，也被稱為大環，傳統上這種義大利麵用於製作各種烤箱烤製的料理或派。', '13', '4.5mm', '5mm', 2),
(101, 'M3_Acini_di_Pepe', 'M3_Acini_di_Pepe_s', 'M3_Acini_di_Pepe_bgs', 2, 'M°3', 'Acini di Pepe ', '胡椒麵', 109, 10, '胡椒麵的發明是為了激發兒童的想像力，形狀像胡椒，很有趣也很有吸引力，它特別適合製作清湯，例如肉湯或清湯。', '9', 'N/A', 'N/A', 3),
(102, 'M4_Anellini', 'M4_Anellini_s', 'M4_Anellini_bgs', 2, 'M°4', 'Anellini ', '耳環麵', 89, 10, '耳環麵屬於普利亞區和西西里島的傳統麵食，有趣的形狀吸引兒童的想像力。這種義大利麵可用於濃稠的奶油或天鵝絨湯。', '6', '2.5mm', '1.5mm', 4),
(103, 'M5_Conchigliette_Piccole', 'M5_Conchigliette_Piccole_s', 'M5_Conchigliette_Piccole_bgs', 2, 'M°5', 'Conchigliette Piccole ', '迷你貝殼麵', 89, 10, '迷你貝殼麵是一種異想天開的湯類麵食，特別受小孩子歡迎，因為它的形狀靈感來自小巧迷人的貝殼，通常用於製作蔬菜豆湯，在配以奶油醬汁時也很出色。', '7', 'N/A', 'N/A', 5),
(104, 'M6_Coralli', 'M6_Coralli_s', 'M6_Coralli_bgs', 2, 'M°6', 'Coralli ', '珊瑚麵', 89, 10, '珊瑚麵的發明是為了激發兒童的想像力，它的形狀像珊瑚，特別適合製作清湯，例如肉湯或清湯並加入炸麵包丁或切成切絲的蔬菜。', '9', 'N/A', 'N/A', 8),
(105, 'M7_Coquillettes', 'M7_Coquillettes_s', 'M7_Coquillettes_bgs', 2, 'M°7', 'Coquillettes ', '彎管通心麵', 109, 10, '彎管通心麵是19世紀法國農業和食品工業所發明的，體積小易於食用。在法國非常受孩子們的歡迎，並且很快就準備好了。 ', '6', '3cm', '2.5mm', 5),
(106, 'M8_Ditali_Lisci', 'M8_Ditali_Lisci_s', 'M8_Ditali_Lisci_bgs', 2, 'M°8', 'Ditali Lisci ', '光滑頂針麵', 109, 5, '光滑頂針是非常短的直切義大利麵系列的一種，這種義大利麵的形狀靈感來自縫紉頂針，但頂部是開放的，厚實形狀使其非常適合搭配紅醬或番茄湯和蔬菜湯，適合各種醬汁的麵食。完美配方的秘訣在於醬汁具有足夠的液體稠度，因此它們可以滲透到義大利麵內。', '8-10', '2cm', '5mm', 6),
(107, 'M9_Ditali_Rigati', 'M9_Ditali_Rigati_s', 'M9_Ditali_Rigati_bgs', 2, 'M°9', 'Ditali Rigati ', '脊狀頂針麵', 89, 10, '脊狀頂針的形狀靈感來自縫紉頂針，但頂部是開放的，脊狀頂針適合各種醬汁的麵食，這種義大利麵也適合用蔬菜或豆類製作肉湯和湯。', '10-12', '2cm', '4.5mm', 6),
(108, 'M10_Farfalline', 'M10_Farfalline_s', 'M10_Farfalline_bgs', 2, 'M°10', 'Farfalline ', '小蝴蝶麵', 109, 10, '最初來自義大利北部的小蝴蝶是長方形的，帶有扇形邊緣，中心捏起，異想天開的形狀吸引了兒童，由於有缺口的邊緣和微小的彎曲翅膀，小蝴蝶對於料多含有炸麵包丁和蔬菜絲的湯是個完美的形狀。', '6', '39mm', '2.5mm', 7),
(109, 'M11_Filini', 'M11_Filini_s', 'M11_Filini_bgs', 2, 'M°11', 'Filini', '小細線麵', 109, 10, '小細線是非常薄的義大利麵條，非常適合加在肉湯製成的餐點。', '3', '2cm', '1.1mm', 9),
(110, 'M12_Occhi_di_Pernice', 'M12_Occhi_di_Pernice_s', 'M12_Occhi_di_Pernice_bgs', 2, 'M°12', 'Occhi di Pernice ', '小眼睛麵', 89, 5, '小眼睛狀的發明是為了激發兒童的想像力，特別適合用於濃稠的奶油或天鵝絨湯。', '4', '5mm', '1.5mm', 4),
(111, 'M13_Puntalette', 'M13_Puntalette_s', 'M13_Puntalette_bgs', 2, 'M°13', 'Puntalette', '童心麵', 109, 10, '毫無疑問，這種義大利麵形狀的發明是為了激發兒童的想像力。小而有吸引力，它特別適合製作成沙拉。', '12', '3mm', '2mm', 9),
(112, 'M14_Quadretti', 'M14_Quadretti_s', 'M14_Quadretti_bgs', 2, 'M°14', 'Quadretti ', '小方塊麵', 109, 10, '這是一種由剩下的麵糰製成的經典麵種，通常是為節日製作義大利麵時所剩的麵團製成的，它特別適合用於濃稠的奶油或天鵝絨湯。', '6', '3mm', '3mm', 8),
(113, 'M15_Riso', 'M15_Riso_s', 'M15_Riso_bgs', 2, 'M°15', 'Riso ', '米粒麵', 89, 10, '米粒麵的發明是為了激發兒童的想像力，類似米粒或穀物的形狀有趣且吸引人，它特別適合製作清湯，並加入炸麵包丁或切成切絲的蔬菜。', '11', '4mm', '1.5mm', 10),
(114, 'M16_Seme_di_Melone', 'M16_Seme_di_Melone_s', 'M16_Seme_di_Melone_bgs', 2, 'M°16', 'Seme di Melone ', '瓜子麵', 109, 10, '這種義大利麵形狀的發明是為了激發兒童的想像力，瓜子麵類似小穀物，有趣且吸引人，特別適合製作肉湯加入炸麵包丁。', '8', '4mm', '1.5mm', 10),
(115, 'M17_Stellette', 'M17_Stellette_s', 'M17_Stellette_bgs', 2, 'M°17', 'Stellette ', '小星星麵', 109, 10, '小星星麵的發明是為了激發兒童的想像力，特別適合製作濃稠的奶油或天鵝絨湯。', '6', '4mm', '4mm', 8),
(116, 'M18_Lancette', 'M18_Lancette_s', 'M18_Lancette_bgs', 2, 'M°18', 'Lancette', '鐘針麵', 89, 10, '從二十世紀初開始，許多形式的麵食受到機械和汽車工業的啟發，鐘針麵是這一傳統的一部分，具有帶尖尖的小蝴蝶結形狀，非常適合製作肉湯。', '6', 'N/A', 'N/A', 7),
(117, 'M19_Peperini', 'M19_Peperini_s', 'M19_Peperini_bgs', 2, 'M°19', 'Peperini ', '小胡椒麵', 89, 10, '小胡椒麵這種義大利麵形狀的發明是為了激發兒童的想像力，它適合製作清湯，並加入切成切絲的蔬菜。', '5', 'N/A', 'N/A', 1),
(118, 'M20_Rombi', 'M20_Rombi_s', 'M20_Rombi_bgs', 2, 'M°20', 'Rombi ', '菱形麵', 89, 10, '菱形麵是鄉村烹飪傳統中的典型義大利麵，傳統上這種類型的義大利麵配有魚類、雞肉和鴨肉製成的醬汁，廣泛用於阿布魯佐地區的農村烹飪。', '10-12', 'N/A', 'N/A', 7),
(119, 'M21_Cuoretti', 'M21_Cuoretti_s', 'M21_Cuoretti_bgs', 2, 'M°21', 'Cuoretti', '小愛心麵', 89, 10, '小愛心的形狀是為了激發兒童的想像力，這種義大利麵可以用於濃稠的奶油或天鵝絨湯。', '5', 'N/A', 'N/A', 1),
(120, 'M22_Stortini', 'M22_Stortini_s', 'M22_Stortini_bgs', 2, 'M°22', 'Stortini', '捲心麵', 109, 10, '毫無疑問，這種義大利麵形狀的發明是為了激發兒童的想像力。適合用海鮮以及橄欖油簡單搭配成地中海料理。', '8', 'N/A', 'N/A', 10),
(121, 'M23_Spaghetti_Tagliati', 'M23_Spaghetti_Tagliati_s', 'M23_Spaghetti_Tagliati_bgs', 2, 'M°23', 'Spaghetti Tagliati', '迷你麵', 109, 10, '迷你麵對所有家庭成員都很好得選擇， 不管是對於那些喜歡用軟起司調味的孩子，或是那些享用清淡口味菜餚的成年人。迷你麵可在湯中享用，並加上炸麵包塊。', '8', '8mm', '1.1mm', 2),
(122, 'M24_Rotelline', 'M24_Rotelline_s', 'M24_Rotelline_bgs', 2, 'M°24', 'Rotelline', '小齒輪麵', 109, 10, '從二十世紀初開始，許多義大利麵食都受到機械和汽車行業的啟發，小齒輪麵就是由這種傳統創造出來的，輪輻連接到脊狀邊緣，非常適合製作由肉類、豆類和蔬菜製成的豐盛佳餚。', '7', '6.5mm', '2.4mm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `sid` int(1) DEFAULT NULL,
  `pasta_type` varchar(9) DEFAULT NULL,
  `parent_sid` int(1) DEFAULT NULL,
  `wheel_img` varchar(18) DEFAULT NULL,
  `display_no` varchar(1) DEFAULT NULL,
  `display_name` varchar(15) DEFAULT NULL,
  `go_path` varchar(1) DEFAULT NULL,
  `pasta_type_ch` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`sid`, `pasta_type`, `parent_sid`, `wheel_img`, `display_no`, `display_name`, `go_path`, `pasta_type_ch`) VALUES
(1, 'Long', 0, 'LongPasta.svg', '1', 'Long pasta', '0', '長麵'),
(2, 'Short cut', 1, 'MinutePasta.svg', '2', 'Short cut pasta', '1', '短麵'),
(3, 'Minute', 2, 'ShortPasta.svg', '3', 'Minute pasta', '2', '粒狀麵'),
(4, 'Stuffed', 3, 'StuffedPasta.svg', '4', 'Stuffed pasta', '3', '夾餡款'),
(5, 'Specialty', 4, 'SpeciaityPasta.svg', '5', 'Specialty pasta', '4', '特別款'),
(6, 'Sauce', 5, '', '', '', '', '義大利麵醬'),
(7, 'Gift Set', 6, '', '', '', '', '組合包');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_info`
--

CREATE TABLE `recipe_info` (
  `sid` int(2) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `parent_sid` int(1) DEFAULT NULL,
  `image` varchar(18) DEFAULT NULL,
  `name_en` varchar(68) DEFAULT NULL,
  `name_ch` varchar(15) DEFAULT NULL,
  `description` varchar(366) DEFAULT NULL,
  `serve` int(1) DEFAULT NULL,
  `time` varchar(7) DEFAULT NULL,
  `level` varchar(2) DEFAULT NULL,
  `step` varchar(501) DEFAULT NULL,
  `ingredient` text,
  `recommand_productlist_sid` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_info`
--

INSERT INTO `recipe_info` (`sid`, `type`, `parent_sid`, `image`, `name_en`, `name_ch`, `description`, `serve`, `time`, `level`, `step`, `ingredient`, `recommand_productlist_sid`) VALUES
(1, '開胃前菜', 4, '1_starter_BTS', 'Beef, Tomato Soup ', '牛肉番茄義麵湯', '', 6, '2 hrs', '普通', '1. 將牛肉加鹽在高溫下炒至褐色，並將肉分成小塊後加入洋蔥、芹菜和胡蘿蔔炒4分鐘。<br>\n<br>\n2. 加入番茄、高湯和月桂葉，蓋蓋子煮至牛肉和蔬菜變軟，約1至1個半小時（如果蒸發過多，需要加入更多的肉湯或水）。<br>\n<br>\n3. 加入義大利麵烹煮4分鐘即可上菜。\n<br>', '200克瘦牛肉\n1茶匙鹽\n半顆洋蔥丁\n半根芹菜切丁\n半根胡蘿蔔切丁\n1罐蕃茄罐頭\n1公升牛肉高湯\n2片月桂葉\n200克義大利麵\n20克帕瑪森起司磨碎', 2),
(2, '開胃前菜', 4, '2_starter_VS', 'Vegetable soup ', '蔬菜義麵湯', '', 4, '55 mins', '普通', '1. 在中高溫下加橄欖油並將洋蔥、胡蘿蔔和芹菜放入煮至軟化。<br>\n<br>\n2. 加入鹽、胡椒、牛至、辣椒粉和馬鈴薯煮一分鐘後，加入高湯和葡萄酒。<br>\n<br>\n3. 將番茄加入鍋中，煮沸後小火燉煮約15分鐘直到蔬菜幾乎軟化。<br>\n<br>\n4. 加入蔬菜均勻攪拌，確保全部浸沒後，再煮5分鐘。<br>\n<br>\n5. 加入義大利麵煮10分鐘，直到麵煮熟、馬鈴薯變軟，菜融化，再加入適量鹽調味。<br>\n<br>', '2湯匙橄欖油\n半顆洋蔥丁\n半根胡蘿蔔切丁\n半根芹菜切丁\n3/4茶匙鹽\n適量胡椒\n1/4茶匙牛至\n1/4茶匙辣椒粉\n2顆小馬鈴薯去皮切碎\n600毫升雞高湯\n1罐番茄罐頭\n2湯匙白葡萄酒\n300克高麗菜切碎\n300克義大利麵', 2),
(3, '特殊節慶', 2, '3_occasion_BA', 'Baked Anellett ', '烤西西里環麵', '', 4, '1.5 hrs', '中等', '1. 烤箱預熱到350度。\n<br>\n2. 將橄欖油、洋蔥、大蒜和櫛瓜用中火炒至半透明後，加入碎牛肉煮至全熟。\n<br>\n3. 加入番茄醬和香料燉煮20分鐘後，加入冷凍豌豆。<br>\n\n4. 把一鍋鹽水水煮沸後， 加入義大利麵煮5分鐘，與ragu紅醬混合。<br>\n\n5. 加入莫扎瑞拉起司和半份帕瑪森起司。同時，用少許奶油塗抹烤鍋，並倒入義大利麵。<br>\n\n6. 撒上麵包屑和剩餘的帕瑪森起司。<br>\n\n7. 在烤箱烤40分鐘。<br>\n\n8. 烤完後靜置10分鐘即可上菜。<br>', '500克西西里環\n450克碎牛肉\n100克冷凍豌豆\n600克番茄醬\n300克帕瑪森起司磨碎\n300克莫扎瑞拉起司磨碎 \n1茶匙乾羅勒\n1茶匙乾牛至\n3個蒜瓣切碎\n適量鹽和胡椒\n半顆小洋蔥切碎\n半節櫛瓜切碎\n1湯匙麵包屑\n1湯匙奶油\n1湯匙橄欖油', 2),
(4, '健康輕食', 3, '4_starter_STS', 'Smoky Tomato Soup ', '義式嗆煙番茄麵湯', '', 4, '23 mins', '普通', '1. 將一個較小的鍋子放在一個大鍋裡。加入橄欖油，然後加入蒜瓣炒至變金黃色。\n\n2. 加入番茄醬炒1分鐘後，放入鷹嘴豆和義大利面麵攪拌均勻。\n\n3. 加高湯直至沸騰後倒入鷹嘴豆和義大利麵，調小火燉煮15分鐘。\n\n4. 盛入碗裡並加上起司和新鮮的香草即可上菜。', '4瓣大蒜去皮搗碎\n4湯匙橄欖油\n4湯匙番茄醬\n1罐鷹嘴豆罐頭瀝乾並沖洗\n200克義大利麵\n450毫升蔬菜高湯\n30克帕瑪森起司\n50克歐芹切碎', 2),
(5, '周末派對', 1, '5_party_HSMAC', 'Havarti Spinach Mac and Cheese ', '哈瓦蒂起士佐菠菜通心粉', '', 4, '40 mins', '普通', '1.將麵條放入煮沸的鹽水中煮10分鐘。\n\n2.在煎鍋裡用中火融化奶油後，加入麵粉攪拌形成麵糊，直到麵糊變暗。\n\n3.分次加入少許牛奶到麵糊中，在每次添加之間攪拌均勻以打散塊狀物，直至所有牛奶加入。\n\n4.將醬汁慢煮至沸並攪拌到它變稠，大約8分鐘。\n\n5.關火加入起士、菠菜、鹽和胡椒中攪拌到起士融化即可上菜。', '350克義大利麵\n2湯匙奶油\n3湯匙麵粉\n300毫升牛奶\n300克哈瓦蒂起士磨碎\n1把菠菜切碎\n適量鹽和胡椒', 2),
(6, '健康輕食', 3, '6_light_FS', 'Fiesta Salad ', '週末暖沙拉', '', 8, '25 mins', '簡單', '1. 將麵條放入煮沸的鹽水中煮10分鐘。\n\n2. 將麵放入裝有1湯匙橄欖油的大型碗中攪拌，放在托盤上冷卻後，將麵食轉移到大碗，除了酪梨添加剩餘的成分混合。\n\n3. 靜置30分鐘，讓味道融合。\n\n4. 加入酪梨攪拌混合。', '1公斤義大利麵\n6湯匙橄欖油\n1罐黑豆瀝乾\n1罐玉米瀝乾\n3湯匙羅勒切碎\n2顆番茄切丁\n2顆萊姆榨汁\n200克克索布蘭可起士磨碎\n1個大酪梨去皮去核切丁\n適量鹽和黑胡椒', 2),
(7, '健康輕食', 3, '7_light_BSWPAS', 'Butternut Squash Sage Pasta', '東南瓜佐鼠尾草義大利麵', '', 4, '1.5 hrs', '中等', '1. 將烤箱加熱至375°F後，將南瓜、洋蔥、鹽、胡椒和橄欖油攪拌並鋪在烤盤上。\n\n2. 烤約30至35分鐘，或直到南瓜呈淺褐色，同時將麵條放入煮沸的鹽水中煮10分鐘。\n\n3. 在煎過中用中低火加熱奶油及鼠尾草，直到奶油開始變淺棕色後，加入蒜末拌炒1分鐘後，取出後用勺子弄碎鼠尾草。\n\n4. 將所有食材混合拌勻，並根據口味加入鹽調味。\n\n5. 在享用前拌入帕瑪森起士。', '1顆中等的冬南瓜去子切丁\n1顆洋蔥切丁\n1茶匙鹽\n1/8茶匙的黑胡椒\n3湯匙橄欖油\n350克義大利麵\n100克無鹽奶油\n2打鼠尾草葉子\n2顆中等蒜切碎\n200克的帕瑪森起士', 2),
(8, '開胃前菜', 4, '8_starter_SCCAPS', 'Slow-Cook Chicken and Pasta Soup ', '燉煮雞肉義麵湯', '', 6, '5.5 hrs', '中等', '\n1. 在燉鍋中，放入雞肉、胡蘿蔔、芹菜、洋蔥、大蒜、月桂葉、90毫升水、鹽和胡椒。\n\n2. 蓋蓋子，在高溫下煮5小時直到雞肉煮熟。\n\n3. 在食用前20分鐘，取出雞肉到碗中。 取出並丟棄洋蔥和月桂葉。 \n\n4. 將義大利面加入慢燉鍋，蓋上蓋子煮15分鐘。\n\n5. 將雞肉切塊後並與巴西里一起拌入湯中即可上菜。', '6個去骨去皮的雞大腿\n4根胡蘿蔔切片 \n4根芹菜芹菜切片\n半顆洋蔥\n2個蒜瓣切末\n2片月桂葉\n適量鹽和黑胡椒\n400克義大利麵\n100克巴西里切碎', 2),
(9, '健康輕食', 3, '9_light_CLPS', 'Cilantro-Lime Pasta Salad ', '香菜青檸義大利麵沙拉', '', 6, '25 mins', '簡單', '1. 將麵條放入煮沸的鹽水中煮10分鐘。\n\n2. 將萊姆汁、橄欖油、洋蔥粉、大蒜粉和鹽攪拌在一起，並倒入義大利麵。\n\n3. 拌入蔥、甜椒和番茄後，加入鹽和胡椒調味。 \n\n4. 冷藏一小時後即可食用。', '500克義大利麵\n2顆萊姆榨汁\n4湯匙橄欖油\n1茶匙洋蔥粉\n1/2茶匙大蒜粉\n1/4茶匙鹽\n1串香菜切碎\n1束蔥切成末\n1顆紅甜椒去子切丁\n10顆小番茄切半\n適量鹽和胡椒', 2),
(10, '健康輕食', 3, '10_light_SAPWCTARC', 'Shrimp and Pasta with Cherry Tomoto and Romano Cheese ', '鮮蝦番茄義大利麵佐佩克里諾乳酪', '', 6, '45 mins', '普通', '1. 將麵條放入煮沸的鹽水中煮10分鐘，同時在中高火的大鍋中加熱1湯匙橄欖油。 \n\n2. 在蝦上均勻撒上1/2茶匙鹽和1/8茶匙黑胡椒，將蝦加入鍋中待煮熟後從鍋中取出。\n\n3. 加入剩餘的1湯匙橄欖油攪拌均勻後加入洋蔥、大蒜和紅椒煮2分鐘並均勻攪拌。\n\n4. 加入番茄煮直到番茄開始軟化。\n\n5. 義大利麵和蝦均勻攪拌後，取出並加入1/4茶匙鹽，1/8茶匙黑胡椒調味後，加入起司和羅勒攪拌均勻即可上菜。', '500克義大利麵\n2湯匙橄欖油  \n3/4茶匙鹽\n1/4茶匙黑胡椒 \n200克蝦去殼\n1顆洋蔥切碎\n1湯匙蒜末 \n1/4茶匙切碎紅椒\n2杯小番茄切半\n200克佩克里諾起司磨碎\n100克羅勒切碎', 2),
(11, '義國風情', 5, '11_typical_SAP', 'Gennaro’s Spaghetti alla Puttanesca', '佳圖索煙花女義大利麵', '', 4, '15 mins', '簡單', '1. 將麵條放入煮沸的鹽水中煮10分鐘，並保留300毫升煮麵水。\n\n2. 將煎鍋放在中高火上，淋上橄欖油加入大蒜和辣椒，然後放入鯷魚和橄欖均勻欖攪拌到大蒜開始變黃。\n\n3. 加入番茄和300毫升煮麵水後蓋上蓋子，煮4分鐘。\n\n4. 將羅勒加入醬汁後再加上義大利麵。\n\n5. 在義大利麵上，撒上帕瑪森起司即可上菜。', '4瓣大蒜去皮切薄片\n1把黑橄欖切小塊\n500克小番茄切半\n2條紅辣椒切絲\n15克羅勒\n400克火炬麵\n2湯匙橄欖油\n3尾鯷魚\n帕馬森起司適量', 4),
(12, '周末派對', 1, '12_party_CPPWBSAB', 'Creamy Parmesan Pasta with Butternut Squash and Broccolini', '奶油起司義大利麵佐南瓜花椰菜', '', 8, '15 mins', '中等', '1. 醬料準備，用中火融化奶油後，加入大蒜和百里香炒至軟後加入麵粉攪拌均勻讓其煮3分鐘，再加入葡萄酒和10毫升雞湯攪拌均勻，當醬汁變稠時加入更多雞湯，再用帕瑪森起司檸檬汁和鹽調味至醬汁光滑。\n\n2. 將蔬菜放在兩個獨立的烤盤上，淋上少許橄欖油、鹽和胡椒，在400°F烘烤30分鐘。\n\n3. 將麵條放入煮沸的鹽水中煮10分鐘\n\n4. 將所有東西放在一起，用鹽和胡椒適當調味後，加入額外的肉湯以保持麵條鬆散，再加入南瓜子和帕瑪森起司。', '3湯匙奶油\n2瓣大蒜\n2茶匙百里香切碎\n3湯匙麵粉\n50毫升白葡萄酒 \n300毫升雞肉高湯\n30克帕瑪森起司\n少許檸檬汁\n適量鹽和胡椒\n800克胡桃南瓜切丁\n3顆花椰菜\n4湯匙橄欖油\n少許南瓜子', 4),
(13, '周末派對', 1, '13_party_L', 'Lasagne alla Bolognese', '百味肉醬千層麵', '', 8, '1 hr', '中等', '1. 用中高火加熱1湯匙橄欖油後加入大蒜炒2分鐘。\n\n2. 加入洋蔥和胡蘿蔔拌炒到洋蔥變半透明色，胡蘿蔔開始變軟。\n\n3. 加入肉末煮至棕色。\n\n4. 將番茄醬、番茄丁、義大利香料、紅辣椒片、海鹽和1/2茶匙黑胡椒加入鍋中。\n\n5. 將番茄醬煮沸後轉小火煮15分鐘。\n\n6. 預熱烤箱至400ºF。\n\n7. 將肉醬番茄醬汁平均鋪在盤子底部。\n\n8. 放上一張義大利千層麵在塗上里考塔起司，再塗上一層醬重複四次。', '2瓣大蒜切碎\n1個洋蔥切碎\n3根胡蘿蔔切碎\n250克牛肉\n1罐蕃茄罐頭\n1/4茶匙紅辣椒片\n1茶匙海鹽\n1茶匙胡椒粉\n300克瑞可塔起司\n50克帕瑪森起司磨碎\n1/2茶匙大蒜粉\n1把羅勒切片\n30克歐芹切碎\n2個雞蛋\n700克千層麵條\n300克莫札瑞拉起司切碎', 0),
(14, '周末派對', 1, '14_party_G', 'Garganelli with Morels and Peas', '奶油羊肚菌佐豌豆麵', '', 6, '30 mins', '普通', '1. 熱鍋將奶油融化後加入青蔥和大蒜拌炒5分鐘。\n\n2. 轉大火後加入羊肚菌拌炒5分鐘。\n\n3. 加入鮮奶油後轉小火煮至冒泡後奶油量減少約一半後加入龍蒿和瑪薩拉酒，再加入檸檬汁、鹽和胡椒調味。\n\n4. 同時準備另外兩個鍋子倒入水煮沸。一鍋煮麵8分鐘，另一鍋用來川燙碗豆約30秒。\n\n5.  將麵和豌豆倒入羊肚菌醬鍋內翻炒均勻。', '1湯匙奶油\n1顆紅蔥頭切碎\n1片蒜瓣切碎\n200克羊肚菌\n300克高脂鮮奶油\n2湯匙龍蒿切碎\n少許瑪薩拉酒\n1顆檸檬榨汁\n適量鹽和胡椒粉\n500克義大利麵\n2000克去殼或冷凍豌豆', 4),
(15, '義國風情', 5, '15_typical_TPG', 'Trofie Pasta Genovese', '熱那亞青醬松子麵', '', 2, '20 mins', '簡單', '1. 預熱烤箱至400ºF後，將松子放在烤盤上放入烤箱烘烤至金黃色後取出放涼。\n\n2. 將麵條放入煮沸的鹽水中煮10分鐘\n\n3. 將麵倒入平底鍋中加入青醬拌炒。\n\n4. 加鹽以及胡椒粉調味，盛盤後撒上松子和羅勒葉。', '150克特飛麵\n3湯匙羅勒青醬\n2湯匙松子\n適量鹽和胡椒\n1把羅勒葉', 4),
(16, '特殊節慶', 2, '16_occasion_C', 'Ligurian Corzetti Pasta with Walnut Sauce', '利古里亞壓花圓麵佐核桃醬', '', 4, '20 mins', '普通', '1. 使用攪拌機將除了起司外的材料一起拌勻做醬汁使用\n\n2. 加入帕瑪森起司一起拌勻。\n\n3. 將麵條放入煮沸的鹽水中煮10分鐘\n\n4. 將麵與醬汁一起在平底鍋內拌炒，醬汁與麵會呈現有光澤的奶油色\n\n5. 盛盤後再撒上些許的帕瑪森起司和少許馬里蘭葉', '150克的核桃剖半\n1片去皮蒜瓣\n1茶匙鹽\n80毫升橄欖油\n少許鼠尾草\n1把馬里蘭葉\n90克帕瑪森起司搗碎', 4),
(17, '健康輕食', 3, '17_light_Cpg', 'One-pot Casarecce Pasta', '一鍋到底義大利麵', '', 6, '20 mins', '簡單', '1. 在煎鍋中倒入橄欖油加熱，加入洋蔥拌炒至變軟。\n\n2. 加入香腸一起攪拌均勻至褐色。\n\n3. 加入雞高湯煮沸，將黏在底部的料均勻在湯中刮開。\n\n4. 加入麵條烹煮，並持續攪拌至高湯被麵條吸收，約15分鐘。\n\n5. 加入番茄和羅勒攪拌，盛盤後撒上帕瑪森起司。', '300毫升雞湯\n500克扭紋柴\n1個蕃茄罐頭\n5條義大利辣香腸\n1把羅勒葉切碎\n1顆洋蔥切碎\n2湯匙橄欖油\n1/2湯匙蒜末\n40毫升帕馬森起司磨碎', 4),
(18, '義國風情', 5, '18_typical_B', 'Pesto Trapanese Pasta', '特拉帕尼青醬麵', '', 4, '35 mins', '普通', '1. 將番茄用刀劃十字狀，在滾水中川燙一分鐘。\n\n2. 取出剝皮後切1/4並取出籽，簡單切碎果肉備用。\n\n3. 預熱烤箱至400ºF後烘烤杏仁至金黃色，約10分鐘。\n\n4. 將大蒜、羅勒葉和鹽少許，倒入兩湯匙橄欖油研磨到變乳狀。\n\n5. 加入杏仁磨碎至細緻奶油狀（含有些許顆粒口感即可）。\n\n6. 加入番茄和一湯匙橄欖油攪拌均勻成乳狀，再用胡椒調味。\n\n7. 在煎鍋中放入麵包丁和一些橄欖油煎至表面金黃色。\n\n8. 與煮熟的義大利麵一起拌勻後，盛盤撒上帕瑪森起司。', '10顆小蕃茄\n85克杏仁\n去皮大蒜4瓣切碎\n少許手撕羅勒葉\n4湯匙橄欖油\n40克乾麵包丁或帕瑪森起司\n適量鹽和胡椒', 4),
(19, '開胃前菜', 4, '19_starter_M', 'Pasta with Burst Cherry Tomato Sauce', '番茄醬燒義大利麵', '', 4, '20 mins', '簡單', '1. 將整顆小蕃茄放入煎鍋中，並加入未剝皮的蒜瓣、羅勒葉、松子、橄欖油、碎辣椒和少許鹽稍加拌炒。\n\n2. 蓋鍋蓋用中火烹煮約10分鐘後，用勺子壓碎番茄。\n\n3.將麵條放入煮沸的鹽水中煮10分鐘。\n\n4.將麵倒入醬汁鍋內攪拌均勻，撒上磨碎的帕瑪森和黑胡椒稍加拌炒後即可盛盤。', '800克小番茄\n3瓣大蒜壓碎\n少許辣椒\n4湯匙橄欖油\n10 片羅勒葉\n25克松子仁\n適量鹽和胡椒', 4),
(20, '特殊節慶', 2, '20_occasion_C', 'Cenicioni Pasta with Caramelized Shallots in a Creamy Mushroom Sauce', '奶油香菇醬佐焦糖紅蔥麵', '', 2, '1 hr', '中等', '1. 在煎鍋中加入1湯匙奶油和一茶匙糖，加入蔥片攪拌均勻混合。\n\n2. 轉小火煮30分鐘，每5分鐘攪拌一次至金黃色後起鍋備用。\n\n3. 另一煎鍋熱鍋後，加入2湯匙奶油融化後，放入蘑菇拌炒直到變深棕色。\n\n4. 加入牛奶、白酒和鼠尾草轉小火煮20分中直到醬汁變濃稠。\n\n5. 加入玉米澱粉均勻攪拌再加入鹽。\n\n6.將麵條放入煮沸的鹽水中煮10分鐘。\n\n7. 將麵倒上蘑菇醬、鼠尾草和橄欖油。\n\n8. 最後再撒上埃斯阿格起司和焦糖紅蔥。', '1顆大紅蔥切碎\n170克抹布麵\n300毫升全脂牛奶\n100克側耳菇切碎\n150克埃斯阿格起司磨細\n170毫升乾白酒\n3湯匙奶油\n2湯匙蘑菇和少許的鼠尾草及橄欖油\n2茶匙玉米澱粉\n1茶匙紅糖\n1/2茶匙鹽\n1/4茶匙乾鼠尾草', 4),
(21, '健康輕食', 3, '21_light_S', 'Simple Lemon, Basil and Courgette Pasta', '西葫蘆義大義麵佐清爽檸檬與羅勒', '', 2, '20 mins', '普通', '1. 熱鍋後加入奶油、大蒜和檸檬皮，再鍋中拌炒10秒鐘。\n\n2. 將西葫蘆加入鍋中快速拌炒後，加入馬斯卡彭起司、帕瑪森起司、檸檬汁和羅勒後混合拌炒均勻。\n\n3. 將麵條放入煮沸的鹽水中煮10分鐘，留下30毫升煮麵水，再一起倒入醬汁中均勻攪拌，在用鹽與胡椒調味。\n\n4. 盛盤後可加上用奶油煎的麵包丁增加風味。', '1湯匙奶油\n1瓣大蒜精細磨碎\n1顆檸檬榨汁削皮\n1個西葫蘆磨碎\n125克馬斯卡彭起司\n15克帕瑪森起司磨細\n1/2把羅勒葉切細\n250克義大利麵\n適量鹽與胡椒\n適量麵包屑', 4),
(22, '健康輕食', 3, '22_light_AWQTABS', 'Agnolotti with Quick Tomato and Basil Sauce', '義大利餃佐番茄與巴西里醬汁', '皮埃蒙特區是一塊農產豐足的地區，盛產小麥、稻米、玉蜀黍及葡萄。\n義大利餃起源於皮埃蒙特，為義大利北部的原始義大利麵食之一。', 4, '15 mins', '簡單', '1. 將枕頭餃放入煮沸鹽水煮5分鐘。\n\n2. 在中高火的煎鍋中加熱橄欖油與洋蔥攪拌直至洋蔥變軟與上色。爾後加入番茄和大蒜，一同攪拌直到番茄開始變軟。\n\n3.加入枕頭餃、起司、橄欖和羅勒均勻攪伴，起鍋後撒上帕馬森起司即可上菜。', '28顆枕頭餃\n2湯匙橄欖油\n1顆洋蔥切丁\n250克櫻桃番茄對切\n2個蒜瓣切成薄片\n50克帕瑪森起司磨碎\n30克橄欖，切成薄片\n20克羅勒切碎', 3),
(23, '開胃前菜', 4, '23_starter_TC', 'Tortellini Carbonara', '義大利餛飩佐培根', '義大利六分之一的人口居住在倫巴底區，首府為義大利北部的最大城市米蘭，可以說是充滿美食與文化的繁華地區。', 4, '15 mins', '簡單', '1. 將義大利餛飩放入煮沸的鹽水煮至4分鐘。\n\n2.在一個煎鍋以中火煎培根，直到酥脆後取出於紙巾，除去多餘水分。\n\n3.在鍋中加入鮮奶油、帕瑪森起司、巴西里和培根，通過中火加熱。稍微翻炒後加入義大利麵，均勻攪拌即完成料理。', '28顆義大利小餛飩\n8條培根條切碎\n180毫升鮮奶油\n50克帕瑪森起司磨碎\n90克巴西里切碎', 3),
(24, '周末派對', 1, '24_party_LAB', 'Lasagne alla Bolognese', '波隆那肉醬千層麵', '艾米利亞-羅馬涅區是義大利最發達的大區之一，亦是義大利著名的美食天堂。\n波隆那肉醬千層麵為該地經典的義式美食，為著名卡通明星加菲貓的最愛。', 4, '45 mins', '普通', '1. 將牛奶倒入鍋中加熱，同時用另一個鍋子將奶油融化。\n\n2. 奶油融化後加入篩過的麵粉均勻攪拌。\n\n3. 牛奶加熱後加入肉豆蔻與少許鹽調味，倒入另一個鍋中均勻攪拌6分鐘，直到呈現稠狀完成調味醬。\n\n4. 取一個30x20公分大小的烤盤，先於底部塗上適量調味醬，放上麵條撲滿烤盤，再塗上調味醬、帕馬森起司與波隆那肉醬。重複動作四次。\n\n5. 於頂層撒上帕馬森起司，放入在預熱的烤箱中以400°F烘烤約25分鐘即可上桌。', '350克波浪寬帶麵\n1罐波隆那肉醬\n1公升全脂牛奶\n4湯匙奶油\n100克高筋麵粉\n少許肉荳蔻磨碎\n適量鹽\n250克帕馬森起司', 0),
(25, '義國風情', 5, '25_typical_BTP', 'Spaghetti with Truffle', '松露義大利麵', '溫布利亞，盛產橄欖、豆類、穀物和黑白松露，全區植被豐富常青，自然環境優美，素有義大利的綠色心臟之稱。\n松露為該地特產，也順理成章的成為該地國民美食，義大利麵的重要搭檔。', 4, '15 mins', '簡單', '1. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。\n\n2. 同時將一些羅勒葉浸泡於油中，同時專準備一個煎鍋，倒2湯匙橄欖油與大蒜加熱。\n\n3. 煎鍋中加入鹽漬鯷魚，均勻攪拌後，將大蒜取出並加入一大匙煮麵水與松露。\n\n4. 將麵與醬汁結合，再以些許松露與羅勒葉裝飾。', '450克圓直麵\n85克黑松露切碎\n1辦大蒜切丁\n1尾鹽漬鯷魚切碎\n5湯匙橄欖油\n10片羅勒葉', 0),
(26, '健康輕食', 3, '26_light_CWC', 'Conchiglioni with Chicken, Artichokes and Watercress', '貝殼麵佐雞肉與朝鮮薊與豆瓣菜', '', 4, '25 mins', '簡單', '1. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。\n\n2. 將橄欖油高溫烹煮雞肉拌炒2分鐘後，加入朝鮮薊和番茄煮一分鐘，然後加入雞湯煮沸。\n\n3. 將麵放入鍋一同翻炒後起鍋，放入盤中與韭菜和西洋菜中攪拌即可上菜。', '375克貝殼麵\n2茶匙橄欖油\n250克雞胸肉切碎\n340克罐裝醃製朝鮮薊，沖洗乾淨，瀝乾\n200克櫻桃番茄切半\n125毫升雞肉高湯\n30克韭菜切碎\n1把西洋菜', 3),
(27, '開胃前菜', 4, '27_starter_LFAPP', 'Lentil, Fetta and Pumpkin Pasta', '小帽麵佐菲達乳酪與南瓜扁豆', '', 4, '1 hr', '普通', '1. 將烤箱預熱到400°F 後，將南瓜片放在托盤上，淋上1湯匙油，烤到呈現金黃色。\n\n2. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。\n\n3. 在煎鍋倒入油中火加熱，放入洋蔥攪拌直到軟化，在加入扁豆拌炒2分鐘。\n\n4. 將烤好的南瓜放入大碗，加入洋蔥混合物、義大利麵、胡椒、羅勒和菲達起司均勻攪拌，最後配上混合沙拉蔬菜即可上菜。', '800克胡桃南瓜去皮去子切丁\n2湯匙橄欖油\n350克小帽子\n1顆紅洋蔥切成薄片\n400克可以棕色扁豆瀝乾沖洗\n175克菲達起司\n1把新鮮羅勒葉\n混合沙拉蔬菜', 3),
(28, '開胃前菜', 4, '28_starter_IPGB', 'Individual Pumpkin and Gnocchi Bakes', '焗烤南瓜玉棋麵', '', 4, '25 mins', '簡單', '1. 將烤箱預熱至200C後，將南瓜放入沸水中煮到變軟後將水瀝乾。\n\n2. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。\n\n3. 將南瓜、玉棋、菠菜、豌豆和義大利紅麵醬混合在一個大碗後，盛裝在四個的耐熱盤中，上頭均勻撒上切達起司，放入烤箱烘烤至金黃色即可上菜。', '500克玉棋\n600克胡桃南瓜去籽去皮切塊\n200克嫩菠菜葉\n120克冷凍豌豆\n1罐義大利麵紅醬 \n60克切達起司磨碎', 1),
(29, '健康輕食', 3, '29_light_SVP', 'Spring Vegetable Pasta', '春季蔬菜義大利餃', '', 4, '10 mins', '簡單', '1. 把一鍋鹽水水煮沸後， 加入義大利餃煮5分鐘。\n\n2. 在煎鍋中加入3湯匙的橄欖油，用中大火拌炒豌豆和大蒜約2分鐘。\n\n3. 加入蘆筍和西葫蘆，再攪拌到蔬菜呈鮮綠色嫩，然後加入青蔥煮1分鐘。\n\n4. 起鍋後將內容物與檸檬汁調和，然後將義大利麵與3湯匙的橄欖油拌勻，最後加入鹽和胡椒調味，擺盤後灑上起司即可上菜。', '28顆義大利餃\n80毫升橄欖油\n400克綠豌豆去殼\n3個蒜瓣壓碎\n3束嫩鮮蘆筍切5公分長\n6湯匙橄欖油\n4個小西葫蘆切成細長條狀\n半串青蔥切成薄片\n2顆檸檬榨汁\n適量鹽和黑胡椒粉\n帕瑪森起司削薄', 3),
(30, '健康輕食', 3, '30_light_SS', 'Spring Vegetable Soup with Ravioli', '義式餃子蔬菜湯', '', 4, '15 mins', '簡單', '1. 在煎鍋中放入油用中火加熱後，加入韭菜偶爾攪拌至變軟，然後加入清湯和水，蓋蓋子使其煮沸。\n\n2. 加入胡蘿蔔煮5分鐘後，加入義式餃子、西葫蘆和蘆筍再煮5分鐘，然後用鹽和胡椒調味。\n\n3. 盛入碗中並撒上韭菜即可上菜。', '28顆義式餃子\n2茶匙橄欖油\n1把韭菜留蒼白的部分切成薄片\n1公升雞肉清湯\n500毫升水\n1根中等胡蘿蔔去皮切成薄片\n1顆中等西葫蘆切成薄片\n1束蘆筍除去末端切成3公分片狀\n2湯匙韭菜切碎', 3),
(31, '周末派對', 1, '31_party_CAB', 'Crunchy Agnolotti Bites', '鬆脆枕頭餃', '', 4, '10 mins', '簡單', '1. 將枕頭餃塗上麵粉浸入蛋液中，然後在裹上麵包屑，放在有鋪烘焙紙的托盤上。\n\n2. 將適量的油倒入平底鍋中，約可覆蓋枕頭餃的高度以中高火加熱鍋子，分批炸餃子直到餃子呈金黃色，起鍋後放置到有紙巾的盤子，與準備好的辣醬搭配。', '28顆枕頭餃\n1湯匙麵粉\n1個雞蛋打散\n200克麵包屑\n米糠油\n香辣番茄醬', 3),
(32, '義國風情', 5, '32_typical_BIS', 'Bigoli in Salsa', '威尼斯鯷魚麵', '', 4, '20 mins', '簡單', '1. 將鯷魚中的一些油倒入煎鍋後，將洋蔥輕輕煎至黃金色，同時將麵條放入煮沸的鹽水中煮10分鐘。\n\n2. 把酒和50毫升煮麵水倒入煎鍋，連同洋蔥一起煮到水份揮發到原本的四分之三。\n\n3. 把鯷魚加入煎鍋後後攪拌至溶解。\n\n4. 把義大利麵瀝乾後，放入煎鍋與鯷魚、洋蔥均勻攪拌後，撒上切碎的巴西里和一些黑胡椒粒。', '1顆洋蔥切丁\n2尾油漬鯷魚\n50毫升白酒\n250克威尼斯經典圓粗麵\n1把巴西里切碎\n少許黑胡椒粒', 0),
(33, '義國風情', 5, '33_typical_BCL', 'Bigoli Con L\'anatra', '鴨肉醬義大利麵', '威尼托區從多洛米蒂山脈延伸至橫跨大海的平原，以及著名的威尼斯島嶼。\n該地區農業的主要產品是菊苣、蘆筍、玉米粥以及加爾達湖周圍的淡橄欖油，而奶產品則有艾斯阿格乾酪，另一方面鱈魚為世界上內廣為人知。', 4, '35 mins', '簡單', '1. 在煎鍋中，把橄欖油和奶油混合加熱，將洋蔥、大蒜和胡蘿蔔炒至金褐色後，再加入鴨肉一樣煎至金褐色。（如果鴨肉有多餘油脂，可以瀝一點油讓麵清爽一些）。 \n\n2. 將紅酒倒在煎鍋中後，讓其蒸發再依個人口味加入鹽調味。\n\n3. 加入雞高湯煮至到高湯減少到只剩幾湯匙的量，醬汁應該些許濃稠後，加入少許百里香、月桂葉，最後加入鮮奶油一起燉煮，同時將麵條放入煮沸的鹽水中煮10分鐘。\n\n4. 當義大利麵煮熟後，放入帶有醬汁的煎鍋中並均勻攪拌，撒上新鮮磨碎的格拉娜帕達諾起司和切碎的巴西里。', '2湯匙橄欖油\n200克鴨肉\n30克奶油\n350克威尼斯經典圓粗麵\n60克番茄\n半顆洋蔥切丁\n5百毫升雞高湯\n3辦大蒜切碎\n1根紅蘿波切絲\n50毫升紅酒\n4湯匙鮮奶油\n少許百里香、月桂葉和巴西里\n少許格拉娜帕達諾起司', 0),
(34, '周末派對', 1, '34_party_BA', 'Bucatini all’Amatriciana', '辣味培根茄汁吸管麵', '', 4, '20 mins', '簡單', '1. 煎鍋加橄欖油炒香洋蔥、辣椒跟培根5分鐘。\n\n2. 煮醬汁的同時，用滾水加鹽將吸管麵煮10分鐘。\n\n3. 白酒加入煎鍋煮沸，再加入番茄泥、鹽跟黑胡椒調味, 改小火續煮15分鐘, 中間如果太乾, 可加一點煮麵水。\n\n4. 將麵加入番茄醬汁中，再加一點煮麵水，邊拌炒至汁收乾麵入味為止，熄火後加上一些磨粉的起司拌一下。', '350克吸管麵\n2湯匙橄欖油\n400克蕃茄泥 \n40毫升白酒\n半顆洋蔥切丁\n1根辣椒去仔切絲\n少許黑胡椒\n適量帕瑪森起司磨碎\n適量鹽\n4片培根切條狀', 0),
(35, '健康輕食', 3, '35_light_SPC', 'Shrimp Pesto Capellini', '鮮蝦青醬細髮麵', '', 4, '15 mins', '簡單', '1. 沸水加入一大匙鹽，放入義大利細麵煮3分鐘。\n\n2. 蝦仁以胡椒、鹽及白酒抓碼，醃10分鐘。\n\n3. 起油鍋大火煎蝦仁，一面各約一分鐘。\n\n4. 將青醬、蒜末和橄欖油拌勻，微波30秒。\n\n5. 混合青醬與義大利麵，嫩菠菜鋪盤底，放上香煎蝦仁與甜椒丁，最後灑上檸檬汁即可上菜。', '24隻蝦仁\n8湯匙青醬 \n350克細髮麵\n1把嫩菠菜\n2顆黃甜椒切丁\n8瓣蒜頭切末\n2湯匙檸檬汁\n2湯匙橄欖油\n少許研磨胡椒\n適量鹽\n2湯匙白酒', 0),
(36, '健康輕食', 3, '36_light_BCFWW', 'Bonito Cold Fedelini with Watercress', '鰹魚水菜冷麵', '', 4, '5 mins', '簡單', '1. 鰹魚半敲燒切成1cm左右，水菜去除根部後切成4cm長，並將莖葉分離，將莖的部分放入濾網中。\n\n2. 醬油與橄欖油放入碗中攪拌均勻，並加入鰹魚和水菜葉拌勻。\n\n3. 將麵條放入加鹽的滾水中煮3分鐘，將湯汁倒入步驟1放有水菜莖的濾網中，川燙順便瀝乾麵條，使用冰水冷卻後去除水氣，將步驟2的材料加入拌勻。\n\n4. 盛盤後淋上些許橄欖油。', '250克義大利細麵\n150克鰹魚半敲燒\n2/3束水菜\n4茶匙醬油\n2湯匙橄欖油', 0),
(37, '開胃前菜', 4, '37_starter_FPSWVAS', 'Fusilli Pasta Salad with Vegetables and Squid', '鮮蔬透抽螺旋麵沙拉', '', 4, '15 mins', '簡單', '1. 朝鮮薊放入加了檸檬汁的水中浸泡，避免氧化變黑。\n\n2. 將麵條放入加鹽的滾水中稍微攪拌，在螺旋麵煮8分鐘後，放入所有蔬菜，適時攪拌烹煮3分鐘，最後放入透抽。\n\n3. 將所有食材撈起瀝乾，淋上橄欖油、檸檬、鹽及黑胡椒調味。', '350克螺旋麵\n2根紅蘿蔔去皮切絲\n2根櫛瓜切絲\n8瓣蒜頭切末\n2隻透抽切條\n2湯匙橄欖油\n適量白酒\n適量鹽和黑胡椒\n1顆朝鮮薊切絲', 0),
(38, '義國風情', 5, '38_typical_FWLGPAC', 'Fusilli With Lean Ground Pork and Courgette', '肉燥螺旋麵', '', 4, '20 mins', '簡單', '1. 煎鍋大火加橄欖油炒蒜末跟碎肉約5-7分鐘後，轉小火加入半杯白酒，蓋蓋子慢火煮10分鐘。\n\n2. 櫛瓜用鹽水煮沸三分鐘後，瀝乾加入醬油和胡椒調味，同時將螺旋麵放入剛剛煮沸過的水煮10分鐘\n\n4. 把義大利麵瀝乾後，放入煎鍋與碎肉櫛瓜均勻攪拌。', '350克螺旋麵\n2湯匙橄欖油\n240克碎豬肉\n2根櫛瓜切丁\n50毫升白酒\n1湯匙醬油\n2瓣蒜頭切末', 0),
(39, '特殊節慶', 2, '39_occasion_FBA', 'Fusilli Bucati all\'Arrabbiata', '橄欖油蕃茄彈簧麵', '', 4, '20 mins', '簡單', '1. 橄欖油小火煎蒜片和辣椒片，直到蒜片變金黃色，同時將麵條放入煮沸的鹽水中煮10分鐘。\n\n2. 撈起蒜片和辣椒後加入番茄丁，煮到軟後依序加入蒜片、辣椒、檸檬汁、鹽及黑胡椒，。\n\n3. 把義大利麵瀝乾後，放入煎鍋均勻攪拌即可上菜。', '350克彈簧麵\n2湯匙橄欖油\n1根辣椒切絲\n半湯匙檸檬汁\n8瓣蒜頭切末\n2顆牛蕃茄切丁\n1把巴西里切碎\n適量黑胡椒\n適量鹽', 0),
(40, '特殊節慶', 2, '40_occasion_FBLRPS', 'Fusilli Bucati Lunghi With Roasted Red Pepper Sauce', '烤紅椒醬空心螺旋長麵', '', 4, '30 mins', '中等', '1. 橄欖油中火煎炒紅甜椒、洋蔥和紅蘿波, 直到洋蔥變焦黃後，轉小火加入370毫升的水加鍋蓋，悶煮20分鐘，同時將麵條放入煮沸的鹽水中煮10分鐘。\n\n2. 將煎鍋裡的食材攪拌成泥狀並加入鹽及黑胡椒。\n\n3. 把義大利麵瀝乾後，放入煎鍋與烤紅椒醬均勻攪拌即可上菜。', '350克長彈簧麵\n2湯匙特級大蒜風味橄欖油\n2顆烤過紅甜椒切丁\n半顆洋蔥切丁\n1根紅蘿波切丁\n適量鹽和黑胡椒', 0),
(41, '周末派對', 1, '41_party_AHPWSALCS', 'Angel Hair Pasta with Shrimp and Lemon Cream Sauce', '檸檬奶油鮮蝦天使麵', '', 4, '30 mins', '簡單', '1. 鮮奶油中火加熱融化至微冒泡後，放入蘑菇炒到八分熟，同時將麵條放入煮沸的鹽水中煮10分鐘。\n\n2. 加入巴西里、黑胡椒、綠花椰、檸檬汁炒到蔬菜全熟，並加入鹽及黑胡椒。\n\n3. 把義大利麵瀝乾後，與蝦子一起放入奶油蔬菜裡混合均勻即可上菜。', '350克天使麵\n8湯匙鮮奶油\n3朵花椰菜切塊\n20顆蘑菇切塊\n8湯匙檸檬汁 \n1把巴西里切碎\n12隻蝦子燙熟\n適量鹽和黑胡椒', 0),
(42, '健康輕食', 3, '42_light_WWPWGCP', 'Wagon-Wheel Pasta with Goat Cheese Pasta', '馬車輪山羊奶酪義大利麵', '', 4, '20 mins', '簡單', '1. 將義大利麵加入煮沸鹽水鍋中煮10分鐘。\n\n2. 加入皇帝豆，同時煎鍋倒入橄欖油用中火加熱，再加入洋蔥煮至褐色。\n\n3. 將豆子瀝乾，然後保留500毫升水，並將義大利麵、豆子、洋蔥、奶油、百里香、鹽和胡椒一起放入鍋中攪拌均勻，最後加入山羊起司和預留的水收汁攪拌即可上菜。', '300克車輪麵\n200克冷凍皇帝豆\n1湯匙橄欖油\n1顆大洋蔥切薄片\n2湯匙奶油\n1湯匙百里香切碎\n1/2茶匙鹽\n1/4茶匙黑胡椒粉\n150克山羊起司切小塊', 1),
(43, '週末派對', 1, '43_party_ISWPCP', 'Italian Sausage with Parmesan Cheese Pasta', '義式香腸起司義大利麵', '', 4, '20 mins', '簡單', '1. 將義大利麵加入煮沸鹽水鍋中煮10分鐘。\n\n2. 在中高火的煎鍋中加熱橄欖油，並加入大蒜和洋蔥炒約2分鐘。\n\n3. 加入義大利香腸煎5分鐘，再加入葡萄酒、碎番茄和義大利麵紅醬拌勻。\n\n4. 拌勻後加入鹽與胡椒調味，調小火煮10分鐘。\n\n5. 將義大利麵與醬汁混合，撒上歐芹、羅勒和帕瑪森起司即可食用。', '350克大型粗通心粉\n2湯匙橄欖油\n2根義大利香腸切塊\n2個蒜瓣切碎\n50克洋蔥切碎\n300毫升牛肉湯\n28顆番茄壓碎\n半罐義大利麵紅醬\n1湯匙歐芹切碎\n1湯匙羅勒切碎\n1/2茶匙鹽\n1/4茶匙黑胡椒粉\n帕瑪森起司', 1),
(44, '開胃前菜', 4, '44_starter_RWEP', 'Ratatouille with Eggplant Pasta', '普羅旺斯茄子義大利麵', '', 6, '45 mins', '簡單', '1. 將扁豆放入煎鍋中，加入400毫升水煮滾讓扁豆熟透，約10分鐘。\n\n2. 再加入義大利麵拌煮10分鐘。\n\n3. 用中火將番茄醬、韭菜、大蒜和義大利調味料混合煮10分鐘。\n\n4. 加入茄子拌煮至熟透，約15分鐘。\n\n5. 將義大利麵與扁豆、白葡萄酒醋入鍋拌煮，若太乾可加入200毫升水。\n\n6. 撒上羅勒即可上菜。', '100克綠扁豆\n350克螺旋麵\n200克番茄醬\n1把韭菜切碎\n1瓣大蒜切碎\n1/4茶匙義大利調味料\n2個未剝皮的茄子切片\n1/2茶匙白葡萄酒醋\n2湯匙羅勒切碎', 1),
(45, '義國風情', 5, '45_typical_CTSP', 'Creamy Tuscan Shrimp Pasta', '奶油托斯卡納鮮蝦義大利麵', '', 4, '15 mins', '簡單', '1. 將義大利麵加入煮沸鹽水鍋中煮10分鐘。\n\n2. 將橄欖油倒入煎鍋轉中火，油熱了後加入鮮蝦拌炒至粉紅色，再將鮮蝦取出放在盤子備用。\n\n3. 鍋子加入青蔥拌炒2分鐘，再加入大蒜拌炒1分鐘。\n\n4. 倒入白葡萄酒，煮至湯汁減半。\n\n5. 加入番茄乾和奶油慢慢煮沸。\n\n6. 加入切碎的菠菜，快速攪拌一下。\n \n7. 加入香菜和帕瑪森起司、濃奶油醬拌煮，可依需求加入適當的鹽和胡椒。\n\n8. 將前面煮好的鮮蝦和義大利麵放入鍋中加熱即可。', '100克大蝦去殼\n2瓣大蒜切碎\n2湯匙橄欖油\n50克青蔥切碎\n150毫升白葡萄酒\n50克番茄乾切成條狀\n1罐奶油醬\n50克帕瑪森起司切碎\n120克菠菜莖去除切碎\n1茶匙香菜\n300克螺絲粉\n適量鹽和胡椒', 1),
(46, '週末派對', 1, '46_party_CTWBP_', 'Creamy , Tomato with Beef Pasta', '奶油番茄牛肉義大利麵', '', 4, '15 mins', '簡單', '1. 將義大利麵加入煮沸鹽水鍋中煮11分鐘。\n\n2. 將牛肉放入煎鍋中，同時將它碾碎拌炒，再加入義大利麵紅醬攪拌。\n\n3. 加入奶酪、酸奶油、韭菜、鹽和胡椒快速攪拌結合。\n\n4. 將煮好的麵條放進鍋中，與調製好的醬汁攪拌均勻即可。', '350克斜管麵\n150克碎牛肉\n1罐義大利麵紅醬\n100克奶油\n20毫升奶酪\n30克酸奶油\n1湯匙韭菜切碎\n1茶匙鹽\n1茶匙黑胡椒粉', 1),
(47, '健康輕食', 3, '47_light_MAGCP', 'Mushroom & Goat Cheese Pasta', '蘑菇山羊奶酪意大利麵', '', 2, '30 mins', '簡單', '1. 將義大利麵加入煮沸鹽水鍋中煮11分鐘，保留50毫升煮麵水備用。\n\n2. 在平底鍋高溫狀態下加入橄欖油、麵包屑、大蒜與百里香，再加入鹽和胡椒調味拌煮3分鐘。\n\n3. 等到麵包屑呈現金黃狀態，將百里香枝條取出。\n\n4. 加入番茄醬依個人喜好加入少許辣椒片，並持續攪拌30秒。\n\n5. 加入50毫升水拌煮3分鐘，做收汁的動作。\n\n6. 把義大利麵放入平底鍋中，加入蘑菇、奶油、山羊起司、菠菜、豌豆用中火拌煮2分鐘，直到菠菜熟透、醬與麵攪和均勻攪拌。\n\n7. 用大蒜、百里香、麵包屑和帕瑪森起司裝飾即可上菜。', '180克蝸牛麵\n180克菠菜\n60克蘑菇切片\n2瓣大蒜切碎\n30克豌豆\n1小撮百里香\n3湯匙麵包屑\n2湯匙奶油\n2湯匙番茄醬\n1小顆洋蔥切片\n1/4茶匙碎紅辣椒片\n20克帕瑪森起司磨碎\n2湯匙山羊起司', 1),
(48, '健康輕食', 3, '48_light_AAPP', 'Asparagus ＆ Pea Pasta', '蘆筍碗豆義大利麵', '', 2, '10 mins', '簡單', '1. 將義大利麵放入煮沸鹽水煮10分鐘。\n\n2. 用中火加熱平底鍋倒入橄欖油，放入松子仁烘烤拌炒3分鐘。.\n\n3. 將蘆筍、碗豆和辣椒放入煎鍋拌炒約4分鐘，接著把義大利麵放進均勻拌炒，放上綿羊起司和撒上胡椒即可。', '180克麻花捲麵\n150克蘆筍較嫩的部位留下，其餘去除掉，長度切成約1公分\n100克豌豆\n1顆檸檬削皮\n50克松子仁\n少許紅辣椒片\n100克綿羊起司弄碎\n1湯匙橄欖油\n少許鹽和胡椒', 1),
(49, '義國風情', 5, '49_typiacl_CTAPP', 'Creamy Tomato & Pancetta Pasta', '奶油番茄燻肉義大利麵', '', 2, '10 mins', '簡單', '1. 將雞湯塊放入一鍋500毫升的煮沸鹽水煮到融化，再放入義大利麵。\n\n2. 將煎鍋倒入橄欖油用中火加熱，放入燻肉拌炒至金黃酥脆。\n\n3. 接著將大蒜、牛至、番茄放入雞湯塊湯鍋中加入糖，蓋蓋子用大火煮7分鐘，偶爾攪拌一下，避免讓義大利麵黏在鍋底。\n\n4. 打開蓋子開始攪拌5分鐘做收汁的動作，如果看起來太乾，可再加一點水。\n\n5. 最後放上韭菜、起司即可上菜。', '20顆番茄切碎\n10克韭菜\n200克貝殼麵\n2茶匙糖\n1蒜瓣切丁\n80克燻肉切片\n1湯匙牛至切碎\n1個雞湯塊\n50克軟起司', 1),
(50, '週末派對', 1, '50_party_CMP', 'Chilli Mussels Pasta', '蒜辣藍青口貝義大利麵', '', 4, '15 mins', '簡單', '1. 將義大利麵放入煮沸鹽水10分鐘。\n\n2. 用中小火加熱平底鍋，倒入橄欖油加熱後，放入大蒜、辣椒輕輕拌炒1分鐘，當大蒜開始軟化後，擠破小番茄放入鍋內，釋放出番茄汁。\n\n3. 等番茄開始軟化後，加入藍青口貝和葡萄酒，蓋上鍋蓋悶煮數分鐘，直到藍青口煮熟。\n\n4. 把麵倒入鍋內和食材攪拌均勻後，蓋上鍋蓋悶1分鐘。\n\n5. 淋上少許橄欖油再撒上辣椒即可上菜。', '400克大型斜管麵\n400克藍青口貝\n1湯匙橄欖油\n3瓣大蒜切碎\n1根紅辣椒去籽切碎\n125毫升白葡萄酒\n400克小番茄\n適量鹽和胡椒', 1),
(51, '義國風情', 5, '51_typical_AWBS', 'Anchovy with Broccoli Sauce', '鯷魚青花椰菜義大利麵', '普利亞區處於義大利靴型地圖的鞋跟位置，這裡陽光充足，非常適合種植，所以擁有品種豐富的蔬菜，在這裡的蠶豆、青花椰菜、茄子、燈籠椒都可以被製作成義大利麵。', 4, '25 mins', '簡單', '1. 將花椰菜蒸熟，放一旁備用。\n\n2. 將義大利麵放入煮沸鹽水10分鐘後，預留200毫升煮麵水後面使用。\n\n3. 中火熱平底鍋，放入橄欖油炒大蒜和辣椒片，大約3分鐘。\n\n4. 加入蒸熟的花椰菜、鯷魚、鹽、胡椒和雞湯，用小火慢煮15分鐘，讓青花椰菜慢慢融化成醬。\n\n5. 加入起司和義大利麵攪拌均勻，再放上檸檬皮、胡椒和辣椒當裝飾即可。', '360克花椰菜切碎\n350克貓耳朵麵\n2湯匙橄欖油\n6個蒜瓣切碎\n適量鹽、胡椒與辣椒片\n1尾鯷魚切碎 \n60毫升雞湯\n30毫升帕瑪森起司磨碎\n裝飾用的檸檬皮', 1),
(52, '健康輕食', 3, '52_light_SWPC', 'Spinach with Parmesan Cheese Spaghetti', '菠菜帕瑪森起司義大利麵', '特倫提諾-阿迪傑區鄰近阿爾卑斯山脈，能夠欣賞到美麗的山景，另外還有純樸的鄉村景色，經常可看見大小約五公頃的小型釀酒酒莊，產出的葡萄酒品質相當優良。\n這裡的飲食簡單自然，喜歡以蔬菜乳製品入菜，口味清爽香醇。', 4, '30 mins', '簡單', '1. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。\n\n2. 將義大利麵、橄欖油放入鍋中，加入菠菜和鹽巴拌炒大約5分鐘，起鍋備用。\n\n3. 調中火，加入黃油不斷攪拌，直到黃油變褐色，再放入大蒜拌炒10分鐘。\n\n4. 將前面煮好的菠菜與義大利麵放入煮好的黃油和大蒜拌炒。\n\n5. 撒上帕瑪森起司和辣椒粉即可。', '1/2磅意大利麵\n2湯匙橄欖油\n1/4茶匙鹽\n12盎司新鮮菠菜\n3湯匙無鹽黃油\n2個蒜瓣切碎\n170克帕瑪森起司磨碎\n少許胡椒與辣椒粉', 1),
(53, '義國風情', 5, '53_typical_FCWH', 'Fontina Cheese  Spaghetti with Ham', '芳提那起司火腿義大利麵', '瓦萊達奧斯塔地區是義大利一個多山的行政區，這裡有著原產地保護認證的記分起司，口味香醇濃郁，被用於烹飪許多食品。', 4, '25 mins', '簡單', '1. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。\n2.在平底鍋中加入芳提斯起司，再加入奶油攪拌至融化。\n3.加入火腿拌炒，並放入適量鹽、胡椒以及奶油持續攪拌。\n4.倒入先前煮好的義大利麵，調成大火拌炒，讓醬汁均勻依附在麵體上。\n5.最後撒上帕瑪森起司即可。', '320克義大利麵\n300克芳提斯奶酪\n200克煮熟的火腿切成小塊\n30克黃油\n30克帕瑪森乾酪\n200毫升鮮奶油\n少許鹽', 1),
(54, '健康輕食', 3, '54_typical_FVG', 'Raviolini di Pere Ravioli Pasta with Pear', '起司義大利餃', '佛里烏利-威尼斯朱利亞是義大利的自治區，毗鄰威尼托政區亞得里亞海。\n該地區農業的主要產品是葡萄酒，特別是白葡萄酒為世界上內廣為人知。', 4, '20 mins', '簡單', '1. 將義大利餃放入煮沸的鹽水煮至4分鐘。 \n\n2. 將奶油放入平底鍋後開中火後，在放置義大利餃並加入1杯水、鹽和黑胡椒;均勻混合。\n\n3. 將義大利餃放到盤子上，撒上起司和和黑胡椒。', '28顆義大利餃\n4湯匙無鹽奶油 \n適量黑胡椒 ', 3),
(55, '義國風情', 5, '55_typical_TAP', 'Tripoline al Pesto', '青醬義大利麵', 'Pesto源自於pestare這個字，意思是搗碎或粉碎，指的是用研缽和杵製作醬汁的原始方法。\n早期羅勒傳到羅馬帝國之後，只在利古里亞地區與普羅旺斯地區種得好。這兩地的人就把羅勒就拿來代替原本羅馬Moretum醬中的香草，也把原本Moretum醬用的羊奶起司改成當地產的硬起司。熱那亞地區的利古里亞人更進一步在醬中加了松子增添美味。', 4, '20 mins', '簡單', '1. 將些許橄欖油、松子、大蒜和一小撮鹽放入食品攪拌機中混合後，再加入巴西里攪拌至奶油狀稠度。\n\n2. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘後留麵水。同時，在一個炒鍋中加入2湯匙橄欖油和6湯匙香蒜醬，低溫加熱至有香氣。\n\n3. 將2湯匙麵水和義大利麵加入香蒜醬中火均勻攪拌。\n\n4. 加入兩種起司和2湯匙麵水均勻攪拌，即可上菜。', '350克花邊闊麵\n100克羅勒\n2湯匙橄欖油\n30克松子\n適量鹽\n2瓣大蒜切碎\n100克綿羊起司磨碎\n50克佩克立諾起司', 0),
(56, '義國風情', 5, '56_typical_PWOR', 'Pici with Old Ragù', '經典義式肉醬烏龍麵', '義式手工圓麵Pici是義大利特有的手做麵條，發源於托斯卡納西恩納地區，口感飽滿有嚼勁；Ragù則是傳統搭配義大利麵的特製肉醬，搭配起來就是義大利原味！\n本地的熟酪及網烤肉類深受喜愛，托斯卡人對豆類獨具品味，最知名的是鼠尾草與橄欖油煮白豆。\n托斯卡人也喜愛濃湯其它較受歡迎的菜餚還有佛羅倫斯牛排及烤或酒燉野豬、鹿與兔等野味，通常以當地生產聞名於世的香堤酒來清洗野味。', 4, '35 mins', '普通', '1. 將兩大匙橄欖油放入平底鍋中火加熱，煸炒洋蔥、芹菜與胡蘿蔔，隨後加入豬肉、豬肉與牛肉，快炒至肉類變得棕黃。\n\n2. 加入紅酒煮至蒸發後，再加入蔬菜高湯，加些鹽與黑胡椒、番茄糊調味。\n\n3. 再倒入番茄醬調味，火轉小之後加入羅勒，烹煮約一個小時以上，如果太乾，可再加些蔬菜高湯。\n\n4. 將麵條放入煮沸的鹽水中煮8-10分鐘後，加入醬料攪拌均勻，撒上綿羊起司，即可上桌。', '350克義式烏龍麵\n150克豬肝切丁\n150克絞小牛肉\n150克切碎的豬肉\n500克番茄醬\n2湯匙橄欖油\n1顆洋蔥切丁\n1根胡蘿蔔切丁\n3根芹菜梗切丁\n3大匙番茄糊\n2湯匙用紅酒\n蔬菜高湯\n適量鹽與黑胡椒\n200克巴西里\n50克綿羊起司', 0),
(57, '特殊節慶', 2, '57_occasion_V', 'Vincisgrassi', '馬凱千層麵', '馬凱區位於亞得里亞海岸，自然是吃海鮮的好地方，馬爾凱人的日常生活中也少不了肉食，從鴿子到羊肉，他們無所不吃。\n鮮蛋意麵和烤箱烘焙的麵食在這里大受歡迎，馬凱千層麵是經典的傳統義大利麵食，面條軟滑可口，散發著白葡萄酒的清香，裡面點綴著牛肉、蔬菜和野生菇等。', 4, '45 mins', '中等', '1. 將奶油、帕馬火腿、洋蔥和胡蘿蔔放入平底鍋中，中火炒至金黃表面後，將蔬菜取出丟棄，只留帕馬火腿。\n\n2. 將雞肝放入平底鍋中，與火腿不停攪拌1分鐘後，倒入白酒直至蒸發並加入番茄醬攪拌均勻煮沸後，轉小火燉1.5小時。如果醬汁變乾，在烹飪過程中加少許水。\n\n3. 將牛腦放入檸檬水中5分鐘後瀝乾，同時將乾燥的牛肝菌浸泡在15毫升溫水中20分鐘，瀝乾保留牛肝菌液體。\n\n4. 將蘑菇、大蒜在橄欖油中煎5分鐘後，取出大蒜並丟棄。\n\n5. 將牛肝菌切成小塊並與蘑菇和牛肝菌液一起放入雞肝醬中，均勻攪拌後，將牛腦和胰臟切成小塊，加入牛奶、肉荳蔻和肉桂粉，品嚐醬汁味道並持續調至適當口味。\n\n6. 將奶油平均塗在千層麵烤盤， 將麵鋪成與盤子同寬，厚度約4英寸後，把4片千層麵加入煮沸鹽水與一湯匙橄欖油中煮8分鐘。\n\n7. 將3湯匙白醬塗在烤盤底部，然後蓋上一層千層麵後， 接著鋪上3湯匙的雞肝蘑菇醬以及白醬後，再蓋上另一層千層面，重複直到所有備料都用完為止，再加上一層千層面和白醬。\n\n8. 讓麵吸收醬汁至少4小時後，在預熱的烤箱（400華氏度）烘烤約25分鐘。\n\n9. 將烤熟的千層麵放在烤箱外約5分鐘後上桌。', '350克寬帶麵\n5湯匙奶油\n55克帕馬火腿切碎\n1顆洋蔥切成兩半\n1根胡蘿蔔切成兩半\n255克雞肝切塊\n20毫升不帶甜味白酒\n1湯匙番茄醬\n40毫升牛或雞高湯\n255克牛腦和胰臟\n1片檸檬\n20克牛肝菌\n110克蘑菇切絲\n1個蒜瓣壓扁\n2湯匙橄欖油\n30毫升全脂牛奶\n1茶匙磨碎的肉荳蔻\n1茶匙肉桂粉\n4湯匙義大利白醬\n適量鹽和黑胡椒粉', 0),
(58, '義國風情', 5, '58_typical_C', 'Carbonara', '義式培根蛋麵', '義式培根蛋麵Carbonara是一道起源於義大利語“木炭”的羅馬美食。其來源眾說紛紜，最有可能的三種為：\n據說當時制炭師傅休息時吃的義大利麵上都有從手上不小心撒下的小炭灰，后來餐廳就順勢推出這種上頭撒著黑胡椒，其名為「炭燒職人風味」的義大利麵，也就是Carbonara。\n由於燒制木炭的地點都離城市有段距離以及屬於重勞動工作，因此在食材上就會選擇易攜帶、便宜、不易壞能補充體力的食物，如義大利麵、雞蛋、鹽漬豬肉(或煙熏培根)、起司以及黑胡椒，用這些材料做出來就是Carbonara。\n19世紀時，法國大革命帶來的暴風雨席卷了整個歐洲，當時的義大利有個叫\"燒炭黨carbon\"的政治團體也企圖利用這股風潮來引發革命，但結果以失敗告終，后來在逃亡的過程中「燒炭黨」的某個中心人物也就這樣剛好的發明了這款名為Carbonara的義大利麵。', 4, '20 mins', '簡單', '1. 將雞蛋，蛋黃和綿羊起司攪拌均勻。\n\n2. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘。同時，用另一煎鍋中火加熱煎培根約3-5分鐘，直到肉變脆後取出。\n\n3. 義大利麵煮好後，保留100毫升煮的水，然後瀝乾。\n\n4. 將義大利麵和煮水與培根一起攪拌均勻後，加入雞蛋混合物并快速攪拌直至醬汁開始變稠。如果醬汁看起來太濃，可以加入些許保留的煮水。\n\n5. 用黑胡椒以及粗鹽調味，即可上菜。', '350克義大利麵\n4顆雞蛋\n1顆蛋黃\n220克培根（傳統為醃豬頰肉）切絲\n70克磨碎的綿羊起司\n適量黑胡椒跟粗海鹽', 0),
(59, '周末派對', 1, '59_party_AF', 'Linguine with Saffron Lamb Sauce', '從寬扁麵麵佐番紅花羊肉醬', '阿布魯佐區以下列食材而聞名：\n藏紅花、橄欖油、甘草、羊肉、羊奶起司、松露和蘑菇、紅蒜、迷迭香、熱辣椒以及蔬菜。', 4, '1 hr', '普通', '1. 將羊肉洗淨並輕拍。將洋蔥和大蒜用橄欖油炒至半透明後加入羊肉拌炒至褐色。\n\n2. 加入白酒，藏紅花和羊肉高湯後，用鹽和胡椒調味，蓋上鍋蓋煮約45分，在最後10分鐘的烹飪過程中加入羊肉。\n\n3. 在另一鍋中加入義大利麵煮10分鐘。\n\n4. 將羅勒葉切碎後加在煮好的羊排醬和瀝完水的義大利麵中，讓醬汁包覆在麵體上。\n\n5. 盛盤後撒上起司。', '600克羊腿\n1顆洋蔥切碎\n30克大蒜切碎 \n2湯匙橄欖油\n100毫升白酒\n少許藏紅花\n150毫升羊肉高湯\n適量鹽、胡椒粉\n350克細扁麵\n250克小番茄\n30克羅勒\n50克佩克里諾起司磨碎', 0),
(60, '特殊節慶', 2, '60_occasion_CCRDM', 'Cavatelli with Pork Ragout', '燉肉扭指麵', '莫利塞是一個小而美麗的地區，以其義大利麵和特級初榨橄欖油而聞名。\n盛產葡萄酒、穀物、橄欖油、蔬菜、水果和乳製品。', 4, '30 mins', '普通', '1. 將大蒜和歐芹放在豬肉上滾動並用一些烹飪繩子固定它們。把它們放在一邊。\n2. 將橄欖油用大火加熱後，放入半顆洋蔥、豬排骨和香腸煎熟後剁碎。\n3. 將辣椒、番茄醬和水放一起後煮沸，放入豬肉捲並加入適當的鹽和胡椒粉。蓋上蓋子，讓它在低火上煮至少1小時，並定期攪拌。醬汁烹飪得越多，它就會越美味，如果需要可以加一些水。準備好後，取出肉並放在一邊。\n4. 把一鍋鹽水水煮沸後， 加入義大利麵煮8分鐘。\n5. 義大利麵煮熟後放入煎鍋中轉中火，然後加入豬肉醬攪拌一分鐘。\n6. 加入羅馬綿羊起司和剩餘的切碎歐芹。', '400克扭指麵\n300克豬肉炸肉排\n300克義大利香腸（純豬肉）\n300克豬排骨剁塊\n4湯匙橄欖油\n半顆洋蔥\n1蒜瓣切碎\n1個乾紅辣椒（或1/2茶匙辣椒片）\n1公升番茄醬（passata）\n250毫升水\n適量鹽和胡椒\n1又1/2湯匙歐芹切碎\n50克綿羊起司磨碎', 4),
(61, '義國風情', 5, '61_typical_SAS', 'Spaghetti allo Scoglio', '海鮮義大利麵', '坎帕尼亞區屬於地中海型氣候，春夏乾爽宜人，降雨季節多在秋冬，適合各式各樣的作物生長，由於地理位子鄰近海，海鮮也是數一數二的。', 4, '35 mins', '簡單', '1. 用中火煮一鍋水，加入大蒜、紅辣椒拌煮1至2分鐘，直到大蒜成面半透明。\n\n2. 加入白葡萄酒、歐芹，慢火煮20分鐘，直至鍋內的水減少一半。\n\n3. 把一鍋鹽水水煮沸後， 加入義大利麵煮10分鐘後，倒入前面煮的醬鍋。\n\n4. 將所有的海鮮食材加入義大利麵一起拌炒，讓麵與醬汁裹均勻。\n\n5. 撒上歐芹裝飾即可。', '2湯匙橄欖油\n1個蒜瓣切碎\n1/4茶匙碎紅辣椒\n50毫升白葡萄酒\n2湯匙切碎的歐芹\n適量鹽和胡椒\n350克圓直麵\n210克小蛤蜊煮熟\n210克藍青口貝煮熟\n100克蝦煮熟', 1),
(62, '周末派對', 1, '62_party_B', 'Strascinati con Mollica e Peperoni Cruschi', '橄欖油炒紅椒乾義大利麵', '巴西利卡塔區在農業方面以栽種小麥、土豆為主，另亦有畜養牛隻。', 4, '35 mins', '普通', '1. 在平底鍋倒入兩湯匙的橄欖油炒辣椒，直到辣椒呈現褐色，過程需不斷翻炒避免燒焦，起鍋後再用紙巾吸多餘的油。\n\n2. 在同樣的油中，炒大蒜丁香，和碎麵包屑。\n\n3. 同時在煮沸的鹽水中放入義大利麵烹煮8分鐘後，瀝乾水分在與其他的料一起拌炒。\n\n4. 起鍋後在撒上起司和胡椒。', '350克拖捲麵\n80克麵包屑\n2瓣大蒜切碎\n四湯匙橄欖油\n少許紅椒去籽\n帕瑪森起司磨碎\n適量胡椒', 4),
(63, '特殊節慶', 2, '63_occasion_C', 'Fresh Tomato Anchovy Pasta', '鮮茄鯷魚義大利麵', '鯷魚和碎麵包塊為卡拉布里亞區名產，聖誕節時經常食用。', 4, '25 mins', '簡單', '1. 在煮沸的鹽水中烹煮義大利麵10分鐘。\n\n2. 在另一鍋內倒入油後，加入大蒜、番茄、羅勒、牛至和兩片辣椒片一起拌炒，用中火煮至番茄軟化且開始變乾。\n\n3. 加入鯷魚後以中火繼續烹煮，直到被煮成稠狀（約5分）。\n\n4. 加入1/4勺煮麵水和麵一起與醬拌炒，直到醬汁變得更濃稠且完美均勻包覆在麵條上，即可上菜。', '350克圓直麵\n2 瓣大蒜切碎\n8條鯷魚切碎\n2湯匙橄欖油\n14顆櫻桃或小番茄切半\n1/2茶匙羅勒\n1/2 茶匙牛至\n一撮辣椒片', 0),
(64, '健康輕食', 3, '64_light_PAN', 'Pasta Alla Norma', '西西里茄香諾瑪麻花麵', '西西里盛產茄子、番茄、酸豆、葡萄乾、松子。', 4, '1 hr', '普通', '1. 取一個深鍋放入蔬菜油加熱\n2. 將茄子洗淨切成寬約一公分的條狀\n3. 將茄子條放入鍋中油炸，直到變成棕色，取出後瀝乾並且放在廚房紙巾上吸收多餘的油份\n4. 取另一個深鍋用小火加熱橄欖油，放入大蒜煸炒幾分鐘\n5. 將番茄放入一個大碗，加些鹽調味，搗碎成番茄泥，然後加入牛至、黑胡椒、新鮮蘿勒葉，攪拌均勻之後，加入大蒜鍋中\n6. 用木匙攪拌併用小火烹煮。再加入四分之三的茄子條，繼續燉煮約40分鐘\n7. 當烹煮即將告一段落後，取一捧加鹽瑞科塔乳酪粉加入醬料鍋中融化\n8. 另外取個大鍋加水並且加鹽煮沸，將麵條放入鍋中，依據包裝上的指示將麵條煮至全熟彈牙\n9. 將麵條取出瀝乾之後，加入醬料鍋並且拌勻，用多彩的盤子盛裝，再撒些瑞科塔乳酪，並用剛才保留的茄子與新鮮蘿勒葉裝飾擺盤', '300g義大利麻花麵\n1把新鮮蘿勒葉\n400g剝皮番茄\n1瓣大蒜\n1顆大胖茄\n含鹽瑞科塔乳酪\n冷壓初榨橄欖油\n蔬菜油少許\n鹽與黑胡椒\n5公升水', 4),
(65, '特殊節慶', 2, '65_occasion_SC', 'Sardinian Culurgiones', '薩丁尼亞餃', '薩丁尼亞島是一個多山的島嶼，周圍環繞著地中海的翡翠海域，擁有獨特的自有的文化。\n因為地理條件，鮪魚和烏魚的菜餚在薩丁尼亞島很常見。\n羊奶起士幾乎被使用在薩丁尼亞島的每一餐菜餚。', 4, '40 mins', '簡單', '1. 準備醬汁，將油和大蒜煎直至蒜頭變金黃色後，加入義大利蕃茄泥和60毫升的水，蓋上蓋子，讓醬汁煮30分鐘並時常攪拌。\n\n2. 將一大鍋鹹水煮沸。 烹煮義大利餃約 4分鐘後，放在撲滿番茄醬的熱盤子上，用一些巴西里裝飾義大利餃即可上菜。', '28顆義大利餃\n300克義大利蕃茄泥\n2湯匙特級初榨橄欖油\n1蒜瓣壓碎', 3);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_list`
--

CREATE TABLE `recipe_list` (
  `sid` int(1) DEFAULT NULL,
  `recipe_type_ch` varchar(4) DEFAULT NULL,
  `recipe_type_en` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_list`
--

INSERT INTO `recipe_list` (`sid`, `recipe_type_ch`, `recipe_type_en`) VALUES
(1, '週末派對', 'Party'),
(2, '特殊節慶', 'Occasion'),
(3, '健康輕食', 'Light'),
(4, '開胃前菜', 'Starter'),
(5, '義國風情', 'Typical');

-- --------------------------------------------------------

--
-- Table structure for table `sauce_info`
--

CREATE TABLE `sauce_info` (
  `sid` int(1) DEFAULT NULL,
  `image` varchar(19) DEFAULT NULL,
  `img_bgs` varchar(23) DEFAULT NULL,
  `Name_Ch` varchar(7) DEFAULT NULL,
  `Name_En` varchar(20) DEFAULT NULL,
  `Price` int(3) DEFAULT NULL,
  `Description` varchar(115) DEFAULT NULL,
  `Ingredient` text,
  `Pasta_image` varchar(19) DEFAULT NULL,
  `Pasta_name_en` varchar(16) DEFAULT NULL,
  `Pasta_name_ch` varchar(6) DEFAULT NULL,
  `Pasta_no` varchar(4) DEFAULT NULL,
  `pasta_sid` int(2) DEFAULT NULL,
  `recipe_sid` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sauce_info`
--

INSERT INTO `sauce_info` (`sid`, `image`, `img_bgs`, `Name_Ch`, `Name_En`, `Price`, `Description`, `Ingredient`, `Pasta_image`, `Pasta_name_en`, `Pasta_name_ch`, `Pasta_no`, `pasta_sid`, `recipe_sid`) VALUES
(1, 'Sauce_1_Basilico', 'Sauce_1_Basilico_bgs', '蕃茄羅勒番茄醬', 'Basilico sauce', 160, '羅勒蕃茄義大利麵醬是傳統義大利美食的體現，簡單的配料、 味道豐富、香氣濃郁的新鮮羅勒，和百分之百新鮮摘採的義大利蕃茄。', '蕃茄糊<br>\n蕃茄醬<br>\n水<br>\n胡蘿蔔<br>\n橄欖油<br>\n羅勒<br>\n鹽<br>\n洋蔥<br>\n糖<br>', 'P7_Maltagliati', 'Maltagliati', '亂切麵', 'P°7', 33, 19),
(2, 'Sauce_2_Puttanesca', 'Sauce_2_Puttanesca_bgs', '煙花女醬', 'Puttanesca sauce', 180, '煙花女醬來自拿坡里海灣上的一個小島Ischia，據說餐館主人半夜遇到一群飢腸轆轆的客人，飆罵髒話要求隨便拿出任何食物都好，無奈之下廚師使用廚房僅剩的幾顆番茄、幾顆橄欖和一小把的酸豆做成醬汁，意外大受好評，進而衍伸出現在的煙花女醬。', '番茄<br>\n橄欖油<br>\n鳳尾魚<br>\n橄欖<br>\n酸豆<br>\n大蒜<br>', 'P21_Garganelli', 'Garganelli', '溝紋管麵', 'P°21', 47, 11),
(3, 'Sauce_3_Genovese', 'Sauce_3_Genovese_bgs', '熱那亞醬青醬', 'Genovese sauce', 170, '熱那亞醬青醬是那不勒斯的主要意大利麵醬，也是其烹飪歷史的重要組成部分，在15或16世紀被引入熱那亞。', '洋蔥<br>\n胡蘿蔔<br>\n芹菜<br>\n大蒜<br>\n馬鬱蘭<br>\n培根<br>\n義大利燻火腿<br>\n豬油<br>', 'P14_Troffiette', 'Troffiette', '特飛麵 ', 'P°14', 40, 35),
(4, 'Sauce_4_Walnut', 'Sauce_4_Walnut_bgs', '核桃醬', 'Walnut sauce', 200, '早於義大利番茄紅醬發明，約十八世紀中期，因番茄被歐洲人認為是有毒的，因此在製作醬汁烹飪麵食時，想到可以以磨碎的堅果來代替奶油和油膩的醬汁。', '核桃<br>\n特級初榨橄欖油<br>\n大蒜<br>\n荷蘭芹<br>\n鹽<br>\n菲爾雷迪薩爾德納起司(fior di Sardegna)<br>\n托斯卡納起司(Tuscan caciotta)<br>', 'P8_Corzetti', 'Corzetti', '壓花圓麵', 'P°8', 34, 16),
(5, 'Sauce_5_Pesto', 'Sauce_5_Pesto_bgs', '特拉帕尼青醬', 'Pesto alla Trapanese', 170, '西西里特拉帕尼特產的青醬，與其他青醬不同的是，因其顏色呈粉紅，也稱之為「粉紅醬」，適合搭配海鮮。', '西西里特拉帕尼香蒜<br>\n蕃茄<br>\n羅勒<br>\n西西里杏仁<br>\n橄欖<br>', 'P4_Busiate', 'Busiate', '西西里捲捲麵', 'P°4', 30, 18),
(6, 'Sauce_6_Salsa', 'Sauce_6_Salsa_bgs', '道地義大利青醬', 'Salsa Verde', 200, '道地義大利青醬是所有義大利人都熟知的青醬，與熱那亞醬青醬一樣可以用來作義大利麵、烤魚沾醬、麵包沾醬等等，但是味道跟熱那亞醬青醬相去甚遠。', '歐芹<br>\n羅勒<br>\n小黃瓜<br>\n薄荷<br>\n酸豆<br>\n鯷魚<br>\n檸檬汁<br>\n紅酒醋<br>\n大蒜<br>\n特級初榨橄欖油<br>', 'L8_Capelli_dAngelo', 'Capelli d‘Angelo', '天使麵', 'L°8', 8, 35),
(7, 'Sauce_7_Napoletano', 'Sauce_7_Napoletano_bgs', '拿坡里番茄醬', ' Ragù Napoletano', 170, '源於義大利拿坡里，最早發源自中世紀拿坡里路邊攤，是以去皮番茄為基礎加入不同香辛料混合在一起製成的拿坡里醬作為配料之義大利麵料理。 ', '蕃茄糊<br>\n水<br>\n蕃茄泥<br>\n胡蘿蔔<br>\n洋蔥<br>\n葵花油<br>\n鹽<br>\n蘿勒<br>\n糖<br>\n奧勒岡草<br>\n大蒜<br>', 'S21_Sedaninin', 'Sedaninin', '小條紋通心麵', 'S°21', 70, 43),
(8, 'Sauce_8_Amatriciana', 'Sauce_8_Amatriciana_bgs', '辣味蕃茄醬', 'all’Amatriciana', 190, '香辣紅醬紅醬是羅馬地區知名做法，以紅辣椒和醃豬頰肉帶出辣味和肉香。另外，香辣紅醬紅醬和水管麵可說是天作之合，但如果手邊沒有吸管麵，其他中空形狀的義大利麵，例如斜管麵 、粗吸管麵也很合適。', '番茄<br>\n番茄汁<br>\n初榨橄欖油<br>\n洋蔥<br>\n大蒜<br>\n辣椒<br>\n糖<br>\n鹽<br>\n鯷魚<br>\n酸豆<br>', 'S2_Penne_Rigate', 'Penne Rigate ', '斜管條紋麵', 'S°2', 51, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tw_postcode`
--

CREATE TABLE `tw_postcode` (
  `Id` bigint(20) NOT NULL,
  `City` varchar(10) NOT NULL DEFAULT '',
  `Area` varchar(10) NOT NULL DEFAULT '',
  `ZipCode` char(3) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tw_postcode`
--

INSERT INTO `tw_postcode` (`Id`, `City`, `Area`, `ZipCode`) VALUES
(1, '台北市', '中正區', '100'),
(2, '台北市', '大同區', '103'),
(3, '台北市', '中山區', '104'),
(4, '台北市', '松山區', '105'),
(5, '台北市', '大安區', '106'),
(6, '台北市', '萬華區', '108'),
(7, '台北市', '信義區', '110'),
(8, '台北市', '士林區', '111'),
(9, '台北市', '北投區', '112'),
(10, '台北市', '內湖區', '114'),
(11, '台北市', '南港區', '115'),
(12, '台北市', '文山區', '116'),
(13, '基隆市', '仁愛區', '200'),
(14, '基隆市', '信義區', '201'),
(15, '基隆市', '中正區', '202'),
(16, '基隆市', '中山區', '203'),
(17, '基隆市', '安樂區', '204'),
(18, '基隆市', '暖暖區', '205'),
(19, '基隆市', '七堵區', '206'),
(20, '新北市', '萬里區', '207'),
(21, '新北市', '金山區', '208'),
(22, '新北市', '板橋區', '220'),
(23, '新北市', '汐止區', '221'),
(24, '新北市', '深坑區', '222'),
(25, '新北市', '石碇區', '223'),
(26, '新北市', '瑞芳區', '224'),
(27, '新北市', '平溪區', '226'),
(28, '新北市', '雙溪區', '227'),
(29, '新北市', '貢寮區', '228'),
(30, '新北市', '新店區', '231'),
(31, '新北市', '坪林區', '232'),
(32, '新北市', '烏來區', '233'),
(33, '新北市', '永和區', '234'),
(34, '新北市', '中和區', '235'),
(35, '新北市', '土城區', '236'),
(36, '新北市', '三峽區', '237'),
(37, '新北市', '樹林區', '238'),
(38, '新北市', '鶯歌區', '239'),
(39, '新北市', '三重區', '241'),
(40, '新北市', '新莊區', '242'),
(41, '新北市', '泰山區', '243'),
(42, '新北市', '林口區', '244'),
(43, '新北市', '蘆洲區', '247'),
(44, '新北市', '五股區', '248'),
(45, '新北市', '八里區', '249'),
(46, '新北市', '淡水區', '251'),
(47, '新北市', '三芝區', '252'),
(48, '新北市', '石門區', '253'),
(49, '宜蘭縣', '宜蘭市', '260'),
(50, '宜蘭縣', '頭城鎮', '261'),
(51, '宜蘭縣', '礁溪鄉', '262'),
(52, '宜蘭縣', '壯圍鄉', '263'),
(53, '宜蘭縣', '員山鄉', '264'),
(54, '宜蘭縣', '羅東鎮', '265'),
(55, '宜蘭縣', '三星鄉', '266'),
(56, '宜蘭縣', '大同鄉', '267'),
(57, '宜蘭縣', '五結鄉', '268'),
(58, '宜蘭縣', '冬山鄉', '269'),
(59, '宜蘭縣', '蘇澳鎮', '270'),
(60, '宜蘭縣', '南澳鄉', '272'),
(61, '宜蘭縣', '釣魚台列嶼', '290'),
(62, '新竹市', '', '300'),
(63, '新竹縣', '竹北市', '302'),
(64, '新竹縣', '湖口鄉', '303'),
(65, '新竹縣', '新豐鄉', '304'),
(66, '新竹縣', '新埔鎮', '305'),
(67, '新竹縣', '關西鎮', '306'),
(68, '新竹縣', '芎林鄉', '307'),
(69, '新竹縣', '寶山鄉', '308'),
(70, '新竹縣', '竹東鎮', '310'),
(71, '新竹縣', '五峰鄉', '311'),
(72, '新竹縣', '橫山鄉', '312'),
(73, '新竹縣', '尖石鄉', '313'),
(74, '新竹縣', '北埔鄉', '314'),
(75, '新竹縣', '峨眉鄉', '315'),
(76, '桃園縣', '中壢市', '320'),
(77, '桃園縣', '平鎮市', '324'),
(78, '桃園縣', '龍潭鄉', '325'),
(79, '桃園縣', '楊梅市', '326'),
(80, '桃園縣', '新屋鄉', '327'),
(81, '桃園縣', '觀音鄉', '328'),
(82, '桃園縣', '桃園市', '330'),
(83, '桃園縣', '龜山鄉', '333'),
(84, '桃園縣', '八德市', '334'),
(85, '桃園縣', '大溪鎮', '335'),
(86, '桃園縣', '復興鄉', '336'),
(87, '桃園縣', '大園鄉', '337'),
(88, '桃園縣', '蘆竹鄉', '338'),
(89, '苗栗縣', '竹南鎮', '350'),
(90, '苗栗縣', '頭份鎮', '351'),
(91, '苗栗縣', '三灣鄉', '352'),
(92, '苗栗縣', '南庄鄉', '353'),
(93, '苗栗縣', '獅潭鄉', '354'),
(94, '苗栗縣', '後龍鎮', '356'),
(95, '苗栗縣', '通霄鎮', '357'),
(96, '苗栗縣', '苑裡鎮', '358'),
(97, '苗栗縣', '苗栗市', '360'),
(98, '苗栗縣', '造橋鄉', '361'),
(99, '苗栗縣', '頭屋鄉', '362'),
(100, '苗栗縣', '公館鄉', '363'),
(101, '苗栗縣', '大湖鄉', '364'),
(102, '苗栗縣', '泰安鄉', '365'),
(103, '苗栗縣', '銅鑼鄉', '366'),
(104, '苗栗縣', '三義鄉', '367'),
(105, '苗栗縣', '西湖鄉', '368'),
(106, '苗栗縣', '卓蘭鎮', '369'),
(107, '台中市', '中區', '400'),
(108, '台中市', '東區', '401'),
(109, '台中市', '南區', '402'),
(110, '台中市', '西區', '403'),
(111, '台中市', '北區', '404'),
(112, '台中市', '北屯區', '406'),
(113, '台中市', '西屯區', '407'),
(114, '台中市', '南屯區', '408'),
(115, '台中市', '太平區', '411'),
(116, '台中市', '大里區', '412'),
(117, '台中市', '霧峰區', '413'),
(118, '台中市', '烏日區', '414'),
(119, '台中市', '豐原區', '420'),
(120, '台中市', '后里區', '421'),
(121, '台中市', '石岡區', '422'),
(122, '台中市', '東勢區', '423'),
(123, '台中市', '和平區', '424'),
(124, '台中市', '新社區', '426'),
(125, '台中市', '潭子區', '427'),
(126, '台中市', '大雅區', '428'),
(127, '台中市', '神岡區', '429'),
(128, '台中市', '大肚區', '432'),
(129, '台中市', '沙鹿區', '433'),
(130, '台中市', '龍井區', '434'),
(131, '台中市', '梧棲區', '435'),
(132, '台中市', '清水區', '436'),
(133, '台中市', '大甲區', '437'),
(134, '台中市', '外埔區', '438'),
(135, '台中市', '大安區', '439'),
(136, '彰化縣', '彰化市', '500'),
(137, '彰化縣', '芬園鄉', '502'),
(138, '彰化縣', '花壇鄉', '503'),
(139, '彰化縣', '秀水鄉', '504'),
(140, '彰化縣', '鹿港鎮', '505'),
(141, '彰化縣', '福興鄉', '506'),
(142, '彰化縣', '線西鄉', '507'),
(143, '彰化縣', '和美鎮', '508'),
(144, '彰化縣', '伸港鄉', '509'),
(145, '彰化縣', '員林鎮', '510'),
(146, '彰化縣', '社頭鄉', '511'),
(147, '彰化縣', '永靖鄉', '512'),
(148, '彰化縣', '埔心鄉', '513'),
(149, '彰化縣', '溪湖鎮', '514'),
(150, '彰化縣', '大村鄉', '515'),
(151, '彰化縣', '埔鹽鄉', '516'),
(152, '彰化縣', '田中鎮', '520'),
(153, '彰化縣', '北斗鎮', '521'),
(154, '彰化縣', '田尾鄉', '522'),
(155, '彰化縣', '埤頭鄉', '523'),
(156, '彰化縣', '溪州鄉', '524'),
(157, '彰化縣', '竹塘鄉', '525'),
(158, '彰化縣', '二林鎮', '526'),
(159, '彰化縣', '大城鄉', '527'),
(160, '彰化縣', '芳苑鄉', '528'),
(161, '彰化縣', '二水鄉', '530'),
(162, '南投縣', '南投市', '540'),
(163, '南投縣', '中寮鄉', '541'),
(164, '南投縣', '草屯鎮', '542'),
(165, '南投縣', '國姓鄉', '544'),
(166, '南投縣', '埔里鎮', '545'),
(167, '南投縣', '仁愛鄉', '546'),
(168, '南投縣', '名間鄉', '551'),
(169, '南投縣', '集集鎮', '552'),
(170, '南投縣', '水里鄉', '553'),
(171, '南投縣', '魚池鄉', '555'),
(172, '南投縣', '信義鄉', '556'),
(173, '南投縣', '竹山鎮', '557'),
(174, '南投縣', '鹿谷鄉', '558'),
(175, '雲林縣', '斗南鎮', '630'),
(176, '雲林縣', '大埤鄉', '631'),
(177, '雲林縣', '虎尾鎮', '632'),
(178, '雲林縣', '土庫鎮', '633'),
(179, '雲林縣', '褒忠鄉', '634'),
(180, '雲林縣', '東勢鄉', '635'),
(181, '雲林縣', '臺西鄉', '636'),
(182, '雲林縣', '崙背鄉', '637'),
(183, '雲林縣', '麥寮鄉', '638'),
(184, '雲林縣', '斗六市', '640'),
(185, '雲林縣', '林內鄉', '643'),
(186, '雲林縣', '古坑鄉', '646'),
(187, '雲林縣', '莿桐鄉', '647'),
(188, '雲林縣', '西螺鎮', '648'),
(189, '雲林縣', '二崙鄉', '649'),
(190, '雲林縣', '北港鎮', '651'),
(191, '雲林縣', '水林鄉', '652'),
(192, '雲林縣', '口湖鄉', '653'),
(193, '雲林縣', '四湖鄉', '654'),
(194, '雲林縣', '元長鄉', '655'),
(195, '嘉義市', '', '600'),
(196, '嘉義縣', '番路鄉', '602'),
(197, '嘉義縣', '梅山鄉', '603'),
(198, '嘉義縣', '竹崎鄉', '604'),
(199, '嘉義縣', '阿里山鄉', '605'),
(200, '嘉義縣', '中埔鄉', '606'),
(201, '嘉義縣', '大埔鄉', '607'),
(202, '嘉義縣', '水上鄉', '608'),
(203, '嘉義縣', '鹿草鄉', '611'),
(204, '嘉義縣', '太保市', '612'),
(205, '嘉義縣', '朴子市', '613'),
(206, '嘉義縣', '東石鄉', '614'),
(207, '嘉義縣', '六腳鄉', '615'),
(208, '嘉義縣', '新港鄉', '616'),
(209, '嘉義縣', '民雄鄉', '621'),
(210, '嘉義縣', '大林鎮', '622'),
(211, '嘉義縣', '溪口鄉', '623'),
(212, '嘉義縣', '義竹鄉', '624'),
(213, '嘉義縣', '布袋鎮', '625'),
(214, '台南市', '中西區', '700'),
(215, '台南市', '東區', '701'),
(216, '台南市', '南區', '702'),
(217, '台南市', '北區', '704'),
(218, '台南市', '安平區', '708'),
(219, '台南市', '安南區', '709'),
(220, '台南市', '永康區', '710'),
(221, '台南市', '歸仁區', '711'),
(222, '台南市', '新化區', '712'),
(223, '台南市', '左鎮區', '713'),
(224, '台南市', '玉井區', '714'),
(225, '台南市', '楠西區', '715'),
(226, '台南市', '南化區', '716'),
(227, '台南市', '仁德區', '717'),
(228, '台南市', '關廟區', '718'),
(229, '台南市', '龍崎區', '719'),
(230, '台南市', '官田區', '720'),
(231, '台南市', '麻豆區', '721'),
(232, '台南市', '佳里區', '722'),
(233, '台南市', '西港區', '723'),
(234, '台南市', '七股區', '724'),
(235, '台南市', '將軍區', '725'),
(236, '台南市', '學甲區', '726'),
(237, '台南市', '北門區', '727'),
(238, '台南市', '新營區', '730'),
(239, '台南市', '後壁區', '731'),
(240, '台南市', '白河區', '732'),
(241, '台南市', '東山區', '733'),
(242, '台南市', '六甲區', '734'),
(243, '台南市', '下營區', '735'),
(244, '台南市', '柳營區', '736'),
(245, '台南市', '鹽水區', '737'),
(246, '台南市', '善化區', '741'),
(247, '台南市', '大內區', '742'),
(248, '台南市', '山上區', '743'),
(249, '台南市', '新市區', '744'),
(250, '台南市', '安定區', '745'),
(251, '高雄市', '新興區', '800'),
(252, '高雄市', '前金區', '801'),
(253, '高雄市', '苓雅區', '802'),
(254, '高雄市', '鹽埕區', '803'),
(255, '高雄市', '鼓山區', '804'),
(256, '高雄市', '旗津區', '805'),
(257, '高雄市', '前鎮區', '806'),
(258, '高雄市', '三民區', '807'),
(259, '高雄市', '楠梓區', '811'),
(260, '高雄市', '小港區', '812'),
(261, '高雄市', '左營區', '813'),
(262, '高雄市', '仁武區', '814'),
(263, '高雄市', '大社區', '815'),
(264, '高雄市', '岡山區', '820'),
(265, '高雄市', '路竹區', '821'),
(266, '高雄市', '阿蓮區', '822'),
(267, '高雄市', '田寮區', '823'),
(268, '高雄市', '燕巢區', '824'),
(269, '高雄市', '橋頭區', '825'),
(270, '高雄市', '梓官區', '826'),
(271, '高雄市', '彌陀區', '827'),
(272, '高雄市', '永安區', '828'),
(273, '高雄市', '湖內區', '829'),
(274, '高雄市', '鳳山區', '830'),
(275, '高雄市', '大寮區', '831'),
(276, '高雄市', '林園區', '832'),
(277, '高雄市', '鳥松區', '833'),
(278, '高雄市', '大樹區', '840'),
(279, '高雄市', '旗山區', '842'),
(280, '高雄市', '美濃區', '843'),
(281, '高雄市', '六龜區', '844'),
(282, '高雄市', '內門區', '845'),
(283, '高雄市', '杉林區', '846'),
(284, '高雄市', '甲仙區', '847'),
(285, '高雄市', '桃源區', '848'),
(286, '高雄市', '那瑪夏區', '849'),
(287, '高雄市', '茂林區', '851'),
(288, '高雄市', '茄萣區', '852'),
(289, '南海諸島', '東沙', '817'),
(290, '南海諸島', '南沙', '819'),
(291, '澎湖縣', '馬公市', '880'),
(292, '澎湖縣', '西嶼鄉', '881'),
(293, '澎湖縣', '望安鄉', '882'),
(294, '澎湖縣', '七美鄉', '883'),
(295, '澎湖縣', '白沙鄉', '884'),
(296, '澎湖縣', '湖西鄉', '885'),
(297, '屏東縣', '屏東市', '900'),
(298, '屏東縣', '三地門鄉', '901'),
(299, '屏東縣', '霧臺鄉', '902'),
(300, '屏東縣', '瑪家鄉', '903'),
(301, '屏東縣', '九如鄉', '904'),
(302, '屏東縣', '里港鄉', '905'),
(303, '屏東縣', '高樹鄉', '906'),
(304, '屏東縣', '鹽埔鄉', '907'),
(305, '屏東縣', '長治鄉', '908'),
(306, '屏東縣', '麟洛鄉', '909'),
(307, '屏東縣', '竹田鄉', '911'),
(308, '屏東縣', '內埔鄉', '912'),
(309, '屏東縣', '萬丹鄉', '913'),
(310, '屏東縣', '潮州鎮', '920'),
(311, '屏東縣', '泰武鄉', '921'),
(312, '屏東縣', '來義鄉', '922'),
(313, '屏東縣', '萬巒鄉', '923'),
(314, '屏東縣', '崁頂鄉', '924'),
(315, '屏東縣', '新埤鄉', '925'),
(316, '屏東縣', '南州鄉', '926'),
(317, '屏東縣', '林邊鄉', '927'),
(318, '屏東縣', '東港鄉', '928'),
(319, '屏東縣', '琉球鄉', '929'),
(320, '屏東縣', '佳冬鄉', '931'),
(321, '屏東縣', '新園鄉', '932'),
(322, '屏東縣', '枋寮鄉', '940'),
(323, '屏東縣', '枋山鄉', '941'),
(324, '屏東縣', '春日鄉', '942'),
(325, '屏東縣', '獅子鄉', '943'),
(326, '屏東縣', '車城鄉', '944'),
(327, '屏東縣', '牡丹鄉', '945'),
(328, '屏東縣', '恆春鄉', '946'),
(329, '屏東縣', '滿州鄉', '947'),
(330, '台東縣', '臺東市', '950'),
(331, '台東縣', '綠島鄉', '951'),
(332, '台東縣', '蘭嶼鄉', '952'),
(333, '台東縣', '延平鄉', '953'),
(334, '台東縣', '卑南鄉', '954'),
(335, '台東縣', '鹿野鄉', '955'),
(336, '台東縣', '關山鎮', '956'),
(337, '台東縣', '海端鄉', '957'),
(338, '台東縣', '池上鄉', '958'),
(339, '台東縣', '東河鄉', '959'),
(340, '台東縣', '成功鎮', '961'),
(341, '台東縣', '長濱鄉', '962'),
(342, '台東縣', '太麻里鄉', '963'),
(343, '台東縣', '金峰鄉', '964'),
(344, '台東縣', '大武鄉', '965'),
(345, '台東縣', '達仁鄉', '966'),
(346, '花蓮縣', '花蓮市', '970'),
(347, '花蓮縣', '新城鄉', '971'),
(348, '花蓮縣', '秀林鄉', '972'),
(349, '花蓮縣', '吉安鄉', '973'),
(350, '花蓮縣', '壽豐鄉', '974'),
(351, '花蓮縣', '鳳林鎮', '975'),
(352, '花蓮縣', '光復鄉', '976'),
(353, '花蓮縣', '豐濱鄉', '977'),
(354, '花蓮縣', '瑞穗鄉', '978'),
(355, '花蓮縣', '萬榮鄉', '979'),
(356, '花蓮縣', '玉里鎮', '981'),
(357, '花蓮縣', '卓溪鄉', '982'),
(358, '花蓮縣', '富里鄉', '983'),
(359, '金門縣', '金沙鎮', '890'),
(360, '金門縣', '金湖鎮', '891'),
(361, '金門縣', '金寧鄉', '892'),
(362, '金門縣', '金城鎮', '893'),
(363, '金門縣', '烈嶼鄉', '894'),
(364, '金門縣', '烏坵鄉', '896'),
(365, '連江縣', '南竿鄉', '209'),
(366, '連江縣', '北竿鄉', '210'),
(367, '連江縣', '莒光鄉', '211'),
(368, '連江縣', '東引鄉', '212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tw_postcode`
--
ALTER TABLE `tw_postcode`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `City` (`City`,`Area`,`ZipCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tw_postcode`
--
ALTER TABLE `tw_postcode`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;
