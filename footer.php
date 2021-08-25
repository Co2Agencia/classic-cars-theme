<footer>
    <div class="footer-parte-1">
        <div class="footer-texto">
            <div class="texto">
                <span>telefono</span>
                <a href="https://wa.me/<?php  echo variables_general("wpp");?>"><?php  echo variables_general("tel");?></a>
            </div>

            <div class="texto">
                <span>mail</span>
                <p><?php  echo variables_general("mail");?></p>
            </div>
            
        </div>

        <div class="footer-redes">
            <a href="https://www.instagram.com/classic_cars_ba/">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="mailto:<?php  echo variables_general("mail");?>">
                <i class="fas fa-mail-bulk"></i>
            </a>

            <a href="https://wa.me/<?php  echo variables_general("wpp");?>">
                <i class="fab fa-whatsapp"></i>
            </a>

        </div>
    </div>

    <div class="footer-parte-2">
        <ul class="footer-menu">
            <li><a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>">Tienda</a></li>
            <li><a href="<?php echo home_url();?>/#sector-contactanos">contacto</a></li>
            <li><a href="<?php echo home_url();?>">Inicio</a></li>
            <li><a href="<?php echo get_cat_link_custom("cars");?>">Autos</a></li>
            <li><a href="<?php echo get_cat_link_custom("bikes");?>">MOTOS</a></li>
            <li><a href="<?php echo home_url();?>/taller">TALLER</a></li>
        </ul>

        <div class="footer-logo">

            <a href="<?php echo home_url();?>/">
                <img src="<?php bloginfo('template_url'); ?>/img/logo-blanco.png" alt="Logo Classic Cars en Nav">
            </a>
            <p>© <?php echo date('Y'); ?> classic cars buenos aires. todos los derechos reservados. Creado por co2agencia.</p>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>