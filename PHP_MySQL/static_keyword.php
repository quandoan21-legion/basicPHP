<?php
class ParentClass
{

    // public static $firstClass = "Hello";

    public static $secondClass = "Hello World!";

    public static function getFunction($firstClass)
    {
        self::$secondClass = $firstClass;
    }
}
echo ParentClass::$secondClass;
ParentClass::getFunction("Hello");
echo ParentClass::$secondClass;
