<?php
include('config.php');

if (isset($_GET['produto']) && isset($_GET['category'])) {
    
    $produto = $_GET['produto'];
    $categoria = $_GET['category'];

    $sql_produto = "SELECT * FROM tb_produtos WHERE produto_name = '". $produto ."'";


    $result_produto = $conn->query($sql_produto);
    $row = $result_produto->fetch_assoc();

    $id_produto = $row['id_produto'];
    $produto_name = $row['produto_name'];
    $produto_img = $row['produto_img'];
    $produto_preco = $row["preco_produto"];
    $description = $row["desc_produto"];
    $stock = $row["stock_produto"];
}

if (isset($_GET['categoria']) && isset($_GET['quantidade']) && isset($_GET['idProduto'])) {
    $idProduto = $_GET['idProduto'];
    $quantidade = $_GET['quantidade'];
    $categoria = $_GET['categoria'];

    $sql_product = "SELECT tb_produtos.*, tb_categ.category_name
                    FROM tb_produtos
                    INNER JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
                    WHERE tb_produtos.id_produto = '". $idProduto ."'";

    $result_product = $conn->query($sql_product);
    $row = $result_product->fetch_assoc();
    
    $id_produto = $row['id_produto'];
    $produto_name = $row['produto_name'];
    $produto_img = $row['produto_img'];
    $produto_preco = $row["preco_produto"];
    $description = $row["desc_produto"];
    $stock = $row["stock_produto"];
    

    echo '<style>.produto-card-pop-up { display: flex; }</style>';
} else {
    echo '<style>.produto-card-pop-up { display: none; }</style>';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos CSS -->

    <link rel="stylesheet" href="styles/style.css">

    <!-- Icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontes do google-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include('assets/nav.php');
        ?>
    </header>
    <main>

        
        <section class="main-body">
            <div class="main-sections">
                <?php

                    include('assets/produto-section.php');
                
                    include('assets/min-screen-newsletter.php');
                ?>
            </div>
            <aside>
                <div class="aside-box-filter">
                    <div class="aside-box-filter-header">
                        <h3>FIltrar Resultados</h3>
                    </div>
                    <div class="aside-box-filter-body">
                        <?php include('assets/asides/aside-pesquisar.php')?>
                    </div>
                    <div class="aside-box-filter-header">
                        <h3>Relativos a pesquisa</h3>
                    </div>
                    <div class="aside-box-filter-body aside-box-filter-body1">
                        <?php 
                           
                            /*
                            ==========================================================================
                            ==========================================================================
                            ==========================================================================
                            ==========================================================================
                            ===================== MELHORAR ESSA CONSULATA PARA =======================
                            =============== RETORNAR PRODUTOS COM DESCRIÇÃO PARECIDA==================
                            ==========================================================================
                            ==========================================================================
                            ==========================================================================
                            ==========================================================================
                            
                            */
                            $sql_relativo = "SELECT * FROM tb_produtos WHERE id_produto <> $id_produto ORDER BY LEVENSHTEIN(desc_produto, '$description') LIMIT 1";
                            
                            $result_relativo = $conn->query($sql_relativo);
                            $row_relativo = $result_relativo->fetch_assoc();
                            
                            $id_produto1 = $row_relativo['id_produto'];
                            $produto_name1 = $row_relativo['produto_name'];
                            $produto_img1 = $row_relativo['produto_img'];
                            $produto_preco1 = $row_relativo["preco_produto"];

                        ?>
                        <div class="produtos-item">
                            <div class="produto-item-img">
                                <img src="<?php echo $produto_img1 ;?>" alt="">
                                <div class="produto-item-qtd">
                                    <p>QTD: <input type="number" name="" id="" value="1"></p>
                                </div>
                                <div class="produto-item-img-actions">
                                <?php 
                                    echo '<a href="produto.php?produto=' . urlencode($produto_name1) . '&category=' . urlencode($categoria) . '" class="prod-btn" title="Ver Mais"><i class="fa-solid fa-eye"></i></a>';
                                ?>      
                                </div>
                            </div>
                            <div class="produto-item-body">
                                <span><?php echo $categoria;?></span>
                                <h2><span>AO </span><?php echo $produto_preco1;?><span>.00</span></h2>
                                <h3><?php echo $produto_name1;?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </section>
    </main>
    <?php
        //FOOTER 
        include('assets/footer.php');

        //ADDED TO CART POP-UP
        include('assets/pop-ups/produto-cart-pop-up.php');
    ?>


<script>
    function adicionarAoCarrinho1(idProduto) {
        var quantidade = document.getElementById("quantidadeInput").value;

        var url1 = "php/add-carrinho2.php?idProduto=" + idProduto + "&quantidade=" + quantidade;

        window.location.href = url1;
    }
</script>
<script src="js/script.js"></script>
</body>
</html>
