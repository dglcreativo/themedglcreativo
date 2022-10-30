<?php

Redux::setSection('dgl_opt', array(
    'title'         => esc_html__('Tipografias', 'dglcreativo'),
    'id'            => 'dgl_typo_opt',
    'icon'          => 'dashicons dashicons-editor-textcolor',
    'fields'        => array(
        
        array(
            'title'         => esc_html__('Nota Importante', 'dglcreativo'),
            'id'            => 'typo_note',
            'type'          => 'info',
            'style'         => 'success',
            'icon'          => 'dashicons dashicons-info',
            'desc'          => esc_html__('Esta pestaña contiene opciones generales de tipografía. Se pueden encontrar opciones de tipografía adicionales para áreas específicas en otras pestañas. Ejemplo: para las opciones de tipografía del menú, vaya a la pestaña Configuración del menú.', 'dglcreativo')            
        ),
        
        array(
            'title'         => esc_html__( 'Carga de fuente predeterminada', 'dglcreativo' ),
            'subtitle'      => esc_html__( 'Puede desactivar la carga de fuentes predeterminada.', 'dglcreativo' ),
            'id'            => 'is_default_font',
            'type'          => 'switch',
            'on'            => esc_html__( 'Cargar', 'dglcreativo' ),
            'off'           => esc_html__( 'Desactivar', 'dglcreativo' ),
            'default'       => true
        ),
        
        array(
            'id'            => 'body_typo',
            'type'          => 'typography',
            'title'         => esc_html__( 'Tipografía del body', 'dglcreativo' ),
            'subtitle'      => esc_html__( 'Estos ajustes controlan la tipografía del cuerpo del texto globalmente.', 'dglcreativo' ),
            'description'   => sprintf (
                '%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                esc_html__( 'Puedes agregar tu propia fuente personalizada', 'dglcreativo' ),
                get_admin_url(null, 'edit-tags.php?taxonomy=dt_custom_fonts' ),
                esc_html__( 'aqui.', 'dglcreativo' ),
                esc_html__( 'Obtendrá las fuentes personalizadas en la tipografía\'s Lista de familias de fuentes.', 'dglcreativo' )
            ),
            'output'        => array(
                'body'
            )
        ),
    )
));

/* HEADER TIPOGRAFIAS */

Redux::setSection( 'dgl_opt', array(
    'title'            => esc_html__( 'Headers Tipografias', 'dglcreativo' ),
    'id'               => 'headers_typo_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'        => 'typo_note_headers',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Nota Importante:', 'dglcreativo' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'Esta pestaña contiene opciones generales de tipografía. Se pueden encontrar opciones de tipografía adicionales para áreas específicas en otras pestañas. Ejemplo: para las opciones de tipografía del menú, vaya a la pestaña Configuración del menú.', 'dglcreativo' )
        ),

        array(
            'id'        => 'h1_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Tipografía', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Estos ajustes controlan la tipografía de todos los encabezados H1.', 'dglcreativo' ),
            'output'    => array( 'h1, h1.f_p, .breadcrumb_content h1' )
        ),

        array(
            'id'        => 'h2_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Tipografía', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Estos ajustes controlan la tipografía de todos los encabezados H2. La etiqueta de título h2 utilizada en la mayoría de los títulos de sección.', 'dglcreativo' ),
            'output'    => array( 'h2, h2.f_p' )
        ),
        array(
            'id'        => 'h3_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Tipografía', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Estos ajustes controlan la tipografía de todos los encabezados H3.', 'dglcreativo' ),
            'output'    => array( 'h3, h3.f_p, .job_details_area h3' )
        ),

        array(
            'id'        => 'h4_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Tipografía', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Estos ajustes controlan la tipografía de todos los encabezados H4.', 'dglcreativo' ),
            'output'    => array( 'h4, h4.f_p' )
        ),

        array(
            'id'        => 'h5_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Tipografía', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Estos ajustes controlan la tipografía de todos los encabezados H5.', 'dglcreativo' ),
            'output'    => array( 'h5, h5.f_p' )
        ),

        array(
            'id'        => 'h6_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Tipografía', 'dglcreativo' ),
            'subtitle'  => esc_html__( 'Estos ajustes controlan la tipografía de todos los encabezados H6.', 'dglcreativo' ),
            'output'    => array( 'h6, h6.f_p, .job_info .info_item h6' )
        ),
    )
));

