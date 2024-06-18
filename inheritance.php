<?php

class ParentClass{
    
    protected $gender;

    public function setGender($gender) {
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }
}

class ChildClass extends ParentClass{
    protected $age;
    
    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }
}

?>

