<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lifestyle Cars. Autos Clasicos en buenos aires.">
    <?php wp_head(); ?>
    <title>Classic Cars Buenos Aires</title>
</head>

<body <?php body_class(); ?>>
    
    <header id="custom-nav-bar">
        <ul class="custom-nav-bar-menu">
            <li><a href="<?php echo home_url();?>/#sector-nosotros">NOSOTROS</a></li>
            <li><a href="<?php echo home_url();?>/#sector-contactanos">CONTACTO</a></li>
            <li><a href="<?php echo home_url();?>">INICIO</a></li>
    
            <li>
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo home_url();?>/wp-content/themes/co2/img/logo-blanco.png" alt="Logo Classic Cars en Nav">
                </a>
            </li>
    
            <li><a href="<?php echo home_url();?>/categoria-producto/autos">AUTOS</a></li>
            <li><a href="<?php echo home_url();?>/categoria-producto/motos">MOTOS</a></li>
            <li><a href="<?php echo home_url();?>/#sector-vende">VENDER</a></li>
        </ul>
        <div class="nav-bar-tel">
            <i class="fas fa-phone"></i>
            <a href="tel:1234567891011">123-4567891011</a>
        </div>
    </header>
