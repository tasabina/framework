<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/03/2018
 * Time: 12:05 AM
 */

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {
//        $this->layout = false;
//        $this->layout = 'default';
//        $this->view = 'test';
        $model = new Main;
        $posts = $model->findAll();
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }

}