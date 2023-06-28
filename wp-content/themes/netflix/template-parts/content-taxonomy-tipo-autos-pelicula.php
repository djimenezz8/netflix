<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="card text-bg-dark tarjeta-post">
		<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="card-img h-100" alt="<?php echo get_the_title(); ?>">
		<div class="card-img-overlay p-0">
			<a class="boton-tarjeta border border-5 border-white" href="<?php the_permalink(); ?>"></a>
		</div>
	</div>



</article><!-- #post-<?php the_ID(); ?> -->