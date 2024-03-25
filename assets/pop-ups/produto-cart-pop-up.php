<div class="produto-card-pop-up">
        <div class="pop-up-content">
            <div class="pop-up-content-header">
                <h3>1 Produto(s) adicionado ao carrinho</h3>
                <div class="sair">
                    <h2><i class="fa-solid fa-x"></i></h2>
                </div>
            </div>
            <div class="pop-up-content-main">
                <table>
                    <thead>
                        <tr>
                            <th>img</th>
                            <th>Produto adicionado</th>
                            <th>Quantidade</th>
                            <th>Preço unitário</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="img-td">
                                <img src="<?php echo $produto_img; ?>">
                            </td>
                            <td class="texto" data-cell="Produto">
                                <p class="td-p-category"><?php echo $categoria;?></p>
                                <p><?php echo $produto_name;?></p>
                            </td>
                            <td data-cell="Quantidade"><p><?php echo $quantidade;?></p></td>
                            <td data-cell="Preço"><p><?php echo $produto_preco;?></p></td>
                            <td data-cell="Total"><p><?php echo (int)$quantidade * (int)$produto_preco;?></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pop-up-content-footer">
            <?php
                require_once('config.php');

                $sql_count = "SELECT COUNT(*) AS total_registros FROM tb_carrinho where id_user = '$userId'";
                $result = $conn->query($sql_count);

                if ($result) {
                    $row = $result->fetch_assoc();
                    $total_registros = $row['total_registros'];
                } 
            ?>
                <p>Tem atualmente <?php echo $total_registros;?> elementos no carrinho</p>
                <div class="actions">
                    <span class="fechar">Fechar</span>
                    <a href="carrinho.php">Carrinho</a>
                </div>
            </div>
        </div>
    </div>
