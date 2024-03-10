<?php


namespace Core;

class Session
{

    public static function has($key)
    {
        return (bool) static::get($key);
    }

    public static function put($key, $value)
    {
        $_SESSION[$key] = $value;
    } 

    public static function get($key, $default = null)
    {
       return $_SESSION[$key] ?? $default;
    }

    public static function flash($key, $value)
    {
        // return $_SESSIONS['_flash']['errors'] = $form->errors();

        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash() 
    {
        unset($_SESSION['_flashed']);
    }

}