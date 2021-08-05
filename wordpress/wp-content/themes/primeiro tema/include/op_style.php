<?php
function op_theme_styles(){
    // a linha abaixo é usada para chamar os arquivos css, no primeiro parametro é declarado o nome, depois uma função e o caminho do arquivo
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
}