<?php get_header(); ?>
<!-- Banner -->
<div id="banner-daily-categoria">
    <div class="ver-daily-contenedor home-sector-contenedor">
        <div class="ver-daily-auto">
            <h2>SPORT</h2>
            <img src="<?php echo get_img_url("home");?>/mercedez-a250.png" alt="Mercedez Benz a250. Página ClassicCars Buenos Aires.">
        </div>

        <div class="ver-daily-texto">
            <h3>Daily <span>cars</span></h3>
        </div>
    </div>
</div>

<div id="woocommerce-tienda">
        <div class="tienda-todos-productos-contenedor">
            <div class="texto">
                <p>Nuestros</p>
                <h2>Daily Cars</h2>
            </div>
            <?php woocommerce_content();?>
        </div>
    </div>

<?php get_footer(); ?>