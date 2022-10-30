<?php
/**
 * Template Name: Template Contact
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
            <h2><img src="<?php echo DGL_IMG ;?>tree-line-1.png" alt="Desarrollo DGL Creativo"><img src="<?php echo DGL_IMG ;?>dglcreativo-1.png" alt="Soy Luis"></h2>
            <p>
                <?php 
                    _e('Puedes contactar conmigo para cualquier duda, pregunta o trabajo por e-mail o mediante este formulario.<br><a href="mailto:dglcreativo@hotmail.es">dglcreativo@hotmail.es</a>');
                ?>
            </p>
        </div>
    </div>
</section>

<section class="row box-1">
    <div class="container">
        <div class="section-header">
            <?php if ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

            
                
            
                

<?php get_footer(); ?>

