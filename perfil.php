<?php
session_start();

include("config.php");
$query = 'SELECT * FROM users WHERE id_user = '.$_SESSION['id'].'';

if (isset($_POST['update'])){
    $tel = $_POST["tel"];
    $pais = $_POST["pais"];
    $canal = $_POST["canal"];
    $comany = $_POST["company"];
    $update = "UPDATE users SET telefone ='$tel', pais ='$pais', canal ='$canal', company ='$comany' WHERE id_user = ".$_SESSION['id']."";

    $resultupdate = mysqli_query($conn, $update);

    if ($resultupdate) {
        echo "<style>
                .message-sec{
                    display: flex;
                }
                </style>
                <div class='message-sec'>
                <div class='message'>
                    <p>Informações enviadas com sucesso</p>
                    <br>
                    <a href='perfil.php'>
                        Continuar
                    </a>
                </div>
                </div>";
    }
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
    <title>Minha Conta</title>
</head>
<body>
    <header>
        <?php
            include('assets/nav.php');
        ?>
    </header>
    <main class="profile-main">  
        <div class="content-profile">
            <div class="profile-options">
                <div class="userprofile">
                    <div class="profile-image">
                        <img src="images/perfil.png">
                    </div>
                    <div class="profile-text">
                        <h3>Nome de Usuário<br></h3>
                        <span>username@gmail.com</span>
                    </div>
                </div>
                <ul class="profile-data">
                    <?php
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result)
                    ?>
                    <li>Conta Criada em <span><?php echo date('d-m-Y', strtotime($row['data_criacao'])); ?></span></li>

                    <?php
                        $userId = ($_SESSION['id']);
                        $sql_count1 = "SELECT COUNT(*) AS total_registros FROM tb_carrinho where id_user = '$userId'  and encomenda_status = '1'";
                        $result1 = $conn->query($sql_count1);
                        if ($result1) {
                            $rowcarrinho = $result1->fetch_assoc();
                            $total_registros = $rowcarrinho['total_registros'];
                        } 

                        $sql_count2 = "SELECT COUNT(*) AS total_registros FROM tb_carrinho where id_user = '$userId'  and encomenda_status = '2'";
                        $result2 = $conn->query($sql_count2);
                        if ($result2) {
                            $rowcarrinho2 = $result2->fetch_assoc();
                            $total_registros2 = $rowcarrinho2['total_registros'];
                        } 

                        $sql_count3 = "SELECT COUNT(*) AS total_registros FROM tb_carrinho where id_user = '$userId'  and encomenda_status = '3'";
                        $result3 = $conn->query($sql_count3);
                        if ($result3) {
                            $rowcarrinho3 = $result3->fetch_assoc();
                            $total_registros3 = $rowcarrinho3['total_registros'];
                        } 
                    ?>
            
                    <li><span><?php echo $total_registros3;?></span> compras confirmadas</li>
                    <li><span><?php echo $total_registros;?></span> produtos no carrinho</li>
                    <li><span><?php echo $total_registros2;?></span> pedidos pendentes</li>
                    <li>Último acesso em <span><?php echo date('d-m-Y', strtotime($row['acesso'])); ?></span></li>
                </ul>
                <ul>
                    <li><a class="inactive" title="Opção Bloaqueda de momento"><i class="fa-solid fa-key"></i> Mudar Senha</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
            <div class="profile-info">
                <h2>Dados de Usuário</h2>
                <span>Termine de o seu cadastro</span>
                <form method="post" class="login-form">
                    <div class="double-input">
                        <div class="input-wrap">
                            <input type="text" name="username" id="name" autocomplete="off" required class="input-login" value="<?php
                            if (isset($_SESSION['username'])) {
                                $usernamelogado = trim(($_SESSION['username']));
                                echo trim($usernamelogado);
                            }
                        ?>">
                            <label for="name">Nome</label>
                            <i class="icon fa-solid fa-user"></i>
                        </div>
                        <div class="input-wrap">
                            <input type="email" name="email" id="email" autocomplete="off" required class="input-login" value="
                        <?php    
                            if (isset($_SESSION['username'])) {
                                $useremaillogado = ($_SESSION['email']);
                                echo trim($useremaillogado);
                            }
                        ?>
                    ">
                            <label for="email">E-mail</label>
                            <i class="icon fas fa-envelope"></i>
                        </div>
                    </div>
                    
                    <div class="input-wrap">
                        <input type="text" name="tel" id="tel" autocomplete="off" required class="input-login" value="<?php
                        echo $row['telefone'];?>">
                        <label for="tel">Telefone</label>
                        <i class="icon fa-solid fa-phone"></i>
                    </div>
                    <div class="input-wrap">
                        <label for="pais" class="labelatc">País</label>
                        <select name="pais" id="pais" autocomplete="off" class="input-login act">
                            <option value="<?php echo $row['pais'];?>"><?php echo $row['pais'];?></option>
                            <option value="Angola">Angola</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Moçambique">Moçambique</option>
                            <option value="Guiné Equatorial">Guiné Equatorial</option>
                            <option value="Namíbia">Namíbia</option>
                            <option value="Zâmbia">Zâmbia</option>
                            <option value="República Democrática do Congo">República Democrática do Congo</option>
                            <option value="Namíbia">Namíbia</option>
                            <option value="Namíbia">Namíbia</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="China">China</option>
                            <option value="Japão">Japão</option>
                            <option value="Alemanha">Alemanha</option>
                            <option value="Índia">Índia</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <i class="icon fas fa-solid fa-globe"></i>
                    </div>
                    <div class="input-wrap">
                        <label for="canal" class="labelatc">Forma de Comunicação preferida</label>
                        <select name="canal" id="canal" autocomplete="off" class="input-login act">
                            <option value="whatsapp">Whatsapp</option>
                            <option value="email">E-mail</option>
                        </select>
                        <i class="icon fa-brands fa-telegram"></i>
                    </div>
                    <div class="input-wrap">
                        <input type="text" name="company" id="company" autocomplete="off" class="input-login" value="<?php
                        echo $row['company'];?>">
                        <label for="company">Empresa (Opcional)</label>
                        <i class=" icon fa-solid fa-building"></i>
                    </div>
                    <div class="input-wrap-enviar">
                        <input type="submit" value="Enviar Dados" name="update">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        //FOOTER 
        include('assets/footer.php');
    ?>


<script src="js/script.js"></script>

</body>
</html>