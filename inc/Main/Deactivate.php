<?php 
/**  
 * @package PurpleIsland
 */

namespace Inc\Main;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}