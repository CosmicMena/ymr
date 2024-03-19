<?php
  session_start();
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
    <link rel="stylesheet" href="styles/style.css">

    <title>Login YMR</title>
  </head>
  <body>
    <div class="login-page">
    <?php
      include "config.php";

      if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "select * from users where email='$email'";

        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);

          $password = $row['passwd'];

          $decrypt = password_verify($pass, $password);


          if ($decrypt) {
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id_rule'] = $row['id_rule'];


            $userId = $row['id'];
            $dataAtual = date('Y-m-d');
            $atualizarData = "UPDATE users SET acesso = '$dataAtual' WHERE id = $userId";
            mysqli_query($conn, $atualizarData);
            
            header("location: home.php");

          } else {
            echo " 
            <style>
              .message-sec{
                display: flex;
              }
            </style>
            <div class='message-sec'>
              <div class='message'>
                <p>Password Incorreta!</p>
                <br>
                <a href='login.php'>
                  Tentar de Novo
                </a>
              </div>
            </div>";
            }
        } else {
          
          echo " 
            <style>
              .message-sec{
                display: flex;
              }
            </style>
            <div class='message-sec'>
              <div class='message'>
                <p>Email Incorreto!</p>
                <br>
                <a href='login.php'>
                  Tentar de Novo
                </a>
              </div>
            </div>";

        }


      } else {
    ?>
    <div class="login-page">
      <div class="login-container">
        <div class="left-login-container">
          <h2>Login</h2>
          <span>Faça Login com</span>
          <div class="social-midia-sec">
            <a href="https://www.facebook.com/ymr.industrial.9?_rdc=2&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.facebook.com/ymr.industrial.9?_rdc=2&_rdr" target="_blank"><i class="icon fas fa-envelope"></i></a>
          </div>
          
          <span>Fazer Login com Conta Registrada</span>
          <form action="login.php" method="post" class="login-form">
            <div class="input-wrap">
                <input type="email" name="email" id="email" autocomplete="off" required class="input-login">
                <label for="email">E-mail</label>
                <i class="icon fas fa-envelope"></i>
            </div>
            <div class="input-wrap">
                <input type="password" name="password" id="password" autocomplete="off" required class="input-login">
                <label for="password">Password</label>
                <i class="icon fa-solid fa-lock"></i>
            </div>
            <span class="a-span"><a href="forgot.php">Esqueci-me da Password</a></span>
            <span class="a-span">Náo tem uma conta? <a href="signup.php">Cadastra-se</a></span>
            <div class="input-wrap-enviar">
                <input type="submit" value="Entrar" name="login">
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
  </body>
</html>