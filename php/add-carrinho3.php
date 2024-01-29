<?php
require_once('../config.php');

if (isset($_GET['idProduto']) && isset($_GET['quantidade']) && isset($_GET['urlretorno'])) {
    
    $idProduto = $_GET['idProduto'];
    $quantidade = $_GET['quantidade'];
    $urlretorno = $_GET['urlretorno'];

    $sql_product = "SELECT tb_produtos.*, tb_categ.category_name
    FROM tb_produtos
    INNER JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
    WHERE tb_produtos.id_produto = '". $idProduto ."'";

    
    $result_product = $conn->query($sql_product);
    $row = $result_product->fetch_assoc();

    $produto_name = $row['produto_name'];
    $prduto_img = $row['produto_img'];
    $produto_preco = $row["preco_produto"];
    $categoria = $row["category_name"];

    $check_product_query = "SELECT * FROM tb_carrinho WHERE produto_name = '$produto_name'";
    $check_product_result = $conn->query($check_product_query);

    if ($check_product_result->num_rows > 0) {

        header("Location: $urlretorno");

    } else {
        $sql_add_to_cart = "INSERT INTO tb_carrinho (produto_name, produto_img, preco_produto,  category_name,  quantidade_produto) VALUES ('$produto_name' , '$prduto_img' , $produto_preco , '$categoria' , '$quantidade')";

        $conn->query($sql_add_to_cart);
        
        header("Location: $urlretorno&categoria=$categoria&idProduto=$idProduto&quantidade=$quantidade");
    }


    

} 
?>

