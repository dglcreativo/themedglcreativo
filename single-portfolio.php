<?php 



if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();


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

<section class='box-1 border-bottom'>
    <div class='container'>
        <div class="row align-items-center">
            <div class="col-12 col-md-9">
                <h4>Si quieres algun tipo de proyecto o tienes alguna duda no dudes en ponerte en contacto.</h4>
            </div>
            <div class="col-12 col-md-3">
                <a href="/contacto/" class="btn btn-warning">Ponte en Contacto</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer();