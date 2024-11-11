-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 07.25
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
-- Database: `test_kartu_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `nip` int(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id`, `nip`, `nama`, `jabatan`) VALUES
(3, 1001001, 'Sugiharti Soumifitri, M.Pd', 'Kepala Sekolah'),
(4, 1001002, 'Mudzakir, S.Pd.I.', 'Guru'),
(5, 1001003, 'Dedi Supriadi, M.Pd.', 'Guru'),
(6, 1001004, 'Suci Afrianti Amini, S.Pd.', 'WKS Kesiswaan'),
(7, 1001005, 'Lilis Setyaningsih, S.E', 'Kepala Jurusan AKL'),
(8, 1001006, 'Karina Dwi Garini, S.Ds.', 'Kepala Jurusan DKV'),
(9, 1001007, 'Siti Halimah, S.H.', 'PJ Prunus DigiApps'),
(10, 1001008, 'Miftahunni\'Mah, S.Pd., S.Ag.', 'BK'),
(11, 1001009, 'Trianto Panji Purnomo, S.Pd., M.M.', 'Guru'),
(12, 1001010, 'Nurhalidah, S.Pd, M.I.kom', 'WKS Kurikulum'),
(13, 1001011, 'Danang Dhia Wisnugroho, S.Or', 'Guru'),
(14, 1001012, 'Aditya Ratu Hanifa, S.Pd', 'Guru'),
(15, 1001013, 'Cici Agustini, S.Pd.', 'Guru'),
(16, 1001014, 'Santi Rostianti, S.Sn.', 'Guru'),
(17, 1001015, 'Putri Jayanti, S.Pd.', 'Guru'),
(18, 1001016, 'Riza Aulia Ramadani, M.M.', 'Kepala Jurusan MP'),
(19, 1001017, 'Nuny Articasary, S.Pd.', 'Guru'),
(20, 1001018, 'Fadlia Hayati, S.E.', 'Guru'),
(21, 1001019, 'Jelita Widaningsih, S.Kom.', 'Kepala Jurusan AN'),
(22, 1001020, 'Muhammad Maulana, S.Kom', 'Kepala Jurusan TKJ'),
(23, 1001021, 'M. Ade Maulana, S.Kom', 'Kepala Jurusan RPL'),
(24, 1001022, 'Faris Nasution, S.E', 'Kepala Jurusan BP'),
(25, 1001023, 'Agus Ardiyanto, S.Pd', 'Guru'),
(26, 1001024, 'Dedi Irawan, S.S.I.', 'PJ BKK'),
(27, 1001025, 'Rita Friana, S.E.', 'Guru'),
(28, 1001026, 'Andreas Yulianto, S.Ds', 'Guru'),
(29, 1001027, 'Ovalda Rahmawati, S.Pd.', 'Guru'),
(30, 1001028, 'Yanuarisnadewi, S.Pd.', 'Guru'),
(31, 1001029, 'Fitri Wulandari, S.Pd.', 'Guru'),
(32, 1001030, 'Anggraini Dwi Pratiwi, S.Pd.', 'Guru'),
(33, 1001031, 'Duta Prameswari S.Sn.', 'Guru'),
(34, 1001032, 'Muhammad Najmu Fachruddin, S.Kom.', 'Guru'),
(35, 1001033, 'Trias Anugrah Yulianto, S.Ikom', 'Guru'),
(36, 1001034, 'Andy Erwin Rismanto, A.Md.', 'Kepala TU'),
(37, 1001035, 'Muhammad Fauzi Hizburra\'uf', 'Staff TU'),
(38, 1001036, 'Klaudia Epifani Putri, S.M.', 'Staff TU'),
(39, 1001037, 'Supardi', 'Pramubakti'),
(40, 1001038, 'Suhendar', 'Pramubakti'),
(41, 1001039, 'Ali Alfarizi', 'Penjaga'),
(42, 1001040, 'Yayang Farizkiansyah', 'Penjaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mapel_ujian`
--

CREATE TABLE `data_mapel_ujian` (
  `id` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(150) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_mapel_ujian`
--

INSERT INTO `data_mapel_ujian` (`id`, `kode_mapel`, `nama_mapel`, `tanggal`, `jam_mulai`, `jam_selesai`, `kelas`) VALUES
(3, 'KD36111213', 'Bahasa Indonesia', '2024-10-30', '07:00:00', '08:30:00', 'X Semua Jurusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengawas`
--

CREATE TABLE `data_pengawas` (
  `id` int(11) NOT NULL,
  `kode_pengawas` varchar(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `ruangan_hari_pertama` varchar(50) NOT NULL,
  `tanggal_hari_pertama` varchar(50) NOT NULL,
  `ruangan_hari_kedua` varchar(50) NOT NULL,
  `tanggal_hari_kedua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pengawas`
--

INSERT INTO `data_pengawas` (`id`, `kode_pengawas`, `nama`, `ruangan_hari_pertama`, `tanggal_hari_pertama`, `ruangan_hari_kedua`, `tanggal_hari_kedua`) VALUES
(17, 'KD441616', 'Mudzakir, S.Pd.I.', '', '', '2', '2024-11-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peserta`
--

CREATE TABLE `data_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `ruangan` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `legitimasi_projek` varchar(50) NOT NULL,
  `legitimasi_teori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_peserta`
--

INSERT INTO `data_peserta` (`id_peserta`, `nis`, `nama`, `kelas`, `ruangan`, `foto`, `legitimasi_projek`, `legitimasi_teori`) VALUES
(1001, 10240681, 'Adelia Saharani', 'X AK', 1, 'avatar.jpg', 'yes', 'yes'),
(1002, 10240682, 'Agil Muhammad Fahri', 'X AK', 2, 'avatar.jpg', 'no', 'no'),
(1003, 10240683, 'Agustian Putra Ramadhan', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1004, 10240685, 'Aura Amelia Safitri', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1005, 10240686, 'Monica Sekar Oktafiani', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1006, 10240688, 'Muhammad Rifat Nazih', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1007, 10240756, 'Nanda Azahro', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1008, 10240687, 'Putri Aura Ridwansyah', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1009, 10240755, 'Talitha Dianti Aristawidya', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1010, 10240760, 'VEREN SYEHRATU AL\'QIRAN', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1011, 10240689, 'Wulan Darianti', 'X AK', 0, 'avatar.jpg', 'no', 'no'),
(1012, 10240691, 'Almira Cinta Salsabilla', 'X AN', 0, 'avatar.jpg', 'no', 'no'),
(1013, 10240754, 'Kezia Ohanna Yanique Sirait', 'X AN', 0, 'avatar.jpg', 'no', 'no'),
(1014, 10240757, 'Tasya Indira Soerachman', 'X AN', 0, 'avatar.jpg', 'no', 'no'),
(1015, 10240692, 'Dinda Tri Puspita', 'X BP', 0, 'avatar.jpg', 'no', 'no'),
(1016, 10240730, 'Doni Darmawan', 'X BP', 0, 'avatar.jpg', 'no', 'no'),
(1017, 10240752, 'Ferza Surfa Fauziah', 'X BP', 0, 'avatar.jpg', 'no', 'no'),
(1018, 10240753, 'M. Abdul Zikri', 'X BP', 0, 'avatar.jpg', 'no', 'no'),
(1019, 10240694, 'Sahira', 'X BP', 0, 'avatar.jpg', 'no', 'no'),
(1020, 10240693, 'Thalita Anggraeni Lesmana', 'X BP', 0, 'avatar.jpg', 'no', 'no'),
(1021, 10240696, 'Abedzaar Ghiffari', 'X DKV', 0, 'avatar.jpg', 'no', 'no'),
(1022, 10240695, 'Annisa Imardia Sunardi', 'X DKV', 0, 'avatar.jpg', 'no', 'no'),
(1023, 10240750, 'Axcel Ezaldo Alim', 'X DKV', 0, 'avatar.jpg', 'no', 'no'),
(1024, 10240698, 'Azahra Putri Hermawan', 'X DKV', 0, 'avatar.jpg', 'no', 'no'),
(1025, 10240758, 'Muhammad Abyan Hutama', 'X DKV', 0, 'avatar.jpg', 'no', 'no'),
(1026, 10240697, 'Syabian Sakina Putri Purwanto', 'X DKV', 0, 'avatar.jpg', 'no', 'no'),
(1027, 10240705, 'AURA ANDRIYANI', 'X MP', 2, 'avatar.jpg', 'Yes', 'Yes'),
(1028, 10240701, 'Aysah Seftiani', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1029, 10240713, 'Azizah Widya Mulyani', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1030, 10240699, 'CINTA LAURA', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1031, 10240702, 'Eka Retna Utami', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1032, 10240710, 'Firza Dawamah Pane', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1033, 10240717, 'Kayla Bellvania Putri', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1034, 10240703, 'Kirana Eliza Putri', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1035, 10240708, 'Kiyanissa Maulidea Sentosa', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1036, 10240709, 'Meystia Carisma Putri', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1037, 10240700, 'Nadia Fauziyyah', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1038, 10240704, 'Nadia Pasha Azuar', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1039, 10240707, 'Nayla Al Fitriani', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1040, 10240715, 'Ratu Aprilinda Melani', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1041, 10240765, 'Ribka Agnes', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1042, 10240714, 'Silpa Nur Lutfiani Camaru', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1043, 10240712, 'Siti Rahmawati', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1044, 10240706, 'Syafitri Maharani', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1045, 10240711, 'Verissa Zalyanti', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1046, 10240716, 'Yasmin khoiriyyah', 'X MP', 0, 'avatar.jpg', 'no', 'no'),
(1047, 10240721, 'Ahmad Fauzan Yakfi Khalid', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1048, 10240718, 'Aziz Purana Zahari', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1049, 10240724, 'Ernesto Bung Marhaen Putra', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1050, 10240722, 'Farrel Gustiano', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1051, 10240745, 'Khaerul Fikran Al Fachrezi', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1052, 10240728, 'Muhammad Davin Reynaldi', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1053, 10240729, 'Naufal Bagas Andika', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1054, 10240720, 'Rafi Athallah Wibowo', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1055, 10240727, 'Rakha Zuhdi Naufal', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1056, 10240725, 'Restu Putra Anggara', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1057, 10240761, 'Robby Jansen', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1058, 10240751, 'TSABITAH NURUL\'ATHIFAH', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1059, 10240726, 'Zhafran Syarif', 'X PPLG', 0, 'avatar.jpg', 'no', 'no'),
(1060, 10240749, 'Adil Maulana Utama', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1061, 10240732, 'Akbar Rizki Nugraha', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1062, 10240764, 'Arezky Putra Satriyo', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1063, 10240740, 'Arrijal Dwipa Kencana', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1064, 10240735, 'Blasius Sergio Obama Silitonga', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1065, 10240734, 'Chandra Dwi Maulana', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1066, 10240746, 'Dandi Wardana', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1067, 10240763, 'Danil Ardiansyah', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1068, 10240748, 'FARREL ERWAN SYAHPUTRA', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1069, 10240736, 'Johnes Gabriel', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1070, 10240742, 'MUHAMAD DERMAWAN AL BUCHORI', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1071, 10240738, 'Muhammad Ezzar Radittyo', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1072, 10240690, 'Muhammad Firman', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1073, 10240723, 'Muhammad Lutfi Pahrezi', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1074, 10240744, 'Muhammad Rasyid Amirullah', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1075, 10240741, 'Muhammad Safa Dzariat Tsaqif', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1076, 10240733, 'Nathaniela Audrey Carletta', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1077, 10240737, 'Rafan Fatih Zulafni', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1078, 10240747, 'Restu Arga Dwi Prasetya', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1079, 10240739, 'Rifat Satrio Haryanto', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1080, 10240759, 'Rizky Allif Putra Aditya', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1081, 10240743, 'Wahyu Nico Pratama', 'X TJKT', 0, 'avatar.jpg', 'no', 'no'),
(1082, 10230528, 'DEZTA RAFFENIA PUTRI', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1083, 10230529, 'FAKHRI DZAKWAN PUTRA PRIYANTO', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1084, 10230530, 'KEZIA FEBRIANINGSIH SIMANJUNTAK', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1085, 10230531, 'LEONI DESILA BENU', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1086, 10230532, 'LYNDA APRILIA', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1087, 10230533, 'MELYANA GABRELIA', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1088, 10230534, 'QUIN HAYYU SYAHFITRI', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1089, 10230535, 'TIRTA JAYA KUSUMA', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1090, 10230536, 'VALENCYA', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1091, 10230679, 'YASINTA RIZKINE MERFID HIMAWAN', 'XI AKL', 0, 'avatar.jpg', 'no', 'no'),
(1092, 10230538, 'ABDUL ROHIM SIREGAR', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1093, 10230539, 'ADIKA ASYRAF GIYARTO', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1094, 10230540, 'ADITYA CHRIS TAN', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1095, 10230541, 'AKHMAD FAKHRI', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1096, 10230542, 'HAIKAL ARIEF', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1097, 10230543, 'HANIFA RABBANI KHAYAT', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1098, 10230544, 'KEISHA RIANTI', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1099, 10230545, 'LINTANG DAMAR PUTRA', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1100, 10230546, 'RIZKIA FARANINDYA', 'XI AN', 0, 'avatar.jpg', 'no', 'no'),
(1101, 10230552, 'ALZAHRA DWI FEBRIANA', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1102, 10230553, 'APRODITE MEGNA JOANETA', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1103, 10230670, 'AULIA SYIFA NUR AZIZAH', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1104, 10230683, 'BIMO AURELIO ARINANTO', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1105, 10230556, 'DESI NATALIE PUTRI HIRANI', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1106, 10230557, 'FABIAN RADITIA ALVAREL', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1107, 10230559, 'HAICHAL DEROS MAHARDHIKA', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1108, 10230560, 'JUNEETA RIZKI AGUSTIEN', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1109, 10230561, 'KARIN ANISA', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1110, 10230562, 'LUIGI NAYAKA ESHAN', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1111, 10230563, 'LUTHFIANA TAQIYA ADHA', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1112, 10230564, 'MAHESA GIBRAN LINGGANI HARTONO', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1113, 10230565, 'MUHAMMAD NABIL NUR ARRANSYAH', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1114, 10230567, 'REVAN RAFAEL ALDIANSYAH', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1115, 10230568, 'SALSABILA KAYLANA CALLYSTA', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1116, 10230569, 'WULAN MAYANG SARI', 'XI DKV', 0, 'avatar.jpg', 'no', 'no'),
(1117, 10230570, 'ADINDA RIZKI TRIYANTI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1118, 10230571, 'ANIS PUSPITA NINGRUM', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1119, 10230572, 'AURA SALSABILA FATIN', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1120, 10230573, 'BILQISTY AMIRA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1121, 10230574, 'BUNGA AZAHRA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1122, 10230575, 'CHAERUNNISA AULIA RIVANI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1123, 10230576, 'DINI EKA PUTRI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1124, 10230577, 'DISTI MEISA MUJAHIDAH', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1125, 10230578, 'FITRI WAHYUNI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1126, 10230579, 'GALUH FITRIANI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1127, 10230580, 'HANUM ALIFFIYA ZYAHRANI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1128, 10230581, 'INTAN FRAZARAH PUTRI FIDIANTO', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1129, 10230582, 'JESIKA AGNESIA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1130, 10230583, 'MALIKA ERSHA MATHEA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1131, 10230584, 'MARSHA AURA KHINANTI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1132, 10230585, 'MAYA SARI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1133, 10230586, 'MUSTIKA AMANDA PURBA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1134, 10230587, 'NAZUA DWI AZIZAH', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1135, 10230588, 'NOVITA PUTRI RAMADHANI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1136, 10230589, 'PUTRI ANGGI AURELIA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1137, 10230590, 'REVALIANA RAHMAYANTI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1138, 10230591, 'SANDRA KIRANA PERMATA HATI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1139, 10230675, 'SAZKIA MELANY PUTRI', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1140, 10230594, 'SYAILA SUCI AMELIA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1141, 10230595, 'UMMU WISILAH LUBIS', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1142, 10230596, 'ZAHRA PUSPITA', 'XI MP', 0, 'avatar.jpg', 'no', 'no'),
(1143, 10230547, 'AIESHA NERRAZURI HERMAWAN', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1144, 10230548, 'FEYZA ANNAMAIRA FATHANA', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1145, 10230685, 'HAWA NADIRHA SAKIR', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1146, 10230549, 'RAFIKHA RUSNADI', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1147, 10230682, 'RAKA GESIT WIBISANA', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1148, 10230550, 'RETNO EKA LESTARI', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1149, 10230551, 'SOBRI SOFIAN', 'XI PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1150, 10230597, 'AMANDA AZKIYAH', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1151, 10230598, 'ARZICKY ZAPRAN', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1152, 10230599, 'EARLY ATHALLAH RIZKY', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1153, 10230600, 'FAREL ARDIANSYAH', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1154, 10230601, 'FAUZANA FIKRI', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1155, 10230676, 'KHAFIYAN NURUL HAKIM', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1156, 10230602, 'LEKSA DIAN TIARA', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1157, 10230603, 'MUHAMMAD ABYAN GANI', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1158, 10230604, 'MUHAMMAD FADHLIH FABBYAN', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1159, 10230605, 'MUHAMMAD QOLBY GHIYAS WIYONO PUTRA', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1160, 10230606, 'RADITYA ALIA PRATAMA', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1161, 10230607, 'RAFAEL SHAQR AL FARRAS', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1162, 10230671, 'RAHMAT SITO PAMBUDI', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1163, 10230677, 'REIYHAN AHMAD ADRIAN', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1164, 10230608, 'SAMIANJAB KALYA DIAR', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1165, 10230637, 'SILVIA SABELA NATANEILA', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1166, 10230609, 'VINO PRADA SAKTI SAPUTRA', 'XI RPL', 0, 'avatar.jpg', 'no', 'no'),
(1167, 10230681, 'ABINAYA', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1168, 10230610, 'ACHMAD ALMARRIFY', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1169, 10240762, 'Alrifat Rahardjo', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1170, 10230611, 'AQSHA PUTRA MILAN', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1171, 10230612, 'DANIEL ARAFAH GHAISANI', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1172, 10230613, 'DARIUS', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1173, 10230615, 'EGAN RIZKY RAMADHAN', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1174, 10230616, 'END WIN NUGROHO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1175, 10230617, 'FAALIH ALAAMSYAH', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1176, 10230618, 'FACHRI ARDIANSYAH', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1177, 10230619, 'FACHRI FABIANTO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1178, 10230620, 'GHOVIN OIESTHA WAHYU WINOTO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1179, 10230621, 'GUSTIYAN WISNU STEFANUS', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1180, 10230623, 'INDRA BURHAN SUSENO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1181, 10230672, 'KRISNA SURBAKTI', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1182, 10230625, 'MAHESHA MUHAMAD AL-GANI', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1183, 10230674, 'MOLDY AULY MARWANSYAH', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1184, 10230673, 'MUCHAMAD CHORNI NOER', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1185, 10230627, 'MUHAMMAD HAFIZD AL KHADAFI', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1186, 10230628, 'NICOLAS ALVIN NDUHUNG', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1187, 10230629, 'NUR ROMADHON HAYU HARIYANTO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1188, 10230630, 'QAISHAR VALESKA PUTRA NAMBELA', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1189, 10230631, 'RACHMA AULIA RAMADHANIA', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1190, 10230632, 'RADITYA PAMUNGKAS', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1191, 10230633, 'RAFFI EKA ARDIANSYAH', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1192, 10230635, 'SASKIA NUR ELA', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1193, 10230636, 'SATRIO EDY WICAKSONO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1194, 10230638, 'WIRANTO', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1195, 10230639, 'YUDISTIRA', 'XI TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1196, 10220414, 'Delpi Puspita Daeli', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1197, 10220415, 'Dila Fariyah', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1198, 10220416, 'Dolorosa Destina', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1199, 10220417, 'Evita Dwi Hamidah', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1200, 10220418, 'Naurah Althia Dhiya Atsilah', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1201, 10220419, 'Nururrizkiyati', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1202, 10220420, 'Putri Sanjani', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1203, 10220421, 'Resyailla Anisalwa', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1204, 10220422, 'Salsabila Apriliani Santoso', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1205, 10220423, 'Savina Deviyanti', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1206, 10220424, 'Seftia Nova Ramadhan', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1207, 10220425, 'Shakila Syah', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1208, 10220426, 'Tiara Pinky Al Gofur', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1209, 10220524, 'Wulan Ariyanti', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1210, 10220521, 'Yaren Felishia', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1211, 10220427, 'Zahara Febriani', 'XII AKL', 0, 'avatar.jpg', 'no', 'no'),
(1212, 10220428, 'Aditya Ammario Monari', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1213, 10220430, 'Andre Maulana', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1214, 10220431, 'Angga Ramadhan', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1215, 10220432, 'Aulia Eka Putri', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1216, 10220435, 'Dimas Surya Akbar', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1217, 10220525, 'Enrico Putra Pasha', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1218, 10220436, 'Fikri Parwa Devanto', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1219, 10220438, 'Isya Riani Putri', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1220, 10220440, 'Muhamad Pauji Setiawan', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1221, 10220441, 'Muhammad Farhan', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1222, 10220442, 'Muhammad Rafa Syuhada', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1223, 10220443, 'Muhammad Rafi Zaidan', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1224, 10220444, 'Muhammad Ryu Abdillah', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1225, 10220445, 'Muhammad Syachnezar', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1226, 10220446, 'Nurus Salsa Biila', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1227, 10220520, 'Rihhadatul Ais', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1228, 10220448, 'Silvia Dina Amelia', 'XII AN', 0, 'avatar.jpg', 'no', 'no'),
(1229, 10220450, 'Aiko Hyuga Fakhrijal Irsyadi', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1230, 10220429, 'Ajeng Nur Rohmah', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1231, 10220451, 'Antoni Safendra', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1232, 10220452, 'Caktya Kresna Pramana Aji', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1233, 10220453, 'I Wayan Putra Jaya', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1234, 10220454, 'Marthino Joshep Heumasse', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1235, 10220439, 'Muhamad Nur Fikri', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1236, 10220455, 'Muhammad Rakha Amillyoga', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1237, 10220457, 'Surya Darma', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1238, 10220458, 'Timur Ahmad', 'XII DKV', 0, 'avatar.jpg', 'no', 'no'),
(1239, 10220522, 'Alya Zahwa Darmawan', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1240, 10220460, 'Aura Rahma', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1241, 10220461, 'Azwa Nisfatussanah', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1242, 10220519, 'Cintha Azely Putri', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1243, 10220462, 'Clarisa Novita Sari', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1244, 10220463, 'Eny Puji Rahayu', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1245, 10220464, 'Fitri Mutiara Ramadhan', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1246, 10220526, 'Ghaida Nadira Syari Bakrie', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1247, 10220465, 'Gita Dyah Triningrum', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1248, 10220466, 'Karina Destiana Dewi', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1249, 10220467, 'Kayla Ramadhani Wahyudi', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1250, 10220469, 'Lexa Javanov Pratiwi', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1251, 10220518, 'Lifiasasi Nurfitria', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1252, 10230686, 'MARSYA NOFLYANDA TAUSYIAH', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1253, 10220470, 'Moza Syafrina G', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1254, 10220471, 'Nadine Salsabila Zetira', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1255, 10220472, 'Nayla Gadis Aprizal', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1256, 10220473, 'Nayla Naffasya Putrie', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1257, 10220474, 'Nikita Kirey Triastuti', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1258, 10220475, 'Nupus Nabila Aulia', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1259, 10220476, 'Nur Ilmania', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1260, 10220477, 'Nurul Apriyani', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1261, 10220459, 'Sabrina Nuraila', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1262, 10220478, 'Shella Tri Halim', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1263, 10220479, 'Sulis Setyawati Nurcahya', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1264, 10220480, 'Yulia Safitri', 'XII MP', 0, 'avatar.jpg', 'no', 'no'),
(1265, 10220468, 'Kharisma Ramadhanti', 'XII PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1266, 10220456, 'Sania Hasy', 'XII PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1267, 10220449, 'Waffa Hamidah Mutiara Yasmin', 'XII PSPT', 0, 'avatar.jpg', 'no', 'no'),
(1268, 10220483, 'Agil Muzaki Ahmad', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1269, 10220484, 'Asrul Syahrian', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1270, 10220485, 'Fandi Christian Asyer', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1271, 10220486, 'Haddad Razib Pangestu', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1272, 10220487, 'Hasan Rizqi Abdur Rohman', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1273, 10220488, 'Ibnu Firmansyah', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1274, 10220489, 'Muhammad Fadhli Juliansyah', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1275, 10220490, 'Muhammad Fardhan Syarif', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1276, 10220491, 'Noval Riansyah Sudar', 'XII RPL', 0, 'avatar.jpg', 'no', 'no'),
(1277, 10230680, 'AGIL WAHYU PRATAMA', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1278, 10220492, 'Andhika Septian Chaidir', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1279, 10220493, 'Angger Abby Pasha', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1280, 10220494, 'Arie Surya Atmaja', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1281, 10220523, 'CHRISTIANTO RAJAGUKGUK', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1282, 10220495, 'Daffa Alifa Oktaryan', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1283, 10220496, 'Dafi Anbiyaa', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1284, 10220497, 'Dika Juliansyah', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1285, 10220498, 'Fajri Ahmad', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1286, 10220499, 'Fikri Ramadani', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1287, 10220500, 'Galang Adi Setiawan', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1288, 10220501, 'Haidar Musyafa', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1289, 10220502, 'Januar Mekhdi Rafsanjani', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1290, 10220503, 'Jeasen Saputra', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1291, 10220504, 'Jodi Habib Al Fafa', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1292, 10220510, 'M. Rafiatul Mubarok', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1293, 10220505, 'Muhammad Bawazier', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1294, 10220506, 'Muhammad Fachri', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1295, 10220507, 'Muhammad Fathir', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1296, 10220508, 'Muhammad Ikhsan Pratama', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1297, 10220509, 'Muhammad Irsyaad', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1298, 10220511, 'Muhammad Rasya Adriano', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1299, 10220512, 'Muhammad Rivaldy Ar-Rasyid', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1300, 10220513, 'Rafi Rizqullah', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1301, 10220515, 'Suta Mulyawan', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no'),
(1302, 10220516, 'Yugo Oktavianto', 'XII TKJ', 0, 'avatar.jpg', 'no', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nama`, `kelas`) VALUES
(123456789, 'Ade', 'X PPLG'),
(987654321, 'Maulana', 'XI PPLG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `nama_link` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `nama_link`, `url`) VALUES
(1, 'KELAS X', 'peserta/kelas_x'),
(2, 'KELAS XI', 'peserta/kelas_xi'),
(3, 'KELAS XII', 'peserta/kelas_xii');

-- --------------------------------------------------------

--
-- Struktur dari tabel `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `kode_ruang` int(50) NOT NULL,
  `nama_ruang` varchar(100) NOT NULL,
  `nama_pengawas` varchar(100) NOT NULL,
  `tanggal_pengawas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `session_adm`
--

CREATE TABLE `session_adm` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `session_adm`
--

INSERT INTO `session_adm` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'admin', 'admin123', 'Admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_mapel_ujian`
--
ALTER TABLE `data_mapel_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengawas`
--
ALTER TABLE `data_pengawas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `session_adm`
--
ALTER TABLE `session_adm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `data_mapel_ujian`
--
ALTER TABLE `data_mapel_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_pengawas`
--
ALTER TABLE `data_pengawas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10240766;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `session_adm`
--
ALTER TABLE `session_adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD CONSTRAINT `data_peserta_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
