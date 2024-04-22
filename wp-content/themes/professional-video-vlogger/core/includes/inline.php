<?php


$professional_video_vlogger_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$professional_video_vlogger_text_transform = get_theme_mod( 'menu_text_transform_professional_video_vlogger','CAPITALISE');
    if($professional_video_vlogger_text_transform == 'CAPITALISE'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_text_transform == 'UPPERCASE'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_text_transform == 'LOWERCASE'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$professional_video_vlogger_custom_css .='}';
	}

	/*---------------------------menu-zoom-------------------*/

		$professional_video_vlogger_menu_zoom = get_theme_mod( 'professional_video_vlogger_menu_zoom','None');

    if($professional_video_vlogger_menu_zoom == 'None'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_menu_zoom == 'Zoominn'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a:hover{';

			$professional_video_vlogger_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #b434f1;';

		$professional_video_vlogger_custom_css .='}';
	}


		/*---------------------------Container Width-------------------*/

	$professional_video_vlogger_container_width = get_theme_mod('professional_video_vlogger_container_width');

			$professional_video_vlogger_custom_css .='body{';

				$professional_video_vlogger_custom_css .='width: '.esc_attr($professional_video_vlogger_container_width).'%; margin: auto;';

			$professional_video_vlogger_custom_css .='}';

		/*---------------------------Copyright Text alignment-------------------*/

	$professional_video_vlogger_copyright_text_alignment = get_theme_mod( 'professional_video_vlogger_copyright_text_alignment','LEFT-ALIGN');

	 if($professional_video_vlogger_copyright_text_alignment == 'LEFT-ALIGN'){

			$professional_video_vlogger_custom_css .='.copy-text p{';

				$professional_video_vlogger_custom_css .='text-align:left;';

			$professional_video_vlogger_custom_css .='}';


		}else if($professional_video_vlogger_copyright_text_alignment == 'CENTER-ALIGN'){

			$professional_video_vlogger_custom_css .='.copy-text p{';

				$professional_video_vlogger_custom_css .='text-align:center;';

			$professional_video_vlogger_custom_css .='}';


		}else if($professional_video_vlogger_copyright_text_alignment == 'RIGHT-ALIGN'){

			$professional_video_vlogger_custom_css .='.copy-text p{';

				$professional_video_vlogger_custom_css .='text-align:right;';

			$professional_video_vlogger_custom_css .='}';

		}

		/*---------------------------related Product Settings-------------------*/


$professional_video_vlogger_related_product_setting = get_theme_mod('professional_video_vlogger_related_product_setting',true);

	if($professional_video_vlogger_related_product_setting == false){

		$professional_video_vlogger_custom_css .='.related.products, .related h2{';

			$professional_video_vlogger_custom_css .='display: none;';

		$professional_video_vlogger_custom_css .='}';
	}

			/*---------------------------Pagination Settings-------------------*/


$professional_video_vlogger_pagination_setting = get_theme_mod('professional_video_vlogger_pagination_setting',true);

	if($professional_video_vlogger_pagination_setting == false){

		$professional_video_vlogger_custom_css .='.nav-links{';

			$professional_video_vlogger_custom_css .='display: none;';

		$professional_video_vlogger_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$professional_video_vlogger_slider_opacity_color = get_theme_mod( 'professional_video_vlogger_slider_opacity_color','0.5');

	if($professional_video_vlogger_slider_opacity_color == '0'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.1'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.1';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.2'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.2';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.3'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.3';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.4'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.4';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.5'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.5';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.6'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.6';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.7'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.7';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.8'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.8';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '0.9'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.9';

		$professional_video_vlogger_custom_css .='}';

		}else if($professional_video_vlogger_slider_opacity_color == '1.0'){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.9';

		$professional_video_vlogger_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$professional_video_vlogger_overlay_option = get_theme_mod('professional_video_vlogger_overlay_option', true);

	if($professional_video_vlogger_overlay_option == false){

		$professional_video_vlogger_custom_css .='.blog_inner_box img{';

			$professional_video_vlogger_custom_css .='opacity:0.5;';

		$professional_video_vlogger_custom_css .='}';
	}

	$professional_video_vlogger_slider_image_overlay_color = get_theme_mod('professional_video_vlogger_slider_image_overlay_color', true);

	if($professional_video_vlogger_slider_image_overlay_color != false){

		$professional_video_vlogger_custom_css .='.blog_inner_box{';

			$professional_video_vlogger_custom_css .='background-color: '.esc_attr($professional_video_vlogger_slider_image_overlay_color).';';

		$professional_video_vlogger_custom_css .='}';
	}

	
	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$professional_video_vlogger_woocommerce_pagination_position = get_theme_mod( 'professional_video_vlogger_woocommerce_pagination_position','Center');

	if($professional_video_vlogger_woocommerce_pagination_position == 'Left'){

		$professional_video_vlogger_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$professional_video_vlogger_custom_css .='text-align: left;';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_woocommerce_pagination_position == 'Center'){

		$professional_video_vlogger_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$professional_video_vlogger_custom_css .='text-align: center;';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_woocommerce_pagination_position == 'Right'){

		$professional_video_vlogger_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$professional_video_vlogger_custom_css .='text-align: right;';

		$professional_video_vlogger_custom_css .='}';
	}

