<?php

class MySingleton
{
    protected static $instance;

    public static function getInstance(): self
    {
        return self::$instance ?? (self::$instance = self::init());
    }

    private static function init(): self
    {
        return new self();
    }

    private function __wakeup()
    {
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}