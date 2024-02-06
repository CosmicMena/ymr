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
                        <h1><a href="home.php">home</a> > Contacte-nos</h1>
                    </div>
                    <div class="about-hero">
                        <img src="images/about-hero.jpeg" alt="">
                        <h1>Deixe uma mensagem</h1>
                    </div>
                    <?php
                        include('assets/contact.php');
                    ?>
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