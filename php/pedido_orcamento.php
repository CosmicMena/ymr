<?php
session_start();

include("../config.php");

if (isset($_SESSION['username'])) {
    $userId = ($_SESSION['id']);
    
    // Atualiza o status do carrinho para '2' (Pedido de Orçamento)
    $sql_update_status = "UPDATE tb_carrinho SET encomenda_status = '2', data_encomenda = DATE_FORMAT(NOW(), '%d-%m-%Y') WHERE id_user = '$userId' AND encomenda_status = '1'";
    
    if ($conn->query($sql_update_status) === TRUE) {
        // Envie um e-mail com os dados alterados
        $to = "eduardombaptista2005@gmail.com";
        $subject = "Atualização do status do carrinho";
        $message = "Usuário com ID: $userId, acobou de fazer um pedido de orçamento";
        $headers = "From: eduardombaptista2005@gmail.com";
        
        // Use a função mail() para enviar o e-mail
        if (mail($to, $subject, $message, $headers)) {
            echo "E-mail enviado com sucesso para admin@ymrindustrial.com";
        } else {
            echo "Erro ao enviar e-mail.";
        }
        
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

