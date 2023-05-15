<?php
class Task1
{
    public static function isGreaterWithSwitch(int $inputNumber): string
    {
        $result = "";
        switch ($inputNumber) {
            case $inputNumber > 30:
                $result = "More than 30";
                break;
            case $inputNumber > 20:
                $result = "More than 20";
                break;
            case $inputNumber > 10:
                $result = "More than 10";
                break;
            default:
                $result = "Equal or less than 10";
        }
        return $result;
    }

    public static function isGreaterWithIfConditions(int $inputNumber): string
    {
        $result = "";
        if ($inputNumber > 30) {
            $result = "More than 30";
        } else if ($inputNumber > 20) {
            $result = "More than 20";
        } else if ($inputNumber > 10) {
            $result = "More than 10";
        } else {
            $result = "Equal or less than 10";
        }
        return $result;
    }

    public static function isGreaterWithTernary(int $inputNumber): string
    {
        $result = "";
        $result = ($inputNumber > 30) ? "More than 30" : (($inputNumber > 20) ? "More than 20" : (($inputNumber > 10) ? "More than 10" : "Equal or less than 10"));
        return $result;
    }
}
