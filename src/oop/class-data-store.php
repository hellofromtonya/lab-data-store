<?php
/**
 * Data Store in OOP.
 *
 * @package     KnowTheCode\Data_Store\OOP
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\OOP;

/**
 * Class Data_Store
 *
 * @package KnowTheCode\Data_Store\OOP
 */
class Data_Store {

	/**
	 * Store the given value in the store by its given key.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key   Storage key to locate the value in the store.
	 * @param null   $value The data, state, or config to store.
	 *
	 * @return bool Returns true if the value is stored.
	 */
	public function store( $key, $value ) {

		return true;
	}
}
