<?php
//assets scripts//

function comercio_script()
{
    //nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        //nos aseguramos nuestro scripts con el nombre "mi-script" y decimos que es dependiente de jqueri para que wordpress se asegure de incluir JQuerry antes de este archivo//
        //en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuentre la funcion wp_footer


        // Register the script like this for a theme:


        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', false, false);
        // wp_register_script('MI-ARCHIVO-JS', get_bloginfo('template_directory'), '/assets/librerias/js/MIARCHIVO.js', false, false);

        //encolamos los js//
        wp_enqueue_script('bootstrap-js');
        // wp_enqueue_script('MI-ARCHIVO-JS', array('jquery'), true);
    }
}

add_action("wp_enqueue_scripts", "comercio_script", 1);
