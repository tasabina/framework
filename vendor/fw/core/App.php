<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 21/03/2018
 * Time: 11:12 AM
 */

namespace fw\core;

use fw\core\Registry;
use fw\core\ErrorHandler;
class App
{
    public static $app;

    public function __construct()
    {
        session_start();
        self::$app = Registry::instance();
        new ErrorHandler();
    }
}