<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 22/03/2018
 * Time: 9:02 PM
 */

namespace fw\core;


class ErrorHandler
{
    public function __construct()
    {
        if(DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']);
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function errorHandler($errno, $errstr, $errfile, $errline){
        $this->logErrors($errstr, $errfile, $errline);
        if(DEBUG || in_array($errno, [E_USER_ERROR, E_RECOVERABLE_ERROR])){
            $this->displayError($errno, $errstr, $errfile, $errline);
        }
        return true;
    }

    public function fatalErrorHandler(){
        $error = error_get_last();
        $this->logErrors($error['message'], $error['file'], $error['line']);
        if (!empty($error) && $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)){
            ob_end_clean();
            $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
        }else{
            ob_end_flush();
        }
    }

    public function exceptionHandler($e){
        $this->logErrors( $e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    public function logErrors($message = '', $file = '', $line = ''){
        error_log("[" . date('Y-m-d H:i:s')."] Text error: {$message} | File: {$file} | Line: {$line}\n===========================\n",3, ROOT . '/tmp/errors.log');
    }

    public function displayError($errno, $errstr, $errfile, $errline, $response = 500){
        http_response_code($response);
        if($response == 404 && !DEBUG){
            require WWW . '/errors/404.html';
            die;
        }
        if (DEBUG){
            require WWW . '/errors/dev.php';
        }else{
            require WWW . '/errors/prod.php';
        }
        die;
    }
}