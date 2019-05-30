<?php

abstract class Singleton
{
    private static $_instance = null;

    private function __construct()
    {
    }

    protected final function __clone()
    {
    }

    protected final function __wakeup()
    {
    }

    static public function getInstance()
    {
        return is_null(self::$_instance)
            ? new static()
            : self::$_instance;
    }
}