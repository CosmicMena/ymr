<?php
session_start();

include("../config.php");

if (isset($_SESSION['username'])) {
    $userId = ($_SESSION['id']);
    
    // Atualiza o status do carrinho para '2' (Pedido de Orçamento)
    $sql_update_status = "UPDATE tb_carrinho SET encomenda_status = '2', data_encomenda = DATE_FORMAT(NOW(), '%d-%m-%Y') WHERE id_user = '$userId' AND encomenda_status = '1'";

    
    if ($conn->query($sql_update_status) === TRUE) {
        // Redireciona para a página do carrinho
        header("location: ../carrinho.php");
        exit();
    } else {
        echo "Erro ao atualizar o status do carrinho: " . $conn->error;
    }
} else {
    // Se o usuário não estiver logado, redirecione-o para a página inicial
    header("location: ../home.php");
    exit();
}
?>
