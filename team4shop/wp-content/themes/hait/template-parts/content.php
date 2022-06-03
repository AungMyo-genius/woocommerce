<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hait
 */

$postid   			= get_the_ID();
$disable_title 		= get_post_meta( absint($postid), 'disable_title', true );

$disable_meta = '';
if ( is_singular() ) {
	$disable_meta = get_post_meta( absint($postid), 'disable_meta', true );
}

$disable_feat_image = '';
if ( is_singular() ) {
	$disable_feat_image = get_post_meta( absint($postid), 'disable_feat_image', true );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if( ( 'checked' !== $disable_feat_image ) ) {
		hait_post_thumbnail();
	} ?>

	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() && 'checked' !== $disable_meta ) :
			?>
			<div class="entry-meta">
				<?php
				hait_posted_on();
				hait_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php
		if ( is_singular() ) :
			if( ( 'checked' !== $disable_title ) ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			endif;
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

	</header><!-- .entry-header -->

	<?php if ( is_singular() ) : ?>
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hait' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hait' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<?php if ( is_singular() ) : ?>
		<footer class="entry-footer">
			<?php hait_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
