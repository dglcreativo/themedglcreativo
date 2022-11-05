<?php

$args = array(
    'post_type' => 'linkheader', 
);

$the_query= new WP_Query($args);
if($the_query->have_posts()){
    $the_query->the_post();
?>

<header class="h-links">
  
  <nav class="h-links-navbar-main h-links-navbar-pdfelement">
    <div class="h-links-container">
        <div class="h-links-navbar-content">
                                                                                                                              <div class="h-links-navbar-brand">
                <a href="<?php echo get_field('url_general_opciones'); ?>" target="_blank">
                    <?php if(!empty(get_field('imagen_general_opciones'))): ?>
                        <img src="<?php echo get_field('imagen_general_opciones'); ?>">
                    <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/user-default.png'; ?>">
                    <?php endif; ?>
                    <strong style="padding-left: 6px;font-size: 16px;vertical-align: middle;"><?php echo get_field('titulo_general_opciones'); ?></strong>
                </a>
                                                                                                                              </div>
            
            <button class="h-links-navbar-collapse-toggle" type="button" aria-expanded="false">
                <svg class="h-links-navbar-collapse-toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="1.5"></path>
                </svg>
                <svg class="h-links-navbar-collapse-toggle-icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
                    <path d="M6 15L12 9L18 15" stroke="black" stroke-width="1.5"></path>
                </svg>
            </button>
            
            <?php if(get_field('activar_secciones') == true): ?>
            <?php if(have_rows('secciones')): ?>
                    
                    <?php while (have_rows('secciones')):
                        the_row();
                    ?>
            
            <div class="h-links-navbar-collapse">
                <ul class="h-links-navbar-nav">
                    <li class="h-links-navbar-dropdown">
                        
                        <nav class="h-links-navbarDropdown-toggle" aria-expanded="false"> <span><?php echo get_sub_field('titulo_seccion'); ?></span>
                            <div class="h-links-dropdown-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="1.5"></path>
                                </svg>
                            </div>
                        </nav>
                      <div class="h-links-navbarDropdown-menu">
                        <div class="h-links-container">
                          <div class="h-links-dropdownMenu-content">
                            <div class="h-links-dropdownMenu-body">
                              <div class="h-links-dropdownMenuBody-content">
                                <div class="h-links-dropdownMenuBody-item">
                                  <div class="h-links-dropdownMenuBody-box">
                                    <nav class="h-links-dropdownMenuBody-title h-links-mobile-show" aria-expanded="true"> </nav>
                                    
                                    <?php if(have_rows('url_seccion')): ?>
                                        <ul class="h-links-dropdownMenuBody-list">
                                            <?php while (have_rows('url_seccion')):
                                                the_row();                                            
                                            ?>

                                                <li>
                                                    <div class="row align-items-center">
                                                        <?php
                                                            $coltext = empty(get_sub_field('imagen_sub_seccion')) ? 'col-12' : 'col-12 col-md-9';
                                                        ?>
                                                        <?php if(!empty(get_sub_field('imagen_sub_seccion'))){ ?>
                                                        <div class="col-12 col-md-3">
                                                            <figure>
                                                                <img src="<?php echo get_sub_field('imagen_sub_seccion'); ?>">
                                                            </figure>                                                    
                                                        </div>
                                                        <?php } ?>
                                                        <div class="<?php echo esc_attr($coltext) ?>">
                                                            <p><a href="<?php echo get_sub_field('url_sub_seccion'); ?>" target="_blank"><?php echo get_sub_field('titulo_sub_seccion'); ?></a></p>
                                                            <p style="font-size: 1em;"><?php echo get_sub_field('descripcion_sub_seccion'); ?></p>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </li>
                                                <div class="h-links-dropdownMenuBody-hr-horizontal"></div>

                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
            <?php else: ?>
                
            <?php endif;?>
      </div>
    </div>
  </nav>
</header>
<?php }

