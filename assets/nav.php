<div class="topheader">
    <ul>
        <li><a href="#" class="active"><i class="fa-solid fa-house"></i>Home</a></li>
        <?php    
            if (isset($_SESSION['username'])) {
                echo '<li><a href="produtos.php"><i class="fa-solid fa-bag-shopping"></i>Comprar</a></li>';
                echo '<li><a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i>Meu Carrinho</a></li>';
                echo '<li><a href="#"><i class="fa-solid fa-truck"></i>Acompanhe seu pedido</a></li>';
            } else {
                echo '<li><a href="login.php"><i class="fa-solid fa-bag-shopping"></i>Comprar</a></li>';
                echo '<li><a href="login.php"><i class="fa-solid fa-cart-shopping"></i>Meu Carrinho</a></li>';
            }
        ?>
    </ul>
    <ul>
        <li><a href="contacte-nos.php"><i class="fa-solid fa-envelope"></i>Fale com a gente</a></li>
        <li><a href="contacte-nos.php"><i class="fa-solid fa-location-dot"></i>Onde nos encontrar</a></li>
        <?php    
            if (isset($_SESSION['username'])) {
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="login.php">Fazer Login <i class="fa-solid fa-user"></i></a></li>';
            }
        ?>
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
        <?php    
            if (isset($_SESSION['username'])) {
                echo '<li><a href=""><i class="fa-solid fa-user"></i> Minha conta</a></li>';
                $userId = ($_SESSION['id']);
                $sql_count = "SELECT COUNT(*) AS total_registros FROM tb_carrinho  where id_user = '$userId'";
            } else {
                echo '<li><a href="login.php">Fazer Login <i class="fa-solid fa-user"></i></a></li>';
                $sql_count = "SELECT COUNT(*) AS total_registros FROM tb_carrinho where id_user = '0'";
            }
        ?>
        <li><span>|</span></li>
        <?php
            require_once('config.php');

            
            $result = $conn->query($sql_count);

            if ($result) {
                $row = $result->fetch_assoc();
                $total_registros = $row['total_registros'];
            } 
            if (isset($_SESSION['username'])) {
                echo '<li><a href="carrinho.php" class="carrinho"><i class="fa-solid fa-cart-shopping"></i> Carrinho ('.$total_registros.')</a></li>';
            } else {
                echo '<li><a href="login.php" class="carrinho"><i class="fa-solid fa-cart-shopping"></i> Carrinho (0)</a></li>';
            }
        ?>
    
    </ul>
    <ul class="menutoggle">
        <i class="fa-solid fa-bars"></i>
    </ul>
</nav>