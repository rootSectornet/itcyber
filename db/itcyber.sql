-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 06:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itcyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `album` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `album`, `tanggal`) VALUES
(2, 'Lulus', '2017-09-02'),
(3, 'PENDIDIKAN IT CYBER', '2017-09-02'),
(4, 'PERMIKOMNAS', '2017-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(70) NOT NULL,
  `foto` varchar(75) NOT NULL,
  `id_angkatan` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `status_active` varchar(20) NOT NULL,
  `status_jabatan` varchar(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `keahlian` varchar(400) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `email`, `password`, `foto`, `id_angkatan`, `id_jabatan`, `status_active`, `status_jabatan`, `alamat`, `no_telp`, `tgl_lahir`, `jenis_kelamin`, `keahlian`, `pekerjaan`) VALUES
('ITC00071', 'Aldi Rahman', 'aldi.rahman094@gmail.com', '38b8cffda1a596aef60ea8a53d52fafd', 'w.jpg', '5', '1', '1', '1', ' Perum Reni Jaya Pamulang,Tangsel', '081284080638', '1994-10-10', '', 'Service', 'masih part time'),
('ITC00072', 'Dadang Kurnia', 'dadangkurnia023@gmail.com', 'bac5d99dc5437eb49b2e9ea1e26c0edc', 'Penguins.jpg', '5', '3', '1', '1', 'jl. salak raya rt 003 rw 004 Pamulang, Tangsel', '087884192525', '1992-09-23', 'Laki - Laki', 'bongkar mesin', 'mekanik'),
('ITC00073', 'Irma Rahmawati', 'irmarahmawati9929@gmail.com', 'a7cc8c6ed266108a5f2510b5bd10963c', 'Hydrangeas.jpg', '5', '2', '1', '1', 'Jl. Salak 8 Rt 003/ Rw 003 Pamulang, Tangerang Selatan', '085840660799', '1995-05-07', 'Perempuan', 'null', 'Karyawan Swasta'),
('ITC00074', 'M. Cece Nasrul Maulana', 'cecenasrul@gmail.com', '58b785c6db81777638e72a5dbdbc453f', 'Hydrangeas1.jpg', '5', '6', '0', '0', 'Gg. hikmah, Ciputat Timur', '089530939581', '1995-05-25', 'Laki - Laki', 'null', 'null'),
('ITC00075', 'Suci Fitriah', 'sucipinky88@gmail.com', 'f5518f44d91780f6594ff89abaf26728', 'Hydrangeas2.jpg', '5', '6', '0', '0', 'poris', '088808768384', '1995-02-17', 'Perempuan', 'photoshop', 'Karyawan Swasta'),
('ITC00076', 'Fajar Ulum', 'fajarulum18@gmail.com', 'd0122fe69b0f797be2bdd295dfe3ff48', 'Hydrangeas3.jpg', '5', '6', '0', '0', 'poris gaga', '081314861409', '1990-08-17', 'Laki - Laki', 'null', 'Karyawan Swasta'),
('ITC00081', 'Syaeful Febriansyah', 'syaefulfebriansyah16@gmail.com', 'fcecb22ec6c20ad6ec22de5d53dc74a0', 'inpul.jpg', '6', '4', '0', '1', ' Jl.Cilenggang 2 Rt.007 Rw.003 No.28 Kel.Cilenggang Kec.Serpong Kota Tangerang Selatan', '089674903717', '1997-02-17', 'Laki - Laki', 'photoshop,corel', 'Karyawan Swasta'),
('ITC00082', 'Brilliant Aditama', 'aditama.c200@gmail.com', '9cd3894448a331c401b35d0d57e089b8', 'adit.jpg', '6', '7', '1', '1', 'Perum Puri Husada Agung blok C2 No 03,Gunungsindur kab bogor', '082110948834', '1996-10-26', 'Laki - Laki', 'Tidak diketahui', 'NOTHING'),
('ITC00083', 'Ricky johanes', 'rickyjohanescbs@gmail.com', '94c6a04ec94319c27a1dd21bd5eadc62', 'Hydrangeas5.jpg', '6', '6', '1', '1', 'Kp. Dukuh Pete Rt 013 rw 003 Legok - Tangerang', '089693613246', '1993-10-03', 'Laki - Laki', 'sedang mencari jati diri', 'Mahasiswa'),
('ITC00084', 'Muzaini', 'zainasko@gmail.com', '249bcf917da8244a9b9f5ebc29b4a6cc', 'Hydrangeas7.jpg', '6', '6', '0', '0', 'BSD Serpong', '089655200876', '0000-00-00', 'Laki - Laki', 'Teknik dan jaringan', 'wirausaha'),
('ITC00085', 'Ujang Saputra', 'ujesaput99@gmail.com', '8da079a0ee7145dd65ac678768f18429', 'Hydrangeas8.jpg', '6', '6', '0', '0', 'jl. bhakti ibu, babakan , setu', '083893094819', '1993-09-09', 'Laki - Laki', 'null', 'wiraswasta'),
('ITC00086', 'Danil Albar', 'danilalbar.ab@gmail.com', '704cf1569b16fd77bd95aa28b4740475', 'Hydrangeas9.jpg', '6', '6', '0', '0', 'Jl. Bagbagan Palabuhan Ratu, Sukabumi', '085718307005', '1992-10-26', 'Laki - Laki', 'null', 'wiraswasta'),
('ITC00091', 'Muhammad Andri', 'andrim769@gmail.com', 'a690632163ba789f27832efe3383b943', 'andri.jpg', '7', '5', '1', '1', 'Jl. Manunggal XIX Desa Babakan Kec. Tenjo-BOGOR', '081617796924', '1994-10-15', 'Laki - Laki', 'Harvesmon', 'Karyawan Swasta'),
('ITC00092', 'resi tri utama', 'resitriutama@gmail.com', '9985e73bd2b2fffb88a0a0c945a0533d', 'resi.jpg', '7', '5', '1', '1', 'serang banten', '083872227359', '1995-12-25', 'Laki - Laki', 'penghayal bebas', 'Security'),
('ITC00093', 'amri suhendi', 'amrisuhendi05@gmail.com', '8de5596a62dc624d32bb821f9ea7fd99', 'amri.jpg', '7', '5', '1', '1', 'Jl.kemuning 1 rt/03 rw 05 kel. Pamulang barat kec.pamulang  .tangerang selatan', '081315924088', '1996-10-05', 'Laki - Laki', 'NOTHING', 'wiraswasta'),
('ITC00094', 'febri hanafi', 'febrianhanafi100@gmail.com', 'af31df7f04602f100e95f3e1410cd335', 'febri.jpg', '7', '6', '0', '1', 'Jl.cinangka serua rt. 03 rw. 04 serua, bojong sari', '082110465818', '1995-10-02', 'Laki - Laki', 'merangkai kata', 'NOTHING'),
('ITC00095', 'Septi Gunawan', 'septigunawan@gmail.com', '0ceff416e2022b79f880162e9dd30567', 'Hydrangeas4.jpg', '7', '5', '1', '1', 'Jl. Raya Puspitek no. 34 kel. babakan , kec. setu ', '085840407090', '1996-09-06', 'Laki - Laki', 'sedang dalam proses', 'Mahasiswa'),
('ITC00096', 'Aldy Maulana', 'maldi0816@gmail.com', 'c3588747f90051bc2b47afc0f57f42c7', 'Hydrangeas6.jpg', '7', '6', '0', '1', 'Kp. Kunciran Induk', '085710212905', '1994-03-19', 'Laki - Laki', 'masih bingung', 'LLPG'),
('ITC00097', 'Windi Jayanti', 'windijayanti95@gmail.com', 'd9cd05f459869105d6563b5d74989d4c', 'Koala.jpg', '7', '6', '1', '1', 'Desa Jebed Selatan  Rt.01 Rw.08 Dusun Kuwungan, Taman-Pemalang', '087788315180', '1996-12-29', 'Perempuan', 'Koleksi Mantan', 'Mencari sesuap nasi'),
('ITC007', 'TEDI SUSANTO', 'tedijammz@gmail.com', 'de8e10693923a146b5702dc94ae665ad', 'http://localhost/itcyber/assets/backend/image/anggota/Hydrangeas4.jpg', '7', '4', '1', '1', 'depok', '089603786637', '2017-11-05', 'laki - laki', 'php', 'programer');

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `angkatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `angkatan`) VALUES
(1, 'Satu'),
(4, 'Dua'),
(5, 'TUJUH'),
(6, 'Delapan'),
(7, 'Sembilan');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `id_tag` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `status_artikel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `gambar`, `author`, `judul`, `id_tag`, `tanggal`, `isi`, `status_artikel`) VALUES
(8, 'a1.jpg', 'ITC00071', '1. Membuat file database product.sql', '1', '2017-09-06', '<p>&lt;?php&nbsp; if ( ! defined(''BASEPATH'')) exit(''No direct script access allowed'');<br />/**<br />* <br />*/<br />class Artikel_model extends CI_Model<br />{<br />&nbsp;&nbsp; &nbsp;var $tabel = "artikel";<br /><br />&nbsp;&nbsp; &nbsp;function get_all(){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''tag'',''tag.id_tag = artikel.id_tag'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;order_by(''tanggal'',''ASC'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function get_by_tag($id){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;where(''id_tag'',$id);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function insert($data){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;insert($this-&gt;tabel,$data);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function get_Byid($id){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;where(''id_artikel'',$id);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''tag'',''tag.id_tag = artikel.id_tag'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''anggota'',''anggota.id_anggota = artikel.author'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function update($condition,$data){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;where($condition);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;update($this-&gt;tabel,$data);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function delete($id){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;where($id);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;delete($this-&gt;tabel);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function get_six_artikel(){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''anggota'',''anggota.id_anggota = artikel.author'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''tag'',''tag.id_tag = artikel.id_tag'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;order_by(''tanggal'',''ASC'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;limit(8);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function searching($cari){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;like(''judul'',$cari);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''anggota'',''anggota.id_anggota = artikel.author'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''tag'',''tag.id_tag = artikel.id_tag'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;order_by(''tanggal'',''ASC'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function jumlah_artikel(){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel)-&gt;num_rows();<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function jumlah_artikelBytag($id){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;where(''id_tag'',$id);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel)-&gt;num_rows();<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function front_all($num,$offset){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;join(''tag'',''tag.id_tag = artikel.id_tag'',''inner'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;order_by(''tanggal'',''ASC'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel,$num,$offset);<br />&nbsp;&nbsp; &nbsp;}<br />&nbsp;&nbsp; &nbsp;function artikelBytag($num,$offset,$id){<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;where(''id_tag'',$id);<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$this-&gt;db-&gt;order_by(''tanggal'',''ASC'');<br />&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;return $this-&gt;db-&gt;get($this-&gt;tabel,$num,$offset);<br />&nbsp;&nbsp; &nbsp;}<br />}</p>', '1'),
(9, 'Chrysanthemum.jpg', 'ITC007', 'testing', '1', '2017-11-05', '<p>lorenm</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id_coment` int(11) NOT NULL,
  `id_artikel` varchar(20) NOT NULL,
  `user_coment` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status_coment` varchar(50) DEFAULT NULL,
  `coment` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id_coment`, `id_artikel`, `user_coment`, `tanggal`, `status_coment`, `coment`) VALUES
(10, '8', 'wr', '2017-09-06', '0', 'wew'),
(11, '8', 'sds', '2017-09-07', '0', 'sdsd'),
(12, '8', 'Aldi Rahman', '2017-09-07', '0', 'hello '),
(13, '8', 'Aldi Rahman', '2017-09-07', '0', 'iya hello'),
(14, '8', 'rewrw', '2017-10-30', '0', 'wrrwr'),
(15, '9', 'F', '2017-11-05', '1', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `id_jenis` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `deskripsi` varchar(4000) NOT NULL,
  `author` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `time` time NOT NULL,
  `j_klik` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `file`, `link`, `id_kategori`, `id_jenis`, `image`, `deskripsi`, `author`, `tanggal`, `time`, `j_klik`) VALUES
(2, 'Dompet Ku Apps', 'https://lh3.googleusercontent.com/LI7CJP8S4aW-RUoMdhxdfUn7n8aAzrQ_1g31YvMfnLruN0ZeaW17y2qd8hsoq1jYJSD8iRD6qqInWuE=w1366-h613', '2', '2', 'https://1yjmqg26uh9k15zq0o1pderc-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/android-image.png', '<p>&lt;!DOCTYPE html&gt;<br />&lt;!--[if lt IE 7]&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;html class="no-js lt-ie9 lt-ie8 lt-ie7"&gt; &lt;![endif]--&gt;<br />&lt;!--[if IE 7]&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;html class="no-js lt-ie9 lt-ie8"&gt; &lt;![endif]--&gt;<br />&lt;!--[if IE 8]&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;html class="no-js lt-ie9"&gt; &lt;![endif]--&gt;<br />&lt;!--[if gt IE 8]&gt;&lt;!--&gt;<br />&lt;html class="no-js"&gt;<br />&lt;!--&lt;![endif]--&gt;<br /><br /><br />&lt;!-- Mirrored from www.bdinfosys.com/demo/materialx/single.html by HTTrack Website Copier/3.x [XR&amp;CO''2014], Fri, 11 Aug 2017 15:34:48 GMT --&gt;<br />&lt;head&gt;<br />&nbsp; &lt;meta charset="utf-8"&gt;<br />&nbsp; &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;<br />&nbsp;&lt;title&gt;It Cyber Community&lt;/title&gt;<br />&nbsp; &lt;meta name="description" content="Information and Technology of Cyber Universitas Pamulang Di Singkat IT Cyber Unpam adalah sebuah komunitas yang memiliki konsep kebersamaan serta rasa kekeluargaan dalam membangun dan mengembangkan bersama ilmu yang berkaitan dengan Teknologi komputer.<br /><br />komunitas IT Cyber tidak akan pernah membatasi member ataupun anggota yang ingin bergabung dengan rasa ingin bersama-sama belajar serta mengembangkan potensi pada perkembangan dunia teknologi terkini.<br /><br />Komunitas IT-cyber adalah satu satu komunitas IT yang berada di daerah Tangerang-Banten, dan Berdiri di Kampus Tercinta Universitas Pamulang."&gt;<br />&nbsp; &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"&gt;<br /><br />&nbsp; &lt;!-- Favicon--&gt;<br />&nbsp; &lt;link rel="shortcut icon" href="images/favicon.png" &gt;<br />&nbsp; <br />&nbsp; &lt;!-- Stylesheets--&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/css/normalize.css"&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/font/font-awesome/css/font-awesome.min.css"&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/libs/materialize/css/materialize.min.css" media="screen,projection" /&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/css/bootstrap.css" media="screen,projection" /&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/libs/owl-carousel/owl.carousel.css" media="screen,projection" /&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/libs/owl-carousel/owl.transitions.css" media="screen,projection" /&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/libs/owl-carousel/owl.theme.css" media="screen,projection" /&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/css/main.css"&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/css/responsive.css"&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/css/blog.css"&gt;<br />&nbsp; <br />&nbsp; &lt;!-- Choose your default colors --&gt;<br />&nbsp; &lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;assets/front/css/colors/color1.css"&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color2.css"&gt; --&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color3.css"&gt; --&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color4.css"&gt; --&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color5.css"&gt; --&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color6.css"&gt; --&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color7.css"&gt; --&gt;<br />&nbsp; &lt;!-- &lt;link rel="stylesheet" href="assets/css/colors/color8.css"&gt; --&', 'ITC00071', '2017-09-03', '21:37:15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_album` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `link`, `caption`, `tanggal`, `id_album`, `author`) VALUES
(7, 'http://3.bp.blogspot.com/-ECiZD5vCKJY/UMAW2NTjYGI/AAAAAAAABGI/wWECp8EcOv0/s1600/00_706337_3632233459261_447968204_o.jpg', 'Wisudawan', '2017-09-02', '2', 'ITC00071'),
(8, 'http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/12940054_124736937924724_2112954195_n.jpg?ig_cache_key=MTIyMDMzNzY0ODUyMzMxOTE3MQ%3D%3D.2', 'Pendidikan Angkatan 8', '2017-09-02', '3', 'ITC00071'),
(9, 'https://scontent-sea1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15338276_1614505211896694_37038440751038464_n.jpg?ig_cache_key=MTQwMjk3MzkwNzQyMjAwNzgyNA%3D%3D.2', 'Sharing ', '2017-09-02', '3', 'ITC00071'),
(10, 'https://image.ibb.co/k3JK8a/IMG_20160604_WA0013.jpg', 'IT explore', '2017-09-07', '4', 'ITC00071'),
(11, 'https://image.ibb.co/corT1v/IMG_20160327_WA0022.jpg', 'Muswil Banten IV', '2017-09-07', '4', 'ITC00071'),
(12, 'https://image.ibb.co/corT1v/IMG_20160327_WA0022.jpg', 'PERMIKOMNAS IV & VI', '2017-09-07', '4', 'ITC00071'),
(13, 'https://image.ibb.co/gjtVEF/IMG_20160326_WA0036.jpg', 'MUSWIL WIL IV', '2017-09-07', '4', 'ITC00071'),
(14, 'https://image.ibb.co/gZ3moa/IMG_20160326_WA0015.jpg', 'WIL IV', '2017-09-07', '4', 'ITC00071'),
(15, 'https://image.ibb.co/kUcqEF/IMG_20160326_WA0014.jpg', 'SANTAI SEJENAK', '2017-09-07', '4', 'ITC00071'),
(16, 'https://image.ibb.co/g36HuF/IMG_20160326_WA0005.jpg', 'IV', '2017-09-07', '4', 'ITC00071'),
(17, 'https://image.ibb.co/fpxCTa/IMG_20151212_WA0010.jpg', 'kakak dan adik', '2017-09-07', '4', 'ITC00071'),
(18, 'https://image.ibb.co/cPy81v/IMG_20160326_WA0008.jpg', 'say chesseeeee', '2017-09-07', '4', 'ITC00071'),
(19, 'https://image.ibb.co/fnFMMv/C360_2015_10_24_18_05_55_313.jpg', 'OKE', '2017-09-07', '4', 'ITC00071'),
(20, 'https://image.ibb.co/d4YK8a/C360_2015_10_24_17_52_20_400.jpg', 'Saudara', '2017-09-07', '4', 'ITC00071'),
(21, 'https://image.ibb.co/nJx1Mv/C360_2015_10_24_18_07_04_614.jpg', 'Wakil & Menkominfo', '2017-09-07', '4', 'ITC00071'),
(22, 'https://image.ibb.co/jrm0EF/C360_2015_10_24_12_27_18_436.jpg', 'SEMINAR NASIONAL', '2017-09-07', '4', 'ITC00071'),
(23, 'https://image.ibb.co/iXmBMv/20160326_135851.jpg', 'Bapak Wakil Dan Ibu Sekertaris', '2017-09-07', '4', 'ITC00071'),
(24, 'https://image.ibb.co/bs8Qgv/20160604_221601.jpg', 'Dadang & Abet', '2017-09-07', '4', 'ITC00071'),
(25, 'https://image.ibb.co/jywd1v/20160325_195222.jpg', 'MUSWIL 1 Permikomnas Banten', '2017-09-07', '4', 'ITC00071'),
(26, 'https://image.ibb.co/efhXuF/IMG_20160618_WA0028.jpg', ':D', '2017-09-07', '4', 'ITC00071'),
(27, 'https://image.ibb.co/bVdQgv/20160604_220519.jpg', 'UJE', '2017-09-07', '4', 'ITC00071'),
(28, 'https://image.ibb.co/ib4WMv/20160604_220509.jpg', 'Dadang', '2017-09-07', '4', 'ITC00071'),
(29, 'https://image.ibb.co/nnmiZF/20160604_220432.jpg', 'ZAI', '2017-09-07', '4', 'ITC00071'),
(30, 'https://image.ibb.co/kE9CuF/P_20170224_221035.jpg', 'Persiapan Seminar Nasiona', '2017-09-07', '4', 'ITC00071'),
(31, 'https://image.ibb.co/mAhXuF/P_20170224_221025.jpg', 'ITCYBER ,HIMTI UMT ,HIMTIF Raharja', '2017-09-07', '4', ''),
(32, 'https://image.ibb.co/bFMT1v/20160604_215155.jpg', 'Kebersamaan', '2017-09-07', '4', 'ITC00071'),
(33, 'https://image.ibb.co/bLDfEF/20160604_215032.jpg', 'Makan Makan !', '2017-09-07', '4', 'ITC00071');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `size` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'KETUA'),
(2, 'SEKRETARIS'),
(3, 'Wakil Ketua'),
(4, 'Div IT'),
(5, 'Humas'),
(6, 'Anggota'),
(7, 'Logistik');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(2, 'Aplikasi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(2, 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `aktifitas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `time` time NOT NULL,
  `ip` varchar(50) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `author`, `aktifitas`, `tanggal`, `time`, `ip`, `browser`, `os`) VALUES
(1, 'ITC00071', 'Logout', '2017-09-07', '00:00:00', '127.0.0.1', 'Firefox', 'Windows 7'),
(2, 'ITC00071', 'Login', '2017-09-07', '19:44:25', '127.0.0.1', 'Firefox', 'Windows 7'),
(3, 'ITC00071', 'Login', '2017-09-07', '19:55:22', '127.0.0.1', 'Firefox', 'Windows 7'),
(4, 'ITC00071', 'Login', '2017-09-08', '14:43:45', '127.0.0.1', 'Firefox', 'Windows 7'),
(5, 'ITC00071', 'Login', '2017-09-08', '20:04:42', '127.0.0.1', 'Firefox', 'Windows 7'),
(6, 'ITC00071', 'Logout', '2017-09-08', '20:26:32', '127.0.0.1', 'Firefox', 'Windows 7'),
(7, 'ITC00071', 'Login', '2017-09-08', '20:29:10', '127.0.0.1', 'Firefox', 'Windows 7'),
(8, 'ITC00071', 'Logout', '2017-09-08', '20:32:33', '127.0.0.1', 'Firefox', 'Windows 7'),
(9, 'ITC00071', 'Login', '2017-09-09', '02:28:52', '127.0.0.1', 'Firefox', 'Windows 7'),
(10, 'ITC00071', 'Login', '2017-09-09', '07:29:43', '127.0.0.1', 'Firefox', 'Windows 7'),
(11, 'ITC00071', 'Login', '2017-10-30', '15:11:10', '127.0.0.1', 'Firefox', 'Windows 7'),
(12, 'ITC00071', 'Logout', '2017-10-30', '15:17:59', '127.0.0.1', 'Firefox', 'Windows 7'),
(13, 'ITC00071', 'Login', '2017-11-02', '16:04:34', '127.0.0.1', 'Firefox', 'Windows 7'),
(14, 'ITC007', 'Login', '2017-11-05', '12:41:43', '::1', 'Chrome', 'Windows 7'),
(15, 'ITC00071', 'Login', '2017-11-14', '17:28:19', '127.0.0.1', 'Firefox', 'Windows 7');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id_meta` int(11) NOT NULL,
  `id_artikel` varchar(20) NOT NULL,
  `meta_key` varchar(400) NOT NULL,
  `meta_value` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `caption` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `link`, `caption`, `tanggal`, `jenis`) VALUES
(1, 'http://sector-net.id/img/logo.png', 'PT. TRIYASA CITRA SEJAHTERA (tcsindonesia.co.id)', '2017-09-05', 'Webiste '),
(2, 'http://sector-net.id/img/logo1.png', 'TB CIBENTANG JAYA', '2017-09-05', 'Application Website'),
(6, 'https://image.ibb.co/gcMPOa/backend.png', 'PT. Elang Java Mandiri', '2017-09-05', 'Application Website'),
(7, 'https://image.ibb.co/eWQyGv/home.png', 'PT. WILFINA MULIA TAMA (wilfina.co.id)', '2017-09-05', 'Webiste ');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hit` varchar(20) NOT NULL,
  `os` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `id_artikel` int(20) NOT NULL,
  `time` time NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `tanggal`, `hit`, `os`, `browser`, `id_artikel`, `time`, `ip`) VALUES
(1293, '2017-11-10', '17', 'Windows 7', 'Firefox', 8, '00:01:37', '127.0.0.1'),
(1294, '2017-11-05', '3', 'Windows 7', 'Chrome', 9, '18:46:04', '::1'),
(1295, '2017-11-09', '4', 'Windows 7', 'Firefox', 9, '22:33:17', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `tag` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `tag`) VALUES
(1, 'WEBSITE'),
(2, 'test'),
(3, 'test21'),
(4, 'tet'),
(5, 'ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id_meta`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id_meta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1296;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
