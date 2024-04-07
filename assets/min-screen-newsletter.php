<div class="min-screen-newsletter">
    <div>
        <div class="flex-div">
           <h2>Assine a nossa Newsletter</h2>
            <i class="fa-regular fa-paper-plane icon-plane"></i> 
        </div>
        
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
</div>