<?php
/*
Plugin Name: OM4 Plugin Updater
Plugin URI: https://github.com/OM4/om4-plugin-updater/
Description: Updates OM4 plugins via the WordPress update system.
Version: 2.0.1
Author: OM4
Author URI: https://github.com/OM4/om4-plugin-updater/
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Git URI: https://github.com/OM4/om4-plugin-updater
Git Branch: release
*/

/*
 * Note: the code in this plugin is based on the Git Plugin Updater plugin by Brainstorm Media: https://github.com/brainstormmedia/git-plugin-updates
 * Thank you to Paul Clark (https://github.com/pdclark) and everyone else who contributed to the Git Plugin Updater project.
 */

/**
 * ## TESTING
 * Change version number above to 1.0 to test updates.
 */

/**
 * Verify we're in wp-admin -- plugin doesn't need to load in front-end.
 * Verify that we're running WordPress 3.2 (which enforces PHP 5.2.4).
 */
if ( is_admin() && version_compare( $GLOBALS['wp_version'], '3.2', '>=' ) ) :

	// Load plugin classes and instantiate the plugin.
	require_once dirname( __FILE__ ) . '/includes/class-controller.php';
	require_once dirname( __FILE__ ) . '/includes/class-updater.php';
	require_once dirname( __FILE__ ) . '/includes/class-updater-github.php';
	require_once dirname( __FILE__ ) . '/includes/class-updater-bitbucket.php';

	add_action( 'plugins_loaded', 'GPU_Controller::get_instance', 5 );

endif;