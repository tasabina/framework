<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 23/03/2018
 * Time: 4:26 PM
 */

namespace app\controllers\admin;


use fw\core\base\View;

class UserController extends AppController
{
    public $layout = 'default';

    public function indexAction(){
        View::setMeta('Admin :: Main page', 'description', 'keywords');
        $test = 'Test arg';
        $data = ['test', '2'];
//        $this->set([
//            'test' => $test,
//            'data' => $data,
//        ]);
        $this->set(compact('test', 'data'));
    }

    public function testAction(){
        $this->layout = 'admin';
    }
}