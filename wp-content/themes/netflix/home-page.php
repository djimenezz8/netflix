<?php
/**
 * Template Name: Home-Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

get_header(); ?>
<div class="container-fluid">
<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-video.php' ?>
</div>
<div class="container">
<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-anime.php' ?>
</div>
<div class="container">
<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-original.php' ?>
</div>
<div class="container">
<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-ciencia-ficcion.php' ?>
</div>
<div class="container">
<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-comedia.php' ?>
</div>
<div class="container">
<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-accion.php' ?>
</div>
<div class="container">
<?php get_footer(); ?>
</div>

<?php

