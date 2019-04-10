<?php
/**
 * Test Case for the Unit Test Suite.
 *
 * @package     KnowTheCode\Data_Store\Tests\Unit
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Tests\Unit;

use Brain\Monkey;
use Brain\Monkey\Functions;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;
use KnowTheCode\Data_Store\Tests\Test_Case_Trait;

/**
 * Abstract Class Test_Case
 *
 * @package Beans\Framework\Tests\Unit
 */
abstract class Test_Case extends TestCase {
	use MockeryPHPUnitIntegration;
	use Test_Case_Trait;

	/**
	 * When true, return the given path when doing wp_normalize_path().
	 *
	 * @var bool
	 */
	protected $just_return_path = false;

	/**
	 * Prepares the test environment before each test.
	 */
	protected function setUp() {
		parent::setUp();
		Monkey\setUp();

		$this->setup_common_wp_stubs();
	}

	/**
	 * Cleans up the test environment after each test.
	 */
	protected function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}

	/**
	 * Set up the stubs for the common WordPress escaping and internationalization functions.
	 */
	protected function setup_common_wp_stubs() {
		// Common escaping functions.
		Functions\stubs(
			[
				'esc_attr',
				'esc_html',
				'esc_textarea',
				'esc_url',
				'wp_kses_post',
			]
		);

		// Common internationalization functions.
		Functions\stubs(
			[
				'__',
				'esc_html__',
				'esc_html_x',
				'esc_attr_x',
			]
		);

		foreach ( [ 'esc_attr_e', 'esc_html_e', '_e' ] as $wp_function ) {
			Functions\when( $wp_function )->echoArg();
		}
	}
}
