<?php

if( ! defined( 'ABSPATH' ) ) {
    exit;
}



get_header(); ?>

<div class="row box-1">
    <div class="container">
        <div class="section-header">
            <h2><img src="<?php echo DGL_IMG ;?>tree-line-1.png" alt="Desarrollo DGL Creativo"><img src="<?php echo DGL_IMG ;?>dglcreativo-1.png" alt="Soy Luis"></h2>
            <p>Encuentra los proyectos que desees navegando por las diferentes categorias que te encontrarás más abajo. Te encontrarás con proyectos de WORDPRESS, PRESTASHOP y también proyectos de diseño gráfico.</p>
        </div>
    </div>    
</div>


    
    <div class="row">
        <div class="col mb-4 mlr">
            <?php
                $type = 'menu';
                Dgl::category_list($type);
            ?>
        </div>
    </div>

    <?php if(have_posts()) : ?>
    <?php 
        get_template_part('partials/loop', 'portfolio');
        else :
            get_template_part('content', 'none');
        endif;
    ?>
    
    <?php Dgl::pagination_number(); ?>

<?php get_footer();

