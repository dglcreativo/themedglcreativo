<?php 

get_header();

$args = array(
    'post_type' => 'tutorial', 
);
$urlLink = get_the_permalink();
$the_query= new WP_Query($args);
if($the_query->have_posts()){
    $the_query->the_post(); 

?>
<div class="container">
    <ol>
        <?php while (have_posts()):
                the_post();                                            
            ?>
            <li>
                <a href="<?php echo $urlLink; ?>"><?php echo the_title(); ?></a>
            </li>
        <?php endwhile;    wp_reset_postdata();?>
    </ol>

</div>
<?php }

get_footer();

