<?php

namespace Tools;

class Header
{
    public static function status($code)
    {
        http_response_code($code);
    }
}