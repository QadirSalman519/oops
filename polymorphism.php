<?php 

class Human{
    protected $name;
    protected $age;
    protected $gender;

    public function __construct($name,$age,$gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function introduce(){
        return $this->name . " " . $this->age . " " . $this->gender;
    }
}

class Teacher extends Human{
    protected $subject;

    public function __construct($name,$age,$gender,$subject)
    {
        parent::__construct($name,$age,$gender);
        $this->subject = $subject;
    }

    public function introduce()
    {
        return parent::introduce(). " " . $this->subject;
    }
}

class Student extends Human{
    protected $school;

    public function __construct($name,$age,$gender,$school){
        parent::__construct($name,$age,$gender);
        $this->school = $school;
    }

    public function introduce()
    {
        return parent::introduce(). " " . $this->school;
    }
}

?>