<?php
/**
 * @package JustinePlugin 
 */
namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;

 class Admin extends BaseController
 {
   public $settings;

   public $callbacks;

   public $pages = array();

   public $subpages = array();

   public function register() {
      
      $this->settings = new SettingsApi();

      $this->callbacks = new AdminCallbacks();

      $this->setPages();

      $this->setSubpages();

      $this->setSettings();

      $this->setSections();

      $this->setFields();

      // add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );  
      $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();

   }

   public function setPages() {
      $this->$pages = array(
         array(
            'page_title' => 'Justine Plugin',
            'menu_title' => 'Justine',
            'capability' => 'manage_options',
            'menu_slug' => 'justine_plugin',
            'callback' => array( $this->callbacks, 'adminDashboard' ),
            'icon_url' => 'dashicons-store',
            'position' => 110
         ),
         array(
            'page_title' => 'Test Plugin',
            'menu_title' => 'Test',
            'capability' => 'manage_options',
            'menu_slug' => 'test_plugin',
            'callback' => function() { echo '<h1>Testing</h1>'; },
            'icon_url' => 'dashicons-external',
            'position' => 9
         )
      );
   }

   public function setSubpages() {
      //add submenus under the plugin main icon in the left dashboard
      $this->subpages = array(
         array(
            'parent_slug' => 'justine_plugin',
            'page_title' => 'Custom Post Types',
            'menu_title' => 'CPT',
            'capability' => 'manage_options',
            'menu_slug' => 'Justine_cpt',
            'callback' => array( $this->callbacks, 'adminCpt' )
         ),
         array(
            'parent_slug' => 'justine_plugin',
            'page_title' => 'Custom Taxonomies',
            'menu_title' => 'Taxonomies',
            'capability' => 'manage_options',
            'menu_slug' => 'Justine_taxonomies',
            'callback' => array( $this->callbacks, 'adminTaxonomy' )
         ),
         array(
            'parent_slug' => 'justine_plugin',
            'page_title' => 'Custom Widgets',
            'menu_title' => 'Widgets',
            'capability' => 'manage_options',
            'menu_slug' => 'Justine_widgets',
            'callback' => array( $this->callbacks, 'adminWidget' )
         )
      );
   }

   public function setSettings() {

      $args = array(
         array(
            'option_group' =>'justine_options_group',
            'option_name' => 'text_example',
            'callback' => array( $this->callbacks, 'justineOptionsGroup')
         ),
         array(
            'option_group' =>'justine_options_group',
            'option_name' => 'first_name'
         )
      );

      $this->settings->setSettings( $args );
   }

   public function setSections() {

      $args = array(
         array(
            'id' =>'justine_admin_index',
            'title' => 'Settings',
            'callback' => array( $this->callbacks, 'justineAdminSection'),
            'page' => 'justine_plugin'
         )
      );

      $this->settings->setSections( $args );
   }

   public function setFields() {

      $args = array(
         array(
            'id' =>'text_example',
            'title' => 'Text Example',
            'callback' => array( $this->callbacks, 'justineTextExample'),
            'page' => 'justine_plugin',
            'section' =>'justine_admin_index',
            'args' => array(
               'label_for' => 'text_example',
               'class' => 'example-class'
               )
            ),
            array(
               'id' =>'first_name',
               'title' => 'Prénom',
               'callback' => array( $this->callbacks, 'justineFirstName'),
               'page' => 'justine_plugin',
               'section' =>'justine_admin_index',
               'args' => array(
                  'label_for' => 'first_name',
                  'class' => 'example-class'
            )
         )
      );

      $this->settings->setFields( $args );
   }

 }