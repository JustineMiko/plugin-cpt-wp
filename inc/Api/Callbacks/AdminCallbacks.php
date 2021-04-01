<?php
/**
 * @package JustinePlugin
 */
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController {

    public function adminDashboard() {

        return require_once( "$this->plugin_path/templates/admin.php" );

    }

	public function adminCpt() {
		return require_once( "$this->plugin_path/templates/cpt.php" );
	}

	public function adminTaxonomy() {
		return require_once( "$this->plugin_path/templates/taxonomy.php" );
	}

	public function adminWidget() {
		return require_once( "$this->plugin_path/templates/widget.php" );
	}

    public function JustineOptionsGroup( $input ) {
        return $input;
    }

    public function justineAdminSection() {
        echo 'check it out !';
    }

    public function justineTextExample() {

        $value = esc_attr( get_option('text_example') );

        echo '<input type="text" class="regular-text" name="text_example" value="' .$value . '" placeholder="write something here">';
    }

    public function justineFirstName() {

        $value = esc_attr( get_option('first_name') );

        echo '<input type="text" class="regular-text" name="first_name" value="' .$value . '" placeholder="écrivez votre prénom">';
    }
}