
<?php
if ($result_product->num_rows > 0) {
    while ($row = $result_product->fetch_assoc()) {
        $idProduto = $row['id_produto'];
        $produto_name = $row['produto_name'];
        $produto_img = $row['produto_img'];
        $produto_preco = $row["preco_produto"];
        $categoria = $row["category_name"];
        
        echo '<div class="produtos-item">
            <div class="produto-item-img">
                <a href="produto.php?produto=' . urlencode($produto_name) . '&category=' . urlencode($categoria) . '"><img src="' . $produto_img .'"></a>
                <div class="produto-item-qtd">
                    <p>QTD: <input type="number" name="quantidadeInput" id="quantidadeInput" value="1"></p>
                </div>
                <div class="produto-item-img-actions">
                    <a href="produto.php?produto=' . urlencode($produto_name) . '&category=' . urlencode($categoria) . '" class="prod-btn" title="Ver Mais"><i class="fa-solid fa-eye"></i></a>';   
                    if (isset($_SESSION['username'])) {
                        $userid = ($_SESSION['id']);
                        echo '<a class="prod-btn prod-btn-2" title="Adicionar ao carrinho" onClick="adicionarAoCarrinho(' . $row['id_produto'] . ', ' . $userid . ', \'' . $pesquisa . '\')"><i class="fa-solid fa-cart-shopping"></i></a>';
                    } else {
                        echo '<a class="prod-btn prod-btn-2" title="Adicionar ao carrinho" href="login.php"><i class="fa-solid fa-cart-shopping"></i></a>';
                    }

                echo'</div>
            </div>
            <div class="produto-item-body">
                <span>' . $categoria . '</span>
                <h2><span>AO </span>' . $produto_preco .'<span>.00</span></h2>
                <h3>' . $produto_name . '</h3>
            </div>
        </div>';
    }
} else {
    echo "Nenhum resultado encontrado para a pesquisa <strong>". $pesquisa ."</strong>!";
}
?>
