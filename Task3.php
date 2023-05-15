<?php
class Task3
{
    public static function sumOfDigitsUntilOneDigit(int $numb): int
    {
        if ($numb <= 9) {
            return $numb;
        } else {
            $sum = 0;
            while ($numb > 0) {
                $digit = $numb % 10;
                $sum += $digit;
                $numb = intdiv($numb, 10);
            }
            return Task3::sumOfDigitsUntilOneDigit($sum);
        }
    }
}
