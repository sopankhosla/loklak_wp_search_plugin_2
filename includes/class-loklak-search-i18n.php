<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://in.linkedin.com/in/sopan-khosla-56319999
 * @since      1.0.0
 *
 * @package    Loklak_Search
 * @subpackage Loklak_Search/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Loklak_Search
 * @subpackage Loklak_Search/includes
 * @author     Sopan Khosla <khoslasopan@gmail.com>
 */
class Loklak_Search_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'loklak-search',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
