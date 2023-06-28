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
<section class="row   d-flex justify-content-center align-items-center">
	<?php
	$i = 0;
	$e = 0;
	$temp = $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$post_per_page = -1; // -1 shows all posts
	$args = array(
		'post_type' => 'autos',
		'orderby' => '1',
		'order' => 'ASC',
		'paged' => $paged,
		'posts_per_page' => $post_per_page,
		'tax_query' => array(
			array(
				'taxonomy' => 'capitulos-autos',
				'field'    => 'slug',
				'terms'    => 'si',
			),
		),
	);
	$wp_query = new WP_Query($args);
	if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(''); ?>

			<li class="list-group-item item-list">
				<div class="card m-0 p-0 bg-netflix h-100">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-fluid rounded-start h-100" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title text-light"><?php echo get_the_title(); ?></h5>
								<p class="card-text text-light"><?php echo get_the_excerpt(); ?></p>
								<?php the_field('duracion_de_la_pelicula');?>

							</div>
						</div>
					</div>
				</div>
			</li>

		<?php endwhile; ?>



	<?php else : ?>
		<p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
	<?php endif;
	wp_reset_query();
	$wp_query = $temp ?>





</section>
<!------seccion contacto---->