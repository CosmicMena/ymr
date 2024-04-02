

<?php
session_start();

include("config.php");


    if (isset($_GET['categoria'])) {
        $categoriaSelecionada = urldecode($_GET['categoria']);
    } else {
        echo 'Nenhuma categoria selecionada.';
    }


    require_once('config.php');

    if (isset($_GET['categoria']) && isset($_GET['idProduto']) && isset($_GET['quantidade'])) {
        $idProduto = $_GET['idProduto'];
        $quantidade = $_GET['quantidade'];

        $categoriaSelecionada = urldecode($_GET['categoria']);

        $sql_product = "SELECT tb_produtos.*, tb_categ.category_name
                        FROM tb_produtos
                        INNER JOIN tb_categ ON tb_produtos.id_categories = tb_categ.id_categories
                        WHERE tb_produtos.id_produto = '". $idProduto ."'";
    
        $result_product = $conn->query($sql_product);
        $row = $result_product->fetch_assoc();
    
        $produto_name = $row['produto_name'];
        $produto_img = $row['produto_img'];
        $produto_preco = $row["preco_produto"];
        $categoria = $row["category_name"];
    
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

    <link rel="shortcut icon" href="images/svg.png" type="image/x-icon">
    <title><?php echo $categoriaSelecionada; ?> - YMR Industrial</title>
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
                        <h1><a href="home.php">Categorias</a> > <?php echo $categoriaSelecionada; ?></h1>
                    </div>
                    <div class="produtos-body">
                    <?php
                        include('assets/produtos-section.php');
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
                        <?php include('assets/asides/aside-pesquisar.php')?>
                    </div>
                    <div class="aside-box-filter-header">
                        <h3>Categorias</h3>
                    </div>
                    <?php include("assets/asides/aside-categories.php");?>
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
    function adicionarAoCarrinho(idProduto, userid) {
        var quantidade = document.getElementById("quantidadeInput").value;

        var url = "php/add-carrinho.php?idProduto=" + idProduto + "&quantidade=" + quantidade + "&userid=" + userid;
 
        window.location.href = url;
    }
</script>
<script src="js/script.js"></script>

</body>
</html>