<?php
/**
 * Tests for Data_Store::store().
 *
 * @package     KnowTheCode\Data_Store\Tests\Unit\Static_Class\Data_Store
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Tests\Unit\Static_Class\Data_Store;

use KnowTheCode\Data_Store\Static_Class\Data_Store;
use KnowTheCode\Data_Store\Tests\Unit\Test_Case;

/**
 * Class Tests_Data_Store_Store
 *
 * @package KnowTheCode\Data_Store\Tests\Unit\Static_Class\Data_Store
 * @group   static-class
 */
class Tests_Data_Store_Store extends Test_Case {

	/**
	 * Prepares the test environment before each test.
	 */
	protected function setUp() {
		parent::setUp();

		require_once DATA_STORE_ROOT_DIR . '/src/static-class/class-data-store.php';
	}

	/**
	 * Test Data_Store::store() should return true when the value is stored.
	 */
	public function test_should_return_true_when_value_is_stored() {
		$this->assertTrue( Data_Store::store( __METHOD__, [ 'post_type' => 'faq' ] ) );
	}
}
