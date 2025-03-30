<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card blog-card-featured'); ?>>
	
	<div class="blog-card-inner <?php if ( has_post_thumbnail() ): ?>has-thumbnail<?php endif; ?>">
	
		<a class="blog-card-link" href="<?php the_permalink(); ?>" rel="bookmark">
		
			<h2 class="blog-card-title">
				<?php the_title(); ?>
			</h2>

			<?php if ( has_post_thumbnail() ): ?>
				<div class="blog-card-thumb">
					<?php the_post_thumbnail('colordive-small'); ?>
				</div>
			<?php else: ?>
			<?php endif; ?>

		</a>
		
		<div class="blog-card-bottom group">
			<div class="blog-card-date"><i class="far fa-calendar"></i> <?php the_time( get_option('date_format') ); ?></div>
			<!--<div class="blog-card-category"><i class="far fa-folder"></i> <?php the_category(' / '); ?></div>-->
			
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
				<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
					<a class="card-comments" href="<?php comments_link(); ?>"><strong><i class="far fa-comment-alt"></i> <span><?php comments_number( '0', '1', '%' ); ?></span></strong></a>
				<?php } ?>
			<?php endif; ?>
			
		</div>
		
	</div>

</article>
