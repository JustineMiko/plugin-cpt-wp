<?php
/**
 * @package JustinePlugin 
 */
namespace Inc\Pages;


 class Admin
 {
    function __construct() {

    }

   public function register() {
      add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );  

   }

   public function add_admin_pages() {
      add_menu_page( 'Justine Plugin', 'Justine', 'manage_options', 'justine_plugin', array( $this, 'admin_index'), 'dashicons-store', 110 );
   }

   public function admin_index() {
      // require template
      require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
   }

 }