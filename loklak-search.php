<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://in.linkedin.com/in/sopan-khosla-56319999
 * @since             1.0.0
 * @package           Loklak_Search
 *
 * @wordpress-plugin
 * Plugin Name:       Loklak Search 
 * Plugin URI:        https://github.com/sopu/loklak_wp_search_plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Sopan Khosla
 * Author URI:        https://in.linkedin.com/in/sopan-khosla-56319999
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       loklak-search
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-loklak-search-activator.php
 */
function activate_loklak_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-loklak-search-activator.php';
	Loklak_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-loklak-search-deactivator.php
 */
function deactivate_loklak_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-loklak-search-deactivator.php';
	Loklak_Search_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_loklak_search' );
register_deactivation_hook( __FILE__, 'deactivate_loklak_search' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-loklak-search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_loklak_search() {

	$plugin = new Loklak_Search();
	$plugin->run();

}
run_loklak_search();
