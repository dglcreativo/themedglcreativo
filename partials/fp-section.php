<?php

$args=array(
    'post_type' => 'front',
    'orderby' => 'name',
    'order' => 'ASC',
    'posts_per_page'  => '-1',
        
    );

$the_query= new WP_Query($args); ?>

<?php if($the_query->have_posts()){
    while($the_query->have_posts()):
        $the_query->the_post();
        $title = get_field('fp-title');
        $imgData = get_field('fp-imagen');
        $image = $imgData['sizes']['large'];
        $descripcion = get_field('fp-description');
        $nboton = get_field('fp-nombre-boton');
        $eboton = get_field('fp-enlace-boton');
        $color = get_field('fp-color-fondo');
        $urlLink = get_the_permalink();
        ?>
        <section class="row box-1" style="background:<?php echo $color; ?>">
            <div class="container">
                <div class="section-header">
                    <figure class="transition">
                            <img src="<?php echo $image;?>">
                    </figure>
                    <p class="white"><?php echo $title;?></p>
                    <p class="white"><?php echo $descripcion;?></p>
                    <a href="<?php echo $eboton; ?>" class="btn btn-warning"><?php echo $nboton; ?></a>
                </div>
            </div>
        </section>

    <?php endwhile; wp_reset_postdata();

} ?> 

