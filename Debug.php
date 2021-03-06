<?php

namespace FW\Tools {

    class Debug
    {
        public static function dd($data)
        {
            die(static::d($data));
        }

        public static function d($data)
        {
            echo var_dump($data);
        }

        public static function init()
        {
        }

    }
}

namespace {

    use FW\Tools\Debug;

    function d($data)
    {
        return Debug::d($data);
    }

    function dd($data)
    {
        return Debug::dd($data);
    }
}