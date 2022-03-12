<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Rest;


class RestApiInit
{
  public function __construct() {
		$this->rest_api_init();
	}

  public function rest_api_init() {
    add_action( 'rest_api_init', function() {
		} );
  }
}