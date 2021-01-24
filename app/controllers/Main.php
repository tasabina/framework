<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/03/2018
 * Time: 12:05 AM
 */

namespace app\controllers;



class Main extends App
{
    public $layout = 'main';

    public function indexAction()
    {
//        $this->layout = false;
//       $this->layout = 'default';
//       $this->view = 'test';

        $name = 'Sabina';
        $hi = 'Hello';
        
        $this->set(compact('name', 'hi'));
    }

}