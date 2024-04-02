<div class="produtos">
    <div class="produtos-header">
    <h1 id="categoriasid"><a href="home.php">Categorias</a> > <a href="produtos.php?categoria=<?php echo $categoria; ?>"><?php echo $categoria; ?></a></h1>
    </div>
    <div class="produto-body">
        <div class="produto-body-header">
            <div class="produto-img">
                <img src="<?php echo $produto_img;?>" alt="">
            </div>
            <div class="produto-desc">
                <h1><?php echo $produto_name; ?></h1>
                <p><span>Description</span> <?php echo $description; ?></p>
                <div class="actions">
                    <div class="stock">
                        <p>
                            Disponibilidade: 
                            <?php 
                                if ($stock > 0) {
                                    echo '<span class="yes">Disponível</span> <br>';  
                                } elseif ($stock == 0) {
                                    echo '<span class="no">Indisponível</span> <br>';  
                                }
                            ?>

                            Quantidade em Stock: <?php echo $stock; ?>
                        </p>
                    </div>
                    <!--<div class="preco">
                        <p>Preço: <span><?php// echo $produto_preco; ?> kz</span>
                        </p>
                    </div>-->
                    <div class="action">
                        <p class="quantidade">QTD: <input type="number" name="" id="quantidadeInput" value="1"></p>
                        <?php    
                            if (isset($_SESSION['username'])) {
                                $userid = ($_SESSION['id']);
                                echo '<a class="btn" onClick="adicionarAoCarrinho1(' . $id_produto .','. $userid .')">Add ao carrinho</a>';
                            } else {
                                echo '<a class="btn" href="login.php">Add ao carrinho</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="produto-body-main">
            <!--<div class="produtos-header produtos-header1">
                <h1>Escpecificações</h1>
            </div>
            <table>
                <tbody class="produto-esp">
                    <tr>
                        <th><p>tipo Produto</p></th>
                        <th><p>Cor</p></th>
                        <th><p>Material</p></th>
                        <th><p>Display</p></th>
                        <th><p>Alimentação</p></th>
                        <th><p>Teste Díodo</p></th>
                    </tr>
                    <tr>
                        <td><p>De Medição</p></td>
                        <td><p>Amarela, Preta</p></td>
                        <td><p>Plástico</p></td>
                        <td><p>Digital</p></td>
                        <td><p>Bateria 9V</p></td>
                        <td><p>Sim</p></td>
                    </tr>
                </tbody>
            </table>-->
            <div class="produtos-header produtos-header2">
                <p><a href="home.php">Continuar comprando <i class="fa-solid fa-cart-shopping"></i></a></p>
            </div>    
        </div>
        
    </div>
</div>