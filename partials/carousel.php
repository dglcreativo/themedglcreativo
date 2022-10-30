<?php 

$opt = get_option('dgl_opt');

$slider = $opt['our_slides'];
$titlebar_align = !empty($opt['titlebar_align']) ? $opt['titlebar_align'] : 'center';


?>

<div class="owl-carousel">

    <?php

        foreach($slider as $slide) { ?>

            <div class="owl-carousel-img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $slide['image']; ?>)">

                <div class="container">
                    <div class="row text-<?php echo esc_attr($titlebar_align) ?> info-text-carousel">
                        <h1 class="w-100"><?php echo $slide['title']; ?></h1>
                        <h6 class="w-100 mb-3"><?php echo $slide['description']; ?></h6>
                        <?php if(!empty($slide['url'])){ ?>
                            <div class="w-100">
                                <a href="<?php echo $slide['url']; ?>" class="btn btn-warning">Ver más</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            
        <?php }
     
    ?>

</div>

