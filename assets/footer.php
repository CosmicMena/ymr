<footer>
    <div class="container">
        
        <div class="links">
            <h3>Principais links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">categorias</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Fale com a Gente</a></li>
                <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="login.php">Minha conta</a></li>';
                    }
                ?>
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
                <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="login.php">Minha conta</a></li>';
                        echo '<li><a href="#">Informações de usuário</a></li>';
                        
                        $userrule = ($_SESSION['id_rule']);
                        if ($userrule == 2) {
                            echo '<form action="admin/index.php" method="post">
                                    <li><a><label for="botaooculto">Tela Admin</label></a></li>
                                    <input type="hidden" value="'. $userrule .'" name="rule">
                                    <input type="submit" name="acederadminarea" class="botaooculto" id="botaooculto"></input>
                                </form>
                                <style>
                                    .botaooculto {
                                        background: transparent;
                                        color: transparent;
                                        width: 0;
                                    }
                                </style>';
                        }
                    }
                ?>
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