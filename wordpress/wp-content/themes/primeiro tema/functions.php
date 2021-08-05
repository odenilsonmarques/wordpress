<?php
//incluindo as funções que vão ser chamada pelo hook 
include get_template_directory().'/include/op_style.php';
include get_template_directory().'/include/op_script.php';
include get_template_directory().'/include/op_menu.php';


//a linha abaixo chama o hook e depois a função)
//nota: as iniciais da função é referente ao inicio do nome do autor e inicio do nome do tema, isso é uma boa pratica não uma obrigação, pois evita conflifito de nome ....
add_action('wp_enqueue_scripts','op_theme_styles');
add_action('wp_enqueue_scripts','op_theme_js');
add_action('after_setup_theme','op_theme_menu');//ativa o suporte ao menu
