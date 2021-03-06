<?php
// Theme prefix
$prefix = 'silvia-';

// Set up empty variable
$size = '';

// Get the data set in customizer
$layout = silvia_mod( $prefix . 'grid-layout' );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('front-page'); ?> <?php hybrid_attr( 'post' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			<div class="thumbnail-container">
				<?php the_post_thumbnail( 'full', array( 'class' => 'entry-thumbnail', 'alt' => esc_attr( get_the_title() ) ) ); ?>
			</div>
			<div class="entry-container">
				<?php the_title( sprintf( '<h2 class="entry-title" ' . hybrid_get_attr( 'entry-title' ) . '><a href="%s" rel="bookmark" itemprop="url">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div>
		</a>
	<?php endif; ?>
	
</article><!-- #post-## -->
