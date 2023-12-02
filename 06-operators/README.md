# Operators #
* An operator is a something that takes two or more values and yields another value.
## Operator Precedence ##
* The precedence of an operator specifies how tightly it binds two expressions together.
* Parentheses may be used to force precedence, if necessary.
* If precedence is equal then the associativity decides how the operators are grouped.
* Operators of equal precedence that are non-associative cannot be used next to each other.
* Associativity is onoyl meaningful for binary and ternary operators.
* Associativity and operator precedence only determine how expressions are grouped, not how they are evaluated. Code that assumes the order of evaluation should be avoided as the behaviour can change between different PHP versions.

TODO: Add operator precedence table.
## Arithmetic Operators
| Example | Name | Result |
| --- | --- | --- |
| +$a | Identity | Conversion of $a to int or float as appropriate.|
| -$a | Negation | Opposite of $a.|
| $a + b | Addition | Sum of $a and $b.|
| $a - b  | Subtraction | Difference of $a and $b.|
| $a * $b | Multiplication | Product of $a and $b.|
| $a / $b | Division | Quotient of $a and $b.|
| $a % $b | Modulo | Remainder of $a divided by $b.|
| $a ** $b | Exponentiation | Result of raising $a to the $b'th power.|
## Incrementing / Decrementing Operators
| Example | Name | Effect |
| --- | --- | --- |
| ++$a | Pre-increment | Increments $a by one, then returns $a.|
| $a++ | Post-increment | Returns $a, then increments $a by one.|
| --$a | Pre-decrement | Decrements $a by one, then returns $a.|
| $a-- | Post-decrement | Returns $a, then decrements $a by one.|
## Assignment Operator
* The basic assignment operator is `=`.
* This operator is used for `binary arithmetic`, array union and string operators.
* Assignment Operator copies the value of the original variable to the one it is being assigned to. An exception to this rule is objects which are assigned by reference. Objects may be explicitly copied via the `clone` keyword.
* Assignment by reference means both the variables point to the same data in the memory.

```php
<?php
$a = 3;
$b = &$a; // both $a and $b point to the same object
```
### Arithmetic Assignment Operators
| Example | Equivalent | Operation |
| --- | --- | --- |
| $a += $b | $a = $a + $b | Addition |
| $a -= $b | $a = $a - $b | Subtraction |
| $a *= $b | $a = $a * $b | Multiplication |
| $a /= $b | $a = $a / $b | Division|
| $a %= $b | $a = $a % $b | Modulus |
| $a **= $b | $a = $a ** $b | Exponentiation |
### Bitwise Assignment Operators
| Example | Equivalent | Operation |
| --- | --- | --- |
| $a &= $b | $a = $a & $b | Bitwise And |
| $a ^= $b | $a = $a ^ $b | Bitwise Xor |
| $a |= $b | $a = $a | $b | Bitwise Or |
| $a <<= $b | $a = $a << $b | Left Shift |
| $a >>= $b | $a = $a >> $b | Right Shift |
### Other Assignment Operators
| Example | Equivalent | Operation |
| --- | --- | --- |
| $a .= $b | $a = $a . $b | String Concantenation |
| $a ??= $b | $a = $a ?? $b | Null Coalesce |
## Bitwise Operators
| Example | Name | Result |
| --- | --- | --- |
| $a & $b | And | Bits that are set in both $a and $b are set. |
| $a \| $b | Or (Inclusive Or) | Bits that are set in either $a or $b are set. |
| $a ^ $b | Xor (Exclusive Or) | Bits that are set in $a or $b but not both are set. |
| ~$a | Not |  	Bits that are set in $a are not set, and vice versa.  |
| $a << $b | Shift Left | Shift the bits of $a $b steps to the left (each step means "multiply by two") |
| $a >> $b | Shift Right | Shift the bits of $a $b steps to the right (each step means "divide by two") |
## Comparison Operators
TODO
## Error Control Operators
*  PHP supports `@` operator which suppresses any diagnostic error by an expression when prepended to it.
* If a custom error hander function is set with `set_error_handler()`, it will still be called.
## Execution Operators
* PHP supports one execution operator. backticks ``
* PHP will attempt to execute the contents of the backticks as a shell command and the output will be returned.
## Logical Operators
| Example | Name | Result |
| --- | --- | --- |
| $a and $b | And | true if both $a and $b are true. |
| $a or $b | Or | true if either $a or $b is true. |
| $a xor $b | Xor | true if either $a or $b is true, but not both. |
| $a && $b | And | true if both $a and $b are true. |
| $a || $b | Or | true if either $a or $b is true. |
