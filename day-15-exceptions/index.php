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

function exceptions_error_handler(Throwable $exception) {
    echo '<br>global exception handler here';
}

set_exception_handler('exceptions_error_handler');
throw new Exception('Testing exception handler');