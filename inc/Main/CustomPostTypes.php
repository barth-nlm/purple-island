<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Main;

use \Inc\Main\MainController;

class CustomPostTypes extends MainController
{
	public function register() {
    add_action ( 'init', array( $this, 'activate' ) );
	}

	public function activate() {
    register_post_type( 'product', 
      array(
        'labels' => array(
          'name' => 'Products',
          'singular_name' => 'Product',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        ) 
      );

    register_post_type( 'auction', 
      array(
        'labels' => array(
          'name' => 'Auctions',
          'singular_name' => 'Auction',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
      ) 
    );
  }
}