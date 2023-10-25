<?php
function dumpAttributeData($reflection) {
    $attributes = $reflection->getAttributes();

    foreach ($attributes as $attribute) {
       var_dump($attribute->getName());
       var_dump($attribute->getArguments());
       var_dump($attribute->newInstance());
    }
}

#[Attribute(Attribute::TARGET_CLASS)]
class MyAttribute
{

}

#[MyAttribute]
class MyClass
{

}

dumpAttributeData(new ReflectionClass(MyClass::class));