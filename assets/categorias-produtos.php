<?php
    require_once('config.php');

    $sql_category = "SELECT * FROM tb_categ";
    $result_category = $conn->query($sql_category);

?>

<div class="tipoProdutos" id="tipoProdutos">
    <?php
        if ($result_category->num_rows > 0) {
            $contador = 0;
            
            if (isset($_GET['categorias'])) {
                $limite = $_GET['categorias'];
            } else {
                $limite = 8;
            }
            while ($row = $result_category->fetch_assoc()) {
                // Exibir os dados
                if ($contador > $limite) break;
                echo '<a href="produtos.php?categoria=' . urlencode($row["category_name"]) . '">
                        <div class="produto">
                            <h3>' . $row["category_name"] . '</h3>
                            <img src="' . $row["category_img"] . '">
                        </div>
                    </a>';
                $contador++;
            }
            if (!isset($_GET['categorias'])) {
                echo '<a href="?categorias=30#tipoProdutos" class="vermaisbtn">
                        <h1>Ver mais <i class="fa-solid fa-angle-right"></i></h1>
                    </a>';
            }
            
        } else {
            echo "Nenhum resultado encontrado na tabela.";
        }
    ?>
    
    
</div>
