<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 22/03/2018
 * Time: 7:25 PM
 */

namespace fw\core;


trait TSingleton
{
    protected static $instance;

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}