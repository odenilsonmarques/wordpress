<?php
function op_theme_sidebar(){
    register_sidebar(array(
        'name' => __('Meu Primeiro Sidebar', 'primeiro tema'),
        'id' =>'op_sidebar',
        'description' => __('Sidebar para o tema','primeiro tema'),

        //as linhas abaixo sao criadas para eu poder manipular o css do sidebar
        'before_title' => '<h4 class="widget_title">',//antes do titulo
        'after_title' => '</h4>', //depois do title

        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ));
}