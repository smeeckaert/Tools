<?php

namespace Tools;

class Server
{
    public static function uri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}