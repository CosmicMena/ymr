
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
    <link rel="stylesheet" href="../style.css">

    <title>Sign In YMR</title>
</head>
<body>
    <?php
        include('../../config.php');
        if (isset($_GET["idProduto"])) {
            $idProduto = $_GET["idProduto"];
            echo "
                <style>
                    .message-sec{
                        display: flex;
                    }
                </style>
                <div class='message-sec'>
                    <div class='message'>
                        <p>
                            Tem a certeza de que pretende deletar o produto 
                        </p>
                        <br>
                        <a href='../index.php'>
                            Não
                        </a>
                        <a href='?deletarproduto=$idProduto'>
                            sim
                        </a>
                    </div>
                </div>";
        } 
        if (isset($_GET['deletarproduto'])){
            $idProduto = $_GET["deletarproduto"];
            $sql_product = "DELETE FROM `tb_produtos` WHERE id_produto = $idProduto";
            $result_product = $conn->query($sql_product);
            if ($result_product) {
                header("location: ../");
            }
        }
    ?>
</body>