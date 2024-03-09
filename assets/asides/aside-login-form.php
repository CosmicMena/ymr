
<?php
if (!isset($_SESSION['username'])) {
    echo ' 
    <div class="aside-box">
        <h2>Login</h2>
        <form action="login.php" method="post" autocomplete="off">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="anyone@domain.com" autocomplete="off">
            <label for="senha">Senha</label>
            <input type="password" name="password" placeholder="Digite a sua senha" autocomplete="off">
            <input type="submit" value="Entrar" name="login">
        </form>
        <span>Caso não tenha uma conta <a href="signup.php">Crie uma</a></span>
    </div>';
} 

?>