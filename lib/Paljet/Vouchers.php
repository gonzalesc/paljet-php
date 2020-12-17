<?php

namespace Paljet;

/**
 * Class Vouchers
 *
 * @package Paljet
 */
class Vouchers extends Resource {

	const URL_VOUCHERS = "/cprclientes/anticipos";

	/**
	 * @param string|null $id
	 *
	 * @return post an order.
	 */
	public function post($options = NULL) {
		return $this->request( "POST", self::URL_VOUCHERS, $this->paljet->GetAccess(), $options );
	}
}
