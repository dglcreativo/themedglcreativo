<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();

$opt = get_option('dgl_opt');
$blog_column = is_active_sidebar('sidebar_widgets') ? '8' : '12';
$blog_layout = !empty($opt['blog_layout']) ? $opt['blog_layout'] : 'grid';
?>

<?php if(!is_search()) : ?>
<section class="row box-2">
    <div class="container">
        <div class="section-header">
            <h2><img src="<?php echo DGL_IMG ;?>dglcreativo-1.png" alt="Soy Luis"><img src="<?php echo DGL_IMG ;?>tree-line.png" alt="Desarrollo DGL Creativo"></h2>
            <h2>NOTICIAS DESTACADAS</h2>
            <p>
                <?php 
                    _e('Mira las últimas noticias relacionadas con el mundo del diseño web, diseño gráfico... Y no esperes a que te lo cuenten, ponte al día.');
                ?>
            </p>
        </div>
    </div>
</section>
<?php else :
                
    endif;
?>
    
<div class="section-header">

    <div class="container">
        <div class="row">
            <div class="col-lg-<?php echo esc_attr($blog_column); ?>">
            <?php
                
                if(have_posts()){
                    if($blog_layout == 'list'){
                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content/content', 'list');
                        endwhile;
                    } elseif ($blog_layout == 'grid') { ?>
                        <div class="row"> <?php
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content/content', 'grid');
                            endwhile;
                            ?>
                        </div> <?php
                    }
                }
                else{
                    echo '<h3>No se han encontrado post</h3>';
                }
                Dgl::pagination_number();
            ?>
            </div>
        </div>
    </div> 

</div>
    


<?php
get_footer();
