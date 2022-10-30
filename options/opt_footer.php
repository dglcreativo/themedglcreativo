<?php

// Footer settings
Redux::setSection( 'dgl_opt', array(
	'title'     => esc_html__( 'Footer', 'dglcreativo' ),
	'id'        => 'dglcreativo_footer',
	'icon'      => 'el el-arrow-down',
    'fields'           => array(
        
        array(
            'title'     => esc_html__( 'Columnas del footer', 'dglcreativo' ),
            'id'        => 'footer_column',
            'type'      => 'select',
            'default'   => '3',
            'options'   => array(
                '6' => esc_html__( 'Dos columnas', 'dglcreativo' ),
                '4' => esc_html__( 'Tres columnas', 'dglcreativo' ),
                '3' => esc_html__( 'Cuatro columnas', 'dglcreativo' ),
            )
        ),
        array(
            'id'             => 'dglcreativo-footer-spacing',
            'type'           => 'spacing',
            'output'         => array('.new_footer_top'),
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('Padding', 'dglcreativo'),
            'default'            => array(
                'padding-top'     => '120px',
                'padding-right'   => '0px',
                'padding-bottom'  => '270px',
                'padding-left'    => '0px',
                'units'          => 'px',
            )
        )
    )
));

// Footer settings
Redux::setSection( 'dgl_opt', array(
	'title'     => esc_html__( 'Colores Fuentes', 'dglcreativo' ),
	'id'        => 'dglcreativo_footer_font_colors',
	'icon'      => '',
	'subsection'=> true,
	'fields'    => array(
        array(
            'title'     => esc_html__( 'Color de fuente', 'dglcreativo' ),
            'id'        => 'footer_top_font_color',
            'type'      => 'color_rgba',
            'output'    => array( '.footer-widget p, .footer-widget ul li a' )
        ),
        array(
            'title'     => esc_html__( 'Widget: Color del título', 'dglcreativo' ),
            'id'        => 'widget_title_color',
            'type'      => 'color',
            'output'    => array( '.footer-widget .widget_title' )
        ),
        array(
            'title'     => esc_html__( 'Widget: Color de la lista', 'dglcreativo' ),
            'id'        => 'widget_list_color',
            'type'      => 'color',
            'output'    => array( '.new_footer_top .f_widget.about-widget ul li a' )
        ),
        array(
            'title'     => esc_html__( 'Widget: Color hover de la lista', 'dglcreativo' ),
            'id'        => 'widget_list_hover_color',
            'type'      => 'color',
            'output'    => array( '.new_footer_top .f_widget.about-widget ul li a:hover' )
        ),
        array(
            'title'     => esc_html__( 'Color de fuente del footer inferior', 'dglcreativo' ),
            'id'        => 'footer_bottom_text_color',
            'type'      => 'color',
            'output'    => array( '.new_footer_area .footer_bottom p' )
        ),
	)
));

// Footer background
Redux::setSection( 'dgl_opt', array(
	'title'     => esc_html__( 'Background', 'dglcreativo' ),
	'id'        => 'dglcreativo_footer_background',
	'icon'      => '',
	'subsection'=> true,
	'fields'    => array(
        array(
            'title'     => esc_html__( 'Imagen de fondo', 'dglcreativo' ),
            'desc'      => esc_html__( 'La imagen de fondo del pie de página principal', 'dglcreativo' ),
            'id'        => 'footer_bg_image',
            'type'      => 'media',
            'default'   => array(
                //'url' => DGL_DIR_IMG.'/footer/footer_bg.png'
            )
        ),
        array(
            'title'     => esc_html__( 'Color de fondo', 'dglcreativo' ),
            'id'        => 'footer_top_bg_color',
            'type'      => 'color',
            'output'    => array( '.new_footer_area' ),
            'mode'      => 'background'
        ),
        array(
            'title'     => esc_html__( 'Color de fondo del footer inferior', 'dglcreativo' ),
            'id'        => 'footer_btm_bg_color',
            'type'      => 'color',
            'output'    => array( '.footer_bottom' ),
            'mode'      => 'background'
        ),
	)
));


// Footer Typography
Redux::setSection( 'dgl_opt', array(
    'title'     => esc_html__( 'Tipografías', 'dglcreativo' ),
    'id'        => 'dglcreativo_footer_typography',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'         => esc_html__( 'Titulo del widget', 'dglcreativo' ),
            'id'            => 'footer_title_typo',
            'type'          => 'typography',
            'color'         => false,
            'output'        => array( '.footer-widget .widget_title' ),
        ),
        array(
            'title'         => esc_html__( 'Contenido de los widgets', 'dglcreativo' ),
            'id'            => 'widget_content_typo',
            'type'          => 'typography',
            'color'         => false,
            'output'        => array( '.new_footer_top p, .new_footer_top .f_widget.about-widget ul li a' ),
        ),
    )
));


// Footer settings
Redux::setSection( 'dgl_opt', array(
    'title'     => esc_html__( 'Footer Inferior', 'dglcreativo' ),
    'id'        => 'dglcreativo_footer_btm',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'     => esc_html__( 'Zona izquierda', 'dglcreativo' ),
            'id'        => 'copyright_txt',
            'type'      => 'editor',
            'default'   => '© 2022 <a href="http://dglcreativo.x10host.com">Dgl Creativo</a>. Todos los derechos reservados',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'quicktags'     => false,
            )
        ),
        array(
            'title'     => esc_html__( 'Zona derecha', 'dglcreativo' ),
            'id'        => 'right_content',
            'type'      => 'editor',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'quicktags'     => false,
            )
        ),
    )
));

