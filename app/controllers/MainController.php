<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 15/03/2018
 * Time: 12:05 AM
 */

namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPMailer\PHPMailer\PHPMailer;


class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {
//        App::$app->getList();
// create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(ROOT. '/tmp/your.log', Logger::WARNING));

// add records to the log
        $log->warning('Foo');
        $log->error('Bar');

        $mailer = new PHPMailer();
//        var_dump($mailer);

//        $this->layout = false;
//       $this->layout = 'default';
//        $this->view = 'test';
        $model = new Main;
//        trigger_error(E_USER_ERROR, E_RECOVERABLE_ERROR);
//        $posts = \R::findAll('posts');


        $posts = App::$app->cache->get('posts');
        if(!$posts){
            $posts = \R::findAll('posts');
            App::$app->cache->set('posts', $posts);
        }

        echo date('Y-m-d H:i', time());
        echo '<br>';
        echo date('Y-m-d H:i', 1521589527);
//        $post = $model->findOne(12);
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE text LIKE ?", ['%wo%']);
//        $data2 = $model->findLike('of', 'title');
//        debug($data2);
        $title = 'PAGE TITLE';
        View::setMeta('Main Page', 'page description', 'main keywords');
        $this->set(compact('title', 'posts'));
    }

    public function testAction(){
        if($this->isAjax()){
            $model = new Main();
//            $data = ['answer' => 'Otvet', 'code' => 200];
//            echo json_encode($data);
            $post = \R::findOne('posts', "id = {$_POST['id']}");
            $this->loadView('_test', compact('post'));
            die;
        }
        echo 222;
    }

}