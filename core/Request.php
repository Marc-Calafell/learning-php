<?php
class Request {
    public static function uri(){
        return trim($_SERVER['REQUEST_URI'],'/');
    // laravel
    //    return urldecode($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    }
}