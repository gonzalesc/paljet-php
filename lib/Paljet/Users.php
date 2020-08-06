<?php

namespace Paljet;

/**
 * Class Categories
 *
 * @package Paljet
 */
class Users extends Resource {

	const URL_USERS = "/usuarios";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_USERS, $this->paljet->GetAccess(), $options );
	}

}
