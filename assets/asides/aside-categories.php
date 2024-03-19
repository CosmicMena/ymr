<?php
    require_once('config.php');

    $sql_category = "SELECT * FROM tb_categ";
    $result_category = $conn->query($sql_category);

?>
<div class="aside-box-filter-body">
    <?php
        if ($result_category->num_rows > 0) {
    ?>
        <ul>
    <?php
            while ($row = $result_category->fetch_assoc()) {
                echo '<li><a href="produtos.php?categoria=' . $row["category_name"] . '"';
                if (isset($_GET['categoria'])){
                    $categoriaSelecionada = $_GET['categoria'];
                    if ($categoriaSelecionada == $row["category_name"]){
                        echo 'class="active"';
                    }
                }
                echo '>' . $row["category_name"] . '</a></li>';
            }
            
        } else {
            echo "Nenhum resultado encontrado na tabela.";
        }
    ?>
        </ul>
</div>