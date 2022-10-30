<?php

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

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
        <figure class="transition">
                <img src="<?php echo $image;?>">
        </figure>
        <p class="white"><?php echo $title;?></p>
        <p class="white"><?php echo $descripcion;?></p>
        <a href="<?php echo $eboton; ?>" class="btn btn-warning"><?php echo $nboton; ?></a>
    </div>
</div>
</section>



