<?php 
// Doesn't supports multi inheritance in php
// There must be 1 abstract method in abstract class
// Can not create object of abstract class
// Abstract methods doesnt have body

abstract class Vehicle{

    abstract function begin();

    public function start(){
        echo "Car Started<br>";
    }
    public function stop(){
        echo "Car Stopped";
    }
}

class Car extends Vehicle{
    public function begin(){
        echo "Starting the vehicle<br>";
    }
}
?>