<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu primeiro tema</title>
    <!-- a declaraçãoa abaixo é usada para relaciona-se com os arquivos css e em conjunto com algumas recursos do wordpress-->
    <?php wp_head();?>
</head>
<!--o uso da classe body_class permite adicionar classe em cada pagina do projeto e permite classes personalizadas-->
<body <?php body_class('class1 class2')?>>
    <header>
        <h1>Meu primiero tema</h1>
        <!--Verificando se existe o menu-->
        <?php
            if(has_nav_menu('primary')){
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container_class' => 'nave',//nav para usar html semantico, aqui por padrao é definido um nome para classe menu, porem pode ser alterada
                    'container_class' =>'meu_menu', // alterando o nome da classe que vem definido na linha acima para menu_menu
                    'fallback_cb' =>false //para não exibir  o menu padrão
                ));
            }
        ?>
    </header>