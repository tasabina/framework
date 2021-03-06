<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16/03/2018
 * Time: 2:54 PM
 */

namespace vendor\core\base;


class View
{
    public $route = [];

    public $view;

    public $layout;

    public function __construct($route, $layout = '', $view = '')
    {
//        var_dump($layout);
//        var_dump($view);
        $this->route = $route;
        if($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;

    }

    public function render($vars)
    {
        var_dump($vars);
        if(is_array($vars)) extract($vars);
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (is_file($file_view)){
            require $file_view;
        }else{
            echo "<p>Do not find view <b>{$file_view}</b></p>";
        }
        $content = ob_get_clean();
        if (false !== $this->layout){
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)){
                require $file_layout;
            }else{
                echo "<p>Do not find layout <b>{$file_layout}</b></p>";
            }
        }
    }
}