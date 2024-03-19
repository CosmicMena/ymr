<?php
    require_once('config.php');

    $sql_category = "SELECT * FROM tb_categ";
    $result_category = $conn->query($sql_category);

?>
<nav class="nav2">
    <ul>
        <li><span class="more"><span>Todos Produtos </span><i class="fa-solid fa-chevron-down"></i></span>
            <?php if ($result_category->num_rows > 0) { ?>
            <ul>
            <?php
                    while ($row = $result_category->fetch_assoc()) {
                        echo '<li><a href="produtos.php?categoria=' . $row["category_name"] . '">' . $row["category_name"] . '</a></li>';
                    }
                } else {
                    echo "Nenhum resultado encontrado na tabela.";
                }
            ?>
            </ul>
        </li> 
    </ul>
    <ul class="large-screen-nav2">
        <div class="search-box">
            <form action="pesquisa.php" method="get">
                <input type="text" placeholder="Pesquisar por ferramentas" name="pesquisa">
                <button type="submit" id="submeter" name="submeter"></button>
                <label for="submeter"><i class="fa-solid fa-magnifying-glass"></i></label>
            </form>
        </div> 
    
        <li><a href="#">Fixadores</a></li>
        <li><a href="#">Suprimentos de laboratório</a></li>
        <li><a href="#">Lubrificantes e Combustível</a></li>
    </ul>
    <ul class="responsive-nav2">
        <div class="search-box">
            <form action="pesquisa.php" method="get">
                <input type="text" placeholder="Pesquisar por ferramentas" name="pesquisa">
                <button type="submit" id="submeter" name="submeter"></button>
                <label for="submeter"><i class="fa-solid fa-magnifying-glass"></i></label>
            </form>
        </div> 
    </ul>
    
</nav>