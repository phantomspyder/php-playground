# Control Structures #
## If ##
* PHP will execute a code in the if condition only when the expression used by the `if` statement evaluates to `true`.
```php
<?php
if (1 < 2) {
    echo "This message will be printed";
}
```
## If/Else ##
* Else executes a statment if the expression for the `if` statmement evaluates to `false`.
```php
<?php
if (2 < 1) {
    echo "This message will be not be printed";
} else {
    echo "This message for else will be printed";
}
```
## elseif / else if ##
* `elseif` or `else if` executes a statment if the expression for the `if` statmement evaluates to `false` and expression for `elseif / else if` evaluates to `true`
```php
<?php
if (2 < 1) {
    echo "This message will be not be printed";
} elseif (2 > 1) {
    echo "This message for elseif will be printed";
}
```
## while
The while loops repeatedly executes statements given to it while the provided expresssion evaluates to `true`.
```php
<?php
$i = 0;
while ( $i < 10 ) {
    $i++;
    echo "$i";
}
```
## do-while
The `do-while` loop is very similar to the `while` loop except for
1. The expression to execute the statements is evaluated towards the end of the iteration.
2. It is guaranteed to run at least once.
```php
<?php
$i = 0;
do {
    $i++;
    echo "$i";
}
while ( $i < 10 );
```
## for
The `for` loop takes the following form
```php
for (expr1; expr2; expr3)
    statement
```
* `expr1` is evaluated and executed once at the start of the loop.
* `expr2` is evaluated at the start of each iteration and the loop continues to execute the statements if it evaluates to `true`
* `expr3` is evaluated and executed at the end of each iteration.
* Each expression can be empty or contain multiple expression separated by comma.
## foreach
TODO
## break
* Ends the execution of the current `for`, `foreach`, `while`, `do-while` or `switch`structure.
* Accpets an optional numeric argument which tells how many nested structures are to be broken out (the default is 1).
## continue
* Skips the execution of the current `for`, `foreach`, `while`, `do-while` or `switch`loops.
* `switch` is considered a looping structure for `continue`.
* Accpets an optional numeric argument which tells how many nested enclosing loops are to be skipped (the default is 1).
## switch
```php
<?php
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

```
* Like a series of `if` statements on the same expression.
* `continue` is applicable in a `switch` statement and acts similar to `break`. 
* `switch/case` does loose comparsion.
* You need to use `break` to tell php to stop executing the code after running the statmenets for the matching `case`.
* The `switch` statment's condition is evaluated only once and thus it is better than nested `if/else` for complicated conditions or code running in a loop.
* Use `default` to execute code if no matching `case` is found.
* You can use `;` instead of `:` after a `case`.
* For complex comparisons, you can use `switch(true)`
## match
* Branches evaluation based on an identity check of a value.
* match expression arms may contain multiple expressions seperated by a comma.
* Match expression can be used to handle non identity cases by using `match(true)`
```php
<?php
$bgcolor = 'green';

$fgcolor = match($bgcolor) {
    'green','blue' => 'yellow',
    'white' => 'black',
    'black' => 'white',
};
```
* A match expression is similar to switch except for
1. A match arm compares values strictly (===) instead of loosely as in `switch`
2. A match expression returns a value.
3. match arms do not fall-through to the later cases like in `switch`.
4. A match expression must be exhaustive (meaning it should cover all the possible values or `default`)

