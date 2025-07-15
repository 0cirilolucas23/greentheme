<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <nav>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary', // O ID que registramos no functions.php
                'container'      => false,     // Não envolver o menu em uma div extra
                'menu_class'     => 'main-navigation', // Classe CSS para o <ul> gerado
                'depth'          => 0,
                //'depth'          => 1,         // Profundidade do menu (1 = sem submenus)
            ) );
            ?>
        </nav>
    </header>

    <div class="container">