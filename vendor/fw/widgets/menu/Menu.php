<?php
/**
 * Created by PhpStorm.
 * UserController: Administrator
 * Date: 22/03/2018
 * Time: 10:51 PM
 */

namespace fw\widgets\menu;


use fw\libs\Cache;

class Menu
{

    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    protected $container = 'ul';
    protected $class = 'menu';
    protected $table = 'posts';
    protected $cache = 3600;
    protected $cacheKey = 'fw_menu';
    public function __construct($options = [])
    {
        $this->tpl = __DIR__ . '/menu_tpl/menu.php';
        $this->getOption($options);
        $this->run();
    }

    protected function getOption($options){
        foreach ($options as $k => $v){
            if(property_exists($this, $k)){
                $this->$k = $v;
            }
        }
    }

    protected function output(){
        echo "<{$this->container} class='{$this->class}'>";
            echo $this->menuHtml;
        echo "</{$this->container}>";
    }

    protected function run(){
        $cache = new Cache();
        $this->menuHtml = $cache->get($this->cacheKey);
        if (!$this->menuHtml){
            $this->data = \R::getAssoc("SELECT * FROM {$this->table}");
            $this->tree = $this->getTree();
//        debug($this->data);
            $this->menuHtml = $this->getMenuHtml($this->tree);
            $cache->set($this->cacheKey, $this->menuHtml, $this->cache);
        }

        $this->output();
    }

    protected function getTree(){
        $tree = [];
        $data = $this->data;
        debug($data);
        foreach ($data as $id => &$node){
            if (!$node['title']){
                $tree[$id] = &$node;
            }else{
                $data[$node['title']]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = ''){
        $str = '';
        foreach ($tree as $id => $category){
            $str .=$this->catToTemplate($category, $tab, $id);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab, $id){
        ob_start();
        require $this->tpl;
        return ob_get_clean();

    }

}