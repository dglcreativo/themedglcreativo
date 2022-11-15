<?php

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

if(!class_exists('Dgl')){
    class Dgl{

        /**
        * Menu category list
        * 
        * @since 1.0.0
        */
        public static function category_list($type){ ?>
           <input type="checkbox" id="btn-<?php echo $type; ?>" checked="">
           <label for="btn-<?php echo $type; ?>" class="btn btn-warning"><i class="fa fa-list-ul"> <?php _e('Categorias', 'dgl');?></i></label>
           <nav class="menu-list-tags mb-2">
               <ul>
               <?php
                   if(empty(get_terms(array('taxonomy' => 'portfolio-tags')))){ ?>
                       <span class="no-category"><?php _e('No hay categorias que mostrar'); ?></span>
               <?php } else{
                       $taxTerms = get_terms(array('taxonomy' => 'portfolio-tags'));
                       $btntype = 'btn btn-warning';
                       
                       if($type == 'menu'):
                           $btntype = 'taxonomy-list';
                       endif;

                       foreach ($taxTerms as $taxTerm){ 
                           $linkTaxTerm = get_term_link($taxTerm); ?>                    
                           <li><a  class="<?php echo $btntype; ?>" href="<?php echo $linkTaxTerm;?>"><?php echo $taxTerm -> name;?></a></li>
                 <?php } 
                   } ?>

               </ul>
           </nav>
        <?php
        }
        
        /**
         * Paginación de entradas
         */
        public static function pagination_number(){
            
            // obtenemos el total de páginas
            global $wp_query;
            $total = $wp_query->max_num_pages;
            // solo seguimos con el resto si tenemos más de una página
            if ( $total > 1 )  {
                 // obtenemos la página actual
                 if ( !$current_page = get_query_var('paged') )
                      $current_page = 1;
                 // la estructura de “format” depende de si usamos enlaces permanentes "humanos"
                 $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
                 echo paginate_links(array(
                      'base' => get_pagenum_link(1) . '%_%',
                      'format' => $format,
                      'current' => $current_page,
                      'prev_next' => true,
                      'prev_text' => __('&laquo;'),
                      'next_text' => __('&raquo;'),
                      'total' => $total,
                      'mid_size' => 4,
                      'type' => 'list'
                 ));
            }
        }
        
        /**
         * Redes Sociales
         */
        public static function social_links(){
            $opt = get_option('dgl_opt');
            
            if( !empty($opt['facebook'])) { ?>
            <li data-wow-delay="0.1s" class="wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><a href="<?php echo $opt['facebook'] ?>" target="&quot;_blank&quot;" class="fab fa-facebook" title="facebook"></a></li>
            <?php } ?>
            <?php if( !empty($opt['twitter'])) { ?>
            <li data-wow-delay="0.1s" class="wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><a href="<?php echo $opt['twitter'] ?>" target="&quot;_blank&quot;" class="fab fa-twitter" title="twitter"></a></li>
            <?php } ?>
            <?php if( !empty($opt['linkedin'])) { ?>
            <li data-wow-delay="0.1s" class="wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><a href="<?php echo $opt['linkedin'] ?>" target="&quot;_blank&quot;" class="fab fa-linkedin" title="linkedin"></a></li>
            <?php } ?>
            <?php if( !empty($opt['instagram'])) { ?>
            <li data-wow-delay="0.1s" class="wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><a href="<?php echo $opt['instagram'] ?>" target="&quot;_blank&quot;" class="fab fa-instagram" title="youtube"></a></li>
            <?php } ?>
            <?php if( !empty($opt['github'])) { ?>
            <li data-wow-delay="0.1s" class="wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><a href="<?php echo $opt['github'] ?>" target="&quot;_blank&quot;" class="fab fa-github" title="github"></a></li>
            <?php }
        }
        
        //Title para post y page
        public static function banner_title(){
        
            $opt = get_option('dgl_opt');
            $blog_archive_title = !empty( $opt['blog_archive_title'] ) ? esc_html( $opt['blog_archive_title'] ) : '';
            if ( is_home() ) {
                $blog_title = !empty($opt['blog_title']) ? $opt['blog_title'] : esc_html__( 'Blog', 'dglcreativo' );
                echo esc_html($blog_title);
            } elseif ( is_page() || is_single() ) {
                while ( have_posts() ) : the_post();
                    the_title();
                endwhile;
                wp_reset_postdata();
            } elseif ( is_category() ) {
                single_cat_title();
            } elseif ( is_archive() ) {
                echo !empty( $blog_archive_title ) ? esc_html( $blog_archive_title ) : get_the_archive_title();
            } elseif ( is_search() ) {
                esc_html_e( 'Resultados de la busqueda por: “', 'dglcreativo' );
                echo get_search_query() . '”';
            } elseif(is_404()) {
                esc_html_e('Error 404', 'dglcreativo');
            }
                else {
                the_title();
            }
            
        }
        
        public function logo(){
        
            $opt = get_option('dgl_opt');
            ?>
            <a class="navbar-brand" href="<?php echo esc_url(home_url( '/')) ?>">
                <?php
                    if(isset($opt['main_logo']['url']) && !empty($opt['main_logo']['url'])) :
                        // Normal Logo
                        $main_logo = isset($opt['main_logo'] ['url']) ? $opt['main_logo'] ['url'] : '';
                        // Sticky Logo
                        $sticky_logo = isset($opt['sticky_logo'] ['url']) ? $opt['sticky_logo'] ['url'] : '';
                ?>
                        <img class="responsive-img white-logo" src="<?php echo esc_url($main_logo); ?>" alt="<?php bloginfo( 'name' ); ?>">
                        <img class="responsive-img dark-logo" src="<?php echo esc_url($sticky_logo); ?>" alt="<?php bloginfo( 'name' ); ?>">
                <?php
                    else: ?>
                        <h3 class="m-0"><?php echo get_bloginfo('name') ?></h3>
                    <?php endif;
                ?>
            </a>
            <?php

        }
        
        
    }

}