<?php

$opt = get_option('dgl_opt');
$is_search = !empty($opt['is_search']) ? $opt['is_search'] : '';
$icon_classes = ( $is_search == '1' ) ? 'search_exist' : '';

$col_search = ($is_search == '1') ? 'col-12 col-md-8' : 'col-12 col-md-9';

?>

<header class="alt-bg" id="header">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <div class="col-12 col-md-3">
                <div class="logo"> 
                    <?php (new Dgl())->logo() ?>
                </div>
            </div>
            
            <div class="<?php echo esc_attr($col_search) ?>">
                <?php get_template_part('partials/navbar'); ?>
            </div>

            <?php if($opt['is_search'] == '1') : ?>
            <div class="col-12 col-md-1">
                <div class="alter_nav <?php echo esc_attr($icon_classes) ?>">
                    <ul class="navbar-nav">
                    <?php if ( $is_search == '1' ) : ?>
                        <li class="nav-item search text-right">
                            <a class="nav-link search-btn" href="javascript:void(0);">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
            <?php else : 

            endif; ?>

        </div>
    </nav>
</header>

