<?php
class Matrix
{
    private $twoDimArray;
    private $numbOfCols;
    private $numbOfRows;

    public function __construct(array $arr)
    {
        $this->setNumberOfRowsAndCols($arr);
        $this->setTwoDimenArray($arr);
    }

    private function setNumberOfRowsAndCols($arr)
    {
        $numbOfRows = count($arr);
        $numbOfCols = count($arr[0]);
        if ($numbOfRows <= 0) {
            throw new InvalidArgumentException('constructor of class Matrix only accepts non-empty two dimensional arrrays: ');
        }
        foreach ($arr as $k) {
            if (count($k) !== $numbOfCols) {
                throw new InvalidArgumentException('constructor of class Matrix only accepts fully filled two dimensional arrays, check missed values');
            }
        }
        $this->numbOfCols = $numbOfCols;
        $this->numbOfRows = $numbOfRows;
    }

    private function setTwoDimenArray($arr)
    {
        foreach ($arr as $k) {
            foreach ($k as $v) {
                if (!is_float($v)) {
                    throw new InvalidArgumentException('constructor of class Matrix only accepts only two dimensional arrays with float numbers, but given type was:' . gettype($v));
                }
            }
        }
        $this->twoDimArray = $arr;
    }

    public function getTwoDimArray()
    {
        return $this->twoDimArray;
    }

    public function getNumberOfCols()
    {
        return $this->numbOfCols;
    }

    public function getNumberOfRows()
    {
        return $this->numbOfRows;
    }
    public function matrixAddition(Matrix $m1)
    {
        if ($this->numbOfCols != $m1->getNumberOfCols()) {
            throw new UnexpectedValueException("the number of columns are not equal");
        }
        if ($this->numbOfRows != $m1->getNumberOfRows()) {
            throw new UnexpectedValueException("the number of rows are not equal");
        }
        $resultMatrix = [];
        for ($i = 0; $i < $this->numbOfRows; $i++) {
            for ($j = 0; $j < $this->numbOfCols; $j++) {
                $resultMatrix[$i][$j] = $this->twoDimArray[$i][$j] + $m1->twoDimArray[$i][$j];
            }
        }
        return new Matrix($resultMatrix);
    }
    public function multiplicationByNumber(float $numb)
    {

        foreach ($this->twoDimArray as &$row) {
            foreach ($row as &$col) {
                $col *= $numb;
            }
        }
    }
    public function matrixMultiplication(Matrix $m1)
    {
        if ($this->numbOfCols != $m1->getNumberOfRows()) {
            throw new UnexpectedValueException("the number of columns and rows are not equal to each other");
        }
        $resultMatrix = [];
        for ($i = 0; $i < $this->numbOfRows; $i++) {
            for ($j = 0; $j < $this->numbOfCols; $j++) {
                $resultMatrix[$i][$j] = 0;
                for ($k = 0; $k < $this->numbOfCols; $k++) {
                    $resultMatrix[$i][$j] += $this->twoDimArray[$i][$k] * $m1->twoDimArray[$k][$j];
                }
            }
        }
        return new Matrix($resultMatrix);
    }
    public function __toString()
    {
        $str = "Matrix: ";
        foreach ($this->twoDimArray as $row) {
            $str .= "<br>";
            foreach ($row as $col) {
                $str .= $col . " ";
            }
        }
        $str .= "<br>";
        return $str;
    }
}
