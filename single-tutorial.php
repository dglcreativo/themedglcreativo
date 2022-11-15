<?php 
get_header();
?>

<div class="container">
    
    <?php if(have_rows('secciones_tutorial')): ?>
        <ul>
            <?php while (have_rows('secciones_tutorial')):
                the_row();                                            
            ?>

                <li>
                    <div class="section-header">
                        <h2><?php echo get_sub_field('titulo_seccion'); ?></a></h2>
                        <p><?php echo get_sub_field('descripcion_seccion'); ?></p>
                    </div>
                </li>

            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    
</div>

<?php get_footer();

