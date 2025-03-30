<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') || get_theme_mod('header-social') ): ?>
	
	<div class="intro-card">
	
		<?php if ( get_theme_mod('profile-image') ): ?>
			<div class="intro-card-thumb">
				
				<img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" />
				
				<div class="intro-circle">
					<div class="intro-circle-spin">
						<div class="intro-circle-dot"></div>
						<div class="intro-circle-dot"></div>
						<div class="intro-circle-dot"></div>
						<div class="intro-circle-dot"></div>			
					</div>
				</div>
				
			</div>
		<?php endif; ?>
		
		<?php if ( get_theme_mod('profile-name') ): ?>
			<h1 class="intro-card-title">
				<?php echo esc_html( get_theme_mod('profile-name') ); ?>
			</h1>
		<?php endif; ?>
		
		<?php if ( get_theme_mod('profile-description') ): ?>
			<div class="intro-card-desc">
				<?php echo wp_kses_post( get_theme_mod('profile-description') ); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
			<?php colordive_social_links() ; ?>
		<?php endif; ?>
		
	</div>
	
<?php endif; ?>