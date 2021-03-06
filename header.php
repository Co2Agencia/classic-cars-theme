<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lifestyle Cars. Autos Clasicos en buenos aires.">
    <?php wp_head(); ?>

    <!-- Splide Slider -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    
    <!-- Google Fonts || Abril FatFace, Bebas Neue, Montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Montserrat:wght@100;300;400;700&display=swap" rel="stylesheet">


    <title>Classic Cars Buenos Aires</title>
</head>

<body <?php body_class(); ?>>
    
    <header id="custom-nav-bar">
        <input id="nav-icon" type="checkbox">

        <ul class="custom-nav-bar-menu">
            <li><a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>">Tienda</a></li>
            <li><a href="<?php echo home_url();?>/#sector-contactanos">CONTACTO</a></li>
            <li><a href="<?php echo home_url();?>">INICIO</a></li>
    
            <li class="nav-bar-logo">
                <a href="<?php echo home_url();?>">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo-blanco.png" alt="Logo Classic Cars en Nav">
                </a>
            </li>
    
            <li><button id="nav-btn-autos">AUTOS</button>
            </li>
            
            <li><a href="<?php echo get_cat_link_custom("bikes");?>">MOTOS</a></li>
            <li><a href="<?php echo get_cat_link_custom("taller");?>">TALLER</a></li>
        </ul>
        <div class="nav-bar-tel">
            <i class="fas fa-phone"></i>
            <a href="https://wa.me/<?php  echo variables_general("wpp");?>"><?php  echo variables_general("tel");?></a>
        </div>

        <div class="nav-bar-autos vanish">
            <button id="nav-bar-autos-btn">
                <p>Cerrar Autos</p>
            </button>
            <ul>
                <li>
                    <a href="<?php echo get_cat_link_custom("cars");?>">Classics</a>
                </li>
                <li>
                    <a href="<?php echo get_cat_link_custom("trucks");?>">Trucks</a>
                </li>
                <li>
                    <a href="<?php echo get_cat_link_custom("daily-cars");?>">Daily Cars</a>
                </li>
                <li>
                    <a href="<?php echo get_cat_link_custom("exclusive");?>">Exclusive</a>
                </li>
            </ul>
        </div>

    </header>
    <div id="wpp-chat-icon">
        <a href="https://wa.me/<?php echo variables_general('wpp')?>" aria-label="Whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>