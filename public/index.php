<?php

    $query = $_SERVER['QUERY_STRING'];

    require '../vendor/core/Router.php';
    require '../vendor/libs/function.php';
    require '../app/controllers/Main.php';
    require '../app/controllers/Posts.php';
    require '../app/controllers/PostsNew.php';

//    Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
//    Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
//    Router::add('', ['controller' => 'Main', 'action' => 'index']);

    Router::add('^$',['controller' => 'Main', 'action' => 'index'] );
    Router::add('(^?p<controller>[a-z-]+)/?(?p<action>[a-z-]+)?$');

    debug(Router::getRoutes());

    Router::dispatch($query);

//    if(Router::matchRoute($query)){
//        debug(Router::getRoute());
//    }else{
//        echo '404';
//    }
