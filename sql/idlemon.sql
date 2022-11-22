-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 21:59
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `idlemon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pokemon`
--

CREATE TABLE `pokemon` (
  `pok_id` int(11) NOT NULL,
  `pok_name` varchar(79) NOT NULL,
  `pok_raridade` varchar(25) NOT NULL,
  `pok_producao` int(11) NOT NULL,
  `pok_evolve` int(11) DEFAULT NULL,
  `pok_tier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pokemon`
--

INSERT INTO `pokemon` (`pok_id`, `pok_name`, `pok_raridade`, `pok_producao`, `pok_evolve`, `pok_tier`) VALUES
(1, 'bulbasaur', 'raro', 20, 2, 1),
(2, 'ivysaur', 'raro', 20, 3, 2),
(3, 'venusaur', 'raro', 20, NULL, 3),
(4, 'charmander', 'raro', 20, 5, 1),
(5, 'charmeleon', 'raro', 20, 6, 2),
(6, 'charizard', 'raro', 20, NULL, 3),
(7, 'squirtle', 'raro', 20, 8, 1),
(8, 'wartortle', 'raro', 20, 9, 2),
(9, 'blastoise', 'raro', 20, NULL, 3),
(10, 'caterpie', 'comum', 5, 11, 1),
(11, 'metapod', 'comum', 5, 12, 2),
(12, 'butterfree', 'comum', 5, NULL, 3),
(13, 'weedle', 'comum', 5, 14, 1),
(14, 'kakuna', 'comum', 5, 15, 2),
(15, 'beedrill', 'comum', 5, NULL, 3),
(16, 'pidgey', 'comum', 5, 17, 1),
(17, 'pidgeotto', 'comum', 5, 18, 2),
(18, 'pidgeot', 'comum', 5, NULL, 3),
(19, 'rattata', 'comum', 5, 20, 1),
(20, 'raticate', 'comum', 5, NULL, 2),
(21, 'spearow', 'comum', 5, 22, 1),
(22, 'fearow', 'comum', 5, NULL, 2),
(23, 'ekans', 'comum', 5, 24, 1),
(24, 'arbok', 'comum', 5, NULL, 2),
(25, 'pikachu', 'raro', 20, 26, 1),
(26, 'raichu', 'raro', 20, NULL, 2),
(27, 'sandshrew', 'raro', 20, 28, 1),
(28, 'sandslash', 'raro', 20, NULL, 2),
(29, 'nidoran-f', 'comum', 5, 30, 1),
(30, 'nidorina', 'comum', 5, 31, 2),
(31, 'nidoqueen', 'comum', 5, NULL, 3),
(32, 'nidoran-m', 'comum', 5, 33, 1),
(33, 'nidorino', 'comum', 5, 34, 2),
(34, 'nidoking', 'comum', 5, NULL, 3),
(35, 'clefairy', 'comum', 5, 36, 1),
(36, 'clefable', 'comum', 5, NULL, 2),
(37, 'vulpix', 'comum', 5, 38, 1),
(38, 'ninetales', 'comum', 5, NULL, 2),
(39, 'jigglypuff', 'comum', 5, 40, 1),
(40, 'wigglytuff', 'comum', 5, NULL, 2),
(41, 'zubat', 'comum', 5, 42, 1),
(42, 'golbat', 'comum', 5, NULL, 2),
(43, 'oddish', 'comum', 5, 44, 1),
(44, 'gloom', 'comum', 5, 45, 2),
(45, 'vileplume', 'comum', 5, NULL, 3),
(46, 'paras', 'comum', 5, 47, 1),
(47, 'parasect', 'comum', 5, NULL, 2),
(48, 'venonat', 'comum', 5, 49, 1),
(49, 'venomoth', 'comum', 5, NULL, 2),
(50, 'diglett', 'comum', 5, 50, 1),
(51, 'dugtrio', 'comum', 5, NULL, 2),
(52, 'meowth', 'comum', 5, 53, 1),
(53, 'persian', 'comum', 5, NULL, 2),
(54, 'psyduck', 'comum', 5, 55, 1),
(55, 'golduck', 'comum', 5, NULL, 2),
(56, 'mankey', 'comum', 5, 57, 1),
(57, 'primeape', 'comum', 5, NULL, 2),
(58, 'growlithe', 'raro', 20, 59, 1),
(59, 'arcanine', 'raro', 20, NULL, 2),
(60, 'poliwag', 'raro', 20, 61, 1),
(61, 'poliwhirl', 'raro', 20, 62, 2),
(62, 'poliwrath', 'raro', 20, NULL, 3),
(63, 'abra', 'raro', 20, 64, 1),
(64, 'kadabra', 'raro', 20, 65, 2),
(65, 'alakazam', 'raro', 20, NULL, 3),
(66, 'machop', 'comum', 5, 67, 1),
(67, 'machoke', 'comum', 5, 68, 2),
(68, 'machamp', 'comum', 5, NULL, 3),
(69, 'bellsprout', 'comum', 5, 70, 1),
(70, 'weepinbell', 'comum', 5, 71, 2),
(71, 'victreebel', 'comum', 5, NULL, 3),
(72, 'tentacool', 'comum', 5, 73, 1),
(73, 'tentacruel', 'comum', 5, NULL, 2),
(74, 'geodude', 'comum', 5, 75, 1),
(75, 'graveler', 'comum', 5, 76, 2),
(76, 'golem', 'comum', 5, NULL, 3),
(77, 'ponyta', 'raro', 20, 78, 1),
(78, 'rapidash', 'raro', 20, NULL, 2),
(79, 'slowpoke', 'raro', 20, 80, 1),
(80, 'slowbro', 'raro', 20, NULL, 2),
(81, 'magnemite', 'raro', 20, 82, 1),
(82, 'magneton', 'raro', 20, NULL, 2),
(83, 'farfetchd', 'raro', 20, NULL, 1),
(84, 'doduo', 'comum', 5, 85, 1),
(85, 'dodrio', 'comum', 5, NULL, 2),
(86, 'seel', 'raro', 20, 87, 1),
(87, 'dewgong', 'raro', 20, NULL, 2),
(88, 'grimer', 'raro', 20, 89, 1),
(89, 'muk', 'raro', 20, NULL, 2),
(90, 'shellder', 'comum', 5, 91, 1),
(91, 'cloyster', 'comum', 5, NULL, 2),
(92, 'gastly', 'raro', 20, 93, 1),
(93, 'haunter', 'raro', 20, 94, 2),
(94, 'gengar', 'raro', 20, NULL, 3),
(95, 'onix', 'comum', 5, NULL, 1),
(96, 'drowzee', 'comum', 5, 97, 1),
(97, 'hypno', 'comum', 5, NULL, 2),
(98, 'krabby', 'comum', 5, 99, 1),
(99, 'kingler', 'comum', 5, NULL, 2),
(100, 'voltorb', 'raro', 20, 101, 1),
(101, 'electrode', 'raro', 20, NULL, 2),
(102, 'exeggcute', 'raro', 20, 103, 1),
(103, 'exeggutor', 'raro', 20, NULL, 2),
(104, 'cubone', 'raro', 20, 105, 1),
(105, 'marowak', 'raro', 20, NULL, 2),
(106, 'hitmonlee', 'raro', 20, NULL, 1),
(107, 'hitmonchan', 'raro', 20, NULL, 1),
(108, 'lickitung', 'comum', 5, NULL, 1),
(109, 'koffing', 'comum', 5, 110, 1),
(110, 'weezing', 'comum', 5, NULL, 2),
(111, 'rhyhorn', 'comum', 5, 112, 1),
(112, 'rhydon', 'comum', 5, NULL, 2),
(113, 'chansey', 'comum', 5, NULL, 1),
(114, 'tangela', 'comum', 5, NULL, 1),
(115, 'kangaskhan', 'raro', 20, NULL, 1),
(116, 'horsea', 'raro', 20, 117, 1),
(117, 'seadra', 'raro', 20, NULL, 2),
(118, 'goldeen', 'comum', 5, 119, 1),
(119, 'seaking', 'comum', 5, NULL, 2),
(120, 'staryu', 'comum', 5, 121, 1),
(121, 'starmie', 'comum', 5, NULL, 2),
(122, 'mr-mime', 'raro', 20, NULL, 1),
(123, 'scyther', 'raro', 20, NULL, 1),
(124, 'jynx', 'raro', 20, NULL, 1),
(125, 'electabuzz', 'raro', 20, NULL, 1),
(126, 'magmar', 'raro', 20, NULL, 1),
(127, 'pinsir', 'raro', 20, NULL, 1),
(128, 'tauros', 'comum', 5, NULL, 1),
(129, 'magikarp', 'comum', 5, 130, 1),
(130, 'gyarados', 'comum', 5, NULL, 2),
(131, 'lapras', 'raro', 20, NULL, 1),
(132, 'ditto', 'raro', 20, NULL, 1),
(133, 'eevee', 'raro', 20, 133, 1),
(134, 'vaporeon', 'raro', 20, NULL, 2),
(135, 'jolteon', 'raro', 20, NULL, 2),
(136, 'flareon', 'raro', 20, NULL, 2),
(137, 'porygon', 'raro', 20, NULL, 1),
(138, 'omanyte', 'raro', 20, 139, 1),
(139, 'omastar', 'raro', 20, NULL, 2),
(140, 'kabuto', 'raro', 20, 141, 1),
(141, 'kabutops', 'raro', 20, NULL, 2),
(142, 'aerodactyl', 'raro', 20, NULL, 1),
(143, 'snorlax', 'raro', 20, NULL, 1),
(144, 'articuno', 'lendario', 80, NULL, 1),
(145, 'zapdos', 'lendario', 80, NULL, 1),
(146, 'moltres', 'lendario', 80, NULL, 1),
(147, 'dratini', 'lendario', 80, 148, 1),
(148, 'dragonair', 'lendario', 80, 149, 2),
(149, 'dragonite', 'lendario', 80, NULL, 3),
(150, 'mewtwo', 'lendario', 80, NULL, 1),
(151, 'mew', 'lendario', 80, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nomeDeUsuario` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `dtnasc` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomeDeUsuario`, `nome`, `dtnasc`, `email`, `senha`) VALUES
(6, 'a', 'a', '2022-09-10', 'a@g.com', '0cc175b9c0f1b6a831c399e269772661'),
(9, 'B', 'B', '0001-01-04', 'b@g.com', '92eb5ffee6ae2fec3ad71c777531578f');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`pok_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `pok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
