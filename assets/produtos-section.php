<?php
    require_once('config.php');

    $sql_product = "SELECT tb_produtos.*
    FROM tb_produtos
    INNER JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
    WHERE tb_categ.category_name = '" . $categoriaSelecionada . "'";

    $result_product = $conn->query($sql_product);

?>

<?php
if ($result_product->num_rows > 0) {
    while ($row = $result_product->fetch_assoc()) {
        echo '<div class="produtos-item">
            <div class="produto-item-img">
                <a href="produto.php?produto=' . urlencode($row["produto_name"]) . '&category=' . urlencode($categoriaSelecionada) . '"><img src="' . $row["produto_img"] .'"></a>
                <div class="produto-item-qtd">
                    <p>QTD: <input type="number" name="quantidadeInput" id="quantidadeInput" value="1"></p>
                </div>
                <div class="produto-item-img-actions">
                    <a href="produto.php?produto=' . urlencode($row["produto_name"]) . '&category=' . urlencode($categoriaSelecionada) . '" class="prod-btn" title="Ver Mais"><i class="fa-solid fa-eye"></i></a>
                    <a class="prod-btn prod-btn-2" title="Adicionar ao carrinho" onClick="adicionarAoCarrinho(' . $row['id_produto'] . ')"><i class="fa-solid fa-cart-shopping"></i></a> 
                </div>
            </div>
            <div class="produto-item-body">
                <span>' . $categoriaSelecionada . '</span>
                <h2><span>AO </span>' . $row["preco_produto"] .'<span>.00</span></h2>
                <h3>' . $row["produto_name"] . '</h3>
            </div>
        </div>';
    }
} else {
    echo "Nenhum produto na categoria " . $categoriaSelecionada . "!";
}
?>
