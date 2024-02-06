<?php 
    include('config.php');


    $sql_text = "SELECT * FROM `tb_asset` WHERE id_asset = 1";


    $sql_text_result = $conn->query($sql_text);
    $row_text = $sql_text_result->fetch_assoc();

    $titulo = $row_text['texto_h1'];
    $texto = $row_text['texto_p'];
    $img = $row_text['img_url'];
?>

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
        <img src="<?php echo $img; ?>" alt="">
    </div>
    
</div>