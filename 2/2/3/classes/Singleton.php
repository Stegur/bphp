<?php

class Singleton
{
    protected static $_instance;

    public static function init()
    {
        if (isset($_instance)) {
            self::$_instance = self::class;
        }

        return self::class;
    }
}