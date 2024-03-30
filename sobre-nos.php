<?php
session_start();

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos CSS -->

    <link rel="stylesheet" href="styles/style.css">

    <!-- Icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontes do google-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <title>About YMR</title>
</head>
<body>
    <header>
        <?php
            include('assets/nav.php');
        ?>
    </header>
    <main class="about-main">  
        <!--<section class="hero-about">
            <div class="hero-test-center">
                <h1>SAIBA MAIS SOBRE NÓS</h1>
            </div>
            <div class="hero-black-bg"></div>
            <div class="hero-bg">
                <img src="https://blog.kaledo.com.br/wp-content/uploads/elementor/thumbs/Empresas-que-valorizam-seus-colaboradores-compressed-q06033h0sj4vvxi9pvhwryt2jlupgibc991rkve7fk.jpg">
            </div>
        </section>-->
        <section class="about-section section-gray-bg">
            <div class="content text-center">
                <h1>Quem Somos</h1>
                <p>
                    Agregando valores ao mercado consumidor, há uma década que entregamos à cada um dos nossos clientes a melhor qualidade de consumíveis, EPI's, peças de reposição, equipamentos de engenharia e muito mais. Graças ao compromisso com a inovação, expandimos, servindo hoje clientes que temos o orgulho de ter como parceiros assim como queremos ter consigo. 
                </p>
            </div>
        </section>
        <section class="about-section section-sec-bg">
            <div class="content flex2">
                <div class="left">
                    <h1>Subscreva à nossa newsletter e ganhe ofertas imperdíveis</h1>
                </div>
                <div class="right">
                    <form action="" method="post">
                        <label for="email">Digite o seu email</label>
                        <div class="input-wrap">
                            <input type="email" name="newsletteremail" id="email" placeholder="seunome@domínio.com">
                            <input type="submit" value="Enviar" name="newslettersign">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="about-section section-white-bg">
            <div class="content flex3">
                <div class="flex-item">
                    <i class="fa-solid fa-bullseye"></i>
                    <h3>Missão</h3>
                    <p>Nossa missão é proporcionar soluções excepcionais que enriqueçam a vida de nossos clientes e comunidades.</p>
                </div>
                <div class="flex-item">
                    <i class="fa-regular fa-eye"></i>
                    <h3>Visão</h3>
                    <p>Nossa visão é ser a primeira escolha de clientes que valorizam qualidade, integridade e comprometimento.</p>
                </div>
                <div class="flex-item">
                <i class="fa-regular fa-heart"></i>
                    <h3>Valores</h3>
                    <p>A YMR é guiada por respeito mútuo, inovação, colaboração e responsabilidade. Princípios que orientam todas as nossas ações</p>
                </div>
            </div>
        </section>
        <section class="about-section section-gray-bg">
            <div class="content text-center">
                <h1>Nossa História</h1>
                <p>
                    Agregando valores ao mercado consumidor, há uma década que entregamos à cada um dos nossos clientes a melhor qualidade de consumíveis. Graças ao compromisso com a inovação, expandimos, servindo hoje clientes que temos o orgulho de ter como parceiros assim como queremos ter consigo. 
                </p>
            </div>
        </section>
        <section class="about-section section-sec-bg">
            <div class="content flex2">
                <div class="texto">
                    <h1>Nossos <br>Parceiros</h1>
                </div>
                <div class="logos-box">
                    <a href=""><img src="images/parceiros/baker.png"></a>
                    <a href=""><img src="images/parceiros/halliburton.png"></a>
                    <a href=""><img src="images/parceiros/siemens.png"></a>
                    <a href=""><img src="images/parceiros/weatherford.png"></a>
                    <a href=""><img src="images/parceiros/slb.png"></a>
                    <a href=""><img src="images/parceiros/bumiarmada.png"></a>
                    <a href=""><img src="images/parceiros/sonangol.png" class="logo-grande"></a>
                    <a href=""><img src="images/parceiros/ge.png" class="logo-grande"></a>
                </div>
            </div>
        </section>
    </main>
    <?php
        //FOOTER 
        include('assets/footer.php');
    ?>


<script src="js/script.js"></script>

</body>
</html>