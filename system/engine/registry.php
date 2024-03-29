<?php
class Registry {
    private static $data = [];

    public static function get($key) {
        return isset( self::$data[$key] ) ? self::$data[$key] : null;
    }

    public static function set($key, $value) {
        self::$data[$key] = $value;
    }
}