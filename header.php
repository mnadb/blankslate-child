<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" role="banner">
        <div class="logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>

        <nav id="menu">
            <div class="nav-menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'menu'
                ])
                ?>
            </div>

        </nav>
    </header>

    <main id="content" role="main">