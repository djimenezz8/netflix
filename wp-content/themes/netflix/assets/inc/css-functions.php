<?php

function css_wordpress()
{

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css');
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Lora&display=swap', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('fuentes');
}

add_action('wp_enqueue_scripts', 'css_wordpress');
/*assets styles*/