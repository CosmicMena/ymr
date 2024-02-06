<?php
include('../../config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recupera os dados do formulário
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $imagem_url = $_POST["imagem"];
    
    // Processa o upload da imagem (se necessário)
    // Certifique-se de implementar a lógica de upload de imagem aqui
    
    // Atualiza a tabela tb_assets
    $sql_update = "UPDATE tb_asset SET texto_h1 = '$titulo', texto_p = '$texto', img_url = 'images/$imagem_url' WHERE id_asset = 1";
    
    if ($conn->query($sql_update) === TRUE) {
        header('location: ../index.php');
    } else {
        echo "Erro ao atualizar dados: " . $conn->error;
    }
}
?>
