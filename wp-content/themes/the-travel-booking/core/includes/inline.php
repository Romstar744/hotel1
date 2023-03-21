<?php


$the_travel_booking_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$the_travel_booking_text_transform = get_theme_mod( 'menu_text_transform_the_travel_booking','CAPITALISE');
    if($the_travel_booking_text_transform == 'CAPITALISE'){

		$the_travel_booking_custom_css .='#main-menu ul li a{';

			$the_travel_booking_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$the_travel_booking_custom_css .='}';

	}else if($the_travel_booking_text_transform == 'UPPERCASE'){

		$the_travel_booking_custom_css .='#main-menu ul li a{';

			$the_travel_booking_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$the_travel_booking_custom_css .='}';

	}else if($the_travel_booking_text_transform == 'LOWERCASE'){

		$the_travel_booking_custom_css .='#main-menu ul li a{';

			$the_travel_booking_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$the_travel_booking_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$the_travel_booking_container_width = get_theme_mod('the_travel_booking_container_width');

	$the_travel_booking_custom_css .='body{';

		$the_travel_booking_custom_css .='width: '.esc_attr($the_travel_booking_container_width).'%; margin: auto;';

	$the_travel_booking_custom_css .='}';

/*---------------------------Slider-content-alignment-------------------*/

$the_travel_booking_slider_content_alignment = get_theme_mod( 'the_travel_booking_slider_content_alignment','LEFT-ALIGN');

if($the_travel_booking_slider_content_alignment == 'LEFT-ALIGN'){

	$the_travel_booking_custom_css .='.blog_box{';

		$the_travel_booking_custom_css .='text-align:left;';

	$the_travel_booking_custom_css .='}';


}else if($the_travel_booking_slider_content_alignment == 'CENTER-ALIGN'){

	$the_travel_booking_custom_css .='.blog_box{';

		$the_travel_booking_custom_css .='text-align:center;';

	$the_travel_booking_custom_css .='}';


}else if($the_travel_booking_slider_content_alignment == 'RIGHT-ALIGN'){

	$the_travel_booking_custom_css .='.blog_box{';

		$the_travel_booking_custom_css .='text-align:right;';

	$the_travel_booking_custom_css .='}';

}
