<?php get_header(); ?>
<!-- Banner -->
<div id="banner-cars-categoria">
    <div class="ver-productos-contenedor home-sector-contenedor" id="sector-ver">
        <div class="ver-productos-texto-contenedor">
            <h3>CLASSIC <span>CARS</span></h3>
        </div>

        <div class="ver-productos-auto-contenedor">
            <img src="<?php echo get_img_url("home");?>/FordMustang1968-con-sombra-2.png" alt="Ford mustang 1968 V8">
            <h3>1968</h3>
        </div>

        <span class="ver-productos-auto-descripcion">EN LA FOTO SE MUESTRA UN FORD MUSTANG 1968 V8</span>
    </div>

</div>

<div id="woocommerce-tienda">
        <div class="tienda-todos-productos-contenedor">
            <div class="texto">
                <p>Nuestros</p>
                <h2>Classic Cars</h2>
            </div>
            <?php woocommerce_content();?>
        </div>
    </div>

<?php get_footer(); ?>


