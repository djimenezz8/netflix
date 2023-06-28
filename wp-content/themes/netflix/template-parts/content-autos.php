<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('m-auto'); ?>>

	<div id="hero-image" class="imagen-principal p-0 single" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
		<div class="container-fluid degradado h-100 w-100">
			<div class="container mt-5">
				<div class="row w-100 mt-5">
					<div class="col-12 col-md-5">
						<div class="logo-serie mb-2 mt-5"><?php the_content(); ?></div>
						<div class="botones">
							<a type="button" class="btn btn-outline-secondary boton ps-4 pe-4" href="<?php the_permalink(); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
									<path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
								</svg>Play</a>
							<a type="button" class="btn btn-outline-secondary ms-3 boton rounded-circle" href="<?php the_permalink(); ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
									<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
								</svg></a>
							<a type="button" class="btn btn-outline-secondary ms-3 boton rounded-circle" href="<?php the_permalink(); ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
									<path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
								</svg></a>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 mt-4">
						<div class="col-12">
							<p class="m-0"><span><?php netflix_posted_on(); ?></span></p>
						</div>
						<div class="col-12">
						<?php the_field('duracion_de_la_pelicula');?>
						</div>
						<div class="col-12">
							<?php echo get_the_excerpt(); ?>
						</div>
					</div>
					<div class="col-12 col-md-4 mt-4">
						<div class="col-12">
							<p class="text-span">Protagonistas: <span class="text-light">Junko Takeuchi, Chie Nakamura, <br> Kazuhiko Inoue</span></p>
						</div>
						<div class="col-12">
							<p class="text-span">Genero: <span class="text-light">Animes shōnen,Animes de acción,De Japón,Series de anime,Series basadas en manga </span></p>
						</div>
						<div class="col-12">
							<p class="text-span">Este titulo es: <span class="text-light">Disparatado,Emocionante</span></p>
						</div>
						<div class="col-12">
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									Temporada 1
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Temporada 2</a></li>
									<li><a class="dropdown-item" href="#">Temporada 3</a></li>
									<li><a class="dropdown-item" href="#">Temporada 4</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
<div class="container">
	<div class="row mt-5">
		<div class="col-12">
			<h3 class="text-light">Episodios</h3>
			<p class="text-light">Temporada 1</p>
			<ul class="list-group lista-episodios list-group-flush m-0">
			<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-capitulos.php' ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<?php include get_template_directory() . '/assets/modulos/modulo-taxonomia/loop-original.php' ?>
	</div>
</div>

<div class="container">
	<?php get_footer(); ?>
</div>