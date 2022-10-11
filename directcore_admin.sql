-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 03:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directcore_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_26_111529_create_websites_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@user.com', '$2y$10$3OTUu5hPtCdvOeCaEvGN7OEriqiAcTe.ll3Smw4ZKknvCajzy1IRS', '2020-11-27 03:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@user.com', NULL, '$2y$10$I4bKbj2NZBt5Jl6cP4tzEuwUrLnlIel.mxpWLsv6VL4ZGXRmOLNpG', NULL, '2020-11-26 09:04:55', '2020-11-26 09:04:55'),
(2, 'User2', 'user2@user.com', NULL, '$2y$10$JudOsUHGnD75mPX3g7J1gerb3Cle4M3JnIt/sWmgBZNr7mjluY9h2', NULL, '2020-11-30 11:03:31', '2020-11-30 11:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `title`, `description`, `description2`, `description3`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"font-size: 16px;\">Home</span></p>', NULL, NULL, NULL, '2020-12-01 06:34:50', '2020-12-15 07:01:16'),
(2, '<p><span style=\"font-size: 16px;\">What We Do</span></p>', '<h2 class=\"page-list-title\">Solutions</h2>\r\n<ul>\r\n<li><a href=\"../software\"><span>Software Solutions</span></a></li>\r\n<li><a href=\"../hardware\"><span>Hardware Solutions</span></a></li>\r\n<li><a href=\"../mobile\"><span>Mobile Solutions</span></a></li>\r\n<li><a href=\"../infrastructure\"><span>IT Infrastructure Solutions</span></a></li>\r\n</ul>', '<h2 class=\"page-list-title\">Serices</h2>\r\n<ul>\r\n<li><a><span>IT Consultancy</span></a></li>\r\n<li><a><span>IT Project Management</span></a></li>\r\n<li><a><span>IT Training</span></a></li>\r\n</ul>', NULL, '2020-12-01 06:36:35', '2020-12-15 07:01:46'),
(3, '<p><span style=\"font-size: 16px;\">Who we Are</span></p>', NULL, NULL, NULL, '2020-12-01 06:37:47', '2020-12-15 07:02:14'),
(4, '<p><span style=\"font-size: 16px;\">Contact Us</span></p>', NULL, NULL, NULL, '2020-12-01 06:49:04', '2020-12-15 07:02:40'),
(5, '<h2 class=\"owl-slide-animated owl-slide-title text-white\">Premium System Solutions</h2>\r\n<div class=\"owl-slide-animated owl-slide-subtitle mb-3 text-white\">We bring together deep industry expertise and the latest IT advancements to deliver custom solutions and products that perfectly fit the needs and behavior of their users. High service availability and timely change implementation. Flexible cooperation options and proactive approach.</div>\r\n<p><a class=\"btn btn-primary owl-slide-animated owl-slide-cta\" role=\"button\" href=\"tel:+254202325599\" target=\"_blank\" rel=\"noopener\"><span class=\"btn-icon mr-2\"></span>Lets Talk</a></p>', NULL, NULL, NULL, '2020-12-01 06:50:50', '2020-12-14 06:24:27'),
(6, '<h2 class=\"owl-slide-animated owl-slide-title text-white\">Integrated Learning &amp; Management Information System (LMIS)</h2>\r\n<div class=\"owl-slide-animated owl-slide-subtitle mb-3 text-white\">Alana has a dynamic workflow management module that allows it to be implemented in all educational levels.</div>\r\n<p><a class=\"btn btn-primary owl-slide-animated owl-slide-cta\" role=\"button\" href=\"https://alanacloud.com/\" target=\"_blank\" rel=\"noopener\">See More</a></p>', NULL, NULL, NULL, '2020-12-01 07:00:52', '2020-12-14 06:28:01'),
(7, '<h2 class=\"owl-slide-animated owl-slide-title text-white \">Mobile Financial Services</h2>\r\n<div class=\"owl-slide-animated owl-slide-subtitle mb-3 text-white\">Pesatel is an integrated Mobile Financial Services and Value Add Services platform. Developed to provide robust and differentiated financial services.</div>\r\n<p><a class=\"btn btn-primary owl-slide-animated owl-slide-cta\" role=\"button\" href=\"https://www.pesatel.com/\" target=\"_blank\" rel=\"noopener\">See More</a></p>', NULL, NULL, NULL, '2020-12-14 06:26:42', '2020-12-14 06:26:42'),
(8, '<h3 class=\"heading\">We have been <span class=\"text-color-primary\"> delivering <br />software</span> development services to a <span class=\"text-color-primary\">wide range </span>of clients for many years.</h3>', NULL, NULL, NULL, '2020-12-14 06:32:06', '2020-12-14 09:54:48'),
(9, '<h2 class=\"heading\"><span class=\"mark-text\">8+</span>Years Experience across Africa</h2>\r\n<h3 class=\"heading\">Working with our <span class=\"text-color-primary\">Afican Partners</span></h3>', '<div class=\"fun-fact--three text-center\">\r\n<div class=\"fun-fact__count \">5+</div>\r\n<h6 class=\"fun-fact__text\">countries with established presence</h6>\r\n</div>', '<div class=\"fun-fact--three text-center\">\r\n<div class=\"fun-fact__count \">15+</div>\r\n<h6 class=\"fun-fact__text\">projects delivered</h6>\r\n</div>', '<div class=\"fun-fact--three text-center\">\r\n<div class=\"fun-fact__count \">200+</div>\r\n<h6 class=\"fun-fact__text\">Happy clients</h6>\r\n</div>', '2020-12-14 06:34:48', '2020-12-14 10:16:11'),
(10, '<div class=\"fun-fact--three text-center\">\r\n<div class=\"fun-fact__count \">100k</div>\r\n<h6 class=\"fun-fact__text\">people\'s lives impacted</h6>\r\n</div>', NULL, NULL, NULL, '2020-12-14 06:35:10', '2020-12-14 10:18:26'),
(11, '<h6 class=\"section-sub-title mt-20\">Our Solutions</h6>\r\n<h3 class=\"heading\">PESATEL </h3>\r\n<p class=\"text mt-30\">Pesatel is an integrated Mobile Financial Services and Value Add Services platform. Pesatel platform is developed to provide robust and differentiated financial services, expand revenue streams, add a &ldquo;sticky&rdquo; element to product offering for Mobile Network Operators, Banks, Independent Mobile Money Service providers, etc</p>\r\n<div class=\"inner-button-box section-space--mt_0\"><a class=\"ht-btn ht-btn-md\" href=\"https://www.pesatel.com/\">Find out more</a></div>', '<h6 class=\"section-sub-title mt-10\">Our Solutions</h6>\r\n<h3 class=\"heading\">NEXCOM </h3>\r\n<p class=\"text mt-30\">Premium Internet Services platform which offers premium internet services to corporates and personalized on-demand internet services to consumers</p>\r\n<div class=\"inner-button-box section-space--mt_0\"><a class=\"ht-btn ht-btn-md\" href=\"http://nexcom.co.ke/\">Find out more</a></div>', '<h6 class=\"section-sub-title mt-10\">Our Solutions</h6>\r\n<h3 class=\"heading\">IT Infrastructure </h3>\r\n<p class=\"text mt-30\">At Directcore Technologies, we intimately understand the value of robust, scalable, cost efficient and reliable IT and telecoms hardware products.</p>\r\n<div class=\"inner-button-box section-space--mt_0\"><a class=\"ht-btn ht-btn-md\" href=\"#\">Find out more</a></div>', NULL, '2020-12-14 06:37:48', '2020-12-14 06:37:48'),
(12, '<h3 class=\"heading\">For your very specific problem, <br />we have <span class=\"text-color-primary\"> highly-tailored IT solutions.</span></h3>', NULL, NULL, NULL, '2020-12-14 06:39:22', '2020-12-14 06:39:22'),
(13, '<h5 class=\"heading\">Software Solutions</h5>\r\n<div class=\"text\">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>\r\n<div class=\"feature-btn\"><a href=\"#\"> <span class=\"button-text\">Discover now</span> </a></div>', '<h5 class=\"heading\">Hardware Solutions</h5>\r\n<div class=\"text\">It&rsquo;s possible to simultaneously manage and transform information from one server to another.</div>\r\n<div class=\"feature-btn\"><a href=\"#\"> <span class=\"button-text\">Discover now</span> </a></div>', '<h5 class=\"heading\">IT Solutions</h5>\r\n<div class=\"text\">We put a strong focus on the needs of your business to figure out solutions that best for you.</div>\r\n<div class=\"feature-btn\"><a href=\"#\"> <span class=\"button-text\">Discover now</span> </a></div>', '<h5 class=\"heading\">Mobile Solutions</h5>\r\n<div class=\"text\">We help enterprises harness mobile opportunities with customers for a fuller understanding of their needs.</div>\r\n<div class=\"feature-btn\"><a href=\"#\"> <span class=\"button-text\">Discover now</span> </a></div>', '2020-12-14 06:41:07', '2020-12-14 06:41:07'),
(14, '<h3 class=\"heading text-white\">Obtaining further information by making a contact with our experienced IT staffs.</h3>\r\n<div class=\"sub-heading text-white\">We&rsquo;re available for 8 hours a day!<br />Contact to require a detailed analysis and assessment of your plan.</div>', '<h6 class=\"heading font-weight--reguler\">Reach out now!</h6>\r\n<h2 class=\"call-us\"><a href=\"tel:+254202325599\">+254-202325599</a></h2>\r\n<div class=\"contact-us-button mt-20\"><a class=\"btn btn--secondary\" href=\"tel:+254202325599\">Contact us</a></div>', NULL, NULL, '2020-12-14 06:42:11', '2020-12-14 10:30:23'),
(15, '<h3 class=\"heading text-white\">We run all kinds of IT services that vow your <span class=\"text-color-secondary\"> success</span></h3>', '<div class=\"cta-button-group--one text-center\"><a class=\"btn btn--white btn-one\" href=\"mailto:info@directcore.com\"><span class=\"btn-icon mr-2\"></span> Let\'s talk</a> <a class=\"btn btn--secondary  btn-two\" href=\"tel:+254202325599\"><span class=\"btn-icon mr-2\"></span> Get info</a></div>', NULL, NULL, '2020-12-14 06:44:28', '2020-12-14 10:38:56'),
(16, '<h1 class=\"breadcrumb-title text-color-primary\">About Us</h1>\r\n<ul class=\"breadcrumb-list\">\r\n<li class=\"breadcrumb-item\"><a href=\"http://127.0.0.1:8000/\">Home</a></li>\r\n<li class=\"breadcrumb-item active\">About Us</li>\r\n</ul>', NULL, NULL, NULL, '2020-12-14 10:42:04', '2020-12-14 10:42:04'),
(17, '<h4 class=\"section-sub-title mb-20 mt-10\">Our company</h4>\r\n<h3 class=\"heading\">We have been <span class=\"text-color-primary\"> delivering <br />software</span> development services to a <span class=\"text-color-primary\">wide range </span>of clients for many years.</h3>', '<h2 class=\"heading  mr-5\"><span class=\"mark-text\">8+</span>Years Experience in IT</h2>\r\n<h6 class=\"heading mt-30\">More About Our Success Stories</h6>', '<div class=\"text\">Directcore Technologies is an end-to-end Integrated IT solutions provider specializing in IT &amp; Telecoms products, solutions and services cutting across various market verticals in Africa. Our Management Team have 30+ years of consolidated experience in IT and Telecommunications and are uniquely equipped to provide innovative solutions to ICT problems in Africa.</div>', NULL, '2020-12-14 10:43:59', '2020-12-14 10:50:22'),
(18, '<h6 class=\"section-sub-title mb-5\">Get to Know us</h6>\r\n<h3 class=\"heading\">Our History</h3>\r\n<p class=\"text mt-30\">Directcore Technologies is a limited liability company that was incorporated in Kenya in the year 2012.</p>\r\n<ul class=\"text ml-3\">\r\n<li><span>Perform with Excellence</span></li>\r\n<li><span>Act with Integrity and Fairness</span></li>\r\n<li><span>Set Exemplary Leadership</span></li>\r\n</ul>', NULL, NULL, NULL, '2020-12-14 10:52:01', '2020-12-14 10:53:53'),
(19, '<h5 class=\"heading\">Our Vision</h5>\r\n<div class=\"text\">To be the preferred IT &amp; Telecoms solutions provider in Africa.</div>\r\n<p><a class=\"box-images-arrow\" href=\"#\"> <span class=\"button-text\">Discover now</span> </a></p>', '<h5 class=\"heading\">Our Mission</h5>\r\n<div class=\"text\">To provide innovative, secure and scalable ICT products, solutions and services that meet our customers\' current and future needs using professional teams and partners, and providing exponential growth for all stakeholders</div>\r\n<p><a class=\"box-images-arrow\" href=\"#\"> <span class=\"button-text\">Discover now</span> </a></p>', '<h5 class=\"heading\">Core Values</h5>\r\n<div class=\"text\">At Directcore Technologies we; Perform our duties with Excellence, Act with Integrity and Fairness in all our business transactions and Set Exemplary Leadership in our work and business engagements.</div>\r\n<p><a class=\"box-images-arrow\" href=\"#\"> <span class=\"button-text\">Discover now</span> </a></p>', '<p>Challenges are just opportunities in disguise. <a href=\"#\">Take the challenge!</a></p>', '2020-12-14 10:55:51', '2020-12-14 11:06:13'),
(20, '<h3 class=\"heading\">We excel in delivering <br />optimal solutions.</h3>', '<h5 class=\"title\">Warranty Management IT</h5>\r\n<div class=\"desc\">Our service offerings enhance customer experience throughout secure &amp; highly functional end-to-end warranty management.</div>', '<h5 class=\"title\">Quality Control System</h5>\r\n<div class=\"desc\">It\'s more than a responsibility but a guarantee from us to gain customer trust with highly reliable quality control system.</div>', '<h5 class=\"title\">Highly Professional Staff</h5>\r\n<div class=\"desc\">Having obtained the official &amp; formal training in IT technology and technical fields, our staffs know more than what they show.</div>', '2020-12-14 11:11:42', '2020-12-14 11:16:19'),
(21, '<h5 class=\"title\">Product Engineering &amp; Services</h5>\r\n<div class=\"desc\">Develop and propose product improvements through periodical and accurate testing, repairing &amp; refining every version.</div>', '<h5 class=\"title\">Infrastructure Integration Technology</h5>\r\n<div class=\"desc\">At Directcore, we have a holistic and integrated approach towards core modernization to experience technological evolution.</div>', '<h5 class=\"title\">Information Security Management</h5>\r\n<div class=\"desc\">Information security has been a rising issue lately due to a series of scandals from big companies, rest assured, we\'re here.</div>', NULL, '2020-12-14 11:12:44', '2020-12-14 11:12:44'),
(22, '<div class=\"fun-fact--two text-center\">\r\n<div class=\"fun-fact__count counter\">20</div>\r\n<h6 class=\"fun-fact__text\">Happy clients</h6>\r\n</div>', '<div class=\"fun-fact--two text-center\">\r\n<div class=\"fun-fact__count counter\">10</div>\r\n<h6 class=\"fun-fact__text\">Finished projects</h6>\r\n</div>', '<div class=\"fun-fact--two text-center\">\r\n<div class=\"fun-fact__count counter\">5</div>\r\n<h6 class=\"fun-fact__text\">Countries</h6>\r\n</div>', NULL, '2020-12-14 11:18:47', '2020-12-14 11:18:47'),
(23, '<h2 class=\"breadcrumb-title\">Contact us</h2>\r\n<ul class=\"breadcrumb-list\">\r\n<li class=\"breadcrumb-item\"><a href=\"http://127.0.0.1:8000/\">Home</a></li>\r\n<li class=\"breadcrumb-item active\">Contact us</li>\r\n</ul>', NULL, NULL, NULL, '2020-12-15 03:49:12', '2020-12-15 03:49:12'),
(24, '<h3 class=\"heading\">To make requests for <br />further information, <br /><span class=\"text-color-primary\">contact us</span> via our social channels.</h3>\r\n<div class=\"sub-heading\">We just need a couple of hours! <br />No more than 2 working days since receiving your issue ticket.</div>', NULL, NULL, NULL, '2020-12-15 03:50:49', '2020-12-15 03:50:49'),
(25, '<h3 class=\"heading\">We run all kinds of IT services that vow your <span class=\"text-color-primary\"> success</span></h3>', '<div class=\"cta-button-group--two text-center\"><a class=\"btn btn--white btn-one\" href=\"mailto:info@directcore.com\"><span class=\"btn-icon mr-2\"></span> Let\'s talk</a> <a class=\"btn btn--secondary btn-two \" href=\"tel:+254202325599\"><span class=\"btn-icon mr-2\"></span> Get info</a></div>', NULL, NULL, '2020-12-15 03:52:29', '2020-12-15 03:54:43'),
(26, '<h1 class=\"breadcrumb-title text-color-primary\">Software Solutions</h1>\r\n<ul class=\"breadcrumb-list\">\r\n<li class=\"breadcrumb-item\"><a href=\"http://127.0.0.1:8000/\">Home</a></li>\r\n<li class=\"breadcrumb-item active\">Software Solutions</li>\r\n</ul>', NULL, NULL, NULL, '2020-12-15 04:02:26', '2020-12-15 04:02:26'),
(27, '<h4 class=\"section-sub-title mb-20 mt-10\">Software</h4>\r\n<h3 class=\"heading\">We have been <span class=\"text-color-primary\"> delivering <br />software</span> development services to a <span class=\"text-color-primary\">wide range </span>of clients for many years.</h3>', '<div class=\"modern-number-01\">\r\n<h2 class=\"heading  mr-5\"><span class=\"mark-text\">15+</span>Years Experience in IT</h2>\r\n</div>', '<div class=\"text\">Directcore Technologies specialize in supply and customization of software solutions that addresses Sales, Services, Finance, Operations, Talent, Marketing, Collaboration and Analytics requirements for Small, Medium and Large Enterprises</div>', '<div class=\"text\">\r\n<h5>We supply and customize the following Software Solutions</h5>\r\n</div>\r\n<div class=\"text mt-30\">Today, businesses require affordable technology that improves their business performance, boosts sales &amp; services, and helps in assessing financial strengths &amp; making business decisions that deliver real results</div>\r\n<ul class=\"check-list text ml-3\">\r\n<li><span class=\"list-item \"></span>ERP &amp; CRM Systems</li>\r\n<li><span class=\"list-item \"></span>BI &amp; Analytic Systems</li>\r\n<li><span class=\"list-item \"></span>Mobile VAS solutions</li>\r\n<li><span class=\"list-item \"></span>Business Collaboration Systems</li>\r\n</ul>', '2020-12-15 04:04:29', '2020-12-15 04:10:42'),
(28, '<h3>Transforming Customer Experience through Solutions</h3>\r\n<p>We prepare custom software solutions by combining creative forces with our skilled set of developers and product managers. For all system applications, our multi-disciplined team works around the clock to ensure that a wide array of factors are taken into consideration in order to help you empower your project. We also enhance top of the notch security to ensure that your product is well secured.</p>', NULL, NULL, NULL, '2020-12-15 04:07:28', '2020-12-15 04:12:22'),
(29, '<h1 class=\"breadcrumb-title text-color-primary\">Hardware Solutions</h1>\r\n<ul class=\"breadcrumb-list\">\r\n<li class=\"breadcrumb-item\"><a href=\"http://127.0.0.1:8000/\">Home</a></li>\r\n<li class=\"breadcrumb-item active\">Hardware Solutions</li>\r\n</ul>', NULL, NULL, NULL, '2020-12-15 04:14:46', '2020-12-15 04:14:46'),
(30, '<h4 class=\"section-sub-title mb-20 mt-10\">Hardware</h4>\r\n<h3 class=\"heading\">We have been <span class=\"text-color-primary\"> delivering <br />software</span> development services to a <span class=\"text-color-primary\">wide range </span>of clients for many years.</h3>', '<div class=\"modern-number-01\">\r\n<h2 class=\"heading  mr-5\"><span class=\"mark-text\">15+</span>Years&rsquo; Experience in IT</h2>\r\n</div>', '<div class=\"text\">At Directcore Technologies, we intimately understand the value of robust, scalable, cost efficient and reliable IT and telecoms hardware products.</div>\r\n<div class=\"text\">We end-to-end supply chain solutions for IT and Telecoms value equipment. We partner with major value add distributors and equipment vendors both locally and globally to ensure that our customers enjoy variety, value for their investment and best support and warranty.</div>', NULL, '2020-12-15 04:15:53', '2020-12-15 05:03:37'),
(31, '<div class=\"section-title-wrapper text-center section-space--mb_60 wow move-up\">\r\n<h3 class=\"section-title\">Some of the solutions</h3>\r\n</div>', NULL, NULL, NULL, '2020-12-15 04:20:02', '2020-12-15 04:20:02'),
(32, '<p>Computing Solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">Servers</li>\r\n<li class=\"list-item\">Commercial Desktops</li>\r\n<li class=\"list-item\">Commercial Laptops</li>\r\n<li class=\"list-item\">Special Purpose Laptops</li>\r\n</ul>', NULL, NULL, '2020-12-15 04:42:00', '2020-12-15 06:07:55'),
(33, '<p>Network Solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">Routers, Switches, Firewalls and UTMS</li>\r\n<li class=\"list-item\">Loadbalancers and Application Delivery Controllers (ADCs) Accessories</li>\r\n<li class=\"list-item\">Server Racks &amp; Communication enclosures</li>\r\n</ul>', NULL, NULL, '2020-12-15 06:11:06', '2020-12-15 06:11:06'),
(34, '<p>Security Solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">CCTV Cameras</li>\r\n<li class=\"list-item\">Access Control Systems</li>\r\n<li class=\"list-item\">Alarm Systems</li>\r\n</ul>', NULL, NULL, '2020-12-15 06:13:21', '2020-12-15 06:13:21'),
(35, '<p>Storage Solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">Network Attached Storage</li>\r\n<li class=\"list-item\">Storage Area Network</li>\r\n<li class=\"list-item\">Backup System</li>\r\n</ul>', NULL, NULL, '2020-12-15 06:14:14', '2020-12-15 06:14:14'),
(36, '<p>(UCC) Solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">IPBX</li>\r\n<li class=\"list-item\">IP Phones</li>\r\n<li class=\"list-item\">Contact Centers</li>\r\n</ul>', NULL, NULL, '2020-12-15 06:14:56', '2020-12-15 06:14:56'),
(37, '<h3>Transforming Customer Experience through Solutions</h3>\r\n<p>We develop bespoke mobile solutions and have developed mobile banking solutions in addition to providing Mobile Value Add Services (Mobile VAS)</p>', NULL, NULL, NULL, '2020-12-15 06:20:08', '2020-12-15 06:20:08'),
(38, '<h1 class=\"breadcrumb-title text-color-primary\">Mobile Solutions</h1>\r\n<ul class=\"breadcrumb-list\">\r\n<li class=\"breadcrumb-item\"><a href=\"http://127.0.0.1:8000/\">Home</a></li>\r\n<li class=\"breadcrumb-item active\">Mobile Solutions</li>\r\n</ul>', NULL, NULL, NULL, '2020-12-15 06:22:41', '2020-12-15 06:22:41'),
(39, '<h4 class=\"section-sub-title mb-20 mt-10\">Mobile</h4>\r\n<h3 class=\"heading\">We have been <span class=\"text-color-primary\"> delivering <br />software</span> development services to a <span class=\"text-color-primary\">wide range </span>of clients for many years.</h3>', '<div class=\"modern-number-01\">\r\n<h2 class=\"heading  mr-5\"><span class=\"mark-text\">15+</span>Years&rsquo; Experience in IT</h2>\r\n</div>', '<div class=\"text\">Directcore Technologies recognizes that modern businesses must be powered by speed, flexibility convenience, reliability and security.</div>', NULL, '2020-12-15 06:24:01', '2020-12-15 06:56:55'),
(40, '<h3 class=\"section-title\">Some of the solutions</h3>', NULL, NULL, NULL, '2020-12-15 06:29:07', '2020-12-15 06:29:07'),
(41, '<p>Bespoke Mobile solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">Mobile Apps</li>\r\n<li class=\"list-item\">USSD Solutions</li>\r\n<li class=\"list-item\">SMS Solutions</li>\r\n<li class=\"list-item\">Integration Solutions</li>\r\n</ul>', NULL, NULL, '2020-12-15 06:30:46', '2020-12-15 06:50:25'),
(42, '<p>Mobile Banking solutions</p>', '<div class=\"text mb-30\">We&rsquo;re available for 8 hours a day! <br />Contact to require a detailed analysis and assessment of your plan.</div>\r\n<ul class=\"check-list section-space--mb_40\">\r\n<li class=\"list-item\">Mobile Apps for Banks</li>\r\n<li class=\"list-item\">SMS &amp; USSD Banking Solutions</li>\r\n<li class=\"list-item\">Agency Banking</li>\r\n</ul>', NULL, NULL, '2020-12-15 06:31:22', '2020-12-15 06:52:38'),
(43, '<h3>Transforming Customer Experience through Solutions</h3>\r\n<p>We develop bespoke mobile solutions and have developed mobile banking solutions in addition to providing Mobile Value Add Services (Mobile VAS)</p>', NULL, NULL, NULL, '2020-12-15 06:55:33', '2020-12-15 06:55:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
