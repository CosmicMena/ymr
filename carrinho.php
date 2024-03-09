<?php
session_start();

include("config.php");

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
        <?php

            if (isset($_SESSION['username'])) {
                $userId = ($_SESSION['id']);
                $sql_cart = "SELECT * FROM tb_carrinho where id_user = '$userId'";
            } else {
                header("location: home.php");
            }

            $result_cart = $conn->query($sql_cart);

        ?>

        
        <section class="main-body">
            <div class="main-sections">
                <div class="produtos">
                    <div class="produtos-header">
                        <h1>Meu Carrinho</h1>
                    </div>
                    <div class="produto-body produto-body-carrinho">
                        <table>
                            <thead>
                                <tr>
                                    <th>img</th>
                                    <th>Nome do Produto</th>
                                    <th>Quantidade</th>
                                    <th>Preço unitário</th>
                                    <th>Total</th>
                                    <th>...</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if ($result_cart->num_rows > 0) {
                                    while ($row = $result_cart->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td class="img-td">
                                                <img src="<?php echo $row["produto_img"]; ?>" alt="">
                                            </td>
                                            <td class="texto">
                                                <p style="font-weight: 400;"><?php echo $row["category_name"]; ?></p>
                                                <p><?php echo $row["produto_name"]; ?></p>
                                            </td>
                                            <td>
                                                <div class="action">
                                                    <p class="quantidade">QTD: <input type="number" name="" id="" value="<?php echo $row["quantidade_produto"]; ?>"></p>
                                                </div>
                                            </td>
                                            <td><p><?php echo $row["preco_produto"]; ?></p></td>
                                            <td><p><?php echo $row["quantidade_produto"] * $row["preco_produto"] ; ?></p></td>
                                            <td class="cart-actions">
                                                <?php 
                                                    echo '<a href="php/rm-carrinho.php?produtoName='. $row['produto_name'] .'" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Remover</a>';
                                                ?>
                                            </td>
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
                                ?>
                                <tr class="footer-tr">
                                    <td colspan="6" class="footer-td"><a href="home.html" class="btn btn-success">Cofirmar Compra <i class="fa-solid fa-cart-shopping"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="produtos-header produtos-header2">
                            <p><a href="home.php">Continuar comprando <i class="fa-solid fa-cart-shopping"></i></a></p>
                        </div>    
                    </div>
                    
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
    <footer>
        <div class="container">
            
            <div class="links">
                <h3>Principais links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">categorias</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Fale com a Gente</a></li>
                    <li><a href="#">Minha conta</a></li>
                    <li><a href="#">Onde nos encontrar</a></li>
                    <li><a href="#">Carrinho</a></li>
                </ul>
            </div>
            
            <div class="links">
                <h3>Opções de usuário</h3>
                <ul>
                    <li><a href="#">Meu Carrinho</a></li>
                    <li><a href="#">Acompanhe o seu pedido</a></li>
                    <li><a href="#">Suporte de usuário</a></li>
                    <li><a href="#">Minha conta</a></li>
                    <li><a href="#">Informações de usuário</a></li>
                </ul>
            </div>
            <div class="links">
                <h3>Sobre da Empresa</h3>
                <ul>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Preços</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Contacte-nos</a></li>
                    <li><a href="#">Onde nos encontrar?</a></li>
                    <li><a href="#">Sobre Nós</a>
                    <li><a href="#">Por que nos escolher?</a></li>
                </ul>
            </div>
            <div class="contacte-nos">
                <h3>Info de Contacto</h3>
                <ul class="info">
                    <li>
                        <span class="icon icon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span>Centralidade do Kilamba, Bloco X, Edifício nº 34, Apto nº 31, Luanda/Angola. 
                        </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <p><a href="tel:924178899">(+244) 997 133 553</a>
                        <br><a href="tel:93449244">(+244) 937 590 360</a>
                        <br><strong><a href="tel:93449244">(+244) 222 719 152</a></strong></p>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span><a href="mailto:negrista.contacto@gmail.com">comercial@ymrindustrial.com</a></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span><a href="mailto:negrista.contacto@gmail.com">ymr@ymrgroup.com</a></span>
                    </li>
                </ul>
                <div class="redes">
                    <div class="contact-icons">
                        <a href="https://www.facebook.com/ymr.industrial.9?_rdc=2&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/ymrindustrial/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://web.whatsapp.com/send?phone=937%20590%20360"  class="extend" target="_blank"><i class="fa-brands fa-whatsapp"></i></i></a>
                        <a href="https://www.linkedin.com/company/ymr-industrial/about/" class="extend" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>