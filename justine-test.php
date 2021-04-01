<?php
/**
 * 
 * @package JustinePlugin
 */
/*
Plugin Name: Justine's test
Plugin URI: https://justinemiko.life/
Description: plugin test
Author: Justine Miko
Version: 1.0
Author URI: http://justinemiko.life/
*/

//SECURITY
// if not defined - kills plugin execution
// if ( ! defined( 'ABSPATH' ) ) {
//     die;
// }

//same as first if condition but better :
defined( 'ABSPATH' ) or die( 'Hey, you cannot access this file' );

//OR : 
// if ( ! function_exists( 'add_action' ) ) {
//     echo 'Hey, you can\t access this file';
//     exit;
// }

// Require once the Composer Autoload : 
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_justine_plugin() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_justine_plugin' );


/**
 * The code that runs during plugin deactivation
 */
function deactivate_justine_plugin() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_justine_plugin' );


if ( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}