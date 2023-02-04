<?php 

get_header();

$args = array(
    'post_type' => 'tutorial', 
);

$the_query= new WP_Query($args);
if($the_query->have_posts()){
    $the_query->the_post(); 

?>
<div class="my-4">
    <div class="container">
        <div class="row">
            <?php while (have_posts()):
                    the_post();                                            
                ?>
            <div class="col-12 col-md-6">
                <div class="section-header">
                    <a href="<?php the_permalink() ?>">
                        <?php dgl_post_thumbnail( 'blog', array( 'class' => 'img-fluid')) ?>
                    </a>
                    <div class="mt-3">
                        <a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile;    wp_reset_postdata();?>
        
        </div>
    </div>
</div>
<?php }

get_footer();

