<?php
class Task4
{
    public static function removeFromNthPosition(array $arr, int $position): array
    {
        array_splice($arr, $position, 1);
        return $arr;
    }
}
