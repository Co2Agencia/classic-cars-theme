<?php

/* Agregando CSS y JS */
function co2_custom_theme(){
    wp_register_style('custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0');

    wp_enqueue_style('custom_css');

    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'co2_custom_theme');


/* Custom Co2 Menu */
function co2_custom_menu(){
    register_nav_menu('top-menu', __('Co2 Custom Menu','co2custommenu'));
}

add_action('init', 'co2_custom_menu');


/* WooCommerce */
if(class_exists('WooCommerce')){

    /* WooCommerce Support */
    function woocommerceshop_add_woocommerce_support(){
        add_theme_support('woocommerce');
    }

    add_action('after_setup_theme', 'woocommerceshop_add_woocommerce_support');

    /* Eliminando Estilos de WooCommerce */
    add_filter('woocommerce_enqueue_styles', '__return_false');

    /* Elimina Titulo de tienda */
    add_filter('woocommerce_show_page_title', '__return_false');

    // Agregando soporte
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
 
}
