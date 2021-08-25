<?php

/* Agregando CSS y JS */
function co2_custom_theme(){
    wp_register_style('custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0');

    wp_enqueue_style('custom_css');

    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

    // Script para tienda
    if(is_shop()){
        wp_enqueue_script('shop-scripts', get_template_directory_uri() . '/js/shop-scripts.js', array(), '1.0.0', true);
    }
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
    

    /* 
        Single product Page
        - Elimina y agrega elementos en la página.
    */
    // remove additional information tabs
    // remove_action('woocommerce_after_single_product_summary ','woocommerce_output_product_data_tabs',10);

    // Elimina el SideBar
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

    // Elimina Valoraciones
    function woocommerce_remove_reviews(){
        remove_post_type_support('product', 'comments');
    }

    add_action('init', 'woocommerce_remove_reviews');

    // Elimina el nav "woocommerce-breadcrumbs" de todas las páginas woocommerce
    add_action( 'init', 'my_remove_breadcrumbs' );
 
    function my_remove_breadcrumbs() {
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
    }

    // Elimina el precio de los productos
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );


    // Cambia el texto de los botones de las cartas de productos
    add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
    function woocommerce_custom_product_add_to_cart_text() {
        return __( 'Ver más');
    }
}


/* Variables Generales */
function variables_general($tel_or_mail_or_wpp){
    $mail_string = "info@classiccarsba.com";
    $tel_string = "1165212580";
    $wpp_tel_string = "549" . $tel_string;

    if($tel_or_mail_or_wpp == "mail"){
        return $mail_string;
    }
    elseif($tel_or_mail_or_wpp == "wpp"){
        return $wpp_tel_string;
    }
    else{
        return $tel_string;
    }
}

/* Nos devuelve el link de la categoria que le pasemos */
function get_cat_link_custom($cat_slug){
    $cat_link = '';
    $prod_cat_args = array(
        'taxonomy'     => 'product_cat', //woocommerce
        'hide_empty' => 0,
      );
      
      $woo_categories = get_categories( $prod_cat_args );
      
      foreach ( $woo_categories as $woo_cat ) {
          $woo_cat_id = $woo_cat->term_id; //category ID
          $woo_cat_name = $woo_cat->name; //category name
          $woo_cat_slug = $woo_cat->slug; //category slug

          if($cat_slug == $woo_cat_slug){
              $cat_link = get_term_link( $woo_cat_slug, 'product_cat' );
          }
      }

    return $cat_link;
}

/* Solo muestra los resultados de busqueda de productos */
function lw_search_filter_pages($query) {
    if ($query->is_search) {
    $query->set('post_type', 'product');
    $query->set( 'wc_query', 'product_query' );
    }
    return $query;
    }
     
    add_filter('pre_get_posts','lw_search_filter_pages');