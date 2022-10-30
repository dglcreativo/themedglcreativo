<?php
Redux::setSection( 'dgl_opt', array(
    'title'     => esc_html__( 'Social links', 'dglcreativo' ),
    'id'        => 'opt_social_links',
    'icon'      => 'dashicons dashicons-share',
    'fields'    => array(

        array(
            'id'    => 'facebook',
            'type'  => 'text',
            'title' => esc_html__( 'Facebook', 'dglcreativo' ),
            'default'	 => '#'
        ),

        array(
            'id'    => 'twitter',
            'type'  => 'text',
            'title' => esc_html__( 'Twitter', 'dglcreativo' ),
            'default'	  => '#'
        ),

        array(
            'id'    => 'instagram',
            'type'  => 'text',
            'title' => esc_html__( 'Instagram', 'dglcreativo' ),
        ),

        array(
            'id'    => 'linkedin',
            'type'  => 'text',
            'title' => esc_html__( 'LinkedIn', 'dglcreativo' ),
            'default'	  => '#'
        ),

        array(
            'id'    => 'github',
            'type'  => 'text',
            'title' => esc_html__( 'GitHub', 'dglcreativo' ),
        ),

    ),
));

