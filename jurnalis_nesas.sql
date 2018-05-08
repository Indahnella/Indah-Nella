-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 12:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalis_nesas`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_user_id` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `data_entri` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_user_id`, `judul_artikel`, `gambar_artikel`, `isi_artikel`, `data_entri`) VALUES
(7, 0, 'Hakikat Hidup', 'hidup.jpg', 'Berbicara masalah hakekat hidup sebenarnya membutuhkan rincian yang sangat panjang dan terinci. Namun secara ringkas, hakikat hidup bisa terungkap dari pernyataan Ali bin Abi Thalib. Menurutnya, awal kehidupan adalah tangisan, pertengahannya adalah ujian dan ujungnya adalah kefanaan. Ketika anda lahir anda menangis, dan tangisan itu akan menjadi warna kehidupan. Saat anda sedih dan juga bahagia terkadang ditandai dengan tangisan. \r\nKetahuilah, bahwa sesungguhnya kehidupan dunia itu hanyalah permainan dan suatu yang melalaikan, perhiasan dan bermegah-megah antara kamu serta berbangga-bangga tentang banyaknya harta dan anak, seperti hujan yang tanam-tanamannya mengagumkan para petani; kemudian tanaman itu menjadi kering dan kamu lihat warnanya kuning kemudian menjadi hancur. Dan di akhirat (nanti) ada azab yang keras dan ampunan dari Allah serta keridaan-Nya. Dan kehidupan dunia ini tidak lain hanyalah kesenangan yang menipu. (QS. 57:20) \r\nDalam perjalanan hidup ini tidak ada orang yang tidak mendapat ujian walaupun kadarnya berbeda-beda namun ujian itu pasti ada. Semua yang ada dalam genggaman kita pada dasarnya hanya asesoris dan hiasan termasuk gelar akademis, kekayaan, harta dan keduaniaan lainnya. Kalau sudah selesailah semua, giliran pintu kematian yang akan dirasakan seluruh umat manusia. \r\n\r\nTiap-tiap yang berjiwa akan merasakan mati. Kami akan menguji kamu dengan keburukan dan kebaikan sebagai cobaan (yang sebenar-benarnya). Dan hanya kepada Kami lah kamu dikembalikan. (QS.21:35) \r\n', '2018-05-07 16:09:05'),
(8, 0, 'Tips Mengatasi Siswa Nakal', 'Tips_mengatasi_siswa_nakal1.JPG', 'Sebagai insan yang berada di sebuah lembaga pendidikan, apalagi Sekolah Menegah Kejuruan yang notabene siswanya adalah laki-laki menghadapi siswa “nakal” adalah hal yang biasa. Mulai dari siswa yang sering terlambat atau bolos sekolah, tidak mengerjakan tugas/ PR, ribut di kelas, jajan saat jam pelajaran, tidak sholat, dan masih banyak contoh “kenakalan” lain yang kerap dilakukan siswa. Hal-hal tersebut memang benar-benar menguji kesabaran kita. Dibutuhkan kesabaran dan keuletan tingkat tinggi.\r\n\r\nSebenarnya apakah benar ada anak diberi label “nakal”? Penulis sendiri tidak setuju bila ada siswa yang dilabeli “nakal”. Apalagi tidak sedikit guru yang memberi label “nakal” apabila ia merasa tidak sanggup mengendalikan siswanya. Di sisilain ukuran “nakal” tiap guru berbeda-beda. Sebagian guru akan menganggap siswanya “nakal” bila siswanya tidak mengerjakan PR, guru lain berpendapat siswa yang sering bolos/ tidak masuk sekolah adalah siswa yang “nakal”, sebagian lainnya menganggap siswa yang ribut saat pembelajaran adalah siswa yang “nakal”. \r\n\r\n\r\n', '2018-05-07 16:16:04'),
(9, 0, 'guru propesional', 'guru_profesional.JPG', 'Sebagian orang berpendapat, bahwa mengajar adalah proses penyampaian atau mentransfer ilmu dari seorang pendidik kepada peserta didik. Tetapi tampaknya pendapat ini harus jauh-jauh ditinggalkan, karena sudah tidak sesuai dengan perkembangan jaman. Kini mengajar harus kita maknai sebagai sebuah kegiatan yang komplek, yaitu penggunaan secara integratif sejumlah keterampilan untuk menyampaikan ilmu. Pengintegrasian keterampilan-keterampilan yang dimaksud di sini harus dilandasi dengan seperangkat teori dan diarahkan oleh suatu pengetahuan/wawasan. Sedangkan penearapannya akan menjadi unik bila dipengaruhi oleh semua komponen belajar mengajar. Komponen yang dimaksud adalah tujuan yang hendak digapai, ilmu yang ingin disampaikan, seubjek didik, fasilitas dan lingkungan belajar, dan yang tidak kalah penting adalah keterampilan, kebiasaan dan wawasan guru tentang dunia pendidikan dan misinya sebagai pendidik. \r\n\r\n\r\nJika mengajar dipahami sebagai kegiatan mentransfer ilmu kepada siswa, maka mengajar itu sendiri hanya akan terbatas pada penyampaian ilmu itu saja. Guru di pihak pertama menyampaiakan ilmu dan siswa di pihak kedua akan menerima secara pasif. Prosesnya pun bisa diketahui, pembelajaran akan berjalan secara membosankan. Karena yang mendominasi pembelajaran adalah guru, sedangkan siswa hanya sebagai penerima.\r\nNamun, apabila mengajar dimaknai sebagai segala upaya yang dilakukan dengan sengaja untuk menciptakan proses belajara pada siswa dan mencapai tujuan yang telah dirumuskan, maka jelas bahwa yang menjadi sasaran akhir dari proses pengajaran itu ialah siswa belajar. Artinya dalam hal ini segala upaya apapun dapat dilakukan selagi bisa dipertanggungjawabkan, dan bisa menghantarkan siswa menuju pencapaian tujuan belajar yang telah dicanangkan, artinya siswa belajar secara aktif, dan yang mendominasi dikelas adalah siswa.\r\n\r\nKesimpulannya, hakekat menjajar itu merupakan usaha guru menciptakan dan mendesain proses belajar pada siswa. Jadi yang terpenting dalam belajar mengajar itu bukanlah bahan yang disampaikan oleh guru, akan tetapi proses siswa dalam mempelajari bahan tersebut (guru lebih menghargai proses dari pada hasil). Sekali lagi peranan yang menonjol dalam belajar mengajar ada pada siswa, ini bukan berarti bahwa peranan guru tersisihkan, hanya diubah saja. ', '2018-05-07 16:13:06'),
(10, 0, 'Kenakalan Remaja', 'Contoh-Puisi-Ibu-dan-Ayah-Singkat.jpg', 'Menurut saya tidak ada yang namanya siswa “nakal”, yang ada adalah;\r\nSiswa yang krisis identitas. Perubahan biologis dan sosiologis pada diri remaja memungkinkan terjadinya dua bentuk integrasi. Pertama, terbentuknya perasaan akan konsistensi dalam kehidupannya. Kedua, tercapainya identitas peran. Kenakalan siswa terjadi karena siswa gagal mencapai masa integrasi kedua.\r\nSiswa yang memiliki kontrol diri yang lemah. Siswa yang tidak bisa mempelajari dan membedakan tingkah laku yang dapat diterima dengan yang tidak dapat diterima akan terseret pada perilaku “nakal”. Begitupun bagi mereka yang telah mengetahui perbedaan dua tingkah laku tersebut, namun tidak bisa mengembangkan kontrol diri untuk bertingkah laku sesuai dengan pengetahuannya.\r\nSiswa yang kurang kasih sayang orang tua. Orang tua yang terlalu sibuk dengan pekerjaan menyebabkan kurang perhatian kepada anaknya. Tidak mengenalkan dan mengajarkan norma-norma agama kepada anaknya. Akibatnya dia akan sering bolos atau terlambat sekolah. Saat di sekolah ia akan berulah macam-macam untuk mendapat perhatian dari orang lain, termasuk kepada gurunya.\r\nSiswa yang kedua orang tuanya tidak harmois atau bahkan bercerai. Suasana di rumah yang tidak nyaman akan menyebabkan anak tidak fokus saat pelajaran. Kedua orang tua yang seharusnya melidungi dan memberi contoh yang baik justru menjadi akar permasalahan anaknya.\r\n', '2018-05-07 16:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_user_id` int(11) NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `data_entri` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_user_id`, `gambar_berita`, `judul_berita`, `isi_berita`, `data_entri`) VALUES
(2, 0, 'th_(1).jpg', 'Pendapat tentang Puisi Sukmawati', 'Menurut pendapat SMKN 1 Subang yang bernama pandu maulana kelas Xl RPL 1 berpendapat mengenai berita tentang : Puisi Sukmawati, “jika tidak tau syariat islam seharusnya diam saja mencari tau atau belajar, jika tidak tau tentnag syariat islam bukan mencela kepribadian islam seharusnya banyak baca dan mencari informasi, belajar menghargai agama lain. Karena itu sudah tertulis dalam undang-undang”. Menurutnya.\r\nMenurut Rizky Kurniawan, bertaggapan : “seharusnya dia merevisi dulu puisinya sebelum dibacakan. Karena, setiap kata puisi punya makna yang berbeda menurut setiap orang. Tanggapi masalah dengan bijak. Sedangkan ajaran agama sudah jelas dahulukan adab dan etika diatas ilmu. Jadi, jangan menghujat apalagi menyerang dirinya, itukah ahlak yang tidak terpuji. Kan dia sudah minta maaf ya kalo menurut saya maafkan saja, karna kembali ke kudrat manusia yang tak luput dari kesalahan.” Menurutnya.\r\n', '2018-04-29 06:58:42'),
(3, 0, 'th_(4).jpg', 'Pendapat tentang Transagender', 'Penyanyi dangdut kelahiran Jakrta, 16 Juni 1992, Lucinta Luna berpose saat ditemui wartawan dikawasan sabang jakarta pusat, Selasa(23/1/2018). Lucinta luna membantah bahwa dirinya seorang Transgender.\r\nMenurut Muchlis Coeruddin, berpendapat … “ itu adalah hal yang tidka wajar, itu juga salah satu bentuk tidak mensyukuri apa yang diberikan Tuhan. Bagaimanapun orang tersebut pasti sulit diterima oleh masyarakat indonesia entah kalo di negara lain. Terus juga dalam reproduksi manusia, pastilah untuk menghasilkan keturunan-keturunan diperlukan sepasang organ yang berbeda jenis kelamin.\r\nMenurut Rini Apriani mengenai transgender :  “transgender merupakan tindakan yang salah. Karena, mengubah sesuatu yang diberikan tuhan dan juga merupakan tindakan bodoh karena menyakiti diri sendiri dengan melakukan berbagai operasi.” Menurutnya.\r\n', '2018-04-29 06:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `cerpen`
--

CREATE TABLE `cerpen` (
  `cerpen_id` int(11) NOT NULL,
  `cerpen_user_id` int(11) NOT NULL,
  `gambar_cerpen` varchar(255) NOT NULL,
  `judul_cerpen` varchar(255) NOT NULL,
  `isi_cerpen` text NOT NULL,
  `data_entri` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cerpen`
--

INSERT INTO `cerpen` (`cerpen_id`, `cerpen_user_id`, `gambar_cerpen`, `judul_cerpen`, `isi_cerpen`, `data_entri`) VALUES
(2, 0, 'promise.jpg', 'Promise', 'Janji adalah sebuah hutang yang wajib dipertaruhkan dan dipertanggung jawabkan kepada siapa dia berjanji. Seperti yang diceritakan pada novel ini, rahman selalu menanti kanya yang tanpa alasan meninggalkannya. Disaat rahman mulai mengenal dunia baru bersamanya, menikmati anugrah cinta yang diberikan tuhan kepadanya. Novel ini juga menceritakan tentang kuatnya persahabatan yang terjalin, walaupun mereka mencintai seseorang tapi, mereka lebih mementingkah kebahagiaan orang tersebut. Karna kebahagiaan yang sebenarnya adalah ketika kita berhasil melepaskan orang yang kita sayang untuk berbahagia walaupun bukan bersama kita, dan bukan kita orang yang membuatnya bahagia.', '2018-04-29 06:26:48'),
(4, 0, 'images_(2).jpeg', 'Kisah Seorang Penjual Koran', 'Di ufuk timur, matahari belum tampak. Udara pada pagi hari terasa dingin. Alam pun masih diselimuti embun pagi. Seorang anak mengayuh sepedanya di tengah jalan yang masih lengang. Siapakah gerangan anak itu? Ia adalah seorang penjual Koran, yang bernama Ipiin.\r\n\r\nMenjelang pukul lima pagi, ia telah sampai di tempat agen koran dari beberapa penerbit. “Ambil berapa Ipiin?” tanya Bang Ipul. “Biasa saja.”jawab Ipiin. Bang Ipul mengambil sejumlah koran dan majalah yang biasa dibawa Ipiin untuk langganannya. Setelah selesai, ia pun berangkat.\r\n\r\nIa mendatangi pelanggan-pelanggan setianya. Dari satu rumah ke rumah lainnya. Begitulah pekerjaan Ipiin setiap harinya. Menyampaikan koran kepada para pelanggannya. Semua itu dikerjakannya dengan gembira, ikhlas dan rasa penuh tanggung jawab.\r\n\r\nKetika Ipiin sedang mengacu sepedanya, tiba-tiba ia dikejutkan dengan sebuah benda. Benda tersebut adalah sebuah bungkusan plastik berwarna hitam. Ipiin jadi gemetaran. Benda apakah itu? Ia ragu-ragu dan merasa ketakutan karena akhir-akhir ini sering terjadi peledakan bom dimana-mana. Ipiin khawatir benda itu adalah bungkusan bom. Namun pada akhirnya, ia mencoba membuka bungkusan tersebut. Tampak di dalam bungkusan itu terdapat sebuah kardus.\r\n“Wah, apa isinya ini?’’tanyanya dalam hati. Ipiin segera membuka bungkusan dengan hati-hati. Alangkah terkejutnya ia, karena di dalamnya terdapat kalung emas dan perhiasan lainnya. “Wah apa ini?”tanyanya dalam hati. “Milik siapa, ya?” Ipiin membolak-balik cincin dan kalung yang ada di dalam kardus. Ia makin terperanjat lagi karena ada kartu kredit di dalamnya. “Lho,…ini kan milik Pak Edison. Kasihan sekali Pak Edison , rupanya ia telah kecurian.”gumamnya dalam hati.\r\n\r\nApa yang diperkirakan Ipiin itu memamg benar. Rumah Pak Edison telah kemasukan maling tadi malam. Karena pencuri tersebut terburu-buru, bungkusan perhiasan yang telah dikumpulkannya terjatuh. Ipiin dengan segera memberitahukan Pak Edison. Ia menceritakan apa yang terjadi dan ia temukan. Betapa senangnya Pak Edison karena perhiasan milik istrinya telah kembali. Ia sangat bersyukur, perhiasan itu jatuh ke tangan orang yang jujur. \r\n\r\nSebagai ucapan terima kasihnya, Pak Edison memberikan modal kepada Ipiin untuk membuka kios di rumahnya. Kini Ipiin tidak lagi harus mengayuh sepedanya untuk menjajakan koran. Ia cukup menunggu pembeli datang untuk berbelanja. Sedangkan untuk mengirim koran dan majalah kepada pelanggannya, Ipiin digantikan oleh saudaranya yang kebetulan belum mempunyai pekerjaan. Itulah akhir dari sebuah kejujuran yang akan mendatangkan kebahagiaan di kehidupan kelak.\r\n', '2018-05-07 16:35:53'),
(5, 0, 'rose-968655_960_720.jpg', 'Doa Sepasang Kekasih', 'Di sebuah Sekolah Tingkat Menengah Atas(SMA), terdapat sepasang kekasih yang konyol namun romantis. Mereka berpacaran sejak Ambar masih kelas sepuluh dan Bahrul masih kelas sebelas. Dan kini Ambar sudah kelas sebelas dan Bahrul sudah kelas duabelas. Ambar adalah gadis yang manis lucu tapi pemalu. Dan Bahrul adalah pria yang hitam manis lucu dan apa ada nya. Walaupun mereka memiliki perbedaan tapi mereka tetap saling mencintai.\r\n\r\nAmbar adalah anak ke empat dari empat bersaudara, ia mempunyai empat orang satpam yaitu ketiga kakak laki lakinya dan juga ayah nya yang akan memarahi nya kalau ia berani menyeleweng atau aneh aneh, karena itu ia takut untuk mengatakan kepada keluarga nya kalau ia sudah berpacaran. Pada suatu ketika Bahrul berniat untuk bermain kerumah Ambar untuk bertemu dan sekedar bercanda, namun Ambar menolak karena sebelum nya belum pernah ada pria yang main kerumah nya.\r\n\r\n“Kalo belum di coba kenapa harus takut, kamu kan udah gede jadi wajar kalo kamu pacaran” kata si Bahrul sambil memegang tangan Ambar.\r\n\r\n“Iya juga si, tapi aku takut soalnya belom pernah ada pria yang main kerumah” kata si Ambar yang tidak berani memandang wajah Bahrul\r\nMalam itu Ambar tidak bisa tidur memikirkan perkataan Bahrul, ia sependapat dengan Bahrul bahwa dia sudah besar dan sudah pantas untuk berpacaran. Setiap di sekolah Ambar hanya berani memandang Bahrul dari kejauhan karena dia adalah gadis pemalu. Padahal Bahrul selalu memberi tahu kepada Ambar kalau dia harus jadi gadis yang percaya diri.\r\n\r\nPada suatu pagi ketika Ambar hendak berangkat sekolah tiba tiba ban montor nya pun bocor, sehingga dia sekolah tidak membawa motor. Di sekolah Ambar pun bingung apakah dia harus meminta Bahrul untuk mengantar nya pulang atau dia mencari tumpangan kepada teman nya, karena dia malu dia pun mencari tumpangan kepada teman nya, di tengah perjalanan tiba tiba ada seorang pria yang memanggil nama Ambar dan ternyata itu adalah Bahrul, betapa sakit hati Bahrul melihat kekasih pujaan hati nya di bonceng lelaki lain.\r\nSesampai nya Ambar di rumah ia pun langsung mengirim pesan untuk Bahrul kalau dia tidak bermaksut membuat Bahrul cemburu, dan untunglah Bahrul mengerti kalau si Ambar tidak bermaksut membuat nya cemburu. Hari hari mereka lewati bersama, - Cerpen Cinta Remaja Singkat, Doa Sepasang Kekasih -mereka semakin mengenal satu sama lain dan mereka adalah pasangan yang saling memberi semangat dan nasihat satu sama lain semenjak itu mereka pun mulai merasa nyaman dan muncul lah kemestri di antara mereka.', '2018-05-07 16:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `gambar_id` int(11) NOT NULL,
  `gambar_user_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`gambar_id`, `gambar_user_id`, `gambar`, `ket`, `data`) VALUES
(3, 0, 'laa.jpg', 'Senja', '2018-04-29 07:19:47'),
(6, 0, 'two5.jpg', 'Lautan dikala senja', '2018-04-29 07:53:46'),
(7, 0, 'one.jpg', 'keindahan alam senja', '2018-04-29 07:41:47'),
(8, 0, '1520805339325.jpg', 'fotografi', '2018-04-29 07:05:49'),
(9, 0, '05.jpg', 'Waw', '2018-04-29 07:09:50'),
(10, 0, '03.jpg', 'ini gambar', '2018-04-29 07:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `info_sekolah`
--

CREATE TABLE `info_sekolah` (
  `info_id` int(11) NOT NULL,
  `info_user_id` int(11) NOT NULL,
  `judul_info` varchar(255) NOT NULL,
  `gambar_info` varchar(255) NOT NULL,
  `isi_info` text NOT NULL,
  `data_entri` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_sekolah`
--

INSERT INTO `info_sekolah` (`info_id`, `info_user_id`, `judul_info`, `gambar_info`, `isi_info`, `data_entri`) VALUES
(3, 0, 'Saatnya menyambut calon siswa-siswi smkn 1 subang', 'contoh-puisi-cinta-tanah-air.jpg', 'Lalu bagaimana cara membedakan apakah travel umrah tersebut abal-abal atau tidak?\r\n\r\nPertama, Anda perlu jeli dan teliti untuk mengecek kelengkapan surat legalitas dari izin usaha travel umrah. agen perjalanan yang punya izin juga belum tentu aman. Perlu diperhatikan pula aspek lainnya seperti legalitas pembayarannya.\r\n\r\nSejumlah perusahaan agen perjalanan umrah bisa terindikasi abal-abal bila rekening pembayarannya tidak sesuai dengan identitas perusahaan travel yang bersangkutan. Selanjutnya sudah seharusnya mencurigai travel yang menawarkan biaya umrah di bawah rata-rata.\r\n', '2018-05-07 17:04:03'),
(4, 0, 'Alda Siswa SMKN 1 Subang menjadi paskibraka tingkat jabar', 'alda_20170817_1158251.jpg', 'Lalu bagaimana cara membedakan apakah travel umrah tersebut abal-abal atau tidak?\r\n\r\nPertama, Anda perlu jeli dan teliti untuk mengecek kelengkapan surat legalitas dari izin usaha travel umrah. agen perjalanan yang punya izin juga belum tentu aman. Perlu diperhatikan pula aspek lainnya seperti legalitas pembayarannya.\r\n\r\nSejumlah perusahaan agen perjalanan umrah bisa terindikasi abal-abal bila rekening pembayarannya tidak sesuai dengan identitas perusahaan travel yang bersangkutan. Selanjutnya sudah seharusnya mencurigai travel yang menawarkan biaya umrah di bawah rata-rata.\r\n', '2018-05-07 17:00:05'),
(5, 0, 'Menyambut ramadhan bersama keluarga nesas', 'ab16843e00030ac7823074ccf20244f3.jpg', 'Lalu bagaimana cara membedakan apakah travel umrah tersebut abal-abal atau tidak?\r\n\r\nPertama, Anda perlu jeli dan teliti untuk mengecek kelengkapan surat legalitas dari izin usaha travel umrah. agen perjalanan yang punya izin juga belum tentu aman. Perlu diperhatikan pula aspek lainnya seperti legalitas pembayarannya.\r\n\r\nSejumlah perusahaan agen perjalanan umrah bisa terindikasi abal-abal bila rekening pembayarannya tidak sesuai dengan identitas perusahaan travel yang bersangkutan. Selanjutnya sudah seharusnya mencurigai travel yang menawarkan biaya umrah di bawah rata-rata.\r\n', '2018-05-07 17:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `motivasi`
--

CREATE TABLE `motivasi` (
  `motivasi_id` int(11) NOT NULL,
  `motivasi_user_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_motivasi` text NOT NULL,
  `pembuat_motivasi` varchar(255) NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motivasi`
--

INSERT INTO `motivasi` (`motivasi_id`, `motivasi_user_id`, `gambar`, `isi_motivasi`, `pembuat_motivasi`, `data_entri`) VALUES
(6, 0, 'rose-968655_960_720.jpg', 'Saya berpikir bahwa ada suatu hal yang lebih penting daripada sekedar percaya, tindakan Dunia ini penuh dengan pemimpi ,tidaklah banyak orang yang berani maju ke depan dan Mulai mengambil langkah pasti untuk mewujudkan visi mereka', 'Indah Nella', '2018-05-07'),
(7, 0, 'hidup.jpg', 'Sukses seringkali datang pada mereka yang berani bertindak dan jarang menghampiri pada mereka yang dikalahkan ketakutan\r\n\r\nTidak ada harga untuk waktu, tetapi waktu sangat berharga\r\n', 'Ania Fitri', '2018-05-07'),
(8, 0, 'contoh-puisi-cinta-tanah-air.jpg', 'Hujan tidak hanya datang sendirian Ia datang bersama kesejukan, hal buruk tidak datang sendirian ia datang bersama pembelajaran', 'Sabrina Adeeva Putri', '2018-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `pesan_id` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `puisi`
--

CREATE TABLE `puisi` (
  `puisi_id` int(11) NOT NULL,
  `puisi_user_id` int(11) NOT NULL,
  `judul_puisi` varchar(255) NOT NULL,
  `gambar_puisi` varchar(255) NOT NULL,
  `isi_puisi` text NOT NULL,
  `data_entri` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puisi`
--

INSERT INTO `puisi` (`puisi_id`, `puisi_user_id`, `judul_puisi`, `gambar_puisi`, `isi_puisi`, `data_entri`) VALUES
(1, 0, 'Tangisan Air mata Bunda', 'contoh-puisi-pendek-tentang-ibu.jpg', '“Dalam Senyum kau sembunyikan letihmu\r\nDerita siang dan malam menimpamu\r\ntak sedetik pun menghentikan langkahmu\r\nUntuk bisa Memberi harapan baru bagiku\r\n\r\nSeonggok Cacian selalu menghampirimu\r\nsecerah hinaan tak perduli bagimu\r\nselalu kau teruskan langkah untuk masa depanku\r\nmencari harapan baru lagi bagi anakmu\r\n\r\nBukan setumpuk Emas yang kau harapkan dalam kesuksesanku\r\nbukan gulungan uang yang kau minta dalam keberhasilanku\r\nbukan juga sebatang perunggu dalam kemenanganku\r\ntapi keinginan hatimu membahagiakan aku\r\n\r\nDan yang selalu kau berkata padaku\r\nAku menyayangimu sekarang dan waktu aku tak lagi bersama mu\r\naku menyayangi mu anak ku dengan ketulusan hatiku”\r\n', '2018-05-07 16:39:33'),
(3, 0, 'Untukmu Ibu Untukmu Ayah', 'Contoh-Puisi-Ibu-dan-Ayah-Singkat.jpg', 'sayangmu,.. Kasihmu,.. selalu kau berikan padaku,..\r\nKau banting tulangmu,..\r\nkau peras keringatmu,..\r\n\r\nNamun kau selalu berusaha tersenyum didepanku,..\r\nWalau ku sering mengecewakanmu,..\r\nkau tak pernah berhenti memberi semua itu,..\r\nKau pun juga tak pernah sedikitpun meminta balasan dariku,..\r\n\r\nKarena ku tau,.. kau lakukan semua itu,..\r\nHanya untuk membuatku bahagia,.\r\nKau terangi hidupku,..\r\nkau pelita dalam setiap langkahku,..\r\n\r\nMaafkan,..bila aku belum bisa membalas sedikitpun kebaikan yang telah kau berikan untukku,..\r\nTapi Aku berjanji,.. aku akan selalu berusaha dan berdo’a semampuku,..\r\nuntuk kebahagiaanmu dan untuk masa tua mu nanti,..\r\nAgar kau selalu tersenyum,..\r\n\r\nwalaupun apa yang ku beri,..\r\ntidak sebesar apa yang ku terima selama ini,..Ibu,..\r\nengkau bagaikan\r\nrembulan yang menari\r\ndalam dadaku\r\n\r\nAyah,..\r\nengkau bagaikan\r\nmatahari yang menghangatkan\r\nhatiku,..\r\n\r\nAyah,.. Ibu,..\r\nkucintai kau berdua\r\nseperti aku mencintai surga\r\nSemoga Allah mencium ayah dan Ibu\r\ndalam taman-Nya yang terindah nanti.. \r\n', '2018-05-07 16:50:34'),
(4, 0, 'Potret Negeri', 'contoh-puisi-cinta-tanah-air.jpg', 'Aku berdiri tegap menatap langit bangsaku,..biru, abu-abu,..lalu menghitam\r\nLukisan indah negeri ini berubah menjadi pemandangan penuh haru\r\nDi setiap sudut bumi pertiwi menangis,..sedu sedan,..\r\nPerut membuncit, raga hanya tersisa tulang yang sebentar lagi akan patah\r\n\r\nIbu pertiwi,.. aku tak pernah lagi melihat senyum indahmu\r\nTak jua kembali aku mendengar petuah-petuahmu\r\nYang ada kini kau membisu diantara keluh kesah anak negeri ini\r\nYang semakin hari semakin membuatmu nelangsa\r\n\r\nTanah airku tak lagi punya belantara, laut melepas, atau gunung menjulang\r\nPanas, datar, bah, api, semuanya kini jadi warnamu\r\nMenangisku hampir membakar pelupuk mata,..pilu,..sendu,..\r\nSementara sanubariku terpekur, tak sanggup lagi menatap dunia\r\nIbu pertiwi tiba-tiba menamparku, berkali-kali dan bertubi-tubi !\r\nSakit, perih, tapi aku merasakan kasih yang selama ini hilang ditelan kesombongan pangkat\r\nMataku terbelalak saat hutanku terbakar, gunungku meletus, dan lautku tercemar\r\nBah menelan tempat tinggal kami, asap membumbung menyesakkan dada\r\n\r\nRasanya seperti tak ada lagi waktu untukku terisak kembali\r\nMenatap negeri tercinta dalam lingkaran kehancuran\r\nIndonesia, aku tak ingin kehilangan tanah kelahiranku\r\nTanah yang akan dan selamanya menjadi tumpah darahku\r\n\r\nKurajut asa lukisan negeri ini hanya sepintas lalu,..\r\nBerlalu,.. berlalu,..dan berganti potret abadi bersama Indonesia sejati\r\nBiarlah nanti lukisan pedih tanah air ini terbingkai dalam kenangan\r\nKarena cinta akan membawa kedamaian dan keamanan\r\nDimanapun,..Kapanpun,.. siapapun,..dan selamanya,.. \r\n', '2018-05-07 16:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `user_kelas` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_tmp_lahir` varchar(255) NOT NULL,
  `user_tgl_lahir` date NOT NULL,
  `user_no_telpon` char(255) NOT NULL,
  `user_alamat` text NOT NULL,
  `user_data_entri` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_photo`, `user_level`, `user_kelas`, `user_username`, `user_password`, `user_email`, `user_tmp_lahir`, `user_tgl_lahir`, `user_no_telpon`, `user_alamat`, `user_data_entri`) VALUES
(1, 'Indah Nella', 'IMG_20171022_090121.jpg', 'Super Admin', 'XI RPL 1', 'indahnella', '17c4520f6cfd1ab53d8745e84681eb49', 'indahnella2212@gmail.com', 'Subang', '2000-07-16', '081322882787', 'Banjaran Hilir yang bakal jadi negara', '2018-04-20 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `cerpen`
--
ALTER TABLE `cerpen`
  ADD PRIMARY KEY (`cerpen_id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`gambar_id`);

--
-- Indexes for table `info_sekolah`
--
ALTER TABLE `info_sekolah`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `motivasi`
--
ALTER TABLE `motivasi`
  ADD PRIMARY KEY (`motivasi_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indexes for table `puisi`
--
ALTER TABLE `puisi`
  ADD PRIMARY KEY (`puisi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cerpen`
--
ALTER TABLE `cerpen`
  MODIFY `cerpen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `gambar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `info_sekolah`
--
ALTER TABLE `info_sekolah`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `motivasi`
--
ALTER TABLE `motivasi`
  MODIFY `motivasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `pesan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `puisi`
--
ALTER TABLE `puisi`
  MODIFY `puisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
