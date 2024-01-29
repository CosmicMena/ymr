<?php
    require_once('../config.php');
    if (isset($_GET['produtoName'])) {
        $produtoName = $_GET['produtoName'];


        $sql_delete = 'DELETE FROM tb_carrinho WHERE produto_name = "'. $produtoName. '"';

        if ($conn->query($sql_delete) === TRUE) {
            echo "Registros deletados com sucesso!";
        } else {
            echo "Erro ao deletar registros: " . $conn->error;
        }
    } 

    $conn->close();

    
    header("Location: ../carrinho.php");
    exit(); 
?>