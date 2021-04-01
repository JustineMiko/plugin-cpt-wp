<?php
/**
 * @package JustinePlugin
 */
namespace Inc\Base;

use \Inc\Base\BaseController ;

class SettingsLinks extends BaseController
{
    public function register() {
        add_filter("plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );

    }


    public function settings_link( $links ) {
        // add some custom settings link(verifier le page=... dans wp)
        $settings_link = '<a href="admin.php?page=justine_plugin">Settings</a>';
        array_push( $links, $settings_link );
        return $links;
    }
}