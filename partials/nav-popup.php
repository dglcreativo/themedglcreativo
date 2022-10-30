<?php

$type = 'popup';
Dgl::category_list($type);

$args=array(
    'post_type' => 'portfolio',
    'posts_per_page'  => '3',
        
    );

$the_query= new WP_Query($args); ?>

<?php if($the_query->have_posts()){
    while($the_query->have_posts()):
        $the_query->the_post();
        $title = get_field('pf-title');
        $imgData = get_field('pf-imagen');
        $image = $imgData['sizes']['large'];
        $descripcion = get_field('pf-description');
        $nboton = get_field('pf-nombre-boton');
        $eboton = get_field('pf-enlace-boton');
        $color = get_field('pf-color-fondo');
        $urlLink = get_the_permalink();
        ?>
        <section class="row box-1" style="background:<?php echo $color; ?>">
            <div class="container">
                <div class="section-header">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <figure class="transition">
                                <img src="<?php echo $image;?>">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-7">
                            <p class="white"><?php echo $title;?></p>
                            <p class="white"><?php echo $descripcion;?></p>
                            <a href="<?php echo $eboton; ?>" class="btn btn-warning"><?php echo $nboton; ?></a>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>

    <?php endwhile; wp_reset_postdata();

}

