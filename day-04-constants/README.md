# Constants
* Can be defined with `const` keyword or `define()`
* Cannot be changed once defined.
* Constants do not have a `$` sign before their name.
* Constants may only evaluate to scalar values or arrays.
* `const`

```php
<?php
// Using define
define('MY_MESSAGE', 'Hello World');
echo MY_MESSAGE;

// Constants defined with const keyword must be declared at the top-level scope because they are defined at compile time
const MY_MESSAGE_2 = 'Goodbye World!';
echo MY_MESSAGE_2;
```
* Classes and interfaces can have constants too. They are limited to their scope.

```php
<?php
class Bar
{
    const FOO = 'Foo';
}
// Access constant via Class
echo Bar::FOO;

// Access constant via an object
$b = new Bar();
echo $b::FOO;

// Special constant
echo Bar::class;
```