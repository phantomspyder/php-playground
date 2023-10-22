# Atomic Types
## Built-in types
### Null ###
```php
<?php
    $var = NULL; // NULL is case-insensitive
    unset($var); // Returns null for the $var
```
### Scalar ###

Boolean
```php
<?php
    $var = true; // value is case-insensitive    
```
Following are considered `false`
* Boolean value `false`
* Integer value `0` and float values `0.0` and `-0.0`
* Empty string `""` or `"0"`
* Unit type `NULL`
* Array with no elements
* Internal objects that overload casting behaviour to bool.

Integer
```php
<?php
    $a = 1; // decimal
    $a = 0o123; // octal
    $a = 0x1A; // hexadecimal
    $a = 0b11 // binary
    $a = 1_2_0; // decimal
```

Float
```php
<?php
    $a = 1.24;
    $a = 1.2e3;    
    $a = 1_234.5;
```
> [!WARNING]
> Floating point numbers have limited precision. Please refer to the documentation on php.net

String
```php
<?php
    $a = 'abc';     // Single Quote. Not parsed by php
    $b = "abc $a";  // Double Quoted. Parsed and values replaced by php  
    echo <<<END     // Heredoc. Parsed and values replaced by php
    a
    b
    c
    END;
    echo <<<'EOD'   // Nowdoc. Not parsed by php
    This is a test sentence
    EOD:
```