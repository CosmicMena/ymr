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


    <title>SObre Nós | YMR</title>
</head>
<body>
    <header>
        <?php
            include('assets/nav.php');
        ?>
    </header>
    <main>  
        <div class="hero-about">
            <div class="hero-test-center">
                <h1>SAIBA MAIS SOBRE NÓS</h1>
            </div>
            <div class="hero-black-bg"></div>
            <div class="hero-bg">
                <img src="https://blog.kaledo.com.br/wp-content/uploads/elementor/thumbs/Empresas-que-valorizam-seus-colaboradores-compressed-q06033h0sj4vvxi9pvhwryt2jlupgibc991rkve7fk.jpg">
            </div>
            
        </div>
        <div class="flex-div">
            <div class="content">
                <img src="https://cptstatic.s3.amazonaws.com/imagens/blogs/emprego-e-renda/materias/alicerces-da-empresa-emprego-e-renda.jpg">
                <div class="about-text">
                    <h1>Quem Somos?</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea aliquam nemo iusto hic unde consectetur quasi? Soluta, asperiores nam quidem ea repudiandae voluptate vitae tempora vero quis quasi explicabo illum?</p>
                    <a href="" class="btn">Ver galeria</a>
                </div>
            </div>
        </div>
        <?php
            //FOOTER 
            include('assets/min-screen-newsletter.php');
        ?>
        
    </main>
    <?php
        //FOOTER 
        include('assets/footer.php');
    ?>


<script src="js/script.js"></script>

</body>
</html>