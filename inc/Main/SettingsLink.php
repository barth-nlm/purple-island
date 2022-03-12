<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Main;

use \Inc\Main\MainController;

class SettingsLink extends MainController
{
	public function register() {
    add_filter( "plugin_action_links_" . $this->plugin, array( $this, 'settings_link' ) );
	}

	public function settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=purple_island">Settings</a>';
    array_push( $links, $settings_link );
    return $links;
  }
}