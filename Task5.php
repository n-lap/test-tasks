<?php
class Task5
{
    public static function rangeFromAtoB(int $A, int $B): void
    {
        echo $A;
        if ($A == $B) {
            return;
        } else {
            $A < $B ? Task5::rangeFromAtoB(++$A, $B) : Task5::rangeFromAtoB(--$A, $B);
        }
    }
}
