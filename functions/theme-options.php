<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'colordive', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'colordive' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'colordive' ),
	'button_url'  => 'https://agnarson.com/wpthemes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'colordive' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'colordive' ),
	'button_url'  => 'https://wordpress.org/support/theme/colordive/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'colordive' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'colordive' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'colordive' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'colordive' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'colordive' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'colordive' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'colordive' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Recommended Plugins
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'colordive' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'colordive' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Featured Posts Include
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts Exclude', 'colordive' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'colordive' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'colordive' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'colordive' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Excerpt Length
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'colordive' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'colordive' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Featured Image
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-featured-image',
	'label'			=> esc_html__( 'Single - Featured Image', 'colordive' ),
	'description'	=> esc_html__( 'Auto-display featured image in the blog header', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'colordive' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'colordive' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'colordive' ),
		'content'	=> esc_html__( 'Below content', 'colordive' ),
	),
) );
// Blog: Single - Related Posts
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'colordive' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'colordive' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'colordive' ),
		'categories'=> esc_html__( 'Related by categories', 'colordive' ),
		'tags'		=> esc_html__( 'Related by tags', 'colordive' ),
	),
) );
// Header: Profile Avatar
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'colordive' ),
	'description'	=> esc_html__( 'Square size ', 'colordive' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'colordive' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'colordive' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'colordive' ),
	'description'	=> esc_html__( 'A short description of you', 'colordive' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Social Links
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'colordive' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'colordive' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'colordive' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'colordive' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'colordive' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'colordive' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'colordive' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'colordive' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'colordive' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'colordive' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'colordive' ),
	'description'	=> esc_html__( 'Footer credit text', 'colordive' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Social Links: List
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'colordive' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'colordive' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'colordive' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'colordive' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'colordive' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'colordive' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'colordive' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'colordive' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'colordive' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'colordive' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'colordive' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'colordive' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'colordive' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'colordive' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'colordive' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'colordive' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'colordive' ),
	'description'	=> esc_html__( 'Select font for the theme', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'colordive' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'colordive' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'colordive' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'colordive' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'colordive' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'colordive' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'colordive' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'colordive' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'colordive' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'colordive' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'colordive' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'colordive' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'colordive' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'colordive' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'colordive' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'colordive' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'colordive' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'colordive' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'colordive' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'colordive' ),
		'arial'					=> esc_html__( 'Arial', 'colordive' ),
		'georgia'				=> esc_html__( 'Georgia', 'colordive' ),
		'verdana'				=> esc_html__( 'Verdana', 'colordive' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'colordive' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'colordive' ),
	'description'	=> esc_html__( 'Max-width of the container with boxed layout.', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '1024',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'colordive' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '680',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'colordive' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'colordive' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'colordive' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'colordive' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Accent Color
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-accent',
	'label'			=> esc_html__( 'Accent Color', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '#43caff',
) );
// Styling: Background Color
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '#1e1e1e',
) );
// Styling: Accent Color
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-accent-dark',
	'label'			=> esc_html__( 'Accent Color (Dark Theme)', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '#de6933',
) );
// Styling: Background Color
Kirki::add_field( 'colordive_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background-dark',
	'label'			=> esc_html__( 'Background Color (Dark Theme)', 'colordive' ),
	'section'		=> 'styling',
	'default'		=> '#181106',
) );