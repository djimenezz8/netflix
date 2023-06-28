<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package netflix
 */

?>

<footer id="colophon" class="site-footer mt-5 container">

	<div class="col-12 row links">
		<?php
		if (is_active_sidebar('widget_uno')) : dynamic_sidebar('widget_uno');
		endif;
		?>
		<?php
		if (is_active_sidebar('widget_dos')) : dynamic_sidebar('widget_dos');
		endif;
		?>
		<?php
		if (is_active_sidebar('widget_tres')) : dynamic_sidebar('widget_tres');
		endif;
		?>
		<?php
		if (is_active_sidebar('widget_cuatro')) : dynamic_sidebar('widget_cuatro');
		endif;
		?>
	</div>
	<div class="col-12 col-md-3 mt-3">
		<button type="button" class="btn btn-outline-secondary rounded-0">Service Code</button>
	</div>
	<div class="row m-0">
		<div class="col-12 col-md-3 mt-3 author p-0">
			<p>© 1997-2023 <span><?php netflix_posted_by(); ?></span>, Inc.</p>
		</div>
	</div>
	<!-- <div class="site-info">
			<a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'netflix' ) ); 
						?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'netflix' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'netflix' ), 'netflix', '<a href="http://underscores.me/">Diego Jimenez</a>' );
				?>
		</div>.site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>