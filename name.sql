-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 10:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `name`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(256) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `shouts` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `email`, `title`, `body`, `shouts`, `likes`) VALUES
(1, 'anix', '', 'fifa 15 awesom', 'well ia= am playing fifa 15', 0, 0),
(2, 'anix', '', 'hey this', 'body', 0, 0),
(3, 'anix', '', 'this tis tilelle', 'body body', 0, 0),
(8, 'anix', '', 'this is the post page', 'this is the post page', 0, 0),
(9, 'laravel ', 'laravel@gmail.com', 'Raw Expressions', 'Sometimes you may need to use a raw expression in a query. These expressions will be injected into the query as strings, so be careful not to create any SQL injection points! To create a raw expression, you may use the DB::raw method:', 0, 0),
(10, 'laracast', 'laravel@gmail.com', 'Route Model Binding', 'Route model binding provides a useful way to automatically method-inject a model\'s instance into your route closures, or controller actions. For example, if a user visits /tasks/1, thanks to route model binding, we can make Laravel automatically fetch the Task with an id of 1, and then inject that instance into your controller action.', 0, 0),
(11, 'Hackerrank', '', 'SOlution of stock', '#include <cmath>\r\n#include <cstdio>\r\n#include <vector>\r\n#include <iostream>\r\n#include <algorithm>\r\nusing namespace std;\r\n\r\n\r\nint main() {\r\n    /* Enter your code here. Read input from STDIN. Print output to STDOUT */  \r\n    int n;\r\n    cin>>n;\r\n    int arr[n];\r\n    int i;\r\n    for(i=1;i<=n;i++)\r\n    {\r\n        cin>>arr[i];\r\n    }\r\n    int q;\r\n    cin>>q;\r\n    int item;\r\n    int c[q];\r\n    for(int i=0;i<q;i++){\r\n        cin>>c[i];\r\n         for(int j=0;j<n;j++){\r\n            \r\n            if(c[i]==arr[j]){\r\n                con=j;\r\n            }\r\n        }\r\n        cout<<j;\r\n    }\r\n   // for(int i=0;i<q;i++){\r\n    //    for(int j=0;j<n;j++){\r\n            \r\n      //      if(c[i]==arr[j]){\r\n        //        con=j;\r\n          //  }\r\n        //}\r\n        //cout<<j;\r\n    //}\r\n    /*int count;\r\n    int j=-1;\r\n    \r\n    while(q>0)\r\n    {j=-1;\r\n     cin>>item;\r\n     for(i=1;i<=n;i++)\r\n    {\r\n        if(arr[i]==item)\r\n        {\r\n            \r\n            j=i;\r\n        }\r\n         \r\n            \r\n    }\r\n     cout<<j<<endl;\r\n        \r\n    q--;}\r\n    */\r\n    return 0;\r\n}', 0, 0),
(12, 'anix', '', 'this is the post page', 'this is the post page', 0, 0),
(13, 'Hackerrank', '', 'Stock Purchase Day', 'In a stock-market, there is one special product with infinite stocks. Its stock price is given for  days, where denotes the price of the stock on the  day. You are given  queries, each denoting a customer who is willing to buy the stock for a particular value . For each customer, find and print the last possible day that the customer can purchase the stock. If the purchase is not possible, print -1.', 0, 0),
(14, 'CSS', '', 'CODE', 'Code styling is kept basic – just wrap anything in a <code> and it will appear like this. For blocks of code, wrap a <code> with a <pre>.', 0, 0),
(15, 'skeleton', 'bb@gmail.com', 'BUTTONS', 'Buttons come in two basic flavors in Skeleton. The standard <button> element is plain, whereas the .button-primary button is vibrant and prominent. Button styles are applied to a number of appropriate form elements, but can also be arbitrarily attached to anchors with a .button class.', 0, 0),
(16, 'anix', '', 'TYPOGRAPHY', 'Type is all set with the rems, so font-sizes and spacial relationships can be responsively sized based on a single <html> font-size property. Out of the box, Skeleton never changes the <html> font-size, but it\'s there in case you need it for your project. All measurements are still base 10 though so, an <h1> with 5.0remfont-size just means 50px.', 0, 0),
(17, 'anix', '', '1mg just styling', 'India’s Trusted Pharmacy: Purchase Medicines & Drugs Online in India\r\n\r\nNo more running from one chemist store to another when in need of medicines! 1mg.com brings to you an online medicine store, which can be accessed for all health needs. With 1mg.com, you don’t just buy medicine online, but can also book appointment with the best doctors nearby. We are focused towards making healthcare accessible and affordable, and so give you plenty of options in terms of medicine substitutes.\r\nWith us, you can know about the composition of medicines prescribed to you by your doctor and search for its cheaper but equally effective substitute. With online medicine delivery, we believe in taking stress off your shoulders and helping you focus only on your recovery.\r\nWe cater to the demands of prescription medicine orders in Delhi – NCR, Indore, Bhopal, Ahmedabad and all major cities in Karnataka, Rajasthan, Tamil Nadu, Telangana, Uttar Pradesh and West Bengal. Non-prescription / Health products are delivered Pan India.\r\nReach us for online pharmacy store in India\r\n\r\nOn our website, you will get detailed information about 100K medicines vetted by certified pharmacists. You can also attach your prescription online whenever you need to do so. Ayurvedic and homeopathic categories are also our forte, and a wide range of medicine is available under these streams. Adding new wings to E-Pharmacy, we ensure complete health care for all. The popular Health Products at our website are diabetes devices, Ayurveda and mother & child.\r\nAt 1mg.com you can explore various online prescription medicines as well as Health Products. Buying prescription drugs online is very simple on 1mg, you just need to search for the medicine, add to cart and if the medicine requires a prescription – you can upload a copy of the prescription from your desktop right there and proceed to checkout. You can also buy other health care products online that don’t require a prescription. So shop for online health care medicines for your personal and family wellness.\r\nBook appointment with doctors online\r\n\r\nIf you are looking for the best specialized doctors or hospitals in your locality, then explore our website. Booking appointment with doctors is much easy now with our services along with purchasing medicines online. From Child Specialist to Gynecologist, Orthopaedician, Dietician, Neurologist, all can be found and accessed easily on our website.\r\nDiagnostic tests simplified', 0, 0),
(18, 'anix', '', 'jnlkjnlkj', 'klmlknlsexy jeff', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Doctor` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `votes` int(10) NOT NULL DEFAULT '0',
  `anonymous_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar_name`, `is_Doctor`, `remember_token`, `created_at`, `updated_at`, `votes`, `anonymous_name`) VALUES
(8, 'encrypt', 'an@gmail.com', 'eyJpdiI6IjZKdTJJbXpXazA5V1ZxWEVcL1RHS2hnPT0iLCJ2YWx1ZSI6InJa', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'f3WJ4XgWAaiPFGzOKr3ZfZVR3bRrh57PZE297PhN', NULL, NULL, 0, ''),
(9, 'hash', 'hash@gmail.com', 'eyJpdiI6ImVScmRWREVqVDdCRXhPM2tPWVhBQ0E9PSIsInZhbHVlIjoiNGZI', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, '9Br7BNyUtBBH6RxTi2JHkEi0ddaZ5TGCGPyG2Y1Z', NULL, NULL, 0, ''),
(12, 'laravel', 'laravel@gmail.com', '$2y$10$NApT5FB2aMs6JokZJ/DOv.7imUgYurcWq5AavaIHwfgT3EpUXcL6m', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, '4xccPYcdKcTd4E0d5NqJAGr1VIBjtCM0SGuMx1Tk', NULL, NULL, 84, 'lav'),
(13, 'bb', 'bb@gmail.com', '$2y$10$D/rqxPez7uPVBt9DEJ9Vdes8RQaBjGBVq8F5VB6XmbufGwR5ICA2S', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'zQf3QsjRzvUctJyYRrCadYWONrn18h5PIrpMfdsb', NULL, NULL, 2, 'bhuvam bham\r\n'),
(14, 'node', 'node@gmail.com', '$2y$10$0MKDPaumdFfkYWm.17nWKOZg2LcRKTQhO9Qlu7kvmex9z8a9v3w0W', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'AdEGwkUL86HB3YO5WmeHTZA6djWGA2UrrQeqeu9h', NULL, NULL, 55, 'mean'),
(15, 'rami malek', 'ramimalek@gmail.com', '$2y$10$46K5SV8DqeJGTLHahD1wauU0c4Chaj9qZBsieE3uOHhHbQId8tylu', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'e1UEGnqmoTfz44eBBIk0r6xcCGzdPLHmoV0I9dAi', NULL, NULL, 4, 'mr Robot'),
(16, 'ross', 'ross@gmail.com', '$2y$10$fvSsUiFUnUGo502JVEaMHeZ.9kGnEpI/Ls7jFy/oyRuZSZfmGhS/S', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'c2yu0QPCDQyrpecmfpfOiG2LfGsV98UTRCgeorb6', NULL, NULL, 0, 'unagi'),
(17, 'blockchain', 'block@gmail.com', '$2y$10$ZjdVG3oAV4TZT6w1OVPBOOG3iivXF2lj92GZXwIbpM0Nf0001fUNC', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'phxd4zGztKyaXpSLIVjZvC26787kU7VTsBfS877I', NULL, NULL, 2, 'ethereum'),
(18, 'image', 'img@gmail.com', '$2y$10$Cp1Saq0/otQ.Faujn.XQpuatBru6rtW/UKrtS.vdTTRTN275jPOYe', 'eyJpdiI6InQ4aWthOGZ4a0RUUWpHMTRZOWFqYUE9PSIsInZhbHVlIjoiVmpCeEZTM09JaWl4eEtab0YwTDJOYXJIeDQzWnBsRFRCekJxbUlLSUYrZzRXRVdmdWRFdjUzQ1lRYWE2Z2MxRDRBVWtxVjNQQXRPK3o3bEJqK0thVm9Vcm0wbjBMemdzdUxFQXl2dTBIQjNNVEhVVnpYYVRSamM4NTZUU2p3SUdOU1ZlbnhtWmQwYWEzeGtyamsrUTY1UFVBRlhTM0JsbGxrUXE3MCtVN25HcVRvZ0t1MGtLaCtyOVpHdFJkUjZaIiwibWFjIjoiNDhmNGZmOWMxOTEwMDI0YTE1MjI0YzQ4ZWNjMzRmOTA4OTY3ZTdkYzM1MmMxZjZlZTlhZDEyMTlmYWM5OGRjOSJ9', 0, 'Xawe902Gv09Yw9t9OUflg8LjU8UcvhvFoUvj3jqd', NULL, NULL, 0, 'test'),
(19, 'medi', 'medi@gmail.com', '$2y$10$qdoXsv7CAWyXc3LXwdz3MO6ZxT/sq2fmZTyeFMSa4nCKM.vXwXMX.', 'browser.png', 0, 'XKev9Krevn0MyZLLGFnZdBQ9kYKyhQjSwaXl79Iy', NULL, NULL, 0, 'medianony'),
(20, 'move', 'move@gmail.com', '$2y$10$awWkbo1rmbuz2tGwSZn0h.9DAoOlFRXNN5ZGID6Hxzrl46WmRxiiG', 'password.png', 0, 'zbcC9JvLzxUyJOQFbdUPVgL3rR7kgPJif0mbBPUx', NULL, NULL, 0, 'store'),
(21, 'noAav', 'no@gmaill.com', '$2y$10$fWv6eDbgH7f9ReAYEr9pt.PMxPUIDo4vtTS0a0pfN01Q.spCrewqq', 'eyJpdiI6ImF1b3U5T1dmWjZ1cDlFQTR5eWpFNWc9PSIsInZhbHVlIjoidENTVnFNRzB4akZKVHY2NXBxQmM3cmxoQkJUQm02Vjh2N2t3djN5Ylo2MD0iLCJtYWMiOiJkZGRkYWViMDNlMmYzZjE5Y2U0OGVhODY0ZmZlZGZiZjgwNDljOTczNjIxODg4NmFiZDMwMmE1MjdlYjU4ZmIwIn0=', 0, 'wF3taRDrT3Dl6P7dMpLQlu2WS49VRZS70hnEOIVA', NULL, NULL, 0, 'unAav'),
(22, 'utube', 'utube@gmail.com', '$2y$10$y4EsXnUdVj.w8ywbms4hbOQvj8QiQ1px4SctCGt/LEZi2Y85Nf0ea', 'eyJpdiI6IlFSTUNjQjdJaTlpSGJDSzhcL3ZYK0xBPT0iLCJ2YWx1ZSI6Ik5rYWdVTTVpbnowbVwvcld0UlZZU1wveFpjZjJJSUZRdzc2NlFqUG5vRTJhYmp4cVAxOUJrNkJ2SjdJM2V5Um9KTSIsIm1hYyI6IjA5OTdmYmE0ZjY2NTM4NWExMDdlZmI3NWIyZTBhYzg1YWNiN2NlMmY5YWIwNmI3Njc3Y2Y5YzdjMDM4MTc4YjcifQ==', 0, 'DjnHXCiQGdp5XKY8dloY5rAhhkYt0tsyiU4eWEHB', NULL, NULL, 1, 'darkweb'),
(23, 'base64', 'base@gmail.com', '$2y$10$H1m01iduL79DPu/uD44f8Ozm9txuTMWaX89jTyyC9ZhgBzfDKG5uO', 'eyJpdiI6ImEzemk3VlY1bnRXcHFDWFU4b0d1RUE9PSIsInZhbHVlIjoiM1Y5eUdFVTNrc0EwMStkNjY5MzF2UT09IiwibWFjIjoiNzRkNzFmYzg4Yzc3NzIwNmFiMDI4NGU0NTZkZWJlNTMxNDkxMjYyZDliMTkwOTRhZjUzM2EwYmFmMTJhZGUzNiJ9', 0, 'cXv8r9dHhSIuEX8Cy16YYPWiyqryJdNYk62l6qBb', NULL, NULL, 0, '64'),
(27, 'x', 'x@gmail.com', '$2y$10$xhj52Ta7yiQTkr.iK7KIpebk9ePkQacS/L9tH2cfCw8dW3Zh4EyV2', '$2y$10$iBza6KVJsuSzUuKKClzKd.YvAROHVMfiXVC5A74KvrlzsdqNT/mqy', 0, '2Ng7VZduj7HMXKH5NT9Wg99eh5Ds7Qp2ujkKRdVr', NULL, NULL, 0, 'x'),
(28, 'y', 'y@gmail.com', '$2y$10$Q4P.JyEBMK.jTAs6KZis1.R4UGk5bT/YcxTz5J6x2ETMYeln.kO36', '$2y$10$TcFAZXVQtR1iQ9nW6N0i1OEdFMhJIHeo7jg3hsv/vwM.5.vUJGNmG', 0, '6HkwLPE0MfRHCbFWLmaPdBQHVkUZfFdbcA6o6Kez', NULL, NULL, 0, 'y'),
(29, 'hello', 'hello@gmail.com', '$2y$10$ylZy9ww49CBI35w5tEPR/ePwDscNcZR6/OdVPnQrqtbOlTdsXGRZm', 'eyJpdiI6InZpOHFuRTAwSUZQaWdcL3dcLzdabDVsdz09IiwidmFsdWUiOiJ2OWwwd3NLVFR4U1FKcGMxUStcL1pTOXNZU3dCTkYzOXNTWVpldTJPd2gyd0JVc0IxM29mQ3FBdXh2Tjc5YVI0OTVpXC80cWJuUFpadDN2eGV0em1nZXRBSzJoSG1iY2pRT2lBeFRCc3hyNTJIYVoyMEVWWWJhaFFUNCtSTzlSQ3RvIiwibWFjIjoiMWFiOWY3Yjk3YTJjZDk2MDZjMTk2MjgwMjBiY2YwNjgwYzJkMjNmOWNhMTFlNGM3ZTJmNDIzOWNhNmQ2YTAwMCJ9', 0, '2OWeBmhcYoZGZJEGj56sNpFKulCYu8tBxz0WuNX9', NULL, NULL, 1, 'world'),
(30, 'poet', 'poet@gmail.com', '$2y$10$ArBhxF/R1C/6J1BmdpwGGOCO53jLOjjOOAJk6MGOZIWO0iIddskJK', 'eyJpdiI6ImNhUmlWVU5jblRBYjNGNWo2Q21jK0E9PSIsInZhbHVlIjoiQ29MZzl4QW5jMXNWT1Z3aXpXTUNEdzk3b2tvS0t5WFZTaTJNQmpkUXhRND0iLCJtYWMiOiJiMjIzYzYyN2RiZjMwNjUzYTMyMzkyOGY2Y2RhMmI1OWQzZTI1M2M3ZDFhMjg5ZTY0NmQzMTZjNzY5ZjFjZmY3In0=', 0, 'mUY8rsr2eLOxJ2vmyHVXm02ZImsDaxo59nj6t08k', NULL, NULL, 1, 'band'),
(31, 'doctor', 'doc@gmail.com', '$2y$10$jq7ItwCAFDOuXa4R68PMUeduzj2CJ8n/KEofjamB2En3a1hQgCQeS', 'eyJpdiI6IlYyb1hnVHAxMzZFZnJMODVyVGYwZmc9PSIsInZhbHVlIjoiRU5YaFZ4b1JvM040M0V6TTFJY2VmVXQzaU1wTGNUZmF6amNZUHA3SDBVUUI0c3NkYXNMNkVDQmh0eFZWaFQrRGczRGgxS3VBS20wQ0hPOFh0aWVnXC9wZUU4ekIzbGNwTzA0M3RrN1Q1NEVvb3ZHeGI5bjRuWE1RaCtpYkl4T2NcL3FMUWxEbG9icU9RNHVTVVJDbGlDNnJ4RVhjam95cjlqRFdmcHF2NFV3SDliT0dhK0JqVWhRbDQ0bmNFeGJ1ZFwvIiwibWFjIjoiYWExOGMxNzg3Y2NkM2EyNDU2YzYyOTM1ZDA1MWU0MTQwZjYzMWVhYzNkNzAyMjgyMjZkNDVlMWRkZTEwODNjYiJ9', 1, 'hyJhGPVGBaUu0wH2Utx3WZ2Ilj7yvgLXxK0pXAUp', NULL, NULL, 0, 'doco'),
(34, 'md5', 'md5@gmail.com', '$2y$10$3yUaKHHV8MRoadPWQcgRw.pHG.D/5v/CzgiHOjoAIZQmhNR9eOQNO', 'eyJpdiI6Iks4MXgxYURjZlVXOUVYNXVzVHd6T1E9PSIsInZhbHVlIjoiVGNWcDQ0ZHA5ZERXNTBtaTVuWUdsQT09IiwibWFjIjoiMzU1YzE5ZmEzMjQ5NGE2NTNiMjQ0OTc3ZGQ2OWQ0NTkzN2FiOGVhZTc0ZWQyZmJlOGJlNTRmNzNjZDlkMzdiYiJ9', 0, 'AxCguEIeVwX6lQwTguwjwCIh2aze4fq2cPgltRls', NULL, NULL, 0, 'has'),
(35, 'check', 'check@gmail.com', '$2y$10$.EVCZkPyt8J6FqNCjPsHDuRXTVqR09w9wE29QDv/KIHDXC9XRoe62', 'eyJpdiI6IlZFem9kVWNOeithREtWQ3N3Z0hzMWc9PSIsInZhbHVlIjoiYkpjcTNZUXgxZTNiNzB3am00c202Q3AzR3BHV2wrajVSZFhLdnJCSlMwYz0iLCJtYWMiOiJjZmNjNDdlNmYxMjc4OGRiMGEyMWFhNzIxNjNlODg3MmIyMWU3MDU5YTBjMDVmYzkzZTA4OGViZTBiMjMyZjEzIn0=', 0, 'AH1AEoN7G1hMvkiHqF6JzC3u3IcSIO7VvoF2sVCC', NULL, NULL, 0, 'checking'),
(36, 'intern', 'intern@gmail.com', '$2y$10$w7XvddibLEpcv4Y2Knzmbe0k/6EX1TL3wa07xyreFwf40WvrjWIou', 'eyJpdiI6Im9xd1ZsWWVQVXY1MGwxeDY5dENQZ0E9PSIsInZhbHVlIjoiVDcyY01va3RtdCtDdW5ZOUxTQ1dFMkxOQlVLNnh5RDEwbkU1aTIzTUxcL1U9IiwibWFjIjoiNmJiYzZiM2UyMDY0MDQ2YTQ0MjIwYjA1OTNhYTg5OWI4MjdlZDE2YWUxYTBhOGE2MzZkZmQ2NGRiOTBiOGEwMiJ9', 0, '8Pp14k79pCOCWCjpgd6HKvJ9zYfxynVQNr4BVp9h', NULL, NULL, 1, 'mono');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
