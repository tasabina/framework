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
        $post = $model->findOne(12);
        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE text LIKE ?", ['%wo%']);
        $data2 = $model->findLike('of', 'title');
        debug($data2);
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }

}