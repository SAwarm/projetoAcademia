<?php

namespace App\Controllers;

//* recurses
use App\Controllers\RulesView\RulesViewController;
use MF\Model\Container;
use MF\Controller\Action;

class LoginController extends Action
{

    public function login()
    {
        echo $_POST['email'];

        echo $_POST['password'];
    }
}
