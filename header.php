<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Violinist
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Great+Vibes&family=Lora:wght@400..700&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light main-navbar"> 
        <div class="container">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                        wp_nav_menu(
                            array(
                                'menu' => 'Primary', 
                                'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                'container' => '',
                                'walker' => new My_Theme_Walker_Nav_Menu()
                            )
                        ); 
                    ?>
            </div>
        </div>
    </nav>