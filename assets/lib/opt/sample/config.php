<?php
defined( 'ABSPATH' ) || exit;
if ( ! class_exists( 'Redux' ) ) return;
$opt_name = 'my_theme'; 
$dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();
if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {
		$sample_patterns = array();

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);
$theme = wp_get_theme();
$args = array(
	'opt_name'								=> $opt_name,
	'display_name'					 => $theme->get( 'Name' ),
	'display_version'					=> $theme->get( 'Version' ),
	'menu_type'								=> 'submenu',
	'allow_sub_menu'				=> true,
	'menu_title'                => esc_html__( 'Theme Options', 'bnnnews' ),
	'page_title'                => esc_html__( 'Theme Options', 'bnnnews' ),
	'disable_google_fonts_link' => false,
	'admin_bar'								=> false,
	'admin_bar_icon'				=> 'dashicons-portfolio',
	'admin_bar_priority'		=> 50,
	'global_variable'					=> $opt_name,
	'dev_mode'								=> false,
	'customizer'								=> false,
	'open_expanded'					=> false,
	'disable_save_warn'			=> false,
	'page_priority'							=> null,
	'page_parent'							=> 'themes.php',
	'page_permissions'			=> 'manage_options',
	'menu_icon'									=> '',
	'last_tab'										=> '',
	'page_icon'                 => 'icon-themes',
	'page_slug'                 => $opt_name,
	'save_defaults'             => false,
	'default_show'							=> false,
	'default_mark'              => '*',
	'show_import_export'		=> false,
	'transient_time'            => 60 * MINUTE_IN_SECONDS,
	'output'											 => false,
	'output_tag'                => false,
	'footer_credit'             => '',
	'use_cdn'                    => true,
	'admin_theme'						 => 'wp',
	'flyout_submenus'        => false,
	'font_display'              => 'swap',
	'database'                   => '',
	'network_admin'           => true,
);

Redux::set_args( $opt_name, $args );
if ( ! function_exists( 'compiler_action' ) ) {
	/**
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field's value has changed and compiler=>true is set.
	 *
	 * @param array  $options        Options values.
	 * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
	 * @param array  $changed_values Any values changed since last save.
	 */
	function compiler_action( array $options, string $css, array $changed_values ) {
		echo '<h1>The compiler hook has run!</h1>';
		echo '<pre>';
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		print_r( $changed_values ); // Values that have changed since the last save.
		// echo '<br/>';
		// print_r($options); //Option values.
		// echo '<br/>';
		// print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS ).
		echo '</pre>';
	}
}
if ( ! function_exists( 'redux_validate_callback_function' ) ) {
	/**
	 * Custom function for the callback validation referenced above
	 *
	 * @param array $field          Field array.
	 * @param mixed $value          New value.
	 * @param mixed $existing_value Existing value.
	 *
	 * @return array
	 */
	function redux_validate_callback_function( array $field, $value, $existing_value ): array {
		$error   = false;
		$warning = false;

		// Do your validation.
		if ( 1 === (int) $value ) {
			$error = true;
			$value = $existing_value;
		} elseif ( 2 === (int) $value ) {
			$warning = true;
			$value   = $existing_value;
		}

		$return['value'] = $value;

		if ( true === $error ) {
			$field['msg']    = 'your custom error message';
			$return['error'] = $field;
		}

		if ( true === $warning ) {
			$field['msg']      = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}
}
if ( ! function_exists( 'dynamic_section' ) ) {
	/**
	 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
	 *
	 * @param array $sections Section array.
	 *
	 * @return array
	 */
	function dynamic_section( array $sections ): array {
		$sections[] = array(
			'title'  => esc_html__( 'Section via hook', 'your-textdomain-here' ),
			'desc'   => '<p class="description">' . esc_html__( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'your-textdomain-here' ) . '</p>',
			'icon'   => 'el el-paper-clip',

			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array(),
		);
		return $sections;
	}
}
if ( ! function_exists( 'change_arguments' ) ) {
	/**
	 * Filter hook for filtering the args.
	 * Good for child themes to override or add to the args array. Can also be used in other functions.
	 *
	 * @param array $args Global arguments array.
	 *
	 * @return array
	 */
	function change_arguments( array $args ): array {
		$args['dev_mode'] = true;
		return $args;
	}
}
if ( ! function_exists( 'change_defaults' ) ) {
	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 *
	 * @param array $defaults Default value array.
	 *
	 * @return array
	 */
	function change_defaults( array $defaults ): array {
		$defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'your-textdomain-here' );
		return $defaults;
	}
}
if ( ! function_exists( 'redux_custom_sanitize' ) ) {
	/**
	 * Function to be used if the field santize argument.
	 * Return value MUST be the formatted or cleaned text to display.
	 *
	 * @param string $value Value to evaluate or clean.  Required.
	 *
	 * @return string
	 */
	function redux_custom_sanitize( string $value ): string {
		$return = '';
		foreach ( explode( ' ', $value ) as $w ) {
			foreach ( str_split( $w ) as $k => $v ) {
				if ( ( $k + 1 ) % 2 !== 0 && ctype_alpha( $v ) ) {
					$return .= mb_strtoupper( $v );
				} else {
					$return .= $v;
				}
			}
			$return .= ' ';
		}
		return $return;
	}
}

Redux::setSection('my_theme', [
	'title' => 'General',
	'icon' => 'el el-tasks'
]);
Redux::setSection('my_theme', [
	'title' => 'Logo',
	'icon' => 'el el-globe',
	'subsection' => true,
	'fields' => [
		['title' => 'Upload Logo', 'id' => 'ul', 'type' => 'media']
	]
]);
Redux::setSection('my_theme', [
	'title' => 'Custom CSS JS',
	'icon' => 'el el-heart-empty',
	'fields' => [
		['title' => 'CSS', 'id' => 'css', 'type' => 'ace_editor', 'mode' => 'CSS'],
		['title' => 'JS', 'id' => 'js', 'type' => 'ace_editor', 'mode' => 'JS'],
	]
]);
Redux::setSection('my_theme', [
	'title' => 'Footer',
	'icon' => 'el el-th',
	'fields' => [
		['title' => 'Copyright Text', 'id' => 'copyRgt', 'type' => 'editor'],
		['title' => 'Background Color', 'id' => 'footerColor', 'type' => 'color'],
	]
]);
Redux::setSection('my_theme', [
	'title' => 'Social Links',
	'icon' => 'el el-group-alt',
	'fields' => [
		['title' => 'Phone Number','type' => 'text','id' => 'phoneNo'],
		['title' => 'Email','type' => 'text','id' => 'emailAd'],
		['title' => 'Facebook','type' => 'text','id' => 'fbLink'],
		['title' => 'Twitter','type' => 'text','id' => 'twLink'],
		['title' => 'LinkedIn','type' => 'text','id' => 'lkLink'],
	],
]);
