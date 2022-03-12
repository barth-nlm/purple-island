<?php 

namespace Inc;

final class Init
{
	/* Store all classes inside an array */
	public static function get_services() 
	{
		return [
			Pages\Dashboard::class,
			Main\SettingsLink::class,
			Main\CustomPostTypes::class,
			Rest\RestApiInit::class,
			// Rest\RestController::class,
			// Rest\TradeCenter::class,
		];
	}

	/* Loop through the classes, initialize them, and call the register() method if it exists */
	public static function register_services() 
	{
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );
			if ( method_exists( $service, 'register' ) ) {
				$service->register();
			}
		}
	}

	/* Initialize class */
	private static function instantiate( $class )
	{
		$service = new $class();

		return $service;
	}
}
