# Errors #
* Since php 7, most errors are now reported by throwing `Error` exceptions.
* Same as exceptions, these `Error` exceptions will bubble up until the find the first matching `catch`. If not, then it will look for the default exception handler and even if that is not present then the exception will be converted to a fatal error and handled like a traditional error.
* `Error` does not inherit from the `Exception` but rather `Throwable`.
```php
<?php
try {
    assert(1 > 2);

} catch (Error $e) {
    echo '<br>Exception caught:'. $e->getMessage();
} 

function exceptions_error_handler(Throwable $exception) {
    echo '<br>global exception handler here for:' . $exception->getMessage();
}

set_exception_handler('exceptions_error_handler');
assert(3 > 4);
# This line will never execute
```