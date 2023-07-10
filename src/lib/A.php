<?php

namespace app;

class A {

    private static $message = 'Привет мир!';

    public static function getValue() {
	return static::$message;
    }

}