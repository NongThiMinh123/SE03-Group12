-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2019 lúc 12:12 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `democuoiky`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'minh', '$2y$10$iMFAxft98FG2nKarmg.OdOkrokAHbl4mjEqRMTr4S4qoIzQici0z6', 'hnim97@gmail.com'),
(3, 'ntminh', '$2y$10$.7QOCLtd6m3qSKiTUpvDSuKIy.raj6cZQP488LqxpMo2WDVYfTXwC', 'hnim97@gmail.com'),
(4, 'Ngân', '$2y$10$eE/msJo9AbJtX5t2NzFXguGi.gPMQOigi23QglPEoRrbC4LGKm.z6', 'dieungan@gmail.com'),
(5, 'nhi', '$2y$10$tXCfdq2x6nuHaeRB3TVfkebn7Q/D8tdyX1K57yK9OFufVv.s8d88G', 'Nhi7@gmail.com'),
(6, 'minh2', '$2y$10$lBV1MRV8jtxx9p.TK7R1k.NpCCIGchvijX6vQM.G4A68ZK3bWSdHi', 'hnim@gmail.com'),
(7, 'minh3', '$2y$10$0rNp3rX5/mZNuzwEqCzcxO5dvSFRR.UWpz55ofID9octw7Q3qilcC', 'hnim3@gmail.com'),
(8, 'minh4', '$2y$10$wnKNkz5i4OQmhJXfjdoeLujy5To2SQoIUZMBt1bbvhEfGRm91RsZq', 'hnim4@gmail.com'),
(9, 'minh5', '$2y$10$LrQDWDHsskSwOLgHhNUdD.3Q7N.sWNDrOgSR550FU7NMRW6QTsrtW', 'hnim5@gmail.com'),
(10, 'minh6', '$2y$10$M1gw8GdG7bzg.wbLUO3YRu8EN9rffXQOlWjse2eVmnhMJ9kQnIH9m', 'hnim6@gmail.com'),
(11, 'minh7', '$2y$10$JqKWdBUb3vebBCKAhQqvUOP5YFS3x73ynoOD.1W.TObiH0hUpjLlG', 'hnim7@gmail.com'),
(12, 'minh8', '$2y$10$GY0a1exTEftlV8mk7gfes.OdvlnRC4t3uSDyVUTyhaw9kMhCtHZQm', 'hnim8@gmail.com'),
(13, 'minh12', '$2y$10$NcWpcETJj.mH5jgHy9n1e.nT/iQDZVWGO0C1lluES5p7Wo2/p6Rwy', 'hnim97@gmail.com'),
(14, 'minh13', '$2y$10$x2PpmKu9cCabaTQhkGbD4enH6.hu7t6fsnYPimCHMORjxpYpmAkN2', 'hnim97@gmail.com'),
(15, 'minh 15', '$2y$10$KjHuEsG5.D7W.Fv.He8.y.kWkrN3K5APkrf2QuC/2V7wLkKL0mpYu', 'dieungan@gmail.com'),
(16, 'ntminhfd', '$2y$10$4CilqJUcn3q1qFicBCU7luW8suDnOixBqjlboTinLKe/kHQHPgFNS', 'dieungan@gmail.com'),
(17, 'trtytry', '$2y$10$e.4RtURf8kj/enJZn/wZi.zk2kAChidXDzYBpCMsCBulqHILj6VQO', 'hn@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
