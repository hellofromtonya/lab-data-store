<?php
/**
 * Test Suites' common functionality.
 *
 * @package     KnowTheCode\Data_Store\Tests
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Tests;

/**
 * Initialize the test suite.
 *
 * @since 1.0.0
 *
 * @param string $test_suite Directory name of the test suite.
 */
function init_test_suite( $test_suite ) {
	check_readiness();

	init_constants( $test_suite );

	// Load the files.
	require_once DATA_STORE_ROOT_DIR . '/vendor/autoload.php';
	require_once __DIR__ . '/test-case-trait.php';

	// Load Patchwork before everything else in order to allow us to redefine WordPress and plugin functions.
	require_once DATA_STORE_ROOT_DIR . '/vendor/antecedent/patchwork/Patchwork.php';
}

/**
 * Check the system's readiness to run the tests.
 *
 * @since 1.0.0
 */
function check_readiness() {

	if ( version_compare( phpversion(), '5.6.0', '<' ) ) {
		trigger_error( 'Data Store Unit Tests require PHP 5.6 or higher.', E_USER_ERROR ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- Valid use case for our testing suite.
	}

	if ( ! file_exists( dirname( dirname( __DIR__ ) ) . '/vendor/autoload.php' ) ) {
		trigger_error( 'Whoops, we need Composer before we start running tests.  Please type: `composer install`.  When done, try running `phpunit` again.', E_USER_ERROR ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- Valid use case for our testing suite.
	}
}

/**
 * Initialize the constants.
 *
 * @since 1.0.0
 *
 * @param string $test_suite_folder Directory name of the test suite.
 */
function init_constants( $test_suite_folder ) {
	define( 'DATA_STORE_TESTS_DIR', __DIR__ . DIRECTORY_SEPARATOR . $test_suite_folder );
	define( 'DATA_STORE_ROOT_DIR', dirname( dirname( __DIR__ ) ) );
}
