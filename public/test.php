<?php

require 'rb.php';
$db = require '../config/config_db.php';
R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze( TRUE );
R::fancyDebug( TRUE );
var_dump(R::testConnection());

//CREATE

//$cat = R::dispense('category');
//$cat->title = 'Category 3';
//$id = R::store($cat);
//var_dump($id);

//READ

$cat = R::load('posts', 13);
echo $cat->title;
print_r($cat['title']);

//UPDATE

//$cat = R::load('category', 1);
//echo $cat->title . '<br>';
//$cat->title = 'New category';
//R::store($cat);
//echo $cat->title;

//$cat = R::dispense('category');
//$cat->title = 'Category 2';
//$cat->id = 1;
//R::store($cat);

//DELETE

//$cat = R::load('category', 1);
//R::trash($cat);
//R::wipe('category');

//$cat = R::findAll('category', 'title LIKE ?', ['%Cat 2%']);
//echo '<pre>';
//print_r($cat);

//$cat = R::findOne('category', 'id = 2');
//echo '<pre>';
//print_r($cat);
