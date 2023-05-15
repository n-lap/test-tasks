<?php
class Task6
{
    public static function stringToCamelCase(string $input): string
    {
        $len = mb_strlen($input);
        if ($len == 0) {
            return "";
        }
        $modifiedInput = trim($input);
        $result = strtoupper($modifiedInput[0]);
        for ($i = 1; $i < $len; $i++) {
            if ($modifiedInput[$i] === '_' || $modifiedInput[$i] === '-' || $modifiedInput[$i] === ' ') {
                $result .= strtoupper($modifiedInput[$i + 1]);
                $i++;
            } else {
                $result .= $modifiedInput[$i];
            }
        }
        return $result;
    }
}
