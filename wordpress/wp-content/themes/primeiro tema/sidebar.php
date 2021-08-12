<sidebar>
    <p>Menu</p>
    <!--verificando se o sidebar foi criado e está ativo-->
    <?php
        if(is_active_sidebar('op_sidebar')){
            dynamic_sidebar('op_sidebar');
        }
    ?>
</sidebar>