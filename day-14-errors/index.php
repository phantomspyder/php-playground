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