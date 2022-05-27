<?php
	
	$ultimate_ecommerce_shop_custom_css = '';
	
	/*-------------- Footer Text -------------------*/
	$ultimate_ecommerce_shop_copyright_text_position = get_theme_mod('ultimate_ecommerce_shop_copyright_text_position','center');
	if($ultimate_ecommerce_shop_copyright_text_position != false){
		$ultimate_ecommerce_shop_custom_css .='.copyright{';
			$ultimate_ecommerce_shop_custom_css .='text-align: '.esc_attr($ultimate_ecommerce_shop_copyright_text_position).';';
		$ultimate_ecommerce_shop_custom_css .='}';
	}

	/*----------------Width Layout -------------------*/
    $ultimate_ecommerce_shop_theme_lay = get_theme_mod( 'ultimate_ecommerce_shop_width_options','Full Width');
    if($ultimate_ecommerce_shop_theme_lay == 'Full Width'){
		$ultimate_ecommerce_shop_custom_css .='body{';
			$ultimate_ecommerce_shop_custom_css .='max-width: 100%;';
		$ultimate_ecommerce_shop_custom_css .='}';
	}else if($ultimate_ecommerce_shop_theme_lay == 'Contained Width'){
		$ultimate_ecommerce_shop_custom_css .='body{';
			$ultimate_ecommerce_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ultimate_ecommerce_shop_custom_css .='}';
	}else if($ultimate_ecommerce_shop_theme_lay == 'Boxed Width'){
		$ultimate_ecommerce_shop_custom_css .='body{';
			$ultimate_ecommerce_shop_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$ultimate_ecommerce_shop_custom_css .='}';
	}

		/*-------- footer background css -------*/
	$ultimate_ecommerce_shop_footer_background_color = get_theme_mod('ultimate_ecommerce_shop_footer_background_color');
	$ultimate_ecommerce_shop_custom_css .='.footersec{';
		$ultimate_ecommerce_shop_custom_css .='background-color: '.esc_attr($ultimate_ecommerce_shop_footer_background_color).';';
	$ultimate_ecommerce_shop_custom_css .='}';

    /*-------- Copyright background css -------*/
	$ultimate_ecommerce_shop_copyright_background_color = get_theme_mod('ultimate_ecommerce_shop_copyright_background_color');
	$ultimate_ecommerce_shop_custom_css .='.copyright{';
		$ultimate_ecommerce_shop_custom_css .='background-color: '.esc_attr($ultimate_ecommerce_shop_copyright_background_color).';';
	$ultimate_ecommerce_shop_custom_css .='}';

	// site title and tagline font size option
	$ultimate_ecommerce_shop_site_title_font_size = get_theme_mod('ultimate_ecommerce_shop_site_title_font_size', 40);{
	$ultimate_ecommerce_shop_custom_css .='.logo h1 a, .logo p a{';
	$ultimate_ecommerce_shop_custom_css .='font-size: '.esc_attr($ultimate_ecommerce_shop_site_title_font_size).'px;';
		$ultimate_ecommerce_shop_custom_css .='}';
	}

	$ultimate_ecommerce_shop_site_tagline_font_size = get_theme_mod('ultimate_ecommerce_shop_site_tagline_font_size', 15);{
	$ultimate_ecommerce_shop_custom_css .='.logo p{';
	$ultimate_ecommerce_shop_custom_css .='font-size: '.esc_attr($ultimate_ecommerce_shop_site_tagline_font_size).'px !important;';
		$ultimate_ecommerce_shop_custom_css .='}';
	}
     
     