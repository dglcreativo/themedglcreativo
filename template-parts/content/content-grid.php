<?php

$opt = get_option( 'dgl_opt' );

$is_post_date = isset($opt['is_post_date']) ? $opt['is_post_date'] : '1';
$read_more = isset($opt['read_more']) ? $opt['read_more'] : esc_html__( 'Read More', 'dglcreativo' );
$blog_column = !empty($opt['blog_column']) ? $opt['blog_column'] : '6';
$post_title_length = isset($opt['post_title_length']) ? $opt['post_title_length'] : '';

?>
<div <?php post_class("col-lg-$blog_column") ?>>
    <div class="blog_grid_item">
        <?php
        if ( has_post_thumbnail() && $is_post_date == '1' ) : ?>
            <div class="post_date">
                <h2> <?php the_time( 'd' ) ?> <span> <?php the_time( 'M' ) ?> </span></h2>
            </div>
        <?php endif; ?>

        <a href="<?php the_permalink() ?>">
            <?php dgl_post_thumbnail( 'blog', array( 'class' => 'img-fluid')) ?>
        </a>

        <div class="blog_content">

            <a href="<?php the_permalink() ?>" title="<?php echo the_title_attribute() ?>">
                <h5 class="blog_title">
                    <?php dgl_limit_latter(get_the_title(), $post_title_length); ?>
                </h5>
            </a>

            <p> <?php echo strip_shortcodes(dgl_excerpt( 'blog_excerpt', false)); ?> </p>

            <div class="post-info-bottom">
                <a href="<?php the_permalink() ?>" class="btn btn-warning mb-3">
                    <?php echo esc_html($read_more) ?>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
                <footer class="entry-footer mb-4">
                    <?php dgl_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>
        </div>
    </div>
</div>

