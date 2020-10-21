<?php

namespace Paljet;

/**
 * Class Orders
 *
 * @package Paljet
 */
class Orders extends Resource {

	const URL_ORDERS = "/cprclientes/pedidos";

	/**
	 * @param string|null $id
	 *
	 * @return post an order.
	 */
	public function post($options = NULL) {
		return $this->request( "POST", self::URL_ORDERS, $this->paljet->GetAccess(), $options );
	}
}
