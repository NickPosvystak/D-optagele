<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'professional_video_vlogger_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'professional-video-vlogger' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'professional-video-vlogger' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
		'partial_refresh'    => [
		'professional_video_vlogger_display_header_title' => [
			'selector'        => '.logo a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'professional-video-vlogger' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
		'partial_refresh'    => [
		'professional_video_vlogger_display_header_text' => [
			'selector'        => '.logo-content span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'professional_video_vlogger_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'professional-video-vlogger' ),
	) );

	Kirki::add_section( 'professional_video_vlogger_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'professional-video-vlogger' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_all_headings_typography',
		'section'     => 'professional_video_vlogger_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'professional_video_vlogger_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'professional-video-vlogger' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_body_content_typography',
		'section'     => 'professional_video_vlogger_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'professional_video_vlogger_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'professional-video-vlogger' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'professional_video_vlogger_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'professional-video-vlogger' ),
	) );

	// Scroll Top

	Kirki::add_section( 'professional_video_vlogger_additional_setting', array(
	    'title'          => esc_html__( 'Additional Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Scroll To Top', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'professional_video_vlogger_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_setting',
		'default'     => '1',
		'priority'    => 10,
		'partial_refresh'    => [
		'professional_video_vlogger_scroll_enable_setting' => [
			'selector'        => '.scroll-up a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'professional_video_vlogger_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'professional-video-vlogger' ),
		'section'  => 'professional_video_vlogger_additional_setting',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_professional_video_vlogger',
		'label'       => esc_html__( 'Menus Text Transform', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_setting',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'professional-video-vlogger' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'professional-video-vlogger' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'professional-video-vlogger' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_setting',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'None' => __('None','professional-video-vlogger'),
            'Zoominn' => __('Zoom Inn','professional-video-vlogger'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'professional_video_vlogger_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_setting',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'professional_video_vlogger_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'professional_video_vlogger_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','professional-video-vlogger'),
            'Right Sidebar' => __('Right Sidebar','professional-video-vlogger'),
            'One Column' => __('One Column','professional-video-vlogger')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

		Kirki::add_section( 'professional_video_vlogger_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'professional-video-vlogger' ),
			'description'    => esc_html__( 'Shop Page', 'professional-video-vlogger' ),
			'panel'          => 'professional_video_vlogger_panel_id',
			'priority'       => 160,
		) );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'professional_video_vlogger_shop_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'professional-video-vlogger' ),
			'section'     => 'professional_video_vlogger_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'professional_video_vlogger_product_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'professional-video-vlogger' ),
			'section'     => 'professional_video_vlogger_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'professional_video_vlogger_related_product_setting',
			'label'       => esc_html__( 'Here you can enable or disable your related products.', 'professional-video-vlogger' ),
			'section'     => 'professional_video_vlogger_woocommerce_settings',
			'default'     => true,
			'priority'    => 10,
		] );

		new \Kirki\Field\Number(
		[
			'settings' => 'professional_video_vlogger_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'professional-video-vlogger' ),
			'section'  => 'professional_video_vlogger_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'professional_video_vlogger_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'professional-video-vlogger' ),
			'section'  => 'professional_video_vlogger_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'professional-video-vlogger' ),
		'section'  => 'professional_video_vlogger_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'professional-video-vlogger' ),
		'section'  => 'professional_video_vlogger_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','professional-video-vlogger'),
            'Right Sidebar' => __('Right Sidebar','professional-video-vlogger')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','professional-video-vlogger'),
            'Right Sidebar' => __('Right Sidebar','professional-video-vlogger')
		],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'professional_video_vlogger_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'professional-video-vlogger' ),
			'Center' => esc_html__( 'Center', 'professional-video-vlogger' ),
			'Right'  => esc_html__( 'Right', 'professional-video-vlogger' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'professional_video_vlogger_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'professional_video_vlogger_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'professional-video-vlogger' ),
		'section'  => 'professional_video_vlogger_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'professional-video-vlogger' ),
			'option2' => esc_html__( 'Post Title', 'professional-video-vlogger' ),
			'option3' => esc_html__( 'Post Content', 'professional-video-vlogger' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'professional_video_vlogger_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		],
	] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'professional_video_vlogger_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','professional-video-vlogger'),
            'Right Sidebar' => __('Right Sidebar','professional-video-vlogger')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','professional-video-vlogger'),
            'Right Sidebar' => __('Right Sidebar','professional-video-vlogger')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','professional-video-vlogger'),
            'Right Sidebar' => __('Right Sidebar','professional-video-vlogger')
		],
	] );

	Kirki::add_field( 'professional_video_vlogger_config', [
		'type'        => 'select',
		'settings'    => 'professional_video_vlogger_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'professional-video-vlogger' ),
				'2' => __( '2 Column', 'professional-video-vlogger' ),
				'3' => __( '3 Column', 'professional-video-vlogger' ),
				'4' => __( '4 Column', 'professional-video-vlogger' ),
			],
	] );

	// HEADER SECTION

	Kirki::add_section( 'professional_video_vlogger_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_socail_link',
		'section'     => 'professional_video_vlogger_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'professional_video_vlogger_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'professional-video-vlogger' ),
			'field' => 'link_text',
		],
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Text', 'professional-video-vlogger' ),
			'field' => 'link_text1',
		],
		'button_label' => esc_html__('Add New Social Icon', 'professional-video-vlogger' ),
		'settings'     => 'professional_video_vlogger_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'professional-video-vlogger' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'professional-video-vlogger' ),
				'default'     => '',
			],
			'link_text1' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'professional-video-vlogger' ),
				'description' => esc_html__( 'Add the social text  ex: "facebook".', 'professional-video-vlogger' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'professional-video-vlogger' ),
				'description' => esc_html__( 'Add the social icon url here.', 'professional-video-vlogger' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
		'partial_refresh'    => [
		'professional_video_vlogger_social_links_settings' => [
			'selector'        => '.social-links i',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'professional_video_vlogger_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'professional-video-vlogger' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'professional-video-vlogger' ),
        'panel'          => 'professional_video_vlogger_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_heading',
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_slider_heading',
		'section'     => 'professional_video_vlogger_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'professional_video_vlogger_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
		'partial_refresh'    => [
		'professional_video_vlogger_blog_slide_number' => [
			'selector'        => '.blog_box h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'professional_video_vlogger_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'professional-video-vlogger' ),
		'priority'    => 10,
		'choices'     => professional_video_vlogger_get_categories_select(),
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => '0.5',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'0' => esc_html__( '0', 'professional-video-vlogger' ),
			'0.1' => esc_html__( '0.1', 'professional-video-vlogger' ),
			'0.2' => esc_html__( '0.2', 'professional-video-vlogger' ),
			'0.3' => esc_html__( '0.3', 'professional-video-vlogger' ),
			'0.4' => esc_html__( '0.4', 'professional-video-vlogger' ),
			'0.5' => esc_html__( '0.5', 'professional-video-vlogger' ),
			'0.6' => esc_html__( '0.6', 'professional-video-vlogger' ),
			'0.7' => esc_html__( '0.7', 'professional-video-vlogger' ),
			'0.8' => esc_html__( '0.8', 'professional-video-vlogger' ),
			'0.9' => esc_html__( '0.9', 'professional-video-vlogger' ),
			'1.0' => esc_html__( '1.0', 'professional-video-vlogger' ),
			

		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'professional_video_vlogger_slider_image_overlay_color',
		'label'       => __( 'choose your Appropriate Overlay Color', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => '',
	] );

	//TRENDING VIDEO SECTION

	Kirki::add_section( 'professional_video_vlogger_gallery_section', array(
	    'title'          => esc_html__( 'Trending Video Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Here you can add different type of videos.', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_heading',
		'section'     => 'professional_video_vlogger_gallery_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Trending Video',  'professional-video-vlogger' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_gallery_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_gallery_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable',  'professional-video-vlogger' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_gallery_text_heading',
		'section'     => 'professional_video_vlogger_gallery_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Videos', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'professional_video_vlogger_gallery_text_heading' => [
			'selector'        => '.gallery h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'professional-video-vlogger' ),
		'settings' => 'professional_video_vlogger_gallery_heading_text',
		'section'  => 'professional_video_vlogger_gallery_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'professional-video-vlogger' ),
		'settings' => 'professional_video_vlogger_gallery_heading',
		'section'  => 'professional_video_vlogger_gallery_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'professional_video_vlogger_gallery_category',
		'label'       => esc_html__( 'Select the category to show videos ', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_gallery_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'professional-video-vlogger' ),
		'priority'    => 10,
		'choices'     => professional_video_vlogger_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'professional_video_vlogger_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'professional-video-vlogger' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'professional-video-vlogger' ),
        'panel'          => 'professional_video_vlogger_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_footer_text_heading',
		'section'     => 'professional_video_vlogger_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'professional_video_vlogger_gallery_text_heading' => [
			'selector'        => '.copy-text p',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'professional_video_vlogger_footer_text',
		'section'  => 'professional_video_vlogger_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_footer_enable_heading',
		'section'     => 'professional_video_vlogger_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

		Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'professional_video_vlogger_footer_text_heading_2',
	'section'     => 'professional_video_vlogger_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'professional-video-vlogger' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'professional-video-vlogger' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'professional-video-vlogger' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'professional-video-vlogger' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'professional_video_vlogger_footer_text_heading_1',
	'section'     => 'professional_video_vlogger_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'professional-video-vlogger' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'professional_video_vlogger_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_footer_section',
		'default'     => '',
	] );
}
