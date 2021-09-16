<?php get_header(); ?>
<!-- Banner -->
<div id="banner-exclusive-categoria">
    <div class="ver-exclusive-contenedor home-sector-contenedor">
        <div class="ver-exclusive-auto">
            <h2>coachmen</h2>
            <img src="<?php echo get_img_url("home");?>/ford-ecoline.png" alt="Ford Econoline Coachmen 1989 20.000 millas reales motor y caja original. Página Classic Cars Buenos Aires.">
        </div>

        <div class="ver-exclusive-texto">
            <h3>exclusive</h3>
        </div>
    </div>
</div>

<div id="woocommerce-tienda">
        <div class="tienda-todos-productos-contenedor">
            <div class="texto">
                <p>Nuestros</p>
                <h2>Exclusive Cars</h2>
            </div>
            <?php woocommerce_content();?>
        </div>
    </div>

<?php get_footer(); ?>