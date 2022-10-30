<?php

//Slider Section
Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Slider', 'dglcreativo' ),
    'id'               => 'slider_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-graph ',
    'fields'            => array(

        array(
            'title'     => esc_html__('Activar Slider', 'dglcreativo'),
            'subtitle'  => esc_html__('Activa o desactiva el slider', 'dglcreativo'),
            'id'        => 'is_slider',
            'type'      => 'switch',
            'on'        => esc_html__( 'Mostrar', 'dglcreativo' ),
            'off'       => esc_html__( 'Ocultar', 'dglcreativo' ),
            'default'   => false,
        ),

        array(
            'title'     => esc_html__('Slides', 'dglcreativo'),
            'id'        => 'our_slides',
            'type'      => 'slides',
            'required'  => array( 'is_slider', '=', '1' )
        ),

        array(
            'id'       => 'titlebar_align',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Alineación', 'dglcreativo' ),
            'options' => array(
                'left' => esc_html__( 'Left', 'dglcreativo' ),
                'center' => esc_html__( 'Center', 'dglcreativo' ),
                'right' => esc_html__( 'Right', 'dglcreativo' )
            ),
            'default' => 'center',
            'required'  => array( 'is_slider', '=', '1' )
        ),
    )
));