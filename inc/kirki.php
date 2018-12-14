<?php
/**
 * Kirki Config
 */
Kirki::add_config( 'plant', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_section( 'general', array(
	'title'          => __( 'General' , 'plant'),
	'description'    => __( 'Layouts and other settings', 'plant' ),
	'panel'          => '',
	'priority'       => 81,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
) );
Kirki::add_section( 'header', array(
	'title'          => __( 'Header' , 'plant'),
	'description'    => __( 'Some settings will be disabled if using Widgets in Headbar','plant' ),
	'panel'          => '',
	'priority'       => 82,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
) );
Kirki::add_section( 'body', array(
	'title'          => __( 'Body' , 'plant'),
	'description'    => '',
	'panel'          => '',
	'priority'       => 83,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_section( 'shop', array(
		'title'          => __( 'Shop' , 'plant'),
		'description'    => '',
		'panel'          => '',
		'priority'       => 84,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );
}

Kirki::add_section( 'footer', array(
	'title'          => __( 'Footer' , 'plant'),
	'description'    => __( 'Some settings will be disabled if using Widgets in Footbar','plant' ),
	'panel'          => '',
	'priority'       => 90,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
) );

/* GENERAL */
Kirki::add_field( 'plant', array(
	'settings'    => 'layout',
	'label'       => __( 'Website Layout', 'plant' ),
	'section'     => 'general',
	'type'        => 'select',
	'default'     => 'full-width',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'full-width'   => esc_attr__( 'Full Width', 'plant' ),
		'boxed' => esc_attr__( 'Boxed', 'plant' ),
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'fontawesome',
	'label'       => __( 'Load Font Awesome 5?', 'plant' ),
	'description'    => __( 'Save and refresh to see.', 'plant' ),
	'section'     => 'general',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'show_admin_bar',
	'label'       => __( 'Show Admin Bar?', 'plant' ),
	'description'    => __( 'Save and refresh to see.', 'plant' ),
	'section'     => 'general',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_button',
	'label'       => '',
	'section'     => 'general',
	'default'     => '<style type="text/css">._h{background-color: rgba(0,0,0,0.4);padding: 3px 12px;margin:6px -12px 0;color:#fff;font-weight: normal;font-size:12px}</style><div class="_h">Default Button</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_button_desc',
	'label'       => '',
	'section'     => 'general',
	'default'     => '<small><i>For .button: WooCommerce small button.</i></small>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_default_bg',
	'label'    => __( 'Background', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#eee',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_default_bg_hover',
	'label'    => __( 'Background : Hover', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#ccc',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button:hover',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_default_text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#555',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_default_text_hover',
	'label'    => __( 'Text : Hover', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#222',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button:hover',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_button_alt',
	'label'       => '',
	'section'     => 'general',
	'default'     => '<div class="_h">Primary Button</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_button_alt_desc',
	'label'       => '',
	'section'     => 'general',
	'default'     => '<small><i>For .btn-primary, .button.alt:<br>Bootstrap and WooCommerce large button.</i></small>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_alt_bg',
	'label'    => __( 'Background', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#00989A',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button.alt, body .btn-primary',
			'property' => 'background-color',
		),
		array(
			'element'  => 'body .btn-primary',
			'property' => 'border-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_alt_bg_hover',
	'label'    => __( 'Background : Hover', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#03babd',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button.alt:hover, body .btn-primary:hover',
			'property' => 'background-color',
		),
		array(
			'element'  => 'body .btn-primary:hover',
			'property' => 'border-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_alt_text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button.alt, body .btn-primary',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'btn_alt_text_hover',
	'label'    => __( 'Text : Hover', 'plant' ),
	'section'  => 'general',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#page #content .button.alt:hover, body .btn-primary:hover',
			'property' => 'color',
		),
	),
) );


/* HEADER */
Kirki::add_field( 'plant', array(
	'settings'    => 'header_desktop',
	'label'       => __( 'Header Style', 'plant' ),
	'section'     => 'header',
	'type'        => 'select',
	'default'     => 'standard',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'standard' => esc_attr__( 'Standard (on scroll)', 'plant' ),
		'fixed'   => esc_attr__( 'Fixed (on top)', 'plant' ),
		'overlay'   => esc_attr__( 'Overlay (fade background)', 'plant' ),
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'head_shadow',
	'label'       => __( 'Has Shadow?', 'plant' ),
	'section'     => 'header',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'plant', array(
	'settings'    => 'hide_title',
	'label'       => __( 'Hide Site Title?', 'plant' ),
	'section'     => 'header',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'plant', array(
	'settings'    => 'hide_tagline',
	'label'       => __( 'Hide Tagline?', 'plant' ),
	'section'     => 'header',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'plant', array(
	'settings' => 'head_bg',
	'label'    => __( 'Background (Hide on Overlay)', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#00989A',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header, .site-desktop-navigation .sub-menu,.site-desktop-navigation .children,.head-widget .widget_nav_menu .sub-menu',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.7)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_link',
	'label'    => __( 'Link', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header a, .site-desktop-navigation .sub-menu li a,.site-desktop-navigation .children li a,#page .head-widget .widget_nav_menu .sub-menu li a,.site-toggle b',
			'property' => 'color',
		),
		array(
			'element'  => '.site-toggle i > span',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_link_hover',
	'label'    => __( 'Link : hover', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.8)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header a:hover, .site-desktop-navigation .sub-menu li a:hover,.site-desktop-navigation .children li a:hover,#page .head-widget .widget_nav_menu .sub-menu li a:hover, .site-toggle:hover b',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_link_border',
	'label'    => __( 'Submenu Border', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.15)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-desktop-navigation .sub-menu li a,.site-desktop-navigation .children li a,#page .head-widget .widget_nav_menu .sub-menu li a',
			'property' => 'border-top-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_overlay',
	'label'       => '',
	'section'     => 'header',
	'default'     => '<div class="_h">For Header Style: Overlay</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'logo_overlay',
	'label'       => __( 'Logo', 'plant' ),
	'description' => __( 'Should use same size as site identity', 'plant' ),
	'section'     => 'header',
	'default'     => '',
	'priority'    => 10,
) );

Kirki::add_field( 'plant', array(
	'type'        => 'slider',
	'settings'    => 'scroll',
	'label'       => __( 'Scroll pixels to Fixed Header', 'plant' ),
	'section'     => 'header',
	'default'     => 300,
	'choices'     => array(
		'min'  => '1',
		'max'  => '700',
		'step' => '1',
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_overlay_bg',
	'label'    => __( 'Background', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#00989A',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site.-header-desktop-overlay .site-header.active,.site-header.active .site-desktop-navigation .sub-menu, .site-header.active .site-desktop-navigation .children,.site-header.active .head-widget .widget_nav_menu .sub-menu',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_overlay_text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.6)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header.active',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_overlay_link',
	'label'    => __( 'Link', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.8)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header.active a, .site-header.active .site-desktop-navigation .sub-menu li a,.site-header.active .site-desktop-navigation .children li a,#page .site-header.active .head-widget .widget_nav_menu .sub-menu li a',
			'property' => 'color',
		),
		array(
			'element'  => '.site-header.active .site-toggle i > span',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'head_overlay_link_hover',
	'label'    => __( 'Link : hover', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-header.active a:hover, .site-header.active .site-desktop-navigation .sub-menu li a:hover,.site-header.active .site-desktop-navigation .children li a:hover,#page .site-header.active .head-widget .widget_nav_menu .sub-menu li a:hover',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_mobile',
	'label'       => '',
	'section'     => 'header',
	'default'     => '<div class="_h">For Mobile</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'header_mobile',
	'label'       => __( 'Header Position', 'plant' ),
	'section'     => 'header',
	'type'        => 'select',
	'default'     => 'fixed',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'standard' => esc_attr__( 'Standard (on scroll)', 'plant' ),
		'fixed'   => esc_attr__( 'Fixed (on top)', 'plant' ),
		'overlay'   => esc_attr__( 'Overlay (fade background)', 'plant' ),
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'menu',
	'label'       => __( 'Menu Style', 'plant' ),
	'section'     => 'header',
	'type'        => 'select',
	'default'     => 'dropdown',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'dropdown' 	=> esc_attr__( 'Dropdown', 'plant' ),
		'off-canvas'   => esc_attr__( 'Off Canvas', 'plant' ),
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'menu_icon',
	'label'       => __( 'Menu Icon', 'plant' ),
	'section'     => 'header',
	'type'        => 'select',
	'default'     => 'small',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'small' 	=> esc_attr__( 'Small', 'plant' ),
		'large'   => esc_attr__( 'Large (icon only)', 'plant' ),
	),
) );
Kirki::add_field( 'plant', array(
	'type'     => 'text',
	'settings' => 'menu_text',
	'label'    => __( 'Menu Text', 'plant' ),
	'section'  => 'header',
	'default'  => esc_attr__( 'MENU', 'plant' ),
	'priority' => 10,
) );
Kirki::add_field( 'plant', array(
	'settings' => 'menu_bg',
	'label'    => __( 'Menu Background', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#262828',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-mobile-navigation.-dropdown.active, .sb-slidebar',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'menu_link',
	'label'    => __( 'Menu Link', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.9)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-mobile-navigation li a, .site-mobile-navigation .menu-item-has-children > i ',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'menu_border',
	'label'    => __( 'Menu Border', 'plant' ),
	'section'  => 'header',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.15)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-mobile-navigation li a',
			'property' => 'border-bottom-color',
		),
	),
) );


/* BODY */
Kirki::add_field( 'plant', array(
	'settings' => 'body_bg',
	'label'    => __( 'Body Background', 'plant' ),
	'section'  => 'body',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-canvas',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'body',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#262828',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => 'body, .entry-meta a',
			'property' => 'color',
		),
		array(
			'element'  => 'blockquote::before, blockquote::after ',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'link',
	'label'    => __( 'Link', 'plant' ),
	'section'  => 'body',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#163D4F',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => 'a',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'link_hover',
	'label'    => __( 'Link : hover', 'plant' ),
	'section'  => 'body',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#00989A',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => 'a:hover,a:active',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_main_title',
	'label'       => '',
	'section'     => 'body',
	'default'     => '<div class="_h">Main Title in all pages (except Home)</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings' => 'title_bg',
	'label'    => __( 'Background', 'plant' ),
	'section'  => 'body',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.main-header',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'title_text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'body',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#262828',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => array( '.main-title','.main-title a',),
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'title_center',
	'label'       => __( 'Align Center?', 'plant' ),
	'section'     => 'body',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'title_hide',
	'label'       => __( 'Hide on Pages? (not Posts)', 'plant' ),
	'section'     => 'body',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'title_padding',
	'label'       => __( 'Padding (Desktop)', 'plant' ),
	'section'     => 'body',
	'type'        => 'spacing',
	'priority'    => 10,
	'default'     => array(
		'top'    => '25px',
		'bottom' => '0px',
	),
	'output' => array(
		array(
			'element'  => '.main-title',
			'property' => 'padding',
			'media_query' => '@media (min-width: 992px)',
		),
	)
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'title_padding_mobile',
	'label'       => __( 'Padding (Mobile)', 'plant' ),
	'section'     => 'body',
	'type'        => 'spacing',
	'priority'    => 10,
	'default'     => array(
		'top'    => '10px',
		'bottom' => '0px',
	),
	'output' => array(
		array(
			'element'  => '.main-title',
			'property' => 'padding',
		),
	)
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'title_margin',
	'label'       => __( 'Margin (Desktop)', 'plant' ),
	'section'     => 'body',
	'type'        => 'spacing',
	'priority'    => 10,
	'default'     => array(
		'top'    => '0',
		'bottom' => '25px',
	),
	'output' => array(
		array(
			'element'  => '.main-header',
			'property' => 'margin',
			'media_query' => '@media (min-width:992px)'
		),
	)
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'title_margin_mobile',
	'label'       => __( 'Margin (Mobile)', 'plant' ),
	'section'     => 'body',
	'type'        => 'spacing',
	'priority'    => 10,
	'default'     => array(
		'top'    => '0',
		'bottom' => '15px',
	),
	'output' => array(
		array(
			'element'  => '.main-header',
			'property' => 'margin',
		),
	)
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_blog',
	'label'       => '',
	'section'     => 'body',
	'default'     => '<div class="_h">For Single Post</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'type'        => 'multicheck',
	'settings'    => 'single_post_metas',
	'label'       => __( 'Meta to show', 'plant' ),
	'section'     => 'body',
	'default'     => array('meta-date', 'meta-author', 'meta-cat', 'meta-tag'),
	'priority'    => 10,
	'choices'     => array(
		'meta-date' 	=> esc_attr__( 'Date', 'plant' ),
		'meta-author' => esc_attr__( 'Author Name', 'plant' ),
		'meta-cat' 		=> esc_attr__( 'Category', 'plant' ),
		'meta-tag' 		=> esc_attr__( 'Tag', 'plant' )
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'single_meta_center',
	'label'       => __( 'Meta: Align Center?', 'plant' ),
	'section'     => 'body',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'blog_show_profile',
	'label'       => __( 'Show Author Profile?', 'plant' ),
	'section'     => 'body',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'blog_enable_comments',
	'label'       => __( 'Enable WP Comments?', 'plant' ),
	'section'     => 'body',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'blog_layout_single',
	'label'       => __( 'Sidebar', 'plant' ),
	'section'     => 'body',
	'type'        => 'select',
	'default'     => 'rightbar',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'full-width' => esc_attr__( 'No Sidebar', 'plant' ),
		'rightbar' => esc_attr__( 'Right Sidebar', 'plant' ),
		'leftbar'   => esc_attr__( 'Left Sidebar', 'plant' ),
	),
) );
Kirki::add_field( 'plant', array(
	'type'        => 'custom',
	'settings'    => 'h_card',
	'label'       => '',
	'section'     => 'body',
	'default'     => '<div class="_h">For Archive</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'type'        => 'slider',
	'settings'    => 'blog_columns',
	'label'       => __( 'Column(s)', 'plant' ),
	'section'     => 'body',
	'default'     => 1,
	'choices'     => array(
		'min'  => '1',
		'max'  => '6',
		'step' => '1',
	),
) );
Kirki::add_field( 'plant', array(
	'type'        => 'multicheck',
	'settings'    => 'item_post_metas',
	'label'       => __( 'Meta to show', 'plant' ),
	'section'     => 'body',
	'default'     => array('meta-date', 'meta-author', 'meta-cat', 'meta-tag'),
	'priority'    => 10,
	'choices'     => array(
		'meta-date' 	=> esc_attr__( 'Date', 'plant' ),
		'meta-author' => esc_attr__( 'Author Name', 'plant' ),
		'meta-cat' 		=> esc_attr__( 'Category', 'plant' ),
		'meta-tag' 		=> esc_attr__( 'Tag', 'plant' )
	),
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'item_meta_center',
	'label'       => __( 'Title &amp; Meta: Align Center?', 'plant' ),
	'section'     => 'body',
	'type'        => 'toggle',
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( 'plant', array(
	'settings'    => 'blog_layout',
	'label'       => __( 'Sidebar', 'plant' ),
	'section'     => 'body',
	'type'        => 'select',
	'default'     => 'standard',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'full-width' => esc_attr__( 'No Sidebar', 'plant' ),
		'rightbar' => esc_attr__( 'Right Sidebar', 'plant' ),
		'leftbar'   => esc_attr__( 'Left Sidebar', 'plant' ),
	),
) );

/* WOOCOMMERCE */

if ( class_exists( 'WooCommerce' ) ) {
	
	Kirki::add_field( 'plant', array(
		'settings'    => 'shop_layout',
		'label'       => __( 'Shop Layout', 'plant' ),
		'section'     => 'shop',
		'type'        => 'select',
		'default'     => 'leftbar',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'full-width' => esc_attr__( 'No Sidebar', 'plant' ),
			'rightbar' => esc_attr__( 'Right Sidebar', 'plant' ),
			'leftbar'   => esc_attr__( 'Left Sidebar', 'plant' ),
		),
	) );
	Kirki::add_field( 'plant', array(
		'settings' => 'shop_border_color',
		'label'    => __( 'Shop Highlight Border', 'plant' ),
		'description' => __( 'Show on Product Detail and Checkout', 'plant' ),
		'section'  => 'shop',
		'type'     => 'color',
		'priority' => 10,
		'default'  => '#222',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'  => '#main .related.products > h2, #main .wc-tabs li.active, #main .wc-tabs li:hover',
				'property' => 'border-top-color',
			),
			array(
				'element'  => '#main #order_review_heading, #main #order_review',
				'property' => 'border-color',
			),
			array(
				'element'  => '#content #main .woocommerce-pagination .current, #content #main .woocommerce-pagination .page-numbers:hover, #content #main .woocommerce-pagination .page-numbers:focus',
				'property' => 'border-color',
			),
			array(
				'element'  => '#content #main .woocommerce-pagination .current, #content #main .woocommerce-pagination .page-numbers:hover, #content #main .woocommerce-pagination .page-numbers:focus',
				'property' => 'color',
			),
		),
	) );
	Kirki::add_field( 'plant', array(
		'settings' => 'shop_badge_color',
		'label'    => __( 'Sale Badge Color', 'plant' ),
		'description' => __( 'Show on Product Archive and Detail', 'plant' ),
		'section'  => 'shop',
		'type'     => 'color',
		'priority' => 10,
		'default'  => '#c30',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'  => '#page .onsale',
				'property' => 'background-color',
			),
		),
	) );
	Kirki::add_field( 'plant', array(
		'settings' => 'shop_price_color',
		'label'    => __( 'Price Color', 'plant' ),
		'description' => __( 'Show on Product Archive and Detail', 'plant' ),
		'section'  => 'shop',
		'type'     => 'color',
		'priority' => 10,
		'default'  => '#222',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'  => '#main .price',
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'plant', array(
		'settings'    => 'shop_pagebuilder',
		'label'       => __( 'Page Builder on Shop Page?', 'plant' ),
		'description' => __( 'Show only content, not products list on Shop page.', 'plant' ),
		'section'     => 'shop',
		'type'        => 'toggle',
		'default'     => '0',
		'priority'    => 10,
	) );
	Kirki::add_field( 'plant', array(
		'settings'    => 'shop_hide_addtocart',
		'label'       => __( 'Hide Add to Cart Button?', 'plant' ),
		'description' => __( 'On Product Archive page.', 'plant' ),
		'section'     => 'shop',
		'type'        => 'toggle',
		'default'     => '1',
		'priority'    => 10,
	) );
	Kirki::add_field( 'plant', array(
		'settings'    => 'shop_hide_related',
		'label'       => __( 'Hide Related Products?', 'plant' ),
		'description' => __( 'On Product Detail page.', 'plant' ),
		'section'     => 'shop',
		'type'        => 'toggle',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'plant', array(
		'type'        => 'number',
		'settings'    => 'shop_products',
		'label'       => __( 'Products Per Page', 'plant' ),
		'description' => __( 'Save and refresh to see the result.', 'plant' ),
		'section'     => 'shop',
		'default'     => 12,
		'choices'     => array(
			'min'  => '1',
			'max'  => '99',
			'step' => '1',
		),
	) );
}

/* FOOTER */
Kirki::add_field( 'plant', array(
	'settings' => 'foot_bg',
	'label'    => __( 'Footer Background', 'plant' ),
	'section'  => 'footer',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#443324',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'foot_text',
	'label'    => __( 'Text', 'plant' ),
	'section'  => 'footer',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.6)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-info',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'foot_link',
	'label'    => __( 'Link', 'plant' ),
	'section'  => 'footer',
	'type'     => 'color',
	'priority' => 10,
	'default'  => 'rgba(255,255,255,0.6)',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-footer a',
			'property' => 'color',
		)
	),
) );
Kirki::add_field( 'plant', array(
	'settings' => 'foot_link_hover',
	'label'    => __( 'Link : hover', 'plant' ),
	'section'  => 'footer',
	'type'     => 'color',
	'priority' => 10,
	'default'  => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-footer a:hover',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'plant', array(
	'type'     => 'textarea',
	'settings' => 'foot_note',
	'label'    => __( 'Note', 'plant' ),
	'section'  => 'footer',
	'default'  => esc_attr__( 'Copyright © 2018. All rights reserved.', 'plant' ),
	'priority' => 10,
) );


/*
 * Convert Color Funtion
 */
function hex2rgba($color, $opacity = false) {
	$default = 'rgb(0,0,0)';
	if(empty($color)) return $default; 
	if ($color[0] == '#' ) { $color = substr( $color, 1 );}
	if (strlen($color) == 6) {$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );} 
	elseif ( strlen( $color ) == 3 ) {$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );} 
	else {return $default;}
	$rgb =  array_map('hexdec', $hex);
	if($opacity){ if(abs($opacity) > 1) $opacity = 1.0; $output = 'rgba('.implode(",",$rgb).','.$opacity.')';} 
	else { $output = 'rgb('.implode(",",$rgb).')';}
	return $output;
}

/*
 * Hide Admin Bar
 */
$show_admin_bar  = get_theme_mod( 'show_admin_bar', '0' );
if (!$show_admin_bar) { add_filter('show_admin_bar', '__return_false'); }

/*
 * Add Custom Background
 */
if ('boxed' == get_theme_mod( 'layout', 'full-width' )) {
	add_theme_support( 'custom-background', apply_filters( 'seed_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );
}

/*
 * Load Font Awesome
 */
function fontawesome_scripts() {
	wp_enqueue_style( 'seed-fontawesome', get_template_directory_uri() . '/vendor/fonts/font-awesome/css/fontawesome-all.min.css' );
}
if (get_theme_mod( 'fontawesome', '0' )) {
	add_action( 'wp_enqueue_scripts', 'fontawesome_scripts' );	
}


/*
 * WooCommerce
 */

/* Display x products per page */
if ( class_exists( 'WooCommerce' ) ) {
	$GLOBALS['s_shop_layout'] = get_theme_mod( 'shop_products', '12' );
	add_filter( 'loop_shop_per_page', 'seed_loop_shop_per_page', 20 );
	function seed_loop_shop_per_page( $cols ) {
		$cols = $GLOBALS['s_shop_layout'];
		return $cols;
	}
}

/*
 * Assign $GLOBALS
 */
function customize_ini() {
	$GLOBALS['s_layout']  = get_theme_mod( 'layout', 'full-width' );
	$GLOBALS['s_blog_columns']  = get_theme_mod( 'blog_columns', '1' );
	$GLOBALS['s_header_desktop'] = get_theme_mod( 'header_desktop', 'standard' );
	$GLOBALS['s_header_mobile'] = get_theme_mod( 'header_mobile', 'fixed' );
	$GLOBALS['s_menu']  = get_theme_mod( 'menu', 'dropdown' );
	$GLOBALS['s_menu_icon'] = get_theme_mod( 'menu_icon', 'small' );
	$GLOBALS['s_menu_text'] = get_theme_mod( 'menu_text', 'MENU' );
	$GLOBALS['s_scroll'] = get_theme_mod( 'scroll', '300' );
	$GLOBALS['s_blog_layout_single'] = get_theme_mod( 'blog_layout_single', 'rightbar' );
	$GLOBALS['s_blog_layout'] = get_theme_mod( 'blog_layout', 'rightbar' );
	$GLOBALS['s_blog_show_profile'] = get_theme_mod( 'blog_show_profile', '0' );
	$GLOBALS['s_blog_enable_comments'] = get_theme_mod( 'blog_enable_comments', '0' );
	$GLOBALS['s_shop_pagebuilder'] = get_theme_mod( 'shop_pagebuilder', '0' );
	$GLOBALS['s_shop_layout'] = get_theme_mod( 'shop_layout', 'leftbar' );
	$GLOBALS['s_footer'] = get_theme_mod( 'foot_note', 'Copyright © 2018. All rights reserved.' );
	$GLOBALS['s_logo_overlay '] = get_theme_mod('logo_overlay' , '');
}


/*
 * Show CSS in header.php.
 */
if ( ! function_exists( 'customize_css' ) ) {
	function customize_css() {
		$head_shadow 					= get_theme_mod( 'head_shadow','0');
		$hide_title 					= get_theme_mod( 'hide_title','0');
		$hide_tagline 				= get_theme_mod( 'hide_tagline','0');
		$title_center 				= get_theme_mod( 'title_center','0');
		$title_hide   				= get_theme_mod( 'title_hide','0');
		$single_post_metas 		= get_theme_mod( 'single_post_metas', array( 'meta-date', 'meta-author', 'meta-cat', 'meta-tag') );
		$item_post_metas 			= get_theme_mod( 'item_post_metas', array( 'meta-date', 'meta-cat') );
		$single_meta_center 	= get_theme_mod( 'single_meta_center','0');
		$item_meta_center 		= get_theme_mod( 'item_meta_center','0');
		$btn_default_bg_hover = get_theme_mod('btn_default_bg_hover','#ccc');
		$btn_alt_bg_hover 		= get_theme_mod('btn_alt_bg_hover','#03babd');
		$shop_hide_addtocart 	= get_theme_mod('shop_hide_addtocart' , '1');
		$shop_hide_related 		= get_theme_mod('shop_hide_related' , '0');



		echo '<style id="kirki_css" type="text/css">';

		if (!$head_shadow) { 
			echo '.site-header,.site-desktop-navigation .sub-menu,.site-desktop-navigation .children,.head-widget .widget_nav_menu .sub-menu{box-shadow:none;}'; 
		} else {
			echo '#page .site-header{box-shadow: 0 0 1px rgba(0, 0, 0, 0.4)}@media (min-width:992px){#page.-header-desktop-overlay .site-header{box-shadow:none;}#page.-header-desktop-overlay .site-header.active{box-shadow: 0 0 1px rgba(0, 0, 0, 0.4)}}@media (max-width:991px){#page.-header-mobile-overlay .site-header{box-shadow:none;}#page.-header-mobile-overlay .site-header.active{box-shadow: 0 0 1px rgba(0, 0, 0, 0.4)}}'; 
		}
		if ($hide_title) {
			echo '#page .site-title{display:none}';
		}
		if ($hide_tagline) {
			echo '#page .site-description{display:none}';
		}
		if ($title_center) {
			echo '.main-title,.woocommerce-breadcrumb {text-align: center;}';
		}
		if ($title_hide) {
			echo 'body.page .main-title {display: none;}';
		}
		if (empty($single_post_metas)) {
			echo 'body.single-post .site-main .entry-meta{display:none}';
		} else {
			if (!in_array('meta-date', $single_post_metas)) {echo 'body.single-post .site-main .entry-meta > .posted-on{display: none;}';}
				if (!in_array('meta-author', $single_post_metas)) {echo 'body.single-post .site-main .entry-meta > .byline{display: none;}';}
					if (!in_array('meta-cat', $single_post_metas)) {echo 'body.single-post .site-main .entry-meta > .cat-links{display: none;}';}
						if (!in_array('meta-tag', $single_post_metas)) {echo 'body.single-post .site-main .entry-meta > .tags-links{display: none;}';}
						}
						if (empty($item_post_metas)) {
							echo '.content-item .entry-meta{display:none}';
						} else {
							if (!in_array('meta-date', $item_post_metas)) 	{echo '.content-item .entry-meta > .posted-on{display: none;}';}
								if (in_array('meta-author', $item_post_metas)) 	{echo '.content-item .entry-meta > .byline{display: inline-block;}';}
									if (!in_array('meta-cat', $item_post_metas)) 		{echo '.content-item .entry-meta > .cat-links{display: none;}';}
										if (!in_array('meta-tag', $item_post_metas)) 		{echo '.content-item .entry-meta > .tags-links{display: none;}';}
										}
										if ($single_meta_center) {
											echo '.content-single>.entry-header>.entry-meta{text-align: center;}';
										}

										if ($item_meta_center) {
											echo '.content-item .entry-title,.content-item .entry-meta{text-align: center;}';
										}

										if ($shop_hide_addtocart) {
											echo '#main .add_to_cart_button {display:none;}';
										}
										if ($shop_hide_related) {
											echo '#main .related.products{display:none;}';
										}
										echo '#page #content .button:focus {box-shadow: 0 0 0 3px '. hex2rgba($btn_default_bg_hover, 0.5) . '}';
										echo 'body .btn-primary:focus, #page #content .button.alt:focus {box-shadow: 0 0 0 3px '. hex2rgba($btn_alt_bg_hover, 0.5) . '}';
										echo '</style>';

									}
								}