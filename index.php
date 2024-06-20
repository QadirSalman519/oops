<?php 

require_once 'inheritance.php';
require_once 'polymorphism.php';
require_once 'encapsulation.php';
require_once 'abstraction.php';
require_once 'interfaces.php';

// Inheritance Start
echo "<h1>Inheritance</h1>";

$parent = new ParentClass();
$parent->setGender('Male');
echo $parent->getGender() . "<br>";

$child = new ChildClass();
$child->setGender('Female');
$child->setAge('18');
echo $child->getGender() . ", " . $child->getAge();
// Inheritance End

// Polymorphism Start
echo "<h1>Polymorphism</h1>";

$human = new Human('Alex',10,'Male');
$teacher = new Teacher('Alexa',12,'Female',"Maths");
$student = new Student('Alexa',12,'Female',"XYZ School");

echo $human->introduce() . "<br>";
echo $teacher->introduce() . "<br>";
echo $student->introduce() . "<br>";
// Polymorphism End

// Encapsulation Start
echo "<h1>Encapsulation</h1>";

$child2 = new ChildClassEncapsulation();
$child2->setGender('Male');
$child2->setAge(22);

echo $child2->getGender() . " " . $child2->getAge();
// Encapsulation End

// Abstraction Start
echo "<h1>Abstraction</h1>";
$car = new Car;
$car->begin();
$car->start();
$car->stop();
// Abstraction End

// Abstraction Start
echo "<h1>Interfaces</h1>";
$class3 = new Class3;
$class3->start();
$class3->end();
// Abstraction End
?>
