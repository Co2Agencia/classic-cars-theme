<?php get_header(); ?>
<!-- Banner -->
<main id="sector-inicio">
        <div class="banner-video-contenedor">
            <video autoplay muted>
                <source src="<?php bloginfo('template_url'); ?>/img/VideoClassicCars.mp4" type="video/mp4">
            </video>

            <div class="banner-texto-contenedor">
                <img src="<?php bloginfo('template_url'); ?>/img/logo-color.png" alt="Logo Classic Cars en Banner">
                <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>">VER Tienda</a>
            </div>

            <div class="banner-flecha">
                <p>COMERCIALIZACIÓN DE AUTOS CLASICOS</p>
                <a href="#sector-destacados">
                    <i class="fas fa-chevron-down"></i>
                </a>
            </div>

            <div class="overlay"></div>
        </div>
</main>

<?php
/* echo do_shortcode("[wpbsearch]"); */
?>

<!-- Productos Destacados -->
<div class="productos-destacados-contenedor" id="sector-destacados">
    <h3>DESTACADOS</h3>
    <div class="productos-destacados">
        <?php echo do_shortcode('[best_selling_products limit="9"]'); ?>
    </div>
</div>

<!-- Ver Motos -->
<div class="ver-motos-contenedor" id="sector-motos">
    <div class="ver-motos-moto">
        <h2>SPORTER</h2>
        <img src="<?php bloginfo('template_url'); ?>/img/harleydavidson.png" alt="Harley Davidson 2008 sin fondo">
    </div>
    <div class="ver-motos-texto">
        <h3>Bikes</h3>
        <a href="<?php echo get_cat_link_custom("bikes");?>">VER MOTOS</a>
    </div>
</div>

<!-- Ver Autos -->
<div class="ver-productos-contenedor" id="sector-ver">
    <div class="ver-productos-texto-contenedor">
        <h3>CLASSIC CAR</h3>
        <a href="<?php echo get_cat_link_custom("cars");?>">VER AUTOS</a>
    </div>

    <div class="ver-productos-auto-contenedor">
        <img src="<?php bloginfo('template_url'); ?>/img/FordMustang1968-con-sombra-2.png" alt="Ford mustang 1968 V8">
        <h3>1968</h3>
    </div>

    <span class="ver-productos-auto-descripcion">EN LA FOTO SE MUESTRA UN FORD MUSTANG 1968 V8</span>
</div>


<!-- Daily Cars -->
<div class="ver-daily-contenedor">
    <div class="ver-daily-auto">
        <h2>SPORT</h2>
        <img src="<?php bloginfo('template_url'); ?>/img/mercedez-a250.png" alt="Mercedez Benz a250. Página ClassicCars Buenos Aires.">
    </div>

    <div class="ver-daily-texto">
        <h3>Daily cars</h3>
        <a href="<?php echo get_cat_link_custom("daily-cars");?>">Ver autos</a>
    </div>
</div>


<!-- Trucks -->
<div class="ver-trucks-contenedor">
    <div class="ver-trucks-texto">
        <h3>trucks</h3>
        <a href="<?php echo get_cat_link_custom("trucks");?>">Ver camionetas</a>
    </div>

    <div class="ver-trucks-auto">
        <h2>f100</h2>
        <img src="<?php bloginfo('template_url'); ?>/img/ford-f100.png" alt="Ford F100 1974 motor Econo 188 original caja 3 al volante. Página Classic Cars Buenos Aires.">
    </div>
</div>


<!-- Exclusive -->
<div class="ver-exclusive-contenedor">
    <div class="ver-exclusive-auto">
        <h2>coachmen</h2>
        <img src="<?php bloginfo('template_url'); ?>/img/ford-ecoline.png" alt="Ford Econoline Coachmen 1989 20.000 millas reales motor y caja original. Página Classic Cars Buenos Aires.">
    </div>

    <div class="ver-exclusive-texto">
        <h3>exclusive</h3>
        <a href="<?php echo get_cat_link_custom("exclusive");?>">ver autos</a>
    </div>
</div>


<!-- Sobre nosotros -->
<div class="nosotros-contenedor" id="sector-nosotros">
    <img src="<?php bloginfo('template_url'); ?>/img/logo-blanco.png" alt="Logo Classic Cars en Nav">
    <h3>SOBRE NOSOTROS</h3>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eaque fugit alias ex aliquam praesentium in.
        Doloremquemagnam id illo accusantium ullam quaerat perferendis corporis nisi eius cumque repellendus nam
        laudantium aut accusamus sint animi, odit cum adipisci architecto? Consectetur perspiciatis quia enim laudantium
        cumque!
    </p>
</div>


<!-- Contactanos -->
<div class="contactanos-contenedor" id="sector-contactanos">
    <h3>CONTACTANOS</h3>

    <div class="contactanos-dato">
        <span>TELEFONO</span>
        <p><?php echo variables_general("tel");?></p>
    </div>

    <div class="contactanos-botones">
        <a href="https://wa.me/<?php echo variables_general('wpp')?>">ESCRIBINOS</a>
    </div>

    <div class="contactanos-footer">
        <div class="contactanos-horarios">
            <span>HORARIOS</span>
            <p>LUN - VIER</p>
            <p>9AM - 5AM</p>
        </div>
        <div class="contactanos-redes">
            <a href="https://www.instagram.com/classic_cars_ba/" target="_blank" rel="noreferrer">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="mailto:mailprueba@gmail.com">
                <i class="fas fa-mail-bulk"></i>
            </a>
        </div>
    </div>

</div>
    
<?php get_footer(); ?>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide('.productos-destacados').mount();
	} );
</script>