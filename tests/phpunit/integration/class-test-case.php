<?php
/**
 * Test Case for the Integration Test Suite.
 *
 * @package     KnowTheCode\Data_Store\Tests\Integration
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Tests\Integration;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use KnowTheCode\Data_Store\Tests\Test_Case_Trait;
use WP_UnitTestCase;

/**
 * Abstract Class Test_Case
 *
 * @package KnowTheCode\Data_Store\Tests\Integration
 */
abstract class Test_Case extends WP_UnitTestCase {
	use MockeryPHPUnitIntegration;
	use Test_Case_Trait;

	/**
	 * Set up the test before we run the test setups.
	 */
	public static function setUpBeforeClass() {
		parent::setUpBeforeClass();

		set_current_screen( 'front' );
	}

	/**
	 * Prepares the test environment before each test.
	 */
	public function setUp() {
		parent::setUp();
		Monkey\setUp();
	}

	/**
	 * Cleans up the test environment after each test.
	 */
	public function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}
}
