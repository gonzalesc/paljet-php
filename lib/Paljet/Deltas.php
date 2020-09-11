<?php

namespace Paljet;

/**
 * Class Products
 *
 * @package Paljet
 */
class Deltas extends Resource {

	const URL_PRODUCTS = "/deltas/articulos",
		URL_PRICES = "/deltas/listas-precios",
		URL_STOCK = "/deltas/stock";

	/**
	 * @param string|null $id
	 *
	 * @return get Products.
	 */
	public function get_products($options = NULL, $format = NULL) {
		return $this->request( "GET", self::URL_PRODUCTS, $this->paljet->GetAccess(), $options, $format );
	}

	/**
	 * @param string|null $id
	 *
	 * @return get prices.
	 */
	public function get_prices($options = NULL, $format = NULL) {
		return $this->request( "GET", self::URL_PRICES, $this->paljet->GetAccess(), $options, $format );
	}

	/**
	 * @param string|null $id
	 *
	 * @return get prices.
	 */
	public function get_stocks($options = NULL, $format = NULL) {
		return $this->request( "GET", self::URL_STOCK, $this->paljet->GetAccess(), $options, $format );
	}
}
