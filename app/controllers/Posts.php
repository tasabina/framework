<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/03/2018
 * Time: 12:05 AM
 */

namespace app\controllers;


class Posts extends App
{
    public function indexAction()
    {
        echo 'Posts::index()';
    }

    public function testAction()
    {
        echo 'Posts::test()';
    }

    public function testPageAction()
    {
        echo 'Posts::testPage()';
    }

    public function before()
    {
        echo 'Posts::before()';
    }


}