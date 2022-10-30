<?php
/**
 * Template Name: Template Blog
 * 
 * @since 1.0.0
 */

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<section class="row box-2">
    <div class="container">
        <div class="section-header">
            <h2><img src="<?php echo DGL_IMG ;?>dglcreativo-1.png" alt="Soy Luis"><img src="<?php echo DGL_IMG ;?>tree-line.png" alt="Desarrollo DGL Creativo"></h2>
            <h2>NOTICIAS DESTACADAS</h2>
            <p>
                <?php 
                    _e('Mira las últimas noticias relacionadas con el mundo del diseño web, diseño gráfico... Y no esperes a que te lo cuenten, ponte al día.');
                ?>
            </p>
        </div>
    </div>
</section>

<section class="row box-1">
    <div class="container">
        <div class="section-header">
            <?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
        </div>
    </div>
</section>
        

<?php get_footer(); ?>

