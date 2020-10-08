<?php

class Str
{
    public static function toUpper($string):string
    {
            return mb_strtoupper($string);
    }

    public static function toLower($string):string
    {
            return mb_strtolower($string);
    }

    public static function getLength($string)
    {
        return mb_strlen($string);
    }
}

$machaine = "Coucou les amis";

echo Str::toUpper($machaine).PHP_EOL;
echo Str::getLength($machaine);