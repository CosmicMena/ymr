<?php
require_once('../config.php');

if (isset($_GET['idProduto']) && isset($_GET['quantidade']) && isset($_GET['userid'])) {
    
    $idProduto = $_GET['idProduto'];
    $quantidade = $_GET['quantidade'];
    $userid = $_GET['userid'];

    $sql_product = "SELECT tb_produtos.*, tb_categ.category_name
    FROM tb_produtos
    INNER JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
    WHERE tb_produtos.id_produto = '". $idProduto ."'";

    
    $result_product = $conn->query($sql_product);
    $row = $result_product->fetch_assoc();

    $produto_name = $row['produto_name'];
    $produto_img = $row['produto_img'];
    $produto_preco = $row["preco_produto"];
    $categoria = $row["category_name"];

    $check_product_query = "SELECT * FROM tb_carrinho WHERE produto_name = '$produto_name' and id_user = '$userId'";
    $check_product_result = $conn->query($check_product_query);

    if ($check_product_result->num_rows > 0) {

        header("Location: ../produto.php?produto=$produto_name&category=$categoria");

    } else {
        $sql_add_to_cart = "INSERT INTO tb_carrinho (produto_name, produto_img, preco_produto, category_name, quantidade_produto, id_user, encomenda_status) VALUES ('$produto_name' , '$produto_img' , '$produto_preco' , '$categoria' , '$quantidade', '$userid', '1')";

        $conn->query($sql_add_to_cart);
        
        header("Location: ../produto.php?categoria=$categoria&idProduto=$idProduto&quantidade=$quantidade");
    }
} 
?>

