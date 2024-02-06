<?php 
    include('../config.php');


    $sql_text = "SELECT * FROM `tb_asset` WHERE id_asset = 1";


    $sql_text_result = $conn->query($sql_text);
    if ($sql_text_result !== false && $sql_text_result->num_rows > 0) {
        $row_text = $sql_text_result->fetch_assoc();
        $titulo = $row_text['texto_h1'];
        $texto = $row_text['texto_p'];
        $img = $row_text['img_url'];
    } else {
        echo "Nenhum resultado retornado ou erro na execução da consulta: " . $conn->error;
    }

    
?>

<form action="php/hero-text.php" method="post">
    <div class="form-right-side">
        <h3>Texto No Hero</h3>
        <div class="input-wrap">
            <label for="nome">Título no HERO</label>
            <input type="text" name="titulo" id="titulo" autocomplete="off" required value="<?php echo $titulo; ?>">
        </div>
        <div class="input-wrap textarea">
            <label for="mensagem">Texto no Hero</label>
            <textarea name="texto" id="texto"  autocomplete="off" required><?php echo $texto; ?></textarea>
        </div>
        <div class="input-wrap-enviar">
            <input type="submit" value="Enviar">
        </div>
    </div>
    <div class="form-left-side">
        <h3>Imagem do Hero</h3>
        <img src="../<?php echo $img; ?>">
        <div class="input-wrap">
            <label for="file-upload" class="custom-file-label">Mudar Imagem</label>
            <input type="file" id="file-upload" class="input-file" name="imagem"/>
        </div>
    </div>
</form> 