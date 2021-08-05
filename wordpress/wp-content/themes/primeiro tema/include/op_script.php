<?php

function op_theme_js(){
    // a linha abaixo é usada para chamar os arquivos js, no primeiro parametro é declarado o nome, depois uma funcação e o 
    // caminho do arquivo. Caso exista o jquery tou passando mais um parmentro pra informmar que a uma depencia desse arquivo, 
    // depois vem o paramentro da versao, esse pode ficar em branco e logo depois declaro (true) informando que o script deve 
    // ficar no fim da pagina, caso fosse false o script ficaria no inicio
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),'',true);
}