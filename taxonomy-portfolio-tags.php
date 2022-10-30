<?php

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$postTypeLabel = $wp_post_types['portfolio']->label;
$postTypeSlug= $wp_post_types['portfolio']->rewrite['slug'];
$termCurrent = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
$allTerms = get_terms(array('taxonomy' => 'portfolio-categories') );
$active='';

?>

<div class="row mt-4">
    <div class="container">
        <div class="section-header">
            <h1 class="h1-pf">
                <?php
                    // Si es un termino de la taxonomia
                    if($termCurrent):
                        //echo $termCurrent->name . ' - ' . $postTypeLabel;
                    else:
                        echo $postTypeLabel;
                    endif; 
                ?> 
            </h1>
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

