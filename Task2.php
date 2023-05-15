<?php
class Task2
{
    public static function birthdayCountdown(string $date): int
    {
        $today = new DateTime();
        $birthday = new DateTime($date);
        $fixedBirthday = date_create($birthday->format("d-m-" . $today->format("Y")));
        $diff = $today->diff($fixedBirthday)->format("%a");
        $daysInYear = date('L') ? 366 : 365;
        return ($today->format("d-m-Y") > $fixedBirthday->format("d-m-Y")) ? $daysInYear - $diff : $diff;
    }
}
