<?php

namespace Paljet;

/**
 * Class Prices
 *
 * @package Paljet
 */
class Prices extends Resource {

	const URL_PRICES = "/listasprecios";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_PRICES, $this->paljet->GetAccess(), $options );
	}

}
