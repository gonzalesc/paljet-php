<?php

namespace Paljet;

/**
 * Warehouses Class
 *
 * @package Paljet
 */
class Warehouses extends Resource {

	const URL_WAREHOUSES = "/depositos";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_WAREHOUSES, $this->paljet->GetAccess(), $options );
	}

}
