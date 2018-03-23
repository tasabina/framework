<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 23/03/2018
 * Time: 6:52 PM
 */

namespace app\controllers;


use app\models\User;
use fw\core\base\View;

class UserController extends AppController
{
    public function signupAction(){
        if (!empty($_POST)){
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data) || $user->checkUnique()){
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if($user->save('user')){
                $_SESSION['success'] = 'You have registrated!';
            }else{
                $_SESSION['error'] = 'Error. Leter';
            }
            redirect();
        }
        View::setMeta('Registration');
    }

    public function loginAction(){
        if (!empty($_POST)){
            $user = new User();
            if($user->login()){
                $_SESSION['success'] = 'You was autorizated success ';
            }else{
                $_SESSION['error'] = 'Login/password incorrect';
            }
            redirect();
        }
        View::setMeta('Login');
    }

    public function logoutAction(){
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/user/login');
    }
}