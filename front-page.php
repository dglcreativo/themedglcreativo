<?php
//Options theme load
$opt = get_option('dgl_opt');

$front_content = isset($opt['front_content_1']) ? $opt['front_content_1'] : esc_html__( 'Theme Portfolio DGL Creativo', 'dglcreativo' );
$image1 = isset($opt['front_image_1'] ['url']) ? $opt['front_image_1'] ['url'] : '';
$image2 = isset($opt['front_image_2'] ['url']) ? $opt['front_image_2'] ['url'] : '';

get_header();

?>

<?php if($opt['is_fp'] == '1') : ?>

<section class="row box-1">
    <div class="container">
        <div class="section-header">
            <h2><img src="<?php echo esc_url($image1); ?>" alt><img src="<?php echo esc_url($image2) ;?>" alt></h2>
            <p>
                <?php 
                
                    echo dgl_kses_post(wpautop($front_content));
                
                ?>
            </p>
        </div>
    </div>
</section>

<?php else:
    
endif;

get_template_part('partials/fp-section');

get_footer();