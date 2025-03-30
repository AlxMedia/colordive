<div class="page-title">

	<?php if ( is_home() ) : ?>
		<h2 class="small-heading"><?php echo colordive_blog_title(); ?></h2>
		
	<?php elseif ( is_single() ): ?>

	<?php elseif ( is_page() ): ?>
		<h1 class="small-heading"><?php the_title(); ?></h1>

	<?php elseif ( is_search() ): ?>
		<h1 class="small-heading">
			<?php if ( have_posts() ): ?><?php endif; ?>
			<?php if ( !have_posts() ): ?><?php endif; ?>
			<?php $search_results=$wp_query->found_posts;
				if ($search_results==1) {
					echo $search_results.' '.esc_html__('Search result','colordive');
				} else {
					echo $search_results.' '.esc_html__('Search results','colordive');
				}
			?>
		</h1>
		<div class="page-title-box">
			<?php esc_html_e('For the term','colordive'); ?> "<span><?php echo get_search_query(); ?></span>".
			<?php if ( !have_posts() ): ?>
				<?php esc_html_e('Please try another search:','colordive'); ?>
			<?php endif; ?>
			<div class="search-again">
				<?php get_search_form(); ?>
			</div>
		</div>
		
	<?php elseif ( is_404() ): ?>
		<h1 class="small-heading"><?php esc_html_e('Error 404','colordive'); ?></h1>
		<div class="page-title-box">	
			<p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'colordive' ); ?></p>
			<div class="search-again">
				<?php get_search_form(); ?>
			</div>
		</div>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1 class="small-heading"><?php echo $author->display_name;?></h1>
		
	<?php elseif ( is_category() ): ?>
		<h1 class="small-heading"><?php echo single_cat_title('', false); ?></h1>

	<?php elseif ( is_tag() ): ?>
		<h1 class="small-heading"><?php echo single_tag_title('', false); ?></h1>
		
	<?php elseif ( is_day() ): ?>
		<h1 class="small-heading"><?php echo esc_html( get_the_time('F j, Y') ); ?></h1>
		
	<?php elseif ( is_month() ): ?>
		<h1 class="small-heading"><?php echo esc_html( get_the_time('F Y') ); ?></h1>
			
	<?php elseif ( is_year() ): ?>
		<h1 class="small-heading"><?php echo esc_html( get_the_time('Y') ); ?></h1>

	<?php else: ?>
		<h2 class="small-heading"><?php the_title(); ?></h2>

	<?php endif; ?>

	<?php if ( ! is_paged() ) : ?>
		<?php the_archive_description( '<div class="page-title-box">', '</div>' ); ?>
	<?php endif; ?>

</div>