<?php
    require_once('config.php');

    if (isset($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];    


        $sql_product = "SELECT tb_produtos.*, tb_categ.category_name
        FROM tb_produtos
        LEFT JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
        WHERE tb_produtos.produto_name LIKE '%$pesquisa%'";
    
        $result_product = $conn->query($sql_product);

    
    }

    if (isset($_GET['pesquisa']) && isset($_GET['idProduto']) && isset($_GET['quantidade']) && isset($_GET['categoria'])) {
        $pesquisa = $_GET['pesquisa'];    
        $quantidade = $_GET['quantidade'];


        $sql_product2 = "SELECT tb_produtos.*, tb_categ.category_name
        FROM tb_produtos
        LEFT JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
        WHERE tb_produtos.produto_name LIKE '%$pesquisa%'";
    
        $result_product2 = $conn->query($sql_product2);
        $row2 = $result_product2->fetch_assoc();

        $idProduto = $row2['id_produto'];
        $produto_name = $row2['produto_name'];
        $produto_img = $row2['produto_img'];
        $produto_preco = $row2["preco_produto"];
        $categoria = $row2["category_name"];
    
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


    <title><?php echo $pesquisa; ?> - YMR Industrial</title>
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
                <div class="produtos">
                    <div class="produtos-header">
                        <h1><a href="home.php">Categorias</a> > Pesquisa por: <?php echo $pesquisa; ?></h1>
                    </div>
                    <div class="produtos-body">
                    <?php
                        include('assets/produtos-section-pesquisa.php');

                    ?>
                    </div>
                </div>
                <div class="min-screen-newsletter">
                    <div>
                        <h2>Assine a nossa Newsletter</h2>
                        <form action="#">
                            <input type="email" name="email" placeholder="anyone@domain.com">
                            <input type="submit" value="Enviar">
                        </form> 
                    </div>
                    <i class="fa-regular fa-paper-plane"></i>
                </div>
            </div>
            <aside>
                <div class="aside-box-filter">
                    <div class="aside-box-filter-header">
                        <h3>FIltrar Resultados</h3>
                    </div>
                    <div class="aside-box-filter-body">
                        <form action="$">
                            <div class="input-box">
                                <input type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar por Ferramentas">
                                <i><label for="enviar"><i class="fa-solid fa-magnifying-glass"></i></label></i>
                                <input type="hidden" name="enviar" id="enviar">
                            </div>
                            
                            
                            <label for="">Preço: </label>
                            <select name="" id="">
                                <option value="">0 - 1000</option>
                                <option value="">1000 - 2000</option>
                                <option value="">2000 - 3000</option>
                                <option value="">3000 - 4000</option>
                            </select>
                            <input type="hidden" name="enviar">
                        </form>
                    </div>
                    <div class="aside-box-filter-header">
                        <h3>Categorias</h3>
                    </div>
                    <div class="aside-box-filter-body">
                        <ul>
                            <li><a href="#">Adhesives, Sealants & Tape</a></li>
                            <li><a href="#">Paint, Equipment & Supplies</a></li>
                            <li><a href="#">Safety Equipment</a></li>
                            <li><a href="#">Material Handling</a></li>
                            <li><a href="#" class="active">Test instruments</a></li>
                            <li><a href="#">Lubrificants</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Tools</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Pumps</a></li>
                            <li><a href="#">Lab Supplies</a></li>
                            <li><a href="#">Hydraulics</a></li>
                            <li><a href="#">Fasteners</a></li>
                        </ul>
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

    <!--Script do Java Script-->
    
<script>
    function adicionarAoCarrinho(idProduto, pesquisa) {
        var quantidade = document.getElementById("quantidadeInput").value;
        var urlretorno = "../pesquisa.php?pesquisa=" + pesquisa;
        var url = "php/add-carrinho3.php?idProduto=" + idProduto + "&quantidade=" + quantidade + "&urlretorno=" + urlretorno;

        window.location.href = url;
    }
</script>
<script src="js/script.js"></script>

</body>
</html>