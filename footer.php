<footer>
    <div class="footer-parte-1">
        <div class="footer-texto">

            <div class="texto">
                <span>dirección</span>
                <p>1234 AV. libertador</p>
            </div>

            <div class="texto">
                <span>telefono</span>
                <p>123 - 4567891011</p>
            </div>

            <div class="texto">
                <span>mail</span>
                <p>ejemplo@gmail.com</p>
            </div>
            
        </div>

        <div class="footer-redes">
            <a href="https://www.instagram.com/classic_cars_ba/">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="mailto:mailprueba@gmail.com">
                <i class="fas fa-mail-bulk"></i>
            </a>

        </div>
    </div>

    <div class="footer-parte-2">
        <ul class="footer-menu">
            <li><a href="<?php echo home_url();?>/#sector-contactanos">contacto</a></li>
            <li><a href="<?php echo home_url();?>/tienda">Buscá</a></li>
            <li><a href="<?php echo home_url();?>/#sector-vende">vende</a></li>
            <li><a href="<?php echo home_url();?>/#sector-nosotros">sobre nosotros</a></li>
        </ul>

        <div class="footer-logo">

            <a href="<?php echo home_url();?>/">
                <img src="<?php echo home_url();?>/wp-content/uploads/2021/08/Logo-blanco.png" alt="Logo Classic Cars en Nav">
            </a>
            <p>© <?php echo date('Y'); ?> classic cars buenos aires. todos los derechos reservados. Creado por co2agencia.</p>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>