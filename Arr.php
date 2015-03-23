<?php

namespace Tools;

class Arr
{

    public static function get($array, $var, $default = null)
    {
        if (isset($array[$var])) {
            return $array[$var];
        }
        return $default;
    }
}