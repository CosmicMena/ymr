<?php
    include("../config.php");
    
    session_start();

    $queryCateg = "SELECT * FROM tb_categ";
    $resultCateg = $conn->query($queryCateg);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Icons -->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontes do google-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Sign In YMR</title>
  </head>
  <body>
    <?php
        if (isset($_POST['Cadastrar'])) {

            $produto_name = $_POST['nomeproduto'];
            $produto_img = "images/produtos/".$_POST['imagem'];
            $stock_produto = $_POST['stock'];
            $preco_produto = $_POST['preco'];
            $desc_produto = $_POST['desc_produto'];
            $id_categories = $_POST['categoria'];

            $sql = "INSERT INTO tb_produtos
            (produto_name, produto_img, preco_produto, desc_produto, stock_produto, id_categories) VALUES 
            ('". $produto_name ."',
            '". $produto_img ."',
            '". $preco_produto ."',
            '". $desc_produto ."',
            '". $stock_produto ."',
            '". $id_categories ."')";

            $result = mysqli_query($conn, $sql);

            if ($result) {

                echo "
                <style>
                    .message-sec{
                        display: flex;
                    }
                </style>
                <div class='message-sec'>
                    <div class='message'>
                        <p>
                            Produto adicionado com sucesso
                        </p>
                        <br>
                        <a href='index.php'>
                            Voltar à área de Admin
                        </a>
                    </div>
                </div>";
            } else {
                echo 'Deu algum erro memo!';
            }

        } else { 
        ?>
        <div class="login-page">
            <div class="login-container">
                <div class="left-login-container">
                    <h2>Cadastro de Produto</h2>
                
                    <span>Preencha todos os campos</span>
                    <form method="post" class="login-form">
                        <div class="input-wrap">
                            <input type="text" name="nomeproduto" id="produto" autocomplete="off" required class="input-login">
                            <label for="produto">Nome do Produto</label>
                            <i class="icon fa-solid fa-calendar-minus"></i>
                        </div>
                        <div class="input-wrap">
                            <input type="file" id="file-upload" class="input-file" name="imagem" value="Imagem do produto"/>
                        </div>
                        <div class="inline-input-wrap">
                            <div class="input-wrap">
                                <input type="text" name="preco" id="preco" autocomplete="off" required class="input-login">
                                <label for="preco">Preço do Produto</label>
                                <i class="icon fa-solid fa-dollar-sign"></i>
                            </div>
                            <div class="input-wrap">
                                <input type="text" name="stock" id="stock" autocomplete="off" required class="input-login">
                                <label for="stock">Qtd. em stock</label>
                                <i class="icon fa-solid fa-database"></i>
                            </div>
                        </div>
                        <div class="input-wrap">
                            <input type="text" name="desc_produto" id="desc" autocomplete="off" required class="input-login">
                            <label for="desc">Descrição do Produto</label>
                            <i class="icon fa-solid fa-comment"></i>
                        </div>
                        
                        <div class="input-wrap input-wrap-select">
                            <label for="categoria">Categoria</label>
                            <select name="categoria" id="categoria">
                                <?php
                                    if ($resultCateg) {
                                        while ($rowc = $resultCateg->fetch_assoc()) {
                                            echo '<option value="' . $rowc['id_categories'] . '">' . $rowc['category_name'] . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input-wrap-enviar">
                            <input type="submit" value="Cadastrar" name="Cadastrar">
                        </div>
                    </form>
                </div>
                <div class="right-login-container">
                    <div class="text-box">
                        <h1>YMR INDUSTRIAL</h1>
                        <p>O Que precisa está à distância de um click</p>
                    </div>
                </div>
            </div> 
        </div>
    <?php
      }
    ?>
    <script>
        const toggle = document.querySelector(".toggle"),
        input = document.querySelector(".password");
        toggle.addEventListener("click", () => {
            if (input.type === "password") {
                input.type = "text";
                toggle.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                input.type = "password";
            }
        })
    </script>
  </body>
</html>