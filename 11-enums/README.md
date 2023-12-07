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