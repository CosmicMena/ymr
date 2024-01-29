-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jan-2024 às 15:37
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ymrdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carrinho`
--

CREATE TABLE `tb_carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `produto_name` varchar(80) NOT NULL,
  `produto_img` varchar(220) NOT NULL,
  `preco_produto` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL,
  `quantidade_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_carrinho`
--

INSERT INTO `tb_carrinho` (`id_carrinho`, `produto_name`, `produto_img`, `preco_produto`, `category_name`, `quantidade_produto`) VALUES
(70, 'Analisador Lógico Saleae Logic Pro 16', 'images/produtos/testtool4.jpg', 32500, 'Test Instruments', 1),
(71, 'Pontas de prova', 'images/produtos/testtool6.jpg', 1200, 'Test Instruments', 1),
(72, 'Anemômetro Extech 45118', 'images/produtos/testtool3.webp', 3100, 'Test Instruments', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categ`
--

CREATE TABLE `tb_categ` (
  `id_categories` int(100) NOT NULL,
  `category_name` varchar(40) NOT NULL,
  `category_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_categ`
--

INSERT INTO `tb_categ` (`id_categories`, `category_name`, `category_img`) VALUES
(1, 'Adhesives, Sealants & Tape', 'images/categorias/abrasivo.jpg'),
(2, 'Paint, Equipment & Supplies', 'images/categorias/tinta.png'),
(3, 'Safety Equipment', 'images/categorias/eye protector.jpg'),
(4, 'Material Handling', 'images/categorias/chave de fendas.jpg'),
(5, 'Test Instruments', 'images/categorias/detetor de gas.jpg'),
(6, 'Lubricants', 'images/categorias/lub.jpg'),
(7, 'Lighting', 'images/categorias/light.webp'),
(9, 'Security', 'images/categorias/eye protector.jpg'),
(10, 'Accessories', 'images/categorias/porca npt.jpg'),
(11, 'Pumps', 'images/categorias/valvula.jpg'),
(12, 'Lab Supplies', 'images/categorias/lab.jpg'),
(14, 'Fasteners', 'images/categorias/rebarbadeira.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id_produto` int(100) NOT NULL,
  `produto_name` varchar(80) NOT NULL,
  `produto_img` varchar(220) NOT NULL,
  `preco_produto` int(9) NOT NULL,
  `desc_produto` varchar(255) NOT NULL,
  `stock_produto` int(30) NOT NULL,
  `id_categories` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id_produto`, `produto_name`, `produto_img`, `preco_produto`, `desc_produto`, `stock_produto`, `id_categories`) VALUES
(1, 'Pontas de prova', 'images/produtos/testtool6.jpg', 1200, 'As pontas de prova são componentes essenciais para a realização de medições precisas em circuitos eletrônicos. Este conjunto inclui pontas de prova de alta qualidade, ideais para uso em laboratórios e ambientes profissionais. Garanta medições precisas e c', 100, 5),
(2, 'Multímetro Digital Fluke 87V', 'images/produtos/multimetro.jpg', 18000, 'O Multímetro Digital Fluke 87V é um instrumento de alta qualidade projetado para atender às demandas de profissionais que necessitam de medições precisas em ambientes industriais. Possui recursos avançados, incluindo medição de tensão, corrente, resistênc', 150, 5),
(3, 'Multímetro Digital M4 50V', 'images/produtos/testmeter.jpg', 15200, 'O Multímetro Digital M4 50V é uma ferramenta versátil e confiável para medições elétricas em uma variedade de aplicações. Com recursos avançados, como medição de capacitância, frequência e temperatura, este multímetro atende às exigências de profissionais', 80, 5),
(4, 'Analisador Lógico Saleae Logic Pro 16', 'images/produtos/testtool4.jpg', 32500, 'O Analisador Lógico Saleae Logic Pro 16 é uma ferramenta essencial para engenheiros e desenvolvedores que trabalham com sistemas digitais. Com 16 canais de entrada, oferece uma visão detalhada dos sinais lógicos, facilitando a depuração e análise de circu', 200, 5),
(5, 'Gerador de Funções Rigol DG1022', 'images/produtos/testtool5.jpg', 5800, 'O Gerador de Funções Rigol DG1022 é uma ferramenta versátil para geração de sinais de forma de onda em diversas aplicações. Com dois canais independentes e uma variedade de formas de onda, oferece flexibilidade para testes e experimentos em eletrônica e c', 120, 5),
(6, 'Anemômetro Extech 45118', 'images/produtos/testtool3.webp', 3100, 'O Anemômetro Extech 45118 é uma ferramenta essencial para medições precisas de velocidade do vento. Projetado para uma ampla gama de aplicações, desde monitoramento ambiental até instalação de sistemas HVAC, oferece resultados confiáveis e precisos. Seu d', 90, 5),
(7, 'Sonda de Corrente Fluke i400', 'images/produtos/testtool7.jpg', 1000, 'A Sonda de Corrente Fluke i400 é uma ferramenta indispensável para medições de corrente AC/DC em sistemas elétricos. Com alta precisão e uma ampla faixa de medição, oferece resultados confiáveis em uma variedade de aplicações industriais e de manutenção. ', 150, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices para tabela `tb_categ`
--
ALTER TABLE `tb_categ`
  ADD PRIMARY KEY (`id_categories`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categories` (`id_categories`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD CONSTRAINT `tb_produtos_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `tb_categ` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
