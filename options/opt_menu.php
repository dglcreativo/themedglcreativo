<?php

// Navbar styling
Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Menu', 'dglcreativo' ),
    'id'               => 'menu_opt',
    'icon'             => 'el el-lines',
));

/**
 * Main Menu styling
 */
Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Menu Principal', 'dglcreativo' ),
    'id'               => 'main_menu_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'            => 'menu_typo',
            'type'          => 'typography',
            'title'         => esc_html__( 'Menu Tipografía', 'dglcreativo' ),
            'subtitle'      => esc_html__( 'Opciones de tipografía de elementos de menú', 'dglcreativo' ),
            'color'         => false,
            'output'        => array('.main-menu .menu li a' )
        ),
        
        array(
            'title'         => esc_html__( 'Menu Item Color', 'dglcreativo' ),
            'subtitle'      => esc_html__( 'Este es el color de fuente del elemento del menú. Además, este color se aplicará en el ícono de hamburguesa del menú móvil para mantener la consistencia del color.', 'dglcreativo' ),
            'id'            => 'menu_font_color',
            'type'          => 'color',
            'output'        => array (
                'color'      => '#header .main-menu .menu li a',
                'background' => '',
            ),
        ),

        array(
            'title'     => esc_html__( 'Active/Hover Color', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Color de fuente del elemento del menú en active y hover', 'dglcreativo' ),
            'id'        => 'menu_active_font_color',
            'output'    => array(
                'color' => '#header .main-menu .menu li a:hover',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__( 'Menu item padding', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Padding alrededor del elemento del menú.', 'dglcreativo' ),
            'id'        => 'menu_item_padding',
            'type'      => 'spacing',
            'output'    => array( '.menu > li' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Menu item margin', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Margin alrededor del elemento del menú.', 'dglcreativo' ),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '#header .main-menu .menu li a' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
));

