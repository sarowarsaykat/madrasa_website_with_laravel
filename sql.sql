-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table madrasah.admissions: ~1 rows (approximately)
/*!40000 ALTER TABLE `admissions` DISABLE KEYS */;
INSERT INTO `admissions` (`id`, `name`, `name_bn`, `name_ar`, `mobile`, `email`, `date_of_birth`, `gender`, `blood_group`, `nationality`, `nid_no`, `birth_reg_no`, `father_name`, `father_name_bn`, `father_name_ar`, `mother_name`, `mother_name_bn`, `mother_name_ar`, `present_address_division`, `present_address_district`, `present_address_upazila`, `present_address`, `permanent_address_division`, `permanent_address_district`, `permanent_address_upazila`, `permanent_address`, `education_level`, `name_of_madrasha`, `name_of_exam_centre`, `roll_no`, `reg_no`, `passing_year`, `session`, `result`, `guardian_name`, `guardian_mobile`, `guardian_occupation`, `guardian_annual_earning`, `class_name`, `group_name`, `image`, `is_approved`, `created_at`, `updated_at`) VALUES
	(3, 'Sarowar Saykat', 'Saowar', NULL, '01750924937', 'sarowar@gmail.com', '2003-02-25', 'Male', 'B+', 'Bangladeshi', '21426416715', '2451542154624', 'Helel Mia', 'Helel Mia', NULL, 'Sanoara Begom', 'Sanoara Begom', NULL, 'Rangpur', 'Dinajpur', 'Nawabgonj', 'Khoyerguni', 'Rangpur', 'Dinajpur', 'Nawabgonj', 'Khoyerguni', 'Dakhil', 'nawabgonj alim madrasha', 'nawabgonj', '240204', '150204241', '2018', '2012', '4.00', 'Helel Mia', '01738711819', 'Farmer', '120000', 'Alim', 'Science', '1732816767.jpg', 'Pending', '2024-11-28 17:59:27', '2024-12-23 14:20:43'),
	(4, 'Imran Hossain', 'Imran Hossain', NULL, '01824644424', 'imran@gmail.com', '2004-06-08', 'Male', 'O-', 'Bangladeshi', '246415435715', '524610541244', 'Rohim Mia', 'Rohim Mia', NULL, 'Jahanara khatun', 'Jahanara khatun', NULL, 'Mymensingh', 'Chapai Nawabganj', 'Pirojpur Sadar', 'Potimara', 'Rajshahi', 'Chapai Nawabganj', 'Pirojpur Sadar', 'Potimara', 'JDC', 'potimara kamil madrasha', 'potimara', '15246', '24515641', '2019', '2019', '5.00', 'Rohim Mia', '017502461465', 'Doctor', '1230000', 'Dakhil', 'Science', '1732817090.png', 'Pending', '2024-11-28 18:04:50', '2024-11-29 04:44:21'),
	(5, 'Hasim Saharia Ayon', 'Hasim ayon', NULL, '01779057347', 'ayon@gmail.com', '2006-06-22', 'Male', 'B-', 'bangladeshi', '24642458412', '24641246712', 'Jahangir Alam', 'Jahangir Alam', NULL, 'Hasina Begom', 'Hasina Begom', NULL, 'Rangpur', 'Dinajpur', 'Nawabgonj', 'Khoyerguni', 'Rajshahi', 'Gopalganj', 'Pirojpur Sadar', 'Khoyerguni', 'Dakhil', 'nawabgonj alim madrasha', 'potimara', '524641', '125846542', '2022', '2022', '4.22', 'Jahangir Alom', '01905224631', 'farmer', '200000', 'Seven', 'Science', '1734876591.jpg', 'Active', '2024-12-22 14:09:51', '2024-12-22 14:10:22');
/*!40000 ALTER TABLE `admissions` ENABLE KEYS */;

-- Dumping data for table madrasah.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2024_11_26_141058_create_teachers_table', 1),
	(3, '2024_11_26_141137_create_staff_table', 1),
	(4, '2024_11_26_141201_create_notices_table', 1),
	(5, '2024_11_26_183309_create_staffs_table', 2),
	(6, '2024_11_26_190205_create_staff_table', 3),
	(7, '2024_11_27_061028_create_notices_table', 4),
	(8, '2024_11_27_161546_create_madrasah_admissions_table', 5),
	(9, '2024_11_27_173941_create_madrasah_admissions_table', 6),
	(10, '2024_11_27_174408_create_madrasah_admissions_table', 7),
	(11, '2024_11_28_043254_create_madrasah_admissions_table', 8),
	(12, '2024_11_28_051302_create_admissions_table', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table madrasah.notices: ~2 rows (approximately)
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(2, 'আলিম ১ম বর্ষ বার্ষিক পরীক্ষার ফলাফল ২০২৪', '2024-11-27 09:11:06', '2024-11-27 09:11:06'),
	(3, '২০২৪ সালে ৮ম শ্রেণিতে অধ্যয়ণরত শিক্ষার্থীদের অনলাইন রেজিস্ট্রেশন', '2024-11-27 09:21:11', '2024-11-27 09:21:11');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;

-- Dumping data for table madrasah.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table madrasah.staff: ~1 rows (approximately)
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` (`id`, `name`, `post`, `email`, `phone`, `phone_home`, `phone_office`, `image`, `created_at`, `updated_at`) VALUES
	(2, 'Sarowar Saykat', 'Cookingg', 'sarowar@gmail.com', '01908032671', '01908032671', '01654272467', '1734784545.png', '2024-11-27 05:33:18', '2024-12-21 12:35:45');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

-- Dumping data for table madrasah.teachers: ~2 rows (approximately)
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` (`id`, `name`, `post`, `email`, `phone`, `phone_home`, `phone_office`, `image`, `created_at`, `updated_at`) VALUES
	(3, 'Sarowar Saykat', 'pincipal', 'sarowar@gmail.com', '01908032671', '01908032671', '01908032671', '1732685382.jpg', '2024-11-27 05:29:42', '2024-11-27 05:29:42'),
	(4, 'Piyas', 'English Teacher', 'piyas@gmail.com', '01601587424', '01466544244', '01466544244', '1732685494.png', '2024-11-27 05:31:22', '2024-11-27 05:31:34'),
	(5, 'Tahamid Hasan', 'social science', 'tahamid@gmail.com', '01914269024', '01914269024', '01914269024', '1732703477.png', '2024-11-27 10:31:17', '2024-11-27 10:33:12');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
