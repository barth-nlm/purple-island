<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Pages;

use \Inc\Main\MainController;

class Dashboard extends MainController
{
	public function register() {
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
	}

	public function add_admin_pages() {
		add_menu_page( 'Dashboard', 'Purple Island', 'manage_options', 'purple_island', array( $this, 'admin_index' ), 'dashicons-store', 110 );
	}

	public function admin_index() {
		require_once $this->plugin_path . 'templates/dashboard.php';
	}
}