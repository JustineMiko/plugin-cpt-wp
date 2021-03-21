<?php
/**
 * @package JustinePlugin 
 */
namespace Inc;

final class Init 
{
    public static function register_services() {

    }
}

// use Inc\Pages\Activate;
// use Inc\Pages\Deactivate;

// // require the AdminPages
// // require_once plugin_dir_path( __FILE__ ) . 'inc/Admin/AdminPages.php';
// use Inc\Pages\Admin;

// //POO PHP
// if ( !class_exists( 'JustinePlugin' ) ) {

//     class JustinePlugin
//     {
//         public $plugin;

//         function __construct() {
//             $this->plugin = plugin_basename(__FILE__);
//             //$this refers to the class
//         }

//         //call it in the if block outside of the class
//         function register() {
//             add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
//             // administration menu :
//             add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );  
            
//             plugin_basename(__FILE__);

//             add_filter("plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
        
//         }

//         public function settings_link( $links ) {
//             // add some custom settings link(verifier le page=... dans wp)
//             $settings_link = '<a href="admin.php?page=justine_plugin">Settings</a>';
//             array_push( $links, $settings_link );
//             return $links;
//         }

//         public function add_admin_pages() {
//             add_menu_page( 'Justine Plugin', 'Justine', 'manage_options', 'justine_plugin', array( $this, 'admin_index'), 'dashicons-store', 110 );
//         }

//         public function admin_index() {
//             // require template
//             require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
//         }

//         protected function create_post_type() {
//             add_action( 'init', array( $this, 'custom_post_type' ) );

//         }
        
//         //method(linked to constructor with hook to work) - static to make work uninstall hook
//         function custom_post_type() {
//             register_post_type( 'book', [
//                 'public' => true, 
//                 'label' => 'Books'
//             ] );
//         }

//         //method to enqueue all our scripts (creation of assets folder)
//         static function enqueue() {
//             wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', ___FILE__ ) );
//             wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', ___FILE__ ) );

//         }
//         //then create register function under the constructor

//         function activate() {
//             Activate::activate();
//         }

//     }

//     $justinePlugin = new JustinePlugin( 'Justine Plugin initialized!' ); 
//     $justinePlugin->register();
   

// // activation
// // require_once plugin_dir_path( __FILE__ ) . 'inc/activate.php';
// register_activation_hook( __FILE__, array( 'Activate', 'activate' ) );
// //same as : 
// // add_action( 'init', 'function_name' );

// // deactivation
// // require_once plugin_dir_path( __FILE__ ) . 'inc/justine-plugin-deactivate.php';
// register_deactivation_hook( __FILE__, array( 'Deactivate', 'deactivate' ) );

// // uninstall hook but we prefer to create a uninstall.php file :
// // register_uninstall_hook( __FILE__, array( $justinePlugin, 'uninstall' ) );
// }

