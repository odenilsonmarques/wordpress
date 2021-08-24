<?php

function op_theme_posts(){
    add_theme_support('post-thumbnails');//permitindo que o tema suporte posts, essa linha foi mantida para que funcione também em tema antigos.

    //registro do menu
    // o primeiro parametro é um identificador
    // o segundo é nome do menu
    // o terceiro é o nome do tema
    register_nav_menu('primary',__('Primeiro Menu',('primeiro tema'))); // por enquanto estou usando o mesmo resgister que foi usado em menus


}


