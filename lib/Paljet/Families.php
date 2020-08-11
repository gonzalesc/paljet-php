<?php

namespace Paljet;

/**
 * Families Class
 *
 * @package Paljet
 */
class Families extends Resource {

	const URL_FAMILIES = "/familias";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get( $options = NULL ) {
		return $this->request( "GET", self::URL_FAMILIES, $this->paljet->GetAccess(), $options );
	}

}
