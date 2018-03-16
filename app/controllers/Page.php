<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16/03/2018
 * Time: 1:14 PM
 */

    namespace app\controllers;


    use vendor\core\base\Controller;

class Page extends Controller
{

    public function viewAction()
    {
        debug($_GET);
        echo 'Page::view()';
    }

}