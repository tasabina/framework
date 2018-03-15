<?php

    $query = rtrim($_SERVER['QUERY_STRING'], '/');

    define('WWW',__DIR__);
    define('CORE', dirname(__DIR__) . '/vendor/core');
    define('ROOT', dirname(__DIR__));
    define('APP', dirname(__DIR__) . '/app');

    require '../vendor/core/Router.php';
    require '../vendor/libs/function.php';
//    require '../app/controllers/Main.php';
//    require '../app/controllers/Posts.php';
//    require '../app/controllers/PostsNew.php';

    spl_autoload_register(function ($class){
        $file = APP . "/controllers/$class.php";
        if (is_file($file)){
            require_once $file;
        }

    });
//    Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
//    Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
//    Router::add('', ['controller' => 'Main', 'action' => 'index']);

    Router::add('^pages/?(?P<action>[a-z-]+)?$', ['controller' => 'Posts']);


    Router::add('^$',['controller' => 'Main', 'action' => 'index'] );
    Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

    debug(Router::getRoutes());

    Router::dispatch($query);

    if(Router::matchRoute($query)){
        debug(Router::getRoute());
    }else{
        echo '404';
    }
