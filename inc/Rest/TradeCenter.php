<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Rest;

use WP_REST_Request;
use WP_REST_Response;

use \Inc\Rest\RestController;

class TradeCenter extends RestController
{
  public function __construct() {
		$this->register_routes();
	}

	public function register_routes() {
    $this->register_bids_list();
  }

  public function register_bids_list() {
  }   
}


