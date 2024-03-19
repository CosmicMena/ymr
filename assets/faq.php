<?php

    $sql_faq = "SELECT * FROM tb_faqs";
    $result_faq = $conn->query($sql_faq);

?>


<div class="faqs-section">
    <div class="section-h1">
        <h1>Perguntas Frequentes</h1>
    </div>
    <div class="content">
        <?php
            if ($result_faq->num_rows > 0) {
                
                while ($rowf = $result_faq->fetch_assoc()) {
        ?>
                    <div class="faq">
                        <div class="faq-h1">
                            <?php echo '<h1>' . $rowf["pergunta_faq"] . '</h1>'; ?>
                        </div>
                        <div class="faq-p">
                            <?php echo '<p>' . $rowf["resposta_faq"] . '</p>'; ?>
                        </div>
                    </div>
        <?php  
                }   
            }
        ?>
    </div>
</div>
<script>
    const faq = document.getElementsByClassName('faq');
    for (i = 0; i<faq.length; i++) {
        faq[i].addEventListener('click', function() {
            this.classList.toggle('active');
        })
    }
</script>