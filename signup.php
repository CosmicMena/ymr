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
    <link rel="stylesheet" href="styles/style.css">

    <title>Sign In YMR</title>
  </head>
  <body>
    <div class="login-page">
    <?php
        session_start();
        include "config.php";

        if (isset($_POST['register'])) {

            $name = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];


            $check = "select * from users where email='".$email."'";
            $res = mysqli_query($conn, $check);
            $passwd = password_hash($pass, PASSWORD_DEFAULT);
            $key = bin2hex(random_bytes(12));

            $rule = 1;
            $data = date('Y-m-d');
            if (mysqli_num_rows($res) > 0) {
                echo " 
                <style>
                .message-sec{
                    display: flex;
                }
                </style>
                <div class='message-sec'>
                    <div class='message'>
                        <p>Este email já está sendo usado, Por favor insira outro!</p>
                        <br>
                        <a href='javascript:self.history.back()'>
                            Tentar de Novo
                        </a>
                    </div>
                </div>";
            } else {

                if ($pass === $cpass) {

                    $sql = "INSERT INTO users (username, email, passwd, id_rule, data_criacao) 
                    VALUES 
                    (
                        '$name',
                        '$email',
                        '$passwd',
                        '$rule',
                        '$data'
                    )";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {

                        echo "<style>
                        .message-sec{
                            display: flex;
                        }
                        </style>
                        <div class='message-sec'>
                            <div class='message'>
                                <p>Conta Criada Com Sucesso!</p>
                                <br>
                                <a href='login.php'>
                                    Faça Login
                                </a>
                            </div>
                        </div>";

                    } else {

                        echo 
                        "<style>
                        .message-sec{
                            display: flex;
                        }
                        </style>
                        <div class='message-sec'>
                            <div class='message'>
                                <p>(O erro tá memo aqui) Este email já está sendo usado, Por favor insira outro!</p>
                                <br>
                                <a href='javascript:self.history.back()'>
                                    Tentar de Novo
                                </a>
                                <p>Nome $name</p>
                                <p>Email $email</p>
                                <p>Senha Hash $passwd</p>
                                <p>Rule $rule</p>
                                <p>Data $data</p>
                            </div>
                        </div>";
                    }

                } else {
                    echo 
                    "<style>
                    .message-sec{
                        display: flex;
                    }
                    </style>
                    <div class='message-sec'>
                        <div class='message'>
                            <p>Passwords incompatíveis!</p>
                            <br>
                            <a href='signup.php'>
                                Tente de Novo
                            </a>
                        </div>
                    </div>";
                }
            }
        } else {

    ?>
    <div class="login-page">
        <div class="login-container">
            <div class="left-login-container">
                <h2>Cadastro</h2>
                <span>Preencha todos os campos</span>
                <form method="post" class="login-form">
                    <div class="input-wrap">
                        <input type="text" name="username" id="name" autocomplete="off" required class="input-login">
                        <label for="name">Nome</label>
                        <i class="icon fa-solid fa-user"></i>
                    </div>
                    <div class="input-wrap">
                        <input type="email" name="email" id="email" autocomplete="off" required class="input-login">
                        <label for="email">E-mail</label>
                        <i class="icon fas fa-envelope"></i>
                    </div>
                    <div class="input-wrap">
                        <input class="input-login password" type="password" name="pass" id="password" autocomplete="off" required>
                        <label for="password">Password</label>
                        <i class="fa-solid fa-eye icon toggle"></i>
                    </div>
                    <div class="input-wrap">
                        <input class="input-login" type="password" name="cpass" id="password1" autocomplete="off" required>
                        <label for="password1">Confirmar Password</label>
                        <i class="icon fa-solid fa-eye"></i>
                    </div>
                    <span class="a-span">Já tem uma conta? <a href="login.php">Faça Login</a></span>
                    <div class="input-wrap-enviar">
                        <input type="submit" value="Criar Conta" name="register">
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