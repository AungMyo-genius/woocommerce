<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hait
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php hait_post_thumbnail(); ?>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			hait_posted_on();
			hait_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
