<?php

namespace App\Controllers;

//* recurses
use App\Controllers\RulesView\RulesViewController;
use MF\Model\Container;
use MF\Controller\Action;

class indexController extends Action
{
    public function index()
    {
        RulesViewController::getTitle($this, 'Login - Jr Fitness System');

        $this->render('index');
    }

    public function register()
    {
        $user = Container::getModel('User');

        $user->__set('name', $_POST['name']);
        $user->__set('email', $_POST['email']);
        $user->__set('password', md5($_POST['password']));

        if (
            $user->validationRegister() &&
            count($user->getUserEmail()) <= 0
        ) {

            $user->store();

            return $this->render('register');
        }

        $this->view->user = array(
            'name'       =>  $_POST['name'],
            'email'      =>  $_POST['email'],
            'password'   =>  $_POST['password'],
        );

        $this->view->errorRegister = true;

        return $this->render('subscribe');
    }
}
