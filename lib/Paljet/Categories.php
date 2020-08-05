<?php

namespace Paljet;

/**
 * Class Categories
 *
 * @package Paljet
 */
class Categories extends Resource {

	const URL_CATS = "/categorias";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_CATS, $this->paljet->GetAccess(), $options );
	}

}
