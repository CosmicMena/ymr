<?php
    $sql_cart = "SELECT 
    c.id_carrinho,
    c.produto_name,
    c.produto_img,
    c.preco_produto,
    c.category_name,
    c.quantidade_produto,
    c.data_encomenda,
    u.username,
    u.email,
    c.encomenda_status
    FROM 
        tb_carrinho c
    JOIN 
        users u ON c.id_user = u.id_user
    where encomenda_status > '1'";
    $result_cart = $conn->query($sql_cart);
?>
    <section class="main-section" id="orders">
        <div class="header">
            <div class="left">
                <h1>Encomendas</h1>
                <ul class="breadcrumb">
                    <li><a href="#">
                            YmrAdmin
                        </a></li>
                    /
                    <li><a href="#" class="active">Encomendas</a></li>
                </ul>
            </div>
        </div>
        <div class="content-table">
            <div class="header">
                <div class="header-table-left">
                    <i class='bx bx-receipt'></i>
                    <h3>Recent Orders</h3>
                </div>
                <div class="header-table-right">
                    <i class='bx bx-filter'></i>
                <i class='bx bx-search'></i>
                </div>
                
            </div>
            <table class="tabela">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>E-mail</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>Data de encomenda</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
<?php
    if ($result_cart->num_rows > 0) {
        while ($row = $result_cart->fetch_assoc()) {
?>
        <tr>
            <td>
                <div class="img-perfil">
                    <img src="images/user.png">
                    <p><?php echo $row["username"]; ?></p>
                </div>
            </td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["produto_name"]; ?></td>
            <td><?php echo $row["preco_produto"]; ?> kz</td>
            <td><?php echo $row["quantidade_produto"]; ?> unidade(s)</td>
            <td><?php echo $row["quantidade_produto"] * $row["preco_produto"]; ?>.00 Kz</td>
            <td><?php echo $row["data_encomenda"]; ?></td>
            <td><?php 
                if($row['encomenda_status'] == 2){
                    echo '<span class="status pending">Pendente</span>';
                } else if ($row['encomenda_status'] == 3) {
                    echo '<span class="status completed">Sucesso</span>';
                } else {
                    echo '<span class="status process">Cancelada</span>';
                }
            ?></td>
        </tr>
<?php 
        }
    } else {
        echo '<p>Carrinho vazio <a href="home.php">Adicione produtos</a></p>

        <style>
        .produto-body-carrinho table{
        visibility: hidden;
        }
        </style>';
    }
?>              </tbody>
            </table>
        </div>
    </section>  