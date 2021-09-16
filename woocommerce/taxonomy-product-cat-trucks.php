<?php get_header(); ?>
<!-- Banner -->
<div id="banner-trucks-categoria">
    <div class="ver-trucks-contenedor home-sector-contenedor">
        <div class="ver-trucks-texto">
            <h3>trucks</h3>
        </div>

        <div class="ver-trucks-auto">
            <h2>f100</h2>
            <img src="<?php echo get_img_url("home");?>/ford-f100.png" alt="Ford F100 1974 motor Econo 188 original caja 3 al volante. Página Classic Cars Buenos Aires.">
        </div>
    </div>
</div>

<div id="woocommerce-tienda">
        <div class="tienda-todos-productos-contenedor">
            <div class="texto">
                <p>Nuestros</p>
                <h2>Trucks</h2>
            </div>
            <?php woocommerce_content();?>
        </div>
    </div>

<?php get_footer(); ?>