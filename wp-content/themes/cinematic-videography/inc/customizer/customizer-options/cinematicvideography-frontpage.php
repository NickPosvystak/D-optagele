<?php
function cinematicvideography_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'cinematicvideography_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'cinematic-videography' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'cinematic-videography' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*800','cinematic-videography'),
			'priority' => 1,
			'panel' => 'cinematicvideography_frontpage_sections',
		)
	);



	$wp_customize->add_setting('cinematicvideography_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new cinematicvideography_Tab_Control($wp_customize, 'cinematicvideography_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'cinematic-videography'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'slider_disable_section',
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'cinematic-videography'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbgcolor',
				'slider_btntxthovercolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// hide show slider section
	$wp_customize->add_setting(
        'slider_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new cinematicvideography_Toggle_Switch_Custom_Control(
            $wp_customize,
            'slider_disable_section',
            array(
                'settings'      => 'slider_disable_section',
                'section'       => 'slider_setting',
                'label'         => __( 'Disable Content Section', 'cinematic-videography' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'cinematic-videography' ),
                    'off' => __( 'No', 'cinematic-videography' )
                ),
            )
        )
    );

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg Color
	$sliderbtnbgcolor = esc_html__('#dee27b', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'slider_btnbgcolor',
    	array(
			'default' => $sliderbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbgcolor',
		array(
		    'label'   		=> __('Button Border Color','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#dee27b', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','cinematic-videography'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'cinematic-videography' ),
			'priority' => 2,
			'panel' => 'cinematicvideography_frontpage_sections',
		)
	);



	$wp_customize->add_setting('cinematicvideography_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new cinematicvideography_Tab_Control($wp_customize, 'cinematicvideography_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'cinematic-videography'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'service_heading',
				'service_subheading',
            	'Service1',
				'service_icon1',
            	'Service2',
				'service_icon2',
            	'Service3',
				'service_icon3',
            	'Service4',
				'service_icon4',
            	'Service5',
				'service_icon5',
            	'Service6',
				'service_icon6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'cinematic-videography'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_headingcolor',
            	'service_boxtitlecolorcolor',
            	'service_boxdescriptioncolorcolor',
            	'service_buttontextcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'cinematic-videography'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'cinematic_videography_service_section_width',
	            'cinematicvideography_service_padding',
	            'cinematic_videography_service_top_padding',
	            'cinematic_videography_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new cinematicvideography_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'cinematic-videography' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'cinematic-videography' ),
                    'off' => __( 'No', 'cinematic-videography' )
                ),
            )
        )
    );


	

    // service title
	$wp_customize->add_setting(
    	'service_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_heading',
		array(
		    'label'   		=> __('Heading','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// service sub title
	$wp_customize->add_setting(
    	'service_subheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_subheading',
		array(
		    'label'   		=> __('Sub Heading','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		


	// service 1 icon
	$wp_customize->add_setting(
    	'service_icon1',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_icon1',
		array(
		    'label'   		=> __('Icon 1','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	

	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service 2 icon
	$wp_customize->add_setting(
    	'service_icon2',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'service_icon2',
		array(
		    'label'   		=> __('Icon 2','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service 3 icon
	$wp_customize->add_setting(
    	'service_icon3',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_icon3',
		array(
		    'label'   		=> __('Icon 3','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Service 4','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 4 icon
	$wp_customize->add_setting(
    	'service_icon4',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_icon4',
		array(
		    'label'   		=> __('Icon 4','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Service 5','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 5 icon
	$wp_customize->add_setting(
    	'service_icon5',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'service_icon5',
		array(
		    'label'   		=> __('Icon 5','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('Service 6','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 6 icon
	$wp_customize->add_setting(
    	'service_icon6',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'service_icon6',
		array(
		    'label'   		=> __('Icon 6','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// style

	// service headingcolor color
	$serviceheadingcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service buttontext color
	$servicebuttontextcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'service_buttontextcolor',
    	array(
			'default' => $servicebuttontextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttontextcolor',
		array(
		    'label'   		=> __('Button Text Color','cinematic-videography'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting
	$wp_customize->add_setting('cinematic_videography_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'cinematicvideography_sanitize_choices',
    ));
    $wp_customize->add_control('cinematic_videography_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','cinematic-videography'),
        'choices' => array (
            'Box Width' => __('Box Width','cinematic-videography'),
            'Full Width' => __('Full Width','cinematic-videography')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('cinematicvideography_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('cinematicvideography_service_padding',array(
      'label' => __('Section Padding','cinematic-videography'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('cinematic_videography_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cinematic_videography_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','cinematic-videography'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('cinematic_videography_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cinematic_videography_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','cinematic-videography'),
	    'section' => 'Service_setting',
    ));



    /*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'cinematic-videography' ),
			'priority' => 3,
			'panel' => 'cinematicvideography_frontpage_sections',
		)
	);



	

	$wp_customize->add_setting('cinematicvideography_blog_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new cinematicvideography_Tab_Control($wp_customize, 'cinematicvideography_blog_tabs', array(
	   'section' => 'blog_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'cinematic-videography'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'blog_disable_section',
            	'blog_heading',
				'blog_subheading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'cinematic-videography'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'blog_headingcolor',
				'blog_subheadingcolor',
                'blog_titlecolor',
                'blog_descriptioncolor',
                'blog_btntextcolor',
                'blog_datetextcolor'

            ),
     	)
	    
    	),
	))); 


	// General Tab

	// hide show blog section
	$wp_customize->add_setting(
        'blog_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new cinematicvideography_Toggle_Switch_Custom_Control(
            $wp_customize,
            'blog_disable_section',
            array(
                'settings'      => 'blog_disable_section',
                'section'       => 'blog_setting',
                'label'         => __( 'Disable Section', 'cinematic-videography' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'cinematic-videography' ),
                    'off' => __( 'No', 'cinematic-videography' )
                ),
            )
        )
    );

	// blog heading Color
	$wp_customize->add_setting(
    	'blog_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'blog_heading',
		array(
		    'label'   		=> __('Heading','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// blog subheading
	$wp_customize->add_setting(
    	'blog_subheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'blog_subheading',
		array(
		    'label'   		=> __('Sub Heading','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style setting

	// blog heading Color
	$blogheadingcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'blog_headingcolor',
    	array(
			'default' => $blogheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingcolor',
		array(
		    'label'   		=> __('Heading Color','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog subheading Color
	$blogsubheadingcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'blog_subheadingcolor',
    	array(
			'default' => $blogsubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog title Color
	$blogtitlecolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'blog_titlecolor',
    	array(
			'default' => $blogtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlecolor',
		array(
		    'label'   		=> __('Title Color','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog description Color
	$blogdescriptioncolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'blog_descriptioncolor',
    	array(
			'default' => $blogdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog btntext Color
	$blogbtntextcolor = esc_html__('#fff', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'blog_btntextcolor',
    	array(
			'default' => $blogbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog datetext Color
	$blogdatetextcolor = esc_html__('#dee27b', 'cinematic-videography' );
	$wp_customize->add_setting(
    	'blog_datetextcolor',
    	array(
			'default' => $blogdatetextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_datetextcolor',
		array(
		    'label'   		=> __('Date & Comments Color','cinematic-videography'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('cinematicvideography_Tab_Control');

}

add_action( 'customize_register', 'cinematicvideography_blog_setting' );

// service selective refresh
function cinematicvideography_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'cinematicvideography_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'cinematicvideography_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'cinematicvideography_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'cinematicvideography_blog_section_partials' );

// blog_title
function cinematicvideography_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function cinematicvideography_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function cinematicvideography_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


