<?php

namespace App\Singleton;

class Config
{
    private static $_instance;
    private static array $values = [];

    public function __construct()
    {
        self::$values['Frontend'] = 'React';
        self::$values['Backend'] = 'Laravel';
    }

    public static function init(): self
    {
        if (is_null(self::$_instance)) {
            var_dump("init");
            self::$_instance = new self();
        }
        return  self::$_instance;
    }
    public static function getValue(string $key): string
    {
        self::init();
        return self::$values[$key] ?? 'None';
    }
}
