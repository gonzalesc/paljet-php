<?php

namespace Paljet;

/**
 * Class Categories
 *
 * @package Paljet
 */
class Families extends Resource {

	const URL_CATS = "/familias";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_CATS, $this->paljet->GetAccess(), $options );
	}

}
