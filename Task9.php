<?php
class Student
{
    protected $firstName;
    protected $lastName;
    protected $group;
    protected $averageMark;
    public function __construct($firstName, $lastName, $group, $averageMark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }
    public function getScholarship()
    {
        if ($this->averageMark == 5) {
            return 100;
        } else {
            return 80;
        }
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getGroup()
    {
        return $this->group;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getAverageMark()
    {
        return $this->averageMark;
    }
}
class Aspirant extends Student
{
    public function getScholarship()
    {
        if ($this->averageMark == 5) {
            return 200;
        } else {
            return 180;
        }
    }
}
