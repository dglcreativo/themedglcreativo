<?php

Redux::setSection( 'dgl_opt', array(
	'title'     => esc_html__( 'Front Page', 'dglcreativo' ),
	'id'        => 'front_page',
	'icon'      => 'dashicons dashicons-admin-post',    
        'fields'          => array(
            
            array(
                'title'     => esc_html__('Mostrar Opciones', 'dglcreativo'),
                'subtitle'  => esc_html__('Activa o desactiva las opciones', 'dglcreativo'),
                'id'        => 'is_fp',
                'type'      => 'switch',
                'on'        => esc_html__( 'Mostrar', 'dglcreativo' ),
                'off'       => esc_html__( 'Ocultar', 'dglcreativo' ),
                'default'   => true,
            ),
            
            array(
                'title'     => esc_html('Imagen 1', 'dglcreativo'),
                'id'        => 'front_image_1',
                'type'      => 'media',
                'subtitle'  => esc_html__( 'Imagen predetermnada para la seccion1 del front-page.', 'dglcreativo' ),
                'compiler'  => true,
                'default'   => array(
                    'url'   => DGL_IMG.'tree-line-1.png'
                ),
                'required'  => array( 'is_fp', '=', '1' )
            ),
            array(
                'title'     => esc_html('Imagen 2', 'dglcreativo'),
                'id'        => 'front_image_2',
                'type'      => 'media',
                'subtitle'  => esc_html__( 'Imagen predetermnada para la seccion1 del front-page.', 'dglcreativo' ),
                'compiler'  => true,
                'default'   => array(
                    'url'   => DGL_IMG.'dglcreativo-1.png'
                ),
                'required'  => array( 'is_fp', '=', '1' )
            ),
            array(
            'title'     => esc_html__( 'Zona superior', 'dglcreativo' ),
            'id'        => 'front_content_1',
            'type'      => 'editor',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'quicktags'     => true,
            ),
            'required'  => array( 'is_fp', '=', '1' )
        ),
    )
));
