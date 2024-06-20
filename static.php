<?php 
// We don't need to create object of static methods and static variables.
// We can access static methods and static variables directly by using class name
// We can not use $this because we used it bcz we were getting value of the current object but in static methods we don't create objects so it work in it.
// We use self::funcion/variable name to retrieve the output/value. This only works with static methods.
// No constructor in static functions/methods because constructor works when an object is created and no object is created in statis functions.

class StaticClass{
    static public $num=10;
    static function test(){
        self::$num++;
    }
}
StaticClass::test();
echo StaticClass::$num;
// echo StaticClass::test();
?>