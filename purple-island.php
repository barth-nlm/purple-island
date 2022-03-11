<?php
/**  
  Plugin Name: Purple Island
  Description: Prpl.io Backend Test
  Version: 1.0
  Author: Your Name
  License: GPLv2 or later
  Text Domain: purple-island
*/

defined( 'ABSPATH' ) or die( 'Not allowed!' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

