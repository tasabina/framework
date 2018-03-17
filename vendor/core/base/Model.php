<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17/03/2018
 * Time: 12:54 PM
 */

namespace vendor\core\base;

use vendor\core\Db;
abstract class Model
{
    protected $pdo;
    protected $table;


    public function __construct()
    {
        $this->pdo = Db::instance();
    }

    public function query($sql){
        return $this->pdo->execute($sql);
    }

    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }
}