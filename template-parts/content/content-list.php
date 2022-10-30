<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dglcreativo
 */

$allowed_html = array(
	'a' => array(
		'href' => array(),
		'title' => array()
	),
	'br' => array(),
	'em' => array(),
	'strong' => array(),
    'iframe' => array(
        'src' => array(),
    )
);

$opt = get_option( 'dgl_opt' );
$is_post_meta = isset($opt['is_post_meta']) ? $opt['is_post_meta'] : '1';

$is_post_date = isset($opt['is_post_date']) ? $opt['is_post_date'] : '1';

$read_more = isset($opt['read_more']) ? $opt['read_more'] : esc_html__( 'Read More', 'dglcreativo' );

?>

<div <?php post_class('blog_list_item') ?>>
    
    <?php
        if ( has_post_thumbnail() ) :
            if ( $is_post_date == '1' ) : ?>
                <div class="post_date">
                    <h2> <?php the_time( 'd' ) ?> <span> <?php the_time( 'M' ) ?> </span> </h2>
                </div>
            <?php endif; ?>
            <a href="<?php the_permalink() ?>">
                <?php dgl_post_thumbnail( 'full', array( 'class' => 'img-fluid')) ?>
            </a>
            <?php
        endif;
    ?>
    
    <div class="blog_content">
        <a class="blog_title" href="<?php the_permalink() ?>">
            <h5 class="blog_title"> <?php the_title() ?>  </h5>
        </a>
        <p> <?php echo strip_shortcodes(dgl_excerpt( 'blog_excerpt', false)); ?> </p>
        <div class="post-info-bottom">
            <a href="<?php the_permalink() ?>" class="btn btn-warning">
                <?php echo esc_html($read_more) ?> <i class="fas fa-long-arrow-alt-right"></i>
            </a>
            <footer class="entry-footer mt-4 mb-4">
		<?php dgl_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
    </div>
    
</div>

