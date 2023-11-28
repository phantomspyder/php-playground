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