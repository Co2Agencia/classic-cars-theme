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

    // Script para Single product Page
    if(is_single()){
        wp_enqueue_script('single-scripts', get_template_directory_uri() . '/js/single-scripts.js', array(), '1.0.0', true);
    }

    // Script para el Home
    if(is_home() || is_front_page()){
        wp_enqueue_script('shop-scripts', get_template_directory_uri() . '/js/home-scripts.js', array(), '1.0.0', true);
    }

    // Script para categorias
    if(is_product_category()){
        wp_enqueue_script('shop-scripts', get_template_directory_uri() . '/js/category-scripts.js', array(), '1.0.0', true);
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


/* 
    - Le pasamos como parametro "home", "taller" o lo dejamos
    vacio y nos devuelve el url con la carpeta donde se encuentran
    las imagenes
*/
function get_img_url($home_or_taller_or_else = "else"){
    $general_img_url = bloginfo('template_url') . "/img";
    
    if($home_or_taller_or_else == "home"){
        return $general_img_url . "/home";
    }
    else if($home_or_taller_or_else == "taller"){
        return $general_img_url . "/taller";
    }
    return $general_img_url;
}

/* Checkea si el dispositivo es mobile, tablet o dekstop */
function check_device(){
    $tablet_browser = 0;
    $mobile_browser = 0;
     
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $tablet_browser++;
    }
     
    if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $mobile_browser++;
    }
     
    if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
        $mobile_browser++;
    }
     
    $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
    $mobile_agents = array(
        'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
        'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
        'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
        'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
        'newt','noki','palm','pana','pant','phil','play','port','prox',
        'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
        'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
        'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
        'wapr','webc','winw','winw','xda ','xda-');
     
    if (in_array($mobile_ua,$mobile_agents)) {
        $mobile_browser++;
    }
     
    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
        $mobile_browser++;
        //Check for tablets on opera mini alternative headers
        $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
        if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
          $tablet_browser++;
        }
    }
     
    if ($tablet_browser > 0) {
       return 'tablet';
    }
    else if ($mobile_browser > 0) {
       return 'mobile';
    }
    else {
       return 'dekstop';
    }   
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