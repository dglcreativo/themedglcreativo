<?php
// Header Section
Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Header', 'dglcreativo' ),
    'id'               => 'header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
    'fields'            => array(

        array(
            'title'     => esc_html__('Buscar', 'dglcreativo'),
            'subtitle'  => esc_html__('Activa o desactiva el buscador', 'dglcreativo'),
            'id'        => 'is_search',
            'type'      => 'switch',
            'on'        => esc_html__( 'Mostrar', 'dglcreativo' ),
            'off'       => esc_html__( 'Ocultar', 'dglcreativo' ),
            'hint'      => array(
                'title'   => 'Acerca del buscador',
                'content' => 'El buscador será visible en todas las cabeceras.',
            ),
            'default'   => true,
        ),
        
        array(
            'title'     => esc_html__('Tipo de Cabecera', 'dglcreativo'),
            'id'        => 'is_layout_header',
            'hint'      => array(
                'title'   => 'Tipos de Cabeceras',
                'content' => 'Elige el tipo de cabecera que deseas para tu sitio web.',
            ),
            'type'      => 'select',
            'options'   => array(
                '1'     => 'Full Width',
                '2'     => 'Grid',
                '3'     => 'Full Width Invert'
            ),
            'default'   => '2'
        ),
    )
));

//Logo 
Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Logo', 'dglcreativo' ),
    'id'               => 'logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Logo Principal', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Cargue aquí un archivo de imagen para su logotipo', 'dglcreativo' ),
            'id'        => 'main_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky Logo', 'dglcreativo' ),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
               
            )
        ),

        array(
            'title'     => esc_html__( 'Dimensiones del Logo', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Establezca una altura y un ancho personalizados para su logotipo.', 'dglcreativo' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => array( '.navbar-brand>img' )
        ),
        
        array(
            'title'     => esc_html__( 'Dimensiones del Sticky Logo', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Establezca una altura y un ancho personalizados para su logotipo en modo sticky.', 'dglcreativo' ),
            'id'        => 'sticky_logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => array( 'header.alt-bg .navbar.is-scrolling .navbar-brand img' )
        ),

        array(
            'title'     => esc_html__( 'Padding', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Padding alrededor del logotipo. Ingrese el relleno en el sentido de las agujas del reloj (arriba a la derecha, abajo a la izquierda)', 'dglcreativo' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo .navbar-brand' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // Puede especificar un valor unitario. Posible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );


Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Title-bar', 'dglcreativo' ),
    'id'               => 'title_bar_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'title'     => esc_html__( 'Overlay Color', 'dglcreativo' ),
            'id'        => 'banner_overlay_color',
            'type'      => 'color_gradient',
            'default'   => array(
                'from'  => '',
                'to'    => '',
            )
        ),
        
        array(
            'title'     => esc_html__( 'Title-bar padding', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Padding alrededor del Title-bar.', 'dglcreativo' ),
            'id'        => 'title_bar_padding',
            'type'      => 'spacing',
            'output'    => array( '.box-3' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),
            'units_extended' => 'true',
            'default'   => array(
                'padding-top' => '150px',
                'padding-bottom' => '110px',
                'units' => 'px'
            )
        ),

    )
));

