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


    <title>Document</title>
</head>
<body>
    <header>
        <?php
            //BARRA DE NAV PRINCIPAL
            include('assets/nav.php');

            //SEGUNDA NAV com barra de pesquisa
            include('assets/nav2.php');
        ?>
    </header>
    <main>
        <!--====== HERO SECTION =========-->
        <?php include('assets/hero-section.php'); ?>
        <section class="main-body">
            <div class="main-sections">
                <?php
                    //SECÇÃO ESPECIAL DE CATEGORIAS
                    include('assets/categorias-pub.php');

                    //SECÇÃO CATEGORIAS DOS PRODUTOS
                    include('assets/categorias-produtos.php');

                    //SECÇÃO OCULTA DE VANTAGENS
                    include('assets/vantagens.php');

                    //NEWSLETTER RESPINSIVE
                    include('assets/min-screen-newsletter.php');

                    //SECÇÃO DE CONTACTO 
                    include('assets/contact.php');

                    //SECÇÃO DOS FAQS
                    include('assets/faq.php');
                ?>
            </div>
            <aside>
                
                <?php 
                    //NEWSLETTER
                    include('assets/asides/aside-newsletter.php');

                    //LOGIN FORM ASIDE
                    include('assets/asides/aside-login-form.php');

                    //LOGIN IMAGEM
                    include('assets/asides/aside-pub-img.php');
                ?>
            </aside>
        </section>
    </main>
    <?php
        //FOOTER 
        include('assets/footer.php');
        // Adicionar o botão de tela de admin no footer, caso usuário tenha ermissão de admin
    ?>
</body>
</html>