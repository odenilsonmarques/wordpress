<?php

function op_theme_menu(){
    add_theme_support('menus');//permitindo que o tema suporte menus, essa linha foi mantida para que funcione também em tema antigos.

    //registro do menu
    // o primeiro parametro é um identificador
    // o segundo é nome do menu
    // o terceiro é o nome do tema
    register_nav_menu('primary',__('Primeiro Menu',('primeiro tema')));
    register_nav_menu('footer','Menu rodapé');
}