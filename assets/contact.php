<div class="contact_s">
    <div class="content">
        <?php
            include("config.php");
            if (isset($_POST['enviar_message'])) {
                $name = $_POST['username'];
                $email = $_POST['email'];
                $mensagem = $_POST['message'];
                $data = date('Y-m-d');

                $sqlInsert = "INSERT INTO messages (username,email,data_message,mensagem) values('$name','$email','$data','$mensagem')";

                $result = mysqli_query($conn, $sqlInsert);

                if ($result) {

                    echo "<style>
                    .message-sec{
                        display: flex;
                    }
                    </style>
                    <div class='message-sec'>
                        <div class='message'>
                            <p>
                                Mensagem Enviada Com Sucesso! <br>
                                Obrigado Pelo Feedback Sr(a) ". $name ."!
                            </p>
                            <br>
                            <a href='home.php'>
                                Continuar
                            </a>
                        </div>
                    </div>";

                }
            }
        ?>
        <div class="texto">
            <h3>Deixe uma mensagem</h3>
            <p>Estamos aqui para o atender</p>
            <form action="home.php" method="post">
                <div class="input-wrap">
                    <input type="text" name="username" id="nome" autocomplete="off" required class="input-contact" value="
                        <?php
                            if (isset($_SESSION['username'])) {
                                $usernamelogado = trim(($_SESSION['username']));
                                echo $usernamelogado;
                            }
                        ?>
                    ">
                    <label for="nome">Digite o seu nome</label>
                    <i class="icon fas fa-user"></i>
                </div>
                <div class="input-wrap">
                    <input type="email" name="email" id="email" autocomplete="off" required autocomplete class="input-contact ic2" value="
                        <?php    
                            if (isset($_SESSION['username'])) {
                                $useremaillogado = ($_SESSION['email']);
                                echo trim($useremaillogado);
                            }
                        ?>
                    ">
                    <label for="email">Digite o seu e-mail</label>
                    <i class="icon fas fa-envelope"></i>
                </div>
                <div class="input-wrap textarea">
                    <input type="textarea" name="message" id="mensagem"  autocomplete="off" required class="input-contact ic3">
                    <label for="mensagem">Deixe uma mensagem</label>
                    <i class="icon fas fa-comment"></i>
                </div>
                <div class="input-wrap-enviar">
                    <input type="submit" value="Enviar Mensagem" name="enviar_message">
                </div>
            </form>
        </div>  
        <div class="mais">
            <div class="localizacao">
                <h4>Onde estamos</h4>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2568.583131626807!2d13.268156303884995!3d-9.006259679049522!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a521dae4d68e61d%3A0xa481155a0d8a5a03!2sEdif%C3%ADcio%20X34!5e0!3m2!1spt-PT!2sao!4v1705056791131!5m2!1spt-PT!2sao" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-icons">
                    <a href="https://www.facebook.com/ymr.industrial.9?_rdc=2&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ymrindustrial/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://web.whatsapp.com/send?phone=937%20590%20360" target="_blank"  class="extend"><i class="fa-brands fa-whatsapp"></i></i></a>
                    <a href="https://www.linkedin.com/company/ymr-industrial/about/" target="_blank" class="extend"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>