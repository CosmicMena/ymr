<?php
    require_once('../config.php');

    $sql_product = "SELECT tb_produtos.*, tb_categ.category_name
                    FROM tb_produtos
                    INNER JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories";

    $result_product = $conn->query($sql_product);

?>

<section class="main-section" id="stock">
    <div class="header">
        <div class="left">
            <h1>Stock</h1>
            <ul class="breadcrumb">
                <li><a href="#">
                        YmrAdmin
                    </a></li>
                /
                <li><a href="#" class="active">Stock</a></li>
            </ul>
        </div>
        <a href="cad-produto.php" class="report">
            <span>+ Adicionar Produto</span>
        </a>
    </div>
    <div class="content-table">
        <div class="header">
            <div class="header-table-left">
                <i class='bx bx-receipt'></i>
                <h3>Produtos em stock</h3>
            </div>
            <div class="header-table-right">
                <i class='bx bx-filter'></i>
            <i class='bx bx-search'></i>
            </div>
            
        </div>
        <table class="tabela">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Qnt. em stock</th>
                    <th>Disponiblidade</th>
                    <th class="actions-table">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if ($result_product->num_rows > 0) {
                    while ($row = $result_product->fetch_assoc()) {
                ?>
                <tr>
                    <td>
                        <div class="img-perfil">
                            <img class="produto-img" src="../<?php echo $row["produto_img"]; ?>">
                            <p><?php echo $row["produto_name"]; ?></p>
                        </div>
                    </td>
                    <td><?php echo $row["category_name"]; ?></td>
                    <td><?php echo $row["preco_produto"]; ?></td>
                    <td><?php echo $row["stock_produto"]; ?> unidade(s)</td>
                    <?php 
                        if ($row["stock_produto"] > 0) {
                            echo '<td class="disp">Disponível</td>';
                        } else {
                            echo '<td class="ind">Indisponível</td>';
                        }
                    ?>
                    
                    <td class="cell-actions">
                        <span class="status pending"><a href="php/edit.php?idProduto=<?php echo $row["id_produto"];?>">Alterar</a></span>
                        <span class="status process"><a href="php/delete.php?idProduto=<?php echo $row["id_produto"];?>">Deletar</a></span>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</section>