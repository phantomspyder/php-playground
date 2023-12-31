# Classes #
## Basics ##
* A class may contain its own `constants`, `variables` (called `properties`) and `functions` (called `methods`)
* `$this` is the reference to the calling object and is available inside a method.
* A class can be marked read-only using `readonly` which will add `readonly` modifier to every declared property.
* there is a nullsafe operator now `?->?` to access the property safely.

## Properties ##
* The properites are defined by using one modifier, optionally followed by a type declaration, followed by a normal variable declaration. This declartion may include an initialization but this must be a constant value.
* Properties can be marked as `readonly`

## Class Constants ##
* Class constants can be redefined by a child class unless it is declared `final`

## Autoloading ##
* PHP allow to register any number of autoloaders to automatically load classes. interfaces, enums and traits without having to use `include` and `require`.
* `spl_autoload_register` is the function to register an autoloader.

## Visibility ##
* `public`, `protected`, `private`
