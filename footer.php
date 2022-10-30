<?php
/**
 * Plantilla para la visualización del footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DGL_Creativo
 * @subpackage Template_DGL_Creativo
 * @since Template DGL Creativo 1.1.0
 */
$opt = get_option('dgl_opt');
$is_search = !empty($opt['is_search']) ? $opt['is_search'] : '';

?>

    </div><!-- #content -->
    
        <footer>
            <?php //get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
            <div class="container">
                
                <?php get_template_part('partials/socialinks') ?>
                
                <div class="row menu-rights">
                    <ul class="nav footer-menu">
                        <li><a target="_blank" href="/politica-cookies/">Política de cookies</a></li>                        
                        <li>
                            <?php
                            if ( function_exists( 'the_privacy_policy_link' ) ) {
                                    the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
                            }
                            ?>
                        </li>
                        <li><a target="_blank" href="/aviso-legal/">Aviso Legal</a></li>
                    </ul>				
                </div>

                <div class="row all-rights">
                    <div class="copy">
                        DGL Creativo <?php echo date('Y') ?>. Todos los derechos reservados
                        
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
                    </div>				
                </div>
                
            </div>
        </footer>

</div><!-- #main -->

<?php if ( $is_search == '1' ) :
    ?>
    <form action="<?php echo esc_url(home_url( '/')) ?>" class="search_boxs" role="search">
        <div class="search_box_inner">
            <div class="close_icon">
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="input-group">
                <input type="text" name="s" class="form_control search-input" placeholder="<?php esc_attr_e( 'Buscar aqui', 'dglcreativo' ) ?>" autofocus>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>
    <?php
endif;

wp_footer(); ?>

</body>
</html>