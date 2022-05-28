<?php

/**
 * @see
 * @package
 * @subpackage
 * @version
 * @author
 * @copyright
 * @license
 * @link
 */

require_once get_template_directory() . 'assets/lib/tgm/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'bnnNews_register_required_plugins');

function bnnNews_register_required_plugins() {
	$plugins = [
		// [
		// 	'name' => 'smart-slider.zip',
		// 	'slug' => 'smart-slider-3',
		// 	'required' => true,
		// 	'source' => get_template_directory() . '/lib/tgm/plugins/visualcomposer.zip',
		// ],
		// [
		// 	'name' => 'Contact Form 7',
		// 	'slug' => 'contact-form-7',
		// 	'required' => true
		// ]
	];

	$config = [
		'id'           => 'bnnNews',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	];
	tgmpa($plugins, $config);
}
