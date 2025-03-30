<?php $related = colordive_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<h4 class="small-heading">
	<?php esc_html_e('You may also like','colordive'); ?>
</h4>

<div class="related-posts group">
	
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div><!--/.related-posts-->
<?php endif; ?>

<?php wp_reset_postdata(); ?>
