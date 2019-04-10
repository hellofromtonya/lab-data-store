<?php
/**
 * Bootstraps the Unit Tests.
 *
 * @package     KnowTheCode\Data_Store\Tests\Unit
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Tests\Unit;

use function KnowTheCode\Data_Store\Tests\init_test_suite;

require_once dirname( dirname( __FILE__ ) ) . '/functions.php';
init_test_suite( 'unit' );

require_once DATA_STORE_TESTS_DIR . '/class-test-case.php';
