<?php

namespace Paljet;

/**
 * Class Products
 *
 * @package Paljet
 */
class Products extends Resource {

	const URL_PRODUCTS = "/articulos";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request( "GET", self::URL_PRODUCTS, $this->paljet->GetAccess(), $options );
	}

}
