<?php

class ParentClassEncapsulation{
    
    protected $gender;

    public function __construct($gender=null)
    {
        if($gender!==null){
            $this->setGender($gender);
        }
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }
}

class ChildClassEncapsulation extends ParentClassEncapsulation{
    protected $age;

    public function __construct($gender=null,$age=null){
        parent::__construct($gender);
        if($age!==null){
            $this->setAge($age);
        }
    }
    
    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }
}

?>

