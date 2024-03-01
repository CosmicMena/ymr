<div class="min-screen-newsletter">
    <div>
        <h2>Assine a nossa Newsletter</h2>
        <form action="#">
            <input type="email" name="email" placeholder="anyone@domain.com" value="
                <?php    
                    if (isset($_SESSION['username'])) {
                        $useremaillogado = ($_SESSION['email']);
                        echo $useremaillogado;
                    }
                ?>
            ">
            <input type="submit" value="Enviar"> 
        </form> 
    </div>
    <i class="fa-regular fa-paper-plane"></i>
</div>