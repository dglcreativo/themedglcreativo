<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Menu Principal', 'dglcreativo' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'main-menu',
                    'items_wrap'     => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
                )
            );
            ?>
    </nav><!-- #site-navigation -->
<?php endif; ?>

</div>

