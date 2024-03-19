<?php 
    include('config.php');


    $sql_text = "SELECT * FROM `tb_asset` WHERE id_asset = 1";


    $sql_text_result = $conn->query($sql_text);
    $row_text = $sql_text_result->fetch_assoc();

    $titulo = $row_text['texto_h1'];
    $texto = $row_text['texto_p'];
    $img = $row_text['img_url'];
?>

<!--<div class="hero">
    <div class="hero-text">
        <h1>
            <?php/*
                echo $titulo;
            */?>
        </h1>
        <p>
            <?php/* 
                echo $texto;
            */?>
        </p>
    </div>
    <div class="hero-img">
        <img src="<?php /*echo $img;*/?>" alt="">
    </div>-->

<div class="hero">
    <div class="hero-text">
        <h1>
            <?php
                echo $titulo;
            ?>
        </h1>
        <p>
            <?php 
                echo $texto;
            ?>
        </p>
    </div>
    <div class="hero-img">
        <img src="<?php /*echo $img;*/?>" alt="">
    </div>
    <div class="hero-gradient-bg">
        
    </div>
    <div class="hero-bg">
        <img src="images/hero/hero5.jpg" class="slide" alt="">
        <img src="images/hero/hero6.jpg" class="slide" alt="">
        <img src="images/hero/hero1.jpg" class="slide" alt="">
    </div>
    
</div>
    <script>
        var slides = document.querySelectorAll('.slide');
        var currentSlide = 0;
        var interval;


        // A função showslide é responsável por exibir o slide que estará no parámentro index
        function showSlide(index) {
            if (index < 0) {
                //correntSlide é o identificador numérico slide que será exibido na tela é recebe o número total de slides e subtrai por 1
                currentSlide = slides.length + 1;
            } else if (index >= slides.length) {
                currentSlide = 0;
            }

            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }

            slides[currentSlide].style.display = 'block';
        }

        function previousSlide() {
            currentSlide--;
            showSlide(currentSlide);
            clearInterval(interval); // Limpa o intervalo
        }

        function nextSlide() {
            currentSlide++;
            showSlide(currentSlide);
            clearInterval(interval); // Limpa o intervalo
        }

        /*Código para passar as imagens automáticamente*/
        showSlide(currentSlide);
        setInterval(nextSlide, 5000);
    </script>