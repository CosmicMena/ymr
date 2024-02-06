<div class="topheader">
    <ul>
        <li><a href="#" class="active"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>Comprar</a></li>
        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Meu Carrinho</a></li>
        <li><a href="#"><i class="fa-solid fa-truck"></i>Acompanhe seu pedido</a></li>
    </ul>
    <ul>
        <li><a href="#"><i class="fa-solid fa-envelope"></i>Fale com a gente</a></li>
        <li><a href="#"><i class="fa-solid fa-location-dot"></i>Onde nos encontrar</a></li>
        <li><a href="#"><i class="fa-solid fa-user"></i>Minha conta</a></li>
    </ul>
</div>
<nav>
    <a href="home.php" class="logo-area">
        <img src="images/LOGO.png" alt="YMR Logo">
    </a>
    <ul class="large-screen-nav">
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="sobre-nos.php">Sobre nós</a></li>
        <li><a href="contacte-nos.php">Contacte-nos</a></li>
        <li><a href="contacte-nos.php">Minha Conta</a></li>
        <li><span>|</span></li>
        <?php
            require_once('config.php');

            $sql_count = "SELECT COUNT(*) AS total_registros FROM tb_carrinho";
            $result = $conn->query($sql_count);

            if ($result) {
                $row = $result->fetch_assoc();
                $total_registros = $row['total_registros'];
            } 
        ?>
        
        <li><a href="carrinho.php" class="carrinho"><i class="fa-solid fa-cart-shopping"></i> Carrinho (<?php echo $total_registros;?>)</a></li>
    </ul>
    <ul class="menutoggle">
        <i class="fa-solid fa-bars"></i>
    </ul>
</nav>