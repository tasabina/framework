<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16/03/2018
 * Time: 1:06 PM
 */

namespace vendor\core\base;


abstract class Controller
{
    public $route = [];
    public $view;
    public $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function  getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }
}