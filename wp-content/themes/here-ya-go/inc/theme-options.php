<?php

class hereyagoCustomizer {

	public static function register ( $wp_customize ) {

		require_once('options-config.php');

	  // Build sections
		foreach ( $hereyago_sections as $hereyago_section) {
    	$wp_customize->add_section( $hereyago_section['id'], $hereyago_section['args'] );
		}

	  // Build settings
	  foreach ( $hereyago_settings as $hereyago_setting ) {

	  	if ( $hereyago_setting['add_args']['type'] == 'theme_mod' ) {

		  	$control_class = $hereyago_setting['control_class'];

				$wp_customize->add_setting( $hereyago_setting['id'], $hereyago_setting['add_args'] );      	      
		    $wp_customize->add_control( new $control_class( $wp_customize, 'hereyago_' . $hereyago_setting['id'], $hereyago_setting['control_args'] ) );
	 		} else {
	 			$wp_customize->add_setting( $hereyago_setting['id'], $hereyago_setting['add_args'] );
	 			$wp_customize->add_control( 'hereyago_' . $hereyago_setting['id'], $hereyago_setting['control_args'] );
	 		}
	  }
	}

	/**
	 * This will generate a line of CSS for use in header output. If the setting
	 * ($mod_name) has no defined value, the CSS will not be output.
	 * 
	 * @uses get_theme_mod()
	 * @param string $selector CSS selector
	 * @param string $style The name of the CSS *property* to modify
	 * @param string $mod_name The name of the 'theme_mod' option to fetch
	 * @param string $prefix Optional. Anything that needs to be output before the CSS property
	 * @param string $postfix Optional. Anything that needs to be output after the CSS property
	 * @param bool $echo Optional. Whether to print directly to the page (default: true).
	 * @return string Returns a single line of CSS with selectors and a property.
	 * @since Here Ya Go 1.0.3
	 * 
	 */

	public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
		$return = '';
		$mod = get_theme_mod($mod_name);
		if ( ! empty( $mod ) ) {
			$return = sprintf('%s { %s:%s; }',
				$selector,
				$style,
				$prefix.$mod.$postfix
			);
			if ( $echo ) {
				echo $return;
			}
		}
		return $return;
	}
}

// Setup the Theme Customizer settings and controls
add_action( 'customize_register' , array( 'hereyagoCustomizer' , 'register' ) );
