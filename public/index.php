<?php

    use fw\core\Router;


    $query = rtrim($_SERVER['QUERY_STRING'], '/');

    define("DEBUG", 1);
    define('WWW',__DIR__);
    define('CORE', dirname(__DIR__) . '/vendor/fw/core');
    define('ROOT', dirname(__DIR__));
    define('LIBS', dirname(__DIR__) . '/vendor/fw/libs');
    define('APP', dirname(__DIR__) . '/app');
    define('CACHE', dirname(__DIR__) . '/tmp/cache');
    define('LAYOUT', 'default');


    require '../vendor/fw/libs/function.php';
    require __DIR__ . '/../vendor/autoload.php';
//    require '../app/controllers/MainController.php';
//    require '../app/controllers/PostsController.php';
//    require '../app/controllers/PostsNewController.php';
//    require '../vendor/core/Router.php';

//    spl_autoload_register(function ($class){
//        $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
//        $file = APP . "/controllers/$class.php";
//        if (is_file($file)){
//            require_once $file;
//        }
//
//    });

    new \fw\core\App;
//    Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
//    Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
//    Router::add('', ['controller' => 'Main', 'action' => 'index']);

    Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
    Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);

    Router::add('^admin$',['controller' => 'UserController', 'action' => 'index', 'prefix' => 'admin'] );
    Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

    Router::add('^$',['controller' => 'Main', 'action' => 'index'] );
    Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


    Router::dispatch($query);

//    if(Router::matchRoute($query)){
//        debug(Router::getRoute());
//    }else{
//        echo '404';
//    }
