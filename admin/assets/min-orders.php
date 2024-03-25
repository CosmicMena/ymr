<?php
    include('../config.php');

    $sql_cart_min = "SELECT DISTINCT
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
    $result_cart_min = $conn->query($sql_cart_min);
?>
 

<div class="orders">
    <div class="header">
        <i class='bx bx-receipt'></i>
        <h3>Recent Orders</h3>
        <i class='bx bx-filter'></i>
        <i class='bx bx-search'></i>
    </div>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Order Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if ($result_cart_min->num_rows > 0) {
                while ($row_cart_min = $result_cart_min->fetch_assoc()) {
        ?>
            <tr>
                <td>
                    <img src="images/user.png">
                    <p><?php echo $row_cart_min["username"]; ?></p>
                </td>
                <td><?php echo $row_cart_min["data_encomenda"]; ?>14-08-2023</td>
                <td><?php 
                if($row_cart_min['encomenda_status'] == 2){
                    echo '<span class="status pending">Pendente</span>';
                } else if ($row_cart_min['encomenda_status'] == 3) {
                    echo '<span class="status completed">Sucesso</span>';
                } else {
                    echo '<span class="status process">Cancelada</span>';
                }
            ?></td>
            </tr>
        </tbody>
        <?php 
                }
            } 
        ?>
    </table>
</div>