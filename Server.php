<?php

namespace FW\Tools;

class Server
{
    public static function uri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}