<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 23/03/2018
 * Time: 4:27 PM
 */

namespace app\controllers\admin;

use fw\core\base\Controller;

class AppController extends Controller
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
        if(!isset($is_admin) || $is_admin !== 1){
            die('Access Denied!');
//            sleep(5);
            header('Location: /fw.loc');
        }
    }
}