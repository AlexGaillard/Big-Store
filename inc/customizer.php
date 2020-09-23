<?php
/**
 * Big Store Theme Customizer
 *
 * @package Big Store
 */

function big_store_customizer( $wp_customize ){

	// Slider Section -----------------------------------------------------------*

	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> 'Slider Settings',
			'description'	=> 'Slider Section'
		)
	);

			// Field 1 - Slider Page Number 1

			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label'				=> 'Set slider page 1',
					'description'	=> 'Set slider page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 2 - Slider Button Text Number 1

			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'				=> 'Button Text for Page 1',
					'description'	=> 'Button Text for Page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 1

			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'				=> 'URL for Page 1',
					'description'	=> 'URL for Page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

			/*---------------------------------------*/

			// Field 4 - Slider Page Number 2

			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'				=> 'Set slider page 2',
					'description'	=> 'Set slider page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 5 - Slider Button Text Number 2

			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'				=> 'Button Text for Page 2',
					'description'	=> 'Button Text for Page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 6 - Slider Button URL Number 2

			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'				=> 'URL for Page 2',
					'description'	=> 'URL for Page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

			/*---------------------------------------*/

			// Field 7 - Slider Page Number 3

			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label'				=> 'Set slider page 3',
					'description'	=> 'Set slider page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 8 - Slider Button Text Number 3

			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label'				=> 'Button Text for Page 3',
					'description'	=> 'Button Text for Page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 9 - Slider Button URL Number 3

			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label'				=> 'URL for Page 3',
					'description'	=> 'URL for Page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

			/*---------------------------------------*/

			// Field 10 - Slider Page Number 4

			$wp_customize->add_setting(
				'set_slider_page4', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page4', array(
					'label'				=> 'Set slider page 4',
					'description'	=> 'Set slider page 4',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 11 - Slider Button Text Number 4

			$wp_customize->add_setting(
				'set_slider_button_text4', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text4', array(
					'label'				=> 'Button Text for Page 4',
					'description'	=> 'Button Text for Page 4',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 12 - Slider Button URL Number 4

			$wp_customize->add_setting(
				'set_slider_button_url4', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url4', array(
					'label'				=> 'URL for Page 4',
					'description'	=> 'URL for Page 4',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);



	// Featured Product Section -------------------------------------------------*

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'				=> 'Home Page Products',
			'description'	=> 'Home Page Section',
		)
	);

			// Featured Product Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'								=> 'theme_mod',
					'default'							=> '',
					'sanitize_callback'		=> 'big_store_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> 'Show Featured Product?',
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Featured Product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type'								=> 'theme_mod',
					'default'							=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'				=> 'Featured Product ID',
					'description'	=> 'Product ID to Display',
					'section'			=> 'sec_home_page',
					'type'				=> 'number'
				)
			);



	// Customer Hotline Number --------------------------------------------------*

	$wp_customize->add_section(
		'sec_hotline', array(
			'title'				=> 'Header Hotline Number',
			'description'	=> 'Add a phone number in the header'
		)
	);

			// Hotline Checkbox
			$wp_customize->add_setting(
				'set_hotline_show', array(
					'type'								=> 'theme_mod',
					'default'							=> '',
					'sanitize_callback'		=> 'big_store_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_hotline_show', array(
					'label'			=> 'Show Hotline Number?',
					'section'		=> 'sec_hotline',
					'type'			=> 'checkbox'
				)
			);

			// Hotline Number
			$wp_customize->add_setting(
				'set_hotline', array(
					'type'								=> 'theme_mod',
					'default'							=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_hotline', array(
					'label'				=> 'Hotline Number',
					'description'	=> 'What is the hotline number?',
					'section'			=> 'sec_hotline',
					'type'				=> 'text'
				)
			);



	// Theme Colour Picker --------------------------------------------------*

	$wp_customize->add_section(
		'sec_colour', array(
			'title'				=> 'Theme Colour',
			'description'	=> 'Choose the theme colour'
		)
	);

			// Theme Colour
			$wp_customize->add_setting(
				'set_colour', array(
					'type'								=> 'theme_mod',
					'default'							=> '#fff',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_colour', array(
					'label'				=> 'Theme Colour',
					'description'	=> 'What is your theme colour?',
					'section'			=> 'sec_colour',
					'type'				=> 'text'
				)
			);

			// Text Colour
			$wp_customize->add_setting(
				'set_text', array(
					'type'								=> 'theme_mod',
					'default'							=> '#000',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_text', array(
					'label'				=> 'Text Colour',
					'description'	=> 'What is the text colour?',
					'section'			=> 'sec_colour',
					'type'				=> 'text'
				)
			);

}
add_action( 'customize_register', 'big_store_customizer' );

// Custom checkbox sanitizer
function big_store_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}
