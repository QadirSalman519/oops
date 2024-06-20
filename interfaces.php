<?php 
// It can only contain abstract function
// Supports Multi Inheritance
// No constructor in interfaces because constructor contains body and interfaces contains abstract function that doesn't have body.
// All function must be public
// We can not define variables in interfaces.
// Can not create object of interfaces.

interface class1{
    public function start();
}

interface class2{
    public function end();
}

class class3 implements class1,class2{

    public function start(){
        echo "Starting<br>";
    }

    public function end(){
        echo "Ending<br>";
    }
}

?>