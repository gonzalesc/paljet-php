<?php

namespace Paljet;

/**
 * Class Products
 *
 * @package Paljet
 */
class Brands extends Resource {

	const URL_BRANDS = "/marcas";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_BRANDS, $this->paljet->GetAccess(), $options );
	}

}
