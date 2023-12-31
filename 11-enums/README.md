# Enumerations #
* Enums allow developer to define a custom type that is limited to one of a discrete number of possible values.
* e.g. bool is either `true` or `false`
* Enum itself is a class and its possbile cases are all single-instance objects of that class.
* Enums are autoloadbale.
* A function may be type checked against an enumerated type, in which case only values of that type may be passed.
* An enumeration may have zero or more case definitions, with no maximum.
* Each case is backed by a singleton object of that name.
* An enum with no related data, is called a "Pure Enum".
* All cases have a read-only property, `name`, that is the case-insensitive name of the case itself.
## Backed Enum
* By default, enumerated cases have no scalar equivalent.
* To define a scalar equivalent for an enumeration, the syntax is as follows.
```php
<?php
enum Color: string
{
    case Green = 'G';
    case Blue = 'B';
    case Red = 'R';
}
```
* A case that has a scalar equivalent is called a Backed Case as it is backed by a simpler value.
* An enum whose all cases are backed is called a **Backed Enum**.
* Backed enum may be backed by types of `int` or `string` but no union.
* If enum is marked as having a scalar equivalent then all cases mush have a unique scalar equivalent defined.
* Backed Cases have an additional read-only property, `value` which is the value specified in the definition.
* Backed enums implement an internal `BackedEnum` interface, which exposes two additional methods. `from` and `tryFrom` which will take a scalar value and return a corresponding case.
## Methods ##
* Any enum may contain methods and may implement interfaces.
* If enum implements an interface, its cases can be used for type checking that interface.
* Inside a method, `$this` refers to the case instance.
* Methods can be `public`, `private` or `protected` although in practice `private` and `protected` are equivalent because inheritance is not allowed.
### Static Methods ###
* Enums support static methods primarily for alternative constructors.
```php
<?php
enum Color
{
    case Red;
    case Green;
    case Blue;

    public static function fromIndex(int $idx): static
    {
        if ($idx == 0) {
            return static::Red;
        }
        else if ($idx == 1) {
            return static::Green;
        }
        return static::Blue;
    }
}

```
## Enum Constants
* Enums may include constants which can refer to an enum case.

```php
<?php
enum Size
{
    case Blue;

    public const SkyBlue = self::Blue;
}
```
## Traits
* Enumeration may leverage traits. However, traits used in an enum cannot contain properties but only methods and static methods.