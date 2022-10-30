<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if(!class_exists('Redux')){
    return;
}

//Variables
$allowed_string = array(
    
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
    
    'p' => array(
        'class' => array(),
        'text-align' => array()
    ),
    
    'br' => array(),
    'em' => array(),
    'strong' => array()
    
);

//Este es el nombre de su opción donde se almacenan todos los datos de Redux.
$opt_name = 'dgl_opt';

//Esta línea es solo para modificar la demostración. Se puede quitar fácilmente.
$opt_name = apply_filters('redux_demo/opt_name', $opt_name);


/**
* ---> ESTABLECER ARGUMENTOS
* Todos los argumentos posibles para Redux.
* Para obtener documentación completa sobre argumentos, consulte: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
*/

$theme = wp_get_theme(); //Para usar con algunos ajustes. No es necesario.

$args = array(
    
    // TYPICAL -> Cambia estos valores según lo necesites o desees.
    
    // Aquí es donde se almacenan sus datos en la base de datos y también se convierte en su nombre de variable global.
    'opt_name'              => $opt_name,
    
    // Nombre que aparece en la parte superior de su panel
    'display_name'          => $theme->get('Name'),
    
    // Versión que aparece en la parte superior de su panel
    'display_version'       => $theme->get('Version'),
    
    //Especifique si el menú de administración debe aparecer o no. Opciones: menu o submenu (Solo bajo apariencia)
    'menu_type'             => 'menu',
    
    // Mostrar las secciones debajo del elemento del menú de administración o no
    'allow_sub_menu'        => true,
    
    'menu_title'            => esc_html__( 'DGL Settings', 'dglcreativo' ),
    'page_title'            => esc_html__( 'DGL Theme Settings', 'dglcreativo' ),
    
    // Deberá generar una clave API de Google para usar esta función.
    // Ir a: https://developers.google.com/fonts/docs/developer_api#Auth
    // Configúrelo para que las fuentes de Google se actualicen semanalmente. Se requiere un valor de google_api_key.
    'google_api_key'       => '',
    
    // Debe definirse para agregar fuentes de Google al módulo de tipografía.
    'google_update_weekly' => false,
    
    // Use una fuente asíncrona en el front-end o cadena de fuente
    // DEPRECADO SE CAMBIA POR FONT_DISPLAY
    // 'async_typography'     => false,
    
    //Determina cómo se muestra una fuente en función de si se descarga y está lista para usar y cuándo. Acepta auto|block|swap|fallback|optional. Consulte https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display  (abre en ventana nueva)para más información.
    'font_display'         =>'swap',
    
    // Deshabilite esto en caso de que desee crear su propio cargador de fuentes de Google
    //'disable_google_fonts_link' => true,
    
    // Mostrar las páginas del panel en la barra de administración
    'admin_bar'            => true,
    
    //Elija un icono para el menú de la barra de administración
    'admin_bar_icon'       => 'dashicons-portfolio',    
    
    //Configure el tema para el panel de opciones. Acepta wp|classic.  wp cargará el tema de administración seleccionado de wordpress, mientras classic carga el estilo Redux v3.
    'admin_theme'          => 'wp',
    
    // Elija una prioridad para el menú de la barra de administración
    'admin_bar_priority'   => 50,
    
    // Establezca un nombre diferente para su variable global que no sea opt_name
    'global_variable'      => '',
    
    // Deshabilitar a la fuerza el modo de desarrollador
    'dev_mode'             => false,
    
    // Muestra el tiempo que tardó en cargarse la página, etc.
    'forced_dev_mode_off'  => true,
    
    // Si dev_mode está habilitado, notificará al desarrollador sobre las versiones actualizadas disponibles en GitHub Repo
    'update_notice'        => false,
    
    // Habilitar el soporte básico del personalizador
    'customizer'           => true,
    
    // Le permite iniciar el panel de forma expandida inicialmente.
    //'open_expanded'     => true,
    
    // Deshabilitar la advertencia de guardar cuando un usuario cambia un campo
    //'disable_save_warn' => true,

    // OPCIONAL -> Darle características adicionales
    // Ordenar donde aparece el menú en el área de administración. Si hay algún conflicto, algo no se mostrará. Advertencia.
    'page_priority'        => 58,
    
    // Para obtener una lista completa de opciones, visite: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_parent'          => 'themes.php',
    
    // Permisos necesarios para acceder al panel de opciones.
    'page_permissions'     => 'manage_options',
    
    // Especifique una URL personalizada para un icono
    'menu_icon'            => '',
    
    // Obligar a su panel a abrir siempre en una pestaña específica (por id)
    'last_tab'             => '',
    
    // Icono que se muestra en el panel de administración al lado de tu menu_title
    'page_icon'            => 'icon-themes',
    
    // El slug de la página utilizado para indicar el panel, se basará en el título de la página, luego en el título del menú y luego en opt_name si no se proporciona
    'page_slug'            => '',
    
    // Al cargar, guarde los valores predeterminados en la base de datos antes de que el usuario haga clic en guardar o no
    'save_defaults'        => true,
    
    // Si es verdadero, muestra el valor predeterminado junto a cada campo que no es el valor predeterminado.
    'default_show'         => false,
    
    // Qué imprimir por el título del campo si el valor que se muestra es el predeterminado. Sugirió: *
    'default_mark'         => '',
    
    // Muestra el panel Importar/Exportar cuando no se usa como campo.
    'show_import_export'   => true,
    

    // CUIDADO -> Estas opciones son solo para uso avanzado
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    
    // Cierre global para la salida CSS dinámica por parte del marco. También deshabilitará la salida de fuentes de Google
    'output'               => true,
    
    // Permite que se genere CSS dinámico para el personalizador y las fuentes de Google, pero evita que el CSS dinámico vaya a la cabeza
    'output_tag'           => true,
    
    // Deshabilitar el crédito de pie de página de Redux. Por favor, vete si puedes evitarlo.
    // 'footer_credit'     => '',
    

    // FUTURO -> Todavía no en uso, pero reservado o parcialmente implementado. Úselo bajo su propio riesgo.
    
    // posible: opciones, mods_tema, mods_tema_expandido, transitorio. No completamente funcional, ¡advertencia!
    'database'             => '',
    
    // Si prefiere no usar el CDN para Select2, Ace Editor y otros, puede descargar el complemento Redux Vendor Support y ejecutarlo localmente o incrustarlo en su código.
    'use_cdn'              => true,
    
    
    // HINTS
    //Link: https://devs.redux.io/configuration/fields/hints.html
    //Pequeño icono de signo de interrogación. Cuando un usuario mueve el mouse sobre el ícono (o hace clic, opcionalmente), se mostrará una información sobre herramientas con la información adicional que proporcione.
    
    'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                    'color'   => '',
                    'shadow'  => true,
                    'rounded' => false,
                    'style'   => 'youtube',
            ),
            'tip_position'  => array(
                    'my' => 'top left',
                    'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                    'show' => array(
                            'effect'   => 'slide',
                            'duration' => '500',
                            'event'    => 'mouseover',
                    ),
                    'hide' => array(
                            'effect'   => 'slide',
                            'duration' => '500',
                            'event'    => 'click mouseleave',
                    ),
            ),
    )
);


// Agregue contenido después del formulario.
$args['footer_text'] = '<br>'.esc_html__( 'Copyright Dglcreativo &copy; 2022', 'dglcreativo' );

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */


/*
 *
 * ---> START SECTIONS
 *
 */
require get_template_directory().'/options/opt_header.php';
//require get_template_directory().'/options/opt_footer.php';
//require get_template_directory().'/options/opt_menu.php';
//require get_template_directory().'/options/opt_typo.php';
require get_template_directory().'/options/opt_blog.php';
require get_template_directory().'/options/opt_front-page.php';
require get_template_directory().'/options/opt_social.php';
require get_template_directory().'/options/opt_slider.php';
/*
 * <--- END SECTIONS
 */
    
