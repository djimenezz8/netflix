<script>
	function incrustar_hoja_estilos_comision() {
		var hoja_estilos_url =
			'<?php echo get_site_url() . '/wp-content/themes/netflix/assets/modulos/modulo-taxonomia/modulo-video.css'; ?>';
		var hoja_estilos = document.createElement('link');
		hoja_estilos.rel = 'stylesheet';
		hoja_estilos.href = hoja_estilos_url;
		document.head.appendChild(hoja_estilos);
	}
	incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="row">

	<?php
	$i = 0;
	$e = 0;
	$temp = $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$post_per_page = -1; // -1 shows all posts
	$args = array(
		'post_type' => 'autos',
		'orderby' => 'rand',
		'order' => 'DESC',
		'paged' => $paged,
		'posts_per_page' => $post_per_page,
		'tax_query' => array(
			array(
				'taxonomy' => 'etiqueta-autos',
				'field'    => 'slug',
				'terms'    => 'portada',
			),
		),
	);
	$wp_query = new WP_Query($args);
	if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post('contenedor-contenido'); ?>
			<div id="hero-image" class="imagen-principal p-0 mb-5 portada" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
				<div class="container-fluid degradado h-100 w-100">
					<div class="container">
						<div class="row w-100">
							<div class="col-12 col-md-5">
							<?php
								$image = get_field('logo_netflix');
								if (!empty($image)) : ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>

								<h1 class="fs-5 fw-normal"><?php echo get_the_title(); ?></h1>
								<p class="texto-portada"><?php echo get_the_excerpt(); ?></p>
								
								<?php the_field('duracion_de_la_pelicula'); ?>
								<div class="botones">
									<a type="button" class="btn btn-secondary boton" href="<?php the_permalink(); ?>">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
											<path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
										</svg>Play</a>
									<a type="button" class="btn btn-secondary ms-3 boton" href="<?php the_permalink(); ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
											<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
										</svg>Más Información</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>



	<?php else : ?>
		<p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
	<?php endif;
	wp_reset_query();
	$wp_query = $temp ?>





</section>