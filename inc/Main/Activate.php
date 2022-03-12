<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Main;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}