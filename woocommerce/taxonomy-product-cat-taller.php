<?php get_header(); ?>
<div id="banner-taller-contenedor">

    <img src="<?php echo get_img_url("taller");?>/taller-fondo.png" alt="Fondo estudio negro. Página classiccarsba.com" class="banner-taller-fondo">

    <div class="banner-taller-motor-contenedor">
        <img src="<?php echo get_img_url("taller");?>/motor-cadena.png" alt="Imágen de motor colgando de cadena. Página classiccarsba.com">
        <h2>Taller</h2>
    </div>
    <div class="banner-taller-botones-contenedor">
        <a href="#contenedor-tienda-taller">Ver fotos</a>
        <a href="https://wa.me/<?php  echo variables_general("wpp");?>">Contactanos</a>
    </div>
    <p class="banner-taller-descripcion">
        El mejor servicio para tu <span>Classic Car</span>
    </p>
</div>

<div id="contenedor-tienda-taller">
    <div id="woocommerce-tienda">
        <div class="tienda-todos-productos-contenedor">
            <div class="texto">
                <p>mirá</p>
                <h2>Nuestro workshop</h2>
            </div>
            <?php woocommerce_content();?>
        </div>
    </div>
</div>



<?php get_footer(); ?>