<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://aliviarcarruth.github.io/
 * @since             1.0.0
 * @package           Plugin_Haikufish
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Haikufish
 * Plugin URI:        https://aliviarcarruth.github.io/
 * Description:       A plugin to contain logic for Haikufish.
 * Version:           1.0.0
 * Author:            Alivia Carruth
 * Author URI:        https://aliviarcarruth.github.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-haikufish
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_HAIKUFISH_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-haikufish-activator.php
 */
function activate_plugin_haikufish() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-haikufish-activator.php';
	Plugin_Haikufish_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-haikufish-deactivator.php
 */
function deactivate_plugin_haikufish() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-haikufish-deactivator.php';
	Plugin_Haikufish_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_haikufish' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_haikufish' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-haikufish.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_haikufish() {

	$plugin = new Plugin_Haikufish();
	$plugin->run();

}
run_plugin_haikufish();
