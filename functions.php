<?php

// Enfileira os scripts e estilos do tema
function greentheme_scripts() {
    // Carrega o stylesheet principal do tema (style.css)
    wp_enqueue_style( 'greentheme-style', get_stylesheet_uri() );//greenTheme-style pode ser qualquer nome  
    // enqueue serve para enfileirar scripts e estilos no WordPress
    // enqueue também poder ser uma biblioteca externa ou um arquivo local
    // Se você tivesse um arquivo JavaScript (ex: main.js) na pasta do tema
    // wp_enqueue_script( 'greentheme-main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'greentheme_scripts' );

// Suporte para título dinâmico do tema (necessário para wp_title() funcionar corretamente)
function greentheme_setup() {
    add_theme_support( 'title-tag' );
    // Adiciona suporte a menus de navegação
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'greenTheme' ), // 'primary' é o ID, 'Menu Principal' é o nome visível no painel
    ) );
}
add_action( 'after_setup_theme', 'greentheme_setup' );

?>