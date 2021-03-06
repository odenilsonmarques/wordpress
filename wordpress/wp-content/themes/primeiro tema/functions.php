<?php
//incluindo as funções que vão ser chamada pelo hook 
include get_template_directory().'/include/op_style.php';
include get_template_directory().'/include/op_script.php';
include get_template_directory().'/include/op_menu.php';
include get_template_directory().'/include/op_sidebar.php';
include get_template_directory().'/include/op_posts.php';


//a linha abaixo chama o hook e depois a função)
//nota: as iniciais da função é referente ao inicio do nome do autor e inicio do nome do tema, isso é uma boa pratica não uma obrigação, pois evita conflifito de nome ....
add_action('wp_enqueue_scripts','op_theme_styles');
add_action('wp_enqueue_scripts','op_theme_js');
add_action('after_setup_theme','op_theme_menu');//ativa o suporte ao menu
add_action('widgets_init','op_theme_sidebar'); //ativar o sidebar
add_action('after_setup_theme','op_theme_posts');//ativa o suporte ao post

