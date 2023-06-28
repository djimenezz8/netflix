<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

get_header();
?>

<!-- <header class="page-header">
				<?php
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>.page-header -->

<main id="primary" class="container margen-titulo">
<h2 class="mt-5 mb-4 text-light fw-light">Peliculas</h2>
	<div class="row row-cols-2 row-cols-md-4 g-3 gy-4">

		<?php if (have_posts()) : ?>


		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post('');

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content-taxonomy-tipo-autos-pelicula', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();

