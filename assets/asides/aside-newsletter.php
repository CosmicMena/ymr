<div class="aside-box">
    <h2>Assine a nossa Newsletter</h2>
    <form action="#">
        <label for="email">Digite o seu E-mail</label>
        <input type="email" name="email" placeholder="anyone@domain.com" value="
            <?php    
                if (isset($_SESSION['username'])) {
                    $useremaillogado = ($_SESSION['email']);
                    echo $useremaillogado;
                }
            ?>
        " id="newsletterid">
        <input type="submit" value="Assinar">
    </form>
</div>