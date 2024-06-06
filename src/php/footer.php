<footer>
        <?php wp_footer(); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        <div>
                <a href=""><img class="socials" src="<?php echo get_template_directory_uri(); ?>/images/Insta.svg" alt="Insta"></a>
                <a href=""><img class="socials" src="<?php echo get_template_directory_uri(); ?>/images/Facebook.svg" alt="Facebook"></a>
                <a href=""><img class="socials" src="<?php echo get_template_directory_uri(); ?>/images/Youtube.svg" alt="Youtube"></a>
        </div>
        </footer>