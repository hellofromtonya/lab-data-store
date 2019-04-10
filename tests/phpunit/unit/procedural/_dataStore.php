<?php
/**
 * Tests for _data_store().
 *
 * @package     KnowTheCode\Data_Store\Tests\Unit\Procedural
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Tests\Unit\Procedural;

use function KnowTheCode\Data_Store\Procedural\_data_store;
use KnowTheCode\Data_Store\Tests\Unit\Test_Case;

/**
 * Class Tests_Data_Store
 *
 * @package KnowTheCode\Data_Store\Tests\Unit\Procedural
 * @group   procedural
 */
class Tests_Data_Store extends Test_Case {

	/**
	 * Prepares the test environment before each test.
	 */
	protected function setUp() {
		parent::setUp();

		require_once DATA_STORE_ROOT_DIR . '/src/procedural/internals.php';
	}

	/**
	 * Test _data_store() should return true when the value is stored.
	 */
	public function test_should_return_true_when_value_is_stored() {
		$this->assertTrue( _data_store( __METHOD__, [ 'post_type' => 'faq' ] ) );
	}
}
