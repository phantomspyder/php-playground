# Exceptions #
* An exception can be thrown and caught.
* Code needs to be in a `try` block. Each `try` must have at least one corresponding `catch` or `finally`.
* The exception bubbles up until it finds a matching `catch` block, executing all the `finally` blocks along the way. If no matching `catch` block is found, the program will teriminate with a fatal error unless a global exception handler is set using `set_exception_handler`.
* If there is a `return` statement in `try` or the `catch` block, it will execute after running the `finally` block code. If there is a `return` in `finally` block, that will take precedence.
* For the legacy / internal php fucntions that use error reporting, you can define an error handler that throws an exception. This technique works for non-fatal errors, however.
```php
<?php
try {
    echo 'Hello';
    throw new Exception('Exception thrown after Hello but before world');
    echo 'World';

} catch (Exception $e) {
    echo '<br>Exception caught:'. $e->getMessage();
} finally {
    echo '<br>Sorry. There was an issue';
}
```
* Custom excepions can extend the base `Exception` class.
* If a custom exception defines a constructor, it is highly recommended to call the parent class constructor.
* The `__toString()` method can be overridden to provide a custome output.
* Exceptions cannot be cloned and will result in `E_ERROR` if tried.
```php
<?php
class MyException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

try {
    throw new MyException("My Exception", 200);
} catch (Exception $e) {
    echo 'Custom Exceptoin Caught:'. $e;
}
```