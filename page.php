<?php get_header(); ?>

<div class="blog-wrapper">

	<?php while ( have_posts() ): the_post(); ?>

		<article <?php post_class(); ?>>	

			<h1 class="blog-single-title"><?php the_title(); ?></h1>
			
			<div class="entry themeform">
				<?php the_content(); ?>
				<div class="clear"></div>
			</div><!--/.entry-->
			
			<div class="entry-footer group">
				<div class="entry-comments themeform">
					<?php comments_template(); ?>
				</div>
			</div>

		</article>

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>