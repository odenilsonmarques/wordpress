<form role="search" method="GET" class="search-form" action="<?php echo esc_url(home_url('/'));?>">
    <input type="search" name="s" value="<?php the_search_query();?>"/> <!--Essa função the_search_query serve para deixar o campo preenchido quando o usuario digitar algum conteudo, caso não digite nada o campo fica vazio-->
    <input type="submit" value="Buscar">
</form>