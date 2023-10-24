<?php
define('MY_MESSAGE', 'Hello World!');
echo MY_MESSAGE;
echo "<br>";

const MY_MESSAGE_2 = 'Goodbye World!';
echo MY_MESSAGE_2;

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