-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2024 pada 13.47
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pleret`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `tanggal`, `foto`, `deskripsi`) VALUES
(1, 'Kalurahan Pleret Kembangkan Agrowisata di Kawasan Pesisir', '2024-04-21', '1719582461_bd697def6953ec4bf52a.png', '<p><strong>RADAR JOGJA -</strong> </p><p>		Pantai selatan Kulon Progo memiliki potensi luar biasa apabila terus digali. Salah satunya potensi wisata pantai yang dapat terus dikembangkan. Seperti yang dilakukan oleh Kalurahan Pleret, Kapanewon Panjatan dalam mendorong pengelolaan wisata. Kalurahan ini mendorong pengembangan objek wisata Pantai Mlarangan Asri, yang berkolaborasi dengan Kelompok Sadar Wisata (Pokdarwis), dan masyarakat sebagai pengelola. \"Orientasinya adalah pemberdayaan masyarakat melalui pengelolan objek wisata,\" ucap Carik Kalurahan Pleret Nur Daryanto, saat ditemui Radar Jogja di ruang kerjanya, Jumat (19/4). Nur mengungkapkan, tujuan utama penggalian potensi wisata untuk meningkatkan aspek perekonomian masyarakat. Dengan penggalian dan pengelolaan potensi wisata masyarakat akan ikut serta. Sehingga masyarakat dapat memperoleh benefitnya.</p><p>Nur menceritakan, cikal bakal orientasi pembangunan wisata berawal saat Pokdarwis dan pengelola membuat wisata Pantai Mlarangan Asri di 2018 lalu. Saat itu Kalurahan Pleret ikut memberikan stimulus berupa pembangunan jalan akses kearah objek wisata.</p><p><br></p><p>		Kalurahan akan terus menggali dan mengembangkan potensi yang ada. Sisi barat Pantai Mlarangan akan dikembangkan menjadi objek wisata pantai. Dengan menyiapkan akses jalan terlebih dahulu. Untuk memudahkan wisatawan menuju lokasi, dengan dilanjutkan pembangunan sarpras.</p><p>Tak hanya pengembangan pesisir pantai, potensi yang dimiliki desa juga mulai merambah sektor pertanian. Kalurahan rencananya akan mengembangkan agrowisata di kawasan pesisir. Melihat banyak masyarakat yang menanam berbagai tanaman, seperti melon dan semangka. Konsep agrowisata juga dikemas dengan unsur adat, dengan mengusung unsur tanah surjan. Pengembangan ini tak hanya berorientasi pada wawasan pertanian. Namun juga terkaiy budaya tanah surjan yang harus terus dilestarikan. \"Pengelolaan nanti akan dikembalikan ke masyarakat karena tujuannya memang untuk masyarakat,\" tuturnya.</p><p><br></p><p>		Ketua Kelompok Sadar Wisata Pantai Mlarangan Asri Faisal Adi menjelaskan, pengelolaan wisata Pantai Mlarangan menitik beratkan peran masyarakat. Menurut pengembangan Pantai Mlarangan mengusung konsep penyajian pemandangan pantai. Dengan unit selling point pada keasrian kawasan pantai, dengan adanya pepohonan. Selama libur lebaran, Pantai Mlarangan menyaingi kunjungan wisata di pantau yang dikelola langsung oleh pemda. Menurut data dari Dinas Pariwisata Kulon Progo terdapat 22.875 pengunjung selama libur lebaran 2024. Sedangkan pada 2023 lalu, terdapat 11.650 pengunjung selama libur lebaran. Pengembangan kedepannya, pihak pengelola akan menambah wahana seperti ATV, paket outbond, dan wisata hasil laut. Selain itu pengembangan akan berorientasi pada agrowisata. Menurutnya agrowisata sangat cocok dikembangkan di kawasan Pleret.</p><p><br></p><p>		Hal ini berkaca pada potensi yang dimiliki dan telah terkondisi oleh masyarakat sekitar. Agrowisata nantinya akan melibatkan masyarakat, karena banyak lahan masyarakat yang ditanami tanaman. Namun, dalam pengelolaan hanya pada hasil panen.\"Konsepnya hampir sama dengan wisata petik buah apel di Malang,\" ucap Faisal. Faisal menjelaskan, konsep tersebut tengah digodog. Namun, perlu dukungan lebih banyak melalui stimulan tambahan dari kalurahan. Menurutnya pengembangan wisata harus didukung penuh oleh pihak terkait. Harapannya objek wisata di Kawasan Pleret menjadi rujukan dan mampu bersaing dengan pantai yang sudah terkenal sebelumnya. Seperti Pantai Glagah dan Congot. Tentunya dengan orientasi pemberdayaan masyarakat, untuk kemakmuran masyarakat. (cr7/pra)</p>'),
(3, 'Pantai Mlarangan Asri: Hidden Gems Wisata di Kulon Progo dengan Suasana Tenang dan Syahdu, Cocok untuk Healing', '2023-11-08', '1719583602_0243ad14ae049f855277.png', '<p><strong>BABADJOGJA - </strong></p><p>		Lagi liburan di Kulon Progo, Jogja? Wajib banget deh mampir di salah satu wisata pantainya. Wisata pantai yang direkomendasikan BabadJogja ini memiliki suasana yang tenang dan syahdu. Pantai di Kulon Progo ini cocok banget jadi pilihan untuk tempat healing. Nama tempat wisatanya adalah Pantai Mlarangan Asri. Pantai Mlarangan Asri ini lokasinya ada di Jalan Pangeran Diponegoro, Dusun I, Pleret, Kecamatan Panjatan, Kabupaten Kulon Progo. Lokasi Pantai Mlarangan asri ini berada di sebelah barat Pantai Bugel dan sebelah timur Pantai Glagah.</p><p><br></p><p>		Pantai Mlarangan Asri ini belum banyak diketahui orang jadi suasananya masih sepi dan tentunya nyaman banget untuk berlibur. Meski memiliki suasana yang sepi dan nyaman, namun pengunjung dilarang untuk berenang di pantai ini. Karena deburan ombaknya sangat tinggi. Namun pengunjung tetap bisa bermain pasir di sekitaran pantai ini.</p><p>Pohon-pohon yang tumbuh di sekitar pantai menambah suasana sejuk dan asri. Di Pantai Mlarangan Asri ini juga terdapat spot yang kerap dimanfaatkan untuk gowes.</p><p>Olahraga sepeda sembari menikmati keindahan air laut adalah perpaduan yang sempurna.</p><p><br></p><p>		Fasilitas di Pantai Mlarangan Asri ini juga sudah lengkap ada tempat parkir, toilet dan warung-warung yang menjual berbagai makanan. Salah seorang pengunjung mengatakan bahwa pantai ini sangat cocok untuk menjadi tempat piknik bersama keluarga karena suasana yang nyaman dan view cantik. \"Pantainya bagus, yang dimana banyak pohon-pohon cemara yang rindang membuat suasana dipantai sejuk dan tidak panas,\" ujar pengunjung tersebut. \"Tempatnya bersih serta ada fasilitas toilet. Sudah ada warung-warung penduduk dan penjual somay. Cocok juga untuk berpiknik bersama keluarga menggelar tikar sambil menikmati pemandangan pantai,\" imbuhnya.</p>'),
(5, 'Pantai Mlarangan Asri: Wisata Eksotis Tersembunyi di Pelukan Ombak yang Tinggi', '2024-01-20', '1719587504_27f675a8211a7133a651.png', '<p><strong>TERAS INFO - </strong></p><p>		Pantai Mlarangan Asri yang terletak di daerah Pleret, Panjatan, khususnya di Dusun I, merupakan destinasi wisata yang dapat dinikmati setiap hari mulai dari pukul 06.00 hingga pukul 18.00 WIB. Lokasinya yang terletak sekitar 16,3 kilometer atau sekitar 32 menit perjalanan dari pusat kota Kulon Progo membuatnya menjadi pilihan menarik bagi para pencari ketenangan dan keeksotisan alam. Meskipun relatif baru, Pantai Mlarangan Asri masih tergolong sepi pengunjung, mungkin karena keberadaannya yang belum begitu familiar di telinga wisatawan. Dengan akses yang mudah, para wisatawan dapat mengakses Pantai Mlarangan Asri dengan menggunakan kendaraan roda dua atau roda empat, mengingat jalan menuju lokasi sudah beraspal.</p><p><br></p><p>		Keberadaan jalan yang terawat memberikan kenyamanan tambahan bagi para pengunjung yang ingin mengeksplorasi kecantikan alam Pantai Mlarangan Asri.</p><p>Meskipun keberadaannya masih sepi, hal ini justru memberikan kesempatan bagi para pengunjung untuk menikmati pantai ini tanpa keramaian yang biasanya terjadi di destinasi wisata populer. Berbeda dengan Pantai Bugel yang memiliki ombak tenang, Pantai Mlarangan Asri menawarkan pemandangan laut dengan ombak yang cukup tinggi. Meski ombak yang tinggi memberikan keindahan tersendiri, para wisatawan harus berhati-hati, karena berenang di pantai ini dilarang demi menjaga keselamatan mereka. Resiko terseret ombak yang besar menjadi pertimbangan utama untuk menghindari kegiatan berenang di Pantai Mlarangan Asri.</p><p><br></p><p>		Meskipun belum ramai pengunjung, pesona alam Pantai Mlarangan Asri tidak kalah menariknya. Dikelilingi oleh keindahan alam yang masih alami dan hamparan pasir pantai yang bersih, pantai ini menawarkan pengalaman wisata yang unik. Suara deburan ombak yang menghantam pantai menjadi teman setia para pengunjung yang ingin menikmati ketenangan dan keindahan laut. Matahari terbit atau terbenam di Pantai Mlarangan Asri menciptakan pemandangan yang memukau, mengubah langit menjadi palet warna yang mempesona. Keberadaan Pantai Mlarangan Asri, yang mungkin belum sepenuhnya dikenal, memberikan pengalaman eksklusif bagi para wisatawan yang mencari ketenangan dan keindahan alam yang belum terjamah banyak orang.</p><p><br></p><p>		Keindahan alam yang ditawarkan oleh pantai ini mencakup keberagaman pemandangan mulai dari ombak yang tinggi hingga pasir pantai yang bersih. Pantai Mlarangan Asri tidak hanya mengajak para wisatawan untuk menikmati pesona lautnya, tetapi juga merenungi keagungan alam dan keberanian untuk mengeksplorasi keindahan yang baru dan belum terjamah. Sebuah perjalanan ke Pantai Mlarangan Asri bukan hanya sekadar destinasi liburan, tetapi juga perjalanan untuk menggali kekayaan alam yang masih tersembunyi. (*/Riski Endah Setyawati)</p>'),
(6, 'Asal Muasal Konsep Unik Sawah Surjan di Kulonprogo yang Jadi Wisata Edukasi', '2024-01-28', '1719733235_c440d8b133d4cc65a6d5.png', '<p><strong>SelinkgarWilis -</strong></p><p>		Wisata Sawah Surjan merupakan wisata edukasi mengenai pengolahan lahan pertanian yang berbentuk pola bergaris. Surjan adalah motif melekat pada pola bergaris dari baju adat Jawa kuno atau tempo dulu. Adapun warga setempat telah menggunakan sistem surjan pada sawahnya sedari jaman dulu. Istilahnya sistem surjan pada sawah mereka merupakan warisan leluhur yang sudah turun temurun. Wisata Sawah Surjan Sawah Surjan berada di Pedukuhan Dusun II, Pleret, Kecamatan Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta (DIY).</p><p><br></p><p>		Dengan adanya&nbsp;Wisata Sawah Surjan ini, diharapkan para pengunjung bisa belajar mengenai budaya pertanian berbasis surjan. Karena itu wisata ini merupakan wisata edukasi pertanian berbasis persawahan. Uniknya, wisata ini di bangun di antara areal persawahan dengan desain kekinian. Konsep penataannya dibikin serapi mungkin agar wisatawan atau pengunjung nyaman ketika berada di areal persawahan tersebut. Ada banyak gazebo untuk tempat bersantai sambil menikmati view hijaunya area persawahan dan kukiner yang ada. Terdapat juga menara pandang yang di desain secara unik agar pengunjung bisa melihat view sawah dari ketinggian. Sebagian besar bangunan di&nbsp;Wisata Sawah Surjan Sawah Surjan juga dibuat menggunakan bambu. Sehingga terkesan alami dan unik.</p>'),
(8, 'Soft Launching Wisata Among Tani', '2021-11-28', '1719759255_e56a21714b4151263225.jpeg', '<p>Diprakarsai oleh Dinas Pariwisata Kabupaten Kulon Progo berlokasi di lahan pertanian sawah surjan bulak Turirejo pedukuhan IV Kalurahan Pleret diselenggarakan kegiatan Soft Launching Wisata Budaya Among Tani di Lahan Pertanian Surjan, walaupun dalam suasana hujan kegiatan tersebut tetap dilaksanakan.</p><p><br></p><p>Dengan adanya wisata budaya dalam bidang pertanian dimaksudkan agar menarik daya tarik wisatawan sehingga dapat mengangkat nilai dan pendapatan masyarakat dan juga mendorong patani untuk berdaya guna, berinovasi sehingga menambah pengetahuan dan kesejahteraan petani itu sendiri dan lebih luas lagi bisa berdampak positif peningkatan motifasi, inovasi, nilai plus atau kesejahteraan masyarakat.</p><p><br></p><p>Kegiatan tersebut dihadiri langsung oleh bapak Bupati, Wakil Bupati, Kepala Dinas Pariwisata Kabupaten Kulon Progo dan unsur-terkait yang semuanya mendukung kegiatan ini.</p><p><br></p><p><img src=\"http://localhost:8080/uploads/wisata/1719759205_79c909b7179aea1bafd1.jpeg\"></p><p><br></p><p><img src=\"http://localhost:8080/uploads/wisata/1719759215_b59b1efdad006f6d8856.jpeg\"></p>'),
(9, 'Lahan Sawah Surjan di Kulon Progo Jadi Sarana Pendidikan bagi Petani Milenial', '2021-12-03', '1719759536_20992d661447608f048a.webp', '<p><strong>KULON PROGO, harianmerapi.com - </strong></p><p>Pemkab Kulon Progo melalui Dinas Pariwisata setempat menyiapkan wisata baru berupa budaya among tani di lahan pertanian surjan, Pleret, Panjatan. Diharapkan, destinasi wisata sawah surjan bisa menjadi sarana pendidikan bagi masyarakat terutama generasi petani milenial di Kulon Progo. Sebagai informasi, surjan adalah sistem pertanian pada suatu lahan yang terdapat perbedaan tinggi permukaan bidang tanam. Sebagian tanah lapisan atas digali kemudian digunakan untuk meninggikan bidang tanah di sampingnya secara memanjang sehingga terbentuk surjan. Akhir pekan kemarin, soft launching wisata sawah surjan di Pleret Panjatan telah digelar dengan dihadiri sejumlah pejabat Pemkab Kulon Progo. Acara tersebut dimeriahkan penampilan Panembrama Ikatan Sinden Kulon Progo serta penampilan dari Club Guyon Waton, Srundeng, Tere, Agung, Ari dan kawan-kawan.</p><p><br></p><p>Kepala Dinas Pariwisata Kulon Progo, Joko Mursito menyampaikan, lahan pertanian di Pleret akan dijadikan destinasi wisata baru dengan tema wisata budaya sawah surjan. Hal ini sebagai implementasi dari Nusa Brata Manunggal Sedya Mbraya Pariwisata. \"Kami berupaya melestarikan sawah surjan dengan mewujudkan agro edu wisata yang berbasis pertanian dan budaya. Selain itu, juga diharapkan bisa menjadi sarana pendidikan untuk generasi petani milenial,\" kata Joko, Jumat (3/12/2021). Joko menargetkan, ke depan harus ada dampak positif dari peluncuran wisata sawah surjan Pleret. Terutama peningkatan pendapatan petani dari keberadaan destinasi wisata ini.</p><p><br></p><p>Panewu Panjatan, Setiawan Tri Widada menambahkan, pembangunan destinasi wisata sawah surjan menjadi harapan baru lagi masyarakat setempat. Diharapkan, sawah surjan bisa menjadi daya tarik bagi wisatawan yang berkunjung ke Kulon Progo. \"Semangat untuk membangun didukung dana keistimewaan (danais) pada Kalurahan Pleret diharapkan menjadi contoh untuk kalurahan lain,\" kata Setiawan. Sementara itu, Bupati Kulon Progo, Sutedjo menyampaikan, para leluhur sudah mempunyai ide-ide kreatif untuk menyiasati alam secara luar biasa. Mereka juga telah menciptakan sistem surjan yang diakui oleh dunia internasional. \"Para petani kami minta memantapkan hati untuk menggunakan sistem surjan ini karena memang kondisi alam kita sangat tepat bila menggunakan sistem surjan. Ini menjadi sistem pertanian yang spesifik dan berpotensi menimbulkan daya tarik untuk bisa dilihat masyarakat luas,\" urainya.</p><p><br></p><p>Wakil Bupati Kulon Progo Fajar Gegana mengapresiasi peluncuran destinasi wisata sawah surjan Pleret Panjatan. Terlebih, Pemkab sebelumnya telah menerima sertifikat bahwa Kulon Progo memiliki warisan budaya tak benda dari kementerian yang sudah ditetapkan secara nasional yaitu pertanian surjan. \"Pertanian di Kulon Progo sudah maju peradabannya sejak lama dengan memanfaatkan lahan yang ada sehingga perlu dilestarikan,\" ucapnya. *</p>'),
(10, 'Pendampingan UJB di Desa Wisata Sawah Surjan dan Pantai Mlarangan Asri', '2023-12-05', '1719759663_a656ca962812441f4801.webp', '<p><strong>Krjogja.com - KULONPROGO - </strong></p><p>Universitas Janabadra (UJB) kembali memperoleh hibah untuk melakukan pendampingan pengabdian pada masyarakat, karena kampus kebangsaan ini memperoleh dana skema Program Desa Binaan (PDB).</p><p>&nbsp;</p><p>Dalam merealisasikan program-program hibah ini UJB bermitra dengan Institut Teknologi Nasional Yogyakarta (ITNY) dan Pemerintah Kalurahan Pleret Panjatan Kulonprogo.</p><p>Hibah pengabdian ini diketuai oleh Dr Erni Ummi Hasanah SE MSi dengan anggota Dr Retno Lantarsih MP, Yumarlin MZ SKom MPd dan Iwan Aminto Ardi ST MSc.</p><p><br></p><p>Program-program yang ditangani dalam pendampingan meliputi beberapa bidang antara lain bidang ekonomi kreatif dan pariwisata, bidang pertanian lahan pasir (pesisir), bidang perikanan dan blue economy dan bidang pengembangan budaya serta kesenian yang akan dilaksanakan selama 3 tahun mulai tahun 2023-2025.</p><p>\"Tahun 2023 ini merupakan tahun pertama realisasi dari program pengabdian yang ditargetkan antara lain di bidang pariwisata dan ekonomi kreatif dengan merenovasi foodcourt di pantai Mlarangan Asri, promosi wisata dengan pembuatan billboard penunjuk arah ke destinasi wisata, merenovasi panggung seni Sawah Surjan dan beberapa pelatihan-pelatihan,\" kata Erni Ummi Hasanah, Selasa (5/9/2023).</p><p><br></p><p>Menurut Erni, untuk meningkatkan skill SDM wisata maka dilaksanakan pelatihan-pelatihan. Antara lain peningkatan capacity building pengurus Desa Wisata Sawah Surjan.</p><p>Pelatihan lainnya yaitu Good Agricultural Practices (GAP) tanaman cabai, agar para petani cabai di lahan pesisir di sekitar pantai Mlarangan Asri bisa meningkatkan kemampuan, keterampilan, dan pengetahuan mereka dalam penerapan budidaya cabai merah sesuai dengan GAP.</p><p>\"GAP secara keseluruhan mengacu pada penerapan sistem proses sertifikasi produksi yang menekankan adopsi teknologi maju yang ramah lingkungan,\" kata Erni.</p><p>Pelatihan-pelatihan yang dilakukan dengan pengurus desa wisata maupun petani cabai dilaksanakan di kantor Kalurahan Pleret. (*)</p>'),
(11, 'ICON WISATA BARU PANTAI MLARANGAN ASRI', '2023-01-05', '1719759844_801e012bbfc4fb6f0852.jpeg', '<p>Untuk melepas penat setelah rutinitas bekerja sehari hari maka dalam rangka&nbsp;mengisi liburan keluarga terlintas dibenak kita untuk mengunjungi tempat -tempat wisata yang menarik&nbsp;dan masih asri. Tak terlupakan yang satu ini merupakan tempat&nbsp;wisata yang lagi booming yang ada di kulon progo bernama Pantai Mlarangan Asri.</p><p><br></p><p>Dengan adanya dukungan dari Dinas Pariwista Kabupaten Kulon Progo ditahun 2023 ini maka diberikanlah bantuan berupa Papan Nama. Papan nama inilah yang sekarang menjadi icon baru pantai mlarangan asri. Dengan adanya icon baru tersebut&nbsp;menjadi daya tarik tersendiri bagi wisatawan lokal maupun wisatawan asing. Dalam pengembangan nya Pantai Mlarangan Asri&nbsp;bisa menambah spot foto di papan nama maupun di skitarnya.</p><p><br></p><p>Pengelola Wisata Mlarangan Asri sangat berterima kasih kepada Dinas Pariwisata Kulon Progo dengan adanya&nbsp;bantuan papan nama&nbsp;tersebut diharapkan dapat memacu pengelola wisata untuk berinovasi menjadi lebih baik lagi kedepan nya. Go go pariwisata kulon progo. (m-f)</p><p><br></p><p><img src=\"http://localhost:8080/uploads/wisata/1719759816_df71ada9662680a617ec.jpeg\"></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_wisata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `foto`, `id_wisata`) VALUES
(6, '1719470206_582a5f964bd2dbe135fa.jpeg', 4),
(18, '1719757547_44c93bc15e481150e040.jpeg', 4),
(19, '1719757560_f6bf889916f91feba1ca.jpg', 4),
(21, '1719757586_3c568690b894b0aff6be.webp', 1),
(24, '1720259621_80ee44dad130741eb213.jpeg', 4),
(26, '1720259657_ae8f36cb23776776852e.jpg', 4),
(27, '1720259681_abaeaf51d306dcb51bc8.jpg', 4),
(28, '1720259716_14ff61d3bba0e9fad035.jpg', 4),
(29, '1720259737_e35f3de8ffa579811079.jpg', 4),
(30, '1720260860_5d571bd26feb7770ec96.jpg', 1),
(31, '1720260869_3db66b091c03b567d30b.jpg', 1),
(32, '1720260876_93e1a45bae0ee0c47e7c.jpg', 1),
(33, '1720260883_b5a1526b42679f618968.jpg', 1),
(34, '1720260890_1eb48d1b6a57257eceb1.jpg', 1),
(35, '1720260897_e0b8d14831989cccd246.jpg', 1),
(36, '1720260906_976f081cd311a2eaec6f.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambaranumum`
--

CREATE TABLE `gambaranumum` (
  `id_gambaranumum` int(11) NOT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambaranumum`
--

INSERT INTO `gambaranumum` (`id_gambaranumum`, `content`) VALUES
(1, '<p><strong>Nama Organisasi</strong>: </p><p>Kelompok Sadar Wisata (Pokdarwis) Pleret</p><p><strong>Lokasi</strong>: </p><p>Desa Pleret, Kecamatan Panjatan, Kabupaten Kulonprogo, Daerah Istimewa Yogyakarta</p><p><strong>Tentang Pokdarwis Pleret</strong>: </p><p>Kelompok Sadar Wisata (Pokdarwis) Pleret adalah sebuah organisasi yang berdedikasi untuk mengembangkan dan mempromosikan potensi pariwisata yang ada di Desa Pleret, Panjatan, Kulonprogo. Dengan semangat gotong royong dan kebersamaan, Pokdarwis Pleret berupaya meningkatkan kualitas dan daya tarik destinasi wisata lokal, sehingga dapat memberikan manfaat ekonomi dan sosial bagi masyarakat setempat.</p><p><br></p><p><strong>Destinasi Wisata</strong>:</p><ol><li><strong>Pantai Mlarangan Asri</strong>: Pantai Mlarangan Asri adalah salah satu daya tarik utama di Pleret. Pantai ini menawarkan pemandangan yang indah dengan pasir putih dan ombak yang tenang. Pantai Mlarangan Asri menjadi tempat favorit bagi wisatawan yang mencari suasana pantai yang alami dan tenang. Berbagai aktivitas seperti berenang, memancing, dan menikmati pemandangan matahari terbenam menjadi daya tarik tersendiri bagi pengunjung. <a href=\"/destinasi/pantai-mlarangan-asri\" rel=\"noopener noreferrer\" target=\"_blank\">[Lihat Selengkapnya]</a></li><li><strong>Sawah Surjan</strong>: Sawah Surjan adalah destinasi wisata agro yang memamerkan keindahan sawah tradisional dengan sistem irigasi yang unik. Sawah ini tidak hanya menawarkan pemandangan yang hijau dan asri, tetapi juga memberikan kesempatan bagi wisatawan untuk belajar tentang teknik pertanian lokal dan berinteraksi dengan petani setempat. Pengalaman yang ditawarkan di Sawah Surjan memberikan wawasan baru mengenai kehidupan pedesaan yang harmonis dengan alam. <a href=\"/destinasi/sawah-surjan\" rel=\"noopener noreferrer\" target=\"_blank\">[Lihat Selengkapnya]</a></li></ol><p><br></p><p><strong>Kontak dan Informasi Lebih Lanjut</strong>: </p><p>Untuk informasi lebih lanjut mengenai kegiatan dan program Pokdarwis Pleret, Anda dapat menghubungi kami melalui:</p><ul><li>Alamat: Dusun II, Pleret, Kec. Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta</li><li>Telepon: +62 856 4383 4090</li><li>Email: email@gmail.com</li><li>Media Sosial: @pantaimlaranganasri</li></ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id_messages` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `subscribe` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id_messages`, `nama`, `email`, `message`, `subscribe`, `created_at`) VALUES
(2, 'Imron Taufiq Pramudya Jati', 'imrontaufiq2@gmail.com', 'ini pesan coba', 1, '2024-07-08 07:29:26'),
(3, 'Nama Pengirim Pesan', 'email@gmail.com', 'isi pesan', 1, '2024-07-08 10:30:51'),
(4, 'Mann', 'Mann@gmail.com', 'Mann broo', 1, '2024-07-08 10:35:47'),
(5, 'Monn', 'monn@gmail.com', 'ini monn', 0, '2024-07-08 13:57:20'),
(6, 'Anita Wijaya', 'anita.w@gmail.com', 'Saya ingin memberi saran untuk meningkatkan fasilitas parkir di Sawah Surjan. Apakah ada rencana untuk perbaikan ini?', 0, '2024-07-08 15:59:27'),
(7, 'Budi Santoso', 'budi@gmail.com', 'Halo, saya baru saja mengunjungi Pantai Mlarangan Asri dan sangat terkesan dengan keindahannya! Apakah ada rencana event mendatang di sini?', 1, '2024-07-08 16:00:04'),
(8, 'Fitriani', 'fitriani22@gmail.com', 'Halo, saya tertarik untuk mengunjungi Sawah Surjan. Bisakah saya mendapatkan informasi lebih lanjut tentang aktivitas yang bisa dilakukan di sana?', 1, '2024-07-08 16:05:01'),
(9, 'Maya Dewi', 'maya.dewi@gmail.com', 'Hai tim Pantai Mlarangan Asri, saya ingin memberi masukan tentang pengalaman saya berkunjung ke sana. Saya sangat senang dengan kebersihan pantai dan pelayanan yang ramah dari petugas. Saya juga ingin saran, mungkin bisa ditambahkan area untuk penyewaan alat snorkeling di sekitar pantai. Terima kasih banyak!', 1, '2024-07-08 16:05:33'),
(10, 'Andi Cahyono', 'andi.c@gmail.com', 'Selamat pagi, saya seorang fotografer dan baru saja melakukan pemotretan di Pantai Mlarangan Asri. Saya ingin memuji keindahan pantai ini dan ingin tahu apakah ada peraturan khusus terkait penggunaan drone untuk pemotretan udara di sini. Saya juga tertarik untuk mendapatkan update tentang event fotografi di lokasi ini. Terima kasih.', 1, '2024-07-08 16:06:13'),
(11, 'Ratna Sari', 'ratna.sari23@gmail.com', 'Hai tim Pantai Mlarangan Asri, saya dan keluarga baru saja mengunjungi pantai ini akhir pekan lalu. Kami sangat menikmati kebersihan pantai dan fasilitas yang tersedia. Namun, saya ingin memberi saran untuk penambahan tempat duduk di sekitar area bermain anak, agar orang tua dapat lebih nyaman mengawasi anak-anak mereka bermain. Terima kasih banyak atas perhatiannya!', 0, '2024-07-08 16:08:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukturorganisasi`
--

CREATE TABLE `strukturorganisasi` (
  `id_gambaranumum` int(11) NOT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `strukturorganisasi`
--

INSERT INTO `strukturorganisasi` (`id_gambaranumum`, `content`) VALUES
(1, '<p><strong>Nama Organisasi: </strong></p><p>Kelompok Sadar Wisata (Pokdarwis) Pleret</p><p><strong>Lokasi</strong>: </p><p>Desa Pleret, Kecamatan Panjatan, Kabupaten Kulonprogo, Daerah Istimewa Yogyakarta</p><p><br></p><p><strong>Struktur Organisasi</strong>:</p><p><strong>1. Pelindung</strong>: Kepala Kalurahan Pleret</p><ul><li>Tugas: Memberikan arahan dan perlindungan terhadap kebijakan dan kegiatan Pokdarwis sesuai dengan kebijakan desa.</li></ul><p><strong>2. Penasehat</strong>:</p><ul><li>Kepala Dusun Pleret</li><li>Tokoh Masyarakat</li><li>Tugas: Memberikan saran dan masukan strategis untuk pengembangan pariwisata di Desa Pleret.</li></ul><p><strong>3. Ketua</strong>:</p><ul><li>Tugas: Memimpin dan mengoordinasikan seluruh kegiatan Pokdarwis, membuat keputusan strategis, serta bertanggung jawab atas pencapaian visi dan misi organisasi.</li></ul><p><strong>4. Wakil Ketua</strong>:</p><ul><li>Tugas: Membantu Ketua dalam menjalankan tugas-tugasnya dan menggantikan Ketua saat berhalangan.</li></ul><p><strong>5. Sekretaris</strong>:</p><ul><li>Tugas: Mengelola administrasi, surat menyurat, dan dokumentasi organisasi serta memastikan kelancaran komunikasi internal dan eksternal.</li></ul><p><strong>6. Bendahara</strong>:</p><ul><li>Tugas: Mengelola keuangan organisasi, membuat laporan keuangan, serta memastikan penggunaan dana yang transparan dan akuntabel.</li></ul><p><strong>7. Bidang Pengembangan Wisata</strong>:</p><ul><li>Koordinator: [Nama]</li><li>Tugas: Merencanakan dan mengimplementasikan program-program pengembangan destinasi wisata, termasuk Pantai Mlarangan Asri dan Sawah Surjan.</li></ul><p><strong>8. Bidang Promosi dan Pemasaran</strong>:</p><ul><li>Koordinator: [Nama]</li><li>Tugas: Mengembangkan strategi promosi, mengelola media sosial dan kampanye pemasaran, serta menjalin kerjasama dengan berbagai pihak untuk meningkatkan kunjungan wisatawan.</li></ul><p><strong>9. Bidang Pendidikan dan Pelatihan</strong>:</p><ul><li>Koordinator: [Nama]</li><li>Tugas: Mengadakan pelatihan bagi anggota Pokdarwis dan masyarakat setempat mengenai pengelolaan pariwisata, pelayanan wisata, dan peningkatan kapasitas.</li></ul><p><strong>10. Bidang Pelestarian Lingkungan</strong>:</p><ul><li>Koordinator: [Nama]</li><li>Tugas: Menjaga kelestarian lingkungan di sekitar destinasi wisata, menggalakkan program-program kebersihan dan penghijauan, serta mengedukasi wisatawan dan masyarakat mengenai pentingnya pelestarian lingkungan.</li></ul><p><strong>11. Bidang Hubungan Masyarakat (Humas)</strong>:</p><ul><li>Koordinator: [Nama]</li><li>Tugas: Membangun hubungan baik dengan masyarakat, media, dan stakeholder lainnya, serta mengelola informasi publik terkait kegiatan dan program Pokdarwis.</li></ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(2, 'adminpleret', '$2y$10$6Yt2pU19VC7.mMIRIy/Nt.dTTyPS3FI66oHEYS92UgOqfeWLuk4Sy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `content`) VALUES
(1, '<p><strong>Visi:<span class=\"ql-cursor\">﻿﻿﻿﻿﻿﻿﻿﻿﻿</span></strong></p><p>Menjadikan Pleret sebagai destinasi wisata unggulan yang berkelanjutan, berbasis kearifan lokal dan alam, untuk meningkatkan kesejahteraan masyarakat.</p><p><br></p><p><strong>Misi:</strong></p><p><strong>1. Pengembangan Wisata Alam:</strong></p><ul><li>Mengembangkan dan mempromosikan Pantai Mlarangan Asri sebagai destinasi wisata yang ramah lingkungan dan menarik.</li><li>Mengelola Sawah Surjan sebagai objek wisata edukasi dan agrowisata yang dapat memberikan pengalaman unik bagi pengunjung.</li></ul><p><strong>2. Pemberdayaan Masyarakat:</strong></p><ul><li>Melibatkan masyarakat setempat dalam setiap kegiatan pengembangan wisata untuk menciptakan lapangan kerja dan meningkatkan pendapatan.</li><li>Memberikan pelatihan kepada masyarakat dalam bidang pariwisata, pelayanan, dan kerajinan tangan yang berkaitan dengan potensi lokal.</li></ul><p><strong>3. Pelestarian Budaya dan Alam:</strong></p><ul><li>Menjaga kelestarian lingkungan Pantai Mlarangan Asri dan Sawah Surjan dengan program-program konservasi.</li><li>Melestarikan dan mempromosikan budaya lokal Pleret melalui event-event budaya dan festival.</li></ul><p><strong>4. Promosi dan Kerjasama:</strong></p><ul><li>Mengoptimalkan promosi destinasi wisata Pleret melalui berbagai media, baik online maupun offline.</li><li>Membangun kerjasama dengan pemerintah, swasta, dan komunitas lain untuk mendukung pengembangan pariwisata di Pleret.</li></ul><p><strong>5. Peningkatan Infrastruktur:</strong></p><ul><li>Mengadvokasi perbaikan dan pembangunan infrastruktur pendukung wisata, seperti akses jalan, fasilitas umum, dan area parkir.</li><li>Mengembangkan fasilitas pendukung wisata yang nyaman dan aman bagi pengunjung, seperti area bermain anak, pusat informasi, dan tempat istirahat.</li></ul><p><br></p><p>Dengan visi dan misi ini, diharapkan Pokdarwis Pleret dapat menjadi motor penggerak dalam pengembangan pariwisata yang berkelanjutan, sekaligus meningkatkan kesejahteraan dan kualitas hidup masyarakat setempat.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `alamat`, `gambar`, `deskripsi`, `latitude`, `longitude`) VALUES
(1, 'Sawah Surjan', 'Pedukuhan IV, RT.15/RW.08, Dusun II, Pleret, Kec. Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta', '1719390121_c99d765e6d5913f0d413.jpg', '<p>Berlibur dengan rekreasi ke areal persawahan? Kenapa tidak! Di Kulon Progo, selain terkenal akan wisata pantainya yang begitu indah, juga terdapat banyak tempat wisata menarik lainnya yang dapat kalian kunjungi saat liburan tiba seperti halnya Wisata Sawah Surjan.</p><p>Seperti namanya, tempat wisata ini merupakan sebuah areal persawahan dengan sistem surjan. Perlu kalian tahu, “surjan” merupakan sistem pertanian larikan yang menggabungkan antara sawah padi dan palawija yang ditanam dalam suatu areal yang sama.</p><p>Sebagai destinasi wisata agroeduwisata, Wisata Sawah Surjan diharapkan dapat menjadi daya tarik serta media pendidikan bagi generasi muda untuk mengenal lebih dekat dengan dunia pertanian. Nah, bila kalian tertarik untuk mengunjunginya, yuk simak dulu rinciannya berikut.</p><p><br></p><p><strong>Daya Tarik Wisata Sawah Surjan</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719739887_c215bad99bb18520d170.jpg\"></p><p><span style=\"color: rgb(51, 51, 51);\">Tidak hanya memiliki panorama yang indah dan memukau, Wisata Sawah Surjan juga memiliki beragam keunikan dan daya tarik lainnya seperti:</span></p><p><br></p><p><strong>1. Agroeduwisata Berbasis Pertanian dan Budaya</strong></p><p>Sawah Surjan memang masih terdengar asing di telinga kebanyakan orang. Bahkan, sebagian besar petani pun belum mengenal jenis sawah ini. Namun, hal ini jadi kesempatan yang bagus untuk mengenalkan sistem pertanian yang terbilang unik ini kepada anak-anak muda maupun kepada mereka yang tertarik di bidang pertanian.</p><p>Seperti yang kita tahu, sawah surjan merupakan sawah yang dibuat larikan dengan alur tinggi rendah. Guludan tinggi ditanami palawija, sementara yang rendah ditanami padi. Hal ini mengacu kepada “baju surjan lurik” yang sering digunakan oleh orang Jawa dan Jogja tempo dulu.</p><p><br></p><p><strong>2. Gubuk Tradisional di Areal Persawahan</strong></p><p>Salah satu daya tarik utama yang bisa kalian temui di Wisata Sawah Surjan adalah terdapat gubuk tradisional yang terbuat dari bambu yang berada di atas areal persawahan ini. Antara gubuk satu dan gubuk lainnya dihubungkan dengan jalan menggunakan jembatan bambu. Jadi, tidak mengganggu tumbuh kembangnya tanaman padi.</p><p>Jumlah gubuknya sendiri cukup banyak hingga mencapai lebih dari 10. Para pengujung kerap memanfaatkannya sebagai sarana untuk berfoto-foto serta berteduh di tengah matahari yang begitu panas. Diantara semua gubuk yang ada, ada satu bangunan yang lebih besar dengan memiliki bentuk yang lebih unik.</p><p><br></p><p><strong>3. Pasar Kuliner yang Siap Dinikmati Setiap Akhir Pekan</strong></p><p>Setiap hari Minggu pagi, terdapat pasar kuliner yang diadakan oleh masyarakat desa sekitar. Jadi, buat kalian yang ingin menikmati aneka makanan tradisional khas Jogja, maka bisa mengujunginya. Harga yang di tawarkan pun terbilang murah meriah karena banyak sekali jajanan lokal yang tersedia mulai dari seribuan.</p><p>Setelah membeli aneka sajian kuliner, selanjutnya bisa membawanya untuk bersantai di gubuk-gubuk yang ada di Wisata Sawah Surjan ini sambil memakannya bersama teman-teman atau keluarga. Dengan begitu, makanan yang kalian nikmati dijamin akan terasa lebih enak.</p><p><br></p><p><strong>4. Panorama Pedesaan yang Begitu Memukau</strong></p><p>Apabila kalian sehari-harinya berada di areal perkotaan dan penat dengan berbagai kondisi daerah kota yang sumpek dan penuh polusi, maka cobalah untuk berkunjung ke sawah ini yang berlokasi di pedesaan yang masih asri. Dengan pemandangan indah ini, tentunya sangat cocok bagi kalian yang hobi foto-foto.</p><p>Areal Sawah Surjan yang dikembangkan sendiri sekitar 12 hektar yang diselingi antara tanaman padi dan tanaman hortikultura seperti cabai, kacang panjang, terong, tomat, buncis, dan banyak lagi. Jadi, sambil menunggu padi panen, maka para petani bisa memanennya tanaman tersebut terlebih dahulu. Panorama sawah surjan semacam ini tentunya sangat sulit untuk ditemui di tempat lainnya.</p><p><br></p><p><strong>Alamat dan Rute Menuju Lokasi</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719740033_6de896d3aebb08b7b1cf.jpg\"></p><p>Wisata Sawah Surjan terletak di Pedukuhan IV, Dusun II, Desa Pleret, Kecamatan Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta. jika diakses dari Pantai Bugel atau Pantai Mlarangan Asri, maka jaraknya hanya sekitar 2 km</p><p>Lokasinya memang tidak tepat berada di tepi Jalan Daendels Pantai Selatan, namun aksesnya cukup mudah. Jika kalian ingin mengunjungi tempat ini dari Yogyakarta International Airport, maka jarak tempuh yang dibutuhkan 14,8 km atau sekitar 24 menit perjalanan dengan rute sebagai berikut:</p><ul><li>Jika kalian sedang berada di Yogyakarta International Airport, maka masuk ke Jl Turi</li><li>Belok kiri menuju Jl Nasional III lalu belok kiri ke Jl Palihan</li><li>Belok kiri lagi ke Jl Daendles Pantai Selatan lalu ikuti terus jalan tersebut sejauh 11,2 km</li><li>Lanjutkan belok kiri ke Jl KH Hisyam lalu jalan sekitar 350 meter</li><li>Nah, lokasi bisa kalian temukan di sebelah kanan jalan</li></ul><p><br></p><p><strong>Harga Tiket Masuk Wisata Sawah Surjan</strong></p><p>Tiket masuk menuju Sawah Surjan untuk saat ini gratis sepenuhnya, tanpa dikenakan biaya apapun kecuali biaya parkir.</p><p>Untuk parkir motor akan dikenakan Rp 2.000 per motor, sementara untuk parkir mobil akan dikenakan Rp 5.000 per mobil. Parkirnya sendiri tidak terlalu jauh dari spot sawahnya sehingga kalian hanya cukup berjalan kaki untuk mencapainya.</p><p>Apabila kalian datang di hari Minggu pagi, maka akan ada pasar kuliner yang buka di desa tersebut. Jangan lupa untuk membawa uang lebih apabila ingin menikmati aneka jajanan tradisional yang tersedia.</p><p><br></p><p>Ragam Aktivitas yang Menarik Dilakukan</p><p>Selama berkunjung ke Wisata Sawah Surjan, maka kalian dapat melakukan sederetan aktivitas menarik seperti halnya berikut ini:</p><p><strong>1. Belajar Tentang Pertanian Surjan</strong></p><p>Sawah Surjan termasuk metode pengelolaan sawah yang telah dilakukan secara turun temurun sehingga menjadi kearifan lokal bagi masyarakat pesisir Kulon Progo. Dengan menggunakan konsep pertanian ini, maka tanaman dapat beradaptasi dengan baik pada kondisi pengairan yang kurang mendukung. Nantinya, di sini kalian bisa belajar tentang metode pertanian satu ini beserta prakteknya langsung.</p><p><br></p><p><strong>2. Berburu Foto yang Instagramable</strong></p><p>Dengan latar belakang areal persawahan dan palawija, tentunya menjadikan foto kalian benar-benar tampak begitu indah. Apalagi, sawah dengan tipe surjan semacam ini hanya terdapat di Kulon Progo sehingga bisa dijadikan sebagai sarana untuk mengabadikan foto yang langka yang tidak bisa kalian dapatkan di tempat lain.</p><p><br></p><p><strong>3. Menikmati Aneka Sajian Kuliner</strong></p><p>Seperti yang sudah dijelaskan sebelumnya, bahwa setiap Minggu pagi terdapat pasar kuliner yang buka di desa ini. Kalian bisa membeli aneka jajanan khas Kulon Progo dan jajanan tradisional lainnya lalu membawa ke gubuk-gubuk tengah sawah ini untuk bersantai sembari menikmati keindahan panorama persawahan.</p><p><br></p><p><strong>Fasilitas Pendukung di Wisata Sawah Surjan</strong></p><p>Karena masih gratis dan belum ada biaya retribusi khusus, maka fasilitas yang tersedia di destinasi wisata di Kulon Progo ini masih terbilang terbatas. Berikut ini beberapa yang dapat kalian temui:</p><ul><li>Warung</li><li>Tempat parkir</li><li>Toilet</li><li>Masjid</li><li>Saung</li></ul><p><br></p><p>Nah, itulah beberapa hal yang perlu kalian tahu seputar Wisata Sawah Surjan sebelum mencoba untuk mengunjunginya saat liburan nanti, semoga bermanfaat!</p>', -7.93352129, 110.14912288),
(4, 'Pantai Mlarangan Asri', 'Jl. Pangeran Diponegoro, Dusun I, Pleret, Kec. Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55655', '1719408924_a122506addfa2d03bc1c.jpeg', '<p>Kulon Progo, yang terletak di Yogyakarta, memiliki sejumlah pantai yang indah dan memikat hati para pelancong. Di antara pesona Pantai Glagah dan Pantai Trisik yang telah terkenal, ada surga tersembunyi yang belum banyak diketahui oleh wisatawan, yaitu Pantai Mlarangan Asri. Terletak di Desa Pleret, pantai ini memikat dengan pesona pasir hitamnya dan garis pantainya yang panjang yang masih relatif sepi.</p><p>Di sini, Anda akan menemukan diri Anda berada di bawah naungan ratusan pohon cemara yang tumbuh di tepi pantai, menciptakan suasana teduh yang sempurna untuk pelarian dari hiruk-pikuk kehidupan sehari-hari. Keistimewaan Pantai Mlarangan Asri tidak hanya terletak pada pantainya yang menawan, tetapi juga pada ketenangan yang dapat Anda temukan di sini.</p><p>Karakteristik pantai ini mencakup pantai berpasir hitam yang panjang, mirip dengan Pantai Parangtritis di Bantul. Namun, apa yang membuatnya benar-benar unik adalah hamparan pohon cemara yang menjaga pantainya dari timur hingga barat. Pohon-pohon ini menambahkan sentuhan alami pada keseluruhan pengalaman dan menciptakan perasaan tenang yang menghampiri setiap pengunjung. Keadaan pantai yang masih sangat alami dan jarangnya bangunan-bangunan modern menambah pesona Pantai Mlarangan Asri yang terjaga.</p><p><br></p><p><strong>Harga Tiket Masuk Pantai Mlarangan Asri</strong></p><p>Tiket masuk ke Pantai Mlarangan Asri adalah GRATIS! Dengan kata lain, Anda dapat menikmati keindahan pantai ini tanpa biaya tiket masuk yang mahal. Hanya ada biaya tambahan yang perlu Anda bayar jika Anda membawa kendaraan bermotor. Untuk parkir motor, biayanya adalah Rp3.000, sedangkan untuk parkir mobil, biayanya adalah Rp5.000. Selain itu, ada fasilitas toilet yang tersedia dengan biaya tambahan sebesar Rp2.000.</p><p><br></p><p><strong>Jam Buka Pantai Mlarangan Asri</strong></p><p>Untuk Pantai Mlarangan Asri di Kulon Progo, Anda memiliki keuntungan besar karena pantai ini buka selama 24 jam setiap hari. Artinya, Anda bebas datang kapan saja, baik itu pagi, siang, sore, atau bahkan tengah malam, untuk menikmati pesona alam yang ditawarkan oleh pantai ini.</p><p>Pantai Mlarangan Asri adalah salah satu pantai yang tidak memiliki jam operasional tertentu. Ini berarti bahwa Anda tidak akan terbatas oleh waktu kunjungan, dan Anda dapat menjelajahi pantai ini sepanjang hari atau malam jika Anda menginginkannya.</p><p><br></p><p><strong>Daya Tarik &amp; Aktivitas Pantai Mlarangan Asri</strong></p><p>Pantai Mlarangan Asri, yang terletak di Desa Pleret, Kulon Progo, adalah salah satu destinasi wisata yang menyuguhkan daya tarik alam yang memikat dan beragam aktivitas seru bagi pengunjungnya. Pantai ini menonjolkan karakteristik uniknya yang meliputi pasir hitam, garis pantai yang panjang, dan pohon cemara yang tumbuh di sepanjang tepiannya. Berikut adalah beberapa daya tarik dan aktivitas menarik yang dapat Anda nikmati saat mengunjungi Pantai Mlarangan Asri:</p><p><br></p><p><strong>Pemandangan Ratusan Pohon Cemara</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719742052_1561433e9eadb6b8a160.jpg\"></p><p>Salah satu ciri khas yang membuat Pantai Mlarangan Asri begitu menarik adalah banyaknya pohon cemara yang tumbuh di tepi pantainya. Pohon cemara ini tumbuh memanjang dari timur hingga barat, menciptakan suasananya yang teduh dan asri. Ketika Anda duduk di bawah pohon cemara ini, Anda dapat menikmati pemandangan laut yang indah sambil merasakan hembusan angin sejuk. Suasana alami dan minimnya bangunan di sekitar pantai menjadikan tempat ini sempurna untuk bersantai dan menyepi.</p><p><br></p><p><strong>Bermain dengan Ombak</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719742150_eeaea0ffd023df541288.png\"></p><p>Pantai Mlarangan Asri memiliki ombak yang cukup besar, yang membuat aktivitas bermain ombak menjadi sangat seru. Garis pantainya landai dengan pasir halus, sehingga sangat cocok untuk bermain air dan berenang. Ombak yang besar menciptakan keseruan tersendiri ketika Anda bermain di tepian pantai. Pasir hitam yang halus juga bisa digunakan untuk menciptakan berbagai bentuk dengan kreativitas Anda. Aktivitas bermain ombak di Pantai Mlarangan Asri merupakan pengalaman yang tak terlupakan.</p><p><br></p><p><strong>Bersantai di Tepi Pantai</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719742213_3ae55b68d9b61bd68259.webp\"></p><p>Pantai ini adalah tempat yang sempurna untuk bersantai dan melupakan kepenatan sejenak. Area sekitarnya yang masih sepi memberikan kenyamanan tersendiri. Selain pohon cemara, ada kursi-kursi kayu yang dapat Anda manfaatkan untuk bersantai. Duduk di bawah pohon cemara sambil mendengarkan deburan ombak dan merasakan angin pantai yang lembut adalah salah satu cara terbaik untuk menikmati Pantai Mlarangan Asri. Jangan lupa untuk membawa bekal, karena di pantai ini belum ada warung makanan atau minuman.</p><p><br></p><p><strong>Hamparan Bunga Teratai</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719742284_ffd28da8267bc6be7956.webp\"></p><p>Salah satu daya tarik unik di Pantai Mlarangan Asri adalah hamparan bunga teratai yang tumbuh di sepanjang tepian pantai. Pemandangan ini jarang ditemukan di pantai lain. Hamparan bunga teratai hijau yang kontras dengan pasir pantai dan air laut menciptakan panorama yang sangat cantik. Bunga teratai ini sering menjadi spot foto favorit bagi pengunjung. Anda bisa mengambil foto indah di antara bunga-bunga ini atau hanya menikmati keindahan alam yang ditawarkan oleh Pantai Mlarangan Asri.</p><p><br></p><p><strong>Spot Foto Menarik</strong></p><p>Selain hamparan bunga teratai, masih banyak spot foto menarik lainnya di pantai ini. Salah satu ciri khasnya adalah ayunan yang digantung di dahan-dahan pohon cemara. Ayunan-ayunan ini menghadap langsung ke laut, sehingga Anda dapat menikmati pemandangan pantai sambil bersenang-senang di ayunan. Jumlah ayunan yang tersedia cukup banyak, sehingga Anda tidak perlu menunggu lama untuk mendapatkan giliran. Ayunan-ayunan sederhana ini terbuat dari kayu dan digantung dengan tali tambang, menciptakan spot foto yang menarik dan menyenangkan.</p><p><br></p><p><strong>Melihat Sunset</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719742340_47dc2c8b1b636798ab39.webp\"></p><p>Saat senja tiba, jangan lewatkan momen indah saat matahari terbenam di Pantai Mlarangan Asri. Pantai ini memiliki pemandangan matahari terbit dan terbenam yang sangat memukau. Pemandangan laut yang luas dan langit yang berwarna jingga menjadi latar belakang yang sempurna untuk momen yang romantis dan indah. Momen sunset di pantai ini adalah waktu yang paling tepat untuk mengabadikan keindahan alam dalam foto-foto yang memukau.</p><p><br></p><p><strong>Mencari Undur-Undur</strong></p><p><img src=\"http://localhost:8080/uploads/wisata/1719742353_6f577e901a0e292a8d71.webp\"></p><p>Jika Anda mencari pengalaman yang tidak biasa, Anda dapat mencoba mencari undur-undur laut di Pantai Mlarangan Asri. Pantai ini terkenal memiliki banyak undur-undur laut yang hidup di bawah pasir pantai. Untuk menemukannya, Anda hanya perlu membalik-balikkan pasir pantai dengan kayu atau tangan Anda. Aktivitas ini seru untuk dilakukan bersama teman atau keluarga. Anda juga dapat mencicipi kuliner khas undur-undur laut di warung-warung yang tersedia di pantai ini.</p><p><br></p><p>Pantai Mlarangan Asri menawarkan pengalaman wisata yang unik dan berkesan dengan daya tarik alamnya yang memikat dan beragam aktivitas yang menyenangkan. Dari bermain ombak hingga bersantai di tepi pantai, pantai ini memiliki segala sesuatu yang Anda butuhkan untuk liburan yang tak terlupakan.</p><p><br></p><p><strong>Fasilitas Pantai Mlarangan Asri</strong></p><p>Meskipun Pantai Mlarangan Asri adalah tempat yang masih alami dan sepi, tetapi Anda tetap dapat menemukan beberapa fasilitas yang cukup membantu bagi para pengunjung. Meskipun sederhana, fasilitas ini akan membantu Anda untuk tetap nyaman selama berada di pantai ini:</p><ul><li>Toilet</li><li>Area Parkir</li><li>Food Court</li><li>Mushola</li><li>Pendopo</li></ul><p>Meskipun fasilitas di pantai ini sederhana, mereka tetap membantu memenuhi kebutuhan dasar pengunjung selama berada di Pantai Mlarangan Asri. Namun, disarankan untuk membawa bekal makanan dan minuman sendiri karena belum ada warung makanan atau minuman yang tersedia di pantai ini. Dengan begitu, Anda dapat bersiap untuk menikmati hari yang menyenangkan di pantai ini tanpa kekhawatiran.</p><p><br></p><p><strong>Lokasi Pantai Mlarangan Asri</strong></p><p>Pantai Mlarangan Asri adalah salah satu surga tersembunyi di Kulon Progo, Yogyakarta. Terletak di Desa Pleret, pantai ini menawarkan keindahan alam yang masih alami dan suasana yang tenang. Untuk membantu Anda menemukan lokasinya dengan mudah, berikut adalah informasi lebih lanjut tentang lokasi Pantai Mlarangan Asri:</p><ul><li>Alamat: Pantai Mlarangan Asri terletak di Desa Pleret, Kecamatan Temon, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta. Anda dapat menggunakan alamat ini sebagai panduan jika menggunakan layanan navigasi atau GPS.</li><li>Jarak dari Pusat Kota: Pantai Mlarangan Asri terletak sekitar 50 kilometer sebelah barat dari pusat Kota Yogyakarta. Dengan kendaraan pribadi, perjalanan dari pusat kota biasanya memakan waktu sekitar 1,5 hingga 2 jam tergantung pada kondisi lalu lintas.</li><li>Aksesibilitas: Akses ke pantai ini sangat baik, dengan sebagian besar perjalanan melalui jalan raya yang cukup lebar. Anda dapat menggunakan kendaraan pribadi, taksi, atau layanan transportasi online untuk mencapai pantai ini. Selain itu, jika Anda menginginkan pengalaman yang lebih berpetualang, Anda juga dapat menggunakan sepeda motor.</li></ul><p><br></p><p>Meskipun mungkin memerlukan sedikit upaya untuk mencapai Pantai Mlarangan Asri, perjalanan ke tempat ini akan sangat sebanding dengan keindahan alam yang ditawarkannya. Sebagai salah satu pantai yang masih tersembunyi, Anda dapat menikmati suasana yang tenang dan alami tanpa kebisingan dari keramaian.</p>', -7.94555160, 110.14223774);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `fk_wisata` (`id_wisata`);

--
-- Indeks untuk tabel `gambaranumum`
--
ALTER TABLE `gambaranumum`
  ADD PRIMARY KEY (`id_gambaranumum`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_messages`);

--
-- Indeks untuk tabel `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  ADD PRIMARY KEY (`id_gambaranumum`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `gambaranumum`
--
ALTER TABLE `gambaranumum`
  MODIFY `id_gambaranumum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id_messages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  MODIFY `id_gambaranumum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `fk_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
