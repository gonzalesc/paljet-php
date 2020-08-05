<?php
namespace Paljet;

use Paljet\Error as Errors;

/**
 * Class Paljet
 *
 * @package Paljet
 */
class Paljet {
	protected $access;

	/**
	 * Constructor.
	 *
	 * @param array|null $options
	 *
	 * @throws Error\InvalidOptions
	 *
	 * @example array('url' => "{url}",
	 *					'user' => "{user}",
	 *					'pass' => "{pass}"
	 *					'emp'	=> "{emp}"
	 *				)
	 */
	public function __construct( $access ) {
		
		$this->access = $access;
		if ( ! isset( $this->access['url'] ) ||
			! isset( $this->access['user'] ) ||
			! isset( $this->access['pass'] ) ||
			! isset( $this->access['emp'] )
		) {
		  throw new Errors\InvalidOptions();
		}


		//$this->Products = new Products($this);
		$this->Categories = new Categories($this);
		$this->Brands = new Brands($this);
		$this->Prices = new Prices($this);
	}

	public function GetAccess() {
		return $this->access;
	}
}
