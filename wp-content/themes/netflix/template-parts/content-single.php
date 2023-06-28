<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-10 m-auto'); ?>>
	<img class="img-fluid w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_excerpt(); ?>">

	<span><?php netflix_posted_on(); ?></span>

	<span><?php netflix_posted_by(); ?></span>

	<h1><?php echo get_the_title(); ?></h1>

	<p><?php echo get_the_excerpt(); ?></p>

	<p><?php the_content(); ?></p>
	
	<span><?php netflix_entry_footer(); ?></span>

</article><!-- #post-<?php the_ID(); ?> -->
