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
