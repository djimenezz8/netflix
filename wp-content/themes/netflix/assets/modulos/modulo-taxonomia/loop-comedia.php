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
<h3 class="fw-light mt-4 fs-5 text-light">Comedia</h3>
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
				'taxonomy' => 'categoria-autos',
				'field'    => 'slug',
				'terms'    => 'comedia',
			),
		),
	);
	$wp_query = new WP_Query($args);
	if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post('row'); ?>

			<div class="col-6 col-md-3 relacionados m-0 p-0">
				<div class="card text-bg-dark m-1 h-90">
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="card-img h-100" alt="...">
					<div class="card-img-overlay p-0">
						<a class="boton-portada border border-5 border-light p-3 pe-5 ps-5 col-12" href="<?php the_permalink(); ?>"></a>
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
<!------seccion contacto---->