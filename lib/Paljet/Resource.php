<?php

namespace Paljet;

/**
 * Class Resource
 *
 * @package Paljet
 */
class Resource extends Client {

	/**
	 * Constructor.
	 */
	public function __construct($paljet) {
		$this->paljet = $paljet;
	}
}
