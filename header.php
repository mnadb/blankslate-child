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
            <?php if (is_user_logged_in() && current_user_can('manage_options')) : ?>
                <a class="admin-link" href="<?php echo esc_url(admin_url()); ?>"></a>
            <?php endif; ?>

            <button>
                <a id="txt" href="http://localhost:8080/planty/commande/">commander</a>
            </button>
        </nav>
    </header>

    <main id="content" role="main">