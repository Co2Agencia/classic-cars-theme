<?php get_header(); ?>
<!-- Banner -->
<main id="sector-inicio">
        <div class="banner-video-contenedor">
            <video autoplay muted>
                <source src="<?php echo home_url();?>/wp-content/themes/co2/img/VideoClassicCars.mp4" type="video/mp4">
            </video>

            <div class="banner-texto-contenedor">
                <img src="<?php echo home_url();?>/wp-content/themes/co2/img/logo-color.png" alt="Logo Classic Cars en Banner">
                <a href="<?php echo home_url();?>/tienda">VER Tienda</a>
            </div>

            <div class="banner-flecha">
                <p>COMERCIALIZACIÓN DE AUTOS CLASICOS</p>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
</main>

<!-- Productos Destacados -->
<div class="productos-destacados-contenedor" id="sector-destacados">
        <h3>DESTACADOS</h3>
        
        <div class="productos-destacados">
            <?php echo do_shortcode('[best_selling_products limit="8"]'); ?>
        </div>
</div>

<!-- Ver Motos -->
<div class="ver-motos-contenedor" id="sector-motos">
    <div class="ver-motos-moto">
        <h2>SPORTER</h2>
        <img src="<?php echo home_url();?>/wp-content/themes/co2/img/harleydavidson.png" alt="Harley Davidson 2008 sin fondo">
    </div>
    <div class="ver-motos-texto">
        <h3>BUSCÁ</h3>
        <p>TU MOTO</p>
        <a href="<?php echo home_url();?>/categoria-producto/motos">VER MOTOS</a>
    </div>
</div>

<!-- Ver Autos -->
<div class="ver-productos-contenedor" id="sector-ver">
    <div class="ver-productos-texto-contenedor">
        <h3>BUSCÁ</h3>
        <p>TU CLASSIC CAR</p>
        <a href="<?php echo home_url();?>/categoria-producto/autos">VER AUTOS</a>
    </div>

    <div class="ver-productos-auto-contenedor">
        <img src="<?php echo home_url();?>/wp-content/themes/co2/img/FordMustang1968-con-sombra-2.png" alt="Ford mustang 1968 V8">
        <h3>1968</h3>
    </div>

    <span class="ver-productos-auto-descripcion">EN LA FOTO SE MUESTRA UN FORD MUSTANG 1968 V8</span>
</div>

<!-- Vende Productos -->
<div class="vende-productos-contenedor" id="sector-vende">
    <div class="vende-productos-auto-contenedor">
        <img src="<?php echo home_url();?>/wp-content/themes/co2/img/Camaro-1969.png" alt="Chevrolet Camara 1969 V8">
    </div>
    <div class="vende-productos-texto-contenedor">
        <h3>VENDE</h3>
        <p>TU CLASSIC CAR</p>
        <a href="#">SABER MÁS</a>
    </div>
</div>


<!-- Sobre nosotros -->
<div class="nosotros-contenedor" id="sector-nosotros">
    <img src="<?php echo home_url();?>/wp-content/themes/co2/img/logo-blanco.png" alt="Logo Classic Cars en Nav">
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
        <span>DIRECCIÓN</span>
        <p>1234 AV. LIBERTADOR</p>
    </div>

    <div class="contactanos-dato">
        <span>TELEFONO</span>
        <p>123 - 4561891011</p>
    </div>

    <div class="contactanos-botones">
        <a href="tel:1234567891011">LLAMANOS</a>
        <a href="#">ESCRIBINOS</a>
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