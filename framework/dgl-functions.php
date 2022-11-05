<?php

/**
 * @param string  $content   Contenido de texto para filtrar.
 * @return string Contenido filtrado que contiene solo el HTML permitido.
 * */
if( ! function_exists( 'dgl_kses_post' ) ) {
    function dgl_kses_post($content) {
        $allowed_tag = array(
            'strong' => [],
            'br' => [],
            'p' => [
                'class' => [],
                'style' => [],
            ],
            'i' => [
                'class' => [],
                'style' => [],
            ],
            'ul' => [
                'class' => [],
                'style' => [],
            ],
            'li' => [
                'class' => [],
                'style' => [],
            ],
            'span' => [
                'class' => [],
                'style' => [],
            ],
            'a' => [
                'href' => [],
                'class' => []
            ],
            'div' => [
                'class' => [],
                'style' => [],
            ],
            'h1' => [
                'class' => [],
                'style' => []
            ],
            'h2' => [
                'class' => [],
                'style' => []
            ],
            'h3' => [
                'class' => [],
                'style' => []
            ],
            'h4' => [
                'class' => [],
                'style' => []
            ],
            'h5' => [
                'class' => [],
                'style' => []
            ],
            'h6' => [
                'class' => [],
                'style' => []
            ],
            'img' => [
                'class' => [],
                'style' => [],
                'height' => [],
                'width' => [],
                'src' => [],
                'srcset' => [],
                'alt' => [],
            ],

        );
        return wp_kses($content, $allowed_tag);
    }
}

/**
 * Determina si se puede mostrar la miniatura de la publicación.
 */
function dgl_can_show_post_thumbnail() {
	return apply_filters( 'dgl_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() );
}

if ( ! function_exists( 'dgl_post_thumbnail' ) ) :
	/**
	 * Muestra una miniatura de publicación opcional.
	 *
	 * Envuelve la miniatura de la publicación en un elemento de anclaje en vistas de índice o un div
         * elemento cuando está en vistas individuales.
	 */
	function dgl_post_thumbnail() {
		if ( ! dgl_can_show_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<figure class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</figure><!-- .post-thumbnail -->

			<?php
		else :
			?>

		<figure class="post-thumbnail">
			<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php the_post_thumbnail( 'post-thumbnail' ); ?>
			</a>
		</figure>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'dgl_posted_on' ) ) :
	/**
	 * Imprime HTML con metainformación para la fecha/hora actual posterior.
	 */
	function dgl_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		printf(
			'<span class="posted-on"><i class="far fa-clock"></i><a href="%1$s" rel="bookmark"> %2$s</a></span>',
			esc_url( get_permalink() ),
			$time_string
		);
	}
endif;

if ( ! function_exists( 'dgl_posted_by' ) ) :
	/**
	 * Imprime HTML con metainformación sobre el autor del tema.
	 */
	function dgl_posted_by() {
		printf(
			/* translators: 1: SVG icon. 2: Post author, only visible to screen readers. 3: Author link. */
			'<span class="byline"><span class="screen-reader-text"></span><span class="author vcard"><i class="fas fa-user-alt"></i><a class="url fn n" href="%2$s"> %3$s</a></span></span>',
			__( 'Posted by', 'dglcreativo' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		);
	}
endif;

if ( ! function_exists( 'dgl_comment_count' ) ) :
	/**
	 * Imprime HTML con el recuento de comentarios de la publicación actual..
	 */
	function dgl_comment_count() {
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';

			/* translators: %s: Post title. Only visible to screen readers. */
			comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'twentynineteen' ), get_the_title() ) );

			echo '</span>';
		}
	}
endif;

if ( ! function_exists( 'dgl_entry_footer' ) ) :
	/**
	 * Imprime HTML con metainformación para las categorías, etiquetas y comentarios.
	 */
	function dgl_entry_footer() {

		// Ocultar autor, fecha de publicación, categoría y texto de etiqueta para las páginas.
		if ( 'post' === get_post_type() ) {

			// Posted by.
			dgl_posted_by();

			// Posted on.
			dgl_posted_on();

			/* translators: Used between list items, there is a space after the comma. */
			$categories_list = get_the_category_list( __( ', ', 'dglcreativo' ) );
			if ( $categories_list ) {
				printf(
					/* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of categories. */
					'<span class="cat-links"><i class="fas fa-tag"></i><span class="screen-reader-text">%1$s</span> %2$s</span>',
					__( 'Posted in', 'dglcreativo' ),
					$categories_list
				); // WPCS: XSS OK.
			}

			/* translators: Used between list items, there is a space after the comma. */
			$tags_list = get_the_tag_list( '', __( ', ', 'dglcreativo' ) );
			if ( $tags_list && ! is_wp_error( $tags_list ) ) {
				printf(
					/* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of tags. */
					'<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
					__( 'Tags:', 'dglcreativo' ),
					$tags_list
				); // WPCS: XSS OK.
			}
		}

		// Comment count.
		if ( ! is_singular() ) {
			dgl_comment_count();
		}

		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'dglcreativo' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
		);
	}
endif;


//Buscar solamente en los post
function dgl_searchengine($query) {
  if ($query->is_search && !is_admin()) {
    $query->set('post_type', array('portfolio'));
  }
  return $query;
}
add_filter( 'pre_get_posts', 'dgl_searchengine' );

/**
 * Post's excerpt text
 * @param string $settings_key opcion concreta que queremos obtener
 * @param bool $echo
 * @return string
 */
function dgl_excerpt($settings_key, $echo = true) {
    $opt = get_option( 'dgl_opt' );
    $excerpt_limit = !empty($opt[$settings_key]) ? $opt[$settings_key] : 40;
    $post_excerpt = get_the_excerpt();
    $excerpt = (strlen(trim($post_excerpt)) != 0) ? wp_trim_words($post_excerpt, $excerpt_limit, '...') : wp_trim_words(get_the_content(), $excerpt_limit, '...');
    if ( $echo == true ) {
        echo wp_kses_post($excerpt);
    } else {
        return wp_kses_post($excerpt);
    }
}

/**
 * Limit latter
 * @param $string
 * @param $limit_length
 * @param string $suffix
 */
function dgl_limit_latter($string, $limit_length, $suffix = '...' ) {
    if (strlen($string) > $limit_length) {
        echo strip_shortcodes(substr($string, 0, $limit_length) . $suffix);
    } else {
        echo strip_shortcodes(esc_html($string));
    }
}