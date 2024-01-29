<?php
    require_once('config.php');

    $sql_category = "SELECT * FROM tb_categ";
    $result_category = $conn->query($sql_category);

?>

<div class="tipoProdutos">
    <?php
        if ($result_category->num_rows > 0) {
            while ($row = $result_category->fetch_assoc()) {
                // Exibir os dados
                echo '<a href="produtos.php?categoria=' . urlencode($row["category_name"]) . '">
                        <div class="produto">
                            <h3>' . $row["category_name"] . '</h3>
                            <img src="' . $row["category_img"] . '">
                        </div>
                    </a>';
            }
        } else {
            echo "Nenhum resultado encontrado na tabela.";
        }
    ?>
    
    
    <a href="#">
        <div class="produto ver-mais-produtos">
            <h1>Ver mais <i class="fa-solid fa-angle-right"></i></h1>
        </div>
    </a>
</div>