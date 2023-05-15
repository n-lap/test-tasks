<?php
class MyCalculator
{
    private $firstNumb;
    private $secondNumb;
    private $result;
    public function __construct($firstNumb, $secondNumb)
    {
        if (!is_numeric($firstNumb) || !is_numeric($secondNumb)) {
            throw new InvalidArgumentException("constructor of class MyCalculator only accepts numeric values");
        }
        $this->firstNumb = $firstNumb;
        $this->secondNumb = $secondNumb;
        $result = 0;
    }
    public function add()
    {
        $this->result = $this->firstNumb + $this->secondNumb;
        return $this;
    }
    public function multiply()
    {
        $this->result = $this->firstNumb * $this->secondNumb;
        return $this;
    }
    public function divide()
    {
        $this->result = $this->firstNumb / $this->secondNumb;
        return $this;
    }
    public function subtract()
    {
        $this->result = $this->firstNumb - $this->secondNumb;
        return $this;
    }
    public function addBy($secondNumb)
    {
        $this->result += $secondNumb;
        return $this;
    }
    public function divideBy($secondNumb)
    {
        $this->result /= $secondNumb;
        return $this;
    }
    public function multiplyBy($secondNumb)
    {
        $this->result *= $secondNumb;
        return $this;
    }
    public function subtractBy($secondNumb)
    {
        $this->result -= $secondNumb;
        return $this;
    }
    public function __toString()
    {
        return $this->result . "";
    }
}
