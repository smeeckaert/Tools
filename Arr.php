<?php

namespace FW\Tools;

class Arr
{

    public static function get($array, $var, $default = null)
    {
        if (isset($array[$var])) {
            return $array[$var];
        }
        return $default;
    }

    /**
     * Pick the $key value of an array or object.
     * The index of the newly created array can be picked with $indexKey
     *
     * @param      $array
     * @param      $key
     * @param null $indexKey
     *
     * @return array
     */
    public static function pick($array, $key, $indexKey = null)
    {
        $return = array();
        if (is_array($array) && array_key_exists($key, $array)) {
            return $array[$key];
        } elseif (is_object($array) && !empty($array->$key)) {
            return $array->$key;
        }
        foreach ($array as $item) {
            $value = static::pick($item, $key);
            if (!empty($indexKey)) {
                $return[static::pick($item, $indexKey)] = $value;
            } else {
                $return[] = $value;
            }
        }
        return $return;
    }
}