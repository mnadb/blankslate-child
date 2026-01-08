<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

//fonction pour theme.css
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    
}

// enregistrer le menu
function monmenu_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'monmenu_supports');
add_theme_support('custom-logo');
add_theme_support('custom-menus');

/** Ajoute un lien "Admin" au menu header */
add_filter('wp_nav_menu_items', 'planty_lien_admin_menu_header', 10, 2);

function planty_lien_admin_menu_header($items, $args) {

    // On cible UNIQUEMENT le menu "header"
    if (!isset($args->theme_location) || $args->theme_location !== 'header') {
        return $items;
    }

    // Vérifie que l'utilisateur est connecté ET administrateur
    if (is_user_logged_in() && current_user_can('manage_options')) {

        $items .= '<li class="menu-item menu-item-admin">'
               .  '<a href="' . esc_url(admin_url()) . '">Admin</a>'
               .  '</li>';
    }

    return $items;
}
