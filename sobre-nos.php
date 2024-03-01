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
        <section class="main-body">
            <div class="main-sections">
                <div class="produtos">
                    <div class="produtos-header">
                        <h1><a href="home.php">home</a> > Sobre nós</h1>
                    </div>
                    <div class="about-hero">
                        <img src="images/about-hero.jpeg" alt="">
                        <h1>Quem Somos?</h1>
                    </div>
                    <div class="text-info">
                        <div class="text-info-text">
                            <h1>História</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae impedit nostrum iusto cumque, amet deserunt eius ipsa blanditiis aperiam doloremque atque ex saepe doloribus, repellendus modi voluptatem possimus eveniet excepturi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint ullam corrupti autem debitis animi exercitationem aut commodi enim eaque rem odio aliquam, voluptatum, saepe ipsa ipsum hic! Commodi, nobis quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maiores rerum iure, laboriosam dolor exercitationem corrupti voluptate. Autem eos tempore praesentium accusantium fugiat animi unde, atque ab nesciunt reiciendis harum? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="text-info-img">
                            <img src="images/info.webp" alt="">
                        </div>
                    </div>
                    <div class="text-info text-info-reverse">
                        <div class="text-info-img">
                            <img src="images/info.webp" alt="">
                        </div>
                        <div class="text-info-text">
                            <h1>Nossos Valores</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae impedit nostrum iusto cumque, amet deserunt eius ipsa blanditiis aperiam doloremque atque ex saepe doloribus, repellendus modi voluptatem possimus eveniet excepturi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint ullam corrupti autem debitis animi exercitationem aut commodi enim eaque rem odio aliquam, voluptatum, saepe ipsa ipsum hic! Commodi, nobis quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maiores rerum iure, laboriosam dolor exercitationem corrupti voluptate. Autem eos tempore praesentium accusantium fugiat animi unde, atque ab nesciunt reiciendis harum? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="partners">
                        <h2>Nosos Parceiros</h2>
                        <div class="partners-slider">
                            <a href=""><img src="images/parceiros/baker.png" alt=""></a>
                            <a href=""><img src="images/parceiros/bumiarmada.png" alt=""></a>
                            <a href=""><img src="images/parceiros/ge.jpeg" alt=""  class="partner-image-big"></a>
                            <a href=""><img src="images/parceiros/halliburton.png" alt=""></a>
                            <a href=""><img src="images/parceiros/schlumberger.png" alt=""></a>
                            <a href=""><img src="images/parceiros/sonalgol.jpeg" alt="" class="partner-image-big"></a>
                            <a href=""><img src="images/parceiros/weatherford.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="min-screen-newsletter">
                    <div>
                        <h2>Assine a nossa Newsletter</h2>
                        <form action="#">
                            <input type="email" name="email" placeholder="anyone@domain.com">
                            <input type="submit" value="Enviar">
                        </form> 
                    </div>
                    <i class="fa-regular fa-paper-plane"></i>
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