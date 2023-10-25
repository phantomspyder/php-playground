# Attributes #
* Offer the ability to add structured, machine-readable metadata information on declarations in code.
* Metadata can be inspected at runtime using the Reflection APIs
* Can be used on clases, methods, functions, parameters, properties and class constants.

```php
<?php

use Attribute;
#[Attribute(Attribute::TARGET_CLASS)]
class MyAttribute
{

}

#[MyAttribute]
class MyClass
{

}
```

The following targets are available.
* Attribute::TARGET_CLASS
* Attribute::TARGET_FUNCTION
* Attribute::TARGET_METHOD
* Attribute::TARGET_PROPERTY
* Attribute::TARGET_CLASS_CONSTANT
* Attribute::TARGET_PARAMETER
* Attribute::TARGET_ALL
* Attribute::IS_REPEATABLE
