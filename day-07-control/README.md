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