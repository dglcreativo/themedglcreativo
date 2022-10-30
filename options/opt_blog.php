<?php

Redux::setSection( 'dgl_opt', array(
	'title'     => esc_html__( 'Blog', 'dglcreativo' ),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

Redux::setSection( 'dgl_opt', array(
    'title'     => esc_html__( 'General', 'dglcreativo' ),
    'id'        => 'blog_meta_opt',
    'icon'      => '',
    'subsection' => true,
    'fields'    => array(
        /**
         * Blog archive Title-bar banner section
         */
        array(
            'id' => 'blog_archive_banner_start',
            'type' => 'section',
            'title' => esc_html__( 'Title-bar Blog', 'dglcreativo' ),
            'indent' => true,
        ),
        
        array(
            'title'     => esc_html__( 'Título del Blog', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Controla el texto del título que se muestra en la barra de título de la  página.', 'dglcreativo' ),
            'id'        => 'blog_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Mi Blog', 'dglcreativo' )
        ),
        
        array(
            'title'         => esc_html__( 'Opciones del Título', 'dglcreativo' ),
            'id'            => 'blog_titlebar_title_typo',
            'type'          => 'typography',
            'google'        => true,
            'text-align'    => true,
            'output'        => array( '.blog .box-3 h2' ),
            'preview'       => array(
                'always_display' => false
            )
        ),
        array(
            'id'     => 'blog_layout_start',
            'type'   => 'section',
            'title' => esc_html__( 'Blog Layout', 'dglcreativo' ),
            'indent' => true,
        ),
        
        array(
            'title'     => esc_html__( 'Diseño del Blog', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'El diseño del blog también se aplicará a la categoría del blog y a las páginas de etiquetas.', 'dglcreativo' ),
            'id'        => 'blog_layout',
            'type'      => 'image_select',
            'options'   => array(
                'list' => array(
                    'alt' => esc_html__( 'List Layout', 'dglcreativo' ),
                    'img' => DGL_IMG.'/layouts/list.jpg'
                ),
                'grid' => array(
                    'alt' => esc_html__( 'Grid Layout', 'dglcreativo' ),
                    'img' => DGL_IMG.'/layouts/grid.jpg'
                ),
            ),
            'default' => 'grid'
        ),
        array(
            'title'     => esc_html__( 'Número de Columnas', 'dglcreativo' ),
            'id'        => 'blog_column',
            'type'      => 'select',
            'options'   => [
                '6' => esc_html__( 'Two', 'dglcreativo' ),
                '4' => esc_html__( 'Three', 'dglcreativo' ),
                '3' => esc_html__( 'Four', 'dglcreativo' ),
            ],
            'default'   => '6',
            'required' => array (
                array ( 'blog_layout', '=', array( 'grid' ) ),
            )
        ),
        array(
            'title'     => esc_html__( 'Caracteres del título', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Longitud del título de la publicación del blog en carácter', 'dglcreativo' ),
            'id'        => 'post_title_length',
            'type'      => 'slider',
            'default'   => 50,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text',
            'required' => array (
                array ( 'blog_layout', '=', array( 'grid' ) ),
            )
        ),
        array(
            'title'     => esc_html__( 'Número de palabras del extracto', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Si el extracto de la publicación está vacío, el contenido del extracto se tomará del contenido de la publicación. Defina aquí la cantidad de palabras que desea mostrar junto con cada publicación en la página del blog.', 'dglcreativo' ),
            'id'        => 'blog_excerpt',
            'type'      => 'slider',
            'default'   => 40,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text'
        ),
        array(
            'title'     => esc_html__( 'Leer Más', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Cambiar el texto del enlace Leer más', 'dglcreativo' ),
            'id'        => 'read_more',
            'type'      => 'text',
            'default'   => esc_html__( 'Leer más', 'dglcreativo' )
        ),
        
        array(
            'title'     => esc_html__( 'Fecha', 'dglcreativo' ),
            'id'        => 'is_post_date',
            'type'      => 'switch',
            'on'        => esc_html__( 'Mostrar', 'dglcreativo' ),
            'off'       => esc_html__( 'Ocultar', 'dglcreativo' ),
            'default'   => '1',

        ),	
    )
            
 ));