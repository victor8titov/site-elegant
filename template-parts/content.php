<?php
/**
 * @package Elegant
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<header class="entry-header">
		<?php
		if ( has_post_thumbnail() ) :
			echo get_the_post_thumbnail( get_the_ID(), 'large', array('class'=>'img-fluid'));
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

		the_title( '<h2 class="entry-title">', '</h2>' );
		
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<h3>
					<?php echo get_the_time('d F Y'); ?>
				</h3>
			</div><!-- .entry-meta -->
		<?php endif; 
		
		the_content(  );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegant' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->	
</article><!-- #post-<?php the_ID(); ?>  -->

