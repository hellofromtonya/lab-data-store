# Data Store Test Suite

This test suite is broken up into unit and integration tests.  

- Unit tests run in isolation, i.e. independently without WordPress or any other package, plugin, or theme.
- Integration tests run with dependencies, such as WordPress, theme, etc.

This test suite follows the [WordPress Testing Handbook which is found here](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/#test-classes):

- [The filename](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/#test-classes) is named for the function or method, e.g. `_data_store()` would be `_dataStore()`.
- [The test class name](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/#test-classes) follows this convention: 
    - For a function: `Tests_FunctionName`. For example, `_data_store()` would be `Tests_Data_Store`.
    - For a method: `Tests_Class_Name_Method_Name`. For example, `Data_Store::store()` would be `Tests_Data_Store_Store`.
- [The test methods should be named](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/#test-methods) following this convention: 
    - When conditionally returning a value: `test_should_return_[value]_when_[the condition]`, such as `test_should_return_true_when_value_is_stored`.
    - When doing something: `test_should_[the expected behavior]`.

## Running the test suite

Tests are run from the root of the plugin. You will need to run these in your favorite command line app (e.g. Terminal, PhpStorm, iTerm, etc.).

To run the unit tests, type `composer run-unit-tests`.

To run the integration tests, type `composer run-integration-tests`.

To run both test suites, type `composer run-tests`.
