<?php
/**  
 * @package PurpleIsland
 */
 
/* 
  Plugin Name:  Purple Island
  Description:  Prpl.io Backend Test
  Version:      1.0
  Author:       Bartosz Rzepka
  Author URI:   https://polcode.com
  Text Domain:  purple-island
*/


/* Disable direct access */
defined( 'ABSPATH' ) or die( 'Not allowed!' );


/* Require Composer Autoload */
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/* Activate / Deactivate plugin hooks */
function activate_purple_island() {
  Inc\Main\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_purple_island' );

function deactivate_purple_island() {
  Inc\Main\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_purple_island' );


/* Initialize classes */
if ( class_exists( 'Inc\\Init' ) ) {
  Inc\Init::register_services();
}


