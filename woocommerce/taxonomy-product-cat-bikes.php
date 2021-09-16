<?php get_header(); ?>
<!-- Banner -->
<div id="banner-motos-categoria">
    <div class="ver-motos-contenedor home-sector-contenedor" id="sector-motos">
        <div class="ver-motos-moto">
            <h2>SPORTER</h2>
            <img src="<?php echo get_img_url("home");?>/harleydavidson.png" alt="Harley Davidson 2008 sin fondo">
        </div>
        <div class="ver-motos-texto">
            <h3>Bikes</h3>
        </div>
    </div>
</div>

<div id="woocommerce-tienda">
        <div class="tienda-todos-productos-contenedor">
            <div class="texto">
                <p>Nuestras</p>
                <h2>Motos</h2>
            </div>
            <?php woocommerce_content();?>
        </div>
    </div>

<?php get_footer(); ?>