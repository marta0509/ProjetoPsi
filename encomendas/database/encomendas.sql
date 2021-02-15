-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2021 às 11:42
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `encomendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `morada`, `telefone`, `email`, `updated_at`, `created_at`) VALUES
(1, 'José Alves', 'Rua 25 de Abril', '913345665', 'jalves@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(2, 'Antonio Pereira', 'Rua Nuno Alveres', '913334442', 'apereira@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(3, 'Rafael Ferreira', 'Rua Vasco da gama', '913346665', 'rferreira@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(4, 'João Manuel', 'Rua da ponte', '918976253', 'jmanuel@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(5, 'Inês Fonseca', 'Rua António Palha', '913678925', 'ifonseca@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(6, 'Marta', 'rua s.joao', '921458555', 'marta.isabel.5@hotmail.com', '2021-02-15 09:05:24', '2021-02-02 16:47:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `id_encomenda` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT 0,
  `id_vendedor` int(11) DEFAULT 0,
  `data` date DEFAULT NULL,
  `observacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`id_encomenda`, `id_cliente`, `id_vendedor`, `data`, `observacoes`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2020-12-02', 'Entregar durante a tarde.', '2020-12-02 00:00:00', '2020-12-02 00:00:00'),
(2, 1, 2, '2020-12-03', NULL, '2020-12-31 00:00:00', '2020-12-31 00:00:00'),
(3, 3, 1, '2020-12-23', 'O Cliente ficou insatisfeito com a última encomenda.', '2020-12-22 00:00:00', '2020-12-31 00:00:00'),
(4, 4, 2, '2020-12-24', 'Muito bons', '2020-12-24 00:00:00', '2020-12-25 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas_produtos`
--

CREATE TABLE `encomendas_produtos` (
  `id_enc_prod` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_encomenda` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT 0,
  `preco` double DEFAULT 0,
  `desconto` double DEFAULT 0,
  `obervacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `encomendas_produtos`
--

INSERT INTO `encomendas_produtos` (`id_enc_prod`, `id_produto`, `id_encomenda`, `quantidade`, `preco`, `desconto`, `obervacoes`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 2, 1.5, 0, NULL, '2020-12-02 00:00:00', '2020-12-31 00:00:00'),
(2, 2, 1, 3, 10.5, 0, NULL, '2020-12-03 00:00:00', '2020-12-25 00:00:00'),
(3, 3, 3, 3, 11.5, 0, NULL, '2020-12-11 00:00:00', '2020-12-22 00:00:00'),
(4, 4, 0, 2, 21.5, 0, NULL, '2020-12-03 00:00:00', '2020-12-31 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `designacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(9) DEFAULT 0,
  `preco` double DEFAULT 0,
  `observacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `designacao`, `stock`, `preco`, `observacoes`, `updated_at`, `created_at`) VALUES
(1, 'TV LG', 100, 150, NULL, '2020-12-02 00:00:00', '2020-12-02 00:00:00'),
(2, 'TV SONY', 200, 50, NULL, '2020-12-25 00:00:00', '2020-12-31 00:00:00'),
(3, 'PC ASUS', 50, 250, NULL, '2020-12-04 00:00:00', '2020-12-30 00:00:00'),
(4, 'Apple iPhone', 200, 1000, NULL, '2020-12-02 00:00:00', '2020-12-31 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marta', 'marta.isabel.5@hotmail.com', NULL, '$2y$10$Up1nHaz9jX2qz0JTO5hv9uuJc9HQOGEqF.0YJQIY6EanSfxTHhLu2', NULL, '2021-02-15 09:04:36', '2021-02-15 09:04:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nome`, `especialidade`, `email`, `updated_at`, `created_at`) VALUES
(1, 'Manuel Pacheco', 'Eletronica', 'mpacheco@Gmail.com', '2021-02-03 14:16:50', '2020-11-05 00:00:00'),
(2, 'Noé Silva', 'Informática', 'nsilva@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(3, 'Luís Gomes', 'eletromecanica', 'lgomes@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(4, 'António Filipe', 'Medicina', 'afilipe@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(5, 'Tiago Machado', 'Bicicletas', 'tmachado@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`id_encomenda`),
  ADD KEY `id_cliente` (`id_cliente`,`id_vendedor`);

--
-- Índices para tabela `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  ADD PRIMARY KEY (`id_enc_prod`),
  ADD KEY `id_produto` (`id_produto`,`id_encomenda`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `id_encomenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  MODIFY `id_enc_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
