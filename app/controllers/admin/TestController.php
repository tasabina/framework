<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 23/03/2018
 * Time: 4:31 PM
 */

namespace app\controllers\admin;


class TestController extends AppController
{
    public function indexAction(){
        echo __METHOD__;
    }

    public function testAction(){
        echo __METHOD__;
    }
}