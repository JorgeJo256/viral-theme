</section>
    <footer class="row b-black footer justi-center">
            <?php wp_nav_menu( array(
                    'theme_location' => 'footer_menu',
                    'container' => 'nav',
                    'container_class' => 'col-12 footer_nav',
                    'container_id' => '',
                    'items_wrap' => '<ul class="nav nav_main justi-center t-white t-bold"> %3$s </ul>',
                    'menu_class' => 'nav-item nav_item'
                )); ?>
        <div class="row">
            <figure class="footerLogo_img a-center">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/viral2.png"
                alt="Logo de Viral" title="Logo de Viral">
            </figure>
        </div>        
    </footer>
</body>
</html>