<?php

if (!defined('ABSPATH')) {
    exit;
}

define('ECODRENO_THEME_VERSION', '1.0.0');

function ecodreno_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Menu Principal', 'ecodreno-premium'),
    ));
}
add_action('after_setup_theme', 'ecodreno_setup_theme');

function ecodreno_enqueue_assets() {
    wp_enqueue_style(
        'ecodreno-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        ECODRENO_THEME_VERSION
    );

    wp_enqueue_script(
        'ecodreno-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        ECODRENO_THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'ecodreno_enqueue_assets');

function ecodreno_whatsapp_url() {
    return 'https://wa.me/551152867420?text=' . rawurlencode('Olá! Gostaria de solicitar um orçamento.');
}
